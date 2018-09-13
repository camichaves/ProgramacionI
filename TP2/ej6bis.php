
<?php
$filas=$_POST['filas'];
$columnas=$_POST['columnas'];
print_r($_POST);
?>

<html>
<pre>
<title> Programa 6 </title>
<body>
<table border="1px">
    <?php

    $contador=0;
    for ($i=0;$i<$filas;$i++){
        echo "<tr>";
        for($g=0;$g<$columnas;$g++){
             echo "<td>$contador</td>";
             $contador++;
        }
        echo "</tr>";
    }
    ?>

</table>
</body>
</pre>
</html>

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 11/09/2018
 * Time: 11:38 AM
 */