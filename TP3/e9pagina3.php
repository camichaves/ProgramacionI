<?php
session_start();
if(isset($_SESSION['usuario'])) {
    echo "Bienvenido {$_SESSION['usuario']} \n";

    $archivo=fopen('registro.txt','a');
    $exp=explode("/",$_SERVER['SCRIPT_FILENAME']);
    $nom=end($exp);
    $hoy = date("Y-m-d H:i:s").";".$nom."\r\n";
    fwrite($archivo,$hoy);
    fclose($archivo);

    echo "<a href=\"e9pagina1.php\">Pagina 1</a><br>";
    echo "<a href=\"e9pagina2.php\">Pagina 2</a><br>";
}else{
    echo "No se ha registrado";
}

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 16/10/2018
 * Time: 11:27 PM
 */