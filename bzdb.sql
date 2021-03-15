-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 05:10 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bzdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE IF NOT EXISTS `admintb` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`Username`, `Password`) VALUES
('admin1', 'b1234'),
('admin1', 'b2018');

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE IF NOT EXISTS `allocation` (
  `Item_No` int(100) NOT NULL,
  `Item_Type` varchar(100) NOT NULL,
  `value` int(100) NOT NULL,
  `Assign_Date` varchar(100) NOT NULL,
  `location` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  PRIMARY KEY (`Item_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`Item_No`, `Item_Type`, `value`, `Assign_Date`, `location`, `Address`, `Description`) VALUES
(23, 'Equipments', 50000, '2018-09-19', 'KISII', 'p.o box 44 kisii', '50 boxes of syringe	\r\n				'),
(50, 'Mobile Clinic', 7800, '2018-09-25', 'samburu', 'p.o box 505 samburu', '	50 boxes of panandols,yringes\r\n				'),
(222, 'Others', 600000, 'Wed Sep 26 2018 06:17:05 GMT+0300 (East Africa Time)', 'KERICHO', 'p.o box 2121 kericho', 'Kids cothess and liquid medicines\r\n				'),
(1000, 'Equipments', 200000, '2018-09-20', 'mandera', 'p.o box 90 mandera', 'AMBULANCE\r\n				'),
(2020, 'Medicine', 290000, 'Wed Sep 26 2018 03:43:56 GMT+0300 (East Africa Time)', 'taitataveta', 'p.o box 586 taita taveta', '100 boxes of injections	,10 boxes of panadol tablets				'),
(3800, 'Equipments', 390000, '2018-09-25', 'isiolo', 'p.o box 567 isiolo', '2 AMBULNCE, 20 boxes of women pands,56 boxes of wshing saop\r\n				'),
(4040, 'Medicine', 9000, '2018-09-20', 'Tana Bura', 'p.o box 400 Bura', '80 Boxes of tablets, 40 boxes of capsilse.		');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` text NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES
('qwergh', 'awsedr@gmail.com', 'sdfgh'),
('dennis', 'dennis@gmai.com', 'i appreciate highly'),
('hanao', 'hn34@yahoo.com', 'appreciated because of good job'),
('kilonzo', 'kilonzo@gmail.com', 'thank you guys for your good job you are doing countrywide.'),
('janny', 'less@gmai.com', 'good job '),
('Norah', 'norah@gmail.com', 'congratulations guys for your commitment in our county.'),
('don', 'samm@yahoo.com', 'awesome'),
('samue', 'sammatta11@yahoo.com', 'thank for your support in our county.'),
('viola_osero', 'viola@gmail.com', 'nice work'),
('Violla', 'violla@gmail.com', 'highly appriciated');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `First_Name` text NOT NULL,
  `Orgn` varchar(40) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Donated_Item` varchar(30) NOT NULL,
  `Don_value` int(50) NOT NULL,
  `Mode_Of_Payment` text NOT NULL,
  `TCode` varchar(20) NOT NULL,
  `Phone_No` text NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`First_Name`, `Orgn`, `Email`, `Donated_Item`, `Don_value`, `Mode_Of_Payment`, `TCode`, `Phone_No`, `date`) VALUES
('KIMANI', 'huduma_kenya', 'kimani@gmail.com', 'Money', 4500, 'M-Pesa', 'KG25352JJF', '071765372742', 'Wed Sep 26 2018 06:37:10 GMT+0300 (East Africa Time)'),
('samuel', 'Oracle_limited', 'samuel@gmail.com', 'Money', 450000, 'M-Pesa', 'KJ9034HW23', '714014633', 'Tue Sep 25 2018 22:15:35 GMT+0300 (East Africa Time)'),
('violla', 'Kenya_Networks_limited', 'violla@gmail.com', 'Money', 7000, 'MasterCard', '2345678887', '078834433', 'Wed Sep 26 2018 07:31:19 GMT+0300 (East Africa Time)');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `Id_No` int(255) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_No` text NOT NULL,
  `County` text NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Cpass` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`Id_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Id_No`, `First_Name`, `Last_Name`, `Gender`, `Email`, `Contact_No`, `County`, `Username`, `Pass`, `Cpass`, `date`) VALUES
(12345678, 'KANAI', 'abraham', 'Male', 'kana12@yahoo.com', '0764654564542', 'busia', 'kanai', '9090', '9090', 'Tue Sep 25 2018 22:22:04 GMT+0300 (East Africa Time)'),
(22112211, 'violla', 'osero', 'Female', 'violla@gmail.com', '0788345566', 'kisumu', 'violla', '55', '55', 'Wed Sep 26 2018 07:29:22 GMT+0300 (East Africa Time)'),
(23456756, 'KANAI', 'kelvin', 'Male', 'kana12@yahoo.com', '07234567879', 'kitui', 'sam', '20', '20', 'Tue Sep 25 2018 21:53:45 GMT+0300 (East Africa Time)'),
(30247667, 'KIMANI', 'JOSEPH', 'Male', 'kimani@gmail.com', '07123374384', 'LAMU', 'kimani', '12', '12', 'Wed Sep 26 2018 06:34:07 GMT+0300 (East Africa Time)'),
(32323232, 'samuel', 'shakes', 'Male', 'samuel@gmail.com', '0780976554', 'makueni', 'shakes', '1234', '1234', 'Tue Sep 25 2018 22:02:25 GMT+0300 (East Africa Time)'),
(34343434, 'thomas', 'chege', 'Male', 'chege@yahoo.com', '0723222222222', 'mombasa', 'thomas', '0909', '0909', 'Tue Sep 25 2018 22:23:48 GMT+0300 (East Africa Time)'),
(43454545, 'JOHN', 'miano', 'Male', 'john22@gmail.com', '0712346575', 'kiambu', 'john', '5555', '5555', 'Wed Oct 03 2018 20:56:41 GMT+0300 (East Africa Time)'),
(44444444, 'trizah', 'mali', 'Female', 'trizah@gmail.com', '0714014888', 'machakos', 'trizah', '3333', '3333', 'Thu Sep 27 2018 23:15:52 GMT+0300 (East Africa Time)'),
(56565656, 'mary', 'keno', 'Female', 'mary@yahoo.com', '0723236666666', 'kajiado', 'mary', '2q2q', '2q2q', 'Tue Sep 25 2018 21:59:27 GMT+0300 (East Africa Time)'),
(56788888, 'kimani', 'alice', 'Female', 'alice@yahoo.com', '0788888888888', 'nyeri', 'alice', '2222', '2222', 'Thu Sep 27 2018 23:18:28 GMT+0300 (East Africa Time)'),
(77777777, 'joseph', 'shitandi', 'Male', 'joseph@gmail.com', '0788888888888', 'kakamega', 'joseph', '1234', '1234', 'Wed Sep 26 2018 07:42:34 GMT+0300 (East Africa Time)'),
(89898989, 'mwamba', 'makumba', 'Male', 'mwamba@gmail.com', '0734263542', 'bondo', 'mwamba', '1q1q', '1q1q', 'Tue Sep 25 2018 21:57:39 GMT+0300 (East Africa Time)');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `Event_No` varchar(20) NOT NULL,
  `Event_Name` text NOT NULL,
  `Cost` int(30) NOT NULL,
  `Date` date NOT NULL,
  `Start_time` time(4) NOT NULL,
  `End_time` time(4) NOT NULL,
  `Venue` text NOT NULL,
  PRIMARY KEY (`Event_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Event_No`, `Event_Name`, `Cost`, `Date`, `Start_time`, `End_time`, `Venue`) VALUES
('123', 'CAMPAIGN_FOR_THE_PREGNANT_WOMEN', 150, '2018-10-13', '00:34:00.0000', '16:54:00.0000', 'MANDERA'),
('124', 'FUNDDONATION', 200, '2018-09-28', '06:54:00.0000', '20:07:00.0000', 'KIBWEZI'),
('290', 'CAMPAIGN FOR THE WOMEN', 200, '2018-09-10', '06:00:00.0000', '13:00:00.0000', 'WAJIR'),
('4040', 'CAMPAIGNTOFIGHTAGAINSTHIVAAIDS', 150, '2018-09-27', '09:08:00.0000', '17:43:00.0000', 'kisii'),
('440', 'FUNDDONATION', 150, '2018-10-01', '07:56:00.0000', '21:08:00.0000', 'NAKURUEMIRATES'),
('550', 'FUND RISING', 150, '2018-11-30', '14:00:00.0000', '18:00:00.0000', 'KILIFI COUNTY STADIUM');

-- --------------------------------------------------------

--
-- Table structure for table `tickettb`
--

CREATE TABLE IF NOT EXISTS `tickettb` (
  `Ticket_Id` varchar(20) NOT NULL,
  `Schedue_Id` int(30) NOT NULL,
  `Member_Id` int(30) NOT NULL,
  `Mode` text NOT NULL,
  `Account_No` text NOT NULL,
  `Amount` int(100) NOT NULL,
  `TCode` varchar(20) NOT NULL,
  PRIMARY KEY (`Member_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickettb`
--

INSERT INTO `tickettb` (`Ticket_Id`, `Schedue_Id`, `Member_Id`, `Mode`, `Account_No`, `Amount`, `TCode`) VALUES
('BZC-1', 290, 33333333, 'MPESA', 'M-P 707070', 350, 'KJ9034HW23'),
('BZC-1', 290, 43434343, 'MPESA', 'M-P 707070', 350, 'MJ4534HW23'),
('BZC-2', 290, 55555555, 'MASTERCARD', 'MC 2345678989', 370, '9999999999'),
('BZC-2', 290, 98787888, 'VISACARD', 'VS 0856732412', 350, '9897888888'),
('BZC-2', 290, 99999999, 'MPESA', 'M-P 707070', 350, 'HM876GFGGG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
