
<?php
print_r($_POST);
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

$dia = $_POST['lista1'];
$mes = $_POST['lista2'];
$anio = $_POST['lista3'];

if(isset($_POST['cb'])) {
    echo "Hoy es el $dia de $mes del $anio <br>";


    echo"<select name='lista' id='list'>";
    for($g=1;$g<32;$g++){
        if ($dia==$g){ $cad=" selected ";}else{ $cad=" ";}
        echo "<option name='d$g' {$cad} > $g </option>";
    }
    echo"</select>";

    echo "<select name='lista2' id='list2' >";
    for($g=1;$g<13;$g++){
        if ($meses[$g-1]==$mes){ $cad=" selected ";}else{ $cad=" ";}
        echo "<option name='m$g' {$cad} > {$meses[$g-1]}  </option>";
    }
    echo "</select>";

    echo "<select name='lista3' id='list3' >";
    for($g=1900;$g<2101;$g++){
        if ($anio==$g){ $cad=" selected ";}else{ $cad=" ";}
        echo "<option name='a$g' {$cad} > $g </option>";
    }
    echo "</select>";


}else{

    $cad="";
    for($i=0;$i<(sizeof ($mes));$i++){
        if($meses[$i]==$mes){break;}
    }
    $dia0=$dia;
    $mes0=$i+1;
    $mesnum=$i;
    if($dia0<10){$dia0="0$dia0";}
    if($mes0<10){$mes0="0$mes0";}
    echo" $dia0/$mes0/$anio <br>";


    echo"<select name='lista' id='list'>";
    for($g=1;$g<32;$g++){
        if ($dia==$g){ $cad=" selected ";}else{ $cad=" ";}
        if($g<10){$g="0$g";}
        echo "<option name='d$g' {$cad} > $g </option>";
    }
    echo"</select>";


   echo "<select name='lista2' id='list2' >";
    for($g=1;$g<13;$g++){
        if ($mesnum==$g){ $cad=" selected ";}else{ $cad=" ";}
        if($g<10){$g="0$g";}
        echo "<option name='m$g' {$cad} > {$g}  </option>";
    }
    echo "</select>";


    echo "<select name='lista3' id='list3' >";
    for($g=1900;$g<2101;$g++){
        if ($anio==$g){ $cad=" selected ";}else{ $cad=" ";}
        $g2=substr($g,-2);
        echo "<option name='a$g' {$cad} > $g2 </option>";
    }
    echo "</select>";




}


/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 08:30 PM
 */