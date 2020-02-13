-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 13 2020 г., 19:14
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
-- Структура таблицы `soft`
--

CREATE TABLE `soft` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `title-braus` varchar(70) NOT NULL,
  `description-braus` varchar(140) NOT NULL,
  `title-katalog` varchar(70) NOT NULL,
  `description-katalog` varchar(140) NOT NULL,
  `one-title-page` varchar(56) NOT NULL,
  `two-title-page` varchar(56) NOT NULL,
  `one-text` text NOT NULL,
  `two-text` text,
  `image` text NOT NULL,
  `linkPartner` text NOT NULL,
  `plus` text NOT NULL,
  `minus` text NOT NULL,
  `date` date DEFAULT NULL,
  `coments` text,
  `brous` varchar(4) NOT NULL,
  `pay` varchar(4) NOT NULL,
  `vpn` varchar(4) NOT NULL,
  `proxy` varchar(4) NOT NULL,
  `host` varchar(4) NOT NULL,
  `textWork` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `soft`
--

INSERT INTO `soft` (`id`, `name`, `title-braus`, `description-braus`, `title-katalog`, `description-katalog`, `one-title-page`, `two-title-page`, `one-text`, `two-text`, `image`, `linkPartner`, `plus`, `minus`, `date`, `coments`, `brous`, `pay`, `vpn`, `proxy`, `host`, `textWork`) VALUES
(19, 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test5', 'echo $table;', 'echo $table;', './soft/img/20200213182016881.jpg', 'test5', 'echo $table;', 'echo $table;', '2020-02-05', '', 'on', '', '', '', '', ''),
(20, 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test5', 'echo $table;', 'echo $table;', './soft/img/20200213182314935.jpg', 'test7', 'echo $table;', 'echo $table;', '2020-02-05', '', '', '', '', '', '', 'on'),
(21, 'test8', 'test8', 'test8', 'test8', 'test8', 'test8', 'test8', 'echo $table;', 'echo $table;', './soft/img/20200213182459421.jpg', 'test8', 'echo $table;', 'echo $table;', '2020-02-05', '', '', '', '', '', 'on', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `soft`
--
ALTER TABLE `soft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `soft`
--
ALTER TABLE `soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
