-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 27, 2022 at 04:40 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `ID` int(11) NOT NULL,
  `txt` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`ID`, `txt`, `image`, `date`) VALUES
(7, 'Enthusiastic starter in Full-Stack Development with a complete understanding of the entire software development lifecycle. Trained and have experience working with HTML, CSS (SCSS), JS (jQuery), PHP, MySQL, and JSON. Looking to join a team where communication and teamwork are essential to continue improving my skills while contributing to positive outcomes. Willingness to take on added responsibilities to meet team goals through hard work, attention to detail, and excellent organizational skills. Motivated to learn, grow and excel in IT, and take any opportunity to continue improving my skills. ?> ?>', 'shogher.jpg', '2022-05-25 11:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `ID` int(11) NOT NULL,
  `img_url` blob NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`ID`, `img_url`, `date`) VALUES
(1, 0x2e2e2f696d672f75706c6f6164732f65787465726e616c2d6c696e6b2e737667, '2022-05-24 08:26:00'),
(2, 0x2e2f696d672f75706c6f6164732f73657474696e67732e737667, '2022-05-24 08:27:41'),
(3, 0x2e2f696d672f75706c6f6164732f747769747465722d677261792e737667, '2022-05-24 08:29:37'),
(4, 0x2e2f696d672f75706c6f6164732f6769746875622d79656c6c6f772e737667, '2022-05-24 08:33:52'),
(5, 0x2e2f696d672f75706c6f6164732f65787465726e616c2d6c696e6b2e737667, '2022-05-24 08:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `ID` int(11) NOT NULL,
  `top_txt` varchar(500) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `bottom_txt` varchar(500) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`ID`, `top_txt`, `name`, `profession`, `bottom_txt`, `img`, `date`) VALUES
