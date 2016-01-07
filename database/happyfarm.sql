-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-01-07 19:11:25
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
-- 資料表結構 `flower`
--

CREATE TABLE IF NOT EXISTS `flower` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `exp` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `flower`
--

INSERT INTO `flower` (`id`, `name`, `count`, `sold`, `exp`) VALUES
(1, '蘋果', 7, 200, 100),
(2, '花生', 7, 300, 200),
(3, '玉米', 8, 500, 300),
(4, '番茄', 29, 700, 400),
(5, '青椒', 7, 1000, 500),
(6, '葡萄', 1, 1500, 600),
(7, '香菇', 0, 2000, 700),
(8, '紅蘿蔔', 0, 2500, 800);

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(50) NOT NULL,
  `power` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `power`) VALUES
(1, '蛋糕', 200, 20),
(2, '滷肉飯', 500, 50),
(3, '巧克力', 700, 80),
(4, '爆米花', 1000, 100),
(5, '漢堡', 1200, 150),
(6, '飯糰', 1500, 200),
(7, '牛奶', 1800, 250),
(8, '烤雞', 2000, 300);

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
(1, '空地', 0, '0', '', 0, 0, 0),
(2, '空地', 200, '0', '', 0, 0, 0),
(3, '空地', 500, '1', '', 0, 0, 0),
(4, '紅蘿蔔', 1000, '3', '紅蘿蔔', 20, 700, 1452239230),
(5, '可採收', 2000, '5', '蘋果', 1, 100, 1452178265),
(6, '紅蘿蔔', 5000, '8', '紅蘿蔔', 20, 700, 1452237356);

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
('dcw', 12345, '育銘', 50, 12, '尚未解鎖', 10500, 1100, 2600, 15600);

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
(1, '蘋果', 1, 100, 200, 0, 0, 4, 100, '種子'),
(2, '花生', 2, 120, 300, 1, 0, 0, 200, '種子'),
(3, '玉米', 3, 200, 500, 2, 0, 4, 300, '種子'),
(4, '番茄', 5, 300, 700, 3, 0, 2, 400, '種子'),
(5, '青椒', 8, 500, 1000, 5, 0, 2, 500, '種子'),
(6, '葡萄', 10, 800, 1500, 8, 0, 0, 600, '種子'),
(7, '香菇', 15, 1000, 2000, 10, 0, 3, 700, '種子'),
(8, '紅蘿蔔', 20, 1500, 2500, 15, 0, 1, 800, '種子');

-- --------------------------------------------------------

--
-- 資料表結構 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `sold` int(50) NOT NULL,
  `exp` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `shop`
--

INSERT INTO `shop` (`id`, `name`, `time`, `money`, `sold`, `exp`) VALUES
(1, '蘋果', 6, 100, 200, 100),
(2, '花生', 4, 120, 300, 200),
(3, '玉米', 2, 200, 500, 300),
(4, '番茄', 3, 300, 700, 400),
(5, '青椒', 8, 500, 1000, 500),
(6, '葡萄', 12, 800, 1500, 600),
(7, '香菇', 15, 1000, 2000, 700),
(8, '紅蘿蔔', 20, 1500, 2500, 800);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `flower`
--
ALTER TABLE `flower`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- 使用資料表 AUTO_INCREMENT `land`
--
ALTER TABLE `land`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `seed`
--
ALTER TABLE `seed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
