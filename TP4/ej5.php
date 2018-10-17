<?php

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');

$sql="select * from persona";
echo "<div>TABLA</div>";
$ejecucionSQLPDO=$conexionPDO->prepare($sql);
$ejecucionSQLPDO->execute();

echo "<table border='1'>";
echo"<tr> <td>ID</td> <td>Nombre</td> <td>Apellido</td> <td>Documento</td> <td>Edad</td> <td>Editar</td> <td>Borrar</td> </tr>";
while($filaPDO=$ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach ($filaPDO as $campoPDO){
        echo "<td>$campoPDO</td>";
    }
    echo "<td align='center'><a href='ej5-2.php?ide={$filaPDO['id']}'>Modificar</a></td>";
    echo " <td align='center'><a href='ej5-3.php?ide={$filaPDO['id']}'>X</a></td>";
    echo "</tr>";
}
echo "</table> ";


/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 04:15 PM
 */