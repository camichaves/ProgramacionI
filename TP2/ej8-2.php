<html>
<body>
<pre>
    <form action="ej8-2.php" method="post">
        <?php
        print_r($_POST);
        for($i=1;$i<3;$i++){
            echo "<label for=\"tb$i\" > Texto $i</label> ";
            $cad="texto$i";
            echo"<input type=\"text\" value='{$_POST[$cad]}' name=\"texto$i\" id=\"tb$i\"> <br>";
        }


        echo "<input type=\"hidden\" name=\"oculto\" value='{$_POST['oculto']}'> <br>";
        echo "<label for=\"pass\"> Clave </label> <br>";
        echo "<input type=\"password\" name=\"clave\" id=\"pass\" value='{$_POST['clave']}'> <br>";
        $chek=" ";


        for($i=1;$i<4;$i++){
            echo"<label for=\"cb$i\"> CheckBox $i</label> ";
            $cad="check$i";
            if(isset($_POST[$cad])){$chek="checked";}else{$chek=" "; }
            echo"<input type=\"checkbox\" name=\"check$i\" {$chek} > <br>";
        }

        for($i=1;$i<3;$i++) {
            echo"<label for=\"grupo$i\"> Radios: Grupo $i </label> <br>";
            $cad2="grupo$i";
            for($g=1;$g<4;$g++){
                $cad="r$g";
                if($_POST[$cad2]==$cad && isset($_POST[$cad2])){$chek="checked";}else{$chek=" ";}
                echo "<input type=\"radio\" name=\"grupo$g\" value=\"r$g\" {$chek} > Radio $g <br>";
            }
        }

        echo"<label for=\"lis\">Lista</label>";
        echo "<select name=\"lista\" id=\"lis\">";
        for($i=1;$i<5;$i++){
            $cad="op$i";
            if($_POST['lista']==$cad && isset($_POST['lista'])){$chek="selected";}else{$chek=" ";}
            echo "<option value=\"op$i\" {$chek} > Opcion $i </option>";
        }

        ?>
    </form>
</pre>
</body>
</html>

<?php


/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/09/2018
 * Time: 08:57 PM
 */