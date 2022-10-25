<?php

//Request recupera los datos enviados de cualquier forma
$_REQUEST["name"];
$_REQUEST["gender"];

$_REQUEST["edad"];
$_REQUEST["salario"];


print "<style>

    table{border:solid 1px black;background-color:white;}
    td{border:solid 1px black;}
    </style>";


function seleccion(){

        $background1 =  ($_POST["gender"] == "Male") ? 'yellow' : 'none';
        $background2 =  ($_POST["gender"] == "Female") ? 'yellow' : 'none';
        $background3 =  ($_POST["salario"] == "0-12000") ? 'yellow' : 'none';
        $background4 =  ($_POST["salario"] == "12000-20000") ? 'yellow' : 'none';
        $background5 =  ($_POST["salario"] == "21000-35000") ? 'yellow' : 'none';
        $background6 =  ($_POST["salario"] == "+35000") ? 'yellow' : 'none';
        $background7 =  ($_POST["edad"] == "0-25") ? 'yellow' : 'none';
        $background8 =  ($_POST["edad"] == "25-45") ? 'yellow' : 'none';
        $background9 =  ($_POST["edad"] == "45-65") ? 'yellow' : 'none';
        $background10 =  ($_POST["edad"] == "JUBILADO") ? 'yellow' : 'none';

        echo '<table border="0" cellspacing="2" cellpadding="2">  
                <tr> 
                    <td colspan="2"> <font face="Arial" >NOMBRE</font> </td> 
                    <td colspan="2"> <font face="Arial"colspan="2" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

                </tr>
                <tr> 
                    <td colspan="2"> <font face="Arial" style="background-color:'.$background1.';">HOMBRE</font> </td>
                    <td colspan="2"> <font face="Arial" style="background-color:'.$background2.';">MUJER</font> </td> 

                </tr>
                <tr> 
                    <td> <font face="Arial" style="background-color:'.$background3.';">0-12000</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background4.';">12000-20000</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background5.';">21000-35000</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background6.';">+35000</font> </td> 

                </tr>
                <tr> 
                    <td> <font face="Arial" style="background-color:'.$background7.';">0-25</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background8.';">25-45</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background9.';">45-65</font> </td> 
                    <td> <font face="Arial" style="background-color:'.$background10.';">JUBILADO</font> </td> 

                </tr>

             </table>';



}

seleccion();



?>