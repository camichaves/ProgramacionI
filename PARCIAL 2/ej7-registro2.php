<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="insert into usuario (usuario,clave,habilitado,rol) values (:usu,:cla,:hab,:rol)";

$ejecucionSQL= $conexionPDO->prepare($sql);
$params=array('usu' => $_POST['usu'], 'cla' => $_POST['cla'], 'hab' => 1, 'rol' => "usuario");
$ejecucionSQL ->execute($params);

header("location: http://localhost/TP4/ej7.php");
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 18/10/2018
 * Time: 09:15 AM
 */