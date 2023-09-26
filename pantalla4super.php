<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imagenes/logo prueba.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/e9f58d382f.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="imagenes/bx-menu.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>EventosAdmin</title>
</head>
<body>
<style>
  .Formimg2 {
        display: flex;
        justify-content: center;
    }


    #galeria2 {
        margin: 200px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #galeria2 img{
        margin-top: 150px;

    }

    #imagen2 {
        width: 400px;
        height: 250px;
        margin: 10px;
    }

    /* estilos.css */
.eliminar-link2 {
    color: white;
    margin-top: 260px;
}

#pantalla4{
    margin-top: -200px;
}
</style>
<?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'estilos.html';
  ?>
   <?php
  // Llamada al archivo HTML utilizando la función include o require
  include 'menu3.html';
  ?>
<div id="pantalla4" style="background-image: url('imagenes/fondo.png'); background-size: cover;">
    <div class="plantillaXD">

       
       <div id="galeria2">
            <!-- Mostrar la galería de imágenes -->
            <?php
            require("conexion.php");
            
            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
            if (mysqli_connect_errno()) {
                echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                exit();
            }

            $consulta = "SELECT * FROM eventos";
            $resultados = mysqli_query($conexion, $consulta);

            while ($fila = mysqli_fetch_array($resultados)) {
                $id = $fila['id'];
                $url = $fila['url'];
                echo ("<div id='imagen2'><img src='$url' width='400' height='250' /></div>");
                echo ("<div class='eliminar-link2'><b><a href='indexadmin.php?delete2=$id' style='color: white;'>Eliminar</a></b></div>");

            }
            ?>
        </div>

        <div class="Formimg2">
            <!-- Mostrar el formulario solo para el administrador -->
            <form id="imageForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" id="imageURL2" name="imageURL2" placeholder="Ingrese la URL de la imagen">
                <input class="1" type="submit" name="guardar2" value="Guardar">
            </form>
        </div>

        <?php
        // index.php
        
        // ...
        
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (isset($_GET['edit'])) {
                // Aquí manejas la acción de "Actualizar"
                // ...
            } elseif (isset($_GET['delete2'])) {
                 // Aquí manejas la acción de "Eliminar"
                 $id = $_GET['delete2'];
                 // Ejecuta la consulta para eliminar la imagen con el ID proporcionado
                 $consulta = "DELETE FROM eventos WHERE id = $id";
                 $result = mysqli_query($conexion, $consulta);
                 // Verifica si se realizó la eliminación exitosamente
                 if ($result) {
                     // Redirige al index.php utilizando JavaScript
                     echo "<script>window.location.href = 'indexadmin.php';</script>";
                     exit();
                 } else {
                     echo "Error al eliminar la imagen";
                 }
             
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['guardar2'])) {
                // Aquí manejas la acción de "Guardar"
                $newURL = $_POST['imageURL2'];

                // Verificar si la URL no está vacía antes de guardarla
                if (!empty($newURL)) {
                    // Escapa los caracteres especiales en la URL de la imagen
                    $newURL = mysqli_real_escape_string($conexion, $newURL);

                    // Insertar la nueva URL en la base de datos
                    $consulta = "INSERT INTO eventos (url) VALUES ('$newURL')";
                    $result = mysqli_query($conexion, $consulta);

                    // Verificar si se realizó la inserción exitosamente
                    if ($result) {
                        // Recargar la página para mostrar la nueva imagen
                        echo "<script>window.location.href = 'indexadmin.php';</script>";
                        exit();
                    } else {
                        echo "Error al guardar la imagen";
                    }
                }
            } elseif (isset($_POST['actualizar'])) {
                // Aquí manejas la acción de "Actualizar" después de enviar el formulario de edición
                // ...
            }
        }
        ?>
        <br>

       
        <!--Contactos-->
        <?php
    include 'contactos.html';
    ?>



    </div>
    <!-- Contenido de la pantalla 5 -->

</div>
<script src="menu.js"></script>
</body>
</html>