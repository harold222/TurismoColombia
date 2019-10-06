<?php 

	$exibirModal = false;
  	if(!isset($_COOKIE["mostrarModal"])){/* Creo una cookie para el tiempo en que mostrare un mensaje */
		//$expirar = 3600; // muestra cada 1 hora
		$expirar = 10800; // muestra cada 3 horas
		//$expirar = 21600; //muestra cada 6 horas
		//$expirar = 43200; //muestra cada 12 horas
		//$expirar = 86400;  // muestra cada 24 horas
		setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
		$exibirModal = true;
    }
    
?>

<div class="modal" id="modalInicios" role="dialog">
    <div class="modal-dialog"><!-- Ventana modal que implemente la libreria de bootstrap -->
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title">Bienvenidos a Colombia Travel</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body"> 
                <strong>En colombia existen muchos lugares culturales para poder visitar, si quieres conocer mas, te invito a ver este video.</strong>
                <div class="content-video"><!-- integro un video de youtube -->
                    <iframe src="https://www.youtube.com/embed/_nDbS5gqKXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php
    if($exibirModal == true) {?><!-- Cuando se complete el tiempo de la cookie -->
        <script>
            $(document).ready(function(){
                jQuery.noConflict(); /* Por medio de Jquery cargo el modal */
                jQuery('#modalInicios').modal('show'); 
            });
        </script>
<?php
    }
?> 

<section class="section">

    <div class="articulos">
        <?php
        for ($i=1; $i < 4; $i++) {
            $resultImg = mysqli_fetch_assoc($datos-> obtenerImagen($i));
            $resultNombre = mysqli_fetch_assoc($datos->obtenerNombrePueblo($i));
            $resultdescrip = mysqli_fetch_assoc($datos->obtenerDescripcionPueblo($i));
            ?>
            <article class="article">
                <a href="?p=pueblo&id=<?= $i ?>"><img src="Recursos/img/<?=$resultImg['imagen']?>" alt="Imagen del pueblo"></a>
                    <h3><?= $resultNombre['nombrePueblo'] ?></h3>
                    <h2>Lugar bello de cundinamarca</h2> <br>
                    <p><?= $resultdescrip['descripcion'] ?></p>
                    <button type="button" class="btn btn-info">Ver mas</button>
                </article>
        <?php
            }
        ?>

        
    </div>

    <aside class="aside">
        <!-- Puede ser categorias de lugares como cundinamarca, bla -->
        <div class="publicidad text-center">
            <h5>Departamento Cundinamarca</h5>
            <a href=""><img src="Recursos/img/cundinamarca.jpg"  width="100%" height="220px" alt=""></a>
        </div>

        <div class="publicidad">
            <h5>Departamento Meta</h5>
            <a href=""><img src="Recursos/img/meta.jpg" width="100%" height="220px" alt=""></a>
        </div>

        <div class="publicidad">
            <h5>Departamento Antioquia</h5>
            <a href=""><img src="Recursos/img/anqtioquia.jpg" width="100%" height="220px" alt=""></a>
        </div>

        <div class="publicidad">
            <h5>Departamento Casanare</h5>
            <a href=""><img src="Recursos/img/casanare.jpg" width="100%" height="220px" alt=""></a>
        </div>
    </aside>
</section>
