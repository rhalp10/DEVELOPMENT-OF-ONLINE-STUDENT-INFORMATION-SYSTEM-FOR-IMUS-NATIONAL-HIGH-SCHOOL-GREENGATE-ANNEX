<?php 
include('../session.php');


if (empty($_REQUEST['page'])) {
	$page = "";
}
else{
	$page = $_REQUEST['page'];
}
$PageTitle = "INHS-GA";
$PageIcon = "";
$login_id = $_SESSION['login_id'];
$user_image =  $_SESSION['user_img'];
$user_name = $_SESSION['user_Name'];
$login_level = $_SESSION['login_level'];
if (!empty($_SESSION['fullname'])) {
	$user_fullname =  $_SESSION['fullname'];
} else {
	$user_fullname =$_SESSION['user_Name'];;
}

?>
<!-- 
 *  ᜍ᜔ᜑᜎ᜔ᜉ᜔ ᜇᜍ᜔ᜍᜒᜈ᜔ ᜍ᜔. cᜀᜊ᜔ᜍᜒᜍ 
 *  ᜉcᜁᜊᜓᜂᜃ᜔.cᜂᜋ᜔:ᜑ᜔ᜆ᜔ᜆ᜔ᜉ᜔ᜐ᜔://ᜏ᜔ᜏ᜔ᜏ᜔.ᜉcᜁᜊᜓᜂᜃ᜔.cᜂᜋ᜔/ᜍ᜔ᜑᜎ᜔ᜉ᜔10
 * -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo.ico"/>
	<title><?php echo $PageTitle; ?></title>

	<?php 
	include ("dash-core-script.php");
	?>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index"><img src="../assets/images/logo_light.png" alt=""></a>

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
							<img src="<?php echo $user_image;?>" alt="" style="border: 1px solid;" id='r_img'>
							<span><?php echo $user_fullname;?></span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="#" data-toggle="modal" data-target="#profile_modal"><i class="icon-cog5"></i> My profile</a></li>
							<li class="divider"></li>
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
								<a href="#" class="media-left"><img src="<?php echo $user_image;?>" class="img-circle img-sm" alt="" id="l_img"></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $user_fullname;?></span>
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
					<div class="page-header-content">
						<div class="page-title">
							<h4></h4>
						</div>
					</div>
					<?php 
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
				<!-- /profile area -->
					<div id="profile_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">PROFILE</h5>
								</div>
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-4">
													<label>Profile Image</label>
												</div>
												<div class="col-sm-8">
													<a  href="#" data-toggle="modal" data-target="#changeprofile" class="btn btn-primary">EDIT</a>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-4">
													<label> Password</label>
												</div>
												<div class="col-sm-8">
													<a  href="#" data-toggle="modal" data-target="#changepass" class="btn btn-primary">EDIT</a>
											</div>
										</div>
										
									</div>
									<div class="modal-footer">
									   <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
							</div>
						</div>
					</div>

						<!-- /profile area -->
					<div id="changeprofile" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">PROFILE</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="changeprofile_form" enctype="multipart/form-data">
								
									<div class="modal-body">
										   <?php 
						                    if (isset($user_image)) {
						                        ?>
						                        <img id="c_img" src="<?php echo $user_image;?>" alt="your image"  runat="server"  height="250" width="250" class="img-circle" style="border:1px solid;"/>
						                        <?php
						                    } 
						                    else{
						                      ?>
						                      <img id="blah" src="../assets/images/placeholder.jpg" alt="your image"  runat="server"  height="250" width="250" class="img-circle" style="border:1px solid;"/>
						                      <?php
						                    }
						                    ?>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Profile Image</label>
													<input type="file" class="form-control" id="profileimg" name="profileimg">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
								       <button  type="submit" class="btn btn-primary" id="update_profile">Update</button>
									   <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>

						<!-- /profile area -->
					<div id="changepass" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-slate-400">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h5 class="modal-title">PROFILE</h5>
								</div>

								<form action="#" method="POST"  class="form-horizontal" id="changepass_form" enctype="multipart/form-data">
								
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>Old Password</label>
													<input type="password" class="form-control" id="oldpassword" name="oldpassword">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>New Password</label>
													<input type="password" class="form-control" id="newpassword" name="newpassword">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-12">
													<label>New Password Confirm</label>
													<input type="password" class="form-control" id="newpasswordconfirm" name="newpasswordconfirm">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
								       <button  type="submit" class="btn btn-primary" id="update_profile">Update</button>
									   <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<script type="text/javascript">
						function readURL(input) {
        
				          if (input.files && input.files[0]) {
				            var reader = new FileReader();
				        
				            reader.onload = function(e) {
				              $('#c_img').attr('src', e.target.result);
				              $('#r_img').attr('src', e.target.result);
				              $('#l_img').attr('src', e.target.result);
				        
				        
				            }
				        
				            reader.readAsDataURL(input.files[0]);
				          }
				        }
				        
				        $("#profileimg").change(function() {
				          readURL(this);
				        });
				        
				      
					  $(document).on('submit', '#changepass_form', function(event){
					    event.preventDefault();
				          
						    var oldpassword = $('#oldpassword').val();
						    var newpassword = $('#newpassword').val();
						    var newpasswordconfirm = $('#newpasswordconfirm').val();
					            $.ajax({
					              url:"update_profile_pass.php",
					              type:'POST',
					              data:new FormData(this),
            					  cache: false,
					              contentType:false,
					              processData:false,
					              success:function(data)
					              {

					                alert(data);
                					$('#changepass').modal('hide');
                					$('#changeprofile').modal('hide');
                					
					              }
					            }); 
					    
					  });
					  $(document).on('submit', '#changeprofile_form', function(event){
					    event.preventDefault();
				          	var profileimg = '';
				          	if( document.getElementById("profileimg").files.length == 0 ){
							    console.log("no files selected");
							}
							else{
								profileimg = $('#update_profile').val();

							}
					            $.ajax({
					              url:"update_profile_img.php",
					              type:'POST',
					              data:new FormData(this),
            					  cache: false,
					              contentType:false,
					              processData:false,
					              success:function(data)
					              {

					                alert(data);
                					$('#changeprofile').modal('hide');
                					$('#changeprofile').modal('hide');

					              }
					            }); 
					    
					  });

					</script>
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
