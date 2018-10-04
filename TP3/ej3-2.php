<html>
<title>Ejercicio 3</title>
<body>
<label>Datos del archivo</label>
<?php
print_r($_FILES);
$archivo=fopen($_FILES['archivo']['tmp_name'],"r");

$nom_arch=explode(".",$_FILES['archivo']['name']);
//$n=count($nom_arch);
//echo "count da: $n y {$nom_arch[1]}";
if( (count($nom_arch)>2) || ($nom_arch[1]!="txt") ){ echo "Archivo invalido"; }
else {
    if (!file_exists('C:\wamp\www\TP3\Importados')) {

        mkdir('C:\wamp\www\TP3\Importados');
    }
    copy($_FILES['archivo']['tmp_name'],'C:\wamp\www\TP3\Importados\copia.txt');
    ?>
    <label>Contenido:</label>
    <?php
    $archivo2=fopen('C:\wamp\www\TP3\Importados\copia.txt',"r");
    while ($linea = fgets($archivo2)) {
        echo $linea;
    }
}
?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 03/10/2018
 * Time: 05:17 PM
 */