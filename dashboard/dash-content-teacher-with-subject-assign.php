
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Teacher With Assign Subject Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#teacher1_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="teacherwithsub_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th><select name="category" id="category" class="form-control">
         <option value="">Gradelevel</option>
         <?php 
         $query = "SELECT * FROM `year_level` ";
        $result = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["yl_ID"].'">'.$row["yl_Name"].'</option>';
         }
         ?>
        </select></th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Teacher</th>
                                    <th>Academic Year</th>
                                    <th>Status</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="teacher1_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">ADD TEACHER</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="teacher1_form" enctype="multipart/form-data">
                  <div class="modal-body">
                    <div class="form-group">
                       <div class="col-sm-12">
                          <label>Teacher ID</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm steacher1_modal" data-toggle="modal" data-target="#steacher1_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="teacherEmpID" name="teacherEmpID" placeholder="Teacher ID" disabled="">
                          <input type="hidden" class="form-control" id="teacherID" name="teacherID" placeholder="Teacher ID">
                        </div>
                        <div class="col-sm-12">
                          <label>Subject Code</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm subject_modal" data-toggle="modal" data-target="#subject_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="subjectCode" name="subjectCode" placeholder="Subject Code" disabled="">
                          <input type="hidden" class="form-control" id="subjectID" name="subjectID" placeholder="Subject Code" >
                        </div>

                        <div class="col-sm-12">
                          <label>Academic Year</label><button type="button" class="btn btn-info btn-labeled btn-labeled-right pull-right btn-sm semester_modal" data-toggle="modal" data-target="#semester_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>Show Record</button>
                          <input type="text" class="form-control" id="sem" name="sem" placeholder="Academic Year" disabled="" >
                           <input type="hidden" class="form-control" id="semID" name="semID" placeholder="Academic Year" >
                        </div>
                        <div class="col-sm-12">
                          <label>Section</label>
                           <select class="select" name="secID" id="a_section" required="">
                              <option value="">~~SELECT~~</option>
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `ref_section`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['section_ID']?>" ><?php echo $rows['section_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                            </select>
                        </div>
                       <div class="col-sm-12">
                          <label>Grade Level</label>
                           <select class="select" name="ylID" id="a_year_level" required="">
                              <option value="">~~SELECT~~</option>
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `year_level`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['yl_ID']?>" ><?php echo $rows['yl_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="tsa_ID" id="tsa_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add"/>
                       <button type="submit" class="btn btn-primary ateacher_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->

          <div id="steacher1_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">TEACHER RECORD</h5>
                </div>
                  <div class="modal-body">
                   <table class="table table-bordered" id="teacherx_data">
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
                  <h5 class="modal-title">ACADEMIC YEAR RECORD</h5>
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

          <div id="view_enrolled_students" class="modal fade">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Enrolled Students</h5>
                  
                </div>
                  <div class="modal-body">
                    <button class="btn btn-success" id="add_student_toClass">Browse Student</button>
                    <table class="table table-bordered" id="studentinsection_data">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>LRN</th>
                          <th>Name</th>
                          <th>Sex</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="secID_z" id="secID_z">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>

   <div id="add_student_toClass_Modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Select Enrolled Students</h5>
                </div>
                  <div class="modal-body">
                    <p>Click To Add Student</p>
                    <table class="table table-bordered" id="addstudentinsection_data">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>LRN</th>
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
<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });

 


   load_data();

