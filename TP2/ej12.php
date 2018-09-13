
<?php
$mes = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$cad=" ";
echo "<html>";
echo "<body>";
echo "<pre>";
echo "<form action='ej12-2.php' method='post'>";


    echo "<select name='lista1' id='list1' >";
    for($g=1;$g<32;$g++){
        if (date(j)==$g){ $cad=" selected ";}else{ $cad=" ";}
        echo "<option name='d$g' {$cad} > $g </option>";
    }
    echo "</select>";



echo "<select name='lista2' id='list2' >";
for($g=1;$g<13;$g++){
    if (date(n)==$g){ $cad=" selected ";}else{ $cad=" ";}
    echo "<option name='m$g' {$cad} > {$mes[$g-1]}  </option>";
}
    echo "</select>";



echo "<select name='lista3' id='list3' >";
for($g=1900;$g<2101;$g++){
    if (date(Y)==$g){ $cad=" selected ";}else{ $cad=" ";}
    echo "<option name='a$g' {$cad} > $g </option>";
}
    echo "</select>";

echo "<input type='submit' value='Enviar'>";


echo "</pre>";
echo "</body>";
echo "</html>";
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 08:03 PM
 */