SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `LaTropicosa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `LaTropicosa` ;

-- -----------------------------------------------------
-- Table `LaTropicosa`.`cassettes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `LaTropicosa`.`cassettes` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(100) NOT NULL ,
  `artista` VARCHAR(100) NULL ,
  `anio` VARCHAR(100) NULL ,
  `disquera` VARCHAR(100) NULL ,
  `precio` VARCHAR(100) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

