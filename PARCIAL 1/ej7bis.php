<?php
$x=$_POST['valx'];
//print_r($_POST);
?>

<html>
<body>
<pre>
<form action="ej7-3.php" method="post">
    <?php
    $t=$x;
    for($i=1;$i<($x+1);$i++){
        echo "<div>";
        echo "<label for=\"t$i\"> Texto $i </label>
        <input type=\"text\" name=\"val$i\" id=\"t$i\"></div>";
    }
    if($x<5){
        $t=5;
        $n=5-$x;
        for ($i=1;$i<($n+1);$i++){
            $r=$x+$i;
            echo "<div>";
            echo "<label for=\"t$r\"> Texto $r </label>
        <input type=\"text\" name=\"val$r\" id=\"t$r\"></div>";

    }
    }

    echo "<input type='hidden' name='cant' value='$t'>";
    ?>
<input type="submit" value="Enviar">
</form>

</pre>
</body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 11/09/2018
 * Time: 12:25 PM
 */