
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Teacher With Assign Subject Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#teacher_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="teacherwithsub_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Teacher</th>
                                    <th>Semester</th>
                                    <th>Status</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="teacher_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">ADD TEACHER</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="teacher_form" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                       <div class="col-sm-12">
                          <label>Teacher ID</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm steacher_modal" data-toggle="modal" data-target="#steacher_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="teacherEmpID" name="teacherEmpID" placeholder="Teacher ID" disabled="">
                          <input type="hidden" class="form-control" id="teacherID" name="teacherID" placeholder="Teacher ID">
                        </div>
                        <div class="col-sm-12">
                          <label>Subject Code</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm subject_modal" data-toggle="modal" data-target="#subject_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="subjectCode" name="subjectCode" placeholder="Subject Code" disabled="">
                          <input type="hidden" class="form-control" id="subjectID" name="subjectID" placeholder="Subject Code" >
                        </div>

                        <div class="col-sm-12">
                          <label>Semester ID</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm semester_modal" data-toggle="modal" data-target="#semester_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="sem" name="sem" placeholder="Semester" disabled="">
                           <input type="hidden" class="form-control" id="semID" name="semID" placeholder="Semester">
                        </div>
                       
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="tsa_ID" id="tsa_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->

          <div id="steacher_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">TEACHER RECORD</h5>
                </div>
                  <div class="modal-body">
                   <table class="table table-bordered" id="teacher_data">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Teacher ID</th>
                            <th>Name</th>
                            <th>Sex</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>

            <div id="subject_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">SUBJECT RECORD</h5>
                </div>
                  <div class="modal-body">
                    <table class="table table-bordered" id="subject_data">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Subject Code</th>
                          <th>Subject Title</th>
                          <th>Subject Abbreviation</th>
                      </tr>
                    </thead>
                  </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
      <div id="semester_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">SEMESTER RECORD</h5>
                </div>
                  <div class="modal-body">
                    <table class="table table-bordered" id="semester_data">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Start</th>
                          <th>End</th>
                      </tr>
                    </thead>
                  </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });

 


  var dataTable = $('#teacherwithsub_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/teacher-with-sub/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
   var dataTableTeacherRecord = $('#teacher_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/teacher/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
     var dataTableSubjectRecord = $('#subject_data').DataTable({
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
    var dataTableSemRecord = $('#semester_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
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
   //JQUERY FOR SELECTING TEACHER ID WHEN BROWSING
   //----------------------------------------------------------------
    var teacherRec = '#teacher_data tbody';

    $(teacherRec).on('click', 'tr', function(){
      
      var cursor = dataTableTeacherRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher_form').find("input[name='teacherID'][type='hidden']").val(data[0]);
      $('#teacher_form').find("input[name='teacherEmpID'][type='text']").val(data[1]);
      $('#steacher_modal').modal('hide');
      
    });
  //----------------------------------------------------------------
  //JQUERY FOR SELECTING SUBJECT ID WHEN BROWSING
  //----------------------------------------------------------------
    var subRec = '#subject_data tbody';

    $(subRec).on('click', 'tr', function(){
      
      var cursor = dataTableSubjectRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher_form').find("input[name='subjectID'][type='hidden']").val(data[0]);
      $('#teacher_form').find("input[name='subjectCode'][type='text']").val(data[1]);
      $('#subject_modal').modal('hide');
      
    });
  //----------------------------------------------------------------
  //JQUERY FOR SELECTING SUBJECT ID WHEN BROWSING
  //----------------------------------------------------------------
    var semRec = '#semester_data tbody';

    $(semRec).on('click', 'tr', function(){
      
      var cursor = dataTableSemRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher_form').find("input[name='semID'][type='hidden']").val(data[0]);
      $('#teacher_form').find("input[name='sem'][type='text']").val(data[1]);
      $('#semester_modal').modal('hide');
      
    });
  //----------------------------------------------------------------
  $(document).on('submit', '#teacher_form', function(event){
    event.preventDefault();
     var teacherID = $('#teacherID').val();
     var subjectID = $('#subjectID').val();
     var semID = $('#semID').val();
    if(teacherID != '' && subjectID != '' && semID != '')
    {
            $.ajax({
              url:"datatable/teacher-with-sub/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#teacher_form')[0].reset();
                $('#teacher_modal').modal('hide');
                dataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  //----------------------------------------------------------------
  // UPDATE 
  //----------------------------------------------------------------
  $(document).on('click', '.update', function(){
    var tsa_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/teacher-with-sub/fetch_single.php",
      type:"POST",
      data:{tsa_ID:tsa_ID},
      dataType:"json",
      success:function(data)
      {
       $('#teacher_modal').modal('show');

        $('#teacherEmpID').val(data.teacherEmpID);
        $('#teacherID').val(data.teacherID);
        $('#subjectID').val(data.subject_ID);
        $('#subjectCode').val(data.subject_code);
        $('#sem').val(data.sem);
        
        $('#action').text("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Assign Teacher In Subject");
        $('#tsa_ID').val(tsa_ID);
      }
    });
  });
  //----------------------------------------------------------------
  // UPDATE MODAL TITLE OF SUBJECT RECORD
  //----------------------------------------------------------------
  $(document).on('click', '.subject_modal', function(){
        $('#subject_modal .modal-title').text(" Subject Record");
  });
   //----------------------------------------------------------------
  // UPDATE MODAL TITLE OF TEACHER RECORD
  //----------------------------------------------------------------
  $(document).on('click', '.steacher_modal', function(){
        $('#steacher_modal .modal-title').text(" Teacher Record");
  });

  $(document).on('click', '.semester_modal', function(){
        $('#semester_modal .modal-title').text(" Semester Record");
  });
  //----------------------------------------------------------------
  // UPDATE MODAL TITLE OF ASSIGNING SUBJECT IN TEACHER 
  //----------------------------------------------------------------
  $(document).on('click', '.add', function(){
        $('#action').text("Add");
        $('#operation').val("Add");
        $('.modal-title').text("Assign Teacher In Subject");
        document.getElementById("teacher_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var tsa_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/teacher-with-sub/delete.php",
        type:"POST",
        data:{tsa_ID:tsa_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
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