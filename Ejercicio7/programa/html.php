<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cartas de Poker</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <form action="funciones.php" method="post">
          <div class="row">




      <?php  include 'informacion.php';
      
      
      
      //aqui tenemos los select que generaremos en la seccion de vistas(html.php)
      //generados con un  bucle for para no tener que escribir los 5 a mano
for($i = 0; $i < 5; $i++){

    

  echo '
        
  <select name="'.$conteo++.'" id="selectPicas" onchange="ver()"> 
      <option selected>Elige tu carta</option>
      <!-----Picas------------->
        <option >'.$cartas[1].'</option>
        <option >'.$cartas[2].'</option>
        <option >'.$cartas[3].'</option>
        <option >'.$cartas[4].'</option>
        <option >'.$cartas[5].'</option>
        <option >'.$cartas[6].'</option>
        <option >'.$cartas[7].'</option>
        <option >'.$cartas[8].'</option>
        <option >'.$cartas[9].'</option>
        <option >'.$cartas[10].'</option>
        <option >'.$cartas[11].'</option>
        <option >'.$cartas[12].'</option>
        <option >'.$cartas[13].'</option>
        <!-----Treboles------------->

  
        <option >'.$cartas[14].'</option>
        <option >'.$cartas[15].'</option>
        <option >'.$cartas[16].'</option>
        <option >'.$cartas[17].'</option>
        <option >'.$cartas[18].'</option>
        <option >'.$cartas[19].'</option>
        <option >'.$cartas[20].'</option>
        <option >'.$cartas[21].'</option>
        <option >'.$cartas[22].'</option>
        <option >'.$cartas[23].'</option>
        <option >'.$cartas[24].'</option>
        <option >'.$cartas[25].'</option>
        <option >'.$cartas[26].'</option>
  
        <!-----Corazones------------->

        <option >'.$cartas[27].'</option>
        <option >'.$cartas[28].'</option>
        <option >'.$cartas[29].'</option>
        <option >'.$cartas[30].'</option>
        <option >'.$cartas[31].'</option>
        <option >'.$cartas[32].'</option>
        <option >'.$cartas[33].'</option>
        <option >'.$cartas[34].'</option>
        <option >'.$cartas[35].'</option>
        <option >'.$cartas[36].'</option>
        <option >'.$cartas[37].'</option>
        <option >'.$cartas[38].'</option>
        <option >'.$cartas[39].'</option>
  
  
        <!-----Diamantes------------->

        <option >'.$cartas[40].'</option>
        <option >'.$cartas[41].'</option>
        <option >'.$cartas[42].'</option>
        <option >'.$cartas[43].'</option>
        <option >'.$cartas[44].'</option>
        <option >'.$cartas[45].'</option>
        <option >'.$cartas[46].'</option>
        <option >'.$cartas[47].'</option>
        <option >'.$cartas[48].'</option>
        <option >'.$cartas[49].'</option>
        <option >'.$cartas[50].'</option>
        <option >'.$cartas[51].'</option>
        <option >'.$cartas[52].'</option>
    </select>
    
    ';
  }
      
      
      
      
      ?>



        <div class="row">
            <div class="input-group">
              <input id="submit" name="submit" type="submit" value="Aceptar"/>
            </div>
          </div>
          
        </form>
      </div>
</body>
</html>