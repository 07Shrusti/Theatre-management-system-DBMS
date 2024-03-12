-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 05:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatre`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `MAssign` (IN `tid` INT(2), IN `mid` INT(2), IN `screenid` INT(2), IN `stid` VARCHAR(1), OUT `mesg` VARCHAR(200))   BEGIN
DECLARE c INT;
DECLARE mc INT;
DECLARE d datetime;
Select count(*) into c from shows where shows.T_ID= tid and shows.screen_ID=screenid and shows.ST_ID=stid and status='R';
        if c > 0 THEN
           BEGIN 
            Select count(*) into mc from shows where shows.T_ID= tid and shows.M_ID=mid and shows.screen_ID=screenid and shows.ST_ID=stid and status='R';
                  if mc > 0  THEN
                     BEGIN
                     SET  mesg=' This Movie is alreday running in selected theater, screen, and show time - no action required';
                     END;
                  else
                   bEGIN
                     update shows set status= 'C' where shows.T_ID= tid and shows.screen_ID=screenid and shows.ST_ID=stid and status='R';
                     insert into shows(T_ID, M_ID, SCREEN_ID, ST_ID, status) values( tid, mid,screenid,stid, 'R');
                    SET  mesg= 'Movie is Reassinged to selected the theater, screen, and show time';
                   END;
                 end if;
            END; 
       else
           BEGIN
            insert into shows(T_ID, M_ID, SCREEN_ID, ST_ID, status) values( tid, mid,screenid,stid, 'R');
            SET mesg= 'Movie is Assinged to the theater, screen, and show time';
            END;
      end if ;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `E_ID` varchar(4) NOT NULL,
  `T_ID` int(2) DEFAULT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `SALARY` int(11) DEFAULT NULL,
  `PHONE` int(10) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `MAIL` varchar(20) DEFAULT NULL,
  `DESIGNATION` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `T_ID`, `NAME`, `SALARY`, `PHONE`, `ADDRESS`, `MAIL`, `DESIGNATION`) VALUES
('1', 1, 'RAM', 30000, 675859440, 'Magarth Road,BANGALORE', 'ram3@gmail.com', 'Manager'),
('10', 3, 'Anjali', 30000, 2147483647, 'JAYANAGAR,BANGALORE', 'Anj@gmail.com', 'SUPERVISOR'),
('11', 3, 'Arjun', 40000, 76767685, 'BANASHANKARI,BANGALORE', 'Ar@gmail.com', 'attendant'),
('12', 3, 'Krishna', 2000, 67676732, 'BEGUR,BANGALORE', 'Kris@gmail.com', 'Attendant'),
('13', 9, 'Pooja', 35000, 34355463, 'Padmnabhanagar,Bangalore', 'poo@yahoo.com', 'SUPERVISOR'),
('14', 9, 'Hani', 20000, 99844332, 'Padmnabhanagar,Bangalore', 'Hani@yahoo.com', 'Manager'),
('15', 9, 'Haru', 24000, 67685949, 'Channasandra,Bangalore', 'Haru@gmal.com', 'Attendant'),
('16', 9, 'Sharwi', 30000, 44889324, 'R R NAGAR,BANGALORE', 'Shar@gmail.com', 'Attendant'),
('2', 1, 'SHAM', 60000, 2147483647, 'INDRANAGAR,BANAGALORE', 'SHAM09@GMAIL.COM', 'SUPERVISOR'),
('3', 1, 'SAM', 10000, 688549493, 'KATHRIGUPPE,BANGALORE', 'san@gmail.com', 'attendant'),
('4', 1, 'Ravi', 50000, 67855943, 'Channasandra,Bangalore', 'Rav@gmail.com', 'Attendant'),
('5', 1, 'Shoba', 4000, 2147483647, 'J P NAGAR', 'Shoba@gmail.com', 'Attendant'),
('6', 2, 'Shuba', 10000, 2147483647, 'whitefield, bangalore', 'shuba@gmail.com', 'Manager'),
('7', 2, 'Siri', 30000, 677685599, 'HSR layout,Bangalore', 'Siri@gmail.com', 'Attendant'),
('70', 1, 'Rani', 4000, 66554433, 'Pune', 'rani@gmail.com', 'Manager'),
('8', 2, 'Kala', 15000, 985567890, 'Jayanagar,BANGALORE', 'kam@gmail.com', 'Attendant'),
('9', 2, 'Rahul', 25000, 78787878, 'BEGUR,BANGALORE', 'Rahul@gmail.com', 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `M_ID` int(4) NOT NULL,
  `M_NAME` varchar(100) DEFAULT NULL,
  `LANGUAGE_` varchar(25) DEFAULT NULL,
  `RUNNING_TIME` varchar(20) DEFAULT NULL,
  `F_LEAD` varchar(50) DEFAULT NULL,
  `M_LEAD` varchar(50) DEFAULT NULL,
  `OTHER_CAST` varchar(100) DEFAULT NULL,
  `M_DESCRIPTION` varchar(50) DEFAULT NULL,
  `Rate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`M_ID`, `M_NAME`, `LANGUAGE_`, `RUNNING_TIME`, `F_LEAD`, `M_LEAD`, `OTHER_CAST`, `M_DESCRIPTION`, `Rate`) VALUES
