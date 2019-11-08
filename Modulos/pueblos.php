<br><h1 class="text-center display-4 text-uppercase text-light animated infinite flash">Pueblos</h1>

<?php
  if(isset($_GET['departamento'])){ 
    $cantidad = $datos->pueblosPorDepartamento($_GET['departamento']);
    //recorro cado uno de las posiciones
    while($row = $cantidad->fetch_array()){
      $rows[] = $row;/* Paso los valores de ids a un array */
    }

    if(empty($rows)){ /* Si no existen pueblos para ese departamento */
      echo("<h1 class='text-center text-danger p-5'>No existen pueblos para este departamento</h1>");
    }else{/* Si existe mas de un pueblo para este departamento */
    ?>
    <div class="card-columns mx-3" >
        <?php
          foreach($rows as $row){ 
            $resultImg = mysqli_fetch_assoc($datos-> obtenerImagen($row['id'],$_GET['departamento']));
            $resultNombre = mysqli_fetch_assoc($datos->obtenerNombrePueblo($row['id'], $_GET['departamento']));
            $resultdescrip = mysqli_fetch_assoc($datos->obtenerDescripcionPueblo($row['id'], $_GET['departamento']));
        ?>

        <div class="card wow rollIn" data-wow-offset = "30" data-wow-iteration = "1">
          <img src="Recursos/img/<?=$resultImg['imagen']?>" class="card-img-top" alt="Diferentes pueblos">
          <div class="card-body">
            <h5 class="card-title text-uppercase"><?= $resultNombre['nombrePueblo'] ?></h5>
            <p class="card-text"><?= $resultdescrip['descripcion'] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-muted"> <a href="?p=PuebloEscogido&id=<?=  $row['id'] ?>" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
          </div>
        </div>

      <?php
        }
      ?>
    </div>
  <?php
    }/* Cierro el for que me recorre los departamentos */
  }else{/* Si no existen criterios de busqueda */
?>
  <div class="card-columns mx-3">
    <?php
      for ($i=1; $i < 14; $i++) { 
        $resultImg = mysqli_fetch_assoc($datos-> obtenerImagen($i,0));
        $resultNombre = mysqli_fetch_assoc($datos->obtenerNombrePueblo($i,0));
        $resultdescrip = mysqli_fetch_assoc($datos->obtenerDescripcionPueblo($i,0));
    ?>

    <div class="card wow rollIn" data-wow-offset = "30" data-wow-iteration = "1">
      <img src="Recursos/img/<?=$resultImg['imagen']?>" class="card-img-top" alt="Diferentes pueblos">
      <div class="card-body">
        <h5 class="card-title text-uppercase"><?= $resultNombre['nombrePueblo'] ?></h5>
        <p class="card-text"><?= $resultdescrip['descripcion'] ?></p>
      </div>
      <div class="card-footer">
        <small class="text-muted"> <a href="?p=PuebloEscogido&id=<?= $i ?>" class="btn btn-outline-danger btn-block">Ver mas</a> </small>
      </div>
    </div>

  <?php
    }
  ?>
</div>

<?php /* Si no existe un departamento como busqueda */
  }
?>
