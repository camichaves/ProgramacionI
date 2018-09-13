<?php
$x=$_POST['valx'];
print_r($_POST);
?>

<html>
<body>

<form action="ej7bis2.php" method="post">
    <?php
    for($i=0;$i<$x;$i++){
        echo "<div>";
        echo "<label for=\"t$i\"> Texto $i </label>
        <input type=\"text\" name=\"val$i\" id=\"t$i\"></div>";
    }
    ?>

</form>


</body>

</html>

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 11/09/2018
 * Time: 12:25 PM
 */