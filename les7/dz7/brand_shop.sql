-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2021 г., 01:53
-- Версия сервера: 5.7.33
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brand_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `id_user`, `id_product`, `count`) VALUES
(6, 2, 2, 2),
(7, 3, 3, 7),
(38, 1, 2, 2),
(40, 1, 8, 10),
(41, 1, 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `size`, `price`, `img`, `description`, `count`) VALUES
(1, 'MANGO PEOPLE T-SHIRT', 10, 52, 'rectangle_5_copy_3_1209.jpg', 'dfgdfgdfgd fgdfgbvxcvbcvbcvbc vbeertjghjghjkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 10),
(2, 'MANGO PEOPLE T-SHIRT', 10, 53, 'rectangle_5_copy_1193.jpg', 'dfgdfgdfgdfgd fgbvxcvbcvb cvbcvbeertjghjghjkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkk kkkkkkkkkkkkkkkkkkk kkkkkkkkkkkk kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 10),
(3, 'MANGO PEOPLE T-SHIRT', 10, 54, 'rectangle_5_copy_1201.jpg', 'ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg ggggg', 15),
(4, 'MANGO PEOPLE T-SHIRT', 10, 55, 'rectangle_5_copy_1240.jpg', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 15),
(5, 'MANGO PEOPLE T-SHIRT', 10, 56, 'rectangle_5_copy_1248.jpg', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 15),
(6, 'MANGO PEOPLE T-SHIRT', 10, 57, 'rectangle_5_copy_1256.jpg', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 15),
(7, 'MANGO PEOPLE T-SHIRT', 10, 58, 'rectangle_5_copy_1264.jpg', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 15),
(8, 'MANGO PEOPLE T-SHIRT', 10, 59, 'rectangle_5_copy_1272.jpg', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `title`, `id_product`) VALUES
(1, 1, 'hfghffghfgh', 1),
(2, 1, 'sdfsdf', 1),
(3, 4, 'очень хороша', 1),
(4, 5, 'неплохо', 2),
(5, 1, 'dfdfgdfgdfgdfgdfgdfgdfgdfgdfgg', 1),
(6, 1, 'dfdfgdfgdfgdfgdfgdfgdfgdfgdfgg', 1),
(7, 1, 'fghfghr tyg rytyu yui', 4),
(9, 1, 'reviews', 1),
(10, 1, 'dfgdfg', 1),
(12, 1, 'dfgdfg', 3),
(13, 1, 'dfgdfg', 3),
(14, 1, 'yuiyui', 3),
(15, 1, 'dfgdfg', 8),
(16, 1, 'fghfghfgh', 2),
(17, 1, 'dfgdfgdfgdfgdertertert', 6),
(18, 1, 'пропро', 6),
(57, 1, 'werwerwer', 1),
(58, 1, 'dfgdfgdgf', 1),
(59, 1, 'dfgdfg', 1),
(60, 1, 'dfgdfg', 1),
(61, 1, 'dfgdfg', 1),
(62, 1, 'dfgdfgdfg', 5),
(63, 1, 'dfgdfg', 5),
(64, 1, 'dfgdfg', 5),
(65, 1, 'dfgdfg', 5),
(66, 1, 'dfgdfg', 5),
(67, 1, 'dfgdfg', 2),
(68, 1, 'dfg', 2),
(69, 1, 'dfg', 2),
(70, 1, 'dfg', 2),
(71, 1, 'dfg', 2),
(72, 1, 'dfg', 2),
(73, 1, 'dfg', 4),
(74, 1, 'dg', 4),
(75, 1, 'dfg', 4),
(76, 1, '', 1),
(77, 1, 'пропропро', 2),
(78, 1, 'fghfgh', 4),
(79, 1, 'fghfgh', 4),
(80, 1, 'fghfgh', 4),
(81, 1, 'fghfh', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `login`, `password`) VALUES
(1, 'Алекс', 'Андреев', 'Andr', '12345'),
(2, 'Алекс', 'Андреев', 'urand', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
