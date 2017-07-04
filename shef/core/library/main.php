<?php
	// Разбиение url адреса
	function getUrlSegment($number){
		$url = strtolower($_GET['url']);
		$segments = explode('/', $url);
		return $segments[$number];
	}
	// отрисовка вида страницы
	function render($view_name, array $data = []){
		$params = $data;
		include 'core/views/layouts/' . $view_name . '.php';
	}
	function render_admin($view_name, array $data = []){
		$params = $data;
		include 'core/views/admin/' . $view_name . '.php';
	}
	// отрисовка страницы 404
	function show404page()
	{
		echo "Страница не найдена(";
	}
	// валидация формы
	function form_validator(array $data = [])
	{
		$form_data = $data;
		foreach ($form_data as $key => $value) {
			if(empty($value) || $value == ''){
				return false;
			}
		}
		return $form_data;
	}
	// фильтрация формы
	function form_filter(array $data = [])
	{
		$form_data = $data;
		foreach($form_data as $key => $value) {
			$new_data[$key] = htmlspecialchars(trim($value));
		}
		return $new_data;
	}

	// проверка авторизации
	function is_auth()
	{
		if(isset($_SESSION['user']) && 
			!empty($_SESSION['user'])){
			return true;
		}
		return false;
	}

	function check_category($category)
	{
			switch ($category) {
				case 1: $res = 'Салаты';return $res;
				case 2: $res = 'Супы';return $res;
				case 3: $res = 'Напитки';return $res;
				case 4: $res = 'Мясное';return $res;
				case 5: $res = 'Куриное';return $res;
				case 6: $res = 'Рыбное';return $res;
				case 7: $res = 'Фруктовое';return $res;
				case 8: $res = 'Закуски';return $res;
				case 9: $res = 'Овощное';return $res;
				case 10: $res = 'Сладкое';return $res;
				case 11: $res = 'Выпечка';return $res;
				case 12: $res = 'Завтраки';return $res;
			}

	}

	function add_dish_photo()
	{
		if(isset($_FILES['foto']))
		{
					if($_FILES['foto']['error'] == 0)
					{
						$res = move_uploaded_file($_FILES['foto']['tmp_name'],
							'assets/dishes_photo/' . $_FILES['foto']['name']);
						return true;
					}
					else 
					{
						echo "Ошибка загрузки изображения";
						die();
					}
		}
		else 
		{
			return false;
		}
	}

	function get_image_title()
	{
		return $_FILES['foto']['name'];
	}
	function get_category($category)
	{
		switch ($category) {
				case 'Salads': $res = 'Салаты';return $res;
				case 'Soups': $res = 'Супы';return $res;
				case 'Beverages': $res = 'Напитки';return $res;
				case 'Meat': $res = 'Мясное';return $res;
				case 'Chicken': $res = 'Куриное';return $res;
				case 'Fish': $res = 'Рыбное';return $res;
				case 'Fruit': $res = 'Фруктовое';return $res;
				case 'Snacks': $res = 'Закуски';return $res;
				case 'Vegetable': $res = 'Овощное';return $res;
				case 'Sweet': $res = 'Сладкое';return $res;
				case 'Bakery': $res = 'Выпечка';return $res;
				case 'Breakfasts': $res = 'Завтраки';return $res;
			}
	}

?>