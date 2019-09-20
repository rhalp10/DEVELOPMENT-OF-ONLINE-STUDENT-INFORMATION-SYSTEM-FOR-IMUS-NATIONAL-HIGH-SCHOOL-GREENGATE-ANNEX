<?php
require_once('../class.function.php');
$attendance = new DTFunction(); 
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "submit_attendance")
	{	
		try
		{
			$room_ID = $_POST["room_ID"];
			$this_day = $_POST["this_day"];
			$res_ID = $_POST["res_ID"];
			$attnd = $_POST["attendance"];
			
			$sz =  sizeof($attnd);

			for ($i =0; $i<$sz; $i++){
				$stud_ID =  $res_ID[$i];
				$attnd_stat = $attnd[$i];
				
				$result = $attendance->insert_attendance($room_ID,$stud_ID,"$this_day 00:00:00",$attnd_stat);
			}

			if(!empty($result))
			{
				echo 'Successfully Added';
			}

		}
		catch (PDOException $e)
		{
		    echo "There is some problem in connection: " . $e->getMessage();
		}
		
	}
	if($_POST["operation"] == "update_attendance")
	{	
	}

}
?>