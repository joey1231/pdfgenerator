<style>
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color:#1DC7EA;
}
</style>
<div class='page-ff' style='margin-top:30px' id='page-first'>
  <div id='import-form' style='padding:20px'>
    <div class='row'>
      <div class='col-md-12' align='left'>
        <p>You need to import a fact find document in order to continue. Use the form to search for the
            fact find document that you have transacted.
        </p>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-4' align='left'>
        <label>Document Title:</label>
        <input type='text' class='form-control' id='search-ff-title' />
      </div>
      <div class='col-md-4' align='left'>
        <label>Description (optional):</label>
        <input type='text' class='form-control' id='search-ff-desc' />
      </div>
      <div class='col-md-4' align='left'>
        <label>&nbsp</label>
        <button class='btn btn-fill btn-primary btn-block' id="search-import-ff-btn">
          Search Fact Find
        </button>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-12' id='search-ff-results'>

      </div>

    </div>
  </div>
  <div id='import-data' data-import-id=''>

  </div>
</div>
<script>

$(document).ready(function(){
  $("#search-ff-title").autocomplete({
      source: "<?php echo base_url(); ?>index.php/Data/titleDropDown/ff/", //+$('#doc-title').val(),
      minLength:1
  });

  $("#search-ff-desc").autocomplete({
      source: "<?php echo base_url(); ?>index.php/Data/descriptionDropDown/ff/", //+$('#doc-title').val(),
      minLength:1
  });

    $('#search-import-ff-btn').click(function(){
        if ($(this).attr('disabled') != "disabled"){
            $(this).attr('disabled', 'disabled').html("Searching...");

            var title = $('#search-ff-title').val();
            var desc  = $('#search-ff-desc').val();

            $.ajax({
                url:"<?php echo base_url(); ?>index.php/Data/searchff",
                data: { t:title, d:desc }, dataType:"json",
                success: function(data){
                    $('#search-import-ff-btn').removeAttr('disabled').html("Search Fact Find");

                    var html = "";
                    if (data.length > 0){

                      html = "<br /><table id='search-result-table-data' class='table table-hover'><thead><tr><th>Date Generated</th><th>Title</th><th>Description</th><th>Click to Import</th>";
                      html += "</tr></thead><tbody style='font-size:90%'>";

                      for(var i=0; i<data.length; i++){
                          html += "<tr align='left'>";
                          html += "<td>"+data[i].timestamp+"</td>";
                          html += "<td>"+data[i].title+"</td>";
                          html += "<td>"+data[i].description+"</td>";
                          html += "<td><button data-id='"+data[i].id+"' class='btn btn-info btn-sm btn-block import-btn'>Import</button></td>";
                          html += "</tr>";
                      }

                      html += "</tbody></table>";
                      $('#search-ff-results').html(html);
                      $(document).ready(function(){
                        $('#search-result-table-data').dataTable({
                          'pageLength': 15,
                          'bFilter': false,
                          'bLengthChange': false,
                          'aaSorting': []
                        });
                      });


                      $('.import-btn').click(function(){
                          var id = $(this).attr('data-id');
                          $.ajax({
                              url:"<?php echo base_url(); ?>index.php/Data/ffimport", data: { i:id },
                              success: function(data){
                                  $('#import-data').attr('data-import-id', id);
                                  $('#import-form').hide('fade', 250, function(){
                                      $('#import-data').html(data).show('fade', 250);
                                  });
                              },
                              error: function(){
                                $.notify({ icon: "pe-7s-info", message: "Error importing data. Server Error." },{
                                    type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
                                });
                              }
                          });
                      });

                    } else {
                      html = '<br /><div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                      html += 'No results found.</div>'; $('#search-ff-results').html(html);
                    }
                },
                error: function(){
                    $('#search-import-ff-btn').removeAttr('disabled').html("Search Fact Find");
                    $.notify({ icon: "pe-7s-info", message: "Could not search for fact find information. Server Error." },{
                        type: "danger", timer: 5000, placement: { from: 'top', align: 'right' }
                    });
                }
            });
        }

    });
});

</script>
