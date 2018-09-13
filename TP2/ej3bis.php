<?php

echo "Textbox 1 : {$_GET['texto1']} <br>";
echo "Textbox 2 : {$_GET['texto2']} <br>";
echo "Hidden : {$_GET['oculto']} <br>";
echo "Password : {$_GET['clave']} <br>";

echo "------------------------ <br>";
//print_r($_GET);
$on="on";


echo "Checkbox 1:";
if(isset($_GET['check1'])){
    echo "Seleccionado";
}else{
    echo "No seleccionado";
}
echo "<br>";

echo "Checkbox 2:";
if(isset($_GET['check2'])){
    echo "Seleccionado";
}else{
    echo "No seleccionado";
}
echo "<br>";

echo "Checkbox 3:";
if(isset($_GET['check3'])){
    echo "Seleccionado";
}else{
    echo "No seleccionado";
}
echo "<br>";

echo "Radio Grupo 1: {$_GET['grupo1']} <br>";

echo "Radio Grupo 2: {$_GET['grupo2']} <br>";

echo "Lista Desplegable: {$_GET['lista']} <br>";


/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 06/09/2018
 * Time: 12:08 PM
 */