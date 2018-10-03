<html>
<title>Ejercicio 1</title>
<body>
<label>Datos del archivo</label>
<?php print_r($_FILES); ?>
<label>Contenido:</label>
<?php $archivo=fopen($_FILES['archivo']['tmp_name'],"r");
    while($linea=fgets($archivo)){echo $linea;}
?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 03/10/2018
 * Time: 03:42 PM
 */