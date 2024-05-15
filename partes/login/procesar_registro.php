<?php

include "../conexiones.php";


// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$username = $_POST['username'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT); // Hashear la contraseña



        // select comprobar usuario
        // select comprobar email;

        //si cualquiere de los dos , esta en la base de datos
        //if else




// Consulta SQL para insertar los datos del usuario en la base de datos
$sql = "INSERT INTO Usuarios (username, nombre, apellidos, correo_electronico, contrasena) VALUES ('$username', '$nombre', '$apellidos', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
