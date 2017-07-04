<?php 
session_start();
if(!empty($_SESSION['user'])){
  require_once 'core/views/templates/header_auth.tpl';
}else {
  require_once 'core/views/templates/header.tpl';
}
if(!empty($params['error'])){
  echo $params['error'];
}
?>
	
	<main>
	<form class="form-horizontal class_h" action="registration" method="POST">
  <fieldset>
    <div id="legend">
      <legend class="dd">Регистрация</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Имя</label>
      <div class="controls">
        <input type="text" id="username" name="user_name" placeholder="" class="input-xlarge">
        <p class="help-block">Укажите ваше имя без пробелов</p>
      </div>
	  <label class="control-label"  for="username">Фамилия</label>
      <div class="controls">
        <input type="text" id="username" name="user_lastname" placeholder="" class="input-xlarge">
        <p class="help-block">Укажите вашу фамилию без пробелов</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="login">Логин</label>
      <div class="controls">
        <input type="text" id="login" name="user_login" placeholder="" class="input-xlarge">
        <p class="help-block">Пожалуйста, укажите ваш логин</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="user_password">Пароль</label>
      <div class="controls">
        <input type="password" id="password" name="user_password" placeholder="" class="input-xlarge">
        <p class="help-block">Ваш пароль должен состоять не менее 8 символов</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Повторите пароль</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="user_password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Пожалуйста, повторите пароль</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Зарегестрироваться</button>
      </div>
    </div>
  </fieldset>
</form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>
  

	
	</main>
  

<?php require_once 'core/views/templates/footer.tpl'?>
