<?php
	session_start();
	require_once 'core/library/main.php';
	require_once 'core/models/db.php';
	require_once 'core/models/users.php';
	require_once 'core/models/dishes.php';

	$controller = getUrlSegment(0);
	$action = getUrlSegment(1);

	if(!empty($controller)){
		$controller = getUrlSegment(0);
	}else {
		$controller = 'dishes';
	}

	if(!empty($action)){
		$action = 'action_' . getUrlSegment(1);
	}else {
		$action = 'action_index';
	}

	if(file_exists('core/controllers/' . $controller . '.php')){
		require_once 'core/controllers/' . $controller . '.php';
		if(function_exists($action)){
			$action();
		}else {
			show404page();
		}
	}else {
		show404page();
	}
	


	
?>