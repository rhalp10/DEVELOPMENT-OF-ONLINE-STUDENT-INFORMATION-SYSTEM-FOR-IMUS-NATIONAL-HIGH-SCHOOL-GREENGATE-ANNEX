<?php
include('db.php');
include('function.php');
if(isset($_POST["ann_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `room_announcements`
		WHERE ann_ID = '".$_POST["ann_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$ann_Title = $row["ann_Title"];
		$ann_desc = $row["ann_desc"];
		$ann_Date = $row["ann_Date"];
		$date=date_create($ann_Date);
	
	
	}
}
?>


<h4><?php echo $ann_Title?> : <div class="pull-right"><?php echo date_format($date,"Y/m/d H:i:s");?></div></h4>
<hr>
<div class="row clearfix">
    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
        <?php echo $ann_desc?>
    </div>
</div>