-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 15 Avril 2016 à 11:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `euro2016`
--
CREATE DATABASE IF NOT EXISTS `euro2016` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `euro2016`;

-- --------------------------------------------------------

--
-- Structure de la table `gamble`
--

DROP TABLE IF EXISTS `gamble`;
CREATE TABLE IF NOT EXISTS `gamble` (
  `idGamble` int(11) NOT NULL AUTO_INCREMENT,
  `scoreA` int(11) NOT NULL,
  `scoreB` int(11) NOT NULL,
  `date` date NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMatch` int(11) NOT NULL,
  `idGambleType` int(11) NOT NULL,
  PRIMARY KEY (`idGamble`,`idUser`,`idMatch`,`idGambleType`),
  KEY `fk_Gamble_Utilisateur_idx` (`idUser`),
  KEY `fk_Gamble_Match1_idx` (`idMatch`),
  KEY `fk_Gamble_GambleType1_idx` (`idGambleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `gambletype`
--

DROP TABLE IF EXISTS `gambletype`;
CREATE TABLE IF NOT EXISTS `gambletype` (
  `idGambleType` int(11) NOT NULL AUTO_INCREMENT,
  `GambleTypeName` varchar(45) NOT NULL,
  PRIMARY KEY (`idGambleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

DROP TABLE IF EXISTS `match`;
CREATE TABLE IF NOT EXISTS `match` (
  `idMatch` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `idTeamA` varchar(45) DEFAULT NULL,
  `idTeamB` varchar(45) DEFAULT NULL,
  `ScoreA` int(11) DEFAULT NULL,
  `ScoreB` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMatch`),
  KEY `fk_Match_Teams1_idx` (`idTeamA`),
  KEY `fk_Match_Teams2_idx` (`idTeamB`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `idTeam` int(11) NOT NULL AUTO_INCREMENT,
  `TeamName` varchar(45) NOT NULL,
  PRIMARY KEY (`idTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `birthDate` date NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gamble`
--
ALTER TABLE `gamble`
  ADD CONSTRAINT `fk_Gamble_GambleType` FOREIGN KEY (`idGambleType`) REFERENCES `gambletype` (`idGambleType`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Gamble_Match` FOREIGN KEY (`idMatch`) REFERENCES `match` (`idMatch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Gamble_User` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `fk_Match_Teams1` FOREIGN KEY (`idTeamA`) REFERENCES `mydb`.`teams` (`TeamName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Match_Teams2` FOREIGN KEY (`idTeamB`) REFERENCES `mydb`.`teams` (`TeamName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
