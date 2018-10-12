<?php

session_start();
if(isset($_SESSION['usuario'])) {
    echo "Bienvenido {$_SESSION['usuario']}";

    echo "<a href=\"e8pagina2.php\">Pagina 2</a><br>";
    echo "<a href=\"e8pagina3.php\">Pagina 3</a><br>";
}else{
    echo "No se ha registrado";
}
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/10/2018
 * Time: 04:51 PM
 */