<?php 

    class Base_Datos {

        function conexion(){
            $server = "localhost";
            $usuario = "root";
            $contraseña = "";
            $basedeDatos = "turismo";

            $conectar = mysqli_connect($server, $usuario, $contraseña, $basedeDatos) or 
            die ("Error al conectar a la base de datos");
        }

    }

?>