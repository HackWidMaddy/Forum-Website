-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 09:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `category_date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `category_date_time`) VALUES
(1, 'python', 'Python is a high-level, interpreted, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Python is dynamically-typed and garbage-collected.', '2022-07-26 19:09:40'),
(2, 'javascript', 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS. As of 2022, 98% of websites use JavaScript on the client side for web page behavior, often incorporating third-', '2022-07-26 19:10:08'),
(3, 'django', 'Django is a free and open-source, Python-based web framework that follows the model–template–views architectural pattern. ', '2022-07-27 16:33:53'),
(4, 'flask', 'Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.', '2022-07-27 16:34:41'),
(5, 'Hacking', 'A hacker is a person skilled in information technology who uses their technical knowledge to achieve a goal or overcome an obstacle, within a computerized system by non-standard means.', '2022-07-31 13:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL,
  `comment_text` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp(),
  `commentby` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_text`, `thread_id`, `comment_time`, `commentby`) VALUES
(2, 'this is a comment', 1, '2022-07-28 12:38:31', '2'),
(3, '', 0, '2022-07-28 12:44:36', '4'),
(4, 'please some body fix this', 0, '2022-07-28 12:45:12', '1'),
(5, 'some body plz fix this', 1, '2022-07-28 12:45:37', '3'),
(6, 'please help someoe', 1, '2022-07-28 12:47:19', '5'),
(7, 'hello world', 1, '2022-07-29 11:40:16', '5'),
(8, 'hello', 1, '2022-07-29 11:43:38', '8'),
(9, 'hello', 1, '2022-07-29 11:44:02', '1'),
(10, 'hello world', 1, '2022-07-29 12:13:49', '5'),
(11, 'this is my question', 5, '2022-07-29 12:15:42', '5'),
(12, 'this is facking the same prb plz kuch karoo', 1, '2022-07-29 12:43:04', '9'),
(13, 'lets flask is tenh best', 12, '2022-07-29 12:55:03', '9'),
(14, 'hello', 16, '2022-07-29 12:57:55', '9'),
(15, '&gt;', 5, '2022-07-29 13:10:02', '9'),
(16, '&lt;script&gt;alert(1);&lt;/script&gt;', 5, '2022-07-29 13:13:50', '9'),
(17, '&lt;h1&gt;hello world&lt;/h1&gt;', 5, '2022-07-29 13:14:11', '9'),
(18, '&lt;img src=\"eede.png\"&gt;', 5, '2022-07-29 13:14:25', '9'),
(19, 'javascript is a webdevelopment language used to add brain to our website syntax &lt;script&gt;&lt;/script&gt; else watch code with harry youtube video', 31, '2022-07-30 12:02:18', '10'),
(20, 'bhaag pagal', 31, '2022-07-30 12:03:11', '5'),
(21, 'no problem', 27, '2022-07-30 13:54:00', '10'),
(22, 'hello', 2, '2022-07-31 21:57:05', '5');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_description` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `thread_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `thread_time`) VALUES
(1, 'not able to install pyaudia', 'not able to install pyaudia', 1, 1, '2022-07-27 18:33:10'),
(2, 'not able to use python', 'please help me', 1, 2, '2022-07-27 18:47:27'),
(3, 'welcome to javascript', 'hello world', 8, 1, '2022-07-27 18:49:00'),
(5, 'javascript OP', 'javascript OP', 2, 2, '2022-07-27 18:49:54'),
(6, 'hi', 'hi', 1, 4, '2022-07-28 12:14:50'),
(7, 'what is hacking?', 'please give a breaf discussing', 5, 5, '2022-07-28 12:18:19'),
(8, 'hello i want to test this', 'm', 1, 3, '2022-07-28 12:18:46'),
(11, 'i want to help others', 'i want to help others', 1, 5, '2022-07-28 18:31:30'),
(12, 'i want to help others', 'i want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help othersi want to help others', 2, 6, '2022-07-28 18:32:36'),
(13, 'hello', 'hello', 1, 8, '2022-07-28 18:41:34'),
(14, 'hello', 'hello', 1, 4, '2022-07-28 18:41:54'),
(15, 'hello world', 'hello', 2, 1, '2022-07-28 18:51:54'),
(16, 'this is tryal', 'this is tryal', 2, 2, '2022-07-28 18:52:33'),
(17, 'samosa', 'samosasamosasamosasamosa', 1, 4, '2022-07-28 19:05:50'),
(18, 'sas', 'samoasa', 1, 6, '2022-07-28 19:07:05'),
(19, 'sasa', 'sasas', 1, 5, '2022-07-28 19:08:24'),
(20, 'hello', 'hello', 1, 2, '2022-07-28 19:11:45'),
(21, 'hello', 'hello', 1, 2, '2022-07-28 19:11:57'),
(22, 'test@gmail.com', 'test@gmail.com', 1, 0, '2022-07-29 12:12:38'),
(23, 'hello world', 'eheleo', 1, 0, '2022-07-29 12:13:00'),
(24, 'yayay', 'yayay', 2, 5, '2022-07-29 12:15:21'),
(25, 'greencat', 'greencat', 1, 9, '2022-07-29 12:27:48'),
(26, 'samosa', 'tingu', 1, 9, '2022-07-29 12:43:36'),
(27, 'hello i have django problem', 'hello i have django problem', 3, 9, '2022-07-29 12:53:30'),
(28, '', '', 2, 9, '2022-07-29 13:18:49'),
(29, '&lt;script&gt;alert(1);&lt;/script&gt;', '&lt;script&gt;alert(1);&lt;/script&gt;', 2, 9, '2022-07-29 13:19:36'),
(30, '&lt;script&gt;alert(1);&lt;/script&gt; ', '&lt;script&gt;alert(1);&lt;/script&gt; ', 2, 9, '2022-07-29 13:20:04'),
(31, 'how to use javascript please help', 'how to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please helphow to use javascript please help', 2, 10, '2022-07-30 12:01:03'),
(32, 'javascipt is awsome', 'javascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsomejavascipt is awsome', 2, 10, '2022-07-30 14:01:23'),
(33, 'flask porblem', 'flask porblem', 4, 10, '2022-07-30 14:10:12'),
(34, 'what the heck', 'what the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heckwhat the heck', 4, 10, '2022-07-30 14:12:09'),
(35, 'fucking toxic', 'haha lol', 2, 10, '2022-07-30 14:12:34'),
(36, 'riddhi', 'riddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhiriddhi', 2, 11, '2022-07-30 23:20:24'),
(37, 'i want to install pycharam', 'i want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharami want to install pycharam', 1, 16, '2022-07-31 13:16:30'),
(38, 'hello world', 'hello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello worldhello world', 2, 5, '2022-07-31 22:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `srno` int(11) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `userpass`, `datetime`, `email`) VALUES
(1, 'llll', '2022-07-28 15:22:37', 'shahm@gmail.coom'),
(2, '$2y$10$jd/gpd4Og9c7Rrb.A.AFpOUE0Nr2YHz7zkWq7V7Hlz9eo1THw99J6', '2022-07-28 15:43:06', 'harry@gmail.com'),
(3, '$2y$10$Me8skae9UB8EcyUFqIE4Tejr7MMZ8fZXFECKWuTBAGcZIlIrQoy1a', '2022-07-28 15:46:22', 'rohan@gmail.com'),
(4, '$2y$10$mJJy8ZyhRBY1A77PAOEkU.kJejjCsnCHwlDXiNEz5F2A0n6tntFf6', '2022-07-28 15:58:07', 'q@s.com'),
(5, '$2y$10$3jq5/9Bu09jhWk6QyhuZluYfFu/qEWL3jK3XJeEkEO.Yseo9UlHLC', '2022-07-28 16:19:48', 'test@gmail.com'),
(6, '$2y$10$tfeaxY7t6L5nfDmJ30.wLuCwJu87fbZJmwWYaWvIz5TziGRO.IB2a', '2022-07-28 16:35:35', 'hary@tire.com'),
(7, '$2y$10$W0hgBa084YIAcu4/WEwq2udVNpMoIKFLFMnuhk9bjtwDMcSSItbza', '2022-07-28 17:26:05', 'samosaaaaaaaaawala@gmail.com'),
(8, '$2y$10$83NQCoNd3rn1rVtYxiIWvO8pHicEIYvTtZDx1eovvyibVRTAjFnPK', '2022-07-28 17:26:37', 'shahmadhav29@gmail.com'),
(9, '$2y$10$bPGQmVXHktY4Vtu.hDIKfO6TPYxc9iD9GwAbZYRqyggn9nGone0Jm', '2022-07-29 12:27:25', 'greencat'),
(10, '$2y$10$.oO6YGtc3YnYozpBGzblguUdF48.Vo32YzhBRh/EciREAOV4a7hfi', '2022-07-30 12:00:21', 'shivangi'),
(11, '$2y$10$ak9jCFo5aNJ8Rz2jct5V3..DnKa0w081VmsNnMS3CDVY0NfPaC2ki', '2022-07-30 23:18:11', 'riddhi'),
(12, '$2y$10$/.e8xHJmlKB9CS97x4UeDu9aJQ2MVK/RFiBb3p76GcWIr/j3AFphm', '2022-07-31 12:00:17', '&lt;script&gt;alert(1);&lt;/script&gt;'),
(13, '$2y$10$oAVHpOKJZ2RcMY58H1h7POB0T/icTzC6yOuQfxM1X/dmRmrbxnJny', '2022-07-31 12:01:38', '&lt;script&gt;alert(2);&lt;/script&gt;'),
(14, '$2y$10$kCw1CTR/BGNjTeOZ3.TVG..qoalcYEg2gU9GfdjHjhI5fGArSlpki', '2022-07-31 12:09:38', '<script>alert(100);</script>'),
(15, '$2y$10$Y5wDAEfQubXwZEX6Kqz3EOvG29FyYbXq/CzROFrKYK3YU54bnv3Du', '2022-07-31 12:24:47', 'samosaaaaaaa'),
(16, '$2y$10$cY3whbIeNtAakE3Hrpi7pOensApJkina0zbbNLR9/MiAFLpznA766', '2022-07-31 12:36:35', 'kali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_description`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
