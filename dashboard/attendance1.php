<?php 
include('../session.php');


require_once("../class.user.php");

  
$auth_user = new USER();
// $page_level = 3;
// $auth_user->check_accesslevel($page_level);
if($auth_user->admin_level() ){
  $pageTitle = "Manage Account";
}
else{
  $pageTitle = "Attendance";
}

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
       
        <?php 
        if($auth_user->admin_level() || $auth_user->instructor_level()){
         echo ' <h1 class="h2">Manage Attendance </h1>';
      



        $room_adviser= "";
        $room_section= "";
        $room_academicyear = "";
         if(isset($_REQUEST['room_ID'])){
            $room_ID = $_REQUEST['room_ID'];
            $gar = $auth_user->get_attendance_room($room_ID) ;

              foreach ($gar as $row){
                if($row["suffix"] =="N/A")
                {
                  $suffix = "";
                }
                else
                {
                  $suffix = $row["suffix"];
                }
                if($row["rid_MName"] ==" " || $row["rid_MName"] == NULL || empty($row["rid_MName"]) )
                {
                  $mname = " ";
                }
                else
                {
                  $mname = $row["rid_MName"].'. ';
                }
                  $room_adviser=  $row["rid_FName"].' '.$mname.$row["rid_LName"].' '.$suffix;
                  $room_section= $row["section_Name"];
                  $room_academicyear = $row["semyear"];
             }
         }
        
      

        }
        else{
          echo ' <h1 class="h2">My Attendance</h1>';
        }
        ?>
        
      </div>
      <div class="table-responsive">
        
    <div class="container">
      <div class="card text-center">
  <div class="card-header ">
    <h5><?php echo ucfirst($room_section)?></h5>
  </div>
  <div class="card-body">
    <div class='row'>
      <div class="col-sm-4">
     
        <strong>Academic Year:</strong>(<?php echo $room_academicyear?>)
      </div>
       <div class="col-sm-4">
        <strong>Adviser:</strong><?php echo $room_adviser?>
      </div>
       <div class="col-sm-4">
        <button class="btn btn-secondary btn-sm " data-toggle="modal" data-target="#studentlist_modal">Student List</button>
      </div>
    </div>
  </div>
  <div class="card-footer ">
    <div class="float-left">
      <strong>LEGEND:</strong>
      PRESENT: <span class="present-append">|</span>
      ABSENT: <span class="absent-append">|</span>
    </div>

    <div class="text-center">
      <strong>TOTAL:</strong>
      PRESENT: <span >(123)</span>
      ABSENT: <span> (0)</span>
    </div>
    <div class="float-right" style="margin-top:-20px;">
      <div class="dropdown">
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        Filter year
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" data-id="2020" id="filter_year">2020</button>
        <button class="dropdown-item" data-id="2019" id="filter_year">2019</button>
        <button class="dropdown-item" data-id="2018" id="filter_year">2018</button>
      </div>
    </div>
    </div>
  </div>
</div>
    <link rel="stylesheet" href="../assets/plugins/yearcalendar/jquery.bootstrap.year.calendar.css">
   
    <br>
    <div class="calendar"></div>
 

<div class="modal fade" id="calendar_modal" tabindex="-1" role="dialog" aria-labelledby="product_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="account_modal_title">Attendance </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" id="attendance_form" enctype="multipart/form-data">
  
             <!--   <a class="dropdown-item"  data-toggle="modal" data-target="#delaccount_modal">try_dual</a> -->
                <div class="form-group col-md-12">
                  <label for="calendar_day"><strong>Date :</strong> <span id="onlick_cday">calendar_day</span> </label>
              
                </div>

      
   
    <table class="table table-bordered" id="roomstudent_data_atnd">
      <thead>
        
        <tr>
            <th>Roll No.</th>
            <th >LRN</th>
            <th>Student Name</th>
            <th>Sex</th>
            <th>Present/Absent</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      
    </table>
      <div class="modal-footer">
        <input type="hidden" name="room_ID" id="room_ID" value="<?php echo $room_ID?>">
        <input type="hidden" name="this_day" id="this_day">
        <input type="hidden" name="operation" id="operation" value="submit_attendance">
        <button type="submit" class="btn btn-primary submit" id="submit_input" value="submit_attendance">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
       </form>

    </div>
  </div>
