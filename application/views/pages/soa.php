
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
        width: 16.666%; /* DEM WIDTH */
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

                 <div class="wizard" style="margin-top:-50px">
                   <div class="wizard-inner">
                       <div class="connecting-line"></div>
                       <ul class="nav nav-tabs" role="tablist">

                           <li role="presentation" class="active" data-target='first' data-step='1' data-title="Import Fact Find" >
                               <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                   <span class="round-tab">
                                       <i class="glyphicon glyphicon-import"></i>
                                       <!-- <i class="glyphicon glyphicon-folder-open"></i> -->
                                   </span>
                               </a>
                           </li>

                           <li role="presentation" class="disabled" data-target='second' data-step='2' data-title="Advice Summary">
                               <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                   <span class="round-tab">
                                       <i class="fa fa-newspaper-o"></i>
                                   </span>
                               </a>
                           </li>
                           <li role="presentation" class="disabled" data-target='third' data-step='3' data-title="Why my recommendation?">
                               <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                   <span class="round-tab">
                                       <i class="fa fa-navicon"></i>
                                   </span>
                               </a>
                           </li>

                           <li role="presentation" class="disabled" data-target='myrecom' data-step='4' data-title="Your Decision &amp; Insurance Progress">
                               <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 3">
                                   <span class="round-tab">
                                       <i class="fa fa-navicon"></i>
                                   </span>
                               </a>
                           </li>

                           <li role="presentation" class="disabled" data-target='accack' data-step='5' data-title="ACC Acknowledgement and Existing Policy Schedule">
                               <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                   <span class="round-tab">
                                       <i class="fa fa-edit"></i>
                                   </span>
                               </a>
                           </li>

                           <li role="presentation" class="disabled" data-target='summary' data-step='6' data-title="Generate SOA Document">
                               <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                   <span class="round-tab">
                                       <i class="fa fa-file-pdf-o"></i>
                                   </span>
                               </a>
                           </li>

                       </ul>
                   </div>

                   <div class='title-bar-pane'>
                       <h2>Step 1 <small>Import Fact Find</small></h2>
                   </div>
                 </div>

                   <?php echo $_pages['s1']; ?>
                   <?php echo $_pages['s2']; ?>
                   <?php echo $_pages['s3']; ?>
                   <?php echo $_pages['s35']; ?>
                   <?php echo $_pages['s4']; ?>

                  <div class='page-ff' id='page-summary' style='margin-top:30px; display:none'>
                    <br>
                    <div class='row'>
                      <div class='col-md-12' align='left'>
                          <p>By marking the checkbox below as checked, you are hereby authorizing the firm to proceed with the transaction.
                          Your Statement of Advice document as well as other necessary documents will be not considered final if the transaction
                        has not been authorized to proceed.</p>
                        <div class="checkbox text-left" data-fld='life'>
                          <label>
                            <input type="checkbox" id="soa-confirm-checkbox">
                            I am authorizing the firm to proceed with the transaction.
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class='row' id='soa-confirmed-button-set' style='display:none'>
                        <!-- <div class='col-md-4'>
                            <button class='btn btn-warning btn-fill btn-block' id='generate-soa-btn'>
                                Generate Statement of Advice Document
                            </button>
                        </div> -->
                        <div class='col-md-4'>
                            <button class='btn btn-info btn-fill btn-block' id='preview-soa-btn' disabled='disabled'>
                                Not generated...
                            </button>
                        </div>
                        <div class='col-md-4'>
                            <button class='btn btn-primary btn-fill btn-block' id='save-soa-btn'  disabled='disabled'>
                                Not generated...
                            </button>
                        </div>
                        <div class='col-md-4'>
                            <button class='btn btn-primary btn-fill btn-block' id='finalize-soa-btn'  disabled='disabled'>
                                Not generated...
                            </button>
                        </div>
                    </div>
                  </div>

              </div>

           </div>
       </div>
</div>
</div>
<script>
var _importedData = null;

