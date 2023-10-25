<?php
require('config.php');

// Підключення до бази даних
$conn = mysqli_connect($db_config['host'], $db_config['username'], $db_config['password'], $db_config['db_name']);

// Перевірка з'єднання
if (!$conn) {
    die("Помилка підключення до бази даних: " . mysqli_connect_error());
}
