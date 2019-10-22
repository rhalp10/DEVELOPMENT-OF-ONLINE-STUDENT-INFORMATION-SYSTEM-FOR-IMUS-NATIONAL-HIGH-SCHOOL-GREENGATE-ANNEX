<?php
session_start();
require_once("class.user.php");
$auth_user = new USER();

//if user's logged in redirect to dashboard
if ($auth_user->is_loggedin() !="") {

   $auth_user->redirect_dashboard();
}
if (empty($_REQUEST['page'])) {
  $page = "";
}
else{
  $page = $_REQUEST['page'];
}
?>

<!doctype html>
<html lang="en">
  
  <?php 
    include ('x-head.php');
    
  ?>

  <body>

  <?php 
    include('x-header.php');
  ?>

    <main role="main">


      <div style="height:100px;">
        
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
      <?php if (empty($page))  { ?>
        <style>
          .custom-bd img {
              display: block;
          }
          .custom-bd:after {
              position: absolute;
              content:"";
              height:100%;
              width:100%;
              top:0;
              left:0;
              background: linear-gradient(to bottom, rgba(  18, 20, 22,0) 0%,rgba(  18, 20, 22,0.65) 100%);
          }
        </style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="custom-bd">
        <img src="assets/img/background/BG1.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false">
        </div>
        <div class="container">
          <div class="carousel-caption">
             <h4>WELCOME TO</h4>
              <h2>IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX</h2>
              <h4>IMUS CITY</h4>
             <!--  <a href="index?page=history" class="btn btn-info" >ABOUT US</a> -->
              <a href="index?page=list_of_subject_by_faculty" class="btn btn-default" style="background-color:#4ea02a; color:white;">PROGRAMS</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
         <div class="custom-bd">
        <img src="assets/img/background/BG.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false">
        </div>
        <div class="container">
          <div class="carousel-caption">
             <h4>WELCOME TO</h4>
              <h2>IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX</h2>
              <h4>IMUS CITY</h4>
              <!-- <a href="index?page=history" class="btn btn-info" >ABOUT US</a> -->
              <a href="index?page=list_of_subject_by_faculty" class="btn btn-default" style="background-color:#4ea02a; color:white;">PROGRAMS</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
          <div class="custom-bd">
        <img src="assets/img/background/IMG_1274.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="xMidYMid slice" focusable="false">
        </div>
          <div class="carousel-caption">
             <h4>WELCOME TO</h4>
              <h2>IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX</h2>
              <h4>IMUS CITY</h4>
              <!-- <a href="index?page=history" class="btn btn-info" >ABOUT US</a> -->
              <a href="index?page=list_of_subject_by_faculty" class="btn btn-default" style="background-color:#4ea02a; color:white;">PROGRAMS</a>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<?php } ?>
      <div class="container marketing" style="min-height: 45em; /* Will be AT LEAST 20em tall */">


        <br>
        <?php if (!empty($page)): ?>
            <!--NOTHING HERE  -->
        <?php endif ?>
        <?php 
        if (file_exists("index-content-".$page.".php")) {
          include ("index-content-".$page.".php");
        }
        else{
          if (empty($page)) {
            include ("index-content.php");
          }
          else{
            include ("index-content-error.php");
          }
          
        }
        ?> 

     

      </div><!-- /.container -->
<!-- LOGIN MODAL -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog  " role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom: 0px ;">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" style="background-color: #f5f5f5; border-radius: 0px 0px 5px 5px; ">
          <div class="text-center msg">
               <img src="assets/img/logo/logo.png" alt="GTMNHS Logo" style="width: 100px;">
             
                <h5>Information System</h5>   
              
              <small>Enter your username and password</small>
          </div>  

          <form class="form-signin" id="login_form" method="POST">
          <div class="form-label-group">
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="login_user" required autofocus>
            <label for="inputUsername">Username</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="login_password" required>
            <label for="inputPassword">Password</label>
          </div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <label data-toggle="modal" data-target="#forgotpassword">
              Forgot Password
            </label>
          <input type="hidden" name="operation" value="submit_login">
          <button class="btn btn-primary btn-block" type="submit" style="background-color: #1d8f1d" name="submit_login">Sign in</button>
         
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" id="forgot_form" method="POST">
          <div class="form-group">
            <label for="forgot_user">Username</label>
            <input type="text" class="form-control" name="forgot_user" id="forgot_user" aria-describedby="emailHelp" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="forgot_email">Email address</label>
            <input type="email" class="form-control" name="forgot_email" id="forgot_email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
      </div>
      <div class="modal-footer ">
          <input type="hidden" name="operation" value="submit_forgot">
        <div class="btn-group">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>

         </form>
    </div>
  </div>
</div>

      <!-- FOOTER -->
       <button onclick="topFunction()" id="myBtn" title="Go to top">
         
          <div >
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" ><path fill="white" d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/></svg>
          </div>
        </button>
          
      <footer class="container-fluid  w-100 bg-dark text-center" style="padding-top: 2rem;
  padding-bottom: 2rem;">
      
           <!--  <p class="float-right"><a href="#">Back to top</a></p> -->
       <center class="text-white">
          Imus National High School - Greengate Annex - Information System<br>
All Rights Reserved<br>Copyright &copy; 2019 <?php 
                        if (date('Y') !== "2019") 
                        {
                          echo " - " . date('Y');
                        }
                        else 
                        {
                        
                        }
                      ?>
      </center>
        
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
<?php 
  include('x-script.php');
?>
    <script type="text/javascript">

 $('#f_register').hide();

   $(document).on('submit', '#login_form', function(event){
            event.preventDefault();

              $.ajax({
                url:"data-login.php",
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                type:  'html',
                success:function(data)
                {
                  var newdata = JSON.parse(data);
                  if (newdata.success) {
                      alertify.alert(newdata.success).setHeader('Login Success');
                     window.location.assign("dashboard/");
                  }
                  else{
                    alertify.alert(newdata.error).setHeader('Error Login');
                  }
                }
              });
           
          });
   $(document).on('submit', '#forgot_form', function(event){
  event.preventDefault();
   $.ajax({
        url:"data-forgot.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        type:  'html',
        success:function(data)
        {
   
          alertify.alert(data).setHeader('Forgot Password');
         
          
        }
      });

 });
  $(document).on('submit', '#reset_form', function(event){
  event.preventDefault();
   $.ajax({
        url:"data-reset.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        type:  'html',
        success:function(data)
        {
          var newdata = JSON.parse(data);
          if (newdata.success) {
              alertify.alert(newdata.success).setHeader('Forgot Password');
             window.location.assign("dashboard/");
          }
          else{
            alertify.alert(newdata.error).setHeader('Forgot Password');
          }
          
         
          
        }
      });

 });

     $(document).on('click', '#a_sign', function(){
    
       $('#f_text').text('Register');
       $('#f_stext').text('Fill-up to register');

        $('#f_login').hide();
        $('#f_register').show();
    });
  $(document).on('click', '#a_login', function(){
     $('#f_text').text('Login');
       $('#f_stext').text('Login here using your username and password');
        $('#f_login').show();
        $('#f_register').hide();
    });



  


</script>
  </body>
</html>
