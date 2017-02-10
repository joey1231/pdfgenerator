<div class="horizontal-bar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">
                        <img src="assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
                    </div>
                    <div class="sidebar-profile-details">
                        <span>&nbsp;<br><small>&nbsp;</small></span>
                    </div>
                </a>
            </div>
        </div>
        <ul class="menu accordion-menu" id='document-generator-menu'>
            <li id='document-generator-menu-first' class='active' data-page='docfinder'>
                <a href="#" class="waves-effect waves-button">
                    <span class="menu-icon glyphicon glyphicon-search"></span>
                    <p>Search Document</p>
                </a>
            </li>
            <li data-page='factfind'>
                <a href="#" class="waves-effect waves-button" title="Generate Insurance Planner">
                    <span class="menu-icon glyphicon glyphicon-list-alt"></span>
                    <p>Generate Insurance Planner</p>
                </a>
            </li>
            <li data-page='soa'>
                <a href="#" class="waves-effect waves-button" title="Generate Insurance Plan">
                    <span class="menu-icon glyphicon glyphicon-list-alt"></span>
                    <p>Generate Insurance Plan</p>
                </a>
            </li>
            <li data-page='acc'>
                <a href="#" class="waves-effect waves-button" title="ATP Files">
                    <span class="menu-icon glyphicon glyphicon-list-alt"></span>
                    <p>ATP Files</p>
                </a>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->

</div><!-- Page Sidebar -->
<!-- <pre><?php //print_r($userData); ?></pre> -->
<div id='document-generator-pane' class="page-inner">


</div><!-- Page Inner -->

<script>

$(document).ready(function(){

    $('#document-generator-menu li').click(function(ev){
        ev.preventDefault(); var me = $(this);

        var target = $(this).attr('data-page');
        var _link = "<?php echo base_url(); ?>index.php/Pages/"+target;

        var loadingMessage = '<div class="page-title"><h3>Loading page... Please wait...</h3></div>';

        $('#document-generator-pane').hide('fade', 250, function(){
            $('#document-generator-pane').html(loadingMessage).show('fade', 250);

            $.ajax({
                 url:_link, success: function(data){

                     $('#document-generator-pane').hide('fade', 0, function(){
                        $('#document-generator-pane').html(data).show('fade', 250);
                     });



                     $('#document-generator-menu li').each(function(){ $(this).removeClass('active'); });
                     me.addClass('active');

                 }, error: function(){

                 }
            });

        });

    });

    $('#document-generator-menu-first').click();
});

</script>
