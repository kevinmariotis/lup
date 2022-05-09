<!-- Modal para mostrar datos completos -->
<div class="modal fade" id="eliminar<?php echo $props['codigo']; ?>" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mostrarLabel">¿Seguro que quieres eliminar esta propiedad?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="perfil-corredor.php" method="post">
                    <ol class="list-group my-2">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Codigo</div>
                                <input class="border-0" name="codigo_eliminar" value="<?php echo $props['codigo']; ?>">
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