
					<div class="row">
						<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">

								<div class="row">
									<div class="col-sm-12">

									<form action="data-process.php" method="POST" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="rcard">Report Card:</label>
									    <input type="file" class="form-control" id="rcard" name="rcard" required="">
									  </div>
									  <div class="form-group">
									    <label for="bcert">Photocopy of Birth Certificate:</label>
									    <input type="file" class="form-control" id="bcert" name="bcert" required="">
									  </div>

									  <div class="form-group">
									    <label for="pic1x1">1x1 ID Picture:</label>
									    <input type="file" class="form-control" id="pic1x1" name="pic1x1" required="">
									  </div>

									  <div class="form-group">
									    <label for="gmoralcert">Good Moral Certificate:</label>
									    <input type="file" class="form-control" id="gmoralcert" name="gmoralcert" required="">
									  </div>

									  <div class="form-group">
									    <label for="brgyclrnc">Barangay Clearance:</label>
									    <input type="file" class="form-control" id="brgyclrnc" name="brgyclrnc" required="">
									  </div>
									   <div class="form-group">
									    <label for="financial">Financial Assessment (from private school):</label>
									    <input type="file" class="form-control" id="financial" name="financial">
									  </div>
									  <input type="hidden" name="admission_ID" value="<?php echo $_REQUEST["admission_ID"]?>">
									  <button type="submit" class="btn btn-default" name="submit_files">Submit</button>
									</form>
									</div>
								</div>
						</div>
					</div>
