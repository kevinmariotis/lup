<!-- Modal para mostrar datos completos -->
<div class="modal fade" id="mostrar<?php echo $resultado['cedula']; ?>" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
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
                        <div class="fw-bold">Cedula</div>
                            <?php echo $resultado['cedula']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Nombre</div>
                            <?php echo $resultado['nombres_completos']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Edad</div>
                            <?php echo $resultado['edad']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Telefono</div>
                            <?php echo $resultado['telefono_movil']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Años de experiencia</div>
                            <?php echo $resultado['anos_experiencia']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Propiedades vendidas</div>
                            <?php echo $resultado['propiedades_vendidas']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Email</div>
                            <?php echo $resultado['email']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Contraseña</div>
                            <?php echo $resultado['contrasena']; ?>
                        </div>
                    </li>
                </ol>
                <ol class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                        <div class="fw-bold">Fecha de registro</div>
                            <?php echo $resultado['fecha_registro']; ?>
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