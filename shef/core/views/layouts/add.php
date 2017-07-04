<?php 
session_start();
if(!empty($_SESSION['user'])){
	require_once 'core/views/templates/header_auth.tpl';
}else {
	require_once 'core/views/templates/header.tpl';
}
echo $params['error'];

?>
	<main>
	<div class="container-fluid">
	<h3 class="h">Подать объявление на Shef</h3><hr>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 lf_s">
			<form action="add" enctype="multipart/form-data" method="POST" id="add">
				<h4>Шаг 1</h4><hr>
				<div class="ajax">
					<h4>Заголовок</h4>	
					<input type="text" name="title"> 
				</div>
				
					
					<select size="1" name="category">
						<option value="1">Салаты</option>
						<option value="2">Супы</option>
						<option value="3">Напитки</option>
						<option value="4">Мясное</option>
						<option value="5">Куриное</option>
						<option value="6">Рыбное</option>
						<option value="7">Фруктовое</option>
						<option value="8">Закуски</option>
						<option value="9">Овощное</option>
						<option value="10">Сладкое</option>
						<option value="11">Выпечка</option>
						<option value="12">Завтраки</option>
					</select>
				<hr>
				<div title="Описание" class="textarea_div">
					<h4>Описание</h4>
					<textarea rows="10" cols="60" name="description" >
						
					</textarea>
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 md_s">
				<div class="row adserr">
				<h4>Шаг 2</h4><hr>
					<div><h4>Загрузите фотографииnи</h4></div>
					
						<input type="file" name="foto">
						
					
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 rg_s">
				<h4>Шаг 3</h4><hr>
			<div><b>Цена</b><input class="cost" type="number" name="price" /><b>тг</b></div>
			<div class="btn-group">
					<button type="button" data-toggle="dropdown" class="btn goto btn-default dropdown-toggle">Город	<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Алма-ата</a></li>
						<li><a href="#">Астана</a></li>
						<li><a href="#">Караганда</a></li>
					 
						<li><a href="#">Шымкент</a></li>
						<li><a href="#">Тараз</a></li>
						<li><a href="#">Усть-Каменогорск</a></li>

						<li><a href="#">Уральск</a></li>
						<li><a href="#">Актобе</a></li>
						<li><a href="#">Атырау</a></li>

						<li><a href="#">Павлодар</a></li>
						<li><a href="#">Семей</a></li>
						<li><a href="#">Кызылорда</a></li>
					</ul>
				</div><hr>
			<div>
				 <b>Номер телефона</b><br>
				<input class="mob-number"  type="text" name="mobnumber"></div><hr>
			<div>
				 <b>Контактное лицо</b><br>
				<input class="face_contac" type="text" name="face_contac"></div><hr>
		</div><hr>
		<input class="bth" type="submit" value="Создать объявление">
	
	</div>
	</form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
  	
	</main>
	
<?php require_once 'core/views/templates/footer.tpl';?>