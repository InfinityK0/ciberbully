<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="videoForm" action="ex.php" method="POST">
                        <input type="text" id="videoURL" name="videoURL" placeholder="Ingrese la ruta del video">
                        <input type="submit" name="eliminar" value="Eliminar Video">
                    </form>

                  <?php
        require("conexion.php");
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
        if (mysqli_connect_errno()) {
            echo "fallo al conectar con la base de datos";
            exit();
        }

        mysqli_select_db($conexion, $db_nombre) or die("no se encuentra en la base de datos");
        mysqli_set_charset($conexion, "utf8");

      
            if (isset($_POST['eliminar'])) {



                    // Guarda la URL del video en la base de datos
                    $consulta3 = "DELETE FROM misvideos";
                    $result3 = mysqli_query($conexion, $consulta3);

                    // Verifica si se realizó la inserción exitosamente
                    if ($result3) {
                        // Redirige al index.php utilizando JavaScript
                        echo "<script>window.location.href = 'index.php';</script>";
                        exit();
                    } else {
                        echo "error";
                    }
                }
            

            mysqli_close($conexion);
        ?>
        
        

        
</body>
</html>