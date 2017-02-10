<main class="page-content" style='box-shadow:0 0 0px !important'>
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <br /><br /><br /><br /><br /><br />
                    <div class="login-box">
                        <a href="#" class="logo-name text-lg text-center">
                          Login to Doc Generator<br />
                          <small style='font-size:60%;font-weight:100'>
                              Built specially for JD Life Ltd. and EliteInsure Ltd.
                          </small>
                        </a>
                        <br />
                        <p class="text-center m-t-md">Please login into your account.</p>
                        <div class="m-t-md" action="index.html">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" id="user-fld" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="pass-fld" required>
                            </div>
                            <div class="form-group" id='login-msg'>

                            </div>
                            <button type="submit" class="btn btn-success btn-block">Login</button>

                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->

<script src="<?php echo base_url(); ?>assets/Modern/assets/js/modern.min.js"></script>
<script>
$(document).ready(function(){
    $('#user-fld').keyup(function(ev){
        if (ev.which == 13){
          $('#pass-fld').focus();
        }
    });

    $('#pass-fld').keyup(function(ev){
      if (ev.which == 13){
          $('.btn').click();
      }
    });

    $('.btn').click(function(ev){
        ev.preventDefault();

        var username = $('#user-fld');
        var password = $('#pass-fld');

        if (username.val() == ""){
           $.notify({
        	   icon: "pe-7s-lock", message: "Please enter a username."
        	},{
                type: 'danger',
                timer: 5000,
                placement: { from: 'top', align: 'right' }
            });
        } else if (password.val() == ""){
            $.notify({
        	   icon: "pe-7s-lock", message: "Please enter a password."
        	},{
                type: 'danger',
                timer: 5000,
                placement: { from: 'top', align: 'right' }
            });
        } else {
            var _url = "<?php echo base_url(); ?>index.php/App/auth";
            $.ajax({
                url: _url, data: { u:username.val(), p:password.val() },
                dataType: "json", method: "POST",
                success: function(data){
                    if (data.status){
                        $.ajax({
                            url: "<?php echo base_url(); ?>index.php/Pages/main",
                            success: function(htmlData){
                                var obj = $('#app-container');

                                obj.hide('fade', 250, function(){
                                    obj.html(htmlData);
                                    obj.show('fade', 250);
                                });
                            }
                        });
                    } else {
                        $.notify({
                           icon: "pe-7s-lock", message: data.message
                        },{
                            type: 'danger',
                            timer: 5000,
                            placement: { from: 'top', align: 'right' }
                        });
                    }
                },
                error: function(){
                    $.notify({
                       icon: "pe-7s-lock", message: "There seems an error in logging in. Please contact your administrator"
                    },{
                        type: 'danger',
                        timer: 5000,
                        placement: { from: 'top', align: 'right' }
                    });
                }
            });
        }
    });
});
</script>
