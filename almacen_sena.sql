-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 21:47:49
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `almacen_sena`
--
CREATE DATABASE IF NOT EXISTS `almacen_sena` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `almacen_sena`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `S`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `S` (IN `NOMBRE_CATEGORIA_` VARCHAR(11), IN `ID_PRODUCTO_` INT(11))  NO SQL
BEGIN
	SET @VAR = (SELECT categorias.id_categoria FROM categorias WHERE nombreCategoria = NOMBRE_CATEGORIA_);
	SET @VAR1 = (SELECT categoria_producto.id FROM categoria_producto WHERE id_producto = ID_PRODUCTO_); 
    SELECT @VAR1;
	IF (@VAR1 IS NULL) THEN
    	SELECT "HOLA";
    ELSEIF (@VAR1 IS NOT NULL) THEN 
        SELECT "HOLA";
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpAceptarSolicitudes`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpAceptarSolicitudes` (IN `ID_` INT(11), IN `ESTADO_` VARCHAR(10), IN `CANTIDAD_` INT(11), IN `PRODUCTO_` INT(11))  NO SQL
BEGIN
 SET @CANTIDAD_ACTUAL = (SELECT productos.cantidad FROM productos WHERE id_producto = PRODUCTO_);
SET @CANTIDAD_TOTAL = @CANTIDAD_ACTUAL - CANTIDAD_;
IF (@CANTIDAD_TOTAL >= 0 ) THEN
	IF (ESTADO_ = "APROBADA" || ESTADO_ = "RECHAZADA") THEN
        UPDATE solicitudes SET
            estado	=	ESTADO_
            WHERE	id	=	ID_;
            SELECT "ok" AS error;
    ELSEIF (ESTADO_ = "ENTREGADO") THEN
            UPDATE solicitudes SET
            estado	=	ESTADO_
            WHERE	id	=	ID_;
           UPDATE productos SET cantidad = @CANTIDAD_TOTAL WHERE id_producto = PRODUCTO_;
     SELECT "ok" AS error;      
           END IF;
   ELSE
   		SELECT "No hay suficiente producto" AS error;
   END IF;
END$$

DROP PROCEDURE IF EXISTS `SpConsultarSolicitudesAprovadas`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultarSolicitudesAprovadas` ()  NO SQL
BEGIN
SELECT s.id, p.nombreProducto, p.id_producto, i.nombre, i.apellido, s.cantidad FROM solicitudes s INNER JOIN productos p ON (s.id_producto = p.id_producto) INNER JOIN instructores i ON (s.id_usuario = i.id_usuario) WHERE s.estado = "APROBADA";
END$$

DROP PROCEDURE IF EXISTS `SpConsultarSolicitudesPendientes`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultarSolicitudesPendientes` ()  NO SQL
BEGIN
SELECT s.id, p.nombreProducto, p.id_producto, i.nombre, i.apellido, s.cantidad FROM solicitudes s INNER JOIN productos p ON (s.id_producto = p.id_producto) INNER JOIN instructores i ON (s.id_usuario = i.id_usuario) WHERE s.estado = "PENDIENTE";
END$$

DROP PROCEDURE IF EXISTS `SpConsultarTodasLasCategorias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultarTodasLasCategorias` ()  NO SQL
BEGIN
	SELECT * FROM categorias;
END$$

DROP PROCEDURE IF EXISTS `SpConsultCategorias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultCategorias` (IN `ID_PRODUCTO_` INT(11))  NO SQL
BEGIN
	SELECT * FROM categorias C INNER JOIN categoria_producto CP ON(C.id_categoria = CP.id_categoria) WHERE CP.id_producto = ID_PRODUCTO_;
END$$

DROP PROCEDURE IF EXISTS `SpConsultInstructor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultInstructor` (IN `ID_USUARIO_` INT(11))  NO SQL
SELECT * FROM instructores WHERE id_usuario = ID_USUARIO_$$

