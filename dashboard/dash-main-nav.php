<?php 
function side_assignSub(){
	?>
<!-- ADMISSION -->
<li>
	<a href="index?page=teacher_assign"><i class="icon-person"></i> <span>ASSIGN SUBJECT</span></a>
	
</li>
<!-- /ADMISSION -->
	<?php

}
function side_admission(){
?>
<!-- ADMISSION -->
<li>
	<a href="#"><i class="icon-person"></i> <span>ADMISSION</span></a>
	<ul>
		<li><a href="index?page=admission">Admission List</a></li>
	</ul>
</li>
<!-- /ADMISSION -->
<?php
}
function side_account(){
?>
<!-- ADMISSION -->
<li>
	<a href="#"><i class="icon-person"></i> <span>ACCOUNT</span></a>
	<ul>
		<li><a href="index?page=account">Account List</a></li>
	</ul>
</li>
<!-- /ADMISSION -->
<?php
}
function side_section(){
?>
<!-- ADMISSION -->
<li>
	<a href="#"><i class="icon-person"></i> <span>SECTION</span></a>
	<ul>
		<li><a href="index?page=section">Section List</a></li>
		<li><a href="index?page=section_assign">Section List</a></li>
	</ul>
</li>
<!-- /ADMISSION -->
<?php
}
function side_student_section(){
	?>
<!-- ADMISSION -->
<li>
	<a href="#"><i class="icon-book"></i> <span>INFORMATIONS</span></a>
	<ul>
		<li><a href="#" data-toggle="modal" data-target="#enrolled_subject">Enrolled Subject</a></li>
		<li><a href="#" data-toggle="modal" data-target="#enrolled_subject_grade">Latest Grade</a></li>
	</ul>
</li>
<!-- /ADMISSION -->
<?php
}
function side_parent_section(){
	?>
<!-- ADMISSION -->
<li>
	<a href="#"><i class="icon-book"></i> <span>INFORMATIONS</span></a>
	<ul>
		<li><a href="#" data-toggle="modal" data-target="#child_record">Child Record</a></li>
	</ul>
</li>
<!-- /ADMISSION -->
<?php
}
function side_record(){
?>
<!-- RECORD -->
<li>
	<a href="#"><i class="icon-info22"></i> <span>INFORMATION RECORD</span></a>
	<ul>
		<li>
			<a href="index?page=account">ACCOUNT RECORDS</a>
		</li>
		<li>
			<a href="index?page=student-list">STUDENT RECORDS</a>
		</li>
		<li>
			<a href="index?page=parent-list">PARENT RECORDS</a>
		</li>
		<li>
			<a href="index?page=teacher-list">TEACHER RECORDS</a>
			
		</li>
		<li>
			<a href="index?page=subject-list">SUBJECT RECORDS</a>
		</li>
		<li>
			<a href="index?page=yearlevel-list">YEAR LEVEL</a>
		</li>
		<li>
			<a href="index?page=teacher-with-subject-assign">TEACHER SUBJECT</a>
		</li>
		<li>
			<a href="index?page=section">SECTION RECORD</a>
		</li>
		<li>
			<a href="index?page=semester-list">SEMESTER RECORD</a>
		</li>
	</ul>
</li>
<!-- /RECORD -->
<?php
}

function side_grade(){
?>
<!-- GRADE -->
<li><a href="index?page=grade"><i class="icon-pencil3"></i> <span>GRADE PER SECTION</span></a></li>
<!-- /GRADE -->
<?php
}

function side_parent(){
?>
<!-- PARENT -->
<li>
	<a href="#"><i class="icon-person"></i> <span>CHILD RECORD</span></a>
	<ul>
		<li>
			<a href="index?page=grade&of_student=1">ANAK 1</a>
			
		</li>
		<li>
			<a href="index?page=grade&of_student=1">ANAK 2</a>
			
		</li>
	</ul>
</li>
<!-- /PARENT -->
<?php
}
function side_report(){
?>
<!-- REPORT -->
<li class="navigation-header"><span>REPORT MODULE</span> <i class="icon-menu" title="Forms"></i></li>
<li>
	<a href="#"><i class="icon-newspaper2"></i> <span>REPORT RECORD</span></a>
	<ul>
		<li><a href="form_inputs_basic.html">Basic inputs</a></li>
		<li>
			<a href="#">Selects</a>
			<ul>
				<li><a href="form_select2.html">Select2 selects</a></li>
				<li><a href="form_multiselect.html">Bootstrap multiselect</a></li>
				<li><a href="form_select_box_it.html">SelectBoxIt selects</a></li>
				<li><a href="form_bootstrap_select.html">Bootstrap selects</a></li>
			</ul>
		</li>
	</ul>
</li>
<!-- /REPORT -->
<?php
}
?>
<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="index"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<!-- /main -->
								<?php 
								//ADMIN
								if ($login_level == 1) {
									side_admission();
									side_record();
									// side_grade();
									// side_parent();
									// side_report();
								} 
								//STUDENT
								else if ($login_level == 2){
									side_student_section();

								}
								//PARENT
								else if ($login_level == 3){
									side_parent_section();

								}
								//TEACHER
								else if ($login_level == 4){
									
									side_assignSub();

								}
								else {
									# code...
								}
								
								?>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->