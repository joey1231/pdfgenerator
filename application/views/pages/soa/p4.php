<div class='page-ff' style='margin-top:30px;display:none' id='page-accack'>

    <div class='row'>
      <div class='col-md-12'>
        <h2>ACC Acknowledgement</h2>

        <!-- <div class="checkbox text-left">
           <label>
             <input type="checkbox" data-fld='acc1' class="info-fld q1"> You have notified me that you are currently on Acc Cover Plus/Acc Workplace Cover
           </label>
         </div>
         <div class="checkbox text-left">
            <label>
              <input type="checkbox" data-fld='acc2' class="info-fld  q2"> You have advised me that you want to apply for Cover Plus Extra and understand the advantages and disadvantages of such an action.
            </label>
          </div>
          <div class="checkbox text-left">
             <label>
               <input type="checkbox" data-fld='acc3' class="info-fld q3"> You have agreed that you will also put in place additional cover in terms of Mortgage & Rent Cover, and/or Income Protection and/or Trauma Cover to cover the risk to you and the business.
             </label>
           </div>
           <div class="checkbox text-left">
              <label>
                <input type="checkbox" data-fld='acc4' class="info-fld q4"> You have instructed me to put in place the following amount of cover on the applied for ACC Coverplus Extra product
              </label>
            </div>
          -->
          <div class='row'>
            <div class='form-group col-md-12'  align='left'>
               <!-- <label>Amount of Cover that they nominate on cover plus extra: </label>
               <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type='number' id='amt-cover-xtra' value='24544' min='0' class="form-control amt-cover" placeholder="" />
               </div> -->
               <div class="input-group">
                 <div class="checkbox text-left" data-fld='amt-cover-na' id='amt-cover-ma'>
                   <label>
                     <input type="checkbox" class="info-fld" data-fld='amt-cover-na'>
                     <!-- Please check this if the amount of cover that you nominate on cover plus extra is <b>not applicable</b> -->
                     Please check this if you want to MENTION about ACC.
                   </label>
                 </div>
               </div>
             </div>
          </div>

          <h2>Existing Policy Schedule</h2>
          <div class='row'>
            <div class='form-group col-md-12'  align='left'>
               <div class="input-group">
                 <div class="checkbox text-left" data-fld='amt-cover-na' id='amt-cover-na'>
                   <label>
                     <input type="checkbox" class="info-fld" data-fld='amt-cover-na'>
                     <!-- Please check this if the amount of cover that you nominate on cover plus extra is <b>not applicable</b> -->
                     Please see existing policy schedule.
                   </label>
                 </div>
               </div>
             </div>
          </div>
      </div>
    </div>

</div>


<script>

var fetchPartAccSOA = function(){
    var data = {};

    data.amount = $('#page-accack .amt-cover').val();
    data.q1 = $('#page-accack .q1').is(':checked') ? "true" : "false";
    data.q2 = $('#page-accack .q2').is(':checked') ? "true" : "false";
    data.q3 = $('#page-accack .q3').is(':checked') ? "true" : "false";
    data.q4 = $('#page-accack .q4').is(':checked') ? "true" : "false";
    data.applicable = $('#amt-cover-ma').find('input').is(':checked') ? "true" : "false";
    data.policy = $('#amt-cover-na').find('input').is(':checked') ? "true" : "false";

    return data;
};

$(document).ready(function(){
    $('#amt-cover-ma').click(function(){
        if ($(this).find('input').is(":checked")){
            $('#amt-cover-xtra').attr('disabled', 'disabled');
        } else {
            $('#amt-cover-xtra').removeAttr('disabled');
        }
    });
});
</script>
