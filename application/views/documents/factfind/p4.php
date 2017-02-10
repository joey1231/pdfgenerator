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

<?php $fourth = $data['fourth']; ?>
<?php $first = $data['first']; ?>

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

<style>
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700);
.privacy { font-family: "Source Sans Pro", sans-serif; }
</style>

<body>

<h2 class="sectionn-title">ABOUT US AND SCOPE OF SERVICES</h2>
<?php
  $companyName = $_user['company']->firm_name;
?>
<p></p>
<p style="font-size:110%">Passionate and dedicated to serving clients' needs and desires to protect intergenerational wealth, we have become known for a solutions based approach
that fits the budget. Listening to clients priorities in life allows for a plan to be created that not only takes care of their personal and professional lives,
but cover for their families and businesses - all under the one umbrella.  Extensive experience in the field allows for sound advice on structuring the right level of
cover at the right time to be explored for the following:
</p>
<ul style="font-size:110%">
  <li>Life Cover</li>
  <li>Income Protection</li>
  <li>Mortgage Protection</li>
  <li>Trauma Cover</li>
  <li>Key Person Protection</li>
  <li>Health Cover </li>
  <li>Shareholder Protection</li>
  <li>Total Permanent Disablement Cover</li>
</ul>
<p style="font-size:110%">Having an advocate in your corner when it comes to claim time is what we’re here to help with at <?php echo $companyName; ?>
We are specialists at ensuring our clients are paid what their entitled to with the least hassle come claim time.
We invite you to see the difference at <?php echo $companyName; ?><?php
    if ($companyName == "EliteInsure Ltd.") {
        echo "";
    } else {
        echo " where we let you jump out of a plane and we be your parachute.";
    }
?>
</p>
<p></p>

