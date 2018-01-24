<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Repuestos.</title>
        <!--<link rel="stylesheet" type="text/css" href="../../css/catalogo/principal.css">-->
        <link rel="stylesheet" type="text/css" href="../../css/catalogo/menu.css">
		<link rel="stylesheet" type="text/css" href="../../css/catalogo/fonts/style.css">
		<link rel="stylesheet" type="text/css" href="../../css/categoriaProducto.css">
    <!--JS -->
    <script type="text/javascript" src="../../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../../js/categoriaproducto.js"></script>
    </head>
    <body>
    	<?php 
    	include '../menu/menu.php';
      if($_GET['id']){
        $dato=$_GET['id'];
      }
    	 ?>
       <input type="hidden" id="pase" value="<?php echo $dato; ?>">
    	<main id="principal">
            <div class="contenedor_principal" id="contenedor_principal">
                <div id="til">
                  <h3>Imagenes de las categorias de repuestos.</h3>
                </div>
                  <div id="contenedor_imagen">
                    <div id="imagen">
                   <img src="../../images/catalogoTipo/aros.jpg">
                    </div>
                   <h4>Aros 18.</h4>
                   <div id="ver">
                    <a href="javascript:abrirModal();"><span class="icon-circle-with-plus"></span>Detalles</a>
                   </div>
                   <div id="carr">
                   <a href=""><span class="icon-shopping-cart">Carrito</span></a>  
                   </div>
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/cambioManivela.jpg">
                  </div>
                   <h4>Manivela de cambio</h4>
                   <div id="ver">
                    <a href=""><span class="icon-circle-with-plus"></span>Detalles</a>
                   </div>
                   <div id="carr">
                   <a href=""><span class="icon-shopping-cart">Carrito</span></a>
                   </div>  
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/mufla.jpg">
                  </div>
                   <h4>Mufla estandar</h4>
                  <div id="ver">
                    <a href=""><span class="icon-circle-with-plus"></span>Detalles</a>
                   </div>
                   <div id="carr">
                  <a href=""><span class="icon-shopping-cart">Carrito</span></a>
                  </div>  
                </div>
                <div id="contenedor_imagen">
                  <div id="imagen">
                  <img src="../../images/catalogoTipo/ruedaDiscoverer.jpg">
                  </div>
                   <h4>Rueda 4x4 Discoveri</h4>
                  <div id="ver">
                    <a href=""><span class="icon-circle-with-plus"></span>Detalles</a>
                   </div>
                   <div id="carr">
                  <a href=""><span class="icon-shopping-cart">Carrito</span></a>
                  </div>  
                </div>
        </div>
        <!--  modal de la informacion-->
        <div id="modal_informacion">
          <div id="informacion">
            <div id="terminar">
              <a href="" id="btnTerminar">X</a>
            </div>
          <h2 id="titulo">TITULO DE LOS DATOS</h2>
          <div id="imagen">
            <img src="../../images/administrador/administrador.png">
          </div>
          <p id="descripcion">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, magnam tenetur, maiores animi magni dignissimos fugit suscipit sapiente eaque voluptatem. Velit ipsum, voluptas tempore non quibusdam earum alias atque. Labore vel, eligendi ipsa veritatis, neque quis ex id officia pariatur!</p>
          <div id="tabla">
          
          </div>
          <input id="agregar" type="submit" value="Agregar" onclick="" ></input>
          <input id="cancelar" type="submit" value="Cancelar" onclick="cerrarModal()"></input>
          </div>
      </div>
    	</main>
      
		<?php 
		include '../footer/footer.php';
		 ?>
    </body>
</html>
