<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('money_format')) {

    function money_format($modifier, $n){
        return number_format($n, 2, ".", ",");
        //return sprintf('%01.2f', $n);
    }

}

function moneyFormatter($modifier, $n){
    //if (function_exists('money_format')) {
    //    money_format("%n", $n, )
    //  }
    return number_format($n, 2, ".", ",");
}

class Document extends CI_Controller {

    function __construct(){
        parent::__construct();

        date_default_timezone_set('Pacific/Auckland');
        // error_reporting(E_ALL);
        error_reporting(0);
    }

    public function ediwow(){

      $query = $this->db->query("SELECT * FROM provider_descriptions");
      foreach($query->result() as $r){
          echo $r->description;
          echo "<br />";echo "<br />";
      }

    }

    public function save($document = null){
        if ($document == "ff"){
            $text = $_POST['t'];
            $doc = $_POST['l'];
            $_DATA = $_POST['d'];
            $title = $_POST['ti'];

            $this->load->model('User');
            $sessionID = $this->session->userdata('logged_user');
            $userData = $this->User->getUserInformation($sessionID);

            $this->load->model('FactFind');
            //$this->FactFind->saveData($_DATA, $title, $text, $doc);
            $this->FactFind->save($_DATA, $title, $text, $doc, $userData);

        } else if ($document == "soa"){
            $text = $_POST['t'];
            $doc = $_POST['l'];
            $_DATA = $_POST['d'];
            $title = $_POST['ti'];

            $this->load->model('User');
            $sessionID = $this->session->userdata('logged_user');
            $userData = $this->User->getUserInformation($sessionID);

            $this->load->model('SOA');
            $this->SOA->saveData($_DATA, $title, $text, $doc, $userData);
            //$this->FactFind->saveData($_DATA, $title, $text, $doc);
        }
    }

