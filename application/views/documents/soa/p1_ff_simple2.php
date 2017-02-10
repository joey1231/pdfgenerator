
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
<?php $second = $data->second; ?>
<?php $simple = $second->simple; ?>
<?php $index = 0; ?>
<!-- GOALS AND OBJECTIVES INFORMATION -->
<h2 class="sectionn-title">YOUR INCOME AND EXPENSES</h2>
<p></p><p></p>

<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr>
    <td width="70%">Your Annual Income before tax</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="70%">Your Partner's Annual Income before tax</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr>
    <td>Your Annual of supplemental benefits from the government</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td  >Your Annual Household Income after tax</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr>
    <td>Your annual approximate costs of Dependant's Education and/or Child Care</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td  >Your annual General Expenses (food, insurance, clothing, etc)</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr>
    <td>Your annual costs of Rent or Mortgage and other loans</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td  >Any other expenses not considered</td>
    <td width="30%"><?php
      $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
      echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
    ?></td>
  </tr>
  <tr><td></td></tr>
  <tr>
      <td align="right"><b>Your Total Annual Household Expenses</b></td>
      <td width="30%"><?php
        $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
        echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
      ?></td>
    </tr>
    <tr class="ff-tbl-alt">
      <td  align="right">Your Annual Disposable Household Income</td>
      <td width="30%"><?php
        $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
        echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
      ?></td>
    </tr>
    <tr>
        <td align="right">Your Monthly Disposable Household Income</td>
        <td width="30%"><?php
          $simple[$index] = is_numeric($simple[$index]) ? floatval($simple[$index]) : 0;
          echo "$ ".moneyFormatter("%n", $simple[$index]); $index++;
        ?></td>
    </tr>
</table>
<p style="font-size:110%"><b>Note</b><br />I have a duty to identify your needs, based on the information you have given to me, and to then provide you with appropriate advice and recommendations. In some cases the cost of implementing all of the recommendations needs to be reassessed to factor in a client’s available surplus income. In our view, it is better that you are made aware of the full extent of your needs, whether they are affordable or not, so that you then have all of the information presented to you to make an informed decision on how you want to practically manage the risks you face.
</p>
