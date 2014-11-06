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
				<div class="half">
					<h1>Головне</h1>
					<figure>
						<a href="#"><img src="http://placehold.it/300x218/a7a7a7/fff" alt="image-box"></a>
						<figcaption>
							Найкращий матеріал про щось дуже цікаве і важливе. А може й не важливе. Відео та фото.
						</figcaption>
					</figure>
				</div>
				<div class="half right">
					<h1>Ексклюзив</h1>
					<article class="first">
						<a href="#"><img src="http://placehold.it/140x97/a7a7a7/fff" alt="image-box"></a>
						<a href="#">Хто купив? Хто продав? А хто? А може й я. А може ні. Нз, кароч.</a>
						<ul class="info">
							<li class="comments">24</li>
							<li class="views">Переглядів: 1023</li>
						</ul>
					</article>
					<article>
						<a href="#"><img src="http://placehold.it/140x97/a7a7a7/fff" alt="image-box"></a>
						<a href="#">Хто купив? Хто продав? А хто? А може й я. А може ні. Нз, кароч.</a>
						<ul class="info">
							<li class="comments">24</li>
							<li class="views">Переглядів: 1023</li>
						</ul>
					</article>
				</div>
			</div>
			<div class="content margin-top-60">
				<div class="half">
					<h1>Статті</h1>
					<a href="#"><img src="http://placehold.it/270x169/a7a7a7/fff" alt="image-box"></a>
					<div class="txt">
						Дуже цікавий матеріал, котрий <br> точно попаде в топ-100, або <br> топ-1, або ще кудись
					</div>
				</div>
				<div class="half right">
					<h1>Інтерв’ю</h1>
					<a href="#"><img src="http://placehold.it/270x169/a7a7a7/fff" alt="image-box"></a>
					<div class="txt">
						Дуже цікавий матеріал, котрий <br> точно попаде в топ-100, або <br> топ-1, або ще кудись
					</div>
				</div>
			</div>
			<div class="content margin-top-45 margin-bottom-60 text-center">
				<a href="#"><img src="/images/placeholders/google_banner.jpg" alt="image-box"></a>
			</div>
			<div class="content">
				<div class="half">
					<ul class="sidebar-tools">
						<li><a href="#">Фото</a><span>(25)</span></li>
						<li><a href="#">ВІДЕО</a><span>(25)</span></li>
						<li class="last"><span>Усі фото</span></li>
					</ul>
					<div class="flexslider">	
						<ul class="slides">
							<li><img src="http://placehold.it/270x169/a7a7a7/fff" alt="Slide1"></li>
							<li><img src="http://placehold.it/270x169/a7a7a7/fff" alt="Slide2"></li>
							<li><img src="http://placehold.it/270x169/a7a7a7/fff" alt="Slide3"></li>
							<li><img src="http://placehold.it/270x169/a7a7a7/fff" alt="Slide4"></li>
							<li><img src="http://placehold.it/270x169/a7a7a7/fff" alt="Slide5"></li>
						</ul>			 
					</div>
					<div class="txt">
						Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або<br> ще кудись
					</div>
					<h1 class="rezonans-title">Резонанс</h1>
					<ul class="rezonans-list">
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
						<li>
							<span class="comments">123</span>
							<a href="#">
								Дуже цікавий матеріал, котрий точно попаде в топ-100, або топ-1, або ще кудись
							</a>
						</li>
					</ul>
				</div>
				<div class="half right">
					<h1>Новини</h1>
					<ul class="news-list">
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
						<li>
							<span>18:00</span>
							<a href="#">Дуже цікавий матеріал, котрий<br> точно попаде в топ-100, або топ-1,<br> або ще кудись</a>
						</li>
					</ul>
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