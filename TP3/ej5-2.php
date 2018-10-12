<?php
session_start();

$_SESSION['dat1'] =$_POST['tex1'];
$_SESSION['dat2'] =$_POST['tex2'];
$_SESSION['dat3'] =$_POST['tex3'];

?>
    <html>
<body>

<form action="ej5-3.php" method="post">
    <div>
        <label for="t1"> TEXTO 4 </label>
        <input type="text" name="tex4" id="t1" ></div>
    <div>
        <label for="t2"> TEXTO 5 </label>
        <input type="text" name="tex5" id="t2" ></div>

    <div>
        <label for="t3"> TEXTO 6 </label>
        <input type="text" name="tex6" id="t3" ></div>



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
 * Time: 03:37 PM
 */