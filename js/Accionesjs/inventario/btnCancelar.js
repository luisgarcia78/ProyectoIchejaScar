cancelBtnPlaza.addEventListener('click', function() {
  Swal.fire({
    title: '¿Estás seguro que deseas cancelar la operación?',
    showCancelButton: true,
    confirmButtonText: 'Sí, cancelar',
    cancelButtonText: 'No, volver',
    timerProgressBar: true,
    allowOutsideClick: false
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario confirma, realiza la acción de cancelar
      Swal.fire({
        icon: 'info',
        title: 'Operación cancelada',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });

      setTimeout(function() {
        window.location.href = 'plazas.php';
      }, 4000);
    } else {
      // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y espera unos segundos antes de redirigir a la página "departamentos.html"
      
    }
  });
});
