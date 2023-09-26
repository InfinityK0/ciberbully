<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Enlace a Bootstrap CSS -->
    <title>Proyecto</title>
</head>


<?php
// Llamada al archivo HTML utilizando la función include o require
include 'estilos.html';
?>

<body>

    <div id="pantalla1" class="videofondo">
        <div class="vi">
            <video autoplay loop muted>
                <source src="imagenes/planeta.mp4" type="video/mp4">
            </video>
        </div>

        <section class="ojala">
            <div class="cyber">
                <h1 class="titulo">CyberBullyDefender</h1>
                <br>
            </div>

            <div class="subcyber">
                <p class="copy" style="text-align: center">Mantente Seguro e Informado 🤖</p>
            </div>

        </section>
        <!--Anuncio-->

        <div class="overlay">
            <div class="advertisement">

                <div id="Div1" runat="server">
                    <div class="content-container">
                        <?php
                        require("conexion.php");
                        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
                        if (mysqli_connect_errno()) {
                            echo "Fallo al conectar con la base de datos";
                            exit();
                        }

                        mysqli_select_db($conexion, $db_nombre) or die("No se encuentra en la base de datos");
                        mysqli_set_charset($conexion, "utf8");
                        $consulta = "SELECT * FROM misvideos";
                        $resultados = mysqli_query($conexion, $consulta);

                        while ($fila = mysqli_fetch_array($resultados)) {
                            $url = $fila['url'];

                            // Verificar el tipo de contenido por la extensión de la URL o por otro criterio
                            if (preg_match('/\.(mp4|avi|mov|flv)$/i', $url)) {
                                // Si es una URL de video, muestra el video
                                echo "<video src='$url' controls='controls' width='670vh' height='450vh' autoplay></video>";
                            } elseif (preg_match('/\.(jpg|jpeg|png|gif)$/i', $url)) {
                                // Si es una URL de imagen, muestra la imagen
                                echo "<img src='$url' class='imganuncio' alt='Imagen' width='970vh' height='450vh'>";
                            } else {
                                // Si no es un video ni una imagen, asume que es texto
                                echo "<div class='text-container text-center'>$url</div>";
                            }
                        }

                        mysqli_close($conexion);
                        ?>
                    </div>
                    <span class="close-btn">&times;</span>
                </div>
            </div>
        </div>





        <!-- Contenido de la pantalla 1 -->

        <?php
        // Llamada al archivo HTML utilizando la función include o require
        include 'menu.html';
        ?>

