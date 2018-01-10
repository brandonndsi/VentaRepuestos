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
