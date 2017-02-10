
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

<table width="100%" cellspacing="5">
	<tr>
		<?php if ($_user['company']->idfirm == 3): ?>
			<td width="100%" align="right"><img src="<?php echo base_url(); ?>resource/2/letterhead.png" style="width: 75px;" ></td>
		<?php endif; ?>

		<?php if ($_user['company']->idfirm == 2): ?>
			<td width="100%" align="right"><img src="<?php echo base_url(); ?>resource/1/img.png" style="width: 75px;" ></td>
		<?php endif; ?>
	</tr>
</table>

<h2 class="sectionn-title">LETTER OF AUTHORITY</h2>
<p></p><p></p>

<?php $first = $data->first; ?>
<?php $loa = $data->loa; ?>
<?php $enquiryItems = $loa->enquiryItems; ?>
<?php $tradingPersons = $loa->tradingPersons; ?>

<?php // execute for client name ?>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr>
    <td width="30%"><b>Trading As:</b></td>
    <td width="70%"><?php
        $title = $first->clientInfo->firstname." ".$first->clientInfo->surname;
        echo $title;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="30%"><b>Address:</b></td>
    <td width="70%"><?php
        $title = $first->clientInfo->stradd." ".$first->clientInfo->suburb." ".$first->clientInfo->city;
        echo $title;
      ?></td>
  </tr>
  <tr>
    <td width="30%"><b>Date of Birth:</b></td>
    <td width="70%"><?php
        $title = $first->clientInfo->dob;
        echo $title;
    ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="30%"><b>Email Address:</b></td>
    <td width="70%"><?php
        $title = $first->clientInfo->email;
        echo $title;
    ?></td>
  </tr>
  <tr>
    <td width="30%"><b>Phone Number:</b></td>
    <td width="70%"><?php
        $title = $first->clientInfo->homephone;
        echo $title;
    ?></td>
  </tr>
</table>
<br /><br />

<?php if ($first->partnerInfo->firstname != null): ?>

  <table class="table ff-table" style="font-size:115%;margin-top:20px" cellpadding="5">
    <tr>
      <td width="30%"><b>Trading As:</b></td>
      <td width="70%"><?php
          $title = $first->partnerInfo->firstname." ".$first->partnerInfo->surname;
          echo $title;
      ?></td>
    </tr>
    <tr class="ff-tbl-alt">
      <td width="30%"><b>Address:</b></td>
      <td width="70%"><?php
          $title = $first->partnerInfo->stradd." ".$first->partnerInfo->suburb." ".$first->partnerInfo->city;
          echo $title;
        ?></td>
    </tr>
    <tr>
      <td width="30%"><b>Date of Birth:</b></td>
      <td width="70%"><?php
          $title = $first->partnerInfo->dob;
          echo $title;
      ?></td>
    </tr>
    <tr class="ff-tbl-alt">
      <td width="30%"><b>Email Address:</b></td>
      <td width="70%"><?php
          $title = $first->partnerInfo->email;
          echo $title;
      ?></td>
    </tr>
    <tr>
      <td width="30%"><b>Phone Number:</b></td>
      <td width="70%"><?php
          $title = $first->partnerInfo->homephone;
          echo $title;
      ?></td>
    </tr>
  </table>
  <br />



<?php endif; ?>

<?php
  $user_info = $_user['info'];
  $user_company = $_user['company'];
?>

