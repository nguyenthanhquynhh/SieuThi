<?php
    $sql = 'SELECT * FROM products inner join brands on products.brand_id = brands.brand_id';
    $query = mysqli_query($connect, $sql);
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

    <div class="container_list">
    <div class="card">
        <div class="card-header">
            <h1 style="margin-left: 400px;">Danh sách sản phẩm</h1>
        </div>
        <div class="card-body">
           <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)){?>
                        <tr style="height: 60px;">
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['product_name']; ?></td>
                            <td>
                                <img src="img/<?php echo $row['image']; ?>" style="width: 50px;">                               
                            </td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['quanlity']; ?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['brand_name']; ?></td>
                            <?php $a = $row['product_id']; ?>
                            <td style="text-align: center;">
                                <button style="width: 50px; height:30px; border-radius: 2px; border: none; background: #007bff;">
                                    <a style="color: white;" href="index.php?page_layout=sua&id=<?php echo $a; ?>">Sửa</a>
                                </button>                              
                            </td>
                            <td style="text-align: center;">
                                <button style="width: 50px; height:30px; background: #FF0000; border-radius: 2px; border: none;">
                                    <a style="color: white;" onclick="return Del('<?php echo $row['product_name']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['product_id']; ?>">Xóa</a>
                                </button>
                                
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tbody> 
            </table> 
                     
        </div>
        <button style="margin-top: 15px; width: 130px; height:35px; background: #007bff; text-align: center; border: none; border-radius: 3px; "> 
                <a  style="color: white; text-decoration: none; " href="index.php?page_layout=them">Thêm sản phẩm</a>  
        </button>         
    </div>    
</div>
</div>



<script>
    function Del(name){ chắc chắn muốn xóa sản p
        return confirm("Bạn cóhẩm :" + name " ?");
    }
</script>
    