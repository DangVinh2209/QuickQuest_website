-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2025 at 07:05 AM
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
-- Database: `web1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `sender_id`, `receiver_id`, `post_id`, `photo`) VALUES
(8, 'sdf', 1, 3, 34, NULL),
(9, 'dfg', 1, 1, 45, NULL),
(15, 'hhhh', 3, 1, 45, NULL),
(16, 'kkkkk', 3, 1, 45, NULL),
(52, 'i can help you', 7, 1, 50, NULL),
(53, 'fgdgdfg', 19, 19, 56, NULL),
(54, 'hiii', 19, 7, 51, NULL),
(55, 'test ', 19, 19, 56, 'NULL'),
(56, 'test 2', 19, 19, 56, 'Screenshot 2025-07-22 at 00.59.37.png'),
(58, 'test 3', 19, 19, 56, 'Screenshot 2025-07-25 at 23.50.40.png'),
(61, 'test 6', 19, 19, 56, 'NULL'),
(62, 'test 7', 19, 19, 56, 'Quynh2.png'),
(63, 'thank you ', 19, 1, 50, 'NULL'),
(65, 'hi i can hekp you ', 1, 1, 59, 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `conversation_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `message`, `user_id`, `conversation_code`) VALUES
(1, 'hello admin', 1, '1-A'),
(2, 'i have a question', 1, '1-A'),
(3, 'i dont know whether i should include menu dropdown for users', 1, '1-A'),
(4, 'can u answer me', 1, '1-A'),
(5, 'dgh', 1, '1-A'),
(6, 'alooooo', 1, '1-A'),
(7, 'hi admin', 2, '2-A'),
(8, 'can u hear me', 2, '2-A'),
(9, 'hi i am here, i slept early yesterday', 7, '1-A'),
(10, 'i solved it yesterday haha', 1, '1-A'),
(11, 'nopeeeeee', 1, '1-A'),
(12, 'damn hahahaha lol', 7, '1-A'),
(13, 'i gotta go to school now, see', 1, '1-A'),
(14, 'fgh', 7, '7-A'),
(15, 'test new UI', 1, '1-A'),
(16, 'dsjhfdsjf', 1, '1-A'),
(17, 'dsjhfdsjf', 1, '1-A'),
(18, 'dsjhfdsjf', 1, '1-A'),
(19, 'e', 1, '1-A'),
(20, 'e', 1, '1-A'),
(21, 'e', 1, '1-A'),
(22, 'e', 1, '1-A'),
(23, 'd', 1, '1-A'),
(24, 'd', 1, '1-A'),
(25, 'd', 1, '1-A'),
(26, 's', 1, '1-A'),
(27, 's', 1, '1-A'),
(28, 'sd', 1, '1-A'),
(29, 'f', 7, '1-A'),
(30, 'i did it', 7, '1-A'),
(31, 'hihi', 1, '1-A'),
(32, 'hihih', 1, '1-A'),
(33, 'ggggg', 1, '1-A'),
(34, 'dfgdfgdfg', 1, '1-A'),
(35, 'haha congratulation', 7, '1-A'),
(36, 's', 7, '1-A'),
(37, 'dd', 7, '1-A'),
(38, 'sssss', 7, '1-A'),
(39, 'hello Quynh', 7, '2-A'),
(40, 'hiiiii', 7, '2-A'),
(41, 'hello Thang ', 7, '3-A'),
(42, 'hello admin', 1, '1-A'),
(43, 'thanggggggggggggggg', 7, '3-A'),
(44, 'troi oi thangg oi thanggggggggggggggg', 7, '3-A'),
(45, 'tui ne ong', 3, '3-A'),
(46, 'di an buffet honggggg', 3, '3-A'),
(47, 't baooooooooooo', 3, '3-A'),
(48, 'thuiiii', 7, '3-A'),
(49, 'no roiiiii', 7, '3-A'),
(50, 'duj', 7, '4-A'),
(51, 'thangggg', 7, '3-A'),
(52, 'm dang lam gi do', 7, '3-A'),
(53, 'hello admin ', 13, '13-A'),
(54, 'i am new here', 13, '13-A'),
(55, 'hi newbie', 7, '13-A'),
(56, 'hahaha', 1, '1-A'),
(57, 'hi', 1, '1-A'),
(58, 'hi', 1, '1-A'),
(59, 'i did it', 1, '1-A'),
(60, 'i am here', 7, '1-A'),
(61, 'hello', 7, '14-A'),
(62, 'how are u', 7, '14-A'),
(63, 'hello', 7, '1-A'),
(64, 'hi thang ', 7, '3-A'),
(65, 'hello', 3, '3-A'),
(66, 'sfdgdg', 3, '3-A');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`) VALUES
(1, 'COMP1841'),
(2, 'COMP1770'),
(3, 'COMP1773'),
(24, 'COMP1221'),
(25, 'MATH1179');

-- --------------------------------------------------------

--
-- Table structure for table `questionnaire`
--

CREATE TABLE `questionnaire` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `post_date` datetime DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionnaire`
--

