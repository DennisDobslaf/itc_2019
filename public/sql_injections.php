<?php
$db = mysqli_connect(
    'localhost',
    'root',
    '',
    'itc_injections'
);

if (array_key_exists('query', $_POST)) {
    $query = $_POST['query'];
} else {
    $query = '%Hammer%';//$_POST['query'];
}

$result = mysqli_query($db, "SELECT * FROM `products` WHERE `name` LIKE '%$query%'");

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
?><html>
<head>

</head>
<body>

<div id="search">
    <form action="sql_injections.php" method="post">
        <input type="text" name="query" size="150" value="<?=$query?>">
        <input type="submit" value="go">
    </form>
</div>

<table id="products">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Preis</th>
    </tr>
    <?php foreach ($data as $product) : ?>
    <tr>
        <td><?=$product['id']?></td>
        <td><?=$product['name']?></td>
        <td><?=$product['price']?></td>
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>

