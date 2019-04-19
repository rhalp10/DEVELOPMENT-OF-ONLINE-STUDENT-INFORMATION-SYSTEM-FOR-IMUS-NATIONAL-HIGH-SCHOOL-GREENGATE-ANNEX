<?php
include('../db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT *";
$query .= " FROM `news`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE news_Title LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY news_Pub DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{

	$news_ID = $row["news_ID"];
    $news_Title = $row["news_Title"];
    $news_Content = $row["news_Content"];
    $news_Pub = $row["news_Pub"];
    $news_Pub = strtotime($news_Pub);
    $news_Pub = date("Y-m-d h:i:sa",$news_Pub);
	$sub_array = array();
	$sub_array[] = $news_Title;
	$sub_array[] = $news_Pub;
	if (isset($_POST["admin"])) {
		$sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$news_ID.'" class="view">View</a></li><li><a href="#" id="'.$news_ID.'" class="update">Update</a></li><li><a href="#" id="'.$news_ID.'" class="delete">Delete</a></li></ul></div>';
	}
	else{
		$sub_array[] = '<a href="news?news_ID=<?php echo $news_ID?>" class="btn btn-primary btn-sm text-white">Read Me</a></p>';
	}
	
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);

?>



        
