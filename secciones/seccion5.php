
<?php
require_once "conexion.php";
                
$sql = "SELECT * FROM tmacom order by FEHCOM";
$resultado = $con ->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>

<style>
  .negro{
    color: black;
  }
  .comentarioc {
            text-align: justify; /* Justifica el texto */
            word-wrap: break-word; /* Permite que las palabras largas se dividan y ajusten */
            overflow-wrap: break-word; /* Similar a word-wrap, para compatibilidad */
            margin-bottom: 20px; /* Espacio entre comentarios */
            padding: 10px; /* Espacio interior del comentario */
            border: 1px solid #ddd; /* Borde para separar visualmente */
            border-radius: 5px; /* Bordes redondeados */
            background-color: #f9f9f9; /* Fondo suave para resaltar */
            max-width: 100%; /* Asegura que no se extiendan más allá del contenedor */
        }
        .comentarioc h4 {
            margin-top: 0; /* Elimina el margen superior del nombre */
            font-weight: bold; /* Resalta el nombre */
        }

        .comentarioc p.big {
            margin: 10px 0; /* Espacio entre el nombre y el comentario */
        }

        .comentarioc small {
            color: gray; /* Estiliza la fecha */
        }
</style>
<body>
<section class="section parallax-container" >
        <div class="parallax-content section-lg context-dark text-center">
          <div class="container"> 
            <h class="row justify-content-md-center row-30"> 
              <div class="col-md-9 col-lg-8">
                <h2>Deja un comentario</h2>
                <div class="divider-lg"></div>
                
              </div>
              <div class="col-md-9 col-lg-6">
                <!-- RD Mailform-->
                <form method="post" action="secciones/comentario.php">
                  
                <div class="form-wrap">
                <div class="form-wrap">
                  <label >Nombre</label>
                    <input class="form-input"type="text" name="nomb" >
                    
                  </div>
                  <div class="form-wrap">
                  <label>Correo</label>
                    <input class="form-input"  type="email" name="email" >
                    
                  </div>
                  <div class="form-wrap">
                  <label>Comenta</label>
                    <input class="form-input"  type="text" name="com" >
                    
                  </div>
                  <center>
                  <div>
                    <button name="Comentario"  class="button button-primary">Comentar</button>
                  </div>
                  </center>
                  </div>
                 
                </form>
              <div>
                <hr>
              </div>
             
           
              <div class="negro">
                <div>
                  <h3>Comentarios</h3>
                </div>
                <div>
                <?php
                  

                    // Verificar si hay resultados
                    if ($resultado->num_rows > 0) {
                        // Mostrar los comentarios
                        while($fila = $resultado->fetch_assoc()) {
                            echo "<div class='quote-corporate col-lg-6 comentarioc'>";
                            echo "<h4 class='quote-header' style='color: black;''>" . htmlspecialchars($fila['NOMCOM']) . " dijo:</h4>";
                           echo "<div class='quote-body'>";
                           echo "<div class='quote-text'>";
                           
                            echo "<p class='big'>" . htmlspecialchars($fila['COMCOM']) . "</p>";
                            echo "<small>Fecha: " . htmlspecialchars($fila['FEHCOM']) . "</small>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            
                        }
                    } else {
                        echo "<p>No hay comentarios todavía.</p>";
                    }

                    // Cerrar conexión
                    $con ->close();
                    ?>
                 
                 
                </div>
              </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
</body>
</html>