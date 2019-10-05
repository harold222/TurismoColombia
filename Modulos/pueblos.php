<h1 class="text-center">Pueblos</h1>

<?php
    $id = 1;

    $obtenerPueblo = new Funciones;
    $todosLosDatos = $obtenerPueblo->obtenerDatosPueblo($id);

    $particion = explode("-","$todosLosDatos");
    $nombre = $particion[0];
    $descripcion = $particion[1];
    // $hoteles = $particion[2];
    // $restaurantes = $particion[3];
    // $coordenadas = $particion[4];
?>

<div class="card-group mx-2 text-center">
  <div class="card mr-2">
    <img src="Recursos/img/3.jpg" class="card-img-top" alt="Diferentes pueblos">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><?=$nombre?></h5>
      <p class="card-text"><?=$descripcion?></p>
    </div>
    <div class="card-footer">
        <small class="text-muted"> <a href="" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
    </div>
  </div>

  <div class="card mr-2">
    <img src="Recursos/img/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><?=$nombre?></h5>
      <p class="card-text"><?=$descripcion?></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"> <a href="" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
    </div>
  </div>

  <div class="card">
    <img src="Recursos/img/3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><?=$nombre?></h5>
      <p class="card-text"><?=$descripcion?></p>
    </div>
    <div class="card-footer">
    <small class="text-muted"> <a href="" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
    </div>
  </div>
</div>
