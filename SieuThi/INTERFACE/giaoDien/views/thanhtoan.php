<?php

require_once('../models/dbhelp.php');
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/thanhToan.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
    <title>Thanh toán</title>
</head>
<body>
    <!-- <div class="head">
        <div class="headLeft">
            <a href=""><img src="img/logo.png" alt=""></a>
            <a href="">Những thứ bạn cần</a>
            <a href="">Xạp hàng</a>
            
        </div>
        <div class="headRight">
            <a href="">About</a>
            <a href=""> Contact</a>
            <a href="cart.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/></svg>
            </a>
            <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>
            </a>
        </div>
        
    </div> -->
    <?php
        include 'header.php';
    ?>
    
    <div class="content">
        <div class="check_out">
            <h4>Thông tin thanh toán</h4>
            <hr>
           <form action="bill.php" method="post" class="info_input">
           Tên khách hàng: <br>
            <input type="text" style="width:70%" name="hoten">
            <br> 
            <br>
            Địa chỉ <br>
            <input type="text" style="width:70%" name="diachi">
            <br>
            <br>
            số điện thoạt <br>
            <input type="text" name="dienthoai" id="" style="width:70%">
            <br>
            <br>
            Địa email <br>
            <input type="text" style="width:70%" name="email">
            <h4>Thông tin cần bổ sung</h4>
            <hr>
            <br>
            Ghi chú về đơn hàng <br>
            <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2" cols="5" style="width: 674px; height: 68px;"></textarea>
           

        </div>
        <div class="don_hang" style="width:37%;">
            <h4>Đơn hàng của bạn</h4>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">giá</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
        <?php
            // $sql = 'select quanlity * price AS total_price,image, product_name, quanlity, price from products;';
            // $productlist = executeResult($sql);
            // $sum = 0;
            // foreach($productlist as $ds){
            //     $sum += $ds['total_price'];
            //     echo ' <tr>
            //     <td style=""><img src="../img/'.$ds['image'].'" alt="" style="max-width: 50px;"></td>
            //     <td style="width:20%">'.$ds['price'].'</td>
            //     <td style="width:20%">'.$ds['quanlity'].'</td>
            //     <td style="width:40%">'.$ds['total_price'].'</td>
            //     </tr>';
            // }       

             $tong = 0;
                        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                        for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
                            $tt=($_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3]);
                            $tong += $tt;
                            echo '
                                <tr>
                                    <td style=""><img src="../img/'.$_SESSION['giohang'][$i][0].'" alt="" style="max-width: 50px;"></td>
                                    <td style="width:20%">'.$_SESSION['giohang'][$i][3].'</td>
                                    <td style="width:20%">'.$_SESSION['giohang'][$i][2].'</td>
                                    <td style="width:40%">'.$tt.'</td>
                                </tr>';
                                    
                                }
                            } ?>
                </tbody>
                <tfoot>
                    <?php
                            echo '<tr>
                            <th style="width:40%;">Tổng tiền giỏ hàng:</th>
                            <th style="">'.$tong.'</th>
                            </tr>'
                        
                        
                    ?>
                    
                </tfoot>
        </table>

            <form action="" class="form_thanh_toan" >
                <input type="radio" id="viettelPay" name="fav_language" value="viettelPay" onclick="myFunction()">
                <label for="viettelPay">Thanh toán khi nhận hàng <img src="img/viettelPay.jpg" alt="" style="width:30px"></label><br>

                <!-- <input type="radio" id="momo" name="fav_language" value="momo" onclick="myFunction()"> -->
                <!-- <label for="momo">Thanh toán bằng momo <img src="img/momo.jpg" alt="" style="width:30px"></label><br>   -->
                <div id="text"></div>              
            <div class="chinh_sach" style="margin:20px">
                <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được mô tả trong chính sách riêng tư của chúng tôi.</p>
            </div>
            <div class="dat_don_hang">
                <input type="submit" value="Đặt hàng" name="DatHang">
            </div>
           </form>
           </form>
            
        </div>    
    </div>


    <script>
        function myFunction(){
            var viettelPay = document.getElementsByName("fav_language")[0];
            var momo = document.getElementsByName("fav_language")[1];
            var textDiv = document.getElementById("text");
            
            if(viettelPay.checked){
                textDiv.innerHTML = "Bạn hãy chuẩn bị tiền để nhận hàng . Đơn hàng sẽ được xác nhận ngay sau khi bạn xác nhận hình thức thanh toán.";
            }else if(momo.checked){
                textDiv.innerHTML = "Chuyển khoản vào tài khoản Ví <B>Momo</B> của chúng tôi. Đơn hàng sẽ được xác nhận ngay sau khi chuyển khoản.";
            }
        }
    </script>

    <?php
     include 'footer.php';
    ?>
</body>
</html>