<?php

$t1=$_POST['tex1'];
$t2=$_POST['tex2'];
$t3=$_POST['tex3'];
$t4=$_POST['tex4'];
$t5=$_POST['tex5'];
$t6=$_POST['tex6'];
?>
    <html>
    <body>

    <form action="ej9bis2bis.php" method="get">
        <div>
            <label for="t1"> TEXTO 7 </label>
            <input type="text" name="tex7" id="t1"></div>
        <div>
            <label for="t2"> TEXTO 8 </label>
            <input type="text" name="tex8" id="t2" ></div>

        <div>
            <label for="t3"> TEXTO 9 </label>
            <input type="text" name="tex9" id="t3" ></div>

        <?php

        echo "<input type=\"hidden\" name=\"tex1\" value='$t1'>";
        echo "<input type=\"hidden\" name=\"tex2\" value='$t2'>";
        echo "<input type=\"hidden\" name=\"tex3\" value='$t3'>";
        echo "<input type=\"hidden\" name=\"tex4\" value='$t4'>";
        echo "<input type=\"hidden\" name=\"tex5\" value='$t5'>";
        echo "<input type=\"hidden\" name=\"tex6\" value='$t6'>";

        ?>

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
 * Date: 12/09/2018
 * Time: 04:41 PM
 */