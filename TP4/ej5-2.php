<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="select * from persona WHERE id = :id";

$ejecucionSQL=$conexionPDO->prepare($sql);
$ejecucionSQL->bindValue(':id',$_GET['ide']);
$ejecucionSQL ->execute();





$filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC);

echo "<form action='ej5-4.php' method='post' >";
echo "Nombre";
echo "<div> <input type=\"text\" name=\"nom\" id=\"nomb\" value={$filaPDO['nombre']}></div>";
echo "Apellido";
echo "<div> <input type=\"text\" name=\"ape\" id=\"apell\" value={$filaPDO['apellido']}></div>";
echo "Edad";
echo "<div> <input type=\"text\" name=\"edad\" id=\"ed\" value={$filaPDO['edad']}></div>";
echo "Documento";
echo "<div> <input type=\"text\" name=\"doc\" id=\"docu\" value={$filaPDO['documento']}></div>";
echo "<input type=\"hidden\" name=\"id\" value='{$filaPDO['id']}'>";

echo " <input type='submit' value='Modificar'> ";
echo " </form> ";
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 04:19 PM
 */