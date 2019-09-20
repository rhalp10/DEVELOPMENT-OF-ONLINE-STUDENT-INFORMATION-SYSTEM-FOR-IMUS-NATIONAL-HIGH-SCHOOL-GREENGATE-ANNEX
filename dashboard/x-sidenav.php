<?php 
echo $current_url = $_SERVER['REQUEST_URI'];
$url_explde = explode('/', $current_url);
$pagefile_name = $url_explde[3];

function navlist($pagefile_name,$name,$link,$icon){
 
  if ($pagefile_name == $link) {
    $active_ul_snav = "active";
    $active_ul_snav_span = '<span class="sr-only">(current)</span>';
    
  }
  else{
     $active_ul_snav = '';
      $active_ul_snav_span = '';
  }
  ?>
   <li class="nav-item">
            <a class="nav-link <?php echo $active_ul_snav;?>" href="<?php echo $link;?>">
              <span data-feather="<?php echo $icon;?>"></span>
              <?php echo $name.' '.$active_ul_snav_span; ?>
            </a>
          </li>
  <?php
}


?>
<style>
  .nav-link{
      color:white !important; 
  }
  svg {
    color:white !important; 
  }
  .nav-link:hover{
    background-color:#39833c;
  }


    ul ul a {
       
        padding-left: 50px !important;
     
    }
    ul ul a:hover {
        background: #eee;
        padding-left: 50px !important;
     
    }
    </style>
<nav class="col-md-2 d-none d-md-block bg-light sidebar" style="background: #61ba6d !important;
        background: -webkit-linear-gradient(to right, #61ba6d, #83c331)  !important;
        background: linear-gradient(to right, #61ba6d, #83c331)  !important;  
        color: white" >
      <div class="sidebar-sticky" style="overflow-x: hidden;
    overflow-y: auto;">
        <div style="height: 120px;" class="text-center">
           <img id="c_img" src="<?php $auth_user->getUserPic();?>" alt="Profile Image"  runat="server"  height="85" width="85" class="rounded-circle" style="border:1px solid;"/>
           <br>
           <h6><?php $auth_user->getUsername();?></h6>
        </div>

        <ul class="nav flex-column">
          

          <?php 
       
          navlist($pagefile_name,"Dashboard","index",'home');
          if($auth_user->admin_level()) { 
          navlist($pagefile_name,"Account","account","users");
          navlist($pagefile_name,"Admission (ok)","admission","user");
          navlist($pagefile_name,"Enrolled (ok)","enrolled","users");
          navlist($pagefile_name,"Room (ok)","room","monitor");

          navlist($pagefile_name,"News (ok)","news","wind");
          navlist($pagefile_name,"Academic Staff (ok)","staff","users");
          ?>
          <li class="nav-item">
            <a href="#submenu_student" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
              <span data-feather="book"></span>
            Student</a>
            <ul class="collapse list-unstyled" id="submenu_student">
              <li>
                <a href="student" class="nav-link"> Student Record (ok)</a>
              </li>
       <!--        <li>
                <a href="#" class="nav-link"> View Enrolled Subject</a>
              </li>
              <li>
                <a href="attendance" class="nav-link"> View Attendance</a>
              </li>
              <li>
                <a href="#" class="nav-link"> View Grade</a>
              </li> -->
            </ul> 
          </li>
           <li class="nav-item">
            <a href="#submenu_teacher" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
              <span data-feather="book"></span>
            Teacher</a>
            <ul class="collapse list-unstyled" id="submenu_teacher">
              <li>
                <a href="teacher" class="nav-link"> Teacher Record (ok)</a>
              </li>
            <!--   <li>
                <a href="#" class="nav-link"> Assign Teacher in Class Subject</a>
              </li>

              <li>
                <a href="#" class="nav-link"> My Class Subject Assign</a>
              </li> -->
            </ul> 
          </li>
          <li class="nav-item">
            <a href="#submenu_class" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle">
              <span data-feather="book"></span>
            Class</a>
            <ul class="collapse list-unstyled" id="submenu_class">
              <li>
                <a href="subject" class="nav-link"> Subject List (ok)</a>
              </li>
              <li>
                <a href="yearlevel" class="nav-link"> Year Level (ok)</a>
              </li>
              <li>
                <a href="section" class="nav-link"> Section (ok)</a>
              </li>
              <li>
                <a href="acadamicyear" class="nav-link"> Academic Year (ok)</a>
              </li>
            </ul> 
          </li>
        </ul>
        <?php } ?>
        <!-- <div class="text-center">E-learning for Information Management</div> -->
        
      </div>

    </nav>
