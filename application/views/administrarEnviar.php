<div class="row content">
    <div class="col-md-2">
    </div>
    <h1 class="text-center fs-4 text-primary"><ins>Administrar Envíos</ins></h1>
    <div class="col-md-12">
        <form method="POST" action="<?php echo site_url('envios/insertarEnvio') ?>">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 my-3">
                    <small>Cliente</small>
                    <select required class="form-control" name="fk_id_cli" id="fk_id_cli">
                        <option value=""> -- Seleccione un cliente -- </option>
                        <?php foreach ($listaClientes as $cliente): ?>
                            <option value="<?php echo $cliente->id_cli ?>"><?php echo '# ' . $cliente->id_cli . ' - ' . $cliente->nombres_cli . ' ' . $cliente->apellidos_cli ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 my-3">
                    <small>Detalle de envio</small>
                    <input type="text" class="form-control" name="detalle_env" placeholder="Detalles del envío!"
                        required>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <hr>
            <!-- Mapa origen de administrador de envio -->
            <div class="row container">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <small>Punto de origen:</small>
                    </div>
                    <div class="col-md-9 my-3">
                        <input readonly id="origen_env" type="text" name="origen_env" class="form-control"
                            style="width: 100%; height: 30px;" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="mapaOrigen" class="border my-3 rounded text-center" style="height: 240px;">Cargando
                        Mapa
                        origen...</div>
                </div>
            </div>
            <hr>
            <!-- Mapa destino de administradpor de envio-->
            <div class="row container">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <small>Punto de destino:</small>
                    </div>
                    <div class="col-md-9 my-3">
                        <input readonly id="destino_env" type="text" name="destino_env" class="form-control"
                            style="width: 100%; height: 30px;" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="mapaDestino" class="border my-3 rounded text-center" style="height: 240px;">Cargando
                        Mapa
                        destino...</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 my-3">
                    <button type="submit" class="btn btn-primary col-md-12">Registrar Envio</button>
                </div>
            </div>
        </form>
        <!-- fin form con input -->

    </div>

</div>
<div class="col-md-2">
</div>
</div>

<script>
    function initMap() {
        //Mapa General de clientes
        var mapa1 = new google.maps.Map(mapaOrigen, {
            zoom: 7,
            center: {
                lat: -1.831239,
                lng: -78.183403
            }
        });

        //Mapa para arrastrar
        var mapa2 = new google.maps.Map(mapaDestino, {
            zoom: 7,
            center: {
                lat: -1.831239,
                lng: -78.183403
            },
        });


        //Marcador draggeable en el mapa1 -draggeable nos permite arrastrar el marcador
        var marker1 = new google.maps.Marker({
            map: mapa1,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {
                lat: -1.831239,
                lng: -78.183403
            }
        });

        //Marcador draggeable en el mapa2
        var marker2 = new google.maps.Marker({
            map: mapa2,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {
                lat: -1.831239,
                lng: -80.183403
            }
        });

        //Input para origen y destino
        var inputOrigen = document.getElementById('origen_env');
        var inputDestino = document.getElementById('destino_env');

        //Llenando los inputs con la posicion por defecto
        inputOrigen.value = JSON.stringify(marker1.getPosition());
        inputDestino.value = JSON.stringify(marker2.getPosition());

        //Listener para llenar los inputs cuando se arrastre el marcador
        google.maps.event.addListener(marker1, 'dragend', function () {
            inputOrigen.value = JSON.stringify(marker1.getPosition());
        });
        google.maps.event.addListener(marker2, 'dragend', function () {
            inputDestino.value = JSON.stringify(marker2.getPosition());
        });



    }
</script>
