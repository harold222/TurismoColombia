<?php /* En esta clase se mostraran todos lso detalles del pueblo seleccionado */
    if(isset($_GET["id"])){/* Se debe enviar el id del pueblo que se desee ver */
        $pueblo = $datos->obtenerDatosPueblo($_GET["id"]);
        
        $hotel = $datos->obtenerHoteles($_GET["id"]);//obtengo la lista de hoteles
        $restaurant = $datos->obtenerRestaurantes($_GET["id"]);//obtengo la lista de restaurantes
        
        while($row = $hotel->fetch_array()){
            $rows[] = $row;
        }

        while($row2 = $restaurant->fetch_array()){
            $rows2[] = $row2;
        }

        $particion = explode("*","$pueblo");
        $imagen = $particion[0];
        $nombre = $particion[1];
        $descripcion = $particion[2];
        $coordenadas = $particion[3];
        $departament = $particion[4];

        ?>    
        <div class="card my-3 contenedorPueblos">
            <div class="row no-gutters">

                <div class="col-md-5">
                    <img src="Recursos/img/<?=$imagen?>" class="card-img mt-3">
                </div>

                <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title display-4 text-center cambiarTitulo"><?= $nombre ?> - <?= $departament ?></h5>
                    <p class="card-text text-justify"><?= $descripcion ?></p>

                                <div class="container">
                                    <div class="row">
                                        <div class ="col-12">
                                            <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action text-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Ver hoteles existentes</a>
                                                <a class="list-group-item list-group-item-action text-center" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ver restaurantes existentes</a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                    <ul class="list-group mt-2 text-center">
                                                    <?php
                                                        foreach($rows as $row){ /* Recorro todos lo hoteles existentes en dicho pueblo*/
                                                    ?>
                                                        <li class="list-group-item"><?= $row['hoteles']?></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    </ul>
                                                </div>

                                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                                            <ul class="list-group mt-2 text-center"><!-- Al hacer click llamo a  esta clase -->
                                                <?php
                                                    foreach($rows2 as $row2){
                                                ?>
                                                    <li class="list-group-item"><?= $row2['restaurantes']?></li>
                                                <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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