<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
$conect = mysqli_connect('localhost','root','','posting');
$sql = mysqli_query($conect, 'SELECT `ID`,`name`,`title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `money-level`, `hard-level`, `date`, `coments`, `site`, `freelance`, `arbit`, `type`, `newUser`, `passiv`, `mob` FROM `post` ORDER BY id DESC LIMIT 1');
$result = mysqli_fetch_array($sql);
$name = $result['name'];


if($result['site'] == 'on'){
	$file = "./post/site/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}
if($result['freelance'] == 'on'){
	$file = "./post/freelance/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}
if($result['arbit'] == 'on'){
	$file = "./post/arbitraj/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}
if($result['newUser'] == 'on'){
	$file = "./post/dlya-novichkov/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}
if($result['passiv'] == 'on'){
	$file = "./post/passivnyj/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}
if($result['mob'] == 'on'){
	$file = "./post/mobilnye-prilozheniya/".$name.".php"; // Путь к новому файлу
	$html = file_get_contents('./state.php'); // Содержимое
	$handle = fopen($file,"w+"); // Создать файл, вернуть дескриптор в $handle
	fwrite($handle,$html); // Записать содержимое в дескриптор
	fclose($handle); // Закрыть файл
}			



$path_parts = pathinfo($_SERVER['SCRIPT_NAME']);
$nameFile = $path_parts['filename'];
$search = mysqli_query($conect, "SELECT `ID`,`name`,`title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `money-level`, `hard-level`, `date`, `coments`, `site`, `freelance`, `arbit`, `type`, `newUser`, `passiv`, `mob` FROM `post` WHERE `name`= '$nameFile'");
$resultSearch =mysqli_fetch_array($search);

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $resultSearch['title-braus']; ?></title>
	<meta name="description" content="<?php echo $resultSearch['description-braus']; ?>">
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
				<a href="/src/"><img class="logo__img" src="../img/logo.png" alt=""></a>
			</div>
			<div class="headerCenter__menu desktop">
				<ul class="headerCenter__ul">
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/post/">Статьи о заработке</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/soft/">Софт для заработка</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/keys/">Кейсы по заработку</a></li>
					<li class="headerCenter__li"><a class="headerCenter__link" href="/src/news/">Новости</a></li>
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
			<li class="navigation__li"><a class="navigation__link" href="/src/post/">Статьи о заработке</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/soft/">Софт для заработка</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/keys/">Кейсы по заработку</a></li>
			<li class="navigation__li"><a class="navigation__link" href="/src/news/">Новости</a></li>
		</ul>
	</nav>
	<section class="container">
		<div class="text katalog-text">
			<center>
				<h1 class="text__title"><?php echo $resultSearch['one-title-page']; ?></h1>
				<div class="categories">
					<?php
						if($resultSearch['site'] == 'on'){
							echo '	<div class="categories__button">Заработок на сайте</div>';
						}
						if($resultSearch['freelance'] == 'on'){
							echo '<div class="categories__button">Фриланс</div>';
						}
						if($resultSearch['arbit'] == 'on'){
							echo '<div class="categories__button">Арбитраж трафика</div>';
						}
						if($resultSearch['newUser'] == 'on'){
							echo '<div class="categories__button">Заработок для новичков</div>';
						}
						if($resultSearch['passiv'] == 'on'){
							echo '<div class="categories__button">Пассивный заработок</div>';
						}
						if($resultSearch['mob'] == 'on'){
							echo '<div class="categories__button">Заработок на моб. приложениях</div>';
						}
					?>
				</div>
			</center>
		</div>
		<div class="previe" id="image">
		</div>
		<div class="text katalog-text">
			<center>
				<h2 class="text__title"><?php echo $resultSearch['two-title-page']; ?></h2>
				
					<a href="<?php echo $resultSearch['linkPartner']; ?>"><div class="go" name="go">Регистрация</div></a>
				
			</center>
		</div>
		<div class="state">
			<p><strong>Вид заработка: <?php echo $resultSearch['type']; ?></strong></p>
			<p>
				 <?php echo $resultSearch['one-text']; ?>
			</p>
		</div>
		<div class="plus-minus">
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Плюсы:</h3>
				<ul class="plus-minus__ul">
					 <?php echo $resultSearch['plus']; ?>
				</ul>
			</div>
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Минусы:</h3>
				<ul class="plus-minus__ul">
					<?php echo $resultSearch['minus']; ?>
				</ul>
			</div>
		</div>
		<div class="level">
			<div class="level__element">
				<h3 class="level__title">Уровень вашего дохода:</h3>
				<p class="level__text"><?php echo $resultSearch['money-level']; ?></p>
			</div>
			<div class="level__element">
				<h3 class="level__title">Сложность получения прибыли:</h3>
				<p class="level__text"><?php echo $resultSearch['hard-level']; ?></p>
			</div>
		</div>
		<div class="state">
			<p>
				<?php echo $resultSearch['two-text']; ?>
			</p>
			
		</div>
		<center>
			<div class="date">
				<a href="<?php echo $resultSearch['coments']; ?>"><p class="date__element rang">Отзывы</p></a>
				<p class="date__element number"><?php echo $resultSearch['date']; ?></p>
			</div>
			<div class="rec">
				<div class="rec__block">
					<?php
					$conect = mysqli_connect('localhost','root','','posting');
					$state = mysqli_query($conect,"SELECT `name`,`image`,`title-katalog`,`description-katalog` FROM `post` ORDER BY `date` DESC LIMIT 4");
					while ($result_state = mysqli_fetch_array($state)){
						$array[0] = "arbitraj";
						$array[1] = "dlya-novichkov";
						$array[2] = "freelance";
						$array[3] = "mobilnye-prilozheniya";
						$array[4] = "site";
						$array[5] = "passivnyj";
						for($a = 0; $a<=5; $a++){
							$dir = '../'.$array[$a].'/';
							if($handle = opendir($dir)){
								while(false !== ($file = readdir($handle))){
									if($file != "." && $file != ".." && $file == $result_state['name'].'.php'){
										$img = str_replace("/post","",$result_state['image']);
										echo
										'<div class="rec__element">
											<a href="'.$dir.$result_state['name'].'.php">
												<div class="rec__img" style="background-image:url(.'.$img.');"></div>
												<p class="rec__text">'.$result_state['name'].'</p>
											</a>
										</div>';
									}
								}
							}
						}
					}
					?>
				</div>
			</div>
		</center>
	</section>
	<footer class="footer">
		<div class="footer__center">
			
			<div class = "footer__element">
				<h2 class="footer__text">О проекте</h2>
				<p class="footer__text">
					<span class="footer__text big-red">BigMoney</span> - это проект, который помогает пользователям
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
<script>
	var imgId = document.getElementById('image');
	var img = '<?php echo $resultSearch['image']; ?>';
	var img = img.replace("/post",".");
	imgId.style.backgroundImage = 'url('+img+')';
	imgId.style.backgroundSize = '100% 100%';
	imgId.style.backgroundRepeat = 'no-repeat';
	imgId.style.backgroundPosition = 'center';
</script>
</body>
</html>
