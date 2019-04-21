
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Academic Staff Management</h5>

            </div>
       
            <table class="table table-bordered" id="student_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Subject Code</th>
                                    <th>Subject Title</th>
                                    <th>Subject Abbreviation</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="staff_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title zsubtitle">STAFF</h5>
                </div>

               
                  <div class="modal-body">
                        <button  type="button" class="btn btn-sucess Add">ADD</button>
                    <table class="table table-bordered" id="staff_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                  <th class="text-center">Actions</th>
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
          <div id="udpatestaff_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title  uzasd">UPDATE STAFF</h5>
                </div>

           <form action="#" method="POST"  class="form-horizontal" id="staff_form" enctype="multipart/form-data">
      
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Name</label>
                          <input type="text" class="form-control" id="staff_name" name="staff_name" placeholder="">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Position</label>
                          <input type="text" class="form-control" id="staff_position" name="staff_position" placeholder="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="acs_ID" id="acs_ID" />
                       <input type="hidden" name="zsub_ID" id="zsub_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary z_action" id="action">Add</button>
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


  var subjectdataTable = $('#student_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/acadstaff/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
load_staff();
function load_staff(sub_ID)
 {
    var staffdataTable = $('#staff_data').DataTable({
    "processing":true,
    "serverSide":true,
    "bFilter":false,
    "paging":   false,
        "ordering": false,
        "info":     false,  
    "order":[],
    "ajax":{
      url:"datatable/acadstaff/fetch_staff.php",
      data:{subject_ID:sub_ID},
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
      $(document).on('submit', '#staff_form', function(event){
    event.preventDefault();
    var staff_name = $('#staff_name').val();
    var staff_position = $('#staff_position').val();
    var subject_ID = $('#subject_ID').val();
    if(staff_name != '' && staff_position != '' && subject_ID != '')
    {
            $.ajax({
              url:"datatable/acadstaff/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.sub_action').text("Add");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
                alert(data);
                $('#subject_form')[0].reset();
                $('#subject_modal').modal('hide');
                  staffdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });




  $(document).on('click', '.Add', function(){
     
    $('#staff_name').val('');
    $('#staff_position').val('');
   
    $('#udpatestaff_modal').modal('show');
      $('#action.z_action').text("ADD");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
        $('.uzasd').text("Add");
    // $.ajax({
    //   url:"datatable/acadstaff/fetch_single.php",
    //   type:"POST",
    //   data:{acs_ID:acs_ID},
    //   dataType:"json",
    //   success:function(data)
    //   {
    //     $('#udpatestaff_modal').modal('show');
    //     $('#staff_name').val(data.name);
    //     $('#staff_position').val(data.position);
    //     $('#action.z_action').text("Update");
    //             document.getElementsByName('operation').forEach(function(ele, idx) {
    //              ele.value = 'Add';
    //           });
    //     $('.uzasd').text("Add");
    //     $('#acs_ID').val(acs_ID);
    //   }
    // })
  });

  $(document).on('click', '.update_acs', function(){
    var acs_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/acadstaff/fetch_single.php",
      type:"POST",
      data:{acs_ID:acs_ID},
      dataType:"json",
      success:function(data)
      {
        $('#udpatestaff_modal').modal('show');
        $('#staff_name').val(data.name);
        $('#staff_position').val(data.position);
        $('#action.z_action').text("Update");
                document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
              });
        $('.uzasd').text("Update");
        $('#acs_ID').val(acs_ID);
      }
    })
  });



  $(document).on('click', '.view_staffs', function(){
        var subject_ID = $(this).attr("id");
       $('#staff_modal').modal('show');
       $('#zsub_ID').val(subject_ID);
       $('#staff_data').DataTable().destroy();
        if(subject_ID != '')
      {
       load_staff(subject_ID);
      }
      else
      {
       load_staff();
      }
      
  });
  $(document).on('click', '.delete_acs', function(){
    var acs_ID = $(this).attr("id");
    if(confirm("Are you sure you want to remove this?"))
    {
      $.ajax({
        url:"datatable/acadstaff/delete.php",
        type:"POST",
        data:{acs_ID:acs_ID},
        success:function(data)
        {
          alert(data);
          staffdataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  }
 subjectdataTable.columns( [3] ).visible( false );

  
  
});
</script>