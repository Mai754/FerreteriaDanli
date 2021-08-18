$(document).ready(function(){
    Sistema.validacionGeneral('form-general');
    $('#precio_compra').on('change', function(){
        $('#precio_venta').val($(this).val() * 1.25)
    });
});