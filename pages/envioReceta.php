<?php

        session_start();

    include '../partes/conexiones.php';
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir y sanitizar los datos del formulario
        $nombreReceta = $_POST['nombre'];
        $tiempoElaboracion = $_POST['tiempo_elaboracion'];
        $calorias = $_POST['calorias'];
        $numPersonas = $_POST['num_personas'];
        $tipoPlato = $_POST['tipo_plato'];
        $nacionalidad = $_POST['nacionalidad'];
        $tipoDieta = $_POST['tipo_dieta'];
        $ingrediente = $_POST['ingrediente'];
        $metodoElaboracion = $_POST['metodo_elaboracion'];
        $pasos = $_POST['pasos'];
        $cantidad = $_POST['quantidade'];
        $ingredienteEspecial = $_POST['ingrediente_especial'];
        $descripcion = $_POST['descripcion'];
        $imageId = $_POST['image_id'];

            // Consulta SQL para insertar los datos en la tabla correspondiente
            $sql = "INSERT INTO recetas (nombre, tiempo_elaboracion, calorias, num_personas, tipo_plato, nacionalidad, tipo_dieta, metodo_elaboracion, imagen,ingrediente_especial) 
            VALUES ('$nombreReceta', '$tiempoElaboracion', '$calorias', '$numPersonas', '$tipoPlato', '$nacionalidad', '$tipoDieta', '$metodoElaboracion', '$imageId','$ingredienteEspecial')";


            // Ejecutar consulta SQL
        if ($conn->query($sql) === TRUE) {
            $receta_id = $conn->insert_id; // Obtener el ID de la receta recién insertada

            // Insertar los ingredientes en una tabla separada (suponiendo que haya una tabla de ingredientes asociada a las recetas)
            foreach ($ingrediente as $key => $value) {
                $sqlIngredientes = "INSERT INTO ingredientes (receta_id, ingrediente, cantidad) VALUES ('$receta_id', '$ingrediente[$key]', '$cantidad[$key]')";
                $conn->query($sqlIngredientes);
            }

            foreach ($pasos as $key => $value) {
                $sqlPasos = "INSERT INTO pasos (receta_id, paso) VALUES ('$receta_id', '$pasos[$key]')";
                $conn->query($sqlPasos);
            }
            // Redireccionar al usuario a index.php
                header("Location: index.php");
                exit();
            //echo "Los datos se han enviado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        // Cerrar conexión
        $conn->close();
    }
    include '../partes/head.php';
    include '../partes/navbar.php';
?>


<!DOCTYPE html>
<html lang="en">

