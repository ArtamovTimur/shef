<?php
	session_start();

function action_add()
{	
	if(!empty($_SESSION['user']))
	{

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{

			$new_data = form_validator([
				'category' => (int)$_POST['category'],
				'title' => $_POST['title'], 
				'description' => $_POST['description'], 
				'price' => $_POST['price']
				]); 

			if($new_data)
			{
				$category = check_category($new_data['category']);
				$new_data['category'] = $category;
				;
				if(add_dish_photo($_FILES['foto']))
				{
					$new_data['author_id'] = (int)$_SESSION['user']['id'];
					$new_data['image'] = get_image_title();
					$new_data = form_filter($new_data);
					add_new_dish($new_data);
					header('Location: /');
				}
				else 
				{
					render('add', [ 'error' => 'Доавьте фото']);
				}
	
			}
			else
			{
				render('add',
				[
					'error' => 'Одно из полей не заполнено'
				]);
			}
		}
		else 
		{
			render('add', []);
		}
		
	}
	else 
	{
		$_SESSION['error']['add_dish'] = 'Войдите или зарегистрируйтесь!';
		header('Location: /');
	}
}	

	function action_index()
	{
		if(!empty($_GET['f'])){
			$search = get_category($_GET['f']);
			if(!is_null(find_dishes($search))){
				$arr = find_dishes($search);
			}else {
				$arr = [];
			}
			
			if(is_null($arr))
			{
				$arr = [];
			}
		}
		else 
		{
			$arr = get_count_dishes(20);
			if(is_null($arr))
			{
				$arr = [];
			}
		}
		
		
		render('all_dishes', $arr);
	}
	function action_likes()
	{	
		$dish_id = $_POST['id'];
		$likes_count = get_likes_count_by_id($dish_id)['likes'];
		if(!empty($_SESSION['user'])){
			if($_SESSION['block'][$dish_id] == '0'){
				$likes_count--;
				$_SESSION['block'][$dish_id] = '1';
			}else {
				$likes_count++;
				$_SESSION['block'][$dish_id] = '0';
			}
			dish_like_update($likes_count, $dish_id);
		}
		echo $likes_count;
	}

	function action_search()
	{
		if(!empty($_POST['search_words']))
		{
			$search_words = trim(htmlspecialchars($_POST['search_words']));
			$arr = search_dish($search_words);
			if(!empty($arr)){
				render('all_dishes', $arr);
			}else {
				$_SESSION['error']['search_dish'] = 'По вашему запросу ничего не найдено(';
				render('all_dishes', []);
			}
			
		}
	}

?>