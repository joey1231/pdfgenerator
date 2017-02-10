
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
<?php $second = $data['second']; ?>
<h2 class="sectionn-title">YOUR EXPENSE INFORMATION</h2>
<p></p><p></p>
<?php if (isset($second['expenses'])): ?>
    <div class="">
      <table class="table ff-table" style="font-size:110%" cellpadding="5">
        <tr class="head-table">
          <th>Expenses</th>
          <th>Amount</th>
          <th>Frequency</th>
          <th>Owner</th>
          <th>Annual</th>
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

          <?php $even = true; foreach($exp as $e): ?>
            <tr <?php if ($even): $even = false; ?>class="ff-tbl-alt"<?php else: $even = true; endif; ?> >
              <td><span class="value"><?php echo $e; ?></span></td>
              <?php
                $expItem = fetchExpenseFromList($second['expenses'], $title, $e);
              ?>
              <td align="right"><span class="value">$ <?php echo number_format($expItem['value'], 2, ".", ","); ?></span></td>
              <td><span class="value"><?php echo $expItem['freq']; ?></span></td>
              <td><span class="value"><?php echo $expItem['owner']; ?></span></td>
              <?php
                $annual = 0;
                if ($expItem['freq'] == "Weekly"){
                    $annual = $expItem['value'] * 52;
                } else if ($expItem['freq'] == "Fortnightly"){
                    $annual = $expItem['value'] * 26;  // was 26.0714;
                } else if ($expItem['freq'] == "Monthly"){
                    $annual = $expItem['value'] * 12;
                } else {
                    $annual = $expItem['value'];
                }

                $totalAnnual += $annual;
              ?>
              <td align="right"><span class="value">$ <?php echo number_format($annual, 2, ".", ","); ?></span></td>
            </tr>
          <?php endforeach; ?>

        <?php endforeach; ?>

        <tr>
          <td colspan="4">
            <span class="value" style="font-weight: bold; text-align: left;">Total Expenses </span>
          </td>
          <td align="right"><span class="value">$ <?php echo number_format($totalAnnual, 2, ".", ","); ?></span></td>
        </tr>
        <tr>
          <td colspan="4">
            <?php
            $clientTotal = $GLOBALS['clientTotal'];
            $partnerTotal = $GLOBALS['partnerTotal'];
            $allTotal = $GLOBALS['totalIncome']
            ?>
            <span class="value" style="font-weight: bold; text-align: center;">Surplus/(Deficit) </span>
          </td>
          <td align="right"><span class="value">$ <?php echo number_format($allTotal - $totalAnnual, 2, ".", ","); ?></span></td>
        </tr>

      </table>
    </div>
<?php else: ?>
  <p>No expenses identified.</p>
<?php endif; ?>
<br><br>
