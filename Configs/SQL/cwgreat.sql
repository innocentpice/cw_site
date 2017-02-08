-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 08 ก.พ. 2017  03:59น.
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
-- โครงสร้างตาราง `AUTH`
--

CREATE TABLE IF NOT EXISTS `AUTH` (
  `NO` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่',
  `USERNAME` varchar(25) NOT NULL COMMENT 'ไอดี',
  `PASSWORD` varchar(25) NOT NULL COMMENT 'พาสเวิด',
  `PERMISSION` int(11) NOT NULL COMMENT 'สิทธิการเข้าใช้งาน',
  PRIMARY KEY (`USERNAME`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `AUTH`
--

INSERT INTO `AUTH` (`NO`, `USERNAME`, `PASSWORD`, `PERMISSION`) VALUES
(1, 'admin', 'admin', 5);

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
  PRIMARY KEY (`JOB_NO`),
  KEY `NO` (`NO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- dump ตาราง `TASK`
--

INSERT INTO `TASK` (`NO`, `JOB_NO`, `C_NAME`, `DESCRIPTION`, `QUANTITY`, `TYPE`, `START_TIME`, `DEADLINE_TIME`, `STATUS`) VALUES
(5, 'J-100000', 'TOKAI', 'TEST', 1, 'PC', '2017-02-06', '2017-02-23', 1),
(1, 'J-1600110', 'TOKAI', 'งานปรับปรุงพื้นทางเข้าห้องเคมี SP \r\nเพิ่มเติม ............. !@#*(@)$*!@()#@!#', 1, 'JOB', '2017-02-06', '2016-11-25', 1),
(2, 'J-1600282', 'TOKAI', 'PARTITION FOR SHOT BLAST Dwg. AMT160068', 1, 'SET', '2017-02-06', '2016-12-19', 1),
(3, 'J-1600294', 'SYS', 'ซ่อม Plate Flying Nozzle Tundish Dwg.SYS2-C00.291 Rev.00', 3, 'SET', '2017-02-06', '2017-04-20', 1),
(4, 'J-1700008', 'SYS', 'กลึง Shaft drive trolley\r\n1) เพลาล้อเครน 90x645mm. = 1PC.\r\n2) Bering housing = 1PC.\r\n3) Coupling Shaft = 1PC.\r\n', 1, 'JOB', '2017-02-06', '9999-09-09', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- dump ตาราง `TASK_LOG`
--

INSERT INTO `TASK_LOG` (`NO`, `JOB_NO`, `DESCRIPTION`, `DATE`, `STATUS`) VALUES
(1, 'J-1600110', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:37:38', 1),
(3, 'J-1600282', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:54:26', 1),
(4, 'J-1600294', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:55:06', 1),
(5, 'J-1700008', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:55:18', 1),
(6, 'J-100000', 'ได้รับคำสั่งซื้อแล้ว', '2017-02-08 03:55:28', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
