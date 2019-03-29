<style type="text/css">
	.navbar {min-height:42px !important}
</style>
<!-- Main navbar -->
	<div class="navbar navbar-inverse " style="background-color: #026411;">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php" >INHS-GA</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>

			</ul>
			<ul class="nav navbar-nav navbar-left" id="navigation">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">ADMISSION <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
					
						<li><a href="index?page=admission"  >Admission Form</a></li>
						<li><a href="index?page=admission_guidelines"  >Admission Guidelines</a></li>
						<li><a href="index?page=admission_requirements"  >Admission Requirements</a></li>
						<li><a href="index?page=downloadable_forms"  >Downloadable Forms</a></li>
						<!-- <li><a href="index?page=collaterals"  >Collaterals</a></li> -->
						<li><a href="index?page=contact"  >Contact Information</a></li>
						
					</ul>

				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">SUBJECTS <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
						
						<li><a href="index?page=list_of_subject_by_faculty" >Faculty List by Subject</a></li>
					
						
						<li><a href="index?page=k-12">K-12 Program</a></li>
						<!--
						<li><a href="#"  data-id="Type/Name/Special" id="getPage" >Grade 7</a></li>
						<li><a href="#"  data-id="Type/Name/Special" id="getPage" >Grade 8</a></li>
						<li><a href="#"  data-id="Type/Name/Special" id="getPage" >Grade 9</a></li>
						<li><a href="#"  data-id="Type/Name/Special" id="getPage" >Grade 10</a></li> -->
						
					</ul>

				</li>				<li class="">
					<a href="index?page=news" class="dropdown-toggle legitRipple" >NEWS </a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">MEMOS<span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
												<li><a href="http://www.depedimuscity.com/issuances.php"   target="_BLANK">Division</a></li>
							<li><a href="http://depedcalabarzon.ph/september-2018/"     target="_BLANK">Regional</a></li>
							<li><a href="http://www.deped.gov.ph/category/issuances/deped-memoranda/"    target="_BLANK">National</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle legitRipple" data-toggle="dropdown" aria-expanded="false">ABOUT US <span class="caret"></span></a>
					<ul class="dropdown-menu dropdown-menu-left" id="hoverrr">
						
							<li><a href="index?page=history">History</a></li>
							<li><a href="index?page=mv">Vision-Mission</a></li>							
							<!-- <li><a href="index?page=boardlist">Board of Directors and Officers</a></li> -->
							<li><a href="index?page=organizationchart">Organizational Chart</a></li>
						
						<li><a href="index?page=contact" >Contact Information</a></li>
						<li><a href="index?page=map">How to Get Here</a></li>
					</ul>
				</li>

			</ul>
		</div>
		<?php if (isset($_SESSION['login_user'])): ?>
		<div class="navbar-collapse collapse" id="navbar-mobile">

			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo $_SESSION['login_user'];?>" alt="">
						<span><?php echo $_SESSION['login_user'];?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>	
		<?php else: ?>
		<div class="navbar-collapse collapse" id="navbar-mobile">

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<li>
						<a class="dropdown-toggle" href="authentication.php" >
							<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> </span>Login
						</a>
					</li>
											
				</li>
				
			</ul>
		</div>
		<?php endif ?>
	</div>
	<!-- /main navbar -->