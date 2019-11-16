<?php
require_once __DIR__ . '/../../config/config.php';
require_once 'User.php';

$db = new PDO($dbParams['dsn'], $dbParams['user'], $dbParams['pass']);

$query = 'SELECT * FROM user';

$users = array();
foreach ($db->query($query, PDO::FETCH_CLASS, 'User') as $user) {
    $users[] = $user;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Benutzerverwaltung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<a href="create.php"><i class="fa fa-user"></i> Neuen Benutzer anlegen</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Firstname</th>
        <th>E-Mail</th>
        <th>Birthday</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?=$user->getId()?></td>
            <td><?=$user->getName()?></td>
            <td><?=$user->getFirstname()?></td>
            <td><?=$user->getEmail()?></td>
            <td><?=$user->getBirthday()?></td>
            <td>
                <a href="edit.php?id=<?=$user->getId()?>" title="Benutzer bearbeiten"><i class="fa fa-user-plus"></i></a>
                <a href="delete.php?id=<?=$user->getId()?>" title="Benutzer löschen"><i class="fa fa-user-times"></i></a>
            </td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
