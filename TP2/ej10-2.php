<html>
<body>
<pre>
    <form action="ej10-3.php" method="post">
<?php
$cant=$_POST['valx'];

for($i=1;$i<($cant+1);$i++){
    echo "
        <hr>
        <div>
        <label for=\"producto$i\"> Producto $i </label>
    </div>";

    echo"
              
        <div>
        <label for=\"tb$i\"> Cantidad </label>
        <input type=\"text\" name=\"texto1\" id=\"tb$i\">
    </div>";

    echo "
        
        <div>
        <label for=\"cb$i\"> Comprar? </label>
        <input type=\"checkbox\" name=\"check$i\">
        </div>
     <hr>";
}

echo "<input type=\"hidden\" name=\"cantidad\" value='$cant'>";

?>
    <input type="submit" value="Comprar">
    </form>
</pre>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 05:24 PM
 */