<body>
 
          <!-- Page Header Start -->
            <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="container text-center pt-5 pb-3">
                        <h1 class="display-4 text-white animated slideInDown mb-3">Envia tu propia receta</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item text-primary active" aria-current="page">Envia tu propia receta</li>
                            </ol>
                        </nav>
                    </div>
            </div>
         <!-- Page Header End -->

            <div class="container">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group">




                    <?php
                        if (!isset($_SESSION['username'])) {
                          
                            echo '<div class="alert alert-primary" role="alert">
                            <a href="../pages/perfil.php" class="alert-link">Registrate o logeate</a> para poder enviarnos tu receta.
                          </div>';

                        }
                    ?>






                    <div class="mb-3">
                        <label for="imageInput" class="form-label">Seleccionar imagen</label>
                        <input type="file" class="form-control" id="imageInput" name="image" accept="image/*" required>
                    </div>
                    <input type="hidden" id="imageIdInput" name="image_id">









                    
                            <!-- PREVIEW FOTO -->
                    <div id="imagePreview" class="mb-3" style="display: none;">
                        <label class="form-label"></label>
                        <img id="previewImage" class="img-fluid">
                    </div>

                        <h3 class="h3-title title-box title-laranja margin-top-40">Nombre de la receta</h3>
                        <div class="d-flex justify-content-center">
                            <div class="input-group mb-3">
                                <input size="40" class="form-control" placeholder="Nombre de la receta" value="" type="text" name="nombre">
                            </div>
                        </div>

                        <h3 class="h3-title title-box title-laranja margin-top-40">Breve descripcion de la receta</h3>
                        <div class="d-flex justify-content-center">
                            <div class="input-group mb-3">
                            <textarea class="form-control me-3" rows="2" name="descripcion"></textarea>

                            </div>
                        </div>
                            <!-- Descripcion del formulario ... -->
                            
                            <!-- Fin de la descripcion ... -->





                    </div>


                    

                    <!-- Tiempo de elaboracion -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Tiempo de elaboracion</h3>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Minutos" aria-label="Minutos" aria-describedby="basic-addon2" name="tiempo_elaboracion">
                        <span class="input-group-text" id="basic-addon2">Minutos</span>
                    </div>
                    <!-- Fin Tiempo de elaboracion -->


                    <h3 class="h3-title title-box title-laranja margin-top-40">Calorias de la receta</h3>
                    <!-- Calorias -->
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Calorías" aria-label="Calorías" aria-describedby="basic-addon3" name="calorias">
                        <span class="input-group-text" id="basic-addon3">Calorías</span>
                    </div>
                    <!-- Fin Calorias -->



                    <!-- Número de personas -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Número de personas</h3>

                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="Número de personas" aria-label="Número de personas" aria-describedby="basic-addon3" name="num_personas">
                        <span class="input-group-text" id="basic-addon3">Número de personas</span>
                    </div>
                    <!-- FIN Número de personas -->

                    <!-- Tipo de comida -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Tipo de plato</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Tipo de comida" name="tipo_plato">
                            <option selected>Aperitivos y entrantes</option>
                            <option value="Platos principales">Platos principales</option>
                            <option value="Guarniciones">Guarniciones</option>
                            <option value="Postres">Postres</option>
                            <option value="Sopas y caldos">Sopas y caldos</option>
                            <option value="Ensaladas">Ensaladas</option>
                            <option value="Bocadillos o snacks">Bocadillos o snacks</option>
                            <option value="Bebidas">Bebidas</option>
                        </select>
                    </div>
                    <!-- FIN Tipo de comida -->

                    <!-- nacionalidad -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Nacionalidad del plato</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Nacionalidad" name="nacionalidad">
                            <option selected>Asiática</option>
                            <option value="Italiana">Italiana</option>
                            <option value="Mexicana">Mexicana</option>
                            <option value="Española">Española</option>
                            <option value="Marroquí">Marroquí</option>
                            <option value="Francesa">Francesa</option>
                            <option value="China">China</option>
                            <option value="Japonesa">Japonesa</option>
                            <option value="India">India</option>



                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <!--FIN  nacionalidad -->

                    <!-- Dieta especial -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Tipo de dieta especial</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Dieta especial" name="tipo_dieta">
                            <option selected>Omnívora</option>
                            <option value="Vegana">Vegana</option>
                            <option value="Vegetariana">Vegetariana</option>
                            <option value="Sin gluten">Sin gluten</option>
                            <option value="Sin lactosa">Sin lactosa</option>
                        </select>
                    </div>
                    <!--FIN  Dieta especial -->

                    <!-- Ingredientes especiales -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Ingrediente principal</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Ingredientes especiales" name="ingrediente_especial">
                            <option selected>Carne</option>
                            <option value="Pescado y marisco">Pescado y mariscos</option>
                            <option value="Vegetales y legumbres">Vegetales y legumbres</option>
                            <option value="Cereales y granos">Cereales y granos</option>
                            <option value="Legumbres y frijoles">Legumbres y frijoles</option>
                            <option value="Productos lácteos">Productos lácteos</option>
                            <option value="Aceites y grasas">Aceites y grasas</option>
                            <option value="Especias y hierbas">Especias y hierbas</option>
                        </select>
                    </div>
                    <!--FIN  Ingredientes especiales -->



                    <!-- Metodos de elaboracion -->
                    <h3 class="h3-title title-box title-laranja margin-top-40">Metodos de elaboracion</h3>
                    <div class="input-group mb-3">
                        <select class="form-select" aria-label="Metodos de elaboracion" name="metodo_elaboracion">
                            <option selected>Horneado</option>
                            <option value="Asado">Asado</option>
                            <option value="Salteado">Salteado</option>
                            <option value="Frito">Frito</option>
                            <option value="Hervido">Hervido</option>
                            <option value="Al vapor">Al vapor</option>
                            <option value="Guisado">Guisado</option>
                        </select>
                    </div>

                    <!--FIN  Metodos de elaboracion -->



                    <!-- AÑADIR INGREDIENTES Y CANTIDADES -->

                    <div class="ingredientes" id="ingredientesInput">
                        <!-- Ingredientes -->
                        <h2 class="h2-title title-box title-laranja margin-top-40 text-center">Ingredientes de la receta</h2>
                        <p class="text-center-cinza">Escribe cada ingrediente por línea, describiendo la cantidad y la unidad utilizada. Y para agregar otro, haz clic en el botón de abajo.</p>

                        <div class="input-group mb-3">
                            <input size="40" class="form-control me-3" placeholder="Por ejemplo, leche condensada" value="" type="text" name="ingrediente[]">
                            <input size="40" class="form-control me-3" placeholder="Por ejemplo: 200g" value="" type="text" name="quantidade[]">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary me-3 addInput">+</button>
                            </div>
                        </div>
                    </div>




                    <!-- PASOS PARA HACER LA RECETA -->
                    <div class="pasos" id="pasosInput">
                        <h2 class="h2-title title-box title-laranja margin-top-40 text-center">Pasos para hacer la receta</h2>
                        <!-- Resto de tu formulario para los pasos de la receta -->

                        <!-- Pasos -->
                        <p class="text-center-cinza">Escribe los pasos para hacer la receta uno por línea. Y para agregar otro, haz clic en el botón de abajo.</p>

                        <div class="input-group mb-3" name="pasos">

                            <textarea class="form-control me-3" rows="2" placeholder="Por ejemplo, 1. Picar las verduras" name="pasos[]"></textarea>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary me-3 addInput">+</button>
                            </div>

                        </div>

                    </div>





                    <?php
                        if (isset($_SESSION['username'])) {
                          
                            echo '<div class="mt-4"><button type="submit" class="btn btn-primary" name="submit">Enviar receta</button></div>';

                        }
                    ?>
                    <!-- Botón de enviar -->
                    




                </form>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            
            <script src="../lib/wow/wow.min.js"></script>
            <script src="../lib/easing/easing.min.js"></script>
            <script src="../lib/waypoints/waypoints.min.js"></script>
            <script src="../lib/counterup/counterup.min.js"></script>
            <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

            
            <script src="../js/main.js"></script>
            <script src="../js/añadircampoinput.js"></script>

</body>
<?php include '../partes/footer.php' ?>
</html>