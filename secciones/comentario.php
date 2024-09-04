


<!doctype html>
<html class="no-js" lang="en">

<head>
<!-- Incluir SweetAlert2 desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    
</body>

</body>

</html>


<?php

require_once "conexion.php";

if(isset($_POST['Comentario'])) {
  $nombre = trim($_POST['nomb']);
  $correo = trim($_POST['email']);
  $comentario = trim($_POST['com']);
  $fecha = date("Y-m-d H:i:s");


  $query = "INSERT INTO tmacom(NOMCOM, CORCOM, COMCOM ,FEHCOM) 
            VALUES('$nombre','$correo', '$comentario', '$fecha')";
            


$ejecutar = mysqli_query($con, $query);  



if($ejecutar){
    echo '
        <script>
            Swal.fire({
                icon: "success",
                title: "¡Enviado exitosamente!",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location = "../index.php";
            });
        </script>
    ';
} else {
    echo '
        <script>
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Inténtelo de nuevo",
                showConfirmButton: true
            }).then(() => {
                window.location = "../index.php";
            });
        </script>
    ';
}

mysqli_close($con);


}

?>