DROP PROCEDURE IF EXISTS `SpConsultInstructors`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultInstructors` ()  NO SQL
BEGIN
SELECT * FROM usuarios U INNER JOIN instructores I ON (U.id_usuario = I.id_usuario);
END$$

DROP PROCEDURE IF EXISTS `spConsultProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultProducto` (IN `ID_PRODUCTO` INT(11))  NO SQL
BEGIN
SELECT * FROM productos P INNER JOIN usuarios U ON(P.usuario_id = U.id_usuario) WHERE P.id_producto = ID_PRODUCTO;
END$$

DROP PROCEDURE IF EXISTS `SpConsultProductos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultProductos` ()  NO SQL
BEGIN
SELECT * FROM productos P INNER JOIN usuarios U ON(P.usuario_id = U.id_usuario);
END$$

DROP PROCEDURE IF EXISTS `SpConsultProductosProveedor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultProductosProveedor` (IN `ID_USUARIO_` INT(11))  NO SQL
BEGIN
SELECT * FROM usuarios U INNER JOIN productos P ON(U.id_usuario = P.usuario_id)  WHERE id_usuario = ID_USUARIO_;
END$$

DROP PROCEDURE IF EXISTS `SpConsultProveedores`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultProveedores` ()  NO SQL
BEGIN
SELECT * FROM usuarios U INNER JOIN proveedores I ON (U.id_usuario = I.id_usuario);
END$$

DROP PROCEDURE IF EXISTS `SpConsultSubCategorias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultSubCategorias` (IN `NOMBRE_CATEGORIA_` VARCHAR(11))  NO SQL
BEGIN
SET @VAR = (SELECT id_categoria FROM categorias WHERE categorias.nombreCategoria = NOMBRE_CATEGORIA_);
	SELECT * FROM sub_categoria WHERE sub_categoria.id_categoria = @VAR;
END$$

DROP PROCEDURE IF EXISTS `SpConsultSubCategoriasProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultSubCategoriasProducto` (IN `ID_PRODUCTO_` VARCHAR(11))  NO SQL
BEGIN
	SELECT * FROM sub_categoria_producto SCP INNER JOIN sub_categoria SC ON(SCP.id_sub_categoria = SC.id) WHERE SCP.id_producto = ID_PRODUCTO_;
END$$

DROP PROCEDURE IF EXISTS `SpConsultUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpConsultUser` (IN `EMAIL_` VARCHAR(256), IN `CLAVE_` VARCHAR(256))  NO SQL
BEGIN
SELECT id_usuario AS id, Rol AS Rol_user FROM usuarios WHERE UserName = EMAIL_ AND Password = CLAVE_;
END$$

DROP PROCEDURE IF EXISTS `spConsultUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spConsultUsers` ()  NO SQL
BEGIN
SELECT id_usuario AS id, UserName AS Usuario, Password AS Contraseña, Rol AS Rol_user FROM usuarios;
END$$

DROP PROCEDURE IF EXISTS `SpCreateCategoria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateCategoria` (IN `NOMBRE_` VARCHAR(50))  NO SQL
BEGIN
	INSERT INTO categorias (nombreCategoria) VALUES(NOMBRE_);
END$$

DROP PROCEDURE IF EXISTS `SpCreateInstructor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateInstructor` (IN `ID_USUARIO_` INT(11), IN `NUMERO_DOCUMENTO_` INT(12), IN `NOMBRE_` VARCHAR(50), IN `APELLIDO_` VARCHAR(50), IN `TELEFONO_` INT(10), IN `GMAIL_` VARCHAR(256))  NO SQL
BEGIN
	INSERT INTO instructores (
							numero_documento,
    						nombre,
    						apellido,
    						telefono,
    						gmail,
    						id_usuario)
                            VALUES(
                            NUMERO_DOCUMENTO_,
                            NOMBRE_,
                            APELLIDO_,
                            TELEFONO_,
                            GMAIL_,
                            ID_USUARIO_);
END$$

