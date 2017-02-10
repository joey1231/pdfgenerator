<div class='page-ff' id='page-fourth' style='margin-top:30px; display:none'>
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#scopeservice-p1" aria-controls="home" role="tab" data-toggle="tab">
                        Scope of Service and LOA Enable
                    </a></li>
            </ul>
        </div>
    </div>

    <!-- Tab panes -->
    <div class="tab-content" style="padding-left: 15px; padding-right: 15px;">
        <div role="tabpanel" class="tab-pane fade in active" id="scope-of-advice-page">

            <div class="row">
                <div class="col-md-6 col-sm-6">

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Client's Insurance Plan</h3>
                                </div>
                            </div>

                            <div class="row" id='client-soa'>
                                <div class="col-md-12">
                                    <div class="checkbox text-left" data-fld='personal'>
                                        <label>
                                            <input type="checkbox" class="info-fld" data-fld='personal'> Personal
                                        </label>
                                    </div>
                                    <div class="checkbox text-left" data-fld='business'>
                                        <label>
                                            <input type="checkbox" class="info-fld"> Self Employed / Business
                                        </label>
                                    </div>
                                    <div class="checkbox text-left" data-fld='other'>
                                        <label>
                                            <input type="checkbox" class="info-fld"> Other
                                        </label>
                                    </div>
                                    <div class="clearfix" style="margin-top:20px">
                                        <label>Describe client's insurance plan:</label>
                                        <textarea class="form-control" style="resize:none" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="text-left">Partner's Insurance Plan</h3>
                                </div>
                            </div>

                            <div class="row" id='partner-soa'>
                                <div class="col-md-12">
                                    <div class="checkbox text-left" data-fld='personal'>
                                        <label>
                                            <input type="checkbox" class="info-fld" data-fld='life'> Personal
                                        </label>
                                    </div>
                                    <div class="checkbox text-left" data-fld='business'>
                                        <label>
                                            <input type="checkbox" class="info-fld"> Self Employed / Business
                                        </label>
                                    </div>
                                    <div class="checkbox text-left" data-fld='other'>
                                        <label>
                                            <input type="checkbox" class="info-fld"> Other
                                        </label>
                                    </div>
                                    <div class="clearfix" style="margin-top:20px">
                                        <label>Describe partner's insurance plan:</label>
                                        <textarea class="form-control" style="resize:none" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <!--
                    <div class="row">
                      <div class="col-md-4">
                        <h5 class="text-left">Scope of Advice</h5>
                        <div class="checkbox text-left" data-fld='life'>
                          <label>
                            <input type="checkbox" class="info-fld" data-fld='life'> Life
                          </label>
                        </div>
                        <div class="checkbox text-left" data-fld='trauma'>
                          <label>
                            <input type="checkbox" class="info-fld"> Trauma
                          </label>
                        </div>
                        <div class="checkbox text-left" data-fld='tpd'>
                          <label>
                            <input type="checkbox" class="info-fld"> TPD
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5 class="text-left">&nbsp;</h5>
                        <div class="checkbox text-left" data-fld='income'>
                          <label>
                            <input type="checkbox" class="info-fld"> Income Protection
                          </label>
                        </div>
                        <div class="checkbox text-left" data-fld='mortgage'>
                          <label>
                            <input type="checkbox" class="info-fld"> Mortgage Protection
                          </label>
                        </div>
                        <div class="checkbox text-left" data-fld='health'>
                          <label>
                            <input type="checkbox" class="info-fld"> Health
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <h5 class="text-left">Is this advice limited?</h5>
                      </div>
                      <div class='col-md-7'>
                        <div class="btn-group" data-toggle="buttons" align='center'>
                          <label class="btn btn-info" data-fld='advicelimited'>
                            <input type="radio" autocomplete="off" value="yes" checked> Yes
                          </label>
                          <label class="btn btn-info" data-fld='advicelimited'>
                            <input type="radio" autocomplete="off" value="no"> No
                          </label>
                       </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <h5 class="text-left">If yes, why?</h5>
                      </div>
                      <div class="col-md-7">
                        <textarea class="form-control info-fld" data-fld='advicewhy'></textarea>
                      </div>
                    </div>

                    <br>

                    <div class="row">
                      <div class="col-md-4">
                        <h5 class="text-left">Topics discussed and NOT included in my Statement of Advice</h5>
                      </div>
                      <div class="col-md-7">
                        <textarea class="form-control info-fld" data-fld='topicsnotdiscuss'></textarea>
                      </div>
                    </div>
                  -->
                </div>

                <div class="col-md-6 col-sm-6" >
                    <h3 class="text-left">Generate Letter of Authority</h3>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox" class="info-fld" id="enableLOA" data-fld='life'> Do you want to generate a Letter of Authority? (Check if YES)
                        </label>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox" class="info-fld" id="enableLimitedAdvice"> Is this a limited advice transaction? (Check if YES)
                        </label>
                    </div>
                    <div style="display: none;" id="limitations">
                        <h3 class="text-left">Limitations</h3>
                        <div class="form-group">
                            <select class="form-control" id="limtations-dd" multiple>
                                <option>You have instructed me not to determine the suitablity of my financial adviser servies to your particular circumstances</option>
                                <option>You acknowledge that you have chosen not to disclose all of the information sought by me and that the suitablity of my financial adviser services to your circumstances is based only upon that information which you have provided</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id='limit-text-form' style='display:none'>
                        <label>Specify limitations on the textbox below:</label>
                        <textarea class="form-control" style="resize:none" rows="8"></textarea>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    var fetchFourthItem = function(){
        var data = {};

        // Fetch client SOA
        data.client = {};
        $('#client-soa textarea').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){ data.client[fieldName] = $(this).val();}
        });

        $('#client-soa .btn-group .btn.active').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){ data.client[fieldName] = $(this).find('input').val();}
        });

        $('#client-soa .checkbox').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){

                if ($(this).find('input').is(":checked")){
                    data.client[fieldName] = "yes";
                } else { data.client[fieldName] = "no"; }

            }
        });


        // Fetch partner SOA
        data.partner = {};
        $('#partner-soa textarea').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){ data.partner[fieldName] = $(this).val();}
        });

        $('#partner-soa .btn-group .btn.active').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){ data.partner[fieldName] = $(this).find('input').val();}
        });

        $('#partner-soa .checkbox').each(function(){
            var fieldName = $(this).attr('data-fld');
            if (fieldName != "" || fieldName != null){
                if ($(this).find('input').is(":checked")){
                    data.partner[fieldName] = "yes";
                } else { data.partner[fieldName] = "no"; }
            }
        });


        // Fetch enable switch for loa
        data.loa = $('#enableLOA').is(":checked") ? "yes" : "no";

        data.planDescription = {};
        data.planDescription.client = $('#client-soa textarea').val();
        data.planDescription.partner = $('#partner-soa textarea').val();

        data.limitations = {};
        data.limitations.hasLimits = $('#enableLimitedAdvice').is(":checked") ? "yes" : "no";
        data.limitations.limitDescription = $('#limit-text-form textarea').val();
        data.limitations.selectedLimits = $('#limtations-dd').val();

        console.log(data);

        return data;
    };


    $(document).ready(function(){
        $('#enableLimits').change(function(){
            var checked = $(this).is(":checked");
            if (checked){
                $('#limit-text-form').show(0);
            } else { $('#limit-text-form').hide(0); }
        });

        $('#limtations-dd').change(function(){
            var isOthers = $(this).val();
            for( var i=0; i<isOthers.length; i++ ) {
	          if (isOthers[i] == "Other") {
	              $('#limit-text-form').show(0);
	          } else {
	              $('#limit-text-form').hide(0);
	          }
	      }
        });

        $('#enableLimitedAdvice').click(function(){

            if ( this.checked ) {
                $('#limitations').fadeIn(200);
            } else {
                $('#limitations').fadeOut(200);
                $('#limit-text-form').fadeOut(200);
                $('#limtations-dd').val("You have instructed me not to determine the suitablity of my financial adviser servies to your particular circumstances");
            }

        });
    });
</script>
