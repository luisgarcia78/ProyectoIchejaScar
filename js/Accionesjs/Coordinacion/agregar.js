const form = document.querySelector('#FormAdd');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que el formulario se envíe automáticamente
  
  Swal.fire({
    title: '¿Estás seguro que deseas agregar esta información?',
    showCancelButton: true,
    confirmButtonText: 'Sí, agregar',
    cancelButtonText: 'No, volver',
    timerProgressBar: true,
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, realiza la acción de cancelar
      Swal.fire({
        icon: 'success',
        title: '¡Guardado correctamente!',
        toast: true, // Muestra el mensaje como una notificación flotante
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000 // Muestra el mensaje durante 3 segundos
      });

      // Espera 4 segundos antes de redirigir a la página "plazas.html"
      setTimeout(function() {
        window.location.href = 'plazas.html';
      }, 3000);
    } else {
      // Si el usuario cancela, redirige al usuario a departamentos.html
      
    }
  });
});
