 <?php
function build_calendar($month,$year) {

     // Create array containing abbreviations of days of week.
     $daysOfWeek = array('S','M','T','W','T','F','S');

     // What is the first day of the month in question?
     $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

     // How many days does this month contain?
     $numberDays = date('t',$firstDayOfMonth);

     // Retrieve some information about the first day of the
     // month in question.
     $dateComponents = getdate($firstDayOfMonth);

     // What is the name of the month in question?
     $monthName = $dateComponents['month'];

     // What is the index value (0-6) of the first day of the
     // month in question.
     $dayOfWeek = $dateComponents['wday'];

     // Create the table tag opener and day headers

     $calendar = "<div class='col-sm-4'><table class='  table-bordered calendar_month'>";
     $calendar .= "<h3>$monthName</h3>";
     $calendar .= "<tr>";

     // Create the calendar headers

     foreach($daysOfWeek as $day) {
          $calendar .= "<th class='header'>$day</th>";
     } 

     // Create the rest of the calendar

     // Initiate the day counter, starting with the 1st.

     $currentDay = 1;

     $calendar .= "</tr><tr>";

     // The variable $dayOfWeek is used to
     // ensure that the calendar
     // display consists of exactly 7 columns.

     if ($dayOfWeek > 0) { 
          $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>"; 
     }
     
     $month = str_pad($month, 2, "0", STR_PAD_LEFT);
  
     while ($currentDay <= $numberDays) {

          // Seventh column (Saturday) reached. Start a new row.

          if ($dayOfWeek == 7) {

               $dayOfWeek = 0;
               $calendar .= "</tr><tr>";

          }
          
          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
          
          $date = "$year-$month-$currentDayRel";

          $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

          // Increment counters
 
          $currentDay++;
          $dayOfWeek++;

     }
     
     

     // Complete the row of the last week in month, if necessary

     if ($dayOfWeek != 7) { 
     
          $remainingDays = 7 - $dayOfWeek;
          $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>"; 

     }
     
     $calendar .= "</tr>";

     $calendar .= "</table> </div>";

     return $calendar;

}

