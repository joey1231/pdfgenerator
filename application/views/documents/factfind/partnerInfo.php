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
<!-- BASIC INFORMATION -->
<body>
  <p></p>
<div class="" style="font-size:130%">

  <?php $first = $data['first']; ?>

  <h2 class="sectionn-title">Partner Information</h2>
  <p></p><p></p>

  <h3 class="text-center normal-weight" align="left"><b>Basic Information</b></h3>
  <table cellpadding="1" cellspacing="1">
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            if ($first['partnerInfo']['othertitle'] == null){
                $title = $first['partnerInfo']['title'];
            } else {
                $title = $first['partnerInfo']['othertitle'];
            }

            echo $title;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>PREFERRED NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['prefname'] == null ? "" : $first['partnerInfo']['prefname'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>FIRST NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['firstname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>DATE OF BIRTH</td></tr></table>
        <table class="tbl-value"><tr><td><?php
          $date = $first['partnerInfo']['dob'];
          echo $date;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>SECOND NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['secondname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>AGE (YEARS)</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['age'];
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
            $toPrint = $first['partnerInfo']['surname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>GENDER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['gender'];
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
            $toPrint = $first['partnerInfo']['homephone'] == null ? "" : $first['partnerInfo']['homephone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>WORK PHONE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['workphone'] == null ? "" : $first['partnerInfo']['workphone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>MOBILE PHONE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['mobilephone'] == null ? "" : $first['partnerInfo']['mobilephone'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMAIL ADDRESS</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['email'] == null ? "" : $first['partnerInfo']['email'];
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
            $toPrint = $first['partnerInfo']['stradd'] == null ? "" : $first['partnerInfo']['stradd'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>SUBURB</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['suburb'] == null ? "" : $first['partnerInfo']['suburb'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>CITY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['city'] == null ? "" : $first['partnerInfo']['city'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>POSTAL CODE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['postcode'] == null ? "" : $first['partnerInfo']['postcode'];
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
            $toPrint = $first['partnerInfo']['occupation'] == null ? "" : $first['partnerInfo']['occupation'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>JOB TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['jobtitle'] == null ? "" : $first['partnerInfo']['jobtitle'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>GROSS SALARY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['grosswages'] == null ? "" : $first['partnerInfo']['grosswages'];
            echo moneyFormatter("%n", $toPrint);
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['employername'] == null ? "" : $first['partnerInfo']['employername'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>START DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['partnerInfo']['emplstart'];
            echo $date;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>LENGTH IN YRS.</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['emplyears'] == null ? "" : $first['partnerInfo']['emplyears'];
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
            if (isset($first['partnerInfo']['empstatus'])):
                $employeeStatusValue = $first['partnerInfo']['empstatus'];

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
            $toPrint = $first['partnerInfo']['paidleave'] == null ? "" : $first['partnerInfo']['paidleave'];
            //echo $toPrint;
            echo moneyFormatter("%n", $toPrint);
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>ADMINISTRATIVE DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['adminduties'] == null ? "" : $first['partnerInfo']['adminduties'];
            echo $toPrint." %";
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>TRAVEL DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['travelduties'] == null ? "" : $first['partnerInfo']['travelduties'];
            echo $toPrint." %";
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>MANUAL DUTIES</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['manualduties'] == null ? "" : $first['partnerInfo']['manualduties'];
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
            $toPrint = $first['partnerInfo']['prevocc'] == null ? "" : $first['partnerInfo']['prevocc'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>JOB TITLE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['prevjob'] == null ? "" : $first['partnerInfo']['prevjob'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>
    <tr>
      <td width="50%">
        <table class="tbl-title"><tr><td>GROSS SALARY</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['prevsalary'] == null ? "" : $first['partnerInfo']['prevsalary'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>EMPLOYER</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['prevemployer'] == null ? "" : $first['partnerInfo']['prevemployer'];
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
            if (isset($first['partnerInfo']['prevempstatus'])):
                $employeeStatusValue = $first['partnerInfo']['empstatus'];

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
            $toPrint = $first['partnerInfo']['prevleave'] == null ? "" : $first['partnerInfo']['prevleave'];
            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
    </tr>

    <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>START DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['partnerInfo']['prevstart'];
            echo $date;
        ?>
        </td></tr></table>
      </td>

      <td width="33%">
        <table class="tbl-title"><tr><td>END DATE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $date = $first['partnerInfo']['prevend'];
            echo $date;
        ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>LENGTH IN YRS.</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $first['partnerInfo']['prevlength'] == null ? "" : $first['partnerInfo']['prevlength'];
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
            if ( isset( $first['partnerInfo']['taxresident'] )){
                $investor_rate = $first['partnerInfo']['taxresident'];
            }
            $toPrint = $investor_rate;

            echo $toPrint;
        ?>
        </td></tr></table>
      </td>
      <td width="50%">
        <table class="tbl-title"><tr><td>DESCRIBE WORK OR STUDY VISA DETAIL<br />&nbsp;</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $investor_rate = $first['partnerInfo']['nonresicountry'];
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
            $toPrint = $first['partnerInfo']['irdnum'] == null ? "" : $first['partnerInfo']['irdnum'];
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
        if ( isset( $first['partnerInfo']['smoker'] )){
            $investor_rate = $first['partnerInfo']['smoker'];
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
