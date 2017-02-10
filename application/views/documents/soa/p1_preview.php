

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

<?php $first = $ff->first; ?>

<h2 class="sectionn-title">YOUR KEY DETAILS</h2>
<div style="font-size:120%">
  <p>During our discussions and from the information you have provided to me, your personal details can be summarized as follows:</p>
</div>
<table class="table ff-table" cellpadding="5" style="font-size:115%">
  <tr class='head-table'>
    <th style="padding:5px" colspan="3">PERSONAL DETAILS</th>
  </tr>
  <tr>
    <td class="buld">Title</td>
    <?php
        $person = $first->clientInfo;
        $data = $person->title;
        if ($person->othertitle != null)
        {
            $data = $person->othertitle;
        }
    ?>
    <td><?php echo $data; ?></td>
    <?php
        $person = $first->partnerInfo;
        $data = $person->title;
        if ($person->othertitle != null)
        {
            $data = $person->othertitle;
        }
     ?>
    <td><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">First Name</td>
    <?php
    $person = $first->clientInfo;
    $data = $person->firstname;
    ?>
    <td id="clientFirstname"><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->firstname; ?>
    <td id="partnerFirstname"><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Surname</td>
    <?php $person = $first->clientInfo; $data = $person->surname; ?>
    <td id="clientSurname"><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->surname; ?>
    <td id="partnerSurname"><?php echo $data; ?></td>
  </tr>
  <tr>
    <td class="buld">Date of Birth</td>
    <?php $person = $first->clientInfo; $data = $person->dob;
          echo $person->dob;
          if ($data == null){

          } else {
              //$split = explode("-", $data); $data = $split[2]."/".$split[1]."/".$split[0];
          }
          $data = $person->dob;
      ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->dob;
          $split = explode("-", $data); if (count($split) == 3){ $data = $split[2]."/".$split[1]."/".$split[0]; }

          $data = $person->dob; ?>
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
    <?php $person = $first->clientInfo; $data = $person->grosswages; $data = $data == null ? "$ 0.00" : "$ ".moneyFormatter("%n", floatval($data)); ?>
    <td><?php echo $data; ?></td>
    <?php $person = $first->partnerInfo; $data = $person->grosswages;  $data = $data == null ? "$ 0.00" : "$ ".moneyFormatter("%n", floatval($data)); ?>
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
