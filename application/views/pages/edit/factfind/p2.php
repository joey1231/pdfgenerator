<?php

$data = $_data->second;

?>

<div class='page-ff' id='page-second' style='margin-top:30px; display:none !important'>
  <div class='row'>
    <div class='col-md-12'>
      <select id='fact-find-mode-select' class='form-control'>
        <option value="0">Simplified Income/Liability Particulars</option>
        <option value="1">Detailed Fact Find</option>
      </select>
    </div>
  </div><br />

   <!-- Nav tabs -->
   <div class='visible-xs-block visible-lg-block'>
     <ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active p2-main-nav-simple"><a href="#simplify-p2" aria-controls="home" role="tab" data-toggle="tab">
         Simple Income/Expense Calculator
       </a></li>
       <li role="presentation" class="p2-main-nav-simple"><a href="#simpe-a-l-p2" aria-controls="home" role="tab" data-toggle="tab">
         Your Assets/Liabilities
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#income-p2" aria-controls="home" role="tab" data-toggle="tab">
         Income
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#expenses-p2" aria-controls="home" role="tab" data-toggle="tab">
         Expenses
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#assets-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Assets
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#liabilities-p2" aria-controls="home" role="tab" data-toggle="tab">
         Liabilities
       </a></li>
       <li role="presentation"><a href="#goals-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Goals and Objectives
       </a></li>
       <li role="presentation"><a href="#estate-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Estate Planning
       </a></li>
       <li role="presentation"><a href="#health-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Health/Pastime Status
       </a></li>
       <li role="presentation"><a href="#notes-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Notes
       </a></li>
     </ul>
   </div>

   <div class='visible-sm-block visible-xs-block'>
     <ul class="nav nav-tabs" role="tablist" style='font-size:80%'>
       <li role="presentation" class="active p2-main-nav-simple"><a href="#simplify-p2" aria-controls="home" role="tab" data-toggle="tab">
         Simple I/E Calculator
       </a></li>
       <li role="presentation" class="p2-main-nav-simple"><a href="#simpe-a-l-p2" aria-controls="home" role="tab" data-toggle="tab">
         Assets/Liabilities
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#income-p2" aria-controls="home" role="tab" data-toggle="tab">
         Income
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#expenses-p2" aria-controls="home" role="tab" data-toggle="tab">
         Expenses
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#assets-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Assets
       </a></li>
       <li role="presentation" class='p2-main-nav-detailed' style='display:none'><a href="#liabilities-p2" aria-controls="home" role="tab" data-toggle="tab">
         Liabilities
       </a></li>
       <li role="presentation"><a href="#goals-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Goals/Objectives
       </a></li>
       <li role="presentation"><a href="#estate-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Estate Planning
       </a></li>
       <li role="presentation"><a href="#health-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Health/Pastime Status
       </a></li>
       <li role="presentation"><a href="#notes-p2"  aria-controls="profile" role="tab" data-toggle="tab">
         Notes
       </a></li>
     </ul>
   </div>



   <!-- Tab panes -->
   <div class="tab-content">

     <div role='tabpanel' class='tab-pane fade in active' id='simplify-p2'>
       <br />
       <div class='row'>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Annual Income before tax:</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[0]))?$data->simple[0]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Partner's Annual Income before tax:</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[1]))?$data->simple[1]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Amount of Supplemental Benefits from the Government:</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[2]))?$data->simple[2]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Annual Household Income after tax:</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[3]))?$data->simple[3]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your annual approximate costs of Dependant's Education and/or Child Care</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[4]))?$data->simple[4]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Annual General Expenses (food, insurance, clothing, etc.) :</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[5]))?$data->simple[5]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your annual costs of Rent or Mortgage and other loans</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[6]))?$data->simple[6]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Any other expenses not considered</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[7]))?$data->simple[7]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label><b>Your Total Annual Household Expenses</b></label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[8]))?$data->simple[8]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Annual Disposable Household Income</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[9]))?$data->simple[9]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
         <div class='col-md-12 form-group' align='left'>
           <label>Your Monthly Disposable Household Income</label>
           <div class="input-group">
              <span class="input-group-addon">$</span>
              <input value="<?php echo (isset($data->simple[10]))?$data->simple[10]:""; ?>" type='number' min='0' class='form-control' />
           </div>
         </div>
       </div>
     </div>

     <div role='tabpanel' class='tab-pane fade' id='simpe-a-l-p2'>
        <br />
        <div class='row'>
          <div class='col-md-6 col-sm-6 simple-assets-form'>
            <h3>Your Assets</h3>
            <br />

            <div class='row'>
              <div class='col-md-12 form-group' align='left'>
                <label>Property Assets:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input value="<?php echo (isset($data->simpleassets[0]))?$data->simpleassets[0]:""; ?>" type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Cash Assets:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input value="<?php echo (isset($data->simpleassets[1]))?$data->simpleassets[1]:""; ?>" type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Other Assets:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input value="<?php echo (isset($data->simpleassets[2]))?$data->simpleassets[2]:""; ?>" type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Total Assets:</label>
                <div class='pull-right'>
                  $ <span id='simple-total-assets'>0.00</span>
                </div>
              </div>
            </div>


          </div>
          <div class='col-md-6 col-sm-6 simple-liabs-form'>
            <h3>Your Liabilities</h3>
            <br />

            <div class='row'>
              <div class='col-md-12 form-group' align='left'>
                <label>Mortgage:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Credit Card:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Personal Loan:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label>Other Liabilities:</label>
                <div class="input-group">
                   <span class="input-group-addon">$</span>
                   <input type='number' min='0' class='form-control' />
                </div>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <b><label>Total Liabilities:</label>
                <div class='pull-right'>
                  $ <span id='simple-total-liabs'>0.00</span>
                </div></b>
              </div>
              <div class='col-md-12 form-group' align='left'>
                <label><b>Net Worth:</b></label>
                <div class='pull-right'>
                  $ <span id='simple-networth'>0.00</span>
                </div>
              </div>
            </div>

          </div>
        </div>
     </div>

     <div role='tabpanel' class='tab-pane fade' id='income-p2'>
       <br />
       <div class='row'>
         <div class='col-md-6' align='left'>

           <div class="row">
             <div class="col-md-6">
               <strong style="font-weight: bold; text-transform: uppercase;">(p.a)</strong>
             </div>
             <div class="col-md-3">Client</div>
             <div class="col-md-3">Partner</div>
           </div>

           <div class="row">
             <div class="col-md-6" >Wages/Salary</div>
             <div class="col-md-3">
               <input type='number' min='0' class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input  type='number' min='0' class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Bonuses</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Commissions</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Investment Interest</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Investment Dividends</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Rental Income</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Pension Income</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Trade Income</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Royalties</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Business Income</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Other Income</div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
             <div class="col-md-3">
               <input type='number' min='0'  class="form-control info-fld pa-income"></input>
             </div>
           </div>
           <div class="row" align='right'>
             <div class="col-md-6">
               <b>Total Gross Income:</b>
             </div>
             <div class="col-md-3" id='total-gross-client'>
               0.00
             </div>
             <div class="col-md-3" id='total-gross-partner'>
               0.00
             </div>
           </div>
           <div class="row" align='right'>
             <div class="col-md-6">
               <b>Combined Income:</b>
             </div>
             <div class="col-md-6">
               <b id='total-gross'>0.00</b>
             </div>
           </div>
         </div>
         <div class='col-md-6'>
           <div class="row">
             <div class="col-md-6">
               <strong style="font-weight: bold; text-transform: uppercase;">
                 Net Monthly Income
               </strong>
             </div>
             <div class="col-md-6"></div>
           </div>

           <div class="row">
             <div class="col-md-6" >Client/Applicant 1</div>
             <div class="col-md-6">
               <input type='number' min='0' class="form-control month-income info-fld"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Partner/Applicant 2</div>
             <div class="col-md-6">
               <input type='number' min='0' class="form-control month-income info-fld"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Rental Income</div>
             <div class="col-md-6">
               <input type='number' min='0' class="form-control month-income info-fld"></input>
             </div>
           </div>
           <div class="row">
             <div class="col-md-6" >Other Income</div>
             <div class="col-md-6">
               <input type='number' min='0' class="form-control month-income info-fld"></input>
             </div>
           </div>
           <div class="row" align='right'>
             <div class="col-md-6" ><b>Total (Monthly):</b></div>
             <div class="col-md-6">
               <b id='total-montly-fld'>0.00</b>
             </div>
           </div>

         </div>

       </div>






     </div>

     <div role="tabpanel" class="tab-pane fade" id="expenses-p2">
       <br />
       <div class='row'>
         <div class='col-md-6 form-group' align='left'>
           <label>Expense Category:</label>
           <select class='form-control' id='expenses-cat'>
              <option value='0'>Select category</option>
              <option value='1'>Tax</option>
              <option value='2'>Debt</option>
              <option value='3'>Household</option>
              <option value='4'>Vehicles</option>
              <option value='5'>Food</option>
              <option value='6'>Insurance</option>
              <option value='7'>Healthcare</option>
              <option value='8'>Personal Care</option>
              <option value='9'>Entertainment</option>
              <option value='10'>Others</option>
           </select>
         </div>
         <div class='col-md-6 form-group' align='left'>
           <label>Expense Item:</label>
           <select class='form-control' id='expenses-item'>
             <option value='0'>Select category first...</option>
           </select>
           <input type='text' class='form-control' style='display:none' id='expenses-item-others'/>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-4 form-group' align='left'>
           <label>Frequency</label>
           <select class='form-control' id='expenses-freq'>
              <option>Weekly</option>
              <option>Fortnightly</option>
              <option>Monthly</option>
              <option>Annually</option>
           </select>
         </div>
         <div class='col-md-4 form-group' align='left'>
           <label>Owner</label>
           <select class='form-control ff-ownership'>
             <option>No owner</option>
           </select>
         </div>
         <div class='col-md-4 form-group' align='left'>
           <label>Value</label>
           <input type='number' min="0" class='form-control' placeholder=''/>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-12' align='left'>
            <button id='add-expenses-btn' class='btn btn-fill btn-primary'>Add Expense Item</button>
         </div>
       </div>

       <br />
       <div class='row'>
         <div class='col-md-12' style='font-size:90%'>
           <table id='expenses-list'  class='table table-hover table-striped' align="left">
              <thead>
                <tr align='left'><td>Category</td><td>Item</td><td>Frequency</td>
                  <td>Owner</td><td>Amount</td><td>Annual</td><td></td></tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="5" align='right'>Total Expenses</td>
                  <td colspan="2" align="left" id='total-expenses'>0.00</td>
                </tr>
                <tr>
                  <td colspan="5" align='right'>Surplus (Deficit)</td>
                  <td colspan="2" align="left" id='total-surplus'>0.00</td>
                </tr>
              </tfoot>
           </table>
         </div>
       </div>

     </div>

     <div role="tabpanel" class="tab-pane fade" id="assets-p2">
       <br />
       <div class='row'>
         <div class='col-md-6 form-group' align='left'>
           <label>Asset Category:</label>
           <select class='form-control' id='asset-cat'>
              <option value='0'>Select category</option>
              <option value='1'>Real Estate</option>
              <option value='2'>Vehicles</option>
              <option value='3'>Lifestyle</option>
              <option value='4'>Investment Assets</option>
           </select>
         </div>
         <div class='col-md-6 form-group' align='left'>
           <label>Asset Item:</label>
           <select class='form-control' id='asset-item'>
             <option value='0'>Select category first...</option>
           </select>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-4 form-group' align='left'>
           <label>Description</label>
           <input type='text' class='form-control' placeholder='Put description here...'/>
         </div>
         <div class='col-md-4 form-group' align='left'>
           <label>Owner</label>
           <select class='form-control ff-ownership'>
             <option>No owner</option>
           </select>
         </div>
         <div class='col-md-4 form-group' align='left'>
           <label>Value</label>
           <input type='number' min="0" class='form-control' placeholder=''/>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-12' align='left'>
            <button id='add-asset-btn' class='btn btn-fill btn-primary'>Add Asset</button>
         </div>
       </div>

       <br />
       <div class='row'>
         <div class='col-md-12' style='font-size:90%'>
           <table id='assets-list'  class='table table-hover table-striped' align="left">
              <thead>
                <tr align='left'><td>Category</td><td>Item</td><td>Description</td><td>Owner</td><td>Value</td><td></td></tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" align='right'>Total Assets</td>
                  <td colspan="2" align="left" id="total-assets-counter">0.00</td>
                </tr>
              </tfoot>
           </table>
         </div>
       </div>

     </div>

     <div role="tabpanel" class="tab-pane fade" id="liabilities-p2">
       <br />
       <div class='row'>
         <div class='col-md-6 col-sm-6 form-group' align='left'>
           <label>Liability Category:</label>
           <select class='form-control' id='liability-cat'>
              <option value='0'>Select category</option>
              <option value='1'>Long Term</option>
              <option value='2'>Current</option>
           </select>
         </div>
         <div class='col-md-6 col-sm-6 form-group' align='left'>
           <label>Liability Item:</label>
           <select class='form-control' id='liability-item'>
             <option value='0'>Select category first...</option>
           </select>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-4 col-sm-4 form-group' align='left'>
           <label>Description</label>
           <input type='text' class='form-control' placeholder='Put description here...'/>
         </div>
         <div class='col-md-4 col-sm-4 form-group' align='left'>
           <label>Owner</label>
           <select class='form-control ff-ownership'>
             <option>No owner</option>
           </select>
         </div>
         <div class='col-md-4 col-sm-4 form-group' align='left'>
           <label>Value</label>
           <input type='number' min="0" class='form-control' placeholder=''/>
         </div>
       </div>
       <div class='row'>
         <div class='col-md-12' align='left'>
            <button id='add-liability-btn' class='btn btn-fill btn-primary'>Add Liability</button>
         </div>
       </div>

       <br />
       <div class='row'>
         <div class='col-md-12' style='font-size:90%'>
           <table id='liability-list'  class='table table-hover table-striped' align="left">
              <thead>
                <tr align='left'><td>Category</td><td>Item</td><td>Description</td><td>Owner</td><td>Value</td><td></td></tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4" align='right'>Total Liabilities</td>
                  <td colspan="2" align="left" id="total-liab-counter">0.00</td>
                </tr>
              </tfoot>
           </table>
         </div>
       </div>
     </div>

     <div role="tabpanel" class="tab-pane fade" id="goals-p2">
         <br />
         <div class='row'>
           <div class='col-md-8 col-sm-8' align='left'>
             <p>Enter your client's goals and objectives</p>
             <div class='form-group'>
               <label>Goal/Objective</label>
               <input type='text' class='form-control info-fld' placeholder='Enter your goal here...'/>
             </div>
           </div>
           <div class='col-md-4 col-sm-4' align='left'>
             <p>&nbsp</p>
             <div class='form-group'>
               <label>Type</label>
               <select class='form-control info-fld'>
                 <option>Wealth Creation</option>
                 <option>Wealth Protection/Income</option>
                 <option>Retirement</option>
                 <option>Lifestyle</option>
                 <option>Estate Planning</option>
                 <option>General Insurance</option>
               </select>
             </div>
           </div>
         </div>
         <div class='row'>
           <div class='col-md-4 col-sm-4' align='left'>
             <div class='form-group'>
               <label>Timeframe</label>
               <input type='text' class='form-control info-fld' placeholder='Enter your timeframe here...'/>
             </div>
           </div>
           <div class='col-md-4 col-sm-4' align='left'>
             <div class='form-group'>
               <label>Owner</label>
               <select class='form-control info-fld ff-ownership'>
                 <option>No owner</option>
               </select>
             </div>
           </div>
           <div class='col-md-4 col-sm-4' align='left'>
             <label>&nbsp</label>
             <button id='add-goal-btn' class='btn btn-fill btn-primary btn-block'>
               Add Goal/Objective
             </button>
           </div>
         </div>
         <br />
         <div class='row'>
           <div class='col-md-12'>
             <table id='goals-list'  class='table table-striped' align="left" style='font-size:90%'>
                <tr align='left'>
                  <td>Goals</td><td>Type</td><td>Timeframe</td><td>Owner</td><td></td>
                </tr>
             </table>
           </div>
         </div>

         <br /><br /><br />
     </div>

     <div role="tabpanel" class="tab-pane fade" id="estate-p2">
       <div class="row">
         <div class="col-md-6 col-sm-6" id='client-estate'>
           <div class="row">
             <div class="col-md-12">
               <h3>Client</h3>
             </div>
           </div>
           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a Will?</h5>
             </div>

             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>

           </div>

           <div class="row">

               <div class="form-group col-md-5" align='left'>
                 <h5 class="text-left" style="text-align: left;">Location of Will</h5>
               </div>
               <div class="form-group col-md-6"  align='left'>
                 <textarea class="form-control info-fld" data-fld='willlocation' placeholder="" ></textarea>
               </div>

           </div>

           <div class="row">

               <div class="form-group col-md-5" align='left'>
                   <h5 class="text-left" style="text-align: left;">Date of Will</h5>
                </div>
                <div class="form-group col-md-6" align='left'>
                   <input type="date" class="form-control info-fld" data-fld='willdate' placeholder="" />
                </div>

           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Is the Will current?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Executor of Will?</h5>
               </div>
                <div class="form-group col-md-6" align='left'>
                   <input type="text" class="form-control info-fld" data-fld='willexecutor'  placeholder="" />
                </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a funeral plan in place?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a Family Trust in place?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>

           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Purpose of Trust?</h5>
               </div>
                <div class="form-group col-md-6" align='left'>
                   <textarea class="form-control info-fld"  data-fld='trustpurpose' placeholder=""></textarea>
                </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Beneficiaries of Trust?</h5>
               </div>
               <div class="form-group col-md-6" align='left'>
                   <input type="text" class="form-control info-fld"  data-fld='trustbeneficiaries' placeholder="" />
               </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Trustees of the Family of Trust?</h5>
             </div>
             <div class="form-group col-md-6" align='left'>
                 <input type="text" class="form-control info-fld"  data-fld='familytrust' placeholder="" />
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Are you the trustee of a Family Trust?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Enduring Power of Attorney?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='haspoweratty'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='haspoweratty'>
                   <input type="radio" autocomplete="off" value="No" > No
                 </label>
              </div>
             </div>
           </div>
           <p></p>
           <div class="row">
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-4">
                   Name
                 </div>
                 <div class="col-md-7">
                   <input type="text" data-fld='powerattyname'  class="form-control info-fld" placeholder="" />
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   Relationship
                 </div>
                 <div class="col-md-7">
                   <input type="text"  data-fld='powerattyrel'  class="form-control info-fld" placeholder="" />
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   Type
                 </div>

                 <div class='col-md-7'>
                   <div class="btn-group" data-toggle="buttons" align='center'>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value='Personal Care & Welfare' > Care & Welfare
                     </label>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value='Property'> Property
                     </label>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value="Other" > Other
                     </label>
                  </div>
                 </div>

               </div>
             </div>
           </div>

         </div>

         <div class="col-md-6 col-sm-6" id='partner-estate'>
           <div class="row">
             <div class="col-md-12">
               <h3>Client</h3>
             </div>
           </div>
           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a Will?</h5>
             </div>

             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='will'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>

           </div>

           <div class="row">

               <div class="form-group col-md-5" align='left'>
                 <h5 class="text-left" style="text-align: left;">Location of Will</h5>
               </div>
               <div class="form-group col-md-6"  align='left'>
                 <textarea class="form-control info-fld" data-fld='willlocation' placeholder="" ></textarea>
               </div>

           </div>

           <div class="row">

               <div class="form-group col-md-5" align='left'>
                   <h5 class="text-left" style="text-align: left;">Date of Will</h5>
                </div>
                <div class="form-group col-md-6" align='left'>
                   <input type="date" class="form-control info-fld" data-fld='willdate' placeholder="" />
                </div>

           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Is the Will current?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='willcurrent'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Executor of Will?</h5>
               </div>
                <div class="form-group col-md-6" align='left'>
                   <input type="text" class="form-control info-fld" data-fld='willexecutor'  placeholder="" />
                </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a funeral plan in place?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='funeralplan'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Do you have a Family Trust in place?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='familyhavetrust'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>

           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Purpose of Trust?</h5>
               </div>
                <div class="form-group col-md-6" align='left'>
                   <textarea class="form-control info-fld"  data-fld='trustpurpose' placeholder=""></textarea>
                </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Beneficiaries of Trust?</h5>
               </div>
               <div class="form-group col-md-6" align='left'>
                   <input type="text" class="form-control info-fld"  data-fld='trustbeneficiaries' placeholder="" />
               </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Trustees of the Family of Trust?</h5>
             </div>
             <div class="form-group col-md-6" align='left'>
                 <input type="text" class="form-control info-fld"  data-fld='familytrust' placeholder="" />
             </div>
           </div>

           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Are you the trustee of a Family Trust?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
                 <label class="btn btn-info" data-fld='trustee'>
                   <input type="radio" autocomplete="off" value="N/A"> N/A
                 </label>
              </div>
             </div>
           </div>
           <div class="row">
             <div class="col-md-5">
               <h5 class="text-left">Enduring Power of Attorney?</h5>
             </div>
             <div class='col-md-7'>
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld='haspoweratty'>
                   <input type="radio" autocomplete="off" value="Yes" > Yes
                 </label>
                 <label class="btn btn-info" data-fld='haspoweratty'>
                   <input type="radio" autocomplete="off" value="No" > No
                 </label>
              </div>
             </div>
           </div>
           <p></p>
           <div class="row">
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-4">
                   Name
                 </div>
                 <div class="col-md-7">
                   <input type="text" data-fld='powerattyname'  class="form-control info-fld" placeholder="" />
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   Relationship
                 </div>
                 <div class="col-md-7">
                   <input type="text"  data-fld='powerattyrel'  class="form-control info-fld" placeholder="" />
                 </div>
               </div>
               <div class="row">
                 <div class="col-md-4">
                   Type
                 </div>

                 <div class='col-md-7'>
                   <div class="btn-group" data-toggle="buttons" align='center'>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value='Personal Care & Welfare' > Care & Welfare
                     </label>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value='Property'> Property
                     </label>
                     <label class="btn btn-info" data-fld='powerattytype'>
                       <input type="radio" autocomplete="off" value="Other" > Other
                     </label>
                  </div>
                 </div>

               </div>
             </div>
           </div>

         </div>

       </div>
     </div>

     <div role="tabpanel" class="tab-pane fade" id="health-p2">
       <div class="row">

        <div class="col-md-6 col-sm-6" id='client-health'>
          <div class="row">
            <div class="col-md-12">
              <h3>Client</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Describe current health: </h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Excellent" checked> Excellent
                </label>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Good"> Good
                </label>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Bad"> Bad
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Are you considering receiving medical advice for any current health condition?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q2'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q2'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Is there anything in your medical history that could affect an application for your insurance?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q2y'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q2y'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class='row health-q2y-yes'>
            <div class="col-md-5">
              <h5 class="text-left">If Yes, kindly list them down below:</h5>
            </div>
            <div class='col-md-7'>
              <textarea class='form-control info-fld' data-fld='history-list' rows="7"></textarea>
              <br /><br />
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">When previously seeking insurance, have any personal health, lifestyle or occupation issues affected the insurance premium or policy terms?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q3'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q3'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Do you participate in any hazardous activities?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q3y'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q3y'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class='row health-q3y-yes'>
            <div class="col-md-5">
              <h5 class="text-left">If Yes, hazardous activities you're participating in:</h5>
            </div>
            <div class='col-md-7'>
              <textarea class='form-control info-fld' data-fld='hazard-list' rows="7"></textarea>
            </div>

          </div>

        </div>

        <div class="col-md-6 col-sm-6" id='partner-health'>
          <div class="row">
            <div class="col-md-12">
              <h3>Partner</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Describe current health: </h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Excellent" checked> Excellent
                </label>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Good"> Good
                </label>
                <label class="btn btn-info" data-fld='health-q1'>
                  <input type="radio" autocomplete="off" value="Bad"> Bad
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Are you considering receiving medical advice for any current health condition?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q2'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q2'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Is there anything in your medical history that could affect an application for your insurance?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q2y'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q2y'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class='row health-q2y-yes'>
            <div class="col-md-5">
              <h5 class="text-left">If Yes, kindly list them down below:</h5>
            </div>
            <div class='col-md-7'>
              <textarea class='form-control info-fld' data-fld='history-list' rows="7"></textarea>
              <br /><br />
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">When previously seeking insurance, have any personal health, lifestyle or occupation issues affected the insurance premium or policy terms?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q3'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q3'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-5">
              <h5 class="text-left">Do you participate in any hazardous activities?</h5>
            </div>

            <div class='col-md-7'>
              <div class="btn-group" data-toggle="buttons" align='center'>
                <label class="btn btn-info" data-fld='health-q3y'>
                  <input type="radio" autocomplete="off" value="Yes" checked> Yes
                </label>
                <label class="btn btn-info" data-fld='health-q3y'>
                  <input type="radio" autocomplete="off" value="No"> No
                </label>
             </div>
            </div>

          </div>

          <div class='row health-q3y-yes'>
            <div class="col-md-5">
              <h5 class="text-left">If Yes, hazardous activities you're participating in:</h5>
            </div>
            <div class='col-md-7'>
              <textarea class='form-control info-fld' data-fld='hazard-list' rows="7"></textarea>
            </div>

          </div>

        </div>


       </div>
     </div>


     <div role="tabpanel" class="tab-pane fade" id="notes-p2">
       <br />
       <div class='row'>
         <div class='col-md-12' align='left'>
            <textarea class='form-control info-fld' id='assets-notes' rows="8" placeholder="Enter notes here..."></textarea>
         </div>
       </div>
     </div>
   </div>
