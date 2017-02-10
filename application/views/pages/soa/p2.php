<div class='page-ff' style='margin-top:30px;display:none' id='page-second'>

  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation"  class="active"><a href="#soa-p1" aria-controls="home" role="tab" data-toggle="tab">
      Full Advice Summary
    </a></li>
    <!-- <li role="presentation"><a href="#caa-p1"  aria-controls="profile" role="tab" data-toggle="tab">
      Inherent Disadvantages
    </a></li> -->
    <li role="presentation"><a href="#prot-p1"  aria-controls="profile" role="tab" data-toggle="tab">
      Personal Risk Recommendation
    </a></li>
    <li role="presentation"><a href="#prot-p2"  aria-controls="profile" role="tab" data-toggle="tab">
      Total Monthly Premium
    </a></li>
    <li role="presentation"><a href="#prot-p3"  aria-controls="profile" role="tab" data-toggle="tab">
      Additional Needs
    </a></li>
  </ul>

  <div class='tab-content'>
    <div role="tabpanel" class="tab-pane fade in active" id="soa-p1">
      <br>

      <ul class="nav nav-pills" role="tablist" style='font-size:90%'>
        <li role="presentation"  class="active"><a href="#soa-s4"  aria-controls="profile" role="tab" data-toggle="tab">
          Select/Unselect to look
        </a></li>
        <li role="presentation"><a href="#soa-s1" aria-controls="home" role="tab" data-toggle="tab">
          My Advice to You
        </a></li>
      </ul>

      <div class='tab-content'>
          <div role='tabpanel' class='tab-pane fade' id='soa-s1'>
            <div class='row'>
              <div class="form-group col-md-12" align='left'>
                <br />
                <label>My advice to you</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' rows='6' placeholder="Enter advice"></textarea>
              </div>
            </div>
          </div>
          <div role='tabpanel' class='tab-pane fade' id='soa-s2'>
            <div class='row'>
              <div class="form-group col-md-12" align='left'>
              <h4>Risk Summary for:</h4>
              </div>

              <div class='col-md-6'>
                <div class="form-group" align='left'>
                  <label>Medical</label>
                  <textarea class="form-control info-fld" data-fld-name='medical' row='4'></textarea>
                </div>
                <div class="form-group" align='left'>
                  <label>Income</label>
                  <textarea  class="form-control info-fld" data-fld-name='income' row='4'></textarea>
                </div>
                <div class="form-group" align='left'>
                  <label>Trauma</label>
                  <textarea class="form-control info-fld" data-fld-name='trauma' row='4'></textarea>
                </div>
              </div>

              <div class='col-md-6'>
                <div class="form-group" align='left'>
                  <label>TPD</label>
                  <textarea  class="form-control info-fld" data-fld-name='tpd' row='4'></textarea>
                </div>
                <div class="form-group" align='left'>
                  <label>Life</label>
                  <textarea  class="form-control info-fld" data-fld-name='life' row='4'></textarea>
                </div>
                <div class="form-group" align='left'>
                  <label>Other</label>
                  <textarea  class="form-control info-fld" data-fld-name='other' row='4'></textarea>
                </div>
              </div>

            </div>
          </div>
          <div role='tabpanel' class='tab-pane fade' id='soa-s3'>
            <br />
            <div class='row'>
              <div class="form-group col-md-12" align='left'>
                <label>Why my advice is apropriate for you</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' placeholder="Enter advice"></textarea>
              </div>
              <div class="form-group col-md-12" align='left'>
                <label>Risks relevant to my advice</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' placeholder="Enter advice"></textarea>
              </div>
              <div class="form-group col-md-12" align='left'>
                <label>What my advice does not cover</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' placeholder="Enter advice"></textarea>
              </div>
              <!-- <div class="form-group col-md-12" align='left'>
                <label>Fees and commisions</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' placeholder="Enter advice"></textarea>
              </div> -->
              <div class="form-group col-md-12" align='left'>
                <label>Next steps</label>
                <textarea type="text" class="form-control info-fld" data-fld-name='advice' placeholder="Enter advice"></textarea>
              </div>
            </div>
          </div>
          <div role='tabpanel' class='tab-pane fade in active' id='soa-s4'>
            <div class='row'>
                <div class='col-md-6'>
                  <h2>Items to look upon</h2>
                  <div>
                    <select class='form-control' id='select-look-upon'>
                        <option value='-1'>Select a product category...</option>
                        <?php
                          $sql = "SELECT * FROM product_category";
                          $query = $this->db->query($sql);
                          if ($query->num_rows() > 0){
                              foreach($query->result() as $r){
                                  echo "<option value='".$r->idproduct_category."'>".$r->name."</option>";
                              }
                          }
                        ?>
                    </select>
                  </div>
                  <div>
                    <br /><br />
                    <ul class="list-group" id='items-to-look-upon'>

                    </ul>
                  </div>
                </div>
                <div class='col-md-6'>
                  <h2>Items to NOT look upon</h2>
                  <div>
                    <select class='form-control' id='select-nolook-upon'>
                        <option value='-1'>Select a product category...</option>
                        <?php
                          $sql = "SELECT * FROM product_category";
                          $query = $this->db->query($sql);
                          if ($query->num_rows() > 0){
                              foreach($query->result() as $r){
                                  echo "<option value='".$r->idproduct_category."'>".$r->name."</option>";
                              }
                          }
                        ?>
                    </select>
                  </div>
                  <div>
                    <br /><br />
                    <ul class="list-group" id='items-to-nolook-upon'>

                    </ul>
                  </div>
                </div>
            </div>
          </div>
      </div>

    </div>

    <div role="tabpanel" class='tab-pane fade in' id='caa-p1'>
        <br />
        <p>I have identified the following other needs which have not been addressed: </p>
        <div class='row'>
          <div class='col-md-5' align='left'>
            <label>Enter Issue:</label>
            <textarea class='form-control' id='issue-disadv-issue'></textarea>
          </div>
          <div class='col-md-5' align='left'>
            <label>Recommendation:</label>
            <textarea class='form-control'  id='issue-disadv-recomm'></textarea>
          </div>
          <div class='col-md-2' align='left'>
            <label>&nbsp</label>
            <button class='btn btn-primary btn-block' id='add-issue-disadv-btn'>Add Issue</button>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-12'>
            <br />
            <table class='table table-hover' id='disadv-recomms-table'>
              <thead>
                  <tr><th>Issue</th><th>Recommendation</th><th></th></tr>
              </thead>
              <tbody style='font-size:90%'>

              </tbody>
            </table>
          </div>
        </div>
    </div>

    <div role='tabpanel' class='tab-pane fade in' id='prot-p1'>
      <input id='upload-illustration' style='display:none' type='file' />
      <div class='row'>
        <div class='col-md-8'>
            <h3>Please upload your illustration document using the button on the right.
              Your uploaded documents will show up below.<br />
              <small>Note: You are only allowed to upload files with either PDF/DOC/DOCX format</small>
            </h3>
        </div>
        <div class='col-md-4'>
            <button class='btn btn-primary btn-block' id='open-upload-illustration'>
              Upload Illustration document
            </button>
        </div>
      </div>
      <div class='row'>
        <br />
        <div class='col-md-12'>
          <div class="list-group" id='uploaded-illustrations'>
          </div>
        </div>

      </div>
    </div>

    <div role='tabpanel' class='tab-pane fade in' id='prot-p2'>
      <div class='row'>
        <div class='col-md-8'>
            <div class="form-group">
              <label>Enter total monthly premium:</label>
              <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type='number' class="form-control" id="monthly-premium-total" min="0" step="0.01" />
              </div>
            </div>
        </div>
      </div>
    </div>

    <div role="tabpanel" class="tab-pane fade in" id="prot-p3">
        <div class="row">
          <div class="col-md-6">
            <h4>Specify additional amount assured and description</h4>
            <div class="form-group">
              <label>Need/Benefit</label>
              <select class="form-control">
                <option value="0">Health</option>
                <option value="1">Income Protection</option>
                <option value="2">Mortgage Protection</option>
                <option value="3">Trauma</option>
                <option value="4">TPD</option>
                <option value="5">Life</option>
              </select>
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type='text' class='form-control' />
            </div>
            <div class="form-group">
              <label>Amount</label>
              <input type='number' class='form-control' />
            </div>
            <div class="form-group">
              <button class="btn btn-default" id="add-more-amt-btn"><i class="glyphicon glyphicon-plus"></i> Add Additional Amounts</button>
            </div>
            <table class="table table-striped" style="margin-top:20px">
              <thead>
                <tr>
                  <th>Need/Benefit</th><th>Description</th><th>Amount</th><th></th>
                </tr>
              </thead>
              <tbody id="more-amt-tbl">

              </tbody>
            </table>

          </div>
          <div class="col-md-6">
            <h4>Specify additional reasons why this benefit is needed.</h4>
            <div class="form-group">
              <label>Need/Benefit</label>
              <select class="form-control">
                <option value="0">Health</option>
                <option value="1">Income Protection</option>
                <option value="2">Mortgage Protection</option>
                <option value="3">Trauma</option>
                <option value="4">TPD</option>
                <option value="5">Life</option>
              </select>
            </div>
            <div class="form-group">
              <label>Reason</label>
              <input type='text' class='form-control' />
            </div>
            <div class="form-group">
              <button class="btn btn-default" id="add-more-reason-btn"><i class="glyphicon glyphicon-plus"></i> Add Additional Reason</button>
            </div>
            <table class="table table-striped" style="margin-top:20px">
              <thead>
                <tr>
                  <th>Need/Benefit</th><th>Reason</th><th></th>
                </tr>
              </thead>
              <tbody id="more-reasons-tbl">

              </tbody>
            </table>
          </div>
        </div>
    </div>

  </div>

