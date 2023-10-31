<?php
require_once('../models/dbhelp.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các loại rau tươi</title>
</head>

<?php
  include 'header.php';
?>
<body>
    <div class="container-fluid">
        <div class="roww">
            <div class="col-lg-2 categorys">
                <H4>Danh mục</H4>
                <hr>
                <ul>
                    <li><a href="productRau.php">Các loại rau tươi</a></li>
                    <li><a href="productQua.php">Các hoa quả</a></li>
                    <li><a href="productHat.php">Các loại hạt</a></li>
                </ul>
            </div>
    
            <div class="col-lg-10 products">
                <div class="row">
                    <a href="#" class="col-lg-4" style="text-decoration:none; color: black;"><h4 >Các loại rau tươi</h4></a>
                    <div class="input-group col-lg-4 ">
                    <select class="custom-select " id="inputGroupSelect01">
                      <option selected>Mặc định</option>
                      <option value="1">Theo giá: Từ thấp đến cao</option>
                      <option value="2">Theo giá: Từ cao đến thấp</option>
                      <option value="3">Mới nhất</option>
                    </select>
                  </div>
                </div>
                <hr>
                
                <div class="row">

                  <?php
                  $sql = 'SELECT products.*, brands.brand_name FROM products INNER JOIN brands ON products.brand_id = brands.brand_id WHERE brands.brand_name = "Rau tươi"';
                  $productlist = executeResult($sql);
                  foreach($productlist as $ds){
                    echo '<div class="col-lg-2 product_item">
                    <div class="card" style="border-radius: 1rem; height: 300px;">
                        <img src="../img/'.$ds['image'].'" class="card-img-top" alt="..." style="">
                        <div class="card-body">
                          <h5 class="card-title">'.$ds['product_name'].'</h5>
                          <form action="productDetail.php" method="post">
                            <input type="submit" name="addchitiet" value="'.$ds['price'].'">
                            <input type="hidden" name="hinh" value="'.$ds['image'].'">
                            <input type="hidden" name="ten" value="'.$ds['product_name'].'">
                            <input type="hidden" name="gia" value="'.$ds['price'].'">
                            <input type="hidden" name="info" value="'.$ds['infor'].'">
                        </form>
                        </div>
                      </div>
                  </div>';
                }     
                  ?>
                    

                </div>
               
            </div>
        </div>
       
        <?php
          include 'footer.php'
        ?>
    </div>
</body>
</html>