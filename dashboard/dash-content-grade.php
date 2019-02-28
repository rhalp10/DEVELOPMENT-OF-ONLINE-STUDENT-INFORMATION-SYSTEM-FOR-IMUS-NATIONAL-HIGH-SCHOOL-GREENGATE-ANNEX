<?php 
if (!isset($_SESSION['of_student'])) {
	?>
	<div class="panel-group">

	<?php 

	$sql = "SELECT * FROM `semester_subject`";
	$result = $con->query($sql);
	 function year_date($date){
	        $year_date = DateTime::createFromFormat("Y-m-d", $date);
			return $year_date->format("Y");

	        }
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $semester_ID = $row["semester_ID"];
	        $subject_parameter = $row["subject_parameter"];
	        $semester_start = $row["semester_start"];
	        $semester_end = $row["semester_end"];

	        ?>
	        <div class="panel">
	        	<div class="panel-heading bg-slate">
					<h6 class="panel-title">
						<a data-toggle="collapse" href="#collapsible-styled-group<?php echo  $semester_ID?>" aria-expanded="false" class="collapsed"><?php  echo "SY: ".year_date($semester_start)." - ".year_date($semester_end); ?><br></a>
					</h6>
				</div>
			
	        </div>
	        <div id="collapsible-styled-group<?php echo  $semester_ID?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
			<div class="panel-body" style="padding: 0px;">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="bg-indigo-400">
								<th colspan="2" class="text-center">SUBJECT</th>
								<th colspan="5" class="text-center">GRADING</th>
							</tr>
							<tr class="bg-indigo-600">
								<th class="">Code</th>
								<th class="">Name</th>
								<th class="">1st </th>
								<th class="">2nd </th>
								<th class="">3rd </th>
								<th class="">4th </th>
								<th class="">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$parsed_json = json_decode($subject_parameter, true);
							$parsed_json = $parsed_json['subject_list'];
							//pr($parsed_json);

							foreach($parsed_json as $key => $value)
							{
							   echo "<tr>";
							   echo "<td>".$value['subject_ID']."</td>";
							   echo "<td>".$value['subject_Name']."</td>";
							   $a = $b = $c = $d = 100;
							   echo "<td>100</td>";
							   echo "<td>100</td>";
							   echo "<td>100</td>";
							   echo "<td>100</td>";
							   $total = ($a+$b+$c+$d)/4;
							   echo "<td> = ".$total."</td>";
							   echo "<tr>";
							   // etc
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
		</div>
	        <?php
	    }
	} 
	else {
	    ?>
		<div class="panel">
			<div class="panel-heading bg-slate">
				<h6 class="panel-title">
					<a class="collapsed" data-toggle="collapse" href="#collapsible-styled-group2" aria-expanded="false">2020 GRADE</a>
				</h6>
			</div>
			<div id="collapsible-styled-group2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
				<div class="panel-body" style="padding: 0px;">
					<div class="table-responsive">
						NO CONTENT
					</div>
				</div>
			</div>
		</div>
	    <?php
	}

	?>
</div>

	<?php
}
else{
	

}
?>
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Grade Management</h5>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>ID</th>
									<th>Level</th>
									<th>Username</th>
									<th>Register</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$sql = "SELECT * FROM `user_accounts`";
								$result = $con->query($sql);

								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        $user_ID = $row["user_ID"];
								        $ulevel_ID = $row["ulevel_ID"];
								        $user_Name = $row["user_Name"];
								        $user_Registered = $row["user_Registered"];
								        $user_status = $row["user_status"];
								        ?>
								        <tr>
										<td><?php echo $user_ID; ?></td>
										<td><?php echo $ulevel_ID; ?></td>
										<td><?php echo $user_Name; ?></td>
										<td><?php echo $user_Registered; ?></td>
										<?php 
										if ($user_status == 0) {
											?><td><span class="label label-danger">Inactive</span></td><?php
										}
										else{
											?><td><span class="label label-success">Active</span></td><?php
										}
										?>
										<td class="text-center">
											<div class="btn-group">
						                    	<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							                    	<i class="icon-gear"></i> &nbsp;<span class="caret"></span>
						                    	</button>

						                    	<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-eye"></i> View</a></li>
													<li><a href="#"><i class="icon-pencil7"></i> Update</a></li>
												</ul>
											</div>
										</td>
								        </tr>
								        <?php
								    }
								} else {
								    echo "0 results";
								}

								?>
								
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

	


<!-- Basic view -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Basic view</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						
						<div class="panel-body">
							<p class="content-group">FullCalendar is a jQuery plugin that provides a full-sized, drag &amp; drop event calendar like the one below. It uses AJAX to fetch events on-the-fly and is easily configured to use your own feed format. It is visually customizable with a rich API. Example below demonstrates a default view of the calendar with a basic setup: draggable and editable events, and starting date.</p>

							<div class="fullcalendar-basic"></div>
						</div>
					</div>
					<!-- /basic view -->


					<?php
/* Set the default timezone */
date_default_timezone_set("America/Montreal");

/* Set the date */
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
    $weekDays[] = strftime('%a', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<table class='table table-bordered' style="table-layout: fixed;">
    <tr>
        <th colspan="7" class="text-center"> <?php echo $title ?> <?php echo $year ?> </th>
    </tr>
    <tr>
        <?php foreach($weekDays as $key => $weekDay) : ?>
            <td class="text-center"><?php echo $weekDay ?></td>
        <?php endforeach ?>
    </tr>
    <tr>
        <?php for($i = 0; $i < $blank; $i++): ?>
        <td></td>
    <?php endfor; ?>
    <?php for($i = 1; $i <= $daysInMonth; $i++): ?>
        <?php if($day == $i): ?>
            <td><strong><?php echo $i ?></strong></td>
        <?php else: ?>
            <td><?php echo '<a href="attendance?date='.$i.'">'.$i.'</a>'?></td> //edited line
        <?php endif; ?>
        <?php if(($i + $blank) % 7 == 0): ?>
            </tr><tr>
        <?php endif; ?>
    <?php endfor; ?>
    <?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
        <td></td>
    <?php endfor; ?>
    </tr>
</table>


<div class="panel">
	<div class="panel-heading bg-slate">
		<h6 class="panel-title">
			<a class="collapsed" aria-expanded="false">ATTENDACE</a>
		</h6>
	</div>
	
		<div class="panel-body" style="padding: 0px;">
		<div class="table-responsive">
			<table class="table table-bordered">
					<thead>
						<tr class="bg-indigo-400">
							<th colspan="12" class="text-center">ATTENDACE</th>
						</tr>
						<tr class="bg-indigo-600">
							<th class="text-center">#</th>
							<th class="">Name</th>
							<th class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						<?PHP 
						for ($i=0; $i < 25; $i++) { 
							?>
						<tr>
							<td class="text-center" style="width: 10%;"><?php echo $i?></td>
							<td style="width: 70%;">RHALP DARREN CABRERA</td>
							<td class="text-center" style="width: 20%;"> <div class="btn-group"><button class="btn btn-danger"><i class="icon-user-cancel"></i></button><button class="btn btn-success"><i class="icon-user-check"></i></button></div></td>
						</tr>
							<?PHP
						}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	
	</div>