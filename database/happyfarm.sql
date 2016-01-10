-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-10 16:39:23
-- 伺服器版本: 5.6.26
-- PHP 版本： 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `happyfarm`
--

-- --------------------------------------------------------

--
-- 資料表結構 `seed`
--

CREATE TABLE IF NOT EXISTS `seed` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `staus` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `exp` int(11) NOT NULL,
  `step` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '種子'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `seed`
--

INSERT INTO `seed` (`id`, `name`, `time`, `money`, `sold`, `level`, `staus`, `count`, `exp`, `step`) VALUES
(1, '蘋果', 10, 100, 200, 0, 0, 3, 100, '種子'),
(2, '花生', 15, 120, 300, 1, 0, 5, 200, '種子'),
(3, '玉米', 18, 200, 500, 2, 0, 1, 300, '種子'),
(4, '番茄', 20, 300, 700, 3, 0, 1, 400, '種子'),
(5, '青椒', 30, 500, 1000, 5, 0, 0, 500, '種子'),
(6, '葡萄', 45, 800, 1500, 8, 0, 2, 600, '種子'),
(7, '香菇', 59, 1000, 2000, 10, 0, 1, 700, '種子'),
(8, '紅蘿蔔', 60, 1500, 2500, 15, 0, 0, 800, '種子');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
