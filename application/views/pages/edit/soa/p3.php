<div class='page-ff' style='margin-top:30px;display:none' id='page-third'>

    <div id='advice-main' class='row'>
      <div class='col-md-12'>

        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#pg3-desc" aria-controls="home" role="tab" data-toggle="tab">Brief Description</a></li>
          <li role="presentation"><a href="#pg3-items" aria-controls="profile" role="tab" data-toggle="tab">Item Recommendations</a></li>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="pg3-desc">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                  <p>You can put your own custom description on why have you given the said recommendations.
                      But you can generate a description automatically by clicking the button below. Make sure that you have
                      imported a Fact Find document first before auto-generating.</p>
                  <button class="btn btn-block btn-default" id='generate-reason-text'>
                      Generate Reason Text
                  </button>
                </div>
                <div class='col-md-8 col-sm-8'>
                  <textarea id="reason-text" class="form-control" rows="9" style="resize:none" placeholder="Enter reasons for recommendation..."></textarea>
                </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="pg3-items">
            <div class='row'>
                <div class='col-md-6'>
                  <h4>Add up an Advice Item for Recommendation</h4>
                  <div>
                      <div class='form-group' align='left'>
                          <label>Select Advice Item:</label>
                          <select class='sel-advice-item form-control'>
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
                      <div class='form-group'>
                        <!-- <button class='btn btn-primary' id='add-prod-recomm' style='float:right'>Add Product for Recommendation</button> -->
                      </div>
                  </div>
                </div>
                <div class='col-md-6'>
                  <h4>Products to be Recommended:</h4>
                  <div class="list-group recommended-products" style='font-size:90%' align='left'>

                  </div>
                </div>
            </div>

          </div>
        </div>




      </div>
    </div>

    <div id='advice-items-container'>

    </div>

</div>


<script>

var fetchPartTwoSOA = function(){
    var data = [];

    $('#advice-items-container .advice-item-form').each(function(){
        var product_id = $(this).attr('data-id');

        $(this).find('.tab-pane').each(function(){
            var item = {};
            item.id = product_id;
            item.owner = $(this).attr('data-owner');
            item.active = $(this).find('input[type=checkbox]').is(":checked") ? "true" : "false";

            item.details = [];
            item.settings = [];

            $(this).find('.recommendation-text-html .recom-text-item-htm').each(function(){
                var detailItem = {};
                detailItem.type = $(this).attr('data-type');
                detailItem.text = $(this).html();

                item.details.push( detailItem );
            });

            $(this).find('.fld-ceipl').each(function(){
                item.settings.push( $(this).val() );
            });

            data.push(item);
        });
    });

    var finalData = {};
    finalData.items = data;
    finalData.reasonText = $('#reason-text').val();

    return finalData;
};


