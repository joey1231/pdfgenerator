
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

<!-- GOALS AND OBJECTIVES INFORMATION -->
<h2 class="sectionn-title">HEALTH STATUS</h2>
<p></p><p></p>

<?php
  $estateClient = $second['health']['client'];
?>

<?php $name = $first['clientInfo']['firstname']; if (substr($name, -1) == "s"){ $name .= "'"; } else { $name .= "'s"; } ?>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Health Status</b></h3>
<table>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>DESCRIBE CURRENT HEALTH:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['health-q1'])){ echo $estateClient['health-q1']; }
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>ARE YOU CONSIDERING RECEIVING MEDICAL ADVICE FOR ANY CURRENT HEALTH CONDITION?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2'])){
                if ($estateClient['health-q2'] == "Yes" or $estateClient['health-q2'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2'])){
                if ($estateClient['health-q2'] == "No" or $estateClient['health-q2'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IS THERE ANYTHING IN YOUR MEDICAL HISTORY THAT COULD AFFECT AN APPLICATION FOR YOUR INSURANCE?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2y'])){
                if ($estateClient['health-q2y'] == "Yes" or $estateClient['health-q2y'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2y'])){
                if ($estateClient['health-q2y'] == "No" or $estateClient['health-q2y'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IF YES, KINDLY LIST THEM BELOW:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['history-list'])){ echo $estateClient['history-list']; }
      ?>
      </td></tr></table>
      <p></p>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>WHEN PREVIOUSLY SEEKING INSURANCE, HAVE ANY PERSONAL HEALTH, LIFESTYLE OR OCCUPATION ISSUES AFFECTED THE INSURANCE PREMIUM OR POLICY TERMS?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3'])){
                if ($estateClient['health-q3'] == "Yes" or $estateClient['health-q3'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3'])){
                if ($estateClient['health-q3'] == "No" or $estateClient['health-q3'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>DO YOU PARTICIPATE IN ANY HAZARDOUS ACTIVITIES?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3y'])){
                if ($estateClient['health-q3y'] == "Yes" or $estateClient['health-q3y'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3y'])){
                if ($estateClient['health-q3y'] == "No" or $estateClient['health-q3y'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IF YES, HAZARDOUS ACTIVITIES YOU'RE PARTICIPATING IN:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['hazard-list'])){ echo $estateClient['hazard-list']; }
      ?>
      </td></tr></table>
    </td>
  </tr>

</table>


<?php if ($first['partnerInfo']['firstname'] != null): ?>
<?php
  $estateClient = $second['health']['partner'];
?>

<h3>&nbsp;</h3>

<?php $name = $first['partnerInfo']['firstname']; if (substr($name, -1) == "s"){ $name .= "'"; } else { $name .= "'s"; } ?>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Health Status</b></h3>
<table>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>DESCRIBE CURRENT HEALTH:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['health-q1'])){ echo $estateClient['health-q1']; }
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>ARE YOU CONSIDERING RECEIVING MEDICAL ADVICE FOR ANY CURRENT HEALTH CONDITION?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2'])){
                if ($estateClient['health-q2'] == "Yes" or $estateClient['health-q2'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2'])){
                if ($estateClient['health-q2'] == "No" or $estateClient['health-q2'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IS THERE ANYTHING IN YOUR MEDICAL HISTORY THAT COULD AFFECT AN APPLICATION FOR YOUR INSURANCE?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2y'])){
                if ($estateClient['health-q2y'] == "Yes" or $estateClient['health-q2y'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q2y'])){
                if ($estateClient['health-q2y'] == "No" or $estateClient['health-q2y'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IF YES, KINDLY LIST THEM BELOW:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['history-list'])){ echo $estateClient['history-list']; }
      ?>
      </td></tr></table>
      <p></p>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>WHEN PREVIOUSLY SEEKING INSURANCE, HAVE ANY PERSONAL HEALTH, LIFESTYLE OR OCCUPATION ISSUES AFFECTED THE INSURANCE PREMIUM OR POLICY TERMS?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3'])){
                if ($estateClient['health-q3'] == "Yes" or $estateClient['health-q3'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3'])){
                if ($estateClient['health-q3'] == "No" or $estateClient['health-q3'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>DO YOU PARTICIPATE IN ANY HAZARDOUS ACTIVITIES?</td></tr></table>
    </td>
    <td width="30%">
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3y'])){
                if ($estateClient['health-q3y'] == "Yes" or $estateClient['health-q3y'] == "Yes"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; YES </td>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['health-q3y'])){
                if ($estateClient['health-q3y'] == "No" or $estateClient['health-q3y'] == "No"){
                    $isYes = true;
                }
            }
          ?>
          <?php if ($isYes): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png">
          <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png">
          <?php endif; ?>
        </td>
        <td width="40%">&nbsp; NO </td>
      </tr></table>
    </td>
  </tr>
  <tr>
    <td width="70%">
      <table class="tbl-title"><tr><td>IF YES, HAZARDOUS ACTIVITIES YOU'RE PARTICIPATING IN:</td></tr></table>
    </td>
    <td width="30%">
      <table class="tbl-value"><tr><td><?php
          if (isset($estateClient['hazard-list'])){ echo $estateClient['hazard-list']; }
      ?>
      </td></tr></table>
    </td>
  </tr>

</table>

<?php endif; ?>

<h3>&nbsp;</h3>

<h2 class="sectionn-title">NOTES</h2>
<p></p><p></p>
<table class="width-100" style="font-size:130%" cellspacing="5">
  <tr>
    <td width="100%">
      <span class="value"><?php echo $second['notes']['assets']; ?></span>
    </td>
  </tr>
</table>
