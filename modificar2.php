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
       
        <h1>Edicion de tabla </h1>
        <?php 
        //capturando datos de entrada
        $id = $_POST["editar"];
        //abrir conexión 
        include("conexion.php");
        $bd  = conectar();
        if (!$bd) return;

        //prepara y ejecuta consulta en BD 
        
        $sql = "select * from personas where idper=$id";
        $res = mysqli_query($bd,$sql);
    
            
        ?>
       
        <hr>
        
    </div>
  <!--Fin container-->

  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>