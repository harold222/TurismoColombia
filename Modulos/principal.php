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
        <article class="article">
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
            <h3>Zipaquira</h3>
            <h2>Lugar bello de cundinamarca</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dignissimos iste perferendis incidunt eos molestiae, rerum necessitatibus porro, pariatur esse veniam rem possimus numquam repudiandae? Nobis vero, suscipit deleniti dolores necessitatibus quos inventore voluptatum aut accusamus excepturi quibusdam culpa cupiditate, alias repellat perferendis sint. Ea inventore quam quibusdam asperiores quis.</p>
            <button type="button" class="btn btn-info">Ver mas</button>
        </article>

        <article class="article">
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
            <h3>Caqueza</h3>
            <h2>Lugar bello de cundinamarca</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dignissimos iste perferendis incidunt eos molestiae, rerum necessitatibus porro, pariatur esse veniam rem possimus numquam repudiandae? Nobis vero, suscipit deleniti dolores necessitatibus quos inventore voluptatum aut accusamus excepturi quibusdam culpa cupiditate, alias repellat perferendis sint. Ea inventore quam quibusdam asperiores quis.</p>
            <button type="button" class="btn btn-info">Ver mas</button>
        </article>

        <article class="article">
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
            <h3>Zipaquira</h3>
            <h2>Lugar bello de cundinamarca</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dignissimos iste perferendis incidunt eos molestiae, rerum necessitatibus porro, pariatur esse veniam rem possimus numquam repudiandae? Nobis vero, suscipit deleniti dolores necessitatibus quos inventore voluptatum aut accusamus excepturi quibusdam culpa cupiditate, alias repellat perferendis sint. Ea inventore quam quibusdam asperiores quis.</p>
            <button type="button" class="btn btn-info">Ver mas</button>
        </article>

        <article class="article">
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
            <h3>Zipaquira</h3>
            <h2>Lugar bello de cundinamarca</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dignissimos iste perferendis incidunt eos molestiae, rerum necessitatibus porro, pariatur esse veniam rem possimus numquam repudiandae? Nobis vero, suscipit deleniti dolores necessitatibus quos inventore voluptatum aut accusamus excepturi quibusdam culpa cupiditate, alias repellat perferendis sint. Ea inventore quam quibusdam asperiores quis.</p>
            <button type="button" class="btn btn-info">Ver mas</button>
        </article>

        <nav class="navegacion">
            <a href="">Inicio</a>
            <a href="">1</a>
            <a href="">2</a>
            <a href="">Final</a>
        </nav>
    </div>

    <aside class="aside">
        <!-- Puede ser categorias de lugares como cundinamarca, bla -->
        <div class="publicidad">
            <h4>Region Amazonica</h4>
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
        </div>

        <div class="publicidad">
            <h4>Region pacifica</h4>
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
        </div>

        <div class="publicidad">
            <h4>Region caribe</h4>
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
        </div>

        <div class="publicidad">
            <h4>Region insular</h4>
            <a href=""><img src="Recursos/img/3.jpg" alt=""></a>
        </div>
    </aside>
</section>