<div class="container1">
    <div class="row">
        <div class="concepto1 col-md-6">
            <div class="aaa">
                <div style="justify-content: center;">
                    <img src="imagenes/Cyberbullying2023.jpg" class="formimg" alt="Imagen">
                </div>
            </div>
        </div>
        <div class="ci1 col-md-6">
            <div class="description" style="text-align: justify; margin-right: 10%;">
                <h2>Cyberbullying</h2>
                <p>
                    El cyberbullying, también conocido como ciberacoso, se refiere al uso de la tecnología
                    de la
                    información y las redes sociales para hostigar, intimidar, humillar o difamar a otras
                    personas.
                    Esta
                    forma de acoso puede incluir mensajes ofensivos, amenazas, difusión de rumores falsos,
                    divulgación
                    de información privada o cualquier otra conducta que cause daño emocional o psicológico
                    a la
                    víctima. El cyberbullying puede tener consecuencias devastadoras para la salud mental y
                    el
                    bienestar
                    de las personas afectadas, especialmente en adolescentes y jóvenes que son más
                    vulnerables a
                    este
                    tipo de agresiones.
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="concepto2 col-md-6">
            <div class="aaa">
                <div style="justify-content: center;">
                    <img src="imagenes/seguridad.jpg" class="formimg" alt="Imagen">
                </div>
            </div>
        </div>
        <div class="ci2 col-md-6">
            <div class="description" style="text-align: justify; margin-right: 10%;">
                <h2>Ciberseguridad</h2>
                <p>
                    La ciberseguridad se refiere a la protección de sistemas informáticos, redes y
                    dispositivos
                    electrónicos contra ataques, daños o accesos no autorizados. En un mundo cada vez más
                    digitalizado,
                    la ciberseguridad se ha vuelto crucial para garantizar la confidencialidad, integridad y
                    disponibilidad de la información sensible. Esto implica el uso de medidas preventivas y
                    técnicas
                    avanzadas para detectar y responder a posibles amenazas, como virus, malware, ransomware
                    y
                    otras
                    formas de ataques cibernéticos que podrían comprometer la seguridad de los datos y la
                    privacidad.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div style="text-align: center;">
                <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                    <h2>Visión de la empresa</h2>
                    <br>
                    <p style="text-align: justify;">
                        "Nuestra visión es construir un mundo digital seguro y respetuoso, donde todas las
                        personas puedan
                        disfrutar de una experiencia en línea libre de temor al acoso y la intimidación.
                        Aspiramos a ser
                        líderes en la lucha contra el cyberbullying y la ciberseguridad, brindando
                        soluciones innovadoras y
                        efectivas que protejan a individuos y comunidades en el entorno virtual".
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div style="text-align: center;">
                <div class="description" style="width: 90%; margin: 20px; padding: 20px;">
                    <h2>Misión de la empresa</h2>
                    <br>
                    <p style="text-align: justify;">
                        "En nuestra empresa, nos comprometemos a abordar el cyberbullying y la
                        ciberseguridad desde diversos
                        ángulos. Nuestra misión es educar y concienciar sobre los riesgos del acoso en
                        línea, proporcionar
                        herramientas y recursos para prevenir y mitigar situaciones de ciberacoso, y ofrecer
                        servicios de
                        ciberseguridad avanzados para proteger a nuestros clientes contra posibles amenazas
                        cibernéticas. A
                        través de la innovación tecnológica y la colaboración con expertos, trabajamos
                        incansablemente para
                        crear un entorno digital más seguro y empoderador para todos".
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>









    </div>
        <!--Contactos-->
        <?php
        include 'contactos.html';
        ?>




<script src="anuncio.js"></script>
    <script>

         // Llamar a la función después de mostrar la pantalla 5


        // Obtener el elemento de cierre del anuncio
        var closeBtn = document.querySelector('.close-btn');

        // Agregar un evento de clic al elemento de cierre
        closeBtn.addEventListener('click', function () {
            // Obtener el elemento del anuncio
            var advertisement = document.querySelector('.advertisement');

            // Ocultar el anuncio estableciendo la propiedad "display" en "none"
            advertisement.style.display = 'none';

            // Obtener el elemento del overlay
            var overlay = document.querySelector('.overlay');

            // Eliminar la clase "overlay" del elemento
            overlay.classList.remove('overlay');
        });

        function reproducirVideo(ruta) {
            var video = document.getElementById("videoPlayer");
            video.src = ruta;
            video.load();
            video.play();
        }


        /*function mostrarPantalla1() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "block";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla2() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "block";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla3() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "block";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla4() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "block";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "none";
            document.body.style.backgroundColor = "#000";
        }

        function mostrarPantalla5() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "block";
            document.getElementById("pantalla6").style.display = "none";
            document.body.style.backgroundColor = "#1f2124";
        }

        function mostrarPantalla6() {
            ocultarPantallas();
            document.getElementById("pantalla1").style.display = "none";
            document.getElementById("pantalla2").style.display = "none";
            document.getElementById("pantalla3").style.display = "none";
            document.getElementById("pantalla4").style.display = "none";
            document.getElementById("pantalla5").style.display = "none";
            document.getElementById("pantalla6").style.display = "block";
            document.body.style.backgroundColor = "#000";
        }


        // Función para ocultar todas las pantallas
        function ocultarPantallas() {
            const pantallas = document.querySelectorAll(".pantalla");
            pantallas.forEach((pantalla) => {
                pantalla.style.display = "none";
            });
        }*/



    </script>
    <script src="js.js"></script>



</body>


</html>