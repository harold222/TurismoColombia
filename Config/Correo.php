<?php
class Correo{
    private $nombre;
    private $telefono;
    private $correo;
    private $mensaje;

    function __construct($name, $tele, $cor, $msm){
        $this->nombre =  $name;
        $this->telefono= $tele;
        $this->correo = $cor;
        $this->mensaje = $msm;
        $this->enviarCorreo();
    }

    function enviarCorreo(){
        $destino= "correoPruebas@gmail.com"; //a que correo se enviara
        $contenido = "Nombre ". $this->nombre ."\nCorreo: ".$this->correo . "\nTelefono: ".$this->telefono . "\n\n\tEl mensaje que ha dejado es: ".$this->mensaje;
        mail($destino,"Desde el formulario del contacto", $contenido);
        // Funcion mail solo sirve desde internet
        header("Location:../?p=principal");
    }
}

$abrir = new Correo($_POST["nombre"], $_POST["telefono"], $_POST["correo"],  $_POST["mensaje"]);

?>