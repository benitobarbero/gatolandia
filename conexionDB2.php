<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "tiendaonline2";
 $tbl_name = "usuarios";
 
 $form_pass = $_POST['password'];
 
 //$hash = password_hash($form_pass, PASSWORD_BCRYPT); 

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE username = '$_POST[username]' ";
 
 
 echo $buscarUsuario;

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);
echo $count;
 if ( $count >0) {
 echo "<br />". "El Nombre de Usuario ya se ha cogido." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{

 $query = "INSERT INTO usuarios (username, password)
           VALUES ('$_POST[username]', '$form_pass')";
 
 $queryCompras="INSERT INTO `compras` (`nombreusuario`, `cantidadArticulo1`, `cantidadArticulo2`, `cantidadArticulo3`, `cantidadArticulo4`, `cantidadArticulo5`, `cantidadArticulo6`) 
         VALUES ('$_POST[username]', '0', '0', '0', '0', '0', '0')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>"; 
 
 $nombreUsuario=$_POST[username] ;
 
 if ($conexion->query($queryCompras) === TRUE){
     echo "insertado en la de compras";
 }else{
     echo "no insertado en la de compras";
 }
 
 
 session_start();
  
 
 
  $_SESSION['datos'] =[$nombreUsuario];
        
        echo  $_SESSION['datos'];
 
 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 
 
 
 


 
 
 mysqli_close($conexion);
?>


<?php
header ("Location: index.php");
?>