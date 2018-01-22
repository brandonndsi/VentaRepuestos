/* Mostrar todos los empleados*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `mostrarempleados`(IN `empleados` VARCHAR(50))
    NO SQL
    DETERMINISTIC
BEGIN
SELECT * FROM tbempleados e
INNER JOIN tbpersonas p ON e.personaid= p.personaid
WHERE empleadoestado=1;
END$$
DELIMITER ;

/* eliminar el empleado*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarEmpleado`(IN `empleado` VARCHAR(50))
    NO SQL
BEGIN
UPDATE tbempleados set empleadoestado=0 WHERE empleadoid=empleado AND empleadoestado=1;
END$$
DELIMITER ;

/* buscar persona correo*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaCorreo`(IN `correo` VARCHAR(20))
    NO SQL
BEGIN
SELECT `personaid` 
FROM `tbpersonas` 
WHERE personacorreo= correo;
END$$
DELIMITER ;

/* nuevo cliente*/
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `nuevoCliente`(IN `persona` VARCHAR(20), IN `clave` VARCHAR(20), IN `direccion` VARCHAR(20), IN `estado` BOOLEAN)
    NO SQL
BEGIN
INSERT INTO `tbclientes`( `personaid`, `clienteclave`,`clientedireccionexacta`,`clienteestado`) 
VALUES (persona, clave, direccion, estado);
END$$
DELIMITER ;