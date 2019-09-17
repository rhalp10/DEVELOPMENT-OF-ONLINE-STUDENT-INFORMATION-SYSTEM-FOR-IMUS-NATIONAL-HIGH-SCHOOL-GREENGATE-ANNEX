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
        if($auth_user->admin_level() ){
         echo ' <h1 class="h2">Manage Attendance</h1>';
        }
        else{
          echo ' <h1 class="h2">My Attendance</h1>';
        }
        ?>
        
      </div>
      <div class="table-responsive">
        
        <div class="container">
    <link rel="stylesheet" href="../assets/Year-Calendar-Bootstrap-4/jquery.bootstrap.year.calendar.css">
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
      <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filter year
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <button class="dropdown-item" data-id="2020" id="filter_year">2020</button>
        <button class="dropdown-item" data-id="2019" id="filter_year">2019</button>
        <button class="dropdown-item" data-id="2018" id="filter_year">2018</button>
      </div>
    </div>
    </div>

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
        <form method="post" id="account_form" enctype="multipart/form-data">
            <div class="form-row">
               <a class="dropdown-item"  data-toggle="modal" data-target="#delaccount_modal">try_dual</a>
                <div class="form-group col-md-12">
                  <label for="calendar_day"><strong>Date :</strong> <span id="onlick_cday">calendar_day</span> </label>
              
                </div>

    <form method="post" id="attendance_form" enctype="multipart/form-data">
      
   
    <table class="table table-bordered" id="room_enrolledstudents">
      <thead>
        
        <tr>
            <th>Roll No.</th>
            <th>Student Name</th>
            <th>Present/Absent</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
      
    </table>
    <input type="submit" value="Submit Attendance">
     </form>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="save_onclick_day" id="save_onclick_day" value="">
        <button type="submit" class="btn btn-primary submit" id="submit_input" value="submit_account">Submit</button>
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>
  </div>
</div>

</div>
</div>

<div class="modal fade" id="delaccount_modal" tabindex="-1" role="dialog" aria-labelledby="product_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="account_modal_title">Delete this Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
        <div class="btn-group">
        <button type="submit" class="btn btn-danger" id="account_delform">Delete</button>
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
    <script src="../assets/Year-Calendar-Bootstrap-4/jquery.bootstrap.year.calendar.js"></script>
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
          console.log(date);
          
          $('#onlick_cday').val(date);
          $('#onlick_cday').html(date);
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
             
            var dataTable = $('#account_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
              url:"datatable/account/fetch.php",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

     



          $(document).on('submit', '#account_form', function(event){
            event.preventDefault();

              $.ajax({
                url:"datatable/account/insert.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function(data)
                {
                  alertify.alert(data).setHeader('Account');
                  $('#account_form')[0].reset();
                  $('#account_modal').modal('hide');
                  dataTable.ajax.reload();
                }
              });
           
          });

          $(document).on('click', '.add', function(){
            $('#account_modal_title').text('Add New Account');
            $("#acc_username").prop("disabled", false);
            $('#account_form')[0].reset();
            $('#submit_input').show();
            $('#submit_input').text('Submit');
            $('#submit_input').val('submit_account');
            $('#operation').val("submit_account");
          });

          $(document).on('click', '.view', function(){
            var account_ID = $(this).attr("id");
            $('#account_modal_title').text('View Account');
            $('#account_modal').modal('show');
            $("#acc_pass").hide();
            $("#acc_cpass").hide();
            $("#l_acc_pass").hide();
            $("#l_acc_cpass").hide();
            
             $.ajax({
                url:"datatable/account/fetch_single.php",
                method:'POST',
                data:{action:"account_view",account_ID:account_ID},
                dataType    :   'json',
                success:function(data)
                {

                $("#acc_username").prop("disabled", true);
                $("#acc_email").prop("disabled", true);
                $("#acc_name").prop("disabled", true);
                $("#acc_lvl").prop("disabled", true);
                $("#acc_add").prop("disabled", true);

                  $('#acc_username').val(data.user_Name);
                  $('#acc_email').val(data.user_Email);
                  $('#acc_name').val(data.user_Fullname);
                  $('#acc_pass').val(data.user_Pass);
                  $('#acc_lvl').val(data.lvl_ID).change();
                  
                  $('#acc_cpass').val(data.user_Pass);
                  $('#acc_add').val(data.user_Address);

                  $('#submit_input').hide();
                  $('#account_ID').val(account_ID);
                  $('#submit_input').text('Update');
                  $('#submit_input').val('account_edit');
                  $('#operation').val("account_edit");
                  
                }
              });


            });
          $(document).on('click', '.edit', function(){
            var account_ID = $(this).attr("id");
            $('#account_modal_title').text('Edit Account');
            $('#account_modal').modal('show');
          
            $("#acc_pass").show();
            $("#acc_cpass").show();
            $("#l_acc_pass").show();
            $("#l_acc_cpass").show();

            
             $.ajax({
                url:"datatable/account/fetch_single.php",
                method:'POST',
                data:{action:"account_view",account_ID:account_ID},
                dataType    :   'json',
                success:function(data)
                {
                  $("#acc_username").prop("disabled", true);
                  $("#acc_email").prop("disabled", false);
                  $("#acc_name").prop("disabled", false);
                  $("#acc_lvl").prop("disabled", false);
                  $("#acc_add").prop("disabled", false);
                  $("#acc_pass").prop("disabled", false);
                  $("#acc_cpass").prop("disabled", false);

                  $('#acc_username').val(data.user_Name);
                  $('#acc_email').val(data.user_Email);
                  $('#acc_name').val(data.user_Fullname);
                  $('#acc_pass').val(data.user_Pass);
                  $('#acc_lvl').val(data.lvl_ID).change();
                  
                  $('#acc_cpass').val(data.user_Pass);
                  $('#acc_add').val(data.user_Address);

                  $('#submit_input').show();
                  $('#account_ID').val(account_ID);
                  $('#submit_input').text('Update');
                  $('#submit_input').val('account_update');
                  $('#operation').val("account_edit");
                  
                }
              });


            });
            $(document).on('click', '.delete', function(){
            var account_ID = $(this).attr("id");
             $('#delaccount_modal').modal('show');
             $('.submit').hide();
             
             $('#account_ID').val(account_ID);
            });

           


          $(document).on('click', '#account_delform', function(event){
             var account_ID =  $('#account_ID').val();
            $.ajax({
             type        :   'POST',
             url:"datatable/account/insert.php",
             data        :   {operation:"delete_account",account_ID:account_ID},
             dataType    :   'json',
             complete     :   function(data) {
               $('#delaccount_modal').modal('hide');
               alertify.alert(data.responseText).setHeader('Delete this Account');
               dataTable.ajax.reload();
               dataTable_product_data.ajax.reload();
                
             }
            })
           
          });
          
          } );


        $(document).on('click', '#filter_year', function(){
            var filter_year = $(this).attr("data-id");
            alert(filter_year);
            try_calendar(filter_year);
            });





        </script>
        </body>

</html>
