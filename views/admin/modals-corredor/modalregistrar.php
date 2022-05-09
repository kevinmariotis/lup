<!-- Modal de registro-->
<div class="modal fade" id="registro" tabindex="-1" aria-labelledby="registroLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registroLabel">Registrar Corredores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <table class="table" id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Años de experiencia</th>
                        <th>Propiedades vendidas</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ciclo de consulta para agregar los registros a la tabla -->
                    <?php
                        $consulta = mysqli_query($conexion->conectar(), "select * from solicitud_registro");
                        while ($resultado = mysqli_fetch_array($consulta)){
                    ?>
                    <tr>
                        <form action="./admin-corredores.php" method="post">
                            <td><input type="text" name="cedula" class="border-0" size="10" value="<?php echo $resultado['cedula']; ?>"></td>
                            <td><input type="text" name="nombre" class="border-0" size="10" value="<?php echo $resultado['nombres_completos']; ?>"></td>
                            <td><input type="text" name="edad" class="border-0" size="2" value="<?php echo $resultado['edad']; ?>"></td>
                            <td><input type="text" name="telefono" class="border-0" size="10" value="<?php echo $resultado['telefono_movil']; ?>"></td>
                            <td><input type="text" name="email" class="border-0" size="20" value="<?php echo $resultado['email']; ?>"></td>
                            <td><input type="text" name="años_experiencia" class="border-0" size="10" value="<?php echo $resultado['anos_experiencia']; ?>"></td>
                            <td><input type="text" name="propiedades_vendidas" class="border-0" size="10" value="<?php echo $resultado['propiedades_vendidas']; ?>"></td>
                            <td>
                            <!-- Boton para mostrar datos -->
                            <button type="submit" name="aceptar_modal" class="btn btn-success">
                                <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                            </button>
                        </form>
                        </td>
                        <td>
                            <form action="./admin-corredores.php" method="post">
                                <input type="hidden" name="cedula" value="<?php echo $resultado['cedula']; ?>"/>
                                <button type="submit" name="rechazar_modal" class="btn btn-danger">
                                    <div class="sb-nav-link-icon"><i class="fas fa-ban"></i></div>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>