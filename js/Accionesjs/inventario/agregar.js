const form = document.querySelector('#FormAdd');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  
  Swal.fire({
    title: '¿Estás seguro que deseas agregar esta información?',
    showCancelButton: true,
    confirmButtonText: 'Sí, agregar',
    cancelButtonText: 'No, volver',
    timerProgressBar: true,
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      const formData = new FormData(form);
      const xhr = new XMLHttpRequest();

      xhr.open('POST', 'guardar.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          Swal.fire({
            icon: 'success',
            title: '¡Guardado correctamente!',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

          setTimeout(function() {
            window.location.href = 'plazas.html';
          }, 3000);
        } else if (xhr.readyState === XMLHttpRequest.DONE && xhr.status !== 200) {
          Swal.fire({
            icon: 'error',
            title: 'Ha ocurrido un error',
            text: 'No se ha podido guardar la información. Por favor, intenta de nuevo.',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
        }
      };

      xhr.send(new URLSearchParams(formData));
    } else {
      // Si el usuario cancela, redirige al usuario a departamentos.html
      
    }
  });
});
