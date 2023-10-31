-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 01:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_admin`, `pass_admin`) VALUES
('admin', '12345678a');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Rau tươi'),
(2, 'Hoa quả'),
(5, 'Các loại hạt');

-- --------------------------------------------------------

--
-- Table structure for table `btl_bill`
--

CREATE TABLE `btl_bill` (
  `id_bill` int(12) NOT NULL,
  `nameKH` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` int(12) NOT NULL,
  `pttt` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `btl_bill`
--

INSERT INTO `btl_bill` (`id_bill`, `nameKH`, `address`, `tel`, `email`, `total`, `pttt`) VALUES
(11, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(12, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(13, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(14, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(15, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(18, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(19, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(20, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(21, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(22, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(23, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(24, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(25, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(26, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(27, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(28, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(29, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(30, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61000000, 0),
(31, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61500000, 0),
(32, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61500000, 0),
(33, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 61500000, 0),
(34, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(35, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(36, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(37, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(38, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(39, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(40, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(41, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 2000000, 0),
(42, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(43, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(44, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(45, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(46, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 30500000, 0),
(47, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 29000000, 0),
(48, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 29000000, 0),
(49, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(50, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 29000000, 0),
(51, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 1000000, 0),
(52, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 500000, 0),
(53, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(54, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 500000, 0),
(55, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(56, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(57, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(58, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(59, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(60, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(61, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(62, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(63, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(64, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(65, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 2000000, 0),
(66, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 31000000, 0),
(67, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(68, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(69, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(70, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(71, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(72, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(73, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(74, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(75, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 35000000, 0),
(76, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 4500000, 0),
(77, 'Quỳnh đáng yêu', 'Hà Nội', '2345677565', 'a@gmail.com', 30500000, 0),
(78, 'Quỳnh đáng yêu', 'Hà Nội', '2345677565', 'a@gmail.com', 0, 0),
(79, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(80, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(81, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(82, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(83, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(84, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(85, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 29000000, 0),
(86, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(87, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1000000, 0),
(88, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(89, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 500000, 0),
(90, 'a', 'Hà Nội', '2345677565', 'a@gmail.com', 2000000, 0),
(91, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(92, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 6000000, 0),
(93, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(94, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(95, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 6000000, 0),
(96, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 500000, 0),
(97, 'a', 'Hà Nội', '4567123333', 'a@gmail.com', 2000000, 0),
(98, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 30500000, 0),
(99, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 0, 0),
(100, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(101, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 1500000, 0),
(102, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 29000000, 0),
(103, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 30500000, 0),
(104, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 32000000, 0),
(105, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 63000000, 0),
(106, 'b', 'Hà Nội', '4567123333', 'a@gmail.com', 30500000, 0),
(107, 'Quỳnh đáng yêu', 'Hà Nội', '4567123333', 'a@gmail.com', 2000000, 0),
(108, '', '', '', '', 156000000, 0),
(109, '', '', '', '', 1500000, 0),
(110, '', '', '', '', 1500000, 0),
(111, '', '', '', '', 4500000, 0),
(112, '', '', '', '', 0, 0),
(113, '', '', '', '', 0, 0),
(114, '', '', '', '', 0, 0),
(115, '', '', '', '', 0, 0),
(116, '', '', '', '', 0, 0),
(117, '', '', '', '', 1500000, 0),
(118, 'Nguyen Van E', 'hh', 'hh', '20201241@eaut.edu.vn', 0, 0),
(119, 'Nguyen Van E', 'hh', 'hh', '20201241@eaut.edu.vn', 0, 0),
(120, 'Nguyen Van E', 'hh', 'hh', '20201241@eaut.edu.vn', 0, 0),
(121, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 3000000, 0),
(122, 'Nguyen Van E', 'hh', '123456', '20201241@eaut.edu.vn2', 3000000, 0),
(123, 'Nguyen Van E', 'hh', '123456', '20201241@eaut.edu.vn2', 0, 0),
(124, 'Nguyen Van E', 'hh', '123456', '20201241@eaut.edu.vn2', 0, 0),
(125, 'Nguyen Van E', 'hh', '123456', '20201241@eaut.edu.vn2', 0, 0),
(126, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(127, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 1500000, 0),
(128, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(129, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 0, 0),
(130, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 3000000, 0),
(131, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(132, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 1500000, 0),
(133, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 0, 0),
(134, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 0, 0),
(135, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(136, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 0, 0),
(137, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 0, 0),
(138, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 0, 0),
(139, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 0, 0),
(140, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 1500000, 0),
(141, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 3000000, 0),
(142, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 0, 0),
(143, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(144, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 1500000, 0),
(145, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 1500000, 0),
(146, 'Nguyen Van E', 'hn', '123456', 'nguyenvanc@gmail.com', 1500000, 0),
(147, 'Nguyen Van E', 'hn', '0983709218', '20201241@eaut.edu.vn', 1500000, 0),
(148, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn2', 1000000, 0),
(149, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 35000, 0),
(150, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 40000, 0),
(151, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 500000, 0),
(152, 'Nguyen Van E', 'hn', '123456', '20201241@eaut.edu.vn', 40000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `btl_cart`
--

CREATE TABLE `btl_cart` (
  `id_cart` int(12) NOT NULL,
  `tensp` varchar(100) NOT NULL,
  `hinhsp` varchar(100) NOT NULL,
  `dongia` int(12) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(12) NOT NULL,
  `id_bill` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `btl_cart`
--

INSERT INTO `btl_cart` (`id_cart`, `tensp`, `hinhsp`, `dongia`, `soluong`, `thanhtien`, `id_bill`) VALUES
(2, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 30),
(3, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 30),
(4, 'iphone 14', 'iphoneX.jpg', 29000000, 2, 58000000, 30),
(5, 'nokia', 'nokia.jpg', 1000000, 1, 1000000, 30),
(6, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 31),
(7, 'iphone 14', 'iphoneX.jpg', 29000000, 2, 58000000, 31),
(8, 'nokia', 'nokia.jpg', 1000000, 2, 2000000, 31),
(9, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 32),
(10, 'iphone 14', 'iphoneX.jpg', 29000000, 2, 58000000, 32),
(11, 'nokia', 'nokia.jpg', 1000000, 2, 2000000, 32),
(12, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 33),
(13, 'iphone 14', 'iphoneX.jpg', 29000000, 2, 58000000, 33),
(14, 'nokia', 'nokia.jpg', 1000000, 2, 2000000, 33),
(15, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 37),
(16, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 39),
(17, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 41),
(18, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 41),
(19, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 42),
(20, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 44),
(21, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 45),
(27, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 50),
(28, 'nokia', 'nokia.jpg', 1000000, 1, 1000000, 51),
(29, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 52),
(30, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 54),
(31, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 64),
(32, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 65),
(33, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 65),
(34, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 66),
(35, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 66),
(36, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 66),
(37, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 67),
(38, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 67),
(39, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 67),
(40, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 68),
(41, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 68),
(42, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 68),
(43, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 69),
(44, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 69),
(45, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 69),
(46, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 70),
(47, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 70),
(48, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 70),
(49, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 71),
(50, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 71),
(51, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 71),
(52, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 72),
(53, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 72),
(54, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 72),
(55, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 73),
(56, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 73),
(57, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 73),
(58, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 74),
(59, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 74),
(60, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 74),
(61, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 75),
(62, 'xiao mi note5', 'xm.jpg', 500000, 9, 4500000, 75),
(63, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 75),
(64, 'iphone X', 'iphoneX.jpg', 1500000, 3, 4500000, 76),
(65, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 77),
(66, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 77),
(67, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 79),
(68, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 81),
(69, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 83),
(70, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 85),
(71, 'nokia', 'nokia.jpg', 1000000, 1, 1000000, 87),
(72, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 89),
(73, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 90),
(74, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 90),
(75, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 91),
(76, 'Samsung Galaxy S21 Untrall', 'samsung.jpg', 6000000, 1, 6000000, 92),
(77, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 94),
(78, 'Samsung Galaxy S21 Untrall', 'samsung.jpg', 6000000, 1, 6000000, 95),
(79, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 96),
(80, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 97),
(81, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 97),
(82, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 98),
(83, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 98),
(84, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 100),
(85, 'nokia', 'nokia.jpg', 1000000, 1, 1000000, 100),
(86, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 101),
(87, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 102),
(88, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 103),
(89, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 103),
(90, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 104),
(91, 'iphone X', 'iphoneX.jpg', 1500000, 2, 3000000, 104),
(92, 'iphone 14', 'iphoneX.jpg', 29000000, 2, 58000000, 105),
(93, 'iphone X', 'iphoneX.jpg', 1500000, 3, 4500000, 105),
(94, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 105),
(95, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 106),
(96, 'iphone 14', 'iphoneX.jpg', 29000000, 1, 29000000, 106),
(97, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 107),
(98, 'xiao mi note5', 'xm.jpg', 500000, 1, 500000, 107),
(99, 'iphone X', 'iphoneX.jpg', 1500000, 104, 156000000, 108),
(100, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 109),
(101, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 110),
(102, 'iphone X', 'iphoneX.jpg', 1500000, 3, 4500000, 111),
(103, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 117),
(104, 'iphone X', 'iphoneX.jpg', 1500000, 2, 3000000, 121),
(105, 'iphone X', 'iphoneX.jpg', 1500000, 2, 3000000, 122),
(106, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 126),
(107, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 127),
(108, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 128),
(109, 'iphone X', 'iphoneX.jpg', 1500000, 2, 3000000, 130),
(110, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 131),
(111, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 132),
(112, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 135),
(113, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 140),
(114, 'iphone X', 'iphoneX.jpg', 1500000, 2, 3000000, 141),
(115, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 143),
(116, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 144),
(117, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 145),
(118, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 146),
(119, 'iphone X', 'iphoneX.jpg', 1500000, 1, 1500000, 147),
(120, 'Dứa', 'qua1.jpg', 500000, 2, 1000000, 148),
(121, 'Táo', 'qua5.jpg', 35000, 1, 35000, 149),
(122, 'Bơ', 'qua2.webp', 40000, 1, 40000, 150),
(123, 'Dứa', 'qua1.jpg', 500000, 1, 500000, 151),
(124, 'Bơ', 'qua2.webp', 40000, 1, 40000, 152);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `price` int(10) NOT NULL,
  `quanlity` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `infor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `price`, `quanlity`, `description`, `brand_id`, `infor`) VALUES
(22, 'Dứa', 'qua1.jpg', 500000, 3, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(23, 'Bơ', 'qua2.webp', 40000, 10, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(24, 'Cà chua', 'qua3.jpg', 10000, 15, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(25, 'Nho', 'qua4.jpg', 30000, 15, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(26, 'Táo', 'qua5.jpg', 35000, 15, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(27, 'Cam', 'qua6.jpg', 23600, 15, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(28, 'Đào', 'qua8.webp', 52000, 15, 'Hoa quả tươi bạn nên thử một lần', 2, ''),
(29, 'Chanh', 'qua9.png', 2000, 15, 'Hoa quả tươi bạn nên thử một lần', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `repassword`, `trang_thai`) VALUES
(2, 'nguyenvanc', '20201241@eaut.edu.vn', '12345678a', '12345678a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `btl_bill`
--
ALTER TABLE `btl_bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Indexes for table `btl_cart`
--
ALTER TABLE `btl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_bill` (`id_bill`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `btl_bill`
--
ALTER TABLE `btl_bill`
  MODIFY `id_bill` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `btl_cart`
--
ALTER TABLE `btl_cart`
  MODIFY `id_cart` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `btl_cart`
--
ALTER TABLE `btl_cart`
  ADD CONSTRAINT `btl_cart_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `btl_bill` (`id_bill`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
