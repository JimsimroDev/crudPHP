
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `indigenas_berastegui` DEFAULT CHARACTER SET utf8 ;
USE `indigenas_berastegui` ;

-- -----------------------------------------------------
-- Table `indigenas_berastegui`.`indigenas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indigenas_berastegui`.`indigenas` (
  `ID` INT NOT NULL,
  `TIPODOC` VARCHAR(255) NULL,
  `NUMERODOC` INT NULL,
  `NOMBRE` VARCHAR(255) NULL,
  `APELLIDO` VARCHAR(255) NULL,
  `FECHA_NAC` VARCHAR(255) NULL,
  PRIMARY KEY (`ID`));
-- -----------------------------------------------------
-- Table `indigenas_berastegui`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indigenas_berastegui`.`rol` (
  `ID` INT NOT NULL,
  `NOMBREROL` VARCHAR(255) NULL,
  `DESCRIPCION` VARCHAR(255) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `indigenas_berastegui`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `indigenas_berastegui`.`user` (
  `ID` INT NOT NULL,
  `NOMBREUSU` VARCHAR(255) NULL,
  `CONTRASENIA` VARCHAR(255) NULL,
  `fk_rol` INT NOT NULL,
  `usercol` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_rol_idx` (`fk_rol` ASC) VISIBLE,
  CONSTRAINT `fk_rol`
    FOREIGN KEY (`fk_rol`)
    REFERENCES `indigenas_berastegui`.`rol` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--- Agregar datos a la tabla indigenas
INSERT INTO indigenas (TIPODOC, NUMERODOC, NOMBRE, APELLIDO, FECHA_NAC)
VALUES 
('Cédula de Ciudadanía', '1065007342', 'Jimmis Jhoan', 'Simanca Rojas', '2022-03-12'),
('Registro Civil', '12345678', 'Isabel', 'Simanca Galindo', '2023-02-17'),
('Registro Civil', '1034534', 'Keren', 'Simanca Galindo', '2016-12-20'),
('Registro Civil', '10650845', 'Daniel', 'Plaza', '2023-12-11'),
('Cédula de Ciudadanía', '1043234', 'yordi', 'simanca rojas', '2022-12-11'),
('Registro Civil', '123456789', 'Luis', 'Pastrana', '2022-12-11'),
('Registro Civil', '12334456', 'Alejando Antonio', 'Suarez Muñoz', '2023-09-12'),
('Tarjeta de Identidad', '7689054', 'Antonio', 'Bellaco', '2022-12-11'),
('Registro Civil', '123456567', 'Juan L', 'Perez', '1998'),
('Cédula', '1234', 'juan', 'peres', NULL),
('Cédula', '121321432', 'Jhoan Sebastia', 'Simanca Rojas', NULL),
('Registro Civil', '3432423', 'Juancho Polo', 'Valencia Austokio', NULL);

--- Agregar datos a la tabla rol
INSERT INTO rol (ID, DESCRIPCION, NOMBREROL)
VALUES 
(1, 'Este es rol para administrar toda la base de datos', 'administrador'),
(2, 'Este rol solo es para ver la info', 'usuario');

--- Agregar datos a la tabla user

INSERT INTO user (ID, CONTRASENIA, NOMBREUSU, fk_rol)
VALUES 
(1, '1234', 'alberto.rojas', 1),
(2, '123', 'jimmis', 2),
(3, '1234', 'jimsimro', 1),
(4, '123', 'jimsimro', 2),
(5, '1234', 'keren', 2);
