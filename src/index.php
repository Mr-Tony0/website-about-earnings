<!DOCTYPE html>
<html>
<head>
	<title>work</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/modification.css">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	
</head>
<body>
<!--<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">-->
	<header>
		<div class="headerCenter">
			<div class="logo">
				<a href="index.php"><img class="logo__img" src="./img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="./post/index.php">Статьи о заработке</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="./soft/index.php">Софт для заработка</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="./keys/index.php">Кейсы по заработку</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="./news/index.php">Новости</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="./post/index.php">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="./soft/index.php">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="./keys/index.php">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="./news/index.php">Новости</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="top">
			<div class="top__left">
				<div class="center">
					<h2 class="top__title">Leabit</h2>
					<p class="top__descript">Международная CPA сеть работающая со всеми видами гео.</p>
				</div>
				<div class="start">
					<div class="top__intrest">Рекомендуем</div>
				</div>
			</div>
			<div class="top__right">
				<h2 class="top__title">Новые способы заработка</h2>
				<div class="top__new">
					<?php

					$conect = mysqli_connect('localhost','root','','posting');
					$state = mysqli_query($conect,"SELECT `name`,`image`,`title-katalog`,`description-katalog` FROM `post` ORDER BY `date` DESC LIMIT 6");
					while ($result_state = mysqli_fetch_array($state)){
						$array[0] = "arbitraj";
						$array[1] = "dlya-novichkov";
						$array[2] = "freelance";
						$array[3] = "mobilnye-prilozheniya";
						$array[4] = "site";
						$array[5] = "passivnyj";
						for($a = 0; $a<=5; $a++){
							$dir = './post/'.$array[$a].'/';
							if($handle = opendir($dir)){
								while(false !== ($file = readdir($handle))){
									if($file != "." && $file != ".." && $file == $result_state['name'].'.php'){
										echo
										'<div class="top__element">
											<div class="top__img" id ="" style= "background-image:url('.$result_state['image'].')" >
												<a href="/src/'.$dir.''.$result_state['name'].'.php"><div class="top__hover">
												<span class="top__button">'.$result_state['name'].'</span>
												</div></a>
											</div>
										</div>';
									}
								}
							}
						}
					}
					?>

				</div>
			</div>
		</div>
		<div class="text">
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
		<div class="text">
			<h1 class="text__title">(Заголовок из ся)</h1>
		</div>
		<div class="bottom">
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/mobil.png')" >
				<a href="./post/mobilnye-prilozheniya/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Мобильные приложения</h3>
			</div>
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/site.png')" >
				<a href="./post/site/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Свой сайт</h3>
			</div>
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/freelance.png')" >
				<a href="./post/freelance/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Фриланс</h3>
			</div>
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/start.png')" >
				<a href="./post/dlya-novichkov/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Для новичков</h3>
			</div>
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/arbit.png')" >
				<a href="./post/arbitraj/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Арбитраж трафика</h3>
			</div>
			<div class="bottom__element">
				<div class="bottom__img" id ="" style= "background-image:url('./img/passiv.png')" >
				<a href="./post/passivnyj/index.php"><div class="bottom__hover">
				<span class="bottom__button">Заработать</span>
				</div></a>
			</div>
			<h3 class="bottom__title">Пасивный заработок</h3>
			</div>
		</div>
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
				<img class="footer__img"src="./img/facebook.svg">
				<img class="footer__img"src="./img/telegram.svg">
				<img class="footer__img"src="./img/vk.svg">
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
<!--</form>-->

<script src="./js/jquery-3.3.1.js"></script>
<script src="./js/mobile.js"></script>

</body>
</html>
