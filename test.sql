-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 08:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hero_banner`
--

CREATE TABLE `hero_banner` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hero_banner`
--

INSERT INTO `hero_banner` (`id`, `movie_id`, `image`) VALUES
(1, 1, ''),
(2, 1, '8302e27172fff45d6cb53f30b52fa7b8.png');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `trailer_link` varchar(500) NOT NULL,
  `imagename_cover` varchar(500) NOT NULL,
  `imdb` float NOT NULL,
  `release_date` int(5) NOT NULL,
  `genre` varchar(70) NOT NULL,
  `runtime` int(5) NOT NULL,
  `rated` varchar(10) NOT NULL,
  `tagline` varchar(250) NOT NULL,
  `cast` varchar(150) NOT NULL,
  `day1_date` date NOT NULL,
  `day1_time1` time NOT NULL,
  `day1_time2` time NOT NULL,
  `day1_time3` time NOT NULL,
  `price_1` varchar(9) NOT NULL,
  `day2_date` date NOT NULL,
  `day2_time1` time NOT NULL,
  `day2_time2` time NOT NULL,
  `day2_time3` time NOT NULL,
  `price_2` varchar(9) NOT NULL,
  `day3_date` date NOT NULL,
  `day3_time1` time NOT NULL,
  `day3_time2` time NOT NULL,
  `day3_time3` time NOT NULL,
  `price_3` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `description`, `image`, `trailer_link`, `imagename_cover`, `imdb`, `release_date`, `genre`, `runtime`, `rated`, `tagline`, `cast`, `day1_date`, `day1_time1`, `day1_time2`, `day1_time3`, `price_1`, `day2_date`, `day2_time1`, `day2_time2`, `day2_time3`, `price_2`, `day3_date`, `day3_time1`, `day3_time2`, `day3_time3`, `price_3`) VALUES
