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
<!-- Libreria mapbox para la visualizacion del mapa -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.3.2/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.3.2/mapbox-gl.css' rel='stylesheet' />

        <div class="card my-3 contenedorPueblos">
            <div class="row no-gutters">

                <div class="col-md-5 wow slideInLeft" data-wow-offset = "30" data-wow-iteration = "1">
                    <img src="Recursos/img/<?=$imagen?>" class="card-img mt-3 ml-2">
                </div>

                <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title display-4 text-center cambiarTitulo wow slideInRight" data-wow-offset = "30" data-wow-iteration = "1">
                        <?= $nombre ?> - <?= $departament ?>
                    </h5>
                    <p class="card-text text-justify"><?= $descripcion ?></p>

                                <div class="container">
                                    <div class="row">
                                        <div class ="col-12">
                                            <div class="list-group wow slideInUp" data-wow-offset = "30" data-wow-iteration = "1" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action text-center" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Ver hoteles existentes</a>
                                                <a class="list-group-item list-group-item-action text-center" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Ver restaurantes existentes</a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                                                    <ul class="list-group mt-2 text-center" >
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

        <?php
            $subcoordenadas = explode(",","$coordenadas"); /* separo las dos */
            $latitud = $subcoordenadas[0]; /* obtengo la posicion en el mapa del pueblo */
            $longitud = $subcoordenadas[1];
        ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="map"></div><!-- Aca ira el mapa del pueblo -->
                </div>
            </div>
        </div>

        <script>
            /* api key unica para la aplicacion */
            mapboxgl.accessToken = 'pk.eyJ1IjoiaGFyb2xkMjIyIiwiYSI6ImNrMWk2djlhNDFtejEzZG12dTh4YjRkZWQifQ._tkCay83oFzd0BTTdw4DDA';
            let map = new mapboxgl.Map({
                container: 'map', //lugar donde aarecera el mapa
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [<?= $longitud ?>,<?= $latitud ?>], /* Coordenadas del pueblo */
                zoom: 14
            });

            let element = document.createElement('div') //creo un div para el marcaodor
            element.className = 'marker' //añado la clase

            let marker = new mapboxgl.Marker(element).setLngLat({
                lng: <?= $longitud ?>, //lo posiciono en las mismas coordenadas
                lat: <?= $latitud ?>
            }).addTo(map)
        </script>
<?php
    }else{
        header("Location: ?p=principal");
    }
?>