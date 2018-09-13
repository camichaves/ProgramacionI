<?php

$usudet="usuarion1";
$clavedet=12345;
$maildet="@gmail.com";

for($i=0;$i<8;$i++){

        $usudet++;
        $usudet++;
        $clavedet++;
        $clavedet++;
        for ($g=1;$g<4;$g++) {

            switch ($g) {
                case 1:
                    $arr['usuario'] = $usudet;
                    break;

                case 2:
                    $arr['clave'] = $clavedet;
                    break;
                case 3:
                    $arr['mail'] = ($usudet . $maildet);
                    break;

            }
        }

    $list[$i]=$arr;
}
//print_r($list);
$usuario=$_POST['us'];
$clave=$_POST['clave'];
$d=0;
$n=0;
while($d==0 && $n<8){
    if ($usuario == $list[$n]['usuario']){

        if($clave== $list[$n]['clave'] ){
            $d=1;
            echo "El usuario ha sido validado <br>";
            echo "Nombre de usuario {$list[$n]['usuario']} <br>";
            echo "Clave {$list[$n]['clave']} <br>"; //esto no se deberia hacer claramente
            echo  "Email {$list[$n]['mail']} <br>";
        }
    }
    $n++;
}

if($d==0){echo "El usuario no ha sido validado";}

//print_r($list);

/**
 * Created by PhpStorm.
 * User: CAMILA
 * Date: 13/09/2018
 * Time: 09:46 AM
 */