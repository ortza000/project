-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 04:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `app_name` varchar(90) DEFAULT NULL,
  `app_begin` datetime DEFAULT NULL,
  `app_end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `app_name`, `app_begin`, `app_end`) VALUES
(1, 'การใช้งาน RapidMinner', '2019-11-01 08:30:00', '2019-11-01 16:00:00'),
(2, 'WebGIS เบื้องต้น', '2019-11-04 08:00:00', '2019-11-04 12:00:00'),
(3, 'การใช้งาน github', '2019-11-05 08:00:00', '2019-11-05 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `cert_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(60) DEFAULT NULL,
  `course_des` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_des`) VALUES
(1, 'คอมพิวเตอร์ 2559', 'ทักษะคอมพิวเตอร์'),
(2, 'อบรม ทักษะเขียนโปรเเกรม', 'โปรเเกรม ภาษา JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `course_date`
--

CREATE TABLE `course_date` (
  `app_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_date`
--

INSERT INTO `course_date` (`app_id`, `course_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `event_date`
--

CREATE TABLE `event_date` (
  `pro_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `image_des` varchar(90) DEFAULT NULL,
  `image_dir` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projectandevent`
--

CREATE TABLE `projectandevent` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(90) DEFAULT NULL,
  `pro_des` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectandevent`
--

INSERT INTO `projectandevent` (`pro_id`, `pro_name`, `pro_des`) VALUES
(1, 'บายเนียร์ It 59', 'เลี้ยงส่งรุ่นพี่'),
(2, 'พี่สอนน้อง โปรเเกรมมิ่ง', 'โปรเเกรม ภาษา C++');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `std_id` varchar(10) NOT NULL,
  `std_name` varchar(90) DEFAULT NULL,
  `std_card` int(11) NOT NULL,
  `std_year` varchar(10) DEFAULT NULL,
  `std_phone` varchar(15) DEFAULT NULL,
  `std_major` varchar(50) DEFAULT NULL,
  `std_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `std_id`, `std_name`, `std_card`, `std_year`, `std_phone`, `std_major`, `std_status`) VALUES
(1, 'SD000', 'ผู้ดูเเลลระบบ', 59310325, '2559', '0970097068', 'IT', 'admin'),
(2, 'SD001', 'นาย ธรรมนูญ จำรัส', 59310369, '2559', '0970097068', 'IT', 'เรียนอยู่'),
(3, 'SD002', 'นาย ดำ เเดง', 59310325, '2559', '097558487', 'IT', 'เรียนอยู่'),
(4, 'SD004', 'ไก่ มากมี', 59310255, '2559', '039556584', 'IT', 'เรียนอยู่'),
(5, 'SD005', 'นาย ดี มาก', 593202, '2559', '55454545', 'IT', 'เรียนอยู่');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `std_id` varchar(10) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `stdcourse_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`std_id`, `course_id`, `stdcourse_date`) VALUES
('SD001', 1, '2019-11-01 07:00:00'),
('SD002', 1, '2019-11-01 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_event_register`
--

