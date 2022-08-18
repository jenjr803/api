-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-05 23:44:34
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `web04`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `bq4_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '帳號',
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '密碼',
  `pr` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '權限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `bq4_admin` (`id`, `acc`, `pw`, `pr`) VALUES
(1, 'admin', '1234', 'a:5:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;i:5;}'),
(2, 'test', '1234', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"4\";}'),
(3, 'test01', '1234', 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bq4_bottom` (
  `id` int(10) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '頁尾版權'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bq4_bottom` (`id`, `bottom`) VALUES
(1, 'Copyright 2022');

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `bq4_goods` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '編號',
  `no` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品編號',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品名稱',
  `price` int(5) NOT NULL COMMENT '商品單價',
  `stock` int(5) NOT NULL COMMENT '庫存量',
  `spec` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '規格',
  `intro` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品簡介',
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品圖片',
  `big` int(5) NOT NULL COMMENT '大分類',
  `mid` int(5) NOT NULL COMMENT '次分類',
  `sh` int(2) NOT NULL COMMENT '上架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `goods`
--

INSERT INTO `bq4_goods` (`id`, `no`, `name`, `price`, `stock`, `spec`, `intro`, `img`, `big`, `mid`, `sh`) VALUES
(1, '364198', '鞋1', 1234, 1234, '1', '涼鞋', '0407.jpg', 4, 5, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `bq4_member` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '編號',
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '帳號',
  `pw` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '密碼',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '姓名',
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電話',
  `addr` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '地址',
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電子郵件',
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '註冊日期',
  `total` int(10) NOT NULL DEFAULT 0 COMMENT '總價'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `bq4_member` (`id`, `acc`, `pw`, `name`, `tel`, `addr`, `email`, `regdate`, `total`) VALUES
(1, 'admin', '1234', 'admin', '1234', '1234', 'admin@gmail.com', '2022-04-14 10:09:57', 0),
(3, 'mem01', '1234', 'mem01', '12345', '1234', 'mem01@gmail.com', '2022-04-18 08:03:23', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `ord`
--

CREATE TABLE `bq4_ord` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '帳號',
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '姓名',
  `email` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電子郵件',
  `addr` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '地址',
  `tel` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '電話',
  `total` int(10) NOT NULL COMMENT '總價',
  `goods` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '商品',
  `orddate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '訂購日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ord`
--

INSERT INTO `bq4_ord` (`id`, `no`, `acc`, `name`, `email`, `addr`, `tel`, `total`, `goods`, `orddate`) VALUES
(1, '2022042267795', 'mem01', 'mem01', 'mem01@gmail.com', '1234', '12345', 1234, 'a:1:{i:1;s:1:\"1\";}', '2022-04-22 10:16:40'),
(2, '2022042272674', 'mem01', 'mem02', 'mem02@gmail.com', '777', '777', 1234, 'a:1:{i:1;s:1:\"1\";}', '2022-04-22 10:17:55'),
(3, '2022042273703', 'mem01', 'mem02', 'mem02@gmail.com', '1234', '12345', 1234, 'a:1:{i:1;s:1:\"1\";}', '2022-04-22 10:18:24');

-- --------------------------------------------------------

--
-- 資料表結構 `type`
--

CREATE TABLE `bq4_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '選單名稱',
  `parent` int(2) NOT NULL DEFAULT 0 COMMENT '大分類'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `type`
--

INSERT INTO `bq4_type` (`id`, `name`, `parent`) VALUES
(1, '流行皮件', 0),
(2, '男用皮件', 1),
(4, '流行鞋區', 0),
(5, '男士皮鞋', 4),
(6, '當季商品', 0),
(7, '難用皮件1', 0),
(8, '難用', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `bq4_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bq4_bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `goods`
--
ALTER TABLE `bq4_goods`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `bq4_member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `ord`
--
ALTER TABLE `bq4_ord`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `type`
--
ALTER TABLE `bq4_type`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `bq4_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bq4_bottom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `goods`
--
ALTER TABLE `bq4_goods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `bq4_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ord`
--
ALTER TABLE `bq4_ord`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `type`
--
ALTER TABLE `bq4_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
