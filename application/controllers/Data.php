<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function moneyFormatter($modifier, $n){
    //if (function_exists('money_format')) {
    //    money_format("%n", $n, )
  //  }
    return number_format($n, 2, ".", ",");
}

class Data extends CI_Controller {

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Pacific/Auckland');

        error_reporting(0);
    }

  	public function index()
  	{
  		  $this->load->view('main');
  	}

    public function factFindPreview(){

        $this->load->view('preview/factfind', array(

        ), false);
    }

    public function titleDropDown($type = null){
        $dataset = array();
        $input = $_GET['term'];

        if ($type == "ff"){
          $sql = "SELECT title FROM transaction WHERE type=? AND title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array("FACT_FIND", $input."%"));
        } else if ($type == "soa"){
          $sql = "SELECT title FROM transaction WHERE type=? AND title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array("SOA", $input."%"));
        } else {
          $sql = "SELECT title FROM transaction WHERE title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array($input.'%'));
        }

        if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              $dataset[] = $r->title;
          }
        }

        echo json_encode($dataset);
    }

    public function descriptionDropDown($type = null){
        $dataset = array();
        $input = $_GET['term'];

        if ($type == "ff"){
          $sql = "SELECT description FROM transaction WHERE type=? AND title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array("FACT_FIND", $input."%"));
        } else if ($type == "soa"){
          $sql = "SELECT description FROM transaction WHERE type=? AND title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array("SOA", $input."%"));
        } else {
          $sql = "SELECT description FROM transaction WHERE title LIKE ? ORDER BY title ASC";
          $query = $this->db->query($sql, array($input.'%'));
        }

        if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              $dataset[] = $r->description;
          }
        }

        echo json_encode($dataset);
    }

    public function searchff(){
        $data = array();

        if ($_GET['t'] == null){
          $sql = "SELECT * FROM transaction WHERE type=? ORDER BY timestamp DESC";
          $query = $this->db->query($sql, array('FACT_FIND'));
        } else if ($_GET['d'] == null){
          $sql = "SELECT * FROM transaction WHERE title LIKE ? AND type=? ORDER BY timestamp DESC";
          $query = $this->db->query($sql, array('%'.$_GET['t'].'%', 'FACT_FIND'));
        } else {
          $sql = "SELECT * FROM transaction WHERE title LIKE ? AND description LIKE ? AND type=? ORDER BY timestamp DESC";
          $query = $this->db->query($sql, array('%'.$_GET['t'].'%', '%'.$_GET['d'].'%', 'FACT_FIND'));
        }


        if ($query->num_rows() > 0){
            foreach($query->result() as $r){
                $item = array();

                $item['id'] = $r->idtransaction;
                $item['timestamp'] = date("l, F j, Y g:i a", $r->timestamp);
                $item['description'] = $r->description;
                $item['title'] = $r->title;

                $data[] = $item;
            }
        }

        echo json_encode($data);
    }

    public function packageFF(){
        $text = $_POST['t'];
        $doc = $_POST['l'];
        $_DATA = $_POST['d'];
        $title = $_POST['ti'];

        $this->load->model('User');
        $sessionID = $this->session->userdata('logged_user');
        $userData = $this->User->getUserInformation($sessionID);

        $this->load->model('FactFind');
        //$this->FactFind->saveData($_DATA, $title, $text, $doc);
        $result = $this->FactFind->saveFFPackage($_DATA, $userData, $doc, $_POST['limited']);

        echo json_encode($result);
    }

    public function package(){
        $this->load->model('SOA');
        $this->load->model('User');

        $result = array();

        if (isset($_POST['a'])){
            $attachments = $_POST['a'];
        } else { $attachments = array(); }


        $result = $this->SOA->savePackage($_POST['d'], $_POST['l'], $this->User, $attachments);
        $result['_input'] = $_POST;

        echo json_encode($result);
    }

    public function illustration(){



        $uploads = array();
        foreach($_FILES as $key=>$file){

            $illustrationName = "illustration_".strtotime(date("Y-m-d H:i:s"));

            $config['upload_path']          = './resource/docs/'; // directory path
            $config['allowed_types']        = 'pdf|doc|docx|png'; // file format
            $config['max_size']             = 986300000; // max file size
            $config['file_name']            = $illustrationName;

            $this->load->library('upload', $config);
            $status = null; $error = null; $link = null;

            $uploaded = $this->upload->do_upload($key);
            if ($uploaded){
                $status = $this->upload->data();
                $link = base_url()."resource/docs/".$status['file_name'];
            } else {
                $error = $this->upload->display_errors();
            }

            $uploads[] = array('success'=>$uploaded, 'data'=>$status, 'error'=>$error, 'link'=>$link, 'input'=>$file);
        }

        echo json_encode($uploads);
    }

    public function generateReasonText(){
        if (isset($_GET['i'])){
          $this->load->model('FactFind');

          $factFindData = $this->FactFind->fetchData($_GET['i']);
          $ffTransactionData = $this->FactFind->fetchTransData($_GET['i']);


          $clientGroup = $factFindData->first->clientInfo->firstname;
          $clientGroup .= $factFindData->first->partnerInfo->firstname == null ? "" : "/".$factFindData->first->partnerInfo->firstname;

          $ageGroup = $factFindData->first->clientInfo->age." years";
          $ageGroup .= $factFindData->first->partnerInfo->firstname == null ? " old" : ", and ".$factFindData->first->partnerInfo->age." years old respectively";

          $dependentCount = count($factFindData->first->children);
          $monthlyIncome = $factFindData->second->simple[10];

          $premium = $_GET['p'];

          $template = $clientGroup.", based on the information you have provided, I have taken into account the fact that you are ".$ageGroup.". You have ".$dependentCount." dependants and are concerned that you have sufficient finances in the event of Death or if you suffer an injury or illness.\n\n";
          $template .= "Financial Circumstances:\nIn assessing your disposable income of approximately $ ".moneyFormatter("%n", $monthlyIncome)." a month, it would appear that on the basis of the information supplied, the monthly premium of $ ".moneyFormatter("%n", $premium)." is within your means.";


         echo $template;
         //print_r($factFindData);
        } else {
          echo "";
        }
    }


    public function ffimport(){

        $this->load->model('FactFind');

        $factFindData = $this->FactFind->fetchData($_GET['i']);
        $ffTransactionData = $this->FactFind->fetchTransData($_GET['i']);

        $html = $this->load->view('documents/soa/p1_preview', array(
          'ff'=>$factFindData, '_trans'=>$ffTransactionData
        ), true);

        echo $html;
    }


    public function fetchSelect($data = null){
        if ($data == "question"){
            $id = $_GET['i'];

            $sql = "SELECT * FROM product_question WHERE idproduct_question=?";
            $query = $this->db->query($sql, array($id));
            if ($query->num_rows() > 0){
                $result = $query->result();
                $item = $result[0];

                echo $item->product_questioncol;
            }
        } else if ($data == "answerlist"){
            $question = $_GET['q']; $ID = $_GET['i'];

            $sql = "SELECT * FROM product_answers
                    WHERE product_question_idproduct_question=?
                    AND product_category_idproduct_category=?";
            $query = $this->db->query($sql, array($question, $ID));

            if ($query->num_rows() > 0){
                echo "<option value='-1'>Select item...</option>";
                foreach($query->result() as $r){
                    $text = $r->answer;
                    if (strlen($text) > 255){
                        $text = substr($text, 0, 255);
                        $text .= "...";
                    }

                    echo "<option value='".$r->idproduct_answers."'>".$text."</option>";
                    //echo "<option value='".$r->idproduct_answers."'>".$r->answer."</option>";
                }
            } else {
                echo "<option value='-1'>Select template</option>";
            }
        } else if ($data == "answer") {
          $id = $_GET['i'];

          $sql = "SELECT * FROM product_answers WHERE idproduct_answers=?";
          $query = $this->db->query($sql, array($id));
          if ($query->num_rows() > 0){
              $result = $query->result();
              $item = $result[0];

              echo $item->answer;
          }
        } else if ($data == "providerans") {
          $id = $_GET['i'];

          $sql = "SELECT * FROM provider_descriptions WHERE company_provider_idcompany_provider=?";
          $query = $this->db->query($sql, array($id));
          if ($query->num_rows() > 0){
              echo "<option value='-1'>Select template</option>";
              foreach($query->result() as $r){
                  echo "<option value='".$r->idprovider_descriptions."'>".$r->description.'</option>';
              }
          }
        }

    }


    public function register(){
        $r = $_POST['reg']; $result = array();

        // Fetch the data inside
        $first_name = $r[0];
        $middle_name = $r[1];
        $last_name = $r[2];
        $mailing_address = $r[3];
        $email = $r[4];
        $phone = $r[5];
        $fspr = $r[6];
        $trading_name = $r[7];
        $username = $r[8];
        $password = $r[9];
        $rep_password = $r[10];

        // Check if username exists...
        $sql = "SELECT username FROM login WHERE username=?";
        $query = $this->db->query($sql, array($username));
        if ($query->num_rows() > 0){
            $result = array(
                'success'=> false, 'message'=>'Username exists. Please specify another username.'
            );
        } else {
            $canContinue = true;
            if ($password != "" and $password != $rep_password) {
                $result = array(
                    'success'=> false, 'message'=>'Password does not match with the second password. Make sure that they are matched.'
                );
            } else {
                // Check if a username was defined.
                if ($username == "") {
                    $username = strtolower($first_name).".".strtolower($last_name);
                }

                // Check if a password was defined.
                if ($password == "") {
                    $input = "abcdefghijklmnopqrstuvwxyz1234567890";
                    for($i=0; $i<8; $i++) {
                      $password .= $input[rand(0, strlen($input)-1)];
                    }
                }

                $data = array(
                    'first_name'=>$first_name, 'middle_name'=>$middle_name, 'last_name'=>$last_name,
                    'email'=>$email, 'fspr_number'=>$fspr, 'address'=>$mailing_address,
                    'trading_name'=>$trading_name, 'telephone_no'=>$phone
                ); $sql = $this->db->insert_string('users', $data);
                $query = $this->db->query($sql);
                $new_user_id = $this->db->insert_id();

                // Find the current company id
                $sql = "SELECT firm_idfirm FROM firm_employees WHERE users_idusers=?";
                $query = $this->db->query($sql, array($this->session->userdata('logged_user')));
                if ($query->num_rows() > 0){
                    $result = $query->result();
                    $item   = $result[0];

                    $data = array('users_idusers'=>$new_user_id, 'firm_idfirm'=>$item->firm_idfirm);
                    $sql = $this->db->insert_string('firm_employees', $data);
                    $query = $this->db->query($sql);
                }

                $data = array('username'=>$username, 'password'=>md5($password), 'users_idusers'=>$new_user_id);
                $sql = $this->db->insert_string('login', $data);
                $query = $this->db->query($sql);

                $message = 'Your new account has been created. Your login details are:<br /><br /><b>Username:</b> '.$username;
                $message .= '<br /><b>Password:</b> '.$password."<br /><br />Please save your credentials in a safe place.";

                $result = array(
                    'newUser'=>$username,
                    'newPass'=>$password,
                    'success'=>true,
                    'message'=> $message
                );
            }
        }

        echo json_encode($result);
    }

    public function revokeUser(){
        $userid = $_POST['id'];

        $sql = "DELETE FROM login WHERE users_idusers=?";
        $query = $this->db->query($sql, array($userid));

        $sql = "DELETE FROM firm_employees WHERE users_idusers=?";
        $query = $this->db->query($sql, array($userid));
    }

    public function setAsAdmin() {
        $userid = $_POST['id'];
        $userid = intval($userid);

        $data = array('admin'=>1); $where = "users_idusers=".$userid;
        $sql = $this->db->update_string("firm_employees", $data, $where);
        $query = $this->db->query($sql);
    }

    public function unsetAsAdmin(){
        $userid = $_POST['id'];
        $userid = intval($userid);

        $data = array('admin'=>0); $where = "users_idusers=".$userid;
        $sql = $this->db->update_string("firm_employees", $data, $where);
        $query = $this->db->query($sql);
    }

}
