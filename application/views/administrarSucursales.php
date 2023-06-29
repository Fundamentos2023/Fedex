<div class="row content">
    <div class="col-md-2">
    </div>
    <?php if ($listaSucursales): ?>
        <div class="row">
            <h1 class="text-center fs-4 text-primary"><ins>Administrar Sucursales</ins></h1>
            <div class="col-md-6">
                <form method="POST" action="<?php echo site_url('sucursales/insertarSucursal') ?>">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 my-3">
                            <input type="text" class="form-control" name="nombre_suc" placeholder="Nombre de Sucursal"
                                required>
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
                            <input readonly id="ubicacion_suc" type="text" name="ubicacion_suc" class="form-control"
                                style="width: 100%; height: 45px;" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 my-3">
                            <button type="submit" class="btn btn-primary col-md-12">Registrar Sucursal</button>
                        </div>
                    </div>
                </form>
                <!-- fin form con input -->

            </div>
            <div class="col-md-6">
                <div id="mapaSucursales"
                    class="border my-3 rounded text-center display-4 d-flex justify-content-center align-items-center"
                    style="height: 65vh;">Refresca la página si no puedes ver el mapa...
                </div>
            </div>
        </div>
    <?php else: ?>
        <h1 class="text-center fs-4 text-primary"><ins>No hay sucursal registrado</ins></h1>
    <?php endif; ?>
    <div class="col-md-2">
    </div>
</div>

<script>
    function initMap() {
        //Mapa General de Sucursales
        var map = new google.maps.Map(mapaSucursales, {
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
        var input = document.getElementById('ubicacion_suc');

        //Marcador para arrastrar color azul
        var markerDrag = new google.maps.Marker({
            position: {
                lat: -1.831239,
                lng: -78.183403
            },
            map: mapDrag,
            draggable: true,
            title: 'Arrastra el marcador para ubicar la sucursal',
            icon: {
                url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
            }
        });

        // para llenar el input con la ubicacion por defecto
        input.value = JSON.stringify(markerDrag.getPosition());

        // Evento para arrastrar el marcador y obtener la ubicacion
        google.maps.event.addListener(markerDrag, 'dragend', function (evt) {
            input.value = JSON.stringify(markerDrag.getPosition());
        });

        // Mostrar sucursales en el mapa
        let iterationMarker;
        <?php if ($listaSucursales): ?>
            <?php foreach ($listaSucursales as $sucursal): ?>
                iterationMarker = new google.maps.Marker({
                    position: <?php echo $sucursal->ubicacion_suc ?>,
                    map: map,
                    title: '<?php echo $sucursal->nombre_suc; ?>',
                    icon: {
                        url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                    }
                });
            <?php endforeach; ?>
        <?php else: ?>

        <?php endif; ?>

    }
</script>
