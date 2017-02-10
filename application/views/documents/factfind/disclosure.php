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

<h3>&nbsp;</h3>
<h2 class="sectionn-title" align="center">DISCLOSURE STATEMENT – (FINANCIAL ADVISER)</h2>

<?php
  $user_info = $_user['info'];
  $user_company = $_user['company'];
?>

<p></p><p></p><p></p>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr>
    <td width="30%">Name of financial adviser:</td>
    <td width="70%"><?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="30%">FSPR Number:</td>
    <td width="70%"><?php echo $user_info->fspr_number; ?></td>
  </tr>
  <tr>
    <td width="30%">Physical address:</td>
    <td width="70%"><?php echo $user_info->address; ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="30%">Trading name:</td>
    <td width="70%"><?php echo $user_info->trading_name; ?></td>
  </tr>
  <tr>
    <td width="30%">Email address:</td>
    <td width="70%"><?php echo $user_info->email; ?></td>
  </tr>
  <tr class="ff-tbl-alt">
    <td width="30%">Telephone number:</td>
    <td width="70%"><?php echo $user_info->telephone_no; ?></td>
  </tr>
</table>
<p></p><p></p><p></p><p></p>

<h3 class="text-center normal-weight" align="left"><b>This disclosure statement was prepared on: </b><?php echo date("d M Y"); ?></h3>

<h3 class="text-center normal-weight" align="left"><b>It is important that you read this document</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">This information will help you to choose a financial adviser that best suits your needs. It will also provide some useful information about
the financial adviser that you choose.
</p>

<h3 class="text-center normal-weight" align="left"><b>What sort of adviser am I?</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">I am a registered, but not authorised, financial adviser.
</p>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">I can give you advice about:<br /><br />
  <b>Risk Products</b>
</p>
<table width="100%" style="font-size:120%;">
  <tr>
    <td width="50%">
        <ul style="font-size:100%;">
          <li>Life insurance</li>
          <li>Trauma insurance</li>
          <li>Disability Income Protection insurance</li>
          <li>Total Permanent Disablement insurance</li>
          <li>Accidental Death insurance</li>
        </ul>
    </td>
    <td width="50%">
        <ul style="font-size:100%;">
          <li>Business Continuity insurance</li>
          <li>Mortgage Protection insurance</li>
          <li>Key Person Protection insurance</li>
          <li>Medical insurance</li>
        </ul>
    </td>
  </tr>
</table>
<p></p>

<h3 class="text-center normal-weight" align="left"><b>What should you do if something goes wrong?</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">If you have a concern or complaint about the services provided, please let me know so that I can try to fix the problem.
</p>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">If we cannot agree on how to fix the issue, or if you decide not to use the internal complaints scheme, you can contact Financial Services Complaints Ltd (FSCL).
</p>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">This service will cost you nothing, and will help us resolve any disagreements. You can contact Financial Services Complaints Ltd (FSCL) at:
</p>
<table width="100%" style="font-size:120%">
  <tr>
    <td width="20%">Address:</td>
    <td width="80%">4th Floor, 101 Lambton Quay, Wellington</td>
  </tr>
  <tr>
    <td width="20%">Telephone number:</td>
    <td width="80%">0800 347 257</td>
  </tr>
  <tr>
    <td width="20%">Email address:</td>
    <td width="80%">info@fscl.org.nz</td>
  </tr>
</table>
<p></p>
<h3 class="text-center normal-weight" align="left"><b>Government Regulation</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">You can check that I am a registered financial adviser at <i>www.fspr.govt.nz</i>
</p>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">The Financial Markets Authority regulates financial advisers. Contact the Financial Markets Authority for more information, including
financial tips and warnings.
</p>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">You can report information or complain about my conduct to the Financial Markets Authority, but in the event of a disagreement, you may choose to first use the dispute resolution procedures described above (under <b>What should you do if something goes wrong?</b>).
</p>

<h3 class="text-center normal-weight" align="left"><b>Declaration</b></h3>
<p style="font-size:120%;text-align:justify;text-justify:distribute;" class="privacy">I, <?php echo $user_info->first_name." ".$user_info->middle_name." ".$user_info->last_name; ?>, declare that, to the best of my knowledge and belief, the information contained in this disclosure statement is
true and complete and complies with the disclosure requirements in the Financial Advisers Act 2008 and the Financial Advisers
(Disclosure) Regulations 2010.
</p><p></p>
<table style="font-size:120%;" width="100%">
  <?php
      //print_r($user_info);

      $link = "";
      if ($user_info->idusers == 2){
        $link = "jaz_sign.jpg";
      } else if ($user_info->idusers == 3){
        $link = "sumit_sign.png";
      }
  ?>
  <tr><td width="10%">Signed:</td><td width="25%"><?php
      if ($link == null) {
          // Do not show up
      } else {
          echo '<img src="'.base_url().'resource/img/'.$link.'" />';
      }
  ?><!-- <img src="<?php echo base_url(); ?>resource/img/<?php echo $link; ?>" /> --></td></tr>
  <tr><td>&nbsp;</td></tr>
  <tr><td>Date:</td><td><?php echo date("d/m/Y"); ?></td></tr>
</table>
