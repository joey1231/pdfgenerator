<style type="text/css">
body{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
.pagebreak{margin-top:40px;margin-bottom:40px}.pull-left{float:left}.pull-right{float:right}.width-25{width:25%}.width-50{width:45%}
.width-40{width:40%}.width-60{width:60%}.width-30{width:30%}.width-70{width:70%}.width-100{width:100%}.clearfix{clear:both}
.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-uppercase{text-transform:uppercase}
.red{color:#347Ab8}.pale{opacity:.5}label{color:#777;border-bottom:1px solid #ddd;text-transform:uppercase;font-size:.7em;margin-bottom:10px;margin-left:10px;margin-right:10px}
.value{display:block;margin-top:5px;padding:10px;padding-top:5px;margin-top:0px;font-size:.9em;margin-bottom:20px;margin-right:10px}
.normal-weight{font-weight:normal}.text-center.normal-weight.red{text-align:left}tr th{text-align:left;padding:10px}
tr th label{display:block;padding:0px;border:none;margin-left:0;margin-bottom:0}.table .value{margin-bottom:0}
.table.bordered td,.table.bordered th{border:0px solid #ddd}p{font-size: .9em;}li{font-size: .9em}.table.bordered th{background-color: #efeadd;}
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

    .inside-list {
      padding-left:0px; margin-left:0px;
    }
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
    // print_r($fn);

    $plan = "";
    $sql = "SELECT * FROM product_category WHERE idproduct_category=?";
    $query = $this->db->query($sql, array($fn['id']));
    if ($query->num_rows() > 0){
        $result = $query->result();
        $item = $result[0];

        $plan = $item->name;
    }
?>
<h3 class="sectionn-title"><?php echo $plan; ?> for <?php
if ($fn['owner'] == "partner"){
    $owner = $ff->first->partnerInfo->firstname;
} else {
    $owner = $ff->first->clientInfo->firstname;
}

echo html_entity_decode($owner);
?></h3>
<p></p>

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

<br /><p></p>
