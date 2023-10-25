<!DOCTYPE html>
<html>
<head>
    <title>Головна сторінка</title>
</head>
<body>
    <h1>Головна сторінка</h1>

    <?php
    session_start();
    if(isset($_SESSION['user_id'])) {
        echo "Ви увійшли як: " . $_SESSION['username'];
        echo "<a href='logout.php'>Вийти</a>";
    } else {
        echo "<a href='login.php'>Увійти</a>";
        echo "<a href='register.php'>Зареєструватися</a>";
    }
    ?>
</body>
</html>
