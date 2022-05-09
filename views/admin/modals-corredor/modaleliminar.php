<!-- Modal para mostrar datos completos -->
<div class="modal fade" id="eliminar<?php echo $resultado['cedula']; ?>" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mostrarLabel">¿Seguro que quieres eliminar este usuario?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./admin-corredores.php" method="post">
                    <ol class="list-group my-2">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Cedula</div>
                                <input class="border-0" name="cedula_eliminar" value="<?php echo $resultado['cedula']; ?>">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">No, Cancelar</button>
                <button type="submit" name="eliminar_modal" class="btn btn-danger" data-bs-dismiss="modal">Si , Eliminar</button>
            </form>
            </div>
        </div>
    </div>
</div>