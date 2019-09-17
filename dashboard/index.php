<?php 
include('../session.php');


require_once("../class.user.php");

  
$auth_user = new USER();
// $page_level = 3;
// $auth_user->check_accesslevel($page_level);
$pageTitle = "Dashboard";
?>
<!doctype html>
<html lang="en">
  <head>
    <?php 
      include('x-meta.php');
    ?>


    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../assets/css/icomoon/styles.css" rel="stylesheet" type="text/css">


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
     <!--    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1> 
      </div>-->

    <div class="row">
                <div class="col-sm-12 text-center " style="min-height: 100px;">
                     <img src="../assets/img/logo/new_logo.png" height="80" style="margin-left: -480px;"> <H3 style="margin-top: -50px;">IMUS NATIONAL HIGH SCHOOL<br>GREENGATE ANNEX</H3>
                </div>
            </div>
            <div class="row" >
              <?php if($auth_user->admin_level() || $auth_user->instructor_level()){ ?>
              <div class="col-6 col-sm-6" style="padding-bottom:5px;">
                <div class="card ">
                  <div class="card-header text-center" style=" border-bottom: 5px solid ;">
                   <strong>MISSION</strong>
                  </div>
                  <div class="card-body text-center"  style="min-height: 250px">
                    commits itself to enhance each student’s intellect, promote safe, motivating and supportive environment, strengthen moral and spiritual values, prepare them to act on their belief and accept challenges in life.
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-6" style="padding-bottom:5px;">
                <div class="card ">
                  <div class="card-header text-center" style=" border-bottom: 5px solid ;">
                    <strong>VISION</strong>
                  </div>
                  <div class="card-body text-center"  style="min-height: 250px">
                    envisions its completers as individuals who transform holistically with integrity, ready for global competitiveness and has strong personality in facing the reality of life.

                  </div>
                </div>
              </div>
              <?php } ?>
              <?php  if($auth_user->student_level()) { ?>
              <div class="col-12 col-sm-12" style="padding-bottom:5px;">
                <div class="card ">
                  <div class="card-header bg-primary text-white" style=" border-bottom: 5px solid #adb5bd ;">
                    <strong>Basic Information</strong>
                  </div>
                  <div class="card-body "  style="min-height: 250px">
                    <div class="row">
                      <div class="col-lg-4">
                        <img src="<?php $auth_user->getUserPic();?>"  height="125" width="125"  class="rounded-circle"  style="border:1px solid; border-color: #4caf50;">
                      </div>

                      <div class="col-lg-8">
                        <h3><b>NAME:</b> <?php  $auth_user->profile_name()?> </h3>
                        <h3><b>LRN:</b> <?php  $auth_user->profile_school_id()?></h3>
                        <h3><b>GENDER:</b> Male</h3>
                        
                      </div>
                    </div>

                  </div>
                </div>
              </div>

               <div class="col-12 col-sm-12" style="padding-bottom:5px;">
                <div class="card ">
                  <div class="card-header bg-primary text-center text-white" style=" border-bottom: 5px solid #adb5bd ;">
                    <strong>Access your information quickly</strong>
                  </div>
                  <div class="card-body text-center"  style="min-height: 250px">
                    <div class="row">
                    <div class="col-lg-4 text-center">
                      <i class="icon-book" style="font-size: 100px;" data-toggle="modal" data-target="#enrolled_subject"></i>
                      <span data-feather="user" data-toggle="modal" data-target="#enrolled_subject"></span>
                      <br>
                      <h3>Enrolled Subject</h3>
                    </div>
                    <div class="col-lg-4 text-center">
                      <i class="icon-clipboard" style="font-size: 100px;" data-toggle="modal" data-target="#enrolled_subject_grade"></i>
                      <br>
                      <h3>Latest Grade</h3>
                    </div>
                    <div class="col-lg-4 text-center">
                      <i  onclick="goto_attendance()" class="icon-calendar" style="font-size: 100px;" ></i>
                      <br>
                      <h3>Attendance</h3>
                    </div>
                  </div>

                  </div>
                </div>
              </div>
              <?php } ?>

            </div>

<!-- Modal -->
<div class="modal fade" id="enrolled_subject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enrolled Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              School Year: 2019 - 2020
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
           <table class="table table-bordered">
            <thead class="bg-primary text-white">
              <tr>
                <th>Schedule Code</th>
            <th>Description</th>
            <th>Status</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              School Year: 2019 - 2020
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-primary text-white">
                <tr>
                  <th>Schedule Code</th>
              <th>Description</th>
              <th>Status</th>
                </tr>
              </thead>
              <tbody>
                



              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              School Year: 2019 - 2020
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-primary text-white">
                <tr>
                  <th>Schedule Code</th>
              <th>Description</th>
              <th>Status</th>
                </tr>
              </thead>
              <tbody>
                



              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>









<!-- Modal -->
<div class="modal fade" id="enrolled_subject_grade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Latest Grade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered ">
      <thead>
        <tr class="bg-primary text-white">
          <th>Schedule Code</th>
      <th>Description</th>
      <th>First</th>
      <th>Second</th>
      <th>Third</th>
      <th>Fourth</th>
      <th>Total</th>
        </tr>
      </thead>
      <tbody>
        
        
              <tr>
            <td>201922423</td>
            <td>Filipino</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
      </tr>
              <tr>
            <td>201922424</td>
            <td>English</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
      </tr>
              <tr>
            <td>201922429</td>
            <td>MAPEH</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
      </tr>
              <tr>
            <td>201922423</td>
            <td>Filipino</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
      </tr>
            <tr> 
      <td colspan="6"><strong>TOTAL GPA:</strong></td>
      <td>100</td>
    </tr>
      </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
















<!-- Modal -->
<div class="modal fade" id="attendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Attendance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>















    </main>
  </div>
</div>
<script src="../assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/jquery-slim.min.js"><\/script>')</script><script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="../assets/js/feather.min.js"></script>
        <!-- <script src="../assets/js/Chart.min.js"></script> -->
        <script src="../assets/js/dashboard.js"></script>
        <script>
          function goto_attendance(){
           
            window.location.assign('attendance');
          }
        </script>
  
      </body>
</html>
