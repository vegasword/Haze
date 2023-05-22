-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 11:02 PM
-- Server version: 5.7.31-log
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haze`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameId` int(11) NOT NULL,
  `gameTitle` varchar(64) NOT NULL,
  `gameDescription` text NOT NULL,
  `gameAssetsFileName` varchar(64) NOT NULL,
  `gameTags` varchar(64) NOT NULL,
  `gamePrice` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gameDescription`, `gameAssetsFileName`, `gameTags`, `gamePrice`) VALUES
(0, 'Watch Dogs', 'Set in Chicago, where a central network of computers connects everyone and everything, Watch Dogs explores the impact of technology within our society. You play as Aiden Pearce, a brilliant hacker and former thug, whose criminal past led to a violent family tragedy. Now on the hunt for those who hurt your family, you\'ll be able to monitor and hack all who surround you by manipulating everything connected to the city’s network. Access omnipresent security cameras, download personal information to locate a target, control traffic lights and public transportation to stop the enemy... and more.', 'watchdogs', '1;2;3', 9.99),
(1, 'DOOM', 'Developed by id software, the studio that pioneered the first-person shooter genre and created multiplayer Deathmatch, DOOM returns as a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat – whether you’re obliterating demon hordes through the depths of Hell in the single-player campaign, or competing against your friends in numerous multiplayer modes.', 'doom4', '4;5;6;7', 12.99),
(2, 'Mirror\'s Edge: Catalyst', 'Mirror\'s Edge: Catalyst is a re-imagining of the 2008 game Mirror\'s Edge. It takes place in a futuristic location known as the City of Glass. The dystopian city is ruled by a Conglomerate that has turned the citizens into mindless slaves pursuing status and wealth. Faith Connors, the same protagonist of the first game, is one of the people who lives off the Grid, the large networking system that connects (and spies on) everyone and everything. She works as a runner who roam the rooftops of the city as couriers as well as burglars.', 'mirrorsedgecatalyst', '8;9;10', 19.99),
(3, 'Deus Ex: Mankind Divided', 'Deus Ex: Mankind Divided is the direct sequel to Deus Ex: Human Revolution. Set two years after the events of Human Revolution, Mankind Divided follows that game\'s protagonist, Adam Jensen, on a new adventure as he investigates a subway bombing in Prague. The world is heavily divided between those with augmentations and those who do not, with the latter fearing the former following the ending of the previous game.', 'deusexmankinddivided', '10;11;12', 29.99),
(4, 'Dark Souls 3', 'In the Kingdom of Lothric, the pilgrims go on their journey towards certain death... And then the Fire fades. The Lords of Cinder, fallen heroes who have linked the First Flame in the past, are now missing. And it is up to a lone Unkindled to hunt them down and bring them back to their thrones at Firelink Shrine...\r\n\r\nDark Souls III is the fourth entry in the Souls franchise (with Demon\'s Souls being the spiritual predecessor to the series). There are many references to the previous entries scattered throughout the game, such as old NPCs, familiar places and items, and so on.', 'darksouls3', '5;6;12;13;14', 39.99),
(5, 'Fallout 4', 'Fallout 4 is an open world role-playing game in the style of its predecessors, Fallout 3 and Fallout: New Vegas. Returning gameplay features include the ability to switch between first-person and third-person perspectives, an open world with free roam exploration, a variety of combat options (including guns, explosives, unarmed, and melee), numerous sidequests along with a more linear main questline that branches toward its conclusion, dialogue options that influence the route of a conversation, and the selection of companions that aid in battle.', 'fallout4', '2;12;15', 19.99),
(6, 'Skyrim', 'The Elder Scrolls V: Skyrim - Special Edition is a reworked version of The Elder Scrolls V: Skyrim. It includes the main game as well as the add-ons (Dawnguard, Dragonborn and Hearthfire), updated graphics, and mod support for the console versions. These mods allow for new quests, environments, characters, dialogue, armor, weapons and more.', 'skyrim', '2;12;16', 14.99),
(7, 'Grand Theft Auto V', 'Grand Theft Auto V takes place five years after Grand Theft Auto IV and is now set in Los Santos. It centers around three protagonists: Michael, Trevor, and Franklin. New to the series is that the player can switch between the three characters on the fly. They each have different missions, lives, and personalities. They also often come together, especially for heists, a complex type of mission where a large operation needs to be planned and executed by determining a strategy and hiring additional henchmen.', 'gta5', '1;2;7;17', 39.99),
(8, 'DayZ', 'DayZ is a commercial, standalone version of what was started as a modification with the same name for ArmA II: Operation Arrowhead. It is a multiplayer open world survival horror game with zombies in a persistent environment, the fictional post-Soviet state Chernarus after a zombie apocalypse. It consists of different cities and smaller towns, large plains and forests. It is a sandbox environment with no direct goals, instead the player has to survive as long as possible.', 'dayz', '1;7;15;18;19', 23.99);

-- --------------------------------------------------------

--
-- Table structure for table `gametags`
--

CREATE TABLE `gametags` (
  `id` int(11) NOT NULL,
  `tags` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gametags`
--

INSERT INTO `gametags` (`id`, `tags`) VALUES
(1, 'Action'),
(2, 'Open world'),
(3, 'Hacking'),
(4, 'Fast-FPS'),
(5, 'Gore'),
(6, 'Demons'),
(7, 'Multiplayer'),
(8, 'Parkour'),
(9, 'Runner'),
(10, 'Cyberpunk'),
(11, 'Stealth'),
(12, 'RPG'),
(13, 'Dark Fantasy'),
(14, 'Hardcore'),
(15, 'Post-apo'),
(16, 'Medieval'),
(17, 'Mature'),
(18, 'Zombie'),
(19, 'Survival');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- Indexes for table `gametags`
--
ALTER TABLE `gametags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gametags`
--
ALTER TABLE `gametags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
