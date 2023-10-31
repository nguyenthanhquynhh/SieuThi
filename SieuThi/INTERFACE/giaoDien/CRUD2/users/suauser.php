<?php
    $id = $_GET['id'];

    $sql_up = "SELECT * FROM user WHERE user_id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE user SET user_name='$user_name', email='$email', password='$password' WHERE  user_id = $id";
        $query = mysqli_query($connect, $sql);
        header('location: indexuser.php?page_layout=lietke');
    }
?>


<div class="wapper_container">
    <div class="sidebar">
        <h2>
            <a href="admin.php">
                <img src="./img/adminn.jpg" alt="">
            </a>
            <h2 style="margin-left: 70px;" >ADMIN</h2>
        </h2>
        <ul>
            <li><a href="./sanpham/danhsach.php">Đơn hàng</a></li>
            <li><a href="index.php?page_layout=danhsach">Sản phẩm</a></li>
            <li><a href="indexuser.php?page_layout=lietke">Tài khoản khách hàng</a></li>
            <li><a href="../views/index.php">Đăng xuất</a></li>
        </ul>
    </div>

    <div class="container_add">
        <div class="card">
            <div class="card-header">
                <h2>Sửa thông tin cho khách hàng</h2>
            </div>
            <div class="card-body">
                <form method="POST" >
                    <div class="from-group">
                        <label for="">
                            Tên người dùng
                        </label>
                        <input type="text" class="form-control" name="user_name" required value="<?php echo $row_up['user_name']; ?>">
                    </div>

                    <div class="from-group">
                        <label for="">
                            Email
                        </label>
                        <input type="text" class="form-control" name="email" required value="<?php echo $row_up['email']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="">
                            Password
                        </label>
                        <input type="text" class="form-control" name="password" required value="<?php echo $row_up['password']; ?>">
                    </div>
                    <!-- <div class="from-group">
                        <label for="">
                            Repassword
                        </label>
                        <input type="text" class="form-control" name="description" required value="<?php echo $row_up['repassword']; ?>">
                    </div> -->
                    

                    <button type="submit" class="btn btn-primary" name="sbm">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>




