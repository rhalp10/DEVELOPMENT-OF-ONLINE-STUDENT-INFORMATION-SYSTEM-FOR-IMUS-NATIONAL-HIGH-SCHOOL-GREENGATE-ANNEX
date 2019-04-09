
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Teacher Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add_teacher" data-toggle="modal" data-target="#teacher_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="teacher_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Teacher ID</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="teacher_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title mteacher_title">ADD TEACHER</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="teacher_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="col-sm-12">
                          <label>Teacher ID</label>
                          <input type="text" class="form-control" id="teacherID" name="teacherID" placeholder="Teacher ID">
                        </div>
                        <div class="col-sm-12">
                          <label>First Name</label>
                          <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                        </div>
                        <div class="col-sm-12">
                          <label>Middle Name</label>
                          <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name">
                        </div>
                        <div class="col-sm-12">
                          <label>Last Name</label>
                          <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                        </div>
                       <div class="col-sm-12">
                          <label>Suffix</label>
                          <select class="select" name="suffix" id="suffix" >
                              <option value="">~~SELECT~~</option>
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `ref_suffixname`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['suffix_ID']?>" ><?php echo $rows['suffix_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                            </select>
                        </div>
                        <div class="col-sm-12">
                          <label>Sex</label>
                          <select class="select" name="sex" id="sex" >
                              <option value="">~~SELECT~~</option>
                            <?php 
                            $query = mysqli_query($con,"SELECT * FROM `ref_sex`");
                            if (mysqli_num_rows($query) > 0) 
                            {
                                 while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                            <option value="<?php echo $rows['sex_ID']?>" ><?php echo $rows['sex_Name']?></option>
                            <?php
                                 }
                            }
                            ?>
                            </select>
                        </div>
                        <div class="col-sm-12">
                          <label>Contact</label>
                          <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                        </div>
                        <div class="col-sm-12">
                          <label>Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="rtd_ID" id="rtd_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary teacher_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->



<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var teacherdataTable = $('#teacher_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/teacher/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
 
  $(document).on('submit', '#teacher_form', function(event){
    event.preventDefault();
     var teacherID = $('#teacherID').val();
    var firstname = $('#firstname').val();
    var middlename = $('#middlename').val();
    var lastname = $('#lastname').val();
    var suffix = $('#suffix').val();
    var sex = $('#sex').val();
    var contact = $('#contact').val();
    var address = $('#address').val();
    if(teacherID != '' && firstname != '' && middlename != '' && lastname != '' && suffix != '' && sex != '' && contact != '' && address != '')
    {
            $.ajax({
              url:"datatable/teacher/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.teacher_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
               });
                alert(data);
                $('#teacher_form')[0].reset();
                $('#teacher_modal').modal('hide');
                teacherdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_teacher', function(){
    var rtd_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/teacher/fetch_single.php",
      type:"POST",
      data:{rtd_ID:rtd_ID},
      dataType:"json",
      success:function(data)
      {
       $('#teacher_modal').modal('show');

        $('#teacherID').val(data.teacherID);
        $('#firstname').val(data.firstname);
        $('#middlename').val(data.middlename);
        $('#lastname').val(data.lastname);
        $('#suffix').val(data.suffix).change();
        $('#sex').val(data.sex).change();
        $('#contact').val(data.contact);
        $('#address').val(data.address);
        
         $('#action.teacher_action').text("Edit");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
        });
        $('.mteacher_title').text("Edit Teacher Info");
        $('#rtd_ID').val(rtd_ID);
      }
    });
  });



  $(document).on('click', '.add_teacher', function(){
        
        $('#action.teacher_action').text("Add");
        document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
        });
        $('.mteacher_title').text("Add Teacher Info");
        document.getElementById("teacher_form").reset();
  });
  $(document).on('click', '.delete_teacher', function(){
    var rtd_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/teacher/delete.php",
        type:"POST",
        data:{rtd_ID:rtd_ID},
        success:function(data)
        {
          alert(data);
          teacherdataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});
</script>