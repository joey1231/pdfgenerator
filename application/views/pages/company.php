<div class="horizontal-bar sidebar">

</div><!-- Page Sidebar -->

<div class="page-inner">
    <div class="page-title">
        <h3>Company Information and Management</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Dashboard</a></li>
                <li class="active">Company Information and Management</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
      <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="content">
                          <h3 align='left'>Update Company Information</h3>

                          <div style='margin-top:30px'>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <li role="presentation" class="active"><a href="#info" aria-controls="home" role="tab" data-toggle="tab">Company Information</a></li>
                              <li role="presentation"><a href="#pass" id='go-to-password-form' aria-controls="profile" role="tab" data-toggle="tab">Employees</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="info">

                                  <div class='row'>
                                      <div class='col-md-8 border-left'>
                                          <h4 align='left'>Update your company's information here.</h4>
                                          <div class='row'>
                                              <div class="form-group col-md-12" align='left'>
                                                  <label>Company Name</label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_name; ?>'>
                                              </div>
                                          </div>
                                          <div class='row'>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>Street Address: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_str; ?>'>
                                              </div>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>City: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_city; ?>'>
                                              </div>
                                          </div>
                                          <div class='row'>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>State: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_state; ?>'>
                                              </div>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>Country: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_ctry; ?>'>
                                              </div>
                                          </div>
                                          <div class='row'>
                                              <div class="form-group col-md-12" align='left'>
                                                  <label>Website: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_website; ?>'>
                                              </div>
                                          </div>
                                          <div class='row'>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>Email Address: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_email; ?>'>
                                              </div>
                                              <div class="form-group col-md-6" align='left'>
                                                  <label>Contact Number: </label>
                                                  <input type="text" class="form-control info-fld" placeholder="Enter first name"
                                                         value='<?php echo $userData['company']->firm_address_contact; ?>'>
                                              </div>
                                          </div>

                                          <div class="form-group" align='left'>
                                              <button id='update-company' class='btn btn-primary btn-fill'>
                                                  Update Company Information
                                              </button>
                                              <span id='company-loading' style='display:none'>&nbsp Updating password...</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div role="tabpanel" class="tab-pane" id="pass">
                                  <div class='row employee-list' align='left' style='margin-top:20px'>
                                      <button class='btn btn-primary btn-fill' id='open-create-user'>
                                          Create User Account
                                      </button>
                                  </div>
                                  <div class='row employee-list' style="margin-top:20px">
                                      <div class="content table-responsive table-full-width">
                                          <table class="table table-hover table-striped">
                                              <thead>
                                                  <th style='width:25%'>Full Name</th>
                                                  <th style='width:25%'>Email Address</th>
                                                  <th style='width:25%'>Username</th>
                                                  <th style='width:25%'>Admin Action</th>
                                              </thead>
                                              <tbody align='left'>
                                                  <?php foreach ($empList as $e): ?>
                                                      <tr class='empl-item' data-id='<?php echo $e['userid']; ?>'>
                                                          <td><?php echo $e['name']; ?></td>
                                                          <td><?php echo $e['email']; ?></td>
                                                          <td><?php echo $e['username']; ?></td>
                                                          <td>
                                                          <?php if ($e['admin'] == 1): ?>
                                                            <button class="btn btn-warning revoke-admin" data-id="<?php echo $e['userid']; ?>">Revoke Admin</button>
                                                          <?php else: ?>
                                                            <button class="btn btn-info admin-access" data-id="<?php echo $e['userid']; ?>">Set Admin</button>
                                                          <?php endif; ?>
                                                              <button class="btn btn-danger revoke-access" data-id="<?php echo $e['userid']; ?>">Revoke Access</button>
                                                          </td>
                                                      </tr>
                                                  <?php endforeach; ?>
                                              </tbody>
                                          </table>

                                      </div>
                                  </div>

                                  <div class="row create-user-form" style="display:none">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <h2>Adding new employee account</h2>
                                      </div>
                                    </div>
                                    <div class='row'>
                                        <div class="form-group col-md-4" align='left'>
                                                <label>First Name</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter first name"
                                                       value=''>
                                            </div>
                                            <div class="form-group col-md-4" align='left'>
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter middle name"
                                                       value=''>
                                            </div>
                                            <div class="form-group col-md-4" align='left'>
                                                <label>Last Name</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter last name"
                                                       value=''>
                                            </div>
                                    </div>
                                    <div class='row'>
                                            <div class="form-group col-md-4" align='left'>
                                                <label>Mailing Address</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter mailing address"
                                                        value=''>
                                            </div>
                                            <div class="form-group col-md-4" align='left'>
                                                <label>Email Address</label>
                                                <input type="email" class="form-control register-fld" placeholder="Enter email address"
                                                        value=''>
                                            </div>
                                            <div class="form-group col-md-4" align='left'>
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter Phone Number"
                                                        value=''>
                                            </div>
                                    </div>
                                    <div class='row'>
                                            <div class="form-group col-md-6" align='left'>
                                                <label>FSPR Number</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter FSPR Number"
                                                        value=''>
                                            </div>
                                            <div class="form-group col-md-6" align='left'>
                                                <label>Trading Name</label>
                                                <input type="text" class="form-control register-fld" placeholder="Enter Trading Name"
                                                        value=''>
                                            </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                      <div class='col-md-6 col-sm-6'>
                                        <div class="form-group">
                                          <label>Enter Username:</label>
                                          <input type="text" class="form-control register-fld" placeholder="Enter Username" value=''>
                                        </div>
                                        <div class="form-group">
                                          <label>Enter Password:</label>
                                          <input type="password" class="form-control register-fld" placeholder="Enter password" value=''>
                                        </div>
                                        <div class="form-group">
                                          <label>Repeat Password:</label>
                                          <input type="password" class="form-control register-fld" placeholder="Repeat password" value=''>
                                        </div>
                                      </div>
                                      <div class='col-md-6 col-sm-6'>
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="alert" id="reg-alert" role="alert" style="display:none">

                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <button class="btn btn-primary btn-block" id="create-employee-btn">Create New Account</button>
                                            </div>
                                            <div class="col-md-6">
                                              <button class="btn btn-default btn-block" id="back-to-employees">Back to Employees List</button>
                                            </div>
                                          </div>
                                      </div>
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


