<?php
// E V A
// EINGABE
//wenn Formular gesendet, dann Daten prüfen, wenn ok, dann in DB schreiben
//$_POST['name'];

// VERARBEITUNG
$db = new PDO(
    'mysql:host=localhost;dbname=itc2019',
    'itc2019',
    'itc2019',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$query = 'INSERT INTO user (nadddme, firstname, email, birthday, password) VALUES (:name, :firstname, :email, :birthday, :password)';
$preparedStmt = $db->prepare($query);

$preparedStmt->bindValue(':name', 'Test');
$preparedStmt->bindValue(':firstname', 'Testi2');
$preparedStmt->bindValue(':email', 'Test@example.com');
$preparedStmt->bindValue(':birthday', '2000-01-01');
$preparedStmt->bindValue(':password', password_hash('Test', PASSWORD_BCRYPT, ['cost' => 12]));

try {
    $res = $preparedStmt->execute();
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

//AUSGABE AB HIER
?>
HTML CODE MIT FORMULAR

