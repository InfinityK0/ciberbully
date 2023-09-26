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
    <title>Cuentanos tu caso</title>
</head>
<style>
    .separator3 {
        border-top: 2px solid #00d4ff;
        width: 100%;
        /* Color y grosor del separador */

        /* Margen superior e inferior del separador */
    }

    .btn32 {
        background: rgb(0, 95, 217);
        background: linear-gradient(90deg, rgba(0, 95, 217, 1) 13%, rgba(8, 103, 140, 1) 61%, rgba(4, 191, 173, 1) 95%);
        border-radius: 100px;
        padding: 10px;
    }

    .tooltip {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 10px;
        transition: opacity 0.3s, transform 0.3s;
        opacity: 0;
        transform: translateY(-10px);
        z-index: 9999;
    }

    textarea:hover+.tooltip {
        opacity: 1;
        transform: translateY(0);
    }

    .tooltip-text {
        display: none;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 10px;
        transition: opacity 0.3s, transform 0.3s;
        opacity: 0;
        transform: translateY(-10px);
        z-index: 9999;
    }

    .tooltip-text.active {
        opacity: 1;
        transform: translateY(0);
        display: block;
        margin-top: 30px;
    }

    .form-control option {
        color: black;
    }

    .formulariocuenta {
        margin-top: -20px;
    }

    .men {
        width: 400px;
        margin-top: 100px;
        margin-left: 800px;
    }

    .men p{
   color: black;
    }

    .tituloformsc h1 {

        padding: 10px;
        text-align: center;
    }
</style>

