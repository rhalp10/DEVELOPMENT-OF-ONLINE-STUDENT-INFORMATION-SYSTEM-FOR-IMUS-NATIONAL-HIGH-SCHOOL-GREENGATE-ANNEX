
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Account Management</h5>

						</div>
						<button type="button" class="btn btn-success btn-labeled btn-labeled-right" data-toggle="modal" data-target="#modal_form_vertical" style="margin-left: 10px;"><b><i class="icon-add"></i></b>
						 Add</button>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>ID</th>
									<th>Level</th>
									<th>Username</th>
									<th>Register</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$sql = "SELECT * FROM `user_accounts`";
								$result = $con->query($sql);

								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								        $user_ID = $row["user_ID"];
								        $ulevel_ID = $row["ulevel_ID"];
								        $user_Name = $row["user_Name"];
								        $user_Registered = $row["user_Registered"];
								        $user_status = $row["user_status"];
								        ?>
								        <tr>
										<td><?php echo $user_ID; ?></td>
										<td><?php echo $ulevel_ID; ?></td>
										<td><?php echo $user_Name; ?></td>
										<td><?php echo $user_Registered; ?></td>
										<?php 
										if ($user_status == 0) {
											?><td><span class="label label-danger">Inactive</span></td><?php
										}
										else{
											?><td><span class="label label-success">Active</span></td><?php
										}
										?>
										<td class="text-center">
											<div class="btn-group">
						                    	<button type="button" class="btn btn-primary btn-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							                    	<i class="icon-gear"></i> &nbsp;<span class="caret"></span>
						                    	</button>

						                    	<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-eye"></i> View</a></li>
													<li><a href="#" data-toggle="modal" data-target="#modal_form_vertical"><i class="icon-pencil7"></i> Update</a></li>
												</ul>
											</div>
										</td>
								        </tr>
								        <?php
								    }
								} else {
								    echo "0 results";
								}

								?>
								
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->

<!-- Vertical form modal -->
					<div id="modal_form_vertical" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">ADD NEW ACCOUNT</h5>
								</div>

								<form action="#">
									<!-- <button type="button" class="btn btn-success btn-labeled btn-labeled-right pull-right" data-toggle="modal" data-target="#modal_form_vertical"><b><i class="icon-add"></i></b>
						 Browse Student</button> -->
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Username</label>
													<input type="text" placeholder="Eugene" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label>Password</label>
													<input type="password" placeholder="" class="form-control">
												</div>

												<div class="col-sm-6">
													<label>Comfirm Password</label>
													<input type="password" placeholder="" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>User level</label>
													<select class="select">
														<option>ADMIN</option>
														<option>STUDENT</option>
														<option>PARENT</option>
													</select>
												</div>

												
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Email</label>
													<input type="text" placeholder="email@domain.com" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Submit form</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /vertical form modal -->



 