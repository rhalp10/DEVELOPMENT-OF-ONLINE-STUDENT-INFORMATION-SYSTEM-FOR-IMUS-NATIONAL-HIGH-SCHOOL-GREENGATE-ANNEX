
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Section Management</h5>
						</div>

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
													<li><a href="#"><i class="icon-eye"></i> View</a></li>
													<li><a href="#"><i class="icon-pencil7"></i> Update</a></li>
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
