-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 mai 2025 à 08:24
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nala`
--
CREATE DATABASE IF NOT EXISTS `nala` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nala`;

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `titre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `photo`, `titre`, `date`, `description`) VALUES
(1, '1.jpg', 'Cat Tree', '2024-12-06', 'Nala is perched on her cat tree — but what has caught her attention? Her eyes are wide, focused, as if something mysterious or exciting is happening outside the window. Is it a bird, a shadow, or just her imagination at play?'),
(3, '2.jpg', 'Cat Tree 2', '2024-08-08', 'Nala is perched on her cat tree — but what has caught her attention? Her eyes are wide, focused, as if something mysterious or exciting is happening outside the window. Is it a bird, a shadow, or just her imagination at play?'),
(4, '3.jpg', 'The orange chair', '2024-11-07', '&quot;Nala sits quietly on the bright orange chair, her eyes fixed on the window. Something outside has captured her attention — maybe a bird, maybe the wind in the trees. She watches, still and curious, like a little guardian of the room.'),
(5, '4.jpg', 'In bed', '2025-01-10', '&quot;Nala is half-awake, curled up in the bed. One eye barely open, she stretches slowly, not quite ready to leave the warmth of the blankets. Morning can wait.'),
(6, '5.jpg', 'On my jacket ', '2025-01-02', 'Nala has made herself comfortable on my jacket, as if it was meant just for her. She’s not planning to move anytime soon.'),
(7, '6.jpg', 'Curious Nala', '2024-08-09', '&quot;Nala gives a curious look, her head slightly tilted as if she&#039;s trying to understand something only she can see.'),
(8, '8.jpg', 'Suspicious', '2025-01-02', 'Nala looks suspicious, as if she knows something isn’t quite right. Her eyes narrow, watching closely.'),
(9, '9.jpg', 'Sleeping', '2024-07-04', 'Nala is sleeping peacefully, curled up like a little ball of fluff.'),
(10, '11.jpg', 'Too cute', '2025-03-06', 'Nala is just too cute for words — tiny paws, soft fur, and those big curious eyes.'),
(11, '21.png', 'Beauty', '2024-10-16', 'There is a mystery in a cat’s gaze that words can’t quite capture. Its silky fur catches the light like a living jewel, and every movement is a silent dance — graceful, precise, effortless. When it stretches, when it slips through shadows, it radiates ele'),
(12, '18.jpg', 'My chair !', '2025-04-16', 'My cat on my desk chair — like royalty on a throne. Curled up or sprawled out, she claims it as hers, every inch. I sit on the edge, she reigns in comfort. Her calm presence turns work into something softer, like the quiet weight of purring serenity wrapp'),
(13, '17.jpg', 'On the sun', '2024-08-16', 'Nala on the sun — as if she were born from light itself. Eyes half-closed, fur glowing gold, she melts into the warmth like a little flame at peace with the world.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
