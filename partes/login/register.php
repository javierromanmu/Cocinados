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

// Verificar si el correo electrónico ya existe en la base de datos
$sql_email = "SELECT * FROM Usuarios WHERE correo_electronico = '$correo'";
$result_email = $conn->query($sql_email);
if ($result_email->num_rows > 0) {
    echo "El correo electrónico ya está registrado.";
    exit(); // Detener la ejecución del script si el correo electrónico ya existe
}

// Insertar el nuevo usuario en la base de datos
$sql_insert = "INSERT INTO Usuarios (username, nombre, apellidos, correo_electronico, contrasena) VALUES ('$username', '$nombre', '$apellidos', '$correo', '$contrasena')";
if ($conn->query($sql_insert) === TRUE) {
    // Iniciar sesión para el nuevo usuario
    session_start();
    $_SESSION['username'] = $username;
    header('Location: ../../pages/perfil.php'); // Redirigir al usuario al perfil después del registro exitoso
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
