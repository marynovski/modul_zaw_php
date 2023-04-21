<?php

//dodawanie nowego produktu
//if (isset($_POST['name'])) {
//    $name = $_POST['name'];
//    $description = $_POST['description'];
//    $quantity = $_POST['quantity'];
//
//    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=pdo';
//
//    try {
//        $pdo = new PDO($dsn, 'root', '');
//    } catch (PDOException $e) {
//        die('Wystąpił błąd aplikacji! Error: ' . $e->getCode());
//    }
//
////    INSERT INTO `products` (`id`, `name`, `description`, `quantity`) VALUES (NULL, 'Papier toaletowy', 'Higiena', '3');
//
//    $sql = 'INSERT INTO `products` (`id`, `name`, `description`, `quantity`) VALUES (NULL, ?, ?, ?)';
//
//    $query = $pdo->prepare($sql);
//    $query->execute([$name, $description, $quantity]);
//
//    header('Location: index.php?slug=products.index');
//}

include_once 'views/products_new.view.php';