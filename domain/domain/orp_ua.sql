-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2021 г., 15:28
-- Версия сервера: 5.5.63-MariaDB
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
-- База данных: `orp.ua`
--

-- --------------------------------------------------------

--
-- Структура таблицы `base_car`
--

CREATE TABLE `base_car` (
  `nomer_car` int(10) NOT NULL,
  `nomer_nick` int(10) NOT NULL,
  `model` char(20) NOT NULL,
  `date_buy` date NOT NULL,
  `probeg` float NOT NULL,
  `price_h` float NOT NULL,
  `city` char(15) NOT NULL,
  `stan_car` char(100) NOT NULL,
  `descriptionn` text NOT NULL,
  `photo` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `base_car`
--

INSERT INTO `base_car` (`nomer_car`, `nomer_nick`, `model`, `date_buy`, `probeg`, `price_h`, `city`, `stan_car`, `descriptionn`, `photo`) VALUES
(46, 16, 'Tesla A class', '2021-01-12', 367, 45, 'Чернівці', 'Чудовий стан машини, без проблем готова їхати хочь до Київа.', 'Чудовий стан машини, без проблем готова їхати хочь до Київа. Не потрапляла ні в які аварії.', '01.jpg'),
(5785, 20, 'Mitsubishi Lancer', '2007-04-05', 140856, 40, 'Львів', 'На ходу, може ще довго проїхати вразі ужного догляду', 'Без ДТП не обійшлась, перед машини пошкоджений, останній раз СТО проходила 20.03 числа і все гаразд.', 'vid45688233_uid60146a980611e_640x480.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id_img` int(10) NOT NULL,
  `nomer_car` int(10) NOT NULL,
  `name_img` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id_img`, `nomer_car`, `name_img`) VALUES
(55, 46, 'dsad.jpg'),
(56, 46, 'dasd.jpg'),
(57, 46, 'sada.jpeg'),
(412, 5785, '4a1fdc1s-480.jpg'),
(2186, 5785, '058cfd4b-ba5f-4035-b689-f322924b6583.JPG'),
(2756, 5785, 'mitsubishi-lancer-x-sportback-07.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE `person` (
  `nomer_nick` int(10) NOT NULL,
  `nick` char(10) CHARACTER SET utf8 NOT NULL,
  `password` char(10) CHARACTER SET utf8 NOT NULL,
  `name` char(10) CHARACTER SET utf8 NOT NULL,
  `surname` char(10) CHARACTER SET utf8 NOT NULL,
  `patronymic` char(15) CHARACTER SET utf8 NOT NULL,
  `telephon` char(10) CHARACTER SET utf8 NOT NULL,
  `email` char(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`nomer_nick`, `nick`, `password`, `name`, `surname`, `patronymic`, `telephon`, `email`) VALUES
(16, 'Dask', '1', 'Микита', 'Вогнер', 'Іванович', '+380955736', 'vog@gmail.com'),
(17, 'Riko', 'riko', 'Андрій', 'Братінвник', 'Андрійвич', '+380832676', 'ryadko@gmail.com'),
(18, 'Nero', 'nero', 'Едуард', 'Роненко', 'Васильович', '+380984565', 'behpo@gmail.com'),
(19, 'xXx_ToxsoN', 'xXxxXx', 'Вася', 'Пупкін', 'Володимирович', '+380832676', 'toxsik123@gmail.com'),
(20, 'Valya', '1234', 'Василь', 'Робинович', 'Константинович', '+380952436', 'Valya@gmail.com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `base_car`
--
ALTER TABLE `base_car`
  ADD PRIMARY KEY (`nomer_car`),
  ADD KEY `nomer_nick` (`nomer_nick`);

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `nomer_car` (`nomer_car`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`nomer_nick`),
  ADD KEY `nomer_nick` (`nomer_nick`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id_img` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9267;

--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `nomer_nick` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `base_car`
--
ALTER TABLE `base_car`
  ADD CONSTRAINT `base_car_ibfk_1` FOREIGN KEY (`nomer_nick`) REFERENCES `person` (`nomer_nick`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`nomer_car`) REFERENCES `base_car` (`nomer_car`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
