<!-- Modal -->
<div class="modal fade" id="editar<?php echo $resultado['cedula']; ?>" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registroLabel">Registrar Corredores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de registro -->
                <form action="./admin-corredores.php" method="post">
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="cedula" placeholder="Cedula" value="<?php echo $resultado['cedula']; ?>" required>
                        <label>Cedula</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="nombre" placeholder="nombre" value="<?php echo $resultado['nombres_completos']; ?>" required>
                        <label>Nombre Completo</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="edad" placeholder="edad" min="0" value="<?php echo $resultado['edad']; ?>" required>
                        <label>Edad</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="text" class="form-control" name="telefono" placeholder="telefono" value="<?php echo $resultado['telefono_movil']; ?>" required>
                        <label>Numero de telefono</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="años_experiencia" placeholder="años de experiencia" min="0" value="<?php echo $resultado['anos_experiencia']; ?>" required>
                        <label>Años de experiencia</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="number" class="form-control" name="propiedades_vendidas" placeholder="propiedades vendidas" min="0" value="<?php echo $resultado['propiedades_vendidas']; ?>" required>
                        <label>Propiedades vendidas</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="date" class="form-control" name="fecha_registro" placeholder="Fecha de registro" value="<?php echo $resultado['fecha_registro']; ?>" required>
                        <label>Fecha de registro</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo $resultado['email']; ?>" required>
                        <label>Email</label>
                    </div>
                    <div class="form-floating my-3">
                        <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php echo $resultado['contrasena']; ?>" required>
                        <label>Contraseña</label>
                    </div>
            </div>
            <div class="modal-footer">
                <!-- Enviar formulario -->
                    <button type="submit" class="btn btn-primary" name="editar_modal">Actualizar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>