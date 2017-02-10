
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

<p></p>

<!-- Existing Risk Planning -->
<h5 style="font-weight:100; color: #347AB8;font-size:190%">Risk Planning - Detailed Analysis</h5>
<hr /><p></p>
<div class="">
  <!-- <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5> -->
  <h3 class="text-center normal-weight red">Liabilities to Clear</h3>
<?php if (isset($third['detail']['liabilities']) and count($third['detail']['liabilities']) > 0): ?>

  <table class="table width-100"style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Description</label></th>
      <th><label>Owner</label></th>
      <th><label>Amount</label></th>
      <th><label>% Repaid on Death</label></th>
      <th><label>% Repaid on TPD</label></th>
      <th><label>% Repaid on Trauma</label></th>
    </tr>
    <?php foreach($third['detail']['liabilities'] as $row): ?>
      <tr>
        <td><span class="value"><?php echo $row['desc']; ?></span></td>
        <td><span class="value"><?php echo $row['owner']; ?></span></td>
        <td><span class="value">$ <?php
              $v = $row['amt'] == null ? 0 : floatval($row['amt']);
              echo moneyFormatter("%n", $v);
        ?></span></td>
        <td><span class="value"><?php echo $row['repaiddeath']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtpd']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtrauma']; ?></span></td>
      </tr>
    <?php endforeach; ?>
  </table>

<?php else: ?>
    <p>No specified liabilities to clear.</p>
<?php endif; ?>

<h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
<table class="width-100" style="font-size:130%" cellspacing="5">
  <tr>
    <td colspan="">
      <span class="value"><?php echo $third['detail']['notes']['liabs']; ?></span>
    </td>
  </tr>
</table>



</div>
<br>
<div class="">
  <h3 class="text-center normal-weight red">Future Expenditure Required</h3>

<?php if (isset($third['detail']['futureexp']) and count($third['detail']['futureexp']) > 0): ?>
  <table class="table width-100"style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Description</label></th>
      <th><label>Owner</label></th>
      <th><label>Amount</label></th>
      <th><label>% Repaid on Death</label></th>
      <th><label>% Repaid on TPD</label></th>
      <th><label>% Repaid on Trauma</label></th>
    </tr>
    <?php foreach($third['detail']['futureexp'] as $row): ?>
      <tr>
        <td><span class="value"><?php echo $row['desc']; ?></span></td>
        <td><span class="value"><?php echo $row['owner']; ?></span></td>
        <td><span class="value">$ <?php
              $v = $row['amt'] == null ? 0 : floatval($row['amt']);
              echo moneyFormatter("%n", $v);
        ?></span></td>
        <td><span class="value"><?php echo $row['repaiddeath']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtpd']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtrauma']; ?></span></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else: ?>
    <p>No specified future expenditure required.</p>
<?php endif; ?>

<h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
<table class="width-100" style="font-size:130%" cellspacing="5">
  <tr>
    <td colspan="">
      <span class="value"><?php echo $third['detail']['notes']['futureexp']; ?></span>
    </td>
  </tr>
</table>

</div>
<br>
<div class="">
  <h3 class="text-center normal-weight red">Future Education Expenses</h3>
