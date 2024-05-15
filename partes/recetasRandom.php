

<style type="text/css">

.product-item .img-fluid {
        width: 500px; /* Ancho fijo de 500px */
        height: 400px; /* Alto fijo de 400px */
        object-fit: cover; /* Ajustar la imagen para cubrir el contenedor manteniendo la relación de aspecto */
    }


</style>

<!-- Start -->
<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp d-flex align-items-center justify-content-center" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <div class="row g-4 align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-light mb-0 text-center">Recetas de hoy</h1>
                </div>
            </div>
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Recetas diarias</p>
            <h1 class="display-6 mb-4">Explora nuestras recetas y pruébalas, seguro te encantarán.</h1>
        </div>
        <div class="row g-4">
            <?php
            // Incluir el archivo de conexiones.php
            include './partes/conexiones.php';

            // Establecer la consulta SQL para obtener los datos de las recetas aleatorias
            $consulta_sql = "
                SELECT id, nombre, descripcion, imagen
                FROM recetas
                ORDER BY RAND()
                LIMIT 3;
            ";

            // Ejecutar la consulta
            $resultado = $conn->query($consulta_sql);

            // Comprobar si hay resultados
            if ($resultado->num_rows > 0) {
                // Iterar sobre los resultados y mostrar los datos
                while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                            <div class="text-center p-4">
                                <h3 class="mb-3"><?php echo $row["nombre"]; ?></h3>
                                <span><?php echo $row["descripcion"]; ?></span>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="<?php echo $row["imagen"]; ?>" alt="<?php echo $row["nombre"]; ?>">
                                <div class="product-overlay">
                                    <a class="btn btn-lg-square btn-outline-light rounded-circle" href="./pages/verReceta.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-eye text-primary"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } else {
                echo "No se encontraron resultados";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </div>
    </div>
</div>
<!-- End -->












