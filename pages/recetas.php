<?php
session_start();
// Definir el número de elementos por página
$elementos_por_pagina = 9;

// Validación y sanitización de parámetros GET
$parametro = isset($_GET['categoria']) ? htmlspecialchars($_GET['categoria']) : '';
$parametro2 = isset($_GET['subcategoria']) ? htmlspecialchars($_GET['subcategoria']) : '';
$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;

include '../partes/head.php';
include '../partes/navbar.php';
include '../partes/conexiones.php';

?>

<!DOCTYPE html>
<html lang="en">

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3"><?php echo $parametro2 ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#"><?php echo $parametro ?></a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo $parametro2 ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px; margin-top: 50px;">

                <h1 class="display-6 mb-4">Explora nuestras recetas</h1>
                <p class="text-primary text-uppercase mb-2 mt-2">// Recetas seleccionadas</p>
            </div>

            <!-- Productos  -->
            <div class="row g-4">
                <?php

                // Array asociativo para mapear los parámetros
                $parametrosOptimizados = array(
                    "Tipo de plato" => 'tipo_plato',
                    "Cocina internacinal" => 'nacionalidad',
                    "Dietas especiales" => 'tipo_dieta',
                    "Ingredientes especiales" => 'ingrediente_especial',
                    "Métodos de coccíon" => 'metodo_elaboracion'
                );

                // Verificar si el parámetro existe en el array y reemplazarlo si es necesario
                if (array_key_exists($parametro, $parametrosOptimizados)) {
                    $parametro = $parametrosOptimizados[$parametro];
                }

                // Calcular el inicio y fin de los resultados a mostrar
                $inicio = ($pagina - 1) * $elementos_por_pagina;
                $fin = $inicio + $elementos_por_pagina;

                $sql = "SELECT * FROM recetas WHERE $parametro = '$parametro2' LIMIT $inicio, $elementos_por_pagina";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $nombre = $row['nombre'];
                        $calorias = $row['calorias'];
                        $tiempo_elaboracion = $row['tiempo_elaboracion'];
                        $imageId = $row['imagen'];
                ?>
                        
                        
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                                <div class="text-center p-4">
                                    <div class="d-inline-block border border-primary rounded-pill px-3 mb-3"><?php echo $calorias; ?> calorías - <?php echo $tiempo_elaboracion; ?> minutos</div>
                                    <h3 class="mb-3"><?php echo $nombre; ?></h3>
                                    <span>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</span>
                                </div>
                                <div class="position-relative mt-auto">


                                    <div class="position-relative mt-auto">
                                        <img src="<?php echo $imageId ?>" alt="Tortilla" style="width: 500px; height: 400px;">

                                        <div class="product-overlay">
                                        <a class="btn btn-lg-square btn-outline-light rounded-circle" href="./verReceta.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-eye text-primary"></i></a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>




                <?php
                    }
                } else {
                    echo "No se encontraron recetas";
                }

                // Calcular el número total de páginas
                $sql_total = "SELECT COUNT(*) AS total FROM recetas WHERE $parametro = '$parametro2'";
                $result_total = $conn->query($sql_total);
                $fila_total = $result_total->fetch_assoc();
                $total_elementos = $fila_total['total'];
                $total_paginas = ceil($total_elementos / $elementos_por_pagina);

                // Mostrar botones de paginación
                ?>
                <div class="row">
                    <div class="col mt-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                                    <li class="page-item <?php echo $pagina == $i ? 'active' : ''; ?>"><a class="page-link" href="?categoria=<?php echo $parametro; ?>&subcategoria=<?php echo $parametro2; ?>&pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../partes/footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>
