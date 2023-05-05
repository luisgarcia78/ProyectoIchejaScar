const cancelBtn = document.getElementById('cancel-btn');

cancelBtn.addEventListener('click', function() {
  if (confirm('¿Estás seguro que deseas cancelar la operación?')) {
    // Si el usuario confirma, realiza la acción de cancelar
    // ...
  } else {
    // Si el usuario cancela, no realiza ninguna acción
  }
});
