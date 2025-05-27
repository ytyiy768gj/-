 <?php
 session_start();
require 'db.php';
 if (!isset($_SESSION['user_id'])) {
 header("Location: login.php");
 exit;
 }
 $res = mysqli_query($conn, "SELECT * FROM feedback ORDER BY created_at 
DESC");
 ?>
 <!DOCTYPE html>
 <html lang="ru">
 <head><meta charset="UTF-8"><title>Админ-панель</title></head>
 <body>
 <h2>Заявки обратной связи</h2>
 <p><a href="index.php">На главную</a></p>
 <?php while ($row = mysqli_fetch_assoc($res)): ?>
 <div style="border:1px solid #ccc; padding:10px; margin
bottom:10px;">
 <strong><?= htmlspecialchars($row['name']) ?></strong><br>
 <em><?= htmlspecialchars($row['email']) ?></em><br>
 <p><?= nl2br(htmlspecialchars($row['message'])) ?></p>
 <small>отправлено: <?= $row['created_at'] ?></small>
 </div>
 <?php endwhile; ?>
 </body>
 </html>