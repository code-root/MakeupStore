-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2022 at 09:33 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  `img` text NOT NULL,
  `status` bit(1) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `title` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `name_en`, `img`, `status`, `reg`, `title`) VALUES
(7, 'ملابس', 'rfref', '1626912000IMG28.jpg', b'0', '1626965495', 'erferfer'),
(8, 'sofa يؤسيؤ', 'ef', '1627603200IMG60.png', b'0', '1627676881', 'سيؤيسؤسيؤيسؤ'),
(9, 'drgtrgre', 'ef', '1627603200IMG2.png', b'0', '1627676886', 'يسؤسؤسي');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_products` int NOT NULL,
  `id_user` int NOT NULL,
  `date` datetime NOT NULL,
  `Status` bit(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_products`, `id_user`, `date`, `Status`) VALUES
(1, 1, 2, '2020-09-09 18:59:10', b'01'),
(2, 1, 2, '2020-09-09 19:00:25', b'01'),
(3, 1, 2, '2020-09-09 19:01:55', b'01'),
(4, 1, 2, '2020-09-09 19:02:29', b'01'),
(5, 1, 2, '2020-09-09 19:02:48', b'01'),
(6, 1, 2, '2020-09-09 19:04:32', b'01'),
(7, 1, 2, '2020-09-09 19:05:15', b'01'),
(8, 1, 2, '2020-09-09 19:06:15', b'01'),
(9, 1, 2, '2020-09-09 19:06:46', b'01'),
(10, 1, 2, '2020-09-09 19:07:18', b'01'),
(11, 1, 2, '2020-09-09 19:09:27', b'01'),
(12, 1, 2, '2020-09-09 19:10:04', b'01'),
(13, 1, 2, '2020-09-09 19:10:14', b'01'),
(14, 1, 2, '2020-09-09 19:17:02', b'01'),
(15, 1, 2, '2020-09-09 19:20:09', b'01'),
(16, 1, 2, '2020-09-09 19:20:14', b'01'),
(17, 1, 2, '2020-09-09 19:37:34', b'01'),
(18, 1, 2, '2020-09-09 19:37:38', b'01'),
(19, 1, 2, '2020-09-09 19:38:51', b'01'),
(20, 1, 2, '2020-09-09 19:39:50', b'01'),
(21, 1, 2, '2020-09-09 19:40:42', b'01'),
(22, 4, 2, '2020-09-09 19:54:12', b'01'),
(23, 3, 2, '2020-09-09 19:54:46', b'01'),
(24, 3, 2, '2020-09-09 19:55:00', b'01'),
(25, 1, 2, '2020-09-09 20:29:15', b'01'),
(26, 1, 3, '2021-07-10 16:33:35', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `name_en` varchar(20) NOT NULL,
  `txt` text,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `name_en`, `txt`, `status`) VALUES
(1, 'الدعم والتسليم', '', '', b'0'),
(2, 'السياسات والبنود', '', '<ol><li><font color=\"#000000\" style=\"background-color: rgb(140, 123, 198);\">ثبثصبثبث<font style=\"\">ب</font></font><table class=\"table table-bordered\"><tbody><tr><td><font color=\"#000000\" style=\"background-color: rgb(206, 222, 231);\"><br></font></td><td><font color=\"#000000\" style=\"background-color: rgb(206, 222, 231);\"><br></font></td><td><font color=\"#000000\" style=\"background-color: rgb(206, 222, 231);\"><br></font></td></tr><tr><td><font color=\"#000000\" style=\"background-color: rgb(206, 222, 231);\"><br></font></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td></tr></tbody></table><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p class=\"text-2xl md:text-3xl mb-5\" style=\"box-sizing: border-box; --tw-border-opacity: 1; --tw-shadow: 0 0 #0000; --tw-ring-inset: var(--tw-empty, ); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59, 130, 246, 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; margin: 0px 0px 1.25rem; font-size: 1.875rem; line-height: 2.25rem; color: #1f2937; font-family: Georgia, serif; border: 0px solid rgba(229,231,235,var(--tw-border-opacity));\"></p></li></ol>', b'0'),
(3, 'من نحن', '', NULL, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `categoryID` int DEFAULT NULL,
  `price` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL,
  `Status` bit(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `name_en`, `categoryID`, `price`, `img`, `url`, `date`, `Status`) VALUES
(7, 'sofa', 'regreg', 7, 3333, '1627603200IMG22.jpg', 'https://www.codexworld.com/capture-screenshot-website-url-php-google-api/', '2021-07-30 22:43:51', b'01'),
(3, 'rfvvger', 'regregregreg', NULL, 345, '1599264000IMG71.png', 'ee', '2020-09-05 19:27:09', b'01'),
(4, 'مصطفى محمد محمود الب', 'rgreg', NULL, 3243231, '1599264000IMG8.png', 'wsegrhtyuj', '2020-09-05 19:42:06', b'01'),
(5, 'drgtrgre', 'regreg', NULL, 0, '1626912000IMG74.png', 'https://www.codexworld.com/capture-screenshot-website-url-php-google-api/', '2021-07-22 16:51:49', b'01'),
(6, 'sofa', 'grerg', 7, 0, '1626912000IMG14.jpg', 'https://www.youtube.com/watch?v=ShMfhK_ZTQI', '2021-07-22 17:07:04', b'01'),
(8, 'ساعي بوفيه/Office Boy', 'regregre', 7, 33333444, '1627603200IMG91.com-shop-png-1256602.png', 'https://www.codexworld.com/capture-screenshot-website-url-php-google-api/', '2021-07-30 22:44:04', b'01'),
(9, 'خالد', 'sofa', 8, 33333444, '1628553600IMG22.jpg', 'https://www.youtube.com/watch?v=tNaQAb3apMU', '2021-08-10 14:57:49', b'01');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `instagram` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `snapchat` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `wa` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `instagram`, `facebook`, `snapchat`, `wa`) VALUES
(1, '0100grsvdcvsfdbt', 'vrf', 'lkjhgfgh', 'wqedewg4qtgevsf23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Full_name` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL,
  `Registration` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Full_name`, `username`, `password`, `number`, `email`, `img`, `status`, `Registration`) VALUES
(1, 'mostafa elbagory', 'admin', '21cc9783658a11be7149e47251cc989a38c1e331', 100199, 'zxsofazx@gmail.com', 'null', 2, '2020-09-04 18:21:55'),
(2, 'Omnia Yasser\r\n', 'sofa', '21cc9783658a11be7149e47251cc989a38c1e331', 559188636, 'zxsofazx+10@gmail.com', 'null', 0, '2020-09-09 03:27:51'),
(3, 'admin', 'sofad', '21cc9783658a11be7149e47251cc989a38c1e331', 0, 'zxsofazx@gmail.come', 'null', 0, '2021-07-10 16:33:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
