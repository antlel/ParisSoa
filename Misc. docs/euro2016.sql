

CREATE TABLE IF NOT EXISTS `gamble` (
  `idGamble` int(11) NOT NULL AUTO_INCREMENT,
  `scoreA` int(11) NOT NULL,
  `scoreB` int(11) NOT NULL,
  `date` date NOT NULL,
  `idUser` int(11) NOT NULL,
  `idMatch` int(11) NOT NULL,
  `idGambleType` int(11) NOT NULL,
  PRIMARY KEY (`idGamble`,`idUser`,`idMatch`,`idGambleType`)
);

-- --------------------------------------------------------

--
-- Structure de la table `gambletype`
--

CREATE TABLE IF NOT EXISTS `gambletype` (
  `idGambleType` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `GambleTypeName` varchar(45) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `idTeam` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `TeamName` varchar(45) NOT NULL
  );

-- --------------------------------------------------------

--
-- Structure de la table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `idMatch` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date` date NOT NULL,
  `idTeamA` varchar(45) DEFAULT NULL REFERENCES `teams` (`idTeam`),
  `idTeamB` varchar(45) DEFAULT NULL REFERENCES `teams` (`idTeam`),
  `ScoreA` int(11) DEFAULT NULL,
  `ScoreB` int(11) DEFAULT NULL
  );
-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `pseudo` varchar(45) NOT NULL,
  `birthDate` date NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL);

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `name`, `lastname`, `pseudo`, `birthDate`, `password`, `email`, `token`, `admin`) VALUES
(1, 'test', 'test', 'test', '2016-04-21', 'test', 'test', 'test', 99);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gamble`
--
ALTER TABLE `gamble`
  ADD CONSTRAINT FOREIGN KEY (`idGambleType`) REFERENCES `gambletype` (`idGambleType`),
  ADD CONSTRAINT FOREIGN KEY (`idMatch`) REFERENCES `match` (`idMatch`),
  ADD CONSTRAINT FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
