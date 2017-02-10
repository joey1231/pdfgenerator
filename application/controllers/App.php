<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Pacific/Auckland');

        error_reporting(0);
    }

	public function index()
	{
		$this->load->view('main');
	}

    public function session(){
        $data = array();

        if ($this->session->has_userdata('logged_user')){
            $data['hasLoggedIn'] = true;
            $data['pageLink'] = base_url()."index.php/pages/main";
        } else {
            $data['hasLoggedIn'] = false;
            $data['pageLink'] = base_url()."index.php/pages/login";
        }


        echo json_encode($data);
    }


    public function changePassword(){
        if (isset($_POST['f'])){

            if ($this->session->has_userdata('logged_user')){

                $this->load->model('User');
                $data = $_POST['f'];

                $sessionID = $this->session->userdata('logged_user');
                if (!$this->User->isPasswordCorrect($sessionID, $data[0])){
                    echo json_encode(array(
                        'message'=>"Wrong password. Please enter your old password.", 'success'=>false
                    ));
                } else if ($data[1] != $data[2]) {
                    echo json_encode(array(
                        'message'=>"New password must be matched!", 'success'=>false
                    ));
                } else {

                    if ($data[1] == ""){
                        echo json_encode(array(
                            'message'=>"Please enter your new password", 'success'=>false
                        ));
                    } else if ($data[2] == ""){
                        echo json_encode(array(
                            'message'=>"Please repeat your new password", 'success'=>false
                        ));
                    } else {
                        $s = $this->User->changePassword($sessionID, $data[1]);
                        echo json_encode(array(
                            'message'=>"Password has been successfully changed!", 'success'=>true
                        ));
                    }

                }

            } else {
                echo json_encode(array(
                    'message'=>"NO session logged in.", 'success'=>false
                ));
            }

        } else {
            echo json_encode(array(
                'message'=>"Please enter parameters", 'success'=>false
            ));
        }
    }

    public function changeCompanyInformation(){
        if (isset($_POST['f'])){

            if ($this->session->has_userdata('logged_user')){

                $this->load->model('Firm');
                $data = $_POST['f'];

                $sessionID = $this->session->userdata('logged_user');
                $companyID = $this->Firm->getCompanyIDViaUserID($sessionID);

                $this->Firm->updateInformation
                    ($data[0], $data[1], $data[2], $data[3], $data[4], $data[7], $data[5], $data[6], $companyID);


                echo json_encode(array(
                    'message'=>"Company Information has been successfully updated!", 'success'=>true
                ));


            } else {
                echo json_encode(array(
                    'message'=>"NO session logged in.", 'success'=>false
                ));
            }

        } else {
            echo json_encode(array(
                'message'=>"Please enter parameters", 'success'=>false
            ));
        }
    }

    public function changeUserInformation(){
        if (isset($_POST['f'])){

            if ($this->session->has_userdata('logged_user')){

                $this->load->model('User');
                $data = $_POST['f'];

                $sessionID = $this->session->userdata('logged_user');
                // Check the username first, if it's just the same with given thing
                if (!$this->User->isThisMyUsername($sessionID, $data[4])){
                    // Check if the given username exists...
                    if ($this->User->isUsernameExists($data[4])){
                        echo json_encode(array(
                            'message'=>"Username ".$data[4]." already exists. Please select another username",
                            'success'=>false
                        )); return;
                    } else {
                        // Change it!
                        $this->User->changeUsername($sessionID, $data[4]);
                    }
                }


                // Then, change the other things!
                $this->User->editUserInformation($sessionID, $data[2], $data[0], $data[1], $data[3]);
                echo json_encode(array(
                    'message'=>"Account information has been successfully updated!", 'success'=>true
                ));


            } else {
                echo json_encode(array(
                    'message'=>"NO session logged in.", 'success'=>false
                ));
            }

        } else {
            echo json_encode(array(
                'message'=>"Please enter parameters", 'success'=>false
            ));
        }
    }


    public function auth(){

        $this->load->model('User');
        $userID = $this->User->getUserIDFromCredentials($_POST['u'], md5($_POST['p']));
        if ($userID >= 0){
            $this->session->set_userdata('logged_user', $userID);

            $result = array(
                'status'=>true
            ); echo json_encode($result);
        } else {
            $result = array(
                'status'=>false, 'message'=>'We can\'t find your username/password. Please try again.'
            ); echo json_encode($result);
        }

    }

    public function logout(){
        $this->session->unset_userdata('logged_user');
    }


    public function factFindResult(){

    }


}


?>
