<!DOCTYPE html>
<html>
<head>
	<title>work</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
</head>
<body>
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
	<header>
		<div class="headerCenter">
			<div class="logo">
				<a href="/src/index.php"><img class="logo__img" src="../img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/post/index.php">Статьи о заработке</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/soft/index.php">Софт для заработка</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/keys/index.php">Кейсы по заработку</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/news/index.php">Новости</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="/src/post/index.php">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/soft/index.php">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/keys/index.php">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/news/index.php">Новости</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="text katalog-text">
			<h1 class="text__title">(Заголовок из ся)</h1>
			<p class="text__descript">
				Таким образом реализация намеченных плановых заданий
				обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия.
				Повседневная практика показывает, что новая модель организационной деятельности
				позволяет оценить значение форм развития.
				Разнообразный и богатый опыт консультация с широким активом позволяет выполнять
				важные задания по разработке соответствующий условий активизации.
			</p>
		</div>
		<center>
		<div class="categories">
			<h2 class="categories__title">Категории программ для заработка</h2>
			<div class="categories__flex">
				<a href="../brauzery/">
					<div class="categories__button">Браузеры</div>
				</a>
				<a href="../rabota-s-tekstom/">
					<div class="categories__button">Работа с текстом</div>
				</a>
				<a href="../host/">
					<div class="categories__button">Хостинг</div>
				</a>
				<a href="../vpn/">
					<div class="categories__button">VPN</div>
				</a>
				<a href="../proxy/">
					<div class="categories__button">Proxy</div>
				</a>
				<a href="../platezhnye-sistemy/">
					<div class="categories__button">Платежные системы</div>
				</a>
			</div>
		</div>
		
		<div class="content">
		
			<?php
				$conect = mysqli_connect('localhost','root','','posting');
				$state = mysqli_query($conect,"SELECT `name`, `image`, `title-katalog`, `description-katalog` FROM `soft` WHERE `pay` = 'on'");
					while ($result_state  = mysqli_fetch_array($state)){
					$img = str_replace("/soft","",$result_state['image']);
					echo 
						'<a href="./'.$result_state['name'].'.php">
						<div class="content__element">
							<div class="content__img" style="background-image:url(.'.$img.')"></div>
							<div class="content__text">
								<h2 class="content__title">'.$result_state['title-katalog'].'</h2>
								<p class="content__descript">'.$result_state['description-katalog'].'</p>
							</div>
						</div>
						</a>';
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
					<span class="footer__text big-red">BigMoney</span> - это проект, который помогает пользователям
					интернета заработать деньги в сети.
					Мы рассказываем про различные способы заработка,
					способы которые реально работают.
					Мы не рекламируем казино, ставки и подобные им мошеннические организации.
					Мы даем все что бы вы могли создать бизнес в сети.
					У нас вы найдете для себя реальный метод заработка в Интернете,
					который будет стабильно приносить вам доход.
				</p>
				
			</div>
			<div class = "footer__element">
				<h2 class="footer__text">Контакты</h2>
				<img class="footer__img"src="../img/facebook.svg">
				<img class="footer__img"src="../img/telegram.svg">
				<img class="footer__img"src="../img/vk.svg">
			</div>
			<div class = "footer__element">
				<h2 class="footer__text">Поддержка</h2>
				<p class="footer__text"><a href="#" class="footer__link">bigmoney.support@mail.ru</a></p>
			</div>
		</div>
		<div class="footer__end">
			<p class="footer__text mini-text">BigMoney © Все права защищены</p>
		</div>
	</footer>
</form>

<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/mobile.js"></script>
</body>
</html>
