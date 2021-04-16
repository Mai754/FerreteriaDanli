$(document).ready(function(){
    const reglas = {
        re_password: {
            equalTo: "#password"
        }
    };

    const mensaje = {
        re_password: {
            equalTo: 'Las contraseñas no coinciden'
        }
    };
    Sistema.validacionGeneral('form-general', reglas, mensaje);

    $('#password').on('change', function(){
        const valor = $(this).val();
        if(valor != ''){
            $('#re_password').prop('required', true);
        }else{
            $('#re_password').prop('required', false);
        }
    });
}); 