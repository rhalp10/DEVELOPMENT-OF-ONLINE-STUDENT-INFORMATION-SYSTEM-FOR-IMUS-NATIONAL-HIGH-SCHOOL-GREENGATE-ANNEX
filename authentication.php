<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 *  ᜍ᜔ᜑᜎ᜔ᜉ᜔ ᜇᜍ᜔ᜍᜒᜈ᜔ ᜍ᜔. cᜀᜊ᜔ᜍᜒᜍ 
 *  ᜉcᜁᜊᜓᜂᜃ᜔.cᜂᜋ᜔:ᜑ᜔ᜆ᜔ᜆ᜔ᜉ᜔ᜐ᜔://ᜏ᜔ᜏ᜔ᜏ᜔.ᜉcᜁᜊᜓᜂᜃ᜔.cᜂᜋ᜔/ᜍ᜔ᜑᜎ᜔ᜉ᜔10
 */


session_start();
if(isset($_SESSION['login_user']))
{      
     header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ("inc/main-head.php");

?>


<body class="login-container">

	<?php 
	include ("inc/main-nav.php");
	?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				<?php 
				// print_r($_SESSION);
				?>
				<!-- Content area -->
				<div class="content">
				 	<div class="tabbable panel login-form width-400">
						<div class="panel-body">
							<form action="data-login.php" method="POST"  role="form">
									<div class="text-center">
										<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
										<h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="text" class="form-control" placeholder="Username" name="username" required="required">
										<div class="form-control-feedback">
											<i class="icon-user text-muted"></i>
										</div>
									</div>

									<div class="form-group has-feedback has-feedback-left">
										<input type="password" class="form-control" placeholder="Password" name="password" required="required">
										<div class="form-control-feedback">
											<i class="icon-lock2 text-muted"></i>
										</div>
									</div>

									<!-- <div class="form-group login-options">
										<div class="row">
											<div class="col-sm-6">
												<label class="checkbox-inline">
													<div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
													Remember
												</label>
											</div>

											<div class="col-sm-6 text-right">
												<a href="#basic-tab4" data-toggle="tab" aria-expanded="false">Forgot password?</a>
											</div>
										</div>
									</div>
 -->
									<div class="form-group">
										<button type="submit" name="submit_login" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</form>
								<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>

						
					</div>
				</div>
				<!-- /content area -->
	<!-- modal area -->				
	<div id="ActionModal" class="modal fade" tabindex="-1" role="dialog" >
	<div class="modal-dialog">
		<div class="modal-content login-form width-400">
			<!-- style="border-radius:  5px 5px 0px 0px;" -->
			 <div class="modal-header" id="modal_header" >
			   <button type="button" class="close" data-dismiss="modal">&times;</button>
			   <h4 class="modal-title" id="modal-title">Modal Header</h4>
			 </div>
			 <div class="modal-body">
			   <div id="modal-loading"  style="display: none; text-align: center;">
			     <center>
			     <div class="loader"></div>
			     </center>
			   </div>
			   <div id="modal-content"></div>
			 </div>
			 <div class="modal-footer">
			   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			 </div>
		</div>
	</div>
	</div>
	<!-- /modal area -->
					<?php 
					include("inc/main-footer.php");
					?>

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

				
					 <script type="text/javascript">
					    $(document).ready(function(){
					    
					    $(document).on('click', '#action', function(e)
					    {
					      e.preventDefault();
					      // get the value of data-id of each clicked elements
					      var data_id = $(this).data('id');
					      // removing all content of selected id
					      var  action = data_id.slice(0,1);
					      var  id = data_id.slice(2);
					      console.log(data_id);


					      if (action == 'A') {
					        var mh = document.getElementById("modal_header");
					        mh.className = mh.className.replace(/\bbg-info\b/g, "");
					        mh.className = mh.className.replace(/\bbg-danger\b/g, "");
					        mh.classList.add("modal-header");
					        mh.classList.add("bg-success");
					        $('#modal-title').html('Add New Data');
					        $('#modal-loading').show();
					      }
					      else if (action == 'E'){
					        var mh = document.getElementById("modal_header");
					        mh.className = mh.className.replace(/\bbg-success\b/g, "");
					        mh.className = mh.className.replace(/\bbg-danger\b/g, "");
					        mh.classList.add("modal-header");
					        mh.classList.add("bg-info");
					        $('#modal-title').html('Edit This Data');
					        $('#modal-loading').show();
					      }
					      else if (action == 'D'){

					        var mh = document.getElementById("modal_header");
					        mh.className = mh.className.replace(/\bbg-success\b/g, "");
					        mh.className = mh.className.replace(/\bbg-info\b/g, "");
					        mh.classList.add("bg-danger");
					        $('#modal-title').html('Delete This Data');
					        $('#modal-loading').show();
					      }
					      else if (action == 'S'){
					        var x = document.getElementById("add-fName").innerHTML;
					         console.log(x);

					      }
					      // else if (action == 'L') {
					      //   var mh = document.getElementById("modal_header");
					      //   mh.className = mh.className.replace(/\bbg-info\b/g, "");
					      //   mh.className = mh.className.replace(/\bbg-danger\b/g, "");
					      //   mh.classList.add("modal-header");
					      //   mh.classList.add("bg-success");
					      //   $('#modal-title').html('Login');
					      //   $('#modal-loading').show();
					      // }
					      else if (action == 'F') {
					        // var mh = document.getElementById("modal_header");
					        // mh.className = mh.className.replace(/\bbg-info\b/g, "");
					        // mh.className = mh.className.replace(/\bbg-danger\b/g, "");
					        // mh.classList.add("modal-header");
					        // mh.classList.add("bg-success");
					        // $('#modal-title').html('Login');
					        // $('#modal-loading').show();
					      }
					      else{
					        $('#modal-title').html('Error');
					        $('#modal-loading').show();
					      }

					      $.ajax({
					        url: 'modal-data.php',
					        type: 'POST',
					        data: 'data_id='+data_id,
					        dataType: 'html'
					      })
					      .done(function(success_data_fetch){
					          $('#modal-content').html('');  
					          $('#modal-content').html(success_data_fetch);  
					          
					          	$('#modal-loading').hide();
					          
					          
					         

					      })
					      .fail(function(){
					        $('#target_div').html('<div class="panel-heading">Something went wrong</div><div class="panel-body"><i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...</div><div class="panel-footer"></div>');
					       
					      });
					    
					    });
					  });

					    function submitForm(key){
					      var id = $("#id");
					      var fName = $("#fName");
					      var mName = $("#mName");
					      var lName = $("#lName");
					      var email = $("#email");
					      console.log(fName.val());
					      if (isNotEmpty(fName) && isNotEmpty(mName) && isNotEmpty(lName) && isNotEmpty(email)){
					        $.ajax({
					          url: 'data-process.php',
					          method: 'POST',
					          dataType: 'text',
					          data: {
					            key: key,
					            id: id.val(),
					            fName: fName.val(),
					            mName: mName.val(),
					            lName: lName.val(),
					            email: email.val()
					          },
					          success: function(response){
					            alert(response);
					            console.log(response);
					          }

					        });
					      }
					    }
					    function  isNotEmpty(caller){
					      if (caller.val() == '') {
					        caller.css('border','1px solid red');
					        return false;
					      }
					      else{
					        caller.css('border','');
					        return true;

					      }

					    }

					    </script>
</body>
</html>



