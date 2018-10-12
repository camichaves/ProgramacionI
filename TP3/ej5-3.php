<?php
session_start();

$_SESSION['dat4']=$_POST['tex4'];
$_SESSION['dat5']=$_POST['tex5'];
$_SESSION['dat6']=$_POST['tex6'];
?>
    <html>
    <body>

    <form action="ej5-4.php" method="get">
        <div>
            <label for="t1"> TEXTO 7 </label>
            <input type="text" name="tex7" id="t1"></div>
        <div>
            <label for="t2"> TEXTO 8 </label>
            <input type="text" name="tex8" id="t2" ></div>

        <div>
            <label for="t3"> TEXTO 9 </label>
            <input type="text" name="tex9" id="t3" ></div>


        <div>
            <input type="submit" value="Enviar">
        </div>


    </form>


    </body>

    </html>
<?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/10/2018
 * Time: 03:41 PM
 */