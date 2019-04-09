<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#semester_tab">Semester</a></li>
  <li><a data-toggle="tab" href="#section_tab">Section</a></li>
  <li><a data-toggle="tab" href="#grade_tab">Gradelevel</a></li>
  <li><a data-toggle="tab" href="#subject_tab">Subject</a></li>
</ul> 

<div class="tab-content">
  <div id="semester_tab" class="tab-pane fade in active">
    <!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Semester Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add_sem" data-toggle="modal" data-target="#semester_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
            <table class="table table-bordered" id="semester_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Start</th>
                                    <th>End</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="semester_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title msemester_title">ADD SEMESTER</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="semester_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester Start</label>
                          <input type="date" class="form-control" id="semester_Start" name="semester_Start">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester End</label>
                          <input type="date" class="form-control" id="semester_End" name="semester_End" >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Semester Status</label>
                          <select class="select" name="semester_Stat" id="semester_Stat" >
                            <option value="">~~SELECT~~</option>
                            <option value="1">Activate</option>
                            <option value="0">Deactivate</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="semester_ID" id="semester_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary sem_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->
  </div>
  <div id="section_tab" class="tab-pane fade" >
   <!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Section Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add_section" data-toggle="modal" data-target="#section_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
             <br>
             <br>
            <table class="table table-bordered" id="section_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th width="80%">Name</th>
                    <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->
          <!-- Vertical form modal -->
          <div id="section_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title msection_title">ADD ACCOUNT</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="section_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Section Name</label>
                          <input type="text" class="form-control" id="section_Name" name="section_Name" placeholder="Section Name">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="section_ID" id="section_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary section_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->
  </div>
  <div id="grade_tab" class="tab-pane fade">
    
<!-- Basic datatable -->
          <div class="panel panel-flat">
            <div class="panel-heading">
              <h5 class="panel-title">Year Level Management</h5>

            </div>
            <button type="button" class="btn btn-success btn-labeled btn-labeled-right add_grade" data-toggle="modal" data-target="#yl_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
             Add</button>
              <br><br>
            <table class="table table-bordered" id="yl_data">
              <thead>
                <tr>
                                    <th>ID</th>
                                    <th>Year Level</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
            </table>
          </div>
          <!-- /basic datatable -->

<!-- Vertical form modal -->
          <div id="yl_modal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-slate-400">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h5 class="modal-title myl_title">ADD Year Level</h5>
                </div>

                <form action="#" method="POST"  class="form-horizontal" id="yl_form" enctype="multipart/form-data">
                  <!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
             Browse Student</button> -->
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Grade Level</label>
                          <input type="text" class="form-control" id="yl_Name" name="yl_Name" placeholder="Year Level">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                       <input type="hidden" name="yl_ID" id="yl_ID" />
                       <input type="hidden" name="operation" id="operation" value="Add" />
                       <button type="submit" class="btn btn-primary yl_action" id="action">Add</button>
                  <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /vertical form modal -->
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

