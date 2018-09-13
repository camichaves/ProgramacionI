<html>
<body>
<?php

$cant= $_POST['cant'];
if($cant>5){echo "Numero pasado: $cant";}
echo "<table border='1px'>";
echo "<tr>";
$sum=0;
$min=9999999999999999999999;
$max=0;
for($i=1;$i<($cant+1);$i++){
    $cad="val$i";
    $sum+=$_POST[$cad];
    if($_POST[$cad]>$max){$max=$_POST[$cad];}
    if($_POST[$cad]<$min){$min=$_POST[$cad];}
    echo "<td> {$_POST[$cad]}</td>";
}
echo "<tr>";
$prom=$sum/$cant;
echo"<br> Promedio: $prom <br>";
echo "Valor maximo $max <br>";
echo "Valor minimo $min <br>";

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 13/09/2018
 * Time: 08:38 AM
 */