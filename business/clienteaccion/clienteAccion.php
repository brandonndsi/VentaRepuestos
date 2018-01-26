<?php

include_once '../../data/datacliente/DataCliente.php';

$action=$_POST['accion'];/*Se optiene del metodo pos la variable*/

if ($action=="nuevo") {

    if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
        isset($_POST['apellido2']) && isset($_POST['telefono']) &&
        isset($_POST['correo']) && isset($_POST['persona']) && 
        isset($_POST['cedula'])) {

        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $persona = $_POST['persona'];//
        $cedula = $_POST['cedula'];


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
            strlen($apellido2) > 0 && strlen($telefono) > 0 &&
            strlen($correo) > 0 && strlen($persona) > 0 && 
            strlen($cedula) > 0 ) {

            if (!is_numeric($nombre)) {

                include_once '../../domain/clientes/Clientes.php';

                $cliente = new Clientes(null,$persona,1);
                $cliente->setPersonaCedula($cedula);
                $cliente->setPersonaNombre($nombre);
                $cliente->setPersonaApellido1($apellido1);
                $cliente->setPersonaApellido2($apellido2);
                $cliente->setPersonaTelefono($telefono);
                $cliente->setCorreo($correo);

                //include '../../data/datacliente/DataCliente.php';
                //include '../../business/clienteaccion/ClienteAccion.php';
                $DataCliente = new DataCliente();

                $result = $DataCliente->insertarCliente($cliente);

                return $result;
            }
        }
    } else {
        // retorna un error al tratar de ingresar los datos del nuevo cliente
        $error = "ErrorNuevo";
        return $error;
    }
    /*
     * Verifica si la accion es la e actualizar los datos del cliente
     */
} else if ($action=="actualizar") {
	if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
            isset($_POST['apellido2']) && isset($_POST['telefono']) &&
            isset($_POST['correo']) && isset($_POST['persona']) && 
            isset($_POST['cedula']) && isset($_POST['id'])) {

        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $persona = $_POST['persona'];//
        $cedula = $_POST['cedula'];
        $id=$_POST['id'];


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
            strlen($apellido2) > 0 && strlen($telefono) > 0 &&
            strlen($correo) > 0 && strlen($persona) > 0 && 
            strlen($cedula) > 0 && strlen($id) > 0) {

            if (!is_numeric($nombre)) {

                include_once '../../domain/clientes/Clientes.php';

                $cliente = new Clientes($id,$persona,1);
                $cliente->setPersonaCedula($cedula);
                $cliente->setPersonaNombre($nombre);
                $cliente->setPersonaApellido1($apellido1);
                $cliente->setPersonaApellido2($apellido2);
                $cliente->setPersonaTelefono($telefono);
                $cliente->setCorreo($correo);

                //include '../../data/datacliente/DataCliente.php';

                $DataCliente = new DataCliente();


                return $DataCliente->modificarCliente($cliente);
            }
        }
   
    } else {
        // presenta el error al actualizar los datos algun dato esta mal o esta basio.
        $error = "ErrorActualizar";
        return $error;
    }
    /*
     * La accion de eliminar provando si es esta accion la que desea realizar
     */
} else if ($action=="eliminar") {

    if (isset($_POST['id'])) {

        $clienteid = $_POST['id'];
        //include '../../data/datacliente/DataCliente.php';

                $DataCliente = new DataCliente();

                return $DataCliente->eliminarCliente($clienteid);
    } else {
        //esto es porsi a la hora de eliminar el dato es vacio
        $error = "ErrorEliminar";
        return $error;
    }

    /*
     *  Esta consulta lo que debe devolver es el datos del cliente.por nombre   
     */
} else if ($action=="buscar") {

    if (isset($_POST['id'])) {
        $clienteid = $_POST['id'];

        //include '../../data/datacliente/DataCliente.php';

                $DataCliente = new DataCliente();

                $result = $DataCliente->buscarCliente($clienteid);

                return $result;
    } else {
        //lo que hace es retornar el error en un json el cual informa que algun
        // dato de busqueda no esta bieno no se encontro nada
        $error = "ErrorBuscar";
        return $error;
        // echo json_encode($error);
    }

    /*
     *  Esta conslta lo que debe devolver es todos los datos de los clientes.   
     */
} else if ($action == 'mostrar') {
                $DataCliente = new DataCliente();

                echo $DataCliente->mostrarCliente();

} else if($action =="auto"){
    $id=$_POST['c'];

    $DataCliente = new DataCliente();
    $resy = $DataCliente->autoCompleta($id);
    //->autoCompleta($id);
    echo json_encode($resy);

}else {
    //esto lo que retorna es un json  que dice que hay un error al tratar de obtener todos lo datos
    $error = "ErrorTodo";
    return $error;
    // echo json_encode($error);
}
?>

