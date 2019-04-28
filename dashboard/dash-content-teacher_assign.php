
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
                                    <th>Academic Year</th>
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
<style type="text/css">
  table td {
  position: relative;
}

table td input {
  position: absolute;
  display: block;
  top:0;
  left:0;
  margin: 0;
  height: 100%;
  width: 100%;
  border: none;
  padding: 10px;
  box-sizing: border-box;
}
</style>
<div id="view_enrolled_students_lo" class="modal fade">
   <div class="modal-dialog modal-lg" style="max-width:1400px;">
      <div class="modal-content">
         <div class="modal-header bg-slate-400">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title">LEARNER'S OBSERVED VALUES</h5>
         </div>
         <form action="#" method="POST" id="lov_form">
         <div class="modal-body">
          <div class="row">
            <div class="col-sm-8">
              <table class="table table-bordered">
               <thead>
                  <th>Core Values</th>
                  <th>Behavior Statements</th>
                 
                  <th style="padding: 0px;">
                        <table class="table table-bordered">
                           <tr>
                              <td colspan="4">
                                Quarter
                              </td>
                           </tr>
                           <tr>
                              <td>1</td>
                              <td>2</td>
                              <td>3</td>
                              <td>4</td>
                           </tr>
                        </table>
                     </th>
               </thead>
               <tbody>
                  <tr>
                     <td>1. Maka-Diyos</td>
                     
                     <td >
                                 <p>Expresses one's spiritual beliefs
                                    while respecting the spiritual
                                    beliefs of others
                                 </p>
                     </td>
                    <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  colspan="4" style="min-height: 429px;">
                              <td><input type="text" name="makadios1_1"   id="makadios1_1"  maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios1_2"   id="makadios1_2"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios1_3"   id="makadios1_3"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios1_4"   id="makadios1_4"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="border-top-color:transparent !important;"></td>
                     
                     <td><p>Shows adherence to ethical
                                    principles by upholding truth
                                 </p>
                     </td>
                      <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  colspan="4" style="min-height: 429px;">
                              <td><input type="text" name="makadios2_1"   id="makadios2_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios2_2"   id="makadios2_2" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios2_3"   id="makadios2_3" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makadios2_4"   id="makadios2_4" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td>2. Makatao</td>
                     
                     <td >
                                 <p>Is sensitive to individual, social,
                                    and cultural differences
                                 </p>
                     </td>
                    <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  colspan="4" style="min-height: 429px;">
                              <td><input type="text" name="makatao1_1"  id="makatao1_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao1_2"  id="makatao1_2" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao1_3"  id="makatao1_3" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao1_4"  id="makatao1_4" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="border-top-color:transparent !important;"></td>
                     
                     <td><p>Demonstrates contributions
                                    towards solidarity
                                 </p>
                     </td>
                      <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  colspan="4" style="min-height: 429px;">
                              <td><input type="text" name="makatao2_1" id="makatao2_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao2_2" id="makatao2_2" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao2_3" id="makatao2_3" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makatao2_4" id="makatao2_4" maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>



                  <tr>
                     <td>3. Makakalikasan</td>
                     
                     <td >
                                 <p>Cares for the environment and
                        utilizes resources wisely,
                        judiciously, and economically
                                 </p>
                     </td>
                    <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  colspan="4" style="min-height: 429px;">
                              <td><input type="text" name="makakalikasan_1" id="makakalikasan_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makakalikasan_2" id="makakalikasan_2"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makakalikasan_3" id="makakalikasan_3"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makakalikasan_4" id="makakalikasan_4"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>

                   <tr>
                     <td>4. Makabansa</td>
                     
                     <td >
                                 <p>Demonstrates pride in being a
                                    Filipino; exercises the rights and
                                    responsibilities of a Filipino
                                    citizen
                                 </p>
                     </td>
                    <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr  >
                              <td><input type="text" name="makabansa1_1" id="makabansa1_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makabansa1_2" id="makabansa1_2"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makabansa1_3" id="makabansa1_3"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                              <td><input type="text" name="makabansa1_4" id="makabansa1_4"  maxlength="2" minlength="2" onkeyup="lov(this);"></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td style="border-top-color:transparent !important;"></td>
                     
                     <td><p>Demonstrates appropriate
                                    behavior in carrying out activities
                                    in the school, community, and
                                    country
                                 </p>
                     </td>
                      <td style="padding: 0px;">
                        <table class="table table-bordered" >
                           <tr >
                              <td><input type="text" name="makabansa2_1" id="makabansa2_1" maxlength="2" minlength="2"  onkeyup="lov(this);"></td>
                              <td><input type="text" name="makabansa2_2" id="makabansa2_2" maxlength="2" minlength="2" onkeyup="lov(this);" ></td>
                              <td><input type="text" name="makabansa2_3" id="makabansa2_3" maxlength="2" minlength="2" onkeyup="lov(this);" ></td>
                              <td><input type="text" name="makabansa2_4" id="makabansa2_4" maxlength="2" minlength="2" onkeyup="lov(this);" ></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
            </div>
            <div class="col-sm-4">
              
          <table class="table table-bordered">
            <thead>
              <th>Marking</th>
              <th>Non-numerical Rating</th>
            </thead>
            <tbody>
              <tr>
                <td>AO</td>
                <td>Always Observed</td>
              </tr>
              <tr>
                <td>SO</td>
                <td>Sometimes Observed</td>
              </tr>
              <tr>
                <td>RO</td>
                <td>Rarely Observed</td>
              </tr>
              <tr>
                <td>NO</td>
                <td>Not Observed</td>
              </tr>
            </tbody>
          </table>
            </div>
          </div>
            
         </div>
         <div class="modal-footer">
            <input type="hidden" name="lov_secID" id="lov_secID">
            <input type="hidden" name="lov_recs_ID" id="lov_recs_ID">
            <input type="submit" name="submit_lovform" class="btn btn-primary">
            <input type="hidden" name="operation" id="lov_operation" value="InsertLOV" >
            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
         </div>
         </form>
      </div>
   </div>
