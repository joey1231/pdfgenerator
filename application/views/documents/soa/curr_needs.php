<style type="text/css">
    html{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
    .pagebreak{margin-top:40px;margin-bottom:40px}.pull-left{float:left}.pull-right{float:right}.width-25{width:25%}.width-50{width:45%}
    .width-40{width:40%}.width-60{width:60%}.width-30{width:30%}.width-70{width:70%}.width-100{width:100%}.clearfix{clear:both}
    .text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-uppercase{text-transform:uppercase}
    .red{color:#347Ab8}.pale{opacity:.5}label{color:#777;border-bottom:1px solid #ddd;text-transform:uppercase;font-size:.7em;margin-bottom:10px;margin-left:10px;margin-right:10px}
    .value{display:block;margin-top:5px;padding:10px;padding-top:5px;margin-top:0px;font-size:.9em;margin-bottom:20px;margin-right:10px}
    .normal-weight{font-weight:normal}.text-center.normal-weight.red{text-align:left}tr th{text-align:left;padding:10px}
    tr th label{display:block;padding:0px;border:none;margin-left:0;margin-bottom:0}.table .value{margin-bottom:0}
    .table.bordered td,.table.bordered th{border:1px solid #ddd}
</style>

<style>
    .sectionn-title {
        padding:0%; margin:0%; color:#205478; letter-spacing:3px;
        font-weight:300; text-transform: uppercase;
        border-bottom:1px solid #205478;
    }
    .tbl-title{
        padding:5px 0px 5px 0px;
    }
    .tbl-title td{
        color:#999; font-size:100%;
        text-transform: uppercase;
    }
    .tbl-value {
        border:1px solid #999;
        padding:5px; font-size:110%;
    }
    .ff-table th {
        background-color:#205478;
        color: #fff; text-transform: uppercase;
        letter-spacing: 1px; font-size:100%;
    }

    .ff-tbl-alt td {
        background-color:#eee;
    }

    .inside-list {
        padding-left:0px; margin-left:0px;
    }
</style>

<?php
$planB = $data->planb;
$clientPlanB = $planB->client;
$partnerPlanB = $planB->partner;

$first = $data->first;
$clientName = $first->clientInfo->firstname;
$partnerName = $first->partnerInfo->firstname;
?>
<p></p>
<!
 GOALS AND OBJECTIVES INFORMATION -->
<h2 class="sectionn-title">SECTION 2 - MY RECOMMENDED BENEFIT(S)</h2>
<p></p>
<p style="font-size:110%"><?php
    $introText = "";
    $introText .= $first->clientInfo->firstname;
    if ($first->partnerInfo->firstname != null){
        $introText .= " & ".$first->partnerInfo->firstname.", ";
    } else {
        $introText .= ", ";
    }

    echo $introText;
    //Mr CLIENT NAME & or CLIENT NAME TWO, based on the information gathered in the Fact Find &  Needs
    //Analysis which considers your Goals and Objectives, Personal and Financial Circumstances - I am recommending the Benefits in the table below so that you can consider the correct  cover
    //appropriate for you/family/business. I have considered the following in making my recommendation:
    ?>based on the information gathered in the Client(s) Insurance Planner which considers your Goals and Objectives, Personal and Financial Circumstances - I am recommending the Benefits in the table below so that you can consider the correct cover appropriate for you/family/business. I have considered the following in making my recommendation:</p>
<p></p>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
    <tr class="head-table">
        <th width="25%">Need</th>
        <th width="35%">Amount Assured</th>
        <!-- <th width="20%">Event</th> -->
        <th width="40%">Why it's needed</th>
    </tr>

    <?php
    $indexes = array(5, 3, 4, 1, 2, 0);
    $titles = array('Life Insurance Cover', 'Trauma Cover', 'TPD Cover', 'Income Protection Cover', 'Mortgage Repayment Cover', 'Medical/Health Cover');
    $eventList = array(
        'In the event of death', 'Serious Illness/Accident', 'Permanently Disabled',
        'Unable to work due to Illness',
        'Unable to work due to Illness', 'Illness/Accident'
    );
    ?>

    <?php $colEven = false; foreach($indexes as $indexInd=>$index): ?>

        <?php
        $clientItem = $clientPlanB->items[$index];
        $partnerItem = $index < count($partnerPlanB->items) ? $partnerPlanB->items[$index] : null;

        $reasonList = array();
        $hasTPDSelected = false;
        $canContinue = true;

        foreach($clientItem->checkboxes as $c){
            if ( $c->checked == "true" and !in_array($c->text, $reasonList) ){ $reasonList[] = $c->text; }

            if ($c->checked == "true" and $indexInd == 2){
                $hasTPDSelected = true;
            }
        }

        if ($partnerName != null){
            foreach($partnerItem->checkboxes as $c){
                if ( $c->checked == "true" and !in_array($c->text, $reasonList) ){ $reasonList[] = $c->text; }

                if ($c->checked == "true" and $indexInd == 2){
                    $hasTPDSelected = true;
                }
            }
        }

        $clientItemInput = $clientItem->inputs; //[$where];
        $partnerItemInput = $index < count($partnerPlanB->items) ? $partnerItem->inputs: null;


        if ($indexInd == 2){ // TPD
            if (!$hasTPDSelected){
                $canContinue = false;
            }
        };

        if ($canContinue):
            ?>


            <tr <?php if ($colEven): $colEven = false; ?> class="ff-tbl-alt" <?php else: $colEven = true; endif; ?> >
                <td><h3><?php echo $titles[$indexInd]; ?></h3>
                    <?php if ($indexInd == 1): ?>
                        <p><b>Critical Illness or Living Assistance</b></p>
                        <?php
                        $accText = "";
                        if (count($clientItem->inputs) == 6){
                            $accText = $clientItem->inputs[5]->value;
                            if ($partnerItem != null){
                                if ($accText != $partnerItem->inputs[5]->value){
                                    if ($partnerItem->inputs[5]->value != null){
                                        $accText .= "/".$partnerItem->inputs[5]->value;
                                    }

                                }
                            }
                        }

                        echo "<p>".$accText."</p>";
                        ?>
                    <?php endif; ?>
                    <?php if ($indexInd == 2): ?>
                        <p><b>Permanent Disablement</b></p>
                        <!-- <p>Stand Alone / Accelerated</p> -->
                    <?php endif; ?>
                </td>
                <td  style="font-size:90%"><?php
                    $text = "";

                    $pb = $data->planb;

                    echo "<b>For ".$clientName."</b><br />";
                    $clientPB = $pb->client;
                    $clientPBItems = $clientPB->items;
                    $clientPBData = $clientPBItems[$index];
                    $clientPBDatainputs = $clientPBData->inputs;

                    //print_r($clientPBDatainputs);
                    //echo "<br />";

                    foreach($clientPBDatainputs as $cpb){
                        $cpbText  = $cpb->text;
                        $cpbValue = $cpb->value;

                        if ($cpb->text == "Total:"){
                            echo "<br />";
                        }

                        if ($index == 5) {
                            if ($cpbText == "Term:"){
                                // $cpbValue = $cpbValue." months";
                                if ($cpbValue == null) {
                                    $cpbText = ""; $cpbValue = "";
                                } else {
                                    if (preg_match('/[A-z]+/', $cpbValue)) {
                                        $cpbValue = $cpbValue; //." months";
                                    } else {
                                        $cpbValue = $cpbValue." months";
                                    }
                                }
                            }
                            else if ($cpbText == "Monthly:"){
                                if ($cpbValue == null) {
                                    $cpbText = "";
                                    $cpbValue = "";
                                } else {
                                    $cpbText = "<br /><b>Survivor's Income</b><br />".$cpbText;
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                }
                            }
                            else {
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            }
                        }
                        else if ($index == 3) {
                            if ($cpbText == "Trauma Plan Type:"){
                                $cpbValue = $cpbValue."";
                            } else {
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            }
                        }
                        else if ($index == 4) {
                            $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                        }
                        else if ($index == 1) {
                            if ($cpbText == "Income:"){
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            }
                            else if ($cpbText == "Period (in years):"){
                                $cpbText = "Benefit Period:";
                                $years = $cpbValue;

                                $mode = $clientPBDatainputs[3];
                                if ( $mode->value == 0 ){
                                    $cpbValue = $years." year/s";
                                } else {
                                    $cpbValue = "up to ".$years." year/s";
                                }
                            }
                            else if ($cpbText == "Period Type:"){
                                $cpbText = "";
                                $cpbValue = "";
                            }
                        }
                        else if ($index == 2) {
                            if ($cpbText == "Monthly replacements:"){
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            } else if ($cpbText == "Period (in years):"){
                                $cpbText = "Benefit Period:";
                                $years = $cpbValue;

                                $mode = $clientPBDatainputs[4];
                                if ($mode->value == 0){
                                    $cpbValue = $years." year/s";
                                } else {
                                    $cpbValue = "up to ".$years." year/s";
                                }
                            } else if ($cpbText == "Period Type:"){
                                $cpbText = ""; $cpbValue = "";
                            }
                        }
                        else if ($index == 0) {
                            if ($cpbText == "Test and Specialists:"){
                                $cpbValue = $cpbValue;
                            } else {
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            }
                        }

                        if ( $cpbText == "Monthly Income Replacement:" ) $cpbValue = "$ ".number_format($cpbValue);
                        echo $cpbText." ".$cpbValue."<br />";
                        //print_r($cpb);
                        //echo "<br /><br /><p></p>";
                    }

                    if ($partnerName != null){
                        echo "<br /><br />";
                        echo "<b>For ".$partnerName."</b><br />";
                        $clientPB = $pb->partner;
                        $clientPBItems = $clientPB->items;
                        $clientPBData = $clientPBItems[$index];
                        $clientPBDatainputs = $clientPBData->inputs;

                        foreach($clientPBDatainputs as $cpb){
                            $cpbText  = $cpb->text;
                            $cpbValue = $cpb->value;

                            if ($cpb->text == "Total:"){
                                echo "<br />";
                            }

                            if ($index == 5) {
                                if ($cpbText == "Term:"){
                                    // $cpbValue = $cpbValue." months";
                                    if ($cpbValue == null) {
                                        $cpbText = ""; $cpbValue = "";
                                    } else {
                                        if (preg_match('/[A-z]+/', $cpbValue)) {
                                            $cpbValue = $cpbValue; //." months";
                                        } else {
                                            $cpbValue = $cpbValue." months";
                                        }
                                    }
                                } else if ($cpbText == "Monthly:"){
                                    if ($cpbValue == null) {
                                        $cpbText = ""; $cpbValue = "";
                                    } else {
                                        $cpbText = "<br /><b>Survivor's Income</b><br />".$cpbText;
                                        $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                    }
                                } else {
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                }
                            }
                            else if ($index == 3) {
                                if ($cpbText == "Trauma Plan Type:"){
                                    $cpbValue = $cpbValue."";
                                } else {
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                }
                            }
                            else if ($index == 4) {
                                $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                            }
                            else if ($index == 1) {
                                if ($cpbText == "Income:"){
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                } else if ($cpbText == "Period (in years):"){
                                    $cpbText = "Benefit Period:";
                                    $years = $cpbValue;

                                    $mode = $clientPBDatainputs[3];
                                    if ($mode->value == 0){
                                        $cpbValue = $years." year/s";
                                    } else {
                                        $cpbValue = "up to ".$years." year/s";
                                    }
                                } else if ($cpbText == "Period Type:"){
                                    $cpbText = ""; $cpbValue = "";
                                }
                            }
                            else if ($index == 2) {
                                if ($cpbText == "Monthly replacements:"){
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                } else if ($cpbText == "Period (in years):"){
                                    $cpbText = "Benefit Period:";
                                    $years = $cpbValue;

                                    $mode = $clientPBDatainputs[4];
                                    if ($mode->value == 0){
                                        $cpbValue = $years." year/s";
                                    } else {
                                        $cpbValue = "up to ".$years." year/s";
                                    }
                                } else if ($cpbText == "Period Type:"){
                                    $cpbText = ""; $cpbValue = "";
                                }
                            }
                            else if ($index == 0) {
                                if ($cpbText == "Test and Specialists:"){
                                    $cpbValue = $cpbValue;
                                } else {
                                    $cpbValue = "$ ".moneyFormatter("%n", floatval($cpbValue));
                                }
                            }

                            if ( $cpbText == "Monthly Income Replacement:" ) $cpbValue = "$ ".number_format($cpbValue);
                            echo $cpbText." ".$cpbValue."<br />";
                            //print_r($cpb);
                            //echo "<br /><br /><p></p>";
                        }

                    }

                    echo $text;

                    $soaFirst = $soa['first'];
                    if (array_key_exists ('amts', $soaFirst)) {
                        echo "<br /><br />";
                        foreach($soaFirst['amts'] as $r) {
                            if ($r['id'] == $indexInd) {
                                echo $r['desc'].": $".moneyFormatter("%n", floatval($r['amt']));
                            }
                        }
                    }
                    ?></td> <!-- END : Mid Col -->
                <!-- <td style="font-size:90%"><?php
                if ($indexInd == 0){
                    $text = "";

                    if ($clientName != null){

                        if (substr($clientName, -1) == "s" or substr($clientName, -1) == "S"){
                            $cname =  $clientName."'";
                        } else {
                            $cname =  $clientName."'s";
                        }

                        $text = $eventList[$indexInd];
                        $text = str_replace("?", $cname, $text);
                    }

                    if ($partnerName != null){

                        if (substr($partnerName, -1) == "s" or substr($partnerName, -1) == "S"){
                            $pname =  $partnerName."'";
                        } else {
                            $pname =  $partnerName."'s";
                        }
                        $sub = $eventList[$indexInd];
                        $sub = str_replace("?", $pname, $sub);

                        $text .= "<br />".$sub;

                        // Override for Life Insurance
                        if ($indexInd == 0 and $text != null or $text != "") { $text = "In the event of death"; }
                    }

                } else {
                    $text = $eventList[$indexInd];
                }

                echo $text;
                ?></td> -->
                <td>
                    <?php
                    $clientCheckboxes = $clientItem->checkboxes;
                    if (count($clientCheckboxes) > 0):
                        $liItems = 0; $liString = "";
                        foreach($clientCheckboxes as $c){
                            if ($c->checked == "true") {
                                $liString .= "<li>".$c->text."</li>";
                                $liItems++;
                            }
                        }

                        if ($liItems > 0) {
                            echo "<b>For ".$clientName."</b>";
                            echo '<ul class="inside-list">';
                            echo $liString;
                            echo '</ul>';
                        }
                    endif; ?>

                    <?php
                    $clientCheckboxes = $partnerItem->checkboxes;
                    if (count($clientCheckboxes) > 0):
                        ?>
                        <?php if ($partnerName != null):
                        $liItems = 0; $liString = "";
                        foreach($clientCheckboxes as $c){
                            if ($c->checked == "true") {
                                $liString .= "<li>".$c->text."</li>";
                                $liItems++;
                            }
                        }

                        if ($liItems > 0) {
                            echo "<b>For ".$partnerName."</b>";
                            echo '<ul class="inside-list">';
                            echo $liString;
                            echo '</ul>';
                        }
                    endif; ?>
                    <?php endif; ?>

                    <?php
                    $soaFirst = $soa['first'];
                    if (array_key_exists ('reasons', $soaFirst)) {
                        echo "<b>Additional Reasons</b>";
                        echo "<ul class='inside-list'>";
                        foreach($soaFirst['reasons'] as $r):
                            if ($r['id'] == $indexInd):
                                ?>
                                <li><?php echo $r['desc']; ?></li>
                                <?php
                            endif;
                        endforeach;
                        echo "</ul>";
                    }
                    ?>
                </td>
            </tr>
            <?php
        endif;
    endforeach; ?>
</table>
<p style="font-size:110%"><b>Note:</b> My recommendations above are based solely on the information that you have provided to me in your Fact Find.</p>
<p></p>
<h2 class="sectionn-title">EXISTING INSURANCES</h2>
<p></p>
<?php
if ($soa['acc']['policy'] == "true"):
    ?>
    <p style="font-size:110%">Please see existing policy schedule.</p>
    <?php
else:
    ?>
    <?php
    $existingInsurance = $data->planb->existingInsurances;
    if ($existingInsurance->hasValue == "true"):
        ?>
        <table class="table ff-table" style="font-size:115%" cellpadding="5">
            <tr class="head-table">
                <th width="15%">LifeAssured</th>
                <th width="15%">Provider</th>
                <th width="15%">Policy Type</th>
                <th width="15%">Policy Str.</th>
                <th width="15%">Benefit Type</th>
                <th width="15%">Benefit Prd.</th>
                <th width="10%">Wait Prd.</th>
            </tr>
            <?php
            $tableItems = $existingInsurance->table; $isEven = true;
            foreach($tableItems as $t){
                if ($isEven){
                    $isEven = false;
                    echo "<tr>";
                } else {
                    $isEven = true;
                    echo '<tr class="ff-tbl-alt">';
                }

                echo "<td>".$t->lifeAssured."</td>";
                echo "<td>".$t->provider."</td>";
                echo "<td>".$t->policyType."</td>";
                echo "<td>".$t->policyStructure."</td>";
                echo "<td>".$t->benefitType."</td>";
                echo "<td>".$t->benefitPeriod."</td>";
                echo "<td>".$t->waitPeriod."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    <?php else: ?>
        <p style="font-size:110%">It has been disclosed that you have no existing risk insurances in place.</p>
    <?php endif;
    ?>
    <?php
endif;
?>

<p></p>
<p></p>

<p></p>
<h2 class="sectionn-title">PERSONAL RISK RECOMMENDATIONS</h2>
<p></p>
<p style="font-size:110%">Please check on the attached illustration document for more details.</p>

<p></p>
<p></p>
