-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2018 г., 18:48
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `game_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `armor`
--

CREATE TABLE `armor` (
  `id_armor` int(9) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `quality` varchar(110) DEFAULT NULL,
  `reit` int(9) DEFAULT NULL,
  `armor` int(11) NOT NULL,
  `proch` int(9) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `pass` varchar(110) DEFAULT NULL,
  `img` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `armor`
--

INSERT INTO `armor` (`id_armor`, `title`, `quality`, `reit`, `armor`, `proch`, `hp`, `pass`, `img`) VALUES
(1, 'Iron helmet', 'low', 100, 60, 150, 50, 'nothing', 'Helmet_1.png'),
(2, 'Super helmet', 'medium', 200, 100, 200, 100, 'nothing', 'helmet_2.png'),
(3, 'Frozen helmet', 'legendary', 500, 400, 800, 700, 'Your attacks freeze an enemy', 'helmet_3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `enemies`
--

CREATE TABLE `enemies` (
  `id_enemy` int(9) NOT NULL,
  `title` varchar(110) DEFAULT NULL,
  `dmg` int(11) DEFAULT NULL,
  `hp` int(11) DEFAULT NULL,
  `Quality` varchar(110) DEFAULT NULL,
  `spawn` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `enemies`
--

INSERT INTO `enemies` (`id_enemy`, `title`, `dmg`, `hp`, `Quality`, `spawn`, `pass`, `img`) VALUES
(1, 'Krasser', 45, 100, 'Usual', 'Loc1', 'Heal him self for 25% from damage after attack', '2_1.png'),
(2, 'Krasser mage', 70, 200, 'Usual', 'Loc1', 'Bonus damage against demons', '1_1.png'),
(3, 'Krassp', 150, 500, 'mini-boss', 'Loc1 end', 'have 2 different spells', '3_1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id_item` int(9) NOT NULL,
  `title` varchar(250) NOT NULL,
  `Quality` varchar(110) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `img` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id_item`, `title`, `Quality`, `pass`, `img`) VALUES
(1, 'Heal flask', 'low', 'restore 20 hp in 5 seconds', 'heal.png'),
(2, 'Stamina flask', 'low', 'restores 20 stamina in 5 seconds', 'stamina.png'),
(3, 'Mana flask', 'low', 'restores 20 mana in 5 seconds', 'mana.png');

-- --------------------------------------------------------

--
-- Структура таблицы `weapons`
--

CREATE TABLE `weapons` (
  `id_weapon` int(9) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `quality` varchar(250) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `dmg` int(4) DEFAULT NULL,
  `speed` int(4) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `reit` int(16) DEFAULT NULL,
  `crit` int(9) DEFAULT NULL,
  `proch` int(9) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  `opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `weapons`
--

INSERT INTO `weapons` (`id_weapon`, `title`, `quality`, `type`, `dmg`, `speed`, `img`, `reit`, `crit`, `proch`, `pass`, `opis`) VALUES
(1, 'Novice', 'medium', 'sword', 36, 50, 'Novice_id12_Medium.png', 500, 20, 60, 'You gain 25% more XP', ''),
(2, 'Blonde', 'legendary', 'sword', 70, 40, 'Blonde_id10_Legendary.png', 495, 50, 100, 'You deal 20% more damage against dragons', ''),
(3, 'Katana', 'low', 'sword', 10, 15, 'Katana_id6_Low.png', 80, 5, 30, 'You gain 25% more XP', ''),
(4, 'Bonde', 'high', 'sword', 60, 30, 'Bonde_id8_High.png', 400, 40, 50, 'You deal 20% more damage against orcs', ''),
(5, 'Simple', 'low', 'sword', 15, 10, 'Mech.Obichniy_id1_Low.png', 60, 5, 30, 'You gain 25% more XP', ''),
(6, 'Geopix', 'low', 'sword', 12, 12, 'Geopix_id9_Low.png', 100, 5, 30, 'You gain 25% more XP', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `armor`
--
ALTER TABLE `armor`
  ADD PRIMARY KEY (`id_armor`);

--
-- Индексы таблицы `enemies`
--
ALTER TABLE `enemies`
  ADD PRIMARY KEY (`id_enemy`);

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Индексы таблицы `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id_weapon`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `armor`
--
ALTER TABLE `armor`
  MODIFY `id_armor` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `enemies`
--
ALTER TABLE `enemies`
  MODIFY `id_enemy` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id_weapon` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
