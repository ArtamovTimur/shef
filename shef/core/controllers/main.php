<?php
	session_start();
	// function action_index(){
	// 	if(is_auth()){
	// 		echo "<h1>Index page</h1>";
	// 	}
	// 	else {
	// 		echo "<h1>Hello, Guest</h1>";
	// 	}
	// 	render('index', []);
	// }	

	function action_login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{	
			$form_data = form_validator([
				'login' => $_POST['login'], 
				'password' => $_POST['password'] 
				]); 
			if(empty($form_data['login']) || empty($form_data['password'])){
				$form_data['login'] = '';
			    $form_data['password'] = '';
			}
			$form_data = form_filter($form_data);
			$form_data['password'] = md5($form_data['password'] . SECRET_KEY);
			$res = secure_login_and_password($form_data['login'],
			$form_data['password']);		
			if($res){
				$_SESSION['user'] = get_id_by_login($form_data['login']);
				unset($_SESSION['error']['add_dish']);
				header('Location: /');
			}
			else 
			{
				echo "Неверный логин или пароль!";
				die();
			}
		}
	}

	function action_registration()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$new_data = form_validator([
				'user_name' => $_POST['user_name'], 
				'user_lastname' => $_POST['user_lastname'], 
				'user_login' => $_POST['user_login'], 
				'user_password' => $_POST['user_password'], 
				'user_password_confirm' => $_POST['user_password_confirm']
				]); 

			if($new_data)
			{
				$new_data = form_filter($new_data);
				$new_data['user_password'] = md5($new_data['user_password'] . SECRET_KEY);
				if(get_user_id_by_login($new_data['user_login'])){
					echo "Логин занят";
				}
				else 
				{
					add_new_user($new_data);
					$_SESSION['user'] = get_id_by_login($new_data['user_login']);
					header('Location: /');
				}		
			}
			else
			{
				render('registration',
				[
					'error' => 'Одно из полей не заполнено'
				]);
			}
		}
		else 
		{
			render('registration', []);
		}
		
	}
	function action_logout()
	{
		unset($_SESSION['user']);
		unset($_SESSION['likes']);
		session_destroy();
		header('Location: /');
	}

	function action_aboutus()
	{

	}

	function action_developers()
	{
		render('works', []);
	}

	function action_adminka()
	{
		if(!empty($_SESSION['user']))
		{
			$role = get_user_role_by_id($_SESSION['user']['id']);
			if($role['role'] === 'admin')
			{	
				render('/admin/index');
			}
			else
			{
				echo "Вы не админ!";
			}
		}
		else
		{
			echo "Авторизурийтесь!";
		}
	}
	function action_profile()
	{
		$arr = get_count_dishes(20);
		if(is_null($arr))
		{
			$arr = [];
		}
		render('profile', $arr);
	}


	function action_test()
	{
		var_dump($_COOKIE);
	}

?>