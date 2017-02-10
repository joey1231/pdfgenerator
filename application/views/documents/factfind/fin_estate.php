
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
<h2 class="sectionn-title">ESTATE PLANNING</h2>
<p></p><p></p>

<?php
  $estateClient = $second['estate']['client'];
?>
<?php $name = $first['clientInfo']['firstname']; if (substr($name, -1) == "s"){ $name .= "'"; } else { $name .= "'s"; } ?>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Estate Planning</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A WILL?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['will'])){
                if ($estateClient['will'] == "Yes" or $estateClient['will'] == "Yes"){
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
            if (isset($estateClient['will'])){
                if ($estateClient['will'] == "No" or $estateClient['will'] == "No"){
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
    <td width="67%">
      <table class="tbl-title"><tr><td>LOCATION OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['willlocation'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>IS THE WILL CURRENT?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['willcurrent'])){
                if ($estateClient['willcurrent'] == "Yes" or $estateClient['willcurrent'] == "Yes"){
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
            if (isset($estateClient['willcurrent'])){
                if ($estateClient['willcurrent'] == "No" or $estateClient['willcurrent'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>DATE OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
        $date = $estateClient['willdate'];
        if ($date != null){
          $arrd = explode("-", $date);
          $newDate = $arrd[2]."/".$arrd[1]."/".$arrd[0];
        } else {
          $newDate = $date;
        } echo $newDate;
      ?>
      </td></tr></table>
    </td>

    <td width="33%">
      <table class="tbl-title"><tr><td>EXECUTOR OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['willexecutor'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A FUNERAL PLAN IN PLACE?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['funeralplan'])){
                if ($estateClient['funeralplan'] == "Yes" or $estateClient['funeralplan'] == "Yes"){
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
            if (isset($estateClient['funeralplan'])){
                if ($estateClient['funeralplan'] == "No" or $estateClient['funeralplan'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A FAMILY TRUST IN PLACE?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['familyhavetrust'])){
                if ($estateClient['familyhavetrust'] == "Yes" or $estateClient['familyhavetrust'] == "Yes"){
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
            if (isset($estateClient['familyhavetrust'])){
                if ($estateClient['familyhavetrust'] == "No" or $estateClient['familyhavetrust'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>PURPOSE OF TRUST?</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['trustpurpose'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>ARE YOU THE TRUSTEE OF A FAMILY TRUST?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['trustee'])){
                if ($estateClient['trustee'] == "Yes" or $estateClient['trustee'] == "Yes"){
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
            if (isset($estateClient['trustee'])){
                if ($estateClient['trustee'] == "No" or $estateClient['trustee'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>BENEFICIARIES OF TRUST</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['trustbeneficiaries'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>TRUSTEES OF THE FAMILY OF TRUST</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['familytrust'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>

  </tr>
</table>
<p></p><p></p>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Enduring Power of Attorney</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $estateClient['powerattyname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>RELATIONSHIP</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $estateClient['powerattyrel'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>TYPE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            if (isset($estateClient['powerattytype'])){
                $toPrint = $estateClient['powerattytype'];
            } else { $toPrint = null; }

            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
    </tr>
</table>

<?php if ($first['partnerInfo']['firstname'] != null): ?>
<?php
    $estateClient = $second['estate']['partner'];
?>

<h3>&nbsp;</h3>

<?php $name = $first['partnerInfo']['firstname']; if (substr($name, -1) == "s"){ $name .= "'"; } else { $name .= "'s"; } ?>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Estate Planning</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A WILL?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['will'])){
                if ($estateClient['will'] == "Yes" or $estateClient['will'] == "Yes"){
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
            if (isset($estateClient['will'])){
                if ($estateClient['will'] == "No" or $estateClient['will'] == "No"){
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
    <td width="67%">
      <table class="tbl-title"><tr><td>LOCATION OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['willlocation'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>IS THE WILL CURRENT?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['willcurrent'])){
                if ($estateClient['willcurrent'] == "Yes" or $estateClient['willcurrent'] == "Yes"){
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
            if (isset($estateClient['willcurrent'])){
                if ($estateClient['willcurrent'] == "No" or $estateClient['willcurrent'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>DATE OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
        $date = $estateClient['willdate'];
        if ($date != null){
          $arrd = explode("-", $date);
          $newDate = $arrd[2]."/".$arrd[1]."/".$arrd[0];
        } else {
          $newDate = $date;
        } echo $newDate;
      ?>
      </td></tr></table>
    </td>

    <td width="33%">
      <table class="tbl-title"><tr><td>EXECUTOR OF WILL</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['willexecutor'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A FUNERAL PLAN IN PLACE?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['funeralplan'])){
                if ($estateClient['funeralplan'] == "Yes" or $estateClient['funeralplan'] == "Yes"){
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
            if (isset($estateClient['funeralplan'])){
                if ($estateClient['funeralplan'] == "No" or $estateClient['funeralplan'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>DO YOU HAVE A FAMILY TRUST IN PLACE?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['familyhavetrust'])){
                if ($estateClient['familyhavetrust'] == "Yes" or $estateClient['familyhavetrust'] == "Yes"){
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
            if (isset($estateClient['familyhavetrust'])){
                if ($estateClient['familyhavetrust'] == "No" or $estateClient['familyhavetrust'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>PURPOSE OF TRUST?</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['trustpurpose'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
  </tr>
  <tr>
    <td width="33%">
      <table class="tbl-title"><tr><td>ARE YOU THE TRUSTEE OF A FAMILY TRUST?</td></tr></table>
      <table><tr>
        <td width="10%">
          <?php
            $isYes = false;
            if (isset($estateClient['trustee'])){
                if ($estateClient['trustee'] == "Yes" or $estateClient['trustee'] == "Yes"){
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
            if (isset($estateClient['trustee'])){
                if ($estateClient['trustee'] == "No" or $estateClient['trustee'] == "No"){
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
    <td width="33%">
      <table class="tbl-title"><tr><td>BENEFICIARIES OF TRUST</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['trustbeneficiaries'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>
    <td width="33%">
      <table class="tbl-title"><tr><td>TRUSTEES OF THE FAMILY OF TRUST</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $estateClient['familytrust'];
          echo $toPrint;
        ?>
      </td></tr></table>
    </td>

  </tr>
</table>
<p></p><p></p>
<h3 class="text-center normal-weight" align="left"><b><?php echo $name; ?> Enduring Power of Attorney</b></h3>
<table cellpadding="1" cellspacing="1">
  <tr>
      <td width="33%">
        <table class="tbl-title"><tr><td>NAME</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $estateClient['powerattyname'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>RELATIONSHIP</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            $toPrint = $estateClient['powerattyrel'];
            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
      <td width="33%">
        <table class="tbl-title"><tr><td>TYPE</td></tr></table>
        <table class="tbl-value"><tr><td><?php
            if (isset($estateClient['powerattytype'])){
                $toPrint = $estateClient['powerattytype'];
            } else { $toPrint = null; }

            echo $toPrint;
          ?>
        </td></tr></table>
      </td>
    </tr>
</table>

<?php endif; ?>
