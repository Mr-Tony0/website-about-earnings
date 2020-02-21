-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2020 г., 10:01
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `posting`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `title-braus` varchar(70) DEFAULT NULL,
  `description-braus` varchar(140) DEFAULT NULL,
  `title-katalog` varchar(60) NOT NULL,
  `description-katalog` varchar(120) NOT NULL,
  `one-title-page` varchar(56) DEFAULT NULL,
  `two-title-page` varchar(56) DEFAULT NULL,
  `one-text` text,
  `two-text` text,
  `image` text,
  `linkPartner` text,
  `plus` text,
  `minus` text,
  `money-level` varchar(56) DEFAULT NULL,
  `hard-level` varchar(56) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `coments` text,
  `site` varchar(16) DEFAULT NULL,
  `freelance` varchar(16) DEFAULT NULL,
  `arbit` varchar(16) DEFAULT NULL,
  `type` varchar(56) DEFAULT NULL,
  `newUser` varchar(16) DEFAULT NULL,
  `passiv` varchar(16) DEFAULT NULL,
  `mob` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `name`, `title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `money-level`, `hard-level`, `date`, `coments`, `site`, `freelance`, `arbit`, `type`, `newUser`, `passiv`, `mob`) VALUES
(77, 'Kwork', 'Как заработать на фриланс бирже Kwork', 'Расскажем как начать зарабатывать на фриланс бирже kwork.ru начинающим фрилансерам.', 'Российская фриланс биржа для новичков', 'Отличная биржа для начинающих, минимальная цена заказа начинается от 500 рублей, новичку легко взять заказ в работу', 'Биржа Kwork', 'Как зарабатывать на Kwork', 'Kwork - популярная фриланс биржа в России. Данный сервис подойдет для начинающих фрилансеров и для заказчиков которые могут воспользоваться услугами исполнителей всего за 500 рублей.', 'На площадке Kwork можно искать заказы самому или создать \"кворк\", тогда заказчики смогут сами вас находить.\r\nДля работы на этой площадке вам необходимо зарегистрироваться. После регистрации в разделе \"мои кворки\" создать кворк с описанием ваших услуг и цены работы. Что-бы найти заказчика самому перейдите в раздел \"биржа\", где вам будет доступен перечень заказчиков которым нужны ваши услуги.</br></br>\r\nЧто бы заказчики выбирали именно вас нужно загрузить портфолио с вашими работами, что бы это сделать перейдите в раздел \"Мои работы\" и нажмите кнопу загрузки, так заказчик сможет оценить вас как исполнителя.', './post/img/20200221082602270.jpg', 'https://kwork.ru/ref/924633', '<li>Легко найти заказ новичку</li>\r\n<li>Большой перечень услуг</li>\r\n<li>Дешевые услуги для заказчика</li>\r\n<li>Мгновенные выплаты</li>\r\n<li>Отсутствие комиссий при выводе</li>', '<li>Комиссия за выполненный заказ 100 рублей</li>\r\n<li>Сложно найти высокооплачиваемый заказ</li>', 'Средняя', 'Нормально', '2020-02-21', '', '', 'on', '', 'Для новичков', '', '', ''),
(78, 'globus', 'Как зарабатывать деньги на проекте globus, сколько можно заработать?', 'Полезная информация о заработке на globus. Расскажем как зарабатывать на globus.', 'Как заработать новичку на проекте globus', 'globus - рекламная площадка для заработка на просмотре рекламы.', 'Заработок на globus', 'Как заработать деньги на проекте globus?', 'Проект Globus - это рекламная площадка для заработка. После прохождения регистрации, вы сможете либо просматривать рекламу и зарабатывать на это деньги, либо самим закупать рекламу в качестве заказчика.', 'Регистрация на globus мало чем отличается от любой другой регистрации на каком либо проекте.\r\nНа сайте ищем кнопку \"Создать аккаунт\", после заполняем все поля.\r\n</br></br>\r\nДля заработка необходимо ознакомится с интерфейсом, после чего установить приложение и все, заработок пошел.\r\nДля заработка вам достаточно не закрывать приложение, тогда реклама сама будет отображаться у вас на устройстве.\r\nВ среднем за час такого заработка можно заработать около 0.5$.\r\n</br></br>\r\nВывод можно осуществлять на различные платежные системы, в том числе на карту.', './post/img/20200221094107858.jpg', 'https://globus-inter.com/ru/land/people?invite=5529487', '<li>Легкий заработок</li>\r\n<li>быстрые выплаты</li>\r\n<li>Комиссия меньше 1%</li>\r\n<li>Доступен вывод на карту</li>', '<li>Низкий уровень заработка</li>', 'Низкая', 'Легко', '2020-02-21', '', '', '', '', 'Просмотр рекламы', 'on', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
