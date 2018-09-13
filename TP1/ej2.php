<?php

$arr[0]=1;
$arr[1]=2;
$arr[2]=3;
$arr[3]=4;
echo " <br> Arreglo 1 ";
print_r($arr);

$param['usuario']="camichaves";
$param['constraseña']="123456";
$param['mail']="camichaves@um";
echo " <br> Arreglo 2 ";
print_r($param);

//////
for($i=0;$i<2;$i++) {
    $arr2[$i]=$arr;
    $arr3[$i] = $arr2;
}
echo " <br>Arreglo 3 : ";
print_r($arr3);

//

$param2['usuario']=$param;
$param2['constraseña']=$param;
$param2['mail']=$param;
echo " <br> Arreglo 4 ";
print_r($param2);
/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 05/09/2018
 * Time: 08:59 PM
 */