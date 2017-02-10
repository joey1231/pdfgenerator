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

<?php
    $fourth = $_data->fourth;
?>

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

              <?php $sub = $fourth->client; ?>
              <?php $desc = $fourth->planDescription; ?>
              <div class="row" id='client-soa'>
                <div class="col-md-12">
                  <div class="checkbox text-left" data-fld='personal'>
                    <label>
                      <input type="checkbox" class="info-fld" <?php if ($sub->personal == "yes"){ echo "checked='checked'"; } ?> data-fld='personal'> Personal
                    </label>
                  </div>
                  <div class="checkbox text-left" data-fld='business'>
                    <label>
                      <input type="checkbox" <?php if ($sub->business == "yes"){ echo "checked='checked'"; } ?>  class="info-fld"> Self Employed / Business
                    </label>
                  </div>
                  <div class="checkbox text-left" data-fld='other'>
                    <label>
                      <input type="checkbox" <?php if ($sub->other == "yes"){ echo "checked='checked'"; } ?>  class="info-fld"> Other
                    </label>
                  </div>
                  <div class="clearfix" style="margin-top:20px">
                    <label>Describe client's insurance plan:</label>
                    <textarea class="form-control" style="resize:none" rows="8"><?php echo $desc->client; ?></textarea>
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

              <?php $sub = $fourth->partner; ?>
              <div class="row" id='partner-soa'>
                <div class="col-md-12">
                  <div class="checkbox text-left" data-fld='personal'>
                    <label>
                      <input type="checkbox" <?php if ($sub->personal == "yes"){ echo "checked='checked'"; } ?>  class="info-fld" data-fld='life'> Personal
                    </label>
                  </div>
                  <div class="checkbox text-left" data-fld='business'>
                    <label>
                      <input type="checkbox" <?php if ($sub->business == "yes"){ echo "checked='checked'"; } ?>  class="info-fld"> Self Employed / Business
                    </label>
                  </div>
                  <div class="checkbox text-left" data-fld='other'>
                    <label>
                      <input type="checkbox" <?php if ($sub->other == "yes"){ echo "checked='checked'"; } ?>  class="info-fld"> Other
                    </label>
                  </div>
                  <div class="clearfix" style="margin-top:20px">
                    <label>Describe partner's insurance plan:</label>
                    <textarea class="form-control" style="resize:none" rows="8"><?php echo $desc->partner; ?></textarea>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>

        <div class="col-md-6 col-sm-6" >
          <h3 class="text-left">Generate Letter of Authority</h3>
          <div class="checkbox text-left">
            <label>
              <input type="checkbox" class="info-fld" <?php if ($fourth->loa == "yes"){ echo "checked='checked'"; } ?> id="enableLOA" data-fld='life'> Do you want to generate a Letter of Authority? (Check if YES)
            </label>
          </div>
          <h3 class="text-left">Limitations</h3>
          <div class="checkbox text-left">
            <label>
              <input type="checkbox" class="info-fld" <?php if ($fourth->limitations->hasLimits == "yes"){ echo "checked='checked'"; } ?> id="enableLimits" data-fld='life'> Are there any limitations? (Check if YES)
            </label>
          </div>
          <div class="form-group" id='limit-text-form' style='display:<?php if ($fourth->limitations->limitDescription == null){ echo "none"; } else { echo "block"; } ?>'>
            <label>Specify limitations on the textbox below:</label>
            <textarea class="form-control" style="resize:none" rows="8"><?php echo $fourth->limitations->limitDescription; ?></textarea>
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
    data.limitations.hasLimits = $('#enableLimits').is(":checked") ? "yes" : "no";
    data.limitations.limitDescription = $('#limit-text-form textarea').val();

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
});
</script>
