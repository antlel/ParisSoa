/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : euro2016

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-04-15 17:34:11
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `gamble`
-- ----------------------------
DROP TABLE IF EXISTS `gamble`;
CREATE TABLE `gamble` (
  `idGamble` int(11) NOT NULL AUTO_INCREMENT,
  `scoreA` int(11) NOT NULL,
  `scoreB` int(11) NOT NULL,
  `date` date NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMatch` int(11) NOT NULL,
  `idGambleType` int(11) NOT NULL,
  PRIMARY KEY (`idGamble`,`idUser`,`idMatch`,`idGambleType`),
  KEY `idGambleType` (`idGambleType`),
  KEY `idMatch` (`idMatch`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `gamble_ibfk_1` FOREIGN KEY (`idGambleType`) REFERENCES `gambletype` (`idGambleType`),
  CONSTRAINT `gamble_ibfk_2` FOREIGN KEY (`idMatch`) REFERENCES `match` (`idMatch`),
  CONSTRAINT `gamble_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gamble
-- ----------------------------

-- ----------------------------
-- Table structure for `gambletype`
-- ----------------------------
DROP TABLE IF EXISTS `gambletype`;
CREATE TABLE `gambletype` (
  `idGambleType` int(11) NOT NULL AUTO_INCREMENT,
  `GambleTypeName` varchar(45) NOT NULL,
  PRIMARY KEY (`idGambleType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gambletype
-- ----------------------------

-- ----------------------------
-- Table structure for `match`
-- ----------------------------
DROP TABLE IF EXISTS `match`;
CREATE TABLE `match` (
  `idMatch` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `idTeamA` varchar(45) DEFAULT NULL,
  `idTeamB` varchar(45) DEFAULT NULL,
  `ScoreA` int(11) DEFAULT NULL,
  `ScoreB` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMatch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of match
-- ----------------------------

-- ----------------------------
-- Table structure for `teams`
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams` (
  `idTeam` int(11) NOT NULL AUTO_INCREMENT,
  `TeamName` varchar(45) NOT NULL,
  PRIMARY KEY (`idTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of teams
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Armand', 'SZYPURA', 'skeatwin', '2016-04-21', 'lol', 'test', null, '0');
