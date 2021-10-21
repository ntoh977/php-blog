-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 21 2021 г., 19:19
-- Версия сервера: 10.5.11-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prictik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(200) NOT NULL,
  `page_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Message` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_comments` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `Name`, `Email`, `images`, `Message`, `date_comments`) VALUES
(1, '2', 'ыфв', 'ntoh955@gmail.com', '', '', 'October  20,  2021 4:21 pm'),
(2, '', '1', '1', '', '1', 'October  20,  2021 6:07 pm'),
(3, '', '1', '1', '', '1', 'October  20,  2021 6:07 pm'),
(4, '', '1', '1', '', '1', 'October  20,  2021 6:09 pm'),
(5, '', '1', '1', '', '1', 'October  20,  2021 6:09 pm'),
(6, '', 'rr', 'rrrrrrrrrr', '', 'rrr', 'October  20,  2021 6:11 pm'),
(7, '', 'rr', 'rrrrrrrrrr', '', 'rrr', 'October  20,  2021 6:11 pm'),
(8, '', 'yyyyyyy', 'yyyyyy', '', 'yyyyy', 'October  20,  2021 6:15 pm'),
(9, '', 'yyyyyyy', 'yyyyyy', '', 'yyyyy', 'October  20,  2021 6:15 pm'),
(10, '', '1', '1', '', '1', 'October  20,  2021 6:30 pm'),
(11, '', '1', '1', '', '1', 'October  20,  2021 6:30 pm'),
(12, '', '7', '7', '', '7', 'October  20,  2021 6:34 pm'),
(13, '', '7', '7', '', '7', 'October  20,  2021 6:34 pm'),
(14, NULL, '1', '1', NULL, '1', 'October  21,  2021'),
(15, NULL, '1', '1', NULL, '1', 'October  21,  2021'),
(16, NULL, '12', '12', NULL, '12', 'October  21,  2021'),
(17, NULL, '12', '12', NULL, '12', 'October  21,  2021'),
(18, NULL, 'всмччсм чсмсчм', 'ntoh955@gmail.com', NULL, '1212121212121212121212121212121212121212121212121212121212121212121212', 'October  21,  2021'),
(19, NULL, 'всмччсм чсмсчм', 'ntoh955@gmail.com', NULL, '1212121212121212121212121212121212121212121212121212121212121212121212', 'October  21,  2021'),
(20, NULL, 'йц', 'йц', NULL, 'йц', 'October  21,  2021'),
(21, NULL, 'йц', 'йц', NULL, 'йц', 'October  21,  2021'),
(22, NULL, '999', '999', NULL, '9', 'October  21,  2021'),
(23, NULL, '999', '999', NULL, '9', 'October  21,  2021'),
(24, NULL, '12', '12', NULL, '12', 'October  21,  2021'),
(25, NULL, '12', '12', NULL, '12', 'October  21,  2021'),
(26, '3', 'всмччсм чсмсчм', 'ntoh955@gmail.com', '', 'йц', 'October  21,  2021 12:23 pm'),
(27, '3', 'Толяdsa', 'ntoh955@gmail.com', '78b3ef3054aed0f4906f1f4f0962186b.jpg', '', 'October  21,  2021 12:24 pm'),
(28, '3', '12', 'ntoh955@gmail.com', '', 'we', 'October  21,  2021 12:26 pm'),
(29, '3', 'всмччсм чсмсчм', 'ntoh955@gmail.com', '', 'sd', 'October  21,  2021 12:28 pm'),
(30, '3', 'всмччсм чсмсчм', 'ntoh955@gmail.com', '', 'цу', 'October  21,  2021 12:29 pm'),
(31, '3', 'йц', 'ntoh955@gmail.com', '18714352.jpg', 'ыф', 'October  21,  2021 12:29 pm'),
(32, '3', '12', 'ntoh955@gmail.com', '9fcf0c_wmark.jpg', 'ds', 'October  21,  2021 12:41 pm'),
(33, '3', 'qqw', 'ntoh955@gmail.com', '20995ba018559995385b9094a49a9f14.jpg', 'qw', 'October  21,  2021 12:43 pm'),
(34, '3', 'sdf', 'ntoh955@gmail.com', '9fcf0c_wmark.jpg', 'sd', 'October  21,  2021 12:46 pm'),
(35, '1', 'sda', 'ntoh955@gmail.com', '', 'sad', 'October  21,  2021 12:57 pm'),
(36, '1', 'всмччсм чсмсчм', 'ntoh955@gmail.com', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'asd', 'October  21,  2021 12:57 pm'),
(37, '1', 'as', 'ntoh955@gmail.com', '9fcf0c_wmark.jpg', 'as', 'October  21,  2021 1:00 pm'),
(38, '1', 'sd', 'ntoh955@gmail.com', '9fcf0c_wmark.jpg', '', 'October  21,  2021 1:22 pm'),
(39, '5', 'sad', 'ntoh955@gmail.com', '', 'sad', 'October  21,  2021 1:36 pm'),
(40, '5', '\\xz', 'ntoh955@gmail.com', '18714352.jpg', 'zx', 'October  21,  2021 1:37 pm'),
(41, '14', 'всмччсм чсмсчм', 'ntoh955@gmail.com', '', 'sdf', 'October  21,  2021 3:53 pm');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imag` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texts_h` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`title`, `imag`, `texts_h`) VALUES
('df', '9fcf0c_wmark.jpg', 'df');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `title` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_item`
--

