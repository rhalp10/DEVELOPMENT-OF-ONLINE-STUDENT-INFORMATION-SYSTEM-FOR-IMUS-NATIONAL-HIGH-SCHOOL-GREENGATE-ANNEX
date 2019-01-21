<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    GNU General Public License version 2 or later; see licensing/GPL LICENSE.txt
 */
include_once 'DbConfig.php';

class Crud extends Database
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->conn->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	public function execute($query) 
	{
		$result = $this->conn->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->conn->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		return $this->conn->real_escape_string($value);
	}
}
?>
