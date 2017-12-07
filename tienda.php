<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'carritoCompraFunciones.php';

session_start(); //Iniciamos la Sesion o la Continuamos
if (isset($_SESSION['datos'])!=null)
{
	$datos=$_SESSION['datos']; //Si existe un nickname generamos el mensaje
}


?>





<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
                 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
       
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"  crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
              <div id="menu">
            
                <nav class="navbar navbar-inverse" style="background: #172A40;">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">Gatolandia</a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php">Home</a></li>
                      <li><a href="registro.php">Registro</a></li>
                      <li><a href="tienda.php">Tienda</a></li>
                      <li><a href="carrito.php">Carrito</a></li>
                      <li><a href="contacto.php">Contacto</a></li>
                      
                    </ul>
                      <div id="datosUsuario"> <p class="navbar-text" style="float: right;"></p></div>
                  </div>
                </nav>
        </div>
        
        <div class="container">
 
            
            <!-- PRIMERA FILA-->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><button onclick="compraArticulo(1)" class="btn btn-danger btn-sm">COMPRAR</button></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><button onclick="compraArticulo(2)" class="btn btn-danger btn-sm">COMPRAR</button></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 3</div>
                        <div class="productprice"><div class="pull-right"><button onclick="compraArticulo(3)" class="btn btn-danger btn-sm">COMPRAR</button></div><div class="pricetext">30,00€</div></div>
                    </div>


                </div>
                <div class="col-md-2"></div>
   
            </div>
            
            
            <!-- SEGUNDA FILA-->
                        <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button" onclick="compraArticulo(4)">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button" onclick="compraArticulo(5)">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 3</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button" onclick="compraArticulo(6)">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>


                </div>
                <div class="col-md-2"></div>
   
            </div>
            
            
                        <!-- Modal -->
             <div class="modal fade" id="myModal" role="dialog">
               <div class="modal-dialog">

                 <!-- Modal content-->
                 <div class="modal-content">
                   <div class="modal-header">
                     
                     <h4 class="modal-title">Usuario no registrado</h4>
                   </div>
                   <div class="modal-body">
                     <p>Lo lamentamos, para poder realizar compras, debe estar registrado</p>
                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                   </div>
                 </div>

               </div>
             </div>
 
                        <div id="pruebafuncion"></div>
            
            
            
        </div>
        
        
        
        
        
         <script>
             
            if(<?php echo json_encode($datos);?>!=null){
           var arrayJS=<?php echo json_encode($datos);?>;
        }
           escribirDatos();

        

 
    
    function compraArticulo(numero){
        
        if(arrayJS[0]===null){
             $('#myModal').modal('show'); 
             $('#pruebafuncion').html("<h1> Lo lamentamos, pero debe estar registrado para poder hacer compras </h1>");
        }else{
            arrayJS[numero]=arrayJS[numero]+1;
            $('#pruebafuncion').html("<h1> Agregada una unidad al carrito </h1>"); 
            escribirDatos();
         
        }
        
    }
    function escribirDatos(){
        if(arrayJS[0]!=null){
            var suma = arrayJS[1]+arrayJS[2]+arrayJS[3]+arrayJS[4]+ arrayJS[5]+arrayJS[6];
            $('#datosUsuario').html('<p class="navbar-text" style="float: right;"> Bienvenido: '+arrayJS[0]+' Tiene: ' +suma+ ' articulos en su cesta</p>');
            
       }
    }
            
            
        </script>
    </body>
</html>
