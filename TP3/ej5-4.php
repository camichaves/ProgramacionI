<?php
session_start();
$_SESSION['dat7']=$_GET['tex7'];
$_SESSION['dat8']=$_GET['tex8'];
$_SESSION['dat9']=$_GET['tex9'];



echo "Dato 1: {$_SESSION['dat1']} <br> ";
echo "Dato 2: {$_SESSION['dat2']} <br>";
echo "Dato 3: {$_SESSION['dat3']} <br>";
echo "Dato 4: {$_SESSION['dat4']} <br>";
echo "Dato 5: {$_SESSION['dat5']} <br>";
echo "Dato 6: {$_SESSION['dat6']} <br>";
echo "Dato 7: {$_SESSION['dat7']} <br>";
echo "Dato 8: {$_SESSION['dat8']} <br>";
echo "Dato 9: {$_SESSION['dat9']} <br>";
echo "
<html><body><a href=\"ej5-5.php?tex7={$_SESSION['dat7']}&tex8={$_SESSION['dat8']}&tex9={$_SESSION['dat9']}&tex1={$_SESSION['dat1']}&tex2={$_SESSION['dat2']}&tex3={$_SESSION['dat3']}&tex4={$_SESSION['dat4']}&tex5={$_SESSION['dat5']}&tex6={$_SESSION['dat6']}\">link</a> </body></html>";

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 12/10/2018
 * Time: 03:44 PM
 */