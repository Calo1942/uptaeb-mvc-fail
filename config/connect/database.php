<?php
    
    // En /config/connect/database.php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'jessame');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    try {
        // Crea el DSN (Data Source Name)
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        
        // Opciones de configuración de PDO
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Lanza excepciones en errores
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Devuelve resultados como array asociativo
        ];
        
        // Intenta la conexión
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
        
        // Mensaje de éxito (opcional, quita en producción)
        echo "¡Conexión exitosa!";
        
    } catch (PDOException $e) {
        // Manejo de errores
        die("Error de conexión: " . $e->getMessage());
    }