</div>

<script>
var fetchPartOneSOA = function(){
    var data = {};
    data.fulladvice = [];
    $('#soa-p1 .info-fld').each(function(){
      data.fulladvice.push($(this).val());
    });

    data.summary = [];
    $('#scn-p1 .tab-pane').each(function(){
        var item = {}; var i=1;
        $(this).find('input').each(function(){
            if (i == 1){
              item.amountClient = $(this).val();
            } else if (i==2){
              item.amountPartner = $(this).val();
            }

            i++;
        });

        item.events = []; item.reasons = [];
        $(this).find('.event-item').each(function(){
            item.events.push( $(this).find('.text').html() );
        });

        $(this).find('.reason-item').each(function(){
            item.reasons.push( $(this).find('.text').html() );
        });

        data.summary.push(item);
    });

    data.disadvantages = [];
    $('#caa-p1 .issue-disadv').each(function(){
        var item = {};
        item.issue = $(this).find('td:eq(0)').html();
        item.recom = $(this).find('td:eq(1)').html();

        data.disadvantages.push(item);
    });

    data.prr = [];
    $('#uploaded-illustrations .upl-list-item').each(function(){
        var tgt = $(this).attr('data-tgt');
        if (tgt == "" || tgt == null){
            // Nottingo!
        } else {
            data.prr.push(tgt);
        }
    });


    data.look = [];
    $('#items-to-look-upon .list-group-item').each(function(){
        var m = $(this).find('.text').html();
        data.look.push(m);
    });

    data.nolook = [];
    $('#items-to-nolook-upon .list-group-item').each(function(){
        var m = $(this).find('.text').html();
        data.nolook.push(m);
    });

    data.totalMonthlyPremium = $('#monthly-premium-total').val() == null ? 0 : $('#monthly-premium-total').val();

    // More reasons
    //id="more-reasons-tbl"
    var amts = [];
    $('#more-amt-tbl tr').each(function(){
        amts.push({
            id: $(this).attr('data-reason'),
            desc: $(this).find('td:eq(1)').html(),
            amt: $(this).find('td:eq(2)').html()
        });
    });

    var reasons = [];
    $('#more-reasons-tbl tr').each(function(){
        reasons.push({
            id: $(this).attr('data-reason'),
            desc: $(this).find('td:eq(1)').html()
        });
    });

    data.amts = amts;
    data.reasons = reasons;

    return data;
};

