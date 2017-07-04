<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/assets/css/adminka.css">
		
</head>
<body>

	<h1 class="admin">Hello, <?= get_login_by_id($_SESSION['user']['id'])['login']; ?></h1>
	<nav class="menu">
		<ul>
			<li><a href="/adminka/dishes">Все товары</a></li>
			<li><a href="#">Все пользователи</a></li>
			<li><a href="#">Мониторинг</a></li>
			<li><a href="#">Нарушения</a></li>
			<li><a href="#">Поддержка</a></li>
			<li><a href="/">На главную</a></li>
		</ul>
	</nav>
	<?php 
	$dishes = get_all_dishes();
	$length = count($dishes);
	for($i = 0; $i < $length/$length;$i++):
	?>
	<?php foreach($dishes as $key => $arr):?>
	<div class="dish">
		<div class="idishnik"><?= $arr['id'];?></div>
		<div class="image"><img src='/assets/dishes_photo/<?= $arr['image'];?>'></div>
		<div class="dish-wrap">
			<div class="author">Выложил: <?= get_login_by_id($arr['author_id'])['login'];?></div>
			<div class="title"><?= $arr['title'];?></div>
			
			<div class="description"><?= $arr['description'];?></div>
			<div class="category">Категория: <?= $arr['category'];?></div>
			<div class="price"><?= $arr['price'];?></div>
			<div class="rating"><?= $arr['rating'];?></div>
			<a href="/adminka/deletedish?id=<?= $arr['id'];?>">Удалить нахуй</a>
		</div>
	</div>
	<?php endforeach;?>
	<?php endfor;?>
</body>
</html>