DROP PROCEDURE IF EXISTS `SpCreateProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateProducto` (IN `UNIDAD_MEDIDA_` VARCHAR(12), IN `NOMBRE_PRODUCTO_` VARCHAR(100), IN `CANTIDAD_` INT(5), IN `FOTO_` VARCHAR(100), IN `CONTROL_INVENTARIO_` BOOLEAN, IN `PARA_CONSUMO_` BOOLEAN, IN `PARA_VENTA_` BOOLEAN, IN `PRODUCCION_INTERNA_` BOOLEAN, IN `MANEJA_LOTES_` BOOLEAN, IN `SERVICIO_` BOOLEAN, IN `CONTEO_FISICAS_` BOOLEAN, IN `PRODUCTO_ACTIVO_` BOOLEAN, IN `DATOS_FABRICANTE_` VARCHAR(100), IN `REFERENCIA_` VARCHAR(100), IN `MEDIDAS_` VARCHAR(100), IN `PRESENTACION_` VARCHAR(100), IN `UBICACION_FISICA_` VARCHAR(100), IN `PRODUCTO_EQUIVALENTE_` VARCHAR(50), IN `UNITARIO_PROMEDIO_` DOUBLE, IN `TOTAL_PROMEDIO_` INT, IN `STOCK_MINIMO_` INT(50), IN `STOCK_MAXIMO_` INT(50), IN `TIEMPO_REPOSICION_` INT(11), IN `CUENTA_INVENTARIO_` INT(100), IN `CONTABLE_DE_INGRESOS_` VARCHAR(100), IN `CONTABLE_INGRESO_AJUSTE_` VARCHAR(100), IN `CONTABLE_DEVOLUCION_VENTAS_` VARCHAR(100), IN `CONTABLE_COSTOS_` VARCHAR(100), IN `DEVOLUCION_COMPRAS_` VARCHAR(100), IN `CONTABLE_GASTOS` VARCHAR(100), IN `CONTABLE_GASTOS_POR_AJUSTE_` VARCHAR(100), IN `IMPUESTO_COMPRAS_` VARCHAR(100), IN `IMPUESTO_VENTAS_` VARCHAR(100), IN `USUARIO_ID_` INT(11))  NO SQL
BEGIN
	INSERT INTO productos  (unidadMedida, nombreProducto, cantidad, foto, controlInventario, paraConsumo, paraVenta, produccionInterna, manejaLotes, servicio, conteoFisicas, productoActivo, datosFabricante, refetencia, medidas, presentacion, ubicacionFisica, productoEquivalente, unitarioPromedio, totalPromedio, stockMinimo, stockMaximo, tiempoReposicion, cuentaInventario, contableDeIngresos, contableIngresoAjuste, contableDevolucionVentas, contableCostos, devolucionCompras, contableGastos, contableGastosPorAjuste, impuestoCompras, impuestoVentas, usuario_id)VALUES(UNIDAD_MEDIDA_,NOMBRE_PRODUCTO_,CANTIDAD_,FOTO_,CONTROL_INVENTARIO_,PARA_CONSUMO_,PARA_VENTA_,PRODUCCION_INTERNA_,MANEJA_LOTES_,SERVICIO_,CONTEO_FISICAS_,PRODUCTO_ACTIVO_,DATOS_FABRICANTE_,REFERENCIA_,MEDIDAS_,PRESENTACION_,UBICACION_FISICA_,PRODUCTO_EQUIVALENTE_,UNITARIO_PROMEDIO_,TOTAL_PROMEDIO_,STOCK_MINIMO_,STOCK_MAXIMO_,TIEMPO_REPOSICION_,CUENTA_INVENTARIO_,CONTABLE_DE_INGRESOS_,CONTABLE_INGRESO_AJUSTE_,CONTABLE_DEVOLUCION_VENTAS_,CONTABLE_COSTOS_,DEVOLUCION_COMPRAS_,	
CONTABLE_GASTOS
,CONTABLE_GASTOS_POR_AJUSTE_, IMPUESTO_COMPRAS_, IMPUESTO_VENTAS_, USUARIO_ID_);
 END$$

DROP PROCEDURE IF EXISTS `SpCreateProveedor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateProveedor` (IN `ID_USUARIO_` VARCHAR(11), IN `TIPO_PERSONA_` VARCHAR(50), IN `NUMERO_DOCUMENTO_` INT(12), IN `NIT_` VARCHAR(12), IN `RUT_` VARCHAR(11), IN `NOMBRE_` VARCHAR(18), IN `APELLIDO_` VARCHAR(50), IN `RAZON_SOCIAL` VARCHAR(500), IN `CODIGO_PAIS_` VARCHAR(11), IN `NOMBRE_PAIS_` VARCHAR(75), IN `CODIGO_CIUDAD_` VARCHAR(11), IN `NOMBRE_CIUDAD` INT(75), IN `DIRECION_` VARCHAR(150), IN `TELEFONO_` INT(10), IN `GMAIL_` VARCHAR(256), IN `AUTORIZACION_GMAIL_` BOOLEAN, IN `CODIGO_DEPARTAMENTO_` VARCHAR(11), IN `NOMBRE_DEPARTAMENTO` VARCHAR(11))  NO SQL
BEGIN
INSERT INTO proveedores (
    					Tipo_persona,
    					Numero_documento,
    					NIT,
    					RUT,
    					Nombre,
    					Apellido,
    					Razon_social,
    					Codigo_pais,
    					Nombre_Pais,
    					Codigo_departamento,
    					Nombre_departamento,
    					Codigo_ciudad,
    					Nombre_ciudad,
    					Direccion,
    					Telefono,
    					Gmail,
    					Autorizacion_Gmail,
    					id_usuario
						)VALUES(
                            TIPO_PERSONA_,
                            NUMERO_DOCUMENTO_,
                            NIT_,
                            RUT_,
                            NOMBRE_,
                            APELLIDO_,
                            RAZON_SOCIAL,
                            CODIGO_PAIS_,
                            NOMBRE_PAIS_,                        						        CODIGO_DEPARTAMENTO_,
                            NOMBRE_DEPARTAMENTO,
                            CODIGO_CIUDAD_,
                            NOMBRE_CIUDAD,
                            DIRECION_,
                            TELEFONO_,
                            GMAIL_,
                            AUTORIZACION_GMAIL_,
                            ID_USUARIO_
                        );
