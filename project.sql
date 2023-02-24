-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 07:41 AM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `questionName` varchar(5000) NOT NULL,
  `option1` varchar(5000) NOT NULL,
  `option2` varchar(5000) NOT NULL,
  `option3` varchar(5000) NOT NULL,
  `option4` varchar(5000) NOT NULL,
  `answer` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionName`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, 'In the UK, the abbreviation NHS stands for National what Service?', 'Humanity', 'Health', 'Honour', 'Household', 'Health'),
(2, 'Which Disney character famously leaves a glass slipper behind at a royal ball?', 'Pocahontas', 'Sleeping beauty', 'Cinderella', 'Elsa', 'Cinderella'),
(3, 'What name is given to the revolving belt machinery in an airport that delivers checked luggage from the plane to baggage reclaim?', 'Hangar', 'Terminal', 'Concourse', 'Carousel', 'Carousel'),
(4, 'Which of these brands was chiefly associated with the manufacture of household locks?', 'Philips', 'Flymo', 'Chubb', 'Ronseal', 'Chubb'),
(5, 'The hammer and sickle is one of the most recognisable symbols of which political ideology?', 'Republicanism', 'Communism', 'Conservatism', 'Liberalism', 'Communism'),
(6, 'Which toys have been marketed with the phrase ''robots in disguise''?', 'Bratz Dolls', 'Sylvanian Families', 'Hatchimals', 'Transformers', 'Transformers'),
(7, 'Obstetrics is a branch of medicine particularly concerned with what?', 'Childbirth', 'Broken bones', 'Heart conditions', 'Old age', 'Childbirth'),
(8, 'In Doctor Who, what was the signature look of the fourth Doctor, as portrayed by Tom Baker?', 'Bow-tie, braces and tweed jacket', 'Wide-brimmed hat and extra long scarf', 'Pinstripe suit and trainers', 'Cape, verlvet jacket and frilly shirt', 'Wide-brimmed hat and extra long scarf'),
(9, 'What does the word loquacious mean?', 'Angry', 'Chatty', 'Beautiful', 'Shy', 'Chatty'),
(10, 'Which of these religious observances lasts for the shortest period of time during the calendar year?', 'Ramadan', 'Diwali', 'Lent', 'Hanukkah', 'Diwali'),
(11, 'At the closest point, which island group is only 50 miles south-east of the coast of Florida?', 'Bahamas', 'US Virgin Islands', 'Turks and Caicos Islands', 'Bermuda', 'Bahamas'),
(12, 'Construction of which of these famous landmarks was completed first?', 'Empire State Building', 'Royal Albert Hall', 'Eiffel Tower', 'Big Ben Clock Tower', 'Big Ben Clock Tower'),
(13, 'Which of these cetaceans is classified as a ''toothed whale''?', 'Gray whale', 'Minke Whale', 'Sperm whale', 'Humpback whale', 'Sperm whale'),
(14, 'Who is the only British politician to have held all four ''Great Offices of State'' at some point during their career?', 'David Lloyd George', 'Harold Wilson', 'James Callaghan', 'John Major', 'James Callaghan'),
(15, 'In 1718, which pirate died in battle off the coast of what is now North Carolina?', 'Calico Jack', 'Blackbeard', 'Bartholomew Roberts', 'Captain Kidd', 'Blackbeard');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
