$(document).ready(function(){
    Sistema.validacionGeneral('form-general');
    $('#nombre_producto').on('change', function(){
        $('#codigo_producto').val(Math.floor(Math.random()*999999))
    });
});