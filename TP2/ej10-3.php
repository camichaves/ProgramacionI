<?php
print_r($_POST);

$cant=$_POST['cantidad'];



for($i=1;$i<($cant+1);$i++){

    $cad="check$i";
    if(isset($_POST[$cad])){
        $cad3="texto$i";
        $cad2= $_POST[$cad3].$i;
        echo "Se compro {$cad2} unidad/es del producto $i <br>";
    }
}
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 07:15 PM
 */