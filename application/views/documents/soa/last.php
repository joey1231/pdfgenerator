
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

<style>
    .buld { font-weight:bold; }
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
<h2 class="sectionn-title">SECTION 4 - YOUR DECISION</h2>
<p></p>
<ol type="a" style="font-size:120%">
  <li>You have chosen to purchase the insurance cover in the "Recommended Benefit(s)" Columns and the premiums are indicated in the attached illustration(s) under "Personal Risk Recommendation(s)"</li>
  <li>You have chosen to purchase the insurance cover set out in the "Your Preference" Columns. This differed to the actual advice given to you by me. The reason for your decision:</li>
</ol>
<p></p>
<?php
  //$soa = $soa->soa;
  //print_r($soa);
  if (array_key_exists("decision", $soa)):

  $decision = $soa['decision'];
  //print_r($decision);
  $descriptions = $decision['description'];
  $decisions    = $decision['decisions'];

  function descriptionTitle($benefit){
      if ($benefit == "health"){ return "Health"; }
      if ($benefit == "income"){ return "Income Protection"; }
      if ($benefit == "mortgage"){ return "Mortgage Protection"; }
      if ($benefit == "trauma"){ return "Trauma Cover"; }
      if ($benefit == "tpd"){ return "TPD Cover"; }
      if ($benefit == "life"){ return "Life Cover"; }
  }
?>

<?php if (count($descriptions) > 0): ?>
  <p style="font-size:120%"><b>Your Preference (Pre-Underwriting)</b></p>
  <p></p>
  <p style="font-size:120%">The date of your decision was <?php echo date("d/m/Y"); ?></p>
  <p></p>
  <table class="table ff-table" style="font-size:115%" cellpadding="5">
    <tr class="head-table">
      <th width="30%">Benefit</th>
      <th width="70%">Reason for choosing this benefit</th>
    </tr>
    <?php foreach($descriptions as $dd): ?>
      <tr>
        <td><?php echo descriptionTitle($dd['type']); ?></td>
        <td><?php echo $dd['text']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else: ?>
  <p>There are no reasons specified for choosing the benefits.</p>
<?php endif; ?>

<p></p>
<?php if (count($decisions) > 0): ?>
  <p style="font-size:120%"><b>Your Preference (Post-Underwriting)</b></p>
  <p></p>
  <table class="table ff-table" style="font-size:115%" cellpadding="5">
    <tr class="head-table">
      <th width="25%">Benefit</th>
      <th width="60%">Reason for choosing this benefit</th>
      <th width="15%">Date</th>
    </tr>
    <?php foreach($decisions as $dd): ?>
      <tr>
        <td><?php echo descriptionTitle($dd['type']); ?></td>
        <td><?php echo $dd['text']; ?></td>
        <td><?php echo $dd['timestamp']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else: ?>

<?php endif; ?>

<?php else: ?>
  <p><i>It seems that you have not shared your decision with us.</i></p>
<?php endif; ?>


<?php
  $isMentioning = $data['acc']['applicable'] == "true" ? true : false;
  $count = 5;
?>

<?php if ($isMentioning): ?>
<p></p>
<?php $ACC = 0; ?>
<h2 class="sectionn-title">SECTION <?php echo $count; $count++; ?> - ACC ACKNOWLEDGEMENT</h2>
<p></p>
<p style="font-size:110%">You have decided to apply for CPX, which means you have an agreed value of 100% however this may reduce your accidental death entitlements, you further acknowledge that should you have an accident, you may be entitled to a lower payout than what you had previously.</p>
<?php endif; ?>

<p></p><p></p>
<!-- DECISION TO PROCEED -->
<h2 class="sectionn-title">SECTION <?php echo $count; ?> - AUTHORITY TO PROCEED</h2>
<p></p>
<div style="font-size: 110%;">The following has also taken place:
<ul>
  <li>I have given you a RFA Disclosure Statement &amp; a Scope of Engagement</li>
  <li>We have talked about your personal circumstances and insurance needs in a way you understand and have answered all your questions;</li>
  <li>We have discussed the benefits and limitations to this insurance product.</li>
</ul>
If I haven’t done all these things, DON’T SIGN THE AUTHORITY TO PROCEED.<br /><br />
You should also read the documents I have given to you and check that the personal information is accurate and ask me any questions if you have any. By signing the Authority to Proceed, you agree to purchase the product/s I have recommended or that you have selected in this Insurance Plan.<br /><br />
You also warrant that you have provided us with accurate and correct information to the best of your knowledge. If the insurer underwrites your policy application and discovers that you have provided is not accurate or correct, this may affect, or result in the cancellation of, policy coverage.  You further agree to indemnify and release us from any responsibilty in this situation.
</div>
