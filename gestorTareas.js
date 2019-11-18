$(document).ready(function(){
    var input = document.getElementById('cedula');
    input.oninvalid = function(event) {
        event.target.setCustomValidity('Debe Escribir Un identificador solo de numeros con un maximo de 14 caracteres y minimo 4');
    }
})




function tachar_enviar(pElemento, indice, id){
    $(pElemento).find("input").is(":checked")?$(pElemento).addClass("tachado"):$(pElemento).removeClass("tachado");
    
    $.ajax({
        type: "GET",
        url: "ActualizarEstado.php",
        data: {
            id: id,
            indice: indice
        },
        success: function (response) {
            alert("Estado de la tarea actualizado");   
        }
    });
}
function TareaNueva(usuario, idx){
    var texto = document.getElementById("tarea_nueva").value;

    var fecha = new Date();
    var anio = fecha.getFullYear();
    var mes = fecha.getMonth()+1;
    var dia = fecha.getDate();

    $("#lista").append(
        '<li onClick="tachar_enviar(this,'+ idx+','+ usuario+')">'+
        '<label><input type="checkbox">'+
        texto+ '<label id="fecha">'+
        dia+'-'+mes+'-'+anio+'</label>'+
        '</label></li>'
    );

    document.getElementById("tarea_nueva").value='';
    agregarTareaJson(usuario, texto);
}
function agregarTareaJson(usuario, tarea){
    $.ajax({
        type: "GET",
        url: "NuevaTarea.php",
        data: {
            usuario: usuario,
            tarea: tarea
        },
        success: function (response) {
            alert("Nueva tarea guardada");   
        }
    });
}