var fetchAlldataSOA = function(){
    var data = {};

    data.clientFirstname     = document.getElementById('clientFirstname').textContent;
    data.clientSurname       = document.getElementById('clientSurname').textContent;
    data.partnerFirstname    = document.getElementById('partnerFirstname').textContent;
    data.partnerSurname      = document.getElementById('partnerSurname').textContent;

    data.import = $('#import-data').attr('data-import-id');
    if (data.import != ""){
        data.first = fetchPartOneSOA();
        data.second = fetchPartTwoSOA();
        data.acc = fetchPartAccSOA();
        data.decision = fetchDecisionProgress();
    }

    console.log(data);
    return data;
};

$(document).ready(function(){

  $('#finalize-soa-btn').click(function(){
      var dialog = $('#finalize-dialog');

      dialog.find('.done-pane').hide(0);

      dialog.find('.transacting-pane h3').html("Packaging documents... Please wait...");
      dialog.find('.close-btn-x').hide(0);
      dialog.modal('show');

      var content = fetchAlldataSOA();
      var soaDocLink = $('#preview-soa-btn').attr('data-link');
      var attachments = content.first.prr;

      $.ajax({
          url:"<?php echo base_url(); ?>index.php/Data/package/",
          method:"POST", data: { d: content, l: soaDocLink, a:attachments }, dataType:'json',
          success: function(data){
              console.log(data);

              if (data.success){
                  var d = data.info;
                  var c = dialog.find('.done-pane');

                  c.find('.fd-date').html(d.timestamp);
                  c.find('.fd-title').html(d.title);
                  c.find('.fd-trans').html(d.trans_id);

                  dialog.find('.transacting-pane').hide(0, function(){
                      c.show(0);
                      dialog.find('.download-btn-x').click(function(){
                          window.open(d.link, '_self');
                      });
                  });


              } else {
                  dialog.find('.transacting-pane h3').html("Transaction was not completed. "+data.message);
              }

          }, error: function(){

          }
      });
  });

  $('#soa-confirm-checkbox').click(function(){
      if ($('#soa-confirm-checkbox').is(':checked')){

          var data = fetchAlldataSOA();
          if (data.import == ""){
            $.notify({ icon: "pe-7s-info", message: "You must import a fact find document first before proceeding." },{
                type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
            });

            $('#soa-confirm-checkbox').prop('checked', false);
          } else {
            $('#soa-confirmed-button-set').show(0);
            // Execute the generate preview stuff

            //$(this).attr('disabled', 'disabled').html("Loading document...");
            $('#preview-soa-btn').attr('disabled', 'disabled').html("Loading document...");
            $("#save-soa-btn").attr('disabled', 'disabled').html("Loading document...");

            $.ajax({
              url:"<?php echo base_url(); ?>index.php/Document/preview/soa",
              method:"POST", data:{ d:data }, dataType:'json',
              success: function(output){
                  var filename = output.filename;
                  //$('#generate-soa-btn')
                  //  .removeAttr('disabled', 'disabled')
                  //  .html("Generate Statement of Advice Document");

                  $('#preview-soa-btn')
                     .attr('data-link', output.filename)
                     .removeAttr('disabled', 'disabled')
                     .html("Preview document");

                  $("#save-soa-btn")
                    .removeAttr('disabled', 'disabled')
                    .html("Save SOA document");


                  $("#finalize-soa-btn")
                    .removeAttr('disabled', 'disabled')
                    .html("Finalize document package");
              }
            });
          }

      } else {
          $('#soa-confirmed-button-set').hide(0);
      }
  });

  $('#preview-soa-btn').click(function(ev){
      if ($(this).attr('disabled') != "disabled"){
          var url = $('#preview-soa-btn').attr('data-link');
          var html = "<iframe width='100%' height='500' src='"+url+"'></iframe>";

          $('#preview-dialog').find(".modal-body").html(html);
          $('#preview-dialog').modal('show');
      }
  });

  $('#save-soa-btn').unbind('click').click(function(ev){
    if ($(this).attr('disabled') != "disabled"){
        $('#save-ff-dialog').attr('data-document-target', "SOA").modal('show');
    }
  });

  $('#save-ff-btn-now').unbind('click').click(function(){
      var text = $('#save-ff-dialog').find('textarea').val();
      var title = $('#save-ff-dialog').find('input').val();
      var link = "";
      var _type = $('#save-ff-dialog').attr('data-document-target');

      var info = fetchAlldataSOA();

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


    $('#generate-soa-btn').click(function(){
        if ($(this).attr('disabled') != "disabled"){

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
    });
});
</script>
