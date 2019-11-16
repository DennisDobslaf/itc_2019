<?php
require_once __DIR__ . '/../../config/config.php';
$db = new PDO($dbParams['dsn'], $dbParams['user'], $dbParams['pass']);
$query = 'DELETE FROM user 
                WHERE
                id=:id';
$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':id', $_GET['id']);

$preparedStmt->execute();

header('Location: index.php');