function load_data(is_category)
 {
  var dataTable = $('#teacherwithsub_data').DataTable({
   "processing":true,
   "serverSide":true,
   "order":[],
   "ajax":{
    url:"datatable/teacher-filter-sub/fetch.php",
    type:"POST",
    data:{is_category:is_category}
   },
   "columnDefs":[
    {
     "targets":[1],
     "orderable":false,
    },
   ],
  });


 }

 $(document).on('change', '#category', function(){
  var category = $(this).val();
  $('#teacherwithsub_data').DataTable().destroy();
  if(category != '')
  {
   load_data(category);
  }
  else
  {
   load_data();
  }
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
          $('#teacherwithsub_data').DataTable().destroy();
          load_data();
        }
      });
    }
    else
    {
      return false; 
    }
  });



  $(document).on('submit', '#teacher1_form', function(event){
    event.preventDefault();
    var teacherID = $('#teacherID').val();
    var subjectID = $('#subjectID').val();
    var semID = $('#semID').val();
   
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
                $('#teacher1_form')[0].reset();
                $('#teacher1_modal').modal('hide');
                $('#teacherwithsub_data').DataTable().destroy();
                load_data();
              
              }
            }); 
   
  });



 function load_studdata(tsa_ID)
 {
  var dataTablestudentinsection_data = $('#studentinsection_data').DataTable({
   
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/teacher-filter-sub/fetch_student.php",
      type:"POST",
      data:{secID_z:tsa_ID}
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  //----------------------------------------------------------------
  //JQUERY FOR SELECTING STUDENT ID WHEN BROWSING
  //----------------------------------------------------------------
    var addstudRec = '#addstudentinsection_data tbody';

    $(addstudRec).on('click', 'tr', function(){
      
      var cursor = dataTableaddstudentinsection_data.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      // $('#teacher1_form').find("input[name='subjectID'][type='hidden']").val(data[0]);
      // $('#teacher1_form').find("input[name='subjectCode'][type='text']").val(data[1]);
     
      var stud_ID = data[0];
      var secID = $('#secID_z').val();
      if(confirm("Are you sure you want to add ("+data[2]+") in this section?"))
      {
        $.ajax({
          url:"datatable/teacher-filter-sub/insert.php",
          type:"POST",
          data:{operation:'AddStudInSec',secID:secID,stud_ID:stud_ID},
          // dataType:"json",
          success:function(data)
          {
            alert(data);
            dataTablestudentinsection_data.ajax.reload();
          }
        });
      }
      else
      {
        return false; 
      }
      $('#add_student_toClass_Modal').modal('hide');
      
    });
$(document).on('click', '.remove_studInClass', function(){
    var recs_ID = $(this).attr("id");
    if(confirm("Are you sure you want to remove this student?"))
    {
       $.ajax({
          url:"datatable/teacher-filter-sub/insert.php",
          type:"POST",
          data:{operation:'RemoveStudInSec',recs_ID:recs_ID},
          // dataType:"json",
          success:function(data)
          {
           alert(data);
            dataTablestudentinsection_data.ajax.reload();
           }
         });
    }
    else
    {

    }
  });



 }
   

   var dataTableaddstudentinsection_data = $('#addstudentinsection_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/student/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

   var dataTableTeacherRecord = $('#teacherx_data').DataTable({
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
    var teacherRec = '#teacherx_data tbody';

    $(teacherRec).on('click', 'tr', function(){
      
      var cursor = dataTableTeacherRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher1_form').find("input[name='teacherID'][type='hidden']").val(data[0]);
      $('#teacher1_form').find("input[name='teacherEmpID'][type='text']").val(data[1]);
      $('#steacher1_modal').modal('hide');
      
    });
  //----------------------------------------------------------------
  //JQUERY FOR SELECTING SUBJECT ID WHEN BROWSING
  //----------------------------------------------------------------
    var subRec = '#subject_data tbody';

    $(subRec).on('click', 'tr', function(){
      
      var cursor = dataTableSubjectRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher1_form').find("input[name='subjectID'][type='hidden']").val(data[0]);
      $('#teacher1_form').find("input[name='subjectCode'][type='text']").val(data[1]);
      $('#subject_modal').modal('hide');
      
    });
  //----------------------------------------------------------------
  //JQUERY FOR SELECTING SUBJECT ID WHEN BROWSING
  //----------------------------------------------------------------
    var semRec = '#semester_data tbody';

    $(semRec).on('click', 'tr', function(){
      
      var cursor = dataTableSemRecord.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      $('#teacher1_form').find("input[name='semID'][type='hidden']").val(data[0]);
      $('#teacher1_form').find("input[name='sem'][type='text']").val(data[1]);
      $('#semester_modal').modal('hide');
      
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
       $('#teacher1_modal').modal('show');

        $('#teacherEmpID').val(data.teacherEmpID);
        $('#teacherID').val(data.teacherID);
        $('#subjectID').val(data.subject_ID);
        $('#subjectCode').val(data.subject_code);
        $('#sem').val(data.sem);
        $('#a_section').val(data.section_ID).change();
        $('#a_year_level').val(data.yl_ID).change();
        
        
          $('#action.ateacher_action').text("Edit");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
               });
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
  $(document).on('click', '.steacher1_modal', function(){
        $('#steacher1_modal .modal-title').text(" Teacher Record");
  });

  $(document).on('click', '.semester_modal', function(){
        $('#semester_modal .modal-title').text("Academic Year Record");
  });
  //----------------------------------------------------------------
  // UPDATE MODAL TITLE OF ASSIGNING SUBJECT IN TEACHER 
  //----------------------------------------------------------------
  $(document).on('click', '.add', function(){
        $('#action').text("Add");
        $('#operation').val("Add");
        $('.modal-title').text("Assign Teacher In Subject");
        document.getElementById("teacher1_form").reset();
  });
  $(document).on('click', '#add_student_toClass', function(){
       
       
       $('#add_student_toClass_Modal').modal('show');
  });




 $(document).on('click', '.view_student_tothis', function(){
  var tsa_ID = $(this).attr("id");
  $('#view_enrolled_students').modal('show');
  $('#secID_z').val(tsa_ID);
  $('#view_enrolled_students .modal-title').text("Enrolled Students");
  $('#studentinsection_data').DataTable().destroy();
  if(tsa_ID != '')
  {
   load_studdata(tsa_ID);
  }
  else
  {
   load_studdata();
  }
 });





  
  
});
</script>