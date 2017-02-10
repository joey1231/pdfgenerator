<style>
.btn-group .btn.active {
    background-color:#337ab7;
}
</style>
<main class="page-content content-wrap container">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="#" class="logo-text"><span>DocGen</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-bars"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <?php
                          $name = $userData['info']->first_name;;
                          $name .= " ".strtoupper($userData['info']->last_name);

                      ?>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown" id="profile-menu-link">
                                <span class="user-name"><?php echo $name; ?> | <?php echo $userData['company']->firm_name; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" id='log-out-btn' class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                            </a>
                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->
    <div id='app-page-container'>

    </div>
</main><!-- Page Content -->

<nav class="cd-nav-container" id="cd-nav">
    <header>
        <h3>Main Menu</h3>
        <a href="#0" class="cd-close-nav">Close</a>
    </header>
    <ul class="cd-nav list-unstyled">
        <li class="cd-selected main-menu-item" data-menu="index" id='dashboard-btn' data-page='dashboard'>
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-home"></i>
                </span>
                <p>Dashboard</p>
            </a>
        </li>
        <li data-menu="profile" class='main-menu-item' data-page='account'>
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-user"></i>
                </span>
                <p>Profile</p>
            </a>
        </li>
        <?php if ($userData['company'] != null):  ?>
        <li data-menu="inbox" class='main-menu-item' data-page='find'  >
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-book"></i>
                </span>
                <p>Documents</p>
            </a>
        </li>
        <?php if ($userData['admin']):  ?>
        <li data-menu="#" class='main-menu-item' data-page='company'>
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-ok-sign"></i>
                </span>
                <p>Company</p>
            </a>
        </li>
        <li data-menu="#" class='main-menu-item'  data-page='template' >
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-th-list"></i>
                </span>
                <p>Templates</p>
            </a>
        </li>
      <?php endif; ?>
      <?php endif; ?>
        <!-- <li data-menu="calendar">
            <a href="javsacript:void(0);">
                <span>
                    <i class="glyphicon glyphicon-calendar"></i>
                </span>
                <p>Calendar</p>
            </a>
        </li> -->
    </ul>
</nav>

<div class="modal fade" tabindex="-1" role="dialog" id="save-ff-dialog" data-document-target=''>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Save Document</h4>
      </div>
      <div class="modal-body">
        <div class='row'>
            <div class='col-md-12'>
              <label>Enter title for this transaction:</label>
              <input type='text' class='form-control' />
            </div>
            <div class='col-md-12'>
              <label>Enter description for the transaction:</label>
              <textarea class='form-control'></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="save-ff-btn-now">Save Document</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="preview-dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Preview Document</h4>
      </div>
      <div class="modal-body">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="finalize-dialog" data-backdrop='static'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Finalizing SOA/FF Package</h4>
      </div>
      <div class="modal-body">
          <div class='transacting-pane'>
              <h3 align='center'>Packaging documents... Please wait...</h3>
          </div>
          <div class="done-pane" style='display:none'>
              <h3>Document has been packaged! Here are the details of the transaction</h3>
              <ul class="list-unstyled weather-info">
                  <li>Transaction # <span class="pull-right"><b class='fd-trans'>XXXXXX</b></span></li>
                  <li>Identifier/Title: <span class="pull-right"><b class='fd-title'>XXXXXXX</b></span></li>
                  <li>Date Generated: <span class="pull-right"><b class='fd-date'>XXXXXXX</b></span></li>
              </ul>
              <p>Please click the button below to download your package file.</p>
              <button class='btn btn-info btn-block download-btn-x'>
                  Download packaged documents.
              </button>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-btn-x" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="ff-package-dialog" data-backdrop='static'>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close close-btn-x" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Creating Insurance Planner Package</h4>
      </div>
      <div class="modal-body">
          <div class='transacting-pane'>
              <h3 align='center'>Packaging documents... Please wait...</h3>
          </div>
          <div class="done-pane" style='display:none'>
              <p>Package done! Click the button below to </p>
              <button class='btn btn-info btn-block download-btn-ff-pack' data-link="">
                  Download packaged documents.
              </button>
              <button class='btn btn-primary btn-block open-mail-service'>
                  Open Email Client (Outlook, etc.)
              </button>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-btn-x" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/switchery/switchery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/offcanvasmenueffects/js/main.js"></script>

