<?php
	function action_index()
	{
		if(!empty($_SESSION['user']))
		{
			$role = get_user_role_by_id($_SESSION['user']['id']);
			if($role['role'] === 'admin')
			{	
				render_admin('index');
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


	function action_dishes()
	{
		render_admin('dishes');
	}
	function action_deletedish()
	{
		if(delete_dish_by_id($_GET['id'])){
			header('Location: /adminka/dishes');
		}

	}

?>