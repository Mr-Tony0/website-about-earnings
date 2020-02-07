-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 07 2020 г., 09:00
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
  `title-braus` varchar(70) NOT NULL,
  `description-braus` varchar(140) NOT NULL,
  `title-katalog` varchar(70) NOT NULL,
  `description-katalog` varchar(140) NOT NULL,
  `one-title-page` varchar(56) NOT NULL,
  `two-title-page` varchar(56) NOT NULL,
  `one-text` text NOT NULL,
  `two-text` text NOT NULL,
  `image` text NOT NULL,
  `linkPartner` text NOT NULL,
  `plus` text,
  `minus` text,
  `money-level` varchar(56) NOT NULL,
  `hard-level` varchar(56) NOT NULL,
  `date` date NOT NULL,
  `coments` text,
  `one-categor` varchar(56) DEFAULT NULL,
  `two-categor` varchar(56) DEFAULT NULL,
  `free-categor` varchar(56) DEFAULT NULL,
  `type` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
