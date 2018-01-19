<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Repuestos.</title>
        <!--<link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css">-->
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/menu.css">
		<link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
		<link rel="stylesheet" type="text/css" href="../../css/categoriaProducto.css">
    </head>
    <body>
    	<?php 
    	include '../menu/menu.php';
    	 ?>
    	<main id="principal">
    		<section id="blog">
            <h3>Imagenes de las categorias de repuestos.</h3>
            <div class="contenedor">
                <article>
                   <img src="../../images/catalogoTipo/aros.jpg">
                   <h4>Aros 18.</h4>
                   <input type="submit" value="Ver M&aacute;s" id="ver"> 
                   
                </article>
                <article>
                
                  <img src="../../images/catalogoTipo/cambioManivela.jpg">
                   <h4>Manivela de cambio</h4>
                   <input type="submit" value="Ver M&aacute;s" id="ver"> 
                </article>
                <article>
                
                  <img src="../../images/catalogoTipo/mufla.jpg">
                   <h4>Mufla estandar</h4>
                  <input type="submit" value="Ver M&aacute;s" id="ver"> 
                </article>
                <article>
                
                  <img src="../../images/catalogoTipo/ruedaDiscoverer.jpg">
                   <h4>Rueda 4x4 Discoveri</h4>
                  <input type="submit" value="Ver M&aacute;s" id="ver"> 
                </article>
            </div>
        </section>
    	</main>
		<?php 
		include '../footer/footer.php';
		 ?>
    </body>
</html>
