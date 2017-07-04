<?php
	
	function db_init()
	{
		$db_config = require 'configs/main.php';
		$dbh = mysqli_connect($db_config['host'], $db_config['user'], 
		$db_config['password'], $db_config['db_name']);
		if(!$dbh){
			die('Database connect error ' . mysqli_error());
		}
		return $dbh;
	}

	function db_query($query)
	{		
		$dbh = db_init();
		$res = mysqli_query($dbh, $query);
		if(!$res){
			die('Ошибка в зазпросе!' . mysqli_error($dbh));
		}
		mysqli_close($dbh);
		return $res;
	}
	
	function insert_updata_delete($sql)
	{
		$res = db_query($sql);
		if(!$res){
			die(mysqli_error($link));
		}
		return $res;
	}

	function get_all_from_table($table)
	{
		$dbh = db_init();
		$sql = "SELECT * FROM $table";
		$res = mysqli_query($dbh, $sql);
		while($arr = mysqli_fetch_assoc($res)) {
			$new_arr[] = $arr;
		}
		return $new_arr;
	}

?>