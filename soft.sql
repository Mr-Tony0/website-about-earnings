-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 20 2020 г., 08:38
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
(22, 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', './soft/img/20200215142441177.jpg', 'test5', 'test5', 'test5', '2020-02-15', '', 'on', '', '', '', '', ''),
(23, 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test6', 'test5', 'test5', './soft/img/20200215142531679.jpg', 'test6', 'test5', 'test5', '2020-02-15', '', 'on', '', '', '', '', ''),
(24, 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', 'test7', './soft/img/20200215142655740.jpg', 'test7', 'test7', 'test7', '2020-02-15', '', '', '', '', '', '', 'on'),
(25, 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', './soft/img/20200215143949566.jpg', 'newtest3', 'newtest3', 'newtest3', '2020-02-15', '', '', '', '', '', '', 'on'),
(26, 'reder', 'Это крутой заголовок', 'не менее крутой дескрипшин', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', 'newtest3', './soft/img/20200215145607733.jpg', 'newtest3', 'newtest3', 'newtest3', '2020-02-15', '', '', '', '', '', 'on', ''),
(27, 'testtttt', 'тестовый заголовок из сем ядра', 'тестовый дескрипшин из сем ядра', 'просто заголовок', 'просто дескрипшин', 'Как пить пиво и зарабатывать 100000000000 рублей в час', 'Заработок на leadbit без вложений', 'Заработок на leadbit без вложений', 'Заработок на leadbit без вложений', './soft/img/20200216063431706.jpg', 'Заработок на leadbit без вложений', 'Заработок на leadbit', 'Заработок', '2020-02-15', 'Заработок на leadbit без вложений', '', '', '', '', 'on', ''),
(28, 'testttttуу', 'тестовый заголовок из сем ядра', 'тестовый дескрипшин из сем ядра', 'просто заголовок', 'просто дескрипшин', 'Как пить пиво и зарабатывать 100000000000 рублей в час', 'Заработок на leadbit без вложений', 'Заработок на leadbit без вложений', 'Заработок на leadbit без вложений', './soft/img/20200216063658364.jpg', 'Заработок на leadbit без вложений', 'Заработок на leadbit', 'Заработок', '2020-02-15', 'Заработок на leadbit без вложений', '', '', '', '', 'on', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
