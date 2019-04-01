
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Parent Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#parent_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="parent_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Anak mo</th>
                                    <th>Name</th>
                                    <th>Sex</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="parent_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title">ADD PARENT</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="parent_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="col-sm-12">
                          <label>Student LRN</label>
                          <input type="text" class="form-control" id="studentLRN" name="studentLRN" placeholder="Student LRN">
                        </div>
                        <div class="col-sm-12">
                          <label>Username</label>
                          <input type="text" class="form-control" id="parent_user" name="parent_user" placeholder="Parent username">
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
                       <input type="hidden" name="parent_ID" id="parent_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary" id="action">Add</button>
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


  var dataTable = $('#parent_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/parent/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
 
  $(document).on('submit', '#parent_form', function(event){
    event.preventDefault();
    var studentLRN = $('#studentLRN').val();
    var parent_user = $('#parent_user').val(); 
    var firstname = $('#firstname').val();
    var middlename = $('#middlename').val();
    var lastname = $('#lastname').val();
    var suffix = $('#suffix').val();
    var sex = $('#sex').val();
    var contact = $('#contact').val();
    var address = $('#address').val();
    if(studentLRN != '' && firstname != '' && middlename != '' && lastname != '' && suffix != '' && sex != '' && contact != '' && address != '' )
    {
            $.ajax({
              url:"datatable/parent/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#parent_form')[0].reset();
                $('#parent_modal').modal('hide');
                dataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update', function(){
    var parent_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/parent/fetch_single.php",
      type:"POST",
      data:{parent_ID:parent_ID},
      dataType:"json",
      success:function(data)
      {
       $('#parent_modal').modal('show');

        $('#studentLRN').val(data.studentLRN);
        $('#parent_user').val(data.parent_user);
        $('#firstname').val(data.firstname);
        $('#middlename').val(data.middlename);
        $('#lastname').val(data.lastname);
        $('#suffix').val(data.suffix).change();
        $('#sex').val(data.sex).change();
        $('#contact').val(data.contact);
        $('#address').val(data.address);
        $('#action').text("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Parent Info");
        $('#parent_ID').val(parent_ID);
      }
    });
  });



  $(document).on('click', '.add', function(){
      $('#action').text("Add");
      $('#operation').val("Add");
      $('.modal-title').text("Add Parent Info");
      document.getElementById("parent_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var parent_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/parent/delete.php",
        type:"POST",
        data:{parent_ID:parent_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
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