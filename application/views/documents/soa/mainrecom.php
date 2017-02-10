

<style type="text/css">
  html{font-family:arial;margin:auto;display:block;position:relative}label{display:block}.inline{display:inline !important}
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

    .inside-list {
      padding-left:0px; margin-left:0px;
    }
</style>

<p></p><p></p>
<h2 class="sectionn-title">SECTION 3 - REASONS FOR MY RECOMMENDATION</h2>
<p></p>
<p style="font-size:110%"><?php
  $first = $data->first;

  $reasonText = $first->clientInfo->firstname;
  if ($first->partnerInfo != null){
      $reasonText .= " & ".$first->partnerInfo->firstname;
  }

  $reasonText = " based on the information you have provided, I have taken into account the fact that you are 59 years, and 24 years old respectively and married
      You have 0 dependent/s and are concerned that you have sufficient finances in the event of Death or if you suffer an injury or illness.<br /><br />
      Financial Circumstances:<br />
      In assessing your disposable income of approximately $3,333.33 a month, it would appear that on the basis of the
      information supplied, the monthly premium of $332 is within your means.";

    $textSecond = $soa['second']['reasonText'];
    if ($textSecond == false or $textSecond == null or $textSecond == "" or $textSecond == "false"){
        echo "No reason/s specified for recommendation.";
    } else {
        $lines = explode("\n", $textSecond);
        foreach($lines as $line){
            echo $line."<br />";
        }
    }

  //echo $reasonText;
?></p>
<p></p><p></p>
