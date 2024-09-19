<?php
require_once(__DIR__ . '/../vendor/autoload.php'); // Composer autoload

try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    // $_ENV를 사용하여 환경 변수 불러오기
    $secret_key = $_ENV['GOOGLE_MAP_KEY'] ?? null;
    
    if ($secret_key === null) {
        echo "GOOGLE_MAP_KEY is not set in the environment.";
    } else {
        echo 'GOOGLE_MAP_KEY: ' . $secret_key;
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>