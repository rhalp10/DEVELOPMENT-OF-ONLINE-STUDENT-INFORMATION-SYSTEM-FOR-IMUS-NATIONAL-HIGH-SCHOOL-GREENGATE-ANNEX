<!-- Footer -->
					<div class="footer text-muted">
						&copy; <?php
						$fromYear = 2019; 
						$thisYear = (int)date('Y'); 
						echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Greengate Annex, All rights reserved
					</div>
					<!-- /footer -->