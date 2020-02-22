<!DOCTYPE html>
<html>
<head>
	<title>Сервисы для заработка в интернете</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "icon" href="./img/favicon.ico" type="image/x-icon">
</head>
<body>
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
	<header>
		<div class="headerCenter">
			<div class="logo">
				<a href="../index.php"><img class="logo__img" src="./img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="../post/index.php">Статьи о заработке</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="../soft/index.php">Софт для заработка</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="../keys/index.php">Кейсы по заработку</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="../news/index.php">Новости</a></li>
				</ul>
			</div>
		</div>
		<div class="headerCenter__clickBlock mobile">
			<div class="headerCenter__click" id="click">
				
			</div>
		</div>	
		
	</header>
	<nav class="navigation">
		<ul class="navigation__ul">
			<li class="navigation__li"><a class="navigation__link" href="../post/index.php">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="../soft/index.php">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="../keys/index.php">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="../news/index.php">Новости</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="text katalog-text">
			<h1 class="text__title">Полезные сервисы для заработка</h1>
			<p class="text__descript">
				Для заработка в интернете могут пригодится различные сервисы,
				Например proxy или vpn.
				Мы бесплатно поделимся с вами сервисами,
				которые помогут вам заработать в интернете.
			</p>
		</div>
		<center>
		<div class="categories">
			<h2 class="categories__title">Категории программ для заработка</h2>
			<div class="categories__flex">
				<a href="./brauzery/">
					<div class="categories__button">Браузеры</div>
				</a>
				<a href="./rabota-s-tekstom/">
					<div class="categories__button">Работа с текстом</div>
				</a>
				<a href="./host/">
					<div class="categories__button">Хостинг</div>
				</a>
				<a href="./vpn/">
					<div class="categories__button">VPN</div>
				</a>
				<a href="./proxy/">
					<div class="categories__button">Proxy</div>
				</a>
				<a href="./platezhnye-sistemy/">
					<div class="categories__button">Платежные системы</div>
				</a>
			</div>
		</div>
		<div class="content">
			<h2 class="content__error">Сервисы временно не доступны!</h2>
			<?php
				$conect = mysqli_connect('localhost','root','','posting');
				$state = mysqli_query($conect,"SELECT `name`,`image`,`title-katalog`,`description-katalog` FROM `soft`");
					while ($result_state  = mysqli_fetch_array($state)){
						$array[0] = "brauzery";
						$array[1] = "host";
						$array[2] = "platezhnye-sistemy";
						$array[3] = "proxy";
						$array[4] = "rabota-s-tekstom";
						$array[5] = "vpn";
						for($a = 0; $a<=5; $a++){
							$dir = './'.$array[$a].'/';
							if($handle = opendir($dir)){
								while(false !== ($file = readdir($handle))) {
									if($file != "." && $file != ".." && $file == $result_state['name'].'.php'){
										echo 
										'<a href="./'.$array[$a].'/'.$result_state['name'].'.php">
										<div class="content__element">
											<div class="content__img" style="background-image:url(.'.$result_state['image'].')"></div>
											<div class="content__text">
												<h2 class="content__title">'.$result_state['title-katalog'].'</h2>
												<p class="content__descript">'.$result_state['description-katalog'].'</p>
											</div>
										</div>
										</a>';
									}
								}
								
							}
						}
					}
			?>
		</div>
		</center>
	</section>
	<footer class="footer">
		<div class="footer__center">
			
			<div class = "footer__element">
				<h2 class="footer__text">О проекте</h2>
				<p class="footer__text">
					<span class="footer__text big-red">KeyFromMoney</span> - это проект, который помогает пользователям
					интернета получать деньги в сети.
					Мы рассказываем про различные способы монетизации,
					способы которые реально работают.
					Мы не рекламируем казино, ставки и подобные им мошеннические организации.
					Мы даем все что бы вы могли создать бизнес в сети.
					У нас вы найдете для себя реальный метод извлечения прибыли в Интернете,
					который будет стабильно приносить вам доход.
				</p>
				
			</div>
			<div class = "footer__element">
				<h2 class="footer__text">Контакты</h2>
				<img class="footer__img"src="./img/facebook.svg">
				<img class="footer__img"src="./img/telegram.svg">
				<img class="footer__img"src="./img/vk.svg">
			</div>
			<div class = "footer__element">
				<h2 class="footer__text">Поддержка</h2>
				<p class="footer__text"><a href="#" class="footer__link">KeyFromMoney.support@mail.ru</a></p>
			</div>
		</div>
		<div class="footer__end">
			<p class="footer__text mini-text">KeyFromMoney © Все права защищены</p>
		</div>
	</footer>
</form>

<script src="./js/jquery-3.3.1.js"></script>
<script src="./js/mobile.js"></script>

</body>
</html>
