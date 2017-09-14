<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-243-255-57.compute-1.amazonaws.com");
define("DB_USER", "dgugoawgtwemle");
define("DB_PASS", "5994a70a765304f61016c686267cb3abf82052945eb6269e8fa7896ac30b3867");
define("DB_NAME", "d2od3dbfrmf7pe");

//define("DB_HOST", "localhost");
//define("DB_USER", "postgres");
//define("DB_PASS", "postgres");
//define("DB_NAME", "prueba1");



class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
