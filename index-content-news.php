<?php 
	include('dbconfig.php');
	if (isset($_REQUEST['content'])) {
		$news_ID =$_REQUEST['content'];
		// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `news` where news_ID ='$news_ID' ");
			if (mysqli_num_rows($query) > 0) 
			{
				// And error has occured while executing
			   while ($rows = mysqli_fetch_assoc($query)) {
			   	$news_ID = $rows['news_ID'];
			   	$news_Title = $rows['news_Title'];	
			   	$news_Content = $rows['news_Content'];	
			   	$news_Pub	 = $rows['news_Pub'];		   	
			   	?>
					<div class="col-sm-12">
						<div class="panel panel-default">
						  <div class="panel-heading"><?php echo $news_Title?> <div><?php echo $news_Pub;?></div></div>
						  <div class="panel-body"><?php 
						  if (strlen($news_Content) > 10)
				   			echo $news_Content = substr($news_Content, 0, 400) . '...';
						  ?>
						</div>
						<div class="panel-footer" style="padding: 10px;">
							<a class="btn btn-success pull-right" href="index?page=news" >BACK</a>
						</div>
						</div>

					</div>
					<?php
			   }
				
			
			}
	}
	else{
		?>
		<div class="bg-green" style="width: auto; padding: 20px; margin-top: 25px;">
<h2>News Overview</h2>
<hr>
<p>
Learn more about Imus National High School Greengate Annex by keeping tabs on events, achievements, and special announcements of the School.
</p>
</div>
<br>
<?php 
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `news`");
			if (mysqli_num_rows($query) > 0) 
			{
				// And error has occured while executing
			   while ($rows = mysqli_fetch_assoc($query)) {
			   	$news_ID = $rows['news_ID'];
			   	$news_Title = $rows['news_Title'];	
			   	$news_Content = $rows['news_Content'];	
			   	$news_Pub	 = $rows['news_Pub'];		   	
			   	?>
					<div class="col-sm-4">
						<div class="panel panel-default">
						  <div class="panel-heading"><?php echo $news_Title?> <div><?php echo $news_Pub;?></div></div>
						  <div class="panel-body"><?php 
						  if (strlen($news_Content) > 10)
				   			echo $news_Content = substr($news_Content, 0, 400) . '...';
						  ?>
						</div>
						<div class="panel-footer" style="padding: 10px;">
							<a class="btn btn-success pull-right" href="index?page=news&content=<?php echo 	$news_ID?>">READ MORE</a></div>
						</div>

					</div>
					<?php
			   }
				
			
			}
	}
?>
