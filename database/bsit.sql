-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 02:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about`) VALUES
(6, '<p>A trend-setter in its space, Network18 Media and Investments Ltd is one of the largest media conglomerates with diversified but synergistic interests in Television with its bouquet of fifty channels in India and thirteen international channels, besides filmed entertainment, digital content, magazines, digital commerce and allied businesses. Network18 is promoted by Independent Media Trust of which Reliance Industries is the sole beneficiary.&nbsp;<strong><strong>TV18 Broadcast ltd</strong>, a subsidiary of Network18</strong>&nbsp;manages its primary business of broadcasting. TV18 runs the largest news network in India, spanning business news, general news and regional news channels.</p>\r\n\r\n<blockquote>\r\n<ol>\r\n	<li>Network18 has built successful strategic alliances with globally reputed media players such as Viacom, CNBC, CNN, A+E Networks and Forbes</li>\r\n	<li>Steered by a professional and experienced team of editors, news tellers and entertainers, Network18 constantly seeds new ideas of programming and triggers thought processes</li>\r\n	<li>At Network18, the focus is on driving the highest standards of creative excellence by fostering a culture of innovation to build new content formats thereby creating strong brands across diverse media</li>\r\n	<li>Through its continued investments in regional and digital platforms, Network18 claims unparalleled reach</li>\r\n</ol>\r\n</blockquote>\r\n'),
(7, '<p>A trend-setter in its space, Network18 Media and Investments Ltd is one of the largest media conglomerates with diversified but synergistic interests in Television with its bouquet of fifty channels in India and thirteen international channels, besides filmed entertainment, digital content, magazines, digital commerce and allied businesses. Network18 is promoted by Independent Media Trust of which Reliance Industries is the sole beneficiary.&nbsp;<strong><strong>TV18 Broadcast ltd</strong>, a subsidiary of Network18</strong>&nbsp;manages its primary business of broadcasting. TV18 runs the largest news network in India, spanning business news, general news and regional news channels.</p>\r\n\r\n<blockquote>\r\n<ul>\r\n	<li>Network18 has built successful strategic alliances with globally reputed media players such as Viacom, CNBC, CNN, A+E Networks and Forbes</li>\r\n	<li>Steered by a professional and experienced team of editors, news tellers and entertainers, Network18 constantly seeds new ideas of programming and triggers thought processes</li>\r\n	<li>At Network18, the focus is on driving the highest standards of creative excellence by fostering a culture of innovation to build new content formats thereby creating strong brands across diverse media</li>\r\n	<li>Through its continued investments in regional and digital platforms, Network18 claims unparalleled reach</li>\r\n</ul>\r\n</blockquote>\r\n'),
(8, '<p>A trend-setter in its space, Network18 Media and Investments Ltd is one of the largest media conglomerates with diversified but synergistic interests in Television with its bouquet of fifty channels in India and thirteen international channels, besides filmed entertainment, digital content, magazines, digital commerce and allied businesses. Network18 is promoted by Independent Media Trust of which Reliance Industries is the sole beneficiary.&nbsp;<strong><strong>TV18 Broadcast ltd</strong>, a subsidiary of Network18</strong>&nbsp;manages its primary business of broadcasting. TV18 runs the largest news network in India, spanning business news, general news and regional news channels.</p>\r\n\r\n<blockquote>\r\n<ol>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa;font-style:italic;\"><em>Network18 has built successful strategic alliances with globally reputed media players such as Viacom, CNBC, CNN, A+E Networks and Forbes</em></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa;font-style:italic;\"><em>Steered by a professional and experienced team of editors, news tellers and entertainers, Network18 constantly seeds new ideas of programming and triggers thought processes</em></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa;font-style:italic;\"><em>At Network18, the focus is on driving the highest standards of creative excellence by fostering a culture of innovation to build new content formats thereby creating strong brands across diverse media</em></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa;font-style:italic;\"><em>Through its continued investments in regional and digital platforms, Network18 claims unparalleled reach</em></h3>\r\n	</li>\r\n</ol>\r\n</blockquote>\r\n'),
(9, '<p>A trend-setter in its space, Network18 Media and Investments Ltd is one of the largest media conglomerates with diversified but synergistic interests in Television with its bouquet of fifty channels in India and thirteen international channels, besides filmed entertainment, digital content, magazines, digital commerce and allied businesses. Network18 is promoted by Independent Media Trust of which Reliance Industries is the sole beneficiary.&nbsp;<strong><strong>TV18 Broadcast ltd</strong>, a subsidiary of Network18</strong>&nbsp;manages its primary business of broadcasting. TV18 runs the largest news network in India, spanning business news, general news and regional news channels.</p>\r\n\r\n<blockquote>\r\n<ol>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa; font-style:italic\"><small>Network18 has built successful strategic alliances with globally reputed media players such as Viacom, CNBC, CNN, A+E Networks and Forbes</small></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa; font-style:italic\"><small>Steered by a professional and experienced team of editors, news tellers and entertainers, Network18 constantly seeds new ideas of programming and triggers thought processes</small></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa; font-style:italic\"><small>At Network18, the focus is on driving the highest standards of creative excellence by fostering a culture of innovation to build new content formats thereby creating strong brands across diverse media</small></h3>\r\n	</li>\r\n	<li>\r\n	<h3 style=\"color:#aaaaaa; font-style:italic\"><small>Through its continued investments in regional and digital platforms, Network18 claims unparalleled reach</small></h3>\r\n	</li>\r\n</ol>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `dp` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `gender`, `dp`) VALUES
(1, 'admin', 'admin@admin.com', 'asdf', 'Male', '60e9c8a33fee18.01922742.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address` varchar(75) NOT NULL,
  `phn` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phn`, `email`, `fax`) VALUES
(1, 'test', '21424', 'aswefd@as.com', '121231'),
(2, 'test', '21424', 'aswefd@as.com', '121231'),
(3, 'hisar', '+91 3463463546', 'test@gmail.com', '+91 3463463546'),
(4, 'hisar', '+91 3463463546', 'test@gmail.com', '+91 3463463546'),
(5, 'hisar', '+91 3463463546', 'test@gmail.com', '+91 3463463546'),
(6, 'The Tribune Trust, Sector 29-C, Chandigarh (UT) 160030', '24124', '07@gmail.com', '`142`134`1'),
(7, 'The Tribune Trust, Sector 29-C, Chandigarh (UT) 160030', '24124', '07@gmail.com', '`142`134`1'),
(8, 'The Tribune Trust, Sector 29-C, Chandigarh (UT) 160030', '24124', '07@gmail.com', '`142`134`1'),
(9, 'The Tribune Trust, Sector 29-C, Chandigarh (UT) 160030', '24124', '07@gmail.com', '`142`134`1'),
(10, 'The Tribune Trust, Sector 29-C, Chandigarh (UT) 160030', '+913463463546', 'demo@demo.com', '+913463463546');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `no_of_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`c_id`, `c_name`, `no_of_post`) VALUES
(24, ' Announcement', 1),
(25, ' Class Updates', 0),
(26, ' Events', 2);

-- --------------------------------------------------------

--
-- Table structure for table `post_description`
--

CREATE TABLE `post_description` (
  `p_id` int(15) NOT NULL,
  `p_heading` mediumtext NOT NULL,
  `p_description` mediumtext NOT NULL,
  `p_thumbnail` varchar(100) NOT NULL,
  `p_category` varchar(50) DEFAULT NULL,
  `p_carousel` varchar(100) DEFAULT NULL,
  `complete_post` longtext DEFAULT NULL,
  `p_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_description`
--

INSERT INTO `post_description` (`p_id`, `p_heading`, `p_description`, `p_thumbnail`, `p_category`, `p_carousel`, `complete_post`, `p_time`) VALUES
(82, ' 📢 Announcement: Class Suspension Notice 📢', '<p>Due to severe weather conditions, all classes at ABC School will be suspended on Thursday, October 31, 2024.</p>\r\n\r\n<p>This suspension applies to both in-person and online classes. We advise all students, teachers, and staff to take the necessary precautions and stay safe. Please monitor the school&rsquo;s official website or social media page for further updates.</p>\r\n\r\n<p>Classes are expected to resume on Friday, November 1, unless further notice is given.</p>\r\n\r\n<p>Thank you for your understanding and cooperation.</p>\r\n\r\n<p><strong>Stay Safe,</strong><br />\r\nABC School Administration</p>\r\n', '67219d42006011.27234077.png', ' Announcement', '6725ae8f856e33.34944932.jpg', '<p>sample news</p>\r\n', '1730522767'),
(83, 'New event coming on November get ready for the surprise ', '<p>it will be held in our school only</p>\r\n', '6725af6de51af2.23834610.jpg', ' Announcement', '6725af9c257320.01202564.jpg', '<p>just wait</p>\r\n', '1730523036'),
(84, 'No class ', '<p>no class for tommorow because of the typhoon</p>\r\n', '6725d8e9e91106.67158247.jpg', ' Class Updates', '6725d90a535285.42077896.jpg', '<p>No class due to typhoon&nbsp;</p>\r\n', '1730533642'),
(85, 'Pinta Flores', '<p>Please participate the event for your grades thanks</p>\r\n', '6725ebdca88329.50198792.jpg', ' Events', '6725ebfc134db0.03010090.jpg', '<p>Exciting&nbsp;</p>\r\n', '1730538492'),
(86, 'Christmas party', '<p>Enjoy your Christmas day soon</p>\r\n', '6725ec7f0f57c5.14375580.jpg', ' Events', '6725ecb6e65390.28828138.jpg', '<p>Share your blessings HAHAH😍</p>\r\n', '1730538678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `post_description`
--
ALTER TABLE `post_description`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_description`
--
ALTER TABLE `post_description`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
