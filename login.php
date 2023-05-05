<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" integrity="sha512-x+IeP6U3+6U2h6T0be6wkbEqbLYs87BmGj9HHdpP8mxrdzrmN4aFKoDls07Ov1jw4YFzw38Z6OJg9oAPNSJWng==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  ...

    
    <title>Login</title>
</head>

<body>

    <div class="contenedor-formulario contenedor">
        <div class="">
            <img src="img/logo.png" alt="" class="imagenLogin">
        </div>

        <form class="formulario">
            <div class="texto-formulario">
              <h2>Bienvenido de nuevo</h2>
              <p>Inicia sesión con tu cuenta</p> 
            </div>
            <div class="input">
                <label for="usuario">Usuario</label>
                <input placeholder="Ingresa tu nombre" type="text" id="usuario">
            </div>

              <label for="password">Password:</label>
                <div class="password-wrapper">
                  <input type="password" name="password" id="password" required placeholder="ingrese su contraseña">
                  <button type="button" class="toggle-password" onclick="togglePasswordVisibility()">mostrar</button>
		            </div>

                <!-- boton para iniciar sesion -->
            <div class="input">
              <br>
              <a class="loginboton" href="index.php" role="button">iniciar sesión</a>
            </div>
        </form>
    </div>
    <script src="js/Login.js"></script>
</body>

</html>