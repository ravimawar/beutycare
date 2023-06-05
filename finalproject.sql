-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2019 at 09:51 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_tbl`
--

CREATE TABLE IF NOT EXISTS `area_tbl` (
  `area_id` int(15) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `area_tbl`
--

INSERT INTO `area_tbl` (`area_id`, `area_name`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(23, 'aslali', 2, '2019-04-05', '2019-04-13'),
(24, 'Chandkheda', 2, '2019-04-05', '0000-00-00'),
(25, 'Sola', 1, '2019-04-05', '2019-04-16'),
(26, 'Nikol', 1, '2019-04-05', '0000-00-00'),
(27, 'Satelite', 1, '2019-04-05', '0000-00-00'),
(28, 'Ambavadi', 1, '2019-04-05', '0000-00-00'),
(29, 'Bapunagar', 1, '2019-04-05', '0000-00-00'),
(30, 'Elisbridge', 1, '2019-04-05', '0000-00-00'),
(31, 'Ghodasar', 1, '2019-04-05', '0000-00-00'),
(32, 'Gurukul', 1, '2019-04-05', '0000-00-00'),
(33, 'Isanpur', 1, '2019-04-05', '0000-00-00'),
(34, 'Juhapura', 1, '2019-04-05', '0000-00-00'),
(35, 'Kheda', 1, '2019-04-05', '0000-00-00'),
(36, 'Maninagar', 1, '2019-04-05', '0000-00-00'),
(37, 'Manipur', 1, '2019-04-05', '0000-00-00'),
(38, 'Memnagar', 1, '2019-04-05', '0000-00-00'),
(39, 'Navrangpura', 1, '2019-04-05', '0000-00-00'),
(40, 'Odhav', 1, '2019-04-05', '0000-00-00'),
(41, 'Paldi', 1, '2019-04-05', '0000-00-00'),
(42, 'Ranip', 1, '2019-04-05', '0000-00-00'),
(43, 'Shilaj', 1, '2019-04-05', '0000-00-00'),
(44, 'Vasna', 1, '2019-04-05', '0000-00-00'),
(45, 'Vastral', 1, '2019-04-05', '0000-00-00'),
(46, 'Jivraj', 1, '2019-04-05', '0000-00-00'),
(47, 'Vatva', 1, '2019-04-05', '0000-00-00'),
(48, 'Sahibag', 1, '2019-04-05', '0000-00-00'),
(49, 'Shubhashbridge', 1, '2019-04-05', '0000-00-00'),
(50, 'RTO', 1, '2019-04-05', '0000-00-00'),
(51, 'Naranpura', 1, '2019-04-05', '0000-00-00'),
(52, 'Bhimajipura', 1, '2019-04-05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE IF NOT EXISTS `cart_tbl` (
  `cart_id` int(15) NOT NULL AUTO_INCREMENT,
  `sub_id` int(15) NOT NULL,
  `price` varchar(100) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cart_id`, `sub_id`, `price`, `subcategory_name`, `isactive`, `date_of_insert`, `date_of_update`, `id`) VALUES