<?php $educs = $third['detail']['educ']; ?>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td colspan="3">
        <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5>
      </td>
      <td>&nbsp;</td>
      <td colspan="3">
        <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Partner</h5>
      </td>
    </tr>
    <tr>
      <td>
        <label>% REPAID ON DEATH:</label>
        <span class="value"><?php echo $educs['client']['repaiddeath']; ?></span>
      </td>
      <td>
        <label>% REPAID ON TPD:</label>
        <span class="value"><?php echo $educs['client']['repaidtpd']; ?></span>
      </td>
      <td>
        <label>% REPAID ON TRAUMA:</label>
        <span class="value"><?php echo $educs['client']['repaidtrauma']; ?></span>
      </td>
      <td>&nbsp;</td>
      <td>
        <label>% REPAID ON DEATH:</label>
        <span class="value"><?php echo $educs['partner']['repaiddeath']; ?></span>
      </td>
      <td>
        <label>% REPAID ON TPD:</label>
        <span class="value"><?php echo $educs['partner']['repaidtpd']; ?></span>
      </td>
      <td>
        <label>% REPAID ON TRAUMA:</label>
        <span class="value"><?php echo $educs['partner']['repaidtrauma']; ?></span>
      </td>
    </tr>
  </table>

  <br>
  <?php if (isset($educs['child']) and count($educs['child']) > 0): ?>
  <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555; font-size:130%">Children Info</h5>

  <?php

      $childItem = array();

      $childListThings = array();
      foreach($educs['child'] as $c){
          if (!in_array( array($c['name'], $c['dob']), $childItem)){
              $childItem[] = array($c['name'], $c['dob']);
              $childListThings[] = array();
          }

          // Find the index
          $childIndex = array_search(array($c['name'], $c['dob']), $childItem);
          if ($childIndex >= 0){
              $childListThings[$childIndex][] = array(
                  'costs'=>$c['costs'],
                  'end'=>$c['end'],
                  'inflation'=>$c['inflation'],
                  'level'=>$c['level'],
                  'start'=>$c['start']
              );
          }
      }


      $topIndex = 0;
      foreach ($childItem as $c):
    ?>

  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td>
        <label>Name:</label><span class="value"><?php echo $c[0]; ?></span>
      </td>
      <td>
        <label>Date of Birth:</label>
        <?php
          $date = $c[1];
          if ($date != null){
            $arrd = explode("-", $date);
            //if (strlen($date[0] == 2)){
            //    $newDate = $arrd[1]."/".$arrd[2]."/".$arrd[0];
            //} else {
            //    $newDate = $arrd[0]."/".$arrd[1]."/".$arrd[2];
            //}
            $newDate = $arrd[0]."/".$arrd[1]."/".$arrd[2];
          } else {
            $newDate = $date;
          }
        ?>
        <span class="value"><?php echo $newDate; ?></span>
      </td>
    </tr>
  </table>


  <table class="table width-100"  style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Level:</label></th>
      <th><label>Start Age:</label></th>
      <th><label>End Age:</label></th>
      <th><label>Cost:</label></th>
      <th><label>Inflation:</label></th>
    </tr>

    <?php
        $listThings = $childListThings[$topIndex];
        foreach($listThings as $li):
    ?>
    <tr>
      <td>
        <span class="value text-uppercase"><?php echo $li['level']; ?></span>
      </td>
      <td>
        <span class="value"><?php echo $li['start']; ?></span>
      </td>
      <td>
        <span class="value"><?php echo $li['end']; ?></span>
      </td>
      <td>
        <span class="value">$ <?php echo $li['costs']; ?></span>
      </td>
      <td>
        <span class="value"><?php echo $li['inflation']; ?></span>
      </td>
    </tr>
  <?php endforeach; ?>
  </table>
  <p></p>
  <?php
      $topIndex++;
      endforeach; ?>

  <?php else: ?>
    <p>No child specified.</p>
  <?php endif; ?>

  <h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td colspan="">
        <span class="value"><?php echo $third['detail']['notes']['educ']; ?></span>
      </td>
    </tr>
  </table>
</div>

<br>
<div class="">
  <h3 class="text-center normal-weight red">Other Provisions</h3>

