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
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700);
.letters { font-family: "Source Sans Pro", sans-serif; }
h1 { font-size: 440%; color: #205478; font-weight:200; }
</style>

<div style="font-size: 130%;" class="letters">
  <p style="text-indent: 0px;"><?php echo date("d M Y"); ?></p>

  <?php
    $first = $ff->first;

    $salutation = "";
    $salutation .= $first->clientInfo->firstname." ".$first->clientInfo->surname;

    if ($first->partnerInfo->firstname != null or $first->partnerInfo->firstname != ""){
      $salutation .= " and ";
      $salutation .= $first->partnerInfo->firstname." ".$first->partnerInfo->surname;
    }
    $salutation .= "<br />";

    if ($first->clientInfo != null){ $salutation .= $first->clientInfo->stradd."<br />"; }
    if ($first->clientInfo->suburb != null){ $salutation .= $first->clientInfo->suburb."<br />"; }
    if ($first->clientInfo->city != null){ $salutation .= $first->clientInfo->city; }
    if ($first->clientInfo->postcode != null){ $salutation .= " ".$first->clientInfo->postcode; }

  ?>

  <p style="text-indent: 0px;"><?php echo $salutation; ?></p>

  <?php
    $salutation = $first->clientInfo->firstname;
    if ($first->partnerInfo->firstname != null){
      $salutation .= " and ";
      $salutation .= $first->partnerInfo->firstname;
    }
  ?>
  <p style="text-indent: 0px;">Dear <?php echo $salutation; ?>,</p>
  <p style="text-indent: 0px;">Thank you for taking the time to allow me to analyse your personal insurance needs.</p>
  <p style="text-indent: 0px;">I have reviewed the issues we discussed recently and analysed the details collected in the Insurance Planner and enclosee my findings in this report.  As agreed during our previous meeting, this report will document my recommendations in relation to covering your objectives and needs.</p>
  <p style="text-indent: 0px;">The following report outlines your personal risks, the appropriate insurance solutions, and the amount of cover needed to meet the financial requirement in these events, it is prepared from information supplied by you and so is dependent on the completeness and accuracy of that information.

  <?php if (isset($data['first']['look'])): ?>
     As we agreed in the scope of engagement I have provided recommendations in the following areas:</p>
    <ul>
    <?php foreach($data['first']['look'] as $r): ?>
        <li><?php echo $r; ?></li>
    <?php endforeach; ?>
    </ul>
  <?php else: ?>
    </p>
  <?php endif; ?>

  <?php if (isset($data['first']['nolook'])): ?>
    <p>The areas that we agreed not to look at were:</p>
    <ul>
    <?php foreach($data['first']['nolook'] as $r): ?>
        <li><?php echo $r; ?></li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <b>If you believe that my understanding of your objectives is incorrect or have been misinterpreted, please advise me before proceeding with any recommendations</b>
  <p style="text-indent: 0px;">Taxation law and the regulations governing them is complex and a highly specialised subject and I would recommend that you consult the appropriate experts who deal with these matters on a regular basis.</p>
  <p style="text-indent: 0px;">Any calculations or projections this report are for illustration purposes only and are based on assumptions about the future.  The future, of course, will be different to whatever is assumed today.  To be totally effective, this plan will need to be updated on a regular basis.  In the meantime, please advise me of any material change in your circumstances that may warrant a change to your plan.</p>
  <p style="text-indent: 0px;">This report has been put together with the intention of providing you with financial solutions if an unexpected event ends or limits your earning capacity.  This document is important so please make sure you read it carefully.  The recommendations contained in this report are effective for thirty days from the date of this letter.</p>
  <?php
    $myEmail = null;
    if ($myEmail == null){ $endMesg = "please contact me."; } else { $endMesg = "please contact me at ".$myEmail; }
  ?>
  <p style="text-indent: 0px;">Once this report has been presented, and your questions have been answered, it is up to you to decide on your priorities, although I am happy to assist you in this decision making process.  If you have any questions or concerns <?php echo $endMesg; ?></p>
  <p style="text-indent: 0px;">Yours sincerely,</p>
  <?php
    $adviser = $_user['info']->first_name." ".$_user['info']->last_name;
  ?>
  <p style="text-indent: 0px;"><?php echo $adviser; ?></p>
</div>
<!-- end of LETTER -->
