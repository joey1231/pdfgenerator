<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Doc Generator</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/style.css">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

    <div id='app-container'>
        <div id='loading-container' class="sidebar full-width" data-color="azure" data-image="assets/img/backgrounds/2.jpg">
            <div class="sidebar-wrapper sidebar-wrapper-full">
                <div class='row'>
                    <div class='col-md-4 col-md-offset-4 loading-box'>
                        Loading application... Please wait...
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for  purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

  <script>
  $(document).ready(function(){
      $.ajax({
          url: "<?php echo base_url(); ?>index.php/App/session",
          dataType: 'json', success: function(d){
              var nextLink = d.pageLink;

              $.ajax({
                  url: nextLink, success: function(htmlData){
                      var obj = null;
                      if (d.hasLoggedIn){
                          obj = $('#app-container');
                      } else {
                          obj = $('.sidebar-wrapper');
                      }

                      obj.hide('fade', 250, function(){
                          console.log(htmlData);
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
</html>
