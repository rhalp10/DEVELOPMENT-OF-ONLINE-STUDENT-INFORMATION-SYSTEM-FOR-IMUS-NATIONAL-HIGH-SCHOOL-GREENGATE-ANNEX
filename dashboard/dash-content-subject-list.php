
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Subject Management</h5>

						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right add_sub" data-toggle="modal" data-target="#subject_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table table-bordered" id="student_data">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Subject Abbreviation</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="subject_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title msubtitle">ADD SUBJECT</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="subject_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Subject Code</label>
                          <input type="text" class="form-control" id="subject_Code" name="subject_Code" placeholder="Subject Code">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Subject Title</label>
                          <input type="text" class="form-control" id="subject_Title" name="subject_Title" placeholder="Subject Title">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Subject Abbreviation</label>
                          <input type="text" class="form-control" id="subject_Abbreviation" name="subject_Abbreviation" placeholder="Subject Abbreviation">
                        </div>
                      </div>
										</div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="subject_ID" id="subject_ID" />
								       <input type="hidden" name="operation" id="operation" value="Add" />
								       <button type="submit" class="btn btn-primary sub_action" id="action">Add</button>
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


  var subjectdataTable = $('#student_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/subject/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
 
  $(document).on('submit', '#subject_form', function(event){
    event.preventDefault();
    var subject_Code = $('#subject_Code').val();
    var subject_Title = $('#subject_Title').val();
    var subject_Abbreviation = $('#subject_Abbreviation').val();
    if(subject_Code != '' && subject_Title != '' && subject_Abbreviation != '')
    {
            $.ajax({
              url:"datatable/subject/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.sub_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
                alert(data);
                $('#subject_form')[0].reset();
                $('#subject_modal').modal('hide');
                subjectdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_sub', function(){
    var subject_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/subject/fetch_single.php",
      type:"POST",
      data:{subject_ID:subject_ID},
      dataType:"json",
      success:function(data)
      {
        $('#subject_modal').modal('show');
        $('#subject_Code').val(data.subject_Code);
        $('#subject_Title').val(data.subject_Title);
        $('#subject_Abbreviation').val(data.subject_Abbreviation);
        $('#action.sub_action').text("Update");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
              });
        $('.msubtitle').text("Edit Subject Info");
        $('#subject_ID').val(subject_ID);
      }
    })
  });



  $(document).on('click', '.add_sub', function(){
       
        $('#action.sub_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
        $('.modal-title').text("Add Subject Info");
        document.getElementById("subject_form").reset();
  });
  $(document).on('click', '.delete_sub', function(){
    var section_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/student/delete.php",
        type:"POST",
        data:{section_ID:section_ID},
        success:function(data)
        {
          alert(data);
          subjectdataTable.ajax.reload();
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