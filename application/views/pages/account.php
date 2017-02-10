<div class="horizontal-bar sidebar">

</div><!-- Page Sidebar -->

<div class="page-inner">
    <div class="page-title">
        <h3>User Account Information</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active"><a href="#">User Account Information</a></li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
      <div class="row">
             <div class="col-md-12">
                 <div class="card">
                     <div class="content">
                         <h3 align='left'>Update User Account Information</h3>

                         <div style='margin-top:30px'>

                           <!-- Nav tabs -->
                           <ul class="nav nav-tabs" role="tablist">
                             <li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Account Information</a></li>
                             <li role="presentation"><a href="#pass" id='go-to-password-form' aria-controls="profile" role="tab" data-toggle="tab">Account Password</a></li>
                           </ul>

                           <!-- Tab panes -->
                           <div class="tab-content">
                             <div role="tabpanel" class="tab-pane active" id="info">
                                 <br />
                                 <h5 align='left'>Update your personal information here.</h5>
                                 <div>
                                     <div class='row'>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>First Name</label>
                                             <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                    value='<?php echo $userData['info']->first_name; ?>'>
                                         </div>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>Middle Name</label>
                                             <input type="text" class="form-control info-fld" placeholder="Enter middle name"
                                                    value='<?php echo $userData['info']->middle_name; ?>'>
                                         </div>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>Last Name</label>
                                             <input type="text" class="form-control info-fld" placeholder="Enter last name"
                                                    value='<?php echo $userData['info']->last_name; ?>'>
                                         </div>
                                     </div>
                                     <div class='row'>
                                         <div class="form-group col-md-6" align='left'>
                                             <label>Email Address</label>
                                             <input type="email" class="form-control info-fld" placeholder="Enter email address"
                                                     value='<?php echo $userData['info']->email; ?>'>
                                         </div>
                                         <div class="form-group col-md-6" align='left'>
                                             <label>Username</label>
                                             <input type="email" class="form-control info-fld" placeholder="Enter email address"
                                                     value='<?php echo $userData['username']; ?>'>
                                         </div>
                                     </div>


                                     <div class="form-group" align='left'>
                                         <button id='update-info' class='btn btn-primary btn-fill'>
                                             Update Personal Information
                                         </button>
                                         <span id='info-loading' style='display:none'>&nbsp Updating information...</span>
                                     </div>

                                 </div>
                             </div>
                             <div role="tabpanel" class="tab-pane" id="pass">
                                 <br />
                                 <h5 align='left'>Update your password here.</h5>
                                 <div>
                                     <div class='row'>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>Enter Old Password</label>
                                             <input type="password" class="form-control password-flds" placeholder="Enter old password..." />
                                         </div>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>Enter New Password</label>
                                             <input type="password" class="form-control password-flds" placeholder="Enter new password..." />
                                         </div>
                                         <div class="form-group col-md-4" align='left'>
                                             <label>Repeat New Password</label>
                                             <input type="password" class="form-control password-flds" placeholder="Repeat new password..." />
                                         </div>
                                     </div>

                                     <div class="form-group" align='left'>
                                         <button id='update-password' class='btn btn-primary btn-fill'>
                                             Update Password
                                         </button>
                                         <span id='password-loading' style='display:none'>&nbsp Updating password...</span>
                                     </div>
                                 </div>
                             </div>
                           </div>

                         </div>
                     </div>
                 </div>
             </div>
      </div>

    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">2016 &copy; Sumit and Jaz Ventures.</p>
    </div>
</div><!-- Page Inner -->


<script>
$(document).ready(function(){
    $('#go-to-password-form').click(function(){
        $('.password-flds').val("");
    });

    $('#update-info').click(function(){

        var formData = [];
        $('.info-fld').each(function(){ formData.push($(this).val()); });

        $('#info-loading').show(0);
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/App/changeUserInformation",
            method:"POST", dataType: 'json', data: { f: formData },
            success: function(data){
                var type = 'danger';
                if (data.success){
                    type = 'success';
                }

                $('#info-loading').hide(0);
                $.notify({
                   icon: "pe-7s-lock", message: data.message
                },{
                    type: type,
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }, error: function(){
                $('#info-loading').hide(0);
                $.notify({
                   icon: "pe-7s-lock", message: "There seems to be an error changing your information. Please contact your administrator for more details."
                },{
                    type: 'danger',
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }
        });

    });

    $('#update-password').click(function(){
        var formData = [];
        $('.password-flds').each(function(){ formData.push($(this).val()); });

        $('#password-loading').show(0);
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/App/changePassword",
            method:"POST", dataType: 'json', data: { f: formData },
            success: function(data){
                var type = 'danger';
                if (data.success){
                    type = 'success';
                }

                $('#password-loading').hide(0);
                $.notify({
                   icon: "pe-7s-lock", message: data.message
                },{
                    type: type,
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }, error: function(){
                $('#password-loading').hide(0);
                $.notify({
                   icon: "pe-7s-lock", message: "There seems to be an error changing your password. Please contact your administrator for more details."
                },{
                    type: 'danger',
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }
        });
    });
});
</script>