$(document).ready(function(){

    $('.sel-advice-item').change(function(){
    //$('#add-prod-recomm').click(function(){
        var id = $('.sel-advice-item').val();
        if (id > 0){

            var isThere = false;
            $('#advice-main .list-group-item').each(function(){
                var id_item = $(this).attr('data-id');
                if (parseInt(id_item) == id){
                    isThere = true;
                }
            });

            if (isThere){
              $.notify({ icon: "pe-7s-info", message: "Product is already there!" },{
                  type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
              });
            } else {
                var ht = '<a href="#" class="list-group-item prod-item-open" data-id='+id+'>';
                ht += '<button type="button" class="close close-recom-txt-item" ><span aria-hidden="true">&times;</span></button>';
                ht += ''+$(".sel-advice-item option:selected").text()+'</a>';
                $('.recommended-products').append(ht);

                $.ajax({
                  url:"<?php echo base_url(); ?>index.php/Pages/recom",
                  data: { i:id },
                  success: function(data){
                    $('#advice-items-container').append(data);

                    // From the template
                    $('.close-recom-btn').click(function(){
                        $(this).parent().parent().hide('fade', 250, function(){
                            $('#advice-main').show('fade', 250);
                        });
                    });

                    $('.provider-pane-select').change(function(){
                        var value = $(this).val(); var me = $(this);
                        if (value > 0){
                            $.ajax({
                                url: "<?php echo base_url(); ?>index.php/Data/fetchselect/providerans", data:{ i:value },
                                success: function(data){
                                  me.parent().parent().parent().find('.template-provider-select')
                                      .html(data).attr('source-data', value);
                                }
                            });

                        } else {
                            $('.template-provider-select').html("<option value='-1'>Select template</option>");
                        }
                    });
                    $('.template-provider-select').change(function(){
                        var templateCont = $(this);

                        var value = $(this).val();
                        var source = $(this).attr('source-data');

                        var parent  = $(this).parent().parent();
                        var grandpa = parent.parent();

                        if (value > 0){

                            var text = grandpa.parents('.tab-pane').first().find('.provider-pane-select option:selected');
                            grandpa.find(".ready-title").val("Why "+text.html()+"?");

                            text = $(this).find('option:selected').text();
                            grandpa.find('.ready-desc').val(text);
                        }
                    });

                    // From the main
                    $('.template-question-select').change(function(){
                        var value = $(this).val(); var me = $(this);

                        var parent  = $(this).parent().parent();
                        var grandpa = parent.parent();
                        var ID = grandpa.parents('.advice-item-form').attr('data-id');

                        //console.log(grandpa.parent().parent().parent().html());

                        if (value > 0){
                            $.ajax({
                              url:"<?php echo base_url(); ?>index.php/Data/fetchSelect/question",
                              data: { i:value }, success: function(data){
                                grandpa.find('.ready-title').val(data);
                              }
                            });

                            $.ajax({
                              url:"<?php echo base_url(); ?>index.php/Data/fetchSelect/answerlist",
                              data: { q:value, i:ID }, success: function(data){
                                  parent.find('.template-answer-select').html(data);

                                  $('.template-answer-select').change(function(){
                                      var valueaaa = $(this).val();
                                      if (valueaaa > 0){
                                        $.ajax({
                                            url:"<?php echo base_url(); ?>index.php/Data/fetchSelect/answer",
                                            data: { i:valueaaa }, success: function(data){
                                              grandpa.find('.ready-desc').val(data);
                                            }
                                        });
                                      }

                                  });
                              }
                            });
                        } else {
                            parent.find('.template-answer-select').html("<option value='-1'>Select template</option>");
                        }
                    });

                    $('.ready-btn').unbind('click').click(function(ev){
                        var parent = $(this).parent().parent();

                        var title = parent.find('input').val();
                        var desc  = parent.find('textarea').val();

                       var html = "";
                        if (title != ""){
                            html += "<h5><b class='recom-text-item-htm' data-type='title'>"+title+"</b>";
                            html += '<button type="button" class="close close-recom-txt-item" ><span aria-hidden="true">&times;</span></button>';
                            html +="</h5>";
                        }

                       if (desc == ""){
                            html = "";
                        } else {
                            html += "<p><span class='recom-text-item-htm' data-type='body'>"+desc+"</span>";
                            html += '<button type="button" class="close close-recom-txt-item" ><span aria-hidden="true">&times;</span></button>';
                            html += "</p>";
                        }

                        if (html != ""){
                            var pops = parent.parent().parent().parent();

                            pops.find('.recommendation-text-html').append(html);

                            parent.find('input').val("");
                            parent.find('textarea').val("");

                            $('.close-recom-txt-item').click(function(ev){
                                ev.preventDefault();
                                $(this).parent().remove();
                            });
                        }

                    });


                    $('.advice-item-form input[type=checkbox]').change(function(){
                        var me = $(this);

                        if (me.is(':checked')){
                            me.parents('.tab-pane').first().find('.row').show(0);
                        } else {
                            me.parents('.tab-pane').first().find('.row').hide(0);
                        }
                    });
                  }
                });

                $('.prod-item-open').click(function(){
                    var le = $(this).attr('data-id');

                    $('#advice-items-container .advice-item-form').each(function(){
                        var ako = $(this);
                        var ako_item = ako.attr('data-id');
                        if (parseInt(ako_item) == le){

                          $('#advice-main').hide('fade', 250, function(){
                              ako.show('fade', 250);
                          });
                        }
                    });
                });

                $('.close-recom-txt-item').click(function(ev){
                    ev.preventDefault();

                    var id = $(this).parent().attr('data-id');
                    $(this).parent().remove();

                    $('#advice-items-container .advice-item-form').each(function(){
                        if ($(this).attr('data-id') == id){
                          $(this).remove();
                        }
                    });
                });
            }
        }
    });


    $('#generate-reason-text').click(function(){
        var importID = $('#import-data').attr('data-import-id');
        if (importID == ""){
            $.notify({ icon: "pe-7s-info", message: "Please import a Fact Find document first." },{
                  type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
            });
        } else {
            var pr = $("#monthly-premium-total").val();
            $.ajax({
                url: "<?php echo base_url(); ?>index.php/Data/generateReasonText/", data: { i:importID, p: pr }, success: function(data){
                    $('#reason-text').val(data);
                }, error: function(){
                  $.notify({ icon: "pe-7s-info", message: "There seems to be a problem in generating text. Server Error." },{
                        type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
                  });
                }
            });
        }
    });

});
</script>
