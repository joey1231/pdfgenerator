<div class='page-ff' id='page-planb' style='margin-top:30px; display:none'>
  <div class="row">
    <div class="col-md-12">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
       <li role="presentation" class="active"><a href="#planb-client" aria-controls="home" role="tab" data-toggle="tab">
         Client's Plan B
       </a></li>
       <li role="presentation"><a href="#planb-partner" aria-controls="home" role="tab" data-toggle="tab">
         Partner's Plan B
       </a></li>
      </ul>
    </div>
  </div>

  <?php $pb = $_data->planb; ?>

  <!-- Tab panes -->
  <div class="tab-content" style="padding-left: 15px; padding-right: 15px;">
    <div role="tabpanel" class="tab-pane fade in active" id="planb-client">

      <?php $p = $pb->client; ?>
      <?php //print_r($p); ?>
      <div class='row plan-b-details'>
          <div class='col-md-12'>

              <div class='row col-md-12'>
                <ul class="nav nav-tabs" role="tablist">
                 <li role="presentation" class="active"><a href="#pb-health-a" aria-controls="home" role="tab" data-toggle="tab">
                   Health
                 </a></li>
                 <li role="presentation"><a href="#pb-income-a" aria-controls="home" role="tab" data-toggle="tab">
                   Income Protection
                 </a></li>
                 <li role="presentation"><a href="#pb-mortgage-a" aria-controls="home" role="tab" data-toggle="tab">
                   Mortgage Protection
                 </a></li>
                 <li role="presentation"><a href="#pb-trauma-a" aria-controls="home" role="tab" data-toggle="tab">
                   Trauma
                 </a></li>
                 <li role="presentation"><a href="#pb-tpd-a" aria-controls="home" role="tab" data-toggle="tab">
                   TPD
                 </a></li>
                 <li role="presentation"><a href="#pb-life-a" aria-controls="home" role="tab" data-toggle="tab">
                   Life
                 </a></li>
                </ul>
              </div>

              <?php $o = $p->items; ?>
              <div class='row'>
                  <div class="tab-content col-md-12">

                      <?php $a = $o[0]; ?>
                      <div role="tabpanel" class="tab-pane fade in active" id="pb-health-a">
                          <div class='row'>
                              <?php $c = $a->checkboxes; ?>
                              <div class='col-md-6'>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                    Covering medical costs
                                  </label>
                                </div>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                    Covering specialists costs
                                  </label>
                                </div>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                    Cover for children
                                  </label>
                                  <div class="checkbox text-left">
                                    <label><input type="checkbox" <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                      So you can elect to have medical treatment when you want and need rather than having to wait under the public system.
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <?php $c = $a->inputs; ?>
                              <div class='col-md-6'>
                                  <div class='form-group'>
                                    <label>Excess:</label>
                                    <input type='text' class='form-control' value="<?php echo $c[0]->value; ?>" />
                                  </div>
                                  <div class='form-group'>
                                    <label>Test and Specialists:</label><br />
                                    <div class="btn-group" data-toggle="buttons" align='center'>
                                      <label class="btn btn-info <?php if ($c[2]->value == "yes"){ echo "active"; } ?>" data-fld=''>
                                        <input type="radio" autocomplete="off" value="yes" <?php if ($c[2]->value == "yes"){ echo "checked='checked'"; } ?> /> Yes
                                      </label>
                                      <label class="btn btn-info <?php if ($c[2]->value == "no"){ echo "active"; } ?>" data-fld=''>
                                        <input type="radio" autocomplete="off" value="no"  <?php if ($c[2]->value == "no"){ echo "checked='checked"; } ?> /> No
                                      </label>
                                   </div>
                                  </div>
                                  <div class='form-group'>
                                    <label>Children:</label>
                                    <input type='text' class='form-control' value="<?php echo $c[1]->value; ?>" />
                                  </div>
                              </div>
                          </div>
                      </div>
                      <?php $a = $o[1]; ?>
                      <div role="tabpanel" class="tab-pane fade" id="pb-income-a">
                        <div class='row'>
                            <?php $c = $a->checkboxes; ?>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld" >
                                  Maintaining financial lifestyle/financial security
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining Kiwisaver contributions
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Cover for redundancy
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?>  class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                            </div>
                            <?php $c = $a->inputs; ?>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Income:</label>
                                  <input type='text'  value="<?php echo $c[0]->value; ?>" class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Waiting Period:</label>
                                  <select class="form-control">
                                    <option>2 weeks</option>
                                    <option>4 weeks</option>
                                    <option>8 weeks</option>
                                    <option>13 weeks</option>
                                    <option>26 weeks</option>
                                    <option>52 weeks</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Benefit Period:</label>
                                  <div class='row'>
                                    <div class='col-md-6'>
                                      <label>Period Type:</label>
                                      <select class='form-control'>
                                        <option value='0'>No. of Years</option>
                                        <option value='1'>Age Limit</option>
                                      </select>
                                    </div>
                                    <div class='col-md-6'>
                                      <label>Period (in years):</label>
                                      <input type='number' min='0' step='1' value='0' class='form-control' />
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php $a = $o[2]; ?>
                      <div role="tabpanel" class="tab-pane fade" id="pb-mortgage-a">
                        <div class='row'>
                            <?php $c = $a->checkboxes; ?>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining financial lifestyle/financial security
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining Kiwisaver contributions
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Cover for redundancy
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                              <div class="form-group">
                                <label>Mortgage Plan Type:</label>
                                <select class='form-control'>
                                  <option>Agreed Value</option>
                                  <option>Indemnity</option>
                                </select>
                              </div>
                                <div class='form-group'>
                                  <label>Monthly replacements:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Waiting Period:</label>
                                  <select class="form-control">
                                    <option>2 weeks</option>
                                    <option>4 weeks</option>
                                    <option>8 weeks</option>
                                    <option>13 weeks</option>
                                    <option>26 weeks</option>
                                    <option>52 weeks</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Benefit Period:</label>
                                  <div class='row'>
                                    <div class='col-md-6'>
                                      <label>Period Type:</label>
                                      <select class='form-control'>
                                        <option value='0'>No. of Years</option>
                                        <option value='1'>Age Limit</option>
                                      </select>
                                    </div>
                                    <div class='col-md-6'>
                                      <label>Period (in years):</label>
                                      <input type='number' min='0' step='1' value='0' class='form-control' />
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php $a = $o[3]; ?>
                      <div role="tabpanel" class="tab-pane fade" id="pb-trauma-a">
                        <div class='row'>
                            <?php $c = $a->checkboxes; ?>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Ability to achieve goals
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining financial lifestyle
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[4]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Cover for children
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Trauma Plan Type:</label>
                                  <select class='form-control'>
                                    <option value="">Not specified.</option>
                                    <option>Standalone</option>
                                    <option>Accelerated</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Income Support:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Savings Booster:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Cash Reserve:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php $a = $o[4]; ?>
                      <div role="tabpanel" class="tab-pane fade" id="pb-tpd-a">
                        <div class='row'>
                          <?php $c = $a->checkboxes; ?>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Ability to achieve goals
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining financial lifestyle
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[4]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining Kiwisaver
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Pension completion:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Cash Reserve:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>
                      <?php $a = $o[5]; ?>
                      <div role="tabpanel" class="tab-pane fade" id="pb-life-a">
                        <div class='row'>
                            <?php $c = $a->checkboxes; ?>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"   <?php if ($c[0]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"   <?php if ($c[1]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"   <?php if ($c[2]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Providing an income for surviving partner or children
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"   <?php if ($c[3]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Providing an education fund for children
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox"  <?php if ($c[4]->checked == "true"){ echo "checked='checked'"; } ?> class="info-fld">
                                  Payment of funeral costs
                                </label>
                              </div>
                            </div>
                            <?php $c = $a->inputs; ?>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' value='<?php echo $c[0]->value; ?>' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Final expenses:</label>
                                  <input type='text' value='<?php echo $c[1]->value; ?>' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Education Fund:</label>
                                  <input type='text' value='<?php echo $c[2]->value; ?>' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Estate Resolution:</label>
                                  <input type='text' value='<?php echo $c[3]->value; ?>' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Income Fund:</label>
                                  <input type='text' value='<?php echo $c[4]->value; ?>' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' value='<?php echo $c[5]->value; ?>' class='form-control' />
                                </div>
                                <!-- <h4>Ongoing Life</h4>
                                <div class='form-group'>
                                  <label>Monthly:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Term:</label>
                                  <input type='text' class='form-control' />
                                </div> -->
                                <h4>Survivor's Income</h4>
                                <div class='form-group'>
                                  <label>Monthly:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Term:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>

                  </div>
              </div>

          </div>
      </div>


    </div>

    <div role='tabpanel' class='tab-pane fade' id='planb-partner'>

      <div class='row plan-b-details'>
          <div class='col-md-12'>

              <div class='row col-md-12'>
                <ul class="nav nav-tabs" role="tablist">
                 <li role="presentation" class="active"><a href="#pb-health-b" aria-controls="home" role="tab" data-toggle="tab">
                   Health
                 </a></li>
                 <li role="presentation"><a href="#pb-income-b" aria-controls="home" role="tab" data-toggle="tab">
                   Income Protection
                 </a></li>
                 <li role="presentation"><a href="#pb-mortgage-b" aria-controls="home" role="tab" data-toggle="tab">
                   Mortgage Protection
                 </a></li>
                 <li role="presentation"><a href="#pb-trauma-b" aria-controls="home" role="tab" data-toggle="tab">
                   Trauma
                 </a></li>
                 <li role="presentation"><a href="#pb-tpd-b" aria-controls="home" role="tab" data-toggle="tab">
                   TPD
                 </a></li>
                 <li role="presentation"><a href="#pb-life-b" aria-controls="home" role="tab" data-toggle="tab">
                   Life
                 </a></li>
                </ul>
              </div>

              <div class='row'>
                  <div class="tab-content col-md-12">

                      <div role="tabpanel" class="tab-pane fade in active" id="pb-health-b">
                          <div class='row'>
                              <div class='col-md-6'>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" class="info-fld">
                                    Covering medical costs
                                  </label>
                                </div>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" class="info-fld">
                                    Covering specialists costs
                                  </label>
                                </div>
                                <div class="checkbox text-left">
                                  <label><input type="checkbox" class="info-fld">
                                    Cover for children
                                  </label>
                                  <div class="checkbox text-left">
                                    <label><input type="checkbox" class="info-fld">
                                      So you can elect to have medical treatment when you want, rather than having to wait for treatment when the public health system will allow you to be treated.
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class='col-md-6'>
                                  <div class='form-group'>
                                    <label>Excess:</label>
                                    <input type='text' class='form-control' />
                                  </div>
                                  <div class='form-group'>
                                    <label>Test and Specialists:</label><br />
                                    <div class="btn-group" data-toggle="buttons" align='center'>
                                      <label class="btn btn-info" data-fld=''>
                                        <input type="radio" autocomplete="off" value="yes" checked> Yes
                                      </label>
                                      <label class="btn btn-info" data-fld=''>
                                        <input type="radio" autocomplete="off" value="no"> No
                                      </label>
                                   </div>
                                  </div>
                                  <div class='form-group'>
                                    <label>Children:</label>
                                    <input type='text' class='form-control' />
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="pb-income-b">
                        <div class='row'>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining financial lifestyle/financial security
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining Kiwisaver contributions
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Cover for redundancy
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Income:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Waiting Period:</label>
                                  <select class="form-control">
                                    <option>2 weeks</option>
                                    <option>4 weeks</option>
                                    <option>8 weeks</option>
                                    <option>13 weeks</option>
                                    <option>26 weeks</option>
                                    <option>52 weeks</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Benefit Period:</label>
                                  <div class='row'>
                                    <div class='col-md-6'>
                                      <label>Period Type:</label>
                                      <select class='form-control'>
                                        <option value='0'>No. of Years</option>
                                        <option value='1'>Age Limit</option>
                                      </select>
                                    </div>
                                    <div class='col-md-6'>
                                      <label>Period (in years):</label>
                                      <input type='number' min='0' step='1' value='0' class='form-control' />
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="pb-mortgage-b">
                        <div class='row'>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining financial lifestyle/financial security
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining Kiwisaver contributions
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Cover for redundancy
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group">
                                  <label>Mortgage Plan Type:</label>
                                  <select class='form-control'>
                                    <option>Agreed Value</option>
                                    <option>Indemnity</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Monthly replacements:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Waiting Period:</label>
                                  <select class="form-control">
                                    <option>2 weeks</option>
                                    <option>4 weeks</option>
                                    <option>8 weeks</option>
                                    <option>13 weeks</option>
                                    <option>26 weeks</option>
                                    <option>52 weeks</option>
                                  </select>
                                </div>
                                <div class='form-group'>
                                  <label>Benefit Period:</label>
                                  <div class='row'>
                                    <div class='col-md-6'>
                                      <label>Period Type:</label>
                                      <select class='form-control'>
                                        <option value='0'>No. of Years</option>
                                        <option value='1'>Age Limit</option>
                                      </select>
                                    </div>
                                    <div class='col-md-6'>
                                      <label>Period (in years):</label>
                                      <input type='number' min='0' step='1' value='0' class='form-control' />
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>

                      <div role="tabpanel" class="tab-pane fade" id="pb-trauma-b">
                        <div class='row'>
                            <div class='col-md-6'>

                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Ability to achieve goals
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining financial lifestyle
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Cover for children
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                              <div class='form-group'>
                                <label>Trauma Plan Type:</label>
                                <select class='form-control'>
                                  <option value="">Not specified.</option>
                                  <option>Standalone</option>
                                  <option>Accelerated</option>
                                </select>
                              </div>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Income Support:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Savings Booster:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Cash Reserve:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="pb-tpd-b">
                        <div class='row'>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Ability to achieve goals
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining financial lifestyle
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining Kiwisaver
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Pension completion:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Cash Reserve:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="pb-life-b">
                        <div class='row'>
                            <div class='col-md-6'>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Repaying all debt
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Maintaining debt/mortgage repayments
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Providing an income for surviving partner or children
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Providing an education fund for children
                                </label>
                              </div>
                              <div class="checkbox text-left">
                                <label><input type="checkbox" class="info-fld">
                                  Payment of funeral costs
                                </label>
                              </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group'>
                                  <label>Debts:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Final expenses:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Education Fund:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Estate Resolution:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Income Fund:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Total:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <h4>Ongoing Life</h4>
                                <div class='form-group'>
                                  <label>Monthly:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Term:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <h4>Survivor's Income</h4>
                                <div class='form-group'>
                                  <label>Monthly:</label>
                                  <input type='text' class='form-control' />
                                </div>
                                <div class='form-group'>
                                  <label>Term:</label>
                                  <input type='text' class='form-control' />
                                </div>
                            </div>
                        </div>
                      </div>

                  </div>
              </div>

          </div>
      </div>

    </div>
  </div>

</div>

<script>
var fetchPlanB = function(){
    var data = { client:{}, partner:{} };
    var context = $('#planb-client');

    data.client.mode = context.find('.provide-details').is(":checked") ? 1 : 0;
    data.client.items = [];

    context.find('.plan-b-details .tab-pane').each(function(){
        var item = {};
        item.id = $(this).attr('id');

        item.checkboxes = [];
        $(this).find('.checkbox').each(function(){
            var checkbox = {}; var checkBoxContainer = $(this).find('label');
            checkbox.checked = checkBoxContainer.find('input').is(':checked') ? "true" : "false";
            checkbox.text = checkBoxContainer.html();

            var regex = /(<([^>]+)>)/ig;
            checkbox.text = checkbox.text.replace(regex, "").trim();
            item.checkboxes.push(checkbox);
        });

        item.inputs = [];
        $(this).find('input.form-control').each(function(){
            var itemData = {};
            itemData.value = $(this).val();
            itemData.text  = $(this).parent().find('label').html();

            item.inputs.push( itemData );
        });

        $(this).find('select').each(function(){
            var itemData = {};
            itemData.value = $(this).val();
            itemData.text  = $(this).parent().find('label').html();

            item.inputs.push( itemData );
        });

        $(this).find('.btn-group').each(function(){

            var itemData = {};
            itemData.value = null;
            itemData.text  = $(this).parent().find('label').html();

            $(this).find('.btn.active').each(function(){
                itemData.value = $(this).find('input').val();
            });
            item.inputs.push( itemData );
        });


        data.client.items.push(item);
    });

    context = $('#planb-partner');

    data.partner.mode = context.find('.provide-details').is(":checked") ? 1 : 0;
    data.partner.items = [];

    context.find('.plan-b-details .tab-pane').each(function(){
        var item = {};
        item.id = $(this).attr('id');

        item.checkboxes = [];
        $(this).find('.checkbox').each(function(){
            var checkbox = {}; var checkBoxContainer = $(this).find('label');
            checkbox.checked = checkBoxContainer.find('input').is(':checked') ? "true" : "false";
            checkbox.text = checkBoxContainer.html();

            var regex = /(<([^>]+)>)/ig;
            checkbox.text = checkbox.text.replace(regex, "").trim();
            item.checkboxes.push(checkbox);
        });

        item.inputs = [];
        $(this).find('input.form-control').each(function(){
            var itemData = {};
            itemData.value = $(this).val();
            itemData.text  = $(this).parent().find('label').html();

            item.inputs.push( itemData );
        });

        $(this).find('select').each(function(){
            var itemData = {};
            itemData.value = $(this).val();
            itemData.text  = $(this).parent().find('label').html();

            item.inputs.push( itemData );
        });

        $(this).find('.btn-group').each(function(){

            var itemData = {};
            itemData.value = null;
            itemData.text  = $(this).parent().find('label').html();

            $(this).find('.btn.active').each(function(){
                itemData.value = $(this).find('input').val();
            });
            item.inputs.push( itemData );
        });


        data.partner.items.push(item);
    });


    return data;
};

var acceptedParents = [
  "pb-trauma-b", "pb-tpd-b", "pb-life-b",
  "pb-trauma-a", "pb-tpd-a", "pb-life-a"
];


$(document).ready(function(){


    $('#planb-client input, #planb-partner input').change(function(){

        var parent = $(this).parent().parent().parent().parent();
        if (parent.attr('id') == null || parent.attr('id') == ""){
            // Don't do anything
        } else {
            if (acceptedParents.indexOf(parent.attr('id')) > -1){
                var formalParent = "#"+parent.attr('id');
                var context = $(formalParent);

                var total = 0, counter = 0;
                var list = context.find('input[type=number], input[type=text]');
                var lastItemIndex = list.length - 1;

                if (parent.attr('id') == "pb-life-b" || parent.attr('id') == "pb-life-a"){
                    lastItemIndex = lastItemIndex - 2;
                }

                list.each(function(){
                    if (lastItemIndex == counter){
                        $(this).val(total);
                    } else if (lastItemIndex > counter){

                        if (isNaN($(this).val()) || $(this).val() == ""){
                            total += 0;
                        } else {
                            total += parseFloat( $(this).val() );
                        }
                    }

                    counter++;
                });
            }
        }


    });


    $('.provide-details').change(function(){
        if ($(this).is(":checked")){ // Show the shit!
            var parent = $(this).parent().parent().parent().parent().parent();
            parent.find('.plan-b-details').show(0);
        } else {
            var parent = $(this).parent().parent().parent().parent().parent();
            parent.find('.plan-b-details').hide(0);
        }
    });


});
</script>
