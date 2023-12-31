<?php
    require_once "pdo.php";
    require_once "../category/pdo.php";
    $product = new Product(null, null, null);
    $prod = $product->getProdData();
    $cate = new Category();
    $cate = $cate->getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div>
            <h3>List Products</h3>
            <a href="create.php" class="btn btn-success" style="margin-right: 5px;">Create</a>
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
            
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Caterory_id</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
               
                foreach($prod as $value):
            ?>
            <tr>
                
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['price'] ?></td>
                <td><?= $value['cateId'] ?> </td>
                <td>
                    <form id="delete_<?= $value['id']?>" action="delete.php" method="POST" style="display:flex">
                        <a href="./edit.php?id=<?= $value['id']?>" class="btn btn-primary" style="margin-right: 5px">Edit</a>
                        <input type="hidden" value="<?= $value['id'] ?>" name="id">
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $value['id'] ?>)">Delete</a>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>  
    </div>
<script>
    function confirmDelete(id) {
        let result = confirm('Are you sure?');
        if (result === true) {
            console.log(id);
            document.getElementById(`delete_${id}`).submit();
        }
    }
</script>
</body>
</html>