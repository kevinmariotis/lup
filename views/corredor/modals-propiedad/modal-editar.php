<!-- Modal -->
<div class="modal fade" id="editar<?php echo $props['codigo']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Propiedades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="perfil-corredor.php" class="container my-3" method="post">
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="codigo" placeholder="codigo" value="<?php echo $props['codigo']; ?>" required>
                <label>Codigo</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="nombre" placeholder="nombre" value="<?php echo $props['nombre']; ?>" required>
                <label>Nombre descriptivo</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="direccion" placeholder="direccion" value="<?php echo $props['direccion']; ?>" required>
                <label>Direccion</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="precio" placeholder="precio" min=0 value="<?php echo $props['precio']; ?>" required>
                <label>Precio</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="ciudad" placeholder="ciudad" value="<?php echo $props['ciudad']; ?>" required>
                <label>Ciudad</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="habitaciones" placeholder="habitaciones" min=0 value="<?php echo $props['habitaciones']; ?>" required>
                <label>Habitaciones</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="baños" placeholder="baños" min=0 value="<?php echo $props['baños']; ?>" required>
                <label>Baños</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="garaje" placeholder="garaje" min=0 value="<?php echo $props['garaje']; ?>" required>
                <label>Garajes</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="area" placeholder="area" min=0 value="<?php echo $props['area']; ?>" required>
                <label>Area de construccion (m²)</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select" aria-label="Floating label select example" name="estrato" require>
                    <option selected value="<?php echo $props['estrato']; ?>"><?php echo $props['estrato']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <label for="floatingSelect">Estrato</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select" aria-label="Floating label select example" name="estado" require>
                    <option selected value="<?php echo $props['estado']; ?>"><?php echo $props['estado']; ?></option>
                    <option value="nueva">Nueva</option>
                    <option value="usada">Usada</option>
                </select>
                <label for="floatingSelect">Estado</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select" aria-label="Floating label select example" name="tipo" require>
                    <option selected value="<?php echo $props['tipo']; ?>"><?php echo $props['tipo']; ?></option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                </select>
                <label for="floatingSelect">Tipo de propiedad</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select"  aria-label="Floating label select example" name="tipo_negocio" require>
                    <option selected value="<?php echo $props['tipo_negocio']; ?>"><?php echo $props['tipo_negocio']; ?></option>
                    <option value="venta">Venta</option>
                    <option value="arriendo">Arriendo</option>
                </select>
                <label for="floatingSelect">Tipo de negocio</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="descripcion" style="height: 100px"  maxlength="500" require><?php echo $props['descripcion']; ?></textarea>
                <label for="floatingTextarea2">Descripcion de la zona (maximo 500 caracteres)</label>
            </div>
            <input type="hidden" name="cedula" value="<?php echo $cedula; ?>">
            <input type="hidden" name="estado_visualizacion" value="Publica">
      </div>
      <div class="modal-footer">
        <button name="editar_modal" type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    