-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 01:25 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heartofjesus`
--

-- --------------------------------------------------------

--
-- Table structure for table `baptist`
--

CREATE TABLE `baptist` (
  `id` int(11) NOT NULL,
  `child_name` varchar(50) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthplace` varchar(50) DEFAULT NULL,
  `father` varchar(50) DEFAULT NULL,
  `father_birth_place` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `mother_birth_place` varchar(50) DEFAULT NULL,
  `married_at` varchar(50) DEFAULT NULL,
  `current_address` varchar(50) DEFAULT NULL,
  `date_of_baptism` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `name_of_priest` varchar(50) DEFAULT NULL,
  `god_father_name` varchar(50) DEFAULT NULL,
  `god_father_address` varchar(50) DEFAULT NULL,
  `god_mother_name` varchar(50) DEFAULT NULL,
  `god_mother_address` varchar(50) NOT NULL,
  `other_god_father` text,
  `other_god_father2` varchar(50) DEFAULT NULL,
  `other_god_father3` varchar(50) DEFAULT NULL,
  `other_god_father4` varchar(50) DEFAULT NULL,
  `other_god_father5` varchar(50) DEFAULT NULL,
  `other_god_mother` text,
  `other_god_mother2` varchar(50) DEFAULT NULL,
  `other_god_mother3` varchar(50) DEFAULT NULL,
  `other_god_mother4` varchar(50) DEFAULT NULL,
  `other_god_mother5` varchar(50) DEFAULT NULL,
  `marriage_contract` varchar(50) DEFAULT NULL,
  `birth_certificate` varchar(50) DEFAULT NULL,
  `registration_fee` varchar(50) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `remarks` varchar(50) NOT NULL DEFAULT 'unfinished',
  `status` varchar(50) NOT NULL DEFAULT 'Undone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blessings`
--

CREATE TABLE `blessings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `time` text,
  `end_time` time DEFAULT NULL,
  `priest` varchar(50) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `remarks` varchar(50) NOT NULL DEFAULT 'unfinished',
  `status` varchar(50) NOT NULL DEFAULT 'Undone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bride_info`
--

