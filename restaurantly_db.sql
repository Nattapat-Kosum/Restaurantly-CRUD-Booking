-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 01:04 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id22091919_restaurantly`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_about` varchar(155) NOT NULL,
  `detail1` varchar(500) NOT NULL,
  `check1` varchar(255) NOT NULL,
  `check2` varchar(255) NOT NULL,
  `check3` varchar(255) NOT NULL,
  `detail2` varchar(255) NOT NULL,
  `img_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_about`, `detail1`, `check1`, `check2`, `check3`, `detail2`, `img_about`) VALUES
(1, 'About US', 'Best Restaurantly', 'Good', 'Nice', 'Tasty', 'All of this you can find in our Restuarants.', 'img_20240426122940.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_th`
--

CREATE TABLE `about_th` (
  `id` int(11) NOT NULL,
  `title_about_th` varchar(155) NOT NULL,
  `detail1_th` varchar(500) NOT NULL,
  `check1_th` varchar(255) NOT NULL,
  `check2_th` varchar(255) NOT NULL,
  `check3_th` varchar(255) NOT NULL,
  `detail2_th` varchar(255) NOT NULL,
  `img_about_th` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about_th`
--

INSERT INTO `about_th` (`id`, `title_about_th`, `detail1_th`, `check1_th`, `check2_th`, `check3_th`, `detail2_th`, `img_about_th`) VALUES
(1, 'เกี่ยวกับเรา', 'ร้านอาหารที่ดีที่สุด', 'ดี', 'เยี่ยม', 'อร่อย', 'ทั้งหมดนี้คุณสามารถหาได้จากร้านของเรา', 'img_20240426122628.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book_a_table`
--

CREATE TABLE `book_a_table` (
  `id` int(11) NOT NULL,
  `Cus_que` varchar(5) NOT NULL,
  `name_user` varchar(155) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `date_book` date NOT NULL,
  `startime` time NOT NULL,
  `alert_time` time NOT NULL,
  `endtime` time NOT NULL,
  `of_people` int(13) NOT NULL,
  `tablebooking` varchar(155) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `Cus_status` varchar(255) NOT NULL,
  `color` varchar(155) NOT NULL,
  `booking_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book_a_table`
--

INSERT INTO `book_a_table` (`id`, `Cus_que`, `name_user`, `user_email`, `user_phone`, `date_book`, `startime`, `alert_time`, `endtime`, `of_people`, `tablebooking`, `user_message`, `Cus_status`, `color`, `booking_code`) VALUES
(51, '1', 'Test', 'ohm.nattapat.010@gmail.com', '0929577549', '2024-05-14', '19:08:00', '19:07:00', '22:08:00', 2, 'โต๊ะ 01 (Table 01)', '', 'Check in', 'success', 'RWQKFN'),
(53, '7', 'Alex', 'alex@hotmail.com', '0804316627', '2024-05-30', '21:16:00', '21:15:00', '00:16:00', 2, 'โต๊ะ 05 (Table 05)', '', 'wait for check in', 'default', 'RAELGI'),
(54, '2', 'Peter', 'peter@gmail.com', '0813461481', '2024-05-25', '12:18:00', '12:17:00', '15:18:00', 2, 'โต๊ะ 06 (Table 06)', '', 'wait for check in', 'default', 'FCWRUK'),
(55, '3', 'Eddy', 'eddy@gmail.com', '0914145963', '2024-05-25', '18:19:00', '18:18:00', '21:19:00', 5, 'โต๊ะ 01 (Table 01)', '', 'wait for check in', 'default', 'ZHKXEP'),
(56, '4', 'leon', 'leon@gmail.com', '0804316629', '2024-05-25', '18:20:00', '18:19:00', '21:20:00', 3, 'โต๊ะ 04 (Table 04)', '', 'wait for check in', 'default', 'GTVRWL'),
(57, '5', 'ryan', 'ryan@gmail.com', '0804316625', '2024-05-28', '15:00:00', '14:59:00', '18:00:00', 2, 'โต๊ะ 05 (Table 05)', '', 'wait for check in', 'default', 'TMRQSV'),
(58, '9', 'Bobby', 'bobby@hotmail.com', '0813461486', '2024-05-31', '20:23:00', '20:22:00', '23:23:00', 4, 'โต๊ะ 01 (Table 01)', '', 'wait for check in', 'default', 'ABIFYT'),
(59, '6', 'Onn', 'onn@gmail.com', '0858603499', '2024-05-28', '19:27:00', '19:26:00', '22:27:00', 5, 'โต๊ะ 05 (Table 05)', '', 'wait for check in', 'default', 'UGYQLC'),
(60, '8', 'เดวิด', 'devid@gmail.com', '0705569494', '2024-05-31', '14:47:00', '14:46:00', '17:47:00', 3, 'โต๊ะ 01 (Table 01)', '', 'wait for check in', 'default', 'ZUHNYO');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='ตารางประเภทสินค้า';

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`id`, `cate_name`) VALUES
(1, 'Starters'),
(2, 'Salads'),
(3, 'Specialty');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu_th`
--

CREATE TABLE `category_menu_th` (
  `id` int(11) NOT NULL,
  `cate_name_th` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_menu_th`
--

INSERT INTO `category_menu_th` (`id`, `cate_name_th`) VALUES
(8, 'เมนูเริ่มต้น'),
(9, 'เมนูสลัด'),
(10, 'เมนูพิเศษ');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `chefs_name` varchar(55) NOT NULL,
  `chefs_position` varchar(155) NOT NULL,
  `chefs_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `chefs_name`, `chefs_position`, `chefs_img`) VALUES
(1, 'Walter White', 'Master Chef', 'img_20240413163949.jpg'),
(2, 'Sarah Jhonsons', 'Patissier', 'img_20240405154917.jpg'),
(3, 'William Anderson', 'Cook', 'img_20240121104912.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `chefs_th`
--

CREATE TABLE `chefs_th` (
  `id` int(11) NOT NULL,
  `chefs_name_th` varchar(55) NOT NULL,
  `chefs_position_th` varchar(155) NOT NULL,
  `chefs_img_th` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chefs_th`
--

INSERT INTO `chefs_th` (`id`, `chefs_name_th`, `chefs_position_th`, `chefs_img_th`) VALUES
(1, 'วอลเตอร์ ไวท์', 'มาสเตอร์เชฟ', 'img_20240413164535.jpg'),
(2, 'ซาราห์ จอห์นสัน', 'คนทำขนม', 'img_20240413164559.jpg'),
(3, 'วิลเลียม แอนเดอร์สัน', 'คนทำอาหาร', 'img_20240413164604.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address_contact` varchar(150) NOT NULL,
  `detail_op` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address_contact`, `detail_op`, `email`, `phone`) VALUES
(1, '78 m39 701157', 'Mon-Sat: 11AM - 23PM', 'nattapat.k.008@gmail.com', '0929577549');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_th`
--

CREATE TABLE `contact_us_th` (
  `id` int(11) NOT NULL,
  `address_contact_th` varchar(150) NOT NULL,
  `detail_op_th` varchar(100) NOT NULL,
  `email_th` varchar(55) NOT NULL,
  `phone_th` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_us_th`
--

INSERT INTO `contact_us_th` (`id`, `address_contact_th`, `detail_op_th`, `email_th`, `phone_th`) VALUES
(1, '78 หมู่บ้าน 39 70115', 'จันทร์-เสาร์: 11AM - 23PM', 'nattapat.k.008@gmail.com', '0929577549');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Subject` varchar(155) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_me`
--

CREATE TABLE `event_me` (
  `id` int(11) NOT NULL,
  `title_event` varchar(155) NOT NULL,
  `detail_event1` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `detail_event2` varchar(255) NOT NULL,
  `img_event` varchar(255) NOT NULL,
  `price_event` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `event_me`
--

INSERT INTO `event_me` (`id`, `title_event`, `detail_event1`, `text1`, `text2`, `text3`, `detail_event2`, `img_event`, `price_event`) VALUES
(1, 'Birthday Parties', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240413120120.jpg', '$189'),
(2, 'Private Parties', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240426124900.jpg', '$290'),
(3, 'Custom Parties', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240121083109.jpg', '$99');

-- --------------------------------------------------------

--
-- Table structure for table `event_me_th`
--

CREATE TABLE `event_me_th` (
  `id` int(11) NOT NULL,
  `title_event_th` varchar(155) NOT NULL,
  `detail_event1_th` varchar(255) NOT NULL,
  `text1_th` varchar(255) NOT NULL,
  `text2_th` varchar(255) NOT NULL,
  `text3_th` varchar(255) NOT NULL,
  `detail_event2_th` varchar(255) NOT NULL,
  `img_event_th` varchar(500) NOT NULL,
  `price_event_th` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `event_me_th`
--

INSERT INTO `event_me_th` (`id`, `title_event_th`, `detail_event1_th`, `text1_th`, `text2_th`, `text3_th`, `detail_event2_th`, `img_event_th`, `price_event_th`) VALUES
(1, 'เบิร์ดเดย์ ปาร์ตี้', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240121083300.jpg', '$189'),
(2, 'ปาร์ตี้ส่วนตัว', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240413115947.jpg', '$290'),
(3, 'ปาร์ตี้ที่คุณสามารถกำหนดเอง', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'img_20240121083023.jpg', '$99');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_img`) VALUES
(1, 'img_20220208053600.jpg'),
(2, 'img_20220119101723.jpg'),
(3, 'img_20220119101730.jpg'),
(4, 'img_20220119101736.jpg'),
(5, 'img_20220119101744.jpg'),
(6, 'img_20240413100224.jpg'),
(7, 'img_20220119101800.jpg'),
(8, 'img_20220119101807.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `drescription` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `banner`, `title`, `drescription`, `video`) VALUES
(1, 'img_20240405160846.', 'Welcome', 'Delivering great food for more than 18 years!', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_th`
--

CREATE TABLE `home_th` (
  `id` int(11) NOT NULL,
  `banner_th` varchar(500) NOT NULL,
  `title_th` varchar(100) NOT NULL,
  `drescription_th` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `home_th`
--

INSERT INTO `home_th` (`id`, `banner_th`, `title_th`, `drescription_th`) VALUES
(1, 'img_20220207103352.', 'ยินดีต้อนรับ', 'ส่งมอบความอร่อยยาวนานกว่า 18 ปี!');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name_menu` varchar(255) NOT NULL,
  `description_menu` varchar(255) NOT NULL,
  `price_menu` varchar(16) NOT NULL,
  `menu_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `cate_id`, `name_menu`, `description_menu`, `price_menu`, `menu_img`) VALUES
(17, 1, 'Lobster Bisque', 'Lorem, deren, trataro, filede, nerada', '5.95', 'img_20240121100432.jpg'),
(18, 1, 'Crab Cake', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', '7.95', 'img_20240121100558.jpg'),
(19, 1, 'Mozzarella Stick', 'Lorem, deren, trataro, filede, nerada', '4.95', 'img_20240121100741.jpg'),
(20, 2, 'Caesar Selections', 'Lorem, deren, trataro, filede, nerada', '8.95', 'img_20240121100909.jpg'),
(21, 2, 'Greek Salad', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives', '9.95', 'img_20240121100940.jpg'),
(22, 2, 'Spinach Salad', 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette', '9.95', 'img_20240121101022.jpg'),
(23, 2, 'Bread Barrel', 'Lorem, deren, trataro, filede, nerada', '6.95', 'img_20240405155745.jpg'),
(24, 3, 'Tuscan Grilled', 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto', '9.95', 'img_20240121103842.jpg'),
(25, 3, 'Lobster Roll', 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll', '12.95', 'img_20240121103926.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu_th`
--

CREATE TABLE `menu_th` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name_menu_th` varchar(255) NOT NULL,
  `description_menu_th` varchar(255) NOT NULL,
  `price_menu_th` varchar(16) NOT NULL,
  `menu_img_th` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `menu_th`
--

INSERT INTO `menu_th` (`id`, `cate_id`, `name_menu_th`, `description_menu_th`, `price_menu_th`, `menu_img_th`) VALUES
(9, 8, 'ซุปกุ้งมังกร', 'Lorem, deren, trataro, filede, nerada', '5.95', 'img_20240405185955.jpg'),
(10, 8, 'เค้กปู', 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', '7.95', 'img_20240405190136.jpg'),
(11, 8, 'มอสซาเรลล่าสติ๊ก', 'Lorem, deren, trataro, filede, nerada', '4.95', 'img_20240405190207.jpg'),
(12, 9, 'ซีซาร์ซีเล็คชั่นส์', 'Lorem, deren, trataro, filede, nerada', '8.95', 'img_20240405190240.jpg'),
(13, 9, 'สลัดกรีก', 'Fresh spinach, crisp romaine, tomatoes, and Greek olives', '9.95', 'img_20240405190358.jpg'),
(14, 9, 'สลัดผักโขม', 'Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette', '9.95', 'img_20240405190425.jpg'),
(15, 9, 'ถังขนมปัง', 'Lorem, deren, trataro, filede, nerada', '6.95', 'img_20240405190448.jpg'),
(16, 10, 'ทัสคานีย่าง', 'Grilled chicken with provolone, artichoke hearts, and roasted red pesto', '9.95', 'img_20240405190512.jpg'),
(17, 10, 'ล็อบสเตอร์โรล', 'Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll', '12.95', 'img_20240405190537.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` int(100) NOT NULL,
  `confirm_password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `user_email`, `user_pass`, `confirm_password`) VALUES
(1, 'testuser01@hotmail.com', 7, 123456),
(2, 'testuser02@hotmail.com', 7, 123456),
(3, 'testuser03@hotmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` int(11) NOT NULL,
  `group_menu` varchar(255) NOT NULL,
  `groupname` varchar(255) NOT NULL,
  `img_specials` varchar(255) NOT NULL,
  `detail_specials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `group_menu`, `groupname`, `img_specials`, `detail_specials`) VALUES
(1, 'Modi sit est', 'Architecto ut aperiam autem id', 'img_20240120114120.png', 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka \r\n<br/><br/>\r\nEt nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestia'),
(2, 'Unde praesentium sed', 'Et blanditiis nemo veritatis excepturi', 'img_20240120114300.png', 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka \r\n<br/><br/>\r\nEa ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque a'),
(3, 'Pariatur explicabo vel', 'Impedit facilis occaecati odio neque aperiam sit', 'img_20240120114424.png', 'Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut\r\n<br/><br/>\r\nIure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necess'),
(4, 'Nostrum qui quasi', 'Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore', 'img_20240413092515.png', 'Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus\r\n<br/><br/>\r\nEaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in conse'),
(5, 'Iusto ut expedita aut', 'Est eveniet ipsam sindera pad rone matrelat sando reda', 'img_20240120114859.png', 'Omnis blanditiis saepe eos autem qui sunt debitis porro quia.\r\n<br/><br/>\r\nExercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint ');

-- --------------------------------------------------------

--
-- Table structure for table `specials_th`
--

CREATE TABLE `specials_th` (
  `id` int(11) NOT NULL,
  `group_menu_th` varchar(255) NOT NULL,
  `groupname_th` varchar(255) NOT NULL,
  `img_specials_th` varchar(255) NOT NULL,
  `detail_specials_th` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `specials_th`
--

INSERT INTO `specials_th` (`id`, `group_menu_th`, `groupname_th`, `img_specials_th`, `detail_specials_th`) VALUES
(1, 'เมนูพิเศษ1', 'Architecto ut aperiam autem id', 'img_20240405191507.png', 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka <br/><br/> Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestia'),
(2, 'เมนูพิเศษ2', 'Et blanditiis nemo veritatis excepturi', 'img_20240405191449.png', 'Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka <br/><br/> Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque a'),
(3, 'เมนูพิเศษ3', 'Impedit facilis occaecati odio neque aperiam sit', 'img_20240405191515.png', 'Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut <br/><br/> Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necess'),
(4, 'เมนูพิเศษ4', 'Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore', 'img_20240413093531.png', 'Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus <br/><br/> Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in conse'),
(5, 'เมนูพิเศษ5', 'Est eveniet ipsam sindera pad rone matrelat sando reda', 'img_20240405191529.png', 'Omnis blanditiis saepe eos autem qui sunt debitis porro quia. <br/><br/> Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint');

-- --------------------------------------------------------

--
-- Table structure for table `table_booking`
--

CREATE TABLE `table_booking` (
  `id` int(11) NOT NULL,
  `tb_booking` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `table_booking`
--

INSERT INTO `table_booking` (`id`, `tb_booking`) VALUES
(1, 'โต๊ะ 01 (Table 01)'),
(2, 'โต๊ะ 02 (Table 02)'),
(3, 'โต๊ะ 03 (Table 03)'),
(4, 'โต๊ะ 04 (Table 04)'),
(5, 'โต๊ะ 05 (Table 05)'),
(6, 'โต๊ะ 06 (Table 06)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'User1', 'Admin', '$2y$10$SQHrLy6dgoSHfBp0VaZ23OBIAl6k.crbelOSzWgV.342CPBGKP/km');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id` int(11) NOT NULL,
  `Cus_Name` varchar(55) NOT NULL,
  `Cus_Email` varchar(55) NOT NULL,
  `Date_Message` datetime NOT NULL,
  `Cus_Subject` varchar(100) NOT NULL,
  `Cus_Message` varchar(155) NOT NULL,
  `Admin_message` varchar(255) NOT NULL,
  `color` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`id`, `Cus_Name`, `Cus_Email`, `Date_Message`, `Cus_Subject`, `Cus_Message`, `Admin_message`, `color`) VALUES
(24, 'FFog', 'dtory2015@gmail.com', '2024-04-13 10:25:44', 'สอบถามเรื่องการจัดงาน private ที่ร้าน', 'content.', 'test send.', 'danger'),
(28, 'Chis', 'satiker2010@hotmail.com', '2024-04-26 06:02:13', 'สอบถาม Party วันเกิด', 'ทำอย่างไร', 'send message', 'danger'),
(29, 'Leon', 'eddy@gmail.com', '2024-04-26 06:04:16', 'ติดต่องาน', 'เรื่อง...', '', 'success'),
(32, 'Ayaya', 'ya@gmail.com', '2024-04-30 03:54:06', 'Topic', 'content.', '', 'success'),
(33, 'Erik', 'yarik@gmail.com', '2024-04-30 03:56:05', 'Topic', 'content.', '', 'success');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_th`
--
ALTER TABLE `about_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_a_table`
--
ALTER TABLE `book_a_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu_th`
--
ALTER TABLE `category_menu_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs_th`
--
ALTER TABLE `chefs_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_th`
--
ALTER TABLE `contact_us_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_me`
--
ALTER TABLE `event_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_me_th`
--
ALTER TABLE `event_me_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_th`
--
ALTER TABLE `home_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `menu_th`
--
ALTER TABLE `menu_th`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials_th`
--
ALTER TABLE `specials_th`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_booking`
--
ALTER TABLE `table_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `about_th`
--
ALTER TABLE `about_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_a_table`
--
ALTER TABLE `book_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `category_menu`
--
ALTER TABLE `category_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category_menu_th`
--
ALTER TABLE `category_menu_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chefs_th`
--
ALTER TABLE `chefs_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us_th`
--
ALTER TABLE `contact_us_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_contact`
--
ALTER TABLE `customer_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_me`
--
ALTER TABLE `event_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `event_me_th`
--
ALTER TABLE `event_me_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_th`
--
ALTER TABLE `home_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `menu_th`
--
ALTER TABLE `menu_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specials_th`
--
ALTER TABLE `specials_th`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_booking`
--
ALTER TABLE `table_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
