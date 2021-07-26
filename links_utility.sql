-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juil. 2021 à 18:17
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `links_utility`
--

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `original_link` varchar(255) NOT NULL,
  `scheme` varchar(60) NOT NULL,
  `host` varchar(60) NOT NULL,
  `path` varchar(100) NOT NULL,
  `params` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id`, `original_link`, `scheme`, `host`, `path`, `params`) VALUES
(9, 'http://www.geeksforgeeks.org/register?name=Amit&email=amit1998@gmail.com', 'http', 'www.geeksforgeeks.org', '/register', '{\"name\": \"Amit\", \"email\": \"amit1998@gmail.com\"}'),
(10, 'https://www.google.com/search?q=for+key+value+php&oq=for+key+va&aqs=edge.2.0j69i57j0i67j0l4.5146j0j1&sourceid=chrome&ie=UTF-8', 'https', 'www.google.com', '/search', '{\"q\": \"for key value php\", \"ie\": \"UTF-8\", \"oq\": \"for key va\", \"aqs\": \"edge.2.0j69i57j0i67j0l4.5146j0j1\", \"sourceid\": \"chrome\"}'),
(11, 'https://www.facebook.com/pages/?category=your_pages&ref=bookmarks', 'https', 'www.facebook.com', '/pages/', '{\"ref\": \"bookmarks\", \"category\": \"your_pages\"}');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(2, 'Miorantsoa Rakotozafy', 'miorantsoarak@gmail.com', '$2y$10$mo7ALPqDYrQI9QXrT94qMOG5aRno8ebzNfekXm9fO0wOlm6HZVv3C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
