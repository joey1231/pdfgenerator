<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct(){
        parent::__construct();
        date_default_timezone_set('Pacific/Auckland');

        error_reporting(0);
    }

	public function login()
	{
		$this->load->view('login', false);
	}

    public function main()
    {
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('dash', array('userData'=>$userData), false);
        } else {

        }

    }

    public function docfinder(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('docfinder', array('userData'=>$userData), false);
        }
    }

    public function account(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/account', array('userData'=>$userData), false);
        }
    }

    public function find(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/find', array('userData'=>$userData), false);
        }
    }

    public function acc(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/acc', array('userData'=>$userData), false);
        }
    }

    public function dashboard(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            // Manually: Get the dashboard data.
            $dashData = array('all'=>0, 'ff'=>0, 'soa'=>0, 'other'=>0);

            $query = $this->db->query("SELECT idtransaction FROM transaction");
            $dashData['all'] = $query->num_rows();

            $query = $this->db->query("SELECT idtransaction FROM transaction WHERE type='FACT_FIND'");
            $dashData['ff'] = $query->num_rows();

            $query = $this->db->query("SELECT idtransaction FROM transaction WHERE type='SOA'");
            $dashData['soa'] = $query->num_rows();

            $query = $this->db->query("SELECT idtransaction FROM transaction WHERE type <> 'FACT_FIND' AND type <> 'SOA'");
            $dashData['other'] = $query->num_rows();


            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/dashboard', array('userData'=>$userData, '_counter'=>$dashData), false);
        }
    }

    public function edit(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){

            $transaction_type = $_GET['t'];
            if ($transaction_type == "SOA"){
                // Show up SOA document
                $sessionID = $this->session->userdata('logged_user');

                $res = $this->load->view('pages/soa/fetchresult.php', array(), true);
                $p1 = $this->load->view('pages/soa/p1.php', array(
                    '_pages'=> array(
                      '_resu'=>$res
                    )
                ), true);

                $p2 = $this->load->view('pages/soa/p2.php', array(), true);
                $p3 = $this->load->view('pages/soa/p3.php', array(), true);
                $p35 = $this->load->view('pages/soa/p35.php', array('_resu'=>$res), true);
                $p4 = $this->load->view('pages/soa/p4.php', array(), true);

                $userData = $this->User->getUserInformation($sessionID);
                $this->load->view('pages/soa', array(
                  'userData'=> $userData,
                  '_pages'=> array(
                      's1'=>$p1, 's2'=>$p2, 's3'=>$p3, 's4'=>$p4, '_resu'=>$res, 's35'=>$p35
                  )
                ), false);

            }
            else if ($transaction_type == "FF"){
                $sessionID = $this->session->userdata('logged_user');


                $sql = "SELECT * FROM transaction AS t
                        LEFT JOIN client_ff_data AS c ON c.transaction_idtransaction=t.idtransaction
                        WHERE t.idtransaction=?";

                $query = $this->db->query($sql, array($_GET['i']));

                if ($query->num_rows() > 0){
                    $results = $query->result();
                    $ffData  = $results[0];

                    // Translate the ffdata
                    $ffRawData = json_decode($ffData->ff_data);
                   //echo "<code>";
                   //print_r($ffRawData);
                   //echo "</code>";

                    $p1 = $this->load->view('pages/edit/factfind/p1.php', array('_data'=>$ffRawData), true);
                    $p2 = $this->load->view('pages/edit/factfind/p2.php', array('_data'=>$ffRawData), true);
                    $p3 = $this->load->view('pages/edit/factfind/p3.php', array('_data'=>$ffRawData), true);
                    $planb = $this->load->view('pages/edit/factfind/planb.php', array('_data'=>$ffRawData), true);
                    $loa = $this->load->view('pages/edit/factfind/loa.php', array('_data'=>$ffRawData), true);
                    $p4 = $this->load->view('pages/edit/factfind/p4.php', array('_data'=>$ffRawData), true);

                    $userData = $this->User->getUserInformation($sessionID);
                    $this->load->view('pages/edit/factfind', array(
                      'userData'=>$userData,
                      '_pages'=>array(
                          's1'=>$p1, 's2'=>$p2, 's3'=>$p3, 's4'=>$p4, 'loa'=>$loa, 'planb'=>$planb
                      )

                    ), false);
                } else {

                }

            }
        }
    }

    public function factfind(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $p1 = $this->load->view('pages/factfind/p1.php', array(), true);
            $p2 = $this->load->view('pages/factfind/p2.php', array(), true);
            $p3 = $this->load->view('pages/factfind/p3.php', array(), true);
            $planb = $this->load->view('pages/factfind/planb.php', array(), true);
            $loa = $this->load->view('pages/factfind/loa.php', array(), true);
            $p4 = $this->load->view('pages/factfind/p4.php', array(), true);


            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/factfind', array(
              'userData'=>$userData,
              '_pages'=>array(
                  's1'=>$p1, 's2'=>$p2, 's3'=>$p3, 's4'=>$p4, 'loa'=>$loa, 'planb'=>$planb
              )

            ), false);
        }
    }

    public function soa(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $res = $this->load->view('pages/soa/fetchresult.php', array(), true);
            $p1 = $this->load->view('pages/soa/p1.php', array(
                '_pages'=> array(
                  '_resu'=>$res
                )
            ), true);

            $p2 = $this->load->view('pages/soa/p2.php', array(), true);
            $p3 = $this->load->view('pages/soa/p3.php', array(), true);
            $p35 = $this->load->view('pages/soa/p35.php', array('_resu'=>$res), true);
            $p4 = $this->load->view('pages/soa/p4.php', array(), true);

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/soa', array(
              'userData'=> $userData,
              '_pages'=> array(
                  's1'=>$p1, 's2'=>$p2, 's3'=>$p3, 's4'=>$p4, '_resu'=>$res, 's35'=>$p35
              )
            ), false);
        }
    }

    public function recom(){
        $this->load->view('pages/soa/recom');
    }

    public function document(){
        $this->load->model('User');
        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');

            $userData = $this->User->getUserInformation($sessionID);
            $this->load->view('pages/document', array('userData'=>$userData), false);
        }
    }

    public function company(){
        $this->load->model('User');
        $this->load->model('Firm');

        if ($this->session->has_userdata('logged_user')){
            $sessionID = $this->session->userdata('logged_user');
            $userData = $this->User->getUserInformation($sessionID);

            $userData = $this->User->getUserInformation($userData['info']->idusers);
            $employees = $this->Firm->getAllEmployees($userData['info']->idusers);
            $this->load->view('pages/company', array('userData'=>$userData, 'empList'=>$employees), false);
        }
    }



}