END$$

DROP PROCEDURE IF EXISTS `SpCreateSolicitud`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateSolicitud` (IN `ID_USUARIO_` INT(11), IN `ID_PRODUCTO_` INT(11), IN `CANTIDAD_` INT(11))  NO SQL
BEGIN
INSERT INTO solicitudes ( solicitudes.id_producto,  solicitudes.id_usuario, solicitudes.cantidad, solicitudes.estado) VALUES (ID_PRODUCTO_, ID_USUARIO_, CANTIDAD_, "PENDIENTE");
END$$

DROP PROCEDURE IF EXISTS `SpCreateSubCategoria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateSubCategoria` (IN `NOMBRE_CATEGORIA_` VARCHAR(11), IN `NOMBRE_SUB_CATEGORIA_` VARCHAR(11))  NO SQL
BEGIN
	SET @VAR = (SELECT id_categoria FROM categorias WHERE categorias.nombreCategoria = NOMBRE_CATEGORIA_);
	INSERT INTO sub_categoria (id_categoria, nombreCategoria) VALUES(@VAR, NOMBRE_SUB_CATEGORIA_);
END$$

DROP PROCEDURE IF EXISTS `SpCreateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpCreateUser` (IN `EMAIL_` VARCHAR(256), IN `CLAVE_` VARCHAR(250), IN `ROL_` VARCHAR(11))  NO SQL
BEGIN
    INSERT INTO usuarios (UserName, Password, Rol)VALUES (EMAIL_, CLAVE_, ROL_);
    IF (ROL_ = "INSTRUCTOR") THEN
    	CALL SpCreateInstructor(@@IDENTITY, 0, 0, 0, 0, 0);
	ELSEIF (ROL_ = "PROVEEDOR") THEN
    	CALL SpCreateProveedor(@@IDENTITY, "JURIDICA", 0,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpDeleteInstructor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpDeleteInstructor` (IN `ID_INSTRUCTOR_` INT(11))  NO SQL
BEGIN
	 SELECT @VAR:= id_usuario FROM instructores WHERE Id_instructor = 	ID_INSTRUCTOR_;
	DELETE FROM instructores WHERE id_instructor = ID_INSTRUCTOR_;
    DELETE FROM usuarios WHERE id_usuario = @VAR;
END$$

DROP PROCEDURE IF EXISTS `SpDeleteProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpDeleteProducto` (IN `ID_` INT(11))  NO SQL
BEGIN
	DELETE FROM productos WHERE id_producto = ID_;
END$$

DROP PROCEDURE IF EXISTS `SpDeleteUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpDeleteUser` (IN `ID_USUARIO_` INT(11))  NO SQL
BEGIN
	SET @ROL = (SELECT Rol FROM usuarios WHERE id_usuario = ID_USUARIO_);
	DELETE FROM usuarios WHERE id_usuario = ID_USUARIO_;
    IF @ROL = "INSTRUCTOR" THEN
    	DELETE FROM instructores WHERE id_usuario = ID_USUARIO_;
    ELSEIF @ROL = "PROVEEDOR" THEN
    	DELETE FROM proveedores WHERE id_usuario  = ID_USUARIO_;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpInsertCategoria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpInsertCategoria` (IN `NOMBRE_CATEGORIA_` VARCHAR(11), IN `ID_PRODUCTO_` INT(11))  NO SQL
BEGIN
	SET @VAR = (SELECT categorias.id_categoria FROM categorias WHERE nombreCategoria = NOMBRE_CATEGORIA_);
	SET @VAR1 = (SELECT categoria_producto.id FROM categoria_producto WHERE id_producto = ID_PRODUCTO_); 
	IF (@VAR1 IS NULL) THEN
    	INSERT INTO 
        	categoria_producto 
            (id_categoria, id_producto) 
            VALUES
            (@VAR, ID_PRODUCTO_);
    ELSEIF (@VAR1 IS NOT NULL) THEN 
        UPDATE categoria_producto SET
        	id_categoria	=	@VAR
            WHERE id_producto = ID_PRODUCTO_;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpInsertSubCategoria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpInsertSubCategoria` (IN `ID_` INT(11), IN `ID_PRODUCTO_` INT(11))  NO SQL
