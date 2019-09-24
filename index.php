<?php
    include "Config/funciones.php";

    if(!isset($p))
        $p = "principal"; /* Siempre redigire al modulo principal */
    else
        $p = $p;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turismo en Colombia</title>
    <meta name="author" content="Harold Pedraza">
    <meta name="keywords" content="Colombia, Hoteles, Turismo, Pueblos, Restaurantes">
    <meta name="description" content="Plataforma web para incentivar el turismo en mas partes de CVolombia">
    
    <!-- Icono -->
    <link rel="shortcut icon" type="image/x-icon" href="Recursos/img/1.png">
    <!-- Estilos de fontAwesome -->
    <link rel="stylesheet" href="Recursos/fontAwesome/css/all.min.css">
    <!-- Light box para galeria de imagenes -->
    <link rel="stylesheet" type="text/css" href="Recursos/css/lightbox.min.css">
    <!-- Fuente de texto de google -->
    <link href="https://fonts.googleapis.com/css?family=Kalam:400,700&display=swap" rel="stylesheet">
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="Recursos/bootstrap/css/bootstrap.css">
    <!-- Estilos generales de la pagina -->
    <link rel="stylesheet" href="Recursos/css/estilos.css">
    
    <!-- Archivo JS -->
    <script src="Recursos/js/app.js"></script>
    <!-- Libreria de Jquery -->
    <script src="Recursos/js/jquery.js"></script>
    <!-- Js de bootstrap unicamente para cargar la ventana modal del modulo principal -->
    <script type="text/javascript" src="Recursos/bootstrap/js/bootstrap.js"></script>
    <!-- Libreria de alertas de sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
    <div class="padre">

        <header class="header">

            <div class="menu">
                <div class="logo">
                    <a href="index.html"> 
                        <img src="Recursos/img/1.png" width="70" height="70">
                        ColombiaTravel
                    </a>
                </div>

                <div class="nav">
                    <a href="?p=principal"><i class="fas fa-home"></i><span class="quitar">Inicio</span></a>
                    <a href="?p=pueblos"><i class="fas fa-place-of-worship"></i><span class="quitar">Pueblos</span></a>
                    <a href="?p=hoteles"><i class="fas fa-globe-americas"></i><span class="quitar">Hoteles</span></a>
                    <a href="?p=contacto"><i class="far fa-envelope"></i><span class="quitar">Contactanos</span></a>
                </div>

                <div class="social">
                    <div>
                        <a href="">
                            <span class="glyphicon glyphicon-search"></span>
                            Buscar
                        </a>
                    </div>
                </div>

            </div>

            <div class="text-principal">
                <h1>Conoce mas acerca de los diversos pueblos en Colombia...!</h1>
            </div>

        </header>

        <?php
            if(file_exists("Modulos/".$p.".php"))
                include "Modulos/".$p.".php"; /* Incluyo el principal */
            else
                echo "<br><br><i style='color:red;'>NO EXISTE ESTE RECURSO. <a style='text-decoration:none; color: red;' href='./'>Regresar</a></i><br><br>";
        ?>

<br><br><footer class="footer">
            <nav class="pie">
                <a href="http://www.uniminuto.edu/" target="_blank">Uniminuto <?=date("F j, Y");?> </a>
            </nav>
        </footer>

    </div><br><br>

</body>
</html>