</div>
      <div id="view_enrolled_students_attendance" class="modal fade">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Attendance</h5>
                  
                </div>
                <form action="#" method="POST" id="sub_attendance_form">
                  <div class="modal-body">
                      <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3">
                          <label>Date </label>
                          <input type="date" name="load_spec_date" id="load_spec_date" class="form-control">
                        </div>
                        <div class="col-sm-1">
                            <label>&nbsp; </label>
                            <input type="button" class="form-control btn btn-primary btn-sm" value="LOAD" id="load_atn_in_spc_date">
                        </div>
                         <div class="col-sm-3">
                         </div>
                        <div class="col-sm-3">
                            <label>Filter</label>
                            <select class="form-control" id="filter_attendance_print">
                              <option>Day</option>
                              <option>Month</option>
                              <option>Yearly</option>
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <label>&nbsp; </label>
                            <input type="button" class="form-control btn btn-primary btn-sm" value="PRINT" id="print_atn_in_spc_date">
                        </div>
                      </div>
                    </div>
                   

                    <table class="table table-bordered" id="studentattendance_data">
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
                    <input type="submit" name="submit_attendance" value="submit_attendance" class="btn btn-primary">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
          <div id="view_enrolled_students_grade" class="modal fade">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">Grade</h5>
                 
                </div>
                <form action="#" id="studGrade_Form" method="POST">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-2">
                          <label>First </label>
                          <input type="text" class="form-control" id="g_firstgrade" name="g_firstgrade" placeholder="First Quarter" onkeyup="numberInputOnly(this);">
                        </div>
                        <div class="col-sm-2">
                          <label>Second </label>
                          <input type="text" class="form-control" id="g_secondgrade" name="g_secondgrade" placeholder="Second Quarter" onkeyup="numberInputOnly(this);">
                        </div>
                        <div class="col-sm-2">
                          <label>Third </label>
                          <input type="text" class="form-control" id="g_thirdgrade" name="g_thirdgrade" placeholder="Third Quarter" onkeyup="numberInputOnly(this);">
                        </div>
                        <div class="col-sm-2">
                          <label>Fourth </label>
                          <input type="text" class="form-control" id="g_fourthgrade" name="g_fourthgrade" placeholder="Fourth Quarter" onkeyup="numberInputOnly(this);">
                        </div>
                        <div class="col-sm-2">
                          <label>Final </label>
                          <input type="text" class="form-control" id="g_finalgrade" name="g_finalgrade" placeholder="Final Grade" onkeyup="numberInputOnly(this);">
                        </div>
                        <div class="col-sm-2">
                          <label>Remarks</label>
                          <!-- <input type="text" class="form-control" id="g_remarks" name="g_remarks" placeholder="Remarks"> -->
                          <select class="select" id="g_remarks" name="g_remarks" >
                            <option>-- SELECT --</option>
                            <option>Passed</option>
                            <option>Failed</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="g_recs_ID" id="g_recs_ID">
                     <input type="hidden" name="g_operation" id="g_operation">
                     <button type="submit" id="submit_grade" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
