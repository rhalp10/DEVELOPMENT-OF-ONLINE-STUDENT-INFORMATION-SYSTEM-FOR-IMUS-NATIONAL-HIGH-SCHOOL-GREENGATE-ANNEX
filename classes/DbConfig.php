<?php
/**
 * @package    DEVELOPMENT IF ONLINE STUDENT INFORMATION SYSTEM FOR IMUS NATIONAL HIGH SCHOOL - GREENGATE ANNEX
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    GNU General Public License version 2 or later; see licensing/GPL LICENSE.txt
 */

// Data Base Config file
if($_SERVER['SERVER_ADDR']=="8.8.8.8"){
    // Production config DB
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','password');
    define('DB_NAME','database');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}
else{
    // Developer server
    define('HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','greengate_annex');
    define('DB_DRIVER','mysql');
    define('CHARSET','utf8');
}
class Database
{   
    private $driver;
    private $host;
    private $user;
    private $pass;
    private $database;
    private $charset;
    public $conn;

    public function __construct() {
        //Vacia variabes constantes
        $this->driver   = DB_DRIVER;
        $this->host     = HOST;
        $this->user     = DB_USER;
        $this->pass     = DB_PASSWORD;
        $this->database = DB_NAME;
        $this->charset  = CHARSET;
    }  
    public function dbConnection()
	{
     
	    $this->conn = null;    
        try {
            $db = new PDO($this->driver.":host=".$this->host.";dbname=".$this->database.";charset=".$this->charset, $this->user, $this->pass);
            $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $db->setAttribute(PDO::ATTR_PERSISTENT, true);
            return ($db);            
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
            print "Error: ".$exc->getMessage();
        }
         
        return $this->conn;
    }
}
?>
