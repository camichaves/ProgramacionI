<?php
session_start();
$_SESSION['usuario']=$_POST['usu'];

header("location: http://localhost/TP3/ej8-3.php");
exit;
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/10/2018
 * Time: 04:50 PM
 */