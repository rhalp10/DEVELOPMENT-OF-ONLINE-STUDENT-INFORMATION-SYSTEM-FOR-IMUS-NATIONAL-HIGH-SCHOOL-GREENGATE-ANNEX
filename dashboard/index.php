<?php 
include('../session.php');

$login_level = 1;

if (empty($_REQUEST['page'])) {
	$page = "";
}
else{
	$page = $_REQUEST['page'];
}
$PageTitle = "Sample Page";
$PageIcon = "";
$user_image = "assets/images/placeholder.jpg";
$user_name = "Darren";
$user_level = "ADMIN";
$user_fName = "Rhalp Darren";
$user_profile_image = "../assets/images/placeholder.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $PageTitle; ?></title>

	<?php 
	include ("dash-core-script.php");
	?>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="../assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<p class="navbar-text">
				<span class="label bg-success">Online</span>
			</p>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					

					<?php 
					// include ("dash-drop-messages.php");
					?>

					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo $user_image;?>" alt="">
							<span><?php echo $user_name;?></span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
							<li class="divider"></li>
							<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
							<li><a href="../logout.php"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="<?php echo $user_profile_image;?>" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $user_fName;?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<?php 
					include ("dash-main-nav.php");
					?>

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					
					<?php 
					print_r($_SESSION);
					$pageheader = "Table";
					$pageheader_text_effect = "B";
					include ("dash-page-header.php");
					include ("dash-breadcrum.php");

					?>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<?php 
						if (file_exists("dash-content-".$page.".php")) {
							include ("dash-content-".$page.".php");
						}
						else{
							if (empty($page)) {
								include ("dash-content.php");
							}
							else{
								include ("dash-content-404.php");
							}
							
						}
						

						include ("dash-footer.php");
					?>
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
