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
    <?php include_once __DIR__ . '/../config/components/initComponent.php'; ?>
    <?php echo $varHeader; ?>

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Bruz Deporte | Plantilla HTML Bootstrap 5</title>

</head>
<body class="">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./?url=index">
                        <div class="d-flex align-items-center">
                            <svg class="f-w-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77.53 72.26">
                                <path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z"
                                    fill="currentColor" fill-rule="evenodd" />
                            </svg>
                        </div>
                    </a>

                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menú</span>
                        </li>
                        <li class="d-none d-sm-block">
                            <span class="nav-link text-body search-trigger cursor-pointer">Buscar</span>

                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0"
                                        placeholder="Introduce tus términos de búsqueda...">
                                    <span
                                        class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                            class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            </li>
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="./?url=login">
                                Cuenta
                            </a>
                        </li>
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                                type="button">
                                Carrito (2)
                            </button>
                            <div class="cart-dropdown dropdown-menu">

                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Resumen del Carrito (2 artículos)</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <div>

                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg"
                                                    alt="Plantilla HTML Bootstrap por Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike Air VaporMax 2021
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Talla: 9 / Cantidad: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg"
                                                    alt="Plantilla HTML Bootstrap por Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike ZoomX Vaporfly
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Talla: 11 / Cantidad: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="pt-3">
                                        <div
                                            class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Total General</p>
                                                <span class="text-muted small">Incluye $45.89 impuestos</span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">$422.99</p>
                                        </div>
                                    </div>
                                    <a href="./?url=cart" class="btn btn-outline-dark w-100 text-center mt-4" role="button">Ver Carrito</a>
                                    <a href="./?url=checkout" class="btn btn-dark w-100 text-center mt-2" role="button">Proceder al Pago</a>
                                </div>
                                </div>
                            </li>
                        </ul>
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                        id="navbarNavDropdown">

                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="./?url=category" role="button">
                                    Oferta
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Páginas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./?url=index">Página de inicio</a></li>
                                    <li><a class="dropdown-item" href="./?url=category">Categoría</a></li>
                                    <li><a class="dropdown-item" href="./?url=product">Producto</a></li>
                                    <li><a class="dropdown-item" href="./?url=cart">Carrito</a></li>
                                    <li><a class="dropdown-item" href="./?url=checkout">Pago</a></li>
                                    <li><a class="dropdown-item" href="./?url=login">Iniciar sesión</a></li>
                                    <li><a class="dropdown-item" href="./?url=register">Registrarse</a></li>
                                    <li><a class="dropdown-item" href="./?url=forgotten_password">Contraseña olvidada</a></li>
                                </ul>
                            </li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->            
        
        <!-- Breadcrumbs-->
        <div class="bg-dark py-6">
            <div class="container-fluid">
                <nav class="m-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">Inicio</a></li>
                      <li class="breadcrumb-item breadcrumb-light"><a href="#">Camisetas</a></li>
                      <li class="breadcrumb-item  breadcrumb-light active" aria-current="page">Camiseta Osaka Japón para Hombre Edición Limitada</li>
                    </ol>
                </nav>            </div>
        </div>
        <!-- / Breadcrumbs-->

        <div class="container-fluid mt-5">

            <!-- Product Top Section-->
            <div class="row g-9" data-sticky-container>

                <!-- Product Images-->
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="row g-3" data-aos="fade-right">
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./assets/images/products/product-page-4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                </div>
                <!-- /Product Images-->
    
                <!-- Product Information-->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="sticky-top top-5">
                        <div class="pb-3" data-aos="fade-in">
                            <div class="d-flex align-items-center mb-3">
                                <p class="small fw-bolder text-uppercase tracking-wider text-muted m-0 me-4">KiiKii</p>
                                <div class="d-flex justify-content-start align-items-center disable-child-pointer cursor-pointer"
                                data-pixr-scrollto
                                data-target=".reviews">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 80%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>        <small class="text-muted d-inline-block ms-2 fs-bolder">(105 reviews)</small>
                            </div>
                            </div>
                            
                            <h1 class="mb-1 fs-2 fw-bold">Camiseta Osaka Japón para Hombre Edición Limitada</h1>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="fs-4 m-0">$34.99</p>
                            </div>
                            <div class="border-top mt-4 mb-3 product-option">
                                <small class="text-uppercase pt-4 d-block fw-bolder">
                                    <span class="text-muted">Disponible en Tallas (Hombres)</span> : <span class="selected-option fw-bold"
                                        data-pixr-product-option="size">M</span>
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                            <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="S" 
                                                    id="option-sizes-0">
                                                <label for="option-sizes-0">
                                                    
                                                    <small>S</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="SM" 
                                                    id="option-sizes-1">
                                                <label for="option-sizes-1">
                                                    
                                                    <small>SM</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="M" 
                                                        checked
                                                    id="option-sizes-2">
                                                <label for="option-sizes-2">
                                                    
                                                    <small>M</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="L" 
                                                    id="option-sizes-3">
                                                <label for="option-sizes-3">
                                                    
                                                    <small>L</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="Xl" 
                                                    id="option-sizes-4">
                                                <label for="option-sizes-4">
                                                    
                                                    <small>XL</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="XXL" 
                                                    id="option-sizes-5">
                                                <label for="option-sizes-5">
                                                    
                                                    <small>XXL</small>
                                                </label>
                                            </div>        </div>
                            </div>
                            <div class="mb-3">
                                <small class="text-uppercase pt-4 d-block fw-bolder text-muted">
                                    Diseños Disponibles :
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                    <picture class="me-2">
                                        <img class="f-w-24 p-2 bg-light border-bottom border-dark border-2 cursor-pointer" src="./assets/images/products/product-page-thumb-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <picture>
                                        <img class="f-w-24 p-2 bg-light cursor-pointer" src="./assets/images/products/product-page-thumb-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                            </div>
                            <button class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Añadir al Carrito</button>
                        
                            <!-- Product Highlights-->
                                <div class="my-5">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-24-hours-line ri-2x"></i>
                                                <small class="d-block mt-1">Entrega al día siguiente</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-secure-payment-line ri-2x"></i>
                                                <small class="d-block mt-1">Pago Seguro</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-service-line ri-2x"></i>
                                                <small class="d-block mt-1">Devoluciones Gratis</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- / Product Highlights-->
                        
                            <!-- Product Accordion -->
                            <div class="accordion" id="accordionProduct">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Detalles del Producto
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="m-0">Hecho de 100% algodón orgánico, la Camiseta Osaka Japón de Kiikii fue creada pensando en el uso diario. Presenta gráficos impresos y tela de gran peso para máxima comodidad y durabilidad.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Detalles y Cuidado
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionProduct">
                                      <div class="accordion-body">
                                          <ul class="list-group list-group-flush">
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Composición</span>
                                                  <span class="col-7 offset-1">98% Cotton, 2% elastane</span>
                                              </li>
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Cuidado</span>
                                                  <span class="col-7 offset-1">Professional dry clean only. Do not bleach. Do not iron.</span>
                                              </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </div>        
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Entrega y Devoluciones
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Entrega</span>
                                                <span class="col-7 offset-1">Standard delivery free for orders over $99. Next day delivery $9.99</span>
                                            </li>
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Devoluciones</span>
                                                <span class="col-7 offset-1">Periodo de devolución de 30 días. Consulta nuestros <a class="text-link-border" href="#">términos y condiciones.</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- / Product Accordion-->
                        </div>                    </div>
                </div>
                <!-- / Product Information-->
            </div>
            <!-- / Product Top Section-->

            <div class="row g-0">

                <!-- Related Products-->
                <div class="col-12" data-aos="fade-up">
                    <h3 class="fs-4 fw-bolder mt-7 mb-4">También te puede interesar</h3>
                    <!-- Swiper Latest -->
                    <div class="swiper-container" data-swiper data-options='{
                        "spaceBetween": 10,
                        "loop": true,
                        "autoplay": {
                          "delay": 5000,
                          "disableOnInteraction": false
                        },
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        },   
                        "breakpoints": {
                          "600": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },       
                          "1400": {
                            "slidesPerView": 4
                          }
                        }
                      }'>
                      <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Oferta</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Air VaporMax 2021</a>
                                      <small class="text-muted d-block">4 colores, 10 tallas</small>
                                              <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span></p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> Nuevo</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-2.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike ZoomX Vaporfly</a>
                                      <small class="text-muted d-block">2 colores, 4 tallas</small>
                                              <p class="mt-2 mb-0 small">$275.45</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-secondary rounded-circle d-block me-1"></span> Agotado</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-3.jpg" alt="">
                                      </picture>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Blazer Mid &#x27;77</a>
                                      <small class="text-muted d-block">5 colores, 6 tallas</small>
                                          <p class="mt-2 mb-0 small text-muted">Agotado</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-4.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Air Force 1</a>
                                      <small class="text-muted d-block">6 colores, 9 tallas</small>
                                              <p class="mt-2 mb-0 small">$425.85</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Oferta</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-5.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Air Max 90</a>
                                      <small class="text-muted d-block">4 colores, 10 tallas</small>
                                              <p class="mt-2 mb-0 small"><s class="text-muted">$196.99</s> <span class="text-danger">$98.66</span></p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-danger rounded-circle d-block me-1"></span> Oferta</span>
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> Nuevo</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-6.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Glide FlyEase</a>
                                      <small class="text-muted d-block">1 color</small>
                                              <p class="mt-2 mb-0 small"><s class="text-muted">$329.99</s> <span class="text-danger">$198.66</span></p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-7.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Zoom Freak</a>
                                      <small class="text-muted d-block">2 colores, 2 tallas</small>
                                              <p class="mt-2 mb-0 small">$444.99</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> Nuevo</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-8.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Air Pegasus</a>
                                      <small class="text-muted d-block">3 colores, 10 tallas</small>
                                              <p class="mt-2 mb-0 small">$178.99</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                            <div class="swiper-slide">
                              <!-- Card Product-->
                              <div class="card border border-transparent position-relative overflow-hidden h-100 transparent">
                                  <div class="card-img position-relative">
                                      <div class="card-badges">
                                              <span class="badge badge-card"><span class="f-w-2 f-h-2 bg-success rounded-circle d-block me-1"></span> Nuevo</span>
                                      </div>
                                      <span class="position-absolute top-0 end-0 p-2 z-index-20 text-muted"><i class="ri-heart-line"></i></span>
                                      <picture class="position-relative overflow-hidden d-block bg-light">
                                          <img class="w-100 img-fluid position-relative z-index-10" title="" src="./assets/images/products/product-1.jpg" alt="">
                                      </picture>
                                          <div class="position-absolute start-0 bottom-0 end-0 z-index-20 p-2">
                                              <button class="btn btn-quick-add"><i class="ri-add-line me-2"></i> Añadir Rápidamente</button>
                                          </div>
                                  </div>
                                  <div class="card-body px-0">
                                      <a class="text-decoration-none link-cover" href="./?url=product">Nike Air Jordans</a>
                                      <small class="text-muted d-block">3 colores, 10 tallas</small>
                                              <p class="mt-2 mb-0 small">$154.99</p>
                                  </div>
                              </div>
                              <!--/ Card Product-->
                            </div>
                      </div>
                    
                      <!-- Add Arrows -->
                      <div
                        class="swiper-prev top-50  start-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 start-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-left-s-line ri-lg"></i></div>
                      <div
                        class="swiper-next top-50 end-0 z-index-30 cursor-pointer transition-all bg-white px-3 py-4 position-absolute z-index-30 top-50 end-0 mt-n8 d-flex justify-content-center align-items-center opacity-50-hover">
                        <i class="ri-arrow-right-s-line ri-lg"></i></div>
                    
                    
                    </div>
                    <!-- / Swiper Latest-->                </div>
                <!-- / Related Products-->

                <!-- Reviews-->
                <div class="col-12" data-aos="fade-up">
                    <h3 class="fs-4 fw-bolder mt-7 mb-4 reviews">Reseñas</h3>
                    
                    <!-- Review Summary-->
                    <div class="bg-light p-5 justify-content-between d-flex flex-column flex-lg-row">
                        <div class="d-flex flex-column align-items-center mb-4 mb-lg-0">
                            <div class="bg-dark text-white f-w-24 f-h-24 d-flex rounded-circle align-items-center justify-content-center fs-2 fw-bold mb-3">4.3</div>
                            <!-- Review Stars Medium-->
                            <div class="rating position-relative d-table">
                                <div class="position-absolute stars" style="width: 88%">
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                    <i class="ri-star-fill text-dark ri-2x mr-1"></i>
                                </div>
                                <div class="stars">
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                    <i class="ri-star-fill ri-2x mr-1 text-muted opacity-25"></i>
                                </div>
                            </div>    </div>
                        <div class="d-flex flex-grow-1 flex-column ms-lg-8">
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 100%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">55</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 80%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">32</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 60%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">15</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 40%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">5</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <div class="f-w-20">
                                    <!-- Review Stars Small-->
                                    <div class="rating position-relative d-table">
                                        <div class="position-absolute stars" style="width: 20%">
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                            <i class="ri-star-fill text-dark mr-1"></i>
                                        </div>
                                        <div class="stars">
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                            <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        </div>
                                    </div>            </div>
                                <div class="progress d-flex flex-grow-1 mx-4 f-h-1">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold small d-block f-w-4 text-end">1</span>
                            </div>
                            <p class="mt-3 mb-0 d-flex align-items-start"><i class="ri-chat-voice-line me-2"></i> 105 clientes han reseñado este producto</p>
                        </div>
                    </div><!-- / Resumen de Reseñas-->
                    
                    <!-- Reviews-->
                    <div class="row g-6 g-md-8 g-lg-10 my-3">
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 80%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">20th September 2020 by DaveD</div>
                            </div>
                            <p class="fw-bold mb-2">Gran ajuste, gran precio</p>
                            <p class="fs-7">Vale la pena comprarlo por su relación calidad-precio. Pero ten cuidado: compra una talla más grande ya que la mediana es más cercana a una pequeña mediana.</p>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 40%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">18th September 2020 by Sandra K</div>
                            </div>
                            <p class="fw-bold mb-2">No vale el dinero</p>
                            <p class="fs-7">Costuras sueltas y malas en los lados. No volveré a comprar esto.</p>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 90%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">16th September 2020 by MikeS</div>
                            </div>
                            <p class="fw-bold mb-2">Decente por el precio</p>
                            <p class="fs-7">Los compro a menudo ya que son de buena calidad y valor por el dinero.</p>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 85%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">14th September 2020 by Frankie</div>
                            </div>
                            <p class="fw-bold mb-2">Great little T</p>
                            <p class="fs-7">Wore this to my local music festival - went down well.</p>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 70%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">20th September 2020 by Kevin</div>
                            </div>
                            <p class="fw-bold mb-2">Great for the BBQ</p>
                            <p class="fs-7">Bought this on the off chance it would work well with my skinny jeans, was a great decision. Would recommend.</p>
                        </div>
                        <div class="col-12 col-lg-6 col-xxl-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <!-- Review Stars Small-->
                                <div class="rating position-relative d-table">
                                    <div class="position-absolute stars" style="width: 20%">
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                        <i class="ri-star-fill text-dark mr-1"></i>
                                    </div>
                                    <div class="stars">
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                        <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                    </div>
                                </div>            <div class="text-muted small">20th September 2020 by Holly</div>
                            </div>
                            <p class="fw-bold mb-2">Nothing special but it&#x27;s okay</p>
                            <p class="fs-7">It&#x27;s a t-shirt. What can I say, it does the job.</p>
                        </div>
                    </div>
                    <!-- / Reviews-->
                    
                    <!-- Review Pagination-->
                    <div class="d-flex flex-column f-w-44 mx-auto my-5 text-center">
                        <small class="text-muted">Mostrando 6 de 105 reseñas</small>
                        <div class="progress f-h-1 mt-3">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <a href="#" class="btn btn-outline-dark btn-sm mt-5 align-self-center py-3 px-4 border-2">Cargar Más</a>
                    </div><!-- / Review Pagination-->                </div>
                <!-- / Reviews-->
            </div>

        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2025 Bruz Deportes Todos los derechos reservados</p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>    <!-- / Footer-->  

    <!-- Theme JS -->
     
    <!-- Custom JS -->
    <?php echo $varJs; ?>

</body>

</html>
