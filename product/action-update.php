<?php 
    require_once "pdo.php";
    $product = new Product(null, null, null);
    $data = [
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'cateId' => $_POST['cateId'],
        'id' => $_GET['id']
    ];
    $product->updateProdData($data);
    header("Location: http://localhost/BTVN_PHP/product/index.php");
?>