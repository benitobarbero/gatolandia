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
        $nombreUsuarioBueno=$datos[0];
        
        
             
        //Aqui los datos de la base de datos
         $host_db = "localhost";
         $user_db = "proyectoRaquel";
         $pass_db = "1234";
         $db_name = "tiendaonline2";
         $tbl_name = "compras";
 
 
        // $nomUsuario=$_GET['usuario'];
         
 
         $conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);
 
         if ($conexion->connect_error) {
         die("La conexion falló: " . $conexion->connect_error);
        }
        //Generamos la consulta para buscar la lista de la compra del usuario
         $buscarCompra = "SELECT * FROM `tiendaonline2`.`compras` WHERE `nombreusuario`='$nombreUsuarioBueno' ";
 
         $result = mysqli_query($conexion, $buscarCompra);
         $result = mysqli_fetch_array($result);
         
         
         
         //Nos guardamos el resultado de la consulta
         $articulo1=$result['cantidadArticulo1'];
         $articulo2=$result['cantidadArticulo2'];
         $articulo3=$result['cantidadArticulo3'];
         $articulo4=$result['cantidadArticulo4'];
         $articulo5=$result['cantidadArticulo5'];
         $articulo6=$result['cantidadArticulo6'];
         
         $datos=[$nombreUsuarioBueno, $articulo1, $articulo2, $articulo3, $articulo4, $articulo5, $articulo6];
        
       
        
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
            
            
           
            <div id="cuerpoCarrito" class="text-center"><h3 class="text-center">Todavía no esta registrado, no puede hacer compras</h3></div>
             
        </div>
        

         <script type="text/javascript">
             var arrayPrecios=[15, 2, 60, 30, 15, 40];
           var arrayJS=<?php echo json_encode($datos);?>;
          


          if(arrayJS[0]!==null){
           escribirDatos();
           escribirCarrito();
       }

    
    
    function escribirCarrito(){
        $('#cabeceraCarrito').html("<h2 class='text-center'>Bienvenido "+arrayJS[0]+" aqui tiene sus articulos</h2>");
        
       
        $('#cuerpoCarrito').html("");
        $('#cuerpoCarrito').append("<br> <div class='row'style='font-weight: bold;'><div class='col-md-3'>NOMBRE ARTICULO </div><div class='col-md-3'> CANTIDAD </div><div class='col-md-3'> PRECIO </div></div>");
      
        
        
        if(arrayJS[1]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Juguete Rascador </div><div class='col-md-3'>"+arrayJS[1]+"</div><div class='col-md-3'>"+(arrayJS[1]*arrayPrecios[0])+" €</div></div>");
        if(arrayJS[2]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Chucherias Rellenas</div><div class='col-md-3'>"+arrayJS[2]+"</div><div class='col-md-3'>"+(arrayJS[2]*arrayPrecios[1])+" €</div></div>");
        if(arrayJS[3]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Caseta Diseño</div><div class='col-md-3'>"+arrayJS[3]+"</div><div class='col-md-3'>"+(arrayJS[3]*arrayPrecios[2])+" €</div></div>");
        if(arrayJS[4]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Pienso Adultos</div><div class='col-md-3'>"+arrayJS[4]+"</div><div class='col-md-3'>"+(arrayJS[4]*arrayPrecios[3])+" €</div></div>");
        if(arrayJS[5]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Pienso cachorros </div><div class='col-md-3'>"+arrayJS[5]+"</div><div class='col-md-3'>"+(arrayJS[5]*arrayPrecios[4])+" €</div></div>");
        if(arrayJS[6]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Rascador Vertical</div><div class='col-md-3'>"+arrayJS[6]+"</div><div class='col-md-3'>"+(arrayJS[6]*arrayPrecios[5])+" €</div></div>");
    
        if(arrayJS[1]!=0 || arrayJS[2]!=0 || arrayJS[3]!=0 || arrayJS[4]!=0 || arrayJS[5]!=0 || arrayJS[6]!=0)
        {
            var total = (arrayJS[1]*arrayPrecios[0])+(arrayJS[2]*arrayPrecios[1])+(arrayJS[3]*arrayPrecios[2])+(arrayJS[4]*arrayPrecios[3])+(arrayJS[5]*arrayPrecios[4])+(arrayJS[6]*arrayPrecios[5]);
            $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'></div><div class='row'><div class='col-md-3'></div><div class='row'><div class='col-md-3' style='text-align: left;'>Subtotal:  "+total+" €</div>");
            $('#cuerpoCarrito').append("<br><br><button onclick = 'location=\"compraFinal.php\"' class='btn btn-danger btn-block'>COMPRAR</button>");
            
        }
    }
     function escribirDatos(){
        if(arrayJS[0]!=null)
        {
            //var suma = arrayJS[1]+arrayJS[2]+arrayJS[3]+arrayJS[4]+ arrayJS[5]+arrayJS[6];
            $('#datosUsuario').html('<p class="navbar-text" style="float: right;"> Bienvenido: '+arrayJS[0]);
           
       }
    }
            
            
        </script>
        
    </body>
</html>


