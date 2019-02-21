
<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Grade Management</h5>
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


<div class="panel-group">
	<div class="panel">
		<div class="panel-heading bg-slate">
			<h6 class="panel-title">
				<a data-toggle="collapse" href="#collapsible-styled-group1" aria-expanded="false" class="collapsed">2019 GRADE</a>
			</h6>
		</div>
		<div id="collapsible-styled-group1" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
			<div class="panel-body" style="padding: 0px;">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="bg-indigo-400">
								<th colspan="2" class="text-center">SUBJECT</th>
								<th colspan="4" class="text-center">GRADING</th>
							</tr>
							<tr class="bg-indigo-600">
								<th class="">Code</th>
								<th class="">Name</th>
								<th class="">1st </th>
								<th class="">2nd </th>
								<th class="">3rd </th>
								<th class="">4th </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>SUB1</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>3</td>
								<td>SUB2</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>4</td>
								<td>SUB3</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr> 
								<td colspan="2">TOTAL GPA: 100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-heading bg-slate">
			<h6 class="panel-title">
				<a class="collapsed" data-toggle="collapse" href="#collapsible-styled-group2" aria-expanded="false">2020 GRADE</a>
			</h6>
		</div>
		<div id="collapsible-styled-group2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
			<div class="panel-body" style="padding: 0px;">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="bg-indigo-400">
								<th colspan="2" class="text-center">SUBJECT</th>
								<th colspan="4" class="text-center">GRADING</th>
							</tr>
							<tr class="bg-indigo-600">
								<th class="">Code</th>
								<th class="">Name</th>
								<th class="">1st </th>
								<th class="">2nd </th>
								<th class="">3rd </th>
								<th class="">4th </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>SUB1</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>3</td>
								<td>SUB2</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>4</td>
								<td>SUB3</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr> 
								<td colspan="2">TOTAL GPA: 100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="panel">
		<div class="panel-heading bg-slate">
			<h6 class="panel-title">
				<a class="collapsed" data-toggle="collapse" href="#collapsible-styled-group3" aria-expanded="false">2021 GRADE</a>
			</h6>
		</div>
		<div id="collapsible-styled-group3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
			<div class="panel-body" style="padding: 0px;">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="bg-indigo-400">
								<th colspan="2" class="text-center">SUBJECT</th>
								<th colspan="4" class="text-center">GRADING</th>
							</tr>
							<tr class="bg-indigo-600">
								<th class="">Code</th>
								<th class="">Name</th>
								<th class="">1st </th>
								<th class="">2nd </th>
								<th class="">3rd </th>
								<th class="">4th </th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>SUB1</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>3</td>
								<td>SUB2</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr>
								<td>4</td>
								<td>SUB3</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
							<tr> 
								<td colspan="2">TOTAL GPA: 100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
								<td>100</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