CREATE TABLE `student_event_register` (
  `stdevent_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `std_id` varchar(10) DEFAULT NULL,
  `stdevent_des` varchar(90) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_event_register`
--

INSERT INTO `student_event_register` (`stdevent_id`, `pro_id`, `std_id`, `stdevent_des`, `register_date`) VALUES
(1, 1, 'SD001', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-25 00:00:00'),
(2, 2, 'SD001', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-25 00:00:00'),
(3, 1, 'SD002', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-31 00:00:00'),
(4, 2, 'SD002', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-31 00:00:00'),
(5, 1, 'SD004', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-31 00:00:00'),
(6, 1, 'SD000', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-31 00:00:00'),
(7, 1, 'SD005', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-01-31 00:00:00'),
(8, 2, 'SD000', 'ลงทะเบียนเข้าร่วมกิจกรรม', '2020-02-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_invite`
--

CREATE TABLE `student_invite` (
  `part_id` int(11) NOT NULL,
  `teh_id` int(11) NOT NULL,
  `std_id` varchar(10) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `part_des` varchar(90) DEFAULT NULL,
  `part_date` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `teh_id` varchar(99) NOT NULL,
  `sub_name` varchar(90) DEFAULT NULL,
  `sub_des` varchar(90) DEFAULT NULL,
  `sub_term` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `teh_id`, `sub_name`, `sub_des`, `sub_term`) VALUES
(1, '0', 'Database', 'การจัดเก็บข้อมูล', '2559'),
(2, 'T001', 'กดฟกดฟ', 'ฟหกฟหก', '2559'),
(3, 'T002', 'sdasdasdas', 'dasdasd', '2559'),
(4, 'T002', 'asdasda', 'asdasd', '2559');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teh_id` varchar(10) NOT NULL,
  `teh_name` varchar(90) DEFAULT NULL,
  `teh_phone` int(11) DEFAULT NULL,
  `teh_qualification` varchar(90) DEFAULT NULL,
  `teh_email` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teh_id`, `teh_name`, `teh_phone`, `teh_qualification`, `teh_email`) VALUES
('T001', 'ดร.สมบัติ ฝอยทอง ประธานหลักสูตร', 39310000, 'วศ.ด. (วิศวกรรมไฟฟ้า),   สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง', 'sombut@buu.ac.th'),
('T002', 'ศรีธรรม มหาราช', 970058215, 'บูรพา', 'ortda@gmail.com'),
('T003', 'asdasdasd', 52125, 'adasd', 'asdasdasd'),
('T004', 'อาจารย์ เเดง', 9700684, 'กรุงเทพ', 'sds@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_course`
--

CREATE TABLE `teacher_course` (
  `teh_id` varchar(10) DEFAULT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_course`
--

INSERT INTO `teacher_course` (`teh_id`, `course_id`) VALUES
('T001', 1),
('T002', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_projectandevent`
--

CREATE TABLE `teacher_projectandevent` (
  `pro_id` int(11) NOT NULL,
  `teh_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ผู้ดูแลระบบ', 'ควบคุม', 'admin', '$2y$10$HVELLRi0x3Syf6ARtuaEVuBBIR/2Y5gxJR1UZRg13ynHDDNCCRnMa', 'TEouXiNmqHoEt5sQ9boivf7VAmocLgtsL4Et4LzJFjlwRMHxWsj12fJ9mytv', NULL, NULL),
(2, 'นาย ธรรมนูญ', 'จำรัส', 'ortza000', '$2y$10$rYaQ5y8vZh9SUGoagI4tE.QXi1YORsDgC.W49p4EvyXxBBB44I0iW', 'O51IDPWNOfZQqSnuVfPinmcW8IhmgKmMFmdGC9KQV8weBeQXGHaEYfR9K4BH', '2020-01-23 08:15:16', '2020-01-23 08:15:16'),
(3, 'ดำ', 'เเดง', 'ortza123', '$2y$10$05dEzkc0OjRe0ZaR3q95HOzbjujrZucMDz2h3Ce97zeTRgqCyz6Sm', '3SeZmzjz6PUu0fCOQ5TzPvp8WBlJPGVCuNke2mrYMt6bVU7ZifCw6mGlPN3E', '2020-01-31 03:05:37', '2020-01-31 03:05:37'),
(4, 'ไก่', 'มากมี', 'ortza987', '$2y$10$8agirPAOttc/iYpZcjw73OfrxPamf7.SqxrfN5E1dD7HgLMDSQwLe', 'KpfgVXxLm94VjzR2IsJ4TPGwUWvwyI1CRzcMHgQBEtvRxY3BH4yqIXCtFzvh', '2020-01-31 05:57:38', '2020-01-31 05:57:38'),
(5, 'ดำ', 'เเดง', 'ortza456', '$2y$10$s5lelNOwaUk5B72UQiYGXu8wR1xY69iW8imMcgh7/zYHqyYA54s2q', 'c3DmXBkxIT9WZ4Z8Vx6i1xn0MSBz0oFPiK4sCwAKZfXFtRwiz51KtQpkVLX7', '2020-01-31 07:27:19', '2020-01-31 07:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`cert_id`),
  ADD KEY `certificate_FKIndex1` (`std_id`),
  ADD KEY `certificate_FKIndex2` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_date`
--
ALTER TABLE `course_date`
  ADD KEY `course_date_FKIndex1` (`course_id`),
  ADD KEY `course_date_FKIndex2` (`app_id`);

--
-- Indexes for table `event_date`
--
ALTER TABLE `event_date`
  ADD KEY `event_date_FKIndex1` (`pro_id`),
  ADD KEY `event_date_FKIndex2` (`app_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `image_FKIndex1` (`course_id`),
  ADD KEY `image_FKIndex2` (`pro_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projectandevent`
--
ALTER TABLE `projectandevent`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD KEY `student_course_FKIndex1` (`std_id`),
  ADD KEY `student_course_FKIndex2` (`course_id`);

--
-- Indexes for table `student_event_register`
--
ALTER TABLE `student_event_register`
  ADD PRIMARY KEY (`stdevent_id`),
  ADD KEY `student_event_FKIndex1` (`std_id`),
  ADD KEY `student_event_FKIndex2` (`pro_id`);

--
-- Indexes for table `student_invite`
--
ALTER TABLE `student_invite`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `student_invite_FKIndex1` (`std_id`),
  ADD KEY `student_invite_FKIndex2` (`course_id`),
  ADD KEY `student_invite_FKIndex3` (`teh_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teh_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_event_register`
--
ALTER TABLE `student_event_register`
  MODIFY `stdevent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
