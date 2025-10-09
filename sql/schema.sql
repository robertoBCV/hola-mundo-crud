-- sql/schema.sql
/*CREATE DATABASE IF NOT EXISTS hola_mundo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE hola_mundo;

CREATE TABLE IF NOT EXISTS mensajes (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  titulo VARCHAR(120) NOT NULL,
  descripcion TEXT NOT NULL,
  imagen VARCHAR(255) DEFAULT NULL,
  fecha DATE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mensajes (titulo, descripcion, imagen, fecha)
VALUES ('Hola Mundo', 'Este es tu primer mensaje 😄', NULL, CURDATE());
*/