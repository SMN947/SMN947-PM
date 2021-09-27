-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2021 a las 05:56:45
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smn947-pm`
--
CREATE DATABASE IF NOT EXISTS `smn947-pm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smn947-pm`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `columns`
--

CREATE TABLE `columns` (
  `column_id` int(11) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `column_description` varchar(4000) NOT NULL,
  `column_position` int(11) NOT NULL,
  `column_project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `columns`
--

INSERT INTO `columns` (`column_id`, `column_name`, `column_description`, `column_position`, `column_project_id`) VALUES
(1, 'To Do', '', 1, 22),
(2, 'In Progress', '', 2, 22),
(3, 'For Review', '', 3, 22),
(4, 'Done', '', 4, 22),
(5, 'To Do', '', 1, 23),
(6, 'In Progress', '', 2, 23),
(7, 'For Review', '', 3, 23),
(8, 'Done', '', 4, 23),
(9, 'To Do', '', 5, 24),
(10, 'In Progress', '', 2, 24),
(11, 'For Review', '', 3, 24),
(12, 'Done', '', 4, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `project_description` varchar(4000) CHARACTER SET utf8 DEFAULT NULL,
  `project_user_creator` int(11) DEFAULT NULL,
  `project_ceation_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_description`, `project_user_creator`, `project_ceation_date`) VALUES
(22, 'TestProject', 'La descripcion del project :) ?', 1, '2021-09-15 14:02:48'),
(23, 'poiuytr', 'poiu', 1, '2021-09-15 15:30:02'),
(24, 'dds', 'dsss', 1, '2021-09-17 16:54:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_desc` varchar(4000) NOT NULL,
  `task_start_sch` date NOT NULL,
  `task_end_sch` date NOT NULL,
  `task_project_id` int(11) NOT NULL,
  `task_column_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_desc`, `task_start_sch`, `task_end_sch`, `task_project_id`, `task_column_id`) VALUES
(7, 'Test Task', 'DEscription Task', '2021-08-30', '2021-09-30', 22, 2),
(8, 'Test Task 23 1', 'DEscription Task', '2021-08-30', '2021-09-22', 22, 2),
(9, 'Test Task', 'cdsdsvdsv', '2021-08-29', '2021-09-28', 22, 1),
(10, 'zzx zx ', 'zxvdsdh s dj dj dd  ', '2021-09-07', '2021-09-24', 22, 1),
(11, 'shs sh sh sh shs h', ' hrkx  c,d kdk x kdkxs s t dt dtkdtkdtk', '2021-09-07', '2021-09-24', 22, 1),
(12, 'xbnh', 'shshsfhfsh', '2021-09-01', '2021-09-24', 24, 10),
(13, 'jenni', 'loviu <3', '2021-09-08', '2021-10-02', 22, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'SMN947', 'smn947@smn947.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `columns`
--
ALTER TABLE `columns`
  ADD PRIMARY KEY (`column_id`),
  ADD KEY `project_id` (`column_project_id`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`project_user_creator`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `columns`
--
ALTER TABLE `columns`
  MODIFY `column_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `columns`
--
ALTER TABLE `columns`
  ADD CONSTRAINT `project_id` FOREIGN KEY (`column_project_id`) REFERENCES `projects` (`project_id`);

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`project_user_creator`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
