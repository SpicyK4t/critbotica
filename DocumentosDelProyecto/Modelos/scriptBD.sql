-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema crit
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `crit` ;

-- -----------------------------------------------------
-- Schema crit
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `crit` DEFAULT CHARACTER SET latin1 ;
USE `crit` ;

-- -----------------------------------------------------
-- Table `crit`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`roles` ;

CREATE TABLE IF NOT EXISTS `crit`.`roles` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(32) NOT NULL COMMENT '',
  `description` VARCHAR(255) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `uniq_name` (`name` ASC)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `crit`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`users` ;

CREATE TABLE IF NOT EXISTS `crit`.`users` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(254) NOT NULL COMMENT '',
  `username` VARCHAR(32) NOT NULL DEFAULT '' COMMENT '',
  `password` VARCHAR(64) NOT NULL COMMENT '',
  `logins` INT(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '',
  `last_login` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `nombre` VARCHAR(45) NOT NULL COMMENT '',
  `apellido` VARCHAR(70) NOT NULL COMMENT '',
  `habilitado` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `uniq_username` (`username` ASC)  COMMENT '',
  UNIQUE INDEX `uniq_email` (`email` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `crit`.`roles_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`roles_users` ;

CREATE TABLE IF NOT EXISTS `crit`.`roles_users` (
  `user_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `role_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`user_id`, `role_id`)  COMMENT '',
  INDEX `fk_role_id` (`role_id` ASC)  COMMENT '',
  CONSTRAINT `roles_users_ibfk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `crit`.`users` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2`
    FOREIGN KEY (`role_id`)
    REFERENCES `crit`.`roles` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `crit`.`user_tokens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`user_tokens` ;

CREATE TABLE IF NOT EXISTS `crit`.`user_tokens` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `user_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `user_agent` VARCHAR(40) NOT NULL COMMENT '',
  `token` VARCHAR(40) NOT NULL COMMENT '',
  `created` INT(10) UNSIGNED NOT NULL COMMENT '',
  `expires` INT(10) UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `uniq_token` (`token` ASC)  COMMENT '',
  INDEX `fk_user_id` (`user_id` ASC)  COMMENT '',
  INDEX `expires` (`expires` ASC)  COMMENT '',
  CONSTRAINT `user_tokens_ibfk_1`
    FOREIGN KEY (`user_id`)
    REFERENCES `crit`.`users` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `crit`.`medicamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`medicamentos` ;

CREATE TABLE IF NOT EXISTS `crit`.`medicamentos` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre_distintivo` VARCHAR(35) NOT NULL COMMENT '',
  `nombre_generico` VARCHAR(50) NOT NULL COMMENT '',
  `presentacion` VARCHAR(20) NOT NULL COMMENT '',
  `stock_minimo` INT(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '',
  `user_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `grupo` INT(2) UNSIGNED NOT NULL COMMENT '',
  `habilitado` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_medicamentos_users1_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_medicamentos_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `crit`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crit`.`entradas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`entradas` ;

CREATE TABLE IF NOT EXISTS `crit`.`entradas` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `medicamento_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `cantidad` INT(5) UNSIGNED NOT NULL DEFAULT 0 COMMENT '',
  `caducidad` DATE NOT NULL COMMENT '',
  `lote` VARCHAR(20) NOT NULL COMMENT '',
  `no_registro` VARCHAR(20) NOT NULL COMMENT '',
  `user_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `fecha_entrada` DATETIME NOT NULL COMMENT '',
  `Observaciones` TEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_entradas_medicamentos1_idx` (`medicamento_id` ASC)  COMMENT '',
  INDEX `fk_entradas_users1_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_entradas_medicamentos1`
    FOREIGN KEY (`medicamento_id`)
    REFERENCES `crit`.`medicamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entradas_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `crit`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crit`.`doctors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`doctors` ;

CREATE TABLE IF NOT EXISTS `crit`.`doctors` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre_doctor` VARCHAR(36) NOT NULL COMMENT '',
  `apellido_doctor` VARCHAR(36) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crit`.`pacientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`pacientes` ;

CREATE TABLE IF NOT EXISTS `crit`.`pacientes` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre_paciente` VARCHAR(36) NOT NULL COMMENT '',
  `apellido_paciente` VARCHAR(36) NOT NULL COMMENT '',
  `carnet` VARCHAR(45) NOT NULL COMMENT '',
  `nombre_tutor` VARCHAR(36) NOT NULL COMMENT '',
  `apellido_tutor` VARCHAR(36) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `carnet_UNIQUE` (`carnet` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `crit`.`salidas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `crit`.`salidas` ;

CREATE TABLE IF NOT EXISTS `crit`.`salidas` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `entrada_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `cantidad` INT(5) UNSIGNED NOT NULL COMMENT '',
  `fecha_salida` DATETIME NOT NULL COMMENT '',
  `user_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `doctor_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `paciente_id` INT(11) UNSIGNED NOT NULL COMMENT '',
  `observaciones` TEXT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_salidas_entradas1_idx` (`entrada_id` ASC)  COMMENT '',
  INDEX `fk_salidas_users1_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_salidas_doctors1_idx` (`doctor_id` ASC)  COMMENT '',
  INDEX `fk_salidas_pacientes1_idx` (`paciente_id` ASC)  COMMENT '',
  CONSTRAINT `fk_salidas_entradas1`
    FOREIGN KEY (`entrada_id`)
    REFERENCES `crit`.`entradas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `crit`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_doctors1`
    FOREIGN KEY (`doctor_id`)
    REFERENCES `crit`.`doctors` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_salidas_pacientes1`
    FOREIGN KEY (`paciente_id`)
    REFERENCES `crit`.`pacientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `crit`.`roles`
-- -----------------------------------------------------
START TRANSACTION;
USE `crit`;
INSERT INTO `crit`.`roles` (`id`, `name`, `description`) VALUES (1, 'login', 'Login privileges, granted after account confirmation');
INSERT INTO `crit`.`roles` (`id`, `name`, `description`) VALUES (2, 'admin', 'Administrative user, has access to everything.');

COMMIT;

