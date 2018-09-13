<?php

$t1=$_POST['tex1'];
$t2=$_POST['tex2'];
$t3=$_POST['tex3'];

?>
<html>
<body>

<form action="ej9bis2.php" method="post">
    <div>
        <label for="t1"> TEXTO 4 </label>
        <input type="text" name="tex4" id="t1" ></div>
    <div>
        <label for="t2"> TEXTO 5 </label>
        <input type="text" name="tex5" id="t2" ></div>

    <div>
        <label for="t3"> TEXTO 6 </label>
        <input type="text" name="tex6" id="t3" ></div>

    <?php

    echo "<input type=\"hidden\" name=\"tex1\" value='$t1'>";
    echo "<input type=\"hidden\" name=\"tex2\" value='$t2'>";
    echo "<input type=\"hidden\" name=\"tex3\" value='$t3'>";

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
 * Time: 04:34 PM
 */