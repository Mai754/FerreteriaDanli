document.addEventListener('DOMContentLoaded', function() {

  let formulario = document.querySelector('form');

  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale:'Es',
    headerToolbar:{
      left: 'prev,next today',
      center: 'title',
      right:'dayGridMonth,timeGridWeek,timeGridDay'
    },

    events: "http://127.0.0.1:8000/evento/evento/ver",

    dateClick:function(info){
      formulario.reset();
      $("#evento").modal("show");
    },

    eventClick:function(info){
      var evento = info.event;
      console.log(evento);
      
      axios.post("http://127.0.0.1:8000/evento/evento/editar/"+info.event.id).
        then((respuesta)=>{
            $("#evento").modal("show");
            formulario.id.value = respuesta.data.id;
            formulario.title.value = respuesta.data.title;
            formulario.descripcion.value = respuesta.data.descripcion;
            formulario.start.value = respuesta.data.start;
            formulario.end.value = respuesta.data.end;
          }).catch(
            error=>{
              if(error.response){
                console.log(error.response.data);
              }
            }
          )
    }
  });

  calendar.render();

  document.getElementById("btnGuardar").addEventListener("click", function(){
    const datos = new FormData(formulario);
    console.log(datos);
    axios.post("http://127.0.0.1:8000/evento/evento/agregar", datos).
      then((respuesta)=>{
          calendar.refetchEvents();
          $("#evento").modal("hide");
        }).catch(error=>{
            if(error.response){
              console.log(error.response.data);
            }
          }
        )
  });
});