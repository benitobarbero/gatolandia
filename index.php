<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
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
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 3</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
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
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 2</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>
                    <div class="col-md-4  productbox">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
                        <div class="producttitle">Product 3</div>
                        <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRAR</a></div><div class="pricetext">30,00€</div></div>
                    </div>


                </div>
                <div class="col-md-2"></div>
   
            </div>
            

            
            
            
        </div>
        
        
        <script type="text/javascript">
            
           var arrayJS=<?php echo json_encode($datos);?>;

           escribirDatos();

//    // Mostramos los valores del array
//
//    for(var i=0;i<arrayJS.length;i++){
//
//        document.write("<br>"+arrayJS[i]);
//
//    }
    
    
    function escribirDatos(){
        if(arrayJS[0]!=null){
            var suma = arrayJS[1]+arrayJS[2]+arrayJS[3]+arrayJS[4]+ arrayJS[5]+arrayJS[6];
            $('#datosUsuario').html('<p class="navbar-text" style="float: right;"> Bienvenido: '+arrayJS[0]+' Tiene: ' +suma+ ' articulos en su cesta</p>');
        }
    }
            
            
        </script>
        
        
    </body>
</html>