var uploadIndex = 0;

$(document).ready(function(){

    $('#open-upload-illustration').click(function(){
        $('#upload-illustration').click();
    });

    $('#upload-illustration').change(function(ev){
        var files = ev.target.files;
        var fileData = new FormData();
        $.each(files, function(k, v){ fileData.append(k, v); });

        document.getElementById('upload-illustration').value = '';
        var itemContext = null;

        var uploaderUrl = "<?php base_url(); ?>index.php/Data/illustration/";
        $.ajax({
            url: uploaderUrl, type:"POST", dataType:'json',
            data: fileData, cache: false,
            processData: false, contentType: false,

            success: function(result){
                console.log(result);

                var context = $(itemContext);
                if (result[0].success){
                  context.find('.progress').remove();
                  context.find('.upl-item-close').show(0);
                  //context.find('.list-group-item-heading').html("File Name: "+result[0].data.file_name+"<br /><small>Click to view document.</small>");
                  context.find('.list-group-item-heading').html("File Name: "+result[0].input.name+"<br /><small>Click to view document.</small>");
                  context.attr('data-tgt', result[0].link);
                } else {
                  var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                  context.find('.progress').html(replacement);
                  context.find('.list-group-item-heading').html("Upload failed."+result[0].error);
                  context.find('.upl-item-close').show(0);
                }
            },
            error: function(){

                var context = $(itemContext);
                var replacement = '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>';
                context.find('.progress').html(replacement);
                context.find('.list-group-item-heading').html("Upload failed. Server Error");
                context.find('.upl-item-close').show(0);
            },
            beforeSend: function(){

              var htm = '<a href="#" id="upl-item'+uploadIndex+'" class="list-group-item upl-list-item" data-tgt="">';
              htm += '<button type="button" class="close upl-item-close" style="display:none" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
              htm += '<p class="list-group-item-heading">Uploading File...</p>';
              htm += '<div class="progress">';
              htm += '<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>';
              htm += '</a>';
              $('#uploaded-illustrations').append(htm);
              $('.upl-item-close').click(function(){
                  $(this).parent().remove();
              });

              $('.upl-list-item').click(function(){
                  var tgt = $(this).attr('data-tgt');
                  if (tgt == "" || tgt == null){
                      // Don't do anything!
                  } else {
                    var html = "<iframe width='100%' height='500' src='"+tgt+"'></iframe>";

                    $('#preview-dialog').find(".modal-body").html(html);
                    $('#preview-dialog').modal('show');
                  }
              });

              itemContext = "#upl-item"+uploadIndex;

              uploadIndex++;
            }

        });

    });

    $('#select-look-upon').change(function(){
        var value = $(this).val();
        if (value > 0){
          var htm = '<li class="list-group-item"><button type="button" class="close look-close"><span aria-hidden="true">&times;</span></button><span class="text">'+$('#select-look-upon option:selected').text()+'</span></li>';
          $('#items-to-look-upon').append(htm);
          $('.look-close').click(function(){
              $(this).parent().remove();
          });
        }
    });

    $('#select-nolook-upon').change(function(){
        var value = $(this).val();
        if (value > 0){
          var htm = '<li class="list-group-item"><button type="button" class="close look-close"><span aria-hidden="true">&times;</span></button><span class="text">'+$('#select-nolook-upon option:selected').text()+'</span></li>';
          $('#items-to-nolook-upon').append(htm);
          $('.look-close').click(function(){
              $(this).parent().remove();
          });
        }
    });

    $('#prr-selection').change(function(){
        var value = $(this).val();
        if (value == 2){
            $('#prr-table').show(0);
        } else {
            $('#prr-table').hide(0);
        }
    });

    $('#add-prr-item').click(function(){
        var desc = $('.add-prr-desc').val();
        var amt  = $('.add-prr-amt').val();

        if (desc == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter description." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (amt == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter amount." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
          var htm = "<tr class='prr-item-tr' align='left'><td>"+desc+"</td><td>"+amt+"</td><td>";
          htm += '<button type="button" class="close prr-item-close"><span aria-hidden="true">&times;</span></button>';
          htm += '</td></tr>';

          $('.prr-table-list tbody').append(htm);
          $('.prr-item-close').click(function(){
              $(this).parent().parent().remove();
          });

          $('.add-prr-desc').val("");
          $('.add-prr-amt').val("");
        }

    });

    $('.input-event').click(function(ev){
        var me = $(this);

        var input = me.parent().parent().parent().find('input');
        var typeD = me.parent().parent().parent().find('select');

        if (input.val() == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter an event." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
            var body = me.parent().parent().parent().parent();

            var text = input.val();
            if (typeD.val() != "0" || typeD.val() != 0){
              text = typeD.val()+": "+text;
            }

            var li = '<li class="list-group-item event-item">';
            li += '<button type="button" class="close event-item-close" ><span aria-hidden="true">&times;</span></button>';
            li += '<span class="text">'+text+'</span></li>';

            body.find('.list-group').append(li); input.val("");
            $('.event-item-close').click(function(){ $(this).parent().remove(); });

            me.parent().parent().parent().find('input').val("");
            me.parent().parent().parent().find('select').prop("selectedIndex", 0);
        }
    });

    $('.input-reason').click(function(ev){
        var me = $(this);

        var input = me.parent().parent().parent().find('input');
        var typeD = me.parent().parent().parent().find('select');

        if (input.val() == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter an reason." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
            var body = me.parent().parent().parent();

            var text = input.val();
            if (typeD.val() != "0" || typeD.val() != 0){
              text = typeD.val()+": "+text;
            }

            var li = '<li class="list-group-item reason-item">';
            li += '<button type="button" class="close reason-item-close" ><span aria-hidden="true">&times;</span></button>';
            li += '<span class="text">'+text+'</span></li>';

            body.find('.list-group').append(li); input.val("");
            $('.reason-item-close').click(function(){ $(this).parent().remove(); });

            me.parent().parent().parent().find('input').val("");
            me.parent().parent().parent().find('select').prop("selectedIndex", 0);
        }
    });

    $('#add-issue-disadv-btn').click(function(){
        var issue = $('#issue-disadv-issue').val();
        var recom = $('#issue-disadv-recomm').val();

        if (issue == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter an issue." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else if (recom == ""){
          $.notify({ icon: "pe-7s-info", message: "Please enter a recommendation." },{
              type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
          });
        } else {
          var html = "<tr class='issue-disadv' align='left'>";
          html += "<td>"+issue+"</td><td>"+recom+"</td>";
          html += "<td><button class='btn btn-danger btn-xs btn-fill issue-disadv-close'>X</button></td></tr>";

          $('#disadv-recomms-table').append(html);
          $('.issue-disadv-close').click(function(){
              var parent = $(this).parent().parent();
              parent.remove();
          });

          $('#issue-disadv-issue').val("");
          $('#issue-disadv-recomm').val("");
        }
    });

    $('#add-more-reason-btn').click(function(){
        var parent = $(this).parent().parent();
        var formData = []; var i = 0;

        var needID = parent.find('.form-control:eq(0)').val();
        var needText = parent.find('select option:selected').text();
        var reason = parent.find('.form-control:eq(1)').val();

        var htm = "<tr data-reason='"+needID+"'><td>"+needText+"</td><td>"+reason+"</td><td>";
        htm += '<button type="button" class="close reason-close"><span aria-hidden="true">×</span></button></tr>';
        parent.find('tbody').append(htm);

        parent.find('.form-control:eq(0)').val("0");
        parent.find('.form-control:eq(1)').val("");

        $('.reason-close').click(function(){
            $(this).parent().parent().remove();
        });
    });

    $('#add-more-amt-btn').click(function(){
        var parent = $(this).parent().parent();
        var formData = []; var i = 0;

        var needID = parent.find('.form-control:eq(0)').val();
        var needText = parent.find('select option:selected').text();
        var desc = parent.find('.form-control:eq(1)').val();
        var amt = parent.find('.form-control:eq(2)').val();

        var htm = "<tr data-reason='"+needID+"'><td>"+needText+"</td><td>"+desc+"</td><td>"+amt+"</td><td>";
        htm += '<button type="button" class="close amt-close"><span aria-hidden="true">×</span></button></tr>';
        parent.find('tbody').append(htm);

        parent.find('.form-control:eq(0)').val("0");
        parent.find('.form-control:eq(1)').val("");
        parent.find('.form-control:eq(2)').val("");

        $('.amt-close').click(function(){
            $(this).parent().parent().remove();
        });
    });
});
</script>
