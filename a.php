
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        require_once("Config/conexion.php");

        $conexionBase = new Base_Datos;/* LLamo a la case para cargar sus metodos*/
        $conexionBase->conexion();

        
    ?>


</body>
</html>