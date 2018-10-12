<?php
session_start();
echo "Sesion iniciada";
?>
<html>
<body>

<form action="ej5-2.php" method="post">
    <div>
        <label for="t1"> TEXTO 1 </label>
        <input type="text" name="tex1" id="t1" ></div>
    <div>
        <label for="t2"> TEXTO 2 </label>
        <input type="text" name="tex2" id="t2" ></div>

    <div>
        <label for="t3"> TEXTO 3 </label>
        <input type="text" name="tex3" id="t3"></div>

    <div>
        <input type="submit" value="Enviar">
    </div>


</form>


</body>

</html>





/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/10/2018
 * Time: 03:25 PM
 */