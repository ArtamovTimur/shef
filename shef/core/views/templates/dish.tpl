					<div class="adds">
					 		<div class="avtor">
					 			<a href="#"><img src="/assets/images/other/typ_user-fm.png" /><?= get_login_by_id($value['author_id'])['login']; ?></a>
					 		</div>
					 		<div class="time_eat"><p><?= $value['pubdate']; ?></p></div>
					 		<a href=""><img src='<?php 
					 			echo "/assets/dishes_photo/" . $value['image'];
					 		 ?>' class="img-responsive img" alt="Image"></a>
							<div class="p_l">
								<h3><a href="#"><?= $value['title']; ?></a></h3>
								<p><?= $value['description']; ?></p>
								<b>Категория:&nbsp;<?= $value['category']; ?></b><br>
								<b><?= $value['price']; ?></b>
							</div>
							<div class="obidenen">
									<div class="span">
										<p>
										 3.5 из 10 <span class="glyphicon glyphicon-thumbs-up"></span>
										</p>									
				   					</div>
									<div class="p_r">
											<span class="like" data-id=<?= $value['id'];?>><?= $value['likes']?></span>
											<span class="glyphicon glyphicon-heart-empty"></span>
											<span class="glyphicon glyphicon-share"></span>
									</div>			 
				   			 </div>	

				   			</div><!-- adds end -->

				   			<script>

				   			</script>