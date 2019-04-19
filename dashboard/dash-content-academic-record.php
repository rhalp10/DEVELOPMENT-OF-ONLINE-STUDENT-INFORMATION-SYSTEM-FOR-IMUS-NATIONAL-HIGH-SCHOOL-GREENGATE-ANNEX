<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#semester_tab">Academic Year</a></li>
  <li><a data-toggle="tab" href="#section_tab">Section</a></li>
  <li><a data-toggle="tab" href="#grade_tab">Gradelevel</a></li>
  <li><a data-toggle="tab" href="#subject_tab">Subject</a></li>
</ul>

<div class="tab-content">
  <div id="semester_tab" class="tab-pane fade in active">
   <?php 
    include("dash-content-semester-list.php");
    ?>
  </div>
  <div id="section_tab" class="tab-pane fade" >
<?php 
    include("dash-content-section.php");
    ?>
  </div>
  <div id="grade_tab" class="tab-pane fade">
 <?php 
    include("dash-content-yearlevel-list.php");
    ?>
  </div>
  <div id="subject_tab" class="tab-pane fade">
    
    <?php 
    include("dash-content-subject-list.php");
    ?>
  </div>
</div>




<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });



</script>