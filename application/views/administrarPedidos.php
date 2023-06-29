<div class="row content">
    <div class="col-md-2">
    </div>
    <?php if ($listaPedidos): ?>
        <div class="row">
            <h1 class="text-center fs-4 text-primary"><ins>Administrar Pedidos</ins></h1>
            <div class="col-md-6">
                <form method="POST" action="<?php echo site_url('pedidos/insertarPedido') ?>">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 my-3">
                            <input type="text" class="form-control" name="descripcion_ped"
                                placeholder="Descripcion del Pedido" required>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>

                    <!-- Mapa draggeable -->
                    <div class="row container">
                        <div class="col-md-12">
                            <div id="mapaArrastrar" class="border my-3 rounded text-center" style="height: 300px;">Cargando
                                Mapa
                                arrastrar....</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 my-3">
                            <input readonly id="ubicacion_ped" type="text" name="ubicacion_ped" class="form-control"
                                style="width: 100%; height: 45px;" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 my-3">
                            <button type="submit" class="btn btn-primary col-md-12">Registrar Pedido</button>
                        </div>
                    </div>
                </form>
                <!-- fin form con input -->

            </div>
            <div class="col-md-6">
                <div id="mapaPedidos"
                    class="border my-3 rounded text-center display-4 d-flex justify-content-center align-items-center"
                    style="height: 65vh;">Refresca la página si no puedes ver el mapa...
                </div>
            </div>
        </div>
    <?php else: ?>
        <h1 class="text-center fs-4 text-primary"><ins>No hay pedidos registrados</ins></h1>
    <?php endif; ?>
    <div class="col-md-2">
    </div>
</div>

<script>
    function initMap() {
        //Mapa General de pedidos
        var map = new google.maps.Map(mapaPedidos, {
            zoom: 7,
            center: {
                lat: -1.831239,
                lng: -78.183403
            }
        });

        //Mapa para arrastrar
        var mapDrag = new google.maps.Map(mapaArrastrar, {
            zoom: 7,
            center: {
                lat: -1.831239,
                lng: -78.183403
            },
        });

        //Input para ubicacion
        var input = document.getElementById('ubicacion_ped');

        //Marcador para arrastrar color azul
        var markerDrag = new google.maps.Marker({
            position: {
                lat: -1.831239,
                lng: -78.183403
            },
            map: mapDrag,
            draggable: true,
            title: 'Arrastra el marcador para ubicar al pedido',
            icon: {
                url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
            }
        });

        // para llenar el input con la ubicacion por defecto
        input.value = JSON.stringify(markerDrag.getPosition());

        // Evento para arrastrar el marcador y obtener la ubicacion
        google.maps.event.addListener(markerDrag, 'dragend', function (evt) {
            input.value = JSON.stringify(markerDrag.getPosition());
        });

        // Mostrar pedidos en el mapa
        let iterationMarker;
        <?php if ($listaPedidos): ?>
            <?php foreach ($listaPedidos as $pedido): ?>
                iterationMarker = new google.maps.Marker({
                    position: <?php echo $pedido->ubicacion_ped ?>,
                    map: map,
                    title: '<?php echo $pedido->descripcion_ped ?>',
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                    }
                });
            <?php endforeach; ?>
        <?php else: ?>

        <?php endif; ?>

    }
</script>
