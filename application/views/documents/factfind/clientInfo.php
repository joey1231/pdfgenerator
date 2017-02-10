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
    color:#999; font-size:70%;
    text-transform: uppercase;
  }
  .tbl-value {
      border:1px solid #999;
      padding:5px; font-size:80%;
  }
</style>

<!-- BASIC INFORMATION -->
<body>
  <p></p>
<div class="" style="font-size:130%">

  <?php $first = $data['first']; ?>

  <h2 class="sectionn-title">Client Information</h2>
  <p></p><p></p>

  <h3 class="text-center normal-weight" align="left"><b>Basic Information</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            if ($first['clientInfo']['othertitle'] == null){
                $title = $first['clientInfo']['title'];
            } else {
                $title = $first['clientInfo']['othertitle'];
            }

            echo $title;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>PREFERRED NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prefname'] == null ? "" : $first['clientInfo']['prefname'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>FIRST NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['firstname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>DATE OF BIRTH</td></tr></table>
        <table class="tbl-value"><tr><td><?php
          $date = $first['clientInfo']['dob'];
          echo $date;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>SECOND NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['secondname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>AGE (YEARS)</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['age'];
            //$toPrint = $toPrint == 0 or $toPrint == "0" ? null : $toPrint;
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>SURNAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['surname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>GENDER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['gender'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
    </tr>
  </table>

  <h3>&nbsp;</h3>

  <h3 class="text-center normal-weight" align="left"><b>Contact Information</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>HOME PHONE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['homephone'] == null ? "" : $first['clientInfo']['homephone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>WORK PHONE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['workphone'] == null ? "" : $first['clientInfo']['workphone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>MOBILE PHONE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['mobilephone'] == null ? "" : $first['clientInfo']['mobilephone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMAIL ADDRESS</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['email'] == null ? "" : $first['clientInfo']['email'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

  </table>

  <h3>&nbsp;</h3>

  <h3 class="text-center normal-weight" align="left"><b>Address Information</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>STREET ADDRESS</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['stradd'] == null ? "" : $first['clientInfo']['stradd'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>SUBURB</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['suburb'] == null ? "" : $first['clientInfo']['suburb'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>CITY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['city'] == null ? "" : $first['clientInfo']['city'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>POSTAL CODE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['postcode'] == null ? "" : $first['clientInfo']['postcode'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

  </table>

  <h3>&nbsp;</h3>

  <h3 class="text-center normal-weight" align="left"><b>Current Employment</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>OCCUPATION</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['occupation'] == null ? "" : $first['clientInfo']['occupation'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>JOB TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['jobtitle'] == null ? "" : $first['clientInfo']['jobtitle'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>GROSS SALARY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['grosswages'] == null ? "" : $first['clientInfo']['grosswages'];
            echo moneyFormatter("%n", $toPrint);
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['employername'] == null ? "" : $first['clientInfo']['employername'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>START DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['clientInfo']['emplstart'];
            echo $date;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>LENGTH IN YRS.</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['emplyears'] == null ? "" : $first['clientInfo']['emplyears'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYMENT STATUS</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $employeeStatus = null;
            if (isset($first['clientInfo']['empstatus'])):
                $employeeStatusValue = $first['clientInfo']['empstatus'];

                if ($employeeStatusValue == "ft"){
                    $employeeStatus = "Full Time";
                } else if ($employeeStatusValue == "pt"){
                    $employeeStatus = "Part Time";
                } else if ($employeeStatusValue == "cs"){
                    $employeeStatus = "Casual";
                } else if ($employeeStatusValue == "un"){
                    $employeeStatus = "Unemployed";
                }
            endif;

            $toPrint = $employeeStatus;
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>PAID LEAVE OWING</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['paidleave'] == null ? "" : $first['clientInfo']['paidleave'];
            echo moneyFormatter("%n", $toPrint);
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>ADMINISTRATIVE DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['adminduties'] == null ? "" : $first['clientInfo']['adminduties'];
            echo $toPrint." %";
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>TRAVEL DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['travelduties'] == null ? "" : $first['clientInfo']['travelduties'];
            echo $toPrint." %";
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>MANUAL DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['manualduties'] == null ? "" : $first['clientInfo']['manualduties'];
            echo $toPrint." %";
        ?>
        </td></tr></table>
      </td>
    </tr>

  </table>

  <h3>&nbsp;</h3>

  <h3 class="text-center normal-weight" align="left"><b>Previous Employment</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>OCCUPATION</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevocc'] == null ? "" : $first['clientInfo']['prevocc'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>JOB TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevjob'] == null ? "" : $first['clientInfo']['prevjob'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>GROSS SALARY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevsalary'] == null ? "" : $first['clientInfo']['prevsalary'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevemployer'] == null ? "" : $first['clientInfo']['prevemployer'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYMENT STATUS</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $employeeStatus = null;
            if (isset($first['clientInfo']['prevempstatus'])):
                $employeeStatusValue = $first['clientInfo']['empstatus'];

                if ($employeeStatusValue == "ft"){
                    $employeeStatus = "Full Time";
                } else if ($employeeStatusValue == "pt"){
                    $employeeStatus = "Part Time";
                } else if ($employeeStatusValue == "cs"){
                    $employeeStatus = "Casual";
                } else if ($employeeStatusValue == "un"){
                    $employeeStatus = "Unemployed";
                }
            endif;

            $toPrint = $employeeStatus;
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>PAID LEAVE OWING</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevleave'] == null ? "" : $first['clientInfo']['prevleave'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

    <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>START DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['clientInfo']['prevstart'];
            echo $date;
        ?>
        </td></tr></table>
      </td>

      <td width="33%">
        <table class="tbl-title"><tr><td>END DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['clientInfo']['prevend'];
            echo $date;
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>LENGTH IN YRS.</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['prevlength'] == null ? "" : $first['clientInfo']['prevlength'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

  </table>

  <h3>&nbsp;</h3>

  <h3 class="text-center normal-weight" align="left"><b>Residency</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>NZ RESIDENCY STATUS - NZ CITIZEN OR 2 YEARS WORK VISA TOTAL WITH 1 YEAR REMAINING OR MORE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $investor_rate = null;
            if ( isset( $first['clientInfo']['taxresident'] )){
                $investor_rate = $first['clientInfo']['taxresident'];
            }
            $toPrint = $investor_rate;

            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>DESCRIBE WORK OR STUDY VISA DETAIL<br />&nbsp;</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $investor_rate = $first['clientInfo']['nonresicountry'];
            $toPrint = $investor_rate;
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>BUSINESS IRD/ACC NO.</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['clientInfo']['irdnum'] == null ? "" : $first['clientInfo']['irdnum'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>

    </tr>

  </table>

  <h3>&nbsp;</h3>
  <h3 class="text-center normal-weight" align="left"><b>Smoker Information</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>ARE YOU A SMOKER?</td></tr></table>
        <table class="tbl-value"><tr><td><?php
        $investor_rate = null;
        if ( isset( $first['clientInfo']['smoker'] )){
            $investor_rate = $first['clientInfo']['smoker'];
        }
        $toPrint = $investor_rate;
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
  </table>
</div>
</body>