INSERT INTO `questionnaire` (`id`, `question`, `post_date`, `author_id`, `module_id`, `image`) VALUES
(3, 'teach me some English i will attend IELTS exam next month kkkkk', '2025-06-26 19:56:34', 1, 2, 'quynh.jpg'),
(30, 'thanggggg neeee', '2025-07-13 18:44:06', 3, 1, 'IMG_1771.JPG'),
(31, 'jkhiuhb', '2025-07-14 17:47:39', 2, 3, 'Screenshot 2025-06-29 at 03.09.19.png'),
(32, 'jrfjurrg', '2025-07-14 17:48:34', 2, 1, '53145308413_4a9be63ec1_o.jpg'),
(33, 'dfgjdfgjdrnxxxxxxx', '2025-07-14 17:49:40', 3, 3, 'add.png'),
(34, 'hello', '2025-07-14 18:31:26', 3, 3, 'Squirrel_posing.jpg'),
(36, 'hello i am testing new UIdusfhusdhfusdhfudhsfuhdufhdufhduhfudhfudhfudhfudhfudhfuhfudhfuhdfudhfuhdufhduhfudhfudhfudhfuhdfhdfhdufh', '2025-07-16 23:48:14', 1, 3, 'Screenshot 2025-07-11 at 02.57.07.png'),
(37, 'test add.html.php', '2025-07-17 01:31:54', 1, 2, 'Screenshot 2025-07-11 at 02.57.31.png'),
(39, 'i want my UI like thathahahaha ok it is good nowdd\r\n', '2025-07-17 14:23:15', 1, 2, 'Screenshot 2025-07-17 at 14.22.09.png'),
(44, 'sdfzxcdsc', '2025-07-22 14:35:02', 7, 1, 'Screenshot 2025-07-22 at 00.59.37.png'),
(45, 'hgmhgjg', '2025-07-23 08:55:58', 1, 1, 'IMG_1401.jpg'),
(50, 'help me', '2025-07-27 23:42:01', 1, 3, 'Screenshot 2025-07-22 at 00.59.37.png'),
(51, 'sdfs', '2025-07-27 23:47:37', 7, 2, 'Screenshot 2025-07-22 at 00.59.37.png'),
(56, 'this is a post without image', '2025-07-28 09:51:55', 19, 2, 'NULL'),
(59, 'i want my UI like that', '2025-07-28 11:55:56', 1, 2, 'Screenshot 2025-07-25 at 23.55.47.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'VinhDang', 'vinhdang123@gmail.com', '$2y$10$Jjfolj/2HXEsMJn9MIm6UuF5aicw9OjbgBaqS1JDmHgc/B/Afuay.', 'vinh.jpg'),
(2, 'QuynhLe', 'xuanquynh0406@gmail.com', '$2y$10$SIQVFY8GvsUVsUe8raqi6.sBpGFW.1UFfR5/8JSVOBj/Jwufo9aZm', 'quynh.jpg'),
(3, 'ThangNguyen12345', 'huuthang02092004@gmail.com', '$2y$10$DsoZSrgwpvA1jDmmPv4PTOEQEFpW0YszYEKwbWcvifoQBUaG/lsCC', NULL),
(7, 'admin', 'admin@gmail.com', '$2y$10$fjbPonQMAJqXx4uD3PTjhulL66XhMqco8TdQC953xB4c4nmpWsXjq', 'man.png'),
(13, 'ThienVy', 'vythien2207@gmail.com', '$2y$10$fjbPonQMAJqXx4uD3PTjhulL66XhMqco8TdQC953xB4c4nmpWsXjq', 'man.png'),
(19, 'thanhhoa', 'thanhhoa123@gmail.com', '$2y$10$e9NyvZuKxWehl1dgGJid4uHBjwpuq.7R.cLSjrM0ZMXRsyQBvtoZK', 'man.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`author_id`),
  ADD KEY `fk_module` (`module_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `questionnaire` (`id`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD CONSTRAINT `fk_module` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