<style>
.border-left{
    border-right: 0px solid #555;
}
#pass {
    padding:20px;
} label { font-weight:300; }
</style>
<script>


$(document).ready(function(){

    $('#open-create-user').click(function(ev){
        ev.preventDefault();
        $('.employee-list').hide(250, function(){
            $('.create-user-form').show(250);
        });

        // $('#create-user-dialog').modal('show');
    });

    $('#update-company').click(function(){

        var formData = [];
        $('.info-fld').each(function(){ formData.push($(this).val()); });

        $('#company-loading').show(0);
        $.ajax({
            url: "<?php echo base_url(); ?>index.php/App/changeCompanyInformation",
            method:"POST", dataType: 'json', data: { f: formData },
            success: function(data){
                var type = 'danger';
                if (data.success){
                    type = 'success';
                }

                $('#company-loading').hide(0);
                $.notify({
                   icon: "pe-7s-lock", message: data.message
                },{
                    type: type,
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }, error: function(){
                $('#company-loading').hide(0);
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

    $('#create-employee-btn').click(function(){
        var regForm = [];
        var alert = $("#reg-alert");
        $('.register-fld').each(function(){ regForm.push($(this).val()); });
        alert.hide(0); alert.removeClass('alert-success').removeClass('alert-danger');

        $.ajax({
            url:"index.php/Data/register", method:"POST", data: {
                reg: regForm
            }, success: function(data){
                var json = $.parseJSON(data);
                if (json.success) {
                    alert.addClass('alert-success');
                } else {
                    alert.addClass('alert-danger');
                }

                alert.html(json.message);
                alert.show(0);
                // console.log(data);
            }
        });

        console.log(regForm);
    });

    $('#back-to-employees').click(function(){
      $('.create-user-form').hide(250, function(){
          $('.employee-list').show(250);
      });
    });

    $('.revoke-access').click(function(){
        var userid = $(this).attr('data-id');
        $.ajax({
            url: "index.php/Data/revokeUser", data: { id: userid }, method: "POST",
            success: function(data) {
                $('#cd-nav').find(".main-menu-item[data-page='company']").click();
            }
        })
    });

    $('.admin-access').click(function(){
      var userid = $(this).attr('data-id');
      $.ajax({
          url: "index.php/Data/setAsAdmin", data: { id: userid }, method: "POST",
          success: function(data) {
              $('#cd-nav').find(".main-menu-item[data-page='company']").click();
          }
      })
    });

    $('.revoke-admin').click(function(){
      var userid = $(this).attr('data-id');
      $.ajax({
          url: "index.php/Data/unsetAsAdmin", data: { id: userid }, method: "POST",
          success: function(data) {
              $('#cd-nav').find(".main-menu-item[data-page='company']").click();
          }
      })
    });
});
</script>
