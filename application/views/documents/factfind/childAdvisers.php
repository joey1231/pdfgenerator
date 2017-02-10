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

<!-- BASIC INFORMATION -->
<body>
  <?php $first = $data['first']; ?>


<!-- CHILDREN INFORMATION -->
<p></p>
<h2 class="sectionn-title">Children/Dependents</h2>

<div>
  <!-- <h3 class="text-center normal-weight red">Children</h3> -->
  <?php if (isset($first['children'])): ?>

      <p></p>
      <table class="table ff-table" cellpadding="5" style="font-size:115%">
        <tr class='head-table'>
          <th style="padding:5px">NAME</th>
          <th style="padding:5px">D.O.B (AGE)</th>
          <th style="padding:5px">GENDER</th>
          <th style="padding:5px">RELATIONSHIP</th>
          <th style="padding:5px">DEPENDANT OF:</th>
        </tr>

      <?php $even = true; foreach($first['children'] as $row):
          if ($even){ $even = false; } else { $even = true; }
      ?>
        <tr <?php if ($even): ?>class="ff-tbl-alt"<?php endif; ?> >
          <td><span class="value"><?php echo $row['name']; ?></span></td>
          <?php
              $dob = $row['dob']; $age = $row['age'];
              if ($dob == null or $dob == ""){
                  $formatted = $dob." ".$age;
              } else {
                  $formatted = $dob." (".$age.")";
              }

          ?>
          <td><span class="value"><?php echo $formatted; ?></span></td>
          <td><span class="value"><?php echo $row['gender']; ?></span></td>
          <td><span class="value"><?php echo $row['relation']; ?></span></td>
          <td><span class="value"><?php echo $row['dependant']; ?></span></td>
        </tr>
      <?php endforeach; ?>
      </table>

  <?php else: ?>
    <p style="font-size:110%">No children registered.</p>
  <?php endif; ?>
</div>
<br><br>
<!-- end of CHILDREN INFORMATION -->



<!-- PROFESSIONAL ADVISERS -->

<h2 class="sectionn-title">Professional Advisers</h2>
<p></p><p></p>

<h3 class="text-center normal-weight" align="left"><b>Accountant</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>ACCOUNTANT NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['name'] == null ? "" : $first['accountant']['name'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>COMPANY NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['company'] == null ? "" : $first['accountant']['company'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>STREET ADDRESS</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['street'] == null ? "" : $first['accountant']['street'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>SUBURB</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['suburb'] == null ? "" : $first['accountant']['suburb'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>CITY</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['city'] == null ? "" : $first['accountant']['city'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>WORK PHONE</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['workphone'] == null ? "" : $first['accountant']['workphone'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>EMAIL ADDRESS</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['accountant']['email'] == null ? "" : $first['accountant']['email'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>

</table>

<h3>&nbsp;</h3>

<h3 class="text-center normal-weight" align="left"><b>Solicitor</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>ACCOUNTANT NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['name'] == null ? "" : $first['solicitor']['name'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>COMPANY NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['company'] == null ? "" : $first['solicitor']['company'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>STREET ADDRESS</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['street'] == null ? "" : $first['solicitor']['street'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>SUBURB</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['suburb'] == null ? "" : $first['solicitor']['suburb'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>CITY</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['city'] == null ? "" : $first['solicitor']['city'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>WORK PHONE</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['workphone'] == null ? "" : $first['solicitor']['workphone'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>EMAIL ADDRESS</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $first['solicitor']['email'] == null ? "" : $first['solicitor']['email'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>

</table>


<h3>&nbsp;</h3>

<h2 class="sectionn-title">Notes</h2>
<p></p><p></p>

<table cellpadding="1" cellspacing="1">
  <tr>
    <td width="100%">
      <?php
          $toPrint = $first['notes'] == null ? "" : $first['notes'];
          echo $toPrint;
        ?>
    </td>
  </tr>
</table>
<!-- end of PROFESSIONAL ADVISERS -->
</body>
