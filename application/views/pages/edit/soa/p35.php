<div class='page-ff' style='margin-top:30px;display:none' id='page-myrecom'>

    <div class='row'>
      <div class='col-md-12'>
        <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#decisionDescription" aria-controls="home" role="tab" data-toggle="tab">Your Preference (Pre-Underwriting)</a></li>
            <li role="presentation"><a href="#decisionItems" aria-controls="profile" role="tab" data-toggle="tab">Your Preference (Post-Underwriting)</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="decisionDescription">
                <h4>Please check a cover that applies and once checked, enter the description for this decision.</h4>
                <table class="table">
                    <tr>
                      <td></td>
                      <td>Cover/Protection</td>
                      <td>Description</td>
                    </tr>
                    <tr data-type="health">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">Health</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                    <tr data-type="income">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">Income Protection</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                    <tr data-type="mortgage">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">Mortgage Protection</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                    <tr data-type="trauma">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">Trauma Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                    <tr data-type="tpd">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">TPD Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                    <tr data-type="life">
                      <td><input type="checkbox" class="dd-enable-box"></td>
                      <td class="text-muted">Life Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                    </tr>
                </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="decisionItems">
                <h4>Please check a cover that applies and once checked, specify the necessary information for this decision.</h4>
                <table class="table">
                    <tr>
                      <td></td>
                      <td>Cover/Protection</td>
                      <td>Description</td>
                      <td>Timestamp</td>
                    </tr>
                    <tr data-type="health">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">Health</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                    <tr data-type="income">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">Income Protection</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                    <tr data-type="mortgage">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">Mortgage Protection</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                    <tr data-type="trauma">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">Trauma Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                    <tr data-type="tpd">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">TPD Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                    <tr data-type="life">
                      <td><input type="checkbox" class="di-enable-box"></td>
                      <td class="text-muted">Life Cover</td>
                      <td><textarea class="form-control" disabled="disabled" style="resize:none;" rows="2"></textarea></td>
                      <td><input type="date" class="form-control" disabled="disabled" /></td>
                    </tr>
                </table></div>


            </div>
      </div>
    </div>

</div>

<!--


T
 -->
<script>

var fetchDecisionProgress = function(){
    var result = {};

    result.description = [];
    result.decisions   = [];

    $('#decisionDescription').find(".dd-enable-box").each(function(){
        if ($(this).is(":checked")){
            var parent = $(this).parent().parent();

            result.description.push({
                'text': parent.find(".form-control").val(),
                'type': parent.attr("data-type")
            });
        }
    });

    $('#decisionItems').find(".di-enable-box").each(function(){
        if ($(this).is(":checked")){
            var parent = $(this).parent().parent();

            result.decisions.push({
                'text': parent.find("td:eq(2)").find(".form-control ").val(),
                'type': parent.attr("data-type"),

                'timestamp': parent.find("td:eq(3)").find(".form-control").val()
            });
        }
    });


    console.log(result);
    return result;
};

$(document).ready(function(){
    $('#amt-cover-ma').click(function(){
        if ($(this).find('input').is(":checked")){
            $('#amt-cover-xtra').attr('disabled', 'disabled');
        } else {
            $('#amt-cover-xtra').removeAttr('disabled');
        }
    });

    $('.dd-enable-box').click(function(){
        var isChecked = $(this).is(":checked");
        var parent = $(this).parent().parent();

        if (isChecked){
            var i = 0; parent.find("td").each(function(){
                if (i == 1) { $(this).removeClass("text-muted"); }
                else if (i == 2){ $(this).find("textarea").removeAttr("disabled"); }

                i++;
            });
        } else {
          var i = 0; parent.find("td").each(function(){
              if (i == 1) { $(this).addClass("text-muted"); }
              else if (i == 2){ $(this).find("textarea").attr("disabled", "disabled"); }

              i++;
          });
        }
    });

    $('.di-enable-box').click(function(){
        var isChecked = $(this).is(":checked");
        var parent = $(this).parent().parent();

        if (isChecked){
            parent.find("td:eq(1)").removeClass("text-muted");
            parent.find('.form-control').removeAttr('disabled');
        } else {
            parent.find("td:eq(1)").addClass("text-muted");
            parent.find('.form-control').attr('disabled', 'disabled');
        }
    });

});


</script>
