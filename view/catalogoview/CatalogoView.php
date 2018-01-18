
<!DOCTYPE html>

<html lang="es">
    <head>
        <title>Repuestos DJB</title>
        <meta charset="UTF-8">
        <!--CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css"> 
        
    </head>
    <body>
    <?php 
      require '../menu/menu.php';
     ?>
    <main>
       <section id="banner">
       <img src="../../images/catalogo/banner.jpg">
       <div class="contenedor">
       <h2>Repuestos de buena calidad.</h2>
       <p>¿preguntas frecuentes?</p>
       <a href="#">Leer más.</a> 
       </div>
        </section>
        <section id="bienvenidos">
            <h2>Bienvenido a DJB</h2>
            <p> Ofrecemos los mejores repuestos para su vehiculo y  a un buen precio en la zona de Sarapiqui.</p>
        </section>
        <section id="blog">
            <h3>Imagenes de las categorias de repuestos.</h3>
            <div class="contenedor">
                <article>
                   <img src="../../images/catalogo/carro.png">
                   <h4>Escoge tu carro repuesto</h4> 
                   
                </article>
                <article>
                
                  <img src="../../images/catalogo/moto.jpg">
                   <h4>Escoge tu moto repuesto</h4>
                   
                </article>
                <article>
                
                  <img src="../../images/catalogo/scooter.jpg">
                   <h4>Escoge tu scooter repuesto</h4>
                  
                </article>
                <article>
                
                  <img src="../../images/catalogo/trailer.jpg">
                   <h4>Escoge tu trailers repuesto</h4>
                  
                </article>
            </div>
        </section>
        <section id="info">
            <h3>Los articulos que ofrecemos para las categorias de vehiculos.
        </h3>
        <div class="contenedor">
        <div class="info-repuesto">
          <a href="carrucelCarro.php"><img src="../../images/catalogo/carro.png"></a>
            <h4>Carros</h4>
        </div>

        <div class="info-repuesto">
          <a href="carrucelMoto.php"><img src="../../images/catalogo/moto.jpg"></a> 
            <h4>Motos</h4>
        </div>

        <div class="info-repuesto">
          <a href="carrucelScooter.php"><img src="../../images/catalogo/scooter.jpg"></a>
            <h4>Scooters</h4>
        </div>
        <div class="info-repuesto">
          <a href="carrucelTrailer.php"><img src="../../images/catalogo/trailer.jpg"></a>
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
