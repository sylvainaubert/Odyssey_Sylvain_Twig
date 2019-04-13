<?php

require '../vendor/autoload.php';

$products = ['Ours', 'Orignal', 'Caribou', 'Tétra', 'Carcajou'];

$loader = new \Twig\Loader\FilesystemLoader('/../src/View');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig');