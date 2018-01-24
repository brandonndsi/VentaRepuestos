<?php

class DataImagenAdministrador {

    private $conexion;

    function DataImagenAdministrador() {
        include_once '../../data/dbconexion/Conexion.php';
        $this->conexion = new Conexion();
    }

    function mostrarAdministrador($personaid) {

        if ($this->conexion->crearConexion()->set_charset('utf8')) {
            $administrador = $this->conexion->crearConexion()->query(
                    "CALL obtenerrutaimagen('" . $personaid . "','1')");
            $array=array();
            while ($result = $administrador->fetch_assoc()) {/// no esta obteniendo nada de la consulta
                array_push($array,$result['imagenruta']);
            }

            $this->conexion->cerrarConexion();

            return $array;
        }
    }
    function cargarCategoria($id){
        $this->conexion->crearConexion()->set_charset('utf8');
        $cargar=$this->conexion->crearConexion()->query("SELECT *
        FROM tbcategoriaproducto e
        INNER JOIN tbproductos p ON e.categoriaproductoid= p.categoriaproductoid
        INNER JOIN tbimagenes z ON z.productocodigo= p.productocodigo
        WHERE  e.categoriaproductoestado = 1 AND e.categoriaproductoid='".$id."';");
        $array=array();
        while ($resultado = $cargar->fetch_assoc()) {
            //$data["data"][]=$result;
            array_push($array,$resultado['productocodigo']);
            array_push($array,$resultado['productonombre']);
            array_push($array,$resultado['productodescripcion']);
            array_push($array,$resultado['productoprecio']);
            array_push($array,$resultado['imagenruta']);
        }
        return $array;
    }
}
/*
$datt=new DataImagenAdministrador();
$d=$datt->mostrarAdministrador('6');
print_r($d);*/

?>