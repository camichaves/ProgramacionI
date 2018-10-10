
<html>
<head> <title>Programa 3</title></head>
<body>
<form onsubmit="return validate()" action="ej3-3.php" method="post">
    <div>Nombre</div>
    <div> <input type="text" name="nom" id="nomb"></div>
    <div>Apellido</div>
    <div> <input type="text" name="ape" id="apell"></div>
    <div>Documento</div>
    <div> <input type="text" name="doc" id="docu"></div>
    <div>Edad</div>
    <div> <input type="text" name="edad" id="ed"></div>
    <input type="submit" value="Agregar" >
</form>
<script>
    function validate() {
        var n1=document.getElementById('nomb');
        var n2=document.getElementById('apell');
        var n3=document.getElementById('docu');
        var n4=document.getElementById('ed');

        if(n1.value !='' && n2.value !='' && n3.value !='' && n4.value !=''){ return true;}

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
 * Date: 10/10/2018
 * Time: 06:33 PM
 */