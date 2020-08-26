-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 26 2020 г., 18:21
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `host1812801_evrop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `allhotels`
--

CREATE TABLE `allhotels` (
  `id` int(12) NOT NULL,
  `heading` text NOT NULL,
  `preview` text NOT NULL,
  `price` varchar(112) DEFAULT NULL,
  `prevHotel` varchar(255) DEFAULT NULL,
  `new` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allhotels`
--

INSERT INTO `allhotels` (`id`, `heading`, `preview`, `price`, `prevHotel`, `new`) VALUES
(4, 'СТАНДАРТ  A, B, C', 'Общая площадь номера — 23 кв. м. Общая площадь балкона — 14,5 кв. м. 2-х местный комфортный однокомнатный номер с видом на море. Номера категории стандарт представлены типами: A — Twin, B — Twin/Double, C — Double. Номер оснащен современной системой климат-контроля, LED телевизором, телефоном, Wi-Fi. Насладиться окружающим пейзажем вы можете на балконе, где можно отдохнуть в ротанговых креслах.', 'от 5400 рублей', 'nazvanie-otelya', NULL),
(5, 'СТАНДАРТ ДВУХКОМНАТНЫЙ', 'Общая площадь номера — 34 кв. м. Общая площадь балкона — 29 кв. м. Номер делится на зону отдыха с двуспальной кроватью и гостевую зону с удобным диваном. Комнаты оснащены современной системой климат-контроля, LED телевизором, телефоном, Wi-Fi. Две террасы с шезлонгами, ротанговой мебелью и видом на море подарят вам незабываемые впечатления от окружающих пейзажей.', 'от 7500 рублей', 'nazvanie-otelya', NULL),
(8, 'ПОЛУЛЮКС', 'Общая площадь номера — 34 кв. м. Общая площадь балкона — 29 кв. м. 2-х комнатный номер с комфортной обстановкой и видом на море. Номер имеет раздельную зону отдыха с двуспальной кроватью и гостевую зону с удобным диваном. Оснащен системой климат-контроля, LED телевизором, телефоном, Wi-Fi. На балконе ротанговые кресла для отдыха и столик, шезлонги. С заботой о наших гостях номер 601 категории «Полулюкс» оснащен всем необходимым для людей с ограниченными возможностями.', 'от 8400 рублей', 'nazvanie-otelya', NULL),
(9, 'ЛЮКС', 'Общая площадь номера — 50 кв. м. Общая площадь балконов — 29 кв. м. Прекрасный 2-х комнатный номер. В спальне расположена удобная двуспальная кровать, LED телевизор, журнальный столик, 2 уютных кресла и элегантный туалетный столик с зеркалом. Из спальни можно попасть в просторную ванную комнату. Гостиная, совмещенная с кухонной зоной, располагает к спокойному отдыху. Из каждой комнаты выходят балконы с видом на море, на которых размещаются ротанговые кресла для отдыха и столик, шезлонги.', 'от 10100 рублей', 'nazvanie-otelya', NULL),
(10, 'АПАРТАМЕНТЫ ДЕЛЮКС', 'Общая площадь номера — 50 кв. м. Общая площадь террасы — 80 кв. м. Великолепный 2-х комнатный номер, впечатляющий современным дизайном. Гостиную украшает стильная кожаная мягкая мебель алого/оранжевого цвета и журнальный столик в тон. Там же находится LED телевизор диагональю 40 дюймов и мини-кухонная зона. В спальне – удобная кровать с ортопедическим матрацем, элегантные прикроватные тумбочки с настольными лампами, LED телевизор и туалетный столик с зеркалом. Из спальни можно попасть в просторную ванную комнату. Потрясающая терраса располагает гостей к неторопливому отдыху. Номер оснащен современной системой климат-контроля, телефоном, Wi-Fi.', 'от 10800 рублей', 'nazvanie-otelya', NULL),
(11, 'АПАРТАМЕНТЫ ЕВРОЛЮКС', 'Общая площадь номера — 80 кв. м. Общая площадь террасы — 14,5 кв. м. 2-х комнатный номер для ценителей роскошного отдыха с открытой террасой. Просторная светлая гостиная с мягким диваном, LED телевизором с диагональю 40 дюймов, кухонной зоной, большим обеденным столом и причудливого вида креслом приятно удивят своим удобством и практичностью. Двуспальная кровать с ортопедическим матрацем подарит крепкий и здоровый сон. Обстановку дополняют два удобных кресла, прикроватные тумбочки с настольными лампами, элегантный туалетный столик с зеркалом. Номер оснащен современной системой климат-контроля, телефоном, Wi-Fi.', 'от 12000 рублей', 'nazvanie-otelya', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `preview` text DEFAULT NULL,
  `prevHotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `preview`, `prevHotel`) VALUES
(3, 'Партенит – природная здравница, и это не просто красивые слова. Уникальность морского курорта объясняется сочетанием нескольких факторов: 1.обособленное расположение (поселок с трех сторон закрыт горными массивами) 2.насыщенность воздуха частицами морской соли и фитонцидами реликтовых хвойных деревьев (оздоровительный воздушный «коктейль»); 3.невысокая влажность(благоприятный климат для людей с заболеваниями сердца); 4.чистейшее море (за счет подводных течений происходит постоянное очищение воды в прибрежной зоне). ', 'nazvanie-otelya'),
(4, '\r\n\r\nВ отеле «Европа» есть все, что необходимо для организации отдыха по высшему разряду. Кроме ресторана, баров, тренажерного зала, салона красоты, бассейна и прочих объектов гостиничной инфраструктуры, отель располагает собственным пляжем в чистейшей акватории Черного моря. Огромные зеленые массивы парков «Карасан», «Парадиз» и «Утес» и Крымские горы защищают местность от ветра и непогоды. В Партените чувствуется дыхание истории, ведь именно здесь всего столетие назад жили Раевские, Воронцовы, Гагарины, Юсуповы. Великие аристократы Российской империи облюбовали и обустроили сказочный уголок крымской земли, открыв для последующих поколений ее удивительное, не поддающееся описанию очарование.', 'nazvanie-otelya'),
(5, 'Ценителям европейской и итальянской кухни, отель «Европа» предлагает посетить наши рестораны в Партените. Талантливые шеф-повара ресторанов «PartenEat» и «Al Percino», расположенных в нашем гостиничном комплексе, порадуют гостей и постояльцев отеля оригинальным меню, качественным сервисом, доступными ценами и утонченным вкусом блюд высокой европейской кухни.', 'nazvanie-otelya');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(12) NOT NULL,
  `text` text NOT NULL,
  `userName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `text`, `userName`) VALUES
