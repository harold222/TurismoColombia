<h1>Pueblos</h1>

<?php
    $id = 1;

    $obtenerPueblo = new Funciones;
    $todosLosDatos = $obtenerPueblo->obtenerDatosPueblo($id);

    $particion = explode("-","$todosLosDatos");
    $nombre = $particion[0];
    $descripcion = $particion[1];
    $hoteles = $particion[2];
    $restaurantes = $particion[3];
    $coordenadas = $particion[4];
?>

<h1>El nombre del pueblo es <?=$nombre?></h1>

<h3>La descripcion del pueblo es <?=$descripcion?></h3>

<p>Cuenta con hoteles como <?=$hoteles?></p>
<p>Cuenta con restaurantes como <?=$restaurantes?></p>
<p>y sus coordenadas son <?=$coordenadas?></p>
