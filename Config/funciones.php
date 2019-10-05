<?php

@session_start();/* Me permite abrir archivos mas comodamente sin la extension.php */
@extract($_REQUEST);

require_once("conexion.php"); /* Para importar la otra clase */

class Funciones extends Base_Datos{
    
    private $conexionBase;

    function __construct(){
        $this->conexionBase = new Base_Datos;
        $this->conexionBase->conexion();
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
        
        $conexionBase = new Base_Datos;
        $conexionBase->conexion();/* Invoco la funcion de la otra clase como hija */

        /* Esta funcion retornara todos los datos de un pueblo invocando otras funciones */
        $nombre = new Funciones;
        $descripcion = new Funciones;
        $hoteles = new Funciones;
        $restaurantes = new Funciones;
        $coordenadas = new Funciones;
        
        $a = $descripcion->obtenerDescripcionPueblo($id); 
        $b = $hoteles->obtenerHoteles($id);
        $c = $restaurantes->obtenerRestaurantes($id);
        $d = $coordenadas->obtenerCoordenadas($id);
        $e = $nombre->obtenerNombrePueblo($id);
       
        /* Retorno todo un mensaje y en la clase que necesite estos datos solo hago un explode de - */
        /* return $descripcion."-".$hoteles."-".$restaurantes."-".$coordenadas; */
        return $e."-".$a."-".$b."-".$c."-".$d;
    }

    function  obtenerNombrePueblo($id): string{
        
        /* $this->conexionBase con esto utilizo para hacer las llamadas a la base de datos */

        /* Creo el metodo para obtener la descripcion */
        return "caqueza";
    }

    function  obtenerDescripcionPueblo($id): string{
        
        /* $this->conexionBase con esto utilizo para hacer las llamadas a la base de datos */

        /* Creo el metodo para obtener la descripcion */
        return "es un lugar bonito";
    }

    function obtenerHoteles($id){


        return "ninguno";
    }

    function obtenerRestaurantes($id){
        

        return "no se";
    }

    function obtenerCoordenadas($id){
        

        return "125478.212 145";
    }

    


}
?>