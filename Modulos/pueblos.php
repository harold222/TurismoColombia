<h1 class="text-center">Pueblos</h1>

<?php
    // $id = 1;

    // $obtenerPueblo = new Funciones;
    // $todosLosDatos = $obtenerPueblo->obtenerDatosPueblo($id);

    // $particion = explode("-","$todosLosDatos");
    // $nombre = $particion[0];
    // $descripcion = $particion[1];
    // $hoteles = $particion[2];
    // $restaurantes = $particion[3];
    // $coordenadas = $particion[4];
?>

<div class="card-group mx-2 text-center">
  <?php
    for ($i=1; $i < 4; $i++) { 
      $resultImg = mysqli_fetch_assoc($datos-> obtenerImagen($i));
      $resultNombre = mysqli_fetch_assoc($datos->obtenerNombrePueblo($i));
      $resultdescrip = mysqli_fetch_assoc($datos->obtenerDescripcionPueblo($i));
  ?>
  <div class="card mr-2">
    <img src="Recursos/img/<?=$resultImg['imagen']?>" class="card-img-top" alt="Diferentes pueblos">
    <div class="card-body">
      <h5 class="card-title text-uppercase"><?= $resultNombre['nombrePueblo'] ?></h5>
      <p class="card-text"><?= $resultdescrip['descripcion'] ?></p>
    </div>
    <div class="card-footer">
        <small class="text-muted"> <a href="?p=pueblo&id=<?= $i ?>" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
    </div>
  </div>
<?php
  }
?>

</div>

  

<nav class="navegacion">
    <a href="">Inicio</a>
    <a href="">1</a>
    <a href="">2</a>
    <a href="">Final</a>
</nav>
