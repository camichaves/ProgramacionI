<?php
session_start();
$_SESSION['usuario']=$_POST['usu'];

header("location: http://localhost/TP3/ej9-3.php");
exit;
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 16/10/2018
 * Time: 11:24 PM
 */