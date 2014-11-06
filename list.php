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
				<h1>Новини</h1>
				<article class="short-news">
					<div class="img-block">
						<img src="http://placehold.it/100x72/e40000/ffffff" alt="thumb">
					</div>
					<div class="text-block">
						<h2><a href="#">Some title</a></h2>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, placeat, optio adipisci ipsa mollitia ipsam aliquid totam ut minus deleniti esse temporibus eos consequuntur neque quam nam similique veritatis cum!
						</div>
					</div>
				</article>

				<article class="short-news">
					<div class="img-block">
						<img src="http://placehold.it/100x72/e40000/ffffff" alt="thumb">
					</div>
					<div class="text-block">
						<h2><a href="#">Some title</a></h2>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, placeat, optio adipisci ipsa mollitia ipsam aliquid totam ut minus deleniti esse temporibus eos consequuntur neque quam nam similique veritatis cum!
						</div>
					</div>
				</article>

				<article class="short-news">
					<div class="img-block">
						<img src="http://placehold.it/100x72/e40000/ffffff" alt="thumb">
					</div>
					<div class="text-block">
						<h2><a href="#">Some title</a></h2>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, placeat, optio adipisci ipsa mollitia ipsam aliquid totam ut minus deleniti esse temporibus eos consequuntur neque quam nam similique veritatis cum!
						</div>
					</div>
				</article>

				<article class="short-news">
					<div class="img-block">
						<img src="http://placehold.it/100x72/e40000/ffffff" alt="thumb">
					</div>
					<div class="text-block">
						<h2><a href="#">Some title</a></h2>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, placeat, optio adipisci ipsa mollitia ipsam aliquid totam ut minus deleniti esse temporibus eos consequuntur neque quam nam similique veritatis cum!
						</div>
					</div>
				</article>

				<article class="short-news">
					<div class="img-block">
						<img src="http://placehold.it/100x72/e40000/ffffff" alt="thumb">
					</div>
					<div class="text-block">
						<h2><a href="#">Some title</a></h2>
						<div class="text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, placeat, optio adipisci ipsa mollitia ipsam aliquid totam ut minus deleniti esse temporibus eos consequuntur neque quam nam similique veritatis cum!
						</div>
					</div>
				</article>
				<ul class="pagination">
					<li><a href="#">&#8592;</a></li>
					<li><a href="#" class="active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<li><a href="#">10</a></li>
					<li><a href="#">&#8594;</a></li>
				</ul>
				<div class="clear"></div>	
				<div class="disqus">
					<div id="disqus_thread"></div>
					<script type="text/javascript">
					    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					    var disqus_shortname = 'irshavanews'; // required: replace example with your forum shortname

					    /* * * DON'T EDIT BELOW THIS LINE * * */
					    (function() {
					        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					    })();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
					
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