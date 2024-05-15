<?php
session_start();

// Obtener la URL actual
$url_actual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Guardar la URL en la cookie
setcookie('url_actual', $url_actual, time() + (86400 * 30), "/"); // La cookie expirará en 30 días

session_unset();
session_destroy();
header("Location: ../../index.php");
exit();
