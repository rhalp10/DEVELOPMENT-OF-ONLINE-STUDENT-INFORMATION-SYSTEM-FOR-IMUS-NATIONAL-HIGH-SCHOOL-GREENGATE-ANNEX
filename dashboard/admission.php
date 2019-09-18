<?php 
include('../session.php');


require_once("../class.user.php");

  
$auth_user = new USER();
// $page_level = 3;
// $auth_user->check_accesslevel($page_level);
$pageTitle = "Manage Admission";
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
        <h1 class="h2">Manage Admission</h1>
        
      </div>

      <div class="table-responsive">
         <br><br>
        <table class="table table-striped table-sm" id="admission_data">
          <thead>
            <tr>
              <th>#</th>
              <th>Date</th>
              <th>Gradelevel</th>
              <th>Name</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
     
          </tbody>
        </table>


<div class="modal fade" id="admission_modal" tabindex="-1" role="dialog" aria-labelledby="admission_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="admission_modal_title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="admission_modal_content">
        <div class="tab" >
          <button class="tablinks active" onclick="openTab(event, 'a_fz')">A. Student Info</button>
          <button class="tablinks" onclick="openTab(event, 'b_fz')">B. Other Info</button>
          <button class="tablinks" onclick="openTab(event, 'c_fz')">C. Requirement Files</button>
        </div>

        <div id="a_fz" class="tabcontent" style="display: block;">
          <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Gradelevel:</label>
                                                                 <strong><div id="yl_Name"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                      <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Enrolee Name:</label>
                                                                 <strong><div id="fullname"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                   <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Birthday:</label>
                                                                 <strong><div id="birthday"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>

                                                   <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Age as of June this year:</label>
                                                                 <strong><div id="age"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>Sex:</label>
                                                                 <strong><div id="sex"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Complete Address:</label>
                                                                  <strong><div id="completeadd"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>House:</label>
                                                                 <strong><div id="house"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Name of Parent or Guardian:</label>
                                                                  <strong><div id="guardianfullname"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>  
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Active Contact Number of Parent or (Graduation) Guardian:</label>
                                                                 <strong><div id="contact"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>(Alternate Number):</label>
                                                                 <strong><div id="altcontact"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>   
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Job or Work of Parent or Guardian:</label>
                                                                 <strong><div id="parentwork"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>To whom the student is staying or living with?:</label>
                                                                 <strong><div id="enrolee_living"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
        </div>

        <div id="b_fz" class="tabcontent" style="display: none;">
          <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Height:</label>
                                                                 <strong><div id="enrolee_height"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>BMI status:</label>
                                                                 <strong><div id="admission_bmistat"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Weight:</label>
                                                                 <strong><div id="admission_weight"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-6">
                                                                 <label>Agree to end in school feeding program?:</label>
                                                                 <strong><div id="admission_FeedProgReason"></div></strong>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <label>Agree to take deworming tablets 2 times a year?:</label>
                                                                 <strong><div id="admission_DewormingReason"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div> 
                                                  <div class="form-group">
                                                       <div class="row">
                                                            <div class="col-sm-12">
                                                                 <label>Medical history / immunization Taken and Data</label>
                                                                 
                                                            </div>
                                                            <div class="col-sm-12">
                                                                 
                                                                 <table class="table table-bordered">
                                                                  <tbody>
                                                                       <tr>
                                                                            <td id="deceaseName1"></td>
                                                                            <td  id="medDeceaseDate1"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName2"></td>
                                                                            <td  id="medDeceaseDate2"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName3"></td>
                                                                            <td  id="medDeceaseDate3"></td>
                                                                       </tr>
                                                                       <tr>
                                                                            <td  id="deceaseName3"></td>
                                                                            <td  id="medDeceaseDate4"></td>
                                                                       </tr>
                                                                  </tbody>
                                                                 </table>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                 <strong><div id="admission_DewormingReason"></div></strong>
                                                            </div>
                                                       </div>
                                                  </div>
        </div>

        <div id="c_fz" class="tabcontent" style="display: none;">
      c
        </div>
     
      </div>
      <div class="modal-footer">
            <input type="hidden" name="admission_ID" id="admission_ID" />
        <input type="hidden" name="operation" id="operation" />
        <div class="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" class="btn btn-primary submit" id="submit_input" value="submit_admission">Submit</button> -->
        </div>
      </div>
    
  </div>
</div>


      </div>

