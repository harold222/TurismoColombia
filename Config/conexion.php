<?php 

    class Base_Datos {

        public function conexion(){
            $server = "localhost";
            $usuario = "root";
            $contraseña = "";
            $basedeDatos = "turismo";

            $conectar = mysqli_connect($server, $usuario, $contraseña, $basedeDatos) or 
            die ("Error al conectar a la base de datos");
            return $conectar;
        }

        public function CerrarConexion($conectar){
            mysqli_close($conectar);
        }

    }

    class Objeto{}

?>