
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
</style>

<?php $second = $data->second; ?>
<p></p>
<!-- GOALS AND OBJECTIVES INFORMATION -->
<h2 class="sectionn-title">GOALS AND OBJECTIVES</h2>
<p></p>
<p style="font-size:110%">
From our discussion we recorded that your stated goals and objectives that you want to meet are:
</p>
<?php if (isset($second->goals) and count($second->goals) > 0): ?>
<table class="table ff-table" style="font-size:115%" cellpadding="5">
  <tr class="head-table">
    <th>Goals</th>
    <th>Type</th>
    <th>Timeframe</th>
    <th>Owner</th>
  </tr>

  <?php $even = false; foreach($second->goals as $g): ?>
    <tr <?php if ($even): $even = false; ?>class="ff-tbl-alt"<?php else: $even = true; endif; ?> >
         <td><?php echo $g->goal; ?></td>
         <td><?php echo $g->type; ?></td>
         <td><?php
          if ($g->timeframe != null){
              $intval = intval($g->timeframe);
              if ($intval == 0){
                  echo $g->timeframe;
              } else {
                  echo $intval." years";
              }
          }
          ?></td>
          <td><?php echo $g->owner; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<?php else: ?>
No goals and/or objectives specified.
<?php endif; ?>
<br><br>
