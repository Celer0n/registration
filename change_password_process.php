<?php
session_start();
require('db_connection.php');

$user_id = $_SESSION['user_id'];
$new_password = $_POST['new_password'];

// Генерація нової солі та хешуван
