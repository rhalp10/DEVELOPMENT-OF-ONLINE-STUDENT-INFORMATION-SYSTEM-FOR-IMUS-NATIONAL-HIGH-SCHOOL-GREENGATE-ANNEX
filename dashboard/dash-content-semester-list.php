
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Semester Management</h5>

						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right add_sem" data-toggle="modal" data-target="#semester_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table table-bordered" id="semester_data">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th>Start</th>
                                    <th>End</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="semester_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title msemester_title">ADD SEMESTER</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="semester_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester Start</label>
                          <input type="date" class="form-control" id="semester_Start" name="semester_Start">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester End</label>
                          <input type="date" class="form-control" id="semester_End" name="semester_End" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester Status</label>
                          <select class="select" name="semester_Stat" id="semester_Stat" >
                            <option value="">~~SELECT~~</option>
                            <option value="1">Activate</option>
                            <option value="0">Deactivate</option>
                          </select>
                        </div>
                      </div>
										</div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="semester_ID" id="semester_ID" />
								       <input type="hidden" name="operation" id="operation" value="Add" />
								       <button type="submit" class="btn btn-primary sem_action" id="action">Add</button>
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
  SEMESTER MANAGEMENT  
 */
  var semesterdataTable = $('#semester_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "bAutoWidth": false,
    "ajax":{
      url:"datatable/semester/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


 
  $(document).on('submit', '#semester_form', function(event){
    event.preventDefault();
    var semester_Start = $('#semester_Start').val();
    var semester_End = $('#semester_End').val();
    var semester_Stat = $('#semester_Stat').val();
    if(semester_Start != '' && semester_End != '' && semester_Stat != '')
    {
            $.ajax({
              url:"datatable/semester/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.sem_action').text("Add");
                
                document.getElementsByName('operation').forEach(function(ele, idx) {
                   ele.value = 'Add';
                });

                alert(data);
                $('#semester_form')[0].reset();
                $('#semester_modal').modal('hide');
                semesterdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_sem', function(){
    var semester_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/semester/fetch_single.php",
      type:"POST",
      data:{semester_ID:semester_ID},
      dataType:"json",
      success:function(data)
      {
        $('#semester_modal').modal('show');
        $('#semester_Start').val(data.semester_Start);
        $('#semester_End').val(data.semester_End);
        $('#semester_Stat').val(data.semester_Stat).change();
        $('#action.sem_action').text("Update");
       
        document.getElementsByName('operation').forEach(function(ele, idx) {
                   ele.value = 'Edit';
                });
        $('.msemester_title').text("Edit Semester Info");
        $('#semester_ID').val(semester_ID);
      }
    })
  });



  $(document).on('click', '.add_sem', function(){
        $('#action.sem_action').text("Add");
        $('#operation').val("Add");
        $('.msemester_title').text("Add Semester Info");
        document.getElementById("semester_form").reset();
  });
  $(document).on('click', '.delete_sem', function(){
    var semester_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/semester/delete.php",
        type:"POST",
        data:{semester_ID:semester_ID},
        success:function(data)
        {
          alert(data);
          semesterdataTable.ajax.reload();
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