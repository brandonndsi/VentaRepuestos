<?php

 class DataCliente{
 private $conexion;

 public function DataCliente(){
    include '../../data/dbconexion/Conexion.php';
   // include '../../domain/clientes/Clientes.php';
    $this->conexion = new Conexion();

 }

 /*funcion de cargado de la data table*/
            public function mostrarCliente() {
               if ($this->conexion->crearConexion()->set_charset('utf8')) {

                    $array = array();

                    $buscarCliente = $this->conexion->crearConexion()->query("CALL mostrarclientes();");

                    $this->conexion->cerrarConexion();
                    $tabla="";
                    while ($row = $buscarCliente->fetch_assoc()) {

                        $editar = '<button  onclick=\"actualizarMostrar('.$row['clienteid'].','
                        .'\''.$row['cedula'].'\','
                        .'\''.$row['personanombre'].'\','
                        .'\''.$row['personaapellido1'].'\','
                        .'\''.$row['personaapellido2'].'\','
                        .'\''.$row['personatelefono'].'\','
                        .'\''.$row['personacorreo'].'\','
                        .'\''.$row['personaid'].'\');\"'
                        .'class=\"btnEditar\">Modificar</button>';

                        $ver = '<button onclick=\"verAbrir('.$row['cedula'].','
                        .'\''.$row['personanombre'].'\','
                        .'\''.$row['personaapellido1'].'\','
                        .'\''.$row['personaapellido2'].'\','
                        .'\''.$row['personatelefono'].'\','
                        .'\''.$row['personacorreo'].'\','
                        .'\''.$row['personaid'].'\');\"'
                        .'class=\"btnVer\">Ver</button>';

                        $eliminar = '<button onclick=\"eliminarAbrir('.$row['clienteid'].');\"'
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

            public function eliminarCliente($clienteid) {
              if ($this->conexion->crearConexion()->set_charset('utf8')) {
                $eliminado=$this->conexion->crearConexion()->query("CALL eliminarclientes('".$clienteid."');");
                $this->conexion->cerrarConexion();

                return $eliminado;
                    }  
                        }

            //insertar
            public function insertarCliente($cliente) {
                if ($this->conexion->crearConexion()->set_charset('utf8')) {
                    $nuevoPersona=$this->conexion->crearConexion()->query(
                     "CALL nuevaPersona(
                     '".$cliente->getPersonaCedula()."',
                     '".$cliente->getPersonaNombre()."',
                     '".$cliente->getPersonaApellido1()."',
                     '".$cliente->getPersonaApellido2()."',
                     '".$cliente->getPersonaTelefono()."',
                     '".$cliente->getCorreo()."',
                     '1');");
                    /*opteniendo el id de la persona*/
                    $personaid=$this->conexion->crearConexion()->query(
                    "CALL buscarPersonaID(
                    '".$cliente->getPersonaCedula()."');");

                    while ($resultado = $personaid->fetch_assoc()) {
                        $con = $resultado['personaid'];
                    }
                    /* verificamos si es un string ya formulado */
                     if(is_string($con)){
                    $cliente->setPersonaId($con);
                     }

                    $this->conexion->cerrarConexion();
                    $nuevoCliente=$this->conexion->crearConexion()->query(
                    "CALL nuevoCliente( 
                    '".$cliente->getPersonaId()."',
                    '".$cliente->getClienteProductoId()."',
                    '1');");
                    $this->conexion->cerrarConexion();

                     return $nuevoCliente;   
                    
                    
                }
            }

            //modificar
            public function modificarCliente($cliente) {
                 $conID ="";
                if ($this->conexion->crearConexion()->set_charset('utf8')) {
                    $actualizandoCliente = $this->conexion->crearConexion()->query(
                    "CALL actualizarCliente(
                     '".$cliente->getClienteProductoId()."'
                     '".$cliente->getClienteId()."');");

                        $this->conexion->cerrarConexion();
                    //recuperando lo que es el id de la persona en cliente.
                    $recuperandoIdPersona = $this->conexion->crearConexion()->query(
                        "CALL buscarPersonaIDCliente(
                        '" . $cliente->getClienteId() . "');");
                        $this->conexion->cerrarConexion();
                    /* transformando los datos del id objeto a un string */
                    while ($resultado = $recuperandoIdPersona->fetch_assoc()) {
                        $conID = $resultado['personaid'];
                        echo $conID;
                    }
                    /* verificamos si es un string ya formulado */
                    if (is_numeric($conID)) {
                        $cliente->setPersonaId($conID);
                    }

                    //modificando el tb persona
                    $personanuevo = $this->conexion->crearConexion()->query(
                    "CALL actualizarPersona( 
                    '".$cliente->getPersonaCedula()."',
                    '" . $cliente->getPersonaNombre() . "',
                    '" . $cliente->getPersonaApellido1() . "',
                    '" . $cliente->getPersonaApellido2() . "',
                    '" . $cliente->getPersonaTelefono() . "',
                    '" . $cliente->getCorreo() . "',
                    '" . $cliente->getPersonaId() . "');");

                    $this->conexion->cerrarConexion();
                    
                }
                        return $personanuevo;

            }

            //buscar
            public function buscarCliente($clienteid) {
                if ($this->conexion->crearConexion()->set_charset('utf8')) {

                    $array = array();

                     $buscarCliente = $this->conexion->crearConexion()->query("buscarclientes('".$clienteid."');");

                    $this->conexion->cerrarConexion();
                    
                    while ($resultado = $buscarCliente->fetch_assoc()) {
                        array_push($array, $resultado);
                    }
                    return $array;
                }
            }

            public function autoCompleta($dato){
               if ($this->conexion->crearConexion()->set_charset('utf8')) {
                $auto =$this->conexion->crearConexion()->query(
                    "SELECT `personanombre` FROM `tbpersonas` WHERE personanombre LIKE '%$dato%';");
                        $arrays =array();
                while ($resultado = $auto->fetch_assoc()) {
                        array_push($arrays,$resultado);
                    }
                    return  $arrays;
               } 
            }

 }
/*$datt= new DataCliente();
$d=$datt->autoCompleta("mo");
print_r($d);*/
?>