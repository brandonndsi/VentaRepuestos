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
        require '../menu/menu.php';
        ?>
        <main>
            <section id="banner">
                <img src="../../images/fondos/banner.jpg">
                <div class="contenedor">
                    <h2>Repuestos de buena calidad.</h2>
                    <p>¿Cuál es el mejor repuesto para usted?</p>
                    <a onclick="mostrarModalInfoRepuesto();">Leer más.</a> 
                </div>

            </section>
            <section id="bienvenidos">
                <h2>Bienvenido a DJB</h2>
                <p> Ofrecemos los mejores repuestos para su vehiculo y  a un buen precio en la zona de Sarapiqui.</p>
            </section>

            <!--Carrucel-->
            <section id="bienvenidos">
                <div id="contenedor_carrucel">
                    <ul id="carrucel" >
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../categoriaproductoview/CategoriaProductoView.php">
                                <strong>Mas Vendido</strong>
                                <img src="../../images/catalogo/carro.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../categoriaproductoview/CategoriaProductoView.php">
                                <strong>Lo mas Nuevo</strong>
                                <img src="../../images/catalogo/moto.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../categoriaproductoview/CategoriaProductoView.php">
                                <strong>Repuestos Familiares</strong>
                                <img src="../../images/catalogo/scooter.jpg" id="carru">
                            </a>
                        </li>
                        <li data-target="#contenedor_carrucel">
                            <a style="color:white;" href="../categoriaproductoview/CategoriaProductoView.php">
                                <strong>Lo mejor</strong>
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
                            <h5 class="modal-title" ><strong>Consejos al Comprar Repuestos de tu Carro</strong></h5>
                            <button type="button" class="close" onclick="cerrarModalInfoRepuesto();">
                                <span aria-hidden="true">&times;</span>
                            </button>            
                        </div>
                        <div class="modal-body">
                            <ol style="color:black;">
                                <li><p>Cuando se trata de comprar un Repuesto, tómese el tiempo justo para hacer la búsqueda de su repuesto ideal y haga todas las comparaciones necesarias entre varias opciones, antes de tomar la decisión final.</p>
                                <li><p>Presupueste el dinero que está dispuesto a invertir en la compra de su Repuesto.</p>
                                <li><p>Aprende a “escuchar” a tu carro.</p>
                                <li><p>Aproveche la luz del día o un lugar muy bien iluminado y preste atención a todas las imperfecciones que saltan a la vista en el repuesto.</p>
                                <li><p>Información y repuestos 100% confiables.</p>
                            </ol>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="cerrarModalInfoRepuesto();">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--articulos-->
            <section id="info">
                <h3>Los articulos que ofrecemos para las categorias de vehiculos.</h3>
                <div class="contenedor">
                    <div class="info-repuesto">
                        <a href="../categoriaproductoview/CategoriaProductoView.php"><img src="../../images/catalogo/carro.jpg"></a>
                        <h4>Carros</h4>
                    </div>

                    <div class="info-repuesto">
                        <a href="../categoriaproductoview/CategoriaProductoView.php"><img src="../../images/catalogo/moto.jpg"></a> 
                        <h4>Motos</h4>
                    </div>

                    <div class="info-repuesto">
                        <a href="../categoriaproductoview/CategoriaProductoView.php"><img src="../../images/catalogo/scooter.jpg"></a>
                        <h4>Scooters</h4>
                    </div>
                    <div class="info-repuesto">
                        <a href="../categoriaproductoview/CategoriaProductoView.php"><img src="../../images/catalogo/trailer.jpg"></a>
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
