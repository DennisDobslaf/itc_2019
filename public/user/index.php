<?php
require_once 'User.php';

$db = new PDO('mysql:host=localhost;dbname=itc2019', 'itc2019', 'itc2019');

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
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<table class="table table-dark">
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
            <td>&nbsp;</td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
