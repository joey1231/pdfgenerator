<style>
        .wizard {
            margin: 20px auto;
            background: #fff;
        }

        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom-color: #e0e0e0;
        }

        .wizard > div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }
    span.round-tab i{
        color:#555555;
    }
    .wizard li.active span.round-tab {
        background: #fff;
        border: 2px solid #5bc0de;

    }
    .wizard li.active span.round-tab i{
        color: #5bc0de;
    }

    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }

    .wizard .nav-tabs > li {
        width: 16.6666%; /* DEM WIDTH */
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: #5bc0de;
        transition: 0.1s ease-in-out;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;
        border: 10px solid transparent;
        border-bottom-color: #5bc0de;
    }

    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
    }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }

    .wizard h3 {
        margin-top: 0;
    }

    .wizard .nav-tabs>li>a {
      border:0px;
    }

    .wizard .disabled:hover {
      cursor: default !important;
    }

    @media( max-width : 585px ) {

        .wizard {
            width: 90%;
            height: auto !important;
        }

        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }

    .title-bar-pane {
      background-color:#5bc0de;
      padding:10px 20px 10px 20px
    }

    .title-bar-pane h2 {
      color:white;
    }

    .title-bar-pane small {
      color:#eee; font-weight:100;
    }

    .title-bar-pane small::before {
      content: "\-\- "
    }

    .nav>li.disabled>a:focus, .nav>li.disabled>a:hover {
      cursor:default;
    }

</style>


<div id="main-wrapper">
<div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="content">
<!--
                   <ul class="breadcrumb">
                    <li class='active bcrumb-item' data-target='first'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-user"></i>&nbsp; Customers' Details
                      </a>
                    </li>
                    <li class='bcrumb-item' data-target='second'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Income and Liability
                      </a>
                    </li>
                    <li class='bcrumb-item' data-target='visual'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Visuals
                      </a>
                    </li>
                    <li class='bcrumb-item' data-target='planb'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Your Plan B
                      </a>
                    </li>
                     <li class='bcrumb-item'  data-target='third'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Current Risk Portfolio and Planning
                      </a>
                    </li>
                    <li class='bcrumb-item'  data-target='loa'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Letter of Authority
                      </a>
                    </li>
                    <li class='bcrumb-item'  data-target='fourth'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Scope of Service
                      </a>
                    </li>
                    <li class='bcrumb-item' id='execute-summary'  data-target='summary'>
                      <a href="javascript:void(0);">
                        <i class="fa fa-book"></i>&nbsp; Generate
                      </a>
                    </li>
                  </ul>
