<html>
<body>
<form action="ej3bis.php" method="get">
    <div>
        <label for="tb1"> Texto 1</label>
        <input type="text" name="texto1" id="tb1">
    </div>
    <div>
        <label for="tb2"> Texto 2</label>
        <input type="text" name="texto2" id="tb2">
    </div>
    <div>

        <input type="hidden" name="oculto" value="3">
    </div>
    <div>
        <label for="pass"> Clave </label>
        <input type="password" name="clave" id="pass">
    </div>

    <div>
        <label for="cb1"> CheckBox 1</label>
        <input type="checkbox" name="check1">
    </div>

    <div>
        <label for="cb2"> CheckBox 2</label>
        <input type="checkbox" name="check2">
    </div>

    <div>
        <label for="cb3"> CheckBox 3</label>
        <input type="checkbox" name="check3">
    </div>

    <div>
        <label for="grupo1"> Radios: Grupo 1 </label>
        <input type="radio" name="grupo1" value="r1"> Radio 1
        <input type="radio" name="grupo1" value="r2"> Radio 2
        <input type="radio" name="grupo1" value="r3"> Radio 3
    </div>
    <div>
        <label for="grupo2">Radios: Grupo 2</label>
        <input type="radio" name="grupo2" value="r1"> Radio 1
        <input type="radio" name="grupo2" value="r2"> Radio 2
        <input type="radio" name="grupo2" value="r3"> Radio 3
    </div>

    <div>
        <label for="lis">Lista</label>
        <select name="lista" id="lis">
            <option value="op1"> Opcion 1 </option>
            <option value="op2"> Opcion 2 </option>
            <option value="op3"> Opcion 3 </option>
            <option value="op4"> Opcion 4 </option>
        </select>
    </div>

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
 * Date: 06/09/2018
 * Time: 11:44 AM
 */