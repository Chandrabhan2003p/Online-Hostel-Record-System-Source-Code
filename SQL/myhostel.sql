-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 06:19 PM
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
-- Database: `myhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccess`
--

CREATE TABLE `adminaccess` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminaccess`
--

INSERT INTO `adminaccess` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin@123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaint_no` bigint(12) DEFAULT NULL,
  `userid` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `roomno` int(11) NOT NULL,
  `complaint_type` varchar(225) NOT NULL,
  `complaint_details` varchar(255) NOT NULL,
  `complaint_doc` varchar(400) NOT NULL,
  `complaint_status` varchar(255) NOT NULL DEFAULT 'New',
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaint_no`, `userid`, `name`, `mobile`, `roomno`, `complaint_type`, `complaint_details`, `complaint_doc`, `complaint_status`, `registration_date`) VALUES
(3, 477740522, '88452382136 ', 'Ram kumar', '7748047340', 1, 'Electrical', 'change fan', '../complaint_img/fan_not_work.jpg', 'In Progress', '2024-11-13 18:33:59'),
(5, 798702528, '88452382136 ', 'Ram kumar', '7748047340', 1, 'Electrical', 'sdfsdfs', '../complaint_img/fan_not_work.jpg', 'New', '2024-11-13 18:40:25'),
(6, 149640058, '88452382136 ', 'Ram kumar', '7748047340', 1, 'Electrical', 'change switch board', '../complaint_img/change_switch_board.png', 'Closed', '2024-11-14 07:00:35'),
(7, 148691383, '88452382136 ', 'Ram ', '7748047340', 1, 'Electrical', 'change tube light', '../complaint_img/tubelight_not_work.jpg', 'New', '2024-11-16 07:38:06'),
(8, 930318862, '88452382140 ', 'Kartik', '8976453647', 2, 'Electrical', 'switch board change', '../complaint_img/change_switch_board.png', 'In Progress', '2024-11-16 09:14:21'),
(9, 329815977, '88452382140 ', 'Kartik', '8976453647', 2, 'Electrical', 'change tube light', '../complaint_img/tubelight_not_work.jpg', 'In Progress', '2024-11-22 04:49:47'),
(10, 622682171, '88452382140 ', 'Kartik', '8976453647', 2, 'Electrical', 'Sir please change my fan', '../complaint_img/fan_not_work.jpg', 'In Progress', '2024-11-23 14:42:56'),
(11, 203347890, '88452382178 ', 'Ravi ', '7745364523', 6, 'Electrical', 'change fan', '../complaint_img/fan_not_work.jpg', 'In Progress', '2024-11-23 17:26:59'),
(13, 499097743, '88452382140 ', 'Kartik', '8976453647', 2, 'Food Related', 'mess food is very bad', '../complaint_img/bad_food.jpg', 'New', '2024-11-28 08:53:05'),
(14, 500301355, '88452382140 ', 'Kartik', '8976453647', 2, 'Electrical', 'change fan', '../complaint_img/fan_not_work.jpg', 'In Progress', '2024-11-28 11:05:44'),
(15, 103972860, '88452382140 ', 'Kartik', '8976453647', 2, 'Food Related', 'mess food quality is not good', '../complaint_img/bad food in mess.jpg', 'In Progress', '2024-11-28 13:23:00'),
(16, 152756877, '88452382181 ', 'Chandrabhan ', '8305764534', 1, 'Electrical', 'change tubelight', '../complaint_img/tubelight_not_work.jpg', 'In Progress', '2024-11-30 16:32:15'),
(17, 259623172, '88452382181 ', 'Chandrabhan ', '8305764534', 1, 'Electrical', 'change fan', '../complaint_img/IMG20241126095145.jpg', 'In Progress', '2024-12-03 14:13:39'),
(18, 868851057, '88452382181 ', 'Chandrabhan ', '8305764534', 1, 'Electrical', 'change switch board', '../complaint_img/change_switch_board.png', 'New', '2024-12-04 16:29:30'),
(19, 760989018, '88452382181 ', 'Chandrabhan ', '8305764534', 1, 'Electrical', 'change tubelight', '../complaint_img/tubelight_not_work.jpg', 'New', '2024-12-05 16:21:31'),
(20, 435265257, '88574547401 ', 'Arpit', '8986453746', 2, 'Food Related', 'Jhatu Khana', '../complaint_img/', 'In Progress', '2024-12-06 17:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `complainthistory`
--

CREATE TABLE `complainthistory` (
  `id` int(11) NOT NULL,
  `complaint_no` bigint(11) DEFAULT NULL,
  `complaint_status` varchar(255) NOT NULL,
  `complaint_remark` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainthistory`
