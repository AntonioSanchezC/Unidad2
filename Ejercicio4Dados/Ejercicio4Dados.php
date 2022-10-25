<!DOCTYPE html>
<html lamp="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-Copmatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

<?php

//Varaibales para la tirada
$dado1;
$dado1_1;
$dado1_2;
$dado2;
$dado2_1;
$dado2_2;
//Varaible(tipo array) para las imagenes

$imagenes = array("imagenesDado/1.PNG",
                  "imagenesDado/1.PNG", 
                  "imagenesDado/2.PNG", 
                  "imagenesDado/3.PNG", 
                  "imagenesDado/4.PNG", 
                  "imagenesDado/5.PNG", 
                  "imagenesDado/6.PNG",);

echo "Primer dado de 10 caras (1-10) </br>";
//mt_rand es lo mismo pero mas rapido es el que hay que ointentar usar
$dado1_1 = (rand(1,6));
$dado1_2 = (rand(1,6));
$dado1 = $dado1_1 + $dado1_2;
echo $dado1;
echo "</br>";
echo "Primer dado de 10 caras (1-20) </br>";
$dado2_1 = (rand(1,6));
$dado2_2 = (rand(1,6));
$dado2 = $dado2_1 + $dado2_2;
echo $dado2;
echo "</br>";


if($dado1>$dado2){
    echo  "<img src='$imagenes[$dado1_1]'>";
    echo  "<img src='$imagenes[$dado1_2]'>";
    echo  "</br>";
    echo "Primer jugador tiene mayor resultado al segundo, con  $dado1 </br>";
    echo  "</br>";
    echo  "</br>";
    echo  "</br>";
    echo "Segundo jugador tiene menor al segundo, con $dado2 </br>";
    echo  "</br>";   
    echo  "<img src='$imagenes[$dado2_1]'>";
    echo  "<img src='$imagenes[$dado2_1]'>";
}elseif($dado2>$dado1){
    echo  "<img src='$imagenes[$dado2_1]'>";
    echo  "<img src='$imagenes[$dado2_1]'>";
    echo  "</br>";
    echo "Segundo jugador tiene mayor resultado al primero, con  $dado2 </br>";
    echo  "</br>";
    echo  "</br>";
    echo  "</br>";
    echo "Primer jugador tiene menor al segundo, con $dado1 </br>";
    echo  "</br>";
    echo  "<img src='$imagenes[$dado1_1]'>";
    echo  "<img src='$imagenes[$dado1_1]'>";
    }else{
        echo  "<img src='$imagenes[$dado1_1]'>";
        echo  "<img src='$imagenes[$dado1_2]'>";
        echo  "</br>";
        echo "Los dados son iguales </br>";
    }


?>


</body>
</html>