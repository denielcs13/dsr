-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 10:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinaro`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_account`
--

CREATE TABLE `booking_account` (
  `id` int(22) NOT NULL,
  `admin_id` int(22) NOT NULL,
  `filenumber` varchar(255) NOT NULL,
  `dsr_status` int(11) NOT NULL DEFAULT '0',
  `payment_status` int(11) NOT NULL DEFAULT '0',
  `query_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_account`
--

INSERT INTO `booking_account` (`id`, `admin_id`, `filenumber`, `dsr_status`, `payment_status`, `query_id`) VALUES
(1, 1, 'DTNOI00009', 1, 1, '15'),
(2, 1, 'DTNOI00009', 2, 2, '15'),
(3, 1, 'DTNOI000016', 1, 1, '17'),
(4, 1, 'DTNEW000020', 3, 1, '21'),
(5, 1, 'DTNEW000020', 2, 1, '21'),
(6, 1, 'DTNOI000029', 2, 1, '29'),
(7, 1, 'DTNOI000029', 1, 1, '29'),
(8, 1, 'DTKOL000019', 1, 1, '19'),
(9, 1, 'DTDEL000028', 1, 1, '28'),
(10, 1, 'DTJAI000025', 1, 1, '25'),
(11, 1, 'DTNOH000010', 1, 1, '6'),
(12, 1, 'DTRAM000032', 1, 1, '32'),
(13, 1, 'DTRAM000032', 2, 1, '32'),
(14, 1, 'DTKOL000034', 1, 1, '34'),
(15, 1, 'DTKOL000034', 2, 1, '34'),
(16, 1, 'DTKOL000034', 3, 1, '34'),
(17, 1, 'DTDEL000036', 2, 1, '36'),
(18, 1, 'DTBAN000037', 10, 1, '37'),
(19, 1, 'DTMUR000039', 1, 1, '39'),
(20, 1, 'DTCIK000041', 1, 1, '41'),
(21, 1, 'DTMOU000042', 2, 1, '42'),
(22, 1, 'DTRAM000043', 2, 1, '43'),
(23, 1, 'DTSIK000044', 2, 1, '44');

-- --------------------------------------------------------

--
-- Table structure for table `calling_entry`
--

CREATE TABLE `calling_entry` (
  `id` int(11) NOT NULL,
  `tag_id` varchar(100) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  `agent_name` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(150) NOT NULL,
  `website` varchar(500) NOT NULL,
  `alter_mobile` varchar(13) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calling_entry`
--

INSERT INTO `calling_entry` (`id`, `tag_id`, `comp_name`, `agent_name`, `address`, `mobile`, `email`, `city`, `website`, `alter_mobile`, `status`, `admin_id`) VALUES
(1, 'DNT000001', 'c2shub', 'Pankaj', 'patna', '9708208612', 'pankajc2shub@gmail.com', 'Patna', 'www.c2shub.com', '9162302998', 1, 1),
(3, 'DNT000003', 'pankaj', 'Rohit', 'Delhi', '9891335539', 'aniket@gmail.com', 'Delhi NCR ', 'www.destinarotourism.com', '9638527410', 1, 1),
(4, 'DNT000004', 'the hotel organization', 'BRIJESH GUPTA', 'NEAR JOLLY GRANT AIRPORT, DEHRADUN, UTTRAKHAND', '8477051111', 'gircounty@gmail.com', 'DEHRADUN', 'www.thehotelorgaization.com', '9898133553', 1, 1),
(5, 'DNT000005', 'destinaro tourism', 'dev chatterjee', 'kolkata', '8777706569', 'dchatterjee@destinarotourism.com', 'kolkata', 'www.destinarotourism.com', 'no', 1, 1),
(6, 'DNT000006', 'DESTINARO TOURISM', 'RINKI DAS', 'KOLKATA', '7890444785', 'rdas@destinarotourism.com', 'kolkata', '00000', '00000', 1, 1),
(12, 'DNT000007', 'HOTEL TECH EXPERT', 'arjun', 'bihar', '9667686312', 'g@gmail.com', 'lucknow', 'www.g.com', '8888888888', 1, 1),
(13, 'DNT000008', 'axisroom', 'arvind', 'himachal', '8523697410', 'room@gmail.com', 'shimla', 'www.room.com', '7412369852', 1, 1),
(14, 'DNT000009', 'Xenium Holidays', 'Sunil', 'New delhi', '9990639911', 'self15@xeniumholidays.com', 'New Delhi', 'www.xeniumholidays.com', '9999999999', 1, 1),
(15, 'DNT000010', 'Jai Bharat Hospitality', 'Jai Bharat', '13A,/95 W.E.A.Brahampuri', '9312721509', 'info@jaibharathospitality.com', 'DELHI', 'NIL', '8882165442', 1, 1),
(23, 'DNT000002', 'rwrw', 'iuu', 'poipoip', '879797779', 'pramod_dhage@yahoo.com', 'BHIWADI', 'w3school.com', '8743000995', 1, 1),
(24, 'DNT000011', 'ram travels', 'ram thakurq', 'laxmi nagar', '9667686311', 'ram@gmail.com', 'delhi', 'www.ramtravel.com', '9667686310', 1, 1),
(25, 'DNT000012', 'gfgsfdg', 'fdfdg', 'fgfds', '9876543210', 'singhvishal120012@gmail.com', 'fgf', 'fsgfd', '', 1, 1),
(26, 'DNT000013', 'KOlkata Tourq', 'Radhey', 'Near Temple , ', '7897897890', 'radhey@gmail.com', 'Kolkata', 'www.radhey.com', '9879870987', 1, 1),
(27, 'DNT000014', 'wWEWEW', '2RWERRR', 'WQRWRWR', '7777777777', 'singhvishal120012@gmail.com', 'SADADASDSD', 'SADSADSAD', 'SADSADSAD', 1, 1),
(28, 'DNT000015', 'veere the wedding', 'veere the wedding', 'Mumbai', '8750342679', 'veere@gmail.com', 'mumbai', 'ZxZCCC', '2322444434', 1, 1),
(29, 'DNT000016', 'delhi tour', 'raju delhi', 'vishal tower', '7412589630', '78@gmail.com', 'delhi', 'www.delhitour.com', '8523697410', 1, 1),
(30, 'DNT000017', 'WWE  Tour', 'ram', 'ramanagar', '8888888888', '8888@gmail.com', 'Ramanagar', 'www.ramnagar.com', '5555555555', 1, 1),
(31, 'DNT000018', 'KBC', 'john', 'Mumbai', '5858585858', 'seriyec@mailhex.com', 'Mumbai', 'www.kbc.com', '7878787989', 1, 1),
(32, 'DNT000019', 'ramesh tour', 'ramesh', 'varanshi', '9090909090', 'ramesh@gmail.com', 'kashi', 'www.kashi.com', '8088008080', 1, 1),
(33, 'DNT000020', 'ramesh tour', 'Sanjay', 'Ramgadh', '9654806014', 'sanjay@gmail.com', 'rampur', 'www.sanjay.com', '9999058540', 1, 1),
(34, 'DNT000021', 'sumit Das', 'Sumit Das ', 'Kolkata', '6060660606', 'sumit@gmail.com', 'Kolkata', 'www.sumit.com', '5050505050505', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dsrstatus`
--

CREATE TABLE `dsrstatus` (
  `id` int(22) NOT NULL,
  `file_number` varchar(255) NOT NULL,
  `payment_status` int(22) NOT NULL,
  `payment_status1` int(22) NOT NULL,
  `payment_status2` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsrstatus`
--

INSERT INTO `dsrstatus` (`id`, `file_number`, `payment_status`, `payment_status1`, `payment_status2`) VALUES
(1, 'DTNEW000020', 0, 1, 2),
(2, 'DTNOI000016', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `float_query`
--

CREATE TABLE `float_query` (
  `id` int(11) NOT NULL,
  `agent_tag_id` varchar(100) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `packages` int(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `packages_city` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_pax` int(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `admin_id` int(11) NOT NULL,
  `adult` int(11) NOT NULL DEFAULT '0',
  `child` int(11) NOT NULL DEFAULT '0',
  `infants` int(11) NOT NULL DEFAULT '0',
  `file_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `float_query`
--

INSERT INTO `float_query` (`id`, `agent_tag_id`, `cust_name`, `mobile`, `email`, `city`, `packages`, `duration`, `packages_city`, `start_date`, `end_date`, `total_pax`, `status`, `admin_id`, `adult`, `child`, `infants`, `file_number`) VALUES
(1, 'DNT000001', 'pankaj', '9162302992', 'paryan9308@gmail.com', 'Patna', 12405, '4', 'Patna', '2018-02-20', '2018-02-27', 18, 1, 1, 0, 0, 0, 'DTPAT000018'),
(2, 'DNT000002', 'Prakash', '9835609445', 'prakash@gmail.com', 'Danapur', 1146, '5', 'Patna', '2018-02-20', '2018-02-26', 0, 1, 1, 0, 0, 0, 'DTDAN000014'),
(3, 'DNT000001', 'Vishal ', '9708208612', 'vishal@gmail.com', 'Noida', 1878, '3', 'Noida', '2018-02-22', '2018-02-26', 18, 1, 1, 0, 0, 0, 'DTNOI000013'),
(4, 'DNT000002', 'pankaj', '9999999999', 'paryan9308@gmail.com', 'nohsa', 12405, '1', 'nohsa', '2018-02-27', '2018-02-28', 18, 1, 1, 0, 0, 0, 'DTNOH000012'),
(5, 'DNT000002', 'pankaj', '9999999999', 'paryan9308@gmail.com', 'nohsa', 12405, '1', 'nohsa', '2018-02-27', '2018-02-28', 18, 1, 1, 0, 0, 0, 'DTNOH000011'),
(6, 'DNT000001', 'Aniket', '9708208612', 'aniket@gmail.com', 'nohsa', 12400, '3', 'nohsa', '2018-02-14', '1970-01-01', 18, 1, 1, 0, 0, 0, 'DTNOH000010'),
(7, 'DNT000003', 'Brajesh', '9891335539', 'brajesh@gmail.com', 'Noida', 20040, '6', 'Noida1', '2018-02-21', '2018-02-23', 18, 1, 1, 0, 0, 0, 'DTNOI00008'),
(8, 'DNT000003', 'Ravi', '9187646455', 'ravi@gmail.com', 'Patna', 20000, '4', 'Patna', '2018-02-23', '2018-02-27', 18, 1, 1, 0, 0, 0, 'DTPAT00001'),
(9, 'DNT000003', 'akbar travels', '9999999999', 'dchatterjee@destinarotourism.com', 'kolkata', 0, '3', 'sikkim', '2018-03-20', '2018-03-28', 0, 1, 1, 0, 0, 0, 'DTKOL00005'),
(10, 'DNT000004', 'shweta chaurasiya', '7827136227', 'shwetachaurasiya9@gmail.com', 'noida', 1000, '2', 'manali', '2018-03-31', '2018-04-01', 18, 1, 1, 0, 0, 0, 'DTNOI00004'),
(11, 'DNT000004', 'Vishal', '9689133333', 'g@gmail.com', 'noida', 0, '1', 'jaipur', '2018-03-28', '2018-03-30', 5, 1, 1, 0, 0, 0, 'DTNOI00007'),
(12, 'DNT000004', 'Vishal', '9689133333', 'g@gmail.com', 'noida', 0, '1', 'jaipur', '2018-03-28', '2018-03-30', 5, 1, 1, 3, 0, 0, 'DTNOI00003'),
(13, 'DNT000004', 'Vishal', '9689133333', 'g@gmail.com', 'noida', 0, '1', 'jaipur', '2018-03-28', '2018-03-30', 5, 1, 1, 0, 0, 0, 'DTNOI00002'),
(14, 'DNT000004', 'the Hotel organization', '9891335539', 'thehotelorganization@gmail.com', 'Delhi/NCR', 0, '2', 'Shimla', '2018-03-29', '2018-03-31', 2, 1, 1, 2, 0, 0, 'DTDEL00006'),
(15, 'DNT000004', 'c2s hub', '9876543210', 'sales@c2shub.com', 'noida', 0, '2', 'kolkata', '2018-03-29', '2018-03-31', 2, 1, 1, 2, 0, 0, 'DTNOI00009'),
(16, 'DNT000004', 'Hotel Tech Expert', '9667686312', 'hoteltechexpet@gmail.com', 'delhi', 0, '3', 'Kolkata', '2018-04-30', '2018-05-03', 4, 1, 1, 3, 1, 0, 'DTDEL000015'),
(17, 'DNT000007', 'hotel tech expert', '9667686312', 'g@gmail.com', 'noida', 0, '2', 'SHIMLA , MANALI', '2018-04-30', '2018-05-02', 10, 1, 1, 8, 2, 2, 'DTNOI000016'),
(18, 'DNT000008', 'axisroom', '8529637414', 'g@mail.com', 'shimla', 0, '4', 'shimla manali', '2018-04-12', '1970-01-01', 5, 1, 1, 10, 2, 2, 'DTSHI000017'),
(19, 'DNT000001', 'destinaro', '9999999999', 'dchatterjee@destinarotourism.com', 'kolkata', 0, 'select', 'sikkim', '2018-04-27', '2018-04-28', 6, 1, 1, 0, 0, 0, 'DTKOL000019'),
(20, 'DNT000005', 'Destinaro Tourism', '8777706569', 'D@gmail.com', 'Kolkta', 0, '2', 'Kolktata', '2018-04-30', '2018-05-02', 5, 1, 1, 4, 1, 0, 'DTKOL000021'),
(21, 'DNT000009', 'Xeninum Holidays', '9999999999', 'sales15@xeniumholidays.com', 'New Delhi', 0, '5', 'Gangtok- Darjeeling', '2018-06-17', '2018-06-22', 14, 1, 1, 12, 2, 0, 'DTNEW000020'),
(22, 'DNT000001', 'Relicare  Educursions and Holidays', '98290-8424', 'vikasteotia@gmail.com', 'JODHPUR', 0, '6', 'DARJEELING', '2018-05-15', '2018-05-21', 10, 1, 1, 0, 0, 0, 'DTJOD000023'),
(23, 'DNT000001', 'Relicare  Educursions and Holidays', '98290-8424', 'vikasteotia@gmail.com', 'JODHPUR', 0, '6', 'DARJEELING', '2018-05-15', '2018-05-21', 10, 1, 1, 0, 0, 0, 'DTJOD000022'),
(24, 'DNT000001', 'DESTINARO TOURISM', '7890444785', 'rdas@destinarotourism.com', 'kolkata', 0, '4', 'Gangtok/Darjeeling', '2018-04-18', '2018-04-22', 8, 1, 1, 0, 0, 0, 'DTKOL000024'),
(25, 'DNT000001', 'TRAVEL CAFE', '7890444785', 'sales@destinarotourism.com', 'Jaipur', 0, '3', 'Gangtok', '2018-04-28', '2018-05-01', 6, 1, 1, 0, 0, 0, 'DTJAI000025'),
(26, 'DNT000005', 'destinaro', '8777706569', 'dchatterjee@destinarotourism.com', 'kolkata', 0, '4', 'sikkim', '2018-05-27', '2018-05-31', 6, 1, 1, 4, 2, 0, 'DTKOL000026'),
(27, 'DNT000009', 'test', '9876543210', 'g@gmail.com', 'delhi', 0, '2', 'Dehi', '2018-05-31', '2018-06-02', 3, 1, 1, 3, 0, 0, 'DTDEL000027'),
(28, 'DNT000001', 'xyz', '9877665568', 'kuldeep@gmail.com', 'delhi', 0, '1', 'dehradun', '2018-06-21', '2018-06-22', 2, 1, 1, 0, 0, 0, 'DTDEL000028'),
(29, 'DNT000001', 'C2s Hub', '9876543210', 'g@gmail.com', 'noida', 0, '3', 'Gangtok', '2018-06-29', '2018-07-02', 0, 1, 1, 5, 5, 2, 'DTNOI000029'),
(30, 'DNT000003', 'PRAMOD', '8743000995', 'pramod_dhage@yahoo.com', 'BHIWADI', 0, '2', 'Denton', '2018-06-20', '2018-06-22', 0, 1, 1, 3, 2, 0, 'DTBHI000030'),
(31, 'DNT000001', 'Aniket', '8743000995', 'pramod_dhage@yahoo.com', 'delhi', 0, '3', 'shimla', '2018-07-23', '2018-07-26', 0, 1, 1, 2, 5, 0, 'DTDEL000031'),
(32, 'DNT000011', 'ram travels', '9667686311', 'ram@gmaill.com', 'ram nagar', 0, '1', 'dubai', '2018-11-28', '2018-11-29', 2, 1, 1, 2, 0, 0, 'DTRAM000032'),
(33, 'DNT000011', 'gfh', '7777777777', 'singhvishal120012@gmail.com', 'gfhfg', 0, '1', 'mumbai', '2018-11-29', '2018-11-30', 3, 1, 1, 5, 0, 0, 'DTGFH000033'),
(34, 'DNT000013', 'kolkata tour', '7890788909', 'radhey@gmail.com', 'kolkata', 0, '2', 'delhi', '2018-11-30', '2018-12-02', 4, 1, 1, 3, 1, 1, 'DTKOL000034'),
(35, 'DNT000013', 'xyz', '8750342675', 'veere@gmail.com', 'mumbai', 0, '1', 'Mumbai', '2018-11-28', '2018-11-29', 1, 1, 1, 1, 1, 1, 'DTMUM000035'),
(36, 'DNT000016', 'delhi tour', '8527410963', 'ghgkgj@gmail.com', 'delhi', 0, '2', 'mumbai', '2018-11-29', '2018-12-01', 6, 1, 1, 5, 2, 1, 'DTDEL000036'),
(37, 'DNT000016', 'xyg', '1234567679', '67@gmail.com', 'Lucknow', 0, '1', 'Banglore', '2018-11-12', '2018-11-13', 2, 1, 1, 1, 2, 2, 'DTBAN000037'),
(38, 'DNT000017', 'wwww', '1111111111', 'vghghV@gmail.com', 'ramanagar', 0, '2', 'manali', '2018-11-28', '2018-11-30', 5, 1, 1, 3, 1, 1, 'DTMAN000038'),
(39, 'DNT000018', 'Butler', '4545454545', 'seriye@mailhex.com', 'Muradabad', 0, '2', 'Daman Deev', '2018-11-20', '2018-11-22', 3, 1, 1, 1, 2, 3, 'DTMUR000039'),
(40, 'DNT000018', 'SSSSS', '5543543543', 'SASASAS@GMAIL.COM', 'Delhi', 0, '1', 'Londan', '2018-11-25', '2018-11-26', 11, 1, 1, 1, 2, 3, 'DTDEL000040'),
(41, 'DNT000018', 'wwww', '4544444444', 'w@gmail.vo', 'agra', 0, '1', 'cikago', '2018-10-29', '2018-10-30', 1, 1, 1, 1, 1, 1, 'DTCIK000041'),
(42, 'DNT000019', 'ramesh tour', '9090909090', 'ramesh@gmail.com', 'varanshi', 0, '2', 'mountabu', '2018-11-29', '2018-12-01', 5, 1, 1, 2, 2, 1, 'DTMOU000042'),
(43, 'DNT000020', 'ramesh', '9654806014', 'sanjay@gmail.com', 'ramgadh', 0, '2', 'ramgadh', '2018-11-28', '2018-11-30', 5, 1, 1, 2, 2, 1, 'DTRAM000043'),
(44, 'DNT000021', 'sumit', '6066060606', 'sumit@gmail.com', 'Kolkata', 0, '1', 'sikkim', '2018-11-30', '2018-12-01', 19, 1, 1, 20, 4, 2, 'DTSIK000044');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `admin_id`) VALUES
(2, 'Keepsa Residency', '1'),
(3, 'Hotel Saad', '1'),
(4, 'Chitrakoot Residency', '1'),
(5, 'Bhumzang Residency', '1'),
(8, 'CHAS Narayani Continental, Gangtok', '1'),
(7, 'CHAS Sian Resort & Spa, Darjeeling', '1'),
(9, 'CHAS Park Palace, Lachung', '1'),
(10, 'CHAS Rajdarbar Hotel & Banquets, Siliguri ', '1'),
(11, 'CHAS Sanderling Hotel, Darjeeling ', '1'),
(13, 'CENTRAL NIRVANA RESORT & CENTRAL GLENEAGLES RESORT', '1'),
(14, 'CENTRAL HERITAGE RESORT & SPA', '1'),
(15, 'MAGPIE THE CHESTNUT RETREAT - PELLING', '1'),
(16, 'The Chumbi Mountain ', '1'),
(17, 'GARDEN REACH', '1'),
(18, 'HOTEL TRES', '1'),
(19, 'SOODS GARDEN RETREAT', '1'),
(20, 'PINK DOOR', '1'),
(21, 'SUMMIT BARSANA RESORT & SPA', '1'),
(22, 'NA', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inclusion`
--

CREATE TABLE `inclusion` (
  `id` int(11) NOT NULL,
  `inclusion_title` varchar(255) NOT NULL,
  `inclusion_desc` text NOT NULL,
  `inc_rate` varchar(10) NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inclusion`
--

INSERT INTO `inclusion` (`id`, `inclusion_title`, `inclusion_desc`, `inc_rate`, `admin_id`) VALUES
(1, 'Honeymoon Cake', 'Cake', '700', '1'),
(3, 'Honeymoon', 'Flower Bed Decoration', '800', '1'),
(5, 'Dinner', 'Candle Night', '1200', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` tinyint(10) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `ownername` text NOT NULL,
  `logo` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `mobile`, `ownername`, `logo`, `image`) VALUES
(2, 'admin', '123456', '9540007414', 'amit sharma', '', ''),
(3, 'destinaro', 'a6db097bec3c0fedd5993f1700a7c39a', '9540007914', 'Peter', '', ''),
(4, 'accounts@destinarotourism.com', 'b7016c5e14e378d7c76ee8ac06f033df', '9540007814', 'Parker', '', ''),
(5, 'Sales@destinarotourism.com', 'd043caf4ce3f60e28d2b828a14dc8326', '9541007414', 'Anthony', '', ''),
(6, 'dchatterjee@destinarotourism.com', '85284541080936467b88ed4e6887af77', '9540407414', 'John', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `office_expance`
--

CREATE TABLE `office_expance` (
  `id` int(22) NOT NULL,
  `date` date NOT NULL,
  `voucher_no` varchar(255) NOT NULL,
  `voucher_date` date NOT NULL,
  `particulers` varchar(255) NOT NULL,
  `payto` varchar(255) NOT NULL,
  `billno` varchar(255) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `cheuqe_no` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `admin_id` int(22) NOT NULL,
  `status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_expance`
--

INSERT INTO `office_expance` (`id`, `date`, `voucher_no`, `voucher_date`, `particulers`, `payto`, `billno`, `payment_mode`, `cheuqe_no`, `amount`, `admin_id`, `status`) VALUES
(1, '2018-04-17', '12345', '1970-01-01', 'atm bill', 'bill atm', '895632', 'chaque', '789456', '80000', 1, 1),
(2, '2018-04-17', '12345', '1970-01-01', 'atm bill', 'bill atm', '895632', 'chaque', '789456', '80000', 1, 1),
(3, '2018-04-18', '12345', '1970-01-01', 'atm bill', 'bill atm', '895632', 'chaque', '789456', '80000', 1, 1),
(4, '2018-04-27', '12345', '2018-04-30', 'atm bill', 'bill atm', '895632', 'chaque', '789456', '80000', 1, 1),
(0, '2018-04-21', 'mkmkmm', '2018-04-11', 'mkkkkk', 'mmm', 'mmm', 'Online', 'kkkk', 'kkk', 1, 1),
(0, '2018-04-24', '00', '2018-04-24', 'office ful', 'sumit das', 'nil', 'select', 'nil', '100', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_dsr`
--

CREATE TABLE `online_dsr` (
  `id` int(11) NOT NULL,
  `online_dsr_id` varchar(10) NOT NULL,
  `day` int(11) NOT NULL,
  `date` date NOT NULL,
  `sector_code` varchar(10) NOT NULL,
  `sector_code_name` varchar(100) NOT NULL,
  `itinerary` varchar(155) NOT NULL,
  `itinerary_desc` text NOT NULL,
  `hotel_name` varchar(155) NOT NULL,
  `meal_plan` varchar(20) NOT NULL,
  `no_rooms` varchar(10) NOT NULL,
  `dbl_rate` varchar(20) NOT NULL,
  `ext_bed_rate` varchar(20) NOT NULL,
  `cwb_rate` varchar(20) NOT NULL,
  `cnb_rate` varchar(20) NOT NULL,
  `vehicle1` varchar(100) NOT NULL,
  `vehicle1_no` varchar(100) NOT NULL,
  `vehicle1_rate` varchar(20) NOT NULL,
  `vehicle2` varchar(100) NOT NULL,
  `vehicle2_no` varchar(100) NOT NULL,
  `vehicle2_rate` varchar(20) NOT NULL,
  `file_no` varchar(30) NOT NULL,
  `admin_id1` varchar(20) NOT NULL,
  `query_id1` varchar(20) NOT NULL,
  `sector_code_id` varchar(10) NOT NULL,
  `dsr_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_dsr`
--

INSERT INTO `online_dsr` (`id`, `online_dsr_id`, `day`, `date`, `sector_code`, `sector_code_name`, `itinerary`, `itinerary_desc`, `hotel_name`, `meal_plan`, `no_rooms`, `dbl_rate`, `ext_bed_rate`, `cwb_rate`, `cnb_rate`, `vehicle1`, `vehicle1_no`, `vehicle1_rate`, `vehicle2`, `vehicle2_no`, `vehicle2_rate`, `file_no`, `admin_id1`, `query_id1`, `sector_code_id`, `dsr_status`) VALUES
(1, '1', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'nota', 'map', '2', '20000', '1000', '100', '100', 'suzuki', '2', '10000', '', '', '', 'DTNOI00007', '1', '11', '1', 1),
(2, '1', 2, '2018-05-01', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'abx', 'cp', '1', '20000', '1000', '1000', '100', '', '', '', '', '', '', 'DTNOI00007', '1', '11', '6', 1),
(4, '3', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'Hotel', 'Map', '2', '20000', '1000', '100', '', '', '', '', '', '', '', 'DTPAT00001', '1', '8', '1', 1),
(5, '4', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'HOTEL DELHI', 'MAP', '5', '4000', '1000', '800', '200', '', '', '', 'sumo', '1', '5000', 'DTNOI000016', '1', '17', '1', 1),
(6, '5', 1, '2018-04-23', 'DEL', 'DELHI', 'NO', '', 'hotel delhi', 'map', '5', '5000', '4000', '3000', '200', 'sumo', '1', '5000', '', '', '', 'DTSHI000017', '1', '18', '1', 1),
(7, '6', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'nota', 'map', '2', '20000', '1000', '100', '100', 'suzuki', '2', '10000', '', '', '', 'DTNOI00007', '1', '11', '1', 2),
(8, '6', 2, '2018-05-01', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'abx', 'cp', '1', '20000', '1000', '1000', '100', '', '', '', '', '', '', 'DTNOI00007', '1', '11', '6', 2),
(9, '7', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'nota', 'map', '2', '20000', '1000', '100', '100', 'suzuki', '2', '10000', '', '', '', 'DTNOI00007', '1', '11', '1', 3),
(10, '7', 2, '2018-05-01', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'abx', 'cp', '1', '20000', '1000', '1000', '100', '', '', '', '', '', '', 'DTNOI00007', '1', '11', '6', 3),
(11, '7', 3, '2018-05-02', 'DEL', 'DELHI', 'NO', '', 'delhi', 'ep', '2', '2000', '1000', '', '', '', '', '', '', '', '', 'DTNOI00007', '1', '11', '1', 3),
(12, '8', 1, '2018-04-23', 'DEL', 'DELHI', 'NO', '', 'hotel delhi', 'map', '5', '5000', '4000', '3000', '2000', 'sumo', '1', '5000', '', '', '', 'DTSHI000017', '1', '18', '1', 2),
(13, '8', 2, '2018-04-24', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'SHOT', 'MAP', '5', '4000', '3000', '2000', '2000', 'AUlto', '1', '4000', '', '', '', 'DTSHI000017', '1', '18', '6', 2),
(14, '9', 1, '2018-04-23', 'DEL', 'DELHI', 'NO', '', 'hotel delhi', 'map', '5', '5000', '4000', '3000', '2000', 'sumo', '1', '5000', '', '', '', 'DTSHI000017', '1', '18', '1', 3),
(15, '9', 2, '2018-04-24', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'SHOT', 'MAP', '5', '4000', '3000', '2000', '2000', 'AUlto', '1', '4000', '', '', '', 'DTSHI000017', '1', '18', '6', 3),
(16, '9', 3, '2018-04-25', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'hghgu', 'MAP', '5', '6000', '5000', '4000', '3000', '', '', '', 'swift', '1', '6500', 'DTSHI000017', '1', '18', '6', 3),
(17, '10', 1, '2018-04-30', 'DEL', 'DELHI', 'NO', '', 'Hotel hujb', 'MAP', '4', '4000', '3000', '2000', '1000', 'SUmo', '1', '5000', '', '', '', 'DTKOL000019', '1', '19', '1', 1),
(18, '10', 2, '2018-05-01', 'SHL', 'Shimla', 'Full Day Visit In Shimla', '	Full Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In ShimlaFull Day Visit In Shimla', 'Hotle njcs', 'CP', '4', '5000', '4000', '3000', '2000', '', '', '', 'Aulto', '1', '6000', 'DTKOL000019', '1', '19', '6', 1),
(19, '11', 1, '2018-07-17', 'NJP-GTK', 'Gangtok', 'Railway station to Gangtok', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '3500', '', '', '', 'DTNEW000020', '1', '21', '7', 1),
(20, '11', 2, '2018-07-18', 'GTK-T+B', 'Gangtok', 'Gangtok Chhangule Visit', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '4000', '', '', '', 'DTNEW000020', '1', '21', '8', 1),
(21, '11', 3, '2018-07-19', 'GTK Local ', 'Gangtok', 'Gangtok local sightseen', '', 'Sikkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'wagnor', '4', '2200', '', '', '', 'DTNEW000020', '1', '21', '9', 1),
(22, '11', 4, '2018-07-20', 'GTK-DRJ', 'Darjeeling', 'Gangtok to darjeeling', '', 'Yuma', 'MAP', '5', '1900', '400', '', '200', 'SUMO', '2', '3200', '', '', '', 'DTNEW000020', '1', '21', '10', 1),
(23, '11', 5, '2018-07-21', 'DRJ local ', 'Darjeeling', 'Darjleeing Local Sightseen', '', 'Yuma', 'MAP', '5', '1900', '400', '', '200', 'Sumo', '2', '2500', '', '', '', 'DTNEW000020', '1', '21', '11', 1),
(24, '11', 6, '2018-04-22', 'DRJ-NJP', 'NJP Rail', 'Darjeeling to NJP Railway', '', '', '', '', '', '', '', '', 'Sumo', '2', '2600', '', '', '', 'DTNEW000020', '1', '21', '12', 1),
(25, '12', 1, '2018-07-17', 'NJP-GTK', 'Gangtok', 'Railway station to Gangtok', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '3500', '', '', '', 'DTNEW000020', '1', '21', '7', 2),
(26, '12', 2, '2018-07-18', 'GTK-T+B', 'Gangtok', 'Gangtok Chhangule Visit', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '4000', '', '', '', 'DTJOI000025', '1', '25', '8', 2),
(27, '12', 3, '2018-07-19', 'GTK Local ', 'Gangtok', 'Gangtok local sightseen', '', 'Sikkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'wagnor', '4', '2200', '', '', '', 'DTNEW000020', '1', '21', '9', 2),
(28, '12', 4, '2018-07-20', 'GTK-DRJ', 'Darjeeling', 'Gangtok to darjeeling', '', 'Yuma', 'MAP', '5', '1900', '400', '', '200', 'SUMO', '2', '3200', '', '', '', 'DTNEW000020', '1', '21', '10', 2),
(29, '12', 5, '2018-07-21', 'DRJ local ', 'Darjeeling', 'Darjleeing Local Sightseen', '', 'kjdkhjd', 'MAP', '5', '2000', '400', '', '200', 'Sumo', '2', '2500', '', '', '', 'DTNEW000020', '1', '21', '11', 2),
(30, '12', 6, '2018-04-22', 'DRJ-NJP', 'NJP Rail', 'Darjeeling to NJP Railway', '', '', '', '', '', '', '', '', 'Sumo', '2', '2600', '', '', '', 'DTNEW000020', '1', '21', '12', 2),
(31, '13', 1, '2018-07-17', 'NJP-GTK', 'Gangtok', 'Railway station to Gangtok', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '3500', '', '', '', 'DTNEW000020', '1', '21', '7', 3),
(32, '13', 2, '2018-07-18', 'GTK-T+B', 'Gangtok', 'Gangtok Chhangule Visit', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '4000', '', '', '', 'DTNEW000020', '1', '21', '8', 3),
(33, '13', 3, '2018-07-19', 'GTK Local ', 'Gangtok', 'Gangtok local sightseen', '', 'Sikkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'wagnor', '4', '2200', '', '', '', 'DTNEW000020', '1', '21', '9', 3),
(34, '13', 4, '2018-07-20', 'GTK-DRJ', 'Darjeeling', 'Gangtok to darjeeling', '', 'djfhdh', 'MAP', '5', '1900', '400', '', '200', 'SUMO', '2', '3200', '', '', '', 'DTNEW000020', '1', '21', '10', 3),
(35, '13', 5, '2018-07-21', 'DRJ local ', 'Darjeeling', 'Darjleeing Local Sightseen', '', 'kjdkhjd', 'MAP', '5', '2000', '400', '', '200', 'Sumo', '2', '2500', '', '', '', 'DTNEW000020', '1', '21', '11', 3),
(36, '13', 6, '2018-04-22', 'DRJ-NJP', 'NJP Rail', 'Darjeeling to NJP Railway', '', '', '', '', '', '', '', '', 'Sumo', '2', '2600', '', '', '', 'DTNEW000020', '1', '21', '12', 3),
(37, '14', 1, '2018-04-30', 'NJP-GTK', 'GANGTOK', 'DAY 01: NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.', 'Hotel Saad', 'map', '2', '2000', '1000', '1000', '1000', 'Innova', '2', '1000', 'alto', '2', '2000', 'DTNOI00009', '1', '15', '13', 1),
(38, '15', 1, '2018-04-30', 'NJP-GTK', 'GANGTOK', 'DAY 01: NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.', 'Hotel Saad', 'map', '2', '2000', '1000', '1000', '1000', 'Innova', '2', '1000', 'alto', '2', '2000', 'DTNOI00009', '1', '15', '13', 2),
(39, '16', 1, '2018-07-17', 'NJP-GTK', '', '', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '3500', '', '', '', 'DTNEW000020', '1', '21', '7', 4),
(40, '16', 2, '2018-07-18', 'GTK-T+B', '', '', '', 'Sikkkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'Sumo', '2', '4000', '', '', '', 'DTNEW000020', '1', '21', '8', 4),
(41, '16', 3, '2018-07-19', 'GTK Local ', '', '', '', 'Sikkim Retreat', 'MAP', '5', '1800', '680', '', '350', 'wagnor', '4', '2200', '', '', '', 'DTNEW000020', '1', '21', '9', 4),
(42, '16', 4, '2018-07-20', 'GTK-DRJ', '', '', '', 'Yuma', 'MAP', '5', '1900', '400', '', '200', 'SUMO', '2', '3200', '', '', '', 'DTNEW000020', '1', '21', '10', 4),
(43, '16', 5, '2018-07-21', 'DRJ local ', '', '', '', 'Yuma', 'MAP', '5', '1900', '400', '', '200', 'Sumo', '2', '2500', '', '', '', 'DTNEW000020', '1', '21', '11', 4),
(44, '16', 6, '2018-04-22', 'DRJ-NJP', '', '', '', 'NA', '', '', '', '', '', '', 'Sumo', '2', '2600', '', '', '', 'DTNEW000020', '1', '21', '12', 4),
(45, '17', 1, '2018-05-24', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Keepsa Residency', 'MAP', '2', '7500', '2000', '', '', 'INNOVA / XYLO /SCORPIO', '1', '3200', '', '', '', 'DTKOL000026', '1', '26', '13', 1),
(46, '17', 2, '2018-05-25', 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n', 'Keepsa Residency', 'MAP', '2', '7500', '2000', '', '', 'INNOVA / XYLO /SCORPIO', '1', '3200', '', '', '', 'DTKOL000026', '1', '26', '17', 1),
(47, '17', 3, '2018-05-26', 'GTK - DRJ ', 'DARJEELING', 'GANGTOK â€“ DARJEELING (115KMS / 4 HRS)', 'After a delightful breakfast check out from hotel and transfer to Darjeeling (6,710 ft.), situated in West Bengal. Check-in to hotel & rest of the day is free at leisure. Spend overnight at hotel in Darjeeling.	', 'CHAS Sian Resort &amp; Spa, Darjeeling', 'MAP', '2', '7500', '2000', '', '', 'INNOVA / XYLO /SCORPIO', '1', '3200', '', '', '', 'DTKOL000026', '1', '26', '22', 1),
(48, '17', 4, '2018-05-27', 'DRJ LOCAL ', 'DARJEELING', ' DARJEELING LOCAL S.S ', 'Today get ready early morning by 4 a.m to witness the spectacular sunrise over Mt. Khangchendzongha (28,208 ft. ,Worldâ€™s 3rd highest peak ) at Tiger Hill. Its a destination by itself offering not just great views during sunrise; its a place where you can soak yourself with Himalayan serenity anytime during the day. Thrill yourself by visiting World famous Ghoom Monastery and Batasia Loop on your way back. Batasia Loop is fascinating to watch the toy train with its way round the loop. The War Memorial constructed in the memory of brave sons of Darjeeling who died in different wars since 1947, is worth a visit. A glorious view of snowy peak and town can be seen from this place. After a sumptuous breakfast visit Himalayan Mountaineering Institute, P.N. Zoological Park (Thursday Closed), Tenzing Rock, Tibetan Refugee  self-help Centre (Sunday closed) Tea Garden, Japanese Temple, Peace Pagoda and Ropeway (Ticket cost not included and will be approx Rs.180 per person-directly payable).				', 'CHAS Sian Resort &amp; Spa, Darjeeling', 'MAP', '2', '7500', '2000', '', '', 'INNOVA / XYLO /SCORPIO', '1', '3200', '', '', '', 'DTKOL000026', '1', '26', '19', 1),
(49, '17', 5, '2018-05-28', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', '', '', '', '', '', '', '', 'INNOVA / XYLO /SCORPIO', '1', '3200', '', '', '', 'DTKOL000026', '1', '26', '20', 1),
(50, '18', 1, '2018-06-29', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Bhumzang Residency', 'MAP', '0', '4000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '4000', '', '', '', 'DTNOI000029', '1', '29', '13', 1),
(51, '18', 2, '2018-06-30', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '2', '4000', '', '', '', 'DTNOI000029', '1', '29', '13', 1),
(52, '18', 3, '2018-07-01', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '3', '4000', '', '', '', 'DTNOI000029', '1', '29', '20', 1),
(53, '18', 4, '2018-07-02', 'DRJ LOCAL ', 'DARJEELING', ' DARJEELING LOCAL S.S ', 'Today get ready early morning by 4 a.m to witness the spectacular sunrise over Mt. Khangchendzongha (28,208 ft. ,Worldâ€™s 3rd highest peak ) at Tiger Hill. Its a destination by itself offering not just great views during sunrise; its a place where you can soak yourself with Himalayan serenity anytime during the day. Thrill yourself by visiting World famous Ghoom Monastery and Batasia Loop on your way back. Batasia Loop is fascinating to watch the toy train with its way round the loop. The War Memorial constructed in the memory of brave sons of Darjeeling who died in different wars since 1947, is worth a visit. A glorious view of snowy peak and town can be seen from this place. After a sumptuous breakfast visit Himalayan Mountaineering Institute, P.N. Zoological Park (Thursday Closed), Tenzing Rock, Tibetan Refugee  self-help Centre (Sunday closed) Tea Garden, Japanese Temple, Peace Pagoda and Ropeway (Ticket cost not included and will be approx Rs.180 per person-directly payable).				', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '3', '4000', '', '', '', 'DTNOI000029', '1', '29', '19', 1),
(54, '18', 5, '2018-07-03', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'Bhumzang Residency', '', '0', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '2', '3000', '', '', '', 'DTNOI000029', '1', '29', '20', 1),
(55, '19', 1, '2018-06-29', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Bhumzang Residency', 'MAP', '0', '4000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '4000', '', '', '', 'DTNOI000029', '1', '29', '13', 2),
(56, '19', 2, '2018-06-30', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '2', '4000', '', '', '', 'DTNOI000029', '1', '29', '13', 2),
(57, '19', 3, '2018-07-01', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '3', '4000', '', '', '', 'DTNOI000029', '1', '29', '20', 2),
(58, '19', 4, '2018-07-02', 'DRJ LOCAL ', 'DARJEELING', ' DARJEELING LOCAL S.S ', 'Today get ready early morning by 4 a.m to witness the spectacular sunrise over Mt. Khangchendzongha (28,208 ft. ,Worldâ€™s 3rd highest peak ) at Tiger Hill. Its a destination by itself offering not just great views during sunrise; its a place where you can soak yourself with Himalayan serenity anytime during the day. Thrill yourself by visiting World famous Ghoom Monastery and Batasia Loop on your way back. Batasia Loop is fascinating to watch the toy train with its way round the loop. The War Memorial constructed in the memory of brave sons of Darjeeling who died in different wars since 1947, is worth a visit. A glorious view of snowy peak and town can be seen from this place. After a sumptuous breakfast visit Himalayan Mountaineering Institute, P.N. Zoological Park (Thursday Closed), Tenzing Rock, Tibetan Refugee  self-help Centre (Sunday closed) Tea Garden, Japanese Temple, Peace Pagoda and Ropeway (Ticket cost not included and will be approx Rs.180 per person-directly payable).				', 'Bhumzang Residency', 'MAP', '3', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '3', '4000', '', '', '', 'DTNOI000029', '1', '29', '19', 2),
(59, '19', 5, '2018-07-03', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'Bhumzang Residency', '', '0', '3000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '2', '3000', '', '', '', 'DTNOI000029', '1', '29', '20', 2),
(60, '20', 1, '2018-06-25', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '100', '1000', '2000', '100', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTDEL000028', '1', '28', '13', 1),
(61, '20', 2, '2018-06-26', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '500', '2000', '1000', '100', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTDEL000028', '1', '28', '13', 1),
(62, '20', 3, '2018-06-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '2000', '1000', '2000', '1000', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTDEL000028', '1', '28', '13', 1),
(63, '20', 4, '2018-06-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '1000', '2000', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTDEL000028', '1', '28', '13', 1),
(64, '20', 5, '2018-06-29', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '1000', '100', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTDEL000028', '1', '28', '13', 1),
(65, '21', 1, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 1),
(66, '21', 2, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(67, '21', 3, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(68, '21', 4, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(69, '21', 5, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(70, '22', 1, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 1),
(71, '22', 2, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(72, '22', 3, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(73, '22', 4, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(74, '22', 5, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 1),
(75, '23', 1, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 2),
(76, '23', 2, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 2),
(77, '23', 3, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(78, '23', 4, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(79, '23', 5, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(80, '23', 6, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(81, '23', 7, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(82, '23', 8, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(83, '23', 9, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(84, '23', 10, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 2),
(85, '24', 1, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '12000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 3),
(86, '24', 2, '2018-06-18', 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '1500', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTJAI000025', '1', '25', '35', 3),
(87, '24', 3, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(88, '24', 4, '2018-06-19', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(89, '24', 5, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(90, '24', 6, '2018-06-20', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '1000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(91, '24', 7, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(92, '24', 8, '2018-06-21', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '3', '1000', '2000', '2', '3', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(93, '24', 9, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(94, '24', 10, '2018-06-22', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '5', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTJAI000025', '1', '25', '13', 3),
(95, '25', 1, '2018-06-25', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(96, '25', 2, '2018-06-26', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(97, '25', 3, '2018-06-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(98, '25', 4, '2018-06-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(99, '25', 5, '2018-06-29', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(100, '26', 1, '2018-06-25', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(101, '26', 2, '2018-06-26', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(102, '26', 3, '2018-06-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(103, '26', 4, '2018-06-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(104, '26', 5, '2018-06-29', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTKOL000024', '1', '24', '13', 1),
(105, '27', 1, '2018-06-24', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '5', '500', '100', '99', '99', 'SANTAFY CAR', '9', '55', '', '', '', 'DTJOD000022', '1', '23', '13', 1),
(106, '27', 2, '2018-06-25', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '9', '9', '9', '9', 'SANTAFY CAR', '55', '555', '', '', '', 'DTJOD000022', '1', '23', '13', 1),
(107, '27', 3, '2018-06-26', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '7', '7', '7', '7', 'SANTAFY CAR', '545454', '5554345', '', '', '', 'DTJOD000022', '1', '23', '13', 1),
(108, '27', 4, '2018-06-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '66', '87', '99', '9', 'SANTAFY CAR', '5554', '54455445', '', '', '', 'DTJOD000022', '1', '23', '13', 1),
(109, '27', 5, '2018-06-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '1', '67', '77', '87', '98', 'SANTAFY CAR', '5443', '54544', '', '', '', 'DTJOD000022', '1', '23', '13', 1),
(110, '28', 1, '2018-07-10', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTNOH000010', '1', '6', '13', 1),
(111, '28', 2, '2018-07-11', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTNOH000010', '1', '6', '13', 1),
(112, '28', 3, '2018-07-12', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTNOH000010', '1', '6', '13', 1),
(113, '28', 4, '2018-07-13', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'HYUNDUI H1 ', '1', '', '', '', '', 'DTNOH000010', '1', '6', '13', 1);
INSERT INTO `online_dsr` (`id`, `online_dsr_id`, `day`, `date`, `sector_code`, `sector_code_name`, `itinerary`, `itinerary_desc`, `hotel_name`, `meal_plan`, `no_rooms`, `dbl_rate`, `ext_bed_rate`, `cwb_rate`, `cnb_rate`, `vehicle1`, `vehicle1_no`, `vehicle1_rate`, `vehicle2`, `vehicle2_no`, `vehicle2_rate`, `file_no`, `admin_id1`, `query_id1`, `sector_code_id`, `dsr_status`) VALUES
(114, '28', 5, '2018-07-14', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTNOH000010', '1', '6', '13', 1),
(115, '29', 1, '2018-07-10', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 2),
(116, '29', 2, '2018-07-11', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 2),
(117, '29', 3, '2018-07-12', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 2),
(118, '29', 4, '2018-07-13', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'HYUNDUI H1 ', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 2),
(119, '29', 5, '2018-07-14', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 2),
(120, '30', 1, '2018-07-10', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 3),
(121, '30', 2, '2018-07-11', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 3),
(122, '30', 3, '2018-07-12', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 3),
(123, '30', 4, '2018-07-13', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'HYUNDUI H1 ', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 3),
(124, '30', 5, '2018-07-14', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'MAGPIE THE CHESTNUT RETREAT - PELLING', 'MAP', '2', '1000', '2000', '2', '2', 'SUMO / MAXX / BULLERO', '1', '1000', '', '', '', 'DTNOH000010', '1', '6', '13', 3),
(125, '31', 1, '2018-11-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'RP', '2', '15000', '1000', '1000', '100', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTRAM000032', '1', '32', '13', 1),
(126, '31', 2, '2018-11-29', 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n', 'Hotel Saad', 'CP', '2', '10000', '1000', '1000', '100', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTRAM000032', '1', '32', '17', 1),
(127, '32', 1, '2018-11-28', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'RP', '2', '15000', '1000', '1000', '100', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTRAM000032', '1', '32', '13', 2),
(128, '32', 2, '2018-11-29', 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n', 'Hotel Saad', 'CP', '2', '10000', '1000', '1000', '100', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTRAM000032', '1', '32', '17', 2),
(129, '33', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 1),
(130, '34', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1000', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 2),
(131, '35', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 3),
(132, '36', 1, '2018-11-15', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'EP', '2', '4000', '3000', '2000', '1000', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTDEL000036', '1', '36', '13', 1),
(133, '36', 2, '2018-11-16', 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n', 'Hotel Saad', 'CP', '2', '5000', '4000', '3000', '2000', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTDEL000036', '1', '36', '17', 1),
(134, '37', 1, '2018-11-15', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'EP', '2', '4000', '3000', '2000', '1000', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTDEL000036', '1', '36', '13', 2),
(135, '37', 2, '2018-11-16', 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n', 'Hotel Saad', 'CP', '2', '5000', '4000', '3000', '2000', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTDEL000036', '1', '36', '17', 2),
(136, '38', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 1),
(137, '38', 2, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 1),
(138, '39', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 1),
(139, '39', 2, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 1),
(140, '40', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 2),
(141, '40', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 2),
(142, '40', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 2),
(143, '40', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 2),
(144, '41', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 3),
(145, '41', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 3),
(146, '41', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 3),
(147, '41', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 3),
(148, '42', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 4),
(149, '42', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 4),
(150, '42', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 4),
(151, '42', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 4),
(152, '43', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 5),
(153, '43', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 5),
(154, '43', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 5),
(155, '43', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 5),
(156, '44', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 6),
(157, '44', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 6),
(158, '44', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 6),
(159, '44', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 6),
(160, '45', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 7),
(161, '45', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 7),
(162, '45', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 7),
(163, '45', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 7),
(164, '46', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 4),
(165, '47', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 8),
(166, '47', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 8),
(167, '47', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 8),
(168, '47', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 8),
(169, '48', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 9),
(170, '48', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 9),
(171, '48', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 9),
(172, '48', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 9),
(173, '49', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 10),
(174, '49', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 10),
(175, '49', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 10),
(176, '49', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 10),
(177, '50', 1, '2018-12-03', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Rajdarbar Hotel &amp; Banquets, Siliguri ', 'CP', '2', '6000', '5000', '4000', '3000', 'SUMO / MAXX / BULLERO', '', '', '', '', '', 'DTBHI000030', '1', '30', '13', 1),
(178, '51', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 1),
(179, '51', 2, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 1),
(180, '52', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 1),
(181, '52', 2, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 1),
(182, '53', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 2),
(183, '53', 2, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 2),
(184, '53', 3, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 2),
(185, '53', 4, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 2),
(186, '54', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 3),
(187, '54', 2, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 3),
(188, '54', 3, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 3),
(189, '54', 4, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 3),
(190, '55', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 4),
(191, '55', 2, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 4),
(192, '55', 3, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 4),
(193, '55', 4, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 4),
(194, '56', 1, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 5),
(195, '56', 2, '2018-11-05', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Sanderling Hotel, Darjeeling ', 'ep', '2', '2000', '1', '9000', '900', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 5),
(196, '56', 3, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 5),
(197, '56', 4, '2018-11-06', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Narayani Continental, Gangtok', 'cp', '1', '3990', '1', '4000', '9000', '1', '', '', '', '', '', 'DTMUR000039', '1', '39', '13', 5),
(198, '57', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 5),
(199, '58', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 6),
(200, '59', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 7),
(201, '60', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 8),
(202, '61', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 9),
(203, '62', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 10),
(204, '63', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 11),
(205, '64', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 12),
(206, '65', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 13),
(207, '66', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 14);
INSERT INTO `online_dsr` (`id`, `online_dsr_id`, `day`, `date`, `sector_code`, `sector_code_name`, `itinerary`, `itinerary_desc`, `hotel_name`, `meal_plan`, `no_rooms`, `dbl_rate`, `ext_bed_rate`, `cwb_rate`, `cnb_rate`, `vehicle1`, `vehicle1_no`, `vehicle1_rate`, `vehicle2`, `vehicle2_no`, `vehicle2_rate`, `file_no`, `admin_id1`, `query_id1`, `sector_code_id`, `dsr_status`) VALUES
(208, '67', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '2', '2000', '1500', '1000', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTKOL000034', '1', '34', '13', 15),
(209, '68', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 11),
(210, '68', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 11),
(211, '68', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 11),
(212, '68', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 11),
(213, '69', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 12),
(214, '69', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 12),
(215, '69', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 12),
(216, '69', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 12),
(217, '70', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 13),
(218, '70', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 13),
(219, '70', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 13),
(220, '70', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 13),
(221, '71', 1, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 14),
(222, '71', 2, '2018-11-08', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'CHAS Park Palace, Lachung', 'ep', '2', '2000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '13', 14),
(223, '71', 3, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 14),
(224, '71', 4, '2018-11-09', 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	', 'CHAS Narayani Continental, Gangtok', 'ep', '1', '1000', '1500', '500', '500', 'SUMO / MAXX / BULLERO', '1', '', '', '', '', 'DTBAN000037', '1', '37', '20', 14),
(225, '72', 1, '2018-11-12', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Chitrakoot Residency', 'cp', '1', '2000', '200', '45', '78', '1', '', '', '', '', '', 'DTCIK000041', '1', '41', '13', 1),
(226, '73', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'CP', '2', '8000', '5000', '1000', '5000', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTMOU000042', '1', '42', '13', 1),
(227, '74', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'CP', '2', '8000', '5000', '1000', '5000', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTMOU000042', '1', '42', '13', 2),
(228, '75', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'CP', '2', '8000', '5000', '1000', '5000', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTMOU000042', '1', '42', '13', 3),
(229, '76', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'CP', '2', '8000', '5000', '1000', '5000', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTMOU000042', '1', '42', '13', 4),
(230, '77', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Chitrakoot Residency', 'qq', '4', '2000', '1000', '500', '800', 'SUMO / MAXX / BULLERO', '1', '7000', '', '', '', 'DTRAM000043', '1', '43', '13', 1),
(231, '78', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Chitrakoot Residency', 'qq', '4', '2000', '1000', '500', '800', 'SUMO / MAXX / BULLERO', '1', '7000', '', '', '', 'DTRAM000043', '1', '43', '13', 2),
(232, '79', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '3', '2000', '1500', '1000', '800', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTSIK000044', '1', '44', '13', 1),
(233, '80', 1, '2018-11-27', 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		', 'Hotel Saad', 'ep', '3', '2000', '1500', '1000', '800', 'SUMO / MAXX / BULLERO', '1', '5000', '', '', '', 'DTSIK000044', '1', '44', '13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `online_dsr_inclusion`
--

CREATE TABLE `online_dsr_inclusion` (
  `id` int(11) NOT NULL,
  `file_id2` varchar(20) NOT NULL,
  `query_id2` int(11) NOT NULL,
  `admin_id2` int(11) NOT NULL,
  `dsr_status2` int(11) NOT NULL,
  `inclusion` text NOT NULL,
  `inclusion_qty` int(11) NOT NULL,
  `inclusion_rate` varchar(20) NOT NULL,
  `inclusion_desc` text NOT NULL,
  `dsr1_id` varchar(10) NOT NULL,
  `inclusion_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_dsr_inclusion`
--

INSERT INTO `online_dsr_inclusion` (`id`, `file_id2`, `query_id2`, `admin_id2`, `dsr_status2`, `inclusion`, `inclusion_qty`, `inclusion_rate`, `inclusion_desc`, `dsr1_id`, `inclusion_id`) VALUES
(2, 'DTNOI00009', 15, 1, 2, 'Honeymoon', 2, '1600', 'Flower Bed Decoration', '15', '3'),
(3, 'DTNEW000020', 21, 1, 4, 'Honeymoon Cake', 1, '700', 'Cake', '16', '1'),
(4, 'DTNEW000020', 21, 1, 4, 'Honeymoon', 2, '1600', 'Flower Bed Decoration', '16', '3'),
(5, 'DTNEW000020', 21, 1, 4, 'Honeymoon', 2, '1600', 'Flower Bed Decoration', '16', '3'),
(6, 'DTNEW000020', 21, 1, 4, 'Honeymoon', 2, '1600', 'Flower Bed Decoration', '16', '3'),
(7, 'DTKOL000024', 24, 1, 0, 'Dinner', 2, '2400', 'Candle Night', '26', '5'),
(8, 'DTJOD000022', 23, 1, 0, 'Honeymoon', 2, '1600', 'Flower Bed Decoration', '27', '3'),
(9, 'DTNOH000010', 6, 1, 0, 'Dinner', 6, '7200', 'Candle Night', '28', '5'),
(10, 'DTRAM000032', 32, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '31', '1'),
(11, 'DTKOL000034', 34, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '33', '1'),
(12, 'DTBAN000037', 37, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '38', '1'),
(13, 'DTBAN000037', 37, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '39', '1'),
(14, 'DTBAN000037', 37, 1, 2, 'Honeymoon Cake', 1, '700', 'Cake', '40', '1'),
(15, 'DTBAN000037', 37, 1, 3, 'Honeymoon Cake', 1, '700', 'Cake', '41', '1'),
(16, 'DTBAN000037', 37, 1, 4, 'Honeymoon Cake', 1, '700', 'Cake', '42', '1'),
(17, 'DTBAN000037', 37, 1, 5, 'Honeymoon Cake', 1, '700', 'Cake', '43', '1'),
(18, 'DTBAN000037', 37, 1, 6, 'Honeymoon Cake', 1, '700', 'Cake', '44', '1'),
(19, 'DTBAN000037', 37, 1, 7, 'Honeymoon Cake', 1, '700', 'Cake', '45', '1'),
(20, 'DTBAN000037', 37, 1, 8, 'Honeymoon Cake', 1, '700', 'Cake', '47', '1'),
(21, 'DTBAN000037', 37, 1, 9, 'Honeymoon Cake', 1, '700', 'Cake', '48', '1'),
(22, 'DTBAN000037', 37, 1, 10, 'Honeymoon Cake', 1, '700', 'Cake', '49', '1'),
(23, 'DTBHI000030', 30, 1, 0, 'Honeymoon Cake', 4, '2800', 'Cake', '50', '1'),
(24, 'DTMUR000039', 39, 1, 0, 'Honeymoon Cake', 2, '1400', 'Cake', '51', '1'),
(25, 'DTMUR000039', 39, 1, 0, 'Honeymoon Cake', 2, '1400', 'Cake', '52', '1'),
(26, 'DTMUR000039', 39, 1, 2, 'Honeymoon Cake', 1, '700', 'Cake', '53', '1'),
(27, 'DTMUR000039', 39, 1, 3, 'Honeymoon Cake', 1, '700', 'Cake', '54', '1'),
(28, 'DTMUR000039', 39, 1, 4, 'Honeymoon Cake', 1, '700', 'Cake', '55', '1'),
(29, 'DTMUR000039', 39, 1, 5, 'Honeymoon Cake', 1, '700', 'Cake', '56', '1'),
(30, 'DTBAN000037', 37, 1, 11, 'Honeymoon Cake', 1, '700', 'Cake', '68', '1'),
(31, 'DTBAN000037', 37, 1, 12, 'Honeymoon Cake', 1, '700', 'Cake', '69', '1'),
(32, 'DTBAN000037', 37, 1, 13, 'Honeymoon Cake', 1, '700', 'Cake', '70', '1'),
(33, 'DTBAN000037', 37, 1, 14, 'Honeymoon Cake', 1, '700', 'Cake', '71', '1'),
(34, 'DTCIK000041', 41, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '72', '1'),
(35, 'DTMOU000042', 42, 1, 0, 'Honeymoon Cake', 2, '1400', 'Cake', '73', '1'),
(36, 'DTRAM000043', 43, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '77', '1'),
(37, 'DTSIK000044', 44, 1, 0, 'Honeymoon Cake', 1, '700', 'Cake', '79', '1');

-- --------------------------------------------------------

--
-- Table structure for table `online_dsr_rest`
--

CREATE TABLE `online_dsr_rest` (
  `id` int(11) NOT NULL,
  `no_dbl` int(11) NOT NULL,
  `no_ext` int(11) NOT NULL,
  `no_cnb` int(11) NOT NULL,
  `no_cwb` int(11) NOT NULL,
  `cpp_dbl` varchar(10) NOT NULL,
  `cpp_ext` varchar(10) NOT NULL,
  `cpp_cnb` varchar(10) NOT NULL,
  `cpp_cwb` varchar(10) NOT NULL,
  `vehicle_pax` varchar(10) NOT NULL,
  `cpp_dbl_gst` varchar(10) NOT NULL,
  `cpp_ext_gst` varchar(10) NOT NULL,
  `cpp_cnb_gst` varchar(10) NOT NULL,
  `cpp_cwb_gst` varchar(10) NOT NULL,
  `cpp_dbl_gt` varchar(100) NOT NULL,
  `cpp_ext_gt` varchar(100) NOT NULL,
  `cpp_cnb_gt` varchar(100) NOT NULL,
  `cpp_cwb_gt` varchar(100) NOT NULL,
  `grand_total` varchar(10) NOT NULL,
  `online_dsr_status` int(11) NOT NULL,
  `file_id` varchar(20) NOT NULL,
  `query_id` varchar(20) NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_dsr_rest`
--

INSERT INTO `online_dsr_rest` (`id`, `no_dbl`, `no_ext`, `no_cnb`, `no_cwb`, `cpp_dbl`, `cpp_ext`, `cpp_cnb`, `cpp_cwb`, `vehicle_pax`, `cpp_dbl_gst`, `cpp_ext_gst`, `cpp_cnb_gst`, `cpp_cwb_gst`, `cpp_dbl_gt`, `cpp_ext_gt`, `cpp_cnb_gt`, `cpp_cwb_gt`, `grand_total`, `online_dsr_status`, `file_id`, `query_id`, `admin_id`) VALUES
(1, 4, 2, 0, 0, '12500', '1000', '0', '0', '', '10', '0', '0', '0', '13750', '1000', '0', '0', '14750', 1, 'DTNOI00007', '11', '1'),
(3, 4, 2, 1, 2, '2000', '500', '0', '50', '', '0', '0', '0', '0', '2000', '500', '0', '50', '', 1, 'DTPAT00001', '8', '1'),
(4, 8, 2, 2, 0, '3000', '1000', '100', '0', '10', '0', '0', '0', '0', '3000', '1000', '100', '0', '', 1, 'DTNOI000016', '17', '1'),
(5, 5, 2, 2, 2, '7500', '4500', '100', '1500', '2', '0', '0', '0', '0', '7500', '4500', '100', '1500', '', 1, 'DTSHI000017', '18', '1'),
(6, 4, 2, 0, 0, '25000', '11000', '0', '0', '1', '0', '0', '0', '0', '25000', '11000', '0', '0', '', 2, 'DTNOI00007', '11', '1'),
(7, 4, 2, 0, 1, '26000', '11500', '0', '1100', '1', '0', '0', '0', '0', '26000', '11500', '0', '1100', '', 3, 'DTNOI00007', '11', '1'),
(8, 5, 2, 2, 2, '13500', '8000', '2000', '2500', '2', '0', '0', '0', '0', '13500', '8000', '2000', '2500', '', 2, 'DTSHI000017', '18', '1'),
(9, 5, 2, 2, 2, '22750', '13750', '3500', '4500', '2', '0', '0', '0', '0', '22750', '13750', '3500', '4500', '', 3, 'DTSHI000017', '18', '1'),
(10, 10, 2, 2, 2, '4386', '4286', '1500', '2500', '14', '0', '0', '0', '0', '4386', '4286', '1500', '2500', '', 1, 'DTKOL000019', '19', '1'),
(11, 10, 2, 1, 0, '6100', '2920', '1450', '0', '12', '', '0', '0', '0', '6405', '2920', '1450', '0', '', 1, 'DTNEW000020', '21', '1'),
(12, 10, 2, 1, 0, '6150', '2920', '1450', '0', '12', '0', '0', '0', '0', '6150', '2920', '1450', '0', '', 2, 'DTNEW000020', '21', '1'),
(13, 10, 2, 1, 0, '6150', '2920', '1450', '0', '12', '0', '0', '0', '0', '6150', '2920', '1450', '0', '', 3, 'DTNEW000020', '21', '1'),
(14, 2, 2, 2, 2, '5000', '3500', '500', '500', '2', '0', '0', '0', '0', '5000', '3500', '500', '500', '', 1, 'DTNOI00009', '15', '1'),
(15, 2, 2, 2, 2, '5000', '3500', '500', '500', '2', '0', '0', '0', '0', '5000', '3500', '500', '500', '', 2, 'DTNOI00009', '15', '1'),
(16, 10, 2, 1, 0, '7967', '4787', '1450', '0', '12', '0', '0', '0', '0', '7967', '4787', '1450', '0', '', 4, 'DTNEW000020', '21', '1'),
(17, 4, 2, 0, 0, '17667', '6667', '0', '0', '6', '0', '0', '0', '0', '17667', '6667', '0', '0', '', 1, 'DTKOL000026', '26', '1'),
(18, 6, 0, 0, 0, '4500', '0', '0', '0', '', '10', '0', '0', '0', '4950', '0', '0', '0', '', 1, 'DTNOI000029', '29', '1'),
(19, 6, 0, 0, 0, '4500', '0', '0', '0', '', '', '0', '0', '0', '4725', '0', '0', '0', '', 2, 'DTNOI000029', '29', '1'),
(20, 6, 6, 6, 6, '1783', '1333', '550', '1167', '', '0', '0', '0', '0', '1783', '1333', '550', '1167', '', 1, 'DTDEL000028', '28', '1'),
(21, 5, 0, 0, 0, '2000', '0', '0', '0', '0', '0', '0', '0', '0', '2000', '0', '0', '0', '', 1, 'DTJAI000025', '25', '1'),
(22, 5, 0, 0, 0, '2000', '0', '0', '0', '0', '0', '0', '0', '0', '2000', '0', '0', '0', '', 1, 'DTJAI000025', '25', '1'),
(23, 5, 0, 0, 0, '4000', '0', '0', '0', '0', '0', '0', '0', '0', '4000', '0', '0', '0', '', 2, 'DTJAI000025', '25', '1'),
(24, 5, 0, 0, 0, '8400', '0', '0', '0', '0', '0', '0', '0', '0', '8400', '0', '0', '0', '', 3, 'DTJAI000025', '25', '1'),
(25, 5, 0, 0, 0, '1000', '0', '0', '0', '', '0', '0', '0', '0', '1000', '0', '0', '0', '', 1, 'DTKOL000024', '24', '1'),
(26, 5, 0, 0, 0, '1000', '0', '0', '0', '', '0', '0', '0', '0', '1000', '0', '0', '0', '', 1, 'DTKOL000024', '24', '1'),
(27, 6, 0, 0, 0, '443', '0', '0', '0', '', '0', '0', '0', '0', '443', '0', '0', '0', '', 1, 'DTJOD000022', '23', '1'),
(28, 6, 0, 0, 0, '1667', '0', '0', '0', '', '0', '0', '0', '0', '1667', '0', '0', '0', '', 1, 'DTNOH000010', '6', '1'),
(29, 13, 0, 0, 0, '769', '0', '0', '0', '', '0', '0', '0', '0', '769', '0', '0', '0', '', 2, 'DTNOH000010', '6', '1'),
(30, 13, 0, 0, 0, '769', '0', '0', '0', '', '0', '0', '0', '0', '769', '0', '0', '0', '', 3, 'DTNOH000010', '6', '1'),
(31, 5, 0, 0, 0, '10000', '0', '0', '0', '0', '0', '0', '0', '0', '10000', '0', '0', '0', '', 1, 'DTRAM000032', '32', '1'),
(32, 5, 0, 0, 0, '10000', '0', '0', '0', '0', '0', '0', '0', '0', '10000', '0', '0', '0', '', 2, 'DTRAM000032', '32', '1'),
(33, 2, 1, 1, 1, '2000', '1500', '500', '1000', '5', '0', '0', '0', '0', '2000', '1500', '500', '1000', '', 1, 'DTKOL000034', '34', '1'),
(34, 2, 1, 1, 1, '2000', '1000', '500', '1000', '5', '0', '0', '0', '0', '2000', '1000', '500', '1000', '', 2, 'DTKOL000034', '34', '1'),
(35, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2000', '1500', '500', '1000', '', 3, 'DTKOL000034', '34', '1'),
(36, 5, 1, 1, 1, '3600', '7000', '3000', '5000', '5', '10', '0', '0', '0', '4356', '7000', '3000', '5000', '', 1, 'DTDEL000036', '36', '1'),
(37, 5, 1, 1, 1, '3600', '7000', '3000', '5000', '5', '10', '0', '0', '0', '3960', '7000', '3000', '5000', '', 2, 'DTDEL000036', '36', '1'),
(38, 1, 1, 1, 1, '5000', '3000', '1000', '1000', '', '18', '0', '0', '0', '5900', '3000', '1000', '1000', '', 1, 'DTBAN000037', '37', '1'),
(39, 1, 1, 1, 1, '5000', '3000', '1000', '1000', '', '18', '0', '0', '0', '5900', '3000', '1000', '1000', '', 1, 'DTBAN000037', '37', '1'),
(40, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 2, 'DTBAN000037', '37', '1'),
(41, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 3, 'DTBAN000037', '37', '1'),
(42, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 4, 'DTBAN000037', '37', '1'),
(43, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 5, 'DTBAN000037', '37', '1'),
(44, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 6, 'DTBAN000037', '37', '1'),
(45, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 7, 'DTBAN000037', '37', '1'),
(46, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2040.2', '1500', '500', '1000', '', 4, 'DTKOL000034', '34', '1'),
(47, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '0', '0', '0', '12100', '6000', '2000', '2000', '', 8, 'DTBAN000037', '37', '1'),
(48, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '02', '0', '0', '10000', '6120', '2000', '2000', '', 9, 'DTBAN000037', '37', '1'),
(49, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '02', '0', '0', '10000', '6120', '2000', '2000', '', 10, 'DTBAN000037', '37', '1'),
(50, 4, 2, 2, 2, '3000', '2500', '1500', '2000', '1', '0', '0', '0', '0', '3060.3', '2500', '1500', '2000', '', 1, 'DTBHI000030', '30', '1'),
(51, 1, 4, 1, 4, '7990', '1', '9900', '3250', '1', '0', '0', '0', '0', '8149.69', '1', '9900', '3250', '', 1, 'DTMUR000039', '39', '1'),
(52, 1, 4, 1, 4, '7990', '1', '9900', '3250', '1', '0', '0', '0', '0', '8149.69', '1', '9900', '3250', '', 1, 'DTMUR000039', '39', '1'),
(53, 1, 4, 1, 4, '15980', '1', '19800', '6500', '1', '0', '0', '0', '0', '22250.08', '1', '19800', '6500', '', 2, 'DTMUR000039', '39', '1'),
(54, 1, 4, 1, 4, '15980', '1', '19800', '6500', '1', '0', '0', '0', '0', '22250.08', '1', '19800', '6500', '', 3, 'DTMUR000039', '39', '1'),
(55, 1, 4, 1, 4, '15980', '1', '19800', '6500', '1', '0', '0', '0', '0', '16300.39', '1', '19800', '6500', '', 4, 'DTMUR000039', '39', '1'),
(56, 1, 4, 1, 4, '15980', '1', '19800', '6500', '1', '0', '0', '0', '0', '16300.39', '1', '19800', '6500', '', 5, 'DTMUR000039', '39', '1'),
(57, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2420', '1500', '500', '1000', '', 5, 'DTKOL000034', '34', '1'),
(58, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2000', '1881.6', '500', '1000', '', 6, 'DTKOL000034', '34', '1'),
(59, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2000', '1500', '500', '1254.4', '', 7, 'DTKOL000034', '34', '1'),
(60, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '10', '2000', '1500', '500', '1100', '', 8, 'DTKOL000034', '34', '1'),
(61, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2420', '1500', '500', '1000', '', 9, 'DTKOL000034', '34', '1'),
(62, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2420', '1500', '500', '1000', '', 10, 'DTKOL000034', '34', '1'),
(63, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2040.2', '1500', '500', '1000', '', 11, 'DTKOL000034', '34', '1'),
(64, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2040.2', '1500', '500', '1000', '', 12, 'DTKOL000034', '34', '1'),
(65, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2040.2', '1500', '500', '1000', '', 13, 'DTKOL000034', '34', '1'),
(66, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2040.2', '1500', '500', '1000', '', 14, 'DTKOL000034', '34', '1'),
(67, 2, 1, 1, 1, '2000', '1500', '500', '1000', '4', '0', '0', '0', '0', '2000', '1815', '500', '1000', '', 15, 'DTKOL000034', '34', '1'),
(68, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '0', '1', '0', '10000', '6000', '2020', '2000', '', 11, 'DTBAN000037', '37', '1'),
(69, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '0', '0', '0', '10201', '6000', '2000', '2000', '', 12, 'DTBAN000037', '37', '1'),
(70, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '0', '0', '0', '1', '10000', '6000', '2000', '2020', '', 13, 'DTBAN000037', '37', '1'),
(71, 1, 1, 1, 1, '10000', '6000', '2000', '2000', '', '10', '0', '0', '0', '11000', '6000', '2000', '2000', '', 14, 'DTBAN000037', '37', '1'),
(72, 1, 2, 1, 1, '2000', '100', '78', '45', '1', '0', '0', '0', '0', '2420', '100', '78', '45', '', 1, 'DTCIK000041', '41', '1'),
(73, 2, 1, 1, 1, '9000', '6000', '5000', '1000', '5', '0', '0', '0', '0', '10890', '6000', '5000', '1000', '', 1, 'DTMOU000042', '42', '1'),
(74, 2, 1, 1, 1, '9250', '6250', '5000', '1000', '4', '0', '0', '0', '0', '9250', '6250', '5000', '1000', '', 2, 'DTMOU000042', '42', '1'),
(75, 2, 1, 1, 1, '9250', '6250', '5000', '1000', '4', '10', '0', '0', '0', '9250', '6250', '5000', '1000', '', 3, 'DTMOU000042', '42', '1'),
(76, 2, 1, 1, 1, '9250', '6250', '5000', '1000', '4', '10', '0', '0', '0', '10175', '6250', '5000', '1000', '', 4, 'DTMOU000042', '42', '1'),
(77, 2, 2, 2, 2, '7500', '4000', '400', '250', '2', '10', '0', '0', '0', '9075', '4000', '400', '250', '', 1, 'DTRAM000043', '43', '1'),
(78, 2, 2, 2, 2, '7500', '4000', '400', '250', '2', '10', '0', '0', '0', '8250', '4000', '400', '250', '', 2, 'DTRAM000043', '43', '1'),
(79, 6, 6, 6, 6, '1833', '1083', '133', '167', '6', '10', '0', '0', '0', '2217.6', '1083', '133', '167', '', 1, 'DTSIK000044', '44', '1'),
(80, 6, 6, 6, 6, '2000', '1250', '133', '167', '5', '10', '0', '0', '0', '2200', '1250', '133', '167', '', 2, 'DTSIK000044', '44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` int(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proforma_details`
--

CREATE TABLE `proforma_details` (
  `id` tinyint(10) NOT NULL,
  `invoice_date` date NOT NULL,
  `sac` varchar(100) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `pax_no` int(10) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `file_number` varchar(255) NOT NULL,
  `gst_value` float NOT NULL,
  `cgst_value` float NOT NULL,
  `sgst_value` float NOT NULL,
  `admin_id` int(10) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proforma_details`
--

INSERT INTO `proforma_details` (`id`, `invoice_date`, `sac`, `order_no`, `invoice_id`, `cust_name`, `pax_no`, `total_amount`, `file_number`, `gst_value`, `cgst_value`, `sgst_value`, `admin_id`, `destination`, `address`) VALUES
(56, '2018-07-21', '00010', 'noh/noh/30', '00030', 'Aniket', 18, '769', 'DTNOH000010', 5, 0, 0, 1, 'nohsa', 'patna'),
(57, '2018-07-21', '00022', 'JOD/DAR/27', '00027', 'Relicare  Educursions and Holidays', 10, '443', 'DTJOD000022', 5, 0, 0, 1, 'DARJEELING', 'patna'),
(58, '2018-07-21', '00024', 'kol/Gan/26', '00026', 'DESTINARO TOURISM', 8, '1000', 'DTKOL000024', 5, 0, 0, 1, 'Gangtok/Darjeeling', 'patna'),
(93, '2018-07-31', '00000077', 'DTNOI00007', '0006', 'Vishal', 5, '25000', 'DTNOI00007', 0, 0, 19, 1, 'jaipur', 'NEAR JOLLY GRANT AIRPORT, DEHRADUN, UTTRAKHAND'),
(94, '2018-07-31', 'GJGJJ', 'DTJAI000025', '00021', 'TRAVEL CAFE', 6, '2000', 'DTJAI000025', 0, 5.5, 0, 1, 'Gangtok', 'patna'),
(95, '2018-11-17', 'sdfghh', 'DTRAM000032', '00031', 'ram travels', 2, '10000', 'DTRAM000032', 0, 0, 0, 1, 'dubai', 'laxmi nagar'),
(96, '2018-11-17', ' vgfb fgb', 'DTNOH000010', '00030', 'Aniket', 18, '769', 'DTNOH000010', 0, 0, 0, 1, 'nohsa', 'patna'),
(97, '2018-11-17', 'dfgdghfh', 'DTKOL000034', '00035', 'kolkata tour', 4, '2000', 'DTKOL000034', 0, 0, 0, 1, 'delhi', 'Near Temple , '),
(98, '2018-11-22', 'saddas', 'DTBAN000037', '00018', 'xyg', 2, '10000', 'DTBAN000037', 0, 0, 0, 1, 'Banglore', 'vishal tower'),
(99, '2018-11-22', 'fgfg', 'DTRAM000043', '00022', 'ramesh', 5, '7500', 'DTRAM000043', 0, 0, 0, 1, 'ramgadh', 'Ramgadh'),
(100, '2018-11-22', 'xcvxc', 'DTSIK000044', '00023', 'sumit', 19, '2000', 'DTSIK000044', 0, 0, 0, 1, 'sikkim', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `sector_code`
--

CREATE TABLE `sector_code` (
  `id` int(11) NOT NULL,
  `sec_code` varchar(10) NOT NULL,
  `sec_name` varchar(255) NOT NULL,
  `itinerary` text NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `itinerary_desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sector_code`
--

INSERT INTO `sector_code` (`id`, `sec_code`, `sec_name`, `itinerary`, `admin_id`, `itinerary_desc`) VALUES
(13, 'NJP-GTK', 'GANGTOK', ' NJP RLY STATION / IXB AIRPORT - GANGTOK (125 KMS / 4 HRS)', '1', '	Arrive at NJP Railway Station / IXB Airport & transfer to Gangtok (5,480 ft.), the capital of Sikkim. Check-in to hotel & rest of the day is free at leisure. Shop around at M.G. Marg & explore the city on your own. Spend overnight at hotel in Gangtok.		'),
(17, 'GTK SIGHTS', 'GANGTOK', 'GANGTOK T+B ', '1', '	After a sumptuous breakfast visit Tsomgo Lake (12,400 ft.) & Baba Mandir (13,200 ft.) which is 55 kms one way from Gangtok city. Spend overnight at hotel in Gangtok. (If due to landslide or bad road condition Tsomgo Lake is closed then alternate sightseeing will be provided).\r\nSUPPLEMENTARY COST FOR NATHULA PASS : Rs 5000/- PER VEHICLE\r\n**ISSUANCE OF PERMIT FOR NATHULA PASS DEPENDS UPON THE AVAIALABILITY. IT IS CLOSED ON MONDAY AND TUESDAY. IF THE GUEST WANTS TO AVAIL THE NATHULA PASS THEN THEY WILL HAVE TO INFORM US MINIMUM 3 DAYS PRIOR TO THE TRIP. ONCE THE PERMIT IS ISSUED AND DUE TO ANY WEATHER CONDITION IF THE ROADS ARE CLOSED THEN THE CHARGES WOULD BE NON REFUNDABLE**\r\n'),
(18, 'GTK  LOCAL', 'DARJEELING', 'GANGTOK LOCAL SIGHTSEEING - DARJEELING (110 KMS / 4 HRS)', '1', 'After breakfast, start for a half day trip of Gangtok city covering Enchey Monastery , Bakthang Falls, Cottage Industry and Handicraft Centre, Flower show, Dro-dul Chorten & Institute of Tibetology (maximum 3-4 hours). Afternoon drive to Darjeeling.						'),
(19, 'DRJ LOCAL ', 'DARJEELING', ' DARJEELING LOCAL S.S ', '1', 'Today get ready early morning by 4 a.m to witness the spectacular sunrise over Mt. Khangchendzongha (28,208 ft. ,Worldâ€™s 3rd highest peak ) at Tiger Hill. Its a destination by itself offering not just great views during sunrise; its a place where you can soak yourself with Himalayan serenity anytime during the day. Thrill yourself by visiting World famous Ghoom Monastery and Batasia Loop on your way back. Batasia Loop is fascinating to watch the toy train with its way round the loop. The War Memorial constructed in the memory of brave sons of Darjeeling who died in different wars since 1947, is worth a visit. A glorious view of snowy peak and town can be seen from this place. After a sumptuous breakfast visit Himalayan Mountaineering Institute, P.N. Zoological Park (Thursday Closed), Tenzing Rock, Tibetan Refugee  self-help Centre (Sunday closed) Tea Garden, Japanese Temple, Peace Pagoda and Ropeway (Ticket cost not included and will be approx Rs.180 per person-directly payable).				'),
(20, 'DRJ - NJP ', 'NJP / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', '1', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	'),
(21, 'GTK SIGHTS', 'GANGTOK', 'GANGTOK LOCAL SIGHTSEEING', '1', 'After a delightful breakfast start for the full day city tour covering Tashi view point, Ganesh Tok & Hanuman Tok, Enchey Monastery , Bakthang Falls, Cottage Industry, Dro-dul Chorten, Institute of Tibetology, Flower show and Handicraft Centre. Spend overnight at hotel in Gangtok.	'),
(22, 'GTK - DRJ ', 'DARJEELING', 'GANGTOK â€“ DARJEELING (115KMS / 4 HRS)', '1', 'After a delightful breakfast check out from hotel and transfer to Darjeeling (6,710 ft.), situated in West Bengal. Check-in to hotel & rest of the day is free at leisure. Spend overnight at hotel in Darjeeling.	'),
(23, 'GTK  LOCAL', 'KALIMPONG', 'GANGTOK SIGHTSEENG - KALIMPONG', '1', 'After breakfast , start for a half day trip of Gangtok city covering Enchey Monastery , Bakthang Falls, Cottage Industry and Handicraft Centre, Flower show, Dro-dul Chorten& Institute of Tibetology (maximum 3-4 hours). Afternoon drive to Kalimpong, Spend overnight at hotel in Kalimpong.	'),
(24, 'KLM -  L.S', 'DARJEELING', 'KALIMPONG SIGHTSEEING - DARJEELING', '1', 'After your delightful Breakfast check out from Hotel. Enjoy half day tour of Kalimpong Visit MangalDham, Deolo Hill, Golf Garden, Durpin Dara Hills & Flowers Nurseries. Afternoon transfer to Darjeeling. Overnight stay at Darjeeling.			'),
(25, 'GTK - PELL', 'PELLING', 'GANGTOK TO PELLING VIA NAMCHI', '1', 'After breakfast check out of the hotel and transfer to Pelling via Namchi covering Samdruptse , Temi Tea Garden and Chardham.Check in to the hotel. Overnight stay at Pelling.	'),
(26, 'PELL LOCAL', 'PELLING', 'PELLING SIGHTSEEING', '1', 'After a delightful breakfast start for full day sightseeing. 1st Half tour - Darap village, Rimbi water Falls, Sewaro Rock Garden, Khecheopalri Lake &Khangchendzongha waterfalls. In the afternoon start for 2nd half tour - Pemayangtse Monastery, Rabdantse Ruins, New Halipad Ground. Evening at leisure. Spend overnight at hotel in Pelling.				'),
(27, 'PELL - DRJ', 'DARJEELING', 'PELLING - DARJEELING (109 KMS / 4 HRS)', '1', 'After a delightful breakfast drive to Darjeeling (6,710 ft.). On arrival check-in to your hotel & rest of the day at leisure. Evening explore the Mall by your own. Spend overnight at hotel in Darjeeling.	'),
(28, 'DRJ - KLM', 'KALIMPONG', 'DARJEELING â€“ KALIMPONG (57 KMS / 2 Â½ HRS) SIGHTSEEING', '1', 'After your delightful Breakfast transfer to Kalimpong (4,100 ft.). On arrival check-in to your hotel. Afternoon enjoy half day tour of Kalimpong Visit MangalDham, Deolo Hill, Golf Garden, Durpin Dara Hills & Flowers Nurseries. Spend overnight at hotel in Kalimpong.		'),
(29, 'KLM - NJP', 'NJP RAILWAY STATION / IXB AIRPORT DROP ', 'JALPAIGURI RAILWAY STATION / BAGDOGRA AIRPORT DROP', '1', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.			'),
(30, 'GTK - LCG', 'LACHUNG', 'GANGTOK - LACHUNG (116 KMS / 6 HRS)', '1', 'After breakfast pick up from hotel & transfer to Lachung (8,800 ft). Enroute visit Singhik View point, Seven Sister Water Fall, Naga Water Fall, and arrive Lachung by evening. Dinner at hotel. Overnight stay at Lachung.	'),
(31, 'LCG -SS', 'LACHUNG', 'LACHUNG â€“ YUMTHANG VALLEY EXCURSION', '1', 'After breakfast proceed to Yumthang Valley which is Known as Valley of Flowers (11800 Ft / 3598 Mts / 25 Kms / 1 Â½ hours one way). On the way back, visit Hot Spring considered to have medicinal properties. Back to resort. Overnight stay at Lachung.	'),
(33, 'LCG - GTK ', 'GANGTOK', 'LACHUNG - GANGTOK (116 KMS / 6 HRS)', '1', 'After breakfast departure for Gangtok, enroute witness the wonderful Bheema & Twin water falls. On arrival at Gangtok check-in to your hotel. Overnight stay at Gangtok.	'),
(34, 'GTK - NJP ', 'NJP RLY STATION / IXB AIRPORT', 'DARJEELING â€“ NEW JALPAIGURI STATION / BAGDOGRA AIRPORT (98 KMS / 3 HRS)', '1', 'After your breakfast check out from hotel and take the departure transfer to New Jalpaiguri Station / Bagdogra Airport for your onward journey. We wish you HAPPY JOURNEY.	'),
(35, 'GTK - LCH', 'LACHEN', 'GANGTOK - LACHEN (122 KMS / 6 HRS)', '1', 'After breakfast pick up from hotel & transfer to Lachen (9,800 ft.). Enroute visit Singhik View point, Seven Sister Water Fall,\r\nNaga Water Fall, and arrive Lachen by evening. Dinner at hotel. Overnight stay at Lachen.	'),
(36, 'LCH S.S - ', 'LACHUNG', 'LACHEN - CHOPTA VALLEY - GURUDONGMAR LAKE - LACHUNG', '1', 'Early Morning drive to Chopta Valley (13,200 ft.) & Gurudongmar Lake (17,100 ft.). Back to hotel & after lunch transfer to\r\nLachung (8,800 ft). Arrive Lachung by evening. Dinner at hotel. Overnight stay at Lachung.		');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice`
--

CREATE TABLE `tax_invoice` (
  `id` int(10) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `file_number` varchar(255) NOT NULL,
  `sac` varchar(255) NOT NULL,
  `order_no` varchar(255) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `gst_value` float NOT NULL,
  `cgst_value` float NOT NULL,
  `sgst_value` float NOT NULL,
  `admin_id` int(10) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `pax_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_invoice`
--

INSERT INTO `tax_invoice` (`id`, `gst_no`, `pan_no`, `file_number`, `sac`, `order_no`, `cust_name`, `total_amount`, `gst_value`, `cgst_value`, `sgst_value`, `admin_id`, `destination`, `invoice_date`, `invoice_id`, `pax_no`) VALUES
(17, 'GSTIN009', 'PANINDIA009', 'DTKOL000024', '00024', 'kol/Gan/26', 'DESTINARO TOURISM', '1000', 5, 0, 0, 1, 'Gangtok/Darjeeling', '2018-07-21', '00026', 8),
(18, 'GSTIN887', 'PANINDIA002', 'DTJOD000022', '00022', 'JOD/DAR/27', 'Relicare  Educursions and Holidays', '443', 5, 0, 0, 1, 'DARJEELING', '2018-07-21', '00027', 10),
(20, 'GSTIIN0078', 'PANINDIA880', 'DTNOI00007', '0007', 'DTNOI00007', 'Vishal', '25000', 7, 0, 0, 1, 'jaipur', '2018-07-30', '0006', 5),
(29, 'GSTIN898', 'PANPAN990', 'DTJAI000025', 'GJGJJ', 'DTJAI000025', 'TRAVEL CAFE', '2000', 0, 5.5, 0, 1, 'Gangtok', '2018-07-31', '00021', 6),
(30, 'nmnmv', 'nvmvnbm', 'DTRAM000032', 'sdfghh', 'DTRAM000032', 'ram travels', '10000', 0, 0, 0, 1, 'dubai', '2018-11-17', '00031', 2),
(31, 'ghgh', 'ghg', 'DTKOL000034', 'dfgdghfh', 'DTKOL000034', 'kolkata tour', '2000', 0, 0, 0, 1, 'delhi', '2018-11-17', '00035', 4),
(32, 'fgsfd', 'sfgfs', 'DTRAM000043', 'fgfg', 'DTRAM000043', 'ramesh', '7500', 0, 0, 0, 1, 'ramgadh', '2018-11-22', '00022', 5),
(33, 'ghfgd', 'hgfhg', 'DTSIK000044', 'xcvxc', 'DTSIK000044', 'sumit', '2000', 0, 0, 0, 1, 'sikkim', '2018-11-22', '00023', 19);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`, `admin_id`) VALUES
(5, 'INNOVA / XYLO /SCORPIO', '1'),
(8, 'SUMO / MAXX / BULLERO', '1'),
(9, 'WAGON R / ALTO', '1'),
(10, '17 SEATER TEMPO TRAVELLER ', '1'),
(11, '26 SEATER TEMPO TRAVELLER', '1'),
(12, '10 SEATER TEMPO TRAVELLER', '1'),
(13, '12 SEATER TEMPO TRAVELLER', '1'),
(14, '14 SEATER TEMPO TRAVELLER ', '1'),
(15, '20 SEATER TEMPO TRAVELLER', '1'),
(16, '32 SEATER A/C CHOCH BUS', '1'),
(17, '41 SEATER A/C CHOCH BUS', '1'),
(18, '51 SEATER A/C CHOCH BUS', '1'),
(19, '56 SEATER A/C CHOCH BUS', '1'),
(21, 'HYUNDUI H1 ', '1'),
(22, 'SANTAFY CAR', '1'),
(23, 'COSTER BUS SIX CYLINDER', '1'),
(24, 'COSTER BUS FOUR CYLINDER ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment`
--

CREATE TABLE `vendor_payment` (
  `id` int(22) NOT NULL,
  `admin_id` int(22) NOT NULL,
  `date` date NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `car_vendor_name` varchar(255) NOT NULL,
  `package_vendor_name` varchar(255) NOT NULL,
  `file_no` varchar(255) NOT NULL,
  `cheque_no` varchar(255) NOT NULL,
  `cheque_date` date NOT NULL,
  `bill_amount` varchar(255) NOT NULL,
  `advance_amount` varchar(255) NOT NULL,
  `due_amount` varchar(255) NOT NULL,
  `due_payment_date` date NOT NULL,
  `full_paid` varchar(255) NOT NULL,
  `mode_payment` varchar(255) NOT NULL,
  `rtgs_neht_no` varchar(255) NOT NULL,
  `ac_name` varchar(255) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `ifc_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail_id` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `alternate_email` varchar(255) NOT NULL,
  `alternate_phone` varchar(255) NOT NULL,
  `status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_payment`
--

INSERT INTO `vendor_payment` (`id`, `admin_id`, `date`, `hotel_name`, `others`, `car_vendor_name`, `package_vendor_name`, `file_no`, `cheque_no`, `cheque_date`, `bill_amount`, `advance_amount`, `due_amount`, `due_payment_date`, `full_paid`, `mode_payment`, `rtgs_neht_no`, `ac_name`, `branch_name`, `account_no`, `account_type`, `bank_name`, `ifc_code`, `address`, `mail_id`, `phone_no`, `alternate_email`, `alternate_phone`, `status`) VALUES
(4, 1, '2018-06-05', 'xyz123', 'iuiu', 'kjjkjk', 'kkkk', '999', '00009', '2018-06-12', '9000', '8000', '7000', '2018-06-12', '1', '', '999900098', 'iiiioooo', 'ooooo', '9000098889', '1', 'kkkk', '90990', 'ooioio', 'popoo@gmail.com', '8743000990', 'pramod_dhage@yahoo.com', '8743000995', 1),
(5, 1, '2018-06-08', 'mmm', 'kkkkk', 'iiiiii', 'jjkjkjk', '999000', '099090909', '2018-06-12', '90000', '69000', '90000', '2018-06-19', '2', '1', '090909090', 'kakak', 'hghjgj', '90909090', '1', 'lkal', '90900', 'lajpat', 'popoo@gmail.com', '8743000995', 'pramod_dhage@yahoo.com', '8743000900', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher_details`
--

CREATE TABLE `voucher_details` (
  `id` tinyint(10) NOT NULL,
  `admin_id` tinyint(10) NOT NULL,
  `file_no` varchar(255) NOT NULL,
  `guest_name` varchar(255) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `tsd` varchar(100) NOT NULL,
  `arrivel_time` time(2) NOT NULL,
  `departure_time` time(2) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher_details`
--

INSERT INTO `voucher_details` (`id`, `admin_id`, `file_no`, `guest_name`, `contact_no`, `tsd`, `arrivel_time`, `departure_time`, `destination`, `hotel_name`, `status`) VALUES
(3, 1, 'YK9000090', 'ajay kumar', '989909090', '9O', '00:00:10.00', '00:00:16.00', 'manali', 'Mahamaya', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_account`
--
ALTER TABLE `booking_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calling_entry`
--
ALTER TABLE `calling_entry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_id_2` (`tag_id`);

--
-- Indexes for table `dsrstatus`
--
ALTER TABLE `dsrstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `float_query`
--
ALTER TABLE `float_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inclusion`
--
ALTER TABLE `inclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_dsr`
--
ALTER TABLE `online_dsr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_dsr_inclusion`
--
ALTER TABLE `online_dsr_inclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_dsr_rest`
--
ALTER TABLE `online_dsr_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_details`
--
ALTER TABLE `proforma_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector_code`
--
ALTER TABLE `sector_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher_details`
--
ALTER TABLE `voucher_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_account`
--
ALTER TABLE `booking_account`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `calling_entry`
--
ALTER TABLE `calling_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `float_query`
--
ALTER TABLE `float_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `inclusion`
--
ALTER TABLE `inclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `online_dsr`
--
ALTER TABLE `online_dsr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `online_dsr_inclusion`
--
ALTER TABLE `online_dsr_inclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `online_dsr_rest`
--
ALTER TABLE `online_dsr_rest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proforma_details`
--
ALTER TABLE `proforma_details`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `sector_code`
--
ALTER TABLE `sector_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `voucher_details`
--
ALTER TABLE `voucher_details`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
