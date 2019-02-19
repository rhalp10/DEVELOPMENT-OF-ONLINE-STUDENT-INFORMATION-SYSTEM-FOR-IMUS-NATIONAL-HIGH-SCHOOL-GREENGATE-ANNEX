
<?php 
/** 
* get the requested data_id from  ajax post url 
* "url: 'data.php?data_id = js_variable_data_id'"
*  and save the value to new php variable 
*/
require_once("classes/user.php");

$data_id = $_REQUEST['data_id'];
$data_id = explode('-', $data_id);
if (isset($data_id)) {

	if (empty($data_id)) {
		 echo "Data-ID is Required";
		?><?php
	}
	else if ($data_id[0] == "A") {
		?>
		<form action=""  method="POST" >
		  <div class="form-group">
		    <label for="fName">First Name:</label>
		    <input type="text" class="form-control" id="fName" name="fName">
		  </div>
		  <div class="form-group">
		    <label for="mName">Middle Name:</label>
		    <input type="text" class="form-control" id="mName" name="mName">
		  </div>
		  <div class="form-group">
		    <label for="lName">Last Name:</label>
		    <input type="text" class="form-control" id="lName" name="lName">
		  </div>
		  <div class="form-group">
		    <label for="email">Email address:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <button type="button" class="btn btn-default"  onclick="submitForm('Add')">Submit</button>
		</form>
		<?php
	}
	else if ($data_id[0] == "E") {
		$id = $data_id[1];
        $query = mysqli_query($conn,"SELECT * FROM `user_detail` where `user_ID` = '$id'");
        $row = mysqli_fetch_array($query);
		?>
		<form action="" name="Edit" method="POST" >
			<input type="hidden" id="id" value="<?php echo $id?>">
            <div class="form-group">
              <label for="fName">First Name:</label>
              <input type="text" class="form-control" id="fName" name="fName" value="<?php echo $row['user_fName']?>">
            </div>
            <div class="form-group">
              <label for="mName">Middle Name:</label>
              <input type="text" class="form-control" id="mName" name="mName" value="<?php echo $row['user_mName']?>">
            </div>
            <div class="form-group">
              <label for="lName">Last Name:</label>
              <input type="text" class="form-control" id="lName" name="lName" value="<?php echo $row['user_lName']?>">
            </div>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['user_Email']?>">
            </div>
		  <button type="button" class="btn btn-default"  onclick="submitForm('Edit')">Submit</button>
          </form>
		<?php
	}
	else if ($data_id[0] == "D") {
		$id = $data_id[1];
		?>
		<form action="action.php?id=<?php echo $id?>" method="POST" class="text-center">
			<input type="hidden" id="id" value="<?php echo $id?>">
		<h3>Are you sure you want to delete this record?</h3>
            <div class="btn-group">
              <a href="index.php" class="btn btn-primary">Cancel</a>
		  <button type="button" class="btn btn-danger"  onclick="submitForm('Delete')">Submit</button>
            </div>
         </form>
		<?php
	}
		else if ($data_id[0] == "L") {
		?>
	

		<?php
	}
	else if ($data_id[0] == "F") {
		?>
		<form action="index.html">
			<div class="panel panel-body login-form">
				<div class="text-center">
					<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
					<h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
				</div>

				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Your email">
					<div class="form-control-feedback">
						<i class="icon-mail5 text-muted"></i>
					</div>
				</div>

				<button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</form>
		<?php
	}
	else{
		$head = "Data Not Found";
		$content = "No Content Available";
	}

	//SQL ACTION SCRIPT
	if (isset($_POST['key'])) {
		$key = $_POST['key'];
		print_r($_POST);
		echo "<script>console.log($key)</script>";
	
	}

}
else{
	$head = "Something Wrong Happening";
	$content = '<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...Something Wrong Happening..';

}


?>
