<html>
<head> <title>REGISTRO</title></head>
<body>
<form onsubmit="return validate()" action="ej7-registro2.php" method="post">
    <div>Usuario</div>
    <div> <input type="text" name="usu" id="us"></div>
    <div>Clave</div>
    <div> <input type="password" name="cla" id="cl"></div>


    <input type="submit" value="Agregar" >
</form>
<script>
    function validate() {
        var n1=document.getElementById('us');
        var n2=document.getElementById('cl');


        if(n1.value !='' && n2.value !=''){ return true;}

        alert("No puedes dejar cuadros vacios");
        return false;
    }
</script>
</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 18/10/2018
 * Time: 09:11 AM
 */