<?php

$db = new PDO('mysql:host=localhost;dbname=itc', 'root', '');
$query = 'DELETE FROM user 
                WHERE
                id=:id';
$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':id', 1);

$preparedStmt->execute();