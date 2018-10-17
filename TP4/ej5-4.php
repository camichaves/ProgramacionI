<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');


$sql="update persona SET nombre = :nombre, apellido = :apellido, documento = :documento, edad = :edad WHERE persona.id = :id ";
$ejecucionSQL= $conexionPDO->prepare($sql);
$ejecucionSQL->bindValue(':id',$_POST['id']);
$ejecucionSQL->bindValue(':nombre',$_POST['nom']);
$ejecucionSQL->bindValue(':apellido',$_POST['ape']);
$ejecucionSQL->bindValue(':documento',$_POST['doc']);
$ejecucionSQL->bindValue(':edad',$_POST['edad']);
$ejecucionSQL ->execute($params);

header("location: http://localhost/TP4/ej5.php");

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 04:39 PM
 */