<div class="modal fade" id="deladmission_modal" tabindex="-1" role="dialog" aria-labelledby="admission_modal_title" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="admission_modal_title">Delete this Admission</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
        <div class="btn-group">
        <button type="submit" class="btn btn-danger" id="admission_delform">Delete</button>
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
   

          function getAge(DOB) {
              var today = new Date();
              var birthDate = new Date(DOB);
              var age = today.getFullYear() - birthDate.getFullYear();
              var m = today.getMonth() - birthDate.getMonth();
              if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                  age = age - 1;
              }

              return age;
          }
          $(document).ready(function() {
             
            var dataTable = $('#admission_data').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
              url:"datatable/admission/fetch.php",
              type:"POST"
            },
            "columnDefs":[
              {
                "targets":[0],
                "orderable":false,
              },
            ],

          });

 
            
       

             $(document).on('click', '.view', function () {
              var admission_ID = $(this).attr("id");
              $('#admission_modal').modal('show');
              $( "#c_fz" ).load( "admission_files.php?admission_ID="+admission_ID );
               $('#admission_modal_title').text('View Admission');   
              
                  $.ajax({
                       url: "datatable/admission/fetch_single.php",
                       type: "POST",
                       data: {
                            action: "fetch_single",
                            admission_ID: admission_ID
                       },
                       dataType:"json",
                       success: function (data) {
                            $('#admissionconfirm_modal').modal('show');

                            $('#fullname').text(data.admission_Name);
                            $('#birthday').text(data.admission_Bday);
                            $('#age').text(getAge(data.admission_Bday));
                            $('#house').text(data.admission_House);
                            $('#sex').text(data.sex_Name);
                            $('#completeadd').text(data.admission_Address);
                            $('#contact').text(data.admission_Contact);
                            $('#altcontact').text(data.admission_Altcontact);
                            $('#guardianfullname').text(data.admission_Parent);
                            $('#parentwork').text(data.admission_ParentWork);
                            $('#enrolee_living').text(data.admission_Living);
                            $('#enrolee_height').text(data.admission_Height);
                            $('#enrolee_weight').text(data.admission_Weight);
                            $('#admission_bmistat').text(data.admission_BMIStat);
                            $('#admission_FeedProgReason').text(data.admission_FeedProgReason);
                            $('#admission_DewormingReason').text(data.admission_DewormingReason);
                            $('#admission_medDecease').text(data.admission_medDecease);
                            $('#admission_medDeceaseDate').text(data.admission_medDeceaseDate);
                            $('#yl_Name').text(data.yl_Name);
                            $('#deceaseName1').text(data.admission_medDecease[0]);
                            $('#deceaseName2').text(data.admission_medDecease[1]);
                            $('#deceaseName3').text(data.admission_medDecease[2]);
                            $('#deceaseName4').text(data.admission_medDecease[3]);
                            $('#medDeceaseDate1').text(data.admission_medDeceaseDate[0]);
                            $('#medDeceaseDate2').text(data.admission_medDeceaseDate[1]);
                            $('#medDeceaseDate3').text(data.admission_medDeceaseDate[2]);
                            $('#medDeceaseDate4').text(data.admission_medDeceaseDate[3]);


                       }
                  });

             });

            $(document).on('click', '.delete', function(){
            var admission_ID = $(this).attr("id");
             $('#deladmission_modal').modal('show');
             $('.submit').hide();
             
             $('#admission_ID').val(admission_ID);
            });

            $(document).on('click', '.confirm', function(){
            var admission_ID = $(this).attr("id");

            alertify.confirm('Do are you sure you want to confirm this will notify the student to submit requirements?', 
              function(){ 
                $.ajax({
                 type        :   'POST',
                 url:"datatable/admission/insert.php",
                 data        :   {operation:"confirm_admission",admission_ID:admission_ID},
                 dataType    :   'json',
                 complete     :   function(data) {
                   alertify.alert(data.responseText).setHeader('Confirm Admission');
                   dataTable.ajax.reload();
                   alertify.success('Success') ;
                    
                 }
                })
              }, 
              function(){
               alertify.error('Cancel')
              }).setHeader('Admission');;


             if (confirm("Confirm Admission")) {
             
             }
             else {
                  return false;
              }
             
            });


          $(document).on('click', '#admission_delform', function(event){
              var admission_ID =  $('#admission_ID').val();
              $('#admission_modal_title').text('Delete this Admission'); 
              $.ajax({
               type        :   'POST',
               url:"datatable/admission/insert.php",
               data        :   {operation:"delete_Admission",admission_ID:admission_ID},
               dataType    :   'json',
               complete     :   function(data) {
                 $('#deladmission_modal').modal('hide');
                 alertify.alert(data.responseText).setHeader('Delete this Admission');
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
