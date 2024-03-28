<?php 
require_once('db.php'); 
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    // Проверка наличия данных перед их обработкой 
    if (isset($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['pass'])) { 
        $name = $_POST['name']; 
        $surname = $_POST['surname']; 
        $email = $_POST['email']; 
        $pass = $_POST['pass']; 
 
        // Вставка данных в базу данных 
        $sql = "INSERT INTO database (name, surname, email, pass) VALUES ('$name', '$surname', '$email','$pass')"; 
        $conn->query($sql); 
 
        // Перенаправление на страницу vhod.html 
        header("Location: lk.html"); 
        exit; // Убедитесь, что скрипт останавливается после перенаправления 
    } 
} 
?>