<script type="text/javascript" language="javascript" >
   function numberInputOnly(elem) {
                var validChars = /[0-9.]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }
             function lov(elem) {
                var validChars = /[AOSRN]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }
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

dataTable.columns( [4] ).visible( false );
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
    $(document).on('click', '.studAttendance', function(){
      var recs_ID = $(this).attr("id");
      $("#view_enrolled_students_attendance").modal('show');
    alert(recs_ID);
    });

     $(document).on('click', '.studGrade', function(){
      var recs_ID = $(this).attr("id");
      var secID_z = $('#secID_z').val();
      $("#view_enrolled_students_grade").modal('show');
      $('#g_recs_ID').val(recs_ID);
      $.ajax({
          url:"datatable/grade/fetch.php",
          type:"POST",
          data:{
            secID_z:secID_z,
            recs_ID:recs_ID
          },
          dataType:"json",
          success:function(data)
          {

          $('#g_firstgrade').val(data.first);
          $('#g_secondgrade').val(data.second);
          $('#g_thirdgrade').val(data.third);
          $('#g_fourthgrade').val(data.fourth);
          $('#g_finalgrade').val(data.final);
          $('#g_remarks').val(data.remarks).change();
         
          if (data.first != '' && 
            data.second != '' && 
            data.third != '' && 
            data.fourth != '' && 
            data.final != '' && 
             data.remarks != '' ) {
             
              $('#submit_grade').text('Update');
              $('#g_operation').val('UpdateGrade');
            }
            else{
              $('#submit_grade').text('Submit');
               $('#g_operation').val('InsertGrade');
            }
           }
    
         });

    });

    

     $(document).on('click', '.studstudLO', function(){
      var recs_ID = $(this).attr("id");
      var secID_z = $('#secID_z').val();
      $("#view_enrolled_students_lo").modal('show');
      $('#lov_secID').val(secID_z);
      $('#lov_recs_ID').val(recs_ID);
      $('#lov_form').trigger("reset");
      // $('#makadios1_1').val('');
      // $('#makadios1_2').val('');
      // $('#makadios1_3').val('');
      // $('#makadios1_4').val('');
      // $('#makadios2_1').val('');
      // $('#makadios2_2').val('');
      // $('#makadios2_3').val('');
      // $('#makadios2_4').val('');
      // $('#makatao1_1').val('');
      // $('#makatao1_2').val('');
      // $('#makatao1_3').val('');
      // $('#makatao1_4').val('');
      // $('#makatao2_1').val('');
      // $('#makatao2_2').val('');
      // $('#makatao2_3').val('');
      // $('#makatao2_4').val('');
      // $('#makakalikasan_1').val('');
      // $('#makakalikasan_2').val('');
      // $('#makakalikasan_3').val('');
      // $('#makakalikasan_4').val('');
      // $('#makabansa1_1').val('');
      // $('#makabansa1_2').val('');
      // $('#makabansa1_3').val('');
      // $('#makabansa1_4').val('');
      // $('#makabansa2_1').val('');
      // $('#makabansa2_2').val('');
      // $('#makabansa2_3').val('');
      // $('#makabansa2_4').val('');
    
      $.ajax({
          url:"datatable/grade/fetch_learner.php",
          type:"POST",
          data:{
            secID_z:secID_z,
            recs_ID:recs_ID
          },
          cache: "false",
          dataType:"json",
          success:function(data)
          {
          if (data.status == 'error') {
           $('#submit_lovform').text('Submit');
               $('#lov_operation').val('InsertLOV');
            }
            else{

          $('#makadios1_1').val(data.learnervalues[0][0]);
          $('#makadios1_2').val(data.learnervalues[0][1]);
          $('#makadios1_3').val(data.learnervalues[0][2]);
          $('#makadios1_4').val(data.learnervalues[0][3]);

          $('#makadios2_1').val(data.learnervalues[1][0]);
          $('#makadios2_2').val(data.learnervalues[1][1]);
          $('#makadios2_3').val(data.learnervalues[1][2]);
          $('#makadios2_4').val(data.learnervalues[1][3]);

          $('#makatao1_1').val(data.learnervalues[2][0]);
          $('#makatao1_2').val(data.learnervalues[2][1]);
          $('#makatao1_3').val(data.learnervalues[2][2]);
          $('#makatao1_4').val(data.learnervalues[2][3]);

          $('#makatao2_1').val(data.learnervalues[3][0]);
          $('#makatao2_2').val(data.learnervalues[3][1]);
          $('#makatao2_3').val(data.learnervalues[3][2]);
          $('#makatao2_4').val(data.learnervalues[3][3]);

          $('#makakalikasan_1').val(data.learnervalues[4][0]);
          $('#makakalikasan_2').val(data.learnervalues[4][1]);
          $('#makakalikasan_3').val(data.learnervalues[4][2]);
          $('#makakalikasan_4').val(data.learnervalues[4][3]);

          $('#makabansa1_1').val(data.learnervalues[5][0]);
          $('#makabansa1_2').val(data.learnervalues[5][1]);
          $('#makabansa1_3').val(data.learnervalues[5][2]);
          $('#makabansa1_4').val(data.learnervalues[5][3]);

          $('#makabansa2_1').val(data.learnervalues[6][0]);
          $('#makabansa2_2').val(data.learnervalues[6][1]);
          $('#makabansa2_3').val(data.learnervalues[6][2]);
          $('#makabansa2_4').val(data.learnervalues[6][3]);
          $('#submit_lovform').text('Update');
              $('#lov_operation').val('UpdateLOV');
            }
          
             
           }, 
      
    
         });


    });
   //     $(document).on('click', '#studstudLO', function(){
   //  var z = $('#makadios1_1').val();
   // if (empty(z)) {
             

   //            $('#submit_lovform').text('Submit');
   //             $('#lov_operation').val('InsertLOV');
   //          }
   //          else{
              
   //            $('#submit_lovform').text('Update');
   //            $('#lov_operation').val('UpdateLOV');
   //          }
   //    });

     



  $(document).on('submit', '#lov_form', function (event) {
      event.preventDefault();
      var lov_recs_ID =   $('#lov_secID').val();
      var lov_secID_z = $('#lov_recs_ID').val();


      var makadios1_1 = $('#makadios1_1').val();
      var makadios1_2 = $('#makadios1_2').val();
      var makadios1_3 = $('#makadios1_3').val();
      var makadios1_4 = $('#makadios1_4').val();
      var makadios2_1 = $('#makadios2_1').val();
      var makadios2_2 = $('#makadios2_2').val();
      var makadios2_3 = $('#makadios2_3').val();
      var makadios2_4 = $('#makadios2_4').val();
      var makatao1_1 = $('#makatao1_1').val();
      var makatao1_2 = $('#makatao1_2').val();
      var makatao1_3 = $('#makatao1_3').val();
      var makatao1_4 = $('#makatao1_4').val();
      var makatao2_1 = $('#makatao2_1').val();
      var makatao2_2 = $('#makatao2_2').val();
      var makatao2_3 = $('#makatao2_3').val();
      var makatao2_4 = $('#makatao2_4').val();
      var makakalikasan_1 = $('#makakalikasan_1').val();
      var makakalikasan_2 = $('#makakalikasan_2').val();
      var makakalikasan_3 = $('#makakalikasan_3').val();
      var makakalikasan_4 = $('#makakalikasan_4').val();
      var makabansa1_1 = $('#makabansa1_1').val();
      var makabansa1_2 = $('#makabansa1_2').val();
      var makabansa1_3 = $('#makabansa1_3').val();
      var makabansa1_4 = $('#makabansa1_4').val();
      var makabansa2_1 = $('#makabansa2_1').val();
      var makabansa2_2 = $('#makabansa2_2').val();
      var makabansa2_3 = $('#makabansa2_3').val();
      var makabansa2_4 = $('#makabansa2_4').val();
      var op =  $('#lov_operation').val();
    

      $.ajax({
          url:"datatable/grade/insert.php",
          type:"POST",
          data:{ 
            operation:op,
            lov_recs_ID:lov_secID_z,
            lov_secID_z:lov_recs_ID,
            makadios1_1: makadios1_1,
            makadios1_2: makadios1_2,
            makadios1_3: makadios1_3,
            makadios1_4: makadios1_4,
            makadios2_1: makadios2_1,
            makadios2_2: makadios2_2,
            makadios2_3: makadios2_3,
            makadios2_4: makadios2_4,
            makatao1_1: makatao1_1,
            makatao1_2: makatao1_2,
            makatao1_3: makatao1_3,
            makatao1_4: makatao1_4,
            makatao2_1: makatao2_1,
            makatao2_2: makatao2_2,
            makatao2_3: makatao2_3,
            makatao2_4: makatao2_4,
            makakalikasan_1: makakalikasan_1,
            makakalikasan_2: makakalikasan_2,
            makakalikasan_3: makakalikasan_3,
            makakalikasan_4: makakalikasan_4,
            makabansa1_1: makabansa1_1,
            makabansa1_2: makabansa1_2,
            makabansa1_3: makabansa1_3,
            makabansa1_4: makabansa1_4,
            makabansa2_1: makabansa2_1,
            makabansa2_2: makabansa2_2,
            makabansa2_3: makabansa2_3,
            makabansa2_4: makabansa2_4
          },
          dataType:"html",
          success:function(data)
          {
            alert(data);
             $("#view_enrolled_students_lo").modal('hide');
          
           }
         });
     
    });
    $(document).on('submit', '#studGrade_Form', function (event) {
          event.preventDefault();
        
          var secID_z = $('#secID_z').val();
          var recs_ID = $('#g_recs_ID').val();
          var g_firstgrade = $('#g_firstgrade').val();
          var g_secondgrade = $('#g_secondgrade').val();
          var g_thirdgrade = $('#g_thirdgrade').val();
          var g_fourthgrade = $('#g_fourthgrade').val();
          var g_finalgrade = $('#g_finalgrade').val();
          var g_remarks = $('#g_remarks').val();

            var op  =  $('#g_operation').val();;
          
       
       $.ajax({
          url:"datatable/grade/insert.php",
          type:"POST",
          data:{
            operation:op,
            secID_z:secID_z,
            recs_ID:recs_ID,
            g_firstgrade:g_firstgrade,
            g_secondgrade:g_secondgrade,
            g_thirdgrade:g_thirdgrade,
            g_fourthgrade:g_fourthgrade,
            g_finalgrade:g_finalgrade,
            g_remarks:g_remarks

          },
          // dataType:"json",
          success:function(data)
          {
           alert(data);
           $("#view_enrolled_students_grade").modal('hide');
           }
         });
    });
    $(document).on('click', '.print_form138', function (event) {
      
      var recs_ID = $(this).attr("id");
      var secID_z = $('#secID_z').val();
      
      window.open('print/form138?recs_ID='+recs_ID+'&tsa_ID='+secID_z,'_blank');
    });


    
   




 }
 //END OF    function load_studdata()
   

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



