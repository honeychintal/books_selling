-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 11:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectx`
--

-- --------------------------------------------------------

--
-- Table structure for table `categ`
--

CREATE TABLE `categ` (
  `c_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categ`
--

INSERT INTO `categ` (`c_id`, `category`) VALUES
(1, 'School'),
(2, '10th'),
(3, 'School'),
(4, '10th'),
(5, '12th'),
(6, 'Mathamatics'),
(7, '12th'),
(8, 'Mathamatics'),
(9, 'Science'),
(10, 'Biology'),
(11, 'Science'),
(12, 'Biology'),
(13, 'Chemistry '),
(14, 'Engineering'),
(15, 'Medicals'),
(16, 'English'),
(17, 'Medicals'),
(18, 'English'),
(19, 'Physics'),
(20, 'Commerce'),
(21, 'Physics'),
(22, 'Commerce'),
(23, 'Accounting'),
(24, 'Business'),
(25, 'Accounting'),
(26, 'Business'),
(27, 'Management'),
(28, 'Computer Science'),
(29, 'Management'),
(30, 'Computer Science'),
(31, 'Action and Adventure'),
(32, 'Anthology'),
(33, 'Action and Adventure'),
(34, 'Anthology'),
(35, 'Classic'),
(36, 'Comic and Graphic Novel'),
(37, 'Classic'),
(38, 'Comic and Graphic Novel'),
(39, 'Crime and Detective'),
(40, 'Drama'),
(41, 'Crime and Detective'),
(42, 'Drama'),
(43, 'Fable'),
(44, 'Fairy Tale'),
(45, 'Fable'),
(46, 'Fairy Tale'),
(47, 'Fan-Fiction'),
(48, 'Fantasy'),
(49, 'Fan-Fiction'),
(50, 'Fantasy'),
(51, 'Historical Fiction'),
(52, 'Historical'),
(53, 'Historical Fiction'),
(54, 'Historical'),
(55, 'Horror'),
(56, 'Humor'),
(57, 'Horror'),
(58, 'Humor'),
(59, 'Legend'),
(60, 'Magical Realism'),
(61, 'Legend'),
(62, 'Magical Realism'),
(63, 'Spiritual'),
(64, 'Mystery'),
(65, 'Spiritual'),
(66, 'Mystery'),
(67, 'Mythology'),
(68, 'Realistic Fiction'),
(69, 'Mythology'),
(70, 'Realistic Fiction'),
(71, 'Romance'),
(72, 'Satire'),
(73, 'Romance'),
(74, 'Satire'),
(75, 'Science Fiction (Sci-Fi)'),
(76, 'Short Story'),
(77, 'Science Fiction (Sci-Fi)'),
(78, 'Short Story'),
(79, 'Suspense / Thriller'),
(80, 'Biography / Autobiography'),
(81, 'Suspense / Thriller'),
(82, 'Biography / Autobiography'),
(83, 'Essay'),
(84, 'Memoir'),
(85, 'Essay'),
(86, 'Memoir'),
(87, 'Narrative Nonfiction'),
(88, 'Periodicals'),
(89, 'Narrative Nonfiction'),
(90, 'Periodicals'),
(91, 'Reference Books'),
(92, 'Self - help Book'),
(93, 'Reference Books'),
(94, 'Self - help Book'),
(95, 'Speech'),
(96, 'Textbook'),
(97, 'Speech'),
(98, 'Textbook'),
(99, 'Poetry'),
(100, 'Poetry');

-- --------------------------------------------------------

--
-- Table structure for table `postbook`
--

CREATE TABLE `postbook` (
  `p_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_isbn` varchar(30) NOT NULL,
  `b_auth` varchar(50) NOT NULL,
  `og_pr` int(11) NOT NULL,
  `ex_pr` int(11) DEFAULT NULL,
  `descript` varchar(200) NOT NULL,
  `pic1` varchar(50) NOT NULL,
  `pic2` varchar(50) NOT NULL,
  `pic3` varchar(50) NOT NULL,
  `genr1` varchar(40) NOT NULL,
  `genr2` varchar(40) NOT NULL,
  `genr3` varchar(40) NOT NULL,
  `genr4` varchar(40) NOT NULL,
  `used` varchar(1) NOT NULL,
  `dt_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display` varchar(1) NOT NULL,
  `usenam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postbook`
--

INSERT INTO `postbook` (`p_id`, `b_name`, `b_isbn`, `b_auth`, `og_pr`, `ex_pr`, `descript`, `pic1`, `pic2`, `pic3`, `genr1`, `genr2`, `genr3`, `genr4`, `used`, `dt_creation`, `display`, `usenam`) VALUES
(2, 'Head First Java', '0596800762', 'Kathy Sierra, Bert Bates', 4612, 3000, 'java is a must learinig language for programmers', '../uploads/5fb913521ce160.25320484.png', '../uploads/5fb913521ce260.22064862.png', '../uploads/5fb913521ce2c1.66474197.png', 'Science', 'Engineering', '', '', 'N', '2020-11-21 18:47:06', 'Y', 3),
(3, 'Python Cookbook: Recipes for Mastering Python 3', '9781449340377', 'Brian K. Jones and David M. Beazley', 554, 300, 'If you need help writing programs in Python 3, or want to update older Python 2 code, this book is just the ticket.', '../uploads/5fb91e2fc14a39.40265762.png', '../uploads/5fb91e2fc14b74.78931451.png', '../uploads/5fb91e2fc14bd6.82888867.png', 'Engineering', 'Science', '', '', 'N', '2020-11-21 19:33:27', 'Y', 3),
(4, 'The Rediscovery of India', '9780670083008', 'Meghnad Desai, Baron Desai', 554, 200, 'This is quite a brilliant book. This is one of those books that i read without stopping. Much of the material was familiar to me', '../uploads/5fb968deba9a95.62048144.png', '../uploads/5fb968deba9b98.09866932.png', '../uploads/5fb968deba9be4.81370937.png', 'Textbook', 'Periodicals', '', '', 'N', '2020-11-22 00:52:06', 'Y', 4),
(5, 'The Discomfort of Evening: A Novel', '9782283033371', 'Marieke Lucas Rijneveld', 549, 300, 'WINNER OF THE 2020 INTERNATIONAL BOOKER PRIZEA stark and gripping tale of childhood grief from one of the most exciting new voices in Dutch literatureTen-year-old', '../uploads/5fb96e722792a1.37101882.png', '../uploads/5fb96e722793a7.09772871.png', '../uploads/5fb96e72279409.82472105.png', 'Realistic Fiction', 'English', '', '', 'N', '2020-11-22 01:15:54', 'Y', 4),
(6, 'Yogi Kathaamrt : Ek Yogi Ki Atmakatha', '9780876120958', 'Paramahansa Yogananda', 125, 100, 'Autobiography of a Yogi is an autobiography of Paramahansa Yogananda first published in 1946. Paramahansa Yogananda was born as Mukunda Lal Ghosh in Gorakhpur, India', '../uploads/5fb9703e1be7d7.85208799.png', '../uploads/5fb9703e1be8e1.37789901.png', '../uploads/5fb9703e1be938.06924468.png', 'Biography/Autobiography', 'Self-help Book', 'Classic', '', 'N', '2020-11-22 01:23:34', 'Y', 4),
(7, 'Wings of Fire', '9788173711466', 'A. P. J. Abdul Kalam and Arun Tiwari', 245, 100, 'Wings of Fire: An Autobiography of A P J Abdul Kalam, former President of India. It was written by Dr. Abdul Kalam and Arun Tiwari. ', '../uploads/5fb9722175af27.40218411.png', '../uploads/5fb9722175b072.02451348.png', '../uploads/5fb9722175b100.66292102.png', 'Biography/Autobiography', 'Science', '', '', 'N', '2020-11-22 01:31:37', 'Y', 4),
(8, 'The Buddha and His Dhamma', '9380688466', 'B. R. Ambedkar', 414, 300, 'From the introduction: \"Indications of a growth in the volume of interest in Buddhism are noticeable in some sections of the Indian people.', '../uploads/5fb978c7e0e733.19089606.png', '../uploads/5fb978c7e0e8e4.04585247.png', '../uploads/5fb978c7e0e945.87876286.png', 'Classic', '', '', '', 'N', '2020-11-22 01:59:59', 'Y', 3),
(9, 'The Martian: A Novel', '0553418025', 'Andy Weir', 700, 500, 'Nominated as one of Americaâ€™s best-loved novels by PBSâ€™s The Great American Read', '../uploads/5fbb5546999cf8.67837637.png', '../uploads/5fbb5546999fb0.14507296.png', '../uploads/5fbb554699a046.11697622.png', 'Science Fiction (Sci-Fi)', '', '', '', 'N', '2020-11-23 11:53:02', 'Y', 3),
(11, 'django for beginerrs', '5454545454', 'armstrong', 500, 200, 'this is a good book', '../uploads/601a71ea484042.80046836.png', '../uploads/601a71ea4841e0.19844533.png', '../uploads/601a71ea4842a0.80625053.png', 'Science', 'Computer Science', '', '', 'N', '2021-02-03 15:20:34', 'Y', 6);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `re_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact1` varchar(12) NOT NULL,
  `contact2` varchar(12) NOT NULL,
  `price` int(11) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`re_id`, `email`, `contact1`, `contact2`, `price`, `pos_id`, `owner_id`) VALUES
(9, 'ramchandra@yahoo.com', '8123434593', '9654868745', 100, 6, 4),
(10, 'ramboroy@rediffmail.com', '7545698547', '7589654785', 200, 4, 4),
(11, 'yeniffer@hotmail.com', '9654875485', '6654857459', 50, 7, 4),
(20, 'honeychintal@gmail.com', '7067285554', '', 787, 8, 3),
(21, 'raju@yahoo.com', '7945698457', '', 300, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `state`, `city`, `password`) VALUES
(1, 'rama@gmail.com', 'chhattisgarh', 'raipur', '55555'),
(2, 'sham@gmail.com', 'Chhattisgarh', 'Raipur', '6666'),
(3, 'jan@gmail.com', 'Chhattisgarh', 'Raipur', '$2y$10$ZU3Cpk//RNIXuIy2cyubLOn/8xzYsoDYPDFvvoflbQLMVD0BS68NC'),
(4, 'shan@yahoo.com', 'Chhattisgarh', 'Bilaspur', '$2y$10$2Ybwgz1VnKvpDqyEmxZfjOE.I/OuvvP2yLe4B4WWYiGJmiMUPmhuO'),
(5, 'karan@yahoo.com', 'Chhattisgarh', 'Raipur', '$2y$10$7WoBSCucZmi1sMRNXUAMpeJcJVdmV84NicpItHD/6E4asOW1/6aMO'),
(6, 'mahendra@gmail.com', 'Chhattisgarh', 'Raipur', '$2y$10$U/pUh9xGmGCF1P1Gp.lhQeVDhocKLOkS/e5zOsDVIJ.Gr.c/OlPue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `postbook`
--
ALTER TABLE `postbook`
  ADD PRIMARY KEY (`p_id`);
ALTER TABLE `postbook` ADD FULLTEXT KEY `b_name` (`b_name`,`b_isbn`,`b_auth`,`descript`,`genr1`,`genr2`,`genr3`,`genr4`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categ`
--
ALTER TABLE `categ`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `postbook`
--
ALTER TABLE `postbook`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
