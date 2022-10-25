<?php

//Request recupera los datos enviados de cualquier forma
$_REQUEST["cabecera"];
$_REQUEST["cuerpo"];
$_REQUEST["pie"];
$_REQUEST["estilo"];



function head(){

    if ($_POST["cabecera"] === "head_1"){
        include 'encabezados/head_1.php';
    }elseif($_POST["cabecera"] === "head_2"){
        include 'encabezados/head_2.php';

    }else{
        include 'encabezados/head_3.php';

    }
}

function body(){

    if ($_POST["cuerpo"] === "body_1"){
        include 'cuerpos/body_1.php';
    }
}

function foot(){

    if ($_POST["pie"] === "foot_1"){
        include 'pie/foot_1.php';
    }elseif ($_POST["pie"] === "foot_2"){
        include 'pie/foot_2.php';
    }elseif ($_POST["pie"] === "foot_3"){
        include 'pie/foot_3.php';
    }
}

function css(){

    if ($_POST["estilo"] === "estilo_1"){
        print " <style>
        header{text-decoration: underline; text-align: center;background-color: pink;}
        h1 { text-decoration: underline; text-align: center }
        p { font-Family: arial,verdana; color: white; background-color: black }
        body { color: black; background-color: yellow; text-indent: 1cm }
        img{ width: 500px;}
        footer{text-decoration: underline; text-align: center;background-color: blue;  margin: 20px auto;}
        </style>";
    }elseif($_POST["estilo"] === "estilo_2"){
        print" <style>
        * {
            padding: 0;
            margin: 0;
            margin: 0;
            box-sizing: border-box;
          }
          
          body {
            background-color: pink;
            font-family: Arial, Helvetica, sans-serif;
          }
          
          a {
            color: black;
            text-decoration: none;
          }
          

          
          h3 {
            font-weight: lighter;
            font-size: 24px;
          }

          
          ul {
            padding: 0;
            margin: 0;
            list-style: flex;
            display: flex;
            gap: 20px;
          }
     
          body {
            background-color: yellow;
            color: white;
            border-radius: 50px;
            padding: 20px 30px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-around;
          }
          
          header  {
            display: flex;
            align-items: center;
            justify-content: space-between;
          }
          </style>";
    }else{
        print " <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
         
        html {
            font-size: 10px;
        }
         
        img{
            width: 234px;
        }
        header {
            height: 6rem;
            background: #333;
            padding: 0 5rem;
        }

        </style>";

    }
}




head();
body();
foot();
css();
?>