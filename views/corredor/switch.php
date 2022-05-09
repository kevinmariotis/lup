<!-- Default switch -->
<div class="form-check form-switch">
    <input 
        class="form-check-input "
        type="checkbox"
        role="switch"
        id="switch<?php echo $props['codigo']; ?>"
        onchange="enviarForm('<?php echo $props['codigo']; ?>')"
        <?php 
            if ($props['estado_visualizacion'] == 'Publica'){
                echo 'checked';
            }
        ?> 
    >
    <label class="form-check-label" for="switch"><span id="valor"><?php echo $props['estado_visualizacion'];?></span></label>
</div>
