<?php
    require_once 'pdo.php';
    $product = new Product(null, null, null);
    $data = [
        'id' => '',
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'cateId' => $_POST['cateId']
    ];
    $product->createNewProdData($data);
    header("Location: http://localhost/BTVN_PHP/product/index.php");
?>