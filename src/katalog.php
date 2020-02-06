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
					<li class="headerCenter__li"><a class="headerCenter__link" href="katalog.php">Статьи о заработке</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="soft.php">Софт для заработка</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="keys.php">Кейсы по заработку</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="new.php">Новости</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="katalog.php">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="katalog.php">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="katalog.php">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="katalog.php">Новости</a></li>
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
			<h2 class="categories__title">Категории заработка</h2>
			<button class="categories__button">Для новичков</button>
			<button class="categories__button">Пассивный</button>
			<button class="categories__button">На сайте</button>
			<button class="categories__button">Арбитраж трафика</button>
			<button class="categories__button">Фриланс</button>
			<button class="categories__button">На моб. приложениях</button>
		</div>
		<div class="filter">
			<div class="type">
				<p class="type__text">Вид заработка:</p>
				<select class="type__select">
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
				<select class="type__select">
					<option>Выбирите сложность</option>
					<option>Легко</option>
					<option>Нормально</option>
					<option>Сложно</option>
				</select>
			</div>
			<div class="type">
				<p class="type__text">Доход:</p>
				<select class="type__select">
					<option>Выбирите доходность</option>
					<option>Низкая</option>
					<option>Средняя</option>
					<option>Высокая</option>
				</select>
			</div>
		</div>
		<button class="go">Применить</button>
		<div class="content">
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/crypt.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/arbit.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/freelance.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/passiv.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/start.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/leadbit.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/partner.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
			<a href="./state.php">
			<div class="content__element">
				<div class="content__img" style="background-image:url(./img/crypt.png)"></div>
				<div class="content__text">
					<h2 class="content__title">Этот заголовок содержит всего 60 символов это его максимум.. </h2>
					<p class="content__descript">Это дескрипшион и он может содержать в районе 120 символов но
					это не точно так как я еще не смотрел сколько тут имееться</p>
				</div>
			</div>
			</a>
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
