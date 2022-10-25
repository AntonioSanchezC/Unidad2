<?php

//Request recupera los datos enviados de cualquier forma
$_REQUEST["name"];
$_REQUEST["gender"];

$_REQUEST["edad"];
$_REQUEST["salario"];

/*
echo $_POST["name"];
echo $_POST["gender"];
echo $_POST["edad"];
echo $_POST["salario"];
*/

print "       <style>

    table{border:solid 1px black;background-color:white;}
    td{border:solid 1px black;}
    </style>";



    if($_POST["gender"] === "Male" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "0-25"){
        echo '<table border="0" cellspacing="2" cellpadding="2">  
        <tr> 
            <td> <font face="Arial" >NOMBRE</font> </td> 
            <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
      
        </tr>
        <tr> 
        <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
        <td> <font face="Arial">MUJER</font> </td> 
  
       </tr>
       <tr> 
       <td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
       <td> <font face="Arial">12000-20000</font> </td> 
       <td> <font face="Arial">21000-35000</font> </td> 
       <td> <font face="Arial">+35000</font> </td> 
  
      </tr>
      <tr> 
      <td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
      <td> <font face="Arial">25-45</font> </td> 
      <td> <font face="Arial">45-65</font> </td> 
      <td> <font face="Arial">JUBILADO</font> </td> 
  
     </tr>
       
       </table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "0-25"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial">NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial">0-12000</font> </td> 
   <td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "0-25"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "+35000" && $_POST["edad"] === "0-25"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';

}

elseif($_POST["gender"] === "Male" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "25-45"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial">0-25</font> </td> 
  <td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "+35000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "45-65"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "+35000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "JUBILADO"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
    <td> <font face="Arial">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

 </tr>
   
   </table>';
}
elseif($_POST["gender"] === "Male" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;"">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Male" && $_POST["salario"] === "+35000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" style="background-color:yellow;">HOMBRE</font> </td> 
<td> <font face="Arial">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';
}




if($_POST["gender"] === "Female" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "0-25"){
    echo '<table border="0" cellspacing="2" cellpadding="2">  
    <tr> 
        <td> <font face="Arial" >NOMBRE</font> </td> 
        <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 
  
    </tr>
    <tr> 
    <td> <font face="Arial" >HOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

   </tr>
   <tr> 
   <td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
   <td> <font face="Arial">12000-20000</font> </td> 
   <td> <font face="Arial">21000-35000</font> </td> 
   <td> <font face="Arial">+35000</font> </td> 

  </tr>
  <tr> 
  <td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
  <td> <font face="Arial">25-45</font> </td> 
  <td> <font face="Arial">45-65</font> </td> 
  <td> <font face="Arial">JUBILADO</font> </td> 

 </tr>
   
   </table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "0-25"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "0-25"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "+35000" && $_POST["edad"] === "0-25"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}

elseif($_POST["gender"] === "Female" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "+35000" && $_POST["edad"] === "25-45"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial" >NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "+35000" && $_POST["edad"] === "45-65"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">45-65</font> </td> 
<td> <font face="Arial">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "0-12000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
    <td> <font face="Arial">NOMBRE</font> </td> 
    <td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">HOMBRE</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial"style="background-color:yellow;">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';
}
elseif($_POST["gender"] === "Female" && $_POST["salario"] === "12000-20000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "21000-35000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;"">21000-35000</font> </td> 
<td> <font face="Arial">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';

}elseif($_POST["gender"] === "Female" && $_POST["salario"] === "+35000" && $_POST["edad"] === "JUBILADO"){
echo '<table border="0" cellspacing="2" cellpadding="2">  
<tr> 
<td> <font face="Arial" >NOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">'.$_POST["name"].'</font> </td> 

</tr>
<tr> 
<td> <font face="Arial" >HOMBRE</font> </td> 
<td> <font face="Arial" style="background-color:yellow;">MUJER</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-12000</font> </td> 
<td> <font face="Arial">12000-20000</font> </td> 
<td> <font face="Arial">21000-35000</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">+35000</font> </td> 

</tr>
<tr> 
<td> <font face="Arial">0-25</font> </td> 
<td> <font face="Arial">25-45</font> </td> 
<td> <font face="Arial">45-65</font> </td> 
<td> <font face="Arial"style="background-color:yellow;">JUBILADO</font> </td> 

</tr>

</table>';
}



?>