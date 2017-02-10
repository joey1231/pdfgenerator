
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

<p></p>
<h2 class="sectionn-title">EXISTING INSURANCES</h2>
<p></p>
<?php
$existingInsurance = $data['planb']['existingInsurances'];

// echo "<code>";
// print_r($data['planb']);
// echo "</code>";

// $existingInsurance = $data->planb->existingInsurances;
if ($existingInsurance['hasValue'] == "true"):
    ?>
    <table class="table ff-table" style="font-size:115%" cellpadding="5">
        <tr class="head-table">
            <th width="15%">LifeAssured</th>
            <th width="15%">Provider</th>
            <th width="15%">Policy Type</th>
            <th width="15%">Policy Str.</th>
            <th width="15%">Benefit Type</th>
            <th width="15%">Benefit Prd.</th>
            <th width="10%">Wait Prd.</th>
        </tr>
        <?php
        $tableItems = $existingInsurance['table']; $isEven = true;
        foreach($tableItems as $t){
            if ($isEven){
                $isEven = false;
                echo "<tr>";
            } else {
                $isEven = true;
                echo '<tr class="ff-tbl-alt">';
            }

            echo "<td>".$t['lifeAssured']."</td>";
            echo "<td>".$t['provider']."</td>";
            echo "<td>".$t['policyType']."</td>";
            echo "<td>".$t['policyStructure']."</td>";
            echo "<td>".$t['benefitType']."</td>";
            echo "<td>".$t['benefitPeriod']."</td>";
            echo "<td>".$t['waitPeriod']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
<?php else: ?>
    <p style="font-size:110%">It has been disclosed that you have no existing risk insurances in place.</p>
<?php endif;
?>
<p></p>
