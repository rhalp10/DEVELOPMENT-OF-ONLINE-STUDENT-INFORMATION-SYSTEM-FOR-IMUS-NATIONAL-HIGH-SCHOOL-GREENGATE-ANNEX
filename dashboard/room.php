<?php 
include('../session.php');


require_once("../class.user.php");

  
$auth_user = new USER();
// $page_level = 3;
// $auth_user->check_accesslevel($page_level);
$pageTitle = "Manage Room";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php 
      include('x-meta.php');
    ?>


  <?php 
  include('x-css.php');
  ?>
 



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
<?php 
include('x-nav.php');
?>

<div class="container-fluid">
  <div class="row">
      <?php 
    include('x-sidenav.php');
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Room</h1>
        
      </div>

      <div class="table-responsive">
         <button type="button" class="btn btn-sm btn-success add" >
            Add 
          </button>
         <br><br>
        <table class="table table-striped table-sm" id="section_data">
          <thead>
            <tr>
              <th>#</th>
              <th>Adviser</th>
              <th>Section</th>
              <th>Semester</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>
        <style>

          #room_admin .nav-item  a {
            background-color:#adb5bd;
          }
          #room_admin .nav-item .active a{
            background-color:#39833c;
          }
        </style>






<div class="modal fade" id="room_modal" tabindex="-1" role="dialog" aria-labelledby="room_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="room_modal_title">Add Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="product_modal_content">
     <div class="btn-group float-right" >
                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#browse_teacher_modal">BROWSE TEACHER</button>
              </div>
                <br><br>
      <form method="post" id="room_form" enctype="multipart/form-data">
            <div class="form-row">
             
                <div class="form-group col-md-12">
                  <label for="teacher_name">Teacher Name<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="teacher_name" name="teacher_name" placeholder="" value=""  required="" >
                </div>
                  <div class="form-group col-md-6">
                  <label for="teacher_section">Section<span class="text-danger">*</span></label>
                  <select class="form-control" id="teacher_section" name="teacher_section">
                  <?php 
                   $auth_user->ref_section();
                  ?>
                </select>
                </div>
                  <div class="form-group col-md-6">
                  <label for="teacher_semester">Semester<span class="text-danger">*</span></label>
                  <select class="form-control" id="teacher_semester" name="teacher_semester">
                  <?php 
                   $auth_user->ref_semester();
                  ?>
                </select>
                </div>
               
      </div>
      <div class="modal-footer">
        <input type="hidden" name="teacher_ID" id="teacher_ID" />
        <input type="hidden" name="room_ID" id="room_ID" />
        <input type="hidden" name="operation" id="operation" />
        <div class="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary submit" id="submit_input" value="submit_room">Submit</button>
        </div>
      </div>
       </form>
    </div>
  </div>
</div>


</div>







<!-- VIEW ROOM MODAL -->
<div class="modal fade" id="view_room_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <?php 
            $gas =  $auth_user->get_active_sem();  

             foreach($gas as $sem)
             {
               $active_sem_ID =  $sem["sem_ID"];
               $sem_year =  $sem["sem_year"];
             }
            ?>
          <table class="table table-bordered">
          <tbody>
            <tr>
              <td width="10%">Semester </td>
              <td><span id="room_semester">room_semester</span></td>
            </tr>

            <tr>
              <td>Adviser</td>
              <td><span id="room_adviser">room_adviser</span></td>
            </tr>
          </tbody>
          
        </table>
        
        <br><br>
        <div class="tab" >
  <button class="tablinks active" onclick="openTab(event, 'erol_stud')">Enrolled Student</button>
  <button class="tablinks" onclick="openTab(event, 'erol_sub')">Subjects</button>
</div>

<div id="erol_stud" class="tabcontent" style="display: block;">
   <div class="btn-group float-right" >
      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#browse_enrolledstudent_modal">BROWSE STUDENT</button>
    </div>
      <br><br>
    <table class="table table-bordered" id="room_enrolledstudents">
      <thead>
        
        <tr>
          <th>LRN</th>
          <th>NAME</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      
    </table>
   
</div>

