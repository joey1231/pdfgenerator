<style>
  .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
      background: #1DC7EA;
  }
</style>
<div class='page-ff' id='page-third' style='margin-top:30px; display:none'>
  <!-- Nav tabs -->
   <ul class="nav nav-tabs" role="tablist">
     <li role="presentation" class="active"><a href="#client-p3" aria-controls="home" role="tab" data-toggle="tab">
      Client
     </a></li>
     <li role="presentation" class=""><a href="#partner-p3" aria-controls="home" role="tab" data-toggle="tab">
      Partner
     </a></li>
     <li role="presentation"><a href="#needs-p3"  aria-controls="profile" role="tab" data-toggle="tab">
      Risk Planning – Needs Table
     </a></li>
   </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="client-p3">
         <br />
         <div class="row">
           <div class="col-md-12">
             <h4>Client Existing Insurance Policies</h4>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel1' class="info-fld"> You have no ‘In Force’ Personal Insurance Policies
                </label>
              </div>
              <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel2' class="info-fld"> You have existing Personal Insurance Policies and have asked me to collect the latest information from your insurer/s. You have completed and signed the Letter of Authorisation form attached (Annex 1)
                </label>
              </div>
              <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel3' class="info-fld"> You have the following ‘In Force’ Personal Insurance Policies:
                </label>
              </div>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <table class='table table-hover table-striped' id='client-existing-insurance-policies-list' align='left' style="font-size:90%">
               <tr>
                 <th>Insurer</th>
                 <th>Benefit Type</th>
                 <th>Benefit Amount</th>
                 <th>A/SA</th>
                 <th>WP/BP</th>
                 <th>Premium</th>
                 <th>Owner</th>
                 <th></th>
               </tr>
             </table>
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-12 provider-item-parent'  align='left'>
             <label>Insurer: </label>
             <select class='form-control info-fld fld-ceipl'>
               <option value='-1'>No Provider</option>
               <?php
                 $sql = "SELECT * FROM company_provider ORDER BY company_name ASC;";
                 $query = $this->db->query($sql, array($_GET['i']));
                 if ($query->num_rows() > 0){
                     foreach($query->result() as $r){
                         echo "<option>".$r->company_name."</option>";
                     }
                 }
               ?>
               <option value='OTHER_PROV'>Other Provider</option>
             </select>
             <input type='text' class='form-control info-fld fld-ceipl' style='display:none' placeholder="Enter provider here..."/>
           </div>
         </div>

         <div class="row">
          <div class='form-group col-md-6'  align='left'>
             <label>Benefit Type: </label>
             <input type='text' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>Benefit Amount: </label>
             <input type='number' min='0' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-6'  align='left'>
             <label>A/SA: </label>
             <!-- <select class='form-control info-fld fld-ceipl'>
               <option>A</option><option>SA</option>
             </select> -->
             <input type='text' class='form-control info-fld fld-ceipl' />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>WP/BP</label>
             <!-- <select class='form-control info-fld fld-ceipl'>
               <option>WP</option><option>BP</option>
             </select> -->
             <input type='text' class='form-control info-fld fld-ceipl' />
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-6'  align='left'>
             <label>Premium: </label>
             <input type='text' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>Owner</label>
             <select class='form-control ff-ownership fld-ceipl'>
               <option>No owner</option>
             </select>
           </div>
         </div>

         <div class="row">
          <div class='col-md-12' align='left'>
           <button class='btn btn-fill btn-primary' id='add-client-policy-btn'>
             <i class='glyphicon glyphicon-plus'></i> Add
           </button>
         </div>
         </div>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="partner-p3">
         <br />
         <div class="row">
           <div class="col-md-12">
             <h4>Partner Existing Insurance Policies</h4>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel1' class="info-fld"> You have no ‘In Force’ Personal Insurance Policies
                </label>
              </div>
              <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel2' class="info-fld"> You have existing Personal Insurance Policies and have asked me to collect the latest information from your insurer/s. You have completed and signed the Letter of Authorisation form attached (Annex 1)
                </label>
              </div>
              <div class="checkbox text-left">
                <label>
                  <input type="checkbox" data-fld='sel3' class="info-fld"> You have the following ‘In Force’ Personal Insurance Policies:
                </label>
              </div>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
             <table class='table table-hover table-striped' id='partner-existing-insurance-policies-list' align='left' style="font-size:90%">
               <tr>
                 <th>Insurer</th>
                 <th>Benefit Type</th>
                 <th>Benefit Amount</th>
                 <th>A/SA</th>
                 <th>WP/BP</th>
                 <th>Premium</th>
                 <th>Owner</th>
                 <th></th>
               </tr>
             </table>
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-12 provider-item-parent'  align='left'>
             <label>Insurer: </label>
             <select class='form-control info-fld fld-ceipl'>
               <option value='-1'>No Provider</option>
               <?php
                 $sql = "SELECT * FROM company_provider ORDER BY company_name ASC;";
                 $query = $this->db->query($sql, array($_GET['i']));
                 if ($query->num_rows() > 0){
                     foreach($query->result() as $r){
                         echo "<option>".$r->company_name."</option>";
                     }
                 }
               ?>
               <option value='OTHER_PROV'>Other Provider</option>
             </select>
             <input type='text' class='form-control info-fld fld-ceipl' style='display:none' placeholder="Enter provider here..."/>
           </div>
         </div>

         <div class="row">
          <div class='form-group col-md-6'  align='left'>
             <label>Benefit Type: </label>
             <input type='text' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>Benefit Amount: </label>
             <input type='number' min='0' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-6'  align='left'>
             <label>A/SA: </label>
             <!-- <select class='form-control info-fld fld-ceipl'>
               <option>A</option><option>SA</option>
             </select> -->
             <input type='text' class='form-control info-fld fld-ceipl' />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>WP/BP</label>
             <!--
             <select class='form-control info-fld fld-ceipl'>
               <option>WP</option><option>BP</option>
             </select> -->
             <input type='text' class='form-control info-fld fld-ceipl' />
           </div>
         </div>

         <div class="row">
           <div class='form-group col-md-6'  align='left'>
             <label>Premium: </label>
             <input type='text' class="form-control info-fld fld-ceipl" placeholder="" />
           </div>
           <div class='form-group col-md-6'  align='left'>
             <label>Owner</label>
             <select class='form-control ff-ownership fld-ceipl'>
               <option>No owner</option>
             </select>
           </div>
         </div>

         <div class="row">
          <div class='col-md-12' align='left'>
           <button class='btn btn-fill btn-primary' id='add-partner-policy-btn'>
             <i class='glyphicon glyphicon-plus'></i> Add
           </button>
         </div>
         </div>
    </div>

    <div role="tabpanel" class="tab-pane fade" id="needs-p3">

      <div id='clients-need-form'>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h3 style="">Client Needs Table</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <strong style="font-weight: bold; text-transform: uppercase;">Capital Requirements</strong>
          </div>
          <div class="col-md-2">
            Life
          </div>
          <div class="col-md-2">
            TPD
          </div>
          <div class="col-md-2">
            Trauma
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='liabilitiesclear'>
            Liabilities to Clear
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='futureexp'>
            Future Expenditure Required
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='futureeduc'>
            Future Education Expense
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='medcost'>
            Medical Costs/Recovery Income
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='provtax'>
            Provision for Tax
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='mortgage'>
            Mortgage
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='otherprovs'>
            Other Provisions
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='others'>
            Other
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalcapreq'>
            <strong class="text-right" style="font-weight: bold;">Total Capital Required</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6">
            CAPITAL PROVISIONS
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='disposableassets'>
            Disposable Assets willing to be sold
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  capital-provisions" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  capital-provisions" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='continuingincome'>
            Continuing Income
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='trauma'></input>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalCapAvail'>
            <strong class="text-right" style="font-weight: bold;">Total Capital Available</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6">
            INSURANCE NEEDS
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalCoveredRequired'>
            <strong class="text-right" style="font-weight: bold;">Total Cover Required</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='percentDesiredInput'>
            Percentage Desired Input
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='trauma'></input>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalAmountDesired'>
            <b>Total Amount Desired</b>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='existingcover'>
            Existing Cover
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='trauma'></input>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='surplus'>
            <strong class="text-right" style="font-weight: bold;">Surplus/Shortfall</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-cover" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-cover" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  surplus-cover" data-fld='trauma'></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='clientsurplus'>
            <strong class="text-right" style="font-weight: bold;">Client Desired Surplus/Shortfall</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='trauma'></input>
          </div>
        </div>
        <br>
      </div>

      <hr>

      <div id='partner-need-form'>
        <br>
        <div class="row">
          <div class="col-md-12">
            <h3 style="">Client Needs Table</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <strong style="font-weight: bold; text-transform: uppercase;">Capital Requirements</strong>
          </div>
          <div class="col-md-2">
            Life
          </div>
          <div class="col-md-2">
            TPD
          </div>
          <div class="col-md-2">
            Trauma
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='liabilitiesclear'>
            Liabilities to Clear
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='futureexp'>
            Future Expenditure Required
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='futureeduc'>
            Future Education Expense
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='medcost'>
            Medical Costs/Recovery Income
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='provtax'>
            Provision for Tax
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='mortgage'>
            Mortgage
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='otherprovs'>
            Other Provisions
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='others'>
            Other
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld risk-data-one" data-fld='trauma'></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalcapreq'>
            <strong class="text-right" style="font-weight: bold;">Total Capital Required</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-required" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6">
            CAPITAL PROVISIONS
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='disposableassets'>
            Disposable Assets willing to be sold
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  capital-provisions" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  capital-provisions" data-fld='trauma'></input>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='continuingincome'>
            Continuing Income
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld capital-provisions" data-fld='trauma'></input>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalCapAvail'>
            <strong class="text-right" style="font-weight: bold;">Total Capital Available</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-capital-avail" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6">
            INSURANCE NEEDS
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalCoveredRequired'>
            <strong class="text-right" style="font-weight: bold;">Total Cover Required</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-cover-req" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='percentDesiredInput'>
            Percentage Desired Input
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld perc-des-input" data-fld='trauma'></input>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='totalAmountDesired'>
            <b>Total Amount Desired</b>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld total-amt-des" data-fld='trauma'></input>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-6 fld-title" data-fld='existingcover'>
            Existing Cover
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld existing-cover" data-fld='trauma'></input>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='surplus'>
            <strong class="text-right" style="font-weight: bold;">Surplus/Shortfall</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-cover" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-cover" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld  surplus-cover" data-fld='trauma'></input>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6 fld-title" data-fld='clientsurplus'>
            <strong class="text-right" style="font-weight: bold;">Client Desired Surplus/Shortfall</strong>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='life'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='tpd'></input>
          </div>
          <div class="col-md-2">
            <input type="number" min="0" class="form-control info-fld surplus-client" data-fld='trauma'></input>
          </div>
        </div>
        <br>
      </div>

    </div>

  </div>
