<?php

//pobieranie listy produktów

//$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=pdo';
//
//try {
//    $pdo = new PDO($dsn, 'root', '');
//} catch (PDOException $e) {
//    die('Wystąpił błąd aplikacji! Error: ' . $e->getCode());
//}
//
//$sql      = 'SELECT * FROM products';
//$query    = $pdo->query($sql);
//$products = $query->fetchAll(PDO::FETCH_ASSOC);

include_once 'views/products_index.view.php';