<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="stylesheet" href="css/StilosForms.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/0123456789.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Actualizar Inventario</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light"><img src="img/LogoChiapas.png" alt="" class="logoChis">Instituto Chiapaneco De Educación
                    Para Jóvenes Y Adultos</h4>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="login.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
          <div class="barra-lateral col-12 col-sm-auto">
            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a href="index.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                  </svg></i><span>Inicio</span></a>
                  
                <a href="Inventario.php"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                    <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z"/>
                  </svg><i class=""></i></i><span>Inventario</span></a>

                <a href="#"><i> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                  </svg></i><span>Vales</span></a>

                <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                  </svg></i><span>Etiquetas</span></a>

                <a href="usuarios.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
                </svg></i><span>Usuario</span></a>
                
                <a href="Coordinacion.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-diagram-3-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zm-6 8A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm6 0A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm6 0a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1z"/>
                  </svg></i><span>Coordinaciones</span></a>
                  
                  <a href="Departamentos.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-building-fill" viewBox="0 0 16 16">
                    <path d="M3 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h3v-3.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V16h3a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H3Zm1 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5Z"/>
                  </svg></i><span>Departamentos</span></a>

                  <a href="Plazas.php"><i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                  </svg></i><span>Plazas comunitarias</span></a>
            </nav>
        </div>
            <main class="main col">
                <div class="row  align-content-center text-center">
                    <div class="columna col-lg-6">
                        <h1>Actualizar Inventario</h1>
                        <br>
                        
                    </div>

                        
            </div>    
            <form class="form" method="post" action="crud/update.php">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="No" class="form-label">No:</label>
                            <input type="text" id="No" name="No" class="" required><br><br>
            
                            <label for="COG" class="form-label">COG:</label>
                            <input type="text" id="COG" name="COG" class="" required><br><br>
            
                            <label for="NumInvenCompleto" class="form-label">Numero Inventario:</label>
                            <input type="text" id="NumInvenCompleto" name="NumInvenCompleto" class="" required><br><br>

                            <label for="TramiteBajas2023" class="form-label">TramiteBjas2023: </label>
                            <input type="text" id="TramiteBajas2023" name="TramiteBajas2023" class=""><br><br><br>
            
                            <label for="Estatus" class="form-label">Estatus:</label>
                            <input type="text" id="Estatus" name="Estatus" class="" required><br><br>
            
                            <label for="NombreBien" class="form-label">Nombre del Bien:</label>
                            <input type="text" id="NombreBien" name="NombreBien" class="" required><br><br>
            
                            <label for="descripcion">descripción:</label>
                            <textarea id="descripcion" name="descripcion" required></textarea><br><br>
            
                            <label for="Estado" class="form-label">Estado:</label>
                            <input type="text" id="Estado" name="Estado" class=""><br><br><br>

                            <label for="Municipio" class="form-label">Municipio:</label>
                            <input type="text" id="Municipio" name="Municipio" class=""><br><br><br>

                            <label for="Inmuble" class="form-label">Inmuble:</label>
                            <input type="text" id="Inmuble" name="Inmuble" class=""><br><br><br>

                          </div>
                        <div class="col-md-6">
                            <label for="CoordinacionZona" class="form-label">Coordinacion a la que Pertenece:</label>
                            <input type="text" id="CoordinacionZona" name="CoordinacionZona" class="" required><br><br>

                            <label for="NombreLugar" class="form-label">Nombre Lugar:</label>
                            <input type="text" id="ClaveUbicacion" name="ClaveUbicacion" class="" required><br><br>

                            <label for="ClaveUbicacion" class="form-label">Clave Ubicacion:</label>
                            <input type="text" id="No.usu" name="No.usu" class="" required><br><br>

                            <label for="NombreUsuario" class="form-label">Nombre del Usuario:</label>
                            <input type="text" id="NumUsuario" name="NumUsuario" class="" required><br><br>

                            <label for="NumUsuario" class="form-label">Numero Usuario:</label>
                            <input type="text" id="No.dep" name="No.dep" class="" required><br><br>

                            <label for="Costo" class="form-label">Costo</label>
                            <input type="text" id="Costo" name="Costo" class="" required><br><br>

                            <label for="FechaAdqui" class="form-label">Fecha Adquisicion:</label>
                            <input type="text" id="FechaAdqui" name="FechaAdqui" class="" required><br><br>

                            <label for="Proveedor" class="form-label">Proveedor</label>
                            <input type="text" id="Proveedor" name="Proveedor" class="" required><br><br>
                           
                            <label for="Factura" class="form-label">Factura:</label>
                            <input type="text" id="Factura" name="Factura" class="" required><br><br>

                            <label for="Condiciones" class="form-label">Condiciones:</label>
                            <input type="text" id="Condiciones" name="Condiciones" class="" required><br><br>

                            <label for="Serape" class="form-label">Serape:</label>
                            <input type="text" id="Serape" name="Serape" class="" required><br><br>

                        </div>
                    </div>
                                                    <!--botones de accion dentro del formulario  -->
                    <div style="text-align: center;">
                        <div style="display: inline-block;">
                          
                          <button id="AgregarBtn" type="click" class="BotonGuardar" style="vertical-align: middle;"><i> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                          </svg> Agregar</i></button>

                        <button id="cancelBtnInve" type="button" class="BotonGuardar" style="vertical-align: middle;"><i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg> Cancelar</i></button>
  
                        </div>
                        <!--  fin de los botones de acciones -->
                      </div>  
                      <script>
                        cancelBtnInve.addEventListener('click', function() {
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
          window.location.href = 'inventario.php';
        }, 3000);
    } else {
      // Si el usuario cancela, muestra el mensaje de "Operación cancelada" y espera unos segundos antes de redirigir a la página "departamentos.html"
      
    }
  });
});
      </script>
            </div>
            </form> 
            </main>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script> 
    <script src="js/Accionesjs/inventario/btnCancelar.js"></script> 
    <script src="js/Accionesjs/inventario/agregar.js"></script> 
	
</body>
</html>