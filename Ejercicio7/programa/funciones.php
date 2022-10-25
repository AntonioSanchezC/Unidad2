<?php 

include "informacion.php";

//Request recupera los datos enviados de cualquier forma
$_REQUEST[$conteo];


//Funciones del programa

//funcion para buscar y mostrar las imagenes de cartas 
//la llamare dentro de las otras funciones cuando quiera mostrar las cartas
function imagenes(){
    include "informacion.php";

    //Desiganmos cual es la carta por lugar en el array

    
    $carta1 = array_search($_POST['select0'],$cartas);
    $carta2 = array_search($_POST['select1'],$cartas);
    $carta3 = array_search($_POST['select2'],$cartas);
    $carta4 = array_search($_POST['select3'],$cartas);
    $carta5 = array_search($_POST['select4'],$cartas);

     echo '<table border="0" cellspacing="2" cellpadding="2"> 

    <tr> 
        <td> <img src="../Imagenes/'.$carta1.'.png"> </td> 
        <td> <img src="../Imagenes/'.$carta2.'.png"> </td> 
        <td> <img src="../Imagenes/'.$carta3.'.png"> </td> 
        <td> <img src="../Imagenes/'.$carta4.'.png"> </td> 
        <td> <img src="../Imagenes/'.$carta5.'.png"> </td> 
    
    </tr>
    </table>';

}
//funcion para comprobar si es color
function color(){

    include "informacion.php";

        //Con estas variables comprobamos que sean del mismo palo, puesto que optenemos la ultima palabra del string
    
        $TCPrimera = substr(strrchr($_POST['select0'], " "), 1);
        $TCSegunda = substr(strrchr($_POST['select1'], " "), 1);
        $TCTercera = substr(strrchr($_POST['select2'], " "), 1);
        $TCCuarta = substr(strrchr($_POST['select3'], " "), 1);
        $TCQuinta = substr(strrchr($_POST['select4'], " "), 1);
    


        //Con estas variables comprobamos la posicion del array, el cual esta en orden de valor
        //$TPPrimera = array_search($_POST['select0'],array_keys($cartas));

        $TPPrimera = array_search($_POST['select0'],$cartas);
        $TPSegunda = array_search($_POST['select1'],$cartas);
        $TPTercera = array_search($_POST['select2'],$cartas);
        $TPCuarta = array_search($_POST['select3'],$cartas);
        $TPQuinta = array_search($_POST['select4'],$cartas);

        //Tras comprobar que sean del mismo palo o color, tenemos que asegurar que los valores cartas estan en orden(en este caso de izquiera a derecha)
        if($TPSegunda === (++$TPPrimera) && $TPTercera === (++$TPSegunda) &&  $TPCuarta === (++$TPTercera) && $TPQuinta === (++$TPCuarta)){
            }
        //echo  $TCartas;

        elseif($TCPrimera === $TCSegunda && $TCPrimera === $TCTercera && $TCPrimera === $TCCuarta && $TCPrimera === $TCQuinta ){
            echo '<h1>Ha salido color</h1>';    
            imagenes();
    }


}


//funcion para comprobar si es poker

function poker(){
    include "informacion.php";
    //Con estas variables comprobamos que sean del mismo valor, puesto que vemos la primera palabra de cada string

    $TCPrimera = strtok($_POST['select0'], " ");
    $TCSegunda = strtok($_POST['select1'], " ");
    $TCTercera = strtok($_POST['select2'], " ");
    $TCCuarta = strtok($_POST['select3'], " ");
    $TCQuinta = strtok($_POST['select4'], " ");
    echo "</br>";
    
    

    if($TCPrimera === $TCSegunda && $TCPrimera === $TCTercera && $TCPrimera === $TCCuarta && $TCPrimera === $TCQuinta ){
        echo '<h1>Ha salido poker</h1>';    
        imagenes();
        }elseif($TCPrimera === $TCSegunda && $TCPrimera === $TCTercera && $TCPrimera === $TCCuarta && $TCPrimera !== $TCQuinta ){
            echo '<h1>Ha salido poker</h1>';    

            imagenes();
        }
        elseif($TCPrimera === $TCSegunda && $TCPrimera === $TCTercera && $TCPrimera !== $TCCuarta && $TCPrimera === $TCQuinta ){
            echo '<h1>Ha salido poker</h1>';    

            imagenes();

        }elseif($TCPrimera === $TCSegunda && $TCPrimera !== $TCTercera && $TCPrimera === $TCCuarta && $TCPrimera === $TCQuinta ){
            echo '<h1>Ha salido poker</h1>';    

            imagenes();

        }elseif($TCPrimera !== $TCSegunda && ($TCPrimera === $TCTercera || $TCSegunda === $TCTercera)&& $TCTercera === $TCCuarta && $TCCuarta === $TCQuinta ){
            echo '<h1>Ha salido poker</h1>';    


            imagenes();

            }
}


//funcion para comprobar si es escalera de color

function escalera(){

    include "informacion.php";
        //Con estas variables comprobamos que sean del mismo palo, puesto que optenemos la ultima palabra del string
    
        $TCPrimera = substr(strrchr($_POST['select0'], " "), 1);
        $TCSegunda = substr(strrchr($_POST['select1'], " "), 1);
        $TCTercera = substr(strrchr($_POST['select2'], " "), 1);
        $TCCuarta = substr(strrchr($_POST['select3'], " "), 1);
        $TCQuinta = substr(strrchr($_POST['select4'], " "), 1);
    

    //Comprobamos que sean del mismo palo o color

    if($TCPrimera === $TCSegunda && $TCPrimera  === $TCTercera && $TCPrimera === $TCCuarta && $TCPrimera === $TCQuinta ){
        

        //Con estas variables comprobamos la posicion del array, el cual esta en orden de valor
        //$TPPrimera = array_search($_POST['select0'],array_keys($cartas));

        $TPPrimera = array_search($_POST['select0'],$cartas);
        $TPSegunda = array_search($_POST['select1'],$cartas);
        $TPTercera = array_search($_POST['select2'],$cartas);
        $TPCuarta = array_search($_POST['select3'],$cartas);
        $TPQuinta = array_search($_POST['select4'],$cartas);

        //Tras comprobar que sean del mismo palo o color, tenemos que asegurar que los valores cartas estan en orden(en este caso de izquiera a derecha)
        if($TPSegunda === (++$TPPrimera) && $TPTercera === (++$TPSegunda) &&  $TPCuarta === (++$TPTercera) && $TPQuinta === (++$TPCuarta)){
            echo '<h1>Ha salido escalera de color</h1>';    
             imagenes();
            }



        }


}




//Llamamos las funciones para que actuen


color();
poker();
escalera();

?>