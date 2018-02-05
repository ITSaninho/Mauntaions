-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 05 2018 г., 21:23
-- Версия сервера: 5.7.19
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mountains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'about us2', 'lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, consectetur adipisicing elitr13554456558', NULL, '2018-01-09 06:48:25');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `work`, `text`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Pavliv Yaroslav', 'Web designer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'avatar1.png', NULL, NULL),
(2, 'John Scott', 'The Fringe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse', 'avatar2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `company`
--

INSERT INTO `company` (`id`, `position`, `img`, `created_at`, `updated_at`) VALUES
(1, '0', 'slack.png', NULL, NULL),
(2, '0', 'adobe.png', NULL, NULL),
(3, '0', 'google.png', NULL, NULL),
(4, '0', 'facebook.png', NULL, NULL),
(5, '0', 'spotify.png', NULL, NULL),
(6, '0', 'nike.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'fhghf', '34534', 'Sanini@gmail.com', '2018-01-09 09:04:01', '2018-01-09 09:04:01'),
(2, 'gfdg', '1', '0', '2018-01-09 09:05:23', '2018-01-09 09:05:23'),
(3, 'sdfdsf', '5345345', '', '2018-01-09 09:09:41', '2018-01-09 09:09:41'),
(4, 'sdfdsf', '', 'gfdg@gfdg.dfg', '2018-01-09 09:10:09', '2018-01-09 09:10:09');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `position`, `created_at`, `updated_at`) VALUES
(1, 'gallery-pic1.png', '0', NULL, NULL),
(2, 'gallery-pic2.png', '0', NULL, NULL),
(3, 'gallery-pic3.png', '0', NULL, NULL),
(4, 'gallery-pic4.png', '0', NULL, NULL),
(5, 'gallery-pic5.png', '0', NULL, NULL),
(6, 'gallery-pic6.png', '0', NULL, NULL),
(7, 'майами-600x399.jpg', '1', '2018-01-09 11:55:05', '2018-01-09 11:55:05'),
(8, '1308596273mayami.jpg', '1', '2018-01-09 11:56:00', '2018-01-09 11:56:00');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `description`, `button_value`, `created_at`, `updated_at`) VALUES
(1, 'lorem ipsum dolor sit amet, consectetur adipisicing elit,12345', 'order now125', NULL, '2018-01-08 11:13:12');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'gallery-pic1.png', NULL, NULL),
(2, 'gallery-pic2.png', NULL, NULL),
(3, 'gallery-pic3.png', NULL, NULL),
(4, 'gallery-pic4.png', NULL, NULL),
(5, 'gallery-pic5.png', NULL, NULL),
(6, 'gallery-pic6.png', NULL, NULL),
(7, 'car-item1.png', NULL, NULL),
(8, 'car-item2.png', NULL, NULL),
(9, 'car-item3.png', NULL, NULL),
(10, 'car-item4.png', NULL, NULL),
(11, 'car-item5.png', NULL, NULL),
(12, 'twitter-footer.png', NULL, NULL),
(13, 'facebook-footer.png', NULL, NULL),
(14, 'vk-footer.png', NULL, NULL),
(15, 'slack.png', NULL, NULL),
(16, 'adobe.png', NULL, NULL),
(17, 'google.png', NULL, NULL),
(18, 'facebook.png', NULL, NULL),
(19, 'spotify.png', NULL, NULL),
(20, 'nike.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `journal`
--

CREATE TABLE `journal` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `journal`
--

INSERT INTO `journal` (`id`, `title`, `description`, `text`, `number`, `img`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'love1', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT, SED DO', 'You know how to make best coffee in the unniverse? Or, maybe you\'re very in designing gloves? Tell everyone about your eperience and skills.', '01', 'journal-pic1.png', NULL, '2018-01-08 11:14:12', ''),
(2, 'TREE', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT', 'The way to a successful brand is hard, but always very interesting. Share the full story of your project - from the very first day until now.', '02', 'journal-pic2.png', NULL, NULL, ''),
(3, 'WATER', 'LITTLE PIECES OF OUR PROUDNESS', 'What do you do better than your competitors? What are you proud of? What details and advantages of your product you want people know about?', '03', 'journal-pic3.png', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`, `position`, `created_at`, `updated_at`) VALUES
(1, 'about us', '0', NULL, NULL),
(2, 'our journal', '0', NULL, NULL),
(3, 'how we work', '0', NULL, NULL),
(4, 'travel with us', '0', NULL, NULL),
(5, 'gallery', '0', NULL, NULL),
(6, 'feedbacks', '0', NULL, NULL),
(7, 'contacts', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_29_140029_create_menu_table', 1),
(4, '2017_12_29_140159_create_header_table', 1),
(5, '2017_12_29_140250_create_about_table', 1),
(6, '2017_12_29_140651_create_journal_table', 1),
(7, '2017_12_29_140758_create_wanna_table', 1),
(8, '2017_12_29_140816_create_work_table', 1),
(9, '2017_12_29_140834_create_travel_table', 1),
(10, '2017_12_29_140906_create_gallery_table', 1),
(11, '2017_12_29_140935_create_social_table', 1),
(12, '2017_12_29_140957_create_comment_table', 1),
(13, '2017_12_29_141025_create_contact_table', 1),
(14, '2017_12_29_141103_create_order_table', 1),
(15, '2018_01_05_105023_add_column_is_admin_to_users_table', 2),
(16, '2018_01_08_132553_add_column_position_to_travel_table', 3),
(18, '2018_01_08_144508_create_company_table', 4),
(19, '2018_01_09_084448_delete_column_button_value_to_about_table', 5),
(20, '2018_01_09_085334_delete_column_rating_to_travel_table', 6),
(21, '2018_01_09_085429_add_column_rating_to_travel_table', 7),
(22, '2018_01_09_120447_delete_column_title_in_gallery_table', 8),
(23, '2018_01_09_122006_add_column_icon_in_journal_table', 9),
(24, '2018_01_10_092615_create_images_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'dfg', '433443', '2018-01-09 09:19:37', '2018-01-09 09:19:37');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `title`, `position`, `img`, `created_at`, `updated_at`) VALUES
(1, 'twitter', '0', 'twitter-footer.png', NULL, NULL),
(2, 'facebook', '0', 'facebook-footer.png', NULL, NULL),
(3, 'vk', '0', 'vk-footer.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `travel`
--

CREATE TABLE `travel` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `travel`
--

INSERT INTO `travel` (`id`, `title`, `description`, `price`, `last_price`, `img`, `created_at`, `updated_at`, `position`, `rating`) VALUES
(1, 'alps', 'Lorem ipsum dolor sit amet, consectetur', '3150', '2123', 'car-item1.png', NULL, NULL, '1', 5),
(2, 'Pyrenees', 'Lorem ipsum dolor sit amet, consectetur', '3150', '2123', 'car-item2.png', NULL, NULL, '2', 4),
(3, 'Rocky', 'Lorem ipsum dolor sit amet, consectetur', '3150', '2123', 'car-item3.png', NULL, NULL, '3', 3),
(4, 'Kavkaz', 'Lorem ipsum dolor sit amet, consectetur', '3150', '2123', 'car-item4.png', NULL, NULL, '4', 5),
(5, 'Carpatian', 'Lorem ipsum dolor sit amet, consectetur', '3150', '2123', 'car-item5.png', NULL, NULL, '5', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'noname', 'test@gmail.com', '$2y$10$mckvlIi0JDGLcon8F.Wj2erPosuZP3TkwYchdtVYYhNW9SiuUZ9r.', NULL, '2018-01-05 08:26:50', '2018-01-05 08:26:50', '0'),
(2, 'noname', 'fdgdfg@fdgdf.com', '$2y$10$uWTtW98unTGED8h.gpE23.XpOeTIpELyzzrdzVUn5XZbOjQTUjs9i', 'QJwKJOA0f0eLyBBlzL3GJP1YuMvB67PMSOzVoRYpz9g7aey1L2vO0hTYi7QO', '2018-01-05 08:48:07', '2018-01-05 08:48:07', '0'),
(3, 'noname', 'test123@gmail.com', '$2y$10$a3wZBcTIhMyYzVIZwUD/g.0CFe5iJwUV/4IWDrYbqa2Q9jwmxLif2', 'qUvmAgZCtMU2UbsgiEwh4d4AopgtF5l13fiLEXEymfZdpoGRUi6mAUp9ba8A', '2018-01-05 09:33:10', '2018-01-05 09:33:10', '0'),
(4, 'noname', 'sasasasasa@gmail.com', '$2y$10$rUMdZkQ7FeTzWT6JUvkN/.c0D/mLmW7tsVCuDFl0XKXTjGDHSLAKe', 'wjrInByohQzmpMza4WCh2hXODQY9e3dcvjO6ffvEOvWWU4vqKJSoiflyRUbq', '2018-01-09 07:58:38', '2018-01-09 07:58:38', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `wanna`
--

CREATE TABLE `wanna` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wanna`
--

INSERT INTO `wanna` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'DO YOU WANNA GO?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `work`
--

CREATE TABLE `work` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `work`
--

INSERT INTO `work` (`id`, `title`, `description`, `img`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit', 'amet, consectetur adipisicing', 'doc-icon.png', '1', NULL, '2018-01-08 11:14:26'),
(2, 'Lorem ipsum dolor sit', 'amet, consectetur adipisicing ', 'user-icon.png', '2', NULL, NULL),
(3, 'Lorem ipsum dolor sit', 'amet, consectetur adipisicing ', 'book-icon.png', '3', NULL, NULL),
(4, 'Lorem ipsum dolor sit', 'amet, consectetur adipisicing ', 'check-icon.png', '4', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `wanna`
--
ALTER TABLE `wanna`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `wanna`
--
ALTER TABLE `wanna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `work`
--
ALTER TABLE `work`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
