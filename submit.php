<?php
// Подключение к базе данных
$pdo = new PDO("mysql:host=localhost;dbname=shelter_db;charset=utf8", "root", "");

// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Сохранение в базу
$sql = "INSERT INTO applications (name, phone, email, message) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $phone, $email, $message]);

echo "<script>alert('Спасибо! Ваше сообщение отправлено'); window.location.href = 'contacts.html';</script>";
?>