(24, 'Оставляю крутой отзыв. Все было очень круто. Всем советую', 'Василий Пупкин');

-- --------------------------------------------------------

--
-- Структура таблицы `hotelsheader`
--

CREATE TABLE `hotelsheader` (
  `hotelName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rusName` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `hotelsheader`
--

INSERT INTO `hotelsheader` (`hotelName`, `rusName`, `content`) VALUES
('nazvanie-otelya', 'Название отеля', 'описание нового отеля'),
('samyy-krutoy-otel', 'Самый крутой отель', 'Отели самого высокого класса');

-- --------------------------------------------------------

--
-- Структура таблицы `keygadsstat`
--

CREATE TABLE `keygadsstat` (
  `id` int(12) NOT NULL,
  `campaign` bigint(12) DEFAULT NULL,
  `content` int(15) DEFAULT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_much` int(12) NOT NULL DEFAULT 1,
  `status` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `keygadsstat`
--

INSERT INTO `keygadsstat` (`id`, `campaign`, `content`, `keyword`, `method`, `how_much`, `status`) VALUES
(27, 0, NULL, '0', NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `site_configs`
--

CREATE TABLE `site_configs` (
  `id` int(11) NOT NULL,
  `banner` varchar(100) DEFAULT 'banner.jpg',
  `siteName` varchar(100) DEFAULT NULL,
  `menu1` varchar(100) DEFAULT NULL,
  `menu2` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `phoneNumber2` varchar(20) DEFAULT NULL,
  `heading1` text DEFAULT NULL,
  `words1` text DEFAULT NULL,
  `heading2` text DEFAULT NULL,
  `words2` text DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `qqq` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `site_configs`
--

INSERT INTO `site_configs` (`id`, `banner`, `siteName`, `menu1`, `menu2`, `phoneNumber`, `phoneNumber2`, `heading1`, `words1`, `heading2`, `words2`, `adress`, `email`, `qqq`) VALUES
(1, 'banner.jpg', ' Европа', 'ОБ ОТЕЛЕ', 'НОМЕРНОЙ ФОНД', '8-900-014-50-90', '8-977-704-31-32', 'СКАЗОЧНЫЙ КРЫМ ЖДЕТ ГОСТЕЙ !', 'Гостиничный комплекс «Европа» — эксклюзивный проект, в котором сливаются воедино восточные традиции и современные европейские методики.Отель четыре  звезды, собственный пляж, полный пансион, два ресторана, spa, панорамный лифт, детская анимация. Уютное месторасположение между горой Аю-Даг и мысом Плака, уникальное строительно-архитектурное решение создают все условия для полноценного отдыха. В шаговой доступности от отеля, расположился  один из самых красивейших и современных  парков Крыма —  парк санатория «Айвазовское». Обратите внимание, что для наших гостей вход в ландшафтный парк бесплатен. Достаточно взять у администратора пропуск.', 'РОСКОШНЫЙ БЕЛОСНЕЖНЫЙ ЛАЙНЕР', ' Комфортабельные номера и апартаменты. Все номера с видом на море, широкие веранды — уют и роскошь настоящего элитного отдыха.', 'Республика Крым, г. Алушта, пгт. Партенит, ул. Васильченко, 6', '89000145090@mail.ru ', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allhotels`
--
ALTER TABLE `allhotels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hotelsheader`
--
ALTER TABLE `hotelsheader`
  ADD UNIQUE KEY `hotelName` (`hotelName`);

--
-- Индексы таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `site_configs`
--
ALTER TABLE `site_configs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allhotels`
--
ALTER TABLE `allhotels`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `keygadsstat`
--
ALTER TABLE `keygadsstat`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
