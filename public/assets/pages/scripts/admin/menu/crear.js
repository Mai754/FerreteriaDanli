$(document).ready(function(){
    Sistema.validacionGeneral('form-general');
    $('#icono').on('blur', function(){
        $('#mostrar-icono').removeClass().addClass('fa '+ $(this).val());
    });
});