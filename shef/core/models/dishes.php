<?php
	require_once 'db.php';

	function add_new_dish(array $data = [])
	{
		$this_data = $data;
		if(!empty($this_data)){
			$sql = "INSERT INTO `dishes` (`author_id`, `image`, `title`, `description`, `price`, `category`) VALUES (
			 {$this_data['author_id']}, 
			 '{$this_data['image']}',
			 '{$this_data['title']}',
			 '{$this_data['description']}',
			 '{$this_data['price']}',
			 '{$this_data['category']}')";
		}
		else 
		{ 
			return false; 
		}
		$link = db_query($sql);
		return $link;
	}

	function get_all_dishes()
	{
		$res = get_all_from_table('dishes');
		return $res;
	}

	function get_count_dishes($num)
	{
		$sql = "SELECT id, author_id, image, title, 
		description, price, rating, pubdate, category, likes FROM `dishes` LIMIT $num";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}

		while($res = mysqli_fetch_assoc($link)){
			$arr[] = $res;
		}
		return $arr;
	}
	
	function find_dishes($search)
	{
		
		$sql = "SELECT id, author_id, image, title, 
		description, price, rating, pubdate, category, likes FROM `dishes` WHERE `category` LIKE '{$search}'";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}

		while($res = mysqli_fetch_assoc($link)){
			$arr[] = $res;
		}
		return $arr;
	}

	function delete_dish_by_id($id)
	{
		$sql = "DELETE FROM `dishes` WHERE id=$id";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		return true;
	}

	function get_likes_count_by_id($id)
	{
		$sql = "SELECT likes FROM `dishes` WHERE id=$id";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}

		$res = mysqli_fetch_assoc($link);
		return $res;
	}

	function dish_like_update($likes_count, $dish_id)
	{
		$sql = "UPDATE dishes SET likes=$likes_count WHERE id=$dish_id";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
	}
	function search_dish($words)
	{
		$words = strtolower($words);
		$sql = "SELECT * FROM dishes WHERE title LIKE '%{$words}%'";
		$link = db_query($sql);
		if(!$link){
			die('Error ' . mysqli_error());
		}
		while($res = mysqli_fetch_assoc($link)){
			$arr[] = $res;
		}
		return $arr;
	}
?>