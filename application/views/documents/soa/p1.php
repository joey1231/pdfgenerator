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


<p></p><p></p>
<h2 class="sectionn-title">INTRODUCTION</h2>
<p></p>
<div style="font-size:120%">
  <p><b>This is an important document – you should read it carefully and keep it safe.</b></p>
  <?php $adviser = $_user['info']->first_name." ".$_user['info']->last_name; ?>
  <p>If there is anything that you disagree with or need clarification on, please contact me, <?php echo $adviser; ?>. If you change your mind about the products you purchase or any other action you decide to take, in most cases you have a free look period, in which you may cancel the contract and receive a full refund. You will find details of any free look period in your policy document.</p>
  <p>This Insurance Plan is a record of our meeting on <span class="red"><?php echo date("d M Y", $_trans->timestamp); ?></span>, in which we discussed your personal financial circumstances and established what advice you sought in relation to your personal debt and risk insurance.</p>
  <p>The following is a summary of my understanding of the facts you provided to me and your needs as discussed at our meeting:</p>
</div>
<p></p>

<?php $first = $ff->first; ?>

<h2 class="sectionn-title">SECTION 1 - IMPORTANT INFORMATION ABOUT YOU</h2>
<div style="font-size:120%">
  <p>This Section has important information about you that I have gathered and will consider in preparing my advice, such as your
personal as well as financial information.  This will form the basis of your risk profile, or otherwise, for personalised Insurance.
Please tell me if you think this information is wrong or incomplete because it may affect my advice to you.</p>
</div>
<table class="table ff-table" cellpadding="5" style="font-size:115%">
  <tr class='head-table'>
    <th style="padding:5px" colspan="3">PERSONAL DETAILS</th>
  </tr>
  <tr>
    <td class="buld">Title</td>
    <?php $person = $first->clientInfo; $data = $person->title; if ($person->othertitle != null){ $data = $person->othertitle; } ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->title; if ($person->othertitle != null){ $data = $person->othertitle; } ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">First Name</td>
    <?php $person = $first->clientInfo; $data = $person->firstname; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->firstname; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Surname</td>
    <?php $person = $first->clientInfo; $data = $person->surname; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->surname; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Date of Birth</td>
    <?php $person = $first->clientInfo; $data = $person->dob;
          //echo $data;

          //if ($data != null){
          //  $split = explode("-", $data); $data = $split[2]."/".$split[1]."/".$split[0];
          //}
           ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->dob;
          //if ($data != null){
          //    $split = explode("-", $data); if (count($split) == 3){ $data = $split[2]."/".$split[1]."/".$split[0]; }
          //} ?>
    <td><?php echo $data; ?></td>
  </tr>
    <tr><td></td></tr>
  <tr class='head-table'>
    <th style="padding:5px" colspan="3">CONTACT DETAILS</th>
  </tr>
  <tr>
    <td class="buld">Address</td>
    <?php $person = $first->clientInfo; $data = "";
          if ($person->stradd != null){ $data .= $person->stradd."<br />"; }
          if ($person->suburb != null){ $data .= $person->suburb."<br />"; }
          if ($person->city != null){ $data .= $person->city."<br />"; }
          if ($person->postcode != null){ $data .= $person->postcode."<br />"; }
    ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = "";
          if ($person->stradd != null){ $data .= $person->stradd."<br />"; }
          if ($person->suburb != null){ $data .= $person->suburb."<br />"; }
          if ($person->city != null){ $data .= $person->city."<br />"; }
          if ($person->postcode != null){ $data .= $person->postcode."<br />"; }
    ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Telephone</td>
    <?php
        $person = $first->clientInfo;
        $data = $person->homephone;
        if ($person->workphone != null){ $data .= "/".$person->workphone; }
    ?>
    <td><?php echo $data; ?></td>
    <?php
        $person = $first->partnerInfo;
        $data = $person->homephone;
        if ($person->workphone != null){ $data .= "/".$person->workphone; }
    ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Mobile</td>
    <?php $person = $first->clientInfo; $data = $person->mobilephone; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->mobilephone; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Email</td>
    <?php $person = $first->clientInfo; $data = $person->email; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->email; ?>
    <td><?php echo $data; ?></td>
  </tr>
    <tr><td></td></tr>
  <tr class='head-table'>
    <th style="padding:5px" colspan="3">EMPLOYMENT DETAILS</th>
  </tr>
  <tr>
    <td class="buld">Employment Type</td>
    <?php $person = $first->clientInfo; $data = $person->jobtitle; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->jobtitle; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Occupation</td>
    <?php $person = $first->clientInfo; $data = $person->occupation; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->occupation; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Employer</td>
    <?php $person = $first->clientInfo; $data = $person->employername; ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->employername; ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Gross Annual Salary</td>
    <?php $person = $first->clientInfo; $data = $person->grosswages; $data = $data == null ? " " : "$ ".moneyFormatter("%n", floatval($data)); ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->grosswages;  $data = $data == null ? " " : "$ ".moneyFormatter("%n", floatval($data)); ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr><td></td></tr>
  <tr class='head-table'>
    <th style="padding:5px" colspan="3">DEPENDENTS</th>
  </tr>
  <tr>
    <td class="buld">Name</td>
    <td class="buld">Gender</td>
    <td class="buld">D.O.B.</td>
  </tr>
  <?php
      if (isset($first->children)):
        if (count($first->children) > 0):
            foreach($first->children as $c):
  ?>
            <tr>
              <td><?php echo $c->name; ?></td>
              <td><?php echo $c->gender; ?></td>
              <td><?php echo $c->dob; ?></td>
            </tr>
  <?php
            endforeach;
        else:
  ?>
      <tr><td colspan="3">No dependents specified.</td></tr>
  <?php
        endif;
      else: ?>
    <tr><td colspan="3">No dependents specified.</td></tr>
  <?php
      endif; ?>

</table>
<p style="font-size:110%">If any of the above details are incorrect, please notify me of any amendments before implementing any recommendations that may be contained within this document.</p>
<br />