    public function search(){
        $this->load->model("User");

        $desc  = $_GET['de'];
        $title = $_GET['t'];
        $date  = $_GET['da'];
        $type  = $_GET['ty'];

        $descriptions = array();
        $dataset = array();

        if ($desc != null){ $descriptions[] = "t.description LIKE ?"; $dataset['description'] = $desc; }
        if ($title != null){ $descriptions[] = "t.title LIKE ?"; $dataset['title'] = $title; }
        if ($type != "0" or $type != 0){
            $descriptions[] = "t.type=?";

            if ($type == "1" or $type == 1){
                $dataset['type'] = "FACT_FIND";
            } else if ($type == "2" or $type == 2){
                $dataset['type'] = "SOA";
            }


        }
        if ($date != null){
          $descriptions[] = "t.timestamp BETWEEN ? AND ?";
          $dataset['dates'] = array(
            strtotime($date." 00:00:00"),
            strtotime($date." 23:59:59")
          );
        }

        $sql = "SELECT * FROM transaction AS t
                LEFT JOIN document AS d ON d.transaction_idtransaction=t.idtransaction ";

        //  update the searching by username. if username is admin, then it can view all of
        //    documents from their own company. Otherwise, it can view its own document.
        $sessionID = $this->session->userdata('logged_user');
        $userData = $this->User->getUserInformation($sessionID);

        if ($userData['admin'] == 1){
            $sql .= " LEFT JOIN firm_employees AS fe ON fe.users_idusers=d.users_idusers ";
            //$sql .= " WHERE fe.firm_idfirm=".$userData['company']->firm_idfirm." ";
        } else {
            $myUserID = $userData['info']->idusers;
            //$sql .= " WHERE d.users_idusers = ". $myUserID ." ";
            // $finalSet[] = $userData['info']->idusers;
        }


        $i=0; $finalSet = array(); $first = true;
        foreach($dataset as $dataKey => $dataValue){
            if (is_array($dataValue)){
                foreach($dataValue as $d){
                  $finalSet[] = $d;
                }
            } else {
                if ($dataKey == "description" or $dataKey == "title"){
                    $finalSet[] = "%".$dataValue."%";
                } else {
                    $finalSet[] = $dataValue;
                }
            }

            $textDescription = $descriptions[$i];
            if ($first){
              $first = false;
              $sql .= "WHERE ";
            } else {
              $sql .= "AND ";
            }

            $sql .= $textDescription." ";
            $i++;
        }

        
        if ($userData['admin'] == 1){
            //$sql .= " LEFT JOIN firm_employees AS fe ON fe.users_idusers=d.users_idusers ";
            $sql .= " AND fe.firm_idfirm IN (".$userData['company']->firm_idfirm.",1) ";
        } else {
            $myUserID = $userData['info']->idusers;
            $sql .= " AND d.users_idusers = ". $myUserID ." ";
            //$finalSet[] = $userData['info']->idusers;
        }
        

        $sql .= " ORDER BY t.timestamp DESC";

        //echo "<pre>";
        //print_r($finalSet);
        //echo $sql;
        //echo "</pre>";

        $query = $this->db->query($sql, $finalSet);


        // Start here
        if ($query->num_rows() > 0){

          echo '<table id="example" class="display table" style="width: 100%; cellspacing: 0;">';
          echo "<thead style='display:none'>
              <tr>
                  <th style='width:80%'>Name</th>
                  <th style='width:20%'>Position</th>
              </tr>
          </thead>";

          echo "<tfoot style='display:none'>
              <tr>
                  <th>Name</th>
                  <th>Position</th>
              </tr>
          </tfoot>";

          echo "<tbody>";

          foreach($query->result() as $r){
              echo "<tr style='background-color:transparent'>";
              echo "<td width='80%' style='background-color:transparent'>";
                  if ($r->title == null){
                      echo "<h3 style='margin-top:5px;margin-bottom:5px'><i>(No title specified)</i></h3>";
                  } else {
                      echo "<h3 style='margin-top:5px;margin-bottom:5px'>".$r->title."</h3>";
                  }

                  $type = "Document"; if ($r->type == "FACT_FIND"){
                    $type = "Insurance Planner";
                  } else if ($r->type == "SOA"){
                    $type = "Statement of Advice";
                  } else if ($r->type == "PACKAGE"){
                    $type = "Document Package";
                  }

                  echo "<small>".date("M d, Y - h:i A", $r->timestamp)." - ".$type."</small><br /><br />";
                  echo "<p>".$r->description."</p>";
              echo "</td>";
              echo "<td width='20%' style='background-color:transparent'>";

                if ($r->actual_link == null){
                    echo '<button type="button" class="btn btn-default btn-block disabled">File Not Available</button>';
                } else {
                    if ($r->type == "PACKAGE"){
                        echo '<button type="button" data-type="zip" class="btn btn-primary btn-block open-doc" data-target="'.$r->actual_link.'">Download Package</button>';
                    } else {
                        echo '<button type="button" data-type="pdf" class="btn btn-primary btn-block open-doc" data-target="'.$r->actual_link.'">View Document</button>';

                        if ($r->type == "SOA"){
                            $editType = "SOA";
                        } else {
                            $editType = "FF";
                        }

                        echo '<button type="button" data-type="pdf" class="btn btn-info btn-block edit-doc" data-target="'.$r->actual_link.'" data-edit-type="'.$editType.'" data-trans-id="'.$r->idtransaction.'">Edit Document</button>';
                    }

                }

                //echo $r->actual_link;

              echo "</td>";
              echo "</tr>";
        }
        echo "</tbody>";


        echo "</table>";

        echo "<script>$(document).ready(function(){
          $('#example').dataTable({
            'pageLength': 15,
            'bFilter': false,
            'bLengthChange': false,
            'aaSorting':[]
          });
          $('.open-doc').click(function(){
            var url = $(this).attr('data-target');
            var type = $(this).attr('data-type');

            if (type == 'zip'){
              window.open(url, '_self');
            } else if (type == 'pdf'){
              var html = '<iframe width=\"100%\" height=\"500\" src=\"'+url+'\"></iframe>';
              $('#preview-dialog').find('.modal-body').html(html);
              $('#preview-dialog').modal('show');
            }
          });

          $('.edit-doc').click(function(){
              var editType = $(this).attr('data-edit-type');
              var transID  = $(this).attr('data-trans-id');

              var loadingMessage = '<div class=".'"page-title"'."><h3>Loading page... Please wait...</h3></div>';
              $('#document-generator-pane').hide('fade', 250, function(){
                  $('#document-generator-pane').html(loadingMessage).show('fade', 250);

                  var _link = '".base_url()."index.php/Pages/edit';
                  $.ajax({
                     url:_link, data: { i:transID, t:editType }, success: function(data){

                         $('#document-generator-pane').hide('fade', 0, function(){
                            $('#document-generator-pane').html(data).show('fade', 250);
                         });
                     }, error: function(){

                     }
                });
              });

          });

        });</script>";
        } else {
          echo "<h4>Sorry. No search results found.</h4>";
        }

    }

    public function disclosureStatement(){
        $this->load->model('User');
        $sessionID = $this->session->userdata('logged_user');
        $userData = $this->User->getUserInformation($sessionID);

        $compann = null;
        $this->load->library('Pdf', array('company'=>$compann));
        $this->pdf->company = $userData['company'];

        $html = $this->load->view('documents/factfind/disclosure', array(
          //'data' => $_POST['d'],
          '_user'=> $userData, //'info'=>$json
        ), true);
        $this->pdf->AddPage(); // add a page
        $this->pdf->writeHTMLCell(187, 300, 12, 5, $html, 0, 0, false, true, '', true);

        $document_title = "document-".date("Ymd-His-U");
        $this->pdf->SetTitle($document_title);

        $actual_file = ACTUAL_FILE_PREFIX_SAVING."disclosure.pdf";
        $this->pdf->Output($actual_file, 'I');
    }
    
    private function limitedAdviceTransacions($post) {

        ob_start();
        set_time_limit(300);
        $this->load->model('User');

        $sessionID = $this->session->userdata('logged_user');
        $userData = $this->User->getUserInformation($sessionID);

        //$this->load->library('Pdf', array('company'=>null, 'fspr'=>"FSPR"));

        $pdf = new Pdf(array('company'=>null, 'fspr'=>"FSPR"));

        $pdf->company = $userData['company'];
        $pdf->fspr_number = $userData['info']->fspr_number;

        $html = $this->load->view('documents/factfind/limited_advice', array(
            'data' => $post['d'], '_user'=> $userData
        ), true);
       $pdf->AddPage(); // add a page
       $pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);
       $actual_file = ACTUAL_FILE_PREFIX_SAVING."limited-advice-transactions.pdf";
       $pdf->Output($actual_file,"F");

    }

    public function preview($document = null){
        ob_start(); $link = ""; set_time_limit(300);
        $this->load->model('User');

        if ($document == "factfind")
        {

          $sessionID = $this->session->userdata('logged_user');
          $userData = $this->User->getUserInformation($sessionID);

          $compann = null;

          //if (isset($_GET['c'])){ $compann = $_GET['c']; }
          $this->load->library('Pdf', array('company'=>$compann, 'fspr'=>"FSPR"));
          //$this->pdf->company = $userData['company']->firm_name;
          $this->pdf->company = $userData['company'];
          $this->pdf->fspr_number = $userData['info']->fspr_number;

          $document_title = "document-".date("Ymd-His-U")." ";

          // <CLIENT LNAME>, <CLIENT FNAME>
          // if has partner: and <PARTNER LNAME>, <PARTNER FNAME>
          // - Insurance Planner <DAY>.<MON>.<YEAR>
          $hasPartner = $_POST['d']['first']['partnerInfo']['firstname'] != null;

          $clientName = $_POST['d']['first']['clientInfo']['firstname'];
          $clientLast = $_POST['d']['first']['clientInfo']['surname'];
          $document_title .= $clientLast.", ".$clientName." ";
          if ($hasPartner) {
              $partnerName = $_POST['d']['first']['partnerInfo']['firstname'];
              $partnerLast = $_POST['d']['first']['partnerInfo']['surname'];

              $document_title .= "and ";
              $document_title .= $partnerLast.", ".$partnerName." ";
          }

          $document_title .= "- Insurance Planner ";
          $document_title .= date("d.m.y");

          $this->pdf->SetTitle($document_title);

          $json = json_decode($_POST['s']);
          //$json = null;

          // TITLE PAGE

          $html = $this->load->view('documents/factfind/title', array(
            'data' => $_POST['d'],
            //'data' => $json,
            '_user'=> $userData, //'info'=>$json
          ), true);
          $this->pdf->AddPage(); // add a page

          $this->pdf->writeHTMLCell(187, 300, 12, 5, $html, 0, 0, false, true, '', true);


          //
          //  Part 1
          //
          $html = $this->load->view('documents/factfind/clientInfo', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = 2; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

          if ($hasPartner){
              $html = $this->load->view('documents/factfind/partnerInfo', array(
                'data' => $_POST['d'], '_user'=> $userData
              ), true); $this->pdf->AddPage(); // add a page
              $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

              $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
              $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
              for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };
          }

          $html = $this->load->view('documents/factfind/childAdvisers', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };


          //
          //  Part 2
          //
          if ($_POST['d']['second']['mode'] == "0"){
            $html = $this->load->view('documents/factfind/fin_simple', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

            $html = $this->load->view('documents/factfind/fin_simple_al', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

          }
          else
          {

            $html = $this->load->view('documents/factfind/fin_income', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

            $html = $this->load->view('documents/factfind/fin_expense', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

            $html = $this->load->view('documents/factfind/fin_assets', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

            $html = $this->load->view('documents/factfind/fin_liabs', array(
              'data' => $_POST['d'], '_user'=> $userData
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };
          }




          $html = $this->load->view('documents/factfind/fin_goals', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

          /* $html = $this->load->view('documents/factfind/fin_estate', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); }; */

          $html = $this->load->view('documents/factfind/fin_health', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

          //
          //  Existing Insurances
          //
          $html = $this->load->view('documents/factfind/existing_insurances', array(
            'data' => $_POST['d'], '_user'=> $userData, '_owner'=>'client'
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };


          //
          //  The pLan B's
          //
          $html = $this->load->view('documents/factfind/p_b_client', array(
            'data' => $_POST['d'], '_user'=> $userData, '_owner'=>'client'
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

          if ($hasPartner){
            $html = $this->load->view('documents/factfind/p_b_client', array(
              'data' => $_POST['d'], '_user'=> $userData, '_owner'=>'partner'
            ), true); $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };
          }
          
          
          // LIMITED ADVICE TRANSACTIONS
          if ( $_POST['d']['fourth']['limitations']['hasLimits'] == 'yes' ) $this->limitedAdviceTransacions($_POST);


          //
          //  Part 4
          //
          $html = $this->load->view('documents/factfind/p4', array(
            'data' => $_POST['d'], '_user'=> $userData
          ), true); $this->pdf->AddPage(); // add a page
          $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

          $oldCurrentPages = $currentTotalPages + 1; $currentTotalPages = $this->pdf->getNumPages();
          $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
          for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };



          //$actual_file = '/Applications/MAMP/htdocs/bugtick/pdfgenerator/PDFGenerator/resource/docs/'.$document_title.'.pdf';
          //$actual_file = '/Users/scalaberch/www/bugtick/client/PDFGenerator/resource/docs/'.$document_title.'.pdf';
          //$actual_file = '/home/worth912/public_html/pdfgenerator.jdlife.co.nz/developer/resource/docs/'.$document_title.'.pdf';

          $actual_file = ACTUAL_FILE_PREFIX_SAVING.$document_title.".pdf";
          //$this->pdf->Output($actual_file, 'I');
          $this->pdf->Output($actual_file, 'F');

          $link = base_url()."resource/docs/".$document_title.'.pdf';
          $discl = base_url()."index.php/Document/disclosureStatement";

          // Create a new document for the letter of authority...
          $loaLink = "";

          if ($_POST['d']['fourth']['loa'] == "yes"){
              $currentTotalPages = $this->pdf->getNumPages();

              for($i=0; $i<$currentTotalPages; $i++){
                  $this->pdf->deletePage($i);
              }

              $this->pdf->SetTitle($document_title."_loa");
              $this->pdf->SetFont('helvetica', 'I', 8);


              $html = $this->load->view('documents/factfind/loa', array(
                'data' => $_POST['d'], '_user'=> $userData
              ), true); $this->pdf->AddPage(); // add a page

              //echo $html;

              $this->pdf->setPage(1); $this->pdf->AddPage(); // add a page
              $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);
              $actual_file = ACTUAL_FILE_PREFIX_SAVING.$document_title."_loa.pdf";
              $this->pdf->Output($actual_file, 'F');

              $loaLink = base_url()."resource/docs/".$document_title.'_loa.pdf';
          }

          ob_end_clean(); 
          if ( $_POST['d']['fourth']['limitations']['hasLimits'] == 'yes' ) echo json_encode(array( 'filename'=>$link, 'disclosure'=>$discl, 'loa'=>$loaLink, 'limited'=>base_url()."resource/docs/limited-advice-transactions.pdf" ));
          if ( $_POST['d']['fourth']['limitations']['hasLimits'] == 'no' ) echo json_encode(array( 'filename'=>$link, 'disclosure'=>$discl, 'loa'=>$loaLink, 'limited'=>"na" ));

        }
        else if ($document == "soa")
        {
            $sessionID = $this->session->userdata('logged_user');
            $userData = $this->User->getUserInformation($sessionID);

            $compann = null;

            $this->load->library('Pdf', array('company'=>$compann, 'fspr'=>"FSPR"));
            $this->pdf->company = $userData['company'];
            $this->pdf->fspr_number = $userData['info']->fspr_number;

            $document_title = "document-".date("Ymd-His-U");

            // <CLIENT LNAME>, <CLIENT FNAME>
            // if has partner: and <PARTNER LNAME>, <PARTNER FNAME>
            // - Insurance Planner <DAY>.<MON>.<YEAR>
            //$hasPartner = $_POST['d']['first']['partnerInfo']['firstname'] != null;
            $hasPartner = $_POST['d']['partnerFirstname'] != null;

            $clientName = $_POST['d']['clientFirstname'];
            $clientLast = $_POST['d']['clientSurname'];

            $document_title .= " ".$clientLast.", ".$clientName." ";

            if ($hasPartner) {

                $partnerName = $_POST['d']['partnerFirstname'];
                $partnerLast = $_POST['d']['partnerSurname'];

                $document_title .= "and ";
                $document_title .= $partnerLast.", ".$partnerName." ";

            }

            $document_title .= "- Your Insurance Plan ";
            $document_title .= date("d.m.y");

            $this->pdf->SetTitle($document_title);
            $__data = $_POST['d'];

            $this->load->model('FactFind');
            $factFindData = $this->FactFind->fetchData($__data['import']);
            $ffTransactionData = $this->FactFind->fetchTransData($__data['import']);

            // Title Page
            $html = $this->load->view('documents/soa/title', array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData
            ), true);
            $this->pdf->AddPage(); // add a page
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            // Letter Page
            $html = $this->load->view('documents/soa/letter', array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData, //'fn'=>$__data['second']
            ), true);

            $this->pdf->AddPage();
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            // Summary of Advice Page summary
            //$html = $this->load->view('documents/soa/summary', array(
            //  'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData
            //), true);
            //  $this->pdf->AddPage(); // add a page
            //$this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = 3; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate; $i++){ $this->pdf->AddPage(); };

            // Summary of Advice Page p1
            $html = $this->load->view('documents/soa/p1', array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData, '_trans'=>$ffTransactionData
            ), true);

            if ($factFindData->second->mode == 0){
                $html .= $this->load->view('documents/soa/p1_ff_simple', array(
                  '_user'=> $userData, 'data'=>$factFindData, '_trans'=>$ffTransactionData
                ), true);

                $html .= $this->load->view('documents/soa/p1_ff_simple2', array(
                  '_user'=> $userData, 'data'=>$factFindData, '_trans'=>$ffTransactionData
                ), true);
            } else {
                //  $html .= "mode detailed";
            }

            $html .= $this->load->view('documents/soa/p1_goals', array(
              '_user'=> $userData, 'data'=>$factFindData, '_trans'=>$ffTransactionData
            ), true);

            $html .= $this->load->view('documents/soa/curr_needs', array(
              '_user'=> $userData, 'data'=>$factFindData, '_trans'=>$ffTransactionData, 'soa'=>$__data, //'data' => $__data
            ), true);

            $this->pdf->AddPage();
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate - 1; $i++){ $this->pdf->AddPage(); };

            $itemHTML = $this->load->view('documents/soa/mainrecom', array(
              '_user'=> $userData, 'data'=>$factFindData, '_trans'=>$ffTransactionData, 'soa'=>$__data, //'data' => $__data
            ), true);

            //ob_end_clean();
            //print_r($__data['second']);

            if (isset($__data['second']['items'])){
                foreach($__data['second']['items'] as $secItem){
                    //if ($secItem['active'] == "true"){
                    //}
                    if ($secItem['owner'] == "client") {
                        if ($secItem['active'] == "true"){
                            $canPrint = true;
                        } else { $canPrint = false; }
                    } else {
                        if ($factFindData->first->partnerInfo->firstname == null || $factFindData->first->partnerInfo->firstname == ""){
                            $canPrint = false;
                        } else {
                            if ($secItem['active'] == "true"){
                                $canPrint = true;
                            } else { $canPrint = false; }
                        }
                    }

                    if ($canPrint){
                      $itemHTML .= $this->load->view('documents/soa/p2item', array(
                        'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData, 'fn'=>$secItem
                      ), true); //$this->pdf->AddPage();
                    }
                }

                $this->pdf->AddPage();
                $this->pdf->writeHTMLCell(187, 275, 12, 5, $itemHTML, 0, 0, false, true, '', true);
                $oldCurrentPages = $currentTotalPages; $currentTotalPages = $this->pdf->getNumPages();
                $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
                for($i=0; $i < $pagesToGenerate - 1; $i++){ $this->pdf->AddPage(); };
            }




            //ob_start();

            // Last Part!
            $html = $this->load->view('documents/soa/last',   array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData, 'fn'=>$secItem
            ), true); $this->pdf->AddPage();
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate - 1; $i++){ $this->pdf->AddPage(); };


            $html = $this->load->view('documents/soa/appendix', array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData
            ), true);

            $this->pdf->AddPage();
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate - 1; $i++){ $this->pdf->AddPage(); };

            $html = $this->load->view('documents/soa/appendix2', array(
              'data' => $__data, '_user'=> $userData, 'ff'=>$factFindData
            ), true);

            $this->pdf->AddPage();
            $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

            $oldCurrentPages = $currentTotalPages; $currentTotalPages = $this->pdf->getNumPages();
            $pagesToGenerate = $currentTotalPages - $oldCurrentPages;
            for($i=0; $i < $pagesToGenerate - 1; $i++){ $this->pdf->AddPage(); };

            $actual_file = ACTUAL_FILE_PREFIX_SAVING.$document_title.".pdf";

            $this->pdf->Output($actual_file, 'F');

            $link = base_url()."resource/docs/".$document_title.'.pdf';
            ob_end_clean(); echo json_encode(array( 'filename'=>$link ));
        }
    }

    public function loa(){
        ob_start(); $link = ""; set_time_limit(300);
        $this->load->model('User');

        $sessionID = $this->session->userdata('logged_user');
        $userData = $this->User->getUserInformation($sessionID);

        $compann = null;
        $this->load->library('Pdf', array('company'=>$compann));
        $this->pdf->company = $userData['company'];

        $document_title = "document-".date("Ymd-His-U")."_LOA";
        $this->pdf->SetTitle($document_title);

        $json = json_decode($_POST['s']);

        $html = $this->load->view('documents/factfind/loa', array(
          'data' => $_POST['d'], '_user'=> $userData
        ), true); $this->pdf->AddPage(); // add a page

        $this->pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);



        $actual_file = ACTUAL_FILE_PREFIX_SAVING.$document_title.".pdf";
        $this->pdf->Output($actual_file, 'F');

        $loaLink = base_url()."resource/docs/".$document_title.'.pdf';
        ob_end_clean(); echo json_encode(array( 'filename'=>$loaLink ));

    }

    public function soaPreview(){

      $this->load->model('User');

      $sessionID = $this->session->userdata('logged_user');
      $userData = $this->User->getUserInformation($sessionID);

      $compann = null;

      //if (isset($_GET['c'])){ $compann = $_GET['c']; }
      $this->load->library('Pdf', array('company'=>$compann));
      $this->pdf->company = $userData['company']->firm_name;

      $document_title = "gay";


      $html = $this->load->view('documents/soatemplate2', array( 'data' => null, '_user'=> $userData ), true);
      $this->pdf->AddPage(); // add a page
      $this->pdf->writeHTMLCell(187, 300, 12, 5, $html, 0, 0, false, true, '', true);

      $actual_file = '/Applications/MAMP/htdocs/bugtick/pdfgenerator/PDFGenerator/resource/docs/'.$document_title.'.pdf';
      $this->pdf->Output($actual_file, 'I');

    }

    public function factfind(){
        $compann = 3;

        if (isset($_GET['c'])){ $compann = $_GET['c']; }
        $this->load->library('Pdf', array('company'=>$compann));

        $document_title = "document-".date("Ymd-His-U");
        $this->pdf->SetTitle($document_title);

        $html = $this->load->view('documents/factfind', array(

        ), true);

        $this->pdf->AddPage(); // add a page
        $this->pdf->writeHTMLCell(187, 300, 12, 5, $html, 0, 0, false, true, '', true);

        $actual_file = '/Applications/MAMP/htdocs/bugtick/pdfgenerator/PDFGenerator/resource/docs/'.$document_title.'.pdf';
        $this->pdf->Output($actual_file, 'I');

    }


    public function printFooter($ref) {
        // Position at 15 mm from bottom
        //$ref->SetY(-15);
        // Set font
        $ref->SetFont('helvetica', 'I', 8);
        // Page number

        $footer = '
            <table width="100%" style="border-top:1px solid #000;font-size:110%" cellpadding="0">
              <tr><td width="50%" style="color:#aaaaa">Version 1.0.0.3</td>
              <td width="50%" align="left">
                 Page '.$ref->getAliasNumPage().'/'.$ref->getAliasNbPages().'
              </td></tr>
            </table>
        ';
        $ref->writeHTMLCell(187, '', 11, 283, $footer, 0, 0, false, true, '', true);
    }

    public function generate($param = null){

        // Get the parameters
        // $params = $_POST['p'];

        //
        //  @TODO: Update the setting of the company to whatever
        //    the company of the current user
        //
        $compann = 3;

        if (isset($_GET['c'])){
          $compann = $_GET['c'];
        }

        $this->load->library('Pdf', array('company'=>$compann));

        //
        //  Setting the transaction name and the timestamp
        //

        $document_title = "document-".date("Ymd-His-U");
        $this->pdf->SetTitle($document_title);


        //
        //$this->generateFactFind_Elite($this->pdf);

        if ($compann == 2){
            if ($param == "soa"){
                $this->generateSOA_Elite($this->pdf);
            } else if ($param == "ff"){
                $this->generateFactFind_Elite($this->pdf);
            }
        } else if ($compann == 3){
            if ($param == "soa"){
                $this->generateSOA_JD($this->pdf);
            }
        }

        $this->pdf->Output('/Users/scalaberch/www/bugtick/client/SumitpdfGen/pdf/pdfexample.pdf', 'I');
    }


    //
    //  For EliteInsure Ltd. Actions
    //
    public function generateSOA_Elite($pdf){
        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/elite/soa-p1', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);

        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/elite/soa-p2', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);

        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/elite/soa-p3', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);
    }

    public function generateFactFind_Elite($pdf){
        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/elite/ff-p1', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);

        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/elite/ff-p2', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);
    }

    //
    //  For JD Ltd. Actions
    //
    public function generateSOA_JD($pdf){
        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/jd/soa-title', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 45, $text, 0, 0, false, true, '', true);

        $image = base_url()."resource/2/umbrella.png";
        $pdf->Image($image, 70, 200, 70, 70, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);

        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/jd/soa-letter', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 25, $text, 0, 0, false, true, '', true);

        $pdf->AddPage(); // add a page
        $pdf->setHtmlVSpace(array(
            'li' => array( 'h' => 3  )
        ));
        $text = $this->load->view('documents/jd/soa-client-summary', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 25, $text, 0, 0, false, true, '', true);

        // Template
        // TODO: Generate a copy of this for every person and every plan they have...
        $pdf->AddPage(); // add a page. still subjective...
        $pdf->setHtmlVSpace(array( 'li' => array( 'h' => 2 ) ));
        $text = $this->load->view('documents/jd/soa-cover-template', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 25, $text, 0, 0, false, true, '', true);

        $pageCount = $pdf->getAliasNbPages();

        $pdf->AddPage(); // add a page
        $pdf->AddPage(); // add a page
        $text = $this->load->view('documents/jd/soa-whereto', array(), true);
        $pdf->writeHTMLCell(187, '', 11, 25, $text, 0, 0, false, true, '', true);


    }

    public function test(){
        $text = $this->load->view('documents/jd/soa-letter', array(), true);
        echo $text;
    }

}