--

INSERT INTO `complainthistory` (`id`, `complaint_no`, `complaint_status`, `complaint_remark`, `posting_date`) VALUES
(6, 477740522, 'In Progress', 'sdfsdf', '2024-11-13 19:04:12'),
(7, 477740522, 'In Progress', 'ddsfg', '2024-11-13 19:04:31'),
(8, 477740522, 'In Progress', 'sdfdsf', '2024-11-14 06:33:02'),
(9, 477740522, 'In Progress', 'ssadas', '2024-11-14 06:36:13'),
(10, 149640058, 'Closed', 'fan has changed', '2024-11-14 07:02:31'),
(11, 930318862, 'In Progress', 'I will soon solved you problem', '2024-11-16 09:16:47'),
(12, 329815977, 'In Progress', 'I will solve your issue soon', '2024-11-22 04:51:27'),
(13, 622682171, 'In Progress', 'I will solve your issue within three days', '2024-11-23 14:45:44'),
(14, 203347890, 'In Progress', 'your problem solved within two days', '2024-11-23 17:28:31'),
(15, 500301355, 'In Progress', 'I will solved your issue', '2024-11-28 11:06:58'),
(16, 103972860, 'In Progress', 'I will visit the  mess tomorrow ', '2024-11-28 13:28:27'),
(17, 152756877, 'In Progress', 'I will solved you problem soon', '2024-11-30 16:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `regno` bigint(20) NOT NULL,
  `sname` varchar(225) NOT NULL,
  `cast_certificate` varchar(400) NOT NULL,
  `domicile_certificate` varchar(400) NOT NULL,
  `hostel_fee_receipt` varchar(400) NOT NULL,
  `semester_fee_receipt` varchar(400) NOT NULL,
  `aadhar` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`regno`, `sname`, `cast_certificate`, `domicile_certificate`, `hostel_fee_receipt`, `semester_fee_receipt`, `aadhar`) VALUES
