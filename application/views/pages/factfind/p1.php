<div class='page-ff' style='margin-top:30px' id='page-first'>

   <!-- Nav tabs -->
   <ul class="nav nav-tabs" role="tablist">
     <li role="presentation" class="active"><a href="#client-p1" aria-controls="home" role="tab" data-toggle="tab">
       Client Information
     </a></li>
     <li role="presentation"><a href="#partner-p1"  aria-controls="profile" role="tab" data-toggle="tab">
       Partner Information
     </a></li>
     <li role="presentation"><a href="#dependents-p1"  aria-controls="profile" role="tab" data-toggle="tab">
       Children
     </a></li>
     <li role="presentation"><a href="#advisers-p1"  aria-controls="profile" role="tab" data-toggle="tab">
       Professional Advisers
     </a></li>

     <li role="presentation"><a href="#notes-p1"  aria-controls="profile" role="tab" data-toggle="tab">
       Notes
     </a></li>
   </ul>

   <!-- Tab panes -->
   <div class="tab-content">
     <div role="tabpanel" class="tab-pane fade in active" id="client-p1">
         <br />
         <div class='row'>
            <div class='form-group col-md-3'  align='left'>
                <label>Title:</label>
                <select class='form-control info-fld title-dd-field' data-fld-name='title'>
                  <option value="">Please select...</option>
                  <option>Mr.</option>
                  <option>Ms.</option>
                  <option>Mrs.</option>
                  <option>Miss.</option>
                  <option>Dr.</option>
                </select>
            </div>
            <div class='form-group col-md-9'  align='left'>
                <label>Other Title:</label>
                <input type="text" class="form-control info-fld" data-fld-name='othertitle' placeholder="Enter other title, if there are" />
            </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-4" align='left'>
                 <label>First Name</label>
                 <input type="text" class="form-control info-fld" id='client-first-name' data-fld-name='firstname' placeholder="Enter first name" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Second Name</label>
                 <input type="text" class="form-control info-fld" data-fld-name='secondname' placeholder="Enter second name" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Surname</label>
                 <input type="text" class="form-control info-fld" data-fld-name='surname' placeholder="Enter surname" />
             </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-3" align='left'>
                 <label>Preferred Name</label>
                 <input type="text" class="form-control info-fld" data-fld-name='prefname' placeholder="Enter preferred name" />
             </div>
             <div class="form-group col-md-3" align='left'>
                 <label>Date of Birth</label>
                 <!-- <input type="date" class="form-control info-fld" data-fld-name='dob' placeholder="Enter date of birth" /> -->
                 <input type="text" class='form-control info-fld date-picker person-dob' data-fld-name='dob' placeholder="Enter date of birth" />
             </div>
             <div class="form-group col-md-3" align='left'>
                 <label>Years of Age</label>
                 <input type="number" class='form-control info-fld person-age' min='0' step='1' data-fld-name='age' placeholder="Enter age" value='0' />
             </div>
             <div class="form-group col-md-3" align='left'>
                 <label>Gender</label>
                 <select class='form-control info-fld gender-dd-field' data-fld-name='gender'>
                   <option value="">Please select...</option>
                    <option>Male</option>
                    <option>Female</option>
                 </select>
             </div>
         </div>

         <h4>Contact Information</h4>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Home Phone</label>
                 <input type="phone" class="form-control info-fld" data-fld-name='homephone' placeholder="Enter home phone" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Work Phone</label>
                 <input type="phone" class="form-control info-fld" data-fld-name='workphone' placeholder="Enter work phone" />
             </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Mobile Phone</label>
                 <input type="phone" class="form-control info-fld" data-fld-name='mobilephone' placeholder="Enter mobile phone" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Email address</label>
                 <input type="email" class="form-control info-fld" data-fld-name='email' placeholder="Enter email address" />
             </div>
         </div>

         <h4>Address Information</h4>
         <div class='row address-pane'>
             <div class="form-group col-md-6" align='left'>
                 <label>Street Address</label>
                 <input type="text" class="form-control info-fld" data-fld-name='stradd' placeholder="Enter street address" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Suburb</label>
                 <input type="text" class="form-control info-fld" data-fld-name='suburb' placeholder="Enter suburb" />
             </div>
         </div>
         <div class='row address-pane'>
             <div class="form-group col-md-6" align='left'>
                 <label>City</label>
                 <input type="text" class="form-control info-fld" data-fld-name='city' placeholder="Enter city" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Postcode</label>
                 <input type="number" class="form-control info-fld" data-fld-name='postcode' placeholder="Enter postcode" />
             </div>
         </div>

         <h4>Current Employment</h4>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Occupation</label>
                 <input type="text" class="form-control info-fld"  data-fld-name='occupation' placeholder="Enter occupation" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Job Title</label>
                 <input type="text" class="form-control info-fld" data-fld-name='jobtitle' placeholder="Enter job title" />
             </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Gross Salary</label>
                 <input type="number" class="form-control info-fld" data-fld-name='grosswages' placeholder="Enter gross salary" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Employer</label>
                 <input type="text" class="form-control info-fld" data-fld-name='employername' placeholder="Enter employer" />
             </div>
         </div>
         <div class='row' style="padding:20px" align='center'>
            <label>Employment Status:</label><br />
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld-name='empstatus'>
                   <input type="radio" autocomplete="off" value="ft" checked> Full Time
                 </label>
                 <label class="btn btn-info" data-fld-name='empstatus'>
                   <input type="radio" autocomplete="off" value="pt"> Part Time
                 </label>
                 <label class="btn btn-info" data-fld-name='empstatus'>
                   <input type="radio" autocomplete="off" value="cs"> Casual
                 </label>
                 <label class="btn btn-info" data-fld-name='empstatus'>
                   <input type="radio" autocomplete="off" value="un"> Unemployed
                 </label>
              </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-4" align='left'>
                 <label>Length (in years)</label>
                 <input type="number" class="form-control info-fld" data-fld-name='emplyears' placeholder="Length in years" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Paid leave owing</label>
                 <input type="number" class="form-control info-fld" data-fld-name='paidleave' placeholder="Paid leave owing" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Start Date</label>
                 <input type="text" class="form-control info-fld date-picker" data-fld-name='emplstart' placeholder="Start date..." />
             </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-4" align='left'>
                 <label>Administrative Duties (%)</label>
                 <input type="number" class="form-control info-fld" data-fld-name='adminduties' placeholder="Administrative Duties (%)" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Travel Duties (%)</label>
                 <input type="number" class="form-control info-fld" data-fld-name='travelduties' placeholder="Travel Duties (%)" />
             </div>
             <div class="form-group col-md-4" align='left'>
                 <label>Manual Duties (%)</label>
                 <input type="number" class="form-control info-fld" data-fld-name='manualduties' placeholder="Manual Duties (%)" />
             </div>
         </div>

         <h4>Previous Employment</h4>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Occupation</label>
                 <input type="text" class="form-control info-fld" data-fld-name='prevocc' placeholder="Enter occupation" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Job Title</label>
                 <input type="text" class="form-control info-fld" data-fld-name='prevjob' placeholder="Enter job title" />
             </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Gross Salary</label>
                 <input type="number" class="form-control info-fld" data-fld-name='prevsalary' placeholder="Enter occupation" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Employer</label>
                 <input type="text" class="form-control info-fld" data-fld-name='prevemployer' placeholder="Enter job title" />
             </div>
         </div>
         <div class='row' style="padding:20px" align='center'>
            <label>Previous Employment Status:</label><br />
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld-name='prevempstatus'>
                   <input type="radio" autocomplete="off" value="ft" checked> Full Time
                 </label>
                 <label class="btn btn-info" data-fld-name='prevempstatus'>
                   <input type="radio" autocomplete="off" value="pt"> Part Time
                 </label>
                 <label class="btn btn-info" data-fld-name='prevempstatus'>
                   <input type="radio" autocomplete="off" value="cs"> Casual
                 </label>
                 <label class="btn btn-info" data-fld-name='prevempstatus'>
                   <input type="radio" autocomplete="off" value="un"> Unemployed
                 </label>
              </div>
         </div>
         <div class='row'>
             <div class="form-group col-md-6" align='left'>
                 <label>Length (in years)</label>
                 <input type="number" class="form-control info-fld"  data-fld-name='prevlength' placeholder="Length in years" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Paid leave owing</label>
                 <input type="number" class="form-control info-fld" data-fld-name='prevleave' placeholder="Paid leave owing" />
             </div>
         </div>
         <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Start Date</label>
               <input type="text" class="form-control info-fld date-picker" data-fld-name='prevstart' placeholder="Start date..." />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>End Date</label>
               <input type="text" class="form-control info-fld date-picker" data-fld-name='prevend' placeholder="End date..." />
           </div>
         </div>

         <h4>Residency</h4>

         <h6></h6>
         <div class='row' style="padding:20px" align='center'>
            <label>NZ Residency Status - NZ Citizen or 2 years work visa total with 1 year remaining or more</label><br />
               <div class="btn-group" data-toggle="buttons" align='center'>
                 <label class="btn btn-info" data-fld-name='taxresident'>
                   <input type="radio" autocomplete="off" value="Yes" checked> Yes
                 </label>
                 <label class="btn btn-info" data-fld-name='taxresident'>
                   <input type="radio" autocomplete="off" value="No"> No
                 </label>
              </div>
         </div>

         <div class='row'>

             <div class="form-group col-md-6" align='left'>
                 <label>Describe work or study visa detail</label>
                 <input type="text" class="form-control info-fld"  data-fld-name='nonresicountry' placeholder="" />
             </div>
             <div class="form-group col-md-6" align='left'>
                 <label>Business IRD/Acc Number</label>
                 <input type="text" class="form-control info-fld"  data-fld-name='irdnum' placeholder="Enter Business IRD/Acc Number" />
             </div>
         </div>


         <div class="row">
           <div class='form-group col-md-12' align="center">
             <label>Are you a smoker?</label><br />
             <div class="btn-group" data-toggle="buttons" align='center'>
               <label class="btn btn-info" data-fld-name='smoker'>
                 <input type="radio" autocomplete="off" value="yes"> Yes
               </label>
               <label class="btn btn-info" data-fld-name='smoker'>
                 <input type="radio" autocomplete="off" value="no"> No
               </label>
            </div>
           </div>
         </div>


     </div>

     <div role="tabpanel" class="tab-pane fade" id="partner-p1">
       <br />
       <div class='row'>
          <div class='form-group col-md-3'  align='left'>
              <label>Title:</label>
              <select class='form-control info-fld title-dd-field' data-fld-name='title'>
                <option value="">Please select...</option>
                <option>Mr.</option>
                <option>Ms.</option>
                <option>Mrs.</option>
                <option>Miss.</option>
                <option>Dr.</option>
              </select>
          </div>
          <div class='form-group col-md-9'  align='left'>
              <label>Other Title:</label>
              <input type="text" class="form-control info-fld" data-fld-name='othertitle' placeholder="Enter other title, if there are" />
          </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-4" align='left'>
               <label>First Name</label>
               <input type="text" id='partner-first-name' class="form-control info-fld" data-fld-name='firstname' placeholder="Enter first name" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Second Name</label>
               <input type="text" class="form-control info-fld" data-fld-name='secondname' placeholder="Enter second name" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Surname</label>
               <input type="text" class="form-control info-fld" data-fld-name='surname' placeholder="Enter surname" />
           </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-3" align='left'>
               <label>Preferred Name</label>
               <input type="text" class="form-control info-fld" data-fld-name='prefname' placeholder="Enter preferred name" />
           </div>
           <div class="form-group col-md-3" align='left'>
               <label>Date of Birth</label>
               <!-- <input type="date" class="form-control info-fld" data-fld-name='dob' placeholder="Enter date of birth" /> -->
               <input type="text" class='form-control info-fld date-picker person-dob' data-fld-name='dob' placeholder="Enter date of birth" />
           </div>
           <div class="form-group col-md-3" align='left'>
               <label>Years of Age</label>
               <input type="number" class='form-control info-fld person-age' min='0' step='1' data-fld-name='age' placeholder="Enter age" value='0' />
           </div>
           <div class="form-group col-md-3" align='left'>
               <label>Gender</label>
               <select class='form-control info-fld gender-dd-field' data-fld-name='gender'>
                 <option value="">Please select...</option>
                  <option>Male</option>
                  <option>Female</option>
               </select>
           </div>
       </div>

       <h4>Contact Information</h4>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Home Phone</label>
               <input type="phone" class="form-control info-fld" data-fld-name='homephone' placeholder="Enter home phone" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Work Phone</label>
               <input type="phone" class="form-control info-fld" data-fld-name='workphone' placeholder="Enter work phone" />
           </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Mobile Phone</label>
               <input type="phone" class="form-control info-fld" data-fld-name='mobilephone' placeholder="Enter mobile phone" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Email address</label>
               <input type="email" class="form-control info-fld" data-fld-name='email' placeholder="Enter email address" />
           </div>
       </div>

       <h4>Address Information</h4>
       <div class='row'>
         <div class='col-md-12'>
           <div class="checkbox text-left">
             <label><input type="checkbox" id='set-partner-address-same'> Set address similar to client's?</label>
           </div>
         </div>
       </div>
       <div class='row address-pane'>
           <div class="form-group col-md-6" align='left'>
               <label>Street Address</label>
               <input type="text" class="form-control info-fld" data-fld-name='stradd' placeholder="Enter street address" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Suburb</label>
               <input type="text" class="form-control info-fld" data-fld-name='suburb' placeholder="Enter suburb" />
           </div>
       </div>
       <div class='row address-pane'>
           <div class="form-group col-md-6" align='left'>
               <label>City</label>
               <input type="text" class="form-control info-fld" data-fld-name='city' placeholder="Enter city" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Postcode</label>
               <input type="number" class="form-control info-fld" data-fld-name='postcode' placeholder="Enter postcode" />
           </div>
       </div>

       <h4>Current Employment</h4>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Occupation</label>
               <input type="text" class="form-control info-fld"  data-fld-name='occupation' placeholder="Enter occupation" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Job Title</label>
               <input type="text" class="form-control info-fld" data-fld-name='jobtitle' placeholder="Enter job title" />
           </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Gross Salary</label>
               <input type="number" class="form-control info-fld" data-fld-name='grosswages' placeholder="Enter occupation" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Employer</label>
               <input type="text" class="form-control info-fld" data-fld-name='employername' placeholder="Enter job title" />
           </div>
       </div>
       <div class='row' style="padding:20px" align='center'>
          <label>Employment Status:</label><br />
             <div class="btn-group" data-toggle="buttons" align='center'>
               <label class="btn btn-info" data-fld-name='empstatus'>
                 <input type="radio" autocomplete="off" value="ft" checked> Full Time
               </label>
               <label class="btn btn-info" data-fld-name='empstatus'>
                 <input type="radio" autocomplete="off" value="pt"> Part Time
               </label>
               <label class="btn btn-info" data-fld-name='empstatus'>
                 <input type="radio" autocomplete="off" value="cs"> Casual
               </label>
               <label class="btn btn-info" data-fld-name='empstatus'>
                 <input type="radio" autocomplete="off" value="un"> Unemployed
               </label>
            </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-4" align='left'>
               <label>Length (in years)</label>
               <input type="number" class="form-control info-fld" data-fld-name='emplyears' placeholder="Length in years" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Paid leave owing</label>
               <input type="number" class="form-control info-fld" data-fld-name='paidleave' placeholder="Paid leave owing" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Start Date</label>
               <input type="text" class="form-control info-fld date-picker" data-fld-name='emplstart' placeholder="Start date..." />
           </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-4" align='left'>
               <label>Administrative Duties (%)</label>
               <input type="number" class="form-control info-fld" data-fld-name='adminduties' placeholder="Administrative Duties (%)" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Travel Duties (%)</label>
               <input type="number" class="form-control info-fld" data-fld-name='travelduties' placeholder="Travel Duties (%)" />
           </div>
           <div class="form-group col-md-4" align='left'>
               <label>Manual Duties (%)</label>
               <input type="number" class="form-control info-fld" data-fld-name='manualduties' placeholder="Manual Duties (%)" />
           </div>
       </div>

       <h4>Previous Employment</h4>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Occupation</label>
               <input type="text" class="form-control info-fld" data-fld-name='prevocc' placeholder="Enter occupation" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Job Title</label>
               <input type="text" class="form-control info-fld" data-fld-name='prevjob' placeholder="Enter job title" />
           </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Gross Salary</label>
               <input type="number" class="form-control info-fld" data-fld-name='prevsalary' placeholder="Enter occupation" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Employer</label>
               <input type="text" class="form-control info-fld" data-fld-name='prevemployer' placeholder="Enter job title" />
           </div>
       </div>
       <div class='row' style="padding:20px" align='center'>
          <label>Previous Employment Status:</label><br />
             <div class="btn-group" data-toggle="buttons" align='center'>
               <label class="btn btn-info" data-fld-name='prevempstatus'>
                 <input type="radio" autocomplete="off" value="ft" checked> Full Time
               </label>
               <label class="btn btn-info" data-fld-name='prevempstatus'>
                 <input type="radio" autocomplete="off" value="pt"> Part Time
               </label>
               <label class="btn btn-info" data-fld-name='prevempstatus'>
                 <input type="radio" autocomplete="off" value="cs"> Casual
               </label>
               <label class="btn btn-info" data-fld-name='prevempstatus'>
                 <input type="radio" autocomplete="off" value="un"> Unemployed
               </label>
            </div>
       </div>
       <div class='row'>
           <div class="form-group col-md-6" align='left'>
               <label>Length (in years)</label>
               <input type="number" class="form-control info-fld"  data-fld-name='prevlength' placeholder="Length in years" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Paid leave owing</label>
               <input type="number" class="form-control info-fld" data-fld-name='prevleave' placeholder="Paid leave owing" />
           </div>
       </div>
       <div class='row'>
         <div class="form-group col-md-6" align='left'>
             <label>Start Date</label>
             <input type="text" class="form-control info-fld date-picker" data-fld-name='prevstart' placeholder="Start date..." />
         </div>
         <div class="form-group col-md-6" align='left'>
             <label>End Date</label>
             <input type="text" class="form-control info-fld date-picker" data-fld-name='prevend' placeholder="End date..." />
         </div>
       </div>

       <h4>Residency</h4>

       <h6></h6>
       <div class='row' style="padding:20px" align='center'>
          <label>NZ Residency Status - NZ Citizen or 2 years work visa total with 1 year remaining or more</label><br />
             <div class="btn-group" data-toggle="buttons" align='center'>
               <label class="btn btn-info" data-fld-name='taxresident'>
                 <input type="radio" autocomplete="off" value="Yes" checked> Yes
               </label>
               <label class="btn btn-info" data-fld-name='taxresident'>
                 <input type="radio" autocomplete="off" value="No"> No
               </label>
            </div>
       </div>

       <div class='row'>

           <div class="form-group col-md-6" align='left'>
               <label>Describe work or study visa detail</label>
               <input type="text" class="form-control info-fld"  data-fld-name='nonresicountry' placeholder="" />
           </div>
           <div class="form-group col-md-6" align='left'>
               <label>Business IRD/Acc Number</label>
               <input type="text" class="form-control info-fld"  data-fld-name='irdnum' placeholder="Enter Business IRD/Acc Number" />
           </div>
       </div>

       <div class="row">
         <div class='form-group col-md-12' align="center">
           <label>Are you a smoker?</label><br />
           <div class="btn-group" data-toggle="buttons" align='center'>
             <label class="btn btn-info" data-fld-name='smoker'>
               <input type="radio" autocomplete="off" value="yes"> Yes
             </label>
             <label class="btn btn-info" data-fld-name='smoker'>
               <input type="radio" autocomplete="off" value="no"> No
             </label>
          </div>
         </div>
       </div>

     </div>

     <div role="tabpanel" class="tab-pane fade" id="dependents-p1">
       <br />
       <table class='table table-hover table-striped' id='dependents-list' align='left' style="font-size:90%">
         <tr>
           <th>Name</th><th>Date of Birth</th><th>Age</th><th>Gender</th><th>Relationship</th><th>Dependant of</th><th></th>
         </tr>
       </table>
       <br />

       <div class='row'>
          <div class='col-md-12'>
            <p>Add up a children/dependant if any:</p>
          </div>
       </div>

       <div class='row'>
         <div class='form-group col-md-8'  align='left'>
           <label>Child Name *:</label>
           <input type='text' class="form-control info-fld" placeholder="Enter child name" />
         </div>
         <div class='form-group col-md-4'  align='left'>
           <label>Child's Date of Birth *:</label>
           <input type='text' class="form-control date-picker info-fld child-dob" placeholder="Enter child DOB" />
         </div>
       </div>
       <div class='row'>
         <div class='form-group col-md-3'  align='left'>
           <label>Relationship</label>
           <select class='form-control info-fld'>
             <option>Son</option>
             <option>Daughter</option>
             <option>Other</option>
           </select>
         </div>
         <div class='form-group col-md-3'  align='left'>
           <label>Gender:</label>
           <select class='form-control info-fld'>
             <option>Male</option>
             <option>Female</option>
           </select>
         </div>
         <div class='form-group col-md-3'  align='left'>
           <label>Dependant of:</label>
           <select class='form-control info-fld ff-child-dependant-select'>
             <option>No dependant</option>
           </select>
         </div>
         <div class='form-group col-md-3'  align='left'>
           <label>Years of Age</label>
           <input type='number' class='form-control info-fld person-age' min='0' step='1' value='' />
         </div>
       </div>
       <div class='row'>
         <div class='col-md-12' align='left'>
           <button class='btn btn-fill btn-primary' id='add-child'>
             <i class='glyphicon glyphicon-plus'></i> Add Child
           </button>
         </div>
       </div>
     </div>

     <div role="tabpanel" class="tab-pane fade" id="advisers-p1">
       <h4 align="left">Accountant</h4>

       <div class="row">
         <div class='form-group col-md-12'  align='left'>
           <label>Accountant Name: </label>
           <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='name' placeholder="Enter name..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-12'  align='left'>
           <label>Company Name: </label>
           <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='company' placeholder="Enter company name..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-4'  align='left'>
           <label>Street Address: </label>
           <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='street' placeholder="Enter street address..." />
         </div>
         <div class='form-group col-md-4'  align='left'>
           <label>Suburb: </label>
           <input type='text' class="form-control info-fld" data-parent='acctant' data-fld='suburb' placeholder="Enter suburb..." />
         </div>
         <div class='form-group col-md-4'  align='left'>
           <label>City: </label>
           <input type='text' class="form-control info-fld"  data-parent='acctant' data-fld='city' placeholder="Enter city..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-6'  align='left'>
           <label>Work Phone: </label>
           <input type='text' class="form-control info-fld"  data-parent='acctant' data-fld='workphone' placeholder="Enter work phone..." />
         </div>
         <div class='form-group col-md-6'  align='left'>
           <label>Email: </label>
           <input type='email' class="form-control info-fld"  data-parent='acctant' data-fld='email' placeholder="Enter work phone..." />
         </div>
       </div>

       <h4 align="left">Solicitor</h4>

       <div class="row">
         <div class='form-group col-md-12'  align='left'>
           <label>Solicitor's Name: </label>
           <input type='text' class="form-control info-fld"  data-parent='solicitor' data-fld='name' placeholder="Enter name..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-12'  align='left'>
           <label>Company Name: </label>
           <input type='text' class="form-control info-fld"   data-parent='solicitor' data-fld='company' placeholder="Enter company name..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-4'  align='left'>
           <label>Street Address: </label>
           <input type='text' class="form-control info-fld"   data-parent='solicitor' data-fld='street' placeholder="Enter street address..." />
         </div>
         <div class='form-group col-md-4'  align='left'>
           <label>Suburb: </label>
           <input type='text' class="form-control info-fld"  data-parent='solicitor' data-fld='suburb' placeholder="Enter suburb..." />
         </div>
         <div class='form-group col-md-4'  align='left'>
           <label>City: </label>
           <input type='text' class="form-control info-fld"  data-parent='solicitor' data-fld='city'  placeholder="Enter city..." />
         </div>
       </div>
       <div class="row">
         <div class='form-group col-md-6'  align='left'>
           <label>Work Phone: </label>
           <input type='text' class="form-control info-fld"  data-parent='solicitor' data-fld='workphone' placeholder="Enter work phone..." />
         </div>
         <div class='form-group col-md-6'  align='left'>
           <label>Email: </label>
           <input type='email' class="form-control info-fld"  data-parent='solicitor' data-fld='email' placeholder="Enter work phone..." />
         </div>
       </div>

     </div>

     <div role="tabpanel" class="tab-pane fade" id="notes-p1">
       <br />
        <div class="row">
            <div class="col-md-12" align='left'>
              <label>Notes</label>
              <textarea class="form-control info-fld" id='p1-notes' rows="10" placeholder="Enter notes..."></textarea>
            </div>
        </div>
        <br />
     </div>
   </div>

