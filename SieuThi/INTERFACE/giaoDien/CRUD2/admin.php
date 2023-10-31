<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container_admin">
        <div class="sidebar">
            <h2>
                <a href="admin.php">
                    <img src="./img/adminn.jpg" alt="">
                </a>
                
                <h2 style="margin-left: 70px;" >ADMIN</h2>
            </h2>
            <ul>
                <li><a href="#">Đơn hàng</a></li>
                <li><a href="index.php?page_layout=danhsach">Sản phẩm</a></li>
                <li><a href="indexuser.php?page_layout=lietke">Tài khoản khách hàng</a></li>
                <li><a href="../views/index.php">Đăng xuất</a></li>
            </ul>
        </div>
        
        <div class="wrapper_content">
            <div class="content">
                <h1>THỐNG KÊ</h1>
                <p>Chào mừng bạn đến với trang ADMIN dành cho quản trị viên. Từ đây, bạn có thể quản lý đơn đặt hàng, sản phẩm, khách hàng và cài đặt của mình.</p>
                <div class="stats">
                    <div class="card">
                        <h3>Tổng Đơn Hàng</h3>
                        <p>                          
                            <button style="width: 55px; height:30px; border-radius: 3px; border: none; background: #157ceb; color: white;">
                                1500
                            </button>
                        </p>
                    </div>
                    <div class="card">
                        <h3>Tổng Sản Phẩm Đã Bán</h3>
                        <p>
                            <button style="width: 55px; height:30px; border-radius: 3px; border: none; background: #157ceb; color: white;">
                                500
                            </button>
                        </p>
                    </div>
                    <div class="card">
                        <h3>Tổng Khách Hàng</h3>
                        <p>
                            <button style="width: 55px; height:30px; border-radius: 3px; border: none; background: #157ceb; color: white;">
                                1500
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
	
</body>
</html>