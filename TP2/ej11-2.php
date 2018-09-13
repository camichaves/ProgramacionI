

<?php
$cant=$_POST['tex1'];
$selec=$_POST['tex2'];
if($selec>$cant) {
    echo "<script>";
    echo "alert (\"La opcion seleccionada por defecto debe ser solo una\")";
    echo "</script>";
}else{
    echo " <select name='lista' id='list'>";
    for($i=1;$i<($cant+1);$i++){
        $cad=" ";
        if($i==$selec){ $cad=" selected ";}
        echo "<option value='$i' {$cad} > Opcion a seleccionar numero $i </option>";
    }







}

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 07:45 PM
 */