(129, 30, '200', 'Full hand', 1, '2019-04-18', '2019-04-18', 74),
(130, 30, '200', 'Full hand', 2, '2019-04-18', '2019-04-18', 74),
(131, 45, '1000', 'Full Body', 1, '2019-04-18', '2019-04-18', 74);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_tbl`
--

CREATE TABLE IF NOT EXISTS `complaint_tbl` (
  `id` int(11) NOT NULL,
  `c_id` int(15) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `complaint_tbl`
--

INSERT INTO `complaint_tbl` (`id`, `c_id`, `firstname`, `email`, `mobileno`, `message`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(0, 1, 'amisha', 'amisha@gmail.com', '5605050607', 'eriojfoerijgperkd', 0, '2019-03-09', '2019-03-15'),
(0, 2, 'amisha', 'amisha@gmail.com', '5605050607', 'eriojfoerijgperkd', 2, '2019-03-09', '0000-00-00'),
(0, 3, 'amisha', 'amisha@gmail.com', '8788977909', 'dfgrtgrt', 2, '2019-03-09', '0000-00-00'),
(0, 4, 'aaaa', 'a@gmail.com', '4545456546', 'oaksdlsd', 2, '2019-03-09', '0000-00-00'),
(0, 5, 'disha', 'disha@gmail.com', '564', 'grtgrdtgt', 1, '2019-03-09', '2019-03-10'),
(0, 6, 'amisha', 'amisha@gmail.com', '787767', 'j8jiujk', 1, '2019-03-09', '0000-00-00'),
(0, 7, '', '', '', '', 2, '2019-03-09', '0000-00-00'),
(0, 8, '', '', '', '', 2, '2019-03-09', '0000-00-00'),
(0, 9, '', '', '', '', 2, '2019-03-09', '0000-00-00'),
(12, 10, 'shivangi', 'shivangi@gmail.com', '989809809', 'hjknkm,', 1, '2019-03-09', '0000-00-00'),
(12, 11, 'jli', 'huij2@GMAIL.COM', '', 'jiol', 2, '2019-03-09', '0000-00-00'),
(12, 12, '', '', '', '', 2, '2019-03-09', '0000-00-00'),
(12, 13, '', '', '', '', 2, '2019-03-09', '0000-00-00'),
(12, 14, 'shivu', 'shivangi@gmail.com', '5678432345', 'huijk kjlm,', 1, '2019-03-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `cn_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` varchar(50) NOT NULL,
  `dou` varchar(50) NOT NULL,
  PRIMARY KEY (`cn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`cn_id`, `id`, `name`, `email`, `subject`, `message`, `isactive`, `doi`, `dou`) VALUES
