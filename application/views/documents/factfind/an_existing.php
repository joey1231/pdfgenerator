
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
<!-- Existing Insurance Policies -->
<h5 style="font-weight:100; color: #347AB8;font-size:190%">Existing Insurance Policies</h5>
<hr /><p></p>

<div class="">
  <!-- <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5> -->
  <h3 class="text-center normal-weight red"><?php echo trim($first['clientInfo']['firstname']); ?></h3>
  <table class="table width-100" style="font-size:100%">
    <tr>
        <td width="4%">
            <?php if ($third['clientpolicy']['sel1'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:96%">YOU HAVE NO ‘IN FORCE’ PERSONAL INSURANCE POLICIES</td>
    </tr>
    <tr>
        <td width="4%">
            <?php if ($third['clientpolicy']['sel2'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:96%">YOU HAVE EXISTING PERSONAL INSURANCE POLICIES AND HAVE ASKED ME TO COLLECT THE LATEST INFORMATION FROM YOUR INSURER/S. YOU HAVE COMPLETED AND SIGNED THE LETTER OF AUTHORISATION FORM ATTACHED (ANNEX 1)</td>
    </tr>
    <tr>
      <td width="4%">
          <?php if ($third['clientpolicy']['sel3'] == "yes"): ?>
          <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
          <?php else: ?>
          <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
          <?php endif; ?>
      </td>
      <td style="width:96%">YOU HAVE THE FOLLOWING ‘IN FORCE’ PERSONAL INSURANCE POLICIES:</td>
    </tr>
  </table>

<?php if ( isset($third['clientpolicy']['list']) and count($third['clientpolicy']['list']) > 0): ?>
  <p></p>
    <?php foreach($third['clientpolicy']['list'] as $row): ?>
        <table class="table width-100" style="font-size:130%" cellspacing="3">
          <tr>
            <th width="50%"><label>Insurer</label></th>
            <th width="50%"><label>Benefit Type</label></th>
          </tr>
          <tr>
            <th width="50%"><span class="value"><?php echo $row['insurer']; ?></span></th>
            <th width="50%"><span class="value"><?php echo $row['type']; ?></span></th>
          </tr>
          <tr>
            <th width="33%"><label>Amount</label></th>
            <th width="33%"><label>A/SA</label></th>
            <th width="33%"><label>WP/BP</label></th>
          </tr>
          <tr>
            <td width="33%"><span class="value">$ <?php
                  $v = $row['amount'] == null ? 0 : floatval($row['amount']);
                  echo moneyFormatter("%n", $v);
            ?></span></td>
            <th width="33%"><span class="value"><?php echo $row['asa']; ?></span></th>
            <th width="33%"><span class="value"><?php echo $row['wpbp']; ?></span></th>
          </tr>
          <tr>
            <th width="50%"><label>Premium</label></th>
            <th width="50%"><label>Owner</label></th>
          </tr>
          <tr>
            <th width="50%"><span class="value">$ <?php echo $row['premium']; ?></span></th>
            <th width="50%"><span class="value"><?php echo $row['owner']; ?></span></th>
          </tr>
        </table><p></p><hr /><p></p>
    <?php endforeach; ?>
<?php else: ?>
  <p>Note: No given existing "in force" personal insurance policies.</p>
<?php endif; ?>
</div>

<br>

<?php if (trim($first['partnerInfo']['firstname']) != null): ?>

<div class="">
  <h3 class="text-center normal-weight red"><?php echo trim($first['partnerInfo']['firstname']); ?></h3>
  <table class="table width-100" style="font-size:100%">
    <tr>
        <td width="4%">
            <?php if ($third['partnerpolicy']['sel1'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:96%">YOU HAVE NO ‘IN FORCE’ PERSONAL INSURANCE POLICIES</td>
    </tr>
    <tr>
        <td width="4%">
            <?php if ($third['partnerpolicy']['sel2'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:96%">YOU HAVE EXISTING PERSONAL INSURANCE POLICIES AND HAVE ASKED ME TO COLLECT THE LATEST INFORMATION FROM YOUR INSURER/S. YOU HAVE COMPLETED AND SIGNED THE LETTER OF AUTHORISATION FORM ATTACHED (ANNEX 1)</td>
    </tr>
    <tr>
      <td width="4%">
          <?php if ($third['partnerpolicy']['sel3'] == "yes"): ?>
          <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
          <?php else: ?>
          <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
          <?php endif; ?>
      </td>
      <td style="width:96%">YOU HAVE THE FOLLOWING ‘IN FORCE’ PERSONAL INSURANCE POLICIES:</td>
    </tr>

  </table>

<?php if ( isset($third['partnerpolicy']['list']) and count($third['partnerpolicy']['list']) > 0): ?>
  <p></p>
  <table class="table width-100" style="font-size:130%" cellspacing="3">
    <tr>
      <th width="18%"><label>Insurer</label></th>
      <th width="18%"><label>Benefit Type</label></th>
      <th width="18%"><label>Amount</label></th>
      <th width="5%"><label>A/SA</label></th>
      <th width="5%"><label>WP/BP</label></th>
      <th width="18%"><label>Premium</label></th>
      <th width="18%"><label>Owner</label></th>
    </tr>

<?php foreach($third['partnerpolicy']['list'] as $row): ?>
    <tr>
      <td><span class="value"><?php echo $row['insurer']; ?></span></td>
      <td><span class="value"><?php echo $row['type']; ?></span></td>
      <td  align="left"><span class="value"><?php
            $v = $row['amount'] == null ? 0 : floatval($row['amount']);
            echo moneyFormatter("%n", $v);
      ?></span></td>
      <td><span class="value"><?php echo $row['asa']; ?></span></td>
      <td><span class="value"><?php echo $row['wpbp']; ?></span></td>
      <td  align="left"><span class="value">$ <?php echo $row['premium']; ?></span></td>
      <td><span class="value"><?php echo $row['owner']; ?></span></td>
    </tr>
<?php endforeach; ?>
  </table>
<?php else: ?>
  <p>Note: No given existing "in force" personal insurance policies.</p>
<?php endif; ?>

</div>

<?php endif; ?>

<br><br>
<!-- end of Existing Insurance Policies -->
