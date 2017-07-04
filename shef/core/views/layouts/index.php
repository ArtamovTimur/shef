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
<div class="categories container">
			<div class="row">
				<ul class="navbar-left col-xs-6 col-sm-3 col-md-3 col-lg-3">
					<li><a href="#"><img src="/assets/images/icon/icon-salad.png"  ><span>Салаты</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-soup.png"  ><span>Супы</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-drink.png "  ><span>Напитки</span></a></li>
				</ul>
				<ul class="navbar-left col-xs-6 col-sm-3 col-md-3 col-lg-3">
					<li><a href="#"><img src="/assets/images/icon/icon-meat.png"  ><span>Мясное</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-chiken.png"  ><span>Куриное</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-fish.png"  ><span>Рыбное</span></a></li>
				</ul>
				<ul class="navbar-right col-xs-6 col-sm-3 col-md-3 col-lg-3">
					<li><a href="#"><img src="/assets/images/icon/icon-sweat.png"  ><span>Сладкое</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-bakery.png"  ><span>Выпечка</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-breakfast.png"  ><span>Завтраки</span></a></li>
				</ul>
				<ul class="navbar-right col-xs-6 col-sm-3 col-md-3 col-lg-3">
					<li><a href="#"><img src="/assets/images/icon/icon-fruit.png"  ><span>Фруктовое</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-snack.png"  ><span>Закуски</span></a></li>
					<li><a href="#"><img src="/assets/images/icon/icon-vegetable.png" ><span>Овощное</span></a></li>
				</ul>
			</div>
		</div>	







		<div class="container">
			<div class="">
			 
			    	
			    
				 <div class="media">
					 <div class="adds">
					 		<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>

							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>
							
					 </div>
						

		






					 <div class="adds">
					 		<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>
					 </div>
					 <div class="adds">
					 		<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>
					 </div>


					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>
					 </div>
					  
				  



				  
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href="">	<img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>		
					 </div>
				 



				 
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
						 <div class="avtor">
						 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
						 		</div>
						 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>		
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>		
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 		<a href=""><img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>		
					 </div>
				 


				 
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 	<img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image">
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 	<img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image">
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 	<img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image">
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>	
					 </div>
					 <div class="adds">
					 	<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /> Кендра Ласт</a>
					 		</div>
					 		<div class="time_eat"><p>15 минут назад</p></div>
					 	<img src="/assets/images/eat/blin.png" class="img-responsive img" alt="Image">
							<div class="p_l">
								<h3><a href="#">Блины со сметаной</a></h3>
								<p><a href="#">Описание рецепта</a></p>
								<b>35000тг</b>
							</div>
							
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
							</div>		
					 </div>
				 

				 

			</div>
		</div>

<?php require_once 'template/footer.tpl'?>
	