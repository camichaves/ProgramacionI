<?php
$consulta=$_POST['cons'];

//Conecto la base de datos
$usuario="root";
$clave="";
$bd="programacioni";
$servidor="localhost";

$conexionPDO= new PDO('mysql:host=localhost;dbname=programacioni;charset=UTF8','root','');
$sql=$consulta;
$ejecucionSQLPDO=$conexionPDO->prepare($sql);
$ejecucionSQLPDO->execute();

$result = $conexionPDO->query($consulta);
$fields = array_keys($result->fetch(PDO::FETCH_ASSOC));

echo "<table border='1'>";
echo "<tr>";
for($i=0;$i<count($fields);$i++){
    echo "<td>$fields[$i]</td>";
}
echo "</tr>";
while($filaPDO=$ejecucionSQLPDO->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>";
    foreach ($filaPDO as $campoPDO){
        echo "<td>$campoPDO</td>";
    }
    echo "</tr>";
}
echo "</table> ";


/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 17/10/2018
 * Time: 05:03 PM
 */