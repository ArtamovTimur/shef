<?php 
session_start();
if(!empty($_SESSION['user'])){
	require_once 'core/views/templates/header_auth.tpl';
}else {
	require_once 'core/views/templates/header.tpl';
}
?>
<h1><?php if(!empty($_SESSION['error']['add_dish']))
		echo $_SESSION['error']['add_dish']; 
	?></h1>
<?php require_once 'core/views/templates/categories.tpl'; ?>

		<div class="container">
				<div class="media">
	<?php 
	$c = count($params);
	if($c)
	{
				for($i = 0; $i < count($params)/$c; $i++){

					foreach($params as $key => $value){
					include 'core/views/templates/dish.tpl';
				}
			}
	}elseif(!empty($_SESSION['error']['search_dish'])){
		echo "<h1>" . $_SESSION['error']['search_dish'] . "</h1>";
	}
	else {
		echo "<h1>В данной категории еще нет блюд(</h1>";
	}		
				
		?>
				</div><!-- media end -->
		</div><!-- container end -->

<?php require_once 'core/views/templates/footer.tpl'; ?>
	