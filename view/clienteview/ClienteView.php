
<html>
    <head>
        <title>Clientes</title>
        <!--<link rel="stylesheet" type="text/css" href="css/cssJuan/css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="css/cliente.css">
        <link rel="stylesheet" type="text/css" href="../../css/jquery.tabla.css">
        <link rel="stylesheet" type="text/css" href="../../css/estilocrud.css">

        <script src="js/jquery.min.js"></script>
    </head>
    <body background="images/fondo.jpg">

        <nav>
            <ul>
                <li><a class="active" href="../../index.php">Menu</a></li>
                <li style="float:right"><a  href="#about">Salir</a></li>
            </ul>
        </nav>
        <!--<h2>CLIENTES</h2>-->
    <center><img src="Images/clients.jpg"></center>
    <?php include "php/navbar.php"; ?>
    <div class="container">
        <div class="row"><center>
                <div class="col-md-12">

                    <!-- Button trigger modal -->
                    <!--<a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">

                                    <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                                    <center><h2>Agregar Clientes</h2></center

                                </div>

                                <!--<div class="modal-body"><br>-->
                                <center><form role="form" method="post" action="php/agregar.php">
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" name="name" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="lastname">Apellido</label>
                                            <input type="text" class="form-control" name="lastname" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="address">Domicilio</label>
                                            <input type="text" class="form-control" name="address" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" >
                                        </div><br>
                                        <div class="form-group">
                                            <label for="phone">Telefono</label>
                                            <input type="text" class="form-control" name="phone" >
                                        </div><br></center>

                                        <button type="submit" class="btn btn-default">Agregar</button>
                                        <br><br>
                                        </div>
                                        </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <br>

                                        <?php include "php/tabla.php"; ?>

                                        </div>
                                        </center>
                                        </div>
                                        </div>

<!--<script src="css/cssJuan/js/bootstrap.min.js"></script>-->

                                        <?php include "php/navbar.php"; ?>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2>EDITAR</h2>

                                                    <?php include "php/formulario.php"; ?>

                                                </div>
                                            </div>
                                        </div>

<!--<script src="css/cssJuan/js/bootstrap.min.js"></script>-->

                                        <?php include "php/navbar.php"; ?>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2>Lista de Clientes</h2>


                                                    <?php include "php/busqueda.php"; ?>
                                                </div>
                                            </div>
                                        </div>

<!--<script src="css/cssJuan/js/bootstrap.min.js"></script>-->                                            
                                        </body>
                                        </html>