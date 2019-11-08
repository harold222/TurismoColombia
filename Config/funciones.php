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
   
    function obtenerDatosPueblo($id): string{
        $imagen = new Funciones;
        $nombre = new Funciones;
        $descripcion = new Funciones;
        $coordenadas = new Funciones;
        $departamento = new Funciones;
        
        $f =  mysqli_fetch_assoc($imagen->obtenerImagen($id, 0));
        $e =  mysqli_fetch_assoc($nombre->obtenerNombrePueblo($id, 0));
        $a =  mysqli_fetch_assoc($descripcion->obtenerDescripcionPueblo($id, 0)); 
        $d =  mysqli_fetch_assoc($coordenadas->obtenerCoordenadas($id));
        $g = mysqli_fetch_assoc($departamento->obtenerDepartamento($id));

        $consulta = "SELECT departamento FROM Departamento WHERE id = '$g[idDepartamento]'"; //obtengo el nombre del departamento
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el nombre del departamento");
        $this->desconectar->CerrarConexion($this->conexionBase->conexion());

        $depart = mysqli_fetch_assoc($resultado);

        return $f['imagen']."*".$e['nombrePueblo']."*".$a['descripcion']."*".$d['coordenadas']."*".$depart['departamento'];
    }

    function obtenerImagen($id, $iddepartamento){
        if($iddepartamento == 0){/* Es decir no existe busqueda por categoria */
            $consulta = "SELECT imagen FROM Pueblos WHERE id = '$id'"; /* Busco solo por su id */
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener imagen del pueblo");
        }else{ /* Busco por sus departamentos */
            $consulta = "SELECT imagen FROM Pueblos WHERE id = '$id' AND idDepartamento = '$iddepartamento'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener imagen del pueblo");
        }

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerNombrePueblo($id, $iddepartamento){
        if($iddepartamento == 0){
            $consulta = "SELECT nombrePueblo FROM Pueblos WHERE id = '$id'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el nombre del pueblo");        
        }else{
            $consulta = "SELECT nombrePueblo FROM Pueblos WHERE id = '$id' AND idDepartamento = '$iddepartamento'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el nombre del pueblo");        
        }

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function  obtenerDescripcionPueblo($id, $iddepartamento){
        if($iddepartamento == 0){
            $consulta = "SELECT descripcion FROM Pueblos WHERE id = '$id'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");
        }else{
            $consulta = "SELECT descripcion FROM Pueblos WHERE id = '$id' AND idDepartamento = '$iddepartamento'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener la descripcion del pueblo");
        }

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerHoteles($id){
        $consulta = "SELECT hoteles FROM  MayorInformacion WHERE idPueblo = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener los hoteles del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerRestaurantes($id){
        $consulta = "SELECT restaurantes FROM  MayorInformacion WHERE idPueblo = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener los restaurantes del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerCoordenadas($id){
        $consulta = "SELECT coordenadas FROM Pueblos WHERE id = '$id'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener las coordenadas del pueblo");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function obtenerDepartamento($id){
        if($id == 0){/* Significa que quiero mostrar todos */
            $consulta = "SELECT idDepartamento FROM Pueblos";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el departamento del pueblo");
        }else{
            $consulta = "SELECT idDepartamento FROM Pueblos WHERE id = '$id'";
            $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el departamento del pueblo");
        }

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

    function pueblosPorDepartamento($iddepartamento){/* Funcion para saber el numero de pueblos existentes en un departamento */
        $consulta = "SELECT id FROM Pueblos WHERE idDepartamento = '$iddepartamento'";
        $resultado = mysqli_query($this->conexionBase->conexion(),$consulta) or die ("Error al obtener el numero de departamentos");

        $this->desconectar->CerrarConexion($this->conexionBase->conexion());
        return $resultado;
    }

}
?>