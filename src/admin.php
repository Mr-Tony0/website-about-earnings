<?php
$conect = mysqli_connect('localhost','root','','posting');



if (isset($_POST['submit'])){	
	$session = 1;
	$post =  mysqli_real_escape_string($conect, trim($_POST['post']));
	$soft =  mysqli_real_escape_string($conect, trim($_POST['soft']));
	if($soft = 'on'){
		$table = 'soft';
		$direct = 'soft';
		$link = 'soft.php';
	}else{
		$table = 'post';
		$direct = 'post';
		$link = 'state.php';
	}
	$uploadImg = './'.$direct.'/img/';
	$apendImg=date('YmdHis').rand(100,1000).'.jpg'; 
	$uploadfile1 = "$uploadImg$apendImg";
	if(($_FILES['loadImg']['type'] == 'image/gif' || $_FILES['loadImg']['type'] == 'image/jpeg' || $_FILES['loadImg']['type'] == 'image/png') && ($_FILES['loadImg']['size'] != 0 and $_FILES['loadImg']['size']<=1512000)){ 
		if (move_uploaded_file($_FILES['loadImg']['tmp_name'], $uploadfile1)){
			$size = getimagesize($uploadfile1); 
			if ($size[0] < 5001 && $size[1]<15001){
				$addImg = 1;
			}else{
				echo '<p style="background:red; color:white; margin:0;">Загружаемое изображение превышает допустимые нормы (ширина не более - 500; высота не более 1500)</p>';
				unlink($uploadfile1); 
			} 
		} else {
			echo '<p style="background:red; color:white; margin:0;">изображение не загружено попробуйте снова!</p>';
		} 
	} else { 
	echo '<p style="background:red; color:white; margin:0;">Размер или тип изображения не коректны попрбуйте выбрать другой файл!</p>';
	}


	$name =  mysqli_real_escape_string($conect, trim($_POST['name']));
	$brausTtitle =  mysqli_real_escape_string($conect, trim($_POST['braus-title']));
	$brausDescript = mysqli_real_escape_string($conect, trim($_POST['braus-descript']));
	$katalogTtitle = mysqli_real_escape_string($conect, trim($_POST['katalog-title']));
	$katalogDescript = mysqli_real_escape_string($conect, trim($_POST['katalog-descript']));
	$onePageTitle = mysqli_real_escape_string($conect, trim($_POST['one-title']));
	$newUser = mysqli_real_escape_string($conect, trim($_POST['newUser']));
	$passiv = mysqli_real_escape_string($conect, trim($_POST['passiv']));
	$site = mysqli_real_escape_string($conect, trim($_POST['site']));
	$arbit = mysqli_real_escape_string($conect, trim($_POST['arbit']));
	$freelance = mysqli_real_escape_string($conect, trim($_POST['freelance']));
	$mob = mysqli_real_escape_string($conect, trim($_POST['mob']));
	$twoPageTitle = mysqli_real_escape_string($conect, trim($_POST['two-title']));
	$partner = mysqli_real_escape_string($conect, trim($_POST['partner']));
	$type = mysqli_real_escape_string($conect, trim($_POST['type']));
	$oneText = mysqli_real_escape_string($conect, trim($_POST['one-text']));
	$plus= mysqli_real_escape_string($conect, trim($_POST['plus']));
	$minus= mysqli_real_escape_string($conect, trim($_POST['minus']));
	$hard= mysqli_real_escape_string($conect, trim($_POST['hard']));
	$money= mysqli_real_escape_string($conect, trim($_POST['money']));
	$twoText= mysqli_real_escape_string($conect, trim($_POST['two-text']));
	$rang= mysqli_real_escape_string($conect, trim($_POST['rang']));
	$date= mysqli_real_escape_string($conect, trim($_POST['date']));
	$braus= mysqli_real_escape_string($conect, trim($_POST['braus']));
	$textWork= mysqli_real_escape_string($conect, trim($_POST['textWork']));
	$host= mysqli_real_escape_string($conect, trim($_POST['host']));
	$vpn= mysqli_real_escape_string($conect, trim($_POST['vpn']));
	$proxy= mysqli_real_escape_string($conect, trim($_POST['proxy']));
	$pay= mysqli_real_escape_string($conect, trim($_POST['pay']));
	$loadImg = $uploadfile1;
	
	if(!empty($brausTtitle) and !empty($brausDescript) and !empty($name) and !empty($katalogTtitle) and !empty($onePageTitle) and !empty($partner) and !empty($type) and !empty($oneText) and !empty($hard) and !empty($money) and !empty($loadImg) /*and strlen($brausTtitle)<2139*/){
		$query ="SELECT * FROM `".$table."` WHERE linkPartner = '$partner' AND name = '$name'";
		$data = mysqli_query($conect, $query);
		if(mysqli_num_rows($data) == 0 ){
			if($table == 'soft'){
				$querySoft ="INSERT INTO `".$table."` (`name`,`title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `date`, `coments`, `textWork`, `host`, `proxy`, `vpn`, `pay`, `brous`) VALUES('$name','$brausTtitle', '$brausDescript', '$katalogTtitle','$katalogDescript', '$onePageTitle', '$twoPageTitle', '$oneText', '$twoText', '$loadImg','$partner', '$plus', '$minus', '$date', '$rang', '$textWork', '$host', '$proxy', '$vpn', '$pay', '$braus')";
				mysqli_query($conect, $querySoft);
				//echo'фильм добавлен';
				mysqli_close($conect);
				header ('Location: '.$link.'');
				exit();
			}if($table == 'soft'){
				$queryPost ="INSERT INTO `".$table."` (`name`,`title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `money-level`, `hard-level`, `date`, `coments`, `site`, `freelance`, `arbit`, `type`, `newUser`, `passiv`, `mob`) VALUES('$name','$brausTtitle', '$brausDescript', '$katalogTtitle','$katalogDescript', '$onePageTitle', '$twoPageTitle', '$oneText', '$twoText', '$loadImg','$partner', '$plus', '$minus', '$money', '$hard', '$date', '$rang', '$site', '$freelance', '$arbit', '$type', '$newUser', '$passiv', '$mob')";
				mysqli_query($conect, $queryPost);
				//echo'фильм добавлен';
				mysqli_close($conect);
				header ('Location: '.$link.'');
				exit();
			}
		}
		else{
			if(mysqli_num_rows($data) != 0){
				echo '<p style="background:red; color:white; margin:0;">Такой фильм существует!</p>';
			}else{
				echo '<p style="background:red; color:white; margin:0;">файл не загружен!</p>';
			}
			
			
		}
	}else{
		echo'<p style="background:red; color:white; margin:0;">Поля заполненны не коректно!</p>';
		
	}
}

