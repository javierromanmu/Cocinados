
CREATE TABLE `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `tiempo_elaboracion` int(11) NOT NULL,
  `calorias` int(11) NOT NULL,
  `num_personas` int(11) NOT NULL,
  `tipo_plato` varchar(255) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `tipo_dieta` varchar(255) NOT NULL,
  `metodo_elaboracion` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `ingrediente_especial` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
   `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `pasos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) NOT NULL,
  `paso` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receta_id` (`receta_id`),
  CONSTRAINT `pasos_ibfk_1` FOREIGN KEY (`receta_id`) REFERENCES `recetas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `ingredientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) NOT NULL,
  `ingrediente` varchar(255) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `receta_id` (`receta_id`),
  CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`receta_id`) REFERENCES `recetas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*ALTER TABLE usuarios CHANGE apellido apellidos varchar(50);*/

CREATE TABLE Usuarios (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    nombre VARCHAR(50),
    apellidos VARCHAR(50),
    correo_electronico VARCHAR(100) UNIQUE,
    contrasena VARCHAR(100), -- Se recomienda almacenarla en formato hash
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);