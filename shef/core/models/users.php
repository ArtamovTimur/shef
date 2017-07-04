<?php
	require_once 'db.php';

	function get_all_users()
	{
		$res = get_all_from_table('users');
		return $res;
	}

	function add_new_user(array $data = [])
	{
		$this_data = $data;
		if(!empty($this_data)){
			$sql = "INSERT INTO `users` (`name`, `lastname`, `login`, `password`) VALUES (
			 '{$this_data['user_name']}', 
			 '{$this_data['user_lastname']}',
			 '{$this_data['user_login']}',
			 '{$this_data['user_password']}')";
		}
		else 
		{ 
			return false; 
		}
		$link = db_query($sql);
		return $link;
	}

	function get_user_id_by_login($login)
	{
		$sql = "SELECT id FROM `users` WHERE login='{$login}' LIMIT 1";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		$res = mysqli_num_rows($link);
		return $res;
	}

	function secure_login_and_password($login, $password)
	{
		$sql = "SELECT id FROM `users` WHERE login='{$login}' and password='{$password}'";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		$r = mysqli_fetch_assoc($link);
		return $r;
	}

	function get_id_by_login($login)
	{
		$sql = "SELECT id FROM `users` WHERE login='{$login}'";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		$r = mysqli_fetch_assoc($link);
		return $r;
	}
	function get_login_by_id($id)
	{
		$sql = "SELECT login FROM `users` WHERE id={$id}";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		$r = mysqli_fetch_assoc($link);
		return $r;
	}

	function get_user_role_by_id($id)
	{
		$sql = "SELECT role FROM `users` WHERE id={$id}";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		$r = mysqli_fetch_assoc($link);
		return $r;
	}
	
?>