?>

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
<form method="POST" action=<?php echo $_SERVER['PHP_SELF'];?> enctype="multipart/form-data">
<?php
	$conect = mysqli_connect('localhost','root','','posting');
	if (isset($_POST['admin'])){
		
		$login = mysqli_real_escape_string($conect, trim($_POST['login']));
		$pass = mysqli_real_escape_string($conect, trim($_POST['pass']));
		$autorization = mysqli_query($conect, "SELECT `login`, `password` FROM `admin`");
		while ($result_autorization = mysqli_fetch_array($autorization)){
			if($login == $result_autorization['login'] and $pass == $result_autorization['password']){
				
				$session = 1;
				
			}else{
				echo'<p style="background:red; color:white; margin:0;">Не верный логин или пароль<p></br>
					<div class="column">
					<h2 class="column__title">Админ панель</h2>
					<p class="column__text">введите логин от админ панели</p>
					<input class="column__input" type = "text" name="login">
					<p class="column__text">введите пароль от админ панели</p>
					<input class="column__input" type = "password" name = "pass">
					<button class="column__button" type="submit" name="admin">войти</button>
					</div>
				';
				exit();
			}
		}
	}else{
		if($session == 1){ 
		
			echo '<section class="container">
		<div class="text katalog-text">
			<center>
				<div class="categories__block">
					<div class="categories__element">
						<input type="checkbox" name="post" id = "post">
						<span>Описание заработка</span>
					</div>
					<div class="categories__element">
						<input type="checkbox" name="soft" id = "soft">
						<span>Описание софта</span>
					</div>
				</div>
				<input class="text__input" type="text" name="name" placeholder="Введите имя файла"/></br></br>
				<input class="text__input" type="text" name="braus-title" placeholder="Введите заголовок для браузера"/></br></br>
				<input class="text__input" type="text" name="braus-descript" placeholder="Введите description для браузера"/></br></br>
				<input class="text__input" type="text" name="katalog-descript" placeholder="Введите description для каталога"/></br></br>
				<input class="text__input" type="text" name="katalog-title" placeholder="Введите заголовок для каталога"/></br></br>
				<input class="text__input" type="text" name="one-title" placeholder="Введите заголовок"/>
				<div class="categories" id="one">
					<h2 class="categories__title">Категории заработка</h2>
					<div class="categories__block">
						<div class="categories__element">
							<input type="checkbox" name="newUser">
							<span>Заработок для новичков</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="passiv">
							<span>Пассивный заработок</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="site">	
							<span>Заработок на сайте</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="arbit">
							<span>Арбитраж трафика</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="freelance">
							<span>Фриланс</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="mob">
							<span>Заработок на моб. приложениях</span>
						</div>
					</div>
				</div>
				<div class="categories" id="two">
					<h2 class="categories__title">Категории сервиса</h2>
					<div class="categories__block">
						<div class="categories__element">
							<input type="checkbox" name="braus">
							<span>Браузеры</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="textWork">
							<span>Работа с текстом</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="host">	
							<span>Хостинг</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="vpn">
							<span>VPN</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="proxy">
							<span>Proxy</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="pay">
							<span>Платежные системы</span>
						</div>
					</div>
				</div>
			</center>
		</div>
		<div class="previe">
			<p>Установите превью статьи:</p>
			<input type="file" name="loadImg" id="imgFile"/>
		</div>
		<div class="text katalog-text">
			<center>
				<input class="text__title" type="text" name="two-title" placeholder="Введите заголовок"/></br></br>
				<input type="text"name="partner"placeholder="Ссылка на регистрацию"/>
			</center>
		</div>
		<div class="state">
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
			
			<textarea class="state-text" type="text" name="one-text" placeholder="первый текст статьи"></textarea>
		</div>
		<div class="plus-minus">
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Плюсы:</h3>
				<ul  contenteditable="true" class="plus-minus__ul">
					<textarea class="size" type="text" name="plus" placeholder="Плюсы"></textarea>
				</ul>
			</div>
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Минусы:</h3>
				<ul  contenteditable="true" class="plus-minus__ul">
					<textarea class="size" type="text" name="minus" placeholder="Минусы"></textarea>
				</ul>
			</div>
		</div>
		<div class="level">
			<div class="level__element">
				<h3 class="level__title">Уровень вашего дохода:</h3>
				<div class="type">
					<select class="type__select" name="hard">
						<option>Выбирите сложность</option>
						<option>Легко</option>
						<option>Нормально</option>
						<option>Сложно</option>
					</select>
				</div>
			</div>
			<div class="level__element">
				<h3 class="level__title">Сложность получения прибыли:</h3>
				<div class="type">
						<select class="type__select" name="money">
							<option>Выбирите доходность</option>
							<option>Низкая</option>
							<option>Средняя</option>
							<option>Высокая</option>
						</select>
					</div>
			</div>
		</div>
		<div class="state">
			<textarea class="state-text" type="text" name="two-text" placeholder="Второй текст статьи"></textarea>
		</div>
		<center>
			<div class="date">
				<input type="text" class="date__element date__link" name="rang" placeholder="ссылка на отзывы(если есть)">
				<input class="date__element number" type="date" name="date"/>
			</div>
			<button name="submit">go</button>
		</center>
	</section>
	<script src="./js/jquery-3.3.1.js"></script>
	<script src="./js/checkbox.js"></script>
	<script src="./js/admin.js"></script>
	';
				exit();
	}else{
			echo'
					<div class="column">
					<h2 class="column__title">Админ панель</h2>
					<p class="column__text">введите логин от админ панели</p>
					<input class="column__input" type = "text" name="login">
					<p class="column__text">введите пароль от админ панели</p>
					<input class="column__input" type = "password" name = "pass">
					<button class="column__button" type="submit" name="admin">войти</button>
					</div>
				';exit();
	}
	}if($session == 1){ 
		
			echo '<section class="container">
		<div class="text katalog-text">
			<center>
				<div class="categories__block">
					<div class="categories__element">
						<input type="checkbox" name="post" id = "post">
						<span>Описание заработка</span>
					</div>
					<div class="categories__element">
						<input type="checkbox" name="soft" id = "soft">
						<span>Описание софта</span>
					</div>
				</div>
				<input class="text__input" type="text" name="name" placeholder="Введите имя файла"/></br></br>
				<input class="text__input" type="text" name="braus-title" placeholder="Введите заголовок для браузера"/></br></br>
				<input class="text__input" type="text" name="braus-descript" placeholder="Введите description для браузера"/></br></br>
				<input class="text__input" type="text" name="katalog-descript" placeholder="Введите description для каталога"/></br></br>
				<input class="text__input" type="text" name="katalog-title" placeholder="Введите заголовок для каталога"/></br></br>
				<input class="text__input" type="text" name="one-title" placeholder="Введите заголовок"/>
				<div class="categories" id="one">
					<h2 class="categories__title">Категории заработка</h2>
					<div class="categories__block">
						<div class="categories__element">
							<input type="checkbox" name="newUser">
							<span>Заработок для новичков</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="passiv">
							<span>Пассивный заработок</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="site">	
							<span>Заработок на сайте</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="arbit">
							<span>Арбитраж трафика</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="freelance">
							<span>Фриланс</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="mob">
							<span>Заработок на моб. приложениях</span>
						</div>
					</div>
				</div>
				<div class="categories" id="two">
					<h2 class="categories__title">Категории сервиса</h2>
					<div class="categories__block">
						<div class="categories__element">
							<input type="checkbox" name="braus">
							<span>Браузеры</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="textWork">
							<span>Работа с текстом</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="host">	
							<span>Хостинг</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="vpn">
							<span>VPN</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="proxy">
							<span>Proxy</span>
						</div>
						<div class="categories__element">
							<input type="checkbox" name="pay">
							<span>Платежные системы</span>
						</div>
					</div>
				</div>
			</center>
		</div>
		<div class="previe">
			<p>Установите превью статьи:</p>
			<input type="file" name="loadImg" id="imgFile"/>
		</div>
		<div class="text katalog-text">
			<center>
				<input class="text__title" type="text" name="two-title" placeholder="Введите заголовок"/></br></br>
				<input type="text"name="partner"placeholder="Ссылка на регистрацию"/>
			</center>
		</div>
		<div class="state">
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
			
			<textarea class="state-text" type="text" name="one-text" placeholder="первый текст статьи"></textarea>
		</div>
		<div class="plus-minus">
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Плюсы:</h3>
				<ul  contenteditable="true" class="plus-minus__ul">
					<textarea class="size" type="text" name="plus" placeholder="Плюсы"></textarea>
				</ul>
			</div>
			<div class="plus-minus__element">
				<h3 class="plus-minus__title">Минусы:</h3>
				<ul  contenteditable="true" class="plus-minus__ul">
					<textarea class="size" type="text" name="minus" placeholder="Минусы"></textarea>
				</ul>
			</div>
		</div>
		<div class="level">
			<div class="level__element">
				<h3 class="level__title">Уровень вашего дохода:</h3>
				<div class="type">
					<select class="type__select" name="hard">
						<option>Выбирите сложность</option>
						<option>Легко</option>
						<option>Нормально</option>
						<option>Сложно</option>
					</select>
				</div>
			</div>
			<div class="level__element">
				<h3 class="level__title">Сложность получения прибыли:</h3>
				<div class="type">
						<select class="type__select" name="money">
							<option>Выбирите доходность</option>
							<option>Низкая</option>
							<option>Средняя</option>
							<option>Высокая</option>
						</select>
					</div>
			</div>
		</div>
		<div class="state">
			<textarea class="state-text" type="text" name="two-text" placeholder="Второй текст статьи"></textarea>
		</div>
		<center>
			<div class="date">
				<input type="text" class="date__element date__link" name="rang" placeholder="ссылка на отзывы(если есть)">
				<input class="date__element number" type="date" name="date"/>
			</div>
			<button name="submit">go</button>
		</center>
	</section>
	<script src="./js/jquery-3.3.1.js"></script>
	<script src="./js/checkbox.js"></script>
	<script src="./js/admin.js"></script>
	';
	exit();}

?>	
</center>
</form>
<script src="./js/admin.js"></script>
</body>
</html>
