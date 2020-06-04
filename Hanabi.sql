-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2019 at 01:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hanabi`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `user_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`user_admin`, `pass_admin`) VALUES
('bambam', 'bambampony');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(10) NOT NULL,
  `bookingdate` date NOT NULL,
  `memberfk` int(10) NOT NULL,
  `festivalfk` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `bookingdate`, `memberfk`, `festivalfk`, `amount`, `total`) VALUES
(56, '2019-05-13', 1, 14, 8, 1600),
(57, '2019-05-13', 1, 6, 3, 600),
(58, '2019-05-13', 1, 16, 5, 4000),
(59, '2019-05-14', 1, 7, 6, 1200),
(60, '2019-05-14', 19, 14, 4, 800),
(61, '2019-05-14', 19, 16, 6, 4800),
(62, '2019-05-14', 1, 16, 1, 800),
(63, '2019-05-14', 1, 11, 2, 700),
(64, '2019-05-14', 1, 14, 2, 400);

-- --------------------------------------------------------

--
-- Table structure for table `bookingreference`
--

CREATE TABLE `bookingreference` (
  `bookingfk` int(10) NOT NULL,
  `bookingreference` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookingreference`
--

INSERT INTO `bookingreference` (`bookingfk`, `bookingreference`) VALUES
(56, 'SKK14156'),
(57, 'HSU6157'),
(58, 'KSU16158'),
(59, 'HSU7159'),
(60, 'SKK141960'),
(61, 'KSU161961'),
(62, 'KSU16162'),
(63, 'HSU11163'),
(64, 'SKK14164');

-- --------------------------------------------------------

--
-- Table structure for table `festival`
--

CREATE TABLE `festival` (
  `fest_id` int(10) NOT NULL,
  `fest_name` varchar(300) NOT NULL,
  `fest_detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fest_date` varchar(100) NOT NULL,
  `fest_time` varchar(100) NOT NULL,
  `fw_number` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `access` varchar(300) NOT NULL,
  `price` int(10) NOT NULL,
  `fest_img1` varchar(100) NOT NULL,
  `fest_img2` varchar(100) NOT NULL,
  `map` text NOT NULL,
  `fest_islandfk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `festival`
--

INSERT INTO `festival` (`fest_id`, `fest_name`, `fest_detail`, `fest_date`, `fest_time`, `fw_number`, `location`, `access`, `price`, `fest_img1`, `fest_img2`, `map`, `fest_islandfk`) VALUES
(1, 'Senshin Fireworks', 'งานดอกไม้ไฟยอดนิยมของฮอกไกโดที่มีผู้เข้าชมกว่าแสนคนทุกปี มาพร้อมกับดอกไม้ไฟขนาดใหญ่ที่ฉาบท้องฟ้ายามค่ำคืนด้วย ดอกไม้ไฟ 8000 ลูก ไฮไลท์ที่ห้ามพลาดก็คือ Niagara ดอกไม้ไฟที่จุดเป็นม่านน้ำตกกว้างตลอดความยาวของสถานที่จัดงานกว่า 600 เมตร และ Starmine ที่จุดขึ้นเต็มพื้นที่งานหลากหลายสีสัน เป็นหนึ่งในเทศกาลฤดูร้อนที่สร้างความอบอุ่นและความทรงจำที่งดงามให้กับชาวฮอกไกโดและนักท่องเที่ยว', 'วันศุกร์ที่ 16 สิงหาคม 2019', '7:00 pm – 8:00 pm', 'ประมาณ 8,000 ลูก', 'ริมแม่น้ำ Kushiro สวนสาธารณะ Ryokuchi เมือง Kushiro จังหวัด Hokkaido', 'นั่งรถ 10 นาที จากสถานี JR Kushiro', 200, 'senshin1.jpg', 'senshin3.png', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d364.8538493025274!2d144.38575834454332!3d42.98183784941912!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f723d675e8cc59b%3A0x589c8852567b52af!2z44Gs44GV44G-44GE5bqD5aC0!5e0!3m2!1sen!2sth!4v1555769982291!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HKK'),
(2, 'Kachimai Fireworks', 'งานนี้มีการจุดดอกไม้ไฟจำนวนมากเกือบ 20,000 ลูก โดยเป็นการแสดงที่สร้างความบันเทิงเป็นอย่างมากจากการรวมดอกไม้ไฟ เสียงเพลง และแสงสีเข้าเป็นหนึ่งเดียวกัน ในตอนจบจะมีการจุดพลุแบบ Nishiki Kamuro ที่แตกเป็นเม็ดสีทองทิ้งระยะทางที่กระพริบย้อยลงมาเป็นทางยาวบนท้องฟ้ายามค่ำคืนเกิดเป็นภาพที่สวยงามทรงพลังอย่างยิ่ง งานนี้ถือเป็นงานที่แม้แต่ผู้เชี่ยวชาญด้านดอกไม้ไฟยังแนะนำ เป็นงานดอกไม้ไฟของฮอกไกโดที่คุณต้องไปดูให้ได้สักครั้ง', 'วันอังคารที่ 13 สิงหาคม 2019', '7:30 pm – 9:00 pm', 'ประมาณ 20,000 ลูก', 'ริมแม่น้ำ Tokachi เมือง Obihiro จังหวัด Hokkaido', 'เดิน 30 นาที จากสถานี JR Obihiro', 300, 'kachimai1.jpg', 'kachimai2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13374.673962981578!2d143.20188069192568!3d42.937045951277284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f73992818c695e3%3A0x1f696254db67d55e!2z5Y2B5Yud5bed5YWs5ZyS!5e0!3m2!1sth!2sth!4v1556990125069!5m2!1sth!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HKK'),
(3, 'Hokkaido Makomanai Fireworks Festival', 'งานแสดงดอกไม้ไฟที่ใหญ่ที่สุดของฮอกไกโด แสงสว่างจากดอกไม้ไฟกว่า 22,000 ลูกฉาบท้องฟ้ายามค่ำคืนให้สว่างไสวไปทั่ว การแสดงแสงสีที่ผสมผสานระหว่างแสง เสียง และดอกไม้ไฟ เป็นความงดงามราวกับได้ชม Live Stage ของดอกไม้ไฟเลยทีเดียว งานดอกไม้ไฟส่วนใหญ่แล้วจะจัดขึ้นบริเวณแม่น้ำหรือทะเล แต่สำหรับที่นี่นั้นมีรูปแบบที่เป็นเอกลักษณ์ เพราะเป็นงานดอกไม้ไฟที่จุดดอกไม้ไฟขึ้นภายในสเตเดียมนั่นเอง งานดอกไม้ไฟนี้สามารถชมจากภายนอกสเตเดียมได้ด้วยเช่นกัน แต่การแสดงไลฟ์ผสมผสานแสงสี เสียง และดอกไม้ไฟนั้นจะสามารถชมได้จากภายในสเตเดียมเท่านั้น จึงอยากแนะนำให้เข้าไปชมข้างในจะดีกว่า', 'วันเสาร์ที่ 6 กรกฎาคม 2019', '7:50 pm – 9:00 pm', 'ประมาณ 22,000 ลูก', 'สนามกีฬา Makomanai Sekisui Heim เมือง Sapporo จังหวัด Hokkaido', 'นั่ง shuttle bus เพียง 10 นาที จากรถไฟใต้ดินสถานี Makomanai', 300, 'makomanai1.jpg', 'makomanai2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11672.70413988356!2d141.3381677!3d42.9956277!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0ad50cc1ffe15d%3A0x548cae58ca329f96!2sMakomanai+Sekisui+Heim+Stadium!5e0!3m2!1sen!2sth!4v1556990417423!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HKK'),
(4, 'Lake Toya Long Run Fireworks', 'งานแสดงดอกไม้ไฟที่จัดยาวนานถึง 6 เดือน สมชื่อ “ลองรัน (Long-run)” โดยเริ่มตั้งแต่วันที่ 28 เมษายนไปจนถึงวันที่ 31 ตุลาคมเลยทีเดียว คุณสามารถชื่นชมดอกไม้ไฟที่ถูกจุดขึ้นจากเรือที่ล่องกลางทะเลสาปโทยะไปพร้อมๆกับแช่ออนเซ็นกลางแจ้งไปด้วย ในช่วงงานเทศกาลฤดูร้อนในเดือนสิงหาคมจะมีการออกร้านด้วย ทำให้เมืองบ่อน้ำแร่แห่งนี้มีความครึกครื้นขึ้นไปอีก คุณสามารถที่จะดื่มด่ำกับช่วงเวลาอันผ่อนคลายนี้ด้วยการแช่น้ำแร่ ทานอาหารอร่อยๆ และชมดอกไม้ไฟในชุดยูกาตะได้ นอกจากนี้ยังมีเรือชมดอกไม้ไฟไว้บริการอีกด้วย การชมดอกไม้ไฟบนเรือที่ล่องในทะเลสาปนั้นสุดแสนจะโรแมนติกมาก ขอแนะนำให้ลองสักครั้งให้ได้', 'วันที่ 28 เมษายน – 31 ตุลาคม 2019', '8:45 pm – 9:05 pm', 'ประมาณ 450 ลูก', 'Toyako ออนเซ็น ริมทะเลสาบ Toya เมือง Toyako จังหวัด Hokkaido', 'ลงสถานี JR Toya จากนั้นขึ้นรถ Donan Bus สายToyako Onsen ไปลงสุดสาย แล้วเดินต่อ 5 นาที', 400, 'lake1.jpg', 'lake2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11754.101679551926!2d140.8211332!3d42.5653691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dabba18a3a91938!2sLake+Toya+Hot+Spring!5e0!3m2!1sen!2sth!4v1556991076993!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HKK'),
(5, 'Doshin Fireworks', 'การแสดงดอกไม้ไฟนี้เป็นหนึ่งในสามการแสดงที่ยิ่งใหญ่ที่สุดใน Hakodate ดอกไม้ไฟจะถูกยิงจำนวนมากพุ่งขึ้นไปอย่างต่อเนื่อง ซึ่งเรียกว่า Wide Starmine จากเกาะที่สร้างขึ้นในอ่าวก่อนจะเปล่งประกายสว่างไสวเหนือท้องน้ำ นอกจากนี้ยังมีการแสดงดอกไม้ไฟที่จุดใต้น้ำซึ่งจะพุ่งกระจายแผ่ออกเป็นครึ่งวงกลมบนผิวน้ำอย่างสวยงาม คุณสามารถชื่นชมความงามของดอกไม้ไฟได้จากบริเวณท่าเทียบเรือ และบริเวณอ่าว นอกจากนี้แล้วเรายังมีจุดแนะนำสำหรับการชมที่น้อยคนจะรู้ นั่นก็คือบนยอดเขา Hakodate ซึ่งคุณจะสามารถดื่มด่ำกับความสวยงามของทิวทัศน์ยามราตรีของ Hakodate และดอกไม้ไฟที่สาดแสงบนท้องฟ้าได้พร้อมๆกัน', 'วันพฤหัสบดี ที่ 1 สิงหาคม 2019', '7:45 pm – 9:00 pm', 'ประมาณ 15,000 ลูก', 'ท่าเรือ Hakodate เมือง Hakodate จังหวัด Hokkaido', 'เดิน 5 นาที จากสถานี Hakodate', 200, 'doshin1.jpg', 'doshin2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15489.164379389891!2d140.7026887868435!3d41.77196910396691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6cdd1cfd12f680ea!2sHakodate+CRUISE+PORT!5e0!3m2!1sen!2sth!4v1556991542223!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HKK'),
(6, 'Noshiro Fireworks Show', 'เป็นงานการแสดงดอกไม้ไฟที่หายากมาก พลาดไม่ได้จริง ๆ เพราะว่างานนี้เป็นงานที่นำผลงานการแข่งขันดอกไม้ไฟโดยผู้จำหน่ายดอกไม้ไฟจาก 4 บริษัทชื่อดังในจังหวัดอากิตะมาจัดแสดง ด้วยโปรแกรม Sanshaku-Dama (การจุดดอกไม้ไฟที่มีความยาว 0.9 เมตร) ซึ่งในงานนี้จะมีการจุดดอกไม้ไฟที่มีความยาวกว่า 1,000 เมตร ที่น่าตื่นตาตื่นใจกันเลยทีเดียว พร้อมกับจะทำให้คุณเพลิดเพลินไปกับการแสดงดอกไม้ไฟที่ผสมผสานดนตรีแบบไดนามิก และดอกไม้ไฟขนาดใหญ่ที่งดงามอีกด้วย', 'วันเสาร์ที่ 20 กรกฎาคม 2019', '7:30 pm – 9:00 pm', 'ประมาณ 15,000 ลูก', 'พื้นที่จัดกิจกรรมพิเศษ Minato Wharf เมือง Noshiro จังหวัด Akita', 'เดิน 30 นาที จากสถานี JR Noshiro หรือ นั่ง shuttle bus เพียง 10 นาทีจากสถานี', 200, 'noshiro1.jpg', 'noshiro2.jpeg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3046.6565670091973!2d140.0143156!3d40.2167018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f9a9ec1e0de340f%3A0x395bd31c4848751e!2z6IO95Luj44Gu6Iqx54GrIOims-imp-S8muWgtA!5e0!3m2!1sen!2sth!4v1556991749816!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(7, 'Edogawa Fireworks Festival', 'เทศกาลดอกไม้ไฟที่ได้รับความนิยมและยิ่งใหญ่ที่สุดจะถูกจัดขึ้นที่เมือง Edogawa แห่งนี้ ด้วยดอกไม้ไฟ 14,000 ลูกที่จะปรากฏขึ้นบนท้องฟ้าแบบไม่มีหยุดพัก จุดชมดอกไม้ไฟที่แนะนำก็คือ Shinozaki Ryokuchi หรือ สวนสาธารณะ Shinozaki Park เป็นที่ที่คุณจะสามารถนั่งชมและเพลิดเพลินกับดอกไม้ไฟได้อย่างใกล้ชิด และที่สำคัญงานนี้คนจะเยอะเอามาก ๆ แนะนำให้ไปจองที่นั่งที่ดีที่สุดของคุณก่อน 5 โมงเย็น ไม่งั้นเดี๋ยวจะพลาดวิวที่สวยที่สุดเอาได้ นอกจากนี้เทศกาลนี้ถือว่าเป็นหนึ่งในเทศกาลฤดูร้อนที่มีชื่อเสียงที่สุดในโตเกียวอีกด้วย', 'วันเสาร์ที่ 3 สิงหาคม 2019', '7:15 pm - 8:30 pm', 'ประมาณ 14,000 ลูก', 'Shinozaki อยู่บริเวณริมแม่น้ำ Edokawa จังหวัด Tokyo', 'เดิน 15 นาที จากสถานี Toei Shinozaki, เดิน 25 นาที จากสถานี JR Koiwa หรือ Keisei Edogawa', 200, 'edogawa1.jpg', 'edogawa2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6478.8757307408005!2d139.9003410482392!3d35.71544844510342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDQzJzAxLjAiTiAxMznCsDU0JzA0LjQiRQ!5e0!3m2!1sen!2sus!4v1556991966729!5m2!1sen!2sus\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(8, 'Suwa Lake Fireworks Festival', 'หนึ่งในงานแสดงดอกไม้ไฟที่ได้รับการยกย่องว่าเป็นหนึ่งในงานแสดงที่ใหญ่ที่สุดในญี่ปุ่น จัดประมาณกลางเดือนสิงหาคม ในของทุกปี ด้วยดอกไม้ไฟ 40,000 ลูกเปร่งประกายเหนือทะเลสาบพร้อมเสียงก้องกังวานจากภูเขา ที่สำคัญงานนี้มีไฮไลท์อยู่ที่ตอนจบที่ยิ่งใหญ่ก็คือ การจุดดอกไม้ไฟเป็นม่านน้ำตก Niagara ที่มีความยาวกว่า 2 กิโลเมตรประกายระยิบระยับบนท้องฟ้า ซึ่งการแสดงดอกไม้ไฟของ Suwa นั้นเริ่มขึ้นหลังจากสงครามโลกครั้งที่สอง โดยหวังว่าจะทำให้วิญญาณของผู้คนลดน้อยลง', 'วันพฤหัสบดีที่ 15 สิงหาคม 2019', '7:00 pm – 9:00 pm', 'ประมาณ 40,000 ลูก', 'ริมทะเลสาบ Suwako เมือง Suwa จังหวัด Nagano', 'เดิน 8 นาที จากสถานี Kamisuwa Station (JR Chuo Line)', 500, 'suwa1.jpg', 'suwa2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.0546335982017!2d138.10962850404272!3d36.04726977343473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601c55afef131889%3A0x711d85fa73c73117!2sSuwa+Lakeside+Park!5e0!3m2!1sen!2sth!4v1556992455484!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(9, 'National Fireworks Display', 'งานแสดงดอกไม้ไฟแบบดั้งเดิมที่จัดมายาวนาน เป็นเทศกาลดอกไม้ไฟที่ยิ่งใหญ่จัดขึ้นตามธีมที่แตกต่างกันทุกปี ด้วยดอกไม้ไฟ 30,000 ลูก สามารถชมดอกไม้ไฟได้จากทุกที่ที่ต้องการ สถานที่ที่ได้รับความนิยมในการชมดอกไม้ไฟก็คือ จากบริเวณใต้เขื่อนแม่น้ำทางด้านขวาของแม่น้ำ Nagara, จากสวน Nagaragawa ไปยังโรงแรม Gifu Miyako, ศูนย์ Gifu Memorial Center และปราสาท Gifu เพลิดเพลินไปกับไฮไลท์ของงานนี้อย่างการแสดงดอกไม้ไฟเป็นม่านน้ำตก Niagara และการเปิดและปิดการแสดงด้วยการจุดดอกไม้ไฟทุกชนิดพร้อมกันแบบ Starmine', 'วันเสาร์ที่ 3 สิงหาคม 2019', '7:00 pm – 8:45 pm', 'ประมาณ 30,000 ลูก', 'ริมแม่น้ำ Nagara (ระหว่างสะพาน Nagara และ สะพาน Kinka) จังหวัด Gifu', 'ขึ้น Shuttle Bus จากสถานี JR Gifu Station หรือ Meitetsu Gifu Station', 450, 'national1.jpg', 'national2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.054257856722!2d136.7680886737146!3d35.43667773923457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6003abdfe090151d%3A0x5e5653e72ebbc49a!2z6ZW36Imv5bed6Iqx54Gr5aSn5LyaKOaJk-OBoeS4iuOBkuWgtOaJgCk!5e0!3m2!1sen!2sth!4v1556992684090!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(10, 'Fukuroi Enshu Fireworks Festival', 'หนึ่งในเทศกาลดอกไม้ไฟที่ใหญ่ที่สุดในญี่ปุ่น มีการแสดงดอกไม้ไฟกว่า 25,000 ลูก ที่มาจากการแข่งขันดอกไม้ไฟที่มีช่างฝีมือที่มีชื่อเสียงด้านความเชี่ยวชาญและคุณภาพทางศิลปะที่คัดสรรจากทั่วประเทศ เทศกาลนี้เต็มไปด้วยไฮไลท์ที่เพิ่มความตื่นเต้นให้กับสถานที่จัดงาน เช่น การแสดงดนตรีและการแสดงดอกไม้ไฟ, การแสดงดอกไม้ไฟเปลี่ยนสี, การแสดงดอกไม้ไฟเป็นม่านน้ำตก Niagara ที่ยิ่งใหญ่ และการแสดงดอกไม้ไฟขนาดใหญ่เป็นรูปภูเขาไฟฟูจิอันงดงาม', 'วันเสาร์ที่ 10 สิงหาคม 2019', '7:00 pm – 9:00 pm', 'ประมาณ 25,000 ลูก', 'สวนสาธารณะ Haranoyagawa Shinsui Park เมือง Fukuroi จังหวัด Shizuoka', 'เดิน 20 นาที จากสถานี JR Aino Station หรือ สถานี JR Fukurui Station', 350, 'fukuroi1.jpg', 'fukuroi2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3393.9533505126974!2d137.94161031338194!3d34.746969922664285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601afad9c38b445d%3A0x996049b6c7f6f447!2sHaranoyagawa+Water+Park!5e0!3m2!1sen!2sus!4v1556992853814!5m2!1sen!2sus\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(11, 'Naniwa Yodogawa Fireworks Festival', 'งานเทศกาลดอกไม้ไฟที่มีความโดดเด่นอยู่ที่การจุดดอกไม้ไฟตามจังหวะของเสียงดนตรีสอดคล้องกันราวกับว่าพลุนั้นเต้นได้เลย ไม่เพียงแค่นั้นดอกไม้ไฟที่นี่ยังเหมือนดาวดวงใหญ่ที่สว่างไสวบนท้องฟ้า ราวกับแสงสว่างในตอนกลางวันเลยทีเดียว และความพิเศษอีกอย่างหนึ่งก็คือ ดอกไม้ไฟของที่นี่นั้นเป็นดอกไม้ไฟแบบแฮนด์เมดด้วยความร่วมมือของชาวเมืองนั่นเอง นอกจากนี้ริมสองข้างทางของแม่น้ำยังมีร้านนั่งดื่มรวมกันกว่า 900 ร้านอีกด้วยในงานนี้ ปัจจุบันชาวเมืองแถบคันไซถือเทศกาลนี้ว่าเป็นงานประจำฤดูร้อนที่ยิ่งใหญ่มากเลยทีเดียว', 'วันอาทิตย์ที่ 4 สิงหาคม 2019', '7:40 pm - 8:40 pm', 'ประมาณ 25,000  ลูก', 'ริมแม่น้ำ Yodo จังหวัด Osaka', 'เดิน 25 นาที จากรถไฟใต้ดินสถานี Umeda, เดิน 15 นาที จากรถไฟสายฮังคิว สถานี Juso', 350, 'naniwa1.jpg', 'naniwa2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5273.231343437383!2d135.46287720858516!3d34.70566715458587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x70e41b70d529a6b!2z5p-P6YeM5rKz5bed5pW3!5e0!3m2!1sen!2sus!4v1556993357421!5m2!1sen!2sus\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(12, 'Nagato Senzaki Fireworks Festival', 'เทศกาลนี้จัดขึ้นรอบ ๆ ท่าเรือ Senzaki ทุกปีโดยร่วมมือกับเทศกาล Senzaki Gion บริเวณรอบ ๆ ศาลเจ้า Gion นั้นมีแผงขายของเรียงรายอยู่มากมาย พร้อมแก่การต้อนรับผู้เข้าชมงานเทศกาลนี้อย่างครบครัน การเปิดตัวดอกไม้ไฟในงานนี้ทั้งสร้างสรรค์และมีชีวิตชีวามากสำหรับค่ำคืนแห่งฤดูร้อน และยังเป็นหนึ่งในเทศกาลดอกไม้ไฟที่ยิ่งใหญ่ที่สุดในฝั่งตะวันตกของญี่ปุ่นอีกด้วย ผู้คนจำนวนมากที่มาจากต่างที่ ก็ต้องมาชมดอกไม้ไฟที่นี่กันให้ได้ซักครั้ง', 'วันอาทิตย์ที่ 21 กรกฎาคม 2019', '8:00 pm - 9:30 pm', 'ประมาณ 3,000 ลูก', 'ท่าเรือ Senzaki เมือง Nagato จังหวัด Yamaguchi', 'เดิน 5 นาที จากสถานี JR Senzaki', 100, 'nagato1.jpg', 'nagato2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d823.0994771682158!2d131.20082599755327!3d34.39123080390884!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzTCsDIzJzI4LjgiTiAxMzHCsDEyJzA1LjMiRQ!5e0!3m2!1sen!2sth!4v1556993754263!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'HSU'),
(13, 'Shimanto Fireworks Display', 'เทศกาลนี้ หรือเรียกอีกชื่อหนึ่งว่า Shimanto Civic Festival บอกถึงการมาถึงของฤดูร้อน สำหรับการแสดงดอกไม้ไฟที่เสร็จสมบูรณ์ในตอนท้ายนั้น จะเป็นการจุดดอกไม้ไฟที่จะเล่นไปพร้อมกับเสียงเพลง เหมือนกับดอกไม้ไฟเริงระบำอยู่ก็ว่าได้ และดอกไม้ไฟที่มีสีสันประกายงดงามประมาณ 10,000 ลูก ก็จะถูกพัดพาขึ้นฝั่งอย่างสวยงาม ดอกไม้ไฟที่ส่องประกายอยู่บนผิวน้ำของแม่น้ำ Shimanto ถูกเรียกว่า \"ลำธารใสสะอาดสุดท้ายของญี่ปุ่น\" อีกด้วยนั่นเอง', 'วันเสาร์ที่ 31 สิงหาคม 2019', '7:00 pm – 9:00 pm', 'ประมาณ 10,000 ลูก', 'ริมแม่น้ำ Shimanto เมือง Shimanto จังหวัด Kochi', 'นั่งรถ 5 นาที จากสถานี Nakamura', 200, 'shimanto1.jpg', 'shimanto2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1889.073349574872!2d132.9288718000726!3d32.98903546086394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354f3e89b0ddd371%3A0x394561be9a1572db!2z5Zub5LiH5Y2B5biC44GK56Wt44KK5bqD5aC0!5e0!3m2!1sen!2sus!4v1556994139784!5m2!1sen!2sus\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'SKK'),
(14, 'Sanuki Takamatsu Fireworks Festival', 'การแสดงดอกไม้ไฟนี้เกิดขึ้นในคืนที่ 2 ของเทศกาล Sanuki Takamatsu ซึ่งนับเป็นหนึ่งใน 4 เทศกาลสำคัญของ Shikoku และมีการจัดแสดงดอกไม้ไฟที่ใหญ่ที่สุดแห่งหนึ่งในเกาะ Shikoku มีการจุดพลุดอกไม้ไฟมากกว่า 8,000 ลูก อย่าง Starmine ที่รวมเอาดอกไม้ไฟทุกชนิดมาจุดพร้อมๆกัน และ Shakudama ดอกไม้ไฟแบบที่จะเบ่งบานเป็นดอกไม้บนท้องฟ้า เป็นที่น่าตื่นตาตื่นใจเป็นอย่างมากเลยทีเดียวในคืนเทศกาลอันอบอุ่นในฤดูร้อนนี้ คุณยังสามารถเห็นผิวน้ำหลากสีที่ถูกย้อมสีจากดอกไม้ไฟอีกด้วย', 'วันอังคารที่ 13 สิงหาคม 2019', '8:00 pm – 8:50 pm', 'ประมาณ 8,000 ลูก', 'Sunport เมือง Takamatsu จังหวัด Kagawa', 'เดิน 15 นาที จาก สถานี JR Takamatsu และ สถานี Takamatsuchikkou', 200, 'sanuki1.jpg', 'sanuki2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6345.0323325487125!2d134.0470501111536!3d34.35319468205665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553ec77702e2f15%3A0xa02dbaa6bc999abc!2sSunport%2C+Takamatsu%2C+Kagawa+760-0019%2C+Japan!5e0!3m2!1sen!2sth!4v1556994307746!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'SKK'),
(15, 'Chikugo River Fireworks Festival', 'งานแสดงดอกไม้ไฟ Chikugo River นี้จัดขึ้นในต้นเดือนสิงหาคมของทุกปี ต้นกำเนิดของงานเทศกาลนี้กล่าวกันไว้ว่า เป็นดอกไม้ไฟที่อุทิศให้กับศาลเจ้า Suitengu ซึ่งเป็นเวลายาวนานกว่า 350 ปีมาแล้ว การแสดงนี้เป็นหนึ่งในการแสดงดอกไม้ไฟที่ใหญ่ที่สุดในฝั่งตะวันตกของญี่ปุ่น โดยมีการจุดดอกไม้ไฟประมาณ 18,000 ลูก ที่สถานที่ 2 แห่ง แห่งหนึ่งใน Sasayama และอีกแห่งหนึ่งใน Kyomachi มีดอกไม้ไฟที่ทรงพลังและน่าประทับใจมากมายให้ชม และไฮไลท์ของงานนี้ก็คือ การแสดงดอกไม้ไฟเป็นม่านน้ำตก Niagara ข้ามแม่น้ำ Chikugo มีผู้คนมากมายมาเข้าชมในเทศกาลงานนี้ ไม่เพียงแต่คน Kyushu เท่านั้น แต่คนทั้งประเทศก็มาเข้าร่วมชมการแสดงงานนี้กันทุกปีอีกด้วย', 'วันจันทร์ที่ 5 สิงหาคม 2019', '7:40 pm – 9:10 pm', 'ประมาณ 18,000 ลูก', 'ริมแม่น้ำ Chikugo จังหวัด Fukuoka', 'เดิน 15 นาที จากสถานี JR Kurume หรือ นั่ง shuttle bus จากสถานี Nishitetsu Kurume', 300, 'chikugo1.jpg', 'chikugo2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d864.8810659800507!2d130.49513157888975!3d33.31963760739567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541a4e13b6a177f%3A0x8c46522c3a208b92!2z6auY5rWc6Jma5a2Q44Gu5Y-l56KR!5e0!3m2!1sen!2sth!4v1556994005420!5m2!1sen!2sth\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'KSU'),
(16, 'Kyushu Ichi Fireworks Festival', 'เทศกาลดอกไม้ไฟที่ยิ่งใหญ่ที่สุดแห่งเกาะคิวชู โดยจะจัดขึ้นที่สวนสนุก Huis Ten Bosch ครั้งนี้มีจำนวนพลุถึง 22,000 คอยแต่งแต้มท้องฟ้ายามค่ำคืนอย่างตื่นตาตื่นใจ การแสดงในครั้งนี้ ชุดแรกดอกไม้ไฟที่มีขนาดเส้นผ่านศูนย์กลางกว่า 300 เมตรจะพุ่งกระจายขึ้นท้องฟ้ากว่า 150 ครั้ง ชุดที่ 2 เส้นผ่านศูนย์กลาง 500 เมตรจำนวน 5 ครั้ง และไคลแม็กซ์ของการแสดงดอกไม้ไฟในครั้งนี้มีชื่อว่า “Ultra Dream in The Sky” การผสมผสานระหว่างดนตรีและดอกไม้ไฟที่มีความกว้างกว่า 1 กิโลเมตร และดอกไม้ไฟ 4,000 ลูกในช่วงเวลา 5 นาที โดยผู้เชี่ยวชาญทางด้านดอกไม้ไฟทั้งในญี่ปุ่นและต่างประเทศที่ได้ร่วมมือกันเพื่อการแสดงที่ดีที่สุดในงานนี้ ไม่ควรพลาดจริง ๆ', 'วันอาทิตย์ที่ 29 กันยายน 2019', '6:45 pm – 7:30 pm และ 8:30 pm – 9:15 pm', 'ประมาณ 22,000 ลูก', 'สวนสนุก Huis Ten Bosch เมือง Sasebo จังหวัด Nagasaki', 'เดิน 10 นาที จากสถานี Huis Ten Bosch', 800, 'kyushu1.jpg', 'kyushu2.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d26743.02190380403!2d129.788437!3d33.086001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f267b427d8778f7!2sHuis+Ten+Bosch!5e0!3m2!1sen!2sjp!4v1556897770122!5m2!1sen!2sjp\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'KSU'),
(26, 'fdsfd', 'dsds', 'fdfd', 'fdfd', 'fdsfds', 'fdfdf', 'gfdgf', 1111, 'iphone.jpg', 'fdsfdsf', 'rgrgreg', 'HKK'),
(27, 'bambam', 'dsdssa', 'fdfd', 'fdsf', 'hgfhg', 'fdfdf', 'gfhgfghg', 100, 'bambam1.png', 'bunbun1.png', 'dsassad', 'HKK');

-- --------------------------------------------------------

--
-- Table structure for table `island`
--

CREATE TABLE `island` (
  `island_id` varchar(20) NOT NULL,
  `island_name` varchar(50) NOT NULL,
  `island_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `island`
--

INSERT INTO `island` (`island_id`, `island_name`, `island_img`) VALUES
('HKK', 'Hokkaido', 'hokkaido1.png'),
('HSU', 'Honshu', 'honshu1.png'),
('KSU', 'Kyushu', 'kyushu1.png'),
('SKK', 'Shikoku', 'shikoku1.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `firstname`, `lastname`, `email`, `password`, `tel`, `address`) VALUES
(1, 'Natthatida', 'Chartwichienchai', 'bamnttd@gmail.com', 'bambam', '0956292651', 'Sathorn, Thailand'),
(2, 'Panasya', 'Larpteerawut', 'wenyapnsy@gmail.com', 'wenya', '0968906169', 'Taoyuan, Taiwan'),
(3, 'Kanyarat', 'Chartwichienchai', 'nanndmochi@gmail.com', 'nanndmochi', '0956795651', 'Sathorn, Thailand'),
(5, 'Sakura', 'Akimoto', 'sakuracute@gmail.com', 'akimotosakura', '0989803212', 'Tokyo, Japan'),
(6, 'Mamamoo', 'vdsvd', 'mamamo@gmail.com', 'bambam', '0965434567', 'sacdscfsd'),
(7, 'erwfsrg', 'vdsvd', 'bambamnttd@gmail.com', 'dd', '0965434567', 'sacdscfsd'),
(9, 'erwfsrg', 'vdsvd', 'bambamnttd@gmail.com', 'dd', '0965434567', 'sacdscfsd'),
(10, 'fdsfdsf', 'vdsvd', 'mamamoo@gmail.com', 'aa', '0965434567', 'sacdscfsd'),
(11, 'erwfsrg', 'Helloworld', 'bamnttdff@gmail.com', 'aa', '0965434567', 'sacdscfsd'),
(12, 'Mamamoo', 'Helloworld', 'bambamnttdee@gmail.com', 'ee', '0965434567', 'sacdscfsd'),
(13, 'Mamamoo', 'vdsvd', 'aombam5pp5_121@hotmail.com', 'oo', '0965434567', 'sacdscfsd'),
(14, 'erwfsrg', 'Helloworld', 'mamamo@gmail.com', 'ะะ', '0965434567', 'sacdscfsd'),
(15, 'erwfsrg', 'Helloworld', 'aombam55_121@hotmail.com', '11', '0965434567', 'sacdscfsd'),
(16, 'Mamamoo', 'Helloworld', 'bbb@gmail.com', 'bbb', '0965434567', 'sacdscfsd'),
(17, 'hahah', 'fdfd', 'hoho@gmail.com', 'hoho', '0956292651', '16, Soi Charoen Krung 59, Charoen Krung rd.'),
(18, 'hohoho', 'hohoho', 'hohoho$gmail.com', 'hohoho', '0965434567', '16, Soi Charoen Krung 59, Charoen Krung rd.'),
(19, 'ss', 'ss', 'ss@gmail.com', 'ss', '0956292651', '16, Soi Charoen Krung 59, Charoen Krung rd.'),
(20, 'Saiwapa', 'Chartwichienchai', 'saiwapa@gmail.com', 'saiwapa', '0816111559', 'Sathorn, Bangkok'),
(21, 'fdsfdsf', 'Chartwichienchai', 'tye', 'hh', '0956292651', '16, Soi Charoen Krung 59, Charoen Krung rd.'),
(22, 'Chayanit', 'Chayjaroen', 'titachayanit@gmail.com', 'titachayanit', '0986785432', 'Bangrak, Bangkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `memberfk` (`memberfk`),
  ADD KEY `festivalfk` (`festivalfk`);

--
-- Indexes for table `bookingreference`
--
ALTER TABLE `bookingreference`
  ADD PRIMARY KEY (`bookingreference`),
  ADD KEY `bookingfk` (`bookingfk`);

--
-- Indexes for table `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`fest_id`),
  ADD KEY `fest_islandfk` (`fest_islandfk`);

--
-- Indexes for table `island`
--
ALTER TABLE `island`
  ADD PRIMARY KEY (`island_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `festival`
--
ALTER TABLE `festival`
  MODIFY `fest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`memberfk`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`festivalfk`) REFERENCES `festival` (`fest_id`);

--
-- Constraints for table `bookingreference`
--
ALTER TABLE `bookingreference`
  ADD CONSTRAINT `bookingreference_ibfk_1` FOREIGN KEY (`bookingfk`) REFERENCES `booking` (`bookingid`);

--
-- Constraints for table `festival`
--
ALTER TABLE `festival`
  ADD CONSTRAINT `festival_ibfk_1` FOREIGN KEY (`fest_islandfk`) REFERENCES `island` (`island_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
