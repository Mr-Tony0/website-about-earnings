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
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `title-braus` varchar(70) DEFAULT NULL,
  `description-braus` varchar(140) DEFAULT NULL,
  `title-katalog` varchar(70) DEFAULT NULL,
  `description-katalog` varchar(140) DEFAULT NULL,
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
(55, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'echo $table;', 'echo $table;', './post/img/20200213181510726.jpg', 'test1', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', '', '', '', 'Выбирите вид заработка', 'on', '', ''),
(56, 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', 'test2', 'echo $table;', 'echo $table;', './post/img/20200213181552703.jpg', 'test2', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', '', '', '', 'Выбирите вид заработка', '', 'on', ''),
(57, 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'test3', 'echo $table;', 'echo $table;', './post/img/20200213181630894.jpg', 'test3', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', 'on', '', '', 'Выбирите вид заработка', '', '', ''),
(58, 'test4', 'test4', 'test4', 'test4', 'test4', 'test4', 'test4', 'echo $table;', 'echo $table;', './post/img/20200213181703202.jpg', 'test4', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', '', '', 'on', 'Выбирите вид заработка', '', '', ''),
(59, 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'echo $table;', 'echo $table;', './post/img/20200213181743160.jpg', 'test5', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', '', 'on', '', 'Выбирите вид заработка', '', '', ''),
(60, 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test5', 'echo $table;', 'echo $table;', './post/img/20200213181813602.jpg', 'test5', 'echo $table;', 'echo $table;', 'Выбирите доходность', 'Выбирите сложность', '2020-02-05', '', '', '', '', 'Выбирите вид заработка', '', '', 'on');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
