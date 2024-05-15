<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocina2</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">




</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">


        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-light m-0">CoCiNaDoS</h1>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tipo de plato</a>
                    <div class="dropdown-menu m-0">
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Platos principales">Platos
                            principales</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Aperitivos y entrantes">Aperitivos
                            y entrantes</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Guarniciones">Guarniciones</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Postres">Postres</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Bebidas">Bebidas</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Sopas y caldos">Sopas y
                            caldos</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Ensaladas">Ensaladas</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Tipo de plato&amp;subcategoria=Bocadillos o snacks">Bocadillos
                            o snacks</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cocina internacional</a>
                    <div class="dropdown-menu m-0">
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Asiática">Asiática</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Italiana">Italiana</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Mexicana">Mexicana</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Española">Española</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Marroquí">Marroquí</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Francesa">Francesa</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Cocina internacinal&amp;subcategoria=Otros">Otros</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dietas especiales</a>
                    <div class="dropdown-menu m-0">
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Omnívora">Omnívora</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Vegetariana">Vegetariana</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Vegana">Vegana</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Sin gluten">Sin
                            gluten</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Sin lactosa">Sin
                            lactosa</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Dietas especiales&amp;subcategoria=Mediterránea">Mediterránea</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Ingredientes especiales</a>
                    <div class="dropdown-menu m-0">
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Carne">Carne</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Pescado y marisco">Pescado
                            y marisco</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Vegetales y hortalizas">Vegetales
                            y hortalizas</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Cereales y granos">Cereales
                            y granos</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Cereales y granos">Cereales
                            y granos</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Productos lácteos">Productos
                            lácteos</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Ingredientes especiales&amp;subcategoria=Fruta">Fruta</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Métodos de elaboracion</a>
                    <div class="dropdown-menu m-0">
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Horneado">Horneado</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Asado">Asado</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Salteado">Salteado</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Frito">Frito</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Hervido">Hervido</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Otros">Otros</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Al vapor">Al
                            vapor</a>
                        <a class="dropdown-item"
                            href="./pages/recetas.php?categoria=Métodos de coccíon&amp;subcategoria=Guisado">Guisado</a>


                    </div>
                </div>

                <a href="pages/envioReceta.php" class="nav-link ">Envia tu receta</a>

            </div>

        </div>
        <!-- USER -->



        <?php

        if (isset($_SESSION['username'])) {
            //echo $_SESSION['username'];
            /*
            <a href="./pages/perfil.php" class="nav-link .text-white">
            <h3 class="text-light">'.$_SESSION['username'].'<i class="bi bi-person"></i>
            </h3>
            </a>*/ ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <?php echo $_SESSION['username']?> <i class="bi bi-person fs-2"> </i></a>
                <div class="dropdown-menu mr-5">
                    <a class="dropdown-item" href="pages/perfil.php"><i class="bi bi-person"> </i>Perfil</a>
                    <a class="dropdown-item" href=""><i class="bi bi-bookmark-heart"></i>Tus recetas</a>
                    <a class="dropdown-item" href="./partes/login/logout.php"><i class="bi bi-door-closed"></i>Logut</a>
                </div>
            </div>

                    <?php
        } else {
            ?>
                    <a href="./pages/perfil.php" class="nav-link text-white">
                        <h1 class="text-light m-0"><i class="bi bi-person">
                            </i></h1>
                    </a>
                    <?php
        }

        ?>


    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.webp" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Recetas de felicidad</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Cocinados, el mejor recetario
                                </h1>
                                <p class="text-light fs-5 mb-4 pb-3">Recetario de la mejor comida y gastronomia de
                                    cualquier parte del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.webp" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Recetas de pasión</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Cocinados, el sitio con más
                                    pasión por la cocina</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Recetario de la mejor comida y gastronomia de
                                    cualquier parte del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-3.webp" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Recetas faciles</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Cocinados, tenemos recetas
                                    para todos los publicos</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Recetario de la mejor comida y gastronomia de
                                    cualquier parte del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-4.webp" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Recetas para niños</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Cocinados, tenemos recetas
                                    para los gustos más esquisitos.</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Recetario de la mejor comida y gastronomia de
                                    cualquier parte del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-5.webp" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Recetas del mundo</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Cocinados, el sitio donde hay
                                    mas recetas extranjeras</h1>
                                <p class="text-light fs-5 mb-4 pb-3">Recetario de la mejor comida y gastronomia de
                                    cualquier parte del mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-2">

                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-pizza-slice fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Recetas totales</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-solid fa-map fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Paises totales</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">200</h1>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-solid fa-user fa-4x text-primary mb-4"></i>
                        <p class="mb-2">Recetas de usuarios</p>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">100</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Facts End -->


    <?php include './partes/recetasRandom.php'; ?>


    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-primary text-uppercase mb-2">// Nuestro servicios</p>
                    <h1 class="display-6 mb-4">¿En que podemos ayudarte?</h1>
                    <p class="mb-5">Mejor calidad de vida, mejor disfrute de la comida y sobre todo , momentos
                        inolvidables , solo o con amigos o familia.</p>

                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">

                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-bread-slice text-white"></i>
                                </div>
                                <h5 class="mb-0">Calidad en las recetas</h5>
                            </div>
                            <span>Nos aseguramos que las recetas , sean de calidad , bien explicadas y faciles de
                                entender</span>
                        </div>

                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                    <i class="fa fa-birthday-cake text-white"></i>
                                </div>
                                <h5 class="mb-0">Recetas personalizadas</h5>
                            </div>
                            <span>Envianos tu receta secreta y darla a conocer al mundo entero.</span>
                        </div>



                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="img/servicio1.webp" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="img/servicio2.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Testimonial Start -->
    <div class="container-xxl bg-light my-6 py-6 pb-4">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Review de usuarios</p>
                <h1 class="display-6 mb-4">Todas las críticas importan.</h1>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                <div class="testimonial-item bg-white rounded p-4 d-flex flex-column justify-content-between">
                    <div class="d-flex align-items-center mb-4">
                        <div class="ms-4">
                            <h5 class="mb-1">Carl</h5>
                            <span>Lector habitual</span>
                        </div>
                    </div>
                    <p class="mb-0">Grandes recetas, muy bien explicadas, gracias a ellas, como verduras, antes no podía
                        ni verlas, no me gustaban.</p>
                </div>


                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">

                        <div class="ms-4">
                            <h5 class="mb-1">Bob</h5>
                            <span>Chef/Cocinero</span>
                        </div>
                    </div>
                    <p class="mb-0">Me encanto el poder aportar mis recetas aqui, espero seguir aportando mas y mas.</p>
                </div>


                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">

                        <div class="ms-4">
                            <h5 class="mb-1">Maria Jose</h5>
                            <span>Lectora poco habitual</span>
                        </div>
                    </div>
                    <p class="mb-0">Encontre esta web, hace poquito, pero por lo que veo, me ha encantado.</p>
                </div>


                <div class="testimonial-item bg-white rounded p-4">
                    <div class="d-flex align-items-center mb-4">

                        <div class="ms-4">
                            <h5 class="mb-1">Antonio</h5>
                            <span>Crítico gastronómico</span>
                        </div>
                    </div>
                    <p class="mb-0">Sin duda alguna , uno de los mejores sitios de recetas que he visto , todo bien
                        explicado , facil de entender y con muy buena pinta.</p>
                </div>

            </div>

        </div>
    </div>
    <!-- Testimonial End -->



    <?php include 'partes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>