<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/3d-bold-navigation/js/main.js"></script>
<script src="<?php echo base_url(); ?>assets/Modern/assets/js/modern.min.js"></script>

<script>

// Open the sesame
//$('#app-container .container').find('.navbar').find('.top-menu').find('#cd-nav').click();

// Close the sesame
//$('#app-container').find('.cd-close-nav').click()

$(document).ready(function(){

    $('#log-out-btn').click(function(ev){
        ev.preventDefault();

        var defaultText = '<i class="pe-7s-power"></i><p>Log Out</p>';
        $(this).html("Logging Out...");

        $.ajax({
            url: "<?php echo base_url(); ?>index.php/App/logout/",
            success: function(){

                $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Pages/login",
                    success: function(htmlData){
                        var obj = $('#app-container');

                        obj.hide('fade', 250, function(){
                            obj.html(htmlData);
                            obj.show('fade', 250);

                            $('.loading-box').css('margin-top', '20vh');
                            $('.loading-box').css('margin-bottom', '20vh');
                        });
                    }
                });

            }, error: function(){
                $(this).html(defaultText);

                $.notify({
                   icon: "pe-7s-lock", message: "There seems an error in logging out. Please contact your administrator"
                },{
                    type: 'danger',
                    timer: 5000,
                    placement: { from: 'top', align: 'right' }
                });
            }
        });
    });

    $('.main-menu-item').click(function(ev){
        ev.preventDefault(); var me = $(this);

        var target = $(this).attr('data-page');
        var _link = "<?php echo base_url(); ?>index.php/Pages/"+target;

        var loadingMessage = '<div class="horizontal-bar sidebar"></div> <div class="page-inner"><div class="page-title"><h3>Loading page... Please wait...</h3></div></div>';

         $('#app-page-container').hide('fade', 250, function(){
            $('#app-page-container').html(loadingMessage).show('fade', 250);


            $.ajax({
                 url:_link, success: function(data){

                     $('#app-page-container').hide('fade', 0, function(){
                        $('#app-page-container').html(data).show('fade', 250);

                         if (target == "company"){
                             var hhh = $('#temp-cont').html();

                             $('#modal-containers').html(hhh);
                             $('#temp-cont').html("");

                             $('#create-user-btn').click(function(ev){
                                ev.preventDefault();

                                var formData = [];
                                $('.register-fld').each(function(){ formData.push($(this).val()); });

                                $('#register-loading').show(0);
                                $.ajax({
                                    url: "<?php echo base_url(); ?>index.php/App/registerUser",
                                    method:"POST", dataType: 'json', data: { f: formData },
                                    success: function(data){
                                        var type = 'danger';
                                        if (data.success){
                                            type = 'success';
                                        }

                                        $('#register-loading').hide(0);
                                        $.notify({
                                           icon: "pe-7s-lock", message: data.message
                                        },{
                                            type: type,
                                            timer: 5000,
                                            placement: { from: 'top', align: 'right' }
                                        });
                                    }, error: function(){
                                        $('#register-loading').hide(0);
                                        $.notify({
                                           icon: "pe-7s-lock", message: "There seems to be an error in adding a user."
                                        },{
                                            type: 'danger',
                                            timer: 5000,
                                            placement: { from: 'top', align: 'right' }
                                        });
                                    }
                                });
                            });
                         }
                     });



                     $('.main-menu-item').each(function(){ $(this).removeClass('cd-selected'); });
                     me.addClass('cd-selected');
                     $('#app-container').find('.cd-close-nav').click();

                 }, error: function(){
                     var errorMessage = '<div class="row"><div class="col-md-12">';
                     errorMessage += 'There seems to be an error in accessing the pages. Please contact';
                     errorMessage += ' your administrator for details.</div></div>';

                     $('#app-page-container').html(errorMessage).show('fade', 250);
                     $('#app-container').find('.cd-close-nav').click();
                 }
            });

        });

    });
});

$('#dashboard-btn').click(); // Emulate first click!
</script>
