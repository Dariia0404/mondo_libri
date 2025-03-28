<?php

$host = 'localhost';
$dbname = 'users_ml';
$username = 'root';
$password = '';

try {
    //дата сьорч нейм
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    // Підключення до бази даних за допомогою PDO
    $pdo = new PDO($dsn, $username, $password);

    //помилки
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "DATABASE";
} catch (PDOException $e) {
    echo "ERROR" . $e->getMessage();
}
?>
