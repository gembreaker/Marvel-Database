-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2020 at 06:51 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marvel_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `filmid` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `releasedate` bigint(15) NOT NULL,
  `agerating` varchar(4) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `length` varchar(10) NOT NULL,
  `video` varchar(150) NOT NULL,
  `poster` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`filmid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`filmid`, `title`, `description`, `releasedate`, `agerating`, `genre`, `length`, `video`, `poster`) VALUES
(1, 'Iron Man', 'When Tony Stark, an industrialist, is captured, he constructs a high-tech armoured suit to escape. Once he manages to escape, he decides to use his suit to fight against evil forces to save the world.', 1209686400, '12A', '2', '2h 6m', 'https://www.youtube.com/embed/mAA3XMBFoEw', 'Media/IronMan.jpg'),
(2, 'The Incredible Hulk', 'Dr Bruce Banner subjects himself to high levels of gamma radiation which triggers his transformation into a huge green creature, the Hulk, whenever he experiences negative emotions such as anger.', 1213315200, '12A', '2', '2h 15m', 'https://www.youtube.com/embed/D5n5C7WqxYE', 'Media/IncredibleHulk.jpg'),
(3, 'Iron Man 2', 'Tony Stark is under pressure from various sources, including the government, to share his technology with the world. He must find a way to fight them while also tackling his other enemies.', 1272585600, '12A', '2', '2h 4m', 'https://www.youtube.com/embed/DIfgxIv5xmk', 'Media/IronMan2.jpg'),
(4, 'Thor', 'Thor is exiled by his father, Odin, the King of Asgard, to the Earth to live among mortals. When he lands on Earth, his trusted weapon Mjolnir is discovered and captured by S.H.I.E.L.D.', 1303862400, '12A', '3', '1h 55m', 'https://www.youtube.com/embed/KR4cjX--gUk', 'Media/thor.jpg'),
(5, 'Captain America: The First Avenger', 'During World War II, Steve Rogers decides to volunteer in an experiment that transforms his weak body. He must now battle a secret Nazi organisation headed by Johann Schmidt to defend his nation.', 1311897600, '12A', '1', '2h 4m', 'https://www.youtube.com/embed/J_rePe566kA', 'Media/cafirstavenger.jpg'),
(8, 'Marvel Avengers Assemble', 'Nick Fury is compelled to launch the Avengers Initiative when Loki poses a threat to planet Earth. His squad of superheroes put their minds together to accomplish the task.', 1335398400, '12A', '2', '2h 23m', 'https://www.youtube.com/embed/NPoHPNeU9fc', 'Media/TheAvengers.jpg'),
(9, 'Iron Man 3', 'Tony Stark encounters a formidable foe called the Mandarin. After failing to defeat his enemy, he embarks on a journey with relentless consequences and a suit that ceases to exist.', 1366848000, '12A', '1', '2h 11m', 'https://www.youtube.com/embed/6JCkeoE8UvY', 'Media/IronMan3.jpg'),
(10, 'Thor: The Dark World', 'Malekith, the leader of the Dark Elves, returns years later to take Aether, a weapon, from Asgard in order to force the Nine Realms into darkness. Now, it is up to Thor to stop him.', 1383868800, '12A', '1', '1h 52m', 'https://www.youtube.com/embed/hqpKOvJDuZE', 'Media/ThorDarkWorld.jpg'),
(11, 'Captain America: The Winter Soldier', 'Steve Rogers, along with Black Widow and Falcon, must uncover the secrets hidden within SHIELD while also battling a dangerous new enemy, the Winter Soldier.', 1395792000, '12A', '1', '2h 16m', 'https://www.youtube.com/embed/HqJYrBy9hP4', 'Media/CAWinterSoldier.jpg'),
(12, 'Guardians of the Galaxy', 'Peter escapes from the planet Morag with a valuable orb that Ronan the Accuser wants. He eventually forms a group with unwilling heroes to stop Ronan.', 1406764800, '12A', '4', '2h 5m', 'https://www.youtube.com/embed/Q0BKcNta7TU', 'Media/GOTG.jpg'),
(13, 'Avengers: Age of Ultron', 'Tony Stark builds an artificial intelligence system named Ultron with the help of Bruce Banner. When the sentient Ultron makes plans to wipe out the human race, the Avengers set out to stop him.', 1429747200, '12A', '2', '2h 22m', 'https://www.youtube.com/embed/PqkR0SwFN_4', 'Media/AOU.jpg'),
(14, 'Ant-Man', 'Scott, a master thief, gains the ability to shrink in scale with the help of a futuristic suit. Now he must rise to the occasion of his superhero status and protect his secret from unsavoury elements.', 1436313600, '12A', '1', '1h 58m', 'https://www.youtube.com/embed/2UyawTDU-EI', 'Media/AntMan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `GenreID` int(3) NOT NULL AUTO_INCREMENT,
  `genrename` varchar(30) NOT NULL,
  PRIMARY KEY (`GenreID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreID`, `genrename`) VALUES
(1, 'Action/Adventure'),
(2, 'Action/Sci-fi'),
(3, 'Fantasy/Action'),
(4, 'Sci-fi/Adventure'),
(5, 'Action'),
(6, 'Drama'),
(7, 'Sci-fi'),
(8, 'Western');

-- --------------------------------------------------------

--
-- Table structure for table `tvshows`
--

DROP TABLE IF EXISTS `tvshows`;
CREATE TABLE IF NOT EXISTS `tvshows` (
  `tvid` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `firstepisodedate` bigint(15) NOT NULL,
  `noofepisodes` int(4) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `video` varchar(150) NOT NULL,
  `poster` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`tvid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvshows`
--

INSERT INTO `tvshows` (`tvid`, `title`, `description`, `firstepisodedate`, `noofepisodes`, `genre`, `video`, `poster`) VALUES
(1, 'Agents of S.H.I.E.L.D.', 'Agent Phil Coulson leads a team of highly skilled agents from the global law-enforcement organisation known as S.H.I.E.L.D. Together, they combat extraordinary and inexplicable threats.', 1379980800, 123, '5', 'https://www.youtube.com/embed/T3T-evQZiQo', 'Media/agentsofshield.jpg'),
(2, 'Agent Carter', 'Life changes for Peggy Carter after her boyfriend Steve Rogers is feared dead. Now she leads a dual life by doing administrative work as well as working as a S.H.I.E.L.D. agent under Howard Stark.', 1420502400, 18, '5', 'https://www.youtube.com/embed/qPiMNPlbijw', 'Media/agentcarter.jpg'),
(3, 'Inhumans', 'After a coup attempt by the military against King Black Bolt, the people of Attilan must find a way to escape and survive persecution.', 1506643200, 8, '6', 'https://www.youtube.com/embed/xU9Z6cKsbY0', 'Media/Inhumans.jpg'),
(4, 'Daredevil', 'Matt Murdock manages to overcome the challenges that he faces due to him being blind since childhood and fights criminals as a lawyer and Daredevil.', 1428624000, 39, '7', 'https://www.youtube.com/embed/jAy6NJ_D5vU', 'Media/daredevil.jpg'),
(5, 'Jessica Jones', 'Jessica Jones is a super-powered woman who had a brief superhero career until an incident where the villainous Kilgrave caused her to kill someone.', 1447977600, 39, '6', 'https://www.youtube.com/embed/nWHUjuJ8zxE', 'Media/jessicajones.jpg'),
(6, 'Luke Cage', 'When a sabotaged experiment gives him super strength and unbreakable skin, Luke Cage becomes a fugitive attempting to rebuild his life in Harlem and must soon confront his past and fight a battle for the heart of his city.', 1475193600, 26, '8', 'https://www.youtube.com/watch?v=ORa4hPhGrpo', 'Media/LukeCage.jpg'),
(7, 'Iron Fist', 'A young man is bestowed with incredible martial arts skills and a mystical force known as the Iron Fist.', 1489708800, 23, '5', 'https://www.youtube.com/embed/f9OKL5no-S0', 'Media/1587471598-Ironfist.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(60) NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `profilepic` varchar(60) DEFAULT NULL,
  `admintype` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `username`, `password`, `dob`, `email`, `profilepic`, `admintype`) VALUES
(1, NULL, NULL, 'admin', 'password1', NULL, NULL, '', 1),
(2, 'Gemma', 'Dunlop', 'gemmaisawesome', 'gemma612', '1999-12-06', 'gemma.dunlop612@gmail.com', 'Media/1587478548-ProfilePhoto2.jpg', NULL),
(11, 'Rhys', 'Davies', 'rhysdavies', 'hello123', '1999-08-04', 'rhysdavies48@gmail.com', 'Media/1587482569-Rhys2.jpg', NULL),
(17, 'Iwan', 'Jones', 'iwanjones412', 'ilovebikes', '1999-12-04', 'iwanjones412@outlook.com', '', NULL),
(18, 'Shamuel', 'Hashan', 'shamhashan', 'ilovefilms', '2000-08-21', 'shamuelmiah7@gmail.com', '', NULL),
(21, 'Mark', 'Huntly', 'markhuntly', 'ilovevans', '1971-07-21', 'markhuntly123@hotmail.com', 'Media/1587482850-markyboo.jpeg', NULL),
(22, 'Connor', 'Ellement', 'compoundzebra10', 'ilovetiktok', '1998-09-19', 'connorellement@hotmail.com', '', NULL),
(24, 'Susan', 'O\'brian', 'susiebri', 'rhinosarecute', '1987-12-07', 'susiebrian@gmail.com', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
