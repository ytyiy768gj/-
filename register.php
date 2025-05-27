 <?php
 require 'db.php';
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES 
('$username', '$password_hash')";
    if (mysqli_query($conn, $sql)) {
        echo "Регистрация прошла успешно! <a 
href='login.php'>Войти</a>";
        exit;
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
 }
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head><meta charset="UTF-8"><title>Регистрация</title></head>
 <body>
    <h2>Регистрация</h2>
    <form method="post">
        <label>Логин:<br><input name="username" required></label><br>
 <br>
        <label>Пароль:<br><input name="password" type="password" 
required></label><br><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
 </html>