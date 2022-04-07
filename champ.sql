-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2021 г., 21:56
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `basketlake`
--

-- --------------------------------------------------------

--
-- Структура таблицы `champ`
--

CREATE TABLE `champ` (
  `id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `champ`
--

INSERT INTO `champ` (`id`, `date`, `image`, `text`) VALUES
(1, '2021-11-09 14:41:14', 'pic/champ/champ-1.jpg', '2020 Champion'),
(2, '2021-11-09 14:41:14', 'pic/champ/champ-2.jpg', '2010 Champion'),
(3, '2021-11-09 14:41:14', 'pic/champ/champ-3.jpg', '2009 Champion'),
(4, '2021-11-09 14:41:14', 'pic/champ/champ-4.jpg', '2002 Champion'),
(5, '2021-11-09 14:41:14', 'pic/champ/champ-5.jpg', '2001 Champion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
