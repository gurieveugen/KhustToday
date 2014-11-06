<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>KHUST TODAY</title>	
	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/jquery.fs.picker.css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.fs.picker.min.js"></script>
</head>
<body>
	<div class="main">
		<header class="main-header">
			<div class="banner">
				<a href="#"><img src="http://placehold.it/730x90/000/fff" alt="banner"></a>
			</div>
			<ul class="menu">
				<li><a href="#">Новини</a></li>
				<li><a href="#">Аналітика</a></li>
				<li><a href="#">Фото-відео</a></li>
				<li><a href="#" class="logo"><img src="/images/logo.png" alt="KHUST TODAY"></a></li>
				<li><a href="#">Реклама</a></li>
				<li><a href="#">Контакти</a></li>
				<li><a href="#" class="search"><img src="/images/search_btn.png" alt="Search"></a></li>
			</ul>
		</header>
		<section class="main-section">
			<div class="sidebar">
				<a href="#" class="banner-auto"><img src="/images/placeholders/1.jpg" alt="Banner"></a>
				<div class="sinoptiok-block">
					<?php include('sinoptik.php'); ?>	
				</div>
				<div class="poll">
					<h1>Опитування</h1>
					<span class="poll-info">Голосів: 59003</span>
					<span class="title">
						Що влада має зробити з <br> сепаратистами у східній Україні?
					</span>
					<form action="">
						<fieldset>
							<input type="radio" name='radio' id="radio_1">
							<label for="radio_1">Посадити на довгий термін</label>
						</fieldset>
						<fieldset>
							<input type="radio" name='radio' id="radio_2">
							<label for="radio_2">Посадити на довгий термін</label>
						</fieldset>
						<fieldset>
							<input type="radio" name='radio' id="radio_3">
							<label for="radio_3">Посадити на довгий термін Посадити на довгий термін</label>
						</fieldset>
						<br>
						<button type="submit">Голосувати</button>
						<a href="#" class="right bottom">Переглянути</a>
					</form>
				</div>
				<a href="#" class="banner-kinoafisha"><img src="/images/placeholders/2.jpg" alt="Banner"></a>
				<div class="block-tabs">				
					<ul class="links">
						<li><a class="active fb" data-id="#fb-tab" href="#">Facebook</a></li>
						<li><a data-id="#vk-tab" href="#" class="vk">VK</a></li>
					</ul>
					<ul class="tabs">
						<li class="show" id="fb-tab">
							<img src="http://placehold.it/300x363/5b7fa6/fff" alt="Placeholder">
						</li>
						<li id="vk-tab" class="">
							<img src="http://placehold.it/300x363/fff/5b7fa6" alt="Placeholder">
						</li>
					</ul>
				</div>
			</div>
			<div class="content">
				<img src="http://placehold.it/620x410/e40000/fff" alt="featured" class="featured">
				<h1 class="page-title">Що влада має зробити з сепаратистами у східній Україні? </h1>
				<span class="date">Сьогодні, 19:30</span>
				<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</div>
			</div>
		</section>
		<footer class="main-footer">
			<div class="content">
				<div class="logo">
					<img src="/images/footer_logo.png" alt="Khust today">
				</div>
				<ul class="menu">
					<li><a href="#">Новини</a></li>
					<li><a href="#">Аналітика</a></li>
					<li><a href="#">Фото-відео</a></li>
					<li><a href="#">Реклама</a></li>
					<li><a href="#">Контакти</a></li>
				</ul>	
			</div>
		</footer>
	</div>
</body>
</html>