-->
                  <div class="wizard" style="margin-top:-50px">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active" data-target='first' data-step='1' data-title="Customers' Details" >
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                        <i class="fa fa-user"></i>
                                        <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled" data-target='second' data-step='2' data-title="Income and Liability">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                        <i class="fa fa-calculator"></i>
                                    </span>
                                </a>
                            </li>
                            <!--
                            <li role="presentation" class="disabled" data-target='visual' data-step='3' data-title="Visuals">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-picture"></i>
                                    </span>
                                </a>
                            </li>
                            -->
                            <li role="presentation" class="disabled" data-target='planb' data-step='3' data-title="Current Risk Portfolio and Planning">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-folder-open"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled" data-target='loa' data-step='4' data-title="Letter of Authority">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled" data-target='fourth' data-step='5' data-title="Scope of Service">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="fa fa-edit"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled" data-target='summary' data-step='6' data-title="Generate Insurance Planner">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </span>
                                </a>
                            </li>


                        </ul>
                    </div>

                    <div class='title-bar-pane'>
                        <h2>Step 1 <small>Customer Details</small></h2>
                    </div>
                  </div>

                  <?php echo $_pages['s1']; ?>
                  <?php echo $_pages['s2']; ?>
                  <?php echo $_pages['s3']; ?>
                  <?php echo $_pages['planb']; ?>
                  <?php echo $_pages['loa']; ?>
                  <?php echo $_pages['s4']; ?>

                  <div class='page-ff' id='page-visual' style='margin-top:30px; display:none'>
                    <div class="row">
                      <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                         <li role="presentation" class="active"><a href="#scopeservice-p1" aria-controls="home" role="tab" data-toggle="tab">
                           Visuals
                         </a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row" style='margin-top:0px'>
                      <div class="col-md-12">
                          <img src='<?php echo base_url(); ?>resource/img/products.png' class='img-responsive' />
                      </div>
                    </div>
                  </div>

                  <div class='page-ff' id='page-summary' style='margin-top:30px; display:none'>
                     <div id='generate-info-data'>
                       <div id='generate-info-form' style='padding:20px'>
                         <div class='row'>
                           <div class='col-md-12' align='left'>
                             <p>Below is the generated data from the form. Please check if there are any
                               updates or changes or even wrong information inputted.
                               If everything is okay, you may select to "Preview the document" to view the PDF file,
                               or you may opt to save the entry by clicking "Save the document".</p>
                             <p>If you have any changes made, please click "Re-Generate Form" to reload the form information
                               to be updated to the changes.</p>
                           </div>
                         </div>
                         <div class='row'>
                           <div class='col-md-4 col-sm-4'>
                             <button class='btn btn-fill btn-warning btn-block' id="re-generation-btn">
                               Generate Document
                             </button>
                           </div>
                           <div class='col-md-4 col-sm-4'>

                             <div class="btn-group btn-block" id="preview-doc-cont">
                               <button type="button" class="btn btn-info dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Preview Document <span class="caret"></span>
                               </button>
                               <ul id="dropdown-pdf-links" class="dropdown-menu">
                                 <li><a href="#" id="preview-document-btn">Show Insurance Planner</a></li>
                                 <li><a href="#" id="preview-disclosure-btn">Show Disclosure Statement</a></li>
                                 <li><a href="#" id="preview-loa-btn">Show Letter of Authority</a></li>
                               </ul>
                             </div>

                             <button class='btn btn-fill btn-info btn-block' id="load-preview-document-btn" style="margin-top:0px" disabled='disabled'>
                               Document not loaded
                             </button>
                           </div>
                           <div class='col-md-4 col-sm-4'>
                             <button class='btn btn-fill btn-primary btn-block' id="load-save-document-btn" disabled='disabled'>
                               Document not loaded
                             </button>

                             <div class="btn-group btn-block" id="save-doc-cont" style="display:none; margin-top:0px">
                               <button type="button" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Save Insurance Planner <span class="caret"></span>
                               </button>
                               <ul class="dropdown-menu">
                                 <li><a href="#" id="save-document-btn">Save as Document</a></li>
                                 <li><a href="#" id="save-document-package-btn">Save as Package</a></li>
                               </ul>
                             </div>

                           </div>
                         </div>

                       </div>
                       <div id='generate-data'>

                       </div>

                     </div>
                   </div>
                  </div>



           </div>
       </div>
</div>
</div>

<script>
$('#preview-doc-cont').hide(0);

var fetchAllData = function(){
    var data = {};
    data.first = fetchFirstItem();
    data.second = fetchSecondItem();
    data.third = fetchThirdItem();
    data.fourth = fetchFourthItem();
    data.planb = fetchPlanB();
    data.loa   = fetchLOA();

    return data;
};

