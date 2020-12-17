-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 12 月 12 日 13:18
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cat_database2`
--

-- --------------------------------------------------------

--
-- 資料表結構 `project`
--

CREATE TABLE `project` (
  `project_id` varchar(45) NOT NULL,
  `project_pm` varchar(45) NOT NULL,
  `project_start` varchar(45) DEFAULT NULL,
  `project_end` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `project`
--

INSERT INTO `project` (`project_id`, `project_pm`, `project_start`, `project_end`) VALUES
('A20200412', 'knkn@qq.com', '2020-12-12', '2020-04-22'),
('A20201213', '123@qq.com', '2020-12-12', '2021-01-10');

-- --------------------------------------------------------

--
-- 資料表結構 `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `ST` varchar(500) NOT NULL,
  `TT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `translation`
--

CREATE TABLE `translation` (
  `id` int(11) NOT NULL,
  `ST` varchar(10000) NOT NULL,
  `TT` varchar(10000) NOT NULL,
  `file_name` varchar(45) NOT NULL,
  `project_id` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `translation_memory`
--

CREATE TABLE `translation_memory` (
  `id` int(11) NOT NULL,
  `ST` varchar(10000) NOT NULL,
  `TT` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `Email` varchar(80) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `authority` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`Email`, `name`, `password`, `authority`) VALUES
('', '', '', ''),
('123123@qq.com', '123123', '123', '0'),
('123@qq.com', 'Ada', 'ada123', '1'),
('136@qq.com', '136qq', '136', '0'),
('456@163.com', 'Echo', 'echo456', '0'),
('789@126.com', 'Jennifer', 'jennifer789', '0'),
('kanae@163.com', 'test2', 'test2', '1'),
('knkn@qq.com', 'Echo', 'knkn', '1');

-- --------------------------------------------------------

--
-- 資料表結構 `user_project`
--

CREATE TABLE `user_project` (
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `project_id` varchar(45) COLLATE utf8_bin NOT NULL,
  `file_name` varchar(80) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `user_project`
--

INSERT INTO `user_project` (`Email`, `project_id`, `file_name`) VALUES
('123123@qq.com', 'A20200412', NULL),
('123@qq.com', 'A20201213', NULL),
('136@qq.com', 'A20201213', NULL),
('456@163.com', 'A20201213', NULL),
('789@126.com', 'A20201213', NULL),
('knkn@qq.com', 'A20200412', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- 資料表索引 `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `translation`
--
ALTER TABLE `translation`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `translation_memory`
--
ALTER TABLE `translation_memory`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- 資料表索引 `user_project`
--
ALTER TABLE `user_project`
  ADD PRIMARY KEY (`Email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `translation`
--
ALTER TABLE `translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `translation_memory`
--
ALTER TABLE `translation_memory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