(1, 'KANTARA', 'KANNADA', '3 HOURS', 'SAPTHAMI', 'RISHAB SHETTY', 'KISHORE', 'ACTION-THRILLER', 4),
(2, 'CHARLIE 777', 'KANNADA', '3 HOURS', 'SANGEETHA SRINGERI', 'RAKSHITH SHETTY', 'RAJ SHETTY', 'DRAMA/ADVENTURE', 5),
(6, 'Qala', 'Hindi', '2 hours', 'Tripti Dimri', 'Babil Khan', 'Swastika Mukherjee', 'Psychological Drama', 3),
(13, 'AVATAR 2', 'ENGLISH', '3 HOURS', 'Zoe Saldana', 'Sam Worthington', 'Stephan Lang', 'Science fiction', 4),
(19, 'Suzume', 'Japanese', '3 hrs', 'Suzume', 'Daijin', 'Aunt', 'Anime', 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mov_rate_report`
-- (See below for the actual view)
--
CREATE TABLE `mov_rate_report` (
`M_ID` int(4)
,`M_NAME` varchar(100)
,`RATE` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `number_of_employee`
-- (See below for the actual view)
--
CREATE TABLE `number_of_employee` (
`T_ID` int(2)
,`T_NAME` varchar(20)
,`COUNTEMP` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `SCREEN_ID` int(2) NOT NULL,
  `T_ID` int(2) NOT NULL,
  `NO_OF_ROWS` int(3) DEFAULT NULL,
  `NO_OF_COLUMNS` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`SCREEN_ID`, `T_ID`, `NO_OF_ROWS`, `NO_OF_COLUMNS`) VALUES
(1, 1, 20, 30),
(1, 2, 20, 30),
(1, 3, 20, 30),
(1, 9, 20, 30),
(2, 1, 20, 30),
(2, 2, 20, 30),
(2, 3, 20, 30),
(2, 9, 20, 30),
(4, 1, 20, 20);

-- --------------------------------------------------------

--
-- Stand-in structure for view `showdetails`
-- (See below for the actual view)
--
CREATE TABLE `showdetails` (
`T_ID` int(2)
,`M_ID` int(4)
,`SCREEN_ID` int(2)
,`ST_ID` varchar(1)
,`T_NAME` varchar(20)
,`M_NAME` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `T_ID` int(2) NOT NULL,
  `M_ID` int(4) NOT NULL,
  `SCREEN_ID` int(2) NOT NULL,
  `ST_ID` varchar(1) NOT NULL,
  `STATUS` varchar(1) NOT NULL,
  `START` date DEFAULT NULL,
  `END` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`T_ID`, `M_ID`, `SCREEN_ID`, `ST_ID`, `STATUS`, `START`, `END`) VALUES
(1, 1, 1, 'A', 'C', NULL, NULL),
(1, 1, 1, 'E', 'C', NULL, NULL),
(1, 1, 1, 'M', 'R', NULL, NULL),
(1, 2, 1, 'A', 'R', NULL, NULL),
(1, 2, 1, 'E', 'R', NULL, NULL),
(1, 19, 9, 'M', 'R', NULL, NULL),
(2, 1, 1, 'M', 'C', NULL, NULL),
(2, 2, 1, 'M', 'R', NULL, NULL),
(3, 2, 1, 'E', 'R', NULL, NULL),
(3, 6, 2, 'E', 'R', NULL, NULL),
(3, 13, 2, 'A', 'R', NULL, NULL),
(3, 13, 2, 'M', 'R', NULL, NULL),
(9, 2, 1, 'E', 'C', NULL, NULL),
(9, 13, 1, 'E', 'R', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `ST_ID` varchar(1) NOT NULL,
  `DESCR` varchar(20) DEFAULT NULL,
  `START_TIME` varchar(20) DEFAULT NULL,
  `T_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`ST_ID`, `DESCR`, `START_TIME`, `T_ID`) VALUES
