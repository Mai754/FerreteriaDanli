$(document).ready(function() {

    var date = new Date();
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
    var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
    
    $('#calendar').fullCalendar({
        header: {
            language: 'es',
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay',

        },
        defaultDate: yyyy+"-"+mm+"-"+dd,
        editable: true,
        eventLimit: true,
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
            
            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd').modal('show');
        },
        eventRender: function(event, element) {
            element.bind('dblclick', function() {
                $('#ModalEdit #id').val(event.id);
                $('#ModalEdit #title').val(event.title);
                $('#ModalEdit #color').val(event.color);
                $('#ModalEdit').modal('show');
            });
        },
        eventDrop: function(event, delta, revertFunc) {

            edit(event);

        },
        eventResize: function(event,dayDelta,minuteDelta,revertFunc) {

            edit(event);

        },
    });
    
    function edit(event){
        start = event.start.format('YYYY-MM-DD HH:mm:ss');
        if(event.end){
            end = event.end.format('YYYY-MM-DD HH:mm:ss');
        }else{
            end = start;
        }
        
        id =  event.id;
        
        Event = [];
        Event[0] = id;
        Event[1] = start;
        Event[2] = end;
        
        $.ajax({
         url: 'editEventDate.php',
         type: "POST",
         data: {Event:Event},
         success: function(rep) {
                if(rep == 'OK'){
                    alert('Evento se ha guardado correctamente');
                }else{
                    alert('No se pudo guardar. Inténtalo de nuevo.'); 
                }
            }
        });
    }
    
});