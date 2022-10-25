<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <form action="tabla.php" method="post">
          <div class="row">
            <h4>Formulario para table</h4>
            <div class="input-group input-group-icon">
              <input type="text" placeholder="Escribe tu nombre" id="name" name="name"  />
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>

          <div class="row">

            <div class="col-half">
              <h4>Gender</h4>
              <div class="input-group">
                <input id="gender-male" type="radio" name="gender" value="Male"/>
                <label for="gender-male">Male</label>
                <input id="gender-female" type="radio" name="gender" value="Female"/>
                <label for="gender-female">Female</label>
              </div>
            </div>
          </div>

          <select  class="form-select" name="edad" aria-label="Default select example">
            <option selected>Elige tu edad</option>
                <option value="0-25">0-25</option>
                <option value="25-45">25-45</option>
                <option value="45-65">45-65</option>
                <option value="JUBILADO">JUBILADO</option>
              
            </select>

            <select class="form-select" name="salario" aria-label="Default select example">
              <option selected>Elige tu rango de salario</option>
                <option value="0-12000">0-12000</option>
                <option value="12000-20000">12000-20000</option>
                <option value="21000-35000">21000-35000</option>
                <option value="+35000">+35000</option>
            </select>


 
          <div class="row">
            <div class="input-group">
              <input id="enviar" type="submit" value="Aceptar"/>
            </div>
          </div>
          <div class="row">
            <h4>Terms and Conditions</h4>
            <div class="input-group">
              <input id="terms" type="checkbox"/>
           </div>
          </div>
        </form>
      </div>
</body>
</html>