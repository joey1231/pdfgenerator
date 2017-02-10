
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
</style>

<p></p>
<?php $planss = $data['planb']; ?>
<?php $first = $data['first']; ?>

<?php
    if ($_owner == "client"){
        $name = $first['clientInfo']['firstname'];
    } else {
        $name = $first['partnerInfo']['firstname'];
    }


    if (substr($name, -1) == "s"){ $name .= "'"; } else { $name .= "'s"; }
?>
<h2 class="sectionn-title"><?php echo strtoupper($name); ?> PLAN B AND OBJECTIVES</h2>
<p></p>

<?php
  $plans = $planss[$_owner];
  //echo '<pre style="font-size:100%">';
  //print_r($plans);
  //echo "</pre>";
  $planList = array(
      'Health', 'Income Protection', 'Mortgage Protection', 'Trauma', 'TPD', 'Life'
  );
?>


<table cellpadding="5" width="100%">

  <?php
      $even = true; $start = true; $i=0;
        //foreach ($plans['items'] as $p):
        for($ccc=0; $ccc<count($planList); $ccc++):
          $p = $plans['items'][$ccc];
          // if ($start){ echo "<tr>"; } else {
          if ($even){ echo "<tr>"; }
          // }

  ?>
          <td width="50%">
              <h3 class="text-center normal-weight" align="left"><b><?php echo $planList[$i]; ?></b></h3>
              <!-- <pre>
              <?php
                // print_r($p);
              ?>
              </pre> -->
              <table cellspacing="5">
                <?php

                    $isDiscussedChecked = false;
                    $coverHasBeenSelected = false;
                    $checkboxes = $p['checkboxes']; $count = 0; $limit = 5;
                    foreach($checkboxes as $checkbox):

                        if ( strpos($checkbox['text'],'Discussed') !== false ) {
                            $isDiscussedChecked = true;
                        }
                ?>
                <tr>
                  <td width="5%">
                    <?php if ($checkbox['checked'] == "true"): ?>
                      <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
                      <?php $coverHasBeenSelected = true; ?>
                    <?php else: ?>
                      <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
                    <?php endif; ?>
                  </td>
                  <td width="95%"><?php echo $checkbox['text']; ?></td>
                </tr>
                <?php
                    $count++;
                    endforeach;
                ?>

                <?php if ($count != $limit and $i > 0){
                  echo "<tr><td>&nbsp;</td></tr>";
                } ?>
              </table>
              <p></p>
              <table cellspacing="5">
                <?php
                    $checkboxes = $p['inputs'];
                    foreach($checkboxes as $checkCount=>$checkbox):
                        $goPrintMain = true;
                ?>
                <?php
                    if ($planList[$i] == "Life"){
                        if ($checkCount == 6){
                            //echo "<tr><td><br><br><b>Ongoing Life</b></td></tr>";
                            echo "<tr><td><br><br><b>Survivor's Income/Ongoing Life</b></td></tr>";
                        } else if ($checkCount == 7){
                            //echo "<tr><td><br><br><b>Survivor's Income/Ongoing Life</b></td></tr>";
                            $goPrintMain = false;
                            $textPrinted = $checkbox['value'];
                            if ($textPrinted !== null) {
                                $numberValue = floatval($textPrinted);
                            }

                            echo '<tr>
                              <td width="100%">
                                <table class="tbl-title"><tr><td>TERM</td></tr></table>
                                <table class="tbl-value"><tr><td>'.$textPrinted.'</td></tr></table>
                              </td>
                            </tr>';
                        }
                    }

                    //echo "<tr><td>";
                    //echo $checkCount;
                    //echo "</td></tr>";

                    if ($planList[$i] == "Please specify here"){
                        $goPrintMain = false;
                    }


                    if (($i == 1 or $i == 2) and ($checkCount == 1 or $checkCount == 2 or $checkCount == 3 or $checkCount == 4)){
                        $goPrintMain = false;

                        //echo $checkCount." - ".$i;
                        if ($checkCount == 1){
                            if ($i == 1) {
                                $periodType  = floatval($checkboxes[4]['value']);
                            } else {
                                $periodType  = floatval($checkboxes[3]['value']);
                            }

                            $periodYears = floatval($checkbox['value']);

                            //print_r($checkboxes[3]);

                            $benefit_period = "";
                            //if ($periodYears > 0){
                                if ($periodType == 1){
                                    $benefit_period = "up until the age of ".$periodYears.".";
                                } else if ($periodType == 0){
                                    $benefit_period = "up to ".$periodYears." year/s.";
                                } else {
                                    $benefit_period = $checkbox['value'];
                                }
                            //}

                            $benefit_period = $coverHasBeenSelected ? $benefit_period : "";

                                if ($isDiscussedChecked) $benefit_period = "";

                            echo '<tr>
                              <td width="100%">
                                <table class="tbl-title"><tr><td>BENEFIT PERIOD</td></tr></table>
                                <table class="tbl-value"><tr><td>'.$benefit_period.'</td></tr></table>
                              </td>
                            </tr>';


                        } else if ($checkCount == 2){
                          //print_r($checkbox);

                          if ($i == 2){

                            $textPrinted = $coverHasBeenSelected ? $checkboxes[2]['value'] : "";
                              if($isDiscussedChecked) $textPrinted = "";
                            echo '<tr>
                              <td width="100%">
                                <table class="tbl-title"><tr><td>WAITING PERIOD</td></tr></table>
                                <table class="tbl-value"><tr><td>'.$textPrinted.'</td></tr></table>
                              </td>
                            </tr>';
                          } else {
                            $textPrinted = $coverHasBeenSelected ? $checkbox['value'] : "";
                            echo '<tr>
                              <td width="100%">
                                <table class="tbl-title"><tr><td>COVER TYPE REQUIRED</td></tr></table>
                                <table class="tbl-value"><tr><td>'.$textPrinted.'</td></tr></table>
                              </td>
                            </tr>';
                          }

                        } else if ($checkCount == 3){
                          if ($i == 1){
                            $textPrinted = $coverHasBeenSelected ? $checkbox['value'] : "";
                              if($isDiscussedChecked) $textPrinted = "";
                            echo '<tr>
                              <td width="100%">
                                <table class="tbl-title"><tr><td>WAITING PERIOD</td></tr></table>
                                <table class="tbl-value"><tr><td>'.$textPrinted.'</td></tr></table>
                              </td>
                            </tr>';
                          }  else {

                          }
                        }

                    }



                    //print_r($checkboxes);

                    if ($goPrintMain):
                ?>
                <tr>
                  <td width="100%">
                    <table class="tbl-title"><tr><td><?php echo strtoupper($checkbox['text']); ?></td></tr></table>
                    <table class="tbl-value"><tr><td><?php
                        $toPrint = $checkbox['value'];
                        //echo "valu";

                        if ($toPrint != null and floatval($toPrint) > 0){
                            echo "$ ".moneyFormatter("%n", floatval($toPrint));
                        } else {
                            echo $toPrint;
                        }
                        //if (floatval($toPrint))

                    ?>
                    </td></tr></table>
                  </td>
                </tr>
                <?php
                  endif;

                    endforeach;
                ?>
              </table>

          </td>
  <?php
        if (!$even){
          echo "</tr><tr><td></td></tr>"; $even = true;
        } else { $even = false; }

        $i++;
        endfor;

        if ($even){ echo "</tr><tr><td></td></tr>"; }
  ?>

</table>

<h2 class="sectionn-title">NOTES</h2>
<p></p>
<p><?php
    $notes = $plans['notes'];
    $newNotes = preg_replace("/[\n]/", "<br>", $notes);
    echo $newNotes;
?></p>
