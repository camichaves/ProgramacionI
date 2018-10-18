<?php
session_start();
//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="select * from usuario where usuario = :nom and clave=:clav";
$ejecucionSQL=$conexionPDO->prepare($sql);
$ejecucionSQL->bindValue(':nom',$_POST['usu']);
$ejecucionSQL->bindValue(':clav',$_POST['pas']);
$ejecucionSQL->execute();

if ((empty($filaPDO=$ejecucionSQL->fetch(PDO::FETCH_ASSOC))) || ($filaPDO['habilitado']!=1)) {
    echo "<h3>Acceso denegado</h3>";
    echo "<br><h4><a href='ej7.php'>VOLVER</a> </h4>";
    die();
}


if (session_start()){
    $_SESSION['usuario']=$filaPDO['usuario'];
    $_SESSION['habilitado']=1;
    if($filaPDO['rol']=="admin"){ header("location: http://localhost/TP4/ej7-adm.php"); $_SESSION['rol']="ad"; }
    else{header("location: http://localhost/TP4/ej7-usu.php"); $_SESSION['rol']="us"; }

}else{ echo "Error al iniciar sesion";}
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 05:36 PM
 */