('A', 'AFTERNOON', '2 PM', 1),
('A', 'AFTERNOON', '2 PM', 2),
('A', 'AFTERNOON', '2 PM', 3),
('A', 'AFTERNOON', '2 PM', 9),
('E', 'EVENING', '6 PM', 1),
('E', 'EVENING', '6 PM', 2),
('E', 'EVENING', '6 PM', 3),
('E', 'EVENING', '6 PM', 9),
('M', 'MORNING', '10 AM', 1),
('M', 'MORNING', '10 AM', 2),
('M', 'MORNING', '10 AM', 3),
('M', 'MORNING', '10 AM', 9);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `T_ID` int(2) NOT NULL,
  `T_NAME` varchar(20) DEFAULT NULL,
  `PH_NO` int(10) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `MAIL` varchar(20) DEFAULT NULL,
  `RATE` varchar(25) DEFAULT NULL,
  `PRICE` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`T_ID`, `T_NAME`, `PH_NO`, `ADDRESS`, `MAIL`, `RATE`, `PRICE`) VALUES
(1, 'INOX', 2147483647, 'JAYANAGAR,BANGALORE', 'INOX@GMAIL.COM', '4', 400),
(2, 'REX THEATRE', 2147483647, 'BANASHANKARI,BANGALORE', 'REX@GMAIL.COM', '4', 450),
(3, 'GOPALAN CINEMA', 2147483647, 'J P NAGAR', 'GOPALAN@YAHOO.COM', '5', 600),
(9, 'PVR', 689976876, 'BEGUR,BANGALORE', 'PVR@mail.com', '3', 500);

--
-- Triggers `theatre`
--
DELIMITER $$
CREATE TRIGGER `SC_ST_AUTO` AFTER INSERT ON `theatre` FOR EACH ROW BEGIN 
INSERT INTO SCREEN(screen_id,T_ID,NO_OF_ROWS,NO_OF_COLUMNS) VALUES(1,NEW.T_ID,20,30);
INSERT INTO SCREEN(screen_id,T_ID,NO_OF_ROWS,NO_OF_COLUMNS) VALUES(2,NEW.T_ID,20,30);
INSERT INTO SHOWTIME( ST_ID,DESCR,START_TIME,T_ID) VALUES('M','MORNING','10 AM',NEW.T_ID);
INSERT INTO SHOWTIME( ST_ID,DESCR,START_TIME,T_ID) VALUES('A','AFTERNOON','2 PM',NEW.T_ID);
INSERT INTO SHOWTIME( ST_ID,DESCR,START_TIME,T_ID) VALUES('E','EVENING','6 PM',NEW.T_ID);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(2) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASS`) VALUES
(1, 'admin10', 'admin@100');

-- --------------------------------------------------------

--
-- Structure for view `mov_rate_report`
--
DROP TABLE IF EXISTS `mov_rate_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mov_rate_report`  AS SELECT `m`.`M_ID` AS `M_ID`, `m`.`M_NAME` AS `M_NAME`, `m`.`Rate` AS `RATE` FROM `movie` AS `m` ORDER BY `m`.`Rate` AS `DESCdesc` ASC  ;

-- --------------------------------------------------------

--
-- Structure for view `number_of_employee`
--
DROP TABLE IF EXISTS `number_of_employee`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `number_of_employee`  AS SELECT `t`.`T_ID` AS `T_ID`, `t`.`T_NAME` AS `T_NAME`, count(`e`.`E_ID`) AS `COUNTEMP` FROM (`theatre` `t` join `employee` `e`) WHERE `t`.`T_ID` = `e`.`T_ID` GROUP BY `t`.`T_ID``T_ID`  ;

-- --------------------------------------------------------

--
-- Structure for view `showdetails`
--
DROP TABLE IF EXISTS `showdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `showdetails`  AS SELECT `sh`.`T_ID` AS `T_ID`, `sh`.`M_ID` AS `M_ID`, `sh`.`SCREEN_ID` AS `SCREEN_ID`, `sh`.`ST_ID` AS `ST_ID`, `t`.`T_NAME` AS `T_NAME`, `m`.`M_NAME` AS `M_NAME` FROM ((`shows` `sh` join `theatre` `t`) join `movie` `m`) WHERE `sh`.`T_ID` = `t`.`T_ID` AND `sh`.`M_ID` = `m`.`M_ID` AND `sh`.`STATUS` = 'R''R'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`E_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`SCREEN_ID`,`T_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`T_ID`,`M_ID`,`SCREEN_ID`,`ST_ID`,`STATUS`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`ST_ID`,`T_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`T_ID`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `M_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `T_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `theatre` (`T_ID`) ON DELETE CASCADE;

--
-- Constraints for table `screen`
--
ALTER TABLE `screen`
  ADD CONSTRAINT `screen_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `theatre` (`T_ID`) ON DELETE CASCADE;

--
-- Constraints for table `shows`
--
ALTER TABLE `shows`
  ADD CONSTRAINT `shows_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `theatre` (`T_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `shows_ibfk_2` FOREIGN KEY (`M_ID`) REFERENCES `movie` (`M_ID`) ON DELETE CASCADE;

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `theatre` (`T_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