(1, 'Justice League', 'value=\"Fuelled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne and Diana Prince assemble a team of metahumans consisting of Barry Allen, Arthur Curry and Victor Stone to face the catastrophic threat of Steppenwolf and the Parademons who are on the hunt for three Mother Boxes on Earth.\"', 'Justice League.png', 'slider1.jpg', 'slider1.jpg', 9.9, 2022, 'Adventure,Science-fiction', 120, 'N/A', ' You can\'t save the world alone', 'Ben Affleck , Gal Gadot , Ray Fisher , Henry Cavil , Jason Momoa', '2023-08-05', '12:30:00', '19:10:00', '22:10:00', '500', '2023-08-08', '05:10:00', '08:10:00', '00:40:00', '1500', '2023-08-11', '18:10:00', '22:15:00', '03:12:00', '2800'),
(2, 'Edge of Tommorow', 'Thomas Craven is a detective who has spent years working the streets of Boston. When his own daughter is killed outside his own home, Craven soon realizes that her death is only one piece of an intriguing puzzle filled with corruption and conspiracy, and it falls to him to discover who is behind the crime.	', 'Edge of Tommorow.png', 'yUmSVcttXnI', '', 6.6, 0, 'Action,Drama,Thriller', 117, 'N/A', 'Some secrets take us to the edge', 'Emily Blunt , Tom Cruise , Bill Paxton', '2023-08-08', '01:20:00', '04:40:00', '13:30:00', '', '2023-08-09', '14:30:00', '18:30:00', '20:01:00', '', '2023-08-12', '12:40:00', '22:40:00', '02:30:00', ''),
(3, 'Enola Holmes 2', 'Now\r\n a detective-for-hire, Enola Holmes takes on her first official case to \r\nfind a missing girl as the sparks of a dangerous conspiracy ignite a \r\nmystery that requires the help of friends - and Sherlock himself - to \r\nunravel			', 'Enoles Holmes 2.png', '0DIftINqIjo', '', 6.8, 2022, 'Action,Adventure,Crime,Drama', 129, 'PG-13', 'N/A', 'Enoles Holmes , Sherlok Holmes , Grail ', '2023-08-12', '01:30:00', '05:45:00', '12:30:00', '', '2023-08-15', '17:40:00', '08:30:00', '05:01:00', '', '2023-08-20', '20:50:00', '23:45:00', '02:30:00', ''),
(4, 'Doctor Strange', 'After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under her wing and trains him to defend the world against evil.', 'Doctor Strange.png', 'https://youtu.be/aWzlQ2N6qqg', '', 7.4, 0, 'Action,Adventure,Fantasy', 115, '16+', ' The impossibilities are endless.', 'Benedict wong , Rachel Mcaddams , Chiwetel Ejjofor', '2023-08-06', '02:30:00', '05:50:00', '10:30:00', '', '2023-08-10', '16:50:00', '21:50:00', '12:01:00', '', '2023-08-12', '20:05:00', '23:25:00', '02:01:00', ''),
(5, 'Dolittle', 'After losing his wife seven years earlier, the eccentric Dr. John Dolittle, famed doctor and veterinarian of Queen Victoria’s England, hermits himself away behind the high walls of Dolittle Manor with only his menagerie of exotic animals for company. But when the young queen falls gravely ill, a reluctant Dolittle is forced to set sail on an epic adventure to a mythical island in search of a cure, regaining his wit and courage as he crosses old adversaries and discovers wondrous creatures.', 'Dolittle.png', 'https://youtu.be/FEf412bSPLs', '', 6.7, 0, 'Action,Adventure,Fantasy', 101, 'PG', ' He\'s not just a person', 'Robert Downey .Jr , Tom Holland', '2023-08-15', '01:00:00', '03:00:00', '06:00:00', '', '2023-08-17', '13:00:00', '22:58:00', '05:00:00', '', '2023-08-20', '19:00:00', '16:00:00', '01:00:00', ''),
(6, 'Doctor Strange : Multiver', 'Doctor Strange, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.', 'Doctor Strange  Multiverse of madness.png', 'https://youtu.be/aWzlQ2N6qqg', '', 7.4, 0, 'Action,Adventure,Fantasy', 126, '16', ' Enter a new dimension of Strange.', 'Xocilte Gomez , John Krasiniski , Rachel Mcaddams', '2023-09-20', '13:00:00', '03:00:00', '22:00:00', '', '0000-00-00', '00:20:23', '12:20:00', '16:20:00', '', '0000-00-00', '00:00:00', '00:20:23', '21:30:00', ''),
(7, 'Deadpool', 'The origin story of former Special Forces operative turned mercenary Wade Wilson, who, after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 'Deadpool.png', 'https://youtu.be/Xithigfg7dA', '', 7.6, 0, 'Action,Adventure,Comedy', 108, '12', ' Witness the beginning of a happy ending.', 'Ryan Renolds , Morena Baccerine , Stan Lee', '2023-09-12', '13:25:00', '15:25:00', '12:30:00', '', '0000-00-00', '00:20:23', '10:30:00', '02:30:00', '', '0000-00-00', '00:00:00', '00:20:23', '17:30:00', ''),
(8, 'Deadpool 2', 'Wisecracking mercenary Deadpool battles the evil and powerful Cable and other bad guys to save a boy\'s life.', 'Deadpool 2.png', 'https://youtu.be/D86RtevtfrA', '', 7.5, 0, 'Action,Adventure,Comedy', 120, '18+', 'Prepare for the Second Coming.', 'Ryan renolds , Josh brolin , zazie Beetz', '2023-08-03', '13:00:00', '00:00:00', '17:00:00', '', '0000-00-00', '00:20:23', '15:00:00', '19:00:00', '', '0000-00-00', '00:00:00', '00:20:23', '22:50:00', ''),
(9, 'Dark Phoenix', 'The X-Men face their most formidable and powerful foe when one of their own, Jean Grey, starts to spiral out of control. During a rescue mission in outer space, Jean is nearly killed when she\'s hit by a mysterious cosmic force. Once she returns home, this force not only makes her infinitely more powerful, but far more unstable. The X-Men must now band together to save her soul and battle aliens that want to use Grey\'s new abilities to rule the galaxy.', 'Dark Phoenix.png', 'https://youtu.be/1-q8C_c-nlM', '', 6.1, 0, 'Action,Adventure,Fantasy,Science-fiction', 120, 'PG-13', ' The Phoenix will rise.', 'sophie turner , james Mcovey , Tye Shreidan', '2023-09-01', '13:00:00', '15:00:00', '17:10:00', '', '0000-00-00', '00:20:23', '17:59:00', '22:59:00', '', '0000-00-00', '00:00:00', '00:20:23', '01:00:00', ''),
(10, 'Captain Marvel', 'The story follows Carol Danvers as she becomes one of the universe’s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races. Set in the 1990s, Captain Marvel is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe.', 'Captain Marvel.png', 'https://youtu.be/iuk77TjvfmE', '', 6.8, 0, 'Action,Adventure,Science-fiction', 124, '16+', 'Higher. Further. Faster.', 'Brie LArson , Samuel L Jackson', '2023-08-10', '13:00:00', '16:00:00', '07:09:00', '', '0000-00-00', '00:20:23', '17:10:00', '18:10:00', '', '0000-00-00', '00:00:00', '00:20:23', '19:09:00', ''),
(11, 'Captain America : the win', 'After the cataclysmic events in New York with The Avengers, Steve Rogers, aka Captain America is living quietly in Washington, D.C. and trying to adjust to the modern world. But when a S.H.I.E.L.D. colleague comes under attack, Steve becomes embroiled in a web of intrigue that threatens to put the world at risk. Joining forces with the Black Widow, Captain America struggles to expose the ever-widening conspiracy while fighting off professional assassins sent to silence him at every turn. When th', 'Captain America  the winter soldier.png', 'https://youtu.be/7SlILk2WMTI', '', 7.7, 0, 'Action,Science-fiction', 136, 'PG-13', ' In heroes we trust.', 'Chris Evens , Scarlett johnson', '2023-08-18', '13:00:00', '16:00:00', '21:00:00', '', '0000-00-00', '00:20:23', '09:00:00', '00:00:00', '', '0000-00-00', '00:00:00', '00:20:23', '19:00:00', ''),
(12, 'Captain America: The Firs', 'During World War II, Steve Rogers is a sickly man from Brooklyn who\'s transformed into super-soldier Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler\'s ruthless head of weaponry, and the leader of an organization that intends to use a mysterious device of untold powers for world domination.', 'Captain America The Firsst avenger.png', 'https://youtu.be/JerVrbLldXw', '', 7, 0, 'Action,Adventure,Science-fiction', 124, '7.0', ' When patriots become heroes', 'Chris Evans , Hayley Atwell', '2023-08-10', '17:37:00', '21:37:00', '23:37:00', '', '0000-00-00', '00:20:23', '18:37:00', '04:37:00', '', '0000-00-00', '00:00:00', '00:20:23', '10:00:00', ''),
(13, 'Captain America: Civil Wa', 'Following the events of Age of Ultron, the collective governments of the world pass an act designed to regulate all superhuman activity. This polarizes opinion amongst the Avengers, causing two factions to side with Iron Man or Captain America, which causes an epic battle between former allies.', 'Captain America Civil War.png', 'https://youtu.be/dKrVegVI0Us', '', 7.4, 0, 'Action,Adventure,Science-fiction', 124, 'N/A', ' United we stand. Divided we fall.', 'Chris Evans , Robert Downey Jr. , scarlett johnson', '2023-08-09', '18:20:00', '22:20:00', '01:20:00', '', '0000-00-00', '00:20:23', '21:20:00', '00:20:00', '', '0000-00-00', '00:00:00', '00:20:23', '23:20:00', ''),
(14, 'Black Panther : Wakanda F', 'Queen Ramonda, Shuri, M’Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T’Challa’s death. As the Wakandans strive to embrace their next chapter, the heroes must band together with the help of War Dog Nakia and Everett Ross and forge a new path for the kingdom of Wakanda.', 'Black Panther  Wakanda Forever.png', 'https://youtu.be/_Z3QKkl1WyM', '', 7.2, 0, 'Action,Adventure,Science-fiction', 162, 'PG-13', 'Forever.', 'Tenoch Hoverta , Letita Wright , Micheal B Jordan', '2023-08-13', '17:40:00', '21:40:00', '00:40:00', '', '0000-00-00', '00:20:23', '12:00:00', '18:00:00', '', '0000-00-00', '00:00:00', '00:20:23', '21:00:00', ''),
(15, 'Black Panther', 'King T\'Challa returns home to the reclusive, technologically advanced African nation of Wakanda to serve as his country\'s new leader. However, T\'Challa soon finds that he is challenged for the throne by factions within his own country as well as without. Using powers reserved to Wakandan kings, T\'Challa assumes the Black Panther mantle to join with ex-girlfriend Nakia, the queen-mother, his princess-kid sister, members of the Dora Milaje (the Wakandan \'special forces\') and an American secret age', 'Untitled design (15).png', 'https://youtu.be/xjDjIWPwcPU', '', 7.4, 0, 'Action,Adventure,Science-fiction', 135, '12A', ' Long live the king.', 'Chadwick Boseman , Micheal B Jordan , Letita Wright', '2023-08-02', '01:00:00', '18:05:00', '22:20:00', '', '2023-08-04', '19:20:00', '23:20:00', '01:20:00', '', '2023-08-08', '00:20:00', '14:20:00', '19:20:00', ''),
(16, 'Ben-10 : Race against tim', 'Ben, Gwen, and Max must stop an extraterrestrial who plans to open a gateway that leads to an alien invasion.', 'Ben-10  Race against time.png', 'https://youtu.be/psZxewRfIgw', '', 5.7, 0, 'Action,Adventure,Science-fiction', 67, 'PG', ' It\'s hero time!', 'Graham Phillips , Christian Anholts', '2023-09-05', '18:25:00', '20:00:00', '22:00:00', '', '0000-00-00', '00:20:23', '12:30:00', '22:30:00', '', '0000-00-00', '00:00:00', '00:20:23', '14:30:00', ''),
(17, 'Black Adam', 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods—and imprisoned just as quickly—Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 'Untitled design (17).png', 'https://youtu.be/X0tOpBuYasI', '', 7, 0, 'Action,Adventure,Science-fiction', 124, 'N/A', ' Power born from rage', 'dwayne Johnson , Aldis Hodge , Noah Centenio', '2023-09-12', '19:30:00', '21:30:00', '23:30:00', '', '2023-09-15', '08:30:00', '10:30:00', '19:30:00', '', '2023-09-18', '00:30:00', '00:30:00', '20:30:00', ''),
(18, 'Batman vs Superman Dawn o', 'Fearing the actions of a god-like Super Hero left unchecked, Gotham City’s own formidable, forceful vigilante takes on Metropolis’s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it’s ever known before.', 'Untitled design (18).png', 'https://youtu.be/0WWzgGyAH6Y', '', 7.4, 0, 'Action,Adventure,Science-fiction', 157, 'PG-13', 'who will win ?', 'henry cavill , Ben Afflckt', '2023-09-11', '18:20:00', '20:40:00', '23:00:00', '', '2023-09-12', '20:10:00', '22:40:00', '01:30:00', '', '2023-09-13', '18:30:00', '21:30:00', '12:36:00', ''),
(19, 'Ben 10 Alien Swarm', 'Ben and a mysterious girl from his past must prevent an alien threat from destroying the world.', 'Ben 10 Alien Swarm.png', 'https://youtu.be/bUzdFOkb_6g', '', 6.1, 0, 'Adventure', 90, 'PG', ' Go hero one more time!', 'Ryan Kelly , Galadiel Stienman', '2023-09-20', '18:40:00', '21:40:00', '00:40:00', '', '0000-00-00', '00:20:23', '12:40:00', '19:40:00', '', '0000-00-00', '00:00:00', '00:20:23', '09:30:00', ''),
(20, 'Avengers: Infinity War', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.', 'Untitled design (20).png', 'https://youtu.be/6ZfuNTqbHE8', '', 8.3, 0, 'Action,Adventure,Science-fiction', 149, 'AP-12', ' An entire universe. Once and for all.', 'Robert Downey Jr. , Chris Hemsworth , Mark Ruffalo', '2023-09-21', '13:00:00', '22:00:00', '12:00:00', '', '2023-09-22', '12:50:00', '20:50:00', '01:45:00', '', '2023-09-23', '22:50:00', '12:50:00', '21:50:00', ''),
(21, 'Batman Begins', 'Driven by tragedy, billionaire Bruce Wayne dedicates his life to uncovering and defeating the corruption that plagues his home, Gotham City. Unable to work within the system, he instead creates a new identity, a symbol of fear for the criminal underworld - The Batman.', 'Batman Begins.png', 'https://youtu.be/neY2xVmOfUM', '', 7.7, 0, 'Action,Comedy,Crime', 140, 'G', ' Evil fears the knight.', 'Chritian Bale , Liam Neeson , Katie Holmes', '2023-09-11', '18:00:00', '20:00:00', '22:00:00', '', '0000-00-00', '00:20:23', '19:00:00', '22:00:00', '', '0000-00-00', '00:00:00', '00:20:23', '03:00:00', ''),
(22, 'Avengers: Age Of ultron', 'When Tony Stark tries to jumpstart a dormant peacekeeping program, things go awry and Earth’s Mightiest Heroes are put to the ultimate test as the fate of the planet hangs in the balance. As the villainous Ultron emerges, it is up to The Avengers to stop him from enacting his terrible plans, and soon uneasy alliances and unexpected action pave the way for an epic and unique global adventure.', 'Untitled design (22).png', 'https://youtu.be/tmeOjFno6Do', '', 7.1, 0, 'Action,Adventure,Science-fiction', 141, 'PG-13', ' A New Age Has Come.', 'Robert Downey Jr. , Chris Hemsworth , Mark Ruffalo', '2023-09-11', '20:00:00', '22:00:00', '12:00:00', '', '2023-09-12', '20:00:00', '00:00:00', '09:00:00', '', '2023-09-13', '12:00:00', '19:00:00', '22:00:00', ''),
(23, 'Avengers : Endgame', 'After the devastating events of Avengers: Infinity War, the universe is in ruins due to the efforts of the Mad Titan, Thanos. With the help of remaining allies, the Avengers must assemble once more in order to undo Thanos\' actions and restore order to the universe once and for all, no matter what consequences may be in store.', 'Untitled design (23).png', 'https://youtu.be/TcMBFSGVi1c', '', 8.3, 0, 'Action,Adventure,Science-fiction', 181, '16+', ' Avenge the fallen.', 'Chris Evans , Robert Downey Jr. , Scarlett Johnson , Mark Ruffalo', '2023-08-03', '12:00:00', '15:00:00', '18:00:00', '', '2023-08-05', '15:00:00', '18:00:00', '21:00:00', '', '2023-08-06', '18:00:00', '00:00:00', '03:00:00', ''),
(24, 'Ant-Man', 'Armed with the astonishing ability to shrink in scale but increase in strength, master thief Scott Lang must embrace his inner-hero and help his mentor, Doctor Hank Pym, protect the secret behind his spectacular Ant-Man suit from a new generation of towering threats. Against seemingly insurmountable obstacles, Pym and Lang must plan and pull off a heist that will save the world.', 'Untitled design (25).png', 'https://youtu.be/pWdKf3MneyI', '', 7.1, 0, 'Action,Adventure,Science-fiction', 117, 'PG-13', ' Heroes don\'t get any bigger.', 'Paul Rudd , Micheal Dogals , Evengaline Lilly', '2023-08-12', '12:00:00', '15:00:00', '18:00:00', '', '2023-08-13', '18:00:00', '21:00:00', '00:00:00', '', '2023-08-14', '03:00:00', '05:20:00', '12:00:00', ''),
(25, ' Ant-Man and the Wasp: Qu', 'Super-Hero partners Scott Lang and Hope van Dyne, along with with Hope\'s parents Janet van Dyne and Hank Pym, and Scott\'s daughter Cassie Lang, find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought possible.', 'Untitled design (26).png', 'https://youtu.be/ZlNFpri-Y40', '', 6.5, 2017, 'Action,Adventure,Science-fiction', 125, 'PG-13', ' Witness the beginning of a new dynasty.', 'Paul Rudd , Evengaline Lilly , Jonathan majors', '2023-09-01', '12:00:00', '14:00:00', '16:00:00', '', '2023-09-03', '21:00:00', '12:00:00', '03:00:00', '', '2023-09-05', '13:00:00', '16:00:00', '21:00:00', ''),
(26, '2 Fast 2 Furious', 'It\'s a major double-cross when former police officer Brian O\'Conner teams up with his ex-con buddy Roman Pearce to transport a shipment of \"dirty\" money for shady Miami-based import-export dealer Carter Verone. But the guys are actually working with undercover agent Monica Fuentes to bring Verone down.', 'Untitled design (27).png', 'https://youtu.be/F_VIM03DXWI', '', 6.5, 0, '', 108, 'PG-13', 'How fast do you like it?', 'Paul Walker , tyriese Jybson , Eva Mendezs', '2023-09-03', '12:00:00', '15:30:00', '18:00:00', '', '2023-09-05', '13:30:00', '16:30:00', '22:30:00', '', '2023-09-07', '12:30:00', '18:30:00', '21:30:00', ''),
(27, 'Annihilation', 'A biologist signs up for a dangerous, secret expedition into a mysterious zone where the laws of nature don\'t apply.', 'Annihilation.png', 'https://youtu.be/0m3cPEbwwhg', '', 6.4, 2018, 'Horror,Science-fiction', 115, 'R', 'Fear what\'s inside.', 'Natalie portman , Jennifer Jason leigh , Gina Rodriguez', '2023-09-05', '13:00:00', '15:00:00', '20:00:00', '', '0000-00-00', '00:20:23', '18:45:00', '20:40:00', '', '0000-00-00', '00:00:00', '00:20:23', '05:40:00', ''),
(28, 'Enola Holmes ', 'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.', 'Untitled design (29).png', 'https://youtu.be/1d0Zf9sXlHk', '', 7.3, 2020, 'Adventure,Comedy,Crime', 123, 'M/12', 'Mystery runs in the family.', 'Mille bobby brown , Henry Cavil , Sam Claflin ', '2023-08-08', '12:00:00', '15:45:00', '00:45:00', '', '2023-08-09', '16:45:00', '18:45:00', '00:45:00', '', '2023-08-10', '12:00:00', '16:00:00', '20:00:00', ''),
(29, 'Extraction', 'Tyler Rake, a fearless mercenary who offers his services on the black market, embarks on a dangerous mission when he is hired to rescue the kidnapped son of a Mumbai crime lord. ', 'Untitled design (30).png', 'https://youtu.be/L6P3nI6VnlY', '', 7.4, 2020, 'Action,Thriller', 116, 'N/A', ' When the mission ends, redemption begins', 'Chris Hemsworth , Rudharak Jaiswal , Randeep Hooda ', '2023-08-21', '12:00:00', '15:00:00', '18:00:00', '', '2023-08-22', '21:00:00', '12:00:00', '03:50:00', '', '2023-08-24', '16:00:00', '22:00:00', '02:00:00', ''),
(30, 'F9', 'Dominic Toretto and his crew battle the most skilled assassin and high-performance driver they\'ve ever encountered: his forsaken brother.', 'Untitled design (31).png', 'https://youtu.be/aSiDu3Ywi8E', '', 7.2, 2021, 'Action,Adventure,Crime', 143, 'N/A', 'Justice is coming.', 'Vin Diesel , Michelle Rodriguez , Ludacris', '2023-08-12', '12:00:00', '15:00:00', '18:00:00', '', '2023-08-13', '15:00:00', '18:00:00', '12:00:00', '', '2023-08-15', '22:00:00', '12:00:00', '09:00:00', ''),
(31, 'Furious 7', 'Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother.', 'Untitled design (32).png', 'https://youtu.be/Skpu5HaVkOc', '', 7.2, 2015, 'Action,Crime,Thriller', 137, 'N/A', ' Vengeance hits home', 'Paul Walker , tyriese Jybson , Eva Mendezs , Vin Diesel', '2023-08-03', '12:00:00', '17:00:00', '20:00:00', '', '2023-08-05', '08:00:00', '00:00:00', '18:00:00', '', '2023-08-08', '18:25:00', '20:10:00', '00:25:00', ''),
(32, 'Fantastic Four', 'Four young outsiders teleport to a dangerous universe, which alters their physical form in shocking ways. Their lives irrevocably upended, the team must learn to harness their daunting new abilities and work together to save Earth from a former friend turned enemy.', 'Untitled design (33).png', 'https://youtu.be/_rRoD28-WgU', '', 4.4, 2015, 'Action,Adventure,Science-fiction', 100, 'PG-13', ' Change is coming.', 'Miles Teller , Micheal B Jordan , Kate Mara', '2023-08-10', '12:00:00', '16:00:00', '20:30:00', '', '2023-08-11', '15:30:00', '20:30:00', '00:30:00', '', '2023-08-13', '08:30:00', '18:30:00', '12:30:00', ''),
(33, 'Fast X', 'Over many missions and against impossible odds, Dom Toretto and his family have outsmarted, out-nerved and outdriven every foe in their path. Now, they confront the most lethal opponent they\'ve ever faced: A terrifying threat emerging from the shadows of the past who\'s fueled by blood revenge, and who is determined to shatter this family and destroy everything—and everyone—that Dom loves, forever.', 'Untitled design (35).png', 'https://youtu.be/32RAq6JzY-w', '', 7.3, 2023, 'Action,Crime,Thriller', 142, 'N/A', ' The end of the road begins.', 'Vin Diesel , Michelle Rodriguez , Ludacris', '2023-09-13', '02:30:00', '07:30:00', '19:30:00', '', '2023-09-15', '14:30:00', '16:30:00', '18:30:00', '', '2023-09-18', '08:30:00', '16:30:00', '18:30:00', ''),
(34, 'Fast 5', 'Former cop Brian O\'Conner partners with ex-con Dom Toretto on the opposite side of the law. Since Brian and Mia Toretto broke Dom out of custody, they\'ve blown across many borders to elude authorities. Now backed into a corner in Rio de Janeiro, they must pull one last job in order to gain their freedom.', 'Untitled design (34).png', 'https://youtu.be/vcn2GOuZCKI', '', 7.3, 2011, 'Action,Crime,Thriller', 130, 'PG-13', 'Get the fifth gear.', 'Vin Diesel , Michelle Rodriguez , Ludacris , Paul Walker', '2023-08-11', '00:00:00', '00:00:00', '00:00:00', '', '2023-08-12', '00:00:00', '00:00:00', '00:00:00', '', '2023-08-12', '00:00:00', '00:00:00', '00:00:00', ''),
(35, 'Fast 5', 'Former cop Brian O\'Conner partners with ex-con Dom Toretto on the opposite side of the law. Since Brian and Mia Toretto broke Dom out of custody, they\'ve blown across many borders to elude authorities. Now backed into a corner in Rio de Janeiro, they must pull one last job in order to gain their freedom.', 'Untitled design (34).png', '', '', 7.3, 2011, 'Action,Crime,Thriller', 130, 'PG-13', 'Get the fifth gear.', 'Vin Diesel , Michelle Rodriguez , Ludacris , Paul Walker', '2023-08-11', '14:29:00', '18:35:00', '19:40:00', '', '2023-08-12', '12:00:00', '14:40:00', '20:35:00', '', '2023-08-13', '08:35:00', '17:35:00', '20:35:00', ''),
(36, 'Fast and Furious 6', 'Hobbs has Dominic and Brian reassemble their crew to take down a team of mercenaries: Dominic unexpectedly gets convoluted also facing his presumed deceased girlfriend, Letty.', 'Untitled design (36).png', 'https://youtu.be/dKi5XoeTN0k', '', 6.8, 2013, 'Action,Crime,Thriller', 131, '12A', 'All roads lead to this', 'Vin Diesel , Michelle Rodriguez , Ludacris', '2023-08-03', '14:40:00', '17:40:00', '20:40:00', '', '2023-08-07', '12:40:00', '15:40:00', '20:40:00', '', '2023-08-08', '15:40:00', '18:40:00', '20:40:00', ''),
(37, 'Ghost Busters : After Lif', 'After losing their academic posts at a prestigious university, a team of parapsychologists goes into business as proton-pack-toting \"ghostbusters\" who exterminate ghouls, hobgoblins and supernatural pests of all stripes. An ad campaign pays off when a knockout cellist hires the squad to purge her swanky digs of demons that appear to be living in her refrigerator.', 'Ghost Busters  After Life.png', 'https://youtu.be/ahZFCF--uRY', '', 7.5, 1984, 'Comedy,Fantasy', 107, 'PG', 'They ain\'t afraid of no ghost.', 'Bil murray , dyn Akkroyd', '2023-08-01', '12:00:00', '14:00:00', '17:10:00', '', '0000-00-00', '00:20:23', '15:10:00', '18:10:00', '', '0000-00-00', '00:00:00', '00:20:23', '09:10:00', ''),
(38, 'Ghost Rider: Spirit of Ve', 'When the devil resurfaces with aims to take over the world in human form, Johnny Blaze reluctantly comes out of hiding to transform into the flame-spewing supernatural hero Ghost Rider -- and rescue a 10-year-old boy from an unsavory end.', 'Untitled design (38).png', 'https://youtu.be/UUObgxCoUgA', '', 5, 2011, 'Action,Fantasy,Thriller', 96, 'PG-13', 'He rides again.', 'Nicholas Cage , Violate Placido , Ciara Hinds', '2023-08-08', '15:10:00', '18:15:00', '20:15:00', '', '2023-08-10', '09:15:00', '16:15:00', '21:15:00', '', '2023-08-12', '08:15:00', '19:15:00', '22:15:00', ''),
(39, 'Green Lantern', 'For centuries, a small but powerful force of warriors called the Green Lantern Corps has sworn to keep intergalactic order. Each Green Lantern wears a ring that grants him superpowers. But when a new enemy called Parallax threatens to destroy the balance of power in the Universe, their fate and the fate of Earth lie in the hands of the first human ever recruited.', 'Untitled design (40).png', 'https://youtu.be/_axLoYlwwmU', '', 5.2, 2011, 'Action,Adventure,Science-fiction,Thriller', 114, '', 'In our darkest hour, there will be light.', 'Ryan renolds , Blake lively', '2023-08-03', '15:30:00', '19:30:00', '21:30:00', '', '2023-08-05', '17:30:00', '19:30:00', '22:30:00', '', '2023-08-06', '03:30:00', '07:30:00', '22:30:00', ''),
(40, 'Ghost Rider', 'In order to save his dying father, young stunt cyclist Johnny Blaze sells his soul to Mephistopheles and sadly parts from the pure-hearted Roxanne Simpson, the love of his life. Years later, Johnny\'s path crosses again with Roxanne, now a go-getting reporter, and also with Mephistopheles, who offers to release Johnny\'s soul if Johnny becomes the fabled, fiery \'Ghost Rider\'.', 'Untitled design (39).png', 'https://youtu.be/nu6R7ypaz5g', '', 5.5, 2007, 'Action,Fantasy,Thriller', 114, '12', 'Hell is about to be unleashed.', 'Nicholas Cage , Violate Placido , Ciara Hinds', '2023-09-09', '15:30:00', '17:30:00', '20:30:00', '', '2023-09-10', '03:30:00', '06:30:00', '20:30:00', '', '2023-09-11', '09:30:00', '18:30:00', '21:30:00', ''),
(41, 'Guardian of the Galaxy .v', 'The Guardians must fight to keep their newfound family together as they unravel the mysteries of Peter Quill\'s true parentage.', 'Untitled design (41).png', 'https://youtu.be/dW1BIid8Osg', '', 7.6, 2017, 'Action,Adventure,Science-fiction', 137, '16+', 'Obviously.', 'Chris Pratt , Zoa Saldaria , vin Diesel', '2023-08-11', '15:30:00', '18:35:00', '21:35:00', '', '2023-08-12', '16:35:00', '18:35:00', '21:35:00', '', '2023-08-14', '10:40:00', '18:40:00', '22:40:00', ''),
(42, 'Guardian of the Galaxy', 'Light years from Earth, 26 years after being abducted, Peter Quill finds himself the prime target of a manhunt after discovering an orb wanted by Ronan the Accuser.', 'Untitled design (43).png', 'https://youtu.be/d96cjJhvlMA', '', 7.9, 2014, 'Action,Adventure,Science-fiction', 120, 'PG-13', ' All heroes start somewhere.', 'Chris Pratt , Zoa Saldaria , vin Diesel         ', '2023-08-08', '06:50:00', '16:50:00', '20:50:00', '', '2023-08-08', '10:50:00', '17:50:00', '21:50:00', '', '2023-08-08', '09:50:00', '19:50:00', '21:50:00', ''),
(43, 'Guardian of the Galaxy .v', 'Peter Quill, still reeling from the loss of Gamora, must rally his team around him to defend the universe along with protecting one of their own. A mission that, if not completed successfully, could quite possibly lead to the end of the Guardians as we know them.', 'Untitled design (42).png', 'https://youtu.be/u3V5KDHRQvk', '', 8.1, 2023, 'Action,Adventure,Science-fiction', 150, 'PG-13', ' Once more with feeling.', 'Chris Pratt , Zoa Saldaria , vin Diesel', '2023-08-08', '16:50:00', '18:50:00', '21:50:00', '', '2023-08-09', '05:50:00', '08:50:00', '22:50:00', '', '2023-08-10', '10:50:00', '18:50:00', '21:50:00', ''),
(44, 'Harry Potter', 'Harry Potter has lived under the stairs at his aunt and uncle\'s house his whole life. But on his 11th birthday, he learns he\'s a powerful wizard—with a place waiting for him at the Hogwarts School of Witchcraft and Wizardry. As he learns to harness his newfound powers with the help of the school\'s kindly headmaster, Harry uncovers the truth about his parents\' deaths—and about the villain who\'s to blame.', 'Untitled design (44).png', 'https://youtu.be/17ywQS6XO-M', '', 7.9, 2001, 'Adventure,Fantasy', 152, 'A', ' Let the magic begin.', 'Daniel radcliffe , Rupert grint , Emma Watson', '2023-09-08', '16:00:00', '18:00:00', '20:00:00', '', '2023-09-09', '04:00:00', '10:00:00', '14:00:00', '', '2023-09-11', '10:00:00', '15:00:00', '23:59:00', ''),
(45, 'The Incredible Hulk', 'Scientist Bruce Banner scours the planet for an antidote to the unbridled force of rage within him: the Hulk. But when the military masterminds who dream of exploiting his powers force him back to civilization, he finds himself coming face to face with a new, deadly foe.', 'Untitled design (45).png', 'https://youtu.be/xbqNb2PFKKA', '', 6.2, 2008, 'Action,Adventure,Science-fiction', 114, 'PG-13', ' You\'ll like him when he\'s angry.', 'edward Nortion , Liv Tyler', '2023-08-08', '04:00:00', '13:00:00', '21:00:00', '', '2023-08-09', '06:05:00', '20:05:00', '22:05:00', '', '2023-08-10', '10:05:00', '20:05:00', '23:05:00', ''),
(46, 'Inception', 'Cobb, a skilled thief who commits corporate espionage by infiltrating the subconscious of his targets is offered a chance to regain his old life as payment for a task considered to be impossible: \"inception\", the implantation of another person\'s idea into a target\'s subconscious.', 'Untitled design (46).png', 'https://youtu.be/YoHD9XEInc0', '', 8.4, 2010, 'Action,Adventure,Science-fiction', 148, 'N/A', ' Your mind is the scene of the crime.', 'Leonardo Decapno , Ken Watenabe , Tom Hardy', '2023-08-15', '06:00:00', '10:00:00', '22:00:00', '', '2023-08-16', '06:00:00', '09:00:00', '00:00:00', '', '2023-08-17', '00:00:00', '18:00:00', '21:00:00', ''),
(47, 'Inter Stellar', 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.', 'Untitled design (47).png', 'https://youtu.be/zSWdZVtXT7E', '', 8.4, 2014, 'Adventure,Drama,Science-fiction', 2014, 'AG', ' Mankind was born on Earth. It was never meant to die here.', 'Mathew McConaughey , Anna Hathaway ', '2023-08-18', '06:00:00', '21:00:00', '00:00:00', '', '2023-08-19', '00:00:00', '20:00:00', '23:00:00', '', '2023-08-20', '06:00:00', '12:00:00', '18:00:00', ''),
(48, 'Iron Man 2', 'With the world now aware of his dual life as the armored superhero Iron Man, billionaire inventor Tony Stark faces pressure from the government, the press and the public to share his technology with the military. Unwilling to let go of his invention, Stark, with Pepper Potts and James \'Rhodey\' Rhodes at his side, must forge new alliances – and confront powerful enemies.', 'Untitled design (48).png', 'https://youtu.be/wKtcmiifycU', '', 6.8, 2010, 'Action,Adventure,Science-fiction', 124, 'K-11', ' It\'s not the armor that makes the hero, but the man inside.', 'Robert Downey Jr. , Scarlett Johnson', '2023-09-12', '12:00:00', '15:00:00', '18:00:00', '', '2023-09-14', '12:40:00', '15:40:00', '17:40:00', '', '2023-09-25', '02:45:00', '14:45:00', '17:45:00', ''),
(49, 'Iron Man 3', 'When Tony Stark\'s world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.', 'Untitled design (49).png', 'https://youtu.be/Ke1Y3P9D0Bc', '', 6.9, 2013, 'Action,Adventure,Science-fiction', 130, 'N/A', 'Unleash the power behind the armor.', 'Robert Downey Jr. , Scarlett Johnson', '2023-09-15', '00:45:00', '04:45:00', '13:45:00', '', '2023-09-16', '13:45:00', '16:45:00', '20:45:00', '', '2023-09-18', '12:45:00', '15:45:00', '17:45:00', ''),
(51, 'John wick 2', 'John Wick is forced out of retirement by a former associate looking to seize control of a shadowy international assassins’ guild. Bound by a blood oath to aid him, Wick travels to Rome and does battle against some of the world’s most dangerous killers', 'Untitled design (51).png', 'https://youtu.be/XGk2EfbD_Ps', '', 7.3, 2017, 'Action,Crime,Thriller', 122, '18+', ' Never stab the devil in the back.', 'Keanu Reeves , Common , Ian Mcshane ', '2023-09-18', '23:50:00', '14:50:00', '17:50:00', '', '2023-09-19', '12:45:00', '14:00:00', '17:00:00', '', '2023-09-21', '06:00:00', '14:00:00', '21:00:00', ''),
(52, 'dsfsdf', '', 'Annihilation.png', '', 'Black Adam.png', 0, 0, '', 0, '', '', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', ''),
(53, 'check ', '', 'slider1.jpg', '', '', 0, 0, '', 0, '', '', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '', '0000-00-00', '00:00:00', '00:00:00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `now_in_theatres`
--

CREATE TABLE `now_in_theatres` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `now_in_theatres`
--

INSERT INTO `now_in_theatres` (`id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `popular_movies`
--

CREATE TABLE `popular_movies` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `popular_movies`
--

INSERT INTO `popular_movies` (`id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `suggested_movies`
--

CREATE TABLE `suggested_movies` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `suggested_movies`
--

INSERT INTO `suggested_movies` (`id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `top_rated_movies`
--

CREATE TABLE `top_rated_movies` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `top_rated_movies`
--

INSERT INTO `top_rated_movies` (`id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_movies`
--

CREATE TABLE `upcoming_movies` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `upcoming_movies`
--

INSERT INTO `upcoming_movies` (`id`, `movie_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `datecreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `datecreated`) VALUES
(1, 'dsfdsdfdf', 'df', 'df', 'finalgamers67@gmail.com', 'dff', '2023-07-30'),
(2, 'dsfdsdfdf', 'df', 'df', 'finalgamers67@gmail.com', 'dff', '2023-07-30'),
(3, 'Sabeer', 'Faisal', 'sabeerfaisal', 'sabeer@gmail.com', '123', '2023-07-30'),
(4, 'Sabeer', 'Faisal', 'sabeerfaisal', 'sabeer@gmail.com', '123sdsd', '2023-07-30'),
(5, 'sdssdsd', 'sfsd', 'sfdf', 'sfsf', 'sdfdsf', '2023-07-30'),
(6, '', '', 'sabeerfaisal', 'sdsd', 'sd', '2023-07-30'),
(7, '', '', 'sabeerfaisal', '', '', '2023-07-30'),
(8, '', '', 'sabeerfaisal', '', '', '2023-07-30'),
(9, '', '', 'sabeerfaisal', '', '', '2023-07-30'),
(10, 'Sabeer', 'Faisal', 'sabeerfaisal', 'sabeer@gmail.com', 'saber', '2023-07-31'),
(11, 'ssd', 'sdfsdgs', 'sdgfsg', 'sdgsg', 'sdgsdg', '2023-07-31'),
(12, 'Sabeer', 'Faisal', 'sasd', 'sdsdgf', 'fgg', '2023-07-31'),
(13, 'Sabeer', 'Faisal', 'sabeserfaisal', 'finalgamers67@gmail.comss', 'ffsf', '2023-07-31'),
(14, 'dsgsdg', 'sdfsdf', 'sabeerfaisald', 'finalgamers67@gmail.com', 'dgdg', '2023-07-31'),
(15, 'Sabeer', 'Faisal', 'sabeerfaisa', 'sabeer@gmail.com', '123', '2023-07-31'),
(16, '', '', 'sabeerfaisal', 'sf', '', '2023-07-31'),
(17, '', '', 'sabeerfaisal', 'dsf', '', '2023-07-31'),
(18, '', '', 'sabeerfaisalds', 'finalgamers67@gmail.comd', 'asd', '2023-07-31'),
(19, 'Sabeer', 'Faisal', 'saf', 'dsgch', 'dgs', '2023-07-31'),
(20, 'dsfdg', 'sdfsd', 'sdfdsf', 'sdfd', 'dfssdf', '2023-07-31'),
(21, 'sdfsd', 'sdfds', 'sdfds', 'sdfsdf', 'asdfsdaf', '2023-07-31'),
(22, 'sd', '', '', '', '', '2023-07-31'),
(23, 'dfdsf', 'df', 'sabeerfaisaldf', 'ads', 'fg', '2023-07-31'),
(24, 'Sabeer', 'Faisal', 'sabeerfaisaldfdg', 'gdfg', 'sdfg', '2023-07-31'),
(25, 'Sabeer', 'Faisal', 'sabeerfais', 'finalmers67@gmail.com', '123', '2023-08-04'),
(26, 'Sabeer', 'Faisal', 'sabeerfaisal', 'finalgamers67@gmail.com', '123', '2023-08-12'),
(27, 'Sabeer', 'Faisal', 'sabeerfaisal', 'finalgamers67@gmail.com', '123', '2023-08-12'),
(28, 'Sabeer', 'Faisal', 'sabeerfaisal', 'finalgamers67@gmail.com', '123', '2023-08-12'),
(29, 'Sabeer', 'Faisal', 'sabeerfaisal', 'finalgamers67@gmail.com', '123', '2023-08-12'),
(30, 'sd', 'df', 'dfs', 'sfs', 'sdd', '2023-08-12'),
(31, 'dsg', 'fgddfg', 'gdfgds', 'gfdgd', 'dfg', '2023-08-12'),
(32, 'djlghjldfg', 'fgjldfhg', 'djlsfhj.lsdf', 'dlsjfhlsdff', 'jkgsdfksd', '2023-08-12'),
(33, 'sdjhfjksh', 'jkdhgkjsdbgk', 'SDKJBFKJSB', 'bkdjbfdb', 'sbdjkfsdf', '2023-08-12'),
(34, 'dfbsdfk', 'hbdhkbfdhsj', 'bhkdfbmsdbm', 'hkbfvhksdvfj', 'jhdvv', '2023-08-12'),
(35, 'Sabeer ', 'Faisal', 'sabeer123', 'abc', 'abc', '2023-08-12'),
(36, 'Sabeer', 'Faisal', 'src', 'src', 'src', '2023-08-12'),
(37, 'Sabeer ', 'Faisal', 'check', 'check', 'check', '2023-08-13'),
(38, 'Sabeer', 'Faisal', 'srk', 'srk', 'srk', '2023-08-13'),
(39, 'sk', 'sk', 'sk', 'sk', 'sk', '2023-08-15'),
(40, 'Sabeer', 'Faisal', 'syedsabeer', 'syedsabeer6198@gmail.com', '123', '2023-08-16'),
(41, 'efdg', 'dfgdfgdfgdff', 'ffd', 'fgdg', 'sdgdsf', '2023-08-16'),
(42, 'gsdfg', 'dfgd', 'fdgdsg', 'fdgd', 'fdgsg', '2023-08-16'),
(43, 'dfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfd', 'sdfsdfdsd', '2023-08-16'),
(44, 'sdfdfsdfdsf', 'sds', 'sdsd', 'sdsdsd', 'sds', '2023-08-16'),
(45, 'Sabeer', 'sdfsdf', 'sdfdsfdsdsf', 'dsfsf', 'sdfsdf', '2023-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hero_banner`
--
ALTER TABLE `hero_banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hero_banner_fk` (`movie_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `now_in_theatres`
--
ALTER TABLE `now_in_theatres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `now_in_theatres_fk` (`movie_id`);

--
-- Indexes for table `popular_movies`
--
ALTER TABLE `popular_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `popular_movies_fk` (`movie_id`);

--
-- Indexes for table `suggested_movies`
--
ALTER TABLE `suggested_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suggested_movies_fk` (`movie_id`);

--
-- Indexes for table `top_rated_movies`
--
ALTER TABLE `top_rated_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `top_rated_movies_fk` (`movie_id`);

--
-- Indexes for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upcoming_movies_fk` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hero_banner`
--
ALTER TABLE `hero_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `now_in_theatres`
--
ALTER TABLE `now_in_theatres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popular_movies`
--
ALTER TABLE `popular_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suggested_movies`
--
ALTER TABLE `suggested_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `top_rated_movies`
--
ALTER TABLE `top_rated_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hero_banner`
--
ALTER TABLE `hero_banner`
  ADD CONSTRAINT `hero_banner_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `now_in_theatres`
--
ALTER TABLE `now_in_theatres`
  ADD CONSTRAINT `now_in_theatres_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `popular_movies`
--
ALTER TABLE `popular_movies`
  ADD CONSTRAINT `popular_movies_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suggested_movies`
--
ALTER TABLE `suggested_movies`
  ADD CONSTRAINT `suggested_movies_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `top_rated_movies`
--
ALTER TABLE `top_rated_movies`
  ADD CONSTRAINT `top_rated_movies_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `upcoming_movies`
--
ALTER TABLE `upcoming_movies`
  ADD CONSTRAINT `upcoming_movies_fk` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
