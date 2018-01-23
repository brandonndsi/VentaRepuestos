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
                <div id="contenedor_imagen">
                    <div id="imagen">
                   <img src="../../images/catalogoTipo/aros.jpg">
                    </div>
                   <h4>Aros 18.</h4>
                   <input type="submit" value="ver detalles" id="ver">
                   <a href=""><span class="icon-shopping-cart">Carrito</span></a>  
                   
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/cambioManivela.jpg">
                  </div>
                   <h4>Manivela de cambio</h4>
                   <input type="submit" value="ver detalles" id="ver">
                   <a href=""><span class="icon-shopping-cart">Carrito</span></a>  
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/mufla.jpg">
                  </div>
                   <h4>Mufla estandar</h4>
                  <input type="submit" value="ver detalles" id="ver">
                  <a href=""><span class="icon-shopping-cart">Carrito</span></a>  
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/ruedaDiscoverer.jpg">
                  </div>
                   <h4>Rueda 4x4 Discoveri</h4>
                  <input type="submit" value="ver detalles" id="ver">
                  <a href=""><span class="icon-shopping-cart">Carrito</span></a>  
                </div>
            </div>
        </section>
        <!--  modal de la informacion-->
        <div id="modal_informacion">
          <div id="informacion">
          <h2 id="titulo">TITULO DE LOS DATOS</h2>
          <div id="imagen">
            <img src="../../images/administrador/administrador.png">
          </div>
          <p id="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, magnam tenetur, maiores animi magni dignissimos fugit suscipit sapiente eaque voluptatem. Velit ipsum, voluptas tempore non quibusdam earum alias atque. Labore vel, eligendi ipsa veritatis, neque quis ex id officia pariatur!</p>
          <div id="tabla">
          <table id="tab">
            <tr>
              <th scope="col">Marca</th>
              <th scope="col">dato</th>
            </tr>
            <tr>
              <th></th>
              <th>dato</th>
            </tr>
            <tr>
              <th>Marca</th>
              <th>dato</th>
            </tr>
          </table>
          </div>
          <input id="agregar" type="submit" value="Agregar"></input>
          <input id="cancelar" type="submit" value="Cancelar"></input>
          </div>
      </div>
    	</main>
      
		<?php 
		include '../footer/footer.php';
		 ?>
    </body>
</html>
