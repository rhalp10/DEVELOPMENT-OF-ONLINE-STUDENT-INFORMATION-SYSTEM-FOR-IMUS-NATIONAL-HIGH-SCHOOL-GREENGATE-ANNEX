
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Year Level Management</h5>

						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right add_grade" data-toggle="modal" data-target="#yl_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table table-bordered" id="yl_data">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th>Year Level</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="yl_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title myl_title">ADD Year Level</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="yl_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Grade Level</label>
                          <input type="text" class="form-control" id="yl_Name" name="yl_Name" placeholder="Year Level">
                        </div>
                      </div>
										</div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="yl_ID" id="yl_ID" />
								       <input type="hidden" name="operation" id="operation" value="Add" />
								       <button type="submit" class="btn btn-primary yl_action" id="action">Add</button>
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
  YEAR LEVEL MANAGEMENT  
 */

    var gradeleveldataTable = $('#yl_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false ,
    "ajax":{
      url:"datatable/yearlevel/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

    $(document).on('submit', '#yl_form', function(event){
    event.preventDefault();
    var yl_Name = $('#yl_Name').val();
    if(yl_Name != '')
    {
            $.ajax({
              url:"datatable/yearlevel/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
              
              document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });

                alert(data);
                $('#yl_form')[0].reset();
                $('#yl_modal').modal('hide');
                gradeleveldataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_grade', function(){
    var yl_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/yearlevel/fetch_single.php",
      type:"POST",
      data:{yl_ID:yl_ID},
      dataType:"json",
      success:function(data)
      {
        $('#yl_modal').modal('show');
        $('#yl_Name').val(data.yl_Name);
        $('#action.yl_action').text("Update");
        document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
              });
        $('.myl_title').text("Edit Year Level Info");
        $('#yl_ID').val(yl_ID);
      }
    })
  });



  $(document).on('click', '.add_grade', function(){
        $('#action.yl_action').text("Add");
        document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
        $('.myl_title').text("Add Year Level Info");
        document.getElementById("yl_form").reset();
  });
  $(document).on('click', '.delete_grade', function(){
    var yl_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/yearlevel/delete.php",
        type:"POST",
        data:{yl_ID:yl_ID},
        success:function(data)
        {
          alert(data);
          gradeleveldataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
/*
 END YEAR LEVEL MANAGEMENT  
 */
  
  
});
</script>