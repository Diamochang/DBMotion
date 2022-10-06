-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2022-10-05 13:15:42
-- 服务器版本： 8.0.21
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `icp_data`
--

-- --------------------------------------------------------

--
-- 表的结构 `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `icp_id` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `site_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `domain` text COLLATE utf8mb4_general_ci NOT NULL,
  `site_information` text COLLATE utf8mb4_general_ci NOT NULL,
  `site_owner` text COLLATE utf8mb4_general_ci NOT NULL,
  `logtime` date NOT NULL,
  `site_code` text COLLATE utf8mb4_general_ci NOT NULL,
  `site_status` text COLLATE utf8mb4_general_ci NOT NULL,
  `key111` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`key111`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 转存表中的数据 `main`
--

INSERT INTO `main` (`icp_id`, `site_name`, `domain`, `site_information`, `site_owner`, `logtime`, `site_code`, `site_status`, `key111`) VALUES
('22100001', 'Favocas Meta', 'favocas.ml', 'Meta', 'Favocas', '2022-10-01', 'AAA11111AAA111AA', '正常', 1),
('22100002', 'Diamochang Station', 'imdchs.rf.gd', 'Meta', 'Diamochang', '2022-10-01', 'KKKK2K2K2K2KK2', '正常', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