BEGIN
	SET @VAR1 = (SELECT id FROM sub_categoria_producto WHERE id_sub_categoria = ID_ AND id_producto = ID_PRODUCTO_);
	IF (@VAR1 IS NULL) THEN
    	INSERT INTO 
        	sub_categoria_producto 
            (id_sub_categoria, id_producto) 
            VALUES
            (ID_, ID_PRODUCTO_);
    ELSEIF (@VAR1 IS NOT NULL) THEN 
        DELETE FROM 
        	sub_categoria_producto
            WHERE id_producto = ID_PRODUCTO_ AND id_sub_categoria = ID_;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpIsertSupplier`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpIsertSupplier` (IN `TIPO_PERSONA_` VARCHAR(50), IN `NUMERO_DOCUMENTO_` INT(12))  NO SQL
BEGIN
    INSERT INTO prueba (1N) VALUES (TIPO_PERSONA_);
END$$

DROP PROCEDURE IF EXISTS `SpListarUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpListarUser` (IN `ID_USUARIO_` INT(11))  NO SQL
BEGIN
	SET @ROL = (SELECT Rol FROM usuarios WHERE id_usuario = ID_USUARIO_);
   IF @ROL = "INSTRUCTOR" THEN
    SELECT * FROM usuarios U INNER JOIN instructores I ON (U.id_usuario = I.id_usuario) WHERE U.id_usuario = ID_USUARIO_;
ELSEIF @ROL = "PROVEEDOR" THEN
    SELECT * FROM usuarios U INNER JOIN proveedores I ON (U.id_usuario = I.id_usuario) WHERE U.id_usuario = ID_USUARIO_;
END IF;
END$$

