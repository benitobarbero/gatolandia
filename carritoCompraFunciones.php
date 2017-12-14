<?php
    
   // print_r($data[0]);//Imprimirá la primera posición del arreglo en este caso es un 2
    
    session_start(); //Iniciamos la Sesion o la Continuamos
        if (isset($_SESSION['datos'])!=null)
        {
                $datosObtenidos=$_SESSION['datos']; //Si existe un nickname generamos el mensaje
        }


    
    
      
      
        $host_db = "localhost";
         $user_db = "root";
         $pass_db = "";
         $db_name = "tiendaonline";
         $tbl_name = "tablaCompras";

         $id= $_GET['id'];
         $username = $datosObtenidos[0];

        
         $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

         if ($conexion->connect_error) {
         die("La conexion falló: " . $conexion->connect_error);
        }
      
      
         $insertarArticulo = "INSERT INTO $tbl_name (username, producto)
            VALUES ($username, $id);";
         
         $datosObtenidos[$id]=$datosObtenidos+1;
          
       
          
          $_SESSION['datos']= json_encode($datosObtenidos); 
      
      
      
      
      
      
    ?>

<?php
header ("Location: tienda.php");
?>
    
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carritoCompraFunciones
 *
 * @author Raquel
 */
class carritoCompraFunciones {
    //put your code here
}
