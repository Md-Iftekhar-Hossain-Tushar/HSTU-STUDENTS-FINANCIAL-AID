-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 06:16 PM
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
-- Database: `project 3 ii`
--

-- --------------------------------------------------------

--
-- Table structure for table `giving_donation`
--

CREATE TABLE `giving_donation` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_gender` varchar(10) NOT NULL,
  `d_contact` varchar(11) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_address` varchar(200) NOT NULL,
  `d_amount` varchar(7) NOT NULL,
  `d_banking_service` varchar(20) NOT NULL,
  `d_account` varchar(15) NOT NULL,
  `d_transaction` varchar(20) NOT NULL,
  `d_purpose` varchar(500) NOT NULL,
  `d_received` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `giving_donation`
--

INSERT INTO `giving_donation` (`d_id`, `d_name`, `d_gender`, `d_contact`, `d_email`, `d_address`, `d_amount`, `d_banking_service`, `d_account`, `d_transaction`, `d_purpose`, `d_received`) VALUES
(12, 'tushar', 'male', '01738207727', 'tushar@gmail.com', 'Jagannathpur, Thakurgaon', '10,000', 'Trust Axiata pay', '01738207727', '4546565678552412', 'well wishing', 'not_received'),
(13, 'tushar', 'male', '01738207727', 'tushar@gmail.com', 'Jagannathpur, Thakurgaon', '5000', 'Trust Axiata pay', '01738207727', '454656567447', 'well wishing', 'not_received'),
(16, 'maruf', 'male', '01766643155', 'maruf@gmail.com', 'HSTU,dinajpur', '5000', 'SureCash', '33333', '4444444', 'helping hand', 'not_received'),
(17, 'maruf', 'male', '01766643155', 'maruf@gmail.com', 'HSTU,dinajpur', '5000', 'bKash', '33333', '3454', 'helping hand', 'not_received'),
(20, 'rakib', 'male', '01611580264', 'rakib@gmail.com', 'baserhat', '10,000', 'Nagad', '01611580264', '223432215', 'for education\r\n', 'not_received'),
(21, 'rakib', 'male', '01611580264', 'rakib@gmail.com', 'baserhat', '10,000', 'Nagad', '01611580264', '2234322154', 'for education\r\n', 'not_received'),
(22, 'rakib', 'male', '01611580264', 'rakib@gmail.com', 'baserhat', '10,000', 'Nagad', '01611580264', '223432215422', 'for education\r\n', 'not_received');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `photo_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo_name`) VALUES
(32, 'photo/1-s2.0-S0969698919304217-fx3.jpg'),
(33, 'photo/5eeb103354e12.jpeg'),
(34, 'photo/200420_community_px.jpg'),
(35, 'photo/akshayapatrarighttoeducation_orig.jpg'),
(36, 'photo/atul-pandey-0f3bzhxzsz8-unsplash.avif'),
(37, 'photo/donate-food-for-student-education.jpeg'),
(38, 'photo/download (1).jpg'),
(39, 'photo/download.jpg'),
(40, 'photo/https___images.ctfassets.net_wvozpes63uc8_4Dmy9MGWxDARcFkLULpod0_b6da29b7704de492c72f5ca7b5b91499_JS_20170926_0406.avif'),
(41, 'photo/images (1).jpg'),
(42, 'photo/images (2).jpg'),
(43, 'photo/images (3).jpg'),
(44, 'photo/images (3).jpg'),
(45, 'photo/images (5).jpg'),
(46, 'photo/images.jpg'),
(48, 'photo/International Day of Charity.png'),
(49, 'photo/istockphoto-1391554503-612x612.jpg'),
(50, 'photo/Zakat-2022-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_type` varchar(50) NOT NULL DEFAULT 'Normal User',
  `u_password` varchar(20) NOT NULL DEFAULT 'password',
  `u_permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`u_name`, `u_email`, `u_type`, `u_password`, `u_permission`) VALUES
('a_maruf', 'a_maruf@gmail.com', 'authority_user', 'a_maruf', 'permitted'),
('a_rakib', 'a_rakib@gmail.com', 'authority_user', 'a_rakib', 'permitted'),
('a_tushar', 'a_tushar@gmail.com', 'authority_user', 'a_tushar', 'permitted'),
('maruf', 'maruf@gmail.com', 'normal_user', 'maruf', 'permitted'),
('rakib', 'rakib@gmail.com', 'normal_user', 'rakib', 'permitted'),
('tushar', 'tushar@gmail.com', 'normal_user', 'tushar', 'permitted');

-- --------------------------------------------------------

--
-- Table structure for table `wanting_donation`
--

CREATE TABLE `wanting_donation` (
  `donation_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_faculty` varchar(100) NOT NULL,
  `u_id` varchar(7) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_number` varchar(11) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_permanent_add` varchar(200) NOT NULL,
  `u_local_add` varchar(200) NOT NULL,
  `u_amount_need` varchar(5) NOT NULL,
  `u_purpose` varchar(500) NOT NULL,
  `u_attachment` varchar(500) NOT NULL,
  `form_accepted` varchar(20) NOT NULL,
  `form_judged` varchar(20) NOT NULL,
  `form_donation_complete` varchar(20) NOT NULL,
  `form_donation_complete_attachment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wanting_donation`
--

INSERT INTO `wanting_donation` (`donation_id`, `u_name`, `u_faculty`, `u_id`, `u_gender`, `u_number`, `u_email`, `u_permanent_add`, `u_local_add`, `u_amount_need`, `u_purpose`, `u_attachment`, `form_accepted`, `form_judged`, `form_donation_complete`, `form_donation_complete_attachment`) VALUES
(27, 'tushar', 'Computer Science and Engineering', '1902061', 'male', '01738207727', 'tushar@gmail.com', 'thakurgaon', 'baserhat', '3000', 'enrolemnt', 'user_uploaded_files/1902061.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete'),
(28, 'maruf', 'Computer Science and Engineering', '1902029', 'male', '01766643155', 'maruf@gmail.com', 'bogura', 'baserhat', '3000', 'enrolemnt', 'user_uploaded_files/1902029.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete'),
(29, 'rakib', 'Computer Science and Engineering', '1902028', 'male', '01654545455', 'rakib@gmail.com', 'narsingdi', 'baserhat', '3000', 'enrolemnt', 'user_uploaded_files/1902028.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete'),
(30, 'tania', 'Computer Science and Engineering', '1902011', 'female', '01654545478', 'tania@gmail.com', 'joypurhat', 'baserhat', '3000', 'enrolemnt', 'user_uploaded_files/1902011.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete'),
(31, 'abida', 'Computer Science and Engineering', '1902023', 'female', '017556690', 'abida@gmail.com', 'rajshai', 'baserhat', '3000', 'enrolemnt', 'user_uploaded_files/1902023.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete'),
(32, 'ruksi', 'Computer Science and Engineering', '1902076', 'female', '0175566956', 'ruksi@gmail.com', 'thakurgoan', 'baserhat', '3789', 'enrolemnt', 'user_uploaded_files/1902076.pdf', 'not_accepted', 'not_judged', 'not_complete', 'not_complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giving_donation`
--
ALTER TABLE `giving_donation`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`u_email`),
  ADD UNIQUE KEY `u_password` (`u_password`);

--
-- Indexes for table `wanting_donation`
--
ALTER TABLE `wanting_donation`
  ADD UNIQUE KEY `donation_id` (`donation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giving_donation`
--
ALTER TABLE `giving_donation`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wanting_donation`
--
ALTER TABLE `wanting_donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
