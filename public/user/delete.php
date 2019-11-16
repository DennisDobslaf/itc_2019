<?php

$db = new PDO('mysql:host=localhost;dbname=itc2019', 'itc2019', 'itc2019');
$query = 'DELETE FROM user 
                WHERE
                id=:id';
$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':id', 1);

$preparedStmt->execute();