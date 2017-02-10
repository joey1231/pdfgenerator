<style type="text/css">
body{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
.pagebreak{margin-top:40px;margin-bottom:40px}.pull-left{float:left}.pull-right{float:right}.width-25{width:25%}.width-50{width:45%}
.width-40{width:40%}.width-60{width:60%}.width-30{width:30%}.width-70{width:70%}.width-100{width:100%}.clearfix{clear:both}
.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-uppercase{text-transform:uppercase}
.red{color:#e04e67}.pale{opacity:.5}label{color:#777;border-bottom:1px solid #ddd;text-transform:uppercase;font-size:.7em;margin-bottom:10px;margin-left:10px;margin-right:10px}
.value{display:block;margin-top:5px;padding:10px;padding-top:5px;margin-top:0px;font-size:.9em;margin-bottom:20px;margin-right:10px}
.normal-weight{font-weight:normal}.text-center.normal-weight.red{text-align:left}tr th{text-align:left;padding:10px}
tr th label{display:block;padding:0px;border:none;margin-left:0;margin-bottom:0}.table .value{margin-bottom:0}
.table.bordered td,.table.bordered th{border:0px solid #ddd}p{font-size: .9em;}li{font-size: .9em}.table.bordered th{background-color: #efeadd;}
</style>

<?php
    $p2itemsTitle = array(
      "Sum Assured:", "Provider:", "", "Product:", "Benefit:", "Benefit Structure:",
      "Premium Structure:", "Optional Benefits:", "Policy Owner:", "Premium:"
    );
?>

<!-- TRAUMA COVER (need item) -->
<br />
<?php
    $plan = "";
    $sql = "SELECT * FROM product_category WHERE idproduct_category=?";
    $query = $this->db->query($sql, array($fn['id']));
    if ($query->num_rows() > 0){
        $result = $query->result();
        $item = $result[0];

        $plan = $item->name;
    }
?>
<h5 style="text-transform: uppercase; font-style: italic; color: #555; font-size:160%"><?php echo $plan; ?></h5>
<hr /><p></p>
  <!-- <h3 class="text-center normal-weight red">Basic Information</h3> -->

  <?php if (isset($fn['client']) or isset($fn['partner'])): ?>

    <table class="width-100" style="font-size:130%" cellspacing="5">

      <?php
          $clientPlans = $fn['client'];
          $partnerPlans = $fn['partner'];

          // Check first if the items are all empty or not...
          $hasClientItems = false; $hasPartnerItems = false;
          for($i=0; $i < count($clientPlans); $i++){
              if ($clientPlans[$i] != null){
                if ($i == 1){
                  if ($clientPlans[$i] != "No provider."){
                      $hasClientItems = true;
                  }
                } else { $hasClientItems = true; }
              }

              if ($partnerPlans[$i] != null){
                if ($i == 1){
                  if ($partnerPlans[$i] != "No provider."){
                      $hasPartnerItems = true;
                  }
                } else { $hasPartnerItems = true; }
              }
          }
      ?>

      <?php
        $hasBoth = $hasClientItems and $hasPartnerItems;
        if ($hasBoth){

        } else {
            $itemsList = $hasClientItems ? $clientPlans : $partnerPlans;
            $owner = $hasClientItems ? $ff['client']->first_name : $ff['partner']->first_name;

            echo "<tr><td><h3>For ".$owner."</h3></td></tr>";

            foreach($itemsList as $index=>$item):
              $canContinue = true;
              if ($item == null){ $canContinue = false; }
              if ($index == 1 and $item == "No provider."){ $canContinue = false; }

              if ($canContinue):
                $title = $p2itemsTitle[$index];
                $value = $item;

                if ($index == 0){
                  $value = "$ ".moneyFormatter("%n", floatval($item));
                }
        ?>
              <tr><td><label><?php echo $title; ?></label><br>
                <span class="value"><?php echo $value; ?></span>
              </td></tr>
        <?php
              endif;
            endforeach;
        }
      ?>






        <?php $j=0; for($i=0; $i < count($clientPlans); $i++): ?>
            <?php
              $clientItem  = $clientPlans[$i];
              $partnerItem = $partnerPlans[$j];

              $j++;
            ?>
          <tr>

            <td><?php
                if ($clientItem == null){
                  echo "No item";
                } else {
                  echo $clientItem;
                }
            ?></td>
            <td><?php
                if ($partnerItem == null){
                  echo "No item";
                } else {
                  echo $partnerItem;
                }
            ?></td>
          </tr>
        <?php endfor; ?>

    </table>



  <?php else: ?>
      <p>No product details specified.</p>
  <?php endif; ?>



  <table class="width-100" style="font-size:130%" cellspacing="5">
    <tr>
      <td>
        <h3>For <?php echo $ff['client']->first_name; ?></h3>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <h3>For <?php echo $ff['partner']->first_name; ?></h3>
      </td>
      <?php endif; ?>
    </tr>






    <?php $allowWrite = false; ?>
    <?php if ($fn['client'][0] != null or $fn['client'][0] != 0): ?>
        <?php $allowWrite = true; ?>
    <?php endif; ?>
    <?php if ($ff['partner']->first_name != null and ($fn['partner'][0] != null or $fn['partner'][0] != 0)): ?>
        <?php $allowWrite = true; ?>
    <?php endif; ?>


    <tr>
      <td>
        <?php if ($fn['client'][0] != null or $fn['client'][0] != 0): ?>
        <label>Sum Assured:</label><br>
        <span class="value">$ <?php echo moneyFormatter("%n", floatval($fn['client'][0])); ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][0] != null or $fn['partner'][0] != 0): ?>
        <label>Sum Assured:</label><br>
        <span class="value">$ <?php echo moneyFormatter("%n", floatval($fn['partner'][0])); ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][1] == "No provider."): ?>
          <!-- No value here -->
        <?php else: ?>
        <label>Provider:</label><br>
        <?php
            $company = "";
            if ($fn['client'][1] == '-1' or $fn['client'][1] == -1){
              $company = "No provider specified.";
            } else {

              if (is_int($fn['client'][1]) or is_numeric($fn['client'][1])){
                  $sql = "SELECT * FROM company_provider WHERE idcompany_provider=?";
                  $query = $this->db->query($sql, array($fn['client'][1]));
                  if ($query->num_rows() > 0){
                    foreach($query->result() as $r){
                      $company = $r->company_name;
                    }
                  }
              } else {
                  $company = $fn['client'][1];
              }

            }

        ?>
        <span class="value"><?php echo $company; ?></span>
        <?php endif; ?>
      </td>

      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][1] == "No provider."): ?>
          <!-- No value here -->
        <?php else: ?>
        <label>Provider:</label><br>
        <?php
            $company = "";

            if ($fn['partner'][1] == '-1' or $fn['partner'][1] == -1){
              $company = "No provider specified.";
            } else {

              if (is_int($fn['partner'][1]) or is_numeric($fn['partner'][1])){
                  $sql = "SELECT * FROM company_provider WHERE idcompany_provider=?";
                  $query = $this->db->query($sql, array($fn['partner'][1]));
                  if ($query->num_rows() > 0){
                    foreach($query->result() as $r){
                      $company = $r->company_name;
                    }
                  }
              } else {
                  $company = $fn['partner'][1];
              }

            }

        ?>
        <span class="value"><?php echo $company; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>

    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][2] != null): ?>
        <label>Product:</label><br>
        <span class="value"><?php echo $fn['client'][2]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][2] != null): ?>
        <label>Product:</label><br>
        <span class="value"><?php echo $fn['partner'][2]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][3] != null): ?>
        <label>Benefit:</label><br>
        <span class="value"><?php echo $fn['client'][3]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][3] != null): ?>
        <label>Benefit:</label><br>
        <span class="value"><?php echo $fn['partner'][3]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][4] != null): ?>
        <label>Benefit Structure:</label><br>
        <span class="value"><?php echo $fn['client'][4]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][4] != null): ?>
        <label>Benefit Structure:</label><br>
        <span class="value"><?php echo $fn['partner'][4]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][5] != null): ?>
        <label>Premium Structure:</label><br>
        <span class="value"><?php echo $fn['client'][5]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][5] != null): ?>
        <label>Premium Structure:</label><br>
        <span class="value"><?php echo $fn['partner'][5]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][6] != null): ?>
        <label>Optional Benefits:</label><br>
        <span class="value"><?php echo $fn['client'][6]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][6] != null): ?>
        <label>Optional Benefits:</label><br>
        <span class="value"><?php echo $fn['partner'][6]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][7] != null): ?>
        <label>Policy Owner:</label><br>
        <span class="value"><?php echo $fn['client'][7]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][7] != null): ?>
        <label>Policy Owner:</label><br>
        <span class="value"><?php echo $fn['partner'][7]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

    <tr>
      <td>
        <?php if ($fn['client'][8] != null): ?>
        <label>Premium:</label><br>
        <span class="value"><?php echo $fn['client'][8]; ?></span>
        <?php endif; ?>
      </td>
      <?php if ($ff['partner']->first_name != null): ?>
      <td>
        <?php if ($fn['partner'][8] != null): ?>
        <label>Premium:</label><br>
        <span class="value"><?php echo $fn['partner'][8]; ?></span>
        <?php endif; ?>
      </td>
      <?php endif; ?>
    </tr>

  </table>

    <?php if (isset($fn['details'])): ?>
      <div style="font-size: 130%">
      <?php foreach ($fn['details'] as $det): ?>
        <?php if ($det['type'] == "title"): ?>
          <h3><?php echo $det['text']; ?></h3>
        <?php else: ?>
          <p><?php echo $det['text']; ?></p>
        <?php endif; ?>
      <?php endforeach; ?>
      </div>
    <?php endif; ?>


<!-- end of TRAUMA COVER -->
