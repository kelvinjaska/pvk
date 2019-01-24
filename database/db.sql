-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Янв 24 2019 г., 13:22
-- Версия сервера: 5.6.41
-- Версия PHP: 7.2.7

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- База данных: `kelvinja_php`
--
CREATE DATABASE IF NOT EXISTS `kelvinja_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kelvinja_php`;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'kasutaja', 'd41d8cd98f00b204e9800998ecf8427e', 'Ok', 'Ok2'),
(2, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
