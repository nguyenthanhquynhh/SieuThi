<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM products where product_id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsach');
?>