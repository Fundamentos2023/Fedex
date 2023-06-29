<div class="row content">
    <h1 class="text-center my-5">Listado de envios</h1>
    <?php if ($listaEnvios): ?>
        <!-- tabla con listado de envios -->
        <!-- creando el formulario de envios -->
        <div class="row">
            <div class="col-md-8 my-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Detalle</th>
                            <th scope="col">Origen</th>
                            <th scope="col">Destino</th>
                            <th scope="col">Id Cliente</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaEnvios as $envio): ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $envio->id_env; ?>
                                </th>
                                <td>
                                    <?php echo $envio->detalle_env; ?>
                                </td>
                                <td>
                                    <?php echo $envio->origen_env; ?>
                                </td>
                                <td>
                                    <?php echo $envio->destino_env; ?>
                                </td>
                                <td>
                                    <?php echo $envio->fk_id_cli; ?>
                                </td>
                                <td>
                                    <!-- <a href="<? //php echo base_url() . 'envios/editarEnvio/' . $envio->id_env; ?>"
                                    class="btn btn-warning btn-sm">Editar</a> -->
                                    <a href="<?php echo site_url('envios/eliminarEnvio/') . $envio->id_env; ?>"
                                        class="btn btn-danger btn-sm">Eliminar</a>
                                    <!-- boton de ver ruta -->
                                    <a href="<?php echo site_url('envios/verRuta/') . $envio->id_env; ?>"
                                        class="btn btn-info btn-sm">Ver ruta</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else: ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning" role="alert">
                    No hay envios para registrar
                    <!-- boton hacia nuevo envio -->
                    <a href="<?php echo site_url('envios/nuevoEnvio') ?>" class="btn btn-warning btn-sm">Nuevo
                        envio</a>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
