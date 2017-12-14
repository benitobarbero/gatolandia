<?php

session_start();
       $arrayDatos= $_SESSION['datos'];
       $nombreUsuarioBueno=$arrayDatos[0];
       
       echo $nombreUsuarioBueno;
        //Aqui los datos de la base de datos
         $host_db = "localhost";
         $user_db = "root";
         $pass_db = "";
         $db_name = "tiendaonline2";
         $tbl_name = "compras";
 
 
        // $nomUsuario=$_GET['usuario'];
         $articuloCompra=$_GET['id'];
 
         $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 
         if ($conexion->connect_error) {
         die("La conexion falló: " . $conexion->connect_error);
        }
        //Generamos la consulta para buscar la lista de la compra del usuario
         $buscarCompra = "SELECT * FROM `tiendaonline2`.`compras` WHERE `nombreusuario`='$nombreUsuarioBueno' ";
 
         $result = mysqli_query($conexion, $buscarCompra);
         $result = mysqli_fetch_array($result);
         print_r($result);
         
         
         //Nos guardamos el resultado de la consulta
         $articulo1=$result['cantidadArticulo1'];
         $articulo2=$result['cantidadArticulo2'];
         $articulo3=$result['cantidadArticulo3'];
         $articulo4=$result['cantidadArticulo4'];
         $articulo5=$result['cantidadArticulo5'];
         $articulo6=$result['cantidadArticulo6'];
   
         //Aqui nos llevamos la compra a la base de datos de pedidos
          
         $queryCompras="INSERT INTO `comprasFinales` (`nombreusuario`, `cantidadArticulo1`, `cantidadArticulo2`, `cantidadArticulo3`, `cantidadArticulo4`, `cantidadArticulo5`, `cantidadArticulo6`) 
         VALUES ('$nombreUsuarioBueno', '$articulo1', '$articulo2', '$articulo3', '$articulo4', '$articulo5', '$articulo6')";
         
         
         echo "<br> aqui la query $queryCompras";
         $result = mysqli_query($conexion, $queryCompras);
         
         
         //Reseteamos las compras, para que pueda seguir comprando si quiere
      $insertarCompra = "UPDATE `compras` SET `nombreusuario`='$nombreUsuarioBueno',`cantidadArticulo1`='0',`cantidadArticulo2`='0',`cantidadArticulo3`='0',". "`cantidadArticulo4`='0',`cantidadArticulo5`='0',`cantidadArticulo6`='0' WHERE `nombreusuario` = '$nombreUsuarioBueno'";
         echo "<br> aqui la query $insertarCompra";
         $result = mysqli_query($conexion, $insertarCompra);
         
         
         print_r($result);
         
         
        
         

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
            <div id="cabeceraCarrito"></div>
            
            
           
            <div id="cuerpoCarrito" class="text-center"><h3 class="text-center">Su compra se ha realizado Correctamente y ha pasado a la base de datos de pedidos pendiente</h3></div>
             
        </div>
        
        
    </body>
</html>