<?php
    $id = $_GET['id'];

    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect, $sql_brand);

    
    $sql_up = "SELECT * FROM products WHERE product_id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $product_name = $_POST['product_name'];

        if($_FILES['image']['name']==''){
            $image = $row_up['image'];
        }else{
            $image = $row_up['image']['name'];
            $image_tmp = $row_up['image']['tmp_name'];
            move_uploaded_file($image_tmp, 'img/'.$image);
        }
        
        $price = $_POST['price'];
        $quanlity = $_POST['quanlity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

        $sql = "UPDATE products SET product_name='$product_name', image='$image',
        price=$price, quanlity=$quanlity, description='$description', brand_id=$brand_id WHERE  product_id = $id";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
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
                <h2>Sửa sản phẩm</h2>
            </div>
            <div class="card-body">
                <form method="POST" >
                    <div class="from-group">
                        <label for="">
                            Tên sản phẩm
                        </label>
                        <input type="text" class="form-control" name="product_name" required value="<?php echo $row_up['product_name']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="">
                            Ảnh sản phẩm
                        </label> <br>
                        <input type="file"  name="image" required>
                        
                    </div>
                    <div class="from-group">
                        <label for="">
                            Giá sản phẩm
                        </label>
                        <input type="text" class="form-control" name="price" required value="<?php echo $row_up['price']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="">
                            Số lượng sản phẩm
                        </label>
                        <input type="text" class="form-control" name="quanlity" required value="<?php echo $row_up['quanlity']; ?>">
                    </div>
                    <div class="from-group">
                        <label for="">
                            Mô tả sản phẩm
                        </label>
                        <input type="text" class="form-control" name="description" required value="<?php echo $row_up['description']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Thương hiệu</label>
                        <select name="brand_id" class="form-control" required>
                            <?php
                                while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                    <option value="<?php echo $row_brand['brand_id']; ?>"><?php echo $row_brand['brand_name']; ?></option>
                            <?php  }?>
                            
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="sbm">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>