<body style=" max-width: 100%; height: auto; background-repeat: no-repeat; background-image: url('imagenes/fondo.png'); background-size: cover; ">

    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'estilos.html';
    ?>
    <?php
    // Llamada al archivo HTML utilizando la función include o require
    include 'menu.html';
    ?>
    <div id="pantalla5">

        <div class="plantillaXD">
            <?php
            // Llamada al archivo HTML utilizando la función include o require
            include 'menu.html';
            ?>
            <?php
            // Establecer la conexión a la base de datos
            require("conexion.php");
            
            $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña, $db_nombre);
            if (mysqli_connect_errno()) {
                echo "Fallo al conectar con la base de datos: " . mysqli_connect_error();
                exit();
            }

            // Verificar si se ha enviado el formulario
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Verificar si se ha enviado el formulario de registro
                if (isset($_POST['btn32'])) {
                    // Obtener los valores enviados por el formulario
                    $nombre = $_POST['txtNombres'];
                    $correo = $_POST['txtCorreo'];
                    $contacto = $_POST['txtContacto'];
                    $fechaNacimiento = $_POST['fechaNacimiento'];
                    $fechaSuceso = $_POST['fechaSuceso'];
                    $nivelAcademico = $_POST['ddlRol'];
                    $experiencia = $_POST['txtComentario'];
                    $rol = $_POST['ddlRol2'];
                    $genero = $_POST['gender'];

                    // Consulta para insertar los datos en la base de datos
                    $consulta = "INSERT INTO formulario (nombre, correo, contacto, fecha_nacimiento, fecha_suceso, nivel_academico, experiencia, rol, genero) 
                     VALUES ('$nombre', '$correo', '$contacto', '$fechaNacimiento','$fechaSuceso', '$nivelAcademico', '$experiencia', '$rol', '$genero')";

                    // Ejecutar la consulta
                    if (mysqli_query($conexion, $consulta)) {
                        // Datos insertados correctamente, puedes redirigir a otra página o mostrar un mensaje de éxito
                        echo "<div class='men alert alert-success'><p>¡Formulario enviado correctamente!</p></div>";
                    } else {
                        // Error al insertar datos, mostrar mensaje de error
                        echo "Error al insertar datos: " . mysqli_error($conexion);
                    }
                }
            }

            mysqli_close($conexion);
            ?>
            <br><br><br><br><br>
            <section class="forms">

                <div class="tituloformsc">
                    <h1>Experiencia De Bullyng o Ciberbullyng</h1>
                </div>
                <div class="containerf">
                    <div class="row">
                        <!-- Columna para el contenedor del mensaje motivacional en el lado izquierdo -->
                        <div class="col-6">
                            <div class=""
                                style="box-shadow: 0 0 10px #00d4ff; width: 90%; margin: 20px; padding: 20px;">
                                <h2 style="text-align: justify; color: white;">¡Tu historia importa!</h2>
                                <br>
                                <p style="text-align: justify;">
                                    No estás solo en esta batalla. El bullying puede hacerte sentir como si estuvieras
                                    atrapado
                                    en un laberinto oscuro, pero quiero recordarte que siempre habrá una luz que te guíe
                                    hacia la
                                    salida. Tienes una comunidad de personas dispuestas a escucharte, apoyarte y luchar
                                    junto a ti.
                                    Tu valentia en entornos ya sea académicos, tu hogar, con tus amigos o en otros
                                    lugares,
                                    para ayudarte.
                                    Juntos, podemos construir un mundo donde el
                                    respeto y la
                                    empatía sean los pilares fundamentales. No permitas que el bullying defina quién
                                    eres.
                                </p>
                                <div style="display: flex; justify-content: center;">
                                    <img src="imagenes/b4.jpg" class="formimg" alt="">
                                </div>
                            </div>

                        </div>

                        <!-- Columna para el formulario en el lado derecho -->
                        <div class="col-6">
                            <div style="display: flex; margin: 20px;">
                                <form id="myForm" class="formulariocuenta" method="post"
                                    action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group" style="text-align: center;">
                                        <h1 style="color: white; margin-top: 30px;">Formulario</h1>
                                        <!-- Agrega aquí el texto que desees mostrar -->
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-4">
                                            <p>Escribe tu nombre completo</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" aria-label="Nombre"
                                                    name="txtNombres" runat="server" />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <p>Escribe tu correo electronico</p>
                                            <div class="form-group">
                                                <input type="text" class="form-control" aria-label="Correo Electrónico"
                                                    name="txtCorreo" runat="server" required />
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <p>Escribe tu numero telefonico</p>
                                                <input type="number" class="form-control" aria-label="Teléfono"
                                                    name="txtContacto" runat="server" id="txtContacto" />
                                                <div id="phoneError" style="color: red;"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <br>


                                    <div class="row flex-row align-items-center">
                                        <div class="col-6">
                                            <p>Selecciona tu fecha de nacimiento</p>
                                            <div class="form-group">
                                                <?php
                                                // Calcular la fecha máxima permitida (8 años atrás desde la fecha actual)
                                                $fechaMaxima = date('Y-m-d', strtotime('-8 years'));
                                                ?>
                                                <input type="date" class="form-control"
                                                    placeholder="Escoge tu fecha de nacimiento"
                                                    aria-label="Fecha de Nacimiento" name="fechaNacimiento"
                                                    runat="server" max="<?php echo $fechaMaxima; ?>">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <p>Selecciona la fecha del suceso</p>
                                            <div class="form-group">
                                                <input type="date" class="form-control"
                                                    placeholder="Escoge la fecha del suceso"
                                                    aria-label="Fecha de suceso" name="fechaSuceso" id="fechaSuceso"
                                                    runat="server">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row flex-row align-items-center">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <p>Selecciona tu nivel académico</p>
                                                <select class="form-control" aria-label="Nivel Académico" name="ddlRol"
                                                    runat="server">
                                                    <option value="Educacion_Basica">Educación Básica</option>
                                                    <option value="Colegio">Colegio</option>
                                                    <option value="Bachillerato">Bachillerato</option>
                                                    <option value="Educacion_Superior">Educación Superior</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <p>Selecciona tu rol</p>
                                                <select class="form-control" aria-label="Rol" name="ddlRol2"
                                                    runat="server">
                                                    <option value="Víctima">Víctima</option>
                                                    <option value="Testigo">Testigo</option>
                                                    <option value="Agresor">Agresor</option>
                                                    <option value="Apoyo">Apoyo</option>
                                                    <option value="Apoyo">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Cuéntanos tu experiencia"
                                                    aria-label="Experiencia" name="txtComentario"
                                                    runat="server"></textarea>
                                                <div class="tooltip">Este apartado es para que cuentes tu caso de
                                                    bullying o ciberbullyng según tu
                                                    perspectiva.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="justify-content: center;">
                                        <div style="margin-top: 15px;">
                                            <label style="color: white; text-align: left;"><b>Género:</b></label>
                                        </div>
                                        <div class="col-6">

                                            <br>
                                            <div class="radio-buttons">
                                                <label for="rbHombre">Hombre</label>
                                                <input type="radio" id="rbHombre" name="gender" value="Hombre"
                                                    runat="server">

                                                <label for="rbMujer">Mujer</label>
                                                <input type="radio" id="rbMujer" name="gender" value="Mujer"
                                                    runat="server">

                                                <label for="rbOtros">Otros</label>
                                                <input type="radio" id="rbOtros" name="gender" value="Otros"
                                                    runat="server">
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="x">


                                            <div class="col-12" style="display: flex; justify-content: center;">
                                                <div class="tooltip-text" id="buttonTooltip">Tu historia no se hará
                                                    pública
                                                    ni mucho menos, así que ten la libertad de sentirte seguro al
                                                    compartirla.</div>
                                                <input type="submit" class="btn32 btn-primary" name="btn32"
                                                    value="Enviar Formulario" onclick="return validateForm();"
                                                    onmouseover="showTooltip('buttonTooltip');"
                                                    onmouseout="hideTooltip('buttonTooltip');">
                                            </div>


                                        </div>
                                    </div>
                                </form>

                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </section>
            <!--Contactos-->
            <?php
            include 'contactos.html';
            ?>

        </div>
    </div>

    <script src="menu.js"></script>
    <script>
        // Deshabilitar el mensaje de confirmación de reenvío de formulario
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        // Obtiene la fecha actual en el formato "YYYY-MM-DD"
        var fechaActual = new Date().toISOString().split('T')[0];

        // Asigna la fecha actual como la fecha máxima en el campo de fecha de suceso
        document.getElementById('fechaSuceso').setAttribute('max', fechaActual);

        function showTooltip(elementId) {
            var tooltip = document.getElementById(elementId);
            tooltip.classList.add("active");
            tooltip.classList.add("tooltip-below"); // Add this line to apply the new class
        }

        function hideTooltip(elementId) {
            var tooltip = document.getElementById(elementId);
            tooltip.classList.remove("active");
            tooltip.classList.remove("tooltip-below"); // Add this line to remove the new class
        }

        function validateForm() {
            var nombre = document.getElementsByName("txtNombres")[0].value;
            var email = document.getElementsByName("txtCorreo")[0].value;
            var comentario = document.getElementsByName("txtComentario")[0].value;
            var phoneNumber = document.getElementById("txtContacto").value;

            // Validación de campos vacíos
            if (nombre === "" || email === "" || comentario === "") {
                alert("Por favor, verifique que todos los campos estén llenos.");
                return false;
            }

            // Validación de nombre solo letras
            if (!/^[a-zA-Z\s]+$/.test(nombre)) {
                alert("Solo ingrese letras en el apartado del nombre.");
                return false;
            }

            // Validación de correo con símbolo @
            if (email.indexOf('@') === -1) {
                alert("Ingrese un correo válido que contenga el símbolo @.");
                return false;
            }

            if (phoneNumber.length !>= 7) {
                alert("Por favor, ingrese de 7 a 10 dígitos en el número de teléfono, ya sea celular o convencional.");
                return false;
            }
            return true; // Si todas las validaciones pasan, permite el envío del formulario
        } 


    </script>
</body>

</html>