<?php if (isset($third['detail']['otherprovs']) and count($third['detail']['otherprovs']) > 0): ?>
  <table class="table width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Description</label></th>
      <th><label>Owner</label></th>
      <th><label>Amount</label></th>
      <th><label>% Repaid on Death</label></th>
      <th><label>% Repaid on TPD</label></th>
      <th><label>% Repaid on Trauma</label></th>
    </tr>
    <?php foreach($third['detail']['otherprovs'] as $row): ?>
      <tr>
        <td><span class="value"><?php echo $row['desc']; ?></span></td>
        <td><span class="value"><?php echo $row['owner']; ?></span></td>
        <td><span class="value">$ <?php
              $v = $row['amt'] == null ? 0 : floatval($row['amt']);
              echo moneyFormatter("%n", $v);
        ?></span></td>
        <td><span class="value"><?php echo $row['repaiddeath']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtpd']; ?></span></td>
        <td><span class="value"><?php echo $row['repaidtrauma']; ?></span></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else: ?>
    <p>No specified other provisions.</p>
<?php endif; ?>

<h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
<table class="width-100" style="font-size:130%" cellspacing="5">
  <tr>
    <td colspan="">
      <span class="value"><?php echo $third['detail']['notes']['otherprovsss']; ?></span>



    </td>
  </tr>
</table>

</div>

<br>
<div class="">
  <h3 class="text-center normal-weight red">Assets</h3>

  <?php if (isset($third['detail']['assets']) and count($third['detail']['assets']) > 0): ?>
    <table class="table width-100" style="font-size:130%" cellspacing="5">
      <tr>
        <th><label>Description</label></th>
        <th><label>Owner</label></th>
        <th><label>Amount</label></th>
        <th><label>% Repaid on Death</label></th>
        <th><label>% Repaid on TPD</label></th>
        <th><label>% Repaid on Trauma</label></th>
      </tr>
      <?php foreach($third['detail']['assets'] as $row): ?>
        <tr>
          <td><span class="value"><?php echo $row['desc']; ?></span></td>
          <td><span class="value"><?php echo $row['owner']; ?></span></td>
          <td><span class="value">$ <?php
                $v = $row['amt'] == null ? 0 : floatval($row['amt']);
                echo moneyFormatter("%n", $v);
          ?></span></td>
          <td><span class="value"><?php echo $row['repaiddeath']; ?></span></td>
          <td><span class="value"><?php echo $row['repaidtpd']; ?></span></td>
          <td><span class="value"><?php echo $row['repaidtrauma']; ?></span></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else: ?>
      <p>No specified assets.</p>
  <?php endif; ?>

  <h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td colspan="">
        <span class="value"><?php echo $third['detail']['notes']['assetss']; ?></span>
      </td>
    </tr>
  </table>
</div>

<br>
<div class="">
  <h3 class="text-center normal-weight red">Ongoing Income</h3>

  <?php if (isset($third['detail']['ongoingincome']) and count($third['detail']['ongoingincome']) > 0): ?>
    <table class="table width-100" style="font-size:130%" cellspacing="5">
      <tr>
        <th><label>Description</label></th>
        <th><label>Owner</label></th>
        <th><label>Amount</label></th>
        <th><label>% Repaid on Death</label></th>
        <th><label>% Repaid on TPD</label></th>
        <th><label>% Repaid on Trauma</label></th>
      </tr>
      <?php foreach($third['detail']['ongoingincome'] as $row): ?>
        <tr>
          <td><span class="value"><?php echo $row['desc']; ?></span></td>
          <td><span class="value"><?php echo $row['owner']; ?></span></td>
          <td><span class="value">$ <?php
                $v = $row['amt'] == null ? 0 : floatval($row['amt']);
                echo moneyFormatter("%n", $v);
          ?></span></td>
          <td><span class="value"><?php echo $row['repaiddeath']; ?></span></td>
          <td><span class="value"><?php echo $row['repaidtpd']; ?></span></td>
          <td><span class="value"><?php echo $row['repaidtrauma']; ?></span></td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php else: ?>
      <p>No specified ongoing income.</p>
  <?php endif; ?>

  <h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td colspan="">
        <span class="value"><?php echo $third['detail']['notes']['ongoingincome']; ?></span>
      </td>
    </tr>
  </table>
</div>
<br><br><br>
<!-- Existing Risk Planning  -->
