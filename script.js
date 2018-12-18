function MyFunction1() {
var nombre = document.getElementById("nombre").value;
var pregunta = document.getElementById("pregunta").value;

if (nombre == '' || pregunta == '') {
alert("Por Favor, completa todas las celdas");
} else {

$.ajax({
type: "POST",
url: "ajaxjs.php",
data: {
	nombre: nombre,
	pregunta: pregunta
},
cache: false,
success: function(respuesta) {
     	$('#mensaje').html(respuesta);
}
});
}
return false;
}

function MyFunction() {
var fecha = document.getElementById("fecha").value;
var ciudadIDA = document.getElementById("ciudadIDA").value;
var ciudadVUELTA = document.getElementById("ciudadVUELTA").value;

if (fecha == '' || ciudadIDA == ''|| ciudadVUELTA == '') {
alert("Por Favor, completa todas las celdas");
} else {

$.ajax({
type: "POST",
url: "consulta.php",
data: {
	fecha		: fecha,
	ciudadIDA	: ciudadIDA,
	ciudadVUELTA: ciudadVUELTA
},
cache: false,
success: function(respuesta) {
     	$('#ficha').html(respuesta);
}
});
}
return false;
}