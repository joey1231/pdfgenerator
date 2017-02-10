<div class="horizontal-bar sidebar">

</div><!-- Page Sidebar -->

<div class="page-inner">
    <div class="page-title">
        <h3>Welcome to the Document Generator, <?php echo $userData['info']->first_name; ?></h3>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                              <p class="counter"><?php echo $_counter['all']; ?></p>
                            <span class="info-box-title">Generated Documents</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter"><?php echo $_counter['ff']; ?></p>
                            <span class="info-box-title">Insurance Planner Documents</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                              <p class="counter"><?php echo $_counter['soa']; ?></p>
                            <span class="info-box-title">Insurance Plan Documents</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                              <p class="counter"><?php echo $_counter['other']; ?></p>
                            <span class="info-box-title">Other documents</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="fa fa-file-pdf-o"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
        <div class='row'>
            <div class='col-md-3 col-lg-3'>
              <h3>Some Administrative Actions</h3>
              <div class="btn-group-vertical m-t-xs btn-block" role="group" aria-label="Vertical button group">
                  <button type="button" class="btn btn-default" align='left' id='clean-extra-files'>Clean up extra files.</button>
                  <button type="button" class="btn btn-default" align='left' id='download-db'>Download SQL backup</button>
              </div>
              <br /><br /><br />
            </div>
        </div>
        <!--
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="panel panel-white" style='padding:20px'>
                  <h4>Recent Documents</h4>
                  <div class="inbox-widget slimscroll">
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar2.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Sandra Smith</p>
                              <p class="inbox-item-text">Hey! I'm working on your...</p>
                              <p class="inbox-item-date">13:40 PM</p>
                          </div>
                      </a>
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar3.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Christopher</p>
                              <p class="inbox-item-text">I've finished it! See you so...</p>
                              <p class="inbox-item-date">13:34 PM</p>
                          </div>
                      </a>
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar4.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Amily Lee</p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                              <p class="inbox-item-date">13:17 PM</p>
                          </div>
                      </a>
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar5.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Nick Doe</p>
                              <p class="inbox-item-text">Nice to meet you</p>
                              <p class="inbox-item-date">12:20 PM</p>
                          </div>
                      </a>
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar2.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Sandra Smith</p>
                              <p class="inbox-item-text">Hey! I'm working on your...</p>
                              <p class="inbox-item-date">10:15 AM</p>
                          </div>
                      </a>
                      <a href="#">
                          <div class="inbox-item">
                              <div class="inbox-item-img"><img src="assets/images/avatar4.png" class="img-circle" alt=""></div>
                              <p class="inbox-item-author">Amily Lee</p>
                              <p class="inbox-item-text">This theme is awesome!</p>
                              <p class="inbox-item-date">9:56 AM</p>
                          </div>
                      </a>
                  </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-white" style="height: 100%;">
                    <div class="panel-heading">
                        <h4 class="panel-title">Server Load</h4>
                        <div class="panel-control">
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Expand/Collapse" class="panel-collapse"><i class="icon-arrow-down"></i></a>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Reload" class="panel-reload"><i class="icon-reload"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="server-load">
                            <div class="server-stat">
                                <span>Total Usage</span>
                                <p>67GB</p>
                            </div>
                            <div class="server-stat">
                                <span>Total Space</span>
                                <p>320GB</p>
                            </div>
                            <div class="server-stat">
                                <span>CPU</span>
                                <p>57%</p>
                            </div>
                        </div>
                        <div id="flotchart2"></div>
                    </div>
                </div>
            </div>

        </div> -->
    </div><!-- Main Wrapper -->

    <div class="page-footer">
        <p class="no-s">2016 &copy; Sumit and Jaz Ventures.</p>
    </div>
</div><!-- Page Inner -->
<script>
$(document).ready(function(){

    $('#clean-extra-files').click(function(){
        if ($(this).attr('disabled') == 'disabled'){
            // DO NOTING
        } else {
            var btn = $(this);
            btn.html("Executing cleanup...").attr('disabled', 'disabled');

            $.ajax({
                url: "<?php echo base_url(); ?>index.php/Actions/cleanfiles",
                success: function(){
                    btn.html("Clean up extra files.").removeAttr('disabled');
                }, error: function(){
                    btn.html("Clean up extra files.").removeAttr('disabled');
                }
            });
        }
    });
});
</script>


 <!-- <div class="row">
        <div class="col-md-12">
            <h3 align='left'>Welcome to the Doc Generator,  <?php echo $userData['info']->first_name; ?>!</h3>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Quick Links</h4>
                        </div>
                        <div class="content">

                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">User Information</h4>
                            <p class="category">and company information</p>
                        </div>
                        <div class="content">
                            <div class="table-full-width" style='padding:20px;'>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style='width:30%' align='left'>
                                                <span class='text-info'>Account Full Name: </span>
                                            </td>
                                            <td style='width:70%' align='left'>
                                                <?php //echo $userData['info']->last_name; ?>,
                                                <?php //echo $userData['info']->first_name; ?>
                                                <?php //echo $userData['info']->middle_name; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:30%' align='left'>
                                                <span class='text-info'>Email Address: </bspan
                                            </td>
                                            <td style='width:70%' align='left'>
                                                <?php //echo $userData['info']->email; ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style='width:30%' align='left'>
                                                <span class='text-info'>Account User Name: </bspan
                                            </td>
                                            <td style='width:70%' align='left'>
                                                <?php //echo $userData['username']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='width:30%' align='left'>
                                                <span class='text-info'>Company Details: </bspan
                                            </td>
                                            <td style='width:70%' align='left'>
                                                <?php //echo $userData['company']->firm_name; ?><br />
                                                <?php// echo $userData['company']->firm_address_str; ?>,
                                                <?php //echo $userData['company']->firm_address_city; ?><br />
                                                <?php //echo $userData['company']->firm_address_state; ?>,
                                                <?php //echo $userData['company']->firm_address_ctry; ?><br />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

                    <div style='margin-top:30px' class='row'>
                        <div class='col-md-8'>

                        </div>

            </div>
        </div>
 </div> -->
