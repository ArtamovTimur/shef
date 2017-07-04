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
		<link rel="stylesheet" href="/assets/css/index.css">
		<link rel="stylesheet" href="/assets/css/settings.css">


		<link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		
		<script src="/assets/js/validate.js">
			
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="icon" href="/assets/images/logo/logo-header.png">
		
	 
	</head>

	<body>

	
		     		<nav class="navbar navbar-default" >
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand logo" href="/"><img src="/assets/images/logo/logo.png"  style="margin-top: -15px"></a>
					    </div>
					    <div class="collapse navbar-collapse ccc" id="myNavbar">
					      <ul class="nav navbar-nav">
					        <li><a href="/main/developers">Как это работает?</a></li>
					      </ul>
					      <ul class="nav navbar-nav navbar-right">
						  
						  	<li class="add-ad"><a href="/dishes/add"><i>Подать объявление</i></a></li>
					        <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Войти</a></li>
								<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal_dialog">
									<div class="loginmodal_container">
										<h1 style="font-family: consolas;">Вход на сайт</h1><br>

										<!-- Форма авторизации %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
								 

									  <form action="/main/login" method="post">
										<input type="text" name="login" placeholder="Логин" style="font-family: consolas;">
										<input type="password" name="password" placeholder="Пароль" style="font-family: consolas;">
										<input type="submit" name="button" class="login loginmodal-submit" value="Отправить" style="font-family: consolas;">
									  </form>
										<!-- конец %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->


									  <div class="login_help">
										<a href="main/registration">Регистрация</a>
										<a href="#">Забыли пароль?</a>
									  </div>
									</div>
									<div class="lgw">
										
									</div>
								</div>
							  </div>
					    	 
					      
					      </ul>
					    </div>
					  </div>

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
		 