function load_attendancedata(tsa_ID)
 {

   var dataTablestudentattendance_data = $('#studentattendance_data').DataTable({
   
    "processing":true,
    "serverSide":true,
    "bFilter":false,
    "paging":   false,
        "ordering": false,
        "info":     false,  
    
    "ajax":{
      url:"datatable/attendance/fetch_student.php",
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


 }

 // $(document).on('click', '.attendance_tothis', function(){
 //  var tsa_ID = $(this).attr("id");
 //  $('#view_enrolled_students_attendance').modal('show');
 

 // });
  $(document).on('click', '.attendance_tothis', function(){
    var tsa_ID = $(this).attr("id");
  $('#view_enrolled_students_attendance').modal('show');
  // $('#secID_z').val(tsa_ID);
  $('#view_enrolled_students_attendance .modal-title').text("Students Attendance");
  $('#studentattendance_data').DataTable().destroy();
  if(tsa_ID != '')
  {
   load_attendancedata(tsa_ID);
  }
  else
  {
   load_attendancedata();
  }
 });

  $(document).on('click', '#load_atn_in_spc_date', function(){
    var load_spec_date = $('#load_spec_date').val();
    alert(load_spec_date);
 });

   $(document).on('click', '#print_atn_in_spc_date', function(){
    var load_spec_date = $('#load_spec_date').val();
    var filter_attendance_print = $('#filter_attendance_print').val();
    
    alert(load_spec_date + filter_attendance_print);
 });

  

  $(document).on('submit', '#sub_attendance_form', function (event) {
  event.preventDefault();
  $.ajax({
   url:"datatable/attendance/insert.php",
   type:"POST",
   data: new FormData(this),
   // dataType:"json",
   success:function(data)
   {
    alert(data);
    
    }
  });
  });
 


  
});
</script>