<table class="table width-100" style="font-size:110%" cellpadding="0" cellspacing="0">
  <tr><td>
    <?php $name = $first['clientInfo']['firstname']; ?>
    <h3 class="text-center normal-weight" align="left"><b>Insurance Plan for <?php echo $name; ?></b></h3>

    <?php $client = $fourth['client']; ?>
    <table class="table width-100" style="font-size:120%">
      <tr>
        <td width="2%">
            <?php if ($client['personal'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Personal</td>
      </tr>
      <tr>
        <td width="2%">
            <?php if ($client['business'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Self Employed / Business</td>
      </tr>
      <tr>
        <td width="2%">
            <?php if ($client['other'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Others</td>
      </tr>
      <tr><td colspan="2">
        <p style="font-size:90%"><b>Describe insurance plan for <?php echo $name; ?>:</b></p>
        <p style="font-size:90%"><?php
            $condensed = explode("\n", $fourth['planDescription']['client']);
            $sentence = "<ul>";
            foreach($condensed as $cond){
                if ($cond != null or $cond != ""){
                    $sentence .= "<li>".$cond."</li>";
                }
            } $sentence .= "</ul>";

            echo $sentence;
        ?></p>
      </td></tr>
    </table>
    <p></p>

  </td>
  <?php
    if ($first['partnerInfo']['firstname'] != null):
  ?>
  <td>
    <?php $name = $first['partnerInfo']['firstname']; ?>
    <h3 class="text-center normal-weight" align="left"><b>Insurance Plan for <?php echo $name; ?></b></h3>

    <?php $client = $fourth['partner']; ?>
    <table class="table width-100" style="font-size:120% ">
      <tr>
        <td width="2%">
            <?php if ($client['personal'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Personal</td>
      </tr>
      <tr>
        <td width="2%">
            <?php if ($client['business'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Self Employed / Business</td>
      </tr>
      <tr>
        <td width="2%">
            <?php if ($client['other'] == "yes"): ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
            <?php else: ?>
            <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
            <?php endif; ?>
        </td>
        <td style="width:95%">&nbsp; Others</td>
      </tr>
      <tr><td colspan="2">
        <p style="font-size:90%"><b>Describe insurance plan for <?php echo $name; ?>:</b></p>
        <p style="font-size:90%"><?php
            $condensed = explode("\n", $fourth['planDescription']['partner']);
            $sentence = "<ul>";
            foreach($condensed as $cond){
                if ($cond != null or $cond != ""){
                    $sentence .= "<li>".$cond."</li>";
                }
            } $sentence .= "</ul>";

            echo $sentence;
        ?></p>
      </td></tr>
    </table>
    <p></p>

  </td><?php endif; ?></tr>
</table>

<?php $limitations = $fourth['limitations']; ?>
<?php if ( $limitations['hasLimits'] == 'yes' ): ?>
<h2 class="sectionn-title">LIMITATIONS</h2>
<p></p><p></p>
<h3 class="text-center normal-weight" align="left"><b>Please specify and describe the limitations:</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">
foreach ( $limitations['selectedLimits'] as $key => $val ) {
        if ($val == "Other"){
            echo $limitations['limitDescriptions'];
        } else {
            echo $val . "<br />";
        }
    }
</p>
<p></p>
<ol type="1" style="margin-left:-20%; padding-left:-30px;font-size:120%">
  <li>Please note the following:<br />
    <ul style="margin-left:-20%; padding-left:-30px;">
      <li>The advantages of having a suitability analysis are to:<br />
          <ol type="a">
            <li>Give me a full understanding of your personal circumstances, including your financial goals and risk tolerances, allowing me to tailor my advice to your specific needs;</li>
            <li>Provide you with an analysis of your current and future financial situation;</li>
            <li>Determine which financial products may be suitable for your current and future needs and goals</li>
            <li>Advise you of any gaps in your risk or investment profile</li>
          </ol>
      </li>
      <li>The risks of not having a suitability analysis are that:<br />
          <ol type="a">
            <li>Any advice I give you is based on incomplete information and will therefore be of a more general nature.</li>
            <li>A complete financial analysis will not be conducted</li>
            <li>Financial products that I recommend may be unsuitable for your needs and goals either now or in the future</li>
            <li>You may commit to products which bear a greater risk than you would otherwise tolerate</li>
            <li>Possible gaps in your risk or investment profile may not be uncovered</li>
          </ol>
      <li>
    </ul>
  </li>
  <li>This statement acknowledges the following:<br />
    <ul style="margin-left:-20%; padding-left:-30px;">
      <li>You waive your right to a suitability analysis of my financial adviser services;</li>
    </ul>
  </li>
</ol>
<p style="font-size:110%">Or</p>
<ul style="margin-left:-20%; padding-left:-30px;font-size:110%">
  <li>You have not provided me with all the information I have requested and that the suitability of my financial adviser services to your particular circumstances is based only upon the information that I have received.</li>
  <li>I have not directed or influenced you not to recieve a suitability analysis or limit what information you give me;</li>
  <li>You accept that you mush still disclose all relevant information on any application submitted on your behalf.</li>
</ul>
<p style="font-size:110%">Please note that at any time during this process, you can elect to have me conduct a financial suitability analysis.</p>
<!-- SCOPE OF SERVICES
<h2 class="sectionn-title">SCOPE OF SERVICES</h2>
<p></p><p></p>

<?php $name = $first['clientInfo']['firstname']; ?>
<h3 class="text-center normal-weight" align="left"><b>for <?php echo $name; ?></b></h3>

<?php $client = $fourth['client']; ?>

<table class="table width-100" style="font-size:120%">
  <tr>
    <td width="4%">
        <?php if ($client['life'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">LIFE</td>
    <td width="4%">
        <?php if ($client['income'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">INCOME PROTECTION</td>
  </tr>
  <tr>
    <td width="4%">
        <?php if ($client['trauma'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">TRAUMA</td>
    <td width="4%">
        <?php if ($client['mortgage'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">MORTGAGE PROTECTION</td>
  </tr>
  <tr>
    <td width="4%">
        <?php if ($client['tpd'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">TPD</td>
    <td width="4%">
        <?php if ($client['health'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">HEALTH</td>
  </tr>
</table>
<p></p>
<table>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>IS THIS ADVICE LIMITED?</td></tr></table>
      <table><tr>
        <td width="5%">
          <?php
            $isYes = false;
            if (isset($client['advicelimited'])){
                if ($client['advicelimited'] == "yes" or $client['advicelimited'] == "yes"){
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
        <td width="45%">&nbsp; YES </td>
        <td width="5%">
          <?php
            $isYes = false;
            if (isset($client['advicelimited'])){
                if ($client['advicelimited'] == "no" or $client['advicelimited'] == "no"){
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
        <td width="45%">&nbsp; NO </td>
      </tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>IF YES, WHY?</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $client['advicewhy'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td width="100%">
      <table class="tbl-title"><tr><td>TOPICS DISCUSSED AND <b>NOT</b> INCLUDED IN MY STATEMENT OF ADVICE</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $client['topicsnotdiscuss'];
          echo $toPrint;
      ?></td></tr></table>
    </td>
  </tr>
</table>


<?php
  if ($first['partnerInfo']['firstname'] != null):
?>
<h3>&nbsp;</h3>

<?php $name = $first['partnerInfo']['firstname']; ?>
<h3 class="text-center normal-weight" align="left"><b>for <?php echo $name; ?></b></h3>

<?php $client = $fourth['partner']; ?>
<table class="table width-100" style="font-size:120%">
  <tr>
    <td width="4%">
        <?php if ($client['life'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">LIFE</td>
    <td width="4%">
        <?php if ($client['income'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">INCOME PROTECTION</td>
  </tr>
  <tr>
    <td width="4%">
        <?php if ($client['trauma'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">TRAUMA</td>
    <td width="4%">
        <?php if ($client['mortgage'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">MORTGAGE PROTECTION</td>
  </tr>
  <tr>
    <td width="4%">
        <?php if ($client['tpd'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">TPD</td>
    <td width="4%">
        <?php if ($client['health'] == "yes"): ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_c.png" >
        <?php else: ?>
        <img src="<?php echo base_url(); ?>resource/img/ch_u.png" >
        <?php endif; ?>
    </td>
    <td style="width:46%">HEALTH</td>
  </tr>
</table>
<p></p>
<table>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>IS THIS ADVICE LIMITED?</td></tr></table>
      <table><tr>
        <td width="5%">
          <?php
            $isYes = false;
            if (isset($client['advicelimited'])){
                if ($client['advicelimited'] == "yes" or $client['advicelimited'] == "yes"){
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
        <td width="45%">&nbsp; YES </td>
        <td width="5%">
          <?php
            $isYes = false;
            if (isset($client['advicelimited'])){
                if ($client['advicelimited'] == "no" or $client['advicelimited'] == "no"){
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
        <td width="45%">&nbsp; NO </td>
      </tr></table>
    </td>
    <td width="50%">
      <table class="tbl-title"><tr><td>IF YES, WHY?</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $client['advicewhy'];
          echo $toPrint;
      ?>
      </td></tr></table>
    </td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td width="100%">
      <table class="tbl-title"><tr><td>TOPICS DISCUSSED AND <b>NOT</b> INCLUDED IN MY STATEMENT OF ADVICE</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $toPrint = $client['topicsnotdiscuss'];
          echo $toPrint;
      ?></td></tr></table>
    </td>
  </tr>
</table>

<?php
  endif;
?>

-->

<?php

endif;
  $user_info = $_user['info'];
  $user_company = $_user['company'];
   //print_r($_user);
 ?>

<!-- SCOPE OF SERVICES -->
<h3>&nbsp;</h3>
<h2 class="sectionn-title">ENGAGEMENT</h2>
<p></p><p></p>
<h3 class="text-center normal-weight" align="left"><b>Scope of Engagement</b></h3>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">Unless if we specify/describe any limitations to the advice process, we have appointed <?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?>
  of <?php echo $user_company->firm_name; ?> of <?php echo $user_info->address; ?>to provide us with a <b> Financial Risk Review.</b>
This is to include a thorough review of our personal and/or financial situation as this relates to Life Risks and related insurance.
This shall include non-obligation indicative quotes/estimates from various insurers. Any Recommendations will be subject
to acceptance of terms offered &amp; completion of application forms. All details are confidential &amp; shall be kept for seven
years unless otherwise stated in order to facilitate on-going services to you.
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">Any financial regulator, external compliance personnel, deemed professionals including medical practitioners, re-insurers
&amp; prospective purchasers of <?php echo $user_company->firm_name; ?> may view your personal/business information. Our services are free as we are
reimbursed by the insurer in the form of commission (initial &amp; ongoing) should you take out insurance through us. No
conflicts of interest exist (unless notified) as we are not tied Agents.
</p>

<h3 class="text-center normal-weight" align="left"><b>Accuracy of Information</b></h3>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">The information set out in this form &amp; attached to this declaration including the fact find is true and correct to the best of
our knowledge;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">Accurately and fully represents our Private/Business financial situation, needs and objectives;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We understand that the advice will be based primarily on the information supplied in this form;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We acknowledge that if any information has been withheld, is inaccurate or misrepresented in any way, any advice
provided for our benefit may prove to be inappropriate and unsuitable.
</p>

<h3 class="text-center normal-weight" align="left"><b>The Privacy Act Declarations</b></h3>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We consent to our Accountant and Estate Solicitor, &amp;/or ACC disclosing to <?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?>, all information requested that is
reasonably required in the execution of this Scope of Engagement – no liability for fees invoiced/incurred to the client by
any such professional shall be <?php echo $user_company->firm_name; ?> responsibility regardless of how the engagement came about;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We hereby authorise <?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?> to make our file available to any legal or compliance authority, or such product provider,
and/or claims investigators who may need access to such information for the purpose of processing and administering any
business we may seek to transact as a result of the specified Scope of Engagement;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We understand that the data collected is stored (electronically) at the offices of <?php echo $user_company->firm_name; ?>  and that a copy and any
alterations are available on request;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">A scan, copy (electronic/paper) or fax of this Agreement is deemed to be as good as the original.
</p>

<h3 class="text-center normal-weight" align="left"><b>Acknowledgements</b></h3>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We acknowledge that we received, read &amp; understood <?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?> Disclosure Statement, <?php echo date("d M Y"); ?>
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We acknowledge that we have had the basis of adviser remuneration and brokerage explained to us;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We acknowledge that the services being provided are restricted to the scope of engagement and subject to specific
limitations indicated as per above;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We acknowledge the advantages of undertaking a full suitability (needs) analysis and the need to provide relevant
personal and financial information, and by not doing so we risk receiving advice or product recommendations that may not
be appropriate to our needs;
</p>
<p style="font-size:110%;text-align:justify;text-justify:distribute;" class="privacy">We can terminate this Agreement at any time by providing thirty (30) days written notice.
</p>

<table cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>CLIENT NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          $title = $first['clientInfo']['firstname']." ".$first['clientInfo']['surname'];
          echo $title;
        ?>
      </td></tr></table>
    </td>

  <?php if ($first['partnerInfo']['firstname'] != null): ?>
    <td width="50%">
      <table class="tbl-title"><tr><td>PARTNER NAME</td></tr></table>
      <table class="tbl-value"><tr><td><?php
          //$toPrint = $first['partnerInfo']['prefname'] == null ? "" : $first['partnerInfo']['prefname'];
          $title = $first['partnerInfo']['firstname']." ".$first['partnerInfo']['surname'];
          echo $title;
      ?>
      </td></tr></table>
    </td>
  <?php endif; ?>
  </tr>
  <tr>
      <td width="50%">&nbsp;<br />&nbsp;</td>
      <?php if ($first['partnerInfo']['firstname'] != null): ?>
        <td width="50%">&nbsp;<br />&nbsp;</td>
      <?php endif; ?>
  </tr>
  <tr>
      <td width="50%">Please provide Signature and/or e-mailed receipient acknowledgement date:</td>
      <?php if ($first['partnerInfo']['firstname'] != null): ?>
        <td width="50%">Please provide Signature and/or e-mailed receipient acknowledgement date:</td>
      <?php endif; ?>
  </tr>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>SIGNATURE</td></tr></table>
      <table class="tbl-value"><tr><td>&nbsp;</td></tr></table>
    </td>

  <?php if ($first['partnerInfo']['firstname'] != null): ?>
    <td width="50%">
      <table class="tbl-title"><tr><td>SIGNATURE</td></tr></table>
      <table class="tbl-value"><tr><td>&nbsp;</td></tr></table>
    </td>
  <?php endif; ?>
  </tr>
  <tr>
    <td width="50%">
      <table class="tbl-title"><tr><td>DATE</td></tr></table>
      <table class="tbl-value"><tr><td><?php echo date("d/m/Y"); ?></td></tr></table>
    </td>

  <?php if ($first['partnerInfo']['firstname'] != null): ?>
    <td width="50%">
      <table class="tbl-title"><tr><td>DATE</td></tr></table>
      <table class="tbl-value"><tr><td><?php echo date("d/m/Y"); ?></td></tr></table>
    </td>
  <?php endif; ?>
  </tr>

</table>



<p></p>
<!--
<h5 style="font-weight:100; color: #347AB8;font-size:190%">Scope of Service and Privacy Acknowledgement</h5>
<hr /><p></p><p></p>
<table style="font-size:130%">
    <?php
        $currentDate = date("m/d/Y");
        $first = $data['first'];

        $text = ""; $text = $first['clientInfo']['firstname']." ".$first['clientInfo']['surname'];
    ?>
    <tr>
        <td style="width:50%">
            Client Name:<br />
            <span class="value"><?php echo $text; ?></span>
            <br /><br />
            Date:<br />
            <span class="value"><?php echo $currentDate; ?></span>
        </td>
    <?php
          $text = ""; $text = $first['partnerInfo']['firstname']." ".$first['partnerInfo']['surname'];
    ?>
        <td style="width:50%">
          Partner Name:<br />
          <span class="value"><?php echo $text; ?></span>
          <br /><br />
          Date:<br />
          <span class="value"><?php echo $currentDate; ?></span>
        </td>
    </tr>
</table>
-->
</body>
