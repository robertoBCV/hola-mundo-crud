<?php
// config/config.php
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'hola_mundo');
define('DB_USER', 'root');
define('DB_PASS', '');
define('BASE_URL', '/hola-mundo-mvc/public');
define('UPLOAD_DIR', __DIR__ . '/../public/imagenes');
define('MAX_IMAGE_BYTES', 2 * 1024 * 1024);
define('ALLOWED_EXT', ['jpg','jpeg','png','gif','webp']);
