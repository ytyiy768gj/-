 <?php
 // Подключение к базе данных
 $conn = mysqli_connect("localhost", "root", "", "mysite_db");
 if (!$conn) {
    die("Ошибка подключения к базе: " . mysqli_connect_error());
 }
 ?>