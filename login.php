<!DOCTYPE html>
<html>
<head>
    <title>Вхід</title>
</head>
<body>
    <h1>Увійти</h1>
    <form method="post" action="login_process.php">
        <label for="username">Логін:</label>
        <input type="text" name="username" required><br>
        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Увійти">
    </form>
</body>
</html>
