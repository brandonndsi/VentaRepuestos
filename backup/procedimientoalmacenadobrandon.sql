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