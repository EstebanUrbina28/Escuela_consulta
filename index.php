<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de Bases de Datos - ESCUELA</title>
  <meta name="description" content="Pagina de prueba">
  <meta name="keywords" content="codigo basico PHP">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
</head>

<body>


  <div class="grid-container">
    <?php include('dibuja_menu.php'); ?>
    <div class="grid-x">
      
      <div class="cell small-6">
        <h3>Ingreso de datos - Tabla Personas</h3>
        <form action="insertar1.php" method="POST">
          <label for="txtid">Identificación </label>
          <input type="number" name="txtid" id="txtid" required>
          <label for="txtnom">Nombres completos </label>
          <input type="text" name="txtnom" id="txtnom" required maxlength="50">
          <label for="txtgen">Genero</label>
          Masculino <input type="radio" name="txtgen" value="M">
          Femenino <input type="radio" name="txtgen" value="F"><br>
          <label for="txteda">Edad</label>
          <input type="number" name="txteda" id="txteda" required min="0" max="120">
          <hr>
          <input type="submit" value="Ingresar Datos" class="button primary">
        </form>


      </div>
      <div class="cell small-6">
      </div>

    </div>



    



  </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>
  

</body>

</html>