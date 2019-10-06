<?php /* En esta clase se mostraran todos lso detalles del pueblo seleccionado */
    if(isset($_GET["id"])){/* Se debe enviar el id del pueblo que se desee ver */
        $pueblo = $datos->obtenerDatosPueblo($_GET["id"]);
        $particion = explode("-","$pueblo");
        $imagen = $particion[0];
        $nombre = $particion[1];
        $descripcion = $particion[2];
        $hoteles = $particion[3];
        $restaurantes = $particion[4];
        $coordenadas = $particion[5];

        ?>    
        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="Recursos/img/<?=$imagen?>" class="card-img">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $nombre ?></h5>
                    <p class="card-text"><?= $descripcion ?></p>
                    <p class="card-text">Hoteles existentes:</p>
                    <ul>
                        <li><?= $hoteles ?></li>
                    </ul>
                    <p class="card-text">Restaurantes existentes:</p>
                    <ul>
                        <li><?= $restaurantes ?></li>
                    </ul>
                    
                </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center text-danger"><?= $nombre ?> se encuentra ubicado en</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.03982938609!2d-74.00665812529411!3d5.021518417869913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e406fdf15000d3b%3A0x3ab218bb9961424e!2sZipaquir%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1570392104799!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>

            </div>
                
        </div>

<?php
    }else{
        header("Location: ?p=principal");
    }
?>