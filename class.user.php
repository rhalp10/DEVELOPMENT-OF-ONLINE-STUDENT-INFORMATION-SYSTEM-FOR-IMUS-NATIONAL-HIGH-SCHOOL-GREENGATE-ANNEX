<?php
require_once('dbconfig.php');

class USER
{	

	private $conn;
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;

    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	//log in function 
	public function doLogin($login_user,$login_password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT user_ID, lvl_ID ,user_Name, user_Pass,user_Img FROM user_account WHERE user_Name=:user_Name");
			$stmt->execute(array(':user_Name'=>$login_user));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($login_password, $userRow['user_Pass']))
				{
					$_SESSION['lvl_ID'] = $userRow['lvl_ID'];
					$_SESSION['user_ID'] = $userRow['user_ID'];
					$_SESSION['user_Name'] = $userRow['user_Name'];
					if (!empty($userRow['user_Img'])) {
					 $s_img = 'data:image/jpeg;base64,'.base64_encode($userRow['user_Img']);
					}
					else{
					  $s_img = "../assets/img/users/default.jpg";
					}
					 $_SESSION['user_Img'] = $s_img;
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	// register function
	public function register($user_Name,$user_Pass)
	{
		try
		{	$user_ID = 1;
			$new_password = password_hash($ua_password, PASSWORD_DEFAULT);
			$stmt = $this->conn->prepare("INSERT INTO user_account(user_ID,user_Name,user_Pass) 
		                                               VALUES( :user_ID,:user_Name, :user_Pass)");
					
			$stmt->bindparam(":user_ID", $user_ID);	  
			$stmt->bindparam(":user_Name", $user_Name);
			$stmt->bindparam(":user_Pass", $new_password);	
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_ID']))
		{
			return true;
		}
	}
	public function check_accesslevel($page_level){

		if (isset($_SESSION['lvl_ID'])) {

			if ($_SESSION['lvl_ID'] !=  $page_level) {
			    header('Location: ../error');
			}
		}
	}
	public function redirect_dashboard(){

		if (isset($_SESSION['lvl_ID'])) {
			header("Location: dashboard");
			
		}

	}


	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_ID']);
		return true;
	}
	public function parseUrl()
	{
		if(isset($_GET['url'])){

			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

			return $url;

		}

	}
	public function getUsername(){
		echo $_SESSION['user_Name'];
	}
	public function getUserPic(){
		echo $_SESSION['user_Img'] ;
	}
	public function page_url(){
		$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}


	public function close()
	{
		
		return mysql_close();
			
	}
	//ACCOUNT PAGE
	public function user_level_option()
	{
		$query ="SELECT * FROM `user_level`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["lvl_ID"].'">'.$row["lvl_Name"].'</option>';
		}
		
	}
	public function ref_status()
	{
		$query ="SELECT * FROM `ref_status`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["status_ID"].'">'.$row["status_Name"].'</option>';
		}
		
	}
	public function ref_year_level()
	{
		$query ="SELECT * FROM `ref_year_level`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["yl_ID"].'">'.$row["yl_Name"].'</option>';
		}
		
	}
		public function ref_position()
	{
		$query ="SELECT * FROM `ref_position`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["pos_ID"].'">'.$row["pos_Name"].'</option>';
		}
		
	}
		public function ref_section()
	{
		$query ="SELECT * FROM `ref_section`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["section_ID"].'">'.$row["section_Name"].'</option>';
		}
		
	}
		public function ref_semester()
	{
		$query ="SELECT *,CONCAT(YEAR(sem_start),' - ',YEAR(sem_end)) sem_year FROM `ref_semester`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			$stat_ID = $row["stat_ID"];
			if($stat_ID == "1")
			{
				$stat = " (Active)";
			}
			else{
				$stat = " (Deactivate)";
			}
			echo '<option value="'.$row["sem_ID"].'">'.$row["sem_year"].$stat.'</option>';
		}
		
	}
		public function ref_subject()
	{
		$query ="SELECT * FROM `ref_subject`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["subject_ID"].'">'.$row["subject_Title"].'</option>';
		}
		
	}
	

	public function ref_sex()
	{
		$query ="SELECT * FROM `ref_sex`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["sex_ID"].'">'.$row["sex_Name"].'</option>';
		}
		
	}
	public function ref_test_type()
	{
		$query ="SELECT * FROM `ref_test_type`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["tstt_ID"].'">'.$row["tstt_Name"].'</option>';
		}
	}
	public function user_suffix_option()
	{
		$query ="SELECT * FROM `ref_suffixname`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["suffix_ID"].'">'.$row["suffix"].'</option>';
		}
		
	}
	public function get_suffix($suffix_ID)
	{
		$query ="SELECT * FROM `ref_suffixname` WHERE suffix_ID = $suffix_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			if ($row["suffix"] == "N/A")
			{
				$suffix = "";
			}
			else
			{
				$suffix =  $row["suffix"];
			}
		}
		
	}
	public function user_sex_option()
	{
		$query ="SELECT * FROM `ref_sex`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["sex_ID"].'">'.$row["sex_Name"].'</option>';
		}
		
	}
	
	public function user_marital_option()
	{
		$query ="SELECT * FROM `ref_marital`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["marital_ID"].'">'.$row["marital_Name"].'</option>';
		}
		
	}

	//SCHOOL YEAR PAGE
	public function schoolyear_status_option()
	{
		$query ="SELECT * FROM `status`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach($result as $row)
		{
			echo '<option value="'.$row["status_ID"].'">'.$row["status_Name"].'</option>';
		}
		
	}
	public function profile_email()
	{
		$user_type = "";
		$user_type_acro = "";
		if ($_SESSION['lvl_ID'] == "1")
		{
			$user_type = "student";
			$user_type_acro = "rsd";
		}
		if ($_SESSION['lvl_ID'] == "2")
		{
			$user_type = "instructor";
			$user_type_acro = "rid";
		}
		if ($_SESSION['lvl_ID'] == "3")
		{
			$user_type = "admin";
			$user_type_acro = "rad";
		}
		$query ="SELECT ".$user_type_acro."_Email FROM `record_".$user_type."_details` WHERE user_ID = ".$_SESSION['user_ID'];
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
	
		if($stmt->rowCount() == 1)
		{
			foreach($result as $row)
			{
				echo $row[$user_type_acro."_Email"];
			}
		}
		else{
			echo "Empty";
		}
	}
	public function profile_address()
	{
		$user_type = "";
		$user_type_acro = "";
		if ($_SESSION['lvl_ID'] == "1")
		{
			$user_type = "student";
			$user_type_acro = "rsd";
		}
		if ($_SESSION['lvl_ID'] == "2")
		{
			$user_type = "instructor";
			$user_type_acro = "rid";
		}
		if ($_SESSION['lvl_ID'] == "3")
		{
			$user_type = "admin";
			$user_type_acro = "rad";
		}
		$query ="SELECT ".$user_type_acro."_Address FROM `record_".$user_type."_details` WHERE user_ID = ".$_SESSION['user_ID'];
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($stmt->rowCount() == 1)
		{
			foreach($result as $row)
			{
				echo $row[$user_type_acro."_Address"];
			}
		}
		else{
			echo "Empty";
		}	
	}
	public function profile_name()
	{
		$user_type = "";
		$user_type_acro = "";
		if ($_SESSION['lvl_ID'] == "1")
		{
			$user_type = "student";
			$user_type_acro = "rsd";
		}
		if ($_SESSION['lvl_ID'] == "2")
		{
			$user_type = "instructor";
			$user_type_acro = "rid";
		}
		if ($_SESSION['lvl_ID'] == "3")
		{
			$user_type = "admin";
			$user_type_acro = "rad";
		}
		$query ="SELECT ".$user_type_acro."_FName,".$user_type_acro."_MName,".$user_type_acro."_LName, suffix_ID FROM `record_".$user_type."_details` WHERE user_ID = ".$_SESSION['user_ID'];
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($stmt->rowCount() == 1)
		{
			foreach($result as $row)
			{
				if($row[$user_type_acro."_MName"] ==" " || 	$row[$user_type_acro."_MName"] == NULL || empty($row[$user_type_acro."_MName"]) )
				{
					$mname = " ";
				}
				else
				{
					$mname = $row[$user_type_acro."_MName"].'. ';
				}
				$full_name = "";
				$full_name .= $row[$user_type_acro."_LName"].", ";
				$full_name .= $row[$user_type_acro."_FName"]." ";
				$full_name .= $mname;
				$full_name .= $this->get_suffix($row["suffix_ID"]);

			}
				echo $full_name;
		}
		else{
			echo "Empty";
		}	
	}
	public function profile_school_id()
	{
		$user_type = "";
		$user_type_acro = "";
		if ($_SESSION['lvl_ID'] == "1")
		{
			$user_type = "student";
			$id_type = "rsd_StudNum";
		}
		if ($_SESSION['lvl_ID'] == "2")
		{
			$user_type = "instructor";
			$id_type = "rid_EmpID";
		}
		if ($_SESSION['lvl_ID'] == "3")
		{
			$user_type = "admin";
			$id_type = "rad_EmpID";
		}
		$query ="SELECT ".$id_type." FROM `record_".$user_type."_details` WHERE user_ID = ".$_SESSION['user_ID'];
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($stmt->rowCount() == 1)
		{
			foreach($result as $row)
			{
				echo $row[$id_type];
			}
		}
		else{
			echo "Empty";
		}	
	}
		public function profile_sex()
	{
		$user_type = "";
		$user_type_acro = "";
		if ($_SESSION['lvl_ID'] == "1")
		{
			$user_type = "student";
		}
		if ($_SESSION['lvl_ID'] == "2")
		{
			$user_type = "instructor";
		}
		if ($_SESSION['lvl_ID'] == "3")
		{
			$user_type = "admin";
		}
		$query ="SELECT sex_Name FROM `record_".$user_type."_details`  rid
				LEFT JOIN ref_sex sex ON sex.sex_ID = rid.sex_ID
				WHERE rid.user_ID = ".$_SESSION['user_ID'];
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		if($stmt->rowCount() == 1)
		{
			foreach($result as $row)
			{
				echo $row["sex_Name"];
			}
		}
		else{
			echo "Empty";
		}	
	}
	public function  student_level()
	{
		if ($_SESSION['lvl_ID'] == "1")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function  instructor_level()
	{
		if ($_SESSION['lvl_ID'] == "2")
		{
			return true;
		}
		else
		{
			return false;
		}	
	}
	public function  admin_level()
	{
		if ($_SESSION['lvl_ID'] == "3")
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		
	public function news_sample(){
		try{
			$query = "SELECT * FROM `news` ORDER BY `news`.`news_Pub` DESC LIMIT 10";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			
			foreach($result as $row)
			{
			   	$news_ID = $row['news_ID'];
			   	$news_Img = $row['news_Img'];
			   	if (!empty($news_Img)) {
				 $n_img = 'data:image/jpeg;base64,'.base64_encode($news_Img);
				 $niz = 1;
				}
				else{
				  $n_img = "background-color:#4caf50; ";
				  $niz = 0;
				}
			   	$news_Title = $row['news_Title'];

			   	$ntitle_c = strlen($news_Title );
			   	if($ntitle_c > 25){

            	    $news_Title = substr($news_Title,0,50);
            		$news_Title .= "..";
            	}

			   	// $news_Title =wordwrap($news_Title,55,"<br>\n");	
			  
			   	$news_Content = $row['news_Content'];	
            	$ncontent_c = strlen($news_Content );
            	$news_Content = substr($news_Content,0,100);
            	if($ncontent_c > 100){
            		$ddot = "..";
            	}
            	else{
            		$ddot = "";
            	}
			    $news_Pub = strtotime($row["news_Pub"]);
				$news_Pub = date("d M Y ",$news_Pub);	

			   	?>
					
				 <div class="item">
                 <div class="card" style="min-height:300px;">
                    <div class="card-header" style="padding:0px;">
                    	 <!-- <img class="" src="" style="min-height:150px; padding:0px; background-size: cover; background-size: cover;"> -->
                  <!--   	 <div style="min-height:180px;max-height:180px; background-image: url('<?php echo $n_img?>');
    						background-size: cover;" ></div> -->
    						   <img id="znews_img" data-src="holder.js/100px250" class="img-fluid" alt="100%x250" style="height: 250px; width: 100%; display: block;" src="<?php echo $n_img?>" data-holder-rendered="true" alt="News Image"   >
                    </div>

                    <div class="card-body row">
                      <div class="col-sm-2">
                       
                        <div style="background-color:#4caf50; color:white; text-align:center; border-radius:5px;">
                         <?php echo $news_Pub?>
                        </div>
                      </div>
                      <div class="col-sm-8">
                      	<?php 
                      	if($ntitle_c >25){
                      		?>
                      		<h5 style="min-height:50px;" onclick='window.location.assign("index?page=news&content=<?php echo $news_ID?>")'><?php echo $news_Title?></h5>
                      		<?php
                      	}
                      	else{
                      		?>
                      		<h3 style="min-height:50px;" onclick='window.location.assign("index?page=news&content=<?php echo $news_ID?>")'><?php echo $news_Title?></h3>
                      		<?php
                      	}
                      	?>
                        
                        <!-- <small>Administrator</small> -->
                        <p style="min-height:70px;max-height:70px"><?php echo $news_Content.$ddot?></p>
                      </div>
                     
                    </div>
                    
                 </div>
            </div>
					<?php
			   }

		}
		catch(PDOException $e)
		{
			
			?>
					
			<div class="item">
                 <div class="card" style="min-height:200px;">
                    <div class="card-header" style="background-color:#4caf50; color:white; text-align:center; min-height:150px;"></div>
                    <div class="card-body row">
                      <div class="col-sm-2">
                       
                        <div style="background-color:#4caf50; color:white; text-align:center; border-radius:5px;">
                        	Empty
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <h3>Empty</h3>
                        <!-- <small>Administrator</small> -->
                        <p>Empty</p>
                      </div>
                     
                    </div>
                    
                 </div>
            </div>
					<?php
		}

	}



	public function news_index($id){
		try{
			$query = "SELECT * FROM `news` WHERE news_ID = ".$id."";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$result = $stmt->fetchAll();
			
			foreach($result as $row)
			{
			   	$news_ID = $row['news_ID'];
			   	$news_Title = $row['news_Title'];	
			   	$news_Content = $row['news_Content'];	
			    $news_Pub = strtotime($row["news_Pub"]);
				$news_Pub = date("Y-m-d h:i:sa",$news_Pub);		   	
			   	?>
					
					<div class="container">
	             
			           <br>
			            <div class="row" >
			              <div class="col-sm-12" style="padding-bottom:10px;">
			               <div class="card">
			                  <div class="card-header gradient-green"><?php echo $news_Title?> <div class="pull-right"><?php echo $news_Pub;?></div></div>
			                  <div class="card-body">
			              <p>
			                 <?php echo $news_Content;?>
			              </p></div>
			                  <div class="card-footer"><a class="btn btn-success float-right" href="index?page=news">BACK</a></div>
			               </div>
			              </div>
			          
			           </div>
			           <br>
			        </div>
			    </div>
					<?php
			   }

		}
		catch(PDOException $e)
		{
			
			?>
					
					<div class="container">
	             
			           <br>
			            <div class="row" >
			              <div class="col-sm-12" style="padding-bottom:10px;">
			               <div class="card">
			                  <div class="card-header gradient-green">ERROR</div>
			                  <div class="card-body">
			              <p>
			                 <?php echo $e->getMessage();?>
			              </p></div>
			                  <div class="card-footer"><a class="btn btn-success float-right" href="index?page=news">BACK</a></div>
			               </div>
			              </div>
			          
			           </div>
			           <br>
			        </div>
			    </div>
					<?php
		}
			
		
		
	}
	public function get_active_sem(){
		
		$query ="SELECT *,CONCAT(YEAR(sem_start),' - ',YEAR(sem_end)) sem_year FROM `ref_semester` WHERE stat_ID = 1 LIMIT 1";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;
	}
	public function get_active_sem_subject($active_sem_ID){
		

		$query ="
		SELECT DISTINCT
		acs.subject_ID,
		rs.subject_Title,
		acs.sem_ID
		FROM `academic_staff` `acs`
		LEFT JOIN ref_subject rs ON rs.subject_ID = acs.subject_ID
		WHERE acs.sem_ID = $active_sem_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;

	}
	public function get_active_sem_subject_faculty($active_subject_ID)
	{
		
		$query ="
		SELECT 
		acs.acs_ID,
		rid.rid_Img,
		rid.rid_FName,
		rid.rid_MName,
		rid.rid_LName,
		rsf.suffix,
		CONCAT(rid.rid_FName,' ',
		rid.rid_MName,' ',
		rid.rid_LName,' ',
		rsf.suffix) fullname,
		GROUP_CONCAT(rp.pos_Name) pos_Name,
		rs.subject_Title,
		rp.pos_ID
		FROM `academic_staff` `acs`
		LEFT JOIN record_instructor_details `rid` ON rid.rid_ID = acs.rid_ID
		LEFT JOIN ref_position rp ON rp.pos_ID = acs.pos_ID
		LEFT JOIN ref_subject rs ON rs.subject_ID = acs.subject_ID
		LEFT JOIN ref_semester rsem ON rsem.sem_ID = acs.sem_ID
		LEFT JOIN ref_suffixname rsf ON rsf.suffix_ID = rid.suffix_ID
		where rs.subject_ID = $active_subject_ID
		GROUP BY fullname
		ORDER BY pos_ID ASC";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;

	}
	public function get_sem_advisory_section()
	{
		
		$query ="
		SELECT 
		rid.user_ID,
		rm.rid_ID,
		rm.sem_ID,
		CONCAT(YEAR(sem.sem_start),' - ',YEAR(sem.sem_end)) semyear 
		FROM `room` rm
		LEFT JOIN ref_semester sem ON sem.sem_ID = rm.sem_ID
		LEFT JOIN record_instructor_details rid  ON rid.rid_ID  = rm.rid_ID
		where rid.user_ID = ".$_SESSION['user_ID']." 
		GROUP by rm.sem_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;

	}
	public function get_advisory_section($rid_ID,$sem_ID)
	{
		
		$query ="SELECT 
		rm.room_ID,
		sec.section_Name
		FROM `room` rm
		LEFT JOIN ref_section sec ON sec.section_ID = rm.section_ID
		WHERE rm.rid_ID = $rid_ID and rm.sem_ID = $sem_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		return $result;

	}
	
	public function get_sem_handle(){

		$query = "SELECT 
		        acs.sem_ID,
		        CONCAT(YEAR(sem.sem_start),' - ',YEAR(sem.sem_end)) semyear
		        FROM `room_subject` rsub 
		        LEFT JOIN academic_staff acs ON acs.acs_ID = rsub.acs_ID
		        LEFT JOIN ref_semester sem ON sem.sem_ID = acs.sem_ID
		        LEFT JOIN record_instructor_details rid ON rid.rid_ID = acs.rid_ID
		        WHERE rid.user_ID = ".$_SESSION['user_ID']."
		        GROUP BY acs.sem_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
		
	}
	public function get_sem_handle_section($sem){


		$query = "SELECT 
		rsub.room_ID,
		sub.subject_Title,
		sec.section_Name,
        rsub.rsub_ID
		FROM `room_subject` rsub 
		LEFT JOIN academic_staff acs ON acs.acs_ID = rsub.acs_ID
		LEFT JOIN ref_semester sem ON sem.sem_ID = acs.sem_ID
		LEFT JOIN room rm ON rm.room_ID = rsub.room_ID
		LEFT JOIN ref_section sec ON sec.section_ID = rm.section_ID
		LEFT JOIN record_instructor_details rid ON rid.rid_ID = acs.rid_ID
		LEFT JOIN ref_subject sub ON sub.subject_ID = acs.subject_ID
		WHERE rid.user_ID = ".$_SESSION['user_ID']." AND acs.sem_ID = '$sem'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
		
	}

	public function get_attendance_room($room_ID){
		try{


		$query = "SELECT 
				rm.room_ID,
				rid.rid_FName,
				rid.rid_MName,
				rid.rid_LName,
				rsn.suffix,
				sec.section_Name ,
		
				CONCAT(YEAR(sem.sem_start),' - ',YEAR(sem.sem_end)) semyear ,
				YEAR(sem.sem_start) sem_start,
				YEAR(sem.sem_end) sem_end,
				stat.status_Name FROM `room` `rm`
				LEFT JOIN `ref_section` `sec` ON `sec`.`section_ID` = `rm`.`section_ID`
				LEFT JOIN `record_instructor_details` `rid` ON `rid`.`rid_ID` = `rm`.`rid_ID`
				LEFT JOIN `ref_suffixname` `rsn` ON `rsn`.`suffix_ID` = `rid`.`suffix_ID`
				LEFT JOIN `ref_semester` `sem` ON sem.sem_ID = `rm`.`sem_ID`
				LEFT JOIN `ref_status` `stat` ON `stat`.`status_ID` = `rm`.`status_ID`
				WHERE rm.room_ID = $room_ID";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}


		public function test_json()
	{
		$query ="SELECT * FROM `ref_status`";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		$output = array();
		$count = count($result);
		$i =1;
		foreach($result as $row)
		{	
			if ($i < $count){
				$x = ',';
			}
			else{
				$x = ' ';
			}
			$output['y'] =  $row["status_ID"];
			$output['label'] = $row["status_Name"];

			echo json_encode($output).$x;
			$i++;
		}

		
	}

	



	
}