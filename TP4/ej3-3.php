<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="insert into persona (nombre,apellido,documento,edad) values (:nombre,:apellido,:documento,:edad)";

$ejecucionSQL= $conexionPDO->prepare($sql);
$params=array('nombre' => $_POST['nom'], 'apellido' => $_POST['ape'], 'documento' => $_POST['doc'], 'edad' => $_POST['edad']);
$ejecucionSQL ->execute($params);

echo "Aceptado";

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 10/10/2018
 * Time: 06:56 PM
 */