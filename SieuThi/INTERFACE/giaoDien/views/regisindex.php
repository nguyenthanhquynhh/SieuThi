<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regisindex.css">
    <title>Đăng ký</title>
</head>
<?php
include '../models/configadmin.php';
if (isset ($_POST ['sbm'])) { 
    // isset có tác dụng kiêmmr tra xem có dữ liệu hay không
	$user_name = $_POST['user_name'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $repassword = $_POST ['repassword'];
    if($password != $repassword) {
        echo $waring = 'Mời nhập lại mật khẩu!';
    } else{
        // $password = md5 ($password);
        $sql_user = "INSERT INTO user (user_name,email,password,repassword,trang_thai) VALUES ('$user_name','$email','$password','$repassword',1)";
            mysqli_query ($connect,$sql_user);
    }
    header('location: loginindex.php');
}
?>
<body>
    <h1>Đăng Ký</h1>
	<form action="regisindex.php" method="POST">
		<label for="username">Tên Đăng Nhập:</label>
		<input type="text" id="username" name="user_name" placeholder="Nhập tên đăng nhập..." required>

        <label for="username">Email:</label>
		<input type="text" id="username" name="email" placeholder="Nhập email..." required>

		<label for="password">Mật Khẩu:</label>
		<input type="password" id="password" name="password" placeholder="Nhập mật khẩu..." required>
        <label for="password">Nhập lại mật Khẩu:</label>
		<input type="password" id="password" name="repassword" placeholder="Nhập lại mật khẩu..." required>

		<button type="submit" name="sbm">Đăng Ký</button>
	</form>
</body>
</html>