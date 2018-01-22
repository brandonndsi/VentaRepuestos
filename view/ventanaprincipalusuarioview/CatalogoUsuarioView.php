<!DOCTYPE html>

<html lang="es">
    <head>
        <title>Repuestos DJB</title>
        <meta charset="UTF-8">
        <!--CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css"> 
        <link rel="stylesheet" href="../../css/styles.css">

        <!--JS -->
        <script src="../../js/Catalogo.js"></script>

    </head>
    <body>
        <?php
        require '../ventanaprincipalusuarioview/menuUsuario.php';
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header("location: ../loginview/LoginView.php");
        } else {
            $persona = $_SESSION['usuario'];
            $id = $persona[0];
        }
        ?>
        <main>

            <section id="banner">
                <img src="../../images/fondos/banner.jpg">
                <div class="contenedor">
                    <h2>Bienvenido</h2>
                    <p id="nombre"><b><?php echo " " . $persona[1]; ?></b></p>
                    <p>Puedes comenzar a comprar en la tienda de categorias cualquier repuesto que nesesites.</p>
                </div>

            </section>

            <!--Carrucel-->
            <section id="bienvenidos">
                <div id="contenedor_carrucel">
                    <ul id="carrucel" >
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php">
                                <strong style="color:black;">Autos</strong>
                                <img src="../../images/catalogo/carro.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php">
                                <strong style="color:black;">Motocicletas</strong>
                                <img src="../../images/catalogo/moto.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php">
                                <strong style="color:black;">Scooters</strong>
                                <img src="../../images/catalogo/scooter.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php">
                                <strong style="color:black;">Trailers</strong>
                                <img src="../../images/catalogo/trailer.jpg" id="carru">
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal" id="modalInfoRepuesto" role="dialog">    
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div style="font-size:20px;" class="modal-header">
                            <h5 class="modal-title" ><strong>Conoce DJB</strong></h5>
                            <button type="button" class="close" onclick="cerrarModalInfoRepuesto();">
                                <span aria-hidden="true">&times;</span>
                            </button>            
                        </div>
                        <div class="modal-body">
                            <p><h2>Misi&oacute;n.</h2>
                            <p>Satisfacer con excelencia las necesidades de repuestos y servicios del mercado automotriz, procurando la preferencia de nuestros clientes por la calidad en el servicio y la competitividad de los precios en el mercado.</p>

                            <P><br><h2>Visi&oacute;n.</h2>
                            <p>Ser la empresa líder en importación y comercialización de repuestos automotrices para las marcas Mercedes Benz y Volkswagen, reconocida por la calidad y variedad de sus productos y la vocación de servicio al cliente.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="cerrarModalInfoRepuesto();">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--articulos-->
            <section id="info">
                <h3>Los articulos que ofrecemos para las categorias de vehiculos.</h3>
                <div class="contenedor">
                    <div class="info-repuesto">
                        <a href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php"><img src="../../images/catalogo/carro.jpg"></a>
                        <h4>Carros</h4>
                    </div>

                    <div class="info-repuesto">
                        <a href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php"><img src="../../images/catalogo/moto.jpg"></a> 
                        <h4>Motos</h4>
                    </div>

                    <div class="info-repuesto">
                        <a href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php"><img src="../../images/catalogo/scooter.jpg"></a>
                        <h4>Scooters</h4>
                    </div>
                    <div class="info-repuesto">
                        <a href="../ventanaprincipalusuarioview/CategoriaUsuarioView.php"><img src="../../images/catalogo/trailer.jpg"></a>
                        <h4>Trailers</h4>
                    </div>
                </div>
            </section>
        </main>
        <?php
        require '../footer/footer.php';
        ?>

    </body>
</html>
