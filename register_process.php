<?php
require('db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Генерація солі та хешування паролю

$salt = bin2hex(random_bytes(11));
$hashed_password = password_hash($password . $salt, PASSWORD_BCRYPT);

// Збереження користувача в базу даних

$query = "INSERT INTO users (username, password, salt) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sss", $username, $hashed_password, $salt);
$stmt->execute();

header('Location: login.php');

