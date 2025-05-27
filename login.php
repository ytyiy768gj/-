<?php
 session_start();
 require 'db.php';
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $res = mysqli_query($conn, "SELECT * FROM users WHERE username = 
'$username'");
    $user = mysqli_fetch_assoc($res);
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
        exit;
    } else {
        $error = "Неверный логин или пароль";
    }
 }
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head><meta charset="UTF-8"><title>Вход</title></head>
 <body>
    <h2>Вход</h2>
    <?php if (!empty($error)): ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Логин:<br><input name="username" required></label><br>
 <br>
        <label>Пароль:<br><input name="password" type="password" 
required></label><br><br>
        <button type="submit">Войти</button>
    </form>
 </body>
 </html>