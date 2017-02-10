
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

<body>

<?php $third = $data['third']; ?>
<?php $first = $data['first']; ?>
<p></p>

<!-- Risk Planning - Needs Table -->
<h5 style="font-weight:100; color: #347AB8;font-size:190%">Risk Planning - Needs Table</h5>
<hr /><p></p><p></p>
<?php
    $needsList = array(
      'liabilitiesclear'=> 'Liabilities to Clear',
      'futureexp'=> 'Future Expenditure Required',
      'futureeduc'=> 'Future Education Expense',
      'medcost'=> 'Medical Costs/Recovery Income',
      'provtax'=> 'Provision for Tax',
      'otherprovs'=> 'Other Provisions',
      'others'=> 'Other',
      'totalcapreq'=> 'Total Capital Required',
      'disposableassets'=> 'Disposable Assets willing to be sold',
      'continuingincome'=> 'Continuing Income',
      'totalCapAvail'=> 'Total Capital Available',
      'totalCoveredRequired'=> 'Total Cover Required',
      'existingcover'=> 'Existing Cover',
      'surplus'=> 'Surplus/Shortfall',
      'mortgage'=>"Mortgage",
      'clientsurplus'=>'Client Desired Surplus/Shortfall',
      'totalAmountDesired'=>'Total Amount Desired',
      'percentDesiredInput'=>'Percentage Desired Input'
    );

?>



<h3 class="text-center normal-weight red"><?php echo $first['clientInfo']['firstname']; ?> - Needs Table</h3>
<table class="table width-100 bordered" style="font-size:130%" cellspacing="5">
  <tr>
    <th><label>Capital Needs</label></th>
    <th><label>Life</label></th>
    <th><label>TPD</label></th>
    <th><label>Trauma</label></th>
  </tr>

<?php
  $personNeeds = $third['needs']['client'];
  $life = $personNeeds['life'];
  $tpd  = $personNeeds['tpd'];
  $trauma = $personNeeds['trauma'];

  $index = 0;
      foreach($life as $li):
          if ($li['t'] == "disposableassets"){
              echo '<tr><td colspan="4"><span class="value">CAPITAL PROVISIONS</span></td></tr>';
          }

          if ($li['t'] == "totalCoveredRequired"){
              echo '<tr><td colspan="4"><span class="value">INSURANCE NEEDS</span></td></tr>';
          }
?>
<tr>
  <td><span class="value"><?php
      if ($li['t'] == "totalcapreq" or $li['t'] == "totalCapAvail" or $li['t'] == "totalCoveredRequired" or $li['t'] == "surplus" ){
        $text = "<b>".$needsList[$li['t']]."</b>";
      } else {
        $text = $needsList[$li['t']];
      }

      echo $text;
  ?></span></td>
  <td align="right"><span class="value">$ <?php $n = $li['v'] == null ? 0 : $li['v']; echo number_format($n, 2, '.', ','); ?></span></td>
  <td align="right"><span class="value">$ <?php $liSub = $tpd[$index]; $n = $liSub['v'] == null ? 0 : $liSub['v']; echo number_format($n, 2, '.', ',');  ?></span></td>
  <td align="right"><span class="value">$ <?php $liSub = $trauma[$index]; $n = $liSub['v'] == null ? 0 : $liSub['v']; echo number_format($n, 2, '.', ',');  ?></span></td>
</tr>
<?php $index++; endforeach; ?>
</table>


<?php
  if ($first['partnerInfo']['firstname'] != null):
?>

<h3 class="text-center normal-weight red"><?php echo $first['partnerInfo']['firstname']; ?> - Needs Table</h3>
<table class="table width-100 bordered" style="font-size:130%" cellspacing="5">
  <tr>
    <th><label>Capital Needs</label></th>
    <th><label>Life</label></th>
    <th><label>TPD</label></th>
    <th><label>Trauma</label></th>
  </tr>

<?php
  $personNeeds = $third['needs']['partner'];
  $life = $personNeeds['life'];
  $tpd  = $personNeeds['tpd'];
  $trauma = $personNeeds['trauma'];

  $index = 0;
      foreach($life as $li):
          if ($li['t'] == "disposableassets"){
              echo '<tr><td colspan="4"><span class="value">CAPITAL PROVISIONS</span></td></tr>';
          }

          if ($li['t'] == "totalCoveredRequired"){
              echo '<tr><td colspan="4"><span class="value">INSURANCE NEEDS</span></td></tr>';
          }
?>
<tr>
  <td><span class="value"><?php
      if ($li['t'] == "totalcapreq" or $li['t'] == "totalCapAvail" or $li['t'] == "totalCoveredRequired" or $li['t'] == "surplus" ){
        $text = "<b>".$needsList[$li['t']]."</b>";
      } else {
        $text = $needsList[$li['t']];
      }

      echo $text;
  ?></span></td>
  <td align="right"><span class="value">$ <?php $n = $li['v'] == null ? 0 : $li['v']; echo number_format($n, 2, '.', ','); ?></span></td>
  <td align="right"><span class="value">$ <?php $liSub = $tpd[$index]; $n = $liSub['v'] == null ? 0 : $liSub['v']; echo number_format($n, 2, '.', ',');  ?></span></td>
  <td align="right"><span class="value">$ <?php $liSub = $trauma[$index]; $n = $liSub['v'] == null ? 0 : $liSub['v']; echo number_format($n, 2, '.', ',');  ?></span></td>
</tr>
<?php $index++; endforeach; ?>
</table>

<?php
  endif;
?>
<br><br><br>
<!-- end of Risk Planning - Needs Table -->