/*
  SEMESTER MANAGEMENT  
 */
  var semesterdataTable = $('#semester_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "bAutoWidth": false,
    "ajax":{
      url:"datatable/semester/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


 
  $(document).on('submit', '#semester_form', function(event){
    event.preventDefault();
    var semester_Start = $('#semester_Start').val();
    var semester_End = $('#semester_End').val();
    var semester_Stat = $('#semester_Stat').val();
    if(semester_Start != '' && semester_End != '' && semester_Stat != '')
    {
            $.ajax({
              url:"datatable/semester/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.sem_action').text("Add");
                
                document.getElementsByName('operation').forEach(function(ele, idx) {
                   ele.value = 'Add';
                });

                alert(data);
                $('#semester_form')[0].reset();
                $('#semester_modal').modal('hide');
                semesterdataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_sem', function(){
    var semester_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/semester/fetch_single.php",
      type:"POST",
      data:{semester_ID:semester_ID},
      dataType:"json",
      success:function(data)
      {
        $('#semester_modal').modal('show');
        $('#semester_Start').val(data.semester_Start);
        $('#semester_End').val(data.semester_End);
        $('#semester_Stat').val(data.semester_Stat).change();
        $('#action.sem_action').text("Update");
       
        document.getElementsByName('operation').forEach(function(ele, idx) {
                   ele.value = 'Edit';
                });
        $('.msemester_title').text("Edit Semester Info");
        $('#semester_ID').val(semester_ID);
      }
    })
  });



  $(document).on('click', '.add_sem', function(){
        $('#action.sem_action').text("Add");
        $('#operation').val("Add");
        $('.msemester_title').text("Add Semester Info");
        document.getElementById("semester_form").reset();
  });
  $(document).on('click', '.delete_sem', function(){
    var semester_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/semester/delete.php",
        type:"POST",
        data:{semester_ID:semester_ID},
        success:function(data)
        {
          alert(data);
          semesterdataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});

/*
  SECTION MANAGEMENT  
 */

  var sectiondataTable = $('#section_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],

    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false ,
    "ajax":{
      url:"datatable/section/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


  $('#section_data').css( 'padding', '10px;' );

 


$(document).on('submit', '#section_form', function(event){
    event.preventDefault();
    var section_Name = $('#section_Name').val();
    if(section_Name != '')
    {
            $.ajax({
              url:"datatable/section/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action.section_action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#section_form')[0].reset();
                $('#section_modal').modal('hide');
                sectiondataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_section', function(){
    var section_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/section/fetch_single.php",
      type:"POST",
      data:{section_ID:section_ID},
      dataType:"json",
      success:function(data)
      {
        $('#section_modal').modal('show');
        $('#section_Name').val(data.section_Name);
        $('#action.section_action').text("Edit");
        //  document.getElementsById('action').forEach(function(ele, idx) {
        //    ele.value = 'Edit';
        // });
        // $('#operation').val("Edit");
        document.getElementsByName('operation').forEach(function(ele, idx) {
           ele.value = 'Edit';
        });
        $('.msection_title').text("Edit Section Info");
        $('#section_ID').val(section_ID);
      }
    })
  });



  $(document).on('click', '.add_section', function(){
        $('#action.section_action').text("Add");
        // $('#operation').val("Add");

         document.getElementsByName('operation').forEach(function(ele, idx) {
           ele.value = 'Add';
        });
        $('.msection_title').text("Add Section Info");
        document.getElementById("section_form").reset();
  });
  $(document).on('click', '.delete_section', function(){
    var section_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/section/delete.php",
        type:"POST",
        data:{section_ID:section_ID},
        success:function(data)
        {
          alert(data);
          sectiondataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
/*
  YEAR LEVEL MANAGEMENT  
 */

    var gradeleveldataTable = $('#yl_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "bPaginate": false,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": false ,
    "ajax":{
      url:"datatable/yearlevel/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

    $(document).on('submit', '#yl_form', function(event){
    event.preventDefault();
    var yl_Name = $('#yl_Name').val();
    if(yl_Name != '')
    {
            $.ajax({
              url:"datatable/yearlevel/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
              
              document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });

                alert(data);
                $('#yl_form')[0].reset();
                $('#yl_modal').modal('hide');
                gradeleveldataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_grade', function(){
    var yl_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/yearlevel/fetch_single.php",
      type:"POST",
      data:{yl_ID:yl_ID},
      dataType:"json",
      success:function(data)
      {
        $('#yl_modal').modal('show');
        $('#yl_Name').val(data.yl_Name);
        $('#action.yl_action').text("Update");
        document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Edit';
              });
        $('.myl_title').text("Edit Year Level Info");
        $('#yl_ID').val(yl_ID);
      }
    })
  });



  $(document).on('click', '.add_grade', function(){
        $('#action.yl_action').text("Add");
        document.getElementsByName('operation').forEach(function(ele, idx) {
                 ele.value = 'Add';
              });
        $('.myl_title').text("Add Year Level Info");
        document.getElementById("yl_form").reset();
  });
  $(document).on('click', '.delete_grade', function(){
    var yl_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/yearlevel/delete.php",
        type:"POST",
        data:{yl_ID:yl_ID},
        success:function(data)
        {
          alert(data);
          gradeleveldataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
/*
 END YEAR LEVEL MANAGEMENT  
 */


</script>