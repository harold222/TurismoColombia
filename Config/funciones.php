<?php

@session_start();/* Me permite abrir archivos mas comodamente sin la extension.php */
@extract($_REQUEST);

require_once("conexion.php"); /* Para importar la otra clase */

class Funciones extends Base_Datos{
    
    private $conexionBase;
    private $desconectar;

    function __construct(){
        $this->conexionBase = new Base_Datos;
        $this->desconectar = new Base_Datos;
    }

    function redir($var){
        ?>
            <script>
                window.location="<?=$var?>";
            </script>
        <?php
        die();
    }
    
    function alert($txt,$type,$url){
        if($type==0)
            $t = "error";
        else if($type==1)
            $t = "success";/* Tipos de mensajes */
        else if($type==2)
            $t = "info";
        else
            $t = "info";
    
            /* Se puede cambiar el mensaje de alerta */
        echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
        echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
        echo '</script>';
    }
   

    function obtenerDatosPueblo($id): string{
        
        /* Esta funcion retornara todos los datos de un pueblo invocando otras funciones */
        $imagen = new Funciones;
        $nombre = new Funciones;
        $descripcion = new Funciones;
        $hoteles = new Funciones;
        $restaurantes = new Funciones;
        $coordenadas = new Funciones;
        
        $a =  mysqli_fetch_assoc($descripcion->obtenerDescripcionPueblo($id)); 
        $b =  mysqli_fetch_assoc($hoteles->obtenerHoteles($id));
        $c =  mysqli_fetch_assoc($restaurantes->obtenerRestaurantes($id));
        $d =  mysqli_fetch_assoc($coordenadas->obtenerCoordenadas($id));
        $e =  mysqli_fetch_assoc($nombre->obtenerNombrePueblo($id));
        $f =  mysqli_fetch_assoc($imagen->obtenerImagen($id));
        


        return $f['imagen']."-".$e['nombrePueblo']."-".$a['descripcion']."-".$b['hoteles']."-".$c['restaurantes']."-".$d['coordenadas'];
    }

    function obtenerImagen($id){
        $consulta = "SELECT imagen FROM Pueblos WHERE id = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener imagen del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerNombrePueblo($id){
        $consulta = "SELECT nombrePueblo FROM Pueblos WHERE id = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el nombre del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function  obtenerDescripcionPueblo($id){
        $consulta = "SELECT descripcion FROM Pueblos WHERE id = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerHoteles($id){
        $consulta = "SELECT hoteles FROM  MayorInformacion WHERE idPueblo = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerRestaurantes($id){
        $consulta = "SELECT restaurantes FROM  MayorInformacion WHERE idPueblo = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerCoordenadas($id){
        $consulta = "SELECT coordenadas FROM Pueblos WHERE id = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

}
?>