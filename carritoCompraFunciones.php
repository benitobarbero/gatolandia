<?php
    $data = json_decode($_POST['arrayJS'], true);
    print_r($data[0]);//Imprimirá la primera posición del arreglo en este caso es un 2
    
    
    session_start();
      $_SESSION['datos']= json_encode($data); 
    
    
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
