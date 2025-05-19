<!doctype html>
<html lang="es">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">
  
    <!-- Links Estilos -->
    <?php echo $varHeader; ?>

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          Reinstate scrolling for non-JS clients
        */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Bruz Deporte | Plantilla HTML Bootstrap 5</title>

</head>
<body class=" bg-light">

    <!-- Main Section-->
    <section
        class="mt-0 overflow-hidden  vh-100 d-flex justify-content-center align-items-center p-4">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-5">
            <!-- Logo-->
            <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0" href="./?url=index">
                <div class="d-flex align-items-center">
                    <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                </div>
            </a>
            <!-- / Logo-->
            <div class="shadow-xl p-4 p-lg-5 bg-white">
                <h1 class="text-center fw-bold mb-5 fs-2">Iniciar Sesión</h1>
                <a href="#" class="btn btn-facebook d-block mb-2"><i class="ri-facebook-circle-fill align-bottom"></i> Iniciar sesión con Facebook</a>
                <a href="#" class="btn btn-twitter d-block mb-2"><i class="ri-twitter-fill align-bottom"></i> Iniciar sesión con Twitter</a>
                <span class="text-muted text-center d-block fw-bolder my-4">O</span>
                <form>
                    <div class="form-group">
                      <label class="form-label" for="login-email">Correo Electrónico</label>
                      <input type="email" class="form-control" id="login-email" placeholder="name@email.com">
                    </div>
                    <div class="form-group">
                      <label for="login_password" class="form-label d-flex justify-content-between align-items-center">
                        Contraseña
                        <a href="./?url=forgotten_password" class="text-muted small">¿Olvidaste tu contraseña?</a>
                      </label>
                      <input type="password" class="form-control" id="login-password" placeholder="Introduce tu contraseña">
                    </div>
                    <button type="submit" class="btn btn-dark d-block w-100 my-4">Iniciar Sesión</button>
                </form>
                <p class="d-block text-center text-muted">¿Eres nuevo cliente? <a class="text-muted" href="./?url=register">Regístrate para obtener una cuenta</a></p>
            </div>

        </div>
        <!-- / Login Form-->

        <!-- /Page Content -->
    </section>
    
    <!-- Custom JS -->
    <?php echo $varJs; ?>    

</body>

</html>