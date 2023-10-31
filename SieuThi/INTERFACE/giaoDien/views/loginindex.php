<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Đăng Nhập</title>
    <link rel="stylesheet" href="../css/loginindex.css">
</head>
<?php 
  include '../models/configadmin.php';
  session_start();
  
  if (isset($_POST['sbm']) && $_POST['user_name'] != '' && $_POST['password'] != '') {
    $user = $_POST['user_name'];
    $password = $_POST['password'];
    // $hashed_password = md5($password);
    $sql_user = "SELECT * FROM user WHERE user_name='$user' AND password='$password'";
    $query_user = mysqli_query($connect, $sql_user);
 
    if (mysqli_num_rows($query_user) > 0) {
        $_SESSION["user"] = $user;
        header('location: index.php');
        
    } else {
        echo "Nhập sai tên đăng nhập hoặc mật khẩu!";
      exit;
      
    }
  } else if (isset($_POST['sbm']) && ($_POST['user_name'] == '' || $_POST['password'] == '')) {
    echo "Vui lòng điền đầy đủ thông tin";
  }
?>
<body>
	<h1>Đăng Nhập</h1>
	<form action="loginindex.php" method="POST">
		<label for="username">Tên Đăng Nhập:</label>
		<input type="text" id="username" name="user_name" placeholder="Nhập tên đăng nhập..." required>

		<label for="password">Mật Khẩu:</label>
		<input type="password" id="password" name="password" placeholder="Nhập mật khẩu..." required>

		<button type="submit" name="sbm">Đăng Nhập</button>
	</form>
</body>
</html>