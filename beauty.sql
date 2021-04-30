-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `b_staff`
--

CREATE TABLE `b_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `b_staff`
--

INSERT INTO `b_staff` (`id`, `name`, `password`) VALUES
(14, '西野健也', 'ce4434973f224b33f2ea48f4556be467'),
(47, '中村雄樹', 'f6b04eae989eec2ec6731ce529cf51a6');

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `time` varchar(3) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `time`, `price`) VALUES
(1, 'ヘアカット ', '60', 3800),
(2, 'ヘアカラー', '60', 7800),
(3, 'ヘアセット', '35', 1000),
(4, 'cut&color', '60', 9000),
(5, 'cu&col&s', '60', 9800);

-- --------------------------------------------------------

--
-- テーブルの構造 `order_form`
--

CREATE TABLE `order_form` (
  `order_id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `sex` int(11) NOT NULL,
  `sns_id` varchar(15) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `haircolor` varchar(50) NOT NULL,
  `hairstyle` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `order_form`
--

INSERT INTO `order_form` (`order_id`, `user`, `sex`, `sns_id`, `menu_name`, `haircolor`, `hairstyle`, `remarks`, `order_time`) VALUES
(29, '西野健也', 1, 'sksk_frog', 'カット&amp;カラー&amp;セット', 'ベージュ系', 'マッシュ', '特にございません', '2021-04-13 11:27:45'),
(38, '木先奈々', 1, 'nana_gram', 'カット&amp;カラー', 'ピンク', 'セミロング', '毛先だけ整えたい', '2021-04-26 10:47:46'),
(42, '田中幸子', 2, 'sachi_gram', 'カット&amp;カラー', 'yellow', 'long', '', '2021-04-26 14:46:51'),
(47, '高橋太郎', 1, 'takahasi022_', 'カット&amp;カラー', 'green', 'マンバン', '特に', '2021-04-29 10:20:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b_staff`
--
ALTER TABLE `b_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `b_staff`
--
ALTER TABLE `b_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