</div>


<script>
var updateSimpleNetWorth = function(){

    var totalAssets = $('.simple-assets-form').find('#simple-total-assets').html();
    totalAssets = parseFloat(totalAssets);

    var totalLiabs = $('.simple-liabs-form').find('#simple-total-liabs').html();
    totalLiabs = parseFloat(totalLiabs);

    var netWorth = totalAssets - totalLiabs;
    $('.simple-liabs-form').find('#simple-networth').html(netWorth.toFixed(2));
};

var getLiabilitySum = function(){
    var value = 0;
    $(".liability-item td:nth-child(5)").each(function () {
        value += parseFloat($(this).html());
    });

    $('#total-liab-counter').html(value.toFixed(2));
};

var getAssetSum = function(){
    var value = 0;
    $(".asset-item td:nth-child(5)").each(function () {
        value += parseFloat($(this).html());
    });

    console.log($('#total-assets-counter').html());
    $('#total-assets-counter').html(value.toFixed(2));
    console.log($('#total-assets-counter').html());
};

var getExpenseSum = function(){

  // Get first the incomes
  var income = 0;
  income = parseFloat( $('#total-gross').html() );
  income += parseFloat ($('#total-montly-fld').html() * 12);

  // Get then the expenses
  var expenses = 0;
  $('#expenses-list .expenses-item').each(function(){
      expenses += parseFloat( $(this).find('td:eq(5)').html() );
  }); $('#total-expenses').html(expenses.toFixed(2));


  // Get the surplus
  var surplus = income - expenses;
  $('#total-surplus').html(surplus.toFixed(2));
};


