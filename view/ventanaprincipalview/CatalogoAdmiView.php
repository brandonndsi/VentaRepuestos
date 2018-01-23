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
        require '../ventanaprincipalview/menuAdmi.php';
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
