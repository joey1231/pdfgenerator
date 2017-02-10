<style>

    .list-group-item {
      padding: 20px;
    }


    th {
      font-weight:100;
    }

    label {
      font-weight:100;
    }

    .dependent {
      text-align: left;
    }
    .breadcrumb {
      padding: 0;
      background: #D4D4D4;
      list-style: none;
      overflow: hidden;
      margin-top:30px;
    }
    .breadcrumb>li+li:before {
      padding: 0;
    }
    .breadcrumb li {
      float: left;
    }
    .breadcrumb li.active a {
      background: brown;                   /* fallback color */
      background: #1DC7EA;
    }
    .breadcrumb li.completed a {
      background: brown;                   /* fallback color */
      background: #1DC7EA;
    }
    .breadcrumb li.active a:after {
      border-left: 30px solid #1DC7EA;
    }
    .breadcrumb li.completed a:after {
      border-left: 30px solid #1DC7EA;
    }

    .breadcrumb li a {
      color: white;
      text-decoration: none;
      padding: 10px 0 10px 45px;
      position: relative;
      display: block;
      float: left;
    }
    .breadcrumb li a:after {
      content: " ";
      display: block;
      width: 0;
      height: 0;
      border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
      border-bottom: 50px solid transparent;
      border-left: 30px solid hsla(0, 0%, 83%, 1);
      position: absolute;
      top: 50%;
      margin-top: -50px;
      left: 100%;
      z-index: 2;
    }
    .breadcrumb li a:before {
      content: " ";
      display: block;
      width: 0;
      height: 0;
      border-top: 50px solid transparent;           /* Go big on the size, and let overflow hide */
      border-bottom: 50px solid transparent;
      border-left: 30px solid white;
      position: absolute;
      top: 50%;
      margin-top: -50px;
      margin-left: 1px;
      left: 100%;
      z-index: 1;
    }
    .breadcrumb li:first-child a {
      padding-left: 15px;
    }
    .breadcrumb li a:hover {     background: #4091ff;  }
    .breadcrumb li a:hover:after { border-left-color: #4091ff   !important; }
</style>
<div id="main-wrapper">
<div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="content">
                   <h3 align='left'>ATP Template Viewer</h3>
                   <p>Here are the files for the ATP Templates</p>
                   <div class='row col-md-12'>
                     <br />
                         <div class="list-group">
                            <a href="#" class="list-group-item acc-view" data-target='elite'>
                              <p class="list-group-item-text pull-right">Date Added: 11 July 2016</p>
                              <h4 class="list-group-item-heading">EliteInsure - ATP Template</h4>
                              <br />
                              <p class="list-group-item-text">Size: 1.2 MB</p>
                            </a>
                            <a href="#" class="list-group-item acc-view" data-target='jd'>
                              <p class="list-group-item-text pull-right">Date Added: 11 July 2016</p>
                              <h4 class="list-group-item-heading">JD Life - ATP Template</h4>
                              <br />
                              <p class="list-group-item-text">Size: 1.2 MB</p>
                            </a>
                          </div>
                   </div>
              </div>

           </div>
       </div>
</div>
</div>
<script>


$(document).ready(function(){


  $('.acc-view').click(function(ev){

      //console.log("clicked!");
      var url = ""; var target = $(this).attr('data-target');
      if (target == "elite"){
          url = "<?php echo base_url(); ?>resource/atp_eliteinsure_template.pdf";
      } else if (target == "jd"){
          url = "<?php echo base_url(); ?>resource/atp_jdlife_template.pdf";
      }

      if (url != ""){
          var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

          $('#preview-dialog').find(".modal-body").html(html);
          $('#preview-dialog').modal('show');
      }
  });

  $('#preview-dialog').on('show.bs.modal', function(ev){
       var context = $(this);
       context.find('.modal-content').css({
              width:'980px', //probably not needed
              height:'auto', //probably not needed
              'max-height':'100%',
              'margin-left':'-30%'
       });
  });
});
</script>