</div>


<script>
var refreshChildSelection = function(){
    var items = [];
    $('#dependents-list .dependent-item').each(function(){
        var name = $(this).find('td:eq(0)').html();
        var bday = $(this).find('td:eq(1)').html();

        items.push({ n:name, b:bday });
    });

    if (items.length > 0){
      var h = "";
      for(var i=0; i<items.length; i++){
          var item = items[i];

          //var date = item.b; var arr = date.split("-");
          //var newDate = arr[1]+"-"+arr[2]+"-"+arr[0];

          h += "<option value='"+(i+1)+"' data-name='"+item.n+"' data-date='"+item.b+"'>";
          h += item.n+" / "+item.b;
          h += "</option>";
      }

    } else {
      var h = '<option value="0">Please add up a child information in "Children" tab under Step 1-3</option>';
    }

    $('#pg3-child-list-select').html(h);
};

var fetchThirdItem = function(){
    var dataset = {};

    // Fetch client policy chuchu
    dataset.clientpolicy = {};
    $('#client-p3 .checkbox').each(function(){
        var fieldName = $(this).find('input').attr('data-fld');
        if (fieldName != "" || fieldName != null){

            if ($(this).find('input').is(":checked")){
              dataset.clientpolicy[fieldName] = "yes";
            } else {
              dataset.clientpolicy[fieldName] = "no";
            }
            //if ($(this).hasClass('checked')){

            //} else {  }

        }
    });

    dataset.clientpolicy.list = [];
    $('#client-p3 .client-policy-list').each(function(){
        var policy = {};
        policy.insurer = $(this).find('td:eq(0)').html();
        policy.type = $(this).find('td:eq(1)').html();
        policy.amount = $(this).find('td:eq(2)').html();
        policy.asa = $(this).find('td:eq(3)').html();
        policy.wpbp = $(this).find('td:eq(4)').html();
        policy.premium = $(this).find('td:eq(5)').html();
        policy.owner = $(this).find('td:eq(6)').html();

        dataset.clientpolicy.list.push(policy);
    });

    // Fetch partner policy chuchu
    dataset.partnerpolicy = {};
    $('#partner-p3 .checkbox').each(function(){
        var fieldName = $(this).find('input').attr('data-fld');
        if (fieldName != "" || fieldName != null){
            if ($(this).find('input').is(":checked")){
                dataset.partnerpolicy[fieldName] = "yes";
            } else { dataset.partnerpolicy[fieldName] = "no"; }

        }
    });

    dataset.partnerpolicy.list = [];
    $('#partner-p3 .partner-policy-list').each(function(){
        var policy = {};
        policy.insurer = $(this).find('td:eq(0)').html();
        policy.type = $(this).find('td:eq(1)').html();
        policy.amount = $(this).find('td:eq(2)').html();
        policy.asa = $(this).find('td:eq(3)').html();
        policy.wpbp = $(this).find('td:eq(4)').html();
        policy.premium = $(this).find('td:eq(5)').html();
        policy.owner = $(this).find('td:eq(6)').html();

        dataset.partnerpolicy.list.push(policy);
    });

    // dataset.needs = {};
    dataset.needs = {
      client: {
          life:[], tpd:[], trauma:[]
      },
      partner: {
          life:[], tpd:[], trauma:[]
      }
    };

    $('#clients-need-form .info-fld').each(function(){
        var value = $(this).val();
        if (isNaN(value)){
            value = 0;
        }

        var type = $(this).attr('data-fld');
        var parentRow = $(this).parent().parent();

        var titleCont = parentRow.find('.fld-title');
        var title = titleCont.attr('data-fld');

        if (type == "life"){
            dataset.needs.client.life.push({
                v:value, t:title
            });
        } else if (type == "tpd"){
          dataset.needs.client.tpd.push({
              v:value, t:title
          });
        } else if (type == "trauma"){
          dataset.needs.client.trauma.push({
              v:value, t:title
          });
        }
    });

    $('#partner-need-form .info-fld').each(function(){
        var value = $(this).val();
        if (isNaN(value)){
            value = 0;
        }

        var type = $(this).attr('data-fld');
        var parentRow = $(this).parent().parent();

        var titleCont = parentRow.find('.fld-title');
        var title = titleCont.attr('data-fld');

        if (type == "life"){
            dataset.needs.partner.life.push({
                v:value, t:title
            });
        } else if (type == "tpd"){
          dataset.needs.partner.tpd.push({
              v:value, t:title
          });
        } else if (type == "trauma"){
          dataset.needs.partner.trauma.push({
              v:value, t:title
          });
        }
    });


    /* dataset.detail.notes = {};
    dataset.detail.notes.educ      = $('#p3-notes-educ-expense').val();
    dataset.detail.notes.futureexp = $('#p3-notes-futureexp').val();
    dataset.detail.notes.liabs = $('#p3-notes-liabs').val();
    dataset.detail.notes.otherprovsss = $('#p3-notes-otherprovsss').val();
    dataset.detail.notes.assetss = $('#p3-notes-assetss').val();
    dataset.detail.notes.ongoingincome = $('#p3-notes-ongoingincome').val(); */

    return dataset;
};

