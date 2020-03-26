-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema servimedi
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema servimedi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `servimedi` DEFAULT CHARACTER SET utf8 ;
USE `servimedi` ;

-- -----------------------------------------------------
-- Table `servimedi`.`Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Cargo` (
  `idCargo` INT NOT NULL AUTO_INCREMENT,
  `nombreCargo` VARCHAR(45) NOT NULL,
  `descripcionCargo` TEXT NULL,
  PRIMARY KEY (`idCargo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Permiso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Permiso` (
  `idPermiso` INT NOT NULL AUTO_INCREMENT,
  `nombrePermiso` VARCHAR(45) NOT NULL,
  `descripcionPermiso` TEXT NULL,
  PRIMARY KEY (`idPermiso`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Perfil` (
  `idPerfil` INT NOT NULL,
  `permisoPerfil` INT NOT NULL,
  `nombrePerfil` VARCHAR(45) NOT NULL,
  `passwordPerfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPerfil`),
  INDEX `PrimeraRelacion_idx` (`permisoPerfil` ASC),
  CONSTRAINT `FK_Permiso_Perfil`
    FOREIGN KEY (`permisoPerfil`)
    REFERENCES `servimedi`.`Permiso` (`idPermiso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Estado` (
  `idEstado` INT NOT NULL AUTO_INCREMENT,
  `nombreEstado` VARCHAR(45) NOT NULL,
  `descripcionEstado` TEXT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `cargoUsuario` INT NOT NULL,
  `perfilUsuario` INT NOT NULL,
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `apellidoUsuario` VARCHAR(45) NOT NULL,
  `direccionUsuario` TEXT NULL,
  `fechaNacimientoUsuario` DATE NOT NULL,
  `estadoUsuario` INT NOT NULL,
  `correoUsuario` VARCHAR(45) NULL,
  `telefonoUsuario` VARCHAR(15) NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `idCargo_idx` (`cargoUsuario` ASC),
  INDEX `idPerfil_idx` (`perfilUsuario` ASC),
  INDEX `idEstado_idx` (`estadoUsuario` ASC),
  CONSTRAINT `FK_Cargo_Usuario`
    FOREIGN KEY (`cargoUsuario`)
    REFERENCES `servimedi`.`Cargo` (`idCargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Perfil_Usuario`
    FOREIGN KEY (`perfilUsuario`)
    REFERENCES `servimedi`.`Perfil` (`idPerfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Estado_Usuario`
    FOREIGN KEY (`estadoUsuario`)
    REFERENCES `servimedi`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT,
  `nitCliente` INT(8) NOT NULL,
  `nombreCliente` VARCHAR(45) NOT NULL,
  `direccionCliente` TEXT NULL,
  `estadoCliente` INT NOT NULL,
  `telefonoCliente` VARCHAR(15) NULL,
  PRIMARY KEY (`idCliente`),
  INDEX `idEstado_idx` (`estadoCliente` ASC),
  CONSTRAINT `FK_Estado_Cliente`
    FOREIGN KEY (`estadoCliente`)
    REFERENCES `servimedi`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Venta` (
  `idVenta` INT NOT NULL AUTO_INCREMENT,
  `clienteVenta` INT NOT NULL,
  `usuarioVenta` INT NOT NULL,
  `totalVenta` DECIMAL(10,2) NOT NULL,
  `fechaVenta` DATETIME NOT NULL,
  PRIMARY KEY (`idVenta`),
  INDEX `idCliente_idx` (`clienteVenta` ASC),
  INDEX `idUsuario_idx` (`usuarioVenta` ASC),
  CONSTRAINT `FK_Cliente_Venta`
    FOREIGN KEY (`clienteVenta`)
    REFERENCES `servimedi`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Usuario_Venta`
    FOREIGN KEY (`usuarioVenta`)
    REFERENCES `servimedi`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Proveedor` (
  `idProveedor` INT NOT NULL AUTO_INCREMENT,
  `casaComercialProveedor` VARCHAR(45) NOT NULL,
  `nombreVendedor` VARCHAR(45) NOT NULL,
  `telefonoProveedor` VARCHAR(15) NULL,
  `estadoProveedor` INT NOT NULL,
  PRIMARY KEY (`idProveedor`),
  INDEX `idEstado_idx` (`estadoProveedor` ASC),
  CONSTRAINT `FK_Estado_Proveedor`
    FOREIGN KEY (`estadoProveedor`)
    REFERENCES `servimedi`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(45) NOT NULL,
  `descripcionCategoria` TEXT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Producto` (
  `idProducto` INT NOT NULL AUTO_INCREMENT,
  `categoriaProducto` INT NOT NULL,
  `proveedorProducto` INT NOT NULL,
  `nombreProducto` VARCHAR(45) NOT NULL,
  `descripcionProducto` TEXT NULL,
  `precioCompraProducto` DECIMAL(10,2) NOT NULL,
  `precioVentaProducto` DECIMAL(10,2) NOT NULL,
  `stockProducto` INT NOT NULL,
  `estadoProducto` INT NOT NULL,
  `fechaVenceProducto` DATE NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `idEstado_idx` (`estadoProducto` ASC),
  INDEX `idProveedor_idx` (`proveedorProducto` ASC),
  INDEX `idCategoria_idx` (`categoriaProducto` ASC),
  CONSTRAINT `FK_Estado_Producto`
    FOREIGN KEY (`estadoProducto`)
    REFERENCES `servimedi`.`Estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Proveedor_Producto`
    FOREIGN KEY (`proveedorProducto`)
    REFERENCES `servimedi`.`Proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Categoria_Producto`
    FOREIGN KEY (`categoriaProducto`)
    REFERENCES `servimedi`.`Categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`DetalleVenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`DetalleVenta` (
  `idDetalleVenta` INT NOT NULL AUTO_INCREMENT,
  `productoDVenta` INT NOT NULL,
  `precioUnidadDVenta` DECIMAL(10,2) NOT NULL,
  `cantidadDVenta` INT NOT NULL,
  `descuentoVenta` VARCHAR(45) NULL,
  PRIMARY KEY (`idDetalleVenta`, `productoDVenta`),
  INDEX `idProducto_idx` (`productoDVenta` ASC),
  CONSTRAINT `FK_Producto_DVenta`
    FOREIGN KEY (`productoDVenta`)
    REFERENCES `servimedi`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Venta_DVenta`
    FOREIGN KEY (`idDetalleVenta`)
    REFERENCES `servimedi`.`Venta` (`idVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`Compra` (
  `idCompra` INT NOT NULL AUTO_INCREMENT,
  `proveedorCompra` INT NOT NULL,
  `usuarioCompra` INT NOT NULL,
  `totalCompra` DECIMAL(10,2) NOT NULL,
  `fechaCompra` DATETIME NOT NULL,
  PRIMARY KEY (`idCompra`),
  INDEX `idProveedor_idx` (`proveedorCompra` ASC),
  INDEX `idUsuario_idx` (`usuarioCompra` ASC),
  CONSTRAINT `FK_Proveedor_Compra`
    FOREIGN KEY (`proveedorCompra`)
    REFERENCES `servimedi`.`Proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Usuario_Compra`
    FOREIGN KEY (`usuarioCompra`)
    REFERENCES `servimedi`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `servimedi`.`DetalleCompra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `servimedi`.`DetalleCompra` (
  `idDetalleCompra` INT NOT NULL AUTO_INCREMENT,
  `productoDCompra` INT NOT NULL,
  `precioUnidadDVenta` DECIMAL(10,2) NOT NULL,
  `cantidadDCompra` INT NOT NULL,
  `descuentoDCompra` VARCHAR(45) NULL,
  PRIMARY KEY (`idDetalleCompra`, `productoDCompra`),
  INDEX `idProducto_idx` (`productoDCompra` ASC),
  CONSTRAINT `FK_Compra_DCompra`
    FOREIGN KEY (`idDetalleCompra`)
    REFERENCES `servimedi`.`Compra` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_Producto_DCompra`
    FOREIGN KEY (`productoDCompra`)
    REFERENCES `servimedi`.`Producto` (`idProducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
