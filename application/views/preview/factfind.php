<!DOCTYPE html>
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
		text-align: left;
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
		/*width: 100%;*/
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
	thead th{
		text-align: left;
	    padding: 10px;
	    background-color: #eee;
	}
	thead th label{
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
	<body id="template-body">

	<?php //print_r($_POST["d"]); ?>
	<?php $data = $_POST["d"]; ?>

		<br>

		<h2 class="text-left normal-weight">Personal Client Details</h2>
		<hr>

		<!-- BASIC INFORMATION -->
		<div class="">
			<h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5>
			<h3 class="text-center normal-weight red">Basic Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Title:</label>
						<span class="value">
							<?php
							if($data["first"]["clientInfo"]["othertitle"] == "")
								echo $data["first"]["clientInfo"]["title"];
							else
								echo $data["first"]["clientInfo"]["othertitle"];
							?>
						</span>
					</td>
					<td>
						<label>First Name:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["firstname"]; ?></span>
					</td>
					<td>
						<label>Second Name:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["secondname"]; ?></span>
					</td>
					<td>
						<label>Last Name:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["surname"]; ?></span>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<label>Preferred Name:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prefname"]; ?></span>
					</td>
					<td>
						<label>Date of Birth:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["dob"]; ?></span>
					</td>
					<td>
						<label>Gender:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["gender"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Contact Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Home Phone:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["homephone"]; ?></span>
					</td>
					<td>
						<label>Work Phone:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["workphone"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile Phone:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["mobilephone"]; ?></span>
					</td>
					<td>
						<label>Email Address:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["email"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Address Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Street Address:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["stradd"]; ?></span>
					</td>
					<td>
						<label>Suburb:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["suburb"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>City:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["city"]; ?></span>
					</td>
					<td>
						<label>Postcode:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["postcode"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Current Employment</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Occupation:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["occupation"]; ?></span>
					</td>
					<td colspan="3">
						<label>Job Title:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["jobtitle"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["grosswages"]; ?></span>
					</td>
					<td colspan="2">
						<label>Employer:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["employername"]; ?></span>
					</td>
					<td>
						<label>Status:</label>
						<span class="value"></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["emplyears"]; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["paidleave"]; ?></span>
					</td>
					<td>
						<label>Start Date:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["emplstart"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Administrative Duties(%):</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["adminduties"]; ?></span>
					</td>
					<td colspan="2">
						<label>Travel Duties(%):</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["travelduties"]; ?></span>
					</td>
					<td>
						<label>Manual Duties(%):</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["manualduties"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Previous Employment</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Occupation:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevocc"]; ?></span>
					</td>
					<td colspan="2">
						<label>Job Title:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevjob"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevsalary"]; ?></span>
					</td>
					<td>
						<label>Employer:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevemployer"]; ?></span>
					</td>
					<td>
						<label>Status:</label>
						<span class="value"></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevlength"]; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevleave"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Start Date:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevstart"]; ?></span>
					</td>
					<td colspan="2">
						<label>End Date:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["prevend"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Tax Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Tax Resident Status:</label>
					</td>
					<td colspan="2">
						<label>If not, what country are you resident:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["nonresicountry"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>IRD Number:</label>
						<span class="value"><?php echo $data["first"]["clientInfo"]["irdnum"]; ?></span>
					</td>
					<td>
						<label>Prescribed Investor Rate:</label>
						<span class="value">0.75%</span>
					</td>
				</tr>
			</table>

			<br>
			<br>

		</div>
		<hr>
		<div class="">
			<h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Partner</h5>

			<h3 class="text-center normal-weight red">Basic Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Title:</label>
						<span class="value">
							<?php
							if($data["first"]["partnerInfo"]["othertitle"] == "")
								echo $data["first"]["partnerInfo"]["title"];
							else
								echo $data["first"]["partnerInfo"]["othertitle"];
							?>
						</span>
					</td>
					<td>
						<label>First Name:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["firstname"]; ?></span>
					</td>
					<td>
						<label>Second Name:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["secondname"]; ?></span>
					</td>
					<td>
						<label>Last Name:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["surname"]; ?></span>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<label>Preferred Name:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prefname"]; ?></span>
					</td>
					<td>
						<label>Date of Birth:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["dob"]; ?></span>
					</td>
					<td>
						<label>Gender:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["gender"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Contact Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Home Phone:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["homephone"]; ?></span>
					</td>
					<td>
						<label>Work Phone:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["workphone"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Mobile Phone:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["mobilephone"]; ?></span>
					</td>
					<td>
						<label>Email Address:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["email"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Address Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Street Address:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["stradd"]; ?></span>
					</td>
					<td>
						<label>Suburb:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["suburb"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>City:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["city"]; ?></span>
					</td>
					<td>
						<label>Postcode:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["postcode"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Current Employment</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Occupation:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["occupation"]; ?></span>
					</td>
					<td colspan="3">
						<label>Job Title:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["jobtitle"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["grosswages"]; ?></span>
					</td>
					<td colspan="2">
						<label>Employer:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["employername"]; ?></span>
					</td>
					<td>
						<label>Status:</label>
						<span class="value"></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["emplyears"]; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["paidleave"]; ?></span>
					</td>
					<td>
						<label>Start Date:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["emplstart"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Administrative Duties(%):</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["adminduties"]; ?></span>
					</td>
					<td colspan="2">
						<label>Travel Duties(%):</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["travelduties"]; ?></span>
					</td>
					<td>
						<label>Manual Duties(%):</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["manualduties"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Previous Employment</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Occupation:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevocc"]; ?></span>
					</td>
					<td colspan="2">
						<label>Job Title:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevjob"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Gross Salary:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevsalary"]; ?></span>
					</td>
					<td>
						<label>Employer:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevemployer"]; ?></span>
					</td>
					<td>
						<label>Status:</label>
						<span class="value"></span>
					</td>
				</tr>
				<tr>
					<td><br></td>
				</tr>
				<tr>
					<td>
						<label>Length (In Years):</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevlength"]; ?></span>
					</td>
					<td colspan="2">
						<label>Paid Leave Owing:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevleave"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Start Date:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevstart"]; ?></span>
					</td>
					<td colspan="2">
						<label>End Date:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["prevend"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Tax Information</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Tax Resident Status:</label>
					</td>
					<td colspan="2">
						<label>If not, what country are you resident:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["nonresicountry"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>IRD Number:</label>
						<span class="value"><?php echo $data["first"]["partnerInfo"]["irdnum"]; ?></span>
					</td>
					<td>
						<label>Prescribed Investor Rate:</label>
						<span class="value">0.75% wala</span>
					</td>
				</tr>
			</table>

			<br>
			<br>
		</div>
		<!-- end of BASIC INFORMATION -->

		<!-- CHILDREN INFORMATION -->
		<h2 class="text-left normal-weight">Children</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table width-100">
				<thead>
					<th><label>Name</label></th>
					<th><label>Date of Birth</label></th>
					<th><label>Relationship</label></th>
					<th><label>Dependant of:</label></th>
				</thead>
				<tr>
					<td><span class="value">Myllse Buttocks</span></td>
					<td><span class="value">01/12/15</span></td>
					<td><span class="value">Waifu</span></td>
					<td><span class="value">Voldemort Bandiola</span></td>
				</tr>
				<tr>
					<td><span class="value">Myllse Buttocks</span></td>
					<td><span class="value">01/12/15</span></td>
					<td><span class="value">Waifu</span></td>
					<td><span class="value">Voldemort Bandiola</span></td>
				</tr>
			</table>
		</div>
		<br><br>
		<!-- end of CHILDREN INFORMATION -->

		<!-- PROFESSIONAL ADVISERS -->
		<h2 class="text-left normal-weight">Professional Advisers</h2>
		<hr>
		<div class="">
			<br>
			<h3 class="text-center normal-weight red">Accountant</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Accountant Name:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["name"]; ?></span>
					</td>
					<td>
						<label>Company Name:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["company"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Street Address:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["street"]; ?></span>
					</td>
					<td>
						<label>Suburb:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["suburb"]; ?></span>
					</td>
					<td>
						<label>City:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["city"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Work Phone:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["workphone"]; ?></span>
					</td>
					<td>
						<label>Email:</label>
						<span class="value"><?php echo $data["first"]["accountant"]["email"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Solicitor</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Accountant Name:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["name"]; ?></span>
					</td>
					<td>
						<label>Company Name:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["company"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Street Address:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["street"]; ?></span>
					</td>
					<td>
						<label>Suburb:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["suburb"]; ?></span>
					</td>
					<td>
						<label>City:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["city"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Work Phone:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["workphone"]; ?></span>
					</td>
					<td>
						<label>Email:</label>
						<span class="value"><?php echo $data["first"]["solicitor"]["email"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Notes:</h3>
			<table class="width-100">
				<tr>
					<td colspan="">
						<label>for Basic Information </label>
						<span class="value"><?php echo $data["first"]["notes"]; ?></span>
					</td>
				</tr>
			</table>
		</div>
		<br><br>
		<!-- end of PROFESSIONAL ADVISERS -->

		<!-- INCOME INFORMATION -->
		<h2 class="text-left normal-weight">Income</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table bordered width-100">
				<thead>
					<th><label></label></th>
					<th><label>Client</label></th>
					<th><label>Partner</label></th>
				</thead>
				<tr>
					<td><span class="value">Wages/ Salary</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["0"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["0"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Bonuses</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["1"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["1"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Commissions</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["2"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["2"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Investment Interest</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["3"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["3"]["v"]; ?></span></td>
				</tr>

				<tr>
					<td><span class="value">Investment Dividends</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["4"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["4"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Rental Income </span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["5"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["5"]["v"]; ?></span></td>
				</tr>

				<tr>
					<td><span class="value">Pension Income</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["6"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["6"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Trade Income</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["7"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["7"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Royalties</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["8"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["8"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Business Income</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["9"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["9"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Other Income</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["client"]["10"]["v"]; ?></span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["pa"]["partner"]["10"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value" style="font-weight: bold">Total Gross Income </span></td>
					<td><span class="value">$
						<?php
							$totalpa1 = 0;
							foreach ($data["second"]["income"]["pa"]["client"] as $val){
								$totalpa1 = $totalpa1 + $val["v"];
							}
							echo number_format($totalpa1);
						?>
					</span></td>
					<td><span class="value">$
						<?php
							$totalpa2 = 0;
							foreach ($data["second"]["income"]["pa"]["partner"] as $val){
								$totalpa2 = $totalpa2 + $val["v"];
							}
							echo number_format($totalpa2);
						?>
					</span></td>
				</tr>
				<tr>
					<td><span class="value" style="font-weight: bold" colspan="2">Combined </span></td>
					<td><span class="value">$ <?php echo $totalpa1 + $totalpa2; ?></span></td>
				</tr>
			</table>
			<br><br>
			<table class="table bordered width-100">
				<thead>
					<th colspan="2"><label>Net Monthly Income</label></th>
				</thead>
				<tr>
					<td><span class="value">Client/Applicant 1</span></td>
					<td><span class="value">$ <?php echo $data["second"]["income"]["monthly"]["0"]["v"]; ?></span></td>
					<!-- <td><span class="value">$</span></td> -->
				</tr>
				<tr>
					<td><span class="value">Client/Applicant 2</span></td>
					<!-- <td><span class="value"></span></td> -->
					<td><span class="value">$ <?php echo $data["second"]["income"]["monthly"]["1"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Rental Income</span></td>
					<!-- <td><span class="value"></span></td> -->
					<td><span class="value">$ <?php echo $data["second"]["income"]["monthly"]["2"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value">Other Income</span></td>
					<!-- <td><span class="value"></span></td> -->
					<td><span class="value">$ <?php echo $data["second"]["income"]["monthly"]["3"]["v"]; ?></span></td>
				</tr>
				<tr>
					<td><span class="value" style="font-weight: bold;">Total</span></td>
					<!-- <td><span class="value"></span></td> -->
					<td>
						<span class="value">$
							<?php
								$totalmo1 = 0;
									foreach ($data["second"]["income"]["monthly"] as $val){
										$totalmo1 = $totalmo1 + $val["v"];
									}
								echo number_format($totalmo1);
							?>
						</span>
					</td>
				</tr>
			</table>
		</div>
		<br><br>
		<!-- end of INCOME INFORMATION -->

		<!-- EXPENSES INFORMATION -->
		<h2 class="text-left normal-weight">Expense</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table bordered width-100">
				<thead>
					<tr>
						<th><label>Category</label></th>
						<th><label>Item</label></th>
						<th><label>Frequency</label></th>
						<th><label>Owner</label></th>
						<th><label>Amount</label></th>
						<th><label>Annual</label></th>
					</tr>
				</thead>

				<?php
					if(isset($data["second"]["expenses"])){
						$annual_exp_total = 0;
						foreach( $data["second"]["expenses"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["cat"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["item"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["freq"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["value"]?></span>
						</td>

						<td>
							<span class="value">
								<?php
									$annual1 = 0;
									if($val["freq"]=="Weekly")
										$annual1 = $val["value"] * 4 * 12;
									else if($val["freq"]=="Fortnightly")
										$annual1 = $val["value"] * 4 * 12;
									else
										$annual1 = $val["value"] * 12;
									echo number_format($annual1);

									$annual_exp_total = $annual_exp_total + $annual1;
								?>
							</span>
						</td>
					</tr>

				<?php
						}
					}
				?>

				<tr>
					<td colspan="4"><span class="value">Total</span></td>
					<td><span class="value">
						<?php
							if(isset($data["second"]["expenses"])){
								$value_exp_total = 0;
								foreach( $data["second"]["expenses"] as $val){
									$value_exp_total = $value_exp_total + $val["value"];
								}
								echo number_format($value_exp_total);
							}
						?></span>
					</td>
					<td><span class="value">
						<?php
							if(isset($data["second"]["expenses"])){
								echo number_format($annual_exp_total);
							}
						?></span>
					</td>
				</tr>

			</table>
		</div>
		<br><br>
		<!-- end of EXPENSES INFORMATION -->

		<!-- ASSETS INFORMATION -->
		<h2 class="text-left normal-weight">Assets</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table bordered width-100">
				<thead>
					<tr>
						<th><label>Category</label></th>
						<th><label>Item</label></th>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Value</label></th>
					<tr>
				</thead>

				<?php
					if(isset($data["second"]["assets"])){
						foreach( $data["second"]["assets"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["cat"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["item"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["description"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo number_format($val["value"]);?></span>
						</td>

					</tr>

				<?php
						}
					}
				?>

				<tr>
					<td colspan="4"><span class="value">Total</span></td>
					<td><span class="value">
						<?php
							if(isset($data["second"]["assets"])){
								$value_asset_total = 0;
								foreach( $data["second"]["assets"] as $val){
									$value_asset_total = $value_asset_total + $val["value"];
								}
								echo number_format($value_asset_total);
							}
						?></span>
					</td>
				</tr>

			</table>
		</div>
		<br><br>
		<!-- end of ASSETS INFORMATION -->

		<!-- LIABILITIES INFORMATION -->
		<h2 class="text-left normal-weight">Liabilities</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table bordered width-100">
				<thead>
					<tr>
						<th><label>Liabilities</label></th>
						<th><label>Item</label></th>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Value</label></th>
					</tr>
				</thead>

				<?php
					if(isset($data["second"]["liabilities"])){
						foreach( $data["second"]["liabilities"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["cat"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["item"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["description"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo number_format($val["value"])?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>

				<tr>
					<td colspan="4"><span class="value">Total</span></td>
					<td><span class="value">
						<?php
							if(isset($data["second"]["liabilities"])){
								$value_liability_total = 0;
								foreach( $data["second"]["liabilities"] as $val){
									$value_liability_total = $value_liability_total + $val["value"];
								}
								echo number_format($value_liability_total);
							}
						?></span>
					</td>
				</tr>


			</table>
		</div>
		<br><br>
		<!-- end of ASSETS INFORMATION -->

		<!-- GOALS AND OBJECTIVES INFORMATION -->
		<h2 class="text-left normal-weight">Goals and Objectives</h2>
		<hr>
		<div class="">
			<!-- <h3 class="text-center normal-weight red">Children</h3> -->
			<table class="table bordered width-100">
				<thead>
					<tr>
						<th><label>Goals</label></th>
						<th><label>Type</label></th>
						<th><label>Timeframe</label></th>
						<th><label>Owner</label></th>
					</tr>
				</thead>

				<?php
					if(isset($data["second"]["goals"])){
						foreach( $data["second"]["goals"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["goal"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["type"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["timeframe"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>

			</table>
		</div>
		<br><br>
		<!-- end of GOALS AND OBJECTIVES INFORMATION INFORMATION -->

		<!-- ESTATE PLANNING -->
		<h2 class="text-left normal-weight">Estate Planning</h2>
		<hr>
		<div class="">
			<br>
			<h3 class="text-center normal-weight red">Client</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Do you have a Will?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["will"]; ?></span>
					</td>
					<td colspan="2">
						<label>Location of Will:</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["willlocation"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Date of Will:</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["willdate"]; ?></span>
					</td>
					<td>
						<label>Is the Will current?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["willcurrent"]; ?></span>
					</td>
					<td>
						<label>Executor of Will?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["willexecutor"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Do you have a funeral plan in place?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["funeralplan"]; ?></span>
					</td>
					<td>
						<label>Do you have a Family Trust in place?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["familyhavetrust"]; ?></span>
					</td>
					<td>
						<label>Purpose of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["trustpurpose"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Beneficiaries of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["trustbeneficiaries"]; ?></span>
					</td>
					<td>
						<label>Trustees of the Family of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["trustee"]; ?></span>
					</td>
					<td>
						<label>Are you the trustee of a Family Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["familytrust"]; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<span style="color: #777; margin-left: 10px; margin-top: 10px; padding-bottom: 5px; display: block;">Enduring Power of Attorney?</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Name</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["powerattyname"]; ?></span>
					</td>
					<td>
						<label>Relationship</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["powerattyrel"]; ?></span>
					</td>
					<td>
						<label>Type</label>
						<span class="value"><?php echo $data["second"]["estate"]["client"]["powerattytype"]; ?></span>
					</td>
				</tr>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Partner</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>Do you have a Will?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["will"]; ?></span>
					</td>
					<td colspan="2">
						<label>Location of Will:</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["willlocation"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Date of Will:</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["willdate"]; ?></span>
					</td>
					<td>
						<label>Is the Will current?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["willcurrent"]; ?></span>
					</td>
					<td>
						<label>Executor of Will?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["willexecutor"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Do you have a funeral plan in place?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["funeralplan"]; ?></span>
					</td>
					<td>
						<label>Do you have a Family Trust in place?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["familyhavetrust"]; ?></span>
					</td>
					<td>
						<label>Purpose of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["trustpurpose"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Beneficiaries of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["trustbeneficiaries"]; ?></span>
					</td>
					<td>
						<label>Trustees of the Family of Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["trustee"]; ?></span>
					</td>
					<td>
						<label>Are you the trustee of a Family Trust?</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["familytrust"]; ?></span>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<span style="color: #777; margin-left: 10px; margin-top: 10px; padding-bottom: 5px; display: block;">Enduring Power of Attorney?</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Name</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["powerattyname"]; ?></span>
					</td>
					<td>
						<label>Relationship</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["powerattyrel"]; ?></span>
					</td>
					<td>
						<label>Type</label>
						<span class="value"><?php echo $data["second"]["estate"]["partner"]["powerattytype"]; ?></span>
					</td>
				</tr>
			</table>


			<br>
			<h3 class="text-center normal-weight red">Notes Assets:</h3>
			<table class="width-100">
				<tr>
					<td colspan="">
						<label></label>
						<span class="value"><span class="value"><?php echo $data["second"]["notes"]["assets"]; ?></span>
					</td>
				</tr>
			</table>
			<br>
			<h3 class="text-center normal-weight red">Notes Goals and Objectives:</h3>
			<table class="width-100">
				<tr>
					<td colspan="">
						<label></label>
						<span class="value"><span class="value"><?php echo $data["second"]["notes"]["goals"]; ?></span>
					</td>
				</tr>
			</table>
		</div>
		<br><br>
		<!-- end of ESTATE PLANNING -->

		<!-- Existing Insurance Policies -->
		<h2 class="text-left normal-weight">Existing Insurance Policies</h2>
		<hr>
		<div class="">

			<h3 class="text-center normal-weight red">Client</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>YOU HAVE NO ‘IN FORCE’ PERSONAL INSURANCE POLICIES</label>
						<span class="value"><?php echo $data["third"]["clientpolicy"]["sel1"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>YOU HAVE EXISTING PERSONAL INSURANCE POLICIES AND HAVE ASKED ME TO COLLECT THE LATEST INFORMATION FROM YOUR INSURER/S. YOU HAVE COMPLETED AND SIGNED THE LETTER OF AUTHORISATION FORM ATTACHED (ANNEX 1)</label>
						<span class="value"><?php echo $data["third"]["clientpolicy"]["sel2"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>YOU HAVE THE FOLLOWING ‘IN FORCE’ PERSONAL INSURANCE POLICIES:</label>
						<span class="value"><?php echo $data["third"]["clientpolicy"]["sel3"]; ?></span>
					</td>
				</tr>
			</table>

			<table class="table width-100">
				<thead>
					<th><label>Insurer</label></th>
					<th><label>Benefit Type</label></th>
					<th><label>Benefit Amount</label></th>
					<th><label>A/SA:</label></th>
					<th><label>WP/BP:</label></th>
					<th><label>Premium</label></th>
					<th><label>Owner</label></th>
				</thead>
				<?php
					if(isset($data["third"]["clientpolicy"]["list"])){
						foreach( $data["third"]["clientpolicy"]["list"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["insurer"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["type"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amount"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["asa"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["wpbp"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["premium"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>
		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Partner</h3>
			<table class="width-100">
				<tr>
					<td>
						<label>YOU HAVE NO ‘IN FORCE’ PERSONAL INSURANCE POLICIES</label>
						<span class="value"><?php echo $data["third"]["partnerpolicy"]["sel1"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>YOU HAVE EXISTING PERSONAL INSURANCE POLICIES AND HAVE ASKED ME TO COLLECT THE LATEST INFORMATION FROM YOUR INSURER/S. YOU HAVE COMPLETED AND SIGNED THE LETTER OF AUTHORISATION FORM ATTACHED (ANNEX 1)</label>
						<span class="value"><?php echo $data["third"]["partnerpolicy"]["sel2"]; ?></span>
					</td>
				</tr>
				<tr>
					<td>
						<label>YOU HAVE THE FOLLOWING ‘IN FORCE’ PERSONAL INSURANCE POLICIES:</label>
						<span class="value"><?php echo $data["third"]["partnerpolicy"]["sel3"]; ?></span>
					</td>
				</tr>
			</table>

			<table class="table width-100">
				<thead>
					<th><label>Insurer</label></th>
					<th><label>Benefit Type</label></th>
					<th><label>Benefit Amount</label></th>
					<th><label>A/SA:</label></th>
					<th><label>WP/BP:</label></th>
					<th><label>Premium</label></th>
					<th><label>Owner</label></th>
				</thead>
				<?php
					if(isset($data["third"]["partnerpolicy"]["list"])){
						foreach( $data["third"]["partnerpolicy"]["list"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["insurer"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["type"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amount"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["asa"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["wpbp"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["premium"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>
		<br><br>
		<!-- end of Existing Insurance Policies -->

		<!-- Existing Insurance Policies -->
		<h2 class="text-left normal-weight">Risk Planning - Detailed Analysis</h2>
		<hr>
		<div class="">
			<!-- <h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5> -->
			<h3 class="text-center normal-weight red">Liabilities to Clear</h3>
			<table class="table width-100">
				<thead>
					<tr>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Amount</label></th>
						<th><label>% Repaid on Death</label></th>
						<th><label>% Repaid on TPD</label></th>
						<th><label>% Repaid on Trauma</label></th>
					</tr>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["liabilities"])){
						foreach( $data["third"]["detail"]["liabilities"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["desc"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amt"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaiddeath"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtpd"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtrauma"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>
		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Future Expenditure Required</h3>

			<table class="table width-100">
				<thead>
					<tr>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Amount</label></th>
						<th><label>% Repaid on Death</label></th>
						<th><label>% Repaid on TPD</label></th>
						<th><label>% Repaid on Trauma</label></th>
					</tr>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["futureexp"])){
						foreach( $data["third"]["detail"]["futureexp"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["desc"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amt"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaiddeath"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtpd"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtrauma"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>
		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Future Education Expenses</h3>

			<table class="width-100">
				<tr>
					<td colspan="3">
						<h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Client</h5>
					</td>
					<td>&nbsp;</td>
					<td colspan="3">
						<h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Partner</h5>
					</td>
				</tr>
				<tr>
					<td>
						<label>% REPAID ON DEATH:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["client"]["repaiddeath"]; ?>%</span>
					</td>
					<td>
						<label>% REPAID ON TPD:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["client"]["repaidtpd"]; ?>%</span>
					</td>
					<td>
						<label>% REPAID ON TRAUMA:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["client"]["repaidtrauma"]; ?>%</span>
					</td>
					<td>&nbsp;</td>
					<td>
						<label>% REPAID ON DEATH:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["partner"]["repaiddeath"]; ?>%</span>
					</td>
					<td>
						<label>% REPAID ON TPD:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["partner"]["repaidtpd"]; ?>%</span>
					</td>
					<td>
						<label>% REPAID ON TRAUMA:</label>
						<span class="value"><?php echo $data["third"]["detail"]["educ"]["partner"]["repaidtrauma"]; ?>%</span>
					</td>
				</tr>
			</table>

			<br>
			<h5 class="normal-weight" style="text-transform: uppercase; font-style: italic; color: #555;">Child List</h5>
			<table class="table width-100">
				<thead>
					<tr>
						<th><label>Child's Name</label></th>
						<th><label>D.O.B.</label></th>
						<th><label>Ed. Level</label></th>
						<th><label>Start Age</label></th>
						<th><label>End Age</label></th>
						<th><label>Cost(p.a.)</label></th>
						<th><label>Inflation(p.a.)</label></th>
					</tr>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["child"])){
						foreach( $data["third"]["detail"]["child"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["name"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["dob"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["level"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["start"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["end"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["costs"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["inflation"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>

		</div>

		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Other Provisions</h3>

			<table class="table width-100">
				<thead>
					<tr>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Amount</label></th>
						<th><label>% Repaid on Death</label></th>
						<th><label>% Repaid on TPD</label></th>
						<th><label>% Repaid on Trauma</label></th>
					</tr>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["otherprovs"])){
						foreach( $data["third"]["detail"]["otherprovs"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["desc"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amt"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaiddeath"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtpd"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtrauma"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>

		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Assets</h3>

			<table class="table width-100">
				<thead>
					<th><label>Description</label></th>
					<th><label>Owner</label></th>
					<th><label>Amount</label></th>
					<th><label>% Repaid on Death</label></th>
					<th><label>% Repaid on TPD</label></th>
					<th><label>% Repaid on Trauma</label></th>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["assets"])){
						foreach( $data["third"]["detail"]["assets"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["desc"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amt"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaiddeath"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtpd"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtrauma"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>
		</div>

		<br>
		<div class="">
			<h3 class="text-center normal-weight red">Ongoing Income</h3>

			<table class="table width-100">
				<thead>
					<tr>
						<th><label>Description</label></th>
						<th><label>Owner</label></th>
						<th><label>Amount</label></th>
						<th><label>% Repaid on Death</label></th>
						<th><label>% Repaid on TPD</label></th>
						<th><label>% Repaid on Trauma</label></th>
					<tr>
				</thead>
				<?php
					if(isset($data["third"]["detail"]["ongoingincome"])){
						foreach( $data["third"]["detail"]["ongoingincome"] as $val){
				?>
					<tr>
						<td>
							<span class="value"><?php echo $val["desc"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["owner"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["amt"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaiddeath"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtpd"]?></span>
						</td>

						<td>
							<span class="value"><?php echo $val["repaidtrauma"]?></span>
						</td>
					</tr>

				<?php
						}
					}
				?>
			</table>

			<br>
			<h3 class="text-center normal-weight red">Future Education Expense Notes:</h3>
			<table class="width-100">
				<tr>
					<td colspan="">
						<label></label>
						<span class="value"><span class="value"><?php echo $data["third"]["detail"]["notes"]["educ"]; ?></span>
					</td>
				</tr>
			</table>
			<br>
			<h3 class="text-center normal-weight red">Future Expenditure Required Notes:</h3>
			<table class="width-100">
				<tr>
					<td colspan="">
						<label></label>
						<span class="value"><span class="value"><?php echo $data["third"]["detail"]["notes"]["futureexp"]; ?></span>
					</td>
				</tr>
			</table>
		</div>
		<br><br><br>
		<!-- Existing Insurance Policies -->

		<!-- Risk Planning - Needs Table -->
		<h2 class="text-left normal-weight">Risk Planning - Needs Table</h2>
		<hr>

		<h3 class="text-center normal-weight red">Client Needs Table</h3>
		<table class="table width-100 bordered">
			<thead>
				<th><label>Capital Needs</label></th>
				<th><label>Life</label></th>
				<th><label>TPD</label></th>
				<th><label>Trauma</label></th>
			</thead>
			<tr>
				<td><span class="value">Liabilities to Clear</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["0"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["0"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["0"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Future Expenditure Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["1"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["1"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["1"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Future Education Expense</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["2"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["2"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["2"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Medical Costs/Recovery Income</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["3"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["3"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["3"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Provision for Tax</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["4"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["4"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["4"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Other Provisions</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["5"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["5"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["5"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Other</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["6"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["6"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["6"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Capital Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["7"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["7"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["7"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td colspan="4"><span class="value">CAPITAL PROVISIONS</span></td>
			</tr>

			<tr>
				<td><span class="value">Disposable Assets</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["8"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["8"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["8"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Continuing Income</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["9"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["9"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["9"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Capital Available</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["10"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["10"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["10"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td colspan="4"><span class="value">INSURANCE NEEDS</span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Cover Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["11"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["11"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["11"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Existing Cover</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["12"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["12"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["12"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Surplus/Shortfall</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["life"]["13"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["tpd"]["13"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["client"]["trauma"]["13"]["v"]; ?></span></td>
			</tr>

		</table>

		<h3 class="text-center normal-weight red">Partner Needs Table</h3>
		<table class="table width-100 bordered">
			<thead>
				<th><label>Capital Needs</label></th>
				<th><label>Life</label></th>
				<th><label>TPD</label></th>
				<th><label>Trauma</label></th>
			</thead>
			<tr>
				<td><span class="value">Liabilities to Clear</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["0"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["0"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["0"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Future Expenditure Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["1"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["1"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["1"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Future Education Expense</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["2"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["2"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["2"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Medical Costs/Recovery Income</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["3"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["3"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["3"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Provision for Tax</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["4"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["4"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["4"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Other Provisions</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["5"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["5"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["5"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Other</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["6"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["6"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["6"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Capital Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["7"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["7"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["7"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td colspan="4"><span class="value">CAPITAL PROVISIONS</span></td>
			</tr>

			<tr>
				<td><span class="value">Disposable Assets</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["8"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["8"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["8"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Continuing Income</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["9"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["9"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["9"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Capital Available</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["10"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["10"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["10"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td colspan="4"><span class="value">INSURANCE NEEDS</span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Total Cover Required</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["11"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["11"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["11"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value">Existing Cover</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["12"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["12"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["12"]["v"]; ?></span></td>
			</tr>

			<tr>
				<td><span class="value text-right" style="font-weight: bold;">Surplus/Shortfall</span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["life"]["13"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["tpd"]["13"]["v"]; ?></span></td>
				<td><span class="value"><?php echo $data["third"]["needs"]["partner"]["trauma"]["13"]["v"]; ?></span></td>
			</tr>

		</table>
		<br><br><br>
		<!-- end of Risk Planning - Needs Table -->


		<!-- SCOPE OF SERVICES -->
		<h2 class="text-left normal-weight">Scope of Services</h2>
		<hr>

		<h3 class="text-center normal-weight red">Client</h3>
		<table class="width-100">
			<tr>
				<td>
					<label>Scope of Advice:</label>
					<span class="value"><?php
						if($data["fourth"]["client"]["life"]=="yes")
							echo "Life <br>";
						else if($data["fourth"]["client"]["trauma"]=="yes")
							echo "Trauma <br>";
						else if($data["fourth"]["client"]["tpd"]=="yes")
							echo "TPD <br>";
						else if($data["fourth"]["client"]["income"]=="yes")
							echo "Income Protection <br>";
						else if($data["fourth"]["client"]["mortgage"]=="yes")
							echo "Mortgage Protection <br>";
						else if($data["fourth"]["client"]["health"]=="yes")
							echo "Health <br>";
					?></span>
				</td>
				<td>
					<label>Is this advice limited:</label>
					<span class="value"><?php echo $data["fourth"]["client"]["advicelimited"]; ?></span>
				</td>
				<td>
					<label>If yes, why?:</label>
					<span class="value"><?php echo $data["fourth"]["client"]["advicewhy"]; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label>Topics discussed and NOT included in my Statement of Advice:</label>
					<span class="value"><?php echo $data["fourth"]["client"]["topicsnotdiscuss"]; ?></span>
				</td>
			</tr>
		</table>

		<br><br>

		<h3 class="text-center normal-weight red">Partner</h3>
		<table class="width-100">
			<tr>
				<td>
					<label>Scope of Advice:</label>
					<span class="value"><?php
						if($data["fourth"]["partner"]["life"]=="yes")
							echo "Life <br>";
						else if($data["fourth"]["partner"]["trauma"]=="yes")
							echo "Trauma <br>";
						else if($data["fourth"]["partner"]["tpd"]=="yes")
							echo "TPD <br>";
						else if($data["fourth"]["partner"]["income"]=="yes")
							echo "Income Protection <br>";
						else if($data["fourth"]["partner"]["mortgage"]=="yes")
							echo "Mortgage Protection <br>";
						else if($data["fourth"]["partner"]["health"]=="yes")
							echo "Health <br>";
					?></span>
				</td>
				<td>
					<label>Is this advice limited:</label>
					<span class="value"><?php echo $data["fourth"]["partner"]["advicelimited"]; ?></span>
				</td>
				<td>
					<label>If yes, why?:</label>
					<span class="value"><?php echo $data["fourth"]["partner"]["advicewhy"]; ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<label>Topics discussed and NOT included in my Statement of Advice:</label>
					<span class="value"><?php echo $data["fourth"]["partner"]["topicsnotdiscuss"]; ?></span>
				</td>
			</tr>
		</table>
		<!-- end of SCOPE OF SERVICES -->




	</body>
</html>
