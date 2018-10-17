<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="select * from persona";
echo "<div> Datos </div>";
$ejecucionSQLPDO=$conexionPDO->prepare($sql);
$ejecucionSQLPDO->execute();

echo "<table border='1'>";
echo"<tr> <td>Nombre</td> <td>Apellido</td> <td>Documento</td> <td>Edad</td> <td>Borrar</td> </tr>";
while($filaPDO=$ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach ($filaPDO as $campoPDO){
        echo "<td>$campoPDO</td>";
    }
    echo " <td align='center'><a href='ej4-2.php?ide={$filaPDO['id']}'>X</a></td>";
    echo "</tr>";
}
echo "</table> ";



/**
 *
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 10/10/2018
 * Time: 11:36 PM
 */