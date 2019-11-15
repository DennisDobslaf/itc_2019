<?php
$db = new PDO('mysql:host=localhost;dbname=itc', 'root', '');
$query = 'INSERT INTO user (name, firstname, email, birthday, password) VALUES (:name, :firstname, :email, :birthday, :password)';
$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':name', 'Test');
$preparedStmt->bindValue(':firstname', 'Testi2');
$preparedStmt->bindValue(':email', 'Test@example.com');
$preparedStmt->bindValue(':birthday', '2000-01-01');
$preparedStmt->bindValue(':password', password_hash('Test', PASSWORD_BCRYPT, ['cost' => 12]));

$preparedStmt->execute();