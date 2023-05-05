const form = document.querySelector('#FormAdd');

form.addEventListener('submit', function(event) {
  event.preventDefault(); // Evita que el formulario se envíe automáticamente
<<<<<<< HEAD
=======
  
>>>>>>> ac09b7f3fa1df8745636b7aab90b986485128813
  Swal.fire({
    title: '¿Estás seguro que deseas agregar esta información?',
    showCancelButton: true,
    confirmButtonText: 'Sí, agregar',
    cancelButtonText: 'No, volver',
    timerProgressBar: true,
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
<<<<<<< HEAD
      // Si el usuario confirma, envía los datos al archivo correspondiente
      const formData = new FormData(form); // Crea un objeto FormData con los datos del formulario
      fetch('operauser.php', {
        method: 'POST',
        body: formData
      }).then(response => {
        // Si el servidor devuelve una respuesta exitosa, muestra el mensaje de éxito
        if (response.ok) {
          Swal.fire({
            icon: 'success',
            title: '¡Guardado correctamente!',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
          setTimeout(function() {
            window.location.href = 'agregarUsuario.php';
          }, 4000);
        } else {
          // Si el servidor devuelve un error, muestra el mensaje de error
          Swal.fire({
            icon: 'error',
            title: 'Error al guardar la información',
            text: 'Ocurrió un error al guardar la información. Por favor, inténtalo de nuevo más tarde.',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
        }
      }).catch(error => {
        // Si ocurre un error en el proceso de envío, muestra el mensaje de error
        Swal.fire({
          icon: 'error',
          title: 'Error al guardar la información',
          text: 'Ocurrió un error al guardar la información. Por favor, inténtalo de nuevo más tarde.',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      });
    } else {
      // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y no envía los datos
      Swal.fire({
        icon: 'info',
        title: 'Operación cancelada',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
=======
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
      
>>>>>>> ac09b7f3fa1df8745636b7aab90b986485128813
    }
  });
});