// Función para mostrar el mensaje de confirmación al cancelar
function confirmarCancelar() {
    if (confirm("¿Está seguro de que desea cancelar el registro?")) {
      window.location.href = "Plazas.html";
    }
  }
  
  // Agregar evento de click a los botones de cancelar
  document.querySelector("#botones a:nth-of-type(2)").addEventListener("click", confirmarCancelar);
  