(10, 'HI THERE I\'M', ' Shogher Harutyunyan', 'Full-Stack Developer', 'Get ready to turn your ideas into reality.', '../img/uploads/bg.jpeg ', '2022-06-03 11:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`ID`, `name`, `date`) VALUES
(20, 'Home', '2022-06-13 18:56:38'),
(21, 'About', '2022-06-13 19:09:22'),
(22, 'Skills', '2022-06-13 19:09:35'),
(23, 'Services', '2022-06-13 19:09:49'),
(24, 'Portfolio', '2022-06-13 19:10:05'),
(25, 'Contact Me', '2022-06-13 19:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `name`, `email`, `text`, `date`) VALUES
(276, '', 'artbook2015@yahoo.com', 'sfsf', '2022-05-31 11:47:05'),
(277, '', 'artbook2015@yahoo.com', 'fddsdfsdf', '2022-06-01 18:38:38'),
(278, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:05'),
(279, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:06'),
(280, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:06'),
(281, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:06'),
(282, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:07'),
(283, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:07'),
(284, '', 'dff@ffjkdfs.fsfs', 'xdfdsg', '2022-06-01 18:44:07'),
(285, '', 'fsf@fsjkhk.fddsfs', 'fssfsf', '2022-06-01 18:44:17'),
(286, '', 'fsf@fsjkhk.fddsfs', 'fssfsf', '2022-06-01 18:44:17'),
(287, '', 'fsf@fsjkhk.fddsfs', 'fssfsf', '2022-06-01 18:44:17'),
(288, '', 'ff@ffsfs.fsfs', 'fsfsfs', '2022-06-01 18:56:25'),
(289, '', 'gdfgd@sdffsf.fsfs', 'fsfsf', '2022-06-01 19:02:59'),
(290, '', 'gdfgd@sdffsf.fsfs', 'fsfsf', '2022-06-01 19:03:03'),
(291, '', 'ssgg@sfssf.fsfs', 'fsfsfs', '2022-06-01 19:03:29'),
(292, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:51'),
(293, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:52'),
(294, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:52'),
(295, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:53'),
(296, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:53'),
(297, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:53'),
(298, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:53'),
(299, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:53'),
(300, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:54'),
(301, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:54'),
(302, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:54'),
(303, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:54'),
(304, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:54'),
(305, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:55'),
(306, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:55'),
(307, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:55'),
(308, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:55'),
(309, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:55'),
(310, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:56'),
(311, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:56'),
(312, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:56'),
(313, '', 'dsfsdf@ffsf.fsf', 'sfsfsf', '2022-06-01 19:03:56'),
(314, '', 'sfs@fsfsf.ffsf', 'fsfsf', '2022-06-01 19:04:28'),
(315, '', 'sfs@fsfsf.ffsf', 'fsfsf', '2022-06-01 19:04:29'),
(316, '', 'sfs@fsfsf.ffsf', 'fsfsf', '2022-06-01 19:04:30'),
(317, '', 'sfs@fsfsf.ffsf', 'fsfsf', '2022-06-01 19:04:30'),
(318, '', 'dadab@fshfsf.fasf', 'fsfsfs', '2022-06-01 19:05:30'),
(319, '', 'gdgd@fsfs.sfsfs', 'gsgsgs', '2022-06-01 19:07:45'),
(320, '', 'sdfds@fsfs.sfsf', 'fsfsf', '2022-06-01 19:09:00'),
(321, '', 'gsgs@dfssf.sfsfs', 'sgsgs', '2022-06-01 19:10:23'),
(322, '', 'gsgs@dfssf.sfsfs', 'sgsgs', '2022-06-01 19:10:24'),
(323, '', 'gsgs@dfssf.sfsfs', 'sgsgs', '2022-06-01 19:10:24'),
(324, '', 'gsgsg@fdsf.fssfsf', 'gsggs', '2022-06-01 19:10:47'),
(325, '', 'gdgd@gssgs.fsfs', 'fsfsf', '2022-06-01 19:11:09'),
(326, '', 'bcbc2ff@sgdg.gsgs', 'gsgs', '2022-06-01 19:11:38'),
(327, '', 'gdgd@fsfs.fsf', 'fsfsfsf', '2022-06-01 19:13:46'),
(328, '', 'gdsgdg@fgkdg.fsfs', 'fsfsfs', '2022-06-01 19:14:18'),
(329, '', 'gsgsdg@sss.gsgsg', 'sggsgs', '2022-06-01 19:18:39'),
(330, '', 'jfjfj@gdsgs.sgsg', 'sgsgsg', '2022-06-01 19:20:41'),
(331, '', 'sfs@fsfs.sfsfs', 'fsfs', '2022-06-01 19:23:01'),
(332, '', 'gsgs@ljf.adda', 'dadad', '2022-06-01 19:23:19'),
(333, '', 'sffs@faaf.fafa', 'fafaf', '2022-06-01 19:24:16'),
(334, '', 'fsfsf@fsdfsf.sfsf', 'fsfsfs', '2022-06-01 19:25:54'),
(335, '', 'sfsfds@fsdsf.fsfs', 'fsfsf', '2022-06-01 19:26:35'),
(336, '', 'gsgsg@fsfs.fsfs', 'fsfs', '2022-06-01 19:32:23'),
(337, '', 'gdgd@fsdsfsf.fsfs', 'fsfsf', '2022-06-01 19:36:59'),
(338, '', 'artbook2015@yahoo.com', 'jffjfj', '2022-06-01 19:38:01'),
(339, '', 'artbook2015@yahoo.com', 'gsgsg', '2022-06-01 19:42:14'),
(340, '', 'gsgsg@fsfs.sffsfs', 'fsf', '2022-06-01 19:46:21'),
(341, '', 'shogher.fordev@gmail.com', 'fsfsfs', '2022-06-01 19:47:04'),
(342, '', 'gddgdg@sgsg.sgsgs', 'gsgsgs', '2022-06-01 19:56:28'),
(343, '', 'hdhd@fdsfsf.fsfsf', 'fsfsf', '2022-06-01 19:58:24'),
(344, '', 'gsgs@fsfs.fsfs', 'fsfsf', '2022-06-01 20:00:30'),
(345, '', 'shogher1991@gmail.com', 'fsfsfs', '2022-06-01 20:07:47'),
(346, '', 'aaa@gmail.com', 'dgdgd', '2022-06-01 20:11:03'),
(347, '', 'artbook2015@yahoo.com', 'gdgdg', '2022-06-01 20:18:53'),
(348, '', 'aaa@gmail.com', 'fsfsf', '2022-06-01 20:19:24'),
(349, '', 'artbook2015@yahoo.com', 'fsfsf', '2022-06-01 20:28:07'),
(350, '', 'artbook2015@yahoo.comf', 'sfsfsf', '2022-06-01 20:28:57'),
(351, '', 'artbook2015@yahoo.com', 'sffsdf', '2022-06-01 20:29:33'),
(352, '', 'sfs@erer.fdgd', 'gdgd', '2022-06-01 20:29:51'),
(353, '', 'fsfs@ffsf.sfsf', 'fsfsf', '2022-06-01 20:35:39'),
(354, '', 'gdgdg@fk.ffs', 'ffss', '2022-06-01 20:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `ID` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `bg_img` varchar(200) NOT NULL,
  `tools` varchar(1000) NOT NULL,
  `classes` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`ID`, `heading`, `bg_img`, `tools`, `classes`, `date`) VALUES
(32, '', './img/uploads/', 'a:1:{s:5:\"tools\";a:1:{i:0;s:0:\"\";}}', 'a:1:{s:5:\"Array\";s:1:\"2\";}', '2022-06-24 12:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `heading`, `description`, `img`, `date`) VALUES
(20, 'Development', '✦ Front-End Web Development\r\n✦ Back-End Development\r\n✦ CMS Development (WordPress Theme Customization\r\n✦ Custom Web Application Development\r\n✦ Technical Support and Maintenance', './img/uploads/website-design.gif', '2022-06-24 09:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `ID` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`ID`, `heading`, `skill`, `date`) VALUES
(4696, 'FRONTEND', 'a:1:{s:5:\"skill\";a:6:{i:0;s:6:\"HTML5 \";i:1;s:4:\"CSS \";i:2;s:4:\"SCSS\";i:3;s:11:\"JAVASCRIPT \";i:4;s:7:\"jQuery,\";i:5;s:9:\"BOOTSTRAP\";}}', '2022-06-24 09:16:11'),
(4697, 'BACKEND', 'a:1:{s:11:\"skills_item\";a:1:{i:0;s:3:\"PHP\";}}', '2022-05-18 10:16:12'),
(4698, 'DATABASE', 'a:1:{s:11:\"skills_item\";a:1:{i:0;s:5:\"MySQL\";}}', '2022-05-18 10:16:34'),
(4701, 'DESIGN', 'a:1:{s:11:\"skills_item\";a:5:{i:0;s:15:\"Adobe Photoshop\";i:1;s:17:\"Adobe Illustrator\";i:2;s:8:\"Adobe XD\";i:3;s:5:\"Figma\";i:4;s:8:\"Balsamiq\";}}', '2022-05-25 11:44:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4702;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
