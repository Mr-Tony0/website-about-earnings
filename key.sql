-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2020 г., 06:36
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
-- Структура таблицы `key`
--

CREATE TABLE `key` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `title-braus` varchar(70) NOT NULL,
  `description-braus` varchar(140) NOT NULL,
  `title-katalog` varchar(60) NOT NULL,
  `description-katalog` varchar(120) NOT NULL,
  `one-title-page` varchar(56) NOT NULL,
  `two-title-page` varchar(56) NOT NULL,
  `free-title-page` varchar(56) DEFAULT NULL,
  `one-text` text NOT NULL,
  `two-text` text NOT NULL,
  `free-text` text,
  `foo-text` text,
  `one-image` text NOT NULL,
  `image` text NOT NULL,
  `two-image` text NOT NULL,
  `one-linkPartner` text NOT NULL,
  `two-linkPartner` text NOT NULL,
  `plus` text NOT NULL,
  `minus` text NOT NULL,
  `money-level` varchar(56) NOT NULL,
  `hard-level` varchar(56) NOT NULL,
  `date` date DEFAULT NULL,
  `coments` text,
  `newUser` varchar(4) DEFAULT NULL,
  `passiv` varchar(4) DEFAULT NULL,
  `arbit` varchar(4) DEFAULT NULL,
  `soc` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `key`
--
ALTER TABLE `key`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `key`
--
ALTER TABLE `key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