(88452382140, 'Kartik', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382146, 'Mahesh', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382177, 'Ravi', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382178, 'Ravi Chaudhari', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382179, 'Aditya Kumar', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382180, 'Aditya', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382181, 'Chandrabhan ', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382182, 'Sagar Soy', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88452382186, 'Aditya Kumar', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/aditya_hoste_fee_receipt.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88574547394, 'Om', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88574547399, 'Samarth', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88574547400, 'Durgesh', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(88574547401, 'Arpit', '../document_pdf/DUMMY CAST CERTIFICATE.pdf', ' ../document_pdf/DUMMY DOMICILE CERTIFICATE.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  SEMESTER FEE RECIEPT.pdf', '../document_pdf/DUMMY   AADHAR CARD.pdf'),
(123312312312, 'om', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', ' ../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf', '../document_pdf/DUMMY  HOSTEL FEE RECIEPT.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `enroll_no` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `room_no` int(11) NOT NULL,
  `course` varchar(225) NOT NULL,
  `std_img` varchar(225) NOT NULL,
  `warden_sign` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`enroll_no`, `name`, `father_name`, `room_no`, `course`, `std_img`, `warden_sign`) VALUES
('2201126013', 'Ravi ', 'Ramdas', 5, 'Biotechnology', '../student_img/images (2).png', '../student_img/warden_sign.png'),
('2201151003', 'Durgesh', 'Hari Lal', 1, 'D.pharma', '../student_img/images (1).png', '../student_img/warden_sign.png'),
('2201151005', 'Aditya Kumar', 'Ratan', 2, 'BCA', '../student_img/aditya.jpg', '../student_img/warden_sign.png'),
('2201151010', 'Chandrabhan Parachhi', 'Hiamant', 1, 'BCA', '../student_img/download.png', '../student_img/warden_sign.png'),
('2201151025', 'Sagar Soy', 'Ladhura Munda', 2, 'BCA', '../student_img/sagar.jpg', '../student_img/warden_sign.png');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link_title` varchar(255) NOT NULL,
  `file` varchar(400) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `description`, `link_title`, `file`, `post_date`) VALUES
(1, 'List of provisionally eligible students for the Hostels', ' List of provisionally eligible students for the Hostels ', 'provisionally eligible students for GGBH', '../document_pdf/GGBH-HostelAdmList-July23.pdf', '2024-11-15'),
(5, 'GGBH Hostel New Student allotement list 2024', '  List of provisionally eligible students for the Hostels', 'Download list', '../document_pdf/new_alllot_list.pdf', '2024-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `course_type` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `semester` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `physical_disable` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `student_type` varchar(20) NOT NULL,
  `pay_year` varchar(255) NOT NULL,
  `pay_date` date NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `enrollment`, `name`, `fname`, `course_type`, `course_name`, `dob`, `semester`, `gender`, `category`, `mobile`, `physical_disable`, `email`, `address`, `city`, `state`, `zipcode`, `amount`, `student_type`, `pay_year`, `pay_date`, `transaction_id`, `payment_status`) VALUES
(2, '2201151001', 'Aavesh Warkade', 'Ratan Singh', 'UG', 'Bachelor in Computer Applications (BCA)', '2004-04-12', 5, 'Male', 'General', '7746342321', 'NO', 'aavesh@gmail.com', 'Jabalpur Mandla madhya Pradesh', 'Jabalpur', 'Madhya Pradesh', 765421, 20, 'NEW', '3rd Year', '2024-12-05', 'pay_PTPSCIG76Kn9Xm', 'complete'),
(3, '2201151010', 'chandrabhan Parachhi', 'Hariom', 'UG', 'Bachelor in Computer Applications (BCA)', '2003-09-13', 5, 'Male', 'ST', '7564547454', 'NO', 'cparachhi@gmail.com', 'sohagpur', 'narmadapuram', 'Madhya Pradesh', 564547, 5, 'OLD', '3rd Year', '2024-12-05', 'pay_PTYZBlOWBf2tZz', 'complete'),
(4, '2201151002', 'Suraj', 'Ram', 'PG', 'MCA Computer Science', '2001-09-12', 2, 'Male', 'SC', '9784746484', 'NO', 'suraj@gmail.com', 'bhopal', 'pipariya', 'Madhya Pradesh', 676374, 5, 'OLD', '2nd Year', '2024-12-05', 'pay_PTYvDiLC9QnpBU', 'complete'),
(5, '2201151017', 'kartik maurya', 'omkar maurya', 'UG', 'Bachelor in Computer Applications (BCA)', '2004-04-23', 5, 'Male', 'OBC', '9506132232', 'NO', 'kartikmaurya919@gmail.com', 'lucknow', 'lucknow', 'Uttar Pradesh', 2262002, 20, 'NEW', '3rd Year', '2024-12-06', 'pay_PTyAngX7In8NeR', 'complete'),
(6, '2201151005', 'Aditya Kumar', 'Ratan', 'UG', 'Bachelor in Computer Applications (BCA)', '2002-11-11', 5, 'Male', 'General', '8271250731', 'NO', 'aditya11.kumar2002@gmail.com', 'Latehar Jharkhand', 'Latehar', 'Jharkhand', 574654, 2750, 'OLD', '3rd Year', '2024-12-07', 'pay_PULbdl3Tx74Tvu', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `pgregistration`
--

CREATE TABLE `pgregistration` (
  `registration_no` bigint(15) NOT NULL,
  `cuet_no` varchar(255) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `program_type` varchar(225) NOT NULL,
  `course` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `aadhar_pdf` varchar(255) NOT NULL,
  `apply_date` date NOT NULL,
  `hostel_status` varchar(225) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pgregistration`
--

INSERT INTO `pgregistration` (`registration_no`, `cuet_no`, `std_img`, `sname`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `category`, `religion`, `program_type`, `course`, `phone_no`, `email_id`, `address`, `state`, `distance`, `aadhar_pdf`, `apply_date`, `hostel_status`) VALUES
(88574547400, '33623124356', '../student_img/images (1).png', 'Durgesh', 'Hari Lal', 'Siya', '1998-09-24', 'male', 'General', 'Hindu', 'DIPLOMA', 'Diploma in Pharmacy (D.Pharm) ', '8767453641', 'durgesh@gmail.com', 'Sonbhadra Bihar', 'Bihar', '1500', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-21', 'Yes'),
(88574547401, '2101151002', '../student_img/images (2).png', 'Arpit', 'Suresh', 'Daya', '2005-09-12', 'male', 'General', 'Hindu', 'PG', 'M.Com. Commerce ', '8986453746', 'cparachhi@gmail.com', 'Kotma Madhya Pradesh', 'Madhya Pradesh', '120', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-29', 'Yes'),
(88574547402, '22238432', '../student_img/download.jpg', 'Manish', 'Deenu', 'Meena', '2001-09-12', 'male', 'General', 'Hindu', 'PG', 'M.A./M.Sc. Geography ', '87463536353', 'manish@gmail.com', 'Bareli Narmadapuram', 'Madhya Pradesh', '1400', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-12-04', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_no` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `allot_seat` int(11) NOT NULL,
  `empty_seat` int(11) NOT NULL,
  `allot_status` varchar(255) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `floor`, `seater`, `allot_seat`, `empty_seat`, `allot_status`) VALUES
(1, 1, 4, 2, 2, 'Yes'),
(2, 1, 4, 4, 0, 'Yes'),
(3, 1, 4, 0, 4, 'No'),
(5, 1, 4, 0, 4, 'No'),
(6, 1, 4, 0, 4, 'No'),
(7, 1, 4, 0, 4, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `room_no` int(11) NOT NULL,
  `stay_from` date NOT NULL,
  `duration` varchar(225) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `program_type` varchar(225) NOT NULL,
  `course` varchar(225) NOT NULL,
  `semester` int(11) NOT NULL,
  `registration_no` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(225) NOT NULL,
  `religion` varchar(225) NOT NULL,
  `blood_group` varchar(225) NOT NULL,
  `physical_disable` varchar(10) NOT NULL,
  `contact_no` varchar(225) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `aadhar_no` varchar(20) NOT NULL,
  `emergency_no` varchar(225) NOT NULL,
  `guardian_name` varchar(225) NOT NULL,
  `guardian_relation` varchar(225) NOT NULL,
  `guardian_contact_no` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `distance` int(11) NOT NULL,
  `document` varchar(400) NOT NULL,
  `enrollment` varchar(225) NOT NULL DEFAULT 'Not Issued',
  `abc_id` varchar(255) NOT NULL DEFAULT 'Not Issued',
  `admission_no` varchar(255) NOT NULL DEFAULT 'Not Issued'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`room_no`, `stay_from`, `duration`, `std_img`, `program_type`, `course`, `semester`, `registration_no`, `name`, `fname`, `mname`, `dob`, `category`, `religion`, `blood_group`, `physical_disable`, `contact_no`, `email_id`, `aadhar_no`, `emergency_no`, `guardian_name`, `guardian_relation`, `guardian_contact_no`, `address`, `city`, `state`, `pincode`, `distance`, `document`, `enrollment`, `abc_id`, `admission_no`) VALUES
(2, '2024-11-23', '3', '../student_img/images (2).png', 'UG', 'B.Sc. (Hons) -Biotechnology', 1, '88452382178 ', 'Ravi ', 'Ramdas', 'shanti  ', '2004-07-18', 'SC', 'Hindu', 'O+', 'NO', '7745364523', 'ms9032955@gmail.com', '565364537454', '7745364523', 'Ramdas', 'Father', '7745364523', '        Annupur', 'Annupur        ', 'Madhya Pradesh', '563658', 130, '../document_pdf/DUMMY   AADHAR CARD.pdf', '2201126013', 'Not Issued', 'Not Issued'),
(1, '2024-11-29', '3', '../student_img/download.png', 'UG', 'Bachelor in Computer Applications (BCA)', 1, '88452382181 ', 'Chandrabhan ', 'Hiamant ', 'Vidhya  ', '2003-09-13', 'ST', 'Hindu', 'B+', 'NO', '8305764534', 'parachhichandrabhan@gmail.com', '123432524', '8305764534', 'Hiamant', 'Father', '8305764534', '  Narmadapuram madhya pradesh', 'Narmadapuram  ', 'Madhya Pradesh', '4532312', 500, '../document_pdf/DUMMY   AADHAR CARD.pdf', '2201151010', 'Not Issued', 'Not Issued'),
(2, '2024-11-21', '3', '../student_img/sagar.jpg', 'UG', 'Bachelor in Computer Applications (BCA)', 1, '88452382182 ', 'Sagar Soy', 'Ladhura Munda', 'Sumitra Devi  ', '2001-01-16', 'ST', 'Hindu', 'B+', 'NO', '987464553', 'sagarsoy1997@gmail.com', '837438384', '82348349', 'Ladhura Munda', 'Father', '82348349', 'dhanbad jharkhand', 'dhanbad', 'Jharkhand', '828202', 1000, '../document_pdf/DUMMY   AADHAR CARD.pdf', '2201151025', 'Not Issued', 'Not Issued'),
(2, '2024-12-03', '3', '../student_img/aditya.jpg', 'UG', 'Bachelor in Computer Applications (BCA)', 5, '88452382186 ', 'Aditya Kumar', 'Ratan', 'Meera  ', '2002-11-11', 'General', 'Hindu', 'B+', 'NO', '8271250731', 'aditya11.kumar2002@gmail.com', '542312345432', '8271250731', 'Ratan', 'Father', '8271250731', 'Latehar Jharkhand', 'Latehar', 'Jharkhand', '4534635', 450, '../document_pdf/DUMMY   AADHAR CARD.pdf', '2201151005', 'Not Issued', 'Not Issued'),
(1, '2024-11-21', '3', '../student_img/images (1).png', 'DIPLOMA', 'Diploma in Pharmacy (D.Pharm)', 1, '88574547400 ', 'Durgesh', 'Hari Lal', 'Siya  ', '1998-09-24', 'General', 'Hindu', 'AB+', 'NO', '8767453641', 'sparachhi@gmail.com', '564734253456', '8767453641', 'Hari Lal', 'Father', '8767453641', ' Sonbhadra Bihar', 'sonbhadra ', 'Bihar', '453624', 1500, '../document_pdf/DUMMY   AADHAR CARD.pdf', '2201151003', 'Not Issued', 'Not Issued'),
(2, '2024-11-29', '3', '../student_img/images.png', 'PG', 'M.Com. Commerce', 1, '88574547401 ', 'Arpit', 'Suresh', 'Daya  ', '2005-09-12', 'General', 'Hindu', 'B+', 'NO', '8986453746', 'cparachhi@gmail.com', '123235232534', '8986453746', 'Suresh', 'Father', '8986453746', 'Kotma Madhya Pradesh', 'Kotma', 'Madhya Pradesh', '653473', 120, '../document_pdf/DUMMY   AADHAR CARD.pdf', 'Not Issued', 'Not Issued', 'Not Issued');

-- --------------------------------------------------------

--
-- Table structure for table `ugregistration`
--

CREATE TABLE `ugregistration` (
  `Registration_no` bigint(11) NOT NULL,
  `cuet_no` varchar(255) NOT NULL,
  `std_img` varchar(400) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `program_type` varchar(225) NOT NULL DEFAULT 'UG',
  `course` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `aadhar_pdf` varchar(255) NOT NULL,
  `apply_date` date NOT NULL,
  `hostel_status` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ugregistration`
--

INSERT INTO `ugregistration` (`Registration_no`, `cuet_no`, `std_img`, `sname`, `father_name`, `mother_name`, `date_of_birth`, `gender`, `category`, `religion`, `program_type`, `course`, `phone_no`, `email_id`, `address`, `state`, `distance`, `aadhar_pdf`, `apply_date`, `hostel_status`) VALUES
(88452382149, '757456456', '../student_img/download.png', 'pawan', 'Rihan', 'kavita', '2024-12-05', 'male', 'General', 'Hindu', 'UG', 'B.A. (Bachelor of Arts)', '983737728', 'pawan@gmail.com', 'dfdsfsfs', 'Nagaland', '43534', '../document_pdf/Database Seurity.png', '2024-11-16', 'Yes'),
(88452382175, '86453625341', '../student_img/download.jpg', 'Ram', 'Bihar Lal', 'Meera', '2001-09-13', 'male', 'OBC', 'Hindu', 'UG', 'Bachelor of Commerce (B.Com.)', '7835238736', 'ram@gmail.com', 'Pipariya Narmadapura Madhya Pradesh', 'Madhya Pradesh', '1000', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-21', 'Yes'),
(88452382176, '226103837', '../student_img/images (3).png', 'Himanshu', 'Bihari', 'shfksdf', '2003-09-12', 'male', 'General', 'Hindu', 'UG', 'B.A (Hons) -   Tourism', '7645345364', 'himanshu@gmail.com', 'madhya Pradesh', 'Madhya Pradesh', '900', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-22', 'Yes'),
(88452382178, '22036463439', '../student_img/images (2).png', 'Ravi Chaudhari', 'Ramdas', 'shanti', '2004-07-18', 'male', 'SC', 'Hindu', 'UG', 'B.Sc. (Hons) -Biotechnology', '7857756484', 'ravi@gmail.com', 'Annupur', 'Madhya Pradesh', '130', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-23', 'Yes'),
(88452382181, '2201151010', '../student_img/download.png', 'Chandrabhan', 'Hiamant', 'Vidhya', '2003-09-11', 'male', 'ST', 'Hindu', 'UG', 'Bachelor in Computer Applications (BCA)', '8305746836', 'parachhichandrabhan@gmail.com', 'Narmadapuram  Madhya Pradesh', 'Madhya Pradesh', '500', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-29', 'Yes'),
(88452382182, '2201151025', '../student_img/sagar.jpg', 'Sagar Soy', 'Ladhura Munda', 'Sumitra Devi', '2001-01-16', 'male', 'ST', 'Hindu', 'UG', 'Bachelor in Computer Applications (BCA)', '7061557286', 'sagarsoy1997@gmail.com', 'Dhanbad jharkhand', 'Jharkhand', '1000', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-11-30', 'Yes'),
(88452382183, '220115312', '../student_img/images (5).png', 'Harsh', 'John', 'Priti', '2001-01-12', 'male', 'General', 'Hindu', 'UG', 'B.Sc. (Bachelor of Science)-Mathematics Group', '8456354523', 'harsh@gmail.com', 'Bankhedi Narmadapuram', 'Madhya Pradesh', '1000', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-12-04', 'Yes'),
(88452382184, '983999839998', '../student_img/images (4).png', 'Kartik Maurya', 'Omkar Maurya', 'Archna Maurya', '2005-04-23', 'male', 'OBC', 'Hindu', 'UG', 'Bachelor in Computer Applications (BCA)', '9506132232', 'kartikmaurya919@gmail.com', 'Lucknow Uttar Pradesh', 'Uttar Pradesh', '750000', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-12-06', 'Yes'),
(88452382186, '2201151005', '../student_img/aditya.jpg', 'Aditya Kumar', 'Ratan', 'Meera', '2002-11-11', 'male', 'General', 'Hindu', 'UG', 'Bachelor in Computer Applications (BCA)', '8271250731', 'aditya11.kumar2002@gmail.com', 'Latehar Jharkhand', 'Jharkhand', '450', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-12-07', 'Yes'),
(88452382187, '2254364521', '../student_img/download.jpg', 'Tarun', 'Keshav', 'Kritii', '2004-09-12', 'male', 'General', 'Hindu', 'UG', 'B.Sc. (Hons)-Biotechnology', '8756454321', 'tarun@gmail.com', 'Kotma chhattisgarh', 'Chhattisgarh', '200', '../document_pdf/DUMMY   AADHAR CARD.pdf', '2024-12-09', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` varchar(255) DEFAULT NULL,
  `sname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verify_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `sname`, `email`, `password`, `verify_token`) VALUES
('88452382186', 'Aditya Kumar', 'aditya11.kumar2002@gmail.com', '1234', ''),
('88574547401 ', 'Arpit', 'cparachhi@gmail.com', '12345', '929422cd5a54b7473a7319bcdb8f9949'),
('88452382178', 'Ravi ', 'ms9032955@gmail.com', '1234', 'ad9c9260bac85b9262a0d371d39560ae'),
('88452382181', 'Chandrabhan ', 'parachhichandrabhan@gmail.com', '1234', '4aa14eb93a1ef5c26b30ffc0b9ad44bb'),
('88452382182', 'Sagar Soy', 'sagarsoy1997@gmail.com', '12345', 'a5bed69058fd2e606c8a0f44e405bdc3'),
('88574547400', 'Durgesh', 'sparachhi@gmail.com', '12345', '65187c3e239806932f26820079abb3dc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccess`
--
ALTER TABLE `adminaccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complainthistory`
--
ALTER TABLE `complainthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`enroll_no`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgregistration`
--
ALTER TABLE `pgregistration`
  ADD PRIMARY KEY (`registration_no`),
  ADD UNIQUE KEY `cuet_no` (`cuet_no`),
  ADD UNIQUE KEY `cuet_no_2` (`cuet_no`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`registration_no`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- Indexes for table `ugregistration`
--
ALTER TABLE `ugregistration`
  ADD PRIMARY KEY (`Registration_no`),
  ADD UNIQUE KEY `cuet_no` (`cuet_no`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccess`
--
ALTER TABLE `adminaccess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `complainthistory`
--
ALTER TABLE `complainthistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pgregistration`
--
ALTER TABLE `pgregistration`
  MODIFY `registration_no` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88574547403;

--
-- AUTO_INCREMENT for table `ugregistration`
--
ALTER TABLE `ugregistration`
  MODIFY `Registration_no` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88452382188;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