var generateData = function(){

    // Change the buttons as loading...
    $('#load-save-document-btn')
      .attr('disabled', 'disabled')
      .html("Loading document... Please wait...");

    $('#load-preview-document-btn')
      .attr('disabled', 'disabled')
      .html("Loading document... Please wait...").show(0);

    $('#preview-doc-cont').hide(0);
    $('#save-doc-cont').hide(0);

    $('#load-preview-document-btn').show(0);
    $('#load-save-document-btn').show(0);

      var data = fetchAllData();
      var stringData = JSON.stringify(data);
      var loaBtn = $('#preview-loa-btn');

      //console.log(data);
      if (data.fourth.loa == "yes"){
          loaBtn.html("Loading letter of authority...");

          $.ajax({
              url: "<?php echo base_url(); ?>index.php/Document/loa",
              method: "POST", data: { d: data, s:stringData }, dataType: "json",
              success: function(output){
                  var filename = output.filename;
                  loaBtn.attr('data-link', filename);
                  loaBtn.html("Show Letter of Authority");
              },
              error: function(){
                  loaBtn.html("LOA Unavailable.");
              }
          });
      } else {
          loaBtn.html("LOA Unavailable.");
          loaBtn.attr('data-link', "");
      }

      $.ajax({
           url: "<?php echo base_url(); ?>index.php/Document/preview/factfind",
           method:"POST", data: { d: data, s: stringData }, dataType:'json',
           success: function( output ){
               var filename = output.filename;

               if ( output.limited != "na" ) {
                   $('#dropdown-pdf-links').prepend('<li id="limited-li"><a href="#" id="preview-limited-btn">Limited Advice Transactions</a></li>');
                   $('#preview-limited-btn').attr('data-link', output.limited);

                   document.getElementById('preview-limited-btn').addEventListener('click',function (){

                       if ($(this).attr('disabled') != "disabled"){
                           var url = $('#preview-limited-btn').attr('data-link');
                           var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

                           $('#preview-dialog').find(".modal-body").html(html);
                           $('#preview-dialog').modal('show');
                       }

                   });
               } else {
                   $("#limited-li").remove();
               }

               $('#preview-document-btn').attr('data-link', output.filename);
               $('#preview-disclosure-btn').attr('data-link', output.disclosure);

               $('#preview-doc-cont').show(0);
               $('#save-doc-cont').show(0);

               $('#load-preview-document-btn').hide(0);
               $('#load-save-document-btn').hide(0);


//                  $("#save-document-btn")
//                    .removeAttr('disabled', 'disabled')
//                    .html("Save document");


               //context.find('.modal-body').html(html);
           }
      });

    return data;
};

