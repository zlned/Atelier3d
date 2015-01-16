-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 16 Janvier 2015 à 10:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet_3d`
--

-- --------------------------------------------------------

--
-- Structure de la table `cube`
--

CREATE TABLE IF NOT EXISTS `cube` (
  `id_cube` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_cube`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `cube`
--

INSERT INTO `cube` (`id_cube`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Structure de la table `face`
--

CREATE TABLE IF NOT EXISTS `face` (
  `id_face` int(11) NOT NULL AUTO_INCREMENT,
  `id_cube` int(11) NOT NULL,
  `vers` text NOT NULL,
  PRIMARY KEY (`id_face`),
  KEY `id_cube` (`id_cube`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `face`
--

INSERT INTO `face` (`id_face`, `id_cube`, `vers`) VALUES
(6, 1, 'texte'),
(10, 2, 'texte 4'),
(14, 1, 'texte 6'),
(15, 1, '    texte 7');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `face`
--
ALTER TABLE `face`
  ADD CONSTRAINT `face_ibfk_1` FOREIGN KEY (`id_cube`) REFERENCES `cube` (`id_cube`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
