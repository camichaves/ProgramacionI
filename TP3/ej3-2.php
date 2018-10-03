<html>
<title>Ejercicio 3</title>
<body>
<label>Datos del archivo</label>
<?php
print_r($_FILES);
$archivo=fopen($_FILES['archivo']['tmp_name'],"r");

$nom_arch=explode(".",$_FILES['archivo']['name']);

//if( (count($nom_arch)>2) || ($nom_arch[2]!=".txt") ){ echo "Archivo invalido"; }
//else {
    mkdir('C:\wamp\www\TP3\Importados');
    copy($_FILES['archivo']['tmp_name'],'C:\wamp\www\TP3\Importados\copia.txt');
    ?>
    <label>Contenido:</label>
    <?php

    while ($linea = fgets($archivo)) {
        echo $linea;
    }
//}
?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 03/10/2018
 * Time: 05:17 PM
 */