
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Student Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add_stud" data-toggle="modal" data-target="#student_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="student_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>LRN</th>
                                    <th>Name</th>
                                    <th>sex</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="student_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title mstud_title">ADD STUDENT</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="student_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
 
                  <div class="modal-body">
                  
                <button  type="button" class="btn btn-success" id="browse_admission"><b><i class="icon-add"></i></b>
             Browse Student</button>
               <br>
               <br>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Student ID</label>
                          <input type="text" class="form-control" id="studentID" name="studentID" placeholder="Student ID">
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
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="rsd_ID" id="rsd_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary stud_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->
<!-- Vertical form modal -->
          <div id="admission_modal1" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title ">ADMISSION LIST</h5>
                </div>

                
                  <div class="modal-body">
                 <table class="table table-bordered" id="admission_data">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                   <th>Gradelevel</th>
                  <th>Name</th>
                  <th>Status</th>
                </tr>
              </thead>
            </table>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
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


  var studdataTable = $('#student_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/student/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

    var dataTableAdmission = $('#admission_data').DataTable({
    "processing": true,
    "serverSide": true,
    "order": [],
    "ajax": {
      url: "datatable/admission/fetch.php",
      type: "POST"
    },
    "columnDefs": [{
      "targets": [0],
      "orderable": false,
    }, ],

  });
 //----------------------------------------------------------------
  //JQUERY FOR SELECTING STUDENT ID WHEN BROWSING
  //----------------------------------------------------------------
    var addstudRec = '#admission_data tbody';

    $(addstudRec).on('click', 'tr', function(){
      
      var cursor = dataTableAdmission.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
      // $('#teacher1_form').find("input[name='subjectID'][type='hidden']").val(data[0]);
      // $('#teacher1_form').find("input[name='subjectCode'][type='text']").val(data[1]);
     
      var admission_ID = data[0];
      var naame = data[3];
    if(confirm("Are you sure you want to use ("+naame+") details?"))
    {
      $.ajax({
            url:"datatable/student/insert.php",
            type:"POST",
            data:{operation:'GetAdmissionDetail',admission_ID:admission_ID},
            dataType:"json",
            success:function(data)
            {
          
              $('#firstname').val(data.admission_Name);
              $('#sex').val(data.sex_ID).change();
              $('#contact').val(data.admission_contact);
              $('#address').val(data.admission_address);
              // dataTableAdmission.ajax.reload();
             }
           });
      $('#admission_modal1').modal('hide');
    }
    else{
      return false;
    }
      
      
    });
 
  $(document).on('submit', '#student_form', function(event){
    event.preventDefault();
    var studentID = $('#studentID').val();
    var firstname = $('#firstname').val();
    var middlename = $('#middlename').val();
    var lastname = $('#lastname').val();
    var suffix = $('#suffix').val();
    var sex = $('#sex').val();
    var contact = $('#contact').val();
    var address = $('#address').val();
    if(studentID != '' && firstname != '' && middlename != '' && lastname != '' && suffix != ''&& sex != ''&& contact != ''&& address != '')
    {
            $.ajax({
              url:"datatable/student/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.stud_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });

                alert(data);
                $('#student_form')[0].reset();
                $('#student_modal').modal('hide');
                studdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_stud', function(){
    var rsd_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/student/fetch_single.php",
      type:"POST",
      data:{rsd_ID:rsd_ID},
      dataType:"json",
      success:function(data)
      {
        $('#student_modal').modal('show');

        $("#studentID").prop("disabled", true);
        $('#studentID').val(data.studentID);
        $('#firstname').val(data.firstname);
        $('#middlename').val(data.middlename);
        $('#lastname').val(data.lastname);
        $('#suffix').val(data.suffix).change();
        $('#sex').val(data.sex).change();
        $('#contact').val(data.contact);
        $('#address').val(data.address);
        
        $('#action.stud_action').text("Edit");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
        });
        $('.mstud_title').text("Edit Student Info");
        $('#rsd_ID').val(rsd_ID);
      }
    })
  });



  $(document).on('click', '.add_stud', function(){
        $("#studentID").prop("disabled", false);
        $('#action.stud_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
        $('.mstud_title').text("Add Student Info");
        document.getElementById("student_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var rsd_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/student/delete.php",
        type:"POST",
        data:{rsd_ID:rsd_ID},
        success:function(data)
        {
          alert(data);
          studdataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });

   $(document).on('click', '#browse_admission', function(){
    
    
    $('#admission_modal1').modal('show');
  });
  
  
});
</script>