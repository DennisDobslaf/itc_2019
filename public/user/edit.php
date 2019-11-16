<?php
// E V A
// EINGABE
//wenn Formular gesendet, dann Daten prüfen, wenn ok, dann in DB schreiben
//$_POST['name'];

// VERARBEITUNG
$db = new PDO('mysql:host=localhost;dbname=itc2019', 'itc2019', 'itc2019');
$query = 'UPDATE user SET 
                name=:name,
                firstname=:firstname,
                email=:email,
                birthday=:birthday,
                password=:password
                WHERE
                id=:id';

$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':id', 1);
$preparedStmt->bindValue(':name', 'Test');
$preparedStmt->bindValue(':firstname', 'Testi2');
$preparedStmt->bindValue(':email', 'Test@example.com');
$preparedStmt->bindValue(':birthday', '2000-01-01');
$preparedStmt->bindValue(':password', password_hash('Test', PASSWORD_BCRYPT, ['cost' => 12]));

$preparedStmt->execute();


//AUSGABE AB HIER
?>
HTML CODE MIT FORMULAR

