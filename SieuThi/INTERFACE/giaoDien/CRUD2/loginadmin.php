<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ADMIN</title>
    <link rel="stylesheet" href="css.css/logins.css">
</head>
<body>  
<?php 
  include 'config/db.php';
  session_start();
  
  if (isset($_POST['sbm']) && $_POST['user_admin'] != '' && $_POST['pass_admin'] != '') {
    $user_admin = $_POST['user_admin'];
    $password = $_POST['pass_admin'];
    $hashed_password = md5($password);
    $sql_admin = "SELECT * FROM admin_login WHERE user_admin='$user_admin' AND pass_admin='$password'";
    $query_admin = mysqli_query($connect, $sql_admin);
 
    if (mysqli_num_rows($query_admin) > 0) {
        $_SESSION["user"] = $user_admin;
        header('location: admin.php');
        
    } else {
        echo "Nhập sai tên đăng nhập hoặc mật khẩu!";
      exit;
      
    }
  } else if (isset($_POST['sbm']) && ($_POST['user_admin'] == '' || $_POST['pass_admin'] == '')) {
    echo "Vui lòng điền đầy đủ thông tin";
  }
?>
<html>
<head>
  <title>Đăng nhập vào ADMIN</title>
</head>
<body>
  <div class="wrapper_login">
    <img src="img/adminn.jpg" alt="">
    <h2>Đăng nhập vào ADMIN</h2>
    <form action="loginadmin.php" method="POST" class="admin">
      <div class="form">
        <label>Tên ADMIN:</label>
        <input type="text" placeholder="Nhập tên admin..." required name="user_admin">
      </div>
      <div class="form">
        <label>Mật khẩu:</label>
        <input type="password" placeholder="Nhập mật khẩu..." required name="pass_admin">
      </div>
      <div class="form_sbm">
        <input type="submit" value="Đăng Nhập" name="sbm">
      </div>
    </form>
  </div>
</body>
</html>