</div>

</div>
</div>






<!-- Modal -->
<div class="modal fade" id="studentlist_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List of Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding:0px;">
      <table class="table table-bordered" id="roomstudent_data">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">LRN</th>
            <th scope="col">Full Name</th>
            <th scope="col">Sex</th>
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




    </main>
  </div>
</div>

<?php 
include('x-script.php');
?>
    <script src="../assets/plugins/yearcalendar/jquery.bootstrap.year.calendar.js"></script>
    <style>
    /*FOR STUDENT ATTENDANCE*/

      .absent-append{
          background-color:red;
          color:red;
          width:1px !important;
          height:1px !important;
      }
       .present-append{
          background-color:green;
          color:green;
          width:1px !important;
          height:1px !important;
      }
    </style>
    <script>
    try_calendar();
    function try_calendar(year){
       $('.calendar').calendar({
        startYear: year,
        maxYear: year,
        minYear: year,
      });

      $('.calendar').on('jqyc.dayChoose', function (event) {
          var choosenYear = $(this).data('year');
          var choosenMonth = $(this).data('month');
          var choosenDay = $(this).data('day-of-month');
          var date = new Date(choosenYear, choosenMonth, choosenDay);
          // 2019-09-18
          var ymd  = choosenYear+'-'+choosenMonth+'-'+choosenDay ;
          console.log(date);
          console.log(ymd);
          
          $('#onlick_cday').val(date);
          $('#onlick_cday').html(date);
          $('#this_day').val(ymd);

          $('#calendar_modal').modal('show');
      });
           /* FOR STUDENT ATTENDANCE*/
      <?php 
      echo "present_thisDay('absent',2020, 4, 4);
      present_thisDay('present',2020, 4, 5);";
      ?>
      present_thisDay('absent',2020, 3, 4);
      present_thisDay('present',2020, 3, 5);

      present_thisDay('absent',2019, 2, 4);
      present_thisDay('present',2019, 2, 5);
 



    }

    function present_thisDay(status,y,m,d){
        if(status == "absent")
        {
          $('.calendar').calendar('appendText', '|', y, m, d,'absent-append');
        }
        else{
          $('.calendar').calendar('appendText', '|', y, m, d,'present-append');
        }   
      }


      
      

</script>
        <script type="text/javascript">
   


          $(document).ready(function() {

          
              var dataTable = $('#roomstudent_data').DataTable({
                "processing":true,
                "serverSide":true,
                "order":[],
                "bAutoWidth": false,
                "searching": false,
                "paging":   false,
                "ordering": false,
                "info":     false,
                "ajax":{
                  url:"datatable/attendance/fetch_student.php?room_ID=<?php echo $room_ID ?>",
                  type:"POST"
                },
                "columnDefs":[
                  {
                    "targets":[0],
                    "orderable":false,
                  },
                ],

              });

                 var dataTable1 = $('#roomstudent_data_atnd').DataTable({
                "processing":true,
                "serverSide":true,
                "order":[],
                "bAutoWidth": false,
                "searching": false,
                "paging":   false,
                "ordering": false,
                "info":     false,
                "ajax":{
                  url:"datatable/attendance/fetch_student.php?room_ID=<?php echo $room_ID ?>",
                  type:"POST"
                },
                "columnDefs":[
                  {
                    "targets":[0],
                    "orderable":false,
                  },
                ],

              });

            $(document).on('submit', '#attendance_form', function(event){
            event.preventDefault();
          
              $.ajax({
                url:"datatable/attendance/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                    alert("submit");
                  // alertify.alert(data).setHeader('Account');
                  // $('#account_form')[0].reset();
                  // $('#account_modal').modal('hide');
                  // dataTable.ajax.reload();
                }
              });
           
          });

            
             
           
          } );


        $(document).on('click', '#filter_year', function(){
            var filter_year = $(this).attr("data-id");
            alert(filter_year);
            $('#dropdownMenu2').text(filter_year);
            try_calendar(filter_year);
            });





        </script>
        </body>

</html>
