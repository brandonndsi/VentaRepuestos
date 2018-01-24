<?php

include_once '../../data/dataproveedor/DataProveedor.php';

$action=$_POST['accion'];/*Se optiene del metodo pos la variable*/

if ($action=="nuevo") {

    if (isset($_POST['nombre']) && isset($_POST['apellido1']) &&
        isset($_POST['apellido2']) && isset($_POST['telefono']) &&
        isset($_POST['correo']) && isset($_POST['producto']) && 
        isset($_POST['cedula'])) {

        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $producto = $_POST['producto'];//
        $cedula = $_POST['cedula'];


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
            strlen($apellido2) > 0 && strlen($telefono) > 0 &&
            strlen($correo) > 0 && strlen($producto) > 0 && 
            strlen($cedula) > 0 ) {

            if (!is_numeric($nombre)) {

                include_once '../../domain/proveedores/Proveedores.php';

                $proveedor = new Proveedores(null,$producto,1);
                $proveedor->setPersonaCedula($cedula);
                $proveedor->setPersonaNombre($nombre);
                $proveedor->setPersonaApellido1($apellido1);
                $proveedor->setPersonaApellido2($apellido2);
                $proveedor->setPersonaTelefono($telefono);
                $proveedor->setCorreo($correo);

                //include '../../data/dataproveedor/DataProveedor.php';
                //include '../../business/proveedoraccion/ProveedorAccion.php';
                $DataProveedor = new DataProveedor();

                $result = $DataProveedor->insertarProveedor($proveedor);

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
            isset($_POST['correo']) && isset($_POST['producto']) && 
            isset($_POST['cedula']) && isset($_POST['id'])) {

        $nombre = $_POST['nombre'];
        $apellido1 = $_POST['apellido1'];
        $apellido2 = $_POST['apellido2'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $producto = $_POST['producto'];//
        $cedula = $_POST['cedula'];
        $id=$_POST['id'];


        if (strlen($nombre) > 0 && strlen($apellido1) > 0 &&
            strlen($apellido2) > 0 && strlen($telefono) > 0 &&
            strlen($correo) > 0 && strlen($producto) > 0 && 
            strlen($cedula) > 0 && strlen($id) > 0) {

            if (!is_numeric($nombre)) {

                include_once '../../domain/proveedores/Proveedores.php';

                $proveedor = new Proveedores($id,$producto,1);
                $proveedor->setPersonaCedula($cedula);
                $proveedor->setPersonaNombre($nombre);
                $proveedor->setPersonaApellido1($apellido1);
                $proveedor->setPersonaApellido2($apellido2);
                $proveedor->setPersonaTelefono($telefono);
                $proveedor->setCorreo($correo);

                //include '../../data/dataproveedor/DataProveedor.php';

                $DataProveedor = new DataProveedor();


                return $DataProveedor->modificarProveedor($proveedor);
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

        $proveedorid = $_POST['id'];
        //include '../../data/dataproveedor/DataProveedor.php';

                $DataProveedor = new DataProveedor();

                return $DataProveedor->eliminarProveedor($proveedorid);
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
        $proveedorid = $_POST['id'];

        //include '../../data/dataproveedor/DataProveedor.php';

                $DataProveedor = new DataProveedor();

                $result = $DataProveedor->buscarProveedor($proveedorid);

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
                $DataProveedor = new DataProveedor();

                echo $DataProveedor->mostrarProveedor();

} else if($action =="auto"){
    $id=$_POST['c'];

    $DataProveedor = new DataProveedor();
    $resy = $DataProveedor->autoCompleta($id);
    //->autoCompleta($id);
    echo json_encode($resy);

}else {
    //esto lo que retorna es un json  que dice que hay un error al tratar de obtener todos lo datos
    $error = "ErrorTodo";
    return $error;
    // echo json_encode($error);
}
?>

