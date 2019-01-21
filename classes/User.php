<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    GNU General Public License version 2 or later; see licensing/GPL LICENSE.txt
 */

// Database Configuration Linking 
require_once('dbconfig.php');

class Alert {
	public function alert($msg){
		echo "<script>alert(".$msg.");</script>";
		return true;
	}
	public function alert_error(){
		echo "<script>alert('Error Something Occured');</script>";
	}
	public function alert_error_login(){
		echo "<script>alert('Wrong Username/Password!');</script>";
	}
	public function alert_success(){
		echo "<script>alert('Successfull');</script>";
	}
	public function alert_warning(){
		echo "<script>alert('Warning');</script>";

	}
}
class USER extends  Alert
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
	// register function
	public function register($ua_username,$ua_password)
	{
		try
		{	$ul_ID = 1;
			$new_password = password_hash($ua_password, PASSWORD_DEFAULT);
			$stmt = $this->conn->prepare("INSERT INTO user_account(ul_ID,ua_username,ua_password) 
		                                               VALUES( :ul_ID,:ua_username, :ua_password)");
					
			$stmt->bindparam(":ul_ID", $ul_ID);	  
			$stmt->bindparam(":ua_username", $ua_username);
			$stmt->bindparam(":ua_password", $new_password);	
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	//log in function 
	public function doLogin($login_user,$login_password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT ua_ID, ul_ID ,ua_username, ua_password FROM user_account WHERE ua_username=:ua_username");
			$stmt->execute(array(':ua_username'=>$login_user));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($login_password, $userRow['ua_password']))
				{
					$_SESSION['ua_ID'] = $userRow['ua_ID'];
					$_SESSION['ul_ID'] = $userRow['ul_ID'];
					$_SESSION['ua_username'] = $userRow['ua_username'];
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
	
	public function is_loggedin()
	{
		if(isset($_SESSION['ua_ID']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['ua_ID']);
		return true;
	}
	public function parseUrl()
	{
		if(isset($_GET['url'])){

			$url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

			return $url;

		}

	}
	public function page_url(){
		$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	public function new_location($href){
		header("Location: $href");

	}
	public function close()
	{
		
		return mysql_close();
			
	}
	public function chkuser_level(){

		if (isset($_SESSION['ul_ID'])) {
			if ($_SESSION['ul_ID'] == 4 ) {
				header("Location: admin/index");
			}
			else{
				
			}
		}
	}


	public function sof_catch($error){
		$sof = "https://stackoverflow.com/search?q=[php]+".$error;
		echo "<script>window.open($sof,'_blank')</script>";

	}
	
}
?>