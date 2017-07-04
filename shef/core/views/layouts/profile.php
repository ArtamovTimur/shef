<?php 
session_start();
if(!empty($_SESSION['user'])){
	require_once 'template/header_auth.tpl';
}else {
	require_once 'template/header.tpl';
}
if(!empty($params['error'])){
	echo $params['error'];
}
?>

<main>
	<div class="container user_r">
		<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main-page-user">
			<div class="image-user col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div>
					<img src="/assets/images/other/user.png" class="user_img"/>
				</div>
				
			</div>

			<div class="info_user col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<h2><a href="#">Сэм Роджерс</a></h2>
					<hr>
				<div class="lf">
					<ul>
						<li>Город:</li>
						<li>Тип:</li>
						<li>Учавствует с:</li>
					</ul>
				</div>
				
				<div class="rt">
					<ul>
						<li><a href="#">Лос-Анджелес</a></li><br>
						<li><a href="#">Частное лицо</a></li><br>
						<li><a href="#">29.04.2018</a></li><br>
					</ul> 
				</div>
				
			</div>
		</div>
        </div>
	</div>

	</main>
	
	<div class="container">
		<div class="row">
			<div class="publicacii">
				<h2><a href="#">Все объявления от Сэма Роджерса</a></h2>
			</div>
		</div>
		
		<?php
	$c = count($params);
	for($i = 0; $i < count($params)/$c; $i++){

					foreach($params as $key => $value){
					include 'template/dish.tpl';
				}
			}
	?>
		
	</div>


<?php require_once 'template/footer.tpl'?>
