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
        <form action="funciones.php" method="post">
          <div class="row">
         
          <select  class="form-select" name="cabecera" aria-label="Default select example">
            <option selected>La cabecera de tu pagina</option>
                <option value="head_1">head_1</option>
                <option value="head_2">head_2</option>
                <option value="head_3">head_3</option>
        
              
            </select>         
          <select  class="form-select" name="cuerpo" aria-label="Default select example">
            <option selected>El cuerpo de tu pagina</option>
                <option value="body_1">body_1</option>
                <option value="body_2">body_2</option>
                <option value="body_3">body_3</option>
        
            </select>

            <select  class="form-select" name="pie" aria-label="Default select example">
            <option selected>El pie de tu pagina</option>
                <option value="foot_1">foot_1</option>
                <option value="foot_2">foot_2</option>
                <option value="foot_3">foot_3</option>
        
              
            </select>
          <select  class="form-select" name="estilo" aria-label="Default select example">
            <option selected>El estilo de tu pagina</option>
                <option value="estilo_1">estilo_1</option>
                <option value="estilo_2">estilo_2</option>
                <option value="estilo_3">estilo_3</option>
        
              
            </select>



      <?php  

      
      
      
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