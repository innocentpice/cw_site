-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 17 ก.พ. 2017  09:50น.
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.5.53-0ubuntu0.14.04.1
-- รุ่นของ PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `cwgreat`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `STAFF`
--

CREATE TABLE IF NOT EXISTS `STAFF` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `USERNAME` varchar(25) NOT NULL COMMENT 'ไอดี',
  `PASSWORD` varchar(25) NOT NULL COMMENT 'พาสเวิด',
  `PERMISSION` int(11) NOT NULL COMMENT 'สิทธิการเข้าใช้งาน',
  PRIMARY KEY (`USERNAME`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `STAFF`
--

INSERT INTO `STAFF` (`NO`, `USERNAME`, `PASSWORD`, `PERMISSION`) VALUES
(1, 'admin', 'admin', 5),
(2, 'staff', 'staff', 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `SUPPLIER`
--

CREATE TABLE IF NOT EXISTS `SUPPLIER` (
  `NO` int(11) NOT NULL AUTO_INCREMENT,
  `SUP_NAME` varchar(30) NOT NULL,
  `SUP_ADDRESS` text NOT NULL,
  `SUP_TEL` text NOT NULL,
  `SUP_EMAIL` text NOT NULL,
  `SUP_ABNAME` varchar(15) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  UNIQUE KEY `SUP_ABNAME` (`SUP_ABNAME`),
  UNIQUE KEY `SUP_ABNAME_2` (`SUP_ABNAME`),
  UNIQUE KEY `SUP_ABNAME_4` (`SUP_ABNAME`),
  KEY `NO` (`NO`),
  KEY `SUP_NAME` (`SUP_NAME`),
  KEY `SUP_ABNAME_3` (`SUP_ABNAME`),
  KEY `NO_2` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- dump ตาราง `SUPPLIER`
--

INSERT INTO `SUPPLIER` (`NO`, `SUP_NAME`, `SUP_ADDRESS`, `SUP_TEL`, `SUP_EMAIL`, `SUP_ABNAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'บริษัท ซีเอ็นซียูเนี่ยน จำกัด', 'หมู่ที่ 1 188 ถนนประชาอุทิศ 90 ตำบล บ้านคลองสวน อำเภอ พระสมุทรเจดีย์ สมุทรปราการ 10290', '0249011222', 'cnc_union@hotmail.com', 'CNCUNION', 'SUP', 'SUP');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `TASK`
--

CREATE TABLE IF NOT EXISTS `TASK` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `JOB_NO` varchar(9) NOT NULL COMMENT 'หมายเลขงาน',
  `C_NAME` varchar(15) NOT NULL COMMENT 'ชื่อลูกค้า',
  `DESCRIPTION` text NOT NULL COMMENT 'รายละเอียดงาน',
  `QUANTITY` int(11) NOT NULL COMMENT 'จำนวน',
  `TYPE` varchar(5) NOT NULL COMMENT 'หน่วยนับ',
  `START_TIME` date NOT NULL COMMENT 'วันเริ่มงาน',
  `DEADLINE_TIME` date NOT NULL COMMENT 'กำหนดส่ง',
  `STATUS` int(11) NOT NULL DEFAULT '1',
  `SUP_NO` int(11) DEFAULT NULL,
  `STAFF_NO` int(11) DEFAULT NULL,
  PRIMARY KEY (`JOB_NO`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- dump ตาราง `TASK`
--

INSERT INTO `TASK` (`NO`, `JOB_NO`, `C_NAME`, `DESCRIPTION`, `QUANTITY`, `TYPE`, `START_TIME`, `DEADLINE_TIME`, `STATUS`, `SUP_NO`, `STAFF_NO`) VALUES
(1, 'J-1600110', 'TOKAI', 'งานปรับปรุงพื้นทางเข้าห้องเคมี SP \r\nเพิ่มเติม ............. !@#*(@)$*!@()#@!#', 1, 'JOB', '2017-02-06', '2016-11-25', 2, 1, 2),
(2, 'J-1600282', 'TOKAI', 'PARTITION FOR SHOT BLAST Dwg. AMT160068', 1, 'SET', '2017-02-06', '2016-12-19', 1, 1, 1),
(3, 'J-1600294', 'SYS', 'ซ่อม Plate Flying Nozzle Tundish Dwg.SYS2-C00.291 Rev.00', 3, 'SET', '2017-02-06', '2017-04-20', 3, 1, 1),
(6, 'test', 'SYS', 'ROLLER 25cm', 2, 'PC', '2017-02-17', '2017-10-25', 4, 1, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `TASK_LOG`
--

CREATE TABLE IF NOT EXISTS `TASK_LOG` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `JOB_NO` varchar(9) NOT NULL COMMENT 'หมายเลขงาน',
  `DESCRIPTION` text NOT NULL COMMENT 'รายละเอียด',
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'วันที่',
  `STATUS` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`NO`),
  KEY `ID` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- dump ตาราง `TASK_LOG`
--

INSERT INTO `TASK_LOG` (`NO`, `JOB_NO`, `DESCRIPTION`, `DATE`, `STATUS`) VALUES
(1, 'J-1600110', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:37:38', 1),
(3, 'J-1600282', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:54:26', 1),
(4, 'J-1600294', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:55:06', 1),
(8, 'J-1600294', 'กำลังดำเนินการผลิต', '2017-02-08 06:22:38', 2),
(9, 'J-1600282', 'กำลังดำเนินการผลิต', '2017-02-08 06:30:20', 2),
(10, 'J-1600294', 'กำลังดำเนินการผลิต 20%', '2017-02-08 16:33:41', 2),
(13, 'J-1600294', 'กำลังจัดส่ง', '2017-02-15 07:41:38', 3),
(25, 'test', 'ได้รับคำสั่งซื้อเรียบร้อยแล้ว', '2017-02-17 04:37:18', 1),
(27, 'test', 'กำลังดำเนินการผลิต', '2017-02-17 04:46:56', 2),
(28, 'test', 'กำลังดำเนินการผลิต 20%', '2017-02-17 04:47:00', 2),
(29, 'test', 'กำลังดำเนินการผลิต 50%', '2017-02-17 04:47:06', 2),
(30, 'test', 'กำลังดำเนินการผลิต 80%', '2017-02-17 04:47:11', 2),
(31, 'test', 'กำลังดำเนินการผลิต 90%', '2017-02-17 04:47:16', 2),
(32, 'test', 'ผลิตสิ้นค้าเรียบร้อยแล้ว', '2017-02-17 04:47:43', 2),
(33, 'test', 'กำลังจัดส่งสินค้า', '2017-02-17 04:48:15', 3),
(40, 'test', 'จัดส่งสินค้าเรียบร้อยแล้ว ขอบคุณที่ใช่บริการค่ะ', '2017-02-17 09:01:05', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