DROP PROCEDURE IF EXISTS `SpProductoDisponibleEntrega`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpProductoDisponibleEntrega` (IN `ID_` INT(11))  NO SQL
BEGIN
	SET @cantidad = (SELECT cantidad FROM productos WHERE id_producto = ID_);
    SET @solicitudes = (SELECT SUM(cantidad) FROM solicitudes WHERE id_producto = ID_  AND estado = "APROBADA");
    IF @solicitudes IS null THEN
    	SET @disponible = @cantidad;
		SELECT @disponible AS disponible , ID_ AS id_producto;
    ELSEIF @solicitudes IS NOT null THEN
        SET @disponible = @cantidad - @solicitudes;
    	SELECT @disponible AS disponible , ID_ AS id_producto;
    END IF;
END$$

DROP PROCEDURE IF EXISTS `SpUpdateInstructor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpUpdateInstructor` (IN `ID_INSTRUCTOR_` INT(11), IN `NUMERO_DOCUMENTO_` INT(12), IN `NOMBRE_` VARCHAR(50), IN `APELLIDO_` VARCHAR(50), IN `TELEFONO_` INT(10), IN `GMAIL_` VARCHAR(256))  NO SQL
BEGIN
	UPDATE instructores SET
    	numero_documento	= NUMERO_DOCUMENTO_,
    	nombre				= NOMBRE_,
    	apellido			= APELLIDO_,
    	telefono			= TELEFONO_,
    	gmail				= GMAIL_
    WHERE id_instructor		= ID_INSTRUCTOR_;
    
END$$

DROP PROCEDURE IF EXISTS `SpUpdateProducto`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpUpdateProducto` (IN `ID_PRODUCTO_` INT(11), IN `UNIDAD_MEDIDA_` VARCHAR(12), IN `NOMBRE_PRODUCTO_` VARCHAR(100), IN `CANTIDAD_` INT(5), IN `FOTO_` VARCHAR(100), IN `CONTROL_INVENTARIO_` BOOLEAN, IN `PARA_CONSUMO_` BOOLEAN, IN `PARA_VENTA_` BOOLEAN, IN `PRODUCCION_INTERNA_` BOOLEAN, IN `MANEJA_LOTES_` BOOLEAN, IN `SERVICIO_` BOOLEAN, IN `CONTEO_FISICAS_` BOOLEAN, IN `PRODUCTO_ACTIVO_` BOOLEAN, IN `DATOS_FABRICANTE_` VARCHAR(100), IN `REFERENCIA_` VARCHAR(100), IN `MEDIDAS_` VARCHAR(100), IN `PRESENTACION_` VARCHAR(100), IN `UBICACION_FISICA_` VARCHAR(100), IN `PRODUCTO_EQUIVALENTE_` VARCHAR(50), IN `UNITARIO_PROMEDIO_` DOUBLE, IN `TOTAL_PROMEDIO_` INT, IN `STOCK_MINIMO_` INT(50), IN `STOCK_MAXIMO_` INT(50), IN `TIEMPO_REPOSICION_` INT(11), IN `CUENTA_INVENTARIO_` INT(100), IN `CONTABLE_DE_INGRESOS_` VARCHAR(100), IN `CONTABLE_INGRESO_AJUSTE_` VARCHAR(100), IN `CONTABLE_DEVOLUCION_VENTAS_` VARCHAR(100), IN `CONTABLE_COSTOS_` VARCHAR(100), IN `DEVOLUCION_COMPRAS_` VARCHAR(100), IN `CONTABLE_GASTOS` VARCHAR(100), IN `CONTABLE_GASTOS_POR_AJUSTE_` VARCHAR(100), IN `IMPUESTO_COMPRAS_` VARCHAR(100), IN `IMPUESTO_VENTAS_` VARCHAR(100), IN `USUARIO_ID_` INT(11))  NO SQL
BEGIN
UPDATE productos SET  unidadMedida			=	UNIDAD_MEDIDA_,
                       nombreProducto		=	NOMBRE_PRODUCTO_,
                       cantidad				=	CANTIDAD_,
                       controlInventario	=	CONTROL_INVENTARIO_,
                       paraConsumo			=	PARA_CONSUMO_,
                       paraVenta			=	PARA_VENTA_,
                       produccionInterna	=	PRODUCCION_INTERNA_,
                       manejaLotes			=	MANEJA_LOTES_,
                       servicio				=	SERVICIO_,
                       conteoFisicas		=	CONTEO_FISICAS_,
                       productoActivo		=	PRODUCTO_ACTIVO_,
                       datosFabricante		=	DATOS_FABRICANTE_,
                       refetencia			=	REFERENCIA_,
                       medidas				=	MEDIDAS_,
                       presentacion			=	PRESENTACION_,
                       ubicacionFisica		=	UBICACION_FISICA_,
                       productoEquivalente	=	PRODUCTO_EQUIVALENTE_,
                       unitarioPromedio		=	UNITARIO_PROMEDIO_,
                       totalPromedio		=	TOTAL_PROMEDIO_,
                       stockMinimo			=	STOCK_MINIMO_,
                       stockMaximo			=	STOCK_MAXIMO_,
                       tiempoReposicion		=	TIEMPO_REPOSICION_,
                       cuentaInventario		=	CUENTA_INVENTARIO_,
                       contableDeIngresos	=	CONTABLE_DE_INGRESOS_,
                       contableIngresoAjuste	=	CONTABLE_INGRESO_AJUSTE_,
                       contableDevolucionVentas	=	CONTABLE_DEVOLUCION_VENTAS_,
                       contableCostos		=	CONTABLE_COSTOS_,
                       devolucionCompras	=	DEVOLUCION_COMPRAS_,
                       contableGastos		=	CONTABLE_GASTOS,
                       contableGastosPorAjuste=	CONTABLE_GASTOS_POR_AJUSTE_,
                       impuestoCompras		=	IMPUESTO_COMPRAS_,
                       impuestoVentas		=	IMPUESTO_VENTAS_
                       WHERE	id_producto	=	ID_PRODUCTO_;
 IF	(FOTO_ IS NOT NULL AND FOTO_ != "") THEN
UPDATE productos SET foto	=	FOTO_ WHERE id_producto	=	ID_PRODUCTO_;
END IF;
 END$$

DROP PROCEDURE IF EXISTS `SpUpdateProveedor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpUpdateProveedor` (IN `ID_PROVEEDOR_` INT(11), IN `TIPO_PERSONA_` VARCHAR(50), IN `NUMERO_DOCUMENTO_` INT(12), IN `NIT_` VARCHAR(12), IN `RUT_` VARCHAR(11), IN `NOMBRE_` VARCHAR(50), IN `APELLIDO_` VARCHAR(50), IN `RAZON_SOCIAL_` VARCHAR(500), IN `CODIGO_PAIS_` VARCHAR(11), IN `NOMBRE_PAIS_` VARCHAR(75), IN `CODIGO_DEPARTAMENTO_` VARCHAR(11), IN `NOMBRE_DEPARTAMENTO_` VARCHAR(75), IN `CODIGO_CIUDAD_` VARCHAR(11), IN `NOMBRE_CIUDAD_` VARCHAR(75), IN `DIRECCION_` VARCHAR(150), IN `TELEFONO_` INT(10), IN `GMAIL_` VARCHAR(256), IN `AUTORIZACION_GMAIL_` BOOLEAN, IN `ID_USUARIO_` INT(11))  NO SQL
BEGIN
	UPDATE proveedores SET
    Tipo_persona	 	=	TIPO_PERSONA_,
    Numero_documento	=	NUMERO_DOCUMENTO_,
    RUT					=	RUT_,
    NIT					=	NIT_,
    Nombre				=	NOMBRE_,
    Apellido			=	APELLIDO_,
    Razon_social		=	RAZON_SOCIAL_,
    Codigo_pais			=	CODIGO_PAIS_,
    Nombre_pais			=	NOMBRE_PAIS_,
    Codigo_departamento =	CODIGO_DEPARTAMENTO_,
    Nombre_departamento =	NOMBRE_DEPARTAMENTO_,
    Codigo_ciudad		=	CODIGO_CIUDAD_,
    Nombre_ciudad		=	NOMBRE_CIUDAD_,
    Direccion			=	DIRECCION_,
    Telefono			=	TELEFONO_,
    Gmail				=	GMAIL_,
    Autorizacion_Gmail	=	AUTORIZACION_GMAIL_
    WHERE id_proveedor	=	ID_PROVEEDOR_;
