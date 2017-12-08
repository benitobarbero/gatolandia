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
            
            
           
            <div id="cuerpoCarrito"><h3 class="text-center">Todavía no tiene ningun articulo en su cesta</h3></div>
             
        </div>
        

         <script type="text/javascript">
            
           var arrayJS=<?php echo json_encode($datos);?>;


          if(arrayJS[0]!=null){
           escribirDatos();
           escribirCarrito();
       }

    
    
    function escribirCarrito(){
        $('#cabeceraCarrito').html("<h2 class='text-center'>Bienvenido "+arrayJS[0]+" aqui tiene sus articulos</h2>");
        
 $('#cuerpoCarrito').html("");
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>NOMBRE ARTICULO </div><div class='col-md-3'> CANTIDAD </div><div class='col-md-3'> PRECIO </div></div>");
      
        
        
        if(arrayJS[1]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 1 </div><div class='col-md-3'>"+arrayJS[1]+"</div><div class='col-md-3'>"+(arrayJS[1]*30)+" €</div></div>");
        if(arrayJS[2]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 2 </div><div class='col-md-3'>"+arrayJS[2]+"</div><div class='col-md-3'>"+(arrayJS[2]*30)+" €</div></div>");
        if(arrayJS[3]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 3 </div><div class='col-md-3'>"+arrayJS[3]+"</div><div class='col-md-3'>"+(arrayJS[3]*30)+" €</div></div>");
        if(arrayJS[4]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 4 </div><div class='col-md-3'>"+arrayJS[4]+"</div><div class='col-md-3'>"+(arrayJS[4]*30)+" €</div></div>");
        if(arrayJS[5]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 5 </div><div class='col-md-3'>"+arrayJS[5]+"</div><div class='col-md-3'>"+(arrayJS[5]*30)+" €</div></div>");
        if(arrayJS[6]!=0)
        $('#cuerpoCarrito').append(" <div class='row'><div class='col-md-3'>Articulo 6 </div><div class='col-md-3'>"+arrayJS[6]+"</div><div class='col-md-3'>"+(arrayJS[6]*30)+" €</div></div>");
    
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