var updateTotalCoveredReq = function(ref){
  var fieldName = ref.attr('data-fld');
  var parent = ref.parent().parent().parent().attr('id');
  var selector = "#"+parent+" .total-capital-avail[data-fld="+fieldName+"]";

  var sum = 0;
  $(selector).each(function(){
      var value = $(this).val();
      if (value == ""){
        sum += 0;
      } else { sum += parseFloat(value); }
  });

  var diff = 0;
  selector = "#"+parent+" .total-capital-required[data-fld="+fieldName+"]";
  $(selector).each(function(){
      var value = $(this).val();
      if (value == ""){
        //sum = sum - 0;
        diff += 0;
      } else { diff += parseFloat(value); }
  });

  var finalVal = diff - sum;
  var sel = "#"+parent+" .total-cover-req[data-fld="+fieldName+"]";
  $(sel).val(finalVal);
};

var updateSurplusReq = function(ref){
  var fieldName = ref.attr('data-fld');
  var parent = ref.parent().parent().parent().attr('id');
  var selector = "#"+parent+" .total-cover-req[data-fld="+fieldName+"]";

  var sum = 0;
  $(selector).each(function(){
      var value = $(this).val();
      if (value == ""){
        sum += 0;
      } else { sum += parseFloat(value); }
  });

  selector = "#"+parent+" .existing-cover[data-fld="+fieldName+"]";
  var cou = 0;
  $(selector).each(function(){
      var value = $(this).val();
      if (value == ""){
        //sum = sum;
        cou += 0;
      } else { cou += parseFloat(value); }
  });

  // sum - cou
  var finalSurplus = 0;
  if (sum > 0){
      finalSurplus = sum - cou;
  } else { finalSurplus = sum + cou; }

  var sel = "#"+parent+" .surplus-cover[data-fld="+fieldName+"]";
  $(sel).val(finalSurplus);

  // Get surplus/final
  sel = "#"+parent+" .total-amt-des[data-fld="+fieldName+"]";
  var desired = parseFloat( $(sel).val() );
  sel = "#"+parent+" .existing-cover[data-fld="+fieldName+"]";
  var existing = parseFloat( $(sel).val() );

  sel = "#"+parent+" .surplus-client[data-fld="+fieldName+"]";
  var surplusClient = desired - existing;
  $(sel).val(surplusClient);

};

