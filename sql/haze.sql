-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 20 mai 2023 à 23:38
-- Version du serveur : 5.7.31-log
-- Version de PHP : 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `haze`
--

-- --------------------------------------------------------

--
-- Structure de la table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `featured`
--

INSERT INTO `featured` (`id`, `gameId`) VALUES
(1, 0),
(2, 5),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `games`
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
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gameDescription`, `gameAssetsFileName`, `gameTags`, `gamePrice`) VALUES
(0, 'Watch Dogs', 'Set in Chicago, where a central network of computers connects everyone and everything, Watch Dogs explores the impact of technology within our society. You play as Aiden Pearce, a brilliant hacker and former thug, whose criminal past led to a violent family tragedy. Now on the hunt for those who hurt your family, you\'ll be able to monitor and hack all who surround you by manipulating everything connected to the city’s network. Access omnipresent security cameras, download personal information to locate a target, control traffic lights and public transportation to stop the enemy... and more.', 'watchdogs', 'Action;Open world;Hacking', 9.99),
(1, 'DOOM', 'Developed by id software, the studio that pioneered the first-person shooter genre and created multiplayer Deathmatch, DOOM returns as a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat – whether you’re obliterating demon hordes through the depths of Hell in the single-player campaign, or competing against your friends in numerous multiplayer modes. Expand your gameplay experience using DOOM SnapMap game editor to easily create, play, and share your content with the world.', 'doom4', 'FFPS;Gore;Demons;Multiplayer', 12.99),
(2, 'Mirror\'s Edge: Catalyst', 'Mirror\'s Edge: Catalyst is a re-imagining of the 2008 game Mirror\'s Edge. It takes place in a futuristic location known as the City of Glass. The dystopian city is ruled by a Conglomerate that has turned the citizens into mindless slaves pursuing status and wealth. Faith Connors, the same protagonist of the first game, is one of the people who lives off the Grid, the large networking system that connects (and spies on) everyone and everything. She works as a runner who roam the rooftops of the city as couriers as well as burglars. They have been tolerated by the Conglomerate and their K-Sec security forces for a few decades, but that soon changes early in the game. It starts at the moment Faith is released from prison and returns to her runner friends, but flashbacks also reveal her past, what happened to her family and how she became involved with different people. Why she was is prison is soon explained and she needs to repay a debt to the crime boss Dogen. During a K-Sec headquarters heist she ignores orders and steals a hard drive that overthrows the fragile equilibrium that was in place, and soon K-Sec cracks down hard on the runners, attempting to reclaim the hard drive. With the help of runners, the militant organization Black November and other characters, she soon learns of a sinister project called Reflection, which threatens to change Glass and its citizens entirely, unless Faith can stop it.', 'mirrorsedgecatalyst', 'Parkour;Runner;Cyberpunk', 19.99),
(3, 'Deus Ex: Mankind Divided', 'Deus Ex: Mankind Divided is the direct sequel to Deus Ex: Human Revolution. Set two years after the events of Human Revolution, Mankind Divided follows that game\'s protagonist, Adam Jensen, on a new adventure as he investigates a subway bombing in Prague. The world is heavily divided between those with augmentations and those who do not, with the latter fearing the former following the ending of the previous game.', 'deusexmankinddivided', 'Cyberpunk;Stealth;RPG', 29.99),
(4, 'Dark Souls 3', 'In the Kingdom of Lothric, the pilgrims go on their journey towards certain death... And then the Fire fades. The Lords of Cinder, fallen heroes who have linked the First Flame in the past, are now missing. And it is up to a lone Unkindled to hunt them down and bring them back to their thrones at Firelink Shrine...\r\n\r\nDark Souls III is the fourth entry in the Souls franchise (with Demon\'s Souls being the spiritual predecessor to the series). There are many references to the previous entries scattered throughout the game, such as old NPCs, familiar places and items, and so on.\r\n\r\nThe gameplay remains true to the series (particularly to the first Dark Souls game), despite also having clear influences from Bloodborne. The player starts the game by choosing one of the 10 available classes, being able to customize the appearance of the character to their liking. The flow of the game is clearly faster than the first Dark Souls game, though not as fast-paced as Bloodborne - there is still the need for planned out blocking and dodging, while waiting for your chance to counterattack. Also available is the regular host of weapons and armor to choose from, allowing for a very high level of replayability. The level design also remains true to the series, with several interconnected paths and secrets spread throughout. The covenant system is back along with the multiplayer mode, where players can interact in the same fashion as before, with invasions and co-op. One of the new additions to the game is the Weapon Arts system. This mechanic allows the player to have a specific stance for each of the weapons encountered in the game, being able to unleash a special movement with them by spending FP points (which are also used for casting magic, like in Demon’s Souls). This new system only adds to the depth of the game, paving the way for even more diverse character creation.', 'darksouls3', 'Dark Fantasy;Hardcore;RPG', 39.99),
(5, 'Fallout 4', 'Fallout 4 is an open world role-playing game in the style of its predecessors, Fallout 3 and Fallout: New Vegas. Returning gameplay features include the ability to switch between first-person and third-person perspectives, an open world with free roam exploration, a variety of combat options (including guns, explosives, unarmed, and melee), numerous sidequests along with a more linear main questline that branches toward its conclusion, dialogue options that influence the route of a conversation, and the selection of companions that aid in battle.', 'fallout4', 'Open world;Post-apo;RPG', 19.99);

-- --------------------------------------------------------

--
-- Structure de la table `topsellers`
--

CREATE TABLE `topsellers` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `topsellers`
--

INSERT INTO `topsellers` (`id`, `gameId`) VALUES
(1, 2),
(2, 1),
(3, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- Index pour la table `topsellers`
--
ALTER TABLE `topsellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `topsellers`
--
ALTER TABLE `topsellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
