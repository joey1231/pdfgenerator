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
<?php

 $limitation = new stdClass();
 $limitation->options1 = false;
 $limitation->options2 = false;
 $limitation->options3 = false;

 foreach ( $fourth['limitations']['selectedLimits'] as $key => $val ) {

     if ( strpos($val,'instructed') !== FALSE ){
         $limitation->options1 = true;
     }
     if ( strpos($val,'acknowledge') !== FALSE ){
         $limitation->options2 = true;
     }
     if ( $val == "Other" ){
         $limitation->options3 = true;
     }

 }

?>
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

<body style="margin: 0px 30px 0px 30px;">

<h2 class="sectionn-title">LIMITED ADVICE TRANSACTION</h2>

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
<br />
      </li>
      <li>The risks of not having a suitability analysis are that:<br />
          <ol type="a">
            <li>Any advice I give you is based on incomplete information and will therefore be of a more general nature.</li>
            <li>A complete financial analysis will not be conducted</li>
            <li>Financial products that I recommend may be unsuitable for your needs and goals either now or in the future</li>
            <li>You may commit to products which bear a greater risk than you would otherwise tolerate</li>
            <li>Possible gaps in your risk or investment profile may not be uncovered</li>
          </ol>
      </li>
    </ul>
  </li>
</ol>
<p style="font-size:110%">The purpose of this transaction is to apply for:</p>
<h3 class="text-center normal-weight" align="left"><b>Tick one or more of the options below:</b></h3>
<p></p>

<table style="font-size: 120%;" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="3%" style="vertical-align: middle;"><?php  echo ( $limitation->options1 )? "&#9745;":"&#9744;"  ?></td>
        <td width="97%">You have instructed me not to determine the suitability of my financial adviser services to your particular circumstances</td>
    </tr>
    <tr>
        <td style="vertical-align: middle;"></td>
        <td>
            <br />
            This statement acknowledges the following:&nbsp;
            <ul style="margin: 5px 0px 0px 15px; padding: 0px;">
                <li>You waive your right to a suitability analysis of my financial adviser services;</li>
            </ul>
            <br />
        </td>
    </tr>
    <tr>
        <td width="3%" style="vertical-align: middle;"><?php  echo ( $limitation->options2 )? "&#9745;":"&#9744;"  ?></td>
        <td width="97%">
            You acknowledge that you have chosen not to disclose all of the information sought by me and that the suitability of my financial adviser services to your circumstances is based only upon that information which you have provided.
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <br />
            <ul style="margin: 5px 0px 0px 15px; padding: 0px;">
                <li>You have not provided me with all the information I have requested and that the suitability of my financial adviser services to your particular circumstances is based only upon the information that I have received.</li>
                <li>I have not directed or influenced you not to receive a suitability analysis or limit what information you give me;</li>
                <li>You accept that you must still disclose all relevant information on any application submitted on your behalf.</li>
            </ul>
            <br />
        </td>
    </tr>
    <tr>
        <td width="3%" style="vertical-align: middle;"><?php  echo ( $limitation->options3 )? "&#9745;":"&#9744;"  ?></td>
        <td>Other</td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo ( $limitation->options3 )? $fourth['limitations']['limitDescription']:"" ?></td>
    </tr>
</table>
<br />
<p style="font-size:110%">Please note that at any time during this process, you can elect to have me conduct a financial suitability analysis.</p>
<br />
<table style="font-size: 120%;" cellspacing="0" cellpadding="5" border="0" width="100%">
    <tr style="height: 50px;">
        <td width="17%">Client Name</td>
        <td width="30%" style="height:20px; padding: 5px; border: 1px solid #333333;"><?php echo ( !empty($first['clientInfo']['firstname']) )? $first['clientInfo']['firstname'] . ' ' . $first['clientInfo']['surname'] : "&nbsp;" ?></td>
        <td width="6%">&nbsp;</td>
        <td width="17%">Partner Name</td>
        <td width="30%" style="height:20px; padding: 5px; border: 1px solid #333333;"><?php echo ( !empty($first['partnerInfo']['firstname']) )? $first['partnerInfo']['firstname'] . ' ' . $first['partnerInfo']['surname'] : "&nbsp;" ?></td>
    </tr>
    <tr style="height: 50px;">
        <td>Signed/Emailed</td>
        <td style="padding: 5px; border: 1px solid #333333;">&nbsp;</td>
        <td>&nbsp;</td>
        <td>Signed/Emailed</td>
        <td style="padding: 5px; border: 1px solid #333333;">&nbsp;</td>
    </tr>
    <tr>
        <td style="vertical-align: middle;">Dated</td>
        <td style="height:20px; padding: 5px; border: 1px solid #333333;"><?php echo date("M j, Y"); ?></td>
        <td>&nbsp;</td>
        <td>Dated</td>
        <td style="height:20px; padding: 5px; border: 1px solid #333333;"><?php echo date("M j, Y"); ?></td>
    </tr>
</table>
<br />
<p></p>
<!--
checked - &#9745;
unchecked - &#9744;

-->

</body>
