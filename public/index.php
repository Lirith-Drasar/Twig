<?php

require __DIR__ .'/../vendor/autoload.php';

$products = ['product1', 'product2', 'product3', 'product4', 'product5', 'product6'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);


echo $twig->render('index.html.twig', ['product'=>$products]);