<?php

 class DataProveedor{
 private $conexion;

 public function DataProveedor(){
    include '../../data/dbconexion/Conexion.php';
   // include '../../domain/proveedores/Proveedores.php';
    $this->conexion = new Conexion();

 }

 /*funcion de cargado de la data table*/
            public function mostrarProveedor() {
               if ($this->conexion->crearConexion()->set_charset('utf8')) {

                    $array = array();

                    $buscarProveedor = $this->conexion->crearConexion()->query("CALL mostrarproveedores();");

                    $this->conexion->cerrarConexion();
                    $tabla="";
                    while ($row = $buscarProveedor->fetch_assoc()) {

                        $editar = '<button  onclick=\"actualizarMostrar('.$row['proveedorid'].','
                        .'\''.$row['cedula'].'\','
                        .'\''.$row['personanombre'].'\','
                        .'\''.$row['personaapellido1'].'\','
                        .'\''.$row['personaapellido2'].'\','
                        .'\''.$row['personatelefono'].'\','
                        .'\''.$row['personacorreo'].'\','
                        .'\''.$row['productoid'].'\');\"'
                        .'class=\"btnEditar\">Modificar</button>';

                        $ver = '<button onclick=\"verAbrir('.$row['cedula'].','
                        .'\''.$row['personanombre'].'\','
                        .'\''.$row['personaapellido1'].'\','
                        .'\''.$row['personaapellido2'].'\','
                        .'\''.$row['personatelefono'].'\','
                        .'\''.$row['personacorreo'].'\','
                        .'\''.$row['productoid'].'\');\"'
                        .'class=\"btnVer\">Ver</button>';

                        $eliminar = '<button onclick=\"eliminarAbrir('.$row['proveedorid'].');\"'
                        .'class=\"btnEliminar\" >Eliminar</button>';

                        $tabla .= '{
                          "nombre":"' . $row['personanombre'] . '",
                          "apellido1":"' . $row['personaapellido1'] . '",
                          "apellido2":"' . $row['personaapellido2'] . '",
                          "cedula":"' . $row['cedula'] . '",   
                          "acciones":"' . $editar . $ver . $eliminar . '"
                        },';
                    }
                    //eliminamos la coma que sobra
                    $tabla = substr($tabla, 0, strlen($tabla) - 1);
                    echo '{"data":[' . $tabla . ']}';
                    
                } 
            } 

            public function eliminarProveedor($proveedorid) {
              if ($this->conexion->crearConexion()->set_charset('utf8')) {
                $eliminado=$this->conexion->crearConexion()->query("CALL eliminarproveedores('".$proveedorid."');");
                $this->conexion->cerrarConexion();

                return $eliminado;
                    }  
                        }

            //insertar
            public function insertarProveedor($proveedor) {
                if ($this->conexion->crearConexion()->set_charset('utf8')) {
                    $nuevoPersona=$this->conexion->crearConexion()->query(
                     "CALL nuevaPersona(
                     '".$proveedor->getPersonaCedula()."',
                     '".$proveedor->getPersonaNombre()."',
                     '".$proveedor->getPersonaApellido1()."',
                     '".$proveedor->getPersonaApellido2()."',
                     '".$proveedor->getPersonaTelefono()."',
                     '".$proveedor->getCorreo()."',
                     '1');");
                    /*opteniendo el id de la persona*/
                    $personaid=$this->conexion->crearConexion()->query(
                    "CALL buscarPersonaID(
                    '".$proveedor->getPersonaCedula()."');");

                    while ($resultado = $personaid->fetch_assoc()) {
                        $con = $resultado['personaid'];
                    }
                    /* verificamos si es un string ya formulado */
                     if(is_string($con)){
                    $proveedor->setPersonaId($con);
                     }

                    $this->conexion->cerrarConexion();
                    $nuevoProveedor=$this->conexion->crearConexion()->query(
                    "CALL nuevoProveedor( 
                    '".$proveedor->getPersonaId()."',
                    '".$proveedor->getProveedorProductoId()."',
                    '1');");
                    $this->conexion->cerrarConexion();

                     return $nuevoProveedor;   
                    
                    
                }
            }

            //modificar
            public function modificarProveedor($proveedor) {
                 $conID ="";
                if ($this->conexion->crearConexion()->set_charset('utf8')) {
                    $actualizandoProveedor = $this->conexion->crearConexion()->query(
                    "CALL actualizarProveedor(
                     '".$proveedor->getProveedorProductoId()."'
                     '".$proveedor->getProveedorId()."');");

                        $this->conexion->cerrarConexion();
                    //recuperando lo que es el id de la persona en proveedor.
                    $recuperandoIdPersona = $this->conexion->crearConexion()->query(
                        "CALL buscarPersonaIDProveedor(
                        '" . $proveedor->getProveedorId() . "');");
                        $this->conexion->cerrarConexion();
                    /* transformando los datos del id objeto a un string */
                    while ($resultado = $recuperandoIdPersona->fetch_assoc()) {
                        $conID = $resultado['personaid'];
                        echo $conID;
                    }
                    /* verificamos si es un string ya formulado */
                    if (is_numeric($conID)) {
                        $proveedor->setPersonaId($conID);
                    }

                    //modificando el tb persona
                    $personanuevo = $this->conexion->crearConexion()->query(
                    "CALL actualizarPersona( 
                    '".$proveedor->getPersonaCedula()."',
                    '" . $proveedor->getPersonaNombre() . "',
                    '" . $proveedor->getPersonaApellido1() . "',
                    '" . $proveedor->getPersonaApellido2() . "',
                    '" . $proveedor->getPersonaTelefono() . "',
                    '" . $proveedor->getCorreo() . "',
                    '" . $proveedor->getPersonaId() . "');");

                    $this->conexion->cerrarConexion();
                    
                }
                        return $personanuevo;

            }

            //buscar
            public function buscarProveedor($proveedorid) {
                if ($this->conexion->crearConexion()->set_charset('utf8')) {

                    $array = array();

                     $buscarProveedor = $this->conexion->crearConexion()->query("buscarproveedores('".$proveedorid."');");

                    $this->conexion->cerrarConexion();
                    
                    while ($resultado = $buscarProveedor->fetch_assoc()) {
                        array_push($array, $resultado);
                    }
                    return $array;
                }
            }

            public function autoCompleta($dato){
               if ($this->conexion->crearConexion()->set_charset('utf8')) {
                $auto =$this->conexion->crearConexion()->query(
                    "SELECT `productonombre` FROM `tbproductos` WHERE productonombre LIKE '%".$dato."%';");
                        $arrays =array();
                while ($resultado = $auto->fetch_assoc()) {
                        array_push($arrays, $resultado);
                    }
                    return  $arrays;
               } 
            }

 }
/*$datt= new DataProveedor();
$d=$datt->autoCompleta("ll");
print_r($d);*/
?>