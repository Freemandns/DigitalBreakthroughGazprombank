-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2020 г., 19:47
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gazprombank`
--

-- --------------------------------------------------------

--
-- Структура таблицы `achievements`
--

CREATE TABLE `achievements` (
  `id_achievement` int(11) NOT NULL,
  `achievement_name` varchar(255) NOT NULL,
  `achievement_description` varchar(255) NOT NULL,
  `achievement_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `achievements`
--

INSERT INTO `achievements` (`id_achievement`, `achievement_name`, `achievement_description`, `achievement_img`) VALUES
(1, 'ачивка 1', 'ачивка 1', 'ачивка 1');

-- --------------------------------------------------------

--
-- Структура таблицы `achievements_unification`
--

CREATE TABLE `achievements_unification` (
  `id` int(11) NOT NULL,
  `achievement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `achievements_unification`
--

INSERT INTO `achievements_unification` (`id`, `achievement_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `text_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`id_department`, `department_name`) VALUES
(1, 'Департамент 1'),
(2, 'Департамент 2');

-- --------------------------------------------------------

--
-- Структура таблицы `evaluations`
--

CREATE TABLE `evaluations` (
  `id` int(11) NOT NULL COMMENT 'ИД',
  `id_user` int(11) NOT NULL COMMENT 'ИД пользователя',
  `id_idea_users` int(11) NOT NULL COMMENT 'ИД идеи',
  `id_type` int(11) NOT NULL COMMENT 'ИД типа оценки'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Оценка идеи';

-- --------------------------------------------------------

--
-- Структура таблицы `favorite_ideas`
--

CREATE TABLE `favorite_ideas` (
  `id_fav_idea` int(11) NOT NULL,
  `name_fav_idea_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `favorite_ideas`
--

INSERT INTO `favorite_ideas` (`id_fav_idea`, `name_fav_idea_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `idea_statuses`
--

CREATE TABLE `idea_statuses` (
  `id_idea_status` int(11) NOT NULL,
  `idea_status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `idea_statuses`
--

INSERT INTO `idea_statuses` (`id_idea_status`, `idea_status_name`) VALUES
(1, 'На модерации'),
(2, 'Прошло модерацию');

-- --------------------------------------------------------

--
-- Структура таблицы `idea_users`
--

CREATE TABLE `idea_users` (
  `id_idea_user` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL,
  `idea_header` varchar(255) NOT NULL,
  `idea_description` varchar(255) NOT NULL,
  `mood_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `idea_users`
--

INSERT INTO `idea_users` (`id_idea_user`, `thematic_id`, `idea_header`, `idea_description`, `mood_id`, `user_id`, `status_id`) VALUES
(1, 1, 'Идея 1', 'Описание 1-й идеи', 1, 1, 1),
(2, 2, 'Идея 2', 'Описание 2-й идеи', 1, 1, 2),
(3, 2, 'Крутая идея', 'Описание крутой идеи', 1, 1, 1),
(4, 1, 'a', 'a', 1, 1, 1),
(5, 1, 'a', 'a', 1, 1, 1),
(6, 1, 'Название идеи 1', 'Описание', 1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `moods`
--

CREATE TABLE `moods` (
  `id_mood` int(11) NOT NULL,
  `mood_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `moods`
--

INSERT INTO `moods` (`id_mood`, `mood_name`) VALUES
(1, 'Настрой 1'),
(2, 'Настрой 2');

-- --------------------------------------------------------

--
-- Структура таблицы `positions`
--

CREATE TABLE `positions` (
  `id_position` int(11) NOT NULL,
  `position_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `positions`
--

INSERT INTO `positions` (`id_position`, `position_name`) VALUES
(1, 'Менеджер'),
(2, 'Начальник');

-- --------------------------------------------------------

--
-- Структура таблицы `progres_towers`
--

CREATE TABLE `progres_towers` (
  `id_towerp` int(11) NOT NULL,
  `towerp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `role_name`) VALUES
(1, 'пользователь'),
(2, 'модератор');

-- --------------------------------------------------------

--
-- Структура таблицы `status_task_system`
--

CREATE TABLE `status_task_system` (
  `id_st_t_syst` int(11) NOT NULL,
  `st_t_syst_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `status_task_system`
--

INSERT INTO `status_task_system` (`id_st_t_syst`, `st_t_syst_name`) VALUES
(1, 'Лайк'),
(2, 'Дизлайк');

-- --------------------------------------------------------

--
-- Структура таблицы `store`
--

CREATE TABLE `store` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `store`
--

INSERT INTO `store` (`id_product`, `product_name`, `product_description`, `product_img`, `product_count`) VALUES
(1, 'Samsung Galaxy S20', 'Новый смартфон от samsung', '/web/assets/store_product_img/EOrHqCPWkAAS8sa_large.jpeg', 10000),
(2, 'Apple Iphone XR', 'Смартфон от компании Apple', '/web/assets/store_product_img/33439fe0024ed949873b0da92a406396.jpg', 20000);

-- --------------------------------------------------------

--
-- Структура таблицы `store_unification`
--

CREATE TABLE `store_unification` (
  `id_store_unification` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `task_system`
--

CREATE TABLE `task_system` (
  `id_task_system` int(11) NOT NULL,
  `task_system_user_id` int(11) NOT NULL,
  `task_id_system` int(11) NOT NULL,
  `status_task_system_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `thematics`
--

CREATE TABLE `thematics` (
  `id_thematic` int(11) NOT NULL,
  `thematic_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `thematics`
--

INSERT INTO `thematics` (`id_thematic`, `thematic_name`) VALUES
(1, 'Тематика 1'),
(2, 'Тематика 2');

-- --------------------------------------------------------

--
-- Структура таблицы `tower_levels`
--

CREATE TABLE `tower_levels` (
  `id_tower_level` int(11) NOT NULL,
  `tower_level_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tower_levels`
--

INSERT INTO `tower_levels` (`id_tower_level`, `tower_level_name`) VALUES
(1, 'Ларек обмена валют'),
(2, 'Микрозаймы'),
(3, 'Банк');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL COMMENT 'ИД',
  `type` varchar(255) NOT NULL COMMENT 'Наименование типа'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Типы оценок';

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `achievement_id` int(11) DEFAULT NULL,
  `gazprom_coin` int(11) DEFAULT NULL,
  `favourite_idea_id` int(11) DEFAULT NULL,
  `idea_user_id` int(11) DEFAULT NULL,
  `tower_level_id` int(11) NOT NULL,
  `tower_progress` int(11) DEFAULT NULL,
  `date_coin` date DEFAULT NULL COMMENT 'Дата сбора коинов'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `firstname`, `surname`, `patronymic`, `avatar`, `role_id`, `position_id`, `department_id`, `rating`, `achievement_id`, `gazprom_coin`, `favourite_idea_id`, `idea_user_id`, `tower_level_id`, `tower_progress`, `date_coin`) VALUES
(1, '1', '1', '1', '1', '1', '123', '/web/assets/avatars/myAvatar4.png', 1, 1, 1, 10, 1, 1, NULL, NULL, 1, 1, '2020-06-20'),
(2, '2', '2', '2', '2', '2', '222', '/web/assets/avatars/myAvatar4.png', 2, 1, 1, 20, 1, 0, NULL, NULL, 1, 1, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id_achievement`);

--
-- Индексы таблицы `achievements_unification`
--
ALTER TABLE `achievements_unification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achievement_id` (`achievement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Индексы таблицы `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_idea_users` (`id_idea_users`),
  ADD KEY `id_type` (`id_type`);

--
-- Индексы таблицы `favorite_ideas`
--
ALTER TABLE `favorite_ideas`
  ADD PRIMARY KEY (`id_fav_idea`),
  ADD KEY `name_fav_idea_id` (`name_fav_idea_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `idea_statuses`
--
ALTER TABLE `idea_statuses`
  ADD PRIMARY KEY (`id_idea_status`);

--
-- Индексы таблицы `idea_users`
--
ALTER TABLE `idea_users`
  ADD PRIMARY KEY (`id_idea_user`),
  ADD KEY `thematic_id` (`thematic_id`),
  ADD KEY `mood_id` (`mood_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Индексы таблицы `moods`
--
ALTER TABLE `moods`
  ADD PRIMARY KEY (`id_mood`);

--
-- Индексы таблицы `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id_position`);

--
-- Индексы таблицы `progres_towers`
--
ALTER TABLE `progres_towers`
  ADD PRIMARY KEY (`id_towerp`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Индексы таблицы `status_task_system`
--
ALTER TABLE `status_task_system`
  ADD PRIMARY KEY (`id_st_t_syst`);

--
-- Индексы таблицы `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `store_unification`
--
ALTER TABLE `store_unification`
  ADD PRIMARY KEY (`id_store_unification`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `task_system`
--
ALTER TABLE `task_system`
  ADD PRIMARY KEY (`id_task_system`),
  ADD KEY `status_task_system_id` (`status_task_system_id`),
  ADD KEY `task_id_system` (`task_id_system`),
  ADD KEY `task_system_user_id` (`task_system_user_id`);

--
-- Индексы таблицы `thematics`
--
ALTER TABLE `thematics`
  ADD PRIMARY KEY (`id_thematic`);

--
-- Индексы таблицы `tower_levels`
--
ALTER TABLE `tower_levels`
  ADD PRIMARY KEY (`id_tower_level`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `position` (`position_id`),
  ADD KEY `achievement` (`achievement_id`),
  ADD KEY `idea_user` (`idea_user_id`),
  ADD KEY `tower_level` (`tower_level_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `favourite_task_id` (`favourite_idea_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `tower_progress` (`tower_progress`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id_achievement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `achievements_unification`
--
ALTER TABLE `achievements_unification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ИД';

--
-- AUTO_INCREMENT для таблицы `favorite_ideas`
--
ALTER TABLE `favorite_ideas`
  MODIFY `id_fav_idea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `idea_statuses`
--
ALTER TABLE `idea_statuses`
  MODIFY `id_idea_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `idea_users`
--
ALTER TABLE `idea_users`
  MODIFY `id_idea_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `moods`
--
ALTER TABLE `moods`
  MODIFY `id_mood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `positions`
--
ALTER TABLE `positions`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `progres_towers`
--
ALTER TABLE `progres_towers`
  MODIFY `id_towerp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `status_task_system`
--
ALTER TABLE `status_task_system`
  MODIFY `id_st_t_syst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `store`
--
ALTER TABLE `store`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `store_unification`
--
ALTER TABLE `store_unification`
  MODIFY `id_store_unification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `task_system`
--
ALTER TABLE `task_system`
  MODIFY `id_task_system` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `thematics`
--
ALTER TABLE `thematics`
  MODIFY `id_thematic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tower_levels`
--
ALTER TABLE `tower_levels`
  MODIFY `id_tower_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ИД';

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `achievements_unification`
--
ALTER TABLE `achievements_unification`
  ADD CONSTRAINT `achievements_unification_ibfk_1` FOREIGN KEY (`achievement_id`) REFERENCES `achievements` (`id_achievement`),
  ADD CONSTRAINT `achievements_unification_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `evaluations_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluations_ibfk_2` FOREIGN KEY (`id_idea_users`) REFERENCES `idea_users` (`id_idea_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluations_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `favorite_ideas`
--
ALTER TABLE `favorite_ideas`
  ADD CONSTRAINT `favorite_ideas_ibfk_1` FOREIGN KEY (`name_fav_idea_id`) REFERENCES `idea_users` (`id_idea_user`),
  ADD CONSTRAINT `favorite_ideas_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `idea_users`
--
ALTER TABLE `idea_users`
  ADD CONSTRAINT `idea_users_ibfk_1` FOREIGN KEY (`thematic_id`) REFERENCES `thematics` (`id_thematic`),
  ADD CONSTRAINT `idea_users_ibfk_2` FOREIGN KEY (`mood_id`) REFERENCES `moods` (`id_mood`),
  ADD CONSTRAINT `idea_users_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `idea_users_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `idea_statuses` (`id_idea_status`);

--
-- Ограничения внешнего ключа таблицы `store_unification`
--
ALTER TABLE `store_unification`
  ADD CONSTRAINT `store_unification_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `store` (`id_product`),
  ADD CONSTRAINT `store_unification_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id_position`),
  ADD CONSTRAINT `users_ibfk_10` FOREIGN KEY (`tower_progress`) REFERENCES `tower_levels` (`id_tower_level`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`id_department`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`achievement_id`) REFERENCES `achievements_unification` (`id`),
  ADD CONSTRAINT `users_ibfk_7` FOREIGN KEY (`tower_level_id`) REFERENCES `tower_levels` (`id_tower_level`),
  ADD CONSTRAINT `users_ibfk_8` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id_role`),
  ADD CONSTRAINT `users_ibfk_9` FOREIGN KEY (`favourite_idea_id`) REFERENCES `favorite_ideas` (`id_fav_idea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
