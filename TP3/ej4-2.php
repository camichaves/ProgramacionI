<title>Ejercicio 4</title>
<body>
<label>Datos del archivo</label>
<?php
//print_r($_FILES);
$archivo=fopen($_FILES['archivo']['tmp_name'],"r");

$nom_arch=explode(".",$_FILES['archivo']['name']);
//$n=count($nom_arch);
//echo "count da: $n y {$nom_arch[1]}";
$pn="png";
$jp="jpg";

if( (count($nom_arch)>2) || (($nom_arch[1]!=$jp) && ($nom_arch[1]!=$pn)) ){ echo "Archivo invalido"; }
else {
    if (!file_exists('C:\wamp\www\TP3\Importados')) {

        mkdir('C:\wamp\www\TP3\Importados');
    }
    if ($nom_arch[1] == $jp) {
        $extension = $jp;
    } else {
        $extension = $pn;
    }
    copy($_FILES['archivo']['tmp_name'], "C:\wamp\www\TP3\Importados\img.{$extension}");
}
    ?>
    <label>Contenido:</label>
    <?php
    session_start();
    //if(session_status()=="PHP_SESSION_ACTIVE")
    $total_imagenes = count(glob('Importados/{*.jpg,*.png}',GLOB_BRACE));
     echo 'total_imagenes = '.$total_imagenes;

    // para leer el directorio
    $ruta = "./Importados/";
    $filehandle = opendir($ruta);

    while (false !== ($entrada = readdir($gestor))) {
        echo "$entrada\n";
    }

    closedir($filehandle);
    //echo "<img src='Importados\img.{$extension}' >";



?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 03/10/2018
 * Time: 08:48 PM
 */