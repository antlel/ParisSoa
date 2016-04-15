SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

USE euro2016;

-- -----------------------------------------------------
-- Table `euro2016`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `pseudo` VARCHAR(45) NULL,
  `birthDate` DATE NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `token` VARCHAR(45) NULL,
  `admin` TINYINT(1) NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `euro2016`.`Teams`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Teams` (
  `idTeam` INT NOT NULL AUTO_INCREMENT,
  `TeamName` VARCHAR(45) NULL,
  PRIMARY KEY (`idTeam`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `euro2016`.`Match`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Match` (
  `idMatch` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `idTeamA` VARCHAR(45) NULL,
  `idTeamB` VARCHAR(45) NULL,
  `ScoreA` INT NULL,
  `ScoreB` INT NULL,
  PRIMARY KEY (`idMatch`),
  INDEX `fk_Match_Teams1_idx` (`idTeamA` ASC),
  INDEX `fk_Match_Teams2_idx` (`idTeamB` ASC),
  CONSTRAINT `fk_Match_Teams1`
    FOREIGN KEY (`idTeamA`)
    REFERENCES `euro2016`.`Teams` (`TeamName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Match_Teams2`
    FOREIGN KEY (`idTeamB`)
    REFERENCES `euro2016`.`Teams` (`TeamName`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `euro2016`.`GambleType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `GambleType` (
  `idGambleType` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  PRIMARY KEY (`idGambleType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `euro2016`.`Gamble`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `euro2016`.`Gamble` (
  `idGamble` INT NOT NULL AUTO_INCREMENT,
  `scoreA` INT NULL,
  `scoreB` INT NULL,
  `date` DATE NULL,
  `idUtilisateur` INT NOT NULL,
  `idMatch` INT NOT NULL,
  `idGambleType` INT NOT NULL,
  PRIMARY KEY (`idGamble`, `idUtilisateur`, `idMatch`, `idGambleType`),
  INDEX `fk_Gamble_Utilisateur_idx` (`idUtilisateur` ASC),
  INDEX `fk_Gamble_Match1_idx` (`idMatch` ASC),
  INDEX `fk_Gamble_GambleType1_idx` (`idGambleType` ASC),
  CONSTRAINT `fk_Gamble_User`
    FOREIGN KEY (`idUtilisateur`)
    REFERENCES `euro2016`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gamble_Match`
    FOREIGN KEY (`idMatch`)
    REFERENCES `euro2016`.`Match` (`idMatch`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Gamble_GambleType`
    FOREIGN KEY (`idGambleType`)
    REFERENCES `euro2016`.`GambleType` (`idGambleType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