$(document).ready(function(){

    $('.provider-item-parent select').change(function(){
        var me = $(this); var parent = me.parent();
        var value = me.val();

        if (value == "OTHER_PROV"){
            parent.find('input').show(0);
        } else {
            parent.find('input').hide(0);
        }
    });

    $('.existing-cover').change(function(){
      updateSurplusReq($(this));
    });

    $('.perc-des-input').change(function(){
        var value = $(this).val();
        var fieldName = $(this).attr('data-fld');
        var parent = $(this).parent().parent().parent().attr('id');

        //var selector = "#"+parent+" .total-capital-required[data-fld="+fieldName+"]";

        var selector = "#"+parent+" .total-cover-req[data-fld="+fieldName+"]";

        var totalAmountDesired = 0;
        var totalCapitalRequired = parseFloat($(selector).val());


        totalAmountDesired = (value/100) * Math.abs(totalCapitalRequired);

        selector = "#"+parent+" .total-amt-des[data-fld="+fieldName+"]";
        $(selector).val(totalAmountDesired);

        updateSurplusReq($(this));
    });

    $('.risk-data-one').change(function(){
        var fieldName = $(this).attr('data-fld');
        var parent = $(this).parent().parent().parent().attr('id');
        var selector = "#"+parent+" .risk-data-one[data-fld="+fieldName+"]";

        var sum = 0;
        $(selector).each(function(){
            var value = $(this).val();
            if (value == ""){
              sum += 0;
            } else { sum += parseFloat(value); }
        });

        var sel = "#"+parent+" .total-capital-required[data-fld="+fieldName+"]";
        $(sel).val(sum);

        updateTotalCoveredReq($(this));
        updateSurplusReq($(this));
    });

    $('.capital-provisions').change(function(){
        var fieldName = $(this).attr('data-fld');
        var parent = $(this).parent().parent().parent().attr('id');
        var selector = "#"+parent+" .capital-provisions[data-fld="+fieldName+"]";

        var sum = 0;
        $(selector).each(function(){
            var value = $(this).val();
            if (value == ""){
              sum += 0;
            } else { sum += parseFloat(value); }
        });

        var sel = "#"+parent+" .total-capital-avail[data-fld="+fieldName+"]";
        $(sel).val(sum);

        updateTotalCoveredReq($(this));
        updateSurplusReq($(this));
    });

    $('#add-child-educ-btn').click(function(){
      var dataset = []; var first = true;

      var name = ""; var bday = "";
      $('.child-list-info .child-info').each(function(){
          dataset.push($(this).val());
      });

      console.log(dataset);

      if (dataset[0] == "0"){
        $.notify({ icon: "pe-7s-info", message: "Please enter a child first in the 'Children' tab under Steps 1-3 tab." },{
            type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
        });
      } else {
          name = $('#pg3-child-list-select :selected').attr('data-name');
          bday = $('#pg3-child-list-select :selected').attr('data-date');

          var html = "<tr class='future-educ-child-list-item' align='left'>";
          html += "<td>"+name+"</td>";
          html += "<td>"+bday+"</td>";
          html += "<td>"+dataset[1]+"</td>";
          html += "<td>"+dataset[2]+"</td>";
          html += "<td>"+dataset[3]+"</td>";
          html += "<td>"+dataset[4]+"</td>";
          html += "<td>"+dataset[5]+"</td>";

          html += '<td><button type="button" class="close future-educ-child-list-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#future-educ-child-list').append(html);
          $('.future-educ-child-list-close').click(function(ev){
              var parent = $(this).parent().parent();
              parent.remove();
          });
      }

    });

    $('#add-liability-cleared-btn').click(function(){
        var dataset = []; var hasNoContents = true;
        $('.liabilities-to-clear .info-fld').each(function(){
            dataset.push($(this).val());

            if ($(this).val() != ""){
              hasNoContents = false;
            }
        });

        if (!hasNoContents){
            var html = "<tr class='liabilities-to-clear-item' align='left'><td>";
            html += dataset[0]+"</td><td>"+dataset[1]+"</td><td>"+dataset[2]+"</td>";
            html += "<td>"+dataset[3]+"</td>";
            html += "<td>"+dataset[4]+"</td>";
            html += "<td>"+dataset[5]+"</td>";

            html += '<td><button type="button" class="close liabilities-to-clear-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

            $('#liabilities-clear-table').append(html);

            $('.liabilities-to-clear .info-fld').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            $('.liabilities-to-clear-close').click(function(ev){
                var parent = $(this).parent().parent();
                parent.remove();
            });
        }
    });

    $('#add-ongoingincome-list-item').click(function(){
      var dataset = []; var hasNoContents = true;
      $('#ongoingincome .info-fld').each(function(){
          dataset.push($(this).val());

          if ($(this).val() != ""){
            hasNoContents = false;
          }
      });

      if (!hasNoContents){
          var html = "<tr class='ongoingincome-item' align='left'>";
          html += "<td>"+dataset[0]+"</td>";
          html += "<td>"+dataset[1]+"</td>";
          html += "<td>"+dataset[2]+"</td>";
          html += "<td>"+dataset[3]+"</td>";
          html += "<td>"+dataset[4]+"</td>";
          html += "<td>"+dataset[5]+"</td>";

          html += '<td><button type="button" class="close ongoingincome-item-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#ongoingincome-list').append(html);

          $('#ongoingincome .info-fld').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.ongoingincome-item-close').click(function(ev){
              var parent = $(this).parent().parent();
              parent.remove();
          });
      }
    });

    $('#add-assetss-list-item').click(function(){
      var dataset = []; var hasNoContents = true;
      $('#assetss .info-fld').each(function(){
          dataset.push($(this).val());

          if ($(this).val() != ""){
            hasNoContents = false;
          }
      });

      if (!hasNoContents){
          var html = "<tr class='assetss-item' align='left'>";
          html += "<td>"+dataset[0]+"</td>";
          html += "<td>"+dataset[1]+"</td>";
          html += "<td>"+dataset[2]+"</td>";
          html += "<td>"+dataset[3]+"</td>";
          html += "<td>"+dataset[4]+"</td>";
          html += "<td>"+dataset[5]+"</td>";

          html += '<td><button type="button" class="close assetss-item-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#assetss-list').append(html);

          $('#assetss .info-fld').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.assetss-item-close').click(function(ev){
              var parent = $(this).parent().parent();
              parent.remove();
          });
      }

    });

    $('#add-otherprovsss-list-item').click(function(){
      var dataset = []; var hasNoContents = true;
      $('#otherprovsss .info-fld').each(function(){
          dataset.push($(this).val());

          if ($(this).val() != ""){
            hasNoContents = false;
          }
      });

      if (!hasNoContents){
          var html = "<tr class='otherprovsss-item' align='left'>";
          html += "<td>"+dataset[0]+"</td>";
          html += "<td>"+dataset[1]+"</td>";
          html += "<td>"+dataset[2]+"</td>";
          html += "<td>"+dataset[3]+"</td>";
          html += "<td>"+dataset[4]+"</td>";
          html += "<td>"+dataset[5]+"</td>";

          html += '<td><button type="button" class="close otherprovsss-item-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#otherprovsss-list').append(html);

          $('#otherprovsss .info-fld').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.otherprovsss-item-close').click(function(ev){
              var parent = $(this).parent().parent();
              parent.remove();
          });
      }

    });

    $('#add-future-exp-btn').click(function(){

        var dataset = []; var hasNoContents = true;
        $('#futureexp .info-fld').each(function(){
            dataset.push($(this).val());

            if ($(this).val() != ""){
              hasNoContents = false;
            }
        });

        if (!hasNoContents){
            var html = "<tr class='future-exp-list-item' align='left'>";
            html += "<td>"+dataset[0]+"</td>";
            html += "<td>"+dataset[1]+"</td>";
            html += "<td>"+dataset[2]+"</td>";
            html += "<td>"+dataset[3]+"</td>";
            html += "<td>"+dataset[4]+"</td>";
            html += "<td>"+dataset[5]+"</td>";
            html += "<td>"+dataset[6]+"</td>";
            html += "<td>"+dataset[7]+"</td>";

            html += '<td><button type="button" class="close future-exp-list-item-close" ><span aria-hidden="true">&times;</span></button></td></tr>';

            $('#future-exp-list').append(html);

            $('#futureexp .info-fld').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            $('.future-exp-list-item-close').click(function(ev){
                var parent = $(this).parent().parent();
                parent.remove();
            });
        }

    });

    $('#add-client-policy-btn').click(function(){
        var dataset = [];
        $('#client-p3 .fld-ceipl').each(function(){ dataset.push( $(this).val() ); });

        if (dataset[0] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter insurer name." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
          var html = "<tr class='client-policy-list'>";
          for(var i=0; i<dataset.length; i++){
            if (i == 0){
                if (dataset[i] == "-1" || dataset[i] == -1){
                    html += "<td align='left'>No provider.</td>";
                } else if (dataset[i] == "OTHER_PROV"){
                    if (dataset[i+1] == ""){
                        html += "<td align='left'>Other - None specified.</td>";
                    } else {
                        html += "<td align='left'>Other - "+dataset[i+1]+"</td>";
                    }
                } else {
                    html += "<td align='left'>"+dataset[i]+"</td>";
                }

                i++;
            } else {
                if (i != 1){
                    html += "<td align='left'>"+dataset[i]+"</td>";
                }
            }
          }

          html += '<td><button type="button" class="close client-policy-close-me" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#client-existing-insurance-policies-list').append(html);

          $('#client-p3 .fld-ceipl').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.client-policy-close-me').click(function(){
              var parent = $(this).parent().parent();
              parent.remove();
          });

        }
    });

    $('#add-partner-policy-btn').click(function(){
        var dataset = [];
        $('#partner-p3 .fld-ceipl').each(function(){ dataset.push( $(this).val() ); });

        if (dataset[0] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter insurer name." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
          var html = "<tr class='partner-policy-list'>";
          for(var i=0; i<dataset.length; i++){
            if (i == 0){
                if (dataset[i] == "-1" || dataset[i] == -1){
                    html += "<td align='left'>No provider.</td>";
                } else if (dataset[i] == "OTHER_PROV"){
                    if (dataset[i+1] == ""){
                        html += "<td align='left'>Other - None specified.</td>";
                    } else {
                        html += "<td align='left'>Other - "+dataset[i+1]+"</td>";
                    }
                } else {
                    html += "<td align='left'>"+dataset[i]+"</td>";
                }

                i++;
            } else {
                if (i != 1){
                    html += "<td align='left'>"+dataset[i]+"</td>";
                }
            }
          }

          html += '<td><button type="button" class="close partner-policy-close-me" ><span aria-hidden="true">&times;</span></button></td></tr>';

          $('#partner-existing-insurance-policies-list').append(html);

          $('#partner-p3 .fld-ceipl').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.partner-policy-close-me').click(function(){
              var parent = $(this).parent().parent();
              parent.remove();
          });

        }
    });

});

</script>
