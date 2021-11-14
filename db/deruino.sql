-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2021 г., 15:42
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `deruino`
--

-- --------------------------------------------------------

--
-- Структура таблицы `deru_auth_logs`
--

CREATE TABLE `deru_auth_logs` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `date` varchar(25) NOT NULL,
  `user_ip` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deru_auth_logs`
--

INSERT INTO `deru_auth_logs` (`id`, `name`, `date`, `user_ip`, `status`) VALUES
(2, 'DERUINO', '11.12.2020, 13:39:03', '127.0.0.1', 'logOut'),
(3, 'DERUINO', '11.12.2020, 13:39:16', '127.0.0.1', 'logIn'),
(4, 'DERUINO', '11.12.2020, 13:40:09', '127.0.0.1', 'logOut'),
(5, 'DERUINO', '11.12.2020, 14:11:17', '127.0.0.1', 'logIn'),
(6, 'DERUINO', '11.12.2020, 14:13:10', '127.0.0.1', 'logOut'),
(7, 'DERUINO', '11.12.2020, 14:15:35', '127.0.0.1', 'logIn'),
(8, 'DERUINO', '11.12.2020, 14:15:35', '127.0.0.1', 'logIn'),
(9, 'DERUINO', '11.12.2020, 15:11:15', '127.0.0.1', 'logOut'),
(10, 'DERUINO', '11.12.2020, 15:11:50', '127.0.0.1', 'logIn'),
(11, 'DERUINO', '11.12.2020, 15:12:25', '127.0.0.1', 'logOut'),
(12, 'DERUINO', '11.12.2020, 15:18:55', '127.0.0.1', 'logIn'),
(13, 'DERUINO', '11.12.2020, 15:20:19', '127.0.0.1', 'logOut'),
(14, 'DERUINO', '11.12.2020, 15:20:21', '127.0.0.1', 'logIn'),
(15, 'DERUINO', '11.12.2020, 15:23:02', '127.0.0.1', 'logOut'),
(16, 'DERUINO', '11.12.2020, 15:28:40', '185.97.201.72', 'logIn'),
(17, 'DERUINO', '11.12.2020, 15:29:31', '185.97.201.72', 'logOut'),
(18, 'DERUINO', '11.12.2020, 15:29:41', '185.97.201.72', 'logIn'),
(19, 'DERUINO', '11.12.2020, 15:29:53', '185.97.201.72', 'logOut'),
(20, 'DERUINO', '11.12.2020, 15:29:56', '185.97.201.72', 'logIn'),
(21, 'DERUINO', '11.12.2020, 16:06:06', '185.97.201.72', 'logIn'),
(22, 'DERUINO', '11.12.2020, 18:53:38', '185.97.201.72', 'logOut'),
(23, 'DERUINO', '11.12.2020, 18:53:40', '185.97.201.72', 'logIn'),
(24, 'DERUINO', '11.12.2020, 19:33:43', '185.97.201.72', 'logOut'),
(25, 'DERUINO', '11.12.2020, 19:33:45', '185.97.201.72', 'logIn'),
(26, 'DERUINO', '12.12.2020, 13:30:33', '185.97.201.72', 'logIn'),
(27, 'DERUINO', '13.12.2020, 11:58:32', '185.97.201.72', 'logIn'),
(28, 'senior', '13.12.2020, 20:20:06', '83.102.203.24', 'logIn'),
(29, 'senior', '13.12.2020, 20:20:10', '83.102.203.24', 'logOut'),
(30, 'senior', '13.12.2020, 20:21:57', '83.102.203.24', 'logIn'),
(31, 'senior', '13.12.2020, 21:08:34', '83.102.203.24', 'logOut'),
(32, 'senior', '13.12.2020, 21:08:39', '83.102.203.24', 'logIn'),
(33, 'senior', '14.12.2020, 14:00:48', '83.102.203.24', 'logIn'),
(34, 'senior', '14.12.2020, 14:00:53', '83.102.203.24', 'logOut'),
(35, 'senior', '14.12.2020, 14:09:40', '83.102.203.24', 'logIn'),
(36, 'DERUINO', '15.12.2020, 20:43:17', '185.97.201.72', 'logIn'),
(37, 'DERUINO', '16.12.2020, 14:06:57', '185.97.201.72', 'logIn'),
(38, 'DERUINO', '16.12.2020, 14:07:08', '185.97.201.72', 'logOut'),
(39, 'DERUINO', '16.12.2020, 15:15:28', '185.97.201.72', 'logIn'),
(40, 'DERUINO', '16.12.2020, 16:01:28', '185.97.201.72', 'logIn'),
(41, 'DERUINO', '17.12.2020, 13:57:32', '185.97.201.72', 'logIn'),
(42, 'DERUINO', '18.12.2020, 19:21:18', '185.97.201.72', 'logIn'),
(43, 'DERUINO', '19.12.2020, 13:26:04', '185.97.201.72', 'logIn'),
(44, 'DERUINO', '19.12.2020, 13:26:17', '185.97.201.72', 'logIn'),
(45, 'DERUINO', '19.12.2020, 13:26:17', '185.97.201.72', 'logIn'),
(46, 'DERUINO', '19.12.2020, 13:26:17', '185.97.201.72', 'logIn'),
(47, 'DERUINO', '21.12.2020, 4:25:05', '185.97.201.72', 'logIn'),
(48, 'DERUINO', '22.12.2020, 22:58:34', '185.97.201.72', 'logIn'),
(49, 'DERUINO', '22.12.2020, 22:58:53', '185.97.201.72', 'logOut'),
(50, 'DERUINO', '23.12.2020, 19:22:31', '185.97.201.72', 'logIn'),
(51, 'DERUINO', '23.12.2020, 23:02:29', '185.97.201.72', 'logOut'),
(52, 'DERUINO', '23.12.2020, 23:02:35', '185.97.201.72', 'logIn'),
(53, 'DERUINO', '23.12.2020, 23:46:09', '185.97.201.72', 'logOut'),
(54, 'DERUINO', '23.12.2020, 23:51:13', '185.97.201.72', 'logIn'),
(55, 'DERUINO', '24.12.2020, 14:00:54', '185.97.201.72', 'logIn'),
(56, 'DERUINO', '24.12.2020, 15:54:53', '185.97.201.72', 'logIn'),
(57, 'DERUINO', '24.12.2020, 15:55:18', '185.97.201.72', 'logOut'),
(58, 'DERUINO', '24.12.2020, 19:45:14', '185.97.201.72', 'logIn'),
(59, 'DERUINO', '25.12.2020, 16:43:37', '185.97.201.72', 'logIn'),
(60, 'DERUINO', '25.12.2020, 20:17:54', '78.107.205.86', 'logIn'),
(61, 'DERUINO', '27.12.2020, 21:26:38', '185.97.201.72', 'logIn'),
(62, 'senior', '28.12.2020, 10:32:34', '95.29.44.53', 'logIn'),
(63, 'DERUINO', '28.12.2020, 18:06:55', '185.97.201.72', 'logIn'),
(64, 'DERUINO', '28.12.2020, 18:07:48', '185.97.201.72', 'logOut'),
(65, 'DERUINO', '28.12.2020, 23:49:03', '185.97.201.72', 'logIn'),
(66, 'DERUINO', '29.12.2020, 12:32:50', '185.97.201.72', 'logIn'),
(67, 'senior', '02.01.2021, 18:23:15', '95.29.44.114', 'logIn'),
(68, 'testderu', '04.01.2021, 21:01:36', '83.102.203.102', 'logIn'),
(69, 'testderu', '04.01.2021, 21:02:28', '83.102.203.102', 'logOut'),
(70, 'badmotherfucker', '04.01.2021, 21:39:17', '92.100.238.124', 'logIn'),
(71, 'badmotherfucker', '04.01.2021, 21:40:32', '92.100.238.124', 'logOut'),
(72, 'DERUINO', '05.01.2021, 15:36:05', '83.102.203.102', 'logIn'),
(73, 'DERUINO', '06.01.2021, 17:29:49', '185.97.201.213', 'logIn'),
(74, 'DERUINO', '06.01.2021, 20:07:28', '185.97.201.213', 'logIn'),
(75, 'DERUINO', '07.01.2021, 22:03:35', '185.97.201.213', 'logIn'),
(76, 'DERUINO', '08.01.2021, 13:45:30', '185.97.201.213', 'logIn'),
(77, 'DERUINO', '08.01.2021, 16:47:08', '185.97.201.213', 'logIn'),
(78, 'DERUINO', '08.01.2021, 16:54:35', '185.97.201.213', 'logOut'),
(79, 'deruworking', '08.01.2021, 16:55:35', '185.97.201.213', 'logIn'),
(80, 'deruworking', '08.01.2021, 17:03:15', '185.97.201.213', 'logOut'),
(81, 'test5', '08.01.2021, 17:03:52', '185.97.201.213', 'logIn'),
(82, 'test5', '08.01.2021, 17:09:21', '185.97.201.213', 'logOut'),
(83, 'deruworking', '08.01.2021, 17:09:25', '185.97.201.213', 'logIn'),
(84, 'deruworking', '08.01.2021, 17:13:30', '185.97.201.213', 'logOut'),
(85, 'test5', '08.01.2021, 17:13:34', '185.97.201.213', 'logIn'),
(86, 'test5', '08.01.2021, 17:18:09', '185.97.201.213', 'logOut'),
(87, 'DERUINO', '08.01.2021, 17:18:14', '185.97.201.213', 'logIn'),
(88, 'DERUINO', '08.01.2021, 17:26:12', '185.97.201.213', 'logIn'),
(89, 'DERUINO', '09.01.2021, 14:55:39', '185.97.201.213', 'logIn'),
(90, 'DERUINO', '09.01.2021, 18:58:16', '185.97.201.213', 'logIn'),
(91, 'DERUINO', '09.01.2021, 20:00:33', '185.97.201.213', 'logIn'),
(92, 'deruwork', '09.01.2021, 20:01:33', '185.97.201.213', 'logIn'),
(93, 'badmotherfucker', '09.01.2021, 20:07:28', '92.100.238.124', 'logIn'),
(94, 'DERUINO', '09.01.2021, 22:52:37', '185.97.201.213', 'logIn'),
(95, 'DERUINO', '11.01.2021, 20:07:18', '185.97.201.213', 'logIn'),
(96, 'DERUINO', '16.01.2021, 14:06:39', '185.97.201.213', 'logIn'),
(97, 'DERUINO', '16.01.2021, 20:54:06', '185.97.201.213', 'logIn'),
(98, 'DERUINO', '16.01.2021, 23:43:05', '185.97.201.213', 'logIn'),
(99, 'DERUINO', '20.01.2021, 23:41:55', '185.97.201.213', 'logIn'),
(100, 'DERUINO', '23.01.2021, 19:44:54', '185.97.201.213', 'logIn'),
(101, 'DERUINO', '23.01.2021, 22:04:39', '185.97.201.213', 'logIn'),
(102, 'DERUINO', '24.01.2021, 15:29:49', '185.97.201.213', 'logIn'),
(103, 'senior', '03.02.2021, 17:10:27', '217.66.157.148', 'logIn'),
(104, 'DERUINO', '08.02.2021, 14:32:15', '185.97.201.213', 'logIn'),
(105, 'DERUINO', '12.02.2021, 14:55:21', '185.97.201.213', 'logIn'),
(106, 'DERUINO', '21.02.2021, 19:40:20', '127.0.0.1', 'logIn'),
(107, 'DERUINO', '21.02.2021, 19:40:20', '127.0.0.1', 'logIn'),
(108, 'DERUINO', '25.02.2021, 12:44:15', '127.0.0.1', 'logIn'),
(109, 'DERUINO', '25.02.2021, 19:04:17', '127.0.0.1', 'logOut'),
(110, 'DERUINO', '25.02.2021, 19:09:02', '127.0.0.1', 'logIn'),
(111, 'DERUINO', '25.02.2021, 21:16:21', '127.0.0.1', 'logOut'),
(112, 'DERUINO', '25.02.2021, 21:16:23', '127.0.0.1', 'logIn'),
(113, 'DERUINO', '25.02.2021, 21:20:54', '127.0.0.1', 'logIn'),
(114, 'DERUINO', '25.02.2021, 22:11:50', '127.0.0.1', 'logOut'),
(115, 'DERUINO', '25.02.2021, 22:26:39', '127.0.0.1', 'logIn'),
(116, 'DERUINO', '25.02.2021, 22:26:43', '127.0.0.1', 'logOut'),
(117, 'DERUINO', '25.02.2021, 23:01:14', '127.0.0.1', 'logIn'),
(118, 'DERUINO', '25.02.2021, 23:01:24', '127.0.0.1', 'logOut'),
(119, 'deruino', '25.02.2021, 23:02:19', '127.0.0.1', 'logIn'),
(120, 'DERUINO', '25.02.2021, 23:02:23', '127.0.0.1', 'logOut'),
(121, 'deruino', '25.02.2021, 23:02:25', '127.0.0.1', 'logIn'),
(122, 'DERUINO', '25.02.2021, 23:02:34', '127.0.0.1', 'logOut'),
(123, 'deruino', '25.02.2021, 23:02:40', '127.0.0.1', 'logIn'),
(124, 'DERUINO', '25.02.2021, 23:02:48', '127.0.0.1', 'logOut'),
(125, 'deruino', '25.02.2021, 23:14:32', '127.0.0.1', 'logIn'),
(126, 'DERUINO', '25.02.2021, 23:41:41', '127.0.0.1', 'logOut'),
(127, 'deruino', '25.02.2021, 23:41:42', '127.0.0.1', 'logIn'),
(128, 'deruino', '26.02.2021, 10:41:20', '127.0.0.1', 'logIn'),
(129, 'sexkid', '26.02.2021, 23:39:47', '127.0.0.1', 'logIn'),
(130, 'DERUINO', '26.02.2021, 23:40:05', '127.0.0.1', 'logOut'),
(131, 'deruino', '26.02.2021, 23:40:13', '127.0.0.1', 'logIn'),
(132, 'deruino', '27.02.2021, 13:16:44', '127.0.0.1', 'logIn'),
(133, 'DERUINO', '27.02.2021, 15:16:03', '127.0.0.1', 'logOut'),
(134, 'deruino', '27.02.2021, 15:16:39', '127.0.0.1', 'logIn'),
(135, 'deruino', '27.02.2021, 17:42:14', '127.0.0.1', 'logIn'),
(136, 'deruino', '02.03.2021, 10:26:34', '127.0.0.1', 'logIn'),
(137, 'deruino', '23.09.2021, 19:15:18', '127.0.0.1', 'logIn');

-- --------------------------------------------------------

--
-- Структура таблицы `deru_chat`
--

CREATE TABLE `deru_chat` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(3000) NOT NULL,
  `date` varchar(25) NOT NULL,
  `dialog_id` int(11) NOT NULL,
  `checked` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deru_chat`
