<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactFind extends CI_Model {

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
      'surplus'=> 'Surplus/Shortfall',
      'mortgage'=>"Mortgage",
      'clientsurplus'=>'Client Desired Surplus/Shortfall',
      'totalAmountDesired'=>'Total Amount Desired',
      'percentDesiredInput'=>'Percentage Desired Input'
    );


    public function save($_DATA, $title, $description, $pdf, $_userData){
        // Create transaction first!
        $data = array(
            'timestamp' => strtotime(date("Y-m-d H:i:s")),
            'description' => $description,
            'title' => $title,
            'type' => 'FACT_FIND'
        ); $sql = $this->db->insert_string('transaction', $data);

        $query = $this->db->query($sql);
        $transaction_id = $this->db->insert_id();

        $data = array(
            'transaction_idtransaction'=>$transaction_id,
            'ff_data'=>$_DATA
        ); $sql = $this->db->insert_string('client_ff_data', $data);
        $query = $this->db->query($sql);

        $user_transacted = $_userData['info']->idusers;
        // $user_transacted = 1;

        $data = array(
            'actual_link'=>$pdf,
            'timestamp'=>strtotime( date("Y/m/d H:i:s") ),
            'users_idusers'=>$user_transacted,
            'transaction_idtransaction'=>$transaction_id
        ); $sql = $this->db->insert_string('document', $data);
        $query = $this->db->query($sql);
    }


    public function generateTitle($ff_data){
        $document_title = "";
        $hasPartner = $ff_data->first->partnerInfo->firstname != null;

        $clientName = $ff_data->first->clientInfo->firstname;
        $clientLast = $ff_data->first->clientInfo->surname;
        $document_title = $clientLast.", ".$clientName." ";

        if ($hasPartner) {
            $partnerName = $ff_data->first->partnerInfo->firstname;
            $partnerLast = $ff_data->first->partnerInfo->surname;

            $document_title .= "and ";
            $document_title .= $partnerLast.", ".$partnerName." ";
        }

        //$document_title .= "- Insurance Planner ";
        //$document_title .= date("d.m.y");

        return $document_title;
    }

    public function saveFFPackage($_DATA, $_userData, $_ff_link, $limited = null) {
        $loaData    = null;
        $FFData     = null;
        $disclosure = null;

        // Check if LOA is selected...
        $_data = json_decode($_DATA);
        $hasLOA = $_data->fourth->loa == "yes";
        if ($hasLOA) {
            // Generate LOA
            $generatedLOALocation = $this->generateLOA($_userData, $_userData['info']->fspr_number, $_data, $_DATA);
            $loaData = file_get_contents($generatedLOALocation);
        }

        // Generate Disclosure Statement
        $generatedDisclosureLocation = $this->generateDisclosureStatement($_userData, $_userData['info']->fspr_number, $_data);
        $disclosure = file_get_contents($generatedDisclosureLocation);

        // Generate me fact fucking find...
        $newFFLink = str_replace(base_url(), "", $_ff_link);
        $FFData    = file_get_contents($newFFLink);

        $limitedData = null;
        if ( $limited != null || $limited != 'na' ) {
            $limitedLink    = str_replace(base_url(), "", $limited);
            $limitedData    = file_get_contents($limitedLink);
        }

        // Pack them to a single zip
        $zip = new ZipArchive();
        $trans_title = $this->generateTitle($_data);
        $zip_file = "resource/packages/".$trans_title."- Insurance Planner package ".date("d.m.y H.i.s").".zip";

        if ($zip->open($zip_file, ZipArchive::CREATE) !== TRUE) {
            $__success = false;
        } else {
            if ($loaData != null){ $zip->addFromString($trans_title."- LOA ".date("d.m.y").".pdf", $loaData); }
            if ($disclosure != null){ $zip->addFromString($trans_title."- Disclosure Statement ".date("d.m.y").".pdf", $disclosure); }
            if ($FFData != null){ $zip->addFromString($trans_title."- Insurance Planner ".date("d.m.y").".pdf", $FFData); }
            if ($limitedData != null){ $zip->addFromString($trans_title."- Limited Advice Transactions ".date("d.m.y").".pdf", $limitedData); }

            $zip->close();
            unlink($generatedDisclosureLocation);
            if ($hasLOA){ unlink($generatedLOALocation); }

            $__success = true;
            $_url = base_url().$zip_file;

            $trans_data = array('title'=> $trans_title, 'description'=> $trans_title, 'type'=>'PACKAGE', 'timestamp'=>strtotime(date("Y-m-d H:i:s")));
            $sql = $this->db->insert_string('transaction', $trans_data);
            $query = $this->db->query($sql);
            $trans_id = $this->db->insert_id();

            $trans_data = array('actual_link'=>base_url().$zip_file, 'timestamp'=>strtotime(date("Y-m-d H:i:s")), 'users_idusers'=>$_userData['info']->idusers, 'transaction_idtransaction'=>$trans_id);
            $sql = $this->db->insert_string('document', $trans_data);
            $query = $this->db->query($sql);
        }

        return array(
            'success'=>$__success, 'link'=>$_url
        );
    }

    public function generateLOA($_userData, $fspr, $ff_data, $raw_data){
        $this->load->library('Pdf', array('company'=>"C", 'fspr'=>"FSPR"), 'pdfLOA');
        $pdf = $this->pdfLOA;

        $pdf->company = $_userData['company'];
        $pdf->fspr_number = $fspr; // $userData['info']->fspr_number;

        $title = $this->generateTitle($ff_data);
        $pdf->SetTitle($title."- LOA ".date("d.m.y"));
        $pdf->SetFont('helvetica', 'I', 8);

        $html = $this->load->view('documents/factfind/loa', array(
          'data' => $ff_data, '_user'=> $_userData
        ), true); $pdf->AddPage(); // add a page

        $pdf->writeHTMLCell(187, 275, 12, 5, $html, 0, 0, false, true, '', true);

        $fileName = "PDF_TEMP_".date("Ymd_His_U");
        $actual_file = ACTUAL_FILE_PREFIX_SAVING.$fileName.".pdf";
        $pdf->Output($actual_file, 'F');

        $loaLink = "resource/docs/".$fileName.'.pdf';
        return $loaLink;
    }

    public function generateDisclosureStatement($_userData, $fspr, $ff_data){
        $this->load->library('Pdf', array('company'=>"C", 'fspr'=>"FSPR"), 'pdfDisclosure');
        $pdf = $this->pdfDisclosure;

        $pdf->company = $_userData['company'];
        $pdf->fspr_number = $fspr; // $userData['info']->fspr_number;

        $title = $this->generateTitle($ff_data);
        $pdf->SetTitle($title."- Disclosure Statement ".date("d.m.y"));
        $pdf->SetFont('helvetica', 'I', 8);

        $html = $this->load->view('documents/factfind/disclosure', array(
            '_user'=> $_userData, //'info'=>$json
        ), true);

        $pdf->AddPage(); // add a page
        $pdf->writeHTMLCell(187, 300, 12, 5, $html, 0, 0, false, true, '', true);

        $fileName = "PDF_TEMP_".date("Ymd_His_U");
        $actual_file = ACTUAL_FILE_PREFIX_SAVING.$fileName.".pdf";
        $pdf->Output($actual_file, 'F');

        $loaLink = "resource/docs/".$fileName.'.pdf';
        return $loaLink;
    }












    public function saveData($_DATA, $title, $description, $document){

        // Create transaction first!
        $data = array(
            'timestamp' => strtotime(date("Y-m-d H:i:s")),
            'description' => $description,
            'title' => $title,
            'type' => 'FACT_FIND'
        ); $sql = $this->db->insert_string('transaction', $data);

        $query = $this->db->query($sql);
        $transaction_id = $this->db->insert_id();

        //
        //  PART 1
        //

        // Add Client and Partner Info
        $clientID  = $this->addFFClientInfo($_DATA['first'], $transaction_id, "client");
        $this->addFFEmployment($_DATA['first'], $transaction_id, "client", "current");
        $this->addFFEmployment($_DATA['first'], $transaction_id, "client", "previous");

        $partnerID = $this->addFFClientInfo($_DATA['first'], $transaction_id, "partner");
        $this->addFFEmployment($_DATA['first'], $transaction_id, "partner", "current");
        $this->addFFEmployment($_DATA['first'], $transaction_id, "partner", "previous");

        // Add children
        if (isset($_DATA['first']['children'])){
            $children = $_DATA['first']['children'];
            if (isset($children)){
                foreach($children as $row){ $this->addChild($row, $transaction_id); }
            }
        }


        // Add Accountant / Solicitor
        $this->addAdviser($_DATA['first']['accountant'], $transaction_id, "accountant");
        $this->addAdviser($_DATA['first']['solicitor'], $transaction_id, "solicitor");


        //
        //  PART 2
        //

        $second = $_DATA['second'];

        $this->addFFSimplified($second['simple'], $transaction_id);

        // Add Client Income
        foreach($second['income']['pa']['client'] as $row){
            $this->addFinancialInfo("income", "PA", $row['n'], "client", null, $row['v'], $transaction_id, null);
        }

        // Add Partner Income
        foreach($second['income']['pa']['partner'] as $row){
            $this->addFinancialInfo("income", "PA", $row['n'], "partner", null, $row['v'], $transaction_id, null);
        }

        // Add Other Income
        $n = 0; foreach($second['income']['monthly'] as $row){
            $owner = "client"; if ($n == 1){
              $owner = "partner";
            } $n++;

            $this->addFinancialInfo("income", "monthly", $row['n'], $owner, null, $row['v'], $transaction_id, null);
        }

        // Add expenses
        if (isset($second['expenses'])){
            foreach ($second['expenses'] as $row){
                $this->addFinancialInfo("expense", $row['cat'], $row['item'], $row['owner'], $row['freq'], $row['value'], $transaction_id, null);
            }
        }

        //  Add Assets
        if (isset($second['assets'])){
            foreach ($second['assets'] as $row){
                $this->addFinancialInfo("asset", $row['cat'], $row['item'], $row['owner'], null, $row['value'], $transaction_id, $row['description']);
            }
        }

        //  Add Liabilities
        if (isset($second['liabilities'])){
            foreach ($second['liabilities'] as $row){
                $this->addFinancialInfo("liability", $row['cat'], $row['item'], $row['owner'], null, $row['value'], $transaction_id, $row['description']);
            }
        }

        // Add goals
        if (isset($second['goals'])){
            foreach($second['goals'] as $goal){
              $this->addGoals($goal['goal'], $goal['type'], $goal['timeframe'], $goal['owner'], $transaction_id);
            }
        }

        // Add estate
        $this->addEstate($second, $transaction_id, "client");
        $this->addEstate($second, $transaction_id, "partner");

        // Add health
        $this->addHealth($second, $transaction_id, "client");
        $this->addHealth($second, $transaction_id, "partner");


        //
        //  PART 3
        //
        $third = $_DATA['third'];
        $this->addInsuranceExists($third, $transaction_id, "client");     // Client Existing Insurance
        $this->addInsuranceExists($third, $transaction_id, "partner");    // Partner Existing Insurance

        // Needs table
        $this->addNeedsTable($transaction_id, $third['needs']['client'], "client");
        $this->addNeedsTable($transaction_id, $third['needs']['partner'], "partner");

/*
        // Liabilities to clear
        if (isset($third['detail']['liabilities'])){
            foreach($third['detail']['liabilities'] as $row){
                $this->addClientDetailed($row, "liabilitiesclear", $transaction_id);
            }
        }

        // Future exp
        if (isset($third['detail']['futureexp'])){
            foreach($third['detail']['futureexp'] as $row){
                $this->addClientDetailed($row, "futureexp", $transaction_id);
            }
        }

        // Other provisions
        if (isset($third['detail']['otherprovs'])){
            foreach($third['detail']['otherprovs'] as $row){
                $this->addClientDetailed($row, "otherprovs", $transaction_id);
            }
        }

        // assets
        if (isset($third['detail']['assets'])){
            foreach($third['detail']['assets'] as $row){
                $this->addClientDetailed($row, "assets", $transaction_id);
            }
        }

        // ongoing income
        if (isset($third['detail']['ongoingincome'])){
            foreach($third['detail']['ongoingincome'] as $row){
                $this->addClientDetailed($row, "ongoingincome", $transaction_id);
            }
        }

        // educs
        $educs = $third['detail']['educ'];
        $this->addEducDetailed($educs['client'], $transaction_id, "client");
        $this->addEducDetailed($educs['partner'], $transaction_id, "partner");

        if (isset($educs['child'])){
            foreach($educs['child'] as $child){
                $this->addChildEducItem($child, $transaction_id);
            }
        }

*/

        // Add up the notes!
        $this->addNotes($_DATA, $transaction_id);

        //
        //  PART 4
        //
        $fourth = $_DATA['fourth'];
        $this->addFFSOAInfo($fourth, 'client', $transaction_id);
        $this->addFFSOAInfo($fourth, 'partner', $transaction_id);


        // Connect to the document!
        //$sessionID = $this->session->userdata('logged_user');
        //print

        $data = array(
            'actual_link'=>$document,
            'timestamp'=>strtotime( date("Y/m/d H:i:s") ),
            'users_idusers'=>1,
            'transaction_idtransaction'=>$transaction_id
        ); $sql = $this->db->insert_string('document', $data);
        $query = $this->db->query($sql);

    }

    public function addFFClientInfo($first, $t, $target){

        if ($target == "client"){
            $type = "clientInfo";
        } else if ($target == "partner"){
            $type = "partnerInfo";
        }

        $investor_rate = isset($first[$type]['investorrate']) ? $first[$type]['investorrate'] : 0;
        $tax_resident = isset($first[$type]['taxresident']) ? $first[$type]['taxresident'] : null;

        if ($first[$type]['dob'] == null or $first[$type]['dob'] == ""){
            $first[$type]['dob'] = "1970-01-01";
        }

        $data = array(
            'title'=>$first[$type]['title'],
            'other_title'=>$first[$type]['title'],
            'first_name'=>$first[$type]['firstname'],
            'second_name'=>$first[$type]['secondname'],
            'surname'=>$first[$type]['surname'],
            'preferred_name'=>$first[$type]['prefname'],
            'dob'=>$first[$type]['dob'],
            'gender'=>$first[$type]['gender'],
            'home_phone'=>$first[$type]['homephone'],
            'work_phone'=>$first[$type]['workphone'],
            'mobile_phone'=>$first[$type]['mobilephone'],
            'email'=>$first[$type]['email'],
            'add_street'=>$first[$type]['stradd'],
            'add_city'=>$first[$type]['city'],
            'add_suburb'=>$first[$type]['suburb'],
            'postcode'=>$first[$type]['postcode'],
            'tax_info_resident'=>$tax_resident,
            'tax_country'=>$first[$type]['nonresicountry'],
            'ird_num'=>$first[$type]['irdnum'],
            'investor_rate'=>$investor_rate,
            'transaction_idtransaction'=>$t
        ); $sql = $this->db->insert_string('client_info', $data);
        $query = $this->db->query($sql);
        $_id = $this->db->insert_id();

        $role = $target == "partner" ? "PARTNER" : "CLIENT";
        $data = array(
            'role'=>$role, 'client_info_idclient_info'=>$_id, 'transaction_idtransaction'=>$t
        ); $sql = $this->db->insert_string('client_person', $data);
        $query = $this->db->query($sql);

        return $_id;
    }

    public function addFFEmployment($first, $t, $c, $emp_type){

        if ($c == "client"){
            $type = "clientInfo";
        } else if ($c == "partner"){
            $type = "partnerInfo";
        }



        if ($emp_type == "current"){
            $status = isset($first['clientInfo']['empstatus']) ? $first['clientInfo']['empstatus'] : null;

            if ($first[$type]['emplstart'] == "" or $first[$type]['emplstart'] == null){
                $first[$type]['emplstart'] = "1970-01-01";
            }

            if ($first[$type]['emplyears'] == "" or $first[$type]['emplyears'] == null){
                $first[$type]['emplyears'] = 0;
            }

            $data = array(
              'transaction_idtransaction'=>$t,
              'owner'=>$c,
              'status'=>$status,
              'start_date'=>$first[$type]['emplstart'],
              'paid_leave_owing'=>$first[$type]['paidleave'],
              'occupation'=>$first[$type]['occupation'],
              'length'=>$first[$type]['emplyears'],
              'job_title'=>$first[$type]['jobtitle'],
              'gross_salary'=>$first[$type]['grosswages'],
              'employer'=>$first[$type]['employername'],
              'duties_travel'=>$first[$type]['travelduties'],
              'duties_manual'=>$first[$type]['manualduties'],
              'duties_admin'=>$first[$type]['adminduties']
            );
        } else if ($emp_type == "previous"){
            $status = isset($first['clientInfo']['prevempstatus']) ? $first['clientInfo']['prevempstatus'] : null;

            if ($first[$type]['prevstart'] == "" or $first[$type]['prevstart'] == null){
                $first[$type]['prevstart'] = "1970-01-01";
            }

            if ($first[$type]['prevend'] == "" or $first[$type]['prevend'] == null){
                $first[$type]['prevend'] = "1970-01-01";
            }

            if ($first[$type]['prevlength'] == "" or $first[$type]['prevlength'] == null){
                $first[$type]['prevlength'] = 0;
            }

            $data = array(
              'transaction_idtransaction'=>$t,
              'owner'=>$c,
              'status'=>$status,
              'start_date'=>$first[$type]['prevstart'],
              'paid_leave_owing'=>$first[$type]['prevleave'],
              'occupation'=>$first[$type]['prevocc'],
              'length'=>$first[$type]['prevlength'],
              'job_title'=>$first[$type]['prevjob'],
              'gross_salary'=>$first[$type]['prevsalary'],
              'end_date'=>$first[$type]['prevend'],
              'employer'=>$first[$type]['prevemployer']
            );
        }

        $sql = $this->db->insert_string('client_employment', $data);
        $query = $this->db->query($sql);
        $_id = $this->db->insert_id();

        return $_id;
    }

    public function addChild($row, $t){
        $date = $row['dob'];
        if ($date == null){
          $newDate = "1970-01-01";
        } else {
          $split = explode("-", $date);
          if (strlen($split[0]) == 2){
              $newDate = $split[2]."-".$split[0]."-".$split[1];
          } else { $newDate = $date; }
        }

        $data = array(
          'name'=>$row['name'],
          'gender'=>$row['gender'],
          'dob'=>$newDate,
          'relation'=>$row['relation'],
          'dependant'=>$row['dependant'],
          'transaction_idtransaction'=>$t
        ); $sql = $this->db->insert_string('client_children', $data);
        $query = $this->db->query($sql);
    }

    public function addAdviser($first, $t, $role){
        $data = array(
          'role'=>$role,
          'name'=>$first['name'],
          'company'=>$first['company'],
          'add_street'=>$first['street'],
          'add_suburb'=>$first['suburb'],
          'add_city'=>$first['city'],
          'workphone'=>$first['workphone'],
          'email'=>$first['email'],
          'transaction_idtransaction'=>$t
        ); $sql = $this->db->insert_string('client_advisers', $data);
        $query = $this->db->query($sql);
    }

    public function addNotes($data, $trans){
        $data = array(
            'info'=>$data['first']['notes'],
            'assets'=>$data['second']['notes']['assets'],
            'goals'=>$data['second']['notes']['goals'],
            /* 'assets_prov'=>$data['third']['detail']['notes']['assetss'],
            'educ_exp'=>$data['third']['detail']['notes']['educ'],
            'future_exp'=>$data['third']['detail']['notes']['futureexp'],
            'liabilties_clear'=>$data['third']['detail']['notes']['liabs'],
            'ongoing_income'=>$data['third']['detail']['notes']['ongoingincome'],
            'other_provs'=>$data['third']['detail']['notes']['otherprovsss'], */
            'transaction_idtransaction'=>$trans
        ); $sql = $this->db->insert_string('client_notes', $data);
        $query = $this->db->query($sql);
    }

    public function addFinancialInfo($cl, $ca, $i, $o, $f, $a, $t, $d){
        $data = array(
            'class'=>$cl,
            'category'=>$ca,
            'item'=>$i,
            'owner'=>$o,
            'frequency'=>$f,
            'amount'=>$a,
            'transaction_idtransaction'=>$t,
            'description'=>$d
        ); $sql = $this->db->insert_string('client_financial_info', $data);
        $query = $this->db->query($sql);
    }

    public function addFFSimplified($input, $trans){
        $data = array(
          'annual_inc_b_tax'=>$input[0] == null ? 0 : $input[0],
          'annual_inc_b_tax_part'=>$input[1] == null ? 0 : $input[1],
          'annual_inc_a_tax'=>$input[3] == null ? 0 : $input[3],
          'annual_inc_gov'=>$input[2] == null ? 0 : $input[2],
          'annual_inc_total'=>0,
          'annual_hou_child'=>$input[4] == null ? 0 : $input[4],
          'annual_hou_general'=>$input[5] == null ? 0 : $input[5],
          'annual_hou_mort'=>$input[6] == null ? 0 : $input[6],
          'annual_hou_not_cons'=>$input[7] == null ? 0 : $input[7],
          'annual_hou_total'=>$input[8] == null ? 0 : $input[8],
          'annual_hou_disp'=>$input[9] == null ? 0 : $input[9],
          'annual_hou_disp_month'=>$input[10] == null ? 0 : $input[10],
          'transaction_idtransaction'=>$trans
        ); $sql = $this->db->insert_string('client_ff_simple', $data);
        $query = $this->db->query($sql);
    }

    public function addGoals($g, $t, $time, $owner, $trans){
        $data = array(
          'goals'=>$g,
          'type'=>$t,
          'timeframe'=>$time,
          'owner'=>$owner,
          'transaction_idtransaction'=>$trans
        ); $sql = $this->db->insert_string('client_goals', $data);
        $query = $this->db->query($sql);
    }

    public function addHealth($second, $trans, $owner){
        $estateClient = $second['health'][$owner];

        $data = array(
            'owner'=>$owner,
            'q1'=>$estateClient['health-q1'],
            'q2'=>$estateClient['health-q2'],
            'q3'=>$estateClient['health-q3'],
            'q2y'=>$estateClient['health-q2y'],
            'q3y'=>$estateClient['health-q3y'],
            'transaction_idtransaction'=>$trans
        ); $sql = $this->db->insert_string('client_ff_health', $data);
        $query = $this->db->query($sql);

    }

    public function addEstate($second, $trans, $owner){
        $estateClient = $second['estate'][$owner];

        if ($estateClient['willdate'] == "" or $estateClient['willdate'] == null){
            $estateClient['willdate'] = "1970-01-01";
        }

        $data = array(
          'has_will'=>null,
          'will_location'=>$estateClient['willlocation'],
          'will_date'=>$estateClient['willdate'],
          'will_current'=>null,
          'will_executor'=>$estateClient['willexecutor'],
          'has_funeral'=>null,
          'has_poweratty'=>null,
          'has_family_trust'=>null,
          'trust_purpose'=>$estateClient['trustpurpose'],
          'trust_beneficiaries'=>$estateClient['trustbeneficiaries'],
          'is_trustee'=>null,
          'family_trustees'=>$estateClient['familytrust'],
          'atty_name'=>$estateClient['powerattyname'],
          'atty_relation'=>$estateClient['powerattyrel'],
          'atty_type'=>null,
          'owner'=>$owner,
          'transaction_idtransaction'=>$trans
        );

        if (isset($estateClient['will'])){ $data['has_will'] = $estateClient['will']; }
        if (isset($estateClient['willcurrent'])){ $data['will_current'] = $estateClient['willcurrent']; }
        if (isset($estateClient['funeralplan'])){ $data['has_funeral'] = $estateClient['funeralplan']; }
        if (isset($estateClient['familytrust'])){ $data['has_family_trust'] = $estateClient['familytrust']; }
        if (isset($estateClient['trustee'])){ $data['is_trustee'] = $estateClient['trustee']; }
        if (isset($estateClient['powerattytype'])){ $data['atty_type'] = $estateClient['powerattytype']; }
        if (isset($estateClient['haspoweratty'])){ $data['has_poweratty'] = $estateClient['haspoweratty']; }

        $sql = $this->db->insert_string('client_estate', $data);
        $query = $this->db->query($sql);
    }

    public function addInsuranceExists($third, $trans, $owner){

        if ($owner == "client"){
            $type = "clientpolicy";
        } else if ($owner == "partner"){
            $type = "partnerpolicy";
        }

        $data = array(
          'main_owner'=>$owner,
          'has_in_force'=> $third[$type]['sel1'],
          'has_existing_polices'=>$third[$type]['sel2'],
          'has_following_policies'=>$third[$type]['sel3'],
          'transaction_idtransaction'=>$trans
        );

        if (isset($third[$type]['list'])){
            foreach($third[$type]['list'] as $row){
                $data['insurer'] = $row['insurer'];
                $data['benefit_type'] = $row['type'];
                $data['amount'] = $row['amount'] == null ? 0 : floatval($row['amount']);
                $data['asa'] = $row['asa'];
                $data['wpbp'] = $row['wpbp'];
                $data['premium'] = $row['premium'];
                $data['owner'] = $row['owner'];

                $sql = $this->db->insert_string('client_insurance_exist', $data);
                $query = $this->db->query($sql);
            }
        } else {
            $sql = $this->db->insert_string('client_insurance_exist', $data);
            $query = $this->db->query($sql);
        }


    }

    public function addNeedsTable($trans, $personNeeds, $owner){

      $life = $personNeeds['life'];
      $tpd  = $personNeeds['tpd'];
      $trauma = $personNeeds['trauma'];

      $index = 0;

      foreach($life as $li){

          $text = $this->__needsList[ $li['t'] ]; $lifeValue = $li['v'] == null ? 0 : $li['v'];
          $liSub = $tpd[$index]; $tpdValue = $liSub['v'] == null ? 0 : $liSub['v'];
          $liSub = $trauma[$index]; $traumaValue = $liSub['v'] == null ? 0 : $liSub['v'];

          $data = array(
            'owner'=> $owner,
            'item'=> $text,
            'life'=>$lifeValue,
            'tpd'=>$tpdValue,
            'trauma'=>$traumaValue,
            'transaction_idtransaction'=>$trans
          ); $sql = $this->db->insert_string('client_needs', $data);
          $query = $this->db->query($sql);
          $index++;
      }





    }

    public function addEducDetailed($data, $trans, $owner){
          $data = array(
            'category'=>"educ",
            'owner'=>$owner,
            'repaid_death'=>$data['repaiddeath'],
            'repaid_tpd'=>$data['repaidtpd'],
            'repaid_trauma'=>$data['repaidtrauma'],
            'transaction_idtransaction'=>$trans
          ); $sql = $this->db->insert_string('client_detailed', $data);
          $query = $this->db->query($sql);
    }

    public function addClientDetailed($row, $category, $trans){

      $data = array(
        'category'=>$category,
        'description'=>$row['desc'],
        'owner'=>$row['owner'],
        'amount'=>$row['amt'] == null ? 0 : floatval($row['amt']),
        'repaid_death'=>$row['repaiddeath'],
        'repaid_tpd'=>$row['repaidtpd'],
        'repaid_trauma'=>$row['repaidtrauma'],
        'transaction_idtransaction'=>$trans
      );

      if ($category == "futureexp"){
          $data['duration'] = 0;
          $data['indexation'] = 0;
      }

      $sql = $this->db->insert_string('client_detailed', $data);
      $query = $this->db->query($sql);
    }

    public function addChildEducItem($child, $trans){

        $date = $row['dob'];
        if ($date == null){
          $newDate = "1970-01-01";
        } else {
          $split = explode("-", $date);
          if (strlen($split[0]) == 2){
              $newDate = $split[2]."-".$split[0]."-".$split[1];
          } else { $newDate = $date; }
        }

        $sql = "SELECT * FROM client_children WHERE name=? AND dob=? AND transaction_idtransaction=?";
        $query = $this->db->query($sql, array($child['name'], $newDate, $trans));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $item = $result[0];

            $child_id = $item->idclient_children;
            $data = array(
              'ed_level'=>$child['level'],
              'start_age'=>$child['start'],
              'end_age'=>$child['end'],
              'costs'=>$child['costs'],
              'inflation'=>$child['inflation'],
              'client_children_idclient_children'=>$child_id,
              'transaction_idtransaction'=>$trans
            ); $sql = $this->db->insert_string('client_educ_exps', $data);
            $query = $this->db->query($sql);
        }



    }

    public function addFFSOAInfo($fourth, $owner, $trans){
        $client = $fourth[$owner];

        $data = array(
          'life'=>$client['life'],
          'trauma'=>$client['trauma'],
          'tpd'=>$client['tpd'],
          'income'=>$client['income'],
          'mortgage'=>$client['mortgage'],
          'health'=>$client['health'],
          'advice_limited'=>$client['advicelimited'],
          'if_yes'=>$client['advicewhy'],
          'not_discussed'=>$client['topicsnotdiscuss'],
          'transaction_idtransaction'=>$trans
        ); $sql = $this->db->insert_string('client_ff_soa', $data);
        $query = $this->db->query($sql);
    }



    public function fetchTransData($id){
        $data = null;
        $sql = "SELECT * FROM transaction WHERE idtransaction=?";
        $query = $this->db->query($sql, array($id));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $item = $result[0];

            $data = $item;
        }

        return $data;
    }

    public function fetchData($id){
        $data = null;

        $sql = "SELECT * FROM client_ff_data WHERE transaction_idtransaction=?";
        $query = $this->db->query($sql, array($id));
        if ($query->num_rows() > 0){
            $result = $query->result();
            $item = $result[0];

            $stringData = $item->ff_data;
            $data = json_decode($stringData);
        }

        return $data;
    }

    public function fetchDataOld($id){

      $data = array();

      // Fetch the client info
      $sql = "SELECT * FROM transaction AS t where t.idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          $result = $query->result();
          $data['transaction'] = $result[0];
      }

      // Fetch client and partner
      $data['client'] = null;
      $data['partner'] = null;

      $sql = "SELECT * FROM client_person AS cp
              LEFT JOIN client_info AS ci ON cp.client_info_idclient_info=ci.idclient_info
              WHERE cp.transaction_idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              if ($r->role == "PARTNER"){
                  $data['partner'] = $r;
              } else {
                  $data['client'] = $r;
              }
          }
      }

      // Fetch employment of client/partner
      $sql = "SELECT * FROM client_employment WHERE transaction_idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              if ($r->owner == "partner"){
                  $data['partner']->employment = $r;
              } else {
                  $data['client']->employment = $r;
              }
          }
      }

      // Fetch children
      $data['children'] = array();
      $sql = "SELECT * FROM client_children WHERE transaction_idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              $data['children'][] = $r;
          }
      }

      // Fetch advisers
      $data['advisers'] = array();
      $sql = "SELECT * FROM client_advisers WHERE transaction_idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
              $data['advisers'][] = $r;
          }
      }

      //  Fetch asset
      $data['assets'] = array();
      $sql = "SELECT * FROM client_financial_info WHERE transaction_idtransaction=? AND class=?";
      $query = $this->db->query($sql, array($id, 'asset'));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
            if ($r->amount > 0){
                $data['assets'][] = $r;
            }
          }
      }

      //  Fetch liabilities
      $data['liabilities'] = array();
      $sql = "SELECT * FROM client_financial_info WHERE transaction_idtransaction=? AND class=?";
      $query = $this->db->query($sql, array($id, 'liability'));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
            if ($r->amount > 0){
                $data['liabilities'][] = $r;
            }
          }
      }

      //  Fetch income
      $data['income'] = array();
      $sql = "SELECT * FROM client_financial_info WHERE transaction_idtransaction=? AND class=?";
      $query = $this->db->query($sql, array($id, 'income'));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
            if ($r->amount > 0){
                $data['income'][] = $r;
            }
          }
      }

      //  Fetch expense
      $data['expense'] = array();
      $sql = "SELECT * FROM client_financial_info WHERE transaction_idtransaction=? AND class=?";
      $query = $this->db->query($sql, array($id, 'expense'));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
            if ($r->amount > 0){
                $data['expense'][] = $r;
            }
          }
      }


      //  Fetch goals
      $data['goals'] = array();
      $sql = "SELECT * FROM client_goals WHERE transaction_idtransaction=?";
      $query = $this->db->query($sql, array($id));
      if ($query->num_rows() > 0){
          foreach($query->result() as $r){
            $data['goals'][] = $r;
          }
      }


      return $data;
    }


}

