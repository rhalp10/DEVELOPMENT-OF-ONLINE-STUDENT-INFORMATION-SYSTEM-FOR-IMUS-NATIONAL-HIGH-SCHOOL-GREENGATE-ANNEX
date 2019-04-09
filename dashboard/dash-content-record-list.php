<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#stud_tab">Student</a></li>
  <li><a data-toggle="tab" href="#teacher_tab">Teacher</a></li>
</ul>

<div class="tab-content">
  <div id="stud_tab" class="tab-pane fade in active">
    <?php 
    include("dash-content-student-list.php");
    ?>
  </div>
  <div id="teacher_tab" class="tab-pane fade">
    <?php 
    include("dash-content-teacher-list.php");
    ?>
  </div>
</div>




<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  
  
});
</script>