--

INSERT INTO `deru_chat` (`id`, `author_id`, `user_id`, `text`, `date`, `dialog_id`, `checked`) VALUES
(42, 21, 12, '123123', '21-01-08 17:13:26', 8, NULL),
(43, 25, 12, 'testest', '21-01-08 17:13:42', 9, NULL),
(45, 25, 12, 'проверка', '21-01-08 17:17:43', 9, NULL),
(46, 12, 25, 'жопу свою проверь для начала', '21-01-08 17:22:55', 9, NULL),
(47, 12, 21, '321', '21-01-08 17:23:08', 8, NULL),
(48, 12, 25, 'проверка', '21-01-08 17:26:53', 9, NULL),
(49, 12, 25, '123', '21-01-08 17:26:58', 9, NULL),
(50, 18, 12, 'ку!', '21-01-09 20:03:12', 11, NULL),
(51, 12, 18, 'ну здарова', '21-01-09 20:03:27', 11, NULL),
(52, 12, 22, 'Здравствуйте\r\n', '21-01-09 20:04:18', 12, NULL),
(53, 22, 12, 'пнх куколд', '21-01-09 20:08:07', 12, NULL),
(54, 12, 22, 'ты че сука', '21-01-09 20:08:10', 12, NULL),
(55, 22, 12, 'соси', '21-01-09 20:08:13', 12, NULL),
(56, 12, 22, 'видно не?', '21-01-09 20:08:13', 12, NULL),
(57, 22, 12, 'уродец блять', '21-01-09 20:08:16', 12, NULL),
(58, 12, 22, 'без перезагрузки видно?', '21-01-09 20:08:20', 12, NULL),
(59, 22, 12, 'хули ты тут видно не видно', '21-01-09 20:08:22', 12, NULL),
(60, 12, 22, 'пхапха', '21-01-09 20:08:25', 12, NULL),
(61, 22, 12, 'тебе дон апоказать что ли', '21-01-09 20:08:27', 12, NULL),
(62, 12, 22, 'ахуенно', '21-01-09 20:08:28', 12, NULL),
(63, 22, 12, 'жопу', '21-01-09 20:08:32', 12, NULL),
(64, 12, 22, 'покажи жепу', '21-01-09 20:08:34', 12, NULL),
(65, 22, 12, 'я плохой чл', '21-01-09 20:08:40', 12, NULL),
(66, 22, 12, 'не связывайся со мной ', '21-01-09 20:08:46', 12, NULL),
(67, 22, 12, 'ребенок', '21-01-09 20:08:49', 12, NULL),
(68, 12, 22, 'ладно ладно не урчи сынок', '21-01-09 20:08:52', 12, NULL),
(69, 22, 12, 'ты куда полез мальчик', '21-01-09 20:08:54', 12, NULL),
(70, 22, 12, 'пиздато', '21-01-09 20:09:00', 12, NULL),
(71, 22, 12, 'чат годный', '21-01-09 20:09:05', 12, NULL),
(72, 12, 22, 'все, проверил короче, заебись спс', '21-01-09 20:09:06', 12, NULL),
(73, 22, 12, 'не за что', '21-01-09 20:09:18', 12, NULL),
(74, 12, 24, 'проверка', '21-01-16 23:44:17', 13, NULL),
(75, 12, 24, 'вывфывфв', '21-02-25 14:58:32', 13, NULL),
(76, 12, 24, '1', '21-02-25 15:45:24', 13, NULL),
(77, 12, 24, '3123', '21-02-25 15:45:26', 13, NULL),
(78, 12, 24, '132312', '21-02-25 15:45:28', 13, NULL),
(79, 12, 24, '2131231', '21-02-25 15:45:29', 13, NULL),
(80, 12, 24, '12312313', '21-02-25 15:45:31', 13, NULL),
(81, 12, 24, '3333', '21-02-25 15:45:33', 13, NULL),
(82, 12, 24, '33333', '21-02-25 15:45:35', 13, NULL),
(83, 12, 24, 'test', '21-02-25 16:00:13', 13, NULL),
(84, 12, 24, 'тест', '21-02-25 16:03:37', 13, NULL),
(85, 12, 24, 'тест', '21-02-25 16:04:18', 13, NULL),
(86, 12, 24, 'fsdfs', '21-02-25 16:24:10', 13, NULL),
(87, 12, 24, 'круто', '21-02-25 16:24:22', 13, NULL),
(88, 12, 24, 'da da', '21-02-25 21:01:32', 13, NULL),
(89, 12, 22, 'ага', '21-02-25 23:22:18', 12, NULL),
(90, 12, 22, 'здарова!', '21-02-25 23:22:26', 12, NULL),
(91, 12, 22, 'ку', '21-02-25 23:23:37', 12, NULL),
(92, 17, 12, 'dsadasda', '21-02-26 23:39:57', 14, 1),
(93, 17, 12, 'dddd', '21-02-26 23:40:36', 14, 1),
(94, 12, 17, 'dddd', '21-02-26 23:40:36', 14, NULL),
(95, 17, 12, 'dsadasdasd', '21-02-26 23:40:59', 14, 1),
(96, 12, 17, 'dsadasdasd', '21-02-26 23:40:59', 14, NULL),
(97, 17, 12, 'ddddddddddddd', '21-02-26 23:41:03', 14, 1),
(98, 12, 17, 'ddddddddddddd', '21-02-26 23:41:03', 14, NULL),
(99, 17, 12, 'dddddddddddd', '21-02-26 23:41:09', 14, 1),
(100, 12, 17, 'dddddddddddd', '21-02-26 23:41:09', 14, NULL),
(101, 17, 12, 'ddddd', '21-02-26 23:41:15', 14, 1),
(102, 17, 12, 'ddddddd', '21-02-26 23:41:23', 14, 1),
(103, 17, 12, 'dasdsad', '21-02-26 23:41:27', 14, 1),
(104, 12, 17, 'ddd', '21-02-27 13:23:14', 14, NULL),
(105, 12, 17, 'ddddd', '21-02-27 13:24:43', 14, NULL),
(106, 12, 17, 'dddd', '21-02-27 13:26:43', 14, NULL),
(107, 12, 17, 'asdasd', '21-02-27 13:35:45', 14, NULL),
(108, 12, 17, 'dsadasd', '21-02-27 13:37:27', 14, NULL),
(109, 12, 17, 'dddd', '21-02-27 13:37:32', 14, NULL),
(110, 12, 17, '2', '21-02-27 13:56:27', 14, NULL),
(111, 12, 17, '1', '21-02-27 13:56:28', 14, NULL),
(112, 12, 17, '3', '21-02-27 13:56:29', 14, NULL),
(113, 12, 17, '4', '21-02-27 13:56:30', 14, NULL),
(114, 12, 17, 'dddd', '21-02-27 14:00:30', 14, NULL),
(115, 12, 17, '1123123', '21-02-27 14:00:38', 14, NULL),
(116, 12, 17, 'aaaa', '21-02-27 14:01:20', 14, NULL),
(117, 12, 17, 'dddd', '21-02-27 14:05:23', 14, NULL),
(118, 12, 17, '123', '21-02-27 14:18:39', 14, NULL),
(119, 12, 17, '123', '21-02-27 14:18:43', 14, NULL),
(120, 12, 17, '321', '21-02-27 14:18:59', 14, NULL),
(121, 12, 17, 'sosi', '21-02-27 14:19:32', 14, NULL),
(122, 12, 17, '11111', '21-02-27 14:31:36', 14, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `deru_dialogs`
--

CREATE TABLE `deru_dialogs` (
  `dialog_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(3000) NOT NULL,
  `date` varchar(25) NOT NULL,
  `const_author` int(11) NOT NULL,
  `const_user` int(11) NOT NULL,
  `checked` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deru_dialogs`
--

INSERT INTO `deru_dialogs` (`dialog_id`, `author_id`, `user_id`, `text`, `date`, `const_author`, `const_user`, `checked`) VALUES
(8, 12, 21, '321', '21-01-08 17:23:08', 21, 12, 1),
(9, 12, 25, '123', '21-01-08 17:26:58', 25, 12, 1),
(11, 12, 18, 'ну здарова', '21-01-09 20:03:27', 18, 12, 1),
(12, 22, 12, 'ку', '21-02-25 23:23:37', 12, 22, 1),
(13, 12, 24, 'da da', '21-01-08 21:01:32', 12, 24, 0),
(14, 12, 17, '11111', '21-02-27 14:31:36', 17, 12, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `deru_errors`
--

CREATE TABLE `deru_errors` (
  `id` int(11) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deru_errors`
--

INSERT INTO `deru_errors` (`id`, `text`) VALUES
(1, 'dasdasdadsdsada'),
(2, 'Добрый день! \n \nОчень важная и полезная инфа! \nРуководству \n \nПосмотрите  отличный вариант подарка Начальнику на 23 февраля! \nШефу Партнеру Начальнику Собственнику фирмы Руководителю Боссу Акционеру  ! \n \n \nкнига и CD - Подарочное исполнение \n \n2 взгляда на главные вопросы предпринимателя в РФ \n2 отчета известного арбитражного адвоката \n \nКак заработать больше? \nИ  Как сохранить заработанное? \n \nКачественный Подарок Директору \n \nВся информация по вашему запросу на сайте \nhttps://utiny.page.link/SQWC \n \nС уважением, Sergey \n \n \n \n31101767 \n \n \n \n76591479 \n \n86044764'),
(3, 'Здравствуйте! \r\n \r\nОднозначно полезная подборка информации! \r\nДля руководства \r\n \r\nПосмотрите пожалуйста нестандартный подарок Директору к 23 февраля! \r\nБоссу Начальнику Акционеру Партнеру Собственнику фирмы Руководителю Шефу  ! \r\n \r\n \r\nПодарочное издание - книга и СД диск \r\n \r\n2 взгляда на основные вопросы предпринимателя в России \r\nДва отчета известного практикующего адвоката \r\n \r\nКак заработать больше? \r\nи  Как сохранить заработанное? \r\n \r\nКачественный Презент Начальнику \r\n \r\nДополнительная информация по вашему запросу на сайте \r\nhttps://utiny.page.link/HZEL \r\n \r\nС уважением, Sergey \r\n \r\n \r\n \r\n57103870 \r\n \r\n \r\n \r\n23712697 \r\n \r\n59511247'),
(4, 'Сформируем для вашей компании актуальную базу данных действующих предприятий, ваших потенциальных клиентов — http://007up.ru/base \n \nНаши базы компаний отлично подходят для холодного обзвона, поиска новых клиентов и email-рассылок. \n \nСможем сделать выборку для вас по любому виду деятельности или региону. По каждой компании, в нашей базе содержится подробная информация. \n \nТакже вы можете купить у нас базу по всей России. \n \nС нашей базой, вы найдете новых клиентов или партнеров и увеличите выручку компании. \n \nЗаказать базу можно по этой ссылке http://007up.ru/base'),
(5, 'Здравствуйте! \r\n \r\nПредлагаем размещение объявлений и товаров на Авито и Юле в виде массового постинга с гарантией от блокировки или в виде создания официального магазина на АВИТО ---> http://007up.ru/avito \r\n \r\nЭта услуга подходит для любого вида товаров и услуг. Авито и Юла это огромные площадки с общей посещаемостью более 10 млн человек в сутки, что даст вашей рекламе огромные охваты и возможность искать любых клиентов в любых сферах. \r\n \r\nМожем размещать любые объемы, в любых городах и по любому графику (хоть каждый час) — в том числе и одинаковые объявления без блокировок. \r\n \r\nВы значительно увеличите количество заявок с помощью данной услуги, т.к.: \r\n1. На Авито и Юле находятся самые «горячие» покупатели товаров и услуг \r\n2. Стоимость клиента, пока значительно ниже, чем при контекстной рекламе \r\n3. На Авито и Юле еще небольшая конкуренция (опять-же пока…) \r\n \r\nИнтересно? \r\n \r\nОставьте заявку на услугу или консультацию на этом сайте http://007up.ru/avito'),
(6, 'Hello Dearest    , \r\nI would like to introduce myself for the first time.  My name is Dennis Cruz, the personal lawyer of my late client Mr. Johann, \r\nHe worked as a private businessman in the international field.  In 2017 my client died of a serious heart attack. \r\nMy client was single and childless.  He left a fortune worth € 7,600,000.00 (seven million, six hundred thousand euros) held in a bank in Spain. \r\nThe bank informed me that I had to introduce a beneficiary who was entitled to inherit. \r\nAfter several searches, I received no further helpful information about the relatives of my deceased client.  This is why I wrote to you because you have the same last name. \r\nI need your consent and your cooperation to introduce you as the beneficiary. \r\n \r\nAll of my efforts to find relatives of my late client have been unsuccessful.  As a result, I would suggest dividing the assets, you get 40% percent of the share and 40% percent would then be due to me.  20% percent will be donated to non-profit organizations.  All necessary documents also contain the certificate of origin in order to avoid questions from the responsible bank.  The requested documents that you need for the procedure are legal and notarized.  The property does not contain any criminal origin.  The procedure will be flawless without complications, the money transfer will be completed in accordance with the law.  All I need from you is your trust and a good cooperation. \r\n \r\nPlease contact me on the private phone number: +1 9152293522 and email address: denniscruzlawfirm005@gmail.com info@denniscruzlawfirm.com \r\n \r\nThe proposed transaction is through legal remedies for your \r\nlegal protection. \r\n \r\nDennis Cruz Esq. \r\n8822 Mckinley Avenue \r\nLos Angeles, CA 90002 USA \r\nTel:+19152293522 \r\nFax: +17025495667');

-- --------------------------------------------------------

--
-- Структура таблицы `deru_feedback`
--

CREATE TABLE `deru_feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deru_feedback`
--

INSERT INTO `deru_feedback` (`id`, `name`, `text`, `date`, `status`) VALUES
(56, 'kirvol90', 'Все устроило по цене и качеству работы. В подарок установили уникальный прелоадер :) Сверстали сайт очень быстро и натянули на DLE', '08.12.2020, 0:54', 'published'),
(67, 'DERUINO', 'Все устроило по цене и качеству работы. В подарок установили уникальный прелоадер :) Сверстали сайт очень быстро и натянули на DLE', '22.12.2020, 22:58', 'moderation'),
(68, 'badmotherfucker', 'Ну короче сайты делают но деньги просят конечно я не заказывал', '04.01.2021, 21:40', 'moderation'),
(69, 'DERUINO', 'проверка говна из эопы, адвыаывадывадвыадыва, аывдаывдадцуацуац12312331ывадаД, ываываывлаывлаываы', '25.02.2021, 13:50', 'moderation');

-- --------------------------------------------------------

--
-- Структура таблицы `deru_logs`
--

CREATE TABLE `deru_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checked` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deru_logs`
--

INSERT INTO `deru_logs` (`id`, `user_id`, `text`, `ip`, `date`, `checked`) VALUES
(18, 12, 'Изменение пароля', '185.97.201.213', '24 Feb 2021 14:02', 1),
(19, 12, 'Изменение пароля', '185.97.201.213', '24 Feb 2021 14:02', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `deru_users`
--

CREATE TABLE `deru_users` (
  `id` int(11) NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_group` int(11) NOT NULL,
  `regdate` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_token` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deru_users`
--

INSERT INTO `deru_users` (`id`, `name`, `password`, `email`, `user_group`, `regdate`, `pass_token`, `user_ip`) VALUES
(12, 'DERUINO', '7202abb39ad007f1360e8b43c2712387', 'flashnickel@gmail.com', 1, '10.12.2020, 1:19', NULL, NULL),
(16, 'senior', 'c74500dddff8113a6bd1e0ec5c249487', 'kirvol90@yandex.ru', 4, '13.12.2020, 20:19', '', '83.102.203.24'),
(17, 'SEXKID', 'c74500dddff8113a6bd1e0ec5c249487', 'kirillxer205@gmail.com', 4, '23.12.2020, 23:46', NULL, '185.97.201.72'),
(18, 'deruwork', '7202abb39ad007f1360e8b43c2712387', 'main@deruwork.ru', 4, '04.01.2021, 20:12', NULL, '83.102.203.102'),
(20, 'testderu', 'c74500dddff8113a6bd1e0ec5c249487', 'test@deruwork.ru', 4, '04.01.2021, 21:01', NULL, '83.102.203.102'),
(21, 'deruworking', 'c74500dddff8113a6bd1e0ec5c249487', 'deruworking@gmail.com', 4, '04.01.2021, 21:08', 'qpPfa7dM0VTgE9FK2i5J', '83.102.203.102'),
(22, 'badmotherfucker', 'c74500dddff8113a6bd1e0ec5c249487', 'art3824@yandex.ru', 4, '04.01.2021, 21:39', NULL, '92.100.238.124'),
(23, 'tester', '6a8fa4b442363b615870487276fbfde1', 'artcat2707@gmail.com', 4, '04.01.2021, 21:41', NULL, '92.100.238.124'),
(24, 'derutest1', 'c74500dddff8113a6bd1e0ec5c249487', 'derutest1@gmail.com', 4, '04.01.2021, 22:46', NULL, '83.102.203.102'),
(25, 'test5', 'c74500dddff8113a6bd1e0ec5c249487', 'test5@deruwork.ru', 4, '08.01.2021, 17:03', NULL, '185.97.201.213');

-- --------------------------------------------------------

--
-- Структура таблицы `deru_works`
--

CREATE TABLE `deru_works` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `secondname` varchar(25) NOT NULL,
  `image` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deru_works`
--

INSERT INTO `deru_works` (`id`, `firstname`, `secondname`, `image`, `color`, `url`) VALUES
(27, 'MONITOR', 'Adaptive', '361.png', 'gray', 'https://deruwork.ru/modules/works/projects/monitor/index.php'),
(28, 'LR-STUDIO', 'Adaptive', '7954.png', 'darkgreen', 'https://deruwork.ru/modules/works/projects/lr-studio/index.php'),
(29, 'IMPULSECRAFT', 'Gaming', '123.png', 'gray', '#'),
(30, 'GASTONE', 'Landing Page', '6114.png', 'purple', 'https://deruwork.ru/modules/works/projects/gastone/index.php'),
(31, 'ROBODEC', 'Adaptive', '2025.png', 'sky', 'https://deruwork.ru/modules/works/projects/robodec/index.php'),
(32, 'FFROUGE', 'Landing Page', '9993.png', 'blood', 'http://ffrouge.com'),
(33, 'ELMARU', 'Landing Page', '2874.png', 'tide', 'https://elmaru.com'),
(34, 'DERUWORK', 'buisness', '5615.png', 'gray', 'https://deruwork.ru'),
(35, 'Y-KEYS', 'Landing Page', '2197.png', 'blood', 'https://deruwork.ru/modules/works/projects/ykeys/index.php'),
(36, 'DEFIPAY', 'Landing Page', '2706.png', 'purple', 'https://deruwork.ru/modules/works/projects/defipay/index.php'),
(49, 'keke', 'keke', '228.png', 'blood', 'https://yandex.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `deru_auth_logs`
--
ALTER TABLE `deru_auth_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_chat`
--
ALTER TABLE `deru_chat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_dialogs`
--
ALTER TABLE `deru_dialogs`
  ADD PRIMARY KEY (`dialog_id`);

--
-- Индексы таблицы `deru_errors`
--
ALTER TABLE `deru_errors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_feedback`
--
ALTER TABLE `deru_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_logs`
--
ALTER TABLE `deru_logs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_users`
--
ALTER TABLE `deru_users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deru_works`
--
ALTER TABLE `deru_works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `deru_auth_logs`
--
ALTER TABLE `deru_auth_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT для таблицы `deru_chat`
--
ALTER TABLE `deru_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT для таблицы `deru_dialogs`
--
ALTER TABLE `deru_dialogs`
  MODIFY `dialog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `deru_errors`
--
ALTER TABLE `deru_errors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `deru_feedback`
--
ALTER TABLE `deru_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT для таблицы `deru_logs`
--
ALTER TABLE `deru_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `deru_users`
--
ALTER TABLE `deru_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `deru_works`
--
ALTER TABLE `deru_works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
