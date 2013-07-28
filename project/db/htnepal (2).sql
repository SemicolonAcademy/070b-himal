-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2013 at 12:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `htnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'name of appointee',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `appointment_date` varchar(50) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `userid`, `name`, `phone`, `email`, `message`, `appointment_date`, `created_at`) VALUES
(7, 49, 'ramesh', '9849702258', 'ramesh@yahoo.com', 'hi myself ravi', '2013-06-7', 'July 11, 2013, 10:50 am'),
(8, 50, 'ravi', '9803405488', 'cragyioe@gmail.com', 'hi my name is ravi', '2013-06-12', 'July 11, 2013, 10:51 am'),
(9, 51, 'hari', '9849567890', 'hari@yahoo.com', 'hi my name is hari.', '2013-09-4', 'July 11, 2013, 10:51 am'),
(10, 52, 'sakuntala', '879657456', 'sk@hotmail.com', 'fhsdjhfsdhfsdhfsjkfh', '2014-6-31', 'July 11, 2013, 10:51 am'),
(11, 53, 'radha', '765432178', 'radha@yahoo.com', 'fsdkfjkfjklsdfjklasdj', '2013-07-12', 'July 11, 2013, 10:51 am'),
(12, 54, 'ramesh', '966778888', 'ramesh@yahoo.com', 'dsdhasjdhjasdh', '2013-09-30', 'July 11, 2013, 10:51 am');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(42, 'NIlesh', '9808155991', 'nilesh_2karna@yahoo.com', 'my name is khan and i m not a terrorist', 'July 2, 2013, 11:38 am'),
(44, 'Shankar sahu', '9803405488', 'shankarshau@yahoo.com', 'hi my name is shankar sahu', 'June 29, 2013, 9:38 am'),
(45, 'ravi', '9803405488', 'cragyioe@gmail.com', 'hi my namr is ravi', 'July 3, 2013, 7:14 am'),
(43, 'Sitesh', '9849105073', 'siteshkarn@yahoo.com', 'Hi myself Sitesh and i am post graduate student from Trivuwan University in Microiology .', 'July 2, 2013, 11:18 am'),
(46, 'yogen rai', '9849702258', 'yogen@gmail.com', 'hi my name is yogen rai', 'July 3, 2013, 7:14 am');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `slug`, `description`) VALUES
(1, 'Nursery', 'kid', 'kid related teacher '),
(2, 'Primary', 'kid', 'hi kids'),
(3, 'Lower Secondary', 'adoloscent', 'going to be adult'),
(4, 'Secondary', 'high_adoloscent', 'growing to be adult'),
(5, 'Intermediate', 'adult', 'being adult'),
(6, 'Bachelor', 'mature', 'being mature enough '),
(7, 'Master ', 'mature_enough', 'being family man');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `slug`) VALUES
(1, 'Kalimati', 'kalimati_ktm'),
(2, 'kupandole', 'kupandole_lalitpur'),
(3, 'Harihar bhavan', 'harihar_lalitpur'),
(4, 'patan dhoka', 'patan_lalitpur'),
(5, 'teaching hospital', 'iom_ktm'),
(6, 'maitidevi', 'maitidevi_ktm'),
(7, 'jawlakhel ', 'jawlakhel_lalitpur'),
(8, 'sanothimi', 'sanothimi_bhaktpur');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `bio` text NOT NULL,
  `age` int(11) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `temp_address` varchar(255) DEFAULT NULL,
  `teaching_location` varchar(255) NOT NULL,
  `teacher_qualification` text NOT NULL,
  `teaching_experience` text COMMENT 'previous school, colleges or home tuition experience',
  `experience_years` int(11) NOT NULL DEFAULT '0',
  `max_students` int(11) NOT NULL COMMENT 'maximum ekpalta ma padauna sakne',
  `expected_fee` float NOT NULL,
  `available_shift` varchar(255) NOT NULL,
  `available_timeslot` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `userid`, `bio`, `age`, `permanent_address`, `temp_address`, `teaching_location`, `teacher_qualification`, `teaching_experience`, `experience_years`, `max_students`, `expected_fee`, `available_shift`, `available_timeslot`, `created_at`) VALUES
(20, 54, '   i m under graduate student', 23, 'gulmi', ' maitidevi', ' maitidevi', ' be', '    fjasklfjakj', 0, 1, 4599, ' Morning', ' 1', ' 1373533135'),
(19, 53, '   nothing', 25, 'mohattarai', ' patan lalitpur', ' teaching hospital', ' nothing', '    dhanusha', 0, 1, 1234, ' Morning', ' 1', ' 1373533124'),
(18, 52, '   pea teacher', 24, 'illam', ' ktm', ' patan dhoka', ' be', '    nobel academy', 0, 1, 6789, ' Morning', ' 1', ' 1373533114'),
(17, 51, '    36363', 24, 'urlabari', ' patan lalitpur', ' Harihar bhavan', ' be', '     1 yr', 0, 1, 54678, ' Morning', ' 1', ' 1373533103'),
(16, 49, '     bachelor', 25, 'Janakpur, Janaki Chowk', ' Pulchowk, Lalitpur', ' Kalimati', ' be', '      25 years', 0, 1, 677888, ' Morning', ' 1', ' 1373802122');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `userid`, `name`, `phone`, `email`, `review`, `rating`, `status`, `created_at`) VALUES
(1, 567, 'ravi bhagat', '9803405488', 'ravi_bhagat30@yahoo.com', 'i reviewed your account and it is quite good.', 0, 0, '1373170161'),
(2, 435, 'maruti nandan thakur', '980211216', 'marutinandnath@yahoo.com', 'hi my name is maruti nandan thakur and i am graduate student', 2, 0, '1372844115');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `slug`, `description`) VALUES
(5, 'Mathematics', 'math', 'Math is magic of 10 number which surround whole universe.'),
(6, 'Physics', 'physics', 'It is fundamental of modern era'),
(7, 'Botany', 'botany', 'life of plant'),
(8, 'Zoology', 'zoology', 'life of human being');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_level`
--

