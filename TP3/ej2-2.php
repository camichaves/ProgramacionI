<html>
<title>Ejercicio 2</title>
<body>

<?php // print_r($_FILES); ?>
<label>Tabla</label>
<?php $archivo=fopen($_FILES['archivo']['tmp_name'],"r");
$i=0;

if($archivo){
        ?> <table border="2px"> <?php
        while (($linea = fgets($archivo)) && ($i<100)) {

            $subcad=explode( ';', $linea);
            ?><tr><?php
            for($j=0;$j<5;$j++){ echo "<td> {$subcad[$j]} </td>"; }
            $i++;
            ?><tr><?php
            }

    ?> </table> <?php
}else{ echo "No hay datos en el documento";}



        ?>
        <?php

    ?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 03/10/2018
 * Time: 04:02 PM
 */