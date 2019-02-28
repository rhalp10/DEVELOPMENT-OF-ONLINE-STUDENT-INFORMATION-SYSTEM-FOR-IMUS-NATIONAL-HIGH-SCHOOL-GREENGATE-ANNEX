

<div class="panel">
	<div class="panel-heading bg-slate">
		<h6 class="panel-title">
			<a class="collapsed" aria-expanded="false">ATTENDACE</a>
		</h6>
	</div>
	
		<div class="panel-body" style="padding: 0px;">
		<div class="table-responsive">
			<table class="table table-bordered">
					<thead>
						<tr class="bg-indigo-400">
							<th colspan="12" class="text-center">ATTENDACE</th>
						</tr>
						<tr class="bg-indigo-600">
							<th class="text-center">#</th>
							<th class="">Name</th>
							<th class="text-center">Status</th>
						</tr>
					</thead>
					<tbody>
						<?PHP 
						for ($i=0; $i < 25; $i++) { 
							?>
						<tr>
							<td class="text-center" style="width: 10%;"><?php echo $i?></td>
							<td style="width: 70%;">RHALP DARREN CABRERA</td>
							<td class="text-center" style="width: 20%;"> <div class="btn-group"><button class="btn btn-danger"><i class="icon-user-cancel"></i></button><button class="btn btn-success"><i class="icon-user-check"></i></button></div></td>
						</tr>
							<?PHP
						}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	
	</div>