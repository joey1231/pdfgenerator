
<!--
<style type="text/css">
body{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
.pagebreak{margin-top:40px;margin-bottom:40px}.pull-left{float:left}.pull-right{float:right}.width-25{width:25%}.width-50{width:45%}
.width-40{width:40%}.width-60{width:60%}.width-30{width:30%}.width-70{width:70%}.width-100{width:100%}.clearfix{clear:both}
.text-center{text-align:center}.text-left{text-align:left}.text-right{text-align:right}.text-uppercase{text-transform:uppercase}
.red{color:#347Ab8}.pale{opacity:.5}label{color:#777;border-bottom:1px solid #ddd;text-transform:uppercase;font-size:.7em;margin-bottom:10px;margin-left:10px;margin-right:10px}
.value{display:block;margin-top:5px;padding:10px;padding-top:5px;margin-top:0px;font-size:.9em;margin-bottom:20px;margin-right:10px}
.normal-weight{font-weight:normal}.text-center.normal-weight.red{text-align:left}tr th{text-align:left;padding:10px}
tr th label{display:block;padding:0px;border:none;margin-left:0;margin-bottom:0}.table .value{margin-bottom:0}
.table.bordered td,.table.bordered th{border:1px solid #ddd}
</style>

-->


<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700);
body { font-family: "Source Sans Pro", sans-serif; }
h1 { font-size: 440%; color: #205478; font-weight:200; }
</style>

<?php $first = $ff->first; ?>

<body>
<p></p><p></p>
<table width="100%" cellspacing="5">
	<tr>
		<?php if ($_user['company']->idfirm == 3): ?>
			<td width="100%" align="right"><img src="<?php echo base_url(); ?>resource/2/letterhead.png" style="width: 75px;" ></td>
		<?php endif; ?>

		<?php if ($_user['company']->idfirm == 2): ?>
			<td width="100%" align="right"><img src="<?php echo base_url(); ?>resource/1/img.png" style="width: 75px;" ></td>
		<?php endif; ?>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td width="1%" style="background-color:#205478">&nbsp;</td>
		<td width="2%">&nbsp;</td>
		<td width="57%"><h1>Your Insurance<br />Plan</h1></td>
		<td width="40%" style="background-color:#205478">&nbsp;</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td width="100%" align="center" style="font-size:140%">for:</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td width="100%" align="center" style="font-size:190%">
			<?php
				$text = "";
				$text = $first->clientInfo->firstname." ".$first->clientInfo->surname;

				if ($first->partnerInfo->firstname != null){
						$text .= " and ".$first->partnerInfo->firstname." ".$first->partnerInfo->surname;
				}

				echo $text;
			?>
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
		<td width="50%" style="font-size:140%;color:#444;letter-spacing:1px">COMPLETED BY:</td>
		<td width="50%" align="right" style="font-size:140%;color:#444;letter-spacing:1px">DATE COMPLETED:</td>
	</tr>
	<tr>
		<td width="50%" align="left" style="font-size:140%">
			<?php
				echo $_user['info']->first_name." ".$_user['info']->last_name;
			?><br />
			Registered Financial Advisor<br />
			<?php echo $_user['company']->firm_name; ?><br />
			<?php
					// print_r($_user);
					$fspr = $_user['info']->fspr_number;
					if ($_user['company']->idfirm == 3){
							echo "Company #: 3069025 <br />";
					} else if ($_user['company']->idfirm == 2){
							echo "Company #: 5898228 <br />";	
					}

					echo "FSP #: ".$fspr." <br />";
			?>
		</td>
		<td width="50%" align="right" style="font-size:140%">
			<?php echo date("d F y"); ?>
		</td>
	</tr>
</table>
</body>
