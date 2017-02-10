
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
<p></p>

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


<?php $second = $data['second']; ?>
  <?php $first = $data['first']; ?>
<body>
<!-- INCOME INFORMATION -->

<h2 class="sectionn-title">YOUR INCOME INFORMATION</h2>
<p></p><p></p>
<div class="" >
  <table class="table ff-table" style="font-size:110%" cellpadding="5">
    <tr class="head-table">
      <th>PER ANNUM</th>
      <th><?php echo trim($first['clientInfo']['firstname']); ?></th>
      <th><?php echo trim($first['partnerInfo']['firstname']); ?></th>
    </tr>

    <?php
        $pa = $second['income']['pa'];
        $i=0; $clientTotal = 0; $partnerTotal = 0;
    ?>
    <?php $even = true; foreach($pa['client'] as $row): ?>
      <tr <?php if ($even): $even = false; ?>class="ff-tbl-alt"<?php else: $even = true; endif; ?> >
        <td><?php echo $row['n']; ?></td>
        <td align="right">$ <?php echo number_format($pa['client'][$i]['v'], 2, ".", ","); ?></td>
        <td align="right">$ <?php echo number_format($pa['partner'][$i]['v'], 2, ".", ","); ?></td>
      </tr>
    <?php
        $clientTotal += $pa['client'][$i]['v']; $partnerTotal += $pa['partner'][$i]['v']; $i++;
        endforeach;
    ?>
    <tr><td></td></tr>
    <tr>
      <td><span style="font-weight: bold">Total Gross Income </span></td>
      <td align="right"><span >$ <?php echo number_format($clientTotal, 2, ".", ","); ?></span></td>
      <td align="right"><span>$ <?php echo number_format($partnerTotal, 2, ".", ","); ?></span></td>
    </tr>
    <tr class="ff-tbl-alt">
      <td colspan="3"><span style="font-weight: bold" >Combined </span></td>
      <td align="right"><span>$ <?php echo number_format($clientTotal+$partnerTotal, 2, ".", ","); ?></span></td>
    </tr>
  </table>
  <p></p>
  <table class="table ff-table"  style="font-size:110%" cellpadding="5">
    <tr class="head-table">
      <th colspan="3">Net Monthly Income</th>
    </tr>
    <?php $monthly = $second['income']['monthly']; ?>
    <?php $totalMonthly = 0; foreach($monthly as $row): ?>
      <tr <?php if ($even): $even = false; ?>class="ff-tbl-alt"<?php else: $even = true; endif; ?> >
        <td><span><?php echo $row['n']; ?></span></td>
        <td><span></span></td>
        <td align="right"><span>$ <?php echo number_format($row['v'], 2, ".", ","); ?></span></td>
        <?php $totalMonthly += $row['v']; ?>
      </tr>
    <?php endforeach; ?>
    <tr class="ff-tbl-alt">
      <td><span style="font-weight: bold;">Total (Monthly)</span></td>
      <td><span ></span></td>
      <td align="right"><span >$ <?php echo number_format($totalMonthly, 2, ".", ","); ?></span></td>
    </tr>
  </table>

  <?php
      $GLOBALS['clientTotal'] = $clientTotal;
      $GLOBALS['partnerTotal'] = $partnerTotal;

      $GLOBALS['totalIncome'] = $clientTotal+$partnerTotal+($totalMonthly*12);
  ?>


</div>
<br><br>
<!-- end of INCOME INFORMATION -->
</body>