CREATE TABLE `bride_info` (
  `id` int(11) NOT NULL,
  `bride_name` varchar(50) DEFAULT NULL,
  `bride_pob` varchar(50) DEFAULT NULL,
  `bride_citizenship` varchar(50) DEFAULT NULL,
  `bride_religion` varchar(50) DEFAULT NULL,
  `bride_birthday` date DEFAULT NULL,
  `bride_address` varchar(50) DEFAULT NULL,
  `bride_contact` varchar(50) DEFAULT NULL,
  `bride_occupation` varchar(50) DEFAULT NULL,
  `bride_father` varchar(50) DEFAULT NULL,
  `bride_father_occupation` varchar(50) DEFAULT NULL,
  `bride_mother` varchar(50) DEFAULT NULL,
  `bride_mother_occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bride_requirements`
--

CREATE TABLE `bride_requirements` (
  `id` int(11) NOT NULL,
  `bride_id` int(11) NOT NULL,
  `bride_req_marriage_license_released` date DEFAULT NULL,
  `bride_req_marriage_license_submitted` date DEFAULT NULL,
  `bride_req_marriage_contract` varchar(50) DEFAULT NULL,
  `bride_req_baptismal_marriage` varchar(50) DEFAULT NULL,
  `bride_req_confirmation_ar_number` varchar(50) DEFAULT NULL,
  `bride_req_request_permission` varchar(50) DEFAULT NULL,
  `bride_req_banns` varchar(50) DEFAULT NULL,
  `bride_req_sponsor_w_address` varchar(50) DEFAULT NULL,
  `bride_req_coupled_seminar` datetime DEFAULT NULL,
  `bride_req_cenomar` datetime DEFAULT NULL,
  `bride_req_confession` varchar(50) DEFAULT NULL,
  `bride_req_baranggay_clearance` varchar(50) DEFAULT NULL,
  `bride_req_baranggay_church_ar_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `broom_info`
--

CREATE TABLE `broom_info` (
  `id` int(11) NOT NULL,
  `broom_name` varchar(50) DEFAULT NULL,
  `broom_pob` varchar(50) DEFAULT NULL,
  `broom_citizenship` varchar(50) DEFAULT NULL,
  `broom_religion` varchar(50) DEFAULT NULL,
  `broom_birthday` date DEFAULT NULL,
  `broom_address` varchar(50) DEFAULT NULL,
  `broom_contact` varchar(50) DEFAULT NULL,
  `broom_occupation` varchar(50) DEFAULT NULL,
  `broom_father` varchar(50) DEFAULT NULL,
  `broom_father_occupation` varchar(50) DEFAULT NULL,
  `broom_mother` varchar(50) DEFAULT NULL,
  `broom_mother_occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `broom_requirements`
--

CREATE TABLE `broom_requirements` (
  `id` int(11) NOT NULL,
  `broom_id` int(11) NOT NULL,
  `broom_req_marriage_license_released` date DEFAULT NULL,
  `broom_req_marriage_license_submitted` date DEFAULT NULL,
  `broom_req_marriage_contract` varchar(50) DEFAULT NULL,
  `broom_req_baptismal_marriage` varchar(50) DEFAULT NULL,
  `broom_req_confirmation_ar_number` varchar(50) DEFAULT NULL,
  `broom_req_request_permission` varchar(50) DEFAULT NULL,
  `broom_req_banns` varchar(50) DEFAULT NULL,
  `broom_req_sponsor_w_address` varchar(50) DEFAULT NULL,
  `broom_req_coupled_seminar` date DEFAULT NULL,
  `broom_req_cenomar` date DEFAULT NULL,
  `broom_req_confession` varchar(50) DEFAULT NULL,
  `broom_req_baranggay_clearance` varchar(50) DEFAULT NULL,
  `broom_req_baranggay_church_ar_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `burials`
--

CREATE TABLE `burials` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `priest` varchar(50) NOT NULL,
  `death_person` varchar(50) NOT NULL,
  `cause_of_death` varchar(50) DEFAULT NULL,
  `dod` date NOT NULL,
  `dob` date NOT NULL,
  `death_certificate` varchar(50) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `remarks` varchar(50) NOT NULL DEFAULT 'unfinished',
  `status` varchar(50) NOT NULL DEFAULT 'Undone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `name`, `date`) VALUES
(1, 'New Year''s Day', '2018-01-01'),
(2, 'Holy Thursday', '2018-03-29'),
(3, 'Good Friday', '2018-03-30'),
(4, 'Araw ng Kagitingan', '2018-04-09'),
(5, 'Labor Day', '2018-05-01'),
(6, 'Independence Day', '2018-06-12'),
(7, 'National Heroes Day', '2018-08-27'),
(8, 'Bonifacio Day', '2018-11-30'),
(9, 'Chistmas Day', '2018-12-25'),
(10, 'Rizal Day', '2018-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `marriage`
--

CREATE TABLE `marriage` (
  `id` int(11) NOT NULL,
  `bride_id` int(11) NOT NULL,
  `broom_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `end_time` time DEFAULT NULL,
  `priest` varchar(50) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `status` varchar(50) NOT NULL DEFAULT 'Undone'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `priests`
--

CREATE TABLE `priests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(2) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priests`
--

INSERT INTO `priests` (`id`, `name`, `age`, `birthday`, `birthplace`, `address`, `position`, `isActive`) VALUES
(3, 'Fr. Sonny', '34', '2000-01-01', 'navotas', 'navotas', 'Reverent', 1),
(4, 'Fr. Joshua', '38', '2000-01-01', 'valenzuela city', 'valenzuela city', 'Visitor', 1),
(5, 'Juan', '60', '2018-03-12', 'Manila', 'Manila', '1st priest', 0),
(6, 'pedro', '60', '1980-12-09', 'malabon', 'malabon', 'priest', 0),
(7, 'Fr. Junel', '46', '1987-03-21', 'valenzuela city', 'valenzuela', 'priest', 1),
(8, 'fr. Reiner', '93', '1961-03-23', 'valenzuela city', 'valenzuela city', 'Reverent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `priest_schedule`
--

CREATE TABLE `priest_schedule` (
  `id` int(11) NOT NULL,
  `priest_id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priest_schedule`
--

INSERT INTO `priest_schedule` (`id`, `priest_id`, `day`, `start_time`, `end_time`) VALUES
(5, 3, 'Monday', '07:00:00', '20:00:00'),
(6, 3, 'Tuesday', '10:00:00', '13:00:00'),
(7, 4, 'Monday', '10:00:00', '14:00:00'),
(8, 4, 'Tuesday', '07:00:00', '09:00:00'),
(9, 3, 'Wednesday', '08:00:00', '00:00:00'),
(10, 5, 'Wednesday', '11:08:00', '00:02:00'),
(11, 6, 'Saturday', '09:00:00', '15:54:00'),
(14, 3, 'Sunday', '08:00:00', '13:00:00'),
(15, 4, 'Wednesday', '01:00:00', '15:00:00'),
(19, 4, 'Sunday', '08:00:00', '10:00:00'),
(20, 7, 'Monday', '15:00:00', '19:00:00'),
(21, 7, 'Tuesday', '14:00:00', '19:00:00'),
(22, 7, 'Wednesday', '08:00:00', '12:00:00'),
(26, 7, 'Sunday', '11:00:00', '19:00:00'),
(27, 8, 'Thursday', '06:00:00', '19:00:00'),
(28, 8, 'Friday', '06:00:00', '19:00:00'),
(29, 8, 'Saturday', '06:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `priest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `description`, `start_date`, `end_date`, `event_time`, `priest`) VALUES
(2, 'Mary, Mother of God', NULL, '2018-01-01', '2018-01-01', NULL, NULL),
(3, 'Ephiphany of the Lord', NULL, '2018-01-07', '2018-01-07', NULL, NULL),
(4, 'Baptism of the Lord', NULL, '2018-01-08', '2018-01-08', NULL, NULL),
(5, 'Sto. Nino', NULL, '2018-01-21', '2018-01-21', NULL, NULL),
(6, 'Conversion of St. Paul', NULL, '2018-01-25', '2018-01-25', NULL, NULL),
(7, 'Timothy and Titus, bishops', NULL, '2018-01-26', '2018-01-26', NULL, NULL),
(8, 'Presentation of the Lord', NULL, '2018-02-02', '2018-02-02', NULL, NULL),
(9, 'Ash Wednesday', NULL, '2018-02-14', '2018-02-14', NULL, NULL),
(10, 'Chair of St. Peter, apostle', NULL, '2018-02-22', '2018-02-22', NULL, NULL),
(11, 'Joseph, husband of Mary', NULL, '2018-03-19', '2018-03-19', NULL, NULL),
(12, 'Palm Sunday', NULL, '2018-03-25', '2018-03-25', NULL, NULL),
(13, 'Easter Sunday', NULL, '2018-04-01', '2018-04-01', NULL, NULL),
(14, 'Annunciation', NULL, '2018-04-09', '2018-04-09', NULL, NULL),
(15, 'Mark, evangelist', NULL, '2018-04-25', '2018-04-25', NULL, NULL),
(16, 'Phili and James, apostles', NULL, '2018-05-03', '2018-05-03', NULL, NULL),
(17, 'Ascension Sunday', NULL, '2018-05-13', '2018-05-13', NULL, NULL),
(18, 'Pentecost Sunday', NULL, '2018-05-20', '2018-05-20', NULL, NULL),
(19, 'Trinity Sunday', '', '2018-05-27', '2018-05-27', NULL, NULL),
(20, 'Visitation of the BVM', NULL, '2018-05-31', '2018-05-31', NULL, NULL),
(21, 'Corpus Christi', NULL, '2018-06-03', '2018-06-03', NULL, NULL),
(22, 'Sacred Heart of Jesus', NULL, '2018-06-08', '2018-06-08', NULL, NULL),
(23, 'Nativity of John the Baptist', NULL, '2018-06-24', '2018-06-24', NULL, NULL),
(24, 'Peter and Paul, apotles', NULL, '2018-06-29', '2018-06-29', NULL, NULL),
(25, 'Thomas, apostle', NULL, '2018-07-03', '2018-07-03', NULL, NULL),
(26, 'James, apostle', NULL, '2018-07-25', '2018-07-25', NULL, NULL),
(27, 'Transfiguration', NULL, '2018-08-06', '2018-08-06', NULL, NULL),
(28, 'Lawrence, deacon', NULL, '2018-08-10', '2018-08-10', NULL, NULL),
(29, 'Assumption', NULL, '2018-08-15', '2018-08-15', NULL, NULL),
(30, 'Bartholomew, apostle', NULL, '2018-08-24', '2018-08-24', NULL, NULL),
(31, 'Nativity of the BVM', NULL, '2018-09-08', '2018-09-08', NULL, NULL),
(32, 'Exaltation of the Holy Cross', NULL, '2018-09-14', '2018-09-14', NULL, NULL),
(33, 'Our Lady of Sorrows', NULL, '2018-09-15', '2018-09-15', NULL, NULL),
(34, 'Matthew, apostle and evangelist', NULL, '2018-09-21', '2018-09-21', NULL, NULL),
(35, 'Lorenzo Ruiz, martyr', NULL, '2018-09-28', '2018-09-28', NULL, NULL),
(36, 'Michael, Gabriel and Raphael, arrchangels', NULL, '2018-09-29', '2018-09-29', NULL, NULL),
(37, 'Luke,evangelist', NULL, '2018-10-18', '2018-10-18', NULL, NULL),
(38, 'Jesus, the Divine Master', NULL, '2018-10-28', '2018-10-28', NULL, NULL),
(39, 'All Saints', NULL, '2018-11-01', '2018-11-01', NULL, NULL),
(40, 'All Souls', NULL, '2018-11-02', '2018-03-02', NULL, NULL),
(41, 'Dedication of tje Lateran Basilica', NULL, '2018-11-09', '2018-11-09', NULL, NULL),
(42, 'Christ the King', NULL, '2018-11-25', '2018-11-25', NULL, NULL),
(43, 'Andrew, apostle', NULL, '2018-11-30', '2018-11-30', NULL, NULL),
(44, 'Immaculate Conception', NULL, '2018-12-08', '2018-12-08', NULL, NULL),
(45, 'Stephen. first martyr', NULL, '2018-12-26', '2018-12-26', NULL, NULL),
(46, 'John, apostle and evangelist', NULL, '2018-12-27', '2018-12-27', NULL, NULL),
(47, 'Holy Family', NULL, '2018-12-30', '2018-12-30', NULL, NULL),
(48, 'sample', 'JJ', '2018-04-06', '2018-04-06', '11:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `isActive`) VALUES
(1, 'staff', '1253208465b1efa876f982d8a9e73eef', 'shainamonreal@gmail.com', 'superadmin', 1),
(4, 'mark', 'ea82410c7a9991816b5eeeebe195e20a', 'mak@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `name`, `address`, `contact`, `picture`) VALUES
(1, 1, 'Riolyn Ruffy', 'Manila City', '09124604367', 'default.png'),
(2, 2, 'Mark Erwin Sernaaa', 'Valenzuelaaaaa', '12344', 'default.png'),
(3, 3, 'Mark Erwin Serna', 'valenzuela', '123', 'default.png'),
(4, 4, 'mark', 'valenzuela', '12313123123', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baptist`
--
ALTER TABLE `baptist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blessings`
--
ALTER TABLE `blessings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bride_info`
--
ALTER TABLE `bride_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bride_requirements`
--
ALTER TABLE `bride_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broom_info`
--
ALTER TABLE `broom_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `broom_requirements`
--
ALTER TABLE `broom_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burials`
--
ALTER TABLE `burials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marriage`
--
ALTER TABLE `marriage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priests`
--
ALTER TABLE `priests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priest_schedule`
--
ALTER TABLE `priest_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baptist`
--
ALTER TABLE `baptist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blessings`
--
ALTER TABLE `blessings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bride_info`
--
ALTER TABLE `bride_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bride_requirements`
--
ALTER TABLE `bride_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `broom_info`
--
ALTER TABLE `broom_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `broom_requirements`
--
ALTER TABLE `broom_requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `burials`
--
ALTER TABLE `burials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `marriage`
--
ALTER TABLE `marriage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `priests`
--
ALTER TABLE `priests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `priest_schedule`
--
ALTER TABLE `priest_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