END$$

DROP PROCEDURE IF EXISTS `SpUpdateUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SpUpdateUser` (IN `ID_` INT(11), IN `EMAIL_` VARCHAR(256), IN `CLAVE_` VARCHAR(250))  NO SQL
BEGIN
UPDATE usuarios SET
	UserName 		=	EMAIL_ ,
    Password 	= 	CLAVE_
    WHERE id_usuario = ID_;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `nombreCategoria` (`nombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

DROP TABLE IF EXISTS `categoria_producto`;
CREATE TABLE IF NOT EXISTS `categoria_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id`, `id_categoria`, `id_producto`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_entrada`
--

DROP TABLE IF EXISTS `detalle_entrada`;
CREATE TABLE IF NOT EXISTS `detalle_entrada` (
  `producto_id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `entradaProducto_id` int(11) NOT NULL,
  PRIMARY KEY (`producto_id`),
  KEY `entradaProducto_id` (`entradaProducto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_salida`
--

DROP TABLE IF EXISTS `detalle_salida`;
CREATE TABLE IF NOT EXISTS `detalle_salida` (
  `salidaProducto_id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) NOT NULL,
  `costoProducto` double NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`salidaProducto_id`),
  KEY `producto_id` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada_producto`
--

DROP TABLE IF EXISTS `entrada_producto`;
CREATE TABLE IF NOT EXISTS `entrada_producto` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroFactura` int(11) NOT NULL,
  `DetalleGeneral` int(100) NOT NULL,
  `FechaCompra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `unidadesDisponibles` int(5) NOT NULL,
  `costoUnitario` double NOT NULL,
  `costoTotal` double NOT NULL,
  `impuestos` double NOT NULL,
  `porcentajeImpuestos` double NOT NULL,
  `totalImpuestos` double NOT NULL,
  `retencionFuente` double NOT NULL,
  `porcentajeRetefte` double NOT NULL,
  `totalRetencion` double NOT NULL,
  `proveedor_id` int(11) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructores`
--

