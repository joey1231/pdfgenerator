
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

<p></p><p></p>
<h2 class="sectionn-title">SUMMARY OF ADVICE</h2>
<p></p><p></p>

<h3 class="text-center normal-weight" align="left"><b>My Advice to You</b></h3>

<table class="table ff-table" cellpadding="5" style="font-size:115%">
  <!-- <tr class='head-table'>
    <th style="padding:5px">MY ADVICE TO YOU</th>
  </tr> -->
  <tr>
    <td><?php
          $text = str_replace("\n", "<br />", $data['first']['fulladvice'][0]);
          echo $text;
    ?></td>
  </tr>
</table>
