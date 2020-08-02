-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-08-02 05:47:55
-- 服务器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `busbooking`
--

-- --------------------------------------------------------

--
-- 表的结构 `busschedule`
--

CREATE TABLE `busschedule` (
  `book_id` int(3) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_date` date NOT NULL,
  `book_image` text NOT NULL,
  `book_source` varchar(255) NOT NULL,
  `book_destination` varchar(255) NOT NULL,
  `bus_station` varchar(255) NOT NULL,
  `bus_station_time` varchar(255) NOT NULL,
  `book_time` varchar(255) NOT NULL,
  `max_seats` int(3) NOT NULL,
  `available_seats` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `busschedule`
--

INSERT INTO `busschedule` (`book_id`, `book_title`, `book_date`, `book_image`, `book_source`, `book_destination`, `bus_station`, `bus_station_time`, `book_time`, `max_seats`, `available_seats`) VALUES
(1, 'Johor -- Selangor', '2020-08-03', 'bus_1.jpg', 'Johor', 'Selangor', 'Johor Kajang KlangSentral TerminahShahAlam Selangor', '12:00pm 2:00pm 5:00pm 7:00pm 9:00pm', '12:00pm', 30, 28),
(2, 'Kuala Lumpur -- Selangor', '2020-08-02', 'bus_2.jpg', 'Kuala Lumpur', 'Selangor', 'KualaLumpur PuduSentral SabakBernam TBS Selangor', '1:00pm 5:00pm 9:00pm 11:00pm 12:00pm\r\n', '1:00pm', 20, 20),
(3, 'Johor -- Pulau Pinang', '2020-08-05', 'bus_3.jpg', 'Johor', 'Pulau Pinang', 'Johor SungaiNibong PenangSentral BukitMertajam PulauPinang', '1:00pm 8:00pm 10:00pm 11:00pm 12:00pm', '1:00pm', 25, 25),
(4, 'Negeri Sembilan -- Perak', '2020-08-08', 'bus_4.jpg', 'Negeri Sembilan', 'Perak', 'NegeriSembilan TerminalMeruRaya AyerTawar TerminalLumut Perak', '10:00am 2:00pm 4:00pm 6:00pm 7:00am', '10:00am', 30, 30),
(5, 'Pulau Pinang -- Kedah', '2020-08-12', 'bus_5.jpg', 'Pulau Pinang', 'Kedah', 'PulauPinang AlorSetar Changlun Jitra Kedah', '2:00pm 5:00pm 6:00pm 7:00pm 8:00pm', '2:00pm', 40, 40),
(6, 'Negeri sembilan -- Johor', '2020-08-12', 'bus_6.jpg', 'Negeri sembilan', 'Johor', 'NegeriSembilan JohorBahru Johor', '8:00am 2:00pm 3:00pm', '8:00am', 20, 20);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `bus_id` int(3) NOT NULL,
  `id` int(3) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `user_age` int(3) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`order_id`, `bus_id`, `id`, `Username`, `user_age`, `source`, `destination`, `date`) VALUES
(19, 1, 4, 'WongYeanChwen', 22, 'Johor', 'Selangor', '2020-08-02'),
(20, 1, 4, 'MarvinLim', 21, 'Johor', 'Selangor', '2020-08-02');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `First_name`, `Last_name`, `Email`, `Phone_no`) VALUES
(4, 'yeanchwen', 'Wong*197021', 'wong', 'yeanchwen', 'wong@gmail.com', '0111112213');

--
-- 转储表的索引
--

--
-- 表的索引 `busschedule`
--
ALTER TABLE `busschedule`
  ADD PRIMARY KEY (`book_id`);

--
-- 表的索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `busschedule`
--
ALTER TABLE `busschedule`
  MODIFY `book_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
