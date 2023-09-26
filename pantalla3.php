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
    <title>Capacitaciones</title>
</head>
<style>
    /* Estilos CSS */
    .redesC {
        margin-top: 200px;
        background-color: #000;
        height: 250px;
    }

    #pantalla3 {
        margin-top: -170px
    }

    .Formimg {
        display: flex;
        justify-content: center;
    }


    #galeria {
        /* Estilos para centrar los elementos en pantallas pequeñas */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    #imagen {
        width: 50%;
        height: 70%;
        /* Estilos existentes (sin cambios) */
   
    }


    /* estilos.css */
    .eliminar-link {
        color: white;
        margin-top: 110px;
    }

    .titulocaapa {
        margin-top: 60px;
        text-align: center;
    }

    @media screen and (max-width: 1180px) {
        #galeria {
            flex-direction: column;
            /* Colocar las imágenes en una columna */
            align-items: center;
            /* Centrar las imágenes horizontalmente */
            justify-content: center;
            text-align: center;
        }

        #imagen img {
      
            justify-content: center;
            text-align: center;
            align-items: center;
            /* Centrar las imágenes horizontalmente */
            width: 50%;
            /* Ocupar todo el ancho disponible */
            max-width: 400px;
            /* Limitar el ancho máximo */
            height: auto;
            /* Mantener la proporción de aspecto */
            margin: 10px 0;
            /* Espaciado entre las imágenes */
        }
    }
</style>

<body
    style=" max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; ">

    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'estilos.html';
    ?>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu.html';
    ?>
    <div id="pantalla3" class="pantalla">
        <div class="plantillaXD">



            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <div class="titulocaapa">
                <h2>Capacitaciones del año </h2>
            </div>
            <div id="galeria">
                <!-- Mostrar la galería de imágenes -->
                <?php
                require("conexion.php");

                $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
                if (mysqli_connect_errno()) {
                    echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                    exit();
                }

                $consulta = "SELECT * FROM capacitaciones";
                $resultados = mysqli_query($conexion, $consulta);

                while ($fila = mysqli_fetch_array($resultados)) {
                    $id = $fila['id'];
                    $url = $fila['url'];
                    echo ("<div id='imagen' class='text-center'><img src='$url' width='400' height='250' /></div>");
                    //echo ("<div class='eliminar-link'><b><a href='index.php?delete=$id' style='color: white;'>Eliminar</a></b></div>");
                
                }
                ?>
                <div>
                <br><br>
                    <p>Si quieres mas informacion comunicate <br>al siguiente número telefónico: 012456789</p>
                </div>
            </div>



           
        </div>
   
    </div>
        <!-- Contenido de la pantalla 4 -->
        <?php
            include 'contactos.html';
            ?>
    <script src="menu.js"></script>
</body>

</html>