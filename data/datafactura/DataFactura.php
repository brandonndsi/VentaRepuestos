<?php

class DataFactura {

    private $conexion;

    function DataFactura() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    function eliminarFactura($numerofactura) {
        
    }
    function actualizarFactura($factura,$facturadetalle){

    }
    function nuevaFactura($factura,$facturadetalle){

    }


    function mostrarFactura() {
        $this->conexion->crearConexion()->set_charset('utf8');
        $datos = $this->conexion->crearConexion()->query("CALL mostrarfactura();");

        $this->conexion->cerrarConexion();

        $tabla="";
        while ($row = $datos->fetch_assoc()) {
           $editar = '<button  onclick=\"actualizarMostrar('.$row['idcliente'].','
                        .'\''.$row['numerofactura'].'\','
                        .'\''.$row['fechafactura'].'\','
                        .'\''.$row['idcliente'].'\','
                        .'\''.$row['idvendedor'].'\','
                        .'\''.$row['condicion'].'\','
                        .'\''.$row['totalventa'].'\','
                        .'\''.$row['estadofactura'].'\');\"'
                        .'class=\"btnEditar\">Modificar</button>';

                        $ver = '<button onclick=\"verAbrir('.$row['idfactura'].','
                        .'\''.$row['idfactura'].'\','
                        .'\''.$row['numerofactura'].'\','
                        .'\''.$row['fechafactura'].'\','
                        .'\''.$row['idcliente'].'\','
                        .'\''.$row['idvendedor'].'\','
                        .'\''.$row['condicion'].'\');\"'
                        .'class=\"btnVer\">Ver</button>';

                        $eliminar = '<button onclick=\"eliminarAbrir('.$row['numerofactura'].');\"'
                        .'class=\"btnEliminar\" >Eliminar</button>';

                        $tabla .= '{
                          "fecha":"' . $row['fechafactura'] . '",
                          "cliente":"' . $row['idcliente'] . '",
                          "vendedor":"' . $row['idvendedor'] . '",
                          "estado":"' . $row['condicion'] . '", 
                          "total":"' . $row['totalventa'] . '",   
                          "acciones":"' . $editar . $ver . $eliminar . '"
                        },'; 
                    }
                    //eliminamos la coma que sobra
                    $tabla = substr($tabla, 0, strlen($tabla) - 1);
                    echo '{"data":[' . $tabla . ']}';

    }

}

/*$dota= new DataFactura();
$d=$dota->mostrarFactura();
print_r($d);*/
?>