<p></p>
<table width="100%"  style="font-size:115%">
  <tr>
    <td width="50%">
      <p style="text-align:justify;"><b><?php echo $user_company->firm_name; ?></b> has our authority to examine our insurance and to prepare a report and quotation
      We agree for <?php echo $user_company->firm_name; ?> to access any client information pertaining to applicable loadings, exclusions, and rationale
      for these including medical information. I/We understand that this is an authority to report and quote only. It is not
      an authority to act as a broker. If this report and quotation is acceptable, I/we will sign an "Authority to Act
      As Broker".
      </p>
      <p style="text-align:justify;">This appointment remains in full force and effect until cancelled in writing. Please provide information regardless
        of whether or not they have an Agency with my insurer. This letter also authorizes <?php echo $user_company->firm_name; ?> to obtain from, or
        disclose to any insurer, insurance broker or other appropriate party any information required to enable them to meet
        their obligations to us under this appointment. We acknowledge and consent to <?php echo $user_company->firm_name; ?> receiving consideration
        from the insurers that <?php echo $user_company->firm_name; ?> places our business with.
      </p>
    </td>
    <td width="50%">
      <p><b>To make enquires on my/out behalf; and be given copies of any (tick those that apply):</b></p>
      <table width="100%" cellpadding="2">
        <?php foreach ($enquiryItems as $e): ?>
          <tr>
            <td width="5%"><?php
              if ($e->checkbox == "false"){
                $img = base_url().'resource/img/ch_u.png';
              } else {
                $img = base_url().'resource/img/ch_c.png';
              }
           ?><img src="<?php echo $img; ?>">
            </td>
            <td width="95%"><?php echo $e->text; ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </td>
  </tr>
</table>

<p></p>
<table cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>CLIENT NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $title = $first->clientInfo->firstname." ".$first->clientInfo->surname;
          echo $title;
        ?>
      </td></tr></table>
    </td>

  <?php if ($first->partnerInfo->firstname != null): ?>
    <td width="50%">
      <table class="tbl-title"><tr><td>PARTNER NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          //$toPrint = $first->partnerInfo->firstname == null ? "" : $first->partnerInfo->firstname;
          $title = $first->partnerInfo->firstname." ".$first->partnerInfo->surname;
          echo $title;
      ?>
      </td></tr></table>
    </td>
  <?php endif; ?>
  </tr>
  <tr>
    <td width="50%">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td style="margin-left:-10px;padding-left:0px">
            <table class="tbl-title"><tr><td>DATE OF BIRTH</td></tr></table>
            <table class="tbl-value"><tr><td><?php
                  $date = $first->clientInfo->dob;
                  //if ($date != null){
                  //  $arrd = explode("-", $date);
                  //  $newDate = $arrd[1]."/".$arrd[2]."/".$arrd[0];
                  //} else {
                    $newDate = $date;
                  //}

                  echo $newDate;
              ?>
            </td></tr></table>
          </td>
          <td>
            <table class="tbl-title"><tr><td>SIGNATURE</td></tr></table>
            <table class="tbl-value"><tr><td>&nbsp;</td></tr></table>
          </td>
        </tr>
      </table>

    </td>

  <?php if ($first->partnerInfo->firstname != null): ?>
    <td width="50%">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <td>
            <table class="tbl-title"><tr><td>DATE OF BIRTH</td></tr></table>
            <table class="tbl-value"><tr><td><?php
                  $date = $first->partnerInfo->dob;
                  //if ($date != null){
                  //  $arrd = explode("-", $date);
                  //  $newDate = $arrd[1]."/".$arrd[2]."/".$arrd[0];
                  //} else {
                    $newDate = $date;
                  //}

                  echo $newDate;
              ?>
            </td></tr></table>
          </td>
          <td>
            <table class="tbl-title"><tr><td>SIGNATURE</td></tr></table>
            <table class="tbl-value"><tr><td>&nbsp;</td></tr></table>
          </td>
        </tr>
      </table>
    </td>
  <?php endif; ?>
  </tr>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>DATE</td></tr></table>
      <table class="tbl-value"><tr><td><?php echo date("d/m/Y"); ?></td></tr></table>
    </td>

  <?php if ($first->partnerInfo->firstname != null): ?>
    <td width="50%">
      <table class="tbl-title"><tr><td>DATE</td></tr></table>
      <table class="tbl-value"><tr><td><?php echo date("d/m/Y"); ?></td></tr></table>
    </td>
  <?php endif; ?>
  </tr>

</table>
