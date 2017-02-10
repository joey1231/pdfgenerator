




<div class='page-ff' style='margin-top:30px; display:none' id='page-loa'>
  <h3>Letter of Authority</h3>
  <div class='row'>
    <div class='col-md-12'>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#loa-items" aria-controls="home" role="tab" data-toggle="tab">Traders' List and Enquiry Items</a></li>
        <li role="presentation"><a href="#loa-signature" aria-controls="profile" role="tab" data-toggle="tab">Signature Items</a></li>
      </ul>

      <!-- Tab panes -->
      <?php $loa = $_data->loa; ?>
      <?php $enq = $loa->enquiryItems; ?>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="loa-items">
            <div class='row'>
              <div class='col-md-4 col-sm-4'>
                <h3>To make enquires on my/out behalf; and be given copies of any (tick those that apply):</h3>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[0]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Policy Schedule and Information</span>
                </label></div>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[1]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Existing Insurances</span>
                </label></div>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[2]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Insurance Application</span>
                </label></div>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[3]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Benefit Information</span>
                </label></div>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[4]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Alterations to standard policy terms<br />(loadings and/or exclusions)</span>
                </label></div>
                <div class="checkbox text-left"><label><input type="checkbox" <?php if ($enq[5]->checkbox): ?> checked="checked" <?php endif; ?> class="info-fld">
                  <span>Medical Information</span>
                </label></div>
              </div>
              <div class='col-md-8 col-sm-8'>
                <h3>Trading person/s:</h3>
                <div id='loa-trading-persons'>
                  <table class='table'>
                    <thead>
                      <tr>
                        <th>Name</th><th>Address</th><th>DOB</th><th>Contact Details</th><th></th>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
                <br /><br />
                <h4>Add a trading person</h4>
                <div class='trading-person-form'>

                  <div class='row'>
                    <div class='form-group col-md-12'>
                      <label>Full Name</label>
                      <input type='text' class='form-control' />
                    </div>
                  </div>
                  <div class='row'>
                    <div class='form-group col-md-6'>
                      <label>Date of Birth</label>
                      <input type='text' class='form-control date-picker' />
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Home Address</label>
                      <input type='text' class='form-control' />
                    </div>
                  </div>
                  <div class='row'>
                    <div class='form-group col-md-4'>
                      <label>Suburb</label>
                      <input type='text' class='form-control' />
                    </div>
                    <div class='form-group col-md-4'>
                      <label>Town/City</label>
                      <input type='text' class='form-control' />
                    </div>
                    <div class='form-group col-md-4'>
                      <label>Postcode</label>
                      <input type='text' class='form-control' />
                    </div>
                  </div>
                  <div class='row'>
                    <div class='form-group col-md-6'>
                      <label>Email Address</label>
                      <input type='email' class='form-control' />
                    </div>
                    <div class='form-group col-md-6'>
                      <label>Phone Number</label>
                      <input type='text' class='form-control' />
                    </div>
                  </div>
                  <div class='row col-md-12'>
                    <button class='btn btn-primary' id='add-train-person-btn' >Add Trading Person</button>
                  </div>
                </div>

              </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="loa-signature">...</div>
      </div>
    </div>
  </div>
</div>

<script>

var fetchLOA = function(){
    var data = {};
    data.enquiryItems   = [];
    data.tradingPersons = [];

    $('#loa-items .checkbox').each(function(){
        var item = {};

        item.checkbox = $(this).find('input').is(":checked") ? "true" : "false";
        item.text     = $(this).find('span').html();

        data.enquiryItems.push(item);
    });

    $("#loa-trading-persons tbody").find('tr').each(function(){
        var item = {};
        item.name = $(this).find("td:eq(0)").html();
        item.homeaddress = $(this).find("td:eq(1)").attr('data-ha');
        item.suburb = $(this).find("td:eq(1)").attr('data-sub');
        item.town = $(this).find("td:eq(1)").attr('data-town');
        item.postcode = $(this).find("td:eq(1)").attr('data-post');

        item.dob = $(this).find("td:eq(2)").html();
        item.email = $(this).find("td:eq(3)").attr('data-email');
        item.phone = $(this).find("td:eq(3)").attr('data-phone');

        data.tradingPersons.push(item);
    });

    return data;
};

$(document).ready(function(){
    $('#add-train-person-btn').click(function(){
        var form = $('.trading-person-form');
        var dataset = [];

        form.find('.form-control').each(function(){
            dataset.push( $(this).val() );
            $(this).val("");
        });

        var html = "<tr class='trading-person-item'>";
        html += "<td>"+dataset[0]+"</td>";
        // Address
        var address = dataset[2]+" "+dataset[3]+" "+dataset[4]+" "+dataset[5];
        html += "<td data-ha='"+dataset[2]+"' data-sub='"+dataset[3]+"' data-town='"+dataset[4]+"' data-post='"+dataset[5]+"'>"+address+"</td>";
        html += "<td>"+dataset[1]+"</td>";
        var contacts = dataset[6]+" "+dataset[7];
        html += "<td data-email='"+dataset[6]+"' data-phone='"+dataset[7]+"'>"+contacts+"</td>";
        html += '<td><button type="button" class="close trading-person-close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></td>';
        html += "</tr>";

        $('#loa-trading-persons').find('tbody').append(html);
        $('.trading-person-close').click(function(){
            $(this).parent().parent().remove();
        });

        //console.log(dataset);
    });
});


</script>
