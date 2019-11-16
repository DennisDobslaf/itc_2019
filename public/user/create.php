<?php
require_once __DIR__ . '/../../config/config.php';

// E V A
// EINGABE
//wenn Formular gesendet, dann Daten prüfen, wenn ok, dann in DB schreiben
//$_POST['name'];


if (isset($_POST['form_send'])) {
    // VERARBEITUNG
    $db = new PDO($dbParams['dsn'], $dbParams['user'], $dbParams['pass'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $query = 'INSERT INTO user (name, firstname, email, birthday, password) VALUES (:name, :firstname, :email, :birthday, :password)';
    $preparedStmt = $db->prepare($query);

    $preparedStmt->bindValue(':name', $_POST['name']);
    $preparedStmt->bindValue(':firstname', $_POST['firstname']);
    $preparedStmt->bindValue(':email', $_POST['email']);
    $preparedStmt->bindValue(':birthday', $_POST['birthday']);
    $preparedStmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 12]));

    try {
        $res = $preparedStmt->execute();
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }

    header('Location: index.php');
}

//AUSGABE AB HIER
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<a href="index.php"><i class="fa fa-home"></i> Zurück zur Übersicht</a>

<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="" method="post">
                <input type="hidden" name="form_send" value="1">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="firstname">Vorname</label>
                    <input type="firstname" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" placeholder="Enter firstname">
                </div>
                <div class="form-group">
                    <label for="birthday">Geburtsdatum</label>
                    <input type="birthday" class="form-control" id="birthday" name="birthday" aria-describedby="emailHelp" placeholder="Enter birhtday YYYY-MM-DD">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

