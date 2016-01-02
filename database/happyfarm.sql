-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016 �?01 ??02 ??12:59
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `happyfarm`
--

-- --------------------------------------------------------

--
-- 資料表結構 `flower`
--

CREATE TABLE IF NOT EXISTS `flower` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `flower`
--

INSERT INTO `flower` (`id`, `name`, `count`, `sold`) VALUES
(1, '小米', 0, 200),
(2, '稻子', 1, 300),
(3, '蘋果', 10, 500),
(4, '番茄', 4, 400),
(5, '青椒', 4, 600),
(6, '葡萄', 0, 1000);

-- --------------------------------------------------------

--
-- 資料表結構 `land`
--

CREATE TABLE IF NOT EXISTS `land` (
  `id` int(10) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '尚未解鎖',
  `money` int(11) NOT NULL,
  `level` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `seed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `ftime` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `land`
--

INSERT INTO `land` (`id`, `status`, `money`, `level`, `seed`, `time`, `exp`, `ftime`) VALUES
(1, '青椒', 0, '', '青椒', 8, 500, 1451752677),
(2, '蘋果', 0, '1', '蘋果', 6, 200, 1451756778),
(3, '葡萄', 500, '1', '葡萄', 12, 0, 1451767051),
(4, '葡萄', 1000, '3', '葡萄', 12, 0, 1451773017),
(5, '葡萄', 1200, '3', '葡萄', 12, 0, 1451773022),
(6, '空地', 3000, '8', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` int(11) NOT NULL,
  `nickname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `power` int(11) NOT NULL DEFAULT '100',
  `LV` int(11) NOT NULL DEFAULT '1',
  `land` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '尚未解鎖',
  `money` int(11) NOT NULL DEFAULT '1000',
  `exp1` int(11) NOT NULL DEFAULT '0',
  `exp2` int(11) NOT NULL DEFAULT '100',
  `totalexp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `player`
--

INSERT INTO `player` (`id`, `pwd`, `nickname`, `power`, `LV`, `land`, `money`, `exp1`, `exp2`, `totalexp`) VALUES
('dcw', 12345, '育銘', 100, 8, '尚未解鎖', 9000, 1100, 1800, 7200);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `seed`
--

INSERT INTO `seed` (`id`, `name`, `time`, `money`, `sold`, `level`, `staus`, `count`, `exp`, `step`) VALUES
(1, '蘋果', 6, 100, 500, 1, 0, 0, 200, '種子'),
(2, '小米', 4, 100, 200, 1, 0, 1, 200, '種子'),
(3, '稻子', 2, 100, 300, 1, 0, 8, 200, '種子'),
(4, '番茄', 3, 100, 400, 1, 0, 7, 400, '種子'),
(5, '青椒', 8, 200, 600, 2, 0, 7, 500, '種子'),
(6, '葡萄', 12, 400, 1000, 5, 0, 1, 0, '種子');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`id`, `name`, `time`, `money`, `exp`, `sold`, `level`) VALUES
(1, '蘋果', 6, 100, 200, 500, 0),
(2, '小米', 4, 100, 200, 200, 0),
(3, '稻子', 2, 100, 200, 300, 1),
(4, '番茄', 3, 100, 400, 400, 1),
(5, '青椒', 8, 200, 500, 600, 2),
(6, '葡萄', 12, 400, 600, 1000, 5);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `seed`
--
ALTER TABLE `seed`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `flower`
--
ALTER TABLE `flower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `land`
--
ALTER TABLE `land`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
