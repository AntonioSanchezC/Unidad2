<?php


//Request recupera los datos enviados de cualquier forma
 $_REQUEST["name1"];
 $_REQUEST["name2"];

 //Variable(tipo array) para las imagenes
$imagenes = array("imagenesDado/1.PNG",
"imagenesDado/1.PNG", 
"imagenesDado/2.PNG", 
"imagenesDado/3.PNG", 
"imagenesDado/4.PNG", 
"imagenesDado/5.PNG", 
"imagenesDado/6.PNG");

$jugador1_1 = random_int(1,6);
$jugador1_2 = random_int(1,6);
$jugador1 = ($jugador1_1 + $jugador1_2);

$jugador2_1 = random_int(1,6);
$jugador2_2 = random_int(1,6);
$jugador2 = ($jugador2_1 + $jugador2_2);


if($jugador1>$jugador2){
    /**primer table */

    
echo '<table border="0" cellspacing="2" cellpadding="2"> 
<tr> 
    <td> <font face="Arial">'.$_POST["name1"].'</font> </td> 

</tr>
<tr> 
    <td> <img src='.$imagenes[$jugador1_1].'> </td> 
    <td> <img src='.$imagenes[$jugador1_2].'> </td> 

</tr>
</table>';

        /**segundo  table */

echo '<table border="0" cellspacing="2" cellpadding="2"> 
<tr> 
    <td> <font face="Arial">'.$_POST["name2"].'</font> </td> 

</tr>
<tr> 
    <td> <img src='.$imagenes[$jugador2_1].'> </td> 
    <td> <img src='.$imagenes[$jugador2_2].'> </td> 

</tr>
</table>';



        /**frase */


echo  "</br>";

   

    echo  "El dado de ". $_POST["name1"]." dado es mayor al de ".$_POST["name2"].", con $jugador1 </br>";


    }elseif($jugador1<$jugador2){
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
<tr> 
    <td> <font face="Arial">'.$_POST["name1"].'</font> </td> 

</tr>
<tr> 
    <td> <img src='.$imagenes[$jugador1_1].'> </td> 
    <td> <img src='.$imagenes[$jugador1_2].'> </td> 

</tr>
</table>';

    
echo '<table border="0" cellspacing="2" cellpadding="2"> 
<tr> 
    <td> <font face="Arial">'.$_POST["name2"].'</font> </td> 

</tr>
<tr> 
    <td> <img src='.$imagenes[$jugador2_1].'> </td> 
    <td> <img src='.$imagenes[$jugador2_1].'> </td> 

</tr>
</table>';

            echo  "</br>";

        echo "El dado de ". $_POST["name2"]." es mayor al de ". $_POST["name1"].", con  $jugador2 </br>";
        }elseif($jugador1 === $jugador2){
            
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
        <tr> 
            <td> <font face="Arial">'.$_POST["name1"].'</font> </td> 
        
        </tr>
        <tr> 
            <td> <img src='.$imagenes[$jugador1_1].'> </td> 
            <td> <img src='.$imagenes[$jugador1_2].'> </td> 
        
        </tr>
        </table>';
        
            
        echo '<table border="0" cellspacing="2" cellpadding="2"> 
        <tr> 
    <td> <font face="Arial">'.$_POST["name2"].'</font> </td> 

    </tr>
    <tr> 
        <td> <img src='.$imagenes[$jugador2_1].'> </td> 
        <td> <img src='.$imagenes[$jugador2_1].'> </td> 

    </tr>
  
        </table>';
        
                    echo  "</br>";
            echo "Los dados son iguales, ".$_POST["name1"]." y ".$_POST["name2"]." tienen la misma puntuacion, $jugador2</br>";
        }


    

 ?>