<?php

session_start();
       $arrayDatos= $_SESSION['datos'];
       $nombreUsuarioBueno=$arrayDatos[0];
       
       echo $nombreUsuarioBueno;
        //Aqui los datos de la base de datos
         $host_db = "localhost";
         $user_db = "proyectoRaquel";
         $pass_db = "1234";
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
         
         
                switch ($articuloCompra) {
           case 1:
               $articulo1++;
               break;
           case 2:
              $articulo2++;
               break;
           case 3:
              $articulo3++;
               break;
           case 4:
              $articulo4++;
               break;
           case 5:
              $articulo5++;
               break;
           case 6:
              $articulo6++;
               break;
            }


                 echo "<br> el articulo pulsado ha sido $articuloCompra estos son los resultados de los articulos: $articulo1 , $articulo2 , $articulo3 , $articulo4 , $articulo5 , $articulo6";

         $insertarCompra = "UPDATE `compras` SET `nombreusuario`='$nombreUsuarioBueno',`cantidadArticulo1`='$articulo1',`cantidadArticulo2`='$articulo2',`cantidadArticulo3`='$articulo3',". "`cantidadArticulo4`='$articulo4',`cantidadArticulo5`='$articulo5',`cantidadArticulo6`='$articulo6' WHERE `nombreusuario` = '$nombreUsuarioBueno'";
         echo "<br> aqui la query $insertarCompra";
         $result = mysqli_query($conexion, $insertarCompra);
         
         
         print_r($result);
         
         
 
         
         
            
         
         //Iniciamos la sesion de nuevo para actualizar el valor de la variable con la nueva compra,
         //para poder usarla en el carrito
          
        
    ?>
 
  <?php
   header ("Location: tienda.php");
    ?>