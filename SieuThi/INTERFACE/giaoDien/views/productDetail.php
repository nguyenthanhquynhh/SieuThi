<?php
    session_start();
    if(!isset($_SESSION['chitiet'])) $_SESSION['chitiet']=[];
    
    if(isset($_POST['addchitiet'])&&($_POST['addchitiet'])){
        $hinh=$_POST['hinh'];
        $tensp= $_POST['ten'];
        $gia= $_POST['gia'];
        $infor= $_POST['info'];
        //kiểm tra sp xem có trong giỏ hàng hay không.
        $fl = 0;
        for ($i=0; $i < sizeof($_SESSION['chitiet']); $i++) { 
            if($_SESSION['chitiet'][$i][1] == $tensp){
                $fl = 1;
                break;

            }
        }
        var_dump ($infor);

        if($fl == 0){
            //thêm mới sản phẩm
            $sp=[$hinh, $tensp ,$gia];
            $_SESSION['chitiet'][] = $sp;
        }
        //unset($_SESSION['chitiet']);
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm - Assorted Coffee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../css/productdetail.css"/>

</head>
<body>
    <!-- Header -->
    <?php
      include 'header.php';
    ?> 
    <!-- <div class="containerr">
        <div class="container">
            <a href="product.php" class="back"><i class="fas fa-arrow-left"></i> Quay lại</a>
            <span class="logo"><a href="#">Assorted Coffee</a></span>
            <div class="cart">
                <a href="cart.php" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div> -->
    
    <!-- Product Detail -->
    <section class="product-detail">
        <div class="container">
            <!--  -->
            <?php
                        echo '
                            <div class="product-image">
                                <img src="../img/'.$hinh.'" alt="Assorted Coffee" style="width:100%; height: 100%;">
                            </div>

                            <div class="product-info">
                                <h1>'.$tensp.'</h1>
                                <div class="price">'.$gia.' $</div>
                                <div class="description">
                                    <p>'.$infor.'</p>
                                </div>
                                <form action="cart.php" method="post">
                                    <div class="options">
                                            Số lượng:
                                            <input type="number" name="soluong" min="1" max="100" value="1">
                                            <input type="hidden" name="hinh" value="'.$hinh.'">
                                            <input type="hidden" name="ten" value="'.$tensp.'">
                                            <input type="hidden" name="gia" value="'.$gia.'">
                                    </div>

                                    <div class="cart-action">
                                    <input type="submit" name="addGiohang" value="Thêm vào giỏ hàng">
                                    </div>
                                </form>
                            </div>'; ?>

            <!--  -->            
            <!-- <div class="product-image">
                <img src="../img/iphoneX.jpg" alt="Assorted Coffee" style="width:60%">
            </div>

            <div class="product-info">
                <h1>Assorted Coffee</h1>
                <div class="price">30.00 $</div>
                <div class="description">
                    <p>Thưởng thức đồ uống thanh mát từ các loại cà phê ngon nhất đã được chọn lọc và pha chế với kỹ thuật cao cấp.</p>
                </div>
                <div class="options">
                    <form action="cart.php" method="post">
                        Số lượng:
                        <input type="number" min="1" max="100" value="1">
                    </form>
                </div>

                <div class="cart-action">
                    <button class="add-to-cart">Thêm vào giỏ hàng</button>
                </div>
            </div> -->

        </div>
        
		        <!-- Reviews -->
				<!-- <div class="reviews">
					<div class="container">
					  <h2>Đánh giá của khách hàng</h2>
					  <div class="review-list">
						<div class="review">
						  <h3>Người dùng 1</h3>
						  <div class="description">
							<p>Sản phẩm rất ngon và hợp với sở thích của tôi</p>
						  </div>
						</div>
						<div class="review">
						  <h3>Người dùng 2</h3>
						  <div class="description">
							<p>Tôi đã uống trà sữa nhiều lần nhưng chưa bao giờ được thưởng thức một sản phẩm đậm đà như vậy. Cảm ơn Assorted Coffee</p>
						  </div>
						</div>
						<div class="review">
						  <h3>Người dùng 3</h3>
						  <div class="description">
							<p>Phục vụ tuyệt vời, sản phẩm tốt và giá cả phải chăng. Tôi sẽ quay lại.</p>
						  </div>
						</div>
					  </div>
					  <div class="review-form">
						<h2>Để lại đánh giá của bạn</h2>
						<form id="review-form">
						  <div>
							<label for="review-rating">Rating:</label>
							<select id="review-rating" name="rating" required>
							  <option value="" disabled selected>Chọn đánh giá</option>
							  <option value="1">1 sao</option>
							  <option value="2">2 sao</option>
							  <option value="3">3 sao</option>
							  <option value="4">4 sao</option>
							  <option value="5">5 sao</option>
							</select>
						  </div>
						  <div>
							<label for="review-text">Nội dung đánh giá:</label>
							<textarea id="review-text" name="review" required></textarea>
						  </div>
						  <div>
							<label for="review-author">Tên của bạn:</label>
							<input type="text" id="review-author" name="author" required>
						  </div>
						  <div>
							<label for="review-email">Email của bạn:</label>
							<input type="email" id="review-email" name="email" required>
						  </div>
						  <button type="submit">Đăng đánh giá</button>
						</form>
					  </div>
					</div>
				  </div> -->
				  
				
        <!--  -->
        <div class="wapper_description" >
            <label  style=" font-size: x-large;" for="a">Mô tả</label>
            <!-- <label style="margin-left: 10px; font-size: x-large;"   for="b">Đánh giá</label> -->
            
        </div>
        <p style="margin-left: 116px;"> Quý khách tích lũy đủ 50 điểm sẽ nhận được 01 Voucher trị giá 50.000đ để trừ vào giá trị đơn hàng khi mua hàng.
          Voucher được áp dụng trên toàn bộ các cửa hàng và không quan trọng ai là người sử dụng.</p>



        <!-- mo ta -->
        <div class="releateeee" >
          <h2>Sản phẩm liên quan</h2>
        </div>

        <!-- Related Products -->
        
            
              
                <div class="product-list">
                    <div class="releate">
                      <div class="par_product">
                          <div class="product">
                              <img src="../img/qua1.jpg"alt="Cappuccino" style="width:100%; height:100%;">
                          </div>
                          <div class="name_price">
                            <h3>Cappuccino</h3>
                            <div class="price">$20.00</div>
                          </div>
                          
                      </div>
                      
                                                   
                      
                      <div class="par_product">
                          <div class="product">
                              <img src="../img/qua5.jpg"alt="Cappuccino" style="width:100%; height:100%;">
                          </div>
                          <div class="name_price">
                            <h3>Cappuccino</h3>
                            <div class="price">$20.00</div>
                          </div>
                      </div>
                      <div class="par_product">
                          <div class="product">
                              <img src="../img/qua3.jpg"alt="Cappuccino" style="width:100%; height:100%;">
                          </div>
                          <div class="name_price">
                            <h3>Cappuccino</h3>
                            <div class="price">$20.00</div>
                          </div>
                      </div>
                  </div>
              </div>


                
                
            
        
    </section>
	<script>
		let cart = [];
  
		function addToCart(product) {
		  let index = cart.findIndex((item) => item.id === product.id);
		  if (index !== -1) {
			cart[index].quantity++;
		  } else {
			cart.push({ ...product, quantity: 1 });
		  }
		}
  
		document.querySelector('#add-to-cart').addEventListener('click', () => {
		  let product = {
			id: 1,
			name: 'Product 1',
			price: 100000
		  };
		  addToCart(product);
		});
	  </script>

    <!-- Footer -->

    <?php
        include 'footer.php';
      ?>
    <!-- <footer>
      
        <div class="container">
            <p><a href="#">Chính sách vận chuyển</a> | <a href="#">Chính sách đổi trả</a> | <a href="#">Chính sách bảo mật</a></p>
        </div> 
    </footer> 

</body>
</html>
