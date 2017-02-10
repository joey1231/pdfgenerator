<style type="text/css">
body{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
.pagebreak{margin-top:40px;margin-bottom:40px}.pull-left{float:left}.pull-right{float:right}.width-25{width:25%}.width-50{width:45%}
.width-40{width:40%}.width-60{width:60%}.width-30{width:30%}.width-70{width:70%}.width-100{width:100%}.clearfix{clear:both}
.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-uppercase{text-transform:uppercase}
.red{color:#e04e67}.pale{opacity:.5}label{color:#777;border-bottom:1px solid #ddd;text-transform:uppercase;font-size:.7em;margin-bottom:10px;margin-left:10px;margin-right:10px}
.value{display:block;margin-top:5px;padding:10px;padding-top:5px;margin-top:0px;font-size:.9em;margin-bottom:20px;margin-right:10px}
.normal-weight{font-weight:normal}.text-center.normal-weight.red{text-align:left}tr th{text-align:left;padding:10px}
tr th label{display:block;padding:0px;border:none;margin-left:0;margin-bottom:0}.table .value{margin-bottom:0}
.table.bordered td,.table.bordered th{border:1px solid #ddd}
</style>

<body>
<!-- INCOME INFORMATION -->
<?php $second = $data['second']; ?>
<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Income</h5>
<hr /><p></p>
<div class="" >
  <table class="table bordered width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <th><label></label></th>
      <th><label>Client</label></th>
      <th><label>Partner</label></th>
    </tr>

    <?php
        $pa = $second['income']['pa'];
        $i=0; $clientTotal = 0; $partnerTotal = 0;
    ?>
    <?php foreach($pa['client'] as $row): ?>
      <tr>
        <td><span class="value"><?php echo $row['n']; ?></span></td>
        <td><span class="value">$ <?php echo moneyFormatter("%n", $pa['client'][$i]['v']); ?></span></td>
        <td><span class="value">$ <?php echo moneyFormatter("%n", $pa['partner'][$i]['v']); ?></span></td>
      </tr>
    <?php
        $clientTotal += $pa['client'][$i]['v']; $partnerTotal += $pa['partner'][$i]['v']; $i++;
        endforeach;
    ?>
    <tr>
      <td><span class="value" style="font-weight: bold">Total Gross Income </span></td>
      <td><span class="value">$ <?php echo moneyFormatter("%n", $clientTotal); ?></span></td>
      <td><span class="value">$ <?php echo moneyFormatter("%n", $partnerTotal); ?></span></td>
    </tr>
    <tr>
      <td><span class="value" style="font-weight: bold" colspan="2">Combined </span></td>
      <td><span class="value">$ <?php echo moneyFormatter("%n", $clientTotal+$partnerTotal); ?></span></td>
    </tr>
  </table>
  <br><br>
  <table class="table bordered width-100"  style="font-size:130%" cellspacing="5">
    <tr>
      <th colspan="3"><label>Net Monthly Income</label></th>
    </tr>
    <?php $monthly = $second['income']['monthly']; ?>
    <?php $totalMonthly = 0; foreach($monthly as $row): ?>
      <tr>
        <td><span class="value"><?php echo $row['n']; ?></span></td>
        <td><span class="value"></span></td>
        <td><span class="value">$ <?php echo moneyFormatter("%n", $row['v']); ?></span></td>
        <?php $totalMonthly += $row['v']; ?>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td><span class="value" style="font-weight: bold;">Total</span></td>
      <td><span class="value"></span></td>
      <td><span class="value">$ <?php echo moneyFormatter("%n", $totalMonthly	); ?></span></td>
    </tr>
  </table>
</div>
<br><br>
<!-- end of INCOME INFORMATION -->

<!-- EXPENSES INFORMATION -->
<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Expenses</h5>
<hr /><p></p>

<?php if (isset($second['expenses'])): ?>
    <div class="">
      <table class="table bordered width-100" style="font-size:130%" cellspacing="5">
        <tr>
          <th><label>Expenses</label></th>
          <th><label>Amount</label></th>
          <th><label>Frequency</label></th>
          <th><label>Owner</label></th>
          <th><label>Annual</label></th>
        </tr>
    <?php
        $expensesItems = array(
            'Tax'=> array(
              "Income Tax","Other Tax"
            ),
            'Debt'=> array(
              "Mortgage","Rental Payments","Car Loan","Personal Loans","Student Loans","Hire Purchase","Credit Cards","Overdraft","Other"
            ),
            'Household' => array(
              "Maintenance","Gas","Water","Electricity","Telephone","Mobile Phone","TV"
            ),
            'Vehicles' => array(
              "Petrol","Repairs","Maintenance"
            ),
            'Food' => array(
              "Groceries","Dining Out"
            ),
            'Insurance' => array(
              "Life Insurance","Health","Home and Contents","Vehicles","Other"
            ),
            'Healthcare' => array(
              "Doctor","Dentist","Optical","Pharmaceutical"
            ),
            'Personal Care' => array(
              "Clothing","Dry Cleaning","Hairdressing","Cosmetics","Hygiene"
            ),
            'Entertainment' => array(
              "Memberships","Holidays","Sports","Movies, DVD’s"
            )
        );
        function fetchExpenseFromList($list, $cat, $item){
            $kini = null;

            foreach($list as $l){
                if ($l['cat'] == $cat and $l['item'] == $item){
                    $kini = $l; break;
                }
            }

            return $kini;
        }
    ?>
        <?php $totalAnnual = 0; foreach ($expensesItems as $title=>$exp): ?>
          <tr>
            <td colspan="5">
              <span class="value" style="font-weight: bold; text-align: left;"><?php echo $title; ?></span>
            </td>
          </tr>

          <?php foreach($exp as $e): ?>
            <tr>
              <td><span class="value"><?php echo $e; ?></span></td>
              <?php
                $expItem = fetchExpenseFromList($second['expenses'], $title, $e);
              ?>
              <td><span class="value">$ <?php echo moneyFormatter("%n", $expItem['value']); ?></span></td>
              <td><span class="value"><?php echo $expItem['freq']; ?></span></td>
              <td><span class="value"><?php echo $expItem['owner']; ?></span></td>
              <?php
                $annual = 0;
                if ($expItem['freq'] == "Weekly"){
                    $annual = $expItem['value'] * 48;
                } else if ($expItem['freq'] == "Fortnightly"){
                    $annual = $expItem['value'] * 24;
                } else if ($expItem['freq'] == "Monthly"){
                    $annual = $expItem['value'] * 12;
                }

                $totalAnnual += $annual;
              ?>
              <td><span class="value">$ <?php echo moneyFormatter("%n", $annual); ?></span></td>
            </tr>
          <?php endforeach; ?>

        <?php endforeach; ?>

        <tr>
          <td colspan="4">
            <span class="value" style="font-weight: bold; text-align: left;">Total Expenses </span>
          </td>
          <td><span class="value">$ <?php echo moneyFormatter("%n", $totalAnnual); ?></span></td>
        </tr>
        <tr>
          <td colspan="4">
            <span class="value" style="font-weight: bold; text-align: center;">Surplus/(Deficit) </span>
          </td>
          <td><span class="value">$ <?php echo moneyFormatter("%n", ($clientTotal+$partnerTotal) - $totalAnnual); ?></span></td>
        </tr>

      </table>
    </div>
<?php else: ?>
  <p>No expenses identified.</p>
<?php endif; ?>
<br><br>
<!-- end of EXPENSES INFORMATION -->

<!-- ASSETS INFORMATION -->
<?php
    $assetsItems = array(
      'Real Estate'=>["Primary Residence", "Investment Property"],
      'Vehicles'=>["Car", "Motorcycle", "Pickup", "Truck", "Other"],
      'Lifestyle'=>["Boat", "Art", "Other"],
      'Investment Assets'=>["Cash","Savings","Term Deposits","Managed Funds","Kiwisaver","Shares /Stocks","Bonds","Commodities (Gold..etc)","Other"]
    );
    function fetchAssetsFromList($list, $cat, $item){
        $kini = null;

        foreach($list as $l){
            if ($l['cat'] == $cat and $l['item'] == $item){
                $kini = $l; break;
            }
        }

        return $kini;
    }
?>

<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Assets</h5>
<hr /><p></p>
<?php if (isset($second['assets'])): ?>
<div class="">
  <!-- <h3 class="text-center normal-weight red">Children</h3> -->
  <table class="table bordered width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Assets</label></th>
      <th><label>Description</label></th>
      <th><label>Owner</label></th>
      <th><label>Value</label></th>
    </tr>
      <?php $totalAnnual = 0; foreach ($assetsItems as $title=>$exp): ?>
        <tr>
          <td colspan="5">
            <span class="value" style="font-weight: bold; text-align: left;"><?php echo $title; ?></span>
          </td>
        </tr>

        <?php foreach($exp as $e): ?>
          <tr>
            <td><span class="value"><?php echo $e; ?></span></td>
            <?php
              $expItem = fetchAssetsFromList($second['assets'], $title, $e);
            ?>
            <td><span class="value"><?php echo $expItem['description']; ?></span></td>
            <td><span class="value"><?php echo $expItem['owner']; ?></span></td>
            <td><span class="value">$ <?php echo moneyFormatter("%n", $expItem['value']); ?></span></td>
          </tr>
        <?php endforeach; ?>

      <?php endforeach; ?>
  </table>
</div>
<?php else: ?>
  <p>No assets identified.</p>
<?php endif; ?>
<br><br>
<!-- end of ASSETS INFORMATION -->

<!-- LIABILITIES INFORMATION -->
<?php
    $liabItems = array(
      'Long Term'=> ["Primary Mortgage", "Investment Mortgage", "Personal Loan", "Student Loan", "Car Loan", "Other"],
      'Current'=>["Store Card", "Credit Card", "Hire Purchase", "Overdraft", "Other"]
    );

    function fetchLiabilitiesFromList($list, $cat, $item){
        $kini = null;

        foreach($list as $l){
            if ($l['cat'] == $cat and $l['item'] == $item){
                $kini = $l; break;
            }
        }

        return $kini;
    }
?>
<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Liabilities</h5>
<hr /><p></p>
<?php if (isset($second['liabilities'])): ?>
<div class="">
  <!-- <h3 class="text-center normal-weight red">Children</h3> -->
  <table class="table bordered width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Liabilities</label></th>
      <th><label>Description</label></th>
      <th><label>Owner</label></th>
      <th><label>Value</label></th>
    </tr>
    <?php $totalAnnual = 0; foreach ($liabItems as $title=>$exp): ?>
      <tr>
        <td colspan="5">
          <span class="value" style="font-weight: bold; text-align: left;"><?php echo $title; ?></span>
        </td>
      </tr>

      <?php foreach($exp as $e): ?>
        <tr>
          <td><span class="value"><?php echo $e; ?></span></td>
          <?php
            $expItem = fetchLiabilitiesFromList($second['liabilities'], $title, $e);
          ?>
          <td><span class="value"><?php echo $expItem['description']; ?></span></td>
          <td><span class="value"><?php echo $expItem['owner']; ?></span></td>
          <td><span class="value">$ <?php echo moneyFormatter("%n", $expItem['value']); ?></span></td>
        </tr>
      <?php endforeach; ?>

    <?php endforeach; ?>
  </table>
</div>
<?php else: ?>
  <p>No liabilities identified.</p>
<?php endif; ?>
<br><br>
<!-- end of ASSETS INFORMATION -->

<!-- GOALS AND OBJECTIVES INFORMATION -->
<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Goals and Objectives</h5>
<hr /><p></p>
<div class="">
  <?php if (isset($second['goals'])): ?>
  <table class="table bordered width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <th><label>Goals</label></th>
      <th><label>Type</label></th>
      <th><label>Timeframe</label></th>
      <th><label>Owner</label></th>
    </tr>

    <tr>
    <?php foreach($second['goals'] as $g): ?>
      <tr>
          <td><?php echo $g['goal']; ?></td>
          <td><?php echo $g['type']; ?></td>
          <td><?php echo $g['timeframe']; ?></td>
          <td><?php echo $g['owner']; ?></td>
      </tr>
    <?php endforeach; ?>
    </tr>
  </table>
<?php else: ?>
No goals and/or objectives specified.
<?php endif; ?>
</div>
<!-- end of GOALS AND OBJECTIVES INFORMATION INFORMATION -->

<!-- ESTATE PLANNING -->
<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Estate Planning</h5>
<hr /><p></p>
<div class="">
  <br>
  <h3 class="text-center normal-weight red">Client</h3>
  <?php
    $estateClient = $second['estate']['client'];
  ?>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td style="width:33%">
        <label>Do you have a Will?</label><br />
        <span class="value">
            <?php if (isset($estateClient['will'])){ echo $estateClient['will']; } ?>
        </span>
      </td>
      <td style="width:67%">
        <label>Location of Will:</label><br />
        <span class="value"><?php echo $estateClient['willlocation']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Date of Will:</label><br />
        <?php
          $date = $estateClient['willdate'];
          if ($date != null){
            $arrd = explode("-", $date);
            $newDate = $arrd[1]."/".$arrd[2]."/".$arrd[0];
          } else {
            $newDate = $date;
          }
        ?>
        <span class="value"><?php echo $newDate; ?></span>
      </td>
      <td style="width:33%">
        <label>Is the Will current?</label><br />
        <span class="value">
          <?php if (isset($estateClient['willcurrent'])){ echo $estateClient['willcurrent']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Executor of Will?</label><br />
        <span class="value"><?php echo $estateClient['willexecutor']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Do you have a funeral plan in place?</label><br />
        <span class="value">
          <?php if (isset($estateClient['funeralplan'])){ echo $estateClient['funeralplan']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Do you have a Family Trust in place?</label><br />
        <span class="value">
          <?php if (isset($estateClient['familyhavetrust'])){ echo $estateClient['familyhavetrust']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Purpose of Trust?</label><br />
        <span class="value"><?php echo $estateClient['trustpurpose']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Beneficiaries of Trust?</label><br />
        <span class="value"><?php echo $estateClient['trustbeneficiaries']; ?></span>
      </td>
      <td style="width:33%">
        <label>Trustees of the Family of Trust?</label><br />
        <span class="value"><?php echo $estateClient['familytrust']; ?></span>
      </td>
      <td style="width:33%">
        <label>Are you the trustee of a Family Trust?</label><br />
        <span class="value">
          <span class="value">
            <?php if (isset($estateClient['trustee'])){ echo $estateClient['trustee']; } ?>
          </span>
        </span>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <span style="color: #777; margin-left: 10px; margin-top: 10px; padding-bottom: 5px; display: block;">Enduring Power of Attorney?</span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Name</label><br />
        <span class="value"><?php echo $estateClient['powerattyname']; ?></span>
      </td>
      <td style="width:33%">
        <label>Relationship</label><br />
        <span class="value"><?php echo $estateClient['powerattyrel']; ?></span>
      </td>
      <td style="width:33%">
        <label>Type</label><br />
        <span class="value">
          <?php if (isset($estateClient['powerattytype'])){ echo $estateClient['powerattytype']; } ?>
        </span>
      </td>
    </tr>
  </table>

  <br>
  <h3 class="text-center normal-weight red">Partner</h3>
  <?php
    $estateClient = $second['estate']['partner'];
  ?>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td style="width:33%">
        <label>Do you have a Will?</label><br />
        <span class="value">
            <?php if (isset($estateClient['will'])){ echo $estateClient['will']; } ?>
        </span>
      </td>
      <td style="width:67%">
        <label>Location of Will:</label><br />
        <span class="value"><?php echo $estateClient['willlocation']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Date of Will:</label><br />
        <?php
          $date = $estateClient['willdate'];
          if ($date != null){
            $arrd = explode("-", $date);
            $newDate = $arrd[1]."/".$arrd[2]."/".$arrd[0];
          } else {
            $newDate = $date;
          }
        ?>
        <span class="value"><?php echo $newDate; ?></span>
      </td>
      <td style="width:33%">
        <label>Is the Will current?</label><br />
        <span class="value">
          <?php if (isset($estateClient['willcurrent'])){ echo $estateClient['willcurrent']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Executor of Will?</label><br />
        <span class="value"><?php echo $estateClient['willexecutor']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Do you have a funeral plan in place?</label><br />
        <span class="value">
          <?php if (isset($estateClient['funeralplan'])){ echo $estateClient['funeralplan']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Do you have a Family Trust in place?</label><br />
        <span class="value">
          <?php if (isset($estateClient['familyhavetrust'])){ echo $estateClient['familyhavetrust']; } ?>
        </span>
      </td>
      <td style="width:33%">
        <label>Purpose of Trust?</label><br />
        <span class="value"><?php echo $estateClient['trustpurpose']; ?></span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Beneficiaries of Trust?</label><br />
        <span class="value"><?php echo $estateClient['trustbeneficiaries']; ?></span>
      </td>
      <td style="width:33%">
        <label>Trustees of the Family of Trust?</label><br />
        <span class="value"><?php echo $estateClient['familytrust']; ?></span>
      </td>
      <td style="width:33%">
        <label>Are you the trustee of a Family Trust?</label><br />
        <span class="value">
          <span class="value">
            <?php if (isset($estateClient['trustee'])){ echo $estateClient['trustee']; } ?>
          </span>
        </span>
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <span style="color: #777; margin-left: 10px; margin-top: 10px; padding-bottom: 5px; display: block;">Enduring Power of Attorney?</span>
      </td>
    </tr>
    <tr>
      <td style="width:33%">
        <label>Name</label><br />
        <span class="value"><?php echo $estateClient['powerattyname']; ?></span>
      </td>
      <td style="width:33%">
        <label>Relationship</label><br />
        <span class="value"><?php echo $estateClient['powerattyrel']; ?></span>
      </td>
      <td style="width:33%">
        <label>Type</label><br />
        <span class="value">
          <?php if ($estateClient['powerattyname'] != null) {
              if (isset($estateClient['powerattytype'])){ echo $estateClient['powerattytype']; }
          }
          ?>
        </span>
      </td>
    </tr>
  </table>


  <br>
  <h3 class="text-center normal-weight red">Notes:</h3>
  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td colspan="">
        <label>for Assets:</label><br />
        <span class="value"><?php echo $second['notes']['assets']; ?></span>
      </td>
    </tr>
    <tr>
      <td colspan="">
        <label>for Goals:</label><br />
        <span class="value"><?php echo $second['notes']['goals']; ?></span>
      </td>
    </tr>
  </table>
</div>
<br><br>
<!-- end of ESTATE PLANNING -->







</body>
