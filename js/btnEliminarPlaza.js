

eliminarBtnPlaza.addEventListener('click', function() {
  Swal.fire({
    title: '¿Estás seguro que deseas eliminar este elemento?',
    text: 'Esta acción no se puede deshacer',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sí, eliminar',
    cancelButtonText: 'No, cancelar',
    confirmButtonColor: '#dc3545',
    cancelButtonColor: '#6c757d',
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, realiza la acción de eliminar
      Swal.fire({
        icon: 'success',
        title: 'Eliminado correctamente',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      setTimeout(function() {
        window.location.href = 'plazas.html';
      }, 3000);
      
    } else {
      // Si el usuario cancela, no realiza ninguna acción
    }
  });
});
