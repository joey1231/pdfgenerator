
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

<?php $second = $data->second; ?>
<?php $index = 0; $assets = 0; $liabs = 0; ?>
<p></p>
<!-- GOALS AND OBJECTIVES INFORMATION -->
<h2 class="sectionn-title">YOUR ASSETS AND LIABILITIES</h2>
<p></p><p></p>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr class="head-table">
    <th width="70%">Assets</th>
    <th width="30%">Net Value</th>
  </tr>
  <tr>
    <td>Property</td>
    <td><?php
      $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
      $value = moneyFormatter("%n", $item); $index++; $assets += $item;
      echo "$ ".$value;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td>Cash</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $assets += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr>
    <td>Other</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $assets += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td align="right">Total Assets</td>
    <td><?php
    $value = moneyFormatter("%n", $assets);
    echo "$ ".$value;
    ?></td>
  </tr>
</table>

<p></p>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr class="head-table">
    <th width="70%">Liabilities</th>
    <th width="30%">Net Value</th>
  </tr>
  <tr>
    <td>Mortgage</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $liabs += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td>Credit Card</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $liabs += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr>
    <td>Personal Loan</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $liabs += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td>Other</td>
    <td><?php
    $item = $second->simpleassets[$index] == null ? 0 :  floatval($second->simpleassets[$index]);
    $value = moneyFormatter("%n", $item); $index++; $liabs += $item;
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr>
    <td align="right">Total Liabilities</td>
    <td><?php
    $value = moneyFormatter("%n", $liabs);
    echo "$ ".$value;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td align="right"><b>Total Net Worth</b></td>
    <td><b><?php
      $value = $assets - $liabs;
      $value = moneyFormatter("%n", $value);
      echo "$ ".$value;
    ?></b></td>
  </tr>
</table>
<p style="font-size:110%"><b>Note</b><br />As the above information has been used in preparing our recommendations please advise me of any errors or omission. The total column indicates the value of assets and liabilities that are owned by the client and/or partner, either directly or indirectly; via a Trust or Company. Therefore, this report does not show the value of any portion of the asset or liability that may be owned by a third party or associated entity.
</p>
