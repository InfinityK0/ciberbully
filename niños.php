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
    <title>Niñ@s</title>
</head>
<style>
    #contenedoresN {
        margin-top: 100px;
        display: flex;
        flex-wrap: wrap;
        /* Permite que los contenedores se envuelvan en varias filas */
        justify-content: space-between;
        /* Distribuye los contenedores horizontalmente */
    }

    .contenedorN {
        width: 400px;
        /* Ancho para tres contenedores en una fila, considerando el espacio entre ellos */
        height: 200px;
        align-items: center;
        justify-content: center;
        padding: 15px;
        text-align: justify;
        margin: 30px;
        /* Espacio entre contenedores */

    }

    .contenedorN img {
        width: 200px;
        height: 150px;
        display: block;
        /* Centrar la imagen */
        margin: 0 auto;
        /* Centrar la imagen horizontalmente */
    }



    .separator4 {
        border-top: 2px solid #00d4ff;
        width: 100%;
        /* Color y grosor del separador */
    }

    .contenedorN .icon-check {
        border-radius: 50%;
        background-color: #00d4ff;
        color: rgb(255, 255, 255);
        /* Color del ícono de check */
        font-size: 24px;
        /* Tamaño del ícono de check */
    }

    .clear {
        clear: both;
        /* Limpiar el flotador para evitar problemas de diseño */
    }

    .lim{
        margin-top: 100px;
    }

    @media screen and (max-width: 768px) {
        #contenedoresN {
text-align: center;
justify-content: center;
align-items: center;
            flex-direction: column;
        }
    }
</style>

<body style="width: 100%; height: 100vh; background-image: url('imagenes/fondo.png'); background-size: cover; ">
<?php
// Llamada al archivo HTML utilizando la función include o require
include 'estilos.html';
?>
<?php
        // Llamada al archivo HTML utilizando la función include o require
        include 'menu.html';
        ?>
        <div class="lim">
        <h1>LIMITA EL TIEMPO DE PANTALLAS</h1>
        </div>
    <section id="contenedoresN">
        <div class='contenedorN'>
            <img src="imagenes/j1.png" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Establece conjuntamente reglas, horarios y excepciones para el uso de pant.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/j2.png" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Evita que las pantallas sean usadas como meras distracciones.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/j3.png" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Fomenta el uso creativo y educativo de las tecnologias.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/j4.png" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Ayudale con herramientas y configuraciones.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/j5.png" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Anima a la participacion en otras actividades, juegos y deportes.</p>
            </div>
        </div>

        <div class='contenedorN'>
            <img src="imagenes/j6.png" style="width: 90px; height: 150px;" alt="">
            <div class="circle-background">
                <i class='bx bx-check icon-check'></i>
            </div>
            <div class="contenedorM">
                <div class="separator4">
                    <!-- Separador -->
                </div>
                <p>Se un ejemplo de apoyo en su proceso de qprendizaje tecnologico</p>
            </div>
        </div>

    </section>
    <br><br><br><br><br><br>
    <!--Contactos-->
    <?php
    include 'contactos.html';
    ?>
    <script src="menu.js"></script>
</body>

</html>