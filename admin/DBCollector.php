<?php 
	include_once('Collector.php');
	include_once('db.php');
	class DBCollector extends Collector
	{

		function updateDB(){
			$rows = self::$db->getRows("UPDATE ");
		}

		function deleteDB(){

		}

		function createDB(){
			
		}
	}
 ?>