<div id="erol_sub" class="tabcontent" style="display: none;">
  <div class="btn-group float-right" >
    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#browse_subject_modal">BROWSE SUBJECT</button>
  </div>
  <br><br>
  <table class="table table-bordered" id="room_subject_data">
      <thead>
        <tr>
          <th>CODE</th>
          <th>SUBJECT</th>
          <th>TEACHER</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      
    </table>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>











<!-- Modal -->
<div class="modal fade" id="browse_enrolledstudent_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enrolled Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-sm" id="enrolledstudent_data">
          <thead>
            <tr>
              <th >#</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="browse_subject_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SUBJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-sm" id="subject_data">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Position</th>
              <th>Subject</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="browse_teacher_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TEACHER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-sm" id="teacher_data">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Position</th>
              <th>Subject</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
















<div class="modal fade" id="delroom_modal" tabindex="-1" role="dialog" aria-labelledby="room_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="room_modal_title">Delete this Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
        <div class="btn-group">
        <button type="submit" class="btn btn-danger" id="room_delform">Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </main>
  </div>
</div>

<?php 
include('x-script.php');
?>
        <script type="text/javascript">
   


          $(document).ready(function() {
             
            var dataTable = $('#section_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
              url:"datatable/room/fetch.php",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

            var enrolledstudent_dataTable = $('#enrolledstudent_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
              "bAutoWidth": false,
            "ajax":{
              url:"datatable/room/fetch_enrolledstudent.php?semester=<?php echo $active_sem_ID?>",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });


        var teachersubject_dataTable = $('#subject_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
              "bAutoWidth": false,
            "ajax":{
              url:"datatable/room/fetch_subject.php?semester=<?php echo $active_sem_ID?>",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

        var teacher_dataTable = $('#teacher_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
              "bAutoWidth": false,
            "ajax":{
              url:"datatable/room/fetch_subject.php",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

  //JQUERY FOR SELECTING ENROLLED STUDENT  WHEN BROWSING
   //----------------------------------------------------------------
    var enrolstuddt_Rec = '#enrolledstudent_data tbody';

    $(enrolstuddt_Rec).on('click', 'tr', function(){
      
      var cursor = enrolledstudent_dataTable.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
       if(confirm("Are you sure you want to add "+data[1]+" in this room?"))
    {

      $('#staff_form').find("input[name='teacher_ID'][type='hidden']").val(data[0]);
      $('#staff_form').find("input[name='staff_name'][type='text']").val(data[2]);
      
      var rx_ID = jQuery('#room_ID').val();

       $.ajax({
             type        :   'POST',
             url:"datatable/room/insert.php",
              data:{operation:"submit_room_student",enrolled_ID:data[0],room_ID:rx_ID},
             dataType    :   'json',
             complete     :   function(data) {

               alertify.alert(data.responseText).setHeader('Room');

              $('#room_enrolledstudents').DataTable().destroy();
              student_inroom(rx_ID);

             
             }
            });



    }
      else
    {
      return false; 
    }
      $('#browse_enrolledstudent_modal').modal('hide');
      
    });

  //JQUERY FOR SELECTING SUB TEACHER IN ROOM  WHEN BROWSING
  //----------------------------------------------------------------
    var subteach_Rec = '#subject_data tbody';

    $(subteach_Rec).on('click', 'tr', function(){
      
      var cursor = teachersubject_dataTable.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
       if(confirm("Are you sure you want to add ("+data[3]+") handle by ("+data[1]+") in this room?"))
        {

          $('#staff_form').find("input[name='teacher_ID'][type='hidden']").val(data[0]);
          $('#staff_form').find("input[name='staff_name'][type='text']").val(data[2]);
          var rx_ID = jQuery('#room_ID').val();

          $.ajax({
               type        :   'POST',
               url:"datatable/room/insert.php",
                data:{operation:"submit_room_subject",acadsub_ID:data[0],room_ID:rx_ID},
               dataType    :   'json',
               complete     :   function(data) {

                  alertify.alert(data.responseText).setHeader('Room');
                  $('#room_subject_data').DataTable().destroy();
                  subject_inroom(rx_ID);
               }
              });

        }
          else
        {
          return false; 
        }
      $('#browse_subject_modal').modal('hide');
      
    });

  //JQUERY FOR SELECTING  TEACHER FOR ROOM  WHEN BROWSING
  //----------------------------------------------------------------
    var teach_Rec = '#teacher_data tbody';

    $(teach_Rec).on('click', 'tr', function(){
      
      var cursor = teacher_dataTable.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
       if(confirm("Are you sure you want to use ("+data[1]+") for this room?"))
        {

          $('#room_form').find("input[name='teacher_ID'][type='hidden']").val(data[0]);
          $('#room_form').find("input[name='teacher_name'][type='text']").val(data[1]);

        }
          else
        {
          return false; 
        }
      $('#browse_teacher_modal').modal('hide');
      
    });





        function student_inroom(roomID){

          var room_enrolledstudents_dataTable = $('#room_enrolledstudents').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "bAutoWidth": false,
            "searching": false,
            "paging":   false,
            "ordering": false,
            "info":     false,

            "ajax":{
              url:"datatable/room/fetch_enrolledstudent_inroom.php?room_ID="+roomID,
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

        }

         function subject_inroom(roomID){

          var room_subject_dataTable = $('#room_subject_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "bAutoWidth": false,
            "searching": false,
            "paging":   false,
            "ordering": false,
            "info":     false,

            "ajax":{
              url:"datatable/room/fetch_subject_inroom.php?room_ID="+roomID,
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

        }
        
         


            



          $(document).on('submit', '#room_form', function(event){
            event.preventDefault();

              $.ajax({
                url:"datatable/room/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                  alertify.alert(data).setHeader('Section');
                  $('#room_form')[0].reset();
                  $('#room_modal').modal('hide');
                  dataTable.ajax.reload();
                }
              });
           
          });

          $(document).on('click', '.add', function(){
            $('#room_modal_title').text('Add Room');
            $("#teacher_name").prop("disabled", true);
            $('#room_form')[0].reset();
            $('#room_modal').modal('show');
            $('#submit_input').show();
            $('#submit_input').text('Submit');
            $('#submit_input').val('submit_room');
            $('#operation').val("submit_room");
          });

          $(document).on('click', '.view', function(){
            var room_ID = $(this).attr("id");
            $('#view_room_modal').modal('show');
    

              $.ajax({
                  type        :   'POST',
                  url:"datatable/room/fetch_viewroom.php",
                  data:{action:"room_view",room_ID:room_ID},
                  dataType    :   'json',
                  complete     :   function(data) {

                    $('#room_semester').text(data.responseJSON.semyear);
                    $('#room_adviser').text(data.responseJSON.room_adviser);
                   
                    $('#room_enrolledstudents').DataTable().destroy();
                    $('#room_subject_data').DataTable().destroy();
                    subject_inroom(room_ID);
                    student_inroom(room_ID);

                    $('#room_ID').val(room_ID);
                  }
              });

            });

          $(document).on('click', '.edit', function(){
            var section_ID = $(this).attr("id");
            $('#room_modal_title').text('Edit Section');
            $('#section_modal').modal('show');
            $("#submit_input").show();

            
             $.ajax({
                url:"datatable/room/fetch_single.php",
                method:'POST',
                data:{action:"section_view",section_ID:section_ID},
                dataType    :   'json',
                success:function(data)
                {

                  
                $("#section_title").prop("disabled", false);

                  $('#section_title').val(data.section_Name);

                  $('#submit_input').show();
                  $('#room_ID').val(room_ID);
                  $('#submit_input').text('Update');
                  $('#submit_input').val('room_update');
                  $('#operation').val("room_edit");
                  
                }
              });


            });
            $(document).on('click', '.delete', function(){
            var room_ID = $(this).attr("id");
             $('#delroom_modal').modal('show');
             $('.submit').hide();
             
             $('#room_ID').val(room_ID);
            });

           


          $(document).on('click', '#room_delform', function(event){
             var room_ID =  $('#room_ID').val();
            $.ajax({
             type        :   'POST',
             url:"datatable/room/insert.php",
             data        :   {operation:"delete_room",room_ID:room_ID},
             dataType    :   'json',
             complete     :   function(data) {
               $('#delroom_modal').modal('hide');
               alertify.alert(data.responseText).setHeader('Delete this Room');
               dataTable.ajax.reload();
               dataTable_product_data.ajax.reload();
                
             }
            })
           
          });
          
          } );

function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
        </script>
        </body>

</html>
