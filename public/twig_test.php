<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../view/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../view/cache',
]);

echo $twig->render('index.twig', ['name' => 'Dennis']);