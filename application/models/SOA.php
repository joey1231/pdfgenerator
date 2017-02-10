<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SOA extends CI_Model {

    public $_expensesItems = array(
        'Tax'=> array(
          "Income Tax","Other Tax"
        ),
        'Debt'=> array(
          "Mortgage","Rental Payments","Car Loan","Personal Loans","Student Loans","Hire Purchase","Credit Cards","Overdraft","Other"
        ),
        'Household' => array(
          "Maintenance","Gas","Water","Electricity","Telephone","Mobile Phone","TV"
        ),
        'Vehicles' => array(
          "Petrol","Repairs","Maintenance"
        ),
        'Food' => array(
          "Groceries","Dining Out"
        ),
        'Insurance' => array(
          "Life Insurance","Health","Home and Contents","Vehicles","Other"
        ),
        'Healthcare' => array(
          "Doctor","Dentist","Optical","Pharmaceutical"
        ),
        'Personal Care' => array(
          "Clothing","Dry Cleaning","Hairdressing","Cosmetics","Hygiene"
        ),
        'Entertainment' => array(
          "Memberships","Holidays","Sports","Movies, DVD’s"
        )
    );
    public $__needsList = array(
      'liabilitiesclear'=> 'Liabilities to Clear',
      'futureexp'=> 'Future Expenditure Required',
      'futureeduc'=> 'Future Education Expense',
      'medcost'=> 'Medical Costs/Recovery Income',
      'provtax'=> 'Provision for Tax',
      'otherprovs'=> 'Other Provisions',
      'others'=> 'Other',
      'totalcapreq'=> 'Total Capital Required',
      'disposableassets'=> 'Disposable Assets',
      'continuingincome'=> 'Continuing Income',
      'totalCapAvail'=> 'Total Capital Available',
      'totalCoveredRequired'=> 'Total Covered Required',
      'existingcover'=> 'Existing Cover',
      'surplus'=> 'Surplus/Shortfall'
    );

    public function saveData($_DATA, $title, $description, $document, $_userData){

        // Create transaction first!
        $data = array(
            'timestamp' => strtotime(date("Y-m-d H:i:s")),
            'description' => $description,
            'title' => $title,
            'type' => 'SOA'
        ); $sql = $this->db->insert_string('transaction', $data);

        $query = $this->db->query($sql);
        $transaction_id = $this->db->insert_id();
        // Connect to the document!
        //$sessionID = $this->session->userdata('logged_user');
        //print.
        $user_transacted = $_userData['info']->idusers;

        $data = array(
            'actual_link'=>$document,
            'timestamp'=>strtotime( date("Y/m/d H:i:s") ),
            'users_idusers'=>$user_transacted,
            'transaction_idtransaction'=>$transaction_id
        ); $sql = $this->db->insert_string('document', $data);
        $query = $this->db->query($sql);

    }

    public function savePackage($_data, $_soaLink_i, $_userObj, $attachments){
        $result = array(); $__success = true; $__message = null;

        $file__ff = null;
        $file__soa = null;
        $acc_file = null;
        $attachment_files = array();

        $sql = "SELECT * FROM transaction AS t
                LEFT JOIN document AS d ON d.transaction_idtransaction=t.idtransaction
                LEFT JOIN client_ff_data AS cfd ON cfd.transaction_idtransaction=t.idtransaction
                WHERE t.idtransaction=?";

        $query = $this->db->query($sql, array($_data['import']));
        if ($query->num_rows() > 0){

          $ff_data = null;
          $client = null; $partner = null;

          $ff_document_link = null;
          foreach($query->result() as $invovled){
              $ff_data = json_decode($invovled->ff_data);
              $ff_document_link = $invovled->actual_link;
          }

          // Fetching FF Document
          if ($ff_document_link == null){
              $__success = false;
              $__message = "Has no FF document.";
          }
          else {

              $ff_document_link = ACTUAL_FILE_PREFIX_SAVING . strstr($ff_document_link,'document-');

              $file__ff = file_get_contents( $ff_document_link );

              if ($file__ff === false || $file__ff === null){
                  $__success = false;
                  $__message = "Can't open FF document.";
              }
          }

          // Fetching SOA Document
          if ($__success){
              if ($_soaLink_i == null)
              {
                  $__success = false;
                  $__message = "Has no SOA document.";
              } else {

                $_soaLink_i = ACTUAL_FILE_PREFIX_SAVING . strstr($_soaLink_i,'document-');

                $file__soa = file_get_contents($_soaLink_i);
                if ($file__soa == false or $file__soa == null){
                    $__success = false; $__message = "Can't open FF document.";
                }

              }
          }

          // Fetching ACC form
          if ($__success){
              $sessionID = $this->session->userdata('logged_user');
              $userData = $_userObj->getUserInformation($sessionID);
              $company = $userData['company']->idfirm;

              $result['a'] = $userData;

    					if ($company == "3" or $company == 3){
    							$acc_file = file_get_contents("resource/atp_jdlife_template.pdf");
    					} else if ($company == "2" or $company == 2){
    							$acc_file = file_get_contents("resource/atp_eliteinsure_template.pdf");
    					}
          }

          // Fetch the attachments
          foreach($attachments as $attched_url){
              if (preg_match("/(resource\/docs\/illustration_[A-z0-9 -\/]+.pdf)/", $attched_url, $matches)){
                  foreach($matches as $match){ $ff_document_link = $match; }
              } else { $ff_document_link = null; }

              $attached_file = file_get_contents($ff_document_link);
              if ($attached_file == false or $attached_file == null){ $__success = false; $__message = "Can't open attached document."; }
              else {
                  $attachment_files[] = $attached_file;
              }
          };

          // Save the transaction
          if ($__success){

              $trans_title = ""; $trans_description = $ff_data->first->clientInfo->firstname;
              if ($ff_data->first->partnerInfo->firstname != null){
                $trans_description .= " and ".$ff_data->first->partnerInfo->firstname;
              }

              if (substr($trans_description, -1) == "s" or substr($trans_description, -1) == "S"){
                  $trans_description .= "'";
              } else { $trans_description .= "'s"; }
              $trans_description .= " packaged documents.";

              $trans_data = array(
                  'timestamp'=>strtotime(date("Y-m-d H:i:s")),
                  'title'=>$trans_title,
                  'description'=>$trans_description,
                  'type'=>"PACKAGE"
              ); $sql = $this->db->insert_string("transaction", $trans_data);
              $query = $this->db->query($sql);
              $transaction_ID = $this->db->insert_id();
              $old_trans_data = $trans_data;

              $full_url_link = ""; //base_url()."resource/packages";
              $trans_data = array(
                  'timestamp'=>strtotime(date("Y-m-d H:i:s")),
                  'actual_link'=>$full_url_link,
                  'transaction_idtransaction'=>$transaction_ID,
                  'users_idusers'=>$userData['info']->idusers,
              ); $sql = $this->db->insert_string("document", $trans_data);
              $query = $this->db->query($sql);
              $document_ID = $this->db->insert_id();



              $full_trans_ID = sprintf("%08d", $transaction_ID);

              $ff_data->first->clientInfo->surname = str_replace(" ", "", $ff_data->first->clientInfo->surname); //$ff_data->first->partnerInfo->firstname
              $ff_data->first->clientInfo->first_name = str_replace(" ", "", $ff_data->first->clientInfo->firstname);
              $trans_title = $full_trans_ID."_".$ff_data->first->clientInfo->surname."_".$ff_data->first->clientInfo->firstname;
              $trans_data = array('title'=>$trans_title);
              $sql = $this->db->update_string('transaction', $trans_data, "idtransaction=".$transaction_ID);
              $query = $this->db->query($sql);

              // Write the files!
              $zip = new ZipArchive();
              $zip_file = "resource/packages/".$trans_title.".zip";

              if ($zip->open($zip_file, ZipArchive::CREATE) !== TRUE) {
                  $__success = false;
              } else {

/*
                  if ($acc_file != null){ $zip->addFromString($trans_title."_ATP.pdf", $acc_file); }
                  if ($file__soa != null){ $zip->addFromString($trans_title."_SOA.pdf", $file__soa); }
                  if ($file__ff != null){ $zip->addFromString($trans_title."_FF.pdf", $file__ff); }
*/
                  if ($acc_file != null){ $zip->addFromString("Your ATP.pdf", $acc_file); }
                  if ($file__soa != null){ $zip->addFromString("Your Insurance Plan.pdf", $file__soa); }
                  if ($file__ff != null){ $zip->addFromString("Insurance Planner.pdf", $file__ff); }
                  $cunt = 1; foreach($attachment_files as $af){
                       $zip->addFromString($trans_title."_illustration_".$cunt.".pdf", $af); $cunt++;
                  }

                  $zip->close();

                  $trans_data = array('actual_link'=> base_url().$zip_file);
                  $sql = $this->db->update_string('document', $trans_data, "iddocument=".$document_ID);
                  $query = $this->db->query($sql);

                  $result['info'] = array(
                      'timestamp'=> date("F j, Y h:i:s A", $old_trans_data['timestamp']),
                      'title'=>$trans_title,
                      'trans_id'=>$full_trans_ID,
                      'link'=> base_url().$zip_file
                  );
              }
          }

        } else { $__success = false; $__message = "Has no transaction."; }

        $result['success'] = $__success;
        $result['message'] = $__message;
        return $result;
    }

}

