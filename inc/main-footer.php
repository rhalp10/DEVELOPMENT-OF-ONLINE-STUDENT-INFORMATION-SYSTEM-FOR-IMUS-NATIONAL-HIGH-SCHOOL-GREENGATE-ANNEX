<!--Footer -->
<div class="footer text-muted text-center footer-bs" style="bottom: 0px; height: 100px;">
    <section style=" text-align:center; margin:10px auto;"><p>	&copy; <?php
						$fromYear = 2019; 
						$thisYear = (int)date('Y'); 
						echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Greengate Annex, All rights reserved</p></section>
					</div>
					<!-- /footer