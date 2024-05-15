<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seleccionar opciones desde JSON</title>
</head>
<body>

<select id="miSelect">
  <option value="">Selecciona una opción</option>
</select>

<script>
// Tu JSON con las opciones
var jsonOpciones = {
  "opciones": [
    "Opción 1",
    "Opción 2",
    "Opción 3"
  ]
};

// Función para cargar las opciones desde el JSON
function cargarOpciones() {
  var select = document.getElementById("miSelect");
  var opciones = jsonOpciones.opciones;
  
  for (var i = 0; i < opciones.length; i++) {
    var opcion = document.createElement("option");
    opcion.text = opciones[i];
    opcion.value = opciones[i];
    select.appendChild(opcion);
  }
}

// Llama a la función para cargar las opciones cuando la página cargue
window.onload = function() {
  cargarOpciones();
};
</script>

</body>
</html>