</div>

<script>
var fetchFirstItem = function(){

    var items = {};

    items.clientInfo = {};      // Fetch the client info
    $('#client-p1 .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld-name');
        if (fieldName != "" || fieldName != null){
            items.clientInfo[fieldName] = $(this).val();
        }
    });

    $('#client-p1 .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld-name');
        if (fieldName != "" || fieldName != null){
            items.clientInfo[fieldName] = $(this).find('input').val();
        }
    });

    items.partnerInfo = {};   // Fetch the partner info
    $('#partner-p1 .info-fld').each(function(){
        var fieldName = $(this).attr('data-fld-name');
        if (fieldName != "" || fieldName != null){
            items.partnerInfo[fieldName] = $(this).val();
        }
    });

    $('#partner-p1 .btn-group .btn.active').each(function(){
        var fieldName = $(this).attr('data-fld-name');
        if (fieldName != "" || fieldName != null){
            items.partnerInfo[fieldName] = $(this).find('input').val();
        }
    });

    items.children = []; // Fetch the children
    $('#dependents-p1 .dependent-item').each(function(){
        var child = {};
        child.name = $(this).find('td:eq(0)').html();
        child.dob = $(this).find('td:eq(1)').html();
        child.age = $(this).find('td:eq(2)').html();
        child.gender = $(this).find('td:eq(3)').html();
        child.relation = $(this).find('td:eq(4)').html();
        child.dependant = $(this).find('td:eq(5)').html();

        items.children.push(child);
    });

    items.solicitor = {}; items.accountant = {};
    $('#advisers-p1 .info-fld').each(function(){
        var main = $(this).attr('data-parent');
        var subb = $(this).attr('data-fld');

        if (main == "solicitor"){
            items.solicitor[subb] = $(this).val();
        } else {
            items.accountant[subb] = $(this).val();
        }
    });

    items.notes = $('#p1-notes').val();
    return items;
};