if ($login_level == 1) {
$sql = "SELECT * FROM `record_student_details`";
$query = mysqli_query($con,$sql);
$c_s = mysqli_num_rows($query);
$sql = "SELECT * FROM `record_teacher_detail`";
$query = mysqli_query($con,$sql);
$at_s = mysqli_num_rows($query);
$sql = "SELECT * FROM `record_parent_details`";
$query = mysqli_query($con,$sql);
$p_s = mysqli_num_rows($query);
$sql = "SELECT * FROM `news`";
$query = mysqli_query($con,$sql);
$n_s = mysqli_num_rows($query);

?>
<div class="row">
  <div class="col-lg-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        Student
      </div>
      <div class="panel-body">
        <h3><?php echo $c_s?></h3>
      </div>
    </div>
    
  </div>
  <div class="col-lg-3">
    <div class="panel panel-default">
      <div class="panel-heading">
       Teacher
      </div>
      <div class="panel-body">
         <h3><?php echo $at_s?></h3>
      </div>
    </div>
  </div>

  <div class="col-lg-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        Parent
      </div>
      <div class="panel-body">
         <h3><?php echo $p_s?></h3>
      </div>
    </div>
  </div>

<div class="col-lg-3">
    <div class="panel panel-default">
      <div class="panel-heading">
       News
      </div>
      <div class="panel-body">
         <h3><?php echo $n_s?></h3>
      </div>
    </div>
  </div>

</div>


<?php

	
} 
else if ($login_level == 2){

	
$sql = "SELECT * FROM `user_accounts` ua
LEFT JOIN record_student_details rsd ON ua.user_Name = rsd.rsd_LRN
LEFT JOIN ref_suffixname rs ON rsd.suffix_ID = rs.suffix_ID
LEFT JOIN ref_sex rss ON rsd.sex_ID = rss.sex_ID
WHERE ua.user_ID = $login_id";
$query = mysqli_query($con,$sql);
if (mysqli_num_rows($query) > 0) 
{
	// And error has occured while executing
   while ($detail = mysqli_fetch_assoc($query)) {
    $rsd_ID = $detail['rsd_ID'];
   	$rsd_FName = $detail['rsd_FName'];
   	$rsd_MName = $detail['rsd_MName'];
   	$rsd_LName = $detail['rsd_LName'];
   	$rsd_LRN = $detail['rsd_LRN'];
   	$suffix = $detail['suffix'];
   	$sex = $detail['sex_Name'];
   	$FullName = $rsd_LName.', '.$rsd_FName. ' '.$rsd_MName.' '.$suffix ;
    $_SESSION['fullname'] = $FullName;
   }
}
?>
<div class="panel panel-primary">
<div class="panel-heading">Basic Information</div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-lg-4">
  			<img src="<?php echo $user_image?>" class="img-circle" style="height: 150px; border: 1px solid;">
  		</div>

  		<div class="col-lg-8">
  			<h3><b>NAME:</b> <?php echo 	$FullName?></h3>
  			<h3><b>LRN:</b> <?php echo $rsd_LRN;?></h3>
  			<h3><b>GENDER:</b> <?php echo $sex;?></h3>
  			
  		</div>
  	</div>
  </div>
</div>
<div class="panel panel-success" style="height: 350px;">
  <div class="panel-heading">Access your information quickly</div>
  <div class="panel-body">
  	<div class="row">
  		<div class="col-lg-4 text-center">
  			<i class="icon-book" style="font-size: 100px;" data-toggle="modal" data-target="#enrolled_subject"></i>
  			<br>
  			<h3>Enrolled Subject</h3>
  		</div>
  		<div class="col-lg-4 text-center">
  			<i class="icon-clipboard" style="font-size: 100px;" data-toggle="modal" data-target="#enrolled_subject_grade"></i>
  			<br>
  			<h3>Latest Grade</h3>
  		</div>
  		<div class="col-lg-4 text-center">
  			<i class="icon-calendar" style="font-size: 100px;" data-toggle="modal" data-target="#attendance"></i>
  			<br>
  			<h3>Attendance</h3>
  		</div>
  	</div>

  </div>
</div>
<!-- Modal -->
<div id="enrolled_subject" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enrolled Subject</h4>
      </div>
      <div class="modal-body">
	    
    <div class="panel-group" id="accordion">
        <?php 
        function checkGrade($con,$recs_ID,$tsa_ID){
         
          $sql="SELECT * FROM `record_studentgrade` WHERE recs_ID = '$recs_ID' AND tsa_ID ='$tsa_ID' 
        ";
          $query = mysqli_query($con,$sql);
      
          if (mysqli_num_rows($query) > 0) 
          {
            echo "Graded";
          }
          else{
           echo "Not Graded";
           
          }
        }

          $sql = "SELECT DISTINCT(tsa.semester_ID),CONCAT(YEAR(sem.semester_start),' - ',YEAR(sem.semester_end)) acad_year,rse.tsa_ID,sem.semester_ID

FROM `record_studentenrolled` rse
LEFT JOIN teacher_subject_assign tsa ON rse.tsa_ID = tsa.tsa_ID
LEFT JOIN semester sem ON tsa.semester_ID = sem.semester_ID 
 WHERE rse.rsd_ID =  '$rsd_ID' GROUP BY tsa.semester_ID";
      $query = mysqli_query($con,$sql);
      $z = 0;
      if (mysqli_num_rows($query) > 0) 
      {
        
        // And error has occured while executing
        while ($enrolled_sem = mysqli_fetch_assoc($query)) {
          $etsa_ID = $enrolled_sem['tsa_ID'];
           $esemester_ID = $enrolled_sem['semester_ID'];
        ?>
       <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $z+1?>">
        School Year: <?php echo $enrolled_sem['acad_year']?></a>
      </h4>
    </div>
    <div id="collapse<?php echo $z+1?>" class="panel-collapse collapse <?php 
        if ($z == 0) {
          echo "in"; 
        }?>">
      <div class="panel-body">
          <table class="table table-bordered">
      <thead>
        <tr>
          <th>Schedule Code</th>
      <th>Description</th>
      <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql1 = "SELECT *,(SELECT recs_ID from record_studentenrolled WHERE tsa_ID  = rse.tsa_ID AND rsd_ID = rse.rsd_ID) recs_ID FROM `record_studentenrolled` rse
LEFT JOIN teacher_subject_assign tsa ON  rse.tsa_ID = tsa.tsa_ID
LEFT JOIN subject sub ON tsa.subject_ID = sub.subject_ID
WHERE rsd_ID = '$rsd_ID' AND semester_ID = '$esemester_ID'";
      $query1 = mysqli_query($con,$sql1);
      if (mysqli_num_rows($query1) > 0) 
      {
        // And error has occured while executing
         while ($enrolled1 = mysqli_fetch_assoc($query1)) {
 
           $zrecs_ID = $enrolled1['recs_ID'];
           $ztsa_ID = $enrolled1['tsa_ID'];
         ?>
      <tr>
            <td><?php echo $enrolled1['subject_code']?></td>
            <td><?php echo $enrolled1['subject_TItle']?></td>
            <td><?php checkGrade($con,$zrecs_ID,$ztsa_ID);?></td>
      </tr>
         <?php
         }
      }
        ?>
      </tbody>
    </table>

      </div>
    </div>
  </div>
         <?php
         $z++;
         }
      }
        ?>
</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="enrolled_subject_grade" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Grade</h4>
      </div>
      <div class="modal-body">
      	<div class="table-responsive">
        <table class="table table-bordered">
	    <thead>
	      <tr>
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
	    	<h3><!-- School Year: 2018-2019 --></h3>
	    	<hr>
	      <?php 
	        $sql = "SELECT * FROM `record_studentenrolled` rse
LEFT JOIN teacher_subject_assign tsa ON tsa.tsa_ID = rse.tsa_ID
LEFT JOIN semester sem ON sem.semester_ID = tsa.semester_ID 
LEFT JOIN subject sub ON sub.subject_ID = tsa.subject_ID
WHERE rsd_ID = '$rsd_ID'";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) 
			{
				// And error has occured while executing
			   while ($enrolled = mysqli_fetch_assoc($query)) {
			   ?>
			<tr>
		        <td><?php echo $enrolled['subject_code']?></td>
		        <td><?php echo $enrolled['subject_TItle']?></td>
		        <td>100</td>
		        <td>100</td>
		        <td>100</td>
		        <td>100</td>
		        <td>100</td>
			</tr>
			   <?php
			   }
			}
	      ?>
		<tr> 
			<td colspan="6"><strong>TOTAL GPA:</strong></td>
			<td>100</td>
		</tr>
	    </tbody>
	  </table>
	  </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="attendance" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ATTENDANCE</h4>
      </div>
      <div class="modal-body">
      	<style type="text/css">
      		th,.calendar_month {
      			text-align: center;
      			background-color: #2196F3;
      			color: white;
      		}
      		td,.calendar_month {
      			text-align: center;
      			background-color: white;
      			color: black;
      		}
      		table, .calendar_month {
      			border-collapse: collapse;
      			width: 100%;
      			text-align: center;
      		}
      	</style>
      		<table class="table table-bordered">
		  		<thead>
		  			<th>COLOR</th>
		  			<th >LEGEND</th>
		  		</thead>
		  		<tbody>
		  			<tr>
		  			<td><div  class="bg-success" style="height: 25px; width: 25px;"></div></td>
		  			<td>Present</td>
		  			</tr>
		  			<tr>
		  			<td><div  class="bg-danger" style="height: 25px; width: 25px;"></div></td>
		  			<td>Absent</td>
		  			</tr>
		  		</tbody>
		  	</table>
<div class="row">
	<?php 
	$dateComponents = getdate();

     $month = '01'; 			     
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '02'; 			     
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '03'; 			     
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '04'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '05'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '06'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '07'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '08'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '09'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '10'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '11'; 			     
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '12'; 			     
     $year = '2018';
     echo build_calendar($month,$year);
	?>
</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php

}
else if ($login_level == 3){

  
$sql = "SELECT 
rpd.parent_ID,
rpd.parent_FName,
rpd.parent_MName,
rpd.parent_LName,
rs.suffix as parent_suffix,
rss.sex_Name as parent_sex,
rpd.parent_Contact,
rpd.parent_Address 
FROM `user_accounts` ua
LEFT JOIN record_parent_details rpd ON ua.user_ID = rpd.user_ID
LEFT JOIN ref_suffixname rs ON rpd.suffix_ID = rs.suffix_ID
LEFT JOIN ref_sex rss ON rpd.sex_ID = rss.sex_ID
WHERE ua.user_ID = $login_id LIMIT 1";
$query = mysqli_query($con,$sql);
if (mysqli_num_rows($query) > 0) 
{
  // And error has occured while executing
   while ($detail = mysqli_fetch_assoc($query)) {
    $parent_FName = $detail['parent_FName'];
    $parent_MName = $detail['parent_MName'];
    $parent_LName = $detail['parent_LName'];
    $parent_Contact = $detail['parent_Contact'];
    $parent_suffix = $detail['parent_suffix'];
    $parent_sex = $detail['parent_sex'];
    $parent_Address = $detail['parent_Address'];
    $FullName = $parent_LName.', '.$parent_FName. ' '.$parent_MName.' '.$parent_suffix ;
    $_SESSION['fullname'] = $FullName;

   }
}
?>
<div class="panel panel-primary">
<div class="panel-heading">Basic Information</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-4">
        <img src="../assets/images/placeholder.jpg" class="img-circle" style="height: 150px;">
      </div>

      <div class="col-lg-8">
        <h3><b>NAME:</b> <?php echo   $FullName?></h3>
        <h3><b>LRN:</b> <?php echo $parent_Contact;?></h3>
        <h3><b>GENDER:</b> <?php echo $parent_sex;?></h3>
        <h3><b>ADDRESS:</b> <?php echo $parent_Address;?></h3>
        
      </div>
    </div>
  </div>
</div>
<div class="panel panel-success" style="height: 350px;">
  <div class="panel-heading">Access your information quickly</div>
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-12 text-center">
        <i class="icon-book" style="font-size: 100px;" data-toggle="modal" data-target="#child_record"></i>
        <br>
        <h3>Child Record </h3>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="child_record" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">List of child</h4>
      </div>
      <div class="modal-body">
      <table class="table table-bordered">
      <thead>
        <tr>
        <th>Name</th>
      <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $sql = "SELECT 
rsd.rsd_ID,
rsd.rsd_LRN,
rsd.rsd_FName,
rsd.rsd_MName,
rsd.rsd_LName,
rs.suffix as rsd_suffix,
rss.sex_Name as rsd_sex
FROM `user_accounts` ua
LEFT JOIN record_parent_details rpd ON ua.user_ID = rpd.user_ID
LEFT JOIN record_student_details rsd ON rpd.rsd_ID = rsd.rsd_ID
LEFT JOIN ref_suffixname rs ON rpd.suffix_ID = rs.suffix_ID
LEFT JOIN ref_sex rss ON rpd.sex_ID = rss.sex_ID
WHERE ua.user_ID = $login_id";
      $query = mysqli_query($con,$sql);
      if (mysqli_num_rows($query) > 0) 
      {
        // And error has occured while executing
         while ($child = mysqli_fetch_assoc($query)) {
         ?>
      <tr>
            <td><?php echo $child['rsd_LName'].', '.$child['rsd_FName']. ' '.$child['rsd_MName'].' '.$child['rsd_suffix'] ;?></td>
         
              <td class="text-center">
               <div class="btn-group">
                  <button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-gear"></i> &nbsp;<span class="caret"></span></button>
                  <ul class="dropdown-menu dropdown-menu-right">
                     <li><a href="#"  id="<?php echo $child['rsd_ID']?>"  class="view_attendance_grade"><i class="icon-calendar"></i> View Attendance</a></li>
                     <li><a href="#"  id="<?php echo $child['rsd_ID']?>"  class="view_child_grade"><i class="icon-clipboard"></i> View Grade</a></li>
                  </ul>
               </div>
            </td>
      </tr>
         <?php
         }
      }
        ?>
      </tbody>
    </table>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="child_enrolled_subject_grade" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Grade</h4>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
        <table class="table table-bordered">
      <thead>
        <tr>
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
        <h3>School Year: 2018-2019</h3>
        <hr>
        <?php 
          $sql = "SELECT * FROM `subject`";
      $query = mysqli_query($con,$sql);
      if (mysqli_num_rows($query) > 0) 
      {
        // And error has occured while executing
         while ($enrolled = mysqli_fetch_assoc($query)) {
         ?>
      <tr>
            <td><?php echo $enrolled['subject_code']?></td>
            <td><?php echo $enrolled['subject_TItle']?></td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
            <td>100</td>
      </tr>
         <?php
         }
      }
        ?>
    <tr> 
      <td colspan="6"><strong>TOTAL GPA:</strong></td>
      <td>100</td>
    </tr>
      </tbody>
    </table>
    </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="child_attendance" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ATTENDANCE</h4>
      </div>
      <div class="modal-body">
        <style type="text/css">
          th,.calendar_month {
            text-align: center;
            background-color: #2196F3;
            color: white;
          }
          td,.calendar_month {
            text-align: center;
            background-color: white;
            color: black;
          }
          table, .calendar_month {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
          }
        </style>
          <table class="table table-bordered">
          <thead>
            <th>COLOR</th>
            <th >LEGEND</th>
          </thead>
          <tbody>
            <tr>
            <td><div  class="bg-success" style="height: 25px; width: 25px;"></div></td>
            <td>Present</td>
            </tr>
            <tr>
            <td><div  class="bg-danger" style="height: 25px; width: 25px;"></div></td>
            <td>Absent</td>
            </tr>
          </tbody>
        </table>
       
<div class="row">
  <?php 
  $dateComponents = getdate();

     $month = '01';            
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '02';            
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '03';            
     $year = '2018';
     echo build_calendar($month,$year);
     $month = '04';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '05';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '06';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '07';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '08';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '09';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '10';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '11';            
     $year = '2018';
     echo build_calendar($month,$year);

     $month = '12';            
     $year = '2018';
     echo build_calendar($month,$year);
  ?>
</div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
     $(document).on('click', '.view_attendance_grade', function () {
      var user_ID = $(this).attr('id');
       $('#child_attendance').modal('show');
     });
     $(document).on('click', '.view_child_grade', function () {
      var user_ID = $(this).attr('id');
       $('#child_enrolled_subject_grade').modal('show');
     });
     




});
</script>
<?php

}
else { 
// 	echo "SELECT * FROM `teacher_subject_assign` tsa
// LEFT JOIN record_teacher_detail rtd ON tsa.tsa_ID  = rtd.rtd_ID
// LEFT JOIN user_accounts ua ON ua.user_Name = rtd.rtd_EmpID
// WHERE ua.user_ID = $login_id";

?>
<div class="row">
                <div class="col-sm-12 text-center " style="min-height: 100px;">
                     <img src="../assets/images/logo.png" height="80" style="margin-left: -550px;"> <H3 style="margin-top: -50px;">Imus National High School - Greengate Annex</H3>
                </div>
            </div>
          
             <div class="row">
                <div class="col-sm-6">
                     <div class="panel panel-default"  style="min-height: 250px">
                         <div class="panel-heading  text-center" style=" border-bottom: 5px solid ;"><strong> MISSION</strong></div>
                         <div class="panel-body text-center">
                          Imus National High School - Greengate Annex ​ commits itself to enhance each student’s intellect, promote safe, motivating and supportive environment, strengthen moral and spiritual values, prepare them to act on their belief and accept challenges in life.
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="panel panel-default"  style="min-height: 250px">
                         <div class="panel-heading text-center" style="border-bottom: 5px solid ;"><strong> VISION</strong></div>
                         <div class="panel-body text-center">
                           Imus National High School - Greengate Annex 
envisions its completers as individuals who transform holistically with integrity, ready for global competitiveness and has strong personality in facing the reality of life.
                         </div>
                     </div>
                 </div>
             </div>
<?php

}

?>