var fetchSecondItem = function(){
    var dataset = {};

    dataset.mode = $('#fact-find-mode-select').val();

    dataset.simple = [];
    $('#simplify-p2 .form-control').each(function(){
        dataset.simple.push( $(this).val() );
    });

    dataset.simpleassets = [];
    $('#simpe-a-l-p2 .form-control').each(function(){
        dataset.simpleassets.push( $(this).val() );
    });

    dataset.income = {};
    dataset.income.pa = { client:[], partner:[] }; var isClient = true;
    $('#income-p2 .pa-income').each(function(){
        var value = parseFloat( $(this).val() );
        if (isNaN(value)){
            value = 0;
        }

        var parent = $(this).parent().parent();
        var text = parent.find('.col-md-6:eq(0)').html();

        if (isClient){
          isClient = false;
          dataset.income.pa.client.push({ v:value, n:text });
        } else {
          isClient = true;
          dataset.income.pa.partner.push({ v:value, n:text });
        }
    });

    dataset.income.monthly = [];
    $('#income-p2 .month-income').each(function(){
        var value = parseFloat( $(this).val() );
        if (isNaN(value)){
            value = 0;
        }

        var parent = $(this).parent().parent();
        var text = parent.find('.col-md-6:eq(0)').html();
        dataset.income.monthly.push({ v:value, n:text });
    });

    dataset.expenses = [];
    $('#expenses-p2 .expenses-item').each(function(){
        var liabl = {};
        liabl.cat = $(this).find('td:eq(0)').html();
        liabl.item = $(this).find('td:eq(1)').html();
        liabl.freq = $(this).find('td:eq(2)').html();
        liabl.owner = $(this).find('td:eq(3)').html();
        liabl.value = $(this).find('td:eq(4)').html();

        dataset.expenses.push( liabl );
    });

    dataset.assets = [];
    $('#assets-p2 .asset-item').each(function(){
        var liabl = {};
        liabl.cat = $(this).find('td:eq(0)').html();
        liabl.item = $(this).find('td:eq(1)').html();
        liabl.description = $(this).find('td:eq(2)').html();
        liabl.owner = $(this).find('td:eq(3)').html();
        liabl.value = $(this).find('td:eq(4)').html();

        dataset.assets.push( liabl );
    });

    dataset.liabilities = [];
    $('#liabilities-p2 .liability-item').each(function(){
        var liabl = {};
        liabl.cat = $(this).find('td:eq(0)').html();
        liabl.item = $(this).find('td:eq(1)').html();
        liabl.description = $(this).find('td:eq(2)').html();
        liabl.owner = $(this).find('td:eq(3)').html();
        liabl.value = $(this).find('td:eq(4)').html();

        dataset.liabilities.push( liabl );
    });

    dataset.goals = [];
    $('#goals-p2 .goal-item').each(function(){
        var goal = {};
        goal.goal = $(this).find('td:eq(0)').html();
        goal.type = $(this).find('td:eq(1)').html();
        goal.timeframe = $(this).find('td:eq(2)').html();
        goal.owner = $(this).find('td:eq(3)').html();

        dataset.goals.push( goal );
    });

    dataset.estate = {};
    dataset.estate.client = {};
    $('#client-estate .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.estate.client[fieldName] = $(this).val();
        }
    });

    $('#client-estate .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.estate.client[fieldName] = $(this).find('input').val();
        }
    });

    dataset.estate.partner = {};
    $('#partner-estate .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.estate.partner[fieldName] = $(this).val();
        }
    });

    $('#partner-estate .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.estate.partner[fieldName] = $(this).find('input').val();
        }
    });



    dataset.health = {};
    dataset.health.client = {};
    $('#client-health .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.health.client[fieldName] = $(this).val();
        }
    });

    $('#client-health .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.health.client[fieldName] = $(this).find('input').val();
        }
    });

    dataset.health.partner = {};
    $('#partner-health .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.health.partner[fieldName] = $(this).val();
        }
    });

    $('#partner-health .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld');
        if (fieldName != "" || fieldName != null){
            dataset.health.partner[fieldName] = $(this).find('input').val();
        }
    });



    //health

    dataset.notes = {};
    dataset.notes.assets = $('#assets-notes').val();
    dataset.notes.goals  = $('#goals-notes').val();

    return dataset;
};

