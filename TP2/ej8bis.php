<?php
print_r($_POST);
$t1=$_POST['texto1'];
$t2=$_POST['texto2'];
$h1=$_POST['oculto'];
$pass1=$_POST['clave'];
$t1=$_POST['texto1'];
$cb=" cheked ";
$on="on";
$s=" selected ";


if(isset($_POST['check1'])){$cb1=$cb;}else{$cb1=" ";}
if(isset($_POST['check2'])){$cb2=$cb;}else{$cb2=" ";}
if(isset($_POST['check3'])){$cb3=$cb;} else{$cb2=" ";}

if(isset($_POST['grupo1'])== "r1"){$ra1=$cb;}else{$ra1=" ";}
if(isset($_POST['grupo1'])== "r2"){$ra2=$cb;}else{$ra2=" ";}
if(isset($_POST['grupo1'])== "r3"){$ra3=$cb;}else{$ra3=" ";}

if(isset($_POST['grupo2'])== "r1"){$rad1=$cb;}else{$rad1=" ";}
if(isset($_POST['grupo2'])== "r2"){$rad2=$cb;}else{$rad2=" ";}
if(isset($_POST['grupo2'])== "r3"){$rad3=$cb;}else{$rad3=" ";}

if(isset($_POST['lista'])== "op1"){$op1=$s;}else{$op1=" ";}
if(isset($_POST['lista'])== "op2"){$op2=$s;}else{$op2=" ";}
if(isset($_POST['lista'])== "op3"){$op3=$s;}else{$op3=" ";}
if(isset($_POST['lista'])== "op4"){$op4=$s;}else{$op4=" ";}


echo "
<html>
<body>
<form action=\"ej8bis2.php\" method=\"post\">
    <div>
        <label for=\"tb1\"> Texto 1</label>
      <input type=\"text\" name=\"texto1\" value='$t1' id=\"tb1\">;
    </div>
    <div>
        <label for=\"tb2\"> Texto 2</label>
       <input type=\"text\" value='$t2' name=\"texto2\" id=\"tb2\"> 
    </div>
    <div>

       <input type=\"hidden\" name=\"oculto\" value=$h1>
    </div>
    <div>
        <label for=\"pass\"> Clave </label>
        <input type=\"password\" name=\"clave\" value='$pass1' id=\"pass\">
    </div>

    <div>
        <label for=\"cb1\"> CheckBox 1</label>
        <input type=\"checkbox\"  value=\"cb1\" {$cb1}  name=\"check1\">
    </div>

    <div>
        <label for=\"cb2\"> CheckBox 2</label>
        <input type=\"checkbox\"  value=\"cb2\" {$cb2}  name=\"check2\">
    </div>

    <div>
        <label for=\"cb3\"> CheckBox 3</label>
        <input type=\"checkbox\" value='$cb3'   {$cb3} name=\"check3\">
    </div>

    <div>
        <label for=\"grupo1\"> Radios: Grupo 1 </label>
        <input type=\"radio\" name=\"grupo1\" $ra1  value=\"r1\" {$ra1}> Radio 1 
        <input type=\"radio\" name=\"grupo1\" $ra2  value=\"r2\" {$ra2}> Radio 2 
        <input type=\"radio\" name=\"grupo1\" $ra3  value=\"r3\" {$ra3}> Radio 3
    </div>
    <div>
        <label for=\"grupo2\">Radios: Grupo 2</label>
        <input type=\"radio\" name=\"grupo2\" $rad1  value=\"r1\" {$rad1}> Radio 1
        <input type=\"radio\" name=\"grupo2\" $rad2  value=\"r1\" {$rad2}> Radio 2
        <input type=\"radio\" name=\"grupo2\" $rad3  value=\"r1\" {$rad3}> Radio 3
    </div>

    <div>


        <label for=\"lis\">Lista</label>
        <select name=\"lista\" id=\"lis\">
            <option  $op1  value=\"op1\" {$op1} > Opcion 1 </option>
            <option  $op2  value=\"op2\" {$op2}> Opcion 2 </option>
            <option  $op3  value=\"op3\" {$op3}> Opcion 3 </option>
            <option  $op4  value=\"op4\" {$op4}> Opcion 1 </option>
        </select>

    </div>

    <div>
        <input type=\"submit\" value=\"Enviar\">
    </div>



</form>
</body>
</html>";

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 11/09/2018
 * Time: 12:50 PM
 */