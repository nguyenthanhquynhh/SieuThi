<?php
    $sqluser = 'SELECT * FROM user';
    $query_user = mysqli_query($connect, $sqluser);
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

    <div class="container_lietke">
		<h1>Danh sách tài khoản người dùng</h1>

		<table>
			<thead>
				<tr>
                    <th>STT</th>
					<th>Tên đăng nhập</th>
					<th>Email</th>
                    <th>Mật khẩu</th>
					<th>Trạng thái</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
				</tr>
			</thead>
			<tbody>
            <?php
                $i = 1;
                while($row = mysqli_fetch_assoc($query_user)){?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['user_name']?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['trang_thai'] ?></td>
                        <?php $a = $row['user_id']; ?>
                            <td >
                                <button style="width: 50px; height:30px; border-radius: 2px; border: none; background: #007bff; text-align: center;">
                                    <a style="color: white;" href="indexuser.php?page_layout=suauser&id=<?php echo $a; ?>">Sửa</a>
                                </button>                              
                            </td>
                            <td >
                                <button style="width: 50px; height:30px; background: #FF0000; border-radius: 2px; border: none;">
                                    <a style="color: white;"  href="indexuser.php?page_layout=xoauser&id=<?php echo $row['user_id']; ?>">Xóa</a>
                                </button>
                                
                            </td>
                    </tr>
                <?php } ?>
			</tbody>
		</table>
        <button style="width: 130px; height:35px; background: #007bff; text-align: center; border: 1px solid; border-radius: 3px; "> 
            <a style="text-decoration: none; color: white;" href="indexuser.php?page_layout=themuser">Thêm khách hàng</a>  
        </button> 
	</div>


    
    