$(document).ready(function(){

    $('.pa-income').change(function(){
        var isClient = true;
        var client = 0; var partner = 0;

        $('.pa-income').each(function(){
            var value = parseFloat( $(this).val() );
            if (isNaN(value)){
                value = 0;
            }

            if (isClient){
              isClient = false; client += value;
            } else {
              isClient = true; partner += value;
            }
        });

        $('#total-gross-client').html( client.toFixed(2) );
        $('#total-gross-partner').html( partner.toFixed(2) );

        var total = client + partner;
        $('#total-gross').html( total.toFixed(2) );

        getExpenseSum();
    });

    $('.month-income').change(function(){

        var monthly = 0;
        $('.month-income').each(function(){
          var value = parseFloat( $(this).val() );
          if (isNaN(value)){
              value = 0;
          }

          monthly += value;
          $('#total-montly-fld').html( monthly.toFixed(2) );

        });
    });

    // TRRAG
    $('#add-goal-btn').click(function(){
        var dataset = [];
        $('#goals-p2 .info-fld').each(function(){ dataset.push($(this).val()); });

        if (dataset[0] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter goal or objective title." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[2] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter goal/objective timeframe." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[3] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter goal/objective owner." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
          var html = "<tr class='goal-item' align='left'><td>"+dataset[0]+"</td><td>"+dataset[1]+"</td><td>"+dataset[2]+"</td>";
          html += "<td>"+dataset[3]+"</td><td>";
          html += '<button type="button" class="close goal-close-me" ><span aria-hidden="true">&times;</span></button>';
          html += "</td></tr>";

          $('#goals-list').append(html);

          $('#goals-p2 .info-fld').each(function(){
              if ($(this).is('input')){
                  $(this).val("");
              } else if ($(this).is('select')){
                  $(this).prop('selectedIndex',0);
              }
          });

          $('.goal-close-me').click(function(ev){
              var parent = $(this).parent().parent();
              parent.remove();
          });
        }
    });

    //
    //  For changing on the liability category
    //
    $('#liability-cat').change(function(ev){
        ev.preventDefault();

        var value = $(this).val();
        if (value == '0'){
          var html = "<option>Select category first...</option>";
        } else {
            var subcats = [];
            if (value == '1'){
                subcats = ["Primary Mortgage", "Investment Mortgage", "Personal Loan", "Student Loan", "Car Loan", "Other"];
            } else if (value == '2'){
                subcats = ["Store Card", "Credit Card", "Hire Purchase", "Overdraft", "Other"];
            }

            var html = "";
            for(var i=0; i<subcats.length; i++){
                html += "<option>"+subcats[i]+"</option>";
            }
        }

        $('#liability-item').html(html);
    });

    //
    //  For changing on the assets category
    //
    $('#asset-cat').change(function(ev){
        ev.preventDefault();

        var value = $(this).val();
        if (value == '0'){
          var html = "<option>Select category first...</option>";
        } else {
            var subcats = [];
            if (value == '1'){
                subcats = ["Primary Residence", "Investment Property"];
            } else if (value == '2'){
                subcats = ["Car", "Motorcycle", "Pickup", "Truck", "Other"];
            } else if (value == '3'){
                subcats = ["Boat", "Art", "Other"];
            } else if (value == '4'){
                subcats = ["Cash","Savings","Term Deposits","Managed Funds","Kiwisaver","Shares /Stocks","Bonds","Commodities (Gold..etc)","Other"];
            }

            var html = "";
            for(var i=0; i<subcats.length; i++){
                html += "<option>"+subcats[i]+"</option>";
            }
        }

        $('#asset-item').html(html);
    });

    //
    //  For changing on the expense category
    //
    $('#expenses-cat').change(function(ev){
        ev.preventDefault();

        var value = $(this).val();
        if (value == '0'){
          var html = "<option>Select category first...</option>";
        } else {

            var subcats = [];
            if (value == '1'){
                subcats = ["Income Tax","Other Tax"];
            } else if (value == '2'){
                subcats = ["Mortgage","Rental Payments","Car Loan","Personal Loans","Student Loans","Hire Purchase","Credit Cards","Overdraft","Other"];
            } else if (value == '3'){
                subcats = ["Maintenance","Gas","Water","Electricity","Telephone","Mobile Phone","TV"];
            } else if (value == '4'){
                subcats = ["Petrol","Repairs","Maintenance"];
            } else if (value == '5'){
                subcats = ["Groceries","Dining Out"];
            } else if (value == '6'){
                subcats = ["Life Insurance","Health","Home and Contents","Vehicles","Other"];
            } else if (value == '7'){
                subcats = ["Doctor","Dentist","Optical","Pharmaceutical"];
            } else if (value == '8'){
                subcats = ["Clothing","Dry Cleaning","Hairdressing","Cosmetics","Hygiene"];
            } else if (value == '9'){
                subcats = ["Memberships","Holidays","Sports","Movies, DVD’s"];
            }

            var html = "";
            for(var i=0; i<subcats.length; i++){
                html += "<option>"+subcats[i]+"</option>";
            }
        }

        if (value == "10"){
            $('#expenses-item-others').show(0);
            $('#expenses-item').hide(0);
        } else {
            $('#expenses-item').show(0);
            $('#expenses-item-others').hide(0);
        }

        $('#expenses-item').html(html);
    });



    //
    //  For adding new liabilities
    //
    $('#add-liability-btn').click(function(ev){
        var dataset = [];
        $('#liabilities-p2 .form-control').each(function(){
            dataset.push( $(this).val() );
        });

        if (dataset[0] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the liability category." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[1] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the liability item." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[4] == "" || isNaN(dataset[4])){
          $.notify({ icon: "pe-7s-info", message: "Please enter the value of the liability." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
            var cat = $('#liability-cat :selected').text();
            var sub = $('#liability-item :selected').text();

            var row = "<tr class='liability-item' align='left'>";
            row += "<td>"+cat+"</td><td>"+sub+"</td><td>"+dataset[2]+"</td><td>"+dataset[3]+"</td>";
            row += "<td>"+parseFloat(dataset[4]).toFixed(2)+"</td><td>";
            row += '<button type="button" class="close liab-close-me" ><span aria-hidden="true">&times;</span></button></td></tr>';

            $('#liability-list tbody').append(row);

            // Add up the items...
            getLiabilitySum();

            $('#liabilities-p2 .form-control').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            // Add the close handler
            $('.liab-close-me').click(function(ev){
                ev.preventDefault();
                $(this).parent().parent().remove();
                getLiabilitySum();
            });
        }

    });

    //
    //  For adding new assets
    //
    $('#add-asset-btn').click(function(ev){
        var dataset = [];
        $('#assets-p2 .form-control').each(function(){
            dataset.push( $(this).val() );
        });

        if (dataset[0] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the asset category." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[1] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the asset item." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[4] == "" || isNaN(dataset[4])){
          $.notify({ icon: "pe-7s-info", message: "Please enter the value of the asset." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
            var cat = $('#asset-cat :selected').text();
            var sub = $('#asset-item :selected').text();

            var row = "<tr class='asset-item' align='left'>";
            row += "<td>"+cat+"</td><td>"+sub+"</td><td>"+dataset[2]+"</td><td>"+dataset[3]+"</td>";
            row += "<td>"+parseFloat(dataset[4]).toFixed(2)+"</td><td>";
            row += '<button type="button" class="close asset-close-me" ><span aria-hidden="true">&times;</span></button></td></tr>';

            $('#assets-list tbody').append(row);

            $('#assets-p2 .form-control').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            // Add up the items...
            getAssetSum();

            // Add the close handler
            $('.asset-close-me').click(function(ev){
                ev.preventDefault();
                $(this).parent().parent().remove();
                getAssetSum();
            });
        }

    });

    //
    //  For adding new expenses
    //
    $('#add-expenses-btn').click(function(ev){
        var dataset = [];
        $('#expenses-p2 .form-control').each(function(){
            dataset.push( $(this).val() );
        });

        if (dataset[0] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the expense category." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[1] == '0'){
          $.notify({ icon: "pe-7s-info", message: "Please enter the expense item." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[0] == '10' && dataset[2] == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter the expense item." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (dataset[5] == "" || isNaN(dataset[5])){
          $.notify({ icon: "pe-7s-info", message: "Please enter the value of the asset." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
            var cat = $('#expenses-cat :selected').text();
            var sub = $('#expenses-item :selected').text();
            if (dataset[0] == "10"){
                sub = dataset[2];
            }

            var row = "<tr class='expenses-item' align='left'>";
            row += "<td>"+cat+"</td><td>"+sub+"</td><td>"+dataset[3]+"</td><td>"+dataset[4]+"</td>";
            row += "<td>"+parseFloat(dataset[5]).toFixed(2)+"</td>";

            var annual = 0;
            if (dataset[3] == "Weekly"){
                annual = parseFloat(dataset[5]) * 52;
            } else if (dataset[3] == "Fortnightly"){
                annual = parseFloat(dataset[5]) * 26;
            } else if (dataset[3] == "Monthly"){
                annual = parseFloat(dataset[5]) * 12;
            } else {  //Annually
                annual = parseFloat(dataset[5]);
            }

            row += "<td>"+annual.toFixed(2)+"</td>";
            row += '<td><button type="button" class="close expenses-close-me" ><span aria-hidden="true">&times;</span></button></td></tr>';

            $('#expenses-list tbody').append(row);

            $('#expenses-p2 .form-control').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            // Add up the items...
            getExpenseSum();

            // Add the close handler
            $('.expenses-close-me').click(function(ev){
                ev.preventDefault();
                $(this).parent().parent().remove();
                getExpenseSum();
            });
        }

    });

    $('#fact-find-mode-select').change(function(){
        var value = $(this).val();
        var simpleFF = $('.p2-main-nav-simple');
        var detailedFFs = $('.p2-main-nav-detailed');

        if (value == "0"){
          detailedFFs.each(function(){
              $(this).hide(0);
          });
          simpleFF.show(0).find('a').click();
        } else {
          simpleFF.hide(0);

          var first = true;
          detailedFFs.each(function(){
              if (first){
                first = false;
                $(this).find('a').click();
              }
              $(this).show(0);
          });
        }
    });

    $('#simplify-p2 .form-control').change(function(){
        var annual_household_after_tax = 0;
        var total_expenses = 0;

        var i = 0;
        $('#simplify-p2 .form-control').each(function(){
            var val = $(this).val();

            //if (i >= 0 && i <= 2){
            if (i == 3){
                //annual_household_after_tax += (val == null || val == "") ? 0 : parseFloat(val);
                annual_household_after_tax = (val == null || val == "") ? 0 : parseFloat(val);
            } else if (i >= 4 && i <= 7){
                total_expenses += ((val == null || val == "") ? 0 : parseFloat(val));
            }

            i++;
        });

        // Putin the values!
        i=0; $('#simplify-p2 .form-control').each(function(){
            if (i == 8){
                $(this).val(total_expenses);
            } else if (i == 9){
                $(this).val(annual_household_after_tax - total_expenses);
            } else if (i == 10){
                var value = (annual_household_after_tax - total_expenses)/12.0;
                $(this).val(value.toFixed(2));
            }

            if (i == 3){
                $(this).val(annual_household_after_tax);
            }

            i++;
        });


    });



    $('.simple-assets-form input').change(function(){
        var total = 0;

        $('.simple-assets-form input').each(function(){
            total += $(this).val() == "" ? 0 : parseFloat($(this).val());
        });

        $('.simple-assets-form').find('#simple-total-assets').html(total.toFixed(2));
        updateSimpleNetWorth();
    });

    $('.simple-liabs-form input').change(function(){
        var total = 0;

        $('.simple-liabs-form input').each(function(){
            total += $(this).val() == "" ? 0 : parseFloat($(this).val());
        });

        $('.simple-liabs-form').find('#simple-total-liabs').html(total.toFixed(2));
        updateSimpleNetWorth();
    });

    $('label[data-fld=health-q3y]').click(function(){
        var value = $(this).find('input').val();
        if (value == "Yes"){
            var p = $(this).parent().parent().parent().parent();
            p.find('.health-q3y-yes').show(0);
        } else {
            var p = $(this).parent().parent().parent().parent();
            p.find('.health-q3y-yes').hide(0);
        }
    });

    $('label[data-fld=health-q2y]').click(function(){
        var value = $(this).find('input').val();
        if (value == "Yes"){
            var p = $(this).parent().parent().parent().parent();
            p.find('.health-q2y-yes').show(0);
        } else {
            var p = $(this).parent().parent().parent().parent();
            p.find('.health-q2y-yes').hide(0);
        }
    });

    $('.health-q3y-yes, .health-q2y-yes').hide(0);
});
</script>