(1, 74, 'shivangis', 'shivu@gmail.com', 'iujhaskop', 'o8ijkm,joikl,', 1, '2019-04-07', '2019-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE IF NOT EXISTS `feedback_tbl` (
  `id` int(11) NOT NULL,
  `f_id` int(15) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `f_id`, `firstname`, `email`, `mobileno`, `message`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(0, 1, 'amisha', 'amisha@gmail.com', '5678903456', 'jkloljk.', 2, '2019-03-09', '0000-00-00'),
(5, 2, 'divya', 'divya@gmail.com', '8798986789', 'bjkmnikdfjxkjlgdfc', 1, '2019-03-09', '2019-03-15'),
(5, 3, 'divya', 'divya@gmail.com', '75789', 'hoijkkjm', 1, '2019-03-10', '0000-00-00'),
(74, 4, 'shivangi', 'shivu@gmail.com', '6587907865', '234ertfhnvgfs', 1, '2019-04-08', '0000-00-00'),
(74, 5, 'shivangi', 'shivu@gmail.com', '6587907865', '234ertfhnvgfs', 1, '2019-04-08', '0000-00-00'),
(74, 6, 'shivangi', 'shivu@gmail.com', '6587907865', '234ertfhnvgfs', 1, '2019-04-08', '0000-00-00'),
(74, 7, 'shivangi', 'shivu@gmail.com', '6587907865', '234ertfhnvgfs', 1, '2019-04-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE IF NOT EXISTS `order_tbl` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` datetime NOT NULL,
  `orderuserid` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_id`, `cart_id`, `sub_id`, `price`, `user_id`, `artist_id`, `t_id`, `isactive`, `doi`, `orderuserid`) VALUES
(14, 107, 29, '150', 74, 75, 4, 1, '2019-04-16 00:00:00', 2),
(15, 108, 38, '4000', 74, 75, 4, 1, '2019-04-16 00:00:00', 2),
(16, 109, 30, '200', 2, 77, 9, 1, '2019-04-16 00:00:00', 3),
(17, 109, 30, '200', 2, 77, 10, 1, '2019-04-16 00:00:00', 4),
(18, 110, 28, '100', 74, 77, 9, 1, '2019-04-16 00:00:00', 5),
(19, 110, 28, '100', 74, 77, 9, 1, '2019-04-16 00:00:00', 6),
(20, 110, 28, '100', 74, 77, 9, 1, '2019-04-16 00:00:00', 7),
(21, 111, 28, '100', 74, 77, 9, 1, '2019-04-16 00:00:00', 8),
(22, 112, 53, '200', 74, 77, 9, 1, '2019-04-16 00:00:00', 8),
(23, 113, 52, '180', 74, 77, 9, 1, '2019-04-16 00:00:00', 9),
(24, 114, 52, '180', 74, 77, 9, 1, '2019-04-16 00:00:00', 10),
(25, 114, 52, '180', 74, 77, 9, 1, '2019-04-16 00:00:00', 11),
(26, 115, 27, '30', 74, 77, 9, 1, '2019-04-16 00:00:00', 12),
(27, 116, 34, '350', 74, 77, 9, 1, '2019-04-16 00:00:00', 12),
(28, 117, 34, '350', 74, 77, 9, 1, '2019-04-16 00:00:00', 13),
(29, 117, 34, '350', 74, 77, 9, 1, '2019-04-16 00:00:00', 14),
(30, 117, 34, '350', 74, 77, 9, 1, '2019-04-16 00:00:00', 15),
(31, 118, 33, '200', 74, 77, 9, 1, '2019-04-16 00:00:00', 15),
(32, 119, 39, '3000', 74, 77, 9, 1, '2019-04-16 00:00:00', 15),
(33, 117, 34, '350', 74, 77, 9, 1, '2019-04-16 00:00:00', 16),
(34, 118, 33, '200', 74, 77, 9, 1, '2019-04-16 00:00:00', 16),
(35, 119, 39, '3000', 74, 77, 9, 1, '2019-04-16 00:00:00', 16),
(36, 120, 30, '200', 74, 77, 9, 1, '2019-04-16 00:00:00', 16),
(37, 121, 29, '150', 74, 75, 6, 1, '2019-04-17 00:00:00', 17),
(38, 122, 30, '200', 74, 77, 9, 1, '2019-04-17 00:00:00', 18),
(39, 123, 53, '200', 74, 77, 9, 1, '2019-04-17 00:00:00', 18),
(40, 124, 30, '200', 74, 75, 6, 1, '2019-04-18 00:00:00', 19),
(41, 125, 34, '350', 74, 75, 6, 1, '2019-04-18 00:00:00', 19),
(42, 126, 27, '30', 74, 75, 6, 1, '2019-04-18 00:00:00', 19),
(43, 127, 48, '200', 74, 75, 6, 1, '2019-04-18 00:00:00', 19),
(44, 128, 34, '350', 74, 75, 6, 1, '2019-04-18 00:00:00', 19);

-- --------------------------------------------------------

--
-- Table structure for table `reg_tbl`
--

CREATE TABLE IF NOT EXISTS `reg_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `security_question1` varchar(100) NOT NULL,
  `security_answer1` varchar(50) NOT NULL,
  `security_question2` varchar(100) NOT NULL,
  `security_answer2` varchar(50) NOT NULL,
  `security_question3` varchar(100) NOT NULL,
  `security_answer3` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `reg_tbl`
--

INSERT INTO `reg_tbl` (`id`, `firstname`, `lastname`, `email`, `mobileno`, `gender`, `password`, `usertype`, `security_question1`, `security_answer1`, `security_question2`, `security_answer2`, `security_question3`, `security_answer3`, `area`, `address`, `profile_pic`, `skill`, `discription`, `isactive`, `doi`, `date_of_update`) VALUES
(2, 'amisha', 'prajapati', 'amee@gmail.com', '9714696710', 'female', 'amee', 'admin', 'what is your favorite place?		', 'ahmedabad', 'what is your school name?', 'v.s. school', 'what is your favorite color?', 'white', 'vatva', '8,haridarshan society,vatva,ahmedabad', 'uploads/IMG-20190319-WA0005.jpg', '', '', 1, '2018-12-23', '2019-04-17'),
(74, 'shivangi', 'prajapati', 'shivu@gmail.com', '9409688075', 'female', '1234', 'customer', 'what is your favorite place ?', 'ahmedabad', 'what is your  school name?', 'sarda mandir', 'what is your favorite color?', 'sky blue', 'vatva', 'b2,bhaktinagar society,vatva,ahmedabad', 'uploads/4bc6814b05e4d1a6b9127635335e4f77.jpg', '', '', 1, '2019-04-05', '2019-04-17'),
(75, 'sweta', 'patel', 'sweta@gmail.com', '9425675940', 'female', 'sweta', 'artist', 'what is your favorite place ?', 'ahmedabad', 'what is your  school name?', 'muktjivan', 'what is your favorite color?', 'yellow', 'isanpur', 'b2,bhaktinagar society,ahmedabad-380051,vatva,ahmedabad', 'uploads/IMG-20190319-WA0006.jpg', 'hair cutting', '1 year trening,1 year expirean', 1, '2019-04-05', '2019-04-17'),
(76, 'nirali', 'agraval', 'nirali@gmail.com', '9723222014', 'female', 'nirali', 'artist', 'what is your favorite place ?', 'goa', 'what is your  school name?', 'h.b. kapadiya', 'what is your favorite color?', 'red', 'ranip', 'rudrabag society,jivrajpark,vatva,ahmedabad', 'uploads/IMG-20190319-WA0005.jpg', 'makeup', 'specialist in nail art,4 year ', 1, '2019-04-05', '2019-04-07'),
(77, 'aayushi', 'makwana', 'aayushi@gmail.com', '9723222014', 'female', 'aayushi', 'artist', 'what is your favorite place ?', 'goa', 'what is your  school name?', 'kumkum vidhyalay', 'what is your favorite color?', 'yellow', 'sola', '8,haridarshan society,vatva,ahmedabad', 'uploads/IMG-20190319-WA0004.jpg', 'facial,makeup', '1 year training, 2 year experience', 1, '2019-04-15', '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `security_question_tbl`
--

CREATE TABLE IF NOT EXISTS `security_question_tbl` (
  `sq_id` int(15) NOT NULL AUTO_INCREMENT,
  `sq` varchar(100) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`sq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `security_question_tbl`
--

INSERT INTO `security_question_tbl` (`sq_id`, `sq`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(1, 'what is your favorite place ?', 1, '2018-12-28', '2019-04-05'),
(2, 'what is your  school name?', 1, '2018-12-29', '2019-04-05'),
(4, 'what is your favorite color?', 1, '2018-12-29', '2019-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `service_category_tbl`
--

CREATE TABLE IF NOT EXISTS `service_category_tbl` (
  `sc_id` int(15) NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `isactive` int(15) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `service_category_tbl`
--

INSERT INTO `service_category_tbl` (`sc_id`, `sc_name`, `profile_pic`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(19, '   Treding', 'uploads/10.jpg', 1, '2019-04-05', '2019-04-17'),
(20, ' Waxing', 'uploads/6.png', 1, '2019-04-05', '2019-04-17'),
(21, 'nail art', 'uploads/thYNPTBK3T.jpg', 1, '2019-04-05', '0000-00-00'),
(22, 'Hair care', 'uploads/44.jpg', 1, '2019-04-05', '2019-04-17'),
(23, 'Makeup', 'uploads/11.jpg', 1, '2019-04-05', '0000-00-00'),
(24, ' Bleaching', 'uploads/4.png', 1, '2019-04-15', '0000-00-00'),
(25, 'Clean Up', 'uploads/11(1)(1).jpg', 2, '2019-04-15', '0000-00-00'),
(26, 'Clean Up', 'uploads/18.jpg', 1, '2019-04-15', '0000-00-00'),
(27, 'Hair Mahendi', 'uploads/21.jpg', 2, '2019-04-15', '0000-00-00'),
(28, ' Facial', 'uploads/35.jpg', 1, '2019-04-15', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tbl`
--

CREATE TABLE IF NOT EXISTS `sub_category_tbl` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_id` int(11) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `date_of_insert` date NOT NULL,
  `date_of_update` date NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `sub_category_tbl`
--

INSERT INTO `sub_category_tbl` (`sub_id`, `sc_id`, `subcategory_name`, `profile_pic`, `price`, `isactive`, `date_of_insert`, `date_of_update`) VALUES
(27, 19, 'Eye_brow', 'uploads/4.png', '30', 1, '2019-04-05', '2019-04-17'),
(28, 19, 'Full face', 'uploads/35.jpg', '100', 1, '2019-04-05', '0000-00-00'),
(29, 20, 'Leg waxing', 'uploads/thRXJN1Y8U.jpg', '150', 1, '2019-04-05', '0000-00-00'),
(30, 20, 'Full hand', 'uploads/wax.jpg', '200', 1, '2019-04-05', '2019-04-15'),
(31, 21, 'Basic nail art', 'uploads/th5E0C90BS.jpg', '149', 1, '2019-04-05', '0000-00-00'),
(32, 23, 'Simple eye shed', 'uploads/hd-brows-lichfield-710x375.jpg', '500', 1, '2019-04-05', '0000-00-00'),
(33, 21, 'Gel nail polish', 'uploads/thYNPTBK3T.jpg', '200', 1, '2019-04-05', '0000-00-00'),
(34, 21, 'Real flower art', 'uploads/thENIATX0I.jpg', '350', 1, '2019-04-05', '0000-00-00'),
(35, 21, 'Fashion nail', 'uploads/th.jpg', '500', 1, '2019-04-05', '0000-00-00'),
(36, 22, 'Hair cutting(any style)', 'uploads/16.jpg', '250', 1, '2019-04-05', '0000-00-00'),
(37, 22, 'Hair style', 'uploads/44.jpg', '500', 1, '2019-04-05', '0000-00-00'),
(38, 22, 'Hair smoothing', 'uploads/27.jpg', '4000', 1, '2019-04-05', '0000-00-00'),
(39, 22, 'Hair perming', 'uploads/19.jpg', '3000', 1, '2019-04-05', '0000-00-00'),
(40, 22, 'Hair color(natural)', 'uploads/29.jpg', '1500', 1, '2019-04-05', '0000-00-00'),
(41, 22, 'Global(Fashion)', 'uploads/48.jpg', '2000', 1, '2019-04-05', '0000-00-00'),
(42, 22, 'Hair spa', 'uploads/18.jpg', '1000', 1, '2019-04-05', '0000-00-00'),
(43, 19, 'Upper Lip', 'uploads/38.jpg', '20', 1, '2019-04-15', '0000-00-00'),
(44, 19, 'Chin', 'uploads/9.jpg', '20', 1, '2019-04-15', '0000-00-00'),
(45, 20, 'Full Body', 'uploads/6.png', '1000', 1, '2019-04-15', '0000-00-00'),
(46, 20, 'Long up to knee', 'uploads/waxing.jpg', '130', 1, '2019-04-15', '0000-00-00'),
(47, 24, 'Neck/Feet', 'uploads/thGGNHK3SL.jpg', '150', 1, '2019-04-15', '0000-00-00'),
(48, 24, 'Face/Front/Back', 'uploads/50.jpg', '200', 1, '2019-04-15', '2019-04-15'),
(49, 24, 'Full Body', 'uploads/facial.jpg', '1200', 1, '2019-04-15', '0000-00-00'),
(50, 24, 'Full Legs', 'uploads/h2.jpg', '300', 1, '2019-04-15', '0000-00-00'),
(51, 26, 'Almond Honey', 'uploads/makup.jpg', '130', 1, '2019-04-15', '0000-00-00'),
(52, 26, 'Rose', 'uploads/30.jpg', '180', 1, '2019-04-15', '0000-00-00'),
(53, 26, 'Fruit', 'uploads/40.jpg', '200', 1, '2019-04-15', '0000-00-00'),
(54, 28, 'Skin Lighting', 'uploads/thZS08802C.jpg', '1000', 1, '2019-04-15', '0000-00-00'),
(55, 28, 'Gold With Dimond', 'uploads/35.jpg', '2000', 1, '2019-04-15', '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `time_sloat`
--

CREATE TABLE IF NOT EXISTS `time_sloat` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `isactive` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `time_sloat`
--

INSERT INTO `time_sloat` (`t_id`, `id`, `time`, `status`, `isactive`) VALUES
(4, 75, '11to12', 'booking', 1),
(6, 75, '5to10', 'pending', 1),
(7, 75, '10to12', 'pending', 1),
(8, 75, '1to4', 'booking', 1),
(9, 77, '9to11', 'Pending', 1),
(10, 77, '12to1', 'Pending', 1),
(11, 77, '3to5', 'Pending', 1),
(12, 77, '6to8', 'Pending', 1);
