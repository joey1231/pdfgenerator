
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
<?php $first = $data['first']; ?>

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

<h2 class="sectionn-title">YOUR ASSETS</h2>
<p></p><p></p>
<?php if (isset($second['assets'])): ?>
<div class="">
  <!-- <h3 class="text-center normal-weight red">Children</h3> -->
  <table class="table ff-table" style="font-size:110%" cellpadding="5">
    <tr class="head-table">
      <th>Assets</th>
      <th>Description</th>
      <th>Owner</th>
      <th>Value</th>
    </tr>
      <?php
          $generalAssets = 0;
          $clientAssets  = 0;
          $partnerAssets = 0;
      ?>

      <?php $totalAnnual = 0; foreach ($assetsItems as $title=>$exp): ?>
        <tr>
          <td colspan="5">
            <span class="value" style="font-weight: bold; text-align: left;"><?php echo $title; ?></span>
          </td>
        </tr>

        <?php $even = true; foreach($exp as $e): ?>
          <tr <?php if ($even): $even = false; ?>class="ff-tbl-alt"<?php else: $even = true; endif; ?> >
            <td><span class="value"><?php echo $e; ?></span></td>
            <?php
              $expItem = fetchAssetsFromList($second['assets'], $title, $e);
              if ($expItem['owner'] == trim($first['clientInfo']['firstname'])){
                  $clientAssets += floatval($expItem['value']);
              } else if ($expItem['owner'] == trim($first['partnerInfo']['firstname'])){
                  $partnerAssets += floatval($expItem['value']);
              } else {
                  $generalAssets += floatval($expItem['value']);
              }
            ?>
            <td><span class="value"><?php echo $expItem['description']; ?></span></td>
            <td><span class="value"><?php echo $expItem['owner']; ?></span></td>
            <td><span class="value">$ <?php echo moneyFormatter("%n", $expItem['value']); ?></span></td>

          </tr>
        <?php endforeach; ?>

      <?php endforeach; ?>


      <?php if ($first['clientInfo']['firstname'] != null): ?>
        <tr>
          <td colspan="3" class="value" align="right">Total assets owned by <?php echo $first['clientInfo']['firstname']; ?>:</td>
          <td class="value">$ <?php echo moneyFormatter("%n", $clientAssets); ?></td>
        </tr>
      <?php endif; ?>
      <?php if ($first['partnerInfo']['firstname'] != null): ?>
        <tr>
          <td colspan="3" class="value" align="right">Total assets owned by <?php echo $first['partnerInfo']['firstname']; ?>:</td>
          <td class="value">$ <?php echo moneyFormatter("%n", $partnerAssets); ?></td>
        </tr>
      <?php endif; ?>
      <tr>
        <td colspan="3" class="value" align="right"><b>Total assets:</b></td>
        <?php $generalAssets = $generalAssets + $partnerAssets + $clientAssets; ?>
        <td class="value">$ <?php echo moneyFormatter("%n", $generalAssets); ?></td>
      </tr>

  </table>
</div>
<?php else: ?>
  <p>No assets identified.</p>
<?php endif; ?>
<br><br>
<!-- end of ASSETS INFORMATION -->
