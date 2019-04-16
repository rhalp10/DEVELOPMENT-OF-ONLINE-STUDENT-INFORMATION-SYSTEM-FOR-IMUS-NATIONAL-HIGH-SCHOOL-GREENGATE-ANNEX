
 <!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Account Management</h5>

		</div>
		<button type="button" class="btn btn-success btn-labeled btn-labeled-right add" data-toggle="modal" data-target="#account_modal" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
		 Add</button>
		<table class="table table-bordered" id="account_data">
			<thead>
				<tr>
                              <th>ID</th>
                              <th><select name="category" id="category" class="form-control">
         <option value="">Level</option>
         <?php 
         $query = "SELECT * FROM `ref_user_level` ";
        $result = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($result))
         {
          echo '<option value="'.$row["ulevel_ID"].'">'.$row["ulevel_Name"].'</option>';
         }
         ?>
        </select></th>
                              <th>Username</th>
                              <th>Status</th>
                              <th>Register</th>
					<th class="text-center" width="5%">Actions</th>
				</tr>
			</thead>
			
		</table>
	</div>
	<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="account_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">ADD ACCOUNT</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="account_form" enctype="multipart/form-data">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Username</label>
													<input type="text" class="form-control" id="username" name="username" placeholder="username">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Level</label>
													<select class="select" name="level" id="level" >
                                                                   <option value="">~~SELECT~~</option>
                                                                 <?php 
                                                                 $query = mysqli_query($con,"SELECT * FROM `ref_user_level`");
                                                                 if (mysqli_num_rows($query) > 0) 
                                                                 {
                                                                      while ($rows = mysqli_fetch_assoc($query)) {
                                                                 ?>
                                                                 <option value="<?php echo $rows['ulevel_ID']?>" ><?php echo $rows['ulevel_Name']?></option>
                                                                 <?php
                                                                      }
                                                                 }
                                                                 ?>
                                                                 </select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Email</label>
													<input type="text" class="form-control" id="email" name="email" placeholder="Email">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Password</label>
													<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
												</div>

												<div class="col-sm-6">
													<label>Retype Password</label>
													<input type="password" class="form-control" id="con_pass" name="con_pass" placeholder="Confirm Your Password">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Active</label>
													<select class="select" name="status" id="status" >
                                                                   <option value="">~~SELECT~~</option>
                                                                   <option value="1">Activate</option>
                                                                   <option value="0">Deactivate</option>
                                                                   <option value="2">Ban</option>
                                                                 </select>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
								       <input type="hidden" name="user_ID" id="user_ID" />
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
$(document).ready(function () {

	$("select[value]").each(function () {
		$(this).val(this.getAttribute('value'));
	});



	
  load_data();

function load_data(is_category)
 {
  var dataTable = $('#account_data').DataTable({
   "processing":true,
   "serverSide":true,
   "order":[],
   "ajax":{
    url:"datatable/account/fetch.php",
    type:"POST",
    data:{is_category:is_category}
   },
   "columnDefs":[
    {
     "targets":[1],
     "orderable":false,
    },
   ],
  });
 }

 $(document).on('change', '#category', function(){
  var category = $(this).val();
  $('#account_data').DataTable().destroy();
  if(category != '')
  {
   load_data(category);
  }
  else
  {
   load_data();
  }
 });

     $(document).on('submit', '#account_form', function (event) {
          event.preventDefault();
          var username = $('#username').val();
          var level = $('#level').val();
          var email = $('#email').val();
          var pass = $('#pass').val();
          var con_pass = $('#con_pass').val();
          var status = $('#status').val();
          if (username != '' && level != '' && email != '' && pass != '' && con_pass != '' && status != '') {


               if (pass == con_pass) {

                    if (pass.length > 6) {
                         console.log(username + level + email + pass + status);
                         $.ajax({
                              url: "datatable/account/insert.php",
                              type: 'POST',
                              data: new FormData(this),
                              // data:"username="+username+"&level="+level+"&email="+email+"&pass="+pass+"&status="+status+"&operation="+operation,
                              contentType: false,
                              processData: false,
                              success: function (data) {
                                   $('#action').val("Add");
                                   $('#operation').val("Add");

                                   alert(data);
                                   $('#account_form')[0].reset();
                                   $('#account_modal').modal('hide');
                                   dataTable.ajax.reload();
                              }
                         });
                    } else {
                         alert("Minumum Password Length is 6 Character");
                    }
               } else {
                    alert("Password not match");
               }
          } else {
               alert("Fields are Required");
          }
     });

	$(document).on('click', '.update', function () {
		var user_ID = $(this).attr("id");
		$.ajax({
			url: "datatable/account/fetch_single.php",
			type: "POST",
			data: {
				user_ID: user_ID
			},
               dataType:"json",
			success: function (data) {
                    $('#account_modal').modal('show');
                    $("#username").prop("disabled", true);
                    $('#username').val(data.user_Name);
                    $('#email').val(data.user_Email);
                    $('#pass').val(data.user_Pass);
                    $('#con_pass').val(data.user_Pass);
                    $('#level').val(data.level_ID).change();
                    $('#status').val(data.user_status).change();
                    $('#action').text("Edit");
                    $('#operation').val("Edit");
                    $('.modal-title').text("Edit Account Info");
                    $('#user_ID').val(user_ID);
			}
		});
	});
     $(document).on('click', '.add', function () {
          $('#username').prop("disabled", false);
          $('#action').text("Add");
          $('#operation').val("Add");
          $('.modal-title').text("Add Account Info");
          document.getElementById('account_form').reset();
          $('#level').val('').change();
          $('#status').val('').change();
     });


	$(document).on('click', '.delete', function () {
		var user_ID = $(this).attr('id');
		if (confirm("Are you sure you want to delete this?")) {
			$.ajax({
				url: "datatable/account/delete.php",
				type: "POST",
				data: {
					user_ID: user_ID
				},
				success: function (data) {
					alert(data);
					dataTable.ajax.reload();
				}
			});
		} else {
			return false;
		}
	});


});
</script>