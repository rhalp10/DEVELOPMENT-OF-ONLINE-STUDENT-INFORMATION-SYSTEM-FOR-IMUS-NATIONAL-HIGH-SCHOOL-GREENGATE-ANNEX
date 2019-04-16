
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Assign Subject Management</h5>

            </div>
           <!--  <button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#teacher_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button> -->
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
                                    <th>Semester</th>
                                    <th>Status</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->
   <div id="view_enrolled_students" class="modal fade">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Enrolled Students</h5>
                  
                </div>
                  <div class="modal-body">
                  
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