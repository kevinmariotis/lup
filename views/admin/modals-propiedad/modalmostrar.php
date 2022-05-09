<!-- Modal para mostrar datos completos -->
<div class="modal fade" id="mostrar<?php echo $resultado['codigo']; ?>" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mostrarLabel">Registrar Corredores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Codigo</div>
                            <?php echo $resultado['codigo']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Nombre</div>
                            <?php echo $resultado['nombre']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Direccion</div>
                            <?php echo $resultado['direccion']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Precio</div>
                            <?php echo $resultado['precio']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Ciudad</div>
                            <?php echo $resultado['ciudad']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Habitaciones</div>
                            <?php echo $resultado['habitaciones']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Baños</div>
                            <?php echo $resultado['baños']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Garaje</div>
                            <?php echo $resultado['garaje']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Area de construccion</div>
                            <?php echo $resultado['area'],' M²'; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Estrato</div>
                            <?php echo $resultado['estrato']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Estado</div>
                            <?php echo $resultado['estado']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Tipo de propiedad</div>
                            <?php echo $resultado['tipo']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Tipo de negocio</div>
                            <?php echo $resultado['tipo_negocio']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Fecha de publicacion</div>
                            <?php echo $resultado['fecha_publicacion']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto" style="width: 100%;">
                            <div class="fw-bold">Descripcion de la zona</div>
                            <?php echo $resultado['descripcion']; ?>
                        </div>
                    </li>   
                </ol>
                
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>