$(document).ready(function(){

    $('#preview-document-btn').unbind('click').click(function(ev){
        if ($(this).attr('disabled') != "disabled"){
            var url = $('#preview-document-btn').attr('data-link');
            var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });

    $('#preview-limited-btn').unbind('click').click(function(ev){
        if ($(this).attr('disabled') != "disabled"){
            var url = $('#preview-limited-btn').attr('data-link');
            var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });

    $('#preview-loa-btn').unbind('click').click(function(ev){
        if ($(this).attr('disabled') != "disabled"){
            var url = $('#preview-loa-btn').attr('data-link');
            var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });

    $('#preview-disclosure-btn').unbind('click').click(function(ev){
        if ($(this).attr('disabled') != "disabled"){
            var url = $('#preview-disclosure-btn').attr('data-link');
            var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

            $('#preview-dialog').find(".modal-body").html(html);
            $('#preview-dialog').modal('show');
        }
    });

    $("#save-document-btn").unbind('click').click(function(ev){
      if ($(this).attr('disabled') != "disabled"){
          $('#save-ff-dialog').attr('data-document-target', "FF").modal('show');
      }
    });

    $('#save-ff-btn-now').unbind('click').click(function(){
        var text = $('#save-ff-dialog').find('textarea').val();
        var title = $('#save-ff-dialog').find('input').val();
        var link = ""; //$('#preview-document-btn').attr('data-link');
        var _type = $('#save-ff-dialog').attr('data-document-target');

        var fetchedData = fetchAllData();
        var info = JSON.stringify(fetchedData);

        var btn = $(this);

        btn.html("Saving document...").attr('disabled', 'disabled');

        var _url = "";
        if (_type == "FF"){
          _url = "<?php echo base_url(); ?>index.php/Document/save/ff";
          link = $('#preview-document-btn').attr('data-link');
        } else if (_type == "SOA"){
          _url = "<?php echo base_url(); ?>index.php/Document/save/soa";
          link = $('#preview-soa-btn').attr('data-link');
        }

        $.ajax({
          url:_url, method:"POST", data: {
            t:text, l:link, d:info, ti:title
          },
          success: function(d){
              $('#save-ff-dialog').modal('hide');
              btn.html("Save document").removeAttr('disabled');

              $('#save-ff-dialog').find('textarea').val("");
              $('#save-ff-dialog').find('input').val("");

              $.notify({ icon: "pe-7s-info", message: "Your transaction is completed." },{
                  type: "success", timer: 5000, placement: { from: 'top', align: 'right' }
              });
          },
          error: function(){
              $('#save-ff-dialog').modal('hide');
              btn.html("Save document").removeAttr('disabled');

              $.notify({ icon: "pe-7s-info", message: "Transaction failed." },{
                  type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
              });
          }
        });
    });

    $('#re-generation-btn').click(function(){
      generateData();
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

    $('#execute-summary').click(function(){
      //generateData();
    });

    $('#save-document-package-btn').click(function(){
        var dialog = $('#ff-package-dialog');

        dialog.find('.done-pane').hide(0);

        dialog.find('transacting-pane').show(0);
        dialog.find('.transacting-pane h3').html("Packaging documents... Please wait...");
        dialog.find('.close-btn-x').hide(0);
        dialog.modal('show');

        var content = fetchAllData();
        var soaDocLink = $('#preview-soa-btn').attr('data-link');
        var attachments = content.first.prr;

        var fetchedData = fetchAllData();
        var info = JSON.stringify(fetchedData);
        var link = $('#preview-document-btn').attr('data-link');
        var limited = $('#preview-limited-btn');
        
        var postdata = {
            t:"text", l:link, d:info, ti:"title", limited:"na"
        };

        if ( limited ) {
            postdata.limited = limited.attr('data-link');
        }

        $.ajax({
            url:"<?php echo base_url(); ?>index.php/Data/packageFF/",
            method:"POST", data: postdata, dataType:'json',
            success: function(data){
                console.log(data);

                if (data.success){
                    //var d = data.info;

                    dialog.find('.done-pane').show(0);
                    dialog.find('.close-btn-x').show(0);
                    dialog.find('transacting-pane').hide(0);

                    $('.download-btn-ff-pack').attr('data-link', data.link);

                    $('.download-btn-ff-pack').click(function(){
                        window.open($(this).attr('data-link'));
                    });

                    $('.open-mail-service').click(function(){
                        var email = fetchedData.first.clientInfo.email;
                        if (email == "") {
                            window.open("mailto://");
                        } else {
                            var DLLink = $('.download-btn-ff-pack').attr('data-link');
                            var myEmailLink = "mailto://"+email+"?subject=Your Insurance Planner Package&attachment="+DLLink;
                            window.open(myEmailLink);
                        }
                    });

                    //c.find('.fd-date').html(d.timestamp);
                    //c.find('.fd-title').html(d.title);
                    //c.find('.fd-trans').html(d.trans_id);
                } else {
                    dialog.find('.transacting-pane h3').html("Transaction was not completed. "+data.message);
                }

            }, error: function(){

            }
        });
    });

    $('.wizard li').click(function(ev){
        ev.preventDefault();

        var target = $(this).attr('data-target');
        var targetPage = '#page-'+target;

        $('.wizard li').each(function(){
            $(this).removeClass('active', 50);
        });

        $('.page-ff').each(function(){
            $(this).hide('fade', 150);
            //$(this).find('.tab-pane').each(function(){
            //    $(this).removeClass('active');
            //});
        });

        var tgt = $(targetPage);
        //tgt.find('.tab-pane').first().addClass('active');
        tgt.show('fade', 250);
        $(this).addClass('active', 250);


        var step = $(this).attr('data-step');
        var text = $(this).attr('data-title');

        var titleText = "<h2>Step "+step+" <small>"+text+"</small></h2>";
        $('.title-bar-pane').html(titleText);


    }).mouseenter(function(){
      var step = $(this).attr('data-step');
      var text = $(this).attr('data-title');

      var titleText = "<h2>Step "+step+" <small>"+text+"</small></h2>";
      $('.title-bar-pane').html(titleText);
    }).mouseleave(function(){
        $('.wizard li').each(function(){
            if ($(this).hasClass('active')){
              var step = $(this).attr('data-step');
              var text = $(this).attr('data-title');

              var titleText = "<h2>Step "+step+" <small>"+text+"</small></h2>";
              $('.title-bar-pane').html(titleText);
            }
        });
    });

    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true,
        clearBtn: false,
        format: "dd/mm/yyyy"
    });
});
</script>
