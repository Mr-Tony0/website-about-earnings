-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 20 2020 г., 08:37
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
-- Структура таблицы `caze`
--

CREATE TABLE `caze` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `title-braus` varchar(70) DEFAULT NULL,
  `description-braus` varchar(140) DEFAULT NULL,
  `title-katalog` varchar(60) DEFAULT NULL,
  `description-katalog` varchar(120) DEFAULT NULL,
  `one-title-page` varchar(56) DEFAULT NULL,
  `two-title-page` varchar(56) DEFAULT NULL,
  `free-title-page` varchar(56) DEFAULT NULL,
  `foo-title-page` varchar(56) DEFAULT NULL,
  `one-text` text,
  `two-text` text,
  `free-text` text,
  `foo-text` text,
  `image` text,
  `one-linkPartner` text,
  `two-linkPartner` text,
  `plus` text,
  `minus` text,
  `money-level` varchar(56) DEFAULT NULL,
  `hard-level` varchar(56) DEFAULT NULL,
  `type` varchar(56) NOT NULL,
  `date` date DEFAULT NULL,
  `coments` text,
  `newUser` varchar(4) DEFAULT NULL,
  `passiv` varchar(4) DEFAULT NULL,
  `arbit` varchar(4) DEFAULT NULL,
  `soc` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `caze`
--

INSERT INTO `caze` (`id`, `name`, `title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `free-title-page`, `foo-title-page`, `one-text`, `two-text`, `free-text`, `foo-text`, `image`, `one-linkPartner`, `two-linkPartner`, `plus`, `minus`, `money-level`, `hard-level`, `type`, `date`, `coments`, `newUser`, `passiv`, `arbit`, `soc`) VALUES
(6, 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', 'newtest', './keys/img/20200215143510555.jpg', 'newtest', 'newtest', 'newtest', 'newtest', 'Низкая', 'Нормально', 'Партнерские программы', '2020-02-15', '', 'on', '', '', ''),
(7, 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', './keys/img/20200215145338119.jpg', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'Низкая', 'Сложно', 'Написание отзывов', '2020-02-15', '', 'on', '', '', ''),
(10, 'rederуу', 'Это крутой заголовок', 'не менее крутой дескрипшин', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', './keys/img/20200215150014646.jpg', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'Низкая', 'Сложно', 'Создание сайтов', '2020-02-15', '', '', '', '', 'on'),
(11, 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'цукваы', './keys/img/20200218094808782.jpg', 'цукваы', 'цукваы', 'цукваы', 'цукваы', 'Средняя', 'Нормально', 'Пассивный заработок', '2020-02-05', '', '', '', 'on', ''),
(12, 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы1', 'цукваы', 'цукваы', 'цукваы', './keys/img/20200218095351114.jpg', 'цукваы1', 'цукваы1', 'цукваы', 'цукваы', 'Средняя', 'Нормально', 'Пассивный заработок', '2020-02-05', '', '', 'on', '', ''),
(13, 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы12', 'цукваы', 'цукваы', 'цукваы', './keys/img/20200218100035187.jpg', 'цукваы12', 'цукваы12', 'цукваы', 'цукваы', 'Средняя', 'Нормально', 'Пассивный заработок', '2020-02-05', '', 'on', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `caze`
--
ALTER TABLE `caze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `caze`
--
ALTER TABLE `caze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
