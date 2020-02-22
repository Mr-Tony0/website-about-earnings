<!DOCTYPE html>
<html>
<head>
	<title>Заработок в интернете с быстрым выводом денег на карту и ежедневной оплатой</title>
	<meta name="description" content="Различные способы заработка в интернете где вы сможете вывести деньги например на вашу карту сбербанк или qiwi кошелек, реальные способы и быстрый заработок">
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
				<a href="/src/index.php"><img class="logo__img" src="../img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="./index.php">Статьи о заработке</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="../index.php">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/soft/index.php">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/keys/index.php">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/news/index.php">Новости</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="text katalog-text">
			<h1 class="text__title">Заработок в интернете с выводом денег</h1>
			<p class="text__descript">
				В интернете существует много способов получения денег, у нас вы найдете способы заработка с доступным выводом денег.
				Заработанные деньги можно вывести на карту сбербанка или например на qiwi кошелек.
				Мы предлагаем зарабатывать деньги и получать стабильные ежедневные выплаты на ваш кошелек или карту. 
				Для работы вам понадобиться время и устройство с выходом в интернет.
				Все предлагаемые способы являются легальными и проверенными, так что вы получите гарантированную прибыль.
			</p>
		</div>
		<center>
		<div class="categories">
			<h2 class="categories__title">Категории заработка</h2>
			<div class="categories__flex">
				<a href="./dlya-novichkov/index.php">
					<div class="categories__button">Заработок для новичков</div>
				</a>
				<a href="./passivnyj/index.php">
					<div class="categories__button">Пассивный заработок</div>
				</a>
				<a href="./site/index.php">
					<div class="categories__button">Заработок на сайте</div>
				</a>
				<a href="./arbitraj/index.php">
					<div class="categories__button">Арбитраж трафика</div>
				</a>
				<a href="./freelance/index.php">
					<div class="categories__button">Фриланс</div>
				</a>
				<a href="./mobilnye-prilozheniya/index.php">
					<div class="categories__button">Заработок на моб. приложениях</div>
				</a>
			</div>
		</div>
		<div class="filter">
			<div class="type">
				<p class="type__text">Вид заработка:</p>
				<select class="type__select" name="type">
					<option>Выбирите вид заработка</option>
					<option>Социальные сети</option>
					<option>Партнерские программы</option>
					<option>Написание отзывов</option>
					<option>Создание сайтов</option>
					<option>Просмотр рекламы</option>
					<option>Криптавалюта</option>
					<option>Прохождение опросов</option>
					<option>С вложениями</option>
					<option>Без вложений</option>
					<option>Другие виды заработка</option>
				</select>
			</div>
			<div class="type">
				<p class="type__text">Сложность:</p>
				<select class="type__select"  name="hard">
					<option>Выбирите сложность</option>
					<option>Легко</option>
					<option>Нормально</option>
					<option>Сложно</option>
				</select>
			</div>
			<div class="type">
				<p class="type__text">Доход:</p>
				<select class="type__select" name="money">
					<option>Выбирите доходность</option>
					<option>Низкая</option>
					<option>Средняя</option>
					<option>Высокая</option>
				</select>
			</div>
		</div>
		<button class="go" name="go">Применить</button>
		<div class="content">
		
			<?php
				
					
				
				
				$conect = mysqli_connect('localhost','root','','posting');
				
				if (isset($_POST['go'])){
					
					$hard= mysqli_real_escape_string($conect, trim($_POST['hard']));
					$money= mysqli_real_escape_string($conect, trim($_POST['money']));
					$type = mysqli_real_escape_string($conect, trim($_POST['type']));
					$search = mysqli_query($conect,"SELECT `money-level`, `name`, `hard-level`, `type`, `image`, `title-katalog`, `description-katalog` FROM `post`");
					while ($result_search = mysqli_fetch_array($search)){
						$array[0] = "arbitraj";
						$array[1] = "dlya-novichkov";
						$array[2] = "freelance";
						$array[3] = "mobilnye-prilozheniya";
						$array[4] = "site";
						$array[5] = "passivnyj";
						for($a = 0; $a<=5; $a++){
							$dir = './'.$array[$a].'/';
							if($handle = opendir($dir)){
								while(false !== ($file = readdir($handle))) {
									if(($file != "." && $file != ".." && $file == $result_search['name'].'.php') && (($result_search['type'] == $type && $hard == 'Выбирите сложность' && $money == 'Выбирите доходность') || ($result_search['type'] == $type && $hard == $result_search['hard-level'] && $money == $result_search['money-level']) || ($result_search['type'] == $type && $hard == $result_search['hard-level']) || ($result_search['type'] == $type && $money == $result_search['money-level']) || ($type == 'Выбирите вид заработка' && $hard == $result_search['hard-level'] && $money == 'Выбирите доходность') || ($type == 'Выбирите вид заработка' && $hard == $result_search['hard-level'] && $money == $result_search['money-level']) || ($type == 'Выбирите вид заработка' && $hard == 'Выбирите сложность' && $money == $result_search['money-level']) )){
										
											echo 
										'<a href="./'.$array[$a].'/'.$result_search['name'].'.php">
										<div class="content__element">
											<div class="content__img" style="background-image:url(.'.$result_search['image'].')"></div>
											<div class="content__text">
												<h2 class="content__title">'.$result_search['title-katalog'].'</h2>
												<p class="content__descript">'.$result_search['description-katalog'].'</p>
											</div>
										</div>
										</a>';
									}if(($file != "." && $file != ".." && $file == $result_search['name'].'.php') && ($money == 'Выбирите доходность' && $hard == 'Выбирите сложность' && $type == 'Выбирите вид заработка')){
										echo 
										'<a href="./'.$array[$a].'/'.$result_search['name'].'.php">
										<div class="content__element">
											<div class="content__img" style="background-image:url(.'.$result_search['image'].')"></div>
											<div class="content__text">
												<h2 class="content__title">'.$result_search['title-katalog'].'</h2>
												<p class="content__descript">'.$result_search['description-katalog'].'</p>
											</div>
										</div>
										</a>';
									}
								}
							}
						}
					}
				}else{
				$state = mysqli_query($conect,"SELECT `name`,`image`,`title-katalog`,`description-katalog` FROM `post`");
					while ($result_state  = mysqli_fetch_array($state)){
						$array[0] = "arbitraj";
						$array[1] = "dlya-novichkov";
						$array[2] = "freelance";
						$array[3] = "mobilnye-prilozheniya";
						$array[4] = "site";
						$array[5] = "passivnyj";
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
