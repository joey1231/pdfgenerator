<style>
  .ui-autocomplete {
    max-height: 100px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
  }
  </style>
<div class="page-title">
    <h3>Document Finder</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li class="active">Document Finder</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
  <div class="row">
         <div class="col-md-12">
             <div class="row">

                 <div class="col-md-12">
                     <div class="card">
                         <div class="header">
                             <h4 class="title">Find your documents and transaction here:</h4>
                         </div>
                         <div class="content">
                            <div class='row'>
                              <div class='col-md-4'>
                                  <label>Enter document title here</label>
                                  <input type='text' id='doc-title' class='form-control'/>
                              </div>
                              <div class='col-md-4'>
                                  <label>Select document type</label>
                                  <select class='form-control' id='doc-type'>
                                      <option value="0">All Documents</option>
                                      <option value="1">Fact Find Documents</option>
                                      <option value="2">SOA Documents</option>
                                  </select>
                              </div>
                              <div class='col-md-4'>
                                  <label>Enter transaction date here</label>
                                  <input type='date' id='doc-date' class='form-control'/>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='col-md-8'>
                                <label>Enter document description here</label>
                                <input type='text' id='doc-description' class='form-control'/>
                              </div>
                              <div class='col-md-4'>
                                <label>&nbsp</label>
                                <button class='btn btn-fill btn-primary btn-block' id='execute-search'>
                                    Search for Document
                                </button>
                              </div>
                            </div>
                            <div class='row'>
                              <br /><br />
                              <div class='col-md-12' id='search-results-pane'>

                              </div>
                            </div>
                         </div>
                     </div>
                 </div>
            </div>
            <div>
              <p>&nbsp</p><p>&nbsp</p>
            </div>

        </div>
  </div>

</div><!-- Main Wrapper -->
<div class="page-footer">
    <p class="no-s">2016 &copy; Sumit and Jaz Ventures.</p>
</div>

<script>
$(document).ready(function(){

  $("#doc-title").autocomplete({
      source: "<?php echo base_url(); ?>index.php/Data/titleDropDown/all/", //+$('#doc-title').val(),
      minLength:1
  });

  $("#doc-description").autocomplete({
      source: "<?php echo base_url(); ?>index.php/Data/descriptionDropDown/all/", //+$('#doc-title').val(),
      minLength:1
  });

  $('#execute-search').click(function(){
      var desc  = $('#doc-description').val();
      var title = $('#doc-title').val();
      var date  = $('#doc-date').val();
      var type  = $('#doc-type').val();

      var m = "<h4>Searching documents...</h4>";
      $('#search-results-pane').html(m);

      $.ajax({
          url:"<?php echo base_url(); ?>index.php/Document/search/",
          data: { de:desc, t:title, da:date, ty:type },
          success: function(data){
              //console.log(data);
              $('#search-results-pane').html(data);
          },
          error: function(){
              var h = "<h4>Search error. Please try again.</h4>";
              $('#search-results-pane').html(h);
          }
      });
  });
});
</script>
