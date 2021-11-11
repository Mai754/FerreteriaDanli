$(document).ready(function(){
    const reglas = {
        precio_venta: {
            equalTo: "#precio_compra"
        }
    };

    const mensaje = {
        precio_venta: {
            equalTo: 'El precio de venta debe ser mayor al de compra'
        }
    };

    Sistema.validacionGeneral('form-general', reglas, mensaje);

    $('#precio_compra').on('change', function(){

        const valor = $(this).val();

        if(valor != ''){
            $('#precio_venta').prop('required', true);
        }else{
            $('#precio_venta').prop('required', false);
        }
    });
});