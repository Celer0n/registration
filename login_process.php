<?php
session_start();
require('db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

// Здійснюємо перевірку введених даних та отримуємо запис користувача з бази даних

$query = "SELECT id, username, password, salt FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Перевірка паролю

if (password_verify($password . $user['salt'], $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');
} else {
    echo "Невірний логін або пароль.";
}
