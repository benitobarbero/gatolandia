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
            
            
            <table style="width: 100%">
            <tr>
               <th>Articulo</th>
               <th>Cantidad</th>
               <th>Precio total</th>
             </tr>
             <div id="cuerpoCarrito">
             <tr>
                 <td rowspan="3">Todavia no tiene ningun articulo en la lista</td>
       
             </tr>
             </div>
             </table>
        </div>
        
        
        
        
        
         <script type="text/javascript">
            
           var arrayJS=<?php echo json_encode($datos);?>;


          if(arrayJS[0]!=null){
           escribirDatos();
           escribirCarrito();
       }

    
    
    function escribirCarrito(){
        $('cabeceraCarrito').html("Bienvenido "+arrayJS[0]+" aqui tiene sus articulos");
        
        
        if(arrayJS[1]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 1</td><td>"+arrayJS[1]+"</td><td>"+(arrayJS[1]*30)+"</td></tr>");
        if(arrayJS[2]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 2</td><td>"+arrayJS[2]+"</td><td>"+(arrayJS[2]*30)+"</td></tr>");
        if(arrayJS[3]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 3</td><td>"+arrayJS[3]+"</td><td>"+(arrayJS[3]*30)+"</td></tr>");
        if(arrayJS[4]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 4</td><td>"+arrayJS[4]+"</td><td>"+(arrayJS[4]*30)+"</td></tr>");
        if(arrayJS[5]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 5</td><td>"+arrayJS[5]+"</td><td>"+(arrayJS[5]*30)+"</td></tr>");
        if(arrayJS[6]!=0)
        $('cuerpoCarrito').html(" <tr><td>Articulo 6</td><td>"+arrayJS[6]+"</td><td>"+(arrayJS[6]*30)+"</td></tr>");
    
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
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

