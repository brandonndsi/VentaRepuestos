/*inicio de actualizar persona*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarPersona`(IN `perced` VARCHAR(20), IN `pernom` VARCHAR(20), IN `perape1` VARCHAR(20), IN `perape2` VARCHAR(20), IN `pertel` INT, IN `perco` VARCHAR(50), IN `perid` INT)
    NO SQL
BEGIN
UPDATE `tbpersonas` SET 
`cedula`=perced,
`personanombre`=pernom,
`personaapellido1`=perape1,
`personaapellido2`=perape2,
`personatelefono`=pertel,
`personacorreo`=perco
 WHERE personaid=perid;
END$$
DELIMITER ;
/*FIN DE ACTUALIZAR PERSONA*/

/*inicio de actualizar proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarProveedor`(IN `producid` VARCHAR(50), IN `proid` INT)
    NO SQL
BEGIN
UPDATE `tbproveedores`
SET `productoid`=producid
WHERE proveedorid=proid;
END$$
DELIMITER ;
/*FIN DE ACTUALIZAR PROVEEDOR*/

/*comienzo de la busque  del id de la persona*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaID`(IN `ced` VARCHAR(20))
    NO SQL
BEGIN
SELECT `personaid` 
FROM `tbpersonas` 
WHERE cedula= ced;
END$$
DELIMITER ;
/*FIN DE BUSCAR ID PERSONA*/

/*inicio de buscar proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarproveedores`(IN `id` INT)
    NO SQL
BEGIN
SELECT *
FROM tbproveedores e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.productoid= e.productoid
WHERE e.proveedorid= id  
AND e.proveedorestado = 1;
END$$
DELIMITER ;
/*FIN DE BUSCAR PROVEEDOR.*/

/*inicio de buscar id personsa de proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaIDProveedor`(IN `proid` INT)
    NO SQL
BEGIN
SELECT `personaid`
FROM `tbproveedores` 
WHERE proveedorid= proid;
END$$
DELIMITER ;
/*FIN DE BUSCAR ID PERSONA EN PROVEEDOR.*/

/*inicio de eliminar proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarproveedores`(IN `id` INT)
    NO SQL
BEGIN

UPDATE `tbproveedores` 
SET `proveedorestado`= 0 
WHERE proveedorid=id;

END$$
DELIMITER ;
/*FIN DE ELIMINAR PORVEEDOR*/

/*inicio de mostrar proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarproveedores`()
    NO SQL
BEGIN
SELECT *
FROM tbproveedores e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
INNER JOIN tbproductos z ON z.productoid= e.productoid
WHERE  e.proveedorestado = 1;
END$$
DELIMITER ;
/*FIN DE MOSTRAR PROVEEDOR*/

/*inicio de nueva persona*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevaPersona`(IN `ced` VARCHAR(20), IN `nom` VARCHAR(20), IN `ape1` VARCHAR(20), IN `ape2` VARCHAR(20), IN `tel` VARCHAR(20), IN `co` VARCHAR(50), IN `esta` INT)
    NO SQL
BEGIN
INSERT INTO `tbpersonas`
( `cedula`, 
 `personanombre`,
 `personaapellido1`,
 `personaapellido2`,
 `personatelefono`, 
 `personacorreo`,
 `personaestado`) VALUES 
  (ced,
  nom,
  ape1,
  ape2,
  tel,
  co,
  1);

END$$
DELIMITER ;
/*FIN DE NUEVA PERSONA*/

/*inicio de nuevo proveedor*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevoProveedor`(IN `perso` VARCHAR(20), IN `pro` VARCHAR(20), IN `esta` VARCHAR(20))
    NO SQL
BEGIN
INSERT INTO `tbproveedores`
( `personaid`, 
 `productoid`, 
 `proveedorestado`) VALUES 
  (perso,
  pro,
   esta);
END$$
DELIMITER ;
/*FIN DE NUEVO PROVEEDOR*/
