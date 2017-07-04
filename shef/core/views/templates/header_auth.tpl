<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>shef.kz</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/new.css">
	<link rel="stylesheet" href="/assets/css/register.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/script.js"></script>
	<link rel="icon" href="/assets/images/logo/logo-header.png">
	</head>

	<body>
	<!-- Open Header -->
		<nav class="navbar navbar-default header navbar-fixed-top">
			<div class="container-fluid">
    <!-- Mobile version -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/"><img src="/assets/images/logo/logo.png" style="margin-top: -15px;"></a>
			</div>
    <!-- Navbar-left -->
			<div class="collapse navbar-collapse ccc" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-left">
				<li><a href="/main/developers">Как это работает?</a></li>
				<li class="dropdown">
			  </ul>
	<!-- NAVBAR-Center -->
	<!-- NAVBAR-Right  -->
			  <ul class="nav navbar-nav navbar-right">
				<li class="add-ad"><a href="/dishes/add"><i>Подать объявление</i></a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Профиль	<span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="page.html"><i class="glyphicon glyphicon-home"></i>Моя страница</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#"><i class="glyphicon glyphicon-envelope"></i>	Сообщения</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-heart"></i>	Избранные</a></li>
					<li><a href="#"><i class="glyphicon glyphicon-cog"></i>	Настройки</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="/main/logout"><i class="glyphicon glyphicon-log-out"></i>	Выйти</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		   <div class="container">
					       <div class="row">
					           <div class="form">
					                <div class="form_center">
					                     <form action="/dishes/search" method="post">
					                        <input type="text" placeholder="Введите название блюда" name='search_words'>
					                         <button type="submit">Поиск</button>
					                    </form>
					                </div>
					               
					           </div>
					       </div>
	  				 </div>
</nav>
<div style="clear:both; padding: 35px;"></div>
	<!-- Close Header -->
	<!-- Open   Main  -->
