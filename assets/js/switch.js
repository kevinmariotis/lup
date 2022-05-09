function enviarForm(codigo) {
        estado = document.getElementById('switch'+codigo).checked;

        if (estado == true){
                valor = 'Publica';
        }else{
                valor = 'Privada';
        }
        window.location.href = '../../controllers/propiedadControllers/actualizar-switch.php' + "?w1=" + codigo + "&w2=" + valor;
}