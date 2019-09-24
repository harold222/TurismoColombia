<?php

include 'conexion.php';/* Incluyo el archivo de las conexiones a la base de datos */

@session_start();/* Me permite abrir archivos mas comodamente sin la extension.php */
@extract($_REQUEST);

function redir($var){
    ?>
        <script>
            window.location="<?=$var?>";
        </script>
    <?php
    die();
}

function alert($txt,$type,$url){
    //"error", "success" and "info".
    if($type==0)
        $t = "error";
    elseif($type==1)
        $t = "success";/* Tipos de mensajes */
    elseif($type==2)
        $t = "info";
    else
        $t = "info";

        /* Se puede cambiar el mensaje de alerta */
    echo '<script>swal({ title: "Alerta", text: "'.$txt.'", icon: "'.$t.'"});';
    echo '$(".swal-button").click(function(){ window.location="?p='.$url.'"; });';
    echo '</script>';
}

function fecha($fecha){
    $e = explode("-",$fecha);
    $year = $e[0];
    $month = $e[1];
    $e2 = explode(" ",$e[2]);
    $day = $e2[0];
    $time = $e2[1];   /* Se puede usar esta funcion para guardar la fecha en la base de datos */
    $e3 = explode(":",$time);
    $hour = $e3[0];
    $mins = $e3[1];
    return $day."/".$month."/".$year." ".$hour.":".$mins;
}

/* Se puede ir colocando aca mas funciones */

?>