CREATE TABLE IF NOT EXISTS `teacher_level` (
  `userid` int(11) NOT NULL,
  `levelid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_level`
--

INSERT INTO `teacher_level` (`userid`, `levelid`) VALUES
(51, 1),
(52, 1),
(53, 2),
(54, 2),
(55, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_subject`
--

CREATE TABLE IF NOT EXISTS `teacher_subject` (
  `userid` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_subject`
--

INSERT INTO `teacher_subject` (`userid`, `subject_id`) VALUES
(51, 5),
(52, 6),
(53, 6),
(57, 6),
(58, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `type` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `updated_on` varchar(255) NOT NULL,
  `created_on` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `middle_name`, `last_name`, `gender`, `email`, `photo`, `password`, `phone`, `address`, `type`, `status`, `featured`, `updated_on`, `created_on`) VALUES
(49, 'ravi', 'ravi', '', 'bhagat', 'm', 'ravi_bhagat30@yahoo.com', '0HIM3.JPG', 'ravi', '9803405488', 'janakpur', 1, 1, 0, '', '1373528940'),
(51, 'ramesh', 'ramesh', '', 'limbu', 'm', 'rameshlimbuisdon@yahoo.com', '124.JPG', 'ramesh', '9806001023', 'urlabari', 0, 0, 1, '', '1373529972'),
(52, 'yogen', 'yogen', '', 'rai ', 'm', 'yogen@gmail.com', '0004678.JPG', 'yogen', '980678543', 'illam', 0, 0, 0, '', '1373530019'),
(53, 'shushil', 'shushil', 'prasad', 'sah', 'm', 'shushilprasadsah@gmail.com', '172.JPG', 'shushil', '980564565456', 'dhanusha', 0, 0, 1, '', '1373529997'),
(54, 'bikram', 'bikram', '', 'thapa', 'm', 'bikram@yahoo.com', '3D Picture-086.JPG', 'bikram', '9849105070', 'gulmi', 0, 0, 1, '', '1373530088'),
(55, 'nimesh', 'nimesh', '', 'mishra', 'm', 'nimesh@gmail.com', '169.JPG', 'nimesh', '9849702258', 'Biratnagar', 0, 1, 1, '', '1373530161');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
