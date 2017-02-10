<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>Document Generator | Sumit and Jaz Ventures</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Document Generator" />
        <meta name="keywords" content="admin,dashboard,pdf" />
        <meta name="author" content="Scalaberch" />

        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap-colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>


        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>assets/Modern/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/css/themes/blue.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/Modern/assets/css/custom.css" rel="stylesheet" type="text/css"/>

        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="page-header-fixed page-horizontal-bar">

        <div class="overlay"></div>
        <div id='app-container'>
          <main id='loading-container' class="page-content">
              <div class="page-inner">
                  <div id="main-wrapper">
                      <div class="row">
                          <div class="col-md-4 center">
                              <div class="details" align='center'>
                                  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                                  <h3 class='loading-box'>Loading application... Please wait...</h3>
                                  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                              </div>
                          </div>
                      </div><!-- Row -->
                  </div><!-- Main Wrapper -->
              </div><!-- Page Inner -->
          </main><!-- Page Content -->
        </div>
        <div class="cd-overlay"></div>


        <!-- Javascripts -->
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/Modern/assets/js/pages/jquery.number.js"></script>

        <!--  Notifications Plugin    -->
      	<script src="assets/js/bootstrap-notify.js"></script>

        <script>
        $(document).ready(function(){
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/App/session",
                dataType: 'json', success: function(d){
                    var nextLink = d.pageLink;

                    $.ajax({
                        url: nextLink, 
                        success: function(htmlData){
                            var obj = null;
                            if (d.hasLoggedIn){
                                obj = $('#app-container');
                            } else {
                                obj = $('.page-inner');
                            }

                            obj.hide('fade', 250, function(){
                                obj.html(htmlData);
                                obj.show('fade', 250);
                                //lbd.initRightMenu();
                            });
                        }
                    });
                }, error: function(){
                    $('.loading-box').html("There might be some problems in connecting to the server. Please contact your administrator.");
                }
            });
        });
        </script>
    </body>
</html>
