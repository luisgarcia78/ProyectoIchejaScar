const deleteBtn = document.querySelector('#deleteBtn');

deleteBtn.addEventListener('click', function() {
  Swal.fire({
    title: '¿Estás seguro que deseas eliminar este elemento?',
    showCancelButton: true,
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'No, volver',
    timerProgressBar: true,
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, realiza la acción de eliminar
      // Aquí podrías agregar tu código para eliminar el elemento correspondiente
      Swal.fire({
        icon: 'success',
        title: '¡Eliminado correctamente!',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      setTimeout(function() {
        window.location.href = 'tuPagina.php';
      }, 4000);
    } else {
      // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y no elimina el elemento
      Swal.fire({
        icon: 'info',
        title: 'Operación cancelada',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
    }
  });
});