var updateOwnership = function(){
    var client = $('#client-first-name').val();
    var partner = $('#partner-first-name').val();

    var options = "";

    if (client == "" && partner == ""){
        options = "<option>No owner</option>";
        $('.ff-ownership').html(options);

        options = "<option>No dependant</option>";
        $('.ff-child-dependant-select').html(options);

    } else {
        if (client != "" && partner == ""){
            options = "<option>"+client+"</option>";
        } else if (client == "" && partner != ""){
            options = "<option>"+partner+"</option>";
        } else {
            options += "<option>"+client+"</option>";
            options += "<option>"+partner+"</option>";
            options += "<option>"+client+" and "+partner+"</option>";
        }

        $('.ff-ownership').html(options);
        $('.ff-child-dependant-select').html(options);
    }
};

$(document).ready(function(){

    $('#client-first-name').change(function(){
        updateOwnership();
    });

    $('#partner-first-name').change(function(){
        updateOwnership();
    });


      $('#add-child').click(function(){
          var dataset = [];
          $('#dependents-p1 .info-fld').each(function(){ dataset.push($(this).val()); });

          if (dataset[0] == ""){
            $.notify({ icon: "pe-7s-info", message: "Please enter child's name." },{
                type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
            });
          } /* else if (dataset[1] == ""){
            $.notify({ icon: "pe-7s-info", message: "Please enter child's date of birth." },{
                type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
            });
          } */ else if (dataset[2] == ""){
            $.notify({ icon: "pe-7s-info", message: "Please enter child's relation." },{
                type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
            });
          } else {

            var html = "<tr class='dependent-item' align='left'><td>"+dataset[0]+"</td><td>"+dataset[1]+"</td><td>"+dataset[5]+"</td>";
            html += "<td>"+dataset[3]+"</td><td>"+dataset[2]+"</td><td>"+dataset[4]+"</td><td>";
            html += '<button type="button" class="close close-me" ><span aria-hidden="true">&times;</span></button>';
            html += "</td></tr>";

            $('#dependents-p1 .info-fld').each(function(){
                if ($(this).is('input')){
                    $(this).val("");
                } else if ($(this).is('select')){
                    $(this).prop('selectedIndex',0);
                }
            });

            $('#dependents-list').append(html);
            refreshChildSelection();

            $('.close-me').click(function(ev){
                var parent = $(this).parent().parent();
                parent.remove();
                refreshChildSelection();
            });
          }
      });

      $('#set-partner-address-same').change(function(){
          if ($(this).is(":checked")){
            var data = [];
            $('#client-p1 .address-pane').find('.form-control').each(function(){
                data.push( $(this).val() );
            });

            var i = 0; $('#partner-p1 .address-pane').find('.form-control').each(function(){
                $(this).val(data[i]); i++;
            });
          }
      });
      //$('#client-p1 .address-pane').find('.form-control').each(function(){

      //});

      $('.person-dob, .child-dob').change(function(){
          var value = $(this).val();

          var pattern = /([0-9]{2}[\/\-]{1}[0-9]{1,2}[\/\-]{1}[0-9]{2,4})/;
          if (pattern.test(value)){
              var values = value.split("/");
              if (values.length == 3){
                  var today = new Date(), bdate = new Date();
                  bdate.setSeconds(0); bdate.setMinutes(0); bdate.setHours(0);
                  bdate.setFullYear(parseInt(values[2])); bdate.setMonth(parseInt(values[1]) - 1); bdate.setDate(parseInt(values[0]));

                  var subtract = today.getTime() - bdate.getTime();
                  var years = Math.floor(subtract / (1000 * 60 * 60 * 24 * 365) );

                  var total_year = parseInt(today.getFullYear()) - parseInt(bdate.getFullYear());

                  if (today.getMonth() < bdate.getMonth()){
                      total_year--;
                  } else {
                      if (today.getDate() < bdate.getDate()){ total_year--; }
                  }

                  years = total_year;

                  if ($(this).hasClass('person-dob')){
                      $(this).parent().parent().find('.person-age').val(years);
                  } else if ($(this).hasClass('child-dob')){
                      $(this).parent().parent().parent().find('.person-age').val(years);
                  }


              }
          }
      });

      $('.title-dd-field').change(function(){
          var value = $(this).val();
          var parent = $(this).parent().parent().parent();

          if (value == "Mr."){ // set dd to male
              parent.find(".gender-dd-field").val("Male");
          } else if (value == "Mrs." || value == "Miss." || value == "Ms."){ // set dd to female
              parent.find(".gender-dd-field").val("Female");
          } else {
              parent.find(".gender-dd-field").val("");
          }
      });
});
</script>
