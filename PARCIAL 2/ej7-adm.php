<?php
if(session_start()) {
    if (($_SESSION['habilitado'] != 1) || ($_SESSION['rol']!="ad")) {
        header("location: http://localhost/TP4/ej7.php");
    }
    echo "Bienvenido administrador {$_SESSION['usuario']} \n";
}else{ echo "error al iniciar sesion";}
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 18/10/2018
 * Time: 08:55 AM
 */