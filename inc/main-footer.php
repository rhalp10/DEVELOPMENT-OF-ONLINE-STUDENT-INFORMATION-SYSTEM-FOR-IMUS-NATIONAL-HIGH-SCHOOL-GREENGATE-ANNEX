<!-- Footer -->
					<div class="footer text-muted text-center" style="bottom: 0px; height: 52px; margin-top: -30px;">
						&copy; <?php
						$fromYear = 2019; 
						$thisYear = (int)date('Y'); 
						echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Company.
					</div>
					<!-- /footer -->