DROP TABLE IF EXISTS `instructores`;
CREATE TABLE IF NOT EXISTS `instructores` (
  `Id_instructor` int(11) NOT NULL AUTO_INCREMENT,
  `numero_documento` int(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `gmail` varchar(256) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id_instructor`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_2` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instructores`
--

INSERT INTO `instructores` (`Id_instructor`, `numero_documento`, `nombre`, `apellido`, `telefono`, `gmail`, `id_usuario`) VALUES
(1, 0, 'Efer', 'Castaño', 0, '0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `unidadMedida` varchar(12) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `controlInventario` tinyint(1) NOT NULL,
  `paraConsumo` tinyint(1) NOT NULL,
  `paraVenta` tinyint(1) NOT NULL,
  `produccionInterna` tinyint(1) NOT NULL,
  `manejaLotes` tinyint(1) NOT NULL,
  `servicio` tinyint(1) NOT NULL,
  `conteoFisicas` tinyint(1) NOT NULL,
  `productoActivo` tinyint(1) NOT NULL,
  `datosFabricante` varchar(100) NOT NULL,
  `refetencia` varchar(100) NOT NULL,
  `medidas` varchar(100) NOT NULL,
  `presentacion` varchar(100) NOT NULL,
  `ubicacionFisica` varchar(100) NOT NULL,
  `productoEquivalente` varchar(50) NOT NULL,
  `unitarioPromedio` double NOT NULL,
  `totalPromedio` double NOT NULL,
  `stockMinimo` int(50) NOT NULL,
  `stockMaximo` int(50) NOT NULL,
  `tiempoReposicion` varchar(11) NOT NULL,
  `cuentaInventario` int(100) NOT NULL,
  `contableDeIngresos` varchar(100) NOT NULL,
  `contableIngresoAjuste` varchar(100) NOT NULL,
  `contableDevolucionVentas` varchar(100) NOT NULL,
  `contableCostos` varchar(100) NOT NULL,
  `devolucionCompras` varchar(100) NOT NULL,
  `contableGastos` varchar(100) NOT NULL,
  `contableGastosPorAjuste` varchar(100) NOT NULL,
  `impuestoCompras` varchar(100) NOT NULL,
  `impuestoVentas` varchar(100) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `unidadMedida`, `nombreProducto`, `cantidad`, `foto`, `controlInventario`, `paraConsumo`, `paraVenta`, `produccionInterna`, `manejaLotes`, `servicio`, `conteoFisicas`, `productoActivo`, `datosFabricante`, `refetencia`, `medidas`, `presentacion`, `ubicacionFisica`, `productoEquivalente`, `unitarioPromedio`, `totalPromedio`, `stockMinimo`, `stockMaximo`, `tiempoReposicion`, `cuentaInventario`, `contableDeIngresos`, `contableIngresoAjuste`, `contableDevolucionVentas`, `contableCostos`, `devolucionCompras`, `contableGastos`, `contableGastosPorAjuste`, `impuestoCompras`, `impuestoVentas`, `usuario_id`) VALUES
(1, 'M', 'CUERO NEGRO', 2, '07-12-2021-04-01-05-000000.jpg', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '0', 5, '', '', '', '', '', '', '', '', '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_persona` varchar(50) NOT NULL DEFAULT 'JURIDICA',
  `Numero_documento` int(12) DEFAULT NULL,
  `NIT` varchar(12) DEFAULT NULL,
  `RUT` varchar(11) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Razon_social` varchar(500) DEFAULT NULL,
  `Codigo_pais` varchar(11) NOT NULL,
  `Nombre_pais` varchar(75) NOT NULL,
  `Codigo_departamento` varchar(11) NOT NULL,
  `Nombre_departamento` varchar(75) NOT NULL,
  `Codigo_ciudad` varchar(11) NOT NULL,
  `Nombre_ciudad` varchar(75) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Gmail` varchar(256) NOT NULL,
  `Autorizacion_Gmail` tinyint(1) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_proveedor`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `Tipo_persona`, `Numero_documento`, `NIT`, `RUT`, `Nombre`, `Apellido`, `Razon_social`, `Codigo_pais`, `Nombre_pais`, `Codigo_departamento`, `Nombre_departamento`, `Codigo_ciudad`, `Nombre_ciudad`, `Direccion`, `Telefono`, `Gmail`, `Autorizacion_Gmail`, `id_usuario`) VALUES
(1, 'NATURAL', 44, NULL, '5666', '0', '44', NULL, '0', '0', '0', '0', '0', '0', '0', 0, '0@g', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida_producto`
--

DROP TABLE IF EXISTS `salida_producto`;
CREATE TABLE IF NOT EXISTS `salida_producto` (
  `id_salidaProducto` int(11) NOT NULL AUTO_INCREMENT,
  `numeroFactura` int(11) NOT NULL,
  `detalleGeneral` text NOT NULL,
  `fechaSalida` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `costoUnitario` double NOT NULL,
  `costoTotal` double NOT NULL,
  `instructor_id` int(11) NOT NULL,
  PRIMARY KEY (`id_salidaProducto`),
  KEY `instructor_id` (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id`, `id_producto`, `cantidad`, `id_usuario`, `estado`) VALUES
(1, 1, 0, 2, 'ENTREGADO'),
(2, 1, 1, 2, 'ENTREGADO'),
(3, 1, 1, 2, 'ENTREGADO'),
(4, 1, 1, 2, 'ENTREGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

DROP TABLE IF EXISTS `sub_categoria`;
CREATE TABLE IF NOT EXISTS `sub_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nombreCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombreCategoria` (`nombreCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria_producto`
--

DROP TABLE IF EXISTS `sub_categoria_producto`;
CREATE TABLE IF NOT EXISTS `sub_categoria_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub_categoria` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(256) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `UserName`, `Password`, `Rol`) VALUES
(1, 'onlygames1876@gmail.com', '123', 'ADMIN'),
(2, 'efer', '123', 'INSTRUCTOR'),
(3, 'Kidstore', '123', 'PROVEEDOR'),
(4, 'Paula Isaza', '123', 'ADMIN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