INSERT INTO `menu_item` (`id`, `title`, `link`, `parent_id`, `position`) VALUES
(1, '1', '1.html', 0, 1),
(2, '2', '2.html', 0, 2),
(3, '11', '11.html', 1, 1),
(4, '12', '12.html', 1, 2),
(5, '21', '21.html', 2, 1),
(6, '22', '22.html', 2, 2),
(7, '3', '3.html', 0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `practika`
--

CREATE TABLE `practika` (
  `id` int(200) NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texts` varchar(509) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catigory` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `practika`
--

INSERT INTO `practika` (`id`, `title`, `img`, `texts`, `catigory`) VALUES
(1, '1', '62.jpg', '3', 'volvo'),
(2, '1', '62.jpg', '3', 'volvo'),
(3, '1', '62.jpg', '3', 'volvo'),
(4, '', '', '', ''),
(5, '1', '', 'kj', NULL),
(6, '1', '', '1', ''),
(7, '1', '', '2', ''),
(8, '1', '', '1', ''),
(9, '1', '', '1', ''),
(10, '1', '', '1', ''),
(11, '1', '', '1', 'volvo'),
(12, '12', '', '12', 'saab'),
(13, '1', '', '1', ''),
(14, '7', '', '7', ''),
(15, 'as', '62.jpg', 'as', 'volvo'),
(16, 'qw', 'healthy_snacks.jpg', 'qw', ''),
(17, '12', '78b3ef3054aed0f4906f1f4f0962186b.jpg', '12', 'volvo');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `slider_image`) VALUES
(3, 'e78784fe6764dbc88ddb9eac8a50ec2f_l.jpg'),
(4, '67990463-0456-4935-acc0-b48284abf1ea.jpg'),
(5, 'Безымянный.jpg'),
(6, '18714352.jpg'),
(7, '67990463-0456-4935-acc0-b48284abf1ea.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `table`
--

CREATE TABLE `table` (
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texts` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `background` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_text` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cifre` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `table`
--

INSERT INTO `table` (`title`, `imag`, `texts`, `id`, `background`, `color_text`, `cifre`) VALUES
('name', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'tttxxx', 1, NULL, NULL, ' '),
('name', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'tttxxx', 2, NULL, NULL, ' '),
('name', '62.jpg', 'tttxxx', 3, NULL, NULL, ' October  14,  2021'),
('name', '62.jpg', 'tttxxx', 4, NULL, NULL, ' October  14,  2021'),
('name', '34185252.jpg', 'tttxxx', 5, NULL, NULL, ' October  14,  2021'),
('name', '34185252.jpg', 'tttxxx', 6, NULL, NULL, ' October  14,  2021'),
('name', 'dise-o-sin-titulo-2-copia-11.png.jpeg', 'tttxxx', 7, NULL, NULL, ' October  14,  2021'),
('name', 'dise-o-sin-titulo-2-copia-11.png.jpeg', 'tttxxx', 8, NULL, NULL, ' October  14,  2021'),
('name', '62.jpg', 'tttxxx', 9, NULL, NULL, ' October  14,  2021'),
('name', '62.jpg', 'tttxxx', 10, NULL, NULL, ' October  14,  2021'),
('name', '0299ac2db6d3ded2c190b5348429d5b6.jpg', 'tttxxx', 11, NULL, NULL, ' October  14,  2021'),
('name', '0299ac2db6d3ded2c190b5348429d5b6.jpg', 'tttxxx', 12, NULL, NULL, ' October  14,  2021'),
('name', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'tttxxx', 13, NULL, NULL, ' October  14,  2021'),
('name', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'tttxxx', 14, NULL, NULL, ' October  14,  2021'),
('name', '78b3ef3054aed0f4906f1f4f0962186b.jpg', 'tttxxx', 15, NULL, NULL, ' October  14,  2021'),
('name', '0299ac2db6d3ded2c190b5348429d5b6.jpg', 'tttxxx', 16, NULL, NULL, ' October  14,  2021'),
('name', '1184_2.jpeg', 'tttxxx', 17, NULL, NULL, ' October  14,  2021'),
('name', 'devushka-plyazh-more-469.jpg', 'tttxxx', 18, NULL, NULL, ' October  14,  2021');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `practika`
--
ALTER TABLE `practika`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `practika`
--
ALTER TABLE `practika`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
