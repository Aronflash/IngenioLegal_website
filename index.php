<!--CONEXION Y RECOLECCIÓN DE DATO VISITAS-->
<?php
// Conexión a la base de datos
$servername = "localhost:3306"; // Cambiar según tu configuración
$username = "root"; // Cambiar según tu configuración
$password = ""; // Cambiar según tu configuración
$dbname = "ingeniolbd"; // Cambiar según tu configuración

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el contador actual
$sql = "SELECT contador FROM visitas WHERE id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $contador_actual = $row['contador'];

    // Incrementar el contador
    $nuevo_contador = $contador_actual + 1;
    $sql = "UPDATE visitas SET contador=$nuevo_contador WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        // Mostrar el contador en el cuadro flotante
        $visitas = $nuevo_contador;
    } else {
        echo "Error al actualizar el contador: " . $conn->error;
    }
} else {
    echo "Error al obtener el contador";
}

$conn->close();
?>

<!--Estilos del cuadro flotante contador de visitas-->
<style>
  /* Cuadro flotante */
  #visitas-cuadro {
      position: fixed;
      top: 10px;
      right: 10px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px;
      border-radius: 8px;
      z-index: 1000;
      cursor: move;
      display: flex;
      align-items: center;
      font-family: 'Montserrat', sans-serif;
  }

  #visitas-cuadro img {
      width: 20px;
      margin-right: 8px;
  }
</style>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300i,400,400i,700%7CMontserrat:400,500,600,700%7CPlayfair+Display:400,700,700i%7COswald:400,700,700i">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/txt.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;} 
    </style>
  </head>
  <body>
        <?php 
          include ('partes_home/carga.php');
        ?>

        <!--Impresión y diseño de vista de visitas-->
        <div id="visitas-cuadro">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/visible.png" alt="Ojo">
          <span><?php echo $visitas; ?> visitas</span>
        </div>

    <div class="page">
        <?php
          include ('partes_home/header.php');
          include ('secciones/home1.php');
          include ('secciones/slider_index.php');
          include ('secciones/intro_index.php');
          include ('secciones/seccion3_index.php');
          include ('secciones/intro_index2.php');
          include ('secciones/testimonios.php');
          include ('secciones/seccion5.php');
          include ('partes_home/footer.php');
        ?>
      
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/cuadroflotante.js"></script>
    <!-- coded by houdini-->
  </body>
</html>