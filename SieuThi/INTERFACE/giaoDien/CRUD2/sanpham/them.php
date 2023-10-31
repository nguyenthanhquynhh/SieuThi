<?php
    $sql_brand = "SELECT * FROM brands";
    $query_brand = mysqli_query($connect, $sql_brand);

    if(isset($_POST['sbm'])){
        $product_name = $_POST['product_name'];

        $image = $_FILES['img']['name'];
        $image_tmp = $_FILES['img']['tmp_name'];

        $price = $_POST['price'];
        $quanlity = $_POST['quanlity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

        $sql = "INSERT INTO products (product_name, image, price, quanlity, description, brand_id) VALUES
        ('$product_name', '$image' ,$price, $quanlity, '$description', $brand_id)";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
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
            <h1>Thêm sản phẩm</h1>
        </div>
        <div class="card-body">
            <form  method="POST"  enctype="multipart/form-data">
                <div class="from-group">
                    <label for="">
                        Tên sản phẩm:
                    </label>
                    <input type="text" class="form-control" name="product_name" required>
                </div>
                <div class="from-group">
                    <label for="">
                        Ảnh sản phẩm:
                    </label> <br>
                    <input class="inpfile" type="file"  name="img" required>
                    
                </div>
                <div class="from-group">
                    <label for="">
                        Giá sản phẩm:
                    </label>
                    <input type="number" min="0" class="form-control" name="price" required>
                </div>
                <div class="from-group">
                    <label for="">
                        Số lượng:
                    </label>
                    <input type="text" class="form-control" name="quanlity" required>
                </div>
                <div class="from-group">
                    <label for="">
                        Mô tả sản phẩm:
                    </label>
                    <input type="text" class="form-control" name="description" required>
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

                <button type="submit" class="btn btn-primary" name="sbm">Thêm</button>
            </form>
        </div>
    </div>
</div>   
</div>
</div>


