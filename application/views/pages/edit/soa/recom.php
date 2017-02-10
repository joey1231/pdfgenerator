<div class='row advice-item-form' data-id='<?php echo $_GET['i']; ?>' style='display:none' >
    <div class='col-md-12'>
      <a href='#' class='close-recom-btn' style='float:left;font-size:90%'>
        << Back to Recommendation Main
      </a><br />
      <h4>Your recommendation for Life Plan</h4>

      <div class='row recommeandation-setting-form' align='left'>
          <div class='col-md-12'>
            <h5>Set your recommendation settings:</h5>

            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#client-recom-<?php echo $_GET['i']; ?>" aria-controls="home" role="tab" data-toggle="tab">
                Client</a></li>
              <li role="presentation">
                <a href="#partner-recom-<?php echo $_GET['i']; ?>" aria-controls="profile" role="tab" data-toggle="tab">
                Partner</a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" data-owner='client' class="tab-pane active" id="client-recom-<?php echo $_GET['i']; ?>">
                <br />
                <div class='row' style="display:none">
                    <div class='col-md-6 col-sm-6 form-group'>
                      <label>Sum Assured:</label>
                      <div class="input-group">
                         <span class="input-group-addon">$</span>
                         <input type='number' min='0' class='form-control fld-ceipl' />
                      </div>
                    </div>
                    <div class='col-md-6 col-sm-6 form-group provider-item-parent'>
                      <label>Provider:</label>
                      <select class='form-control provider-pane-select fld-ceipl'>
                        <option value='-1'>No Provider</option>
                        <?php
                          $sql = "SELECT * FROM company_provider ORDER BY company_name ASC";
                          $query = $this->db->query($sql, array($_GET['i']));
                          if ($query->num_rows() > 0){
                              foreach($query->result() as $r){
                                  echo "<option value='".$r->idcompany_provider."'>".$r->company_name."</option>";
                              }
                          }
                        ?>
                        <option value='OTHER_PROV'>Other Provider</option>
                      </select>
                      <input type='text' class='form-control info-fld fld-ceipl' style='display:none' placeholder="Enter provider here..."/>
                    </div>
                </div>
                <div class='row' style="display:none">
                    <div class='col-md-4 col-sm-4 form-group'>
                      <label>Product:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-4 col-sm-4 form-group'>
                      <label>Benefit:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-4 col-sm-4 form-group'>
                      <label>Benefit Structure:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                </div>
                <div class='row' style="display:none">
                    <div class='col-md-3 col-sm-3 form-group'>
                      <label>Premium Structure:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 col-sm-3 form-group'>
                      <label>Optional Benefits:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 col-sm-3 form-group'>
                      <label>Policy Owner:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 col-sm-3 form-group'>
                      <label>Premium:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                </div>

                <!-- <hr /> -->

                <div class='row' align='left'>
                  <div class='col-md-6 col-sm-6'>
                    <h5>Enter your recommendations here.</h5>
                    <div>
                      <div class='form-group'>
                        <label>Enter Title/Question:</label>
                        <input type='text' class='form-control ready-title' />
                      </div>
                      <div class='form-group'>
                        <label>Enter Description/Answer:</label>
                        <textarea class='form-control  ready-desc' rows="12"></textarea>
                      </div>
                      <div class='form-group'>
                        <button class='btn btn-primary ready-btn' style='float:right'>Add Recommendation</button>
                      </div>
                    </div>
                    <br /><br />
                    <h5>or you can import a template...</h5>
                    <div>
                      <div class='form-group'>
                        <label>Select Title/Question Template:</label>
                        <select class='form-control template-question-select'>
                          <option value='-1'>Select template</option>
                          <?php
                            $sql = "SELECT DISTINCT pq.product_questioncol, pq.idproduct_question FROM product_answers AS pa
                            LEFT JOIN product_question AS pq ON pa.product_question_idproduct_question=pq.idproduct_question
                            WHERE pa.product_category_idproduct_category=?";
                            $query = $this->db->query($sql, array($_GET['i']));
                            if ($query->num_rows() > 0){
                                foreach($query->result() as $r){
                                    $text = $r->product_questioncol;
                                    if (strlen($text) > 255){
                                        $text = substr($text, 0, 255);
                                        $text .= "...";
                                    }

                                    echo "<option value='".$r->idproduct_question."'>".$text."</option>";
                                }
                            }
                          ?>
                        </select>
                      </div>
                      <div class='form-group'>
                          <label>Select Description/Answer Template:</label>
                          <select class='form-control template-answer-select'>
                            <option value='-1'>Select template</option>
                          </select>
                      </div>
                    </div>
                    <br /><br />
                    <h5>or you use your provider's template...</h5>
                    <div>
                      <div class='form-group'>
                          <label>Select Provider Template:</label>
                          <select class='form-control template-provider-select'>
                            <option value='-1'>Select template</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-6 col-sm-6'>
                    <h5>Your recommendation text should look like this:</h5>
                    <div class="panel panel-default">
                      <div class="panel-body recommendation-text-html">

                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div role="tabpanel" data-owner='partner' class="tab-pane" id="partner-recom-<?php echo $_GET['i']; ?>">
                <br />
                <div class='row' style="display:none">
                    <div class='col-md-6 form-group'>
                      <label>Sum Assured:</label>
                      <div class="input-group">
                         <span class="input-group-addon">$</span>
                         <input type='number' min='0' class='form-control fld-ceipl' />
                      </div>
                    </div>
                    <div class='col-md-6 form-group provider-item-parent'>
                      <label>Provider:</label>
                      <select class='form-control provider-pane-select fld-ceipl'>
                        <option value='-1'>No Provider</option>
                        <?php
                          $sql = "SELECT * FROM company_provider ORDER BY company_name ASC";
                          $query = $this->db->query($sql, array($_GET['i']));
                          if ($query->num_rows() > 0){
                              foreach($query->result() as $r){
                                  echo "<option value='".$r->idcompany_provider."'>".$r->company_name."</option>";
                              }
                          }
                        ?>
                        <option value='OTHER_PROV'>Other Provider</option>
                      </select>
                      <input type='text' class='form-control info-fld fld-ceipl' style='display:none' placeholder="Enter provider here..."/>
                    </div>
                </div>
                <div class='row' style="display:none">
                    <div class='col-md-4 form-group'>
                      <label>Product:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-4 form-group'>
                      <label>Benefit:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-4 form-group'>
                      <label>Benefit Structure:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                </div>
                <div class='row' style="display:none">
                    <div class='col-md-3 form-group'>
                      <label>Premium Structure:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 form-group'>
                      <label>Optional Benefits:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 form-group'>
                      <label>Policy Owner:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                    <div class='col-md-3 form-group'>
                      <label>Premium:</label>
                      <input type='text' class='form-control fld-ceipl' />
                    </div>
                </div>

                <!-- <hr /> -->

                <div class='row' align='left'>
                  <div class='col-md-6'>
                    <h5>Enter your recommendations here.</h5>
                    <div>
                      <div class='form-group'>
                        <label>Enter Title/Question:</label>
                        <input type='text' class='form-control ready-title' />
                      </div>
                      <div class='form-group'>
                        <label>Enter Description/Answer:</label>
                        <textarea class='form-control  ready-desc' rows="12"></textarea>
                      </div>
                      <div class='form-group'>
                        <button class='btn btn-primary ready-btn' style='float:right'>Add Recommendation</button>
                      </div>
                    </div>
                    <br /><br />
                    <h5>or you can import a template...</h5>
                    <div>
                      <div class='form-group'>
                        <label>Select Title/Question Template:</label>
                        <select class='form-control template-question-select'>
                          <option value='-1'>Select template</option>
                          <?php
                            $sql = "SELECT DISTINCT pq.product_questioncol, pq.idproduct_question FROM product_answers AS pa
                            LEFT JOIN product_question AS pq ON pa.product_question_idproduct_question=pq.idproduct_question
                            WHERE pa.product_category_idproduct_category=?";
                            $query = $this->db->query($sql, array($_GET['i']));
                            if ($query->num_rows() > 0){
                                foreach($query->result() as $r){
                                    $text = $r->product_questioncol;
                                    if (strlen($text) > 255){
                                        $text = substr($text, 0, 255);
                                        $text .= "...";
                                    }

                                    echo "<option value='".$r->idproduct_question."'>".$text."</option>";
                                }
                            }
                          ?>
                        </select>
                      </div>
                      <div class='form-group'>
                          <label>Select Description/Answer Template:</label>
                          <select class='form-control template-answer-select'>
                            <option value='-1'>Select template</option>
                          </select>
                      </div>
                    </div>
                    <br /><br />
                    <h5>or you use your provider's template...</h5>
                    <div>
                      <div class='form-group'>
                          <label>Select Provider Template:</label>
                          <select class='form-control template-provider-select'>
                            <option value='-1'>Select template</option>
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-6'>
                    <h5>Your recommendation text should look like this:</h5>
                    <div class="panel panel-default">
                      <div class="panel-body recommendation-text-html">

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>





          </div>
      </div>
      <hr />
  </div>
</div>
<script>
$(document).ready(function(){
  $('.provider-item-parent select').change(function(){
      var me = $(this); var parent = me.parent();
      var value = me.val();

      if (value == "OTHER_PROV"){
          parent.find('input').show(0);
      } else {
          parent.find('input').hide(0);
      }
  });
});
</script>
