<div class="row content">
    <?php if ($verEnvio): ?>
        <!-- Datos del envio -->
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="text-center">Envio #
                    <?php echo $verEnvio->id_env ?>
                </h3>
            </div>
            <!-- Detalles del envio -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8 my-3">
                        <small>Detalle de envio</small>
                        <input type="text" class="form-control" name="detalle_env" placeholder="Detalles del envío"
                            value="<?php echo $verEnvio->detalle_env ?>" readonly>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </div>

        </div>

        <!-- mapa para ver la ruta -->
        <div class="col-md-12">
            <div id="mapaRuta" class="border my-3 rounded text-center" style="height: 780px;">Cargando Mapa....</div>
        </div>
    <?php else: ?>
        <!-- Alerta de que este envio no existe y boton para regresar a lista de envios -->
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    Este envio no existe...
                    <a href="<?php echo site_url('envios') ?>" class="btn btn-warning btn-sm">Regresar</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
    function initMap() {
        // Crear mapa con centro en Ecuador
        var map = new google.maps.Map(document.getElementById('mapaRuta'), {
            zoom: 6,
            center: {
                lat: -1.831239,
                lng: -78.183403
            }
        });

        // creando una ruta entre el punto de origen y el de destino
        var directionsService = new google.maps.DirectionsService;
        let directionsRenderer = new google.maps.DirectionsRenderer({
            map: map,
            suppressMarkers: true,
            //color de la ruta
            polylineOptions: {
                strokeColor: "blue",
            },
        });

        //marcadores en los puntos de origen y destino
        var marker = new google.maps.Marker({
            position: <?php echo $verEnvio->origen_env ?>,
            map: map,
            title: 'Origen'
        });
        var marker = new google.maps.Marker({
            position: <?php echo $verEnvio->destino_env ?>,
            map: map,
            title: 'Destino'
        });

        //ruta entre los puntos de origen y destino
        var request = {
            origin: <?php echo $verEnvio->origen_env ?>,
            destination: <?php echo $verEnvio->destino_env ?>,
            travelMode: google.maps.TravelMode.DRIVING,
            optimizeWaypoints: true,
        };

        //mostrar ruta en el mapa
        directionsService.route(request, function (result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsRenderer.setDirections(result);
            }
        });


    }
</script>
