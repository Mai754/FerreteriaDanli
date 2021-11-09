var Sistema = function(){
    return{
        validacionGeneral: function(id, reglas, mensajes){
            const formulario = $('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span',
                errorClass: 'help-block help-block-error',
                focusInvalid: false,
                ignore: "",
                highlight: function (element, errorClass, validClass){
                    $(element).closest('.form-control').addClass('is-invalid');
                },
                unhighlight: function (element){
                    $(element).closest('.form-control').removeClass('is-invalid');
                },
                success: function (label){
                    label.closest('.control-label').removeClass('is-invalid');
                },
                errorPlacement: function(error, element){
                    if($(element).is('select') && element.hasClass('bs-select')){
                        error.insertAfter(element);
                    }else if($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }else if(element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    }else {
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function(event, validator){

                },
                submitHandler: function(form){
                    return true;
                }
            });
        },
        
        notificaciones: function (mensaje, titulo, tipo) {
            toastr.options = {
                closeButton: true,
                newestOnTop: true,
                positionClass: 'toast-top-right',
                preventDuplicates: true,
                timeOut: '8000'
            };
            if (tipo == 'error') {
                toastr.error(mensaje, titulo);
            } else if (tipo == 'success') {
                toastr.success(mensaje, titulo);
            } else if (tipo == 'info') {
                toastr.info(mensaje, titulo);
            } else if (tipo == 'warning') {
                toastr.warning(mensaje, titulo);
            }
        },
    }
}();