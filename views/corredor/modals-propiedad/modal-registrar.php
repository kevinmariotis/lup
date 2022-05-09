<!-- Modal -->
<div class="modal fade" id="registrar-propiedad" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Propiedades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="perfil-corredor.php" class="container my-3" method="post">
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="codigo" placeholder="codigo" required>
                <label>Codigo</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
                <label>Nombre descriptivo</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="direccion" placeholder="direccion" required>
                <label>Direccion</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="precio" placeholder="precio" min=0 required>
                <label>Precio</label>
            </div>
            <div class="form-floating my-3">
                <input type="text" class="form-control" name="ciudad" placeholder="ciudad" required>
                <label>Ciudad</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="habitaciones" placeholder="habitaciones" min=0 required>
                <label>Habitaciones</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="baños" placeholder="baños" min=0 required>
                <label>Baños</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="garaje" placeholder="garaje" min=0 required>
                <label>Garajes</label>
            </div>
            <div class="form-floating my-3">
                <input type="number" class="form-control" name="area" placeholder="area" min=0 required>
                <label>Area de construccion (m²)</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select" aria-label="Floating label select example" name="estrato" require>
                    <option selected>Seleccione...</option>
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
                    <option selected>Seleccione...</option>
                    <option value="nueva">Nueva</option>
                    <option value="usada">Usada</option>
                </select>
                <label for="floatingSelect">Estado</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select" aria-label="Floating label select example" name="tipo" require>
                    <option selected>Seleccione...</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="lote">Lote</option>
                    <option value="edificio">Edificio</option>
                </select>
                <label for="floatingSelect">Tipo de propiedad</label>
            </div>
            <div class="form-floating my-3">
                <select class="form-select"  aria-label="Floating label select example" name="tipo_negocio" require>
                    <option selected>Seleccione...</option>
                    <option value="venta">Venta</option>
                    <option value="arriendo">Arriendo</option>
                </select>
                <label for="floatingSelect">Tipo de negocio</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="descripcion" style="height: 100px"  maxlength="500" require></textarea>
                <label for="floatingTextarea2">Descripcion de la zona (maximo 500 caracteres)</label>
            </div>
            <input type="hidden" name="cedula" value="<?php echo $cedula; ?>">
            <input type="hidden" name="estado_visualizacion" value="Publica">
      </div>
      <div class="modal-footer">
        <button name="registrar_modal" type="submit" class="btn btn-primary">Registrar</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
    