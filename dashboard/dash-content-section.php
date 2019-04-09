
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Section Management</h5>
 
						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right add_section" data-toggle="modal" data-target="#section_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table table-bordered" id="section_data">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th width="80%">Name</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="section_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title msection_title">ADD ACCOUNT</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="section_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Section Name</label>
													<input type="text" class="form-control" id="section_Name" name="section_Name" placeholder="Section Name">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="section_ID" id="section_ID" />
								       <input type="hidden" name="operation" id="operation" value="Add" />
								       <button type="submit" class="btn btn-primary section_action" id="action">Add</button>
									<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->



<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  /*
  SECTION MANAGEMENT  
 */

  var sectiondataTable = $('#section_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],

    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false ,
    "ajax":{
      url:"datatable/section/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


  $('#section_data').css( 'padding', '10px;' );

 


$(document).on('submit', '#section_form', function(event){
    event.preventDefault();
    var section_Name = $('#section_Name').val();
    if(section_Name != '')
    {
            $.ajax({
              url:"datatable/section/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.section_action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#section_form')[0].reset();
                $('#section_modal').modal('hide');
                sectiondataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_section', function(){
    var section_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/section/fetch_single.php",
      type:"POST",
      data:{section_ID:section_ID},
      dataType:"json",
      success:function(data)
      {
        $('#section_modal').modal('show');
        $('#section_Name').val(data.section_Name);
        $('#action.section_action').text("Edit");
        //  document.getElementsById('action').forEach(function(ele, idx) {
        //    ele.value = 'Edit';
        // });
        // $('#operation').val("Edit");
        document.getElementsByName('operation').forEach(function(ele, idx) {
           ele.value = 'Edit';
        });
        $('.msection_title').text("Edit Section Info");
        $('#section_ID').val(section_ID);
      }
    })
  });



  $(document).on('click', '.add_section', function(){
        $('#action.section_action').text("Add");
        // $('#operation').val("Add");

         document.getElementsByName('operation').forEach(function(ele, idx) {
           ele.value = 'Add';
        });
        $('.msection_title').text("Add Section Info");
        document.getElementById("section_form").reset();
  });
  $(document).on('click', '.delete_section', function(){
    var section_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/section/delete.php",
        type:"POST",
        data:{section_ID:section_ID},
        success:function(data)
        {
          alert(data);
          sectiondataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
});
</script>