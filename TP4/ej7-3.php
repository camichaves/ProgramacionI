<?php
session_start();
if($_SESSION['habilitado']!=1){
    header("location: http://localhost/TP4/ej7.php");
}
echo "Bienvenido {$_SESSION['usuario']} \n";

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 05:37 PM
 */