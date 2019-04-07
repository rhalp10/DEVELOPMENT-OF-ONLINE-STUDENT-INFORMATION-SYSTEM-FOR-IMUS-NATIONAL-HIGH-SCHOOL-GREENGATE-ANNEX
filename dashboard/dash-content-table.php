<!-- Basic datatable -->
						
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">asdasd</h5>
							<div class="heading-elements">
							<form action="#" method="POST"  class="form-inline" id="student_form" enctype="multipart/form-data">

						<label>A.Y</label>
						<div class="form-group">
						 <select class="select" name="sex" id="sex" >
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `year_level`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['yl_ID']?>" ><?php echo $rows['yl_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                    		</select>
						</div>
						<label>SEMESTER</label>
						<div class="form-group">
						 <select class="select" name="sex" id="sex" >
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `semester`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                                 	
                                 	
                                 	$semester_start = date_create($row["semester_start"]);
                                 	$semester_end = date_create($row["semester_end"]);
                                 	$semester_start = date_format($semester_start,"Y");
                                 	$semester_end = date_format($semester_end,"Y");
                            ?>
                            <option value="<?php echo $rows['semester_ID']?>" ><?php echo $semester_start." - ".$semester_end;?></option>
                            <?php
                                 }
                            }
                            ?>
                    		</select>
						</div>
						<button class="btn bg-success"><i class="icon-reload-alt"></i> LOAD</button>

               		</form>
		                	</div>
						</div>

						<div class="panel-body">
							<table class="table table-bordered" id="student_data">
							<thead>
								<tr>
                                    <th>ID</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Section</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
						</table>
						</div>
					</div>
					<!-- /basic datatable -->
<script type="text/javascript">
	$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#student_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/teacher-filter-sub/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
  });

</script>