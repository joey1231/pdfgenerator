<html>
<head>
	<title>PDF</title>
	<style type="text/css">
	body{
		font-family: arial;
		/* width: 960px; */
		margin: auto;
		display: block;
		position: relative;
	}

  label {
    display:block;
  }

	.inline{
		display: inline !important;
	}

	.pagebreak{
		margin-top: 40px;
		margin-bottom: 40px;
	}

	.pull-left{
		float: left;
	}

	.pull-right{
		float: right;
	}

	.width-25{
		width: 25%;
	}

	.width-50{
		width: 45%;
	}
	.width-40{
		width: 40%;
	}
	.width-60{
		width: 60%;
	}

	.width-30{
		width: 30%;
	}
	.width-70{
		width: 70%;
	}
	.width-100{
		width: 100%;
	}


	.clearfix{
		clear: both;
	}

	.text-center{
		text-align: center;
	}
	.text-left{
		text-align: left;
	}
	.text-right{
		text-align: right;
	}
	.text-uppercase{
		text-transform: uppercase;
	}

	.red{
		color: #e04e67;
	}

	.green{

	}

	.pale{
		opacity: .5;
	}

	label{
		/*color: #777;
		text-transform: uppercase;
		font-size: .7em;
		margin-bottom: 10px;*/
		color: #777;
	    border-bottom: 1px solid #ddd;
	    text-transform: uppercase;
	    font-size: .7em;
	    margin-bottom: 10px;
	    margin-left: 10px;
	    margin-right: 10px;
	}

	.value{
		/*display: block;
	    margin-top: 5px;
	    border: 1px solid #ddd;
	    padding: 10px;
	    font-size: .8em;*/
	    display: block;
	    margin-top: 5px;
	    /* border: 1px solid #ddd; */
	    padding: 10px;
	    padding-top: 5px;
	    margin-top: 0px;
	    /* margin-left: 10px; */
	    font-size: .9em;
	    margin-bottom: 20px;
	    margin-right: 10px;
	}

	.normal-weight{
		font-weight: normal;
	}

	.text-center.normal-weight.red{
		text-align: left;
	}

	table.width-100{
		/*width: unset;
		margin: auto;*/
	}
	tr th{
		text-align: left;
	    padding: 10px;
	    /* background-color: #eee; */
	}
	tr th label{
	    display: block;
	    padding: 0px;
	    border: none;
	    margin-left: 0;
	    margin-bottom: 0;
	}

	.table .value{
		margin-bottom: 0;
	}

	.table.bordered td, .table.bordered th{
		border: 1px solid #ddd;
	}

	</style>
</head>
	<body>
		<p></p><p></p><p></p><p></p><p></p><p></p>
    <table>
      <tr>

				<?php //print_r($_user); ?>
				<?php $first = $data['first']; ?>
          <td width="50%">
              <img src="<?php echo base_url(); ?>resource/img/coverpic.png" style="width: 200px;" >
          </td>
          <td width="50%" align="center" style="font-size:150%">
            <p></p><p></p><p></p><p></p><p></p>
            <h1 align="center" style="color:#A43926;font-size:200%">Client Needs Analysis and Fact Find</h1>
            <br>
            <h5 class="pale">Completed by:</h5>
            <br>
            <br><!-- Adviser -->
						<p></p>
						<span><?php echo $_user['info']->first_name." ".$_user['info']->last_name; ?></span>
            <h4 style="border-top: 1px solid #777; width: 60%; margin-left: auto; margin-right: auto;">Adviser</h4>
            <br>
            <h5 class="pale">For</h5>
            <br>
            <br><!-- Client -->
						<p></p>
						<span><?php
								$text = "";
								$text = $first['clientInfo']['firstname']." ".$first['clientInfo']['surname'];

								if ($first['partnerInfo']['firstname'] != null){
										$text .= " and ".$first['partnerInfo']['firstname']." ".$first['partnerInfo']['surname'];
								}

								echo $text;
						?></span>
            <h4 style="border-top: 1px solid #777; width: 60%; margin-left: auto; margin-right: auto;">Client</h4>
            <br>
            <h5 class="pale">on</h5>
            <br>
            <br><!-- DATE -->
						<p></p>
						<span><?php echo date("Y/m/d"); ?></span>
            <h4 style="border-top: 1px solid #777; width: 60%; margin-left: auto; margin-right: auto;">Date</h4>
          </td>
      </tr>
    </table>

    <p></p><p></p><p></p><p></p><p></p><p></p>

    <!-- BASIC INFORMATION -->
		<div class="" style="font-size:130%">

			<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Client Information</h5>
      <hr /><p></p>
			<h3 class="text-center normal-weight red">Basic Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Title:</label><br />
						<span class="value"><?php echo $first['clientInfo']['title']; ?></span>
					</td>
					<td>
						<label>First Name:</label><br />
						<span class="value"><?php echo $first['clientInfo']['firstname']; ?></span>
					</td>
					<td>
						<label>Second Name:</label><br />
						<span class="value"><?php echo $first['clientInfo']['secondname']; ?></span>
					</td>
					<td>
						<label>Surname:</label><br />
						<span class="value"><?php echo $first['clientInfo']['surname']; ?></span>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<label>Preferred Name:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prefname']; ?></span>
					</td>
					<td>
						<label>Date of Birth:</label><br />
						<span class="value"><?php echo $first['clientInfo']['dob']; ?></span>
					</td>
					<td>
						<label>Gender:</label><br />
						<span class="value"><?php echo $first['clientInfo']['gender']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Contact Information</h3>
			<table class="width-100"  cellspacing="5">
				<tr>
					<td>
						<label>Home Phone:</label><br />
						<span class="value"><?php echo $first['clientInfo']['homephone']; ?></span>
					</td>
					<td>
						<label>Work Phone:</label><br />
						<span class="value"><?php echo $first['clientInfo']['workphone']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile Phone:</label><br />
						<span class="value"><?php echo $first['clientInfo']['mobilephone']; ?></span>
					</td>
					<td>
						<label>Email Address:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['email']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Address Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Street Address:</label><br />
						<span class="value"><?php echo $first['clientInfo']['stradd']; ?></span>
					</td>
					<td>
						<label>Suburb:</label><br />
						<span class="value"><?php echo $first['clientInfo']['suburb']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>City:</label><br />
						<span class="value"><?php echo $first['clientInfo']['city']; ?></span>
					</td>
					<td>
						<label>Postcode:</label><br />
						<span class="value"><?php echo $first['clientInfo']['postcode']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Current Employment</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Occupation:</label><br />
						<span class="value"><?php echo $first['clientInfo']['occupation']; ?></span>
					</td>
					<td colspan="3">
						<label>Job Title:</label><br />
						<span class="value"><?php echo $first['clientInfo']['jobtitle']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label><br />
						<span class="value"><?php echo $first['clientInfo']['grosswages']; ?></span>
					</td>
					<td colspan="2">
						<label>Employer:</label><br />
						<span class="value"><?php echo $first['clientInfo']['employername']; ?></span>
					</td>
					<td>
						<label>Status:</label><br />
						<?php
							$employeeStatus = null;
							if (isset($first['clientInfo']['empstatus'])){
									$employeeStatusValue = $first['clientInfo']['empstatus'];

									if ($employeeStatusValue == "ft"){
											$employeeStatus = "Full Time";
									} else if ($employeeStatusValue == "pt"){
											$employeeStatus = "Part Time";
									} else if ($employeeStatusValue == "cs"){
											$employeeStatus = "Casual";
									} else if ($employeeStatusValue == "un"){
											$employeeStatus = "Unemployed";
									}
							}
						?>
						<span class="value"><?php echo $employeeStatus; ?></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label><br />
						<span class="value"><?php echo $first['clientInfo']['emplyears']; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label><br />
						<span class="value"><?php echo $first['clientInfo']['paidleave']; ?></span>
					</td>
					<td>
						<label>Start Date:</label><br />
						<span class="value"><?php echo $first['clientInfo']['emplstart']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Administrative Duties(%):</label><br />
						<span class="value"><?php echo $first['clientInfo']['adminduties']; ?></span>
					</td>
					<td colspan="2">
						<label>Travel Duties(%):</label><br />
						<span class="value"><?php echo $first['clientInfo']['travelduties']; ?></span>
					</td>
					<td>
						<label>Manual Duties(%):</label><br />
						<span class="value"><?php echo $first['clientInfo']['manualduties']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Previous Employment</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Occupation:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevocc']; ?></span>
					</td>
					<td colspan="2">
						<label>Job Title:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevjob']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevsalary']; ?></span>
					</td>
					<td>
						<label>Employer:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevemployer']; ?></span>
					</td>
					<td>
						<label>Status:</label><br />
						<?php
							$employeeStatus = null;
							if (isset($first['clientInfo']['prevempstatus'])){
									$employeeStatusValue = $first['clientInfo']['prevempstatus'];

									if ($employeeStatusValue == "ft"){
											$employeeStatus = "Full Time";
									} else if ($employeeStatusValue == "pt"){
											$employeeStatus = "Part Time";
									} else if ($employeeStatusValue == "cs"){
											$employeeStatus = "Casual";
									} else if ($employeeStatusValue == "un"){
											$employeeStatus = "Unemployed";
									}
							}
						?>
						<span class="value"><?php echo $employeeStatus; ?></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevlength']; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevleave']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Start Date:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevstart']; ?></span>
					</td>
					<td colspan="2">
						<label>End Date:</label><br />
						<span class="value"><?php echo $first['clientInfo']['prevend']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Tax Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Tax Resident Status:</label><br />
						<?php
							$investor_rate = null;
							if (isset($first['clientInfo']['taxresident'] )){
									$investor_rate = $first['clientInfo']['taxresident'];
							}
						?>
						<span class="value"><?php echo $investor_rate; ?></span>
					</td>
					<td colspan="2">
						<label>If not, what country are you resident:</label><br />
						<span class="value"><?php echo $first['clientInfo']['nonresicountry']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>IRD Number:</label><br />
						<span class="value"><?php echo $first['clientInfo']['irdnum']; ?></span>
					</td>
					<td>
						<label>Prescribed Investor Rate:</label><br />
						<?php
							$investor_rate = null;
							if (isset($first['clientInfo']['investorrate'] )){
									$investor_rate = $first['clientInfo']['investorrate'];
							}
						?>
						<span class="value"><?php echo $investor_rate; ?></span>
					</td>
				</tr>
			</table>

		</div>

    <div class="" style="font-size:130%">
			<h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Partner Information</h5>
      <hr /><p></p>
			<h3 class="text-center normal-weight red">Basic Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Title:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['title']; ?></span>
					</td>
					<td>
						<label>First Name:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['firstname']; ?></span>
					</td>
					<td>
						<label>Second Name:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['secondname']; ?></span>
					</td>
					<td>
						<label>Surname:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['surname']; ?></span>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<label>Preferred Name:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prefname']; ?></span>
					</td>
					<td>
						<label>Date of Birth:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['dob']; ?></span>
					</td>
					<td>
						<label>Gender:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['gender']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Contact Information</h3>
			<table class="width-100"  cellspacing="5">
				<tr>
					<td>
						<label>Home Phone:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['homephone']; ?></span>
					</td>
					<td>
						<label>Work Phone:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['workphone']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile Phone:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['mobilephone']; ?></span>
					</td>
					<td>
						<label>Email Address:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['email']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Address Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Street Address:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['stradd']; ?></span>
					</td>
					<td>
						<label>Suburb:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['suburb']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>City:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['city']; ?></span>
					</td>
					<td>
						<label>Postcode:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['postcode']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Current Employment</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Occupation:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['occupation']; ?></span>
					</td>
					<td colspan="3">
						<label>Job Title:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['jobtitle']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['grosswages']; ?></span>
					</td>
					<td colspan="2">
						<label>Employer:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['employername']; ?></span>
					</td>
					<td>
						<label>Status:</label><br />
						<?php
							$employeeStatus = null;
							if (isset($first['partnerInfo']['empstatus'])){
									$employeeStatusValue = $first['partnerInfo']['empstatus'];

									if ($employeeStatusValue == "ft"){
											$employeeStatus = "Full Time";
									} else if ($employeeStatusValue == "pt"){
											$employeeStatus = "Part Time";
									} else if ($employeeStatusValue == "cs"){
											$employeeStatus = "Casual";
									} else if ($employeeStatusValue == "un"){
											$employeeStatus = "Unemployed";
									}
							}
						?>
						<span class="value"><?php echo $employeeStatus; ?></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label><br />
						<span class="value"><?php echo $first['partnerInfo']['emplyears']; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['paidleave']; ?></span>
					</td>
					<td>
						<label>Start Date:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['emplstart']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Administrative Duties(%):</label><br />
						<span class="value"><?php echo $first['partnerInfo']['adminduties']; ?></span>
					</td>
					<td colspan="2">
						<label>Travel Duties(%):</label><br />
						<span class="value"><?php echo $first['partnerInfo']['travelduties']; ?></span>
					</td>
					<td>
						<label>Manual Duties(%):</label><br />
						<span class="value"><?php echo $first['partnerInfo']['manualduties']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Previous Employment</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Occupation:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevocc']; ?></span>
					</td>
					<td colspan="2">
						<label>Job Title:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevjob']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevsalary']; ?></span>
					</td>
					<td>
						<label>Employer:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevemployer']; ?></span>
					</td>
					<td>
						<label>Status:</label><br />
						<?php
							$employeeStatus = null;
							if (isset($first['partnerInfo']['prevempstatus'])){
									$employeeStatusValue = $first['partnerInfo']['prevempstatus'];

									if ($employeeStatusValue == "ft"){
											$employeeStatus = "Full Time";
									} else if ($employeeStatusValue == "pt"){
											$employeeStatus = "Part Time";
									} else if ($employeeStatusValue == "cs"){
											$employeeStatus = "Casual";
									} else if ($employeeStatusValue == "un"){
											$employeeStatus = "Unemployed";
									}
							}
						?>
						<span class="value"><?php echo $employeeStatus; ?></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevlength']; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevleave']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Start Date:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevstart']; ?></span>
					</td>
					<td colspan="2">
						<label>End Date:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['prevend']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Tax Information</h3>
			<table class="width-100" cellspacing="5">
				<tr>
					<td>
						<label>Tax Resident Status:</label><br />
						<?php
							$investor_rate = null;
							if (isset($first['partnerInfo']['taxresident'] )){
									$investor_rate = $first['partnerInfo']['taxresident'];
							}
						?>
						<span class="value"><?php echo $investor_rate; ?></span>
					</td>
					<td colspan="2">
						<label>If not, what country are you resident:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['nonresicountry']; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>IRD Number:</label><br />
						<span class="value"><?php echo $first['partnerInfo']['irdnum']; ?></span>
					</td>
					<td>
						<label>Prescribed Investor Rate:</label><br />
						<?php
							$investor_rate = null;
							if (isset($first['partnerInfo']['investorrate'] )){
									$investor_rate = $first['partnerInfo']['investorrate'];
							}
						?>
						<span class="value"><?php echo $investor_rate; ?></span>
					</td>
				</tr>
			</table>

		</div>
    <!-- END BASIC INFORMATION -->


    <!-- CHILDREN INFORMATION -->
    <h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Children/Dependents</h5>
    <hr /><p></p>
		<div class="" >
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<?php if (isset($first['children'])): ?>

					<table class="table width-100" style="font-size:130%" cellspacing="5">
						<tr>
							<th><label>Name</label></th>
							<th><label>Date of Birth</label></th>
							<th><label>Relationship</label></th>
							<th><label>Dependant of:</label></th>
						</tr>

					<?php foreach($first['children'] as $row): ?>
						<tr>
							<td><span class="value"><?php echo $row['name']; ?></span></td>
							<td><span class="value"><?php echo $row['dob']; ?></span></td>
							<td><span class="value"><?php echo $row['relation']; ?></span></td>
							<td><span class="value"><?php echo $row['dependant']; ?></span></td>
						</tr>
					<?php endforeach; ?>
					</table>

			<?php else: ?>
				<p>No children registered.</p>
			<?php endif; ?>
		</div>
		<br><br>
		<!-- end of CHILDREN INFORMATION -->

    <!-- PROFESSIONAL ADVISERS -->
    <h5 style="text-transform: uppercase; font-style: italic; color: #555;font-size:160%">Professional Advisers</h5>
    <hr /><p></p>
		<div class="">
			<br>
			<h3 class="text-center normal-weight red" style="font-size:130%">Accountant</h3>
			<table class="width-100" style="font-size:130%" cellspacing="5">
				<tr>
					<td width="50%">
						<label>Accountant Name:</label><br />
						<span class="value"><?php echo $first['accountant']['name']; ?></span>
					</td>
					<td width="50%">
						<label>Company Name:</label><br />
						<span class="value"><?php echo $first['accountant']['company']; ?></span>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<label>Street Address:</label><br />
						<span class="value"><?php echo $first['accountant']['street']; ?></span>
					</td>
					<td width="33%">
						<label>Suburb:</label><br />
						<span class="value"><?php echo $first['accountant']['suburb']; ?></span>
					</td>
					<td width="33%">
						<label>City:</label><br />
						<span class="value"><?php echo $first['accountant']['city']; ?></span>
					</td>
				</tr>
				<tr>
					<td width="50%">
						<label>Work Phone:</label><br />
						<span class="value"><?php echo $first['accountant']['workphone']; ?></span>
					</td>
					<td width="50%">
						<label>Email:</label><br />
						<span class="value"><?php echo $first['accountant']['email']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red" style="font-size:130%">Solicitor</h3>
			<table class="width-100" style="font-size:130%" cellspacing="5">
				<tr>
					<td width="50%">
						<label>Solicitor Name:</label><br />
						<span class="value"><?php echo $first['solicitor']['name']; ?></span>
					</td>
					<td width="50%">
						<label>Company Name:</label><br />
						<span class="value"><?php echo $first['solicitor']['company']; ?></span>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<label>Street Address:</label><br />
						<span class="value"><?php echo $first['solicitor']['street']; ?></span>
					</td>
					<td width="33%">
						<label>Suburb:</label><br />
						<span class="value"><?php echo $first['solicitor']['suburb']; ?></span>
					</td>
					<td width="33%">
						<label>City:</label><br />
						<span class="value"><?php echo $first['solicitor']['city']; ?></span>
					</td>
				</tr>
				<tr>
					<td width="50%">
						<label>Work Phone:</label><br />
						<span class="value"><?php echo $first['solicitor']['workphone']; ?></span>
					</td>
					<td width="50%">
						<label>Email:</label><br />
						<span class="value"><?php echo $first['solicitor']['email']; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red" style="font-size:130%">Notes:</h3>
			<table class="width-100" style="font-size:130%" cellspacing="5">
				<tr>
					<td colspan="">
						<label>for Basic Information </label><br />
						<span class="value"><?php echo $first['notes']; ?></span>
					</td>
				</tr>
			</table>
		</div>
		<br>
		<!-- end of PROFESSIONAL ADVISERS -->






















    <!-- style="font-size:130%" cellspacing="5"> -->
</body>
</html>
