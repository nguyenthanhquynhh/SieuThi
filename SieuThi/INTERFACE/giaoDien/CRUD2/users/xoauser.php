<?php
    $id = $_GET['id'];
    $sql_user = "DELETE FROM user WHERE user_id = $id";
    $query_user = mysqli_query($connect, $sql_user);
    header('location: indexuser.php?page_layout=lietke');
?>