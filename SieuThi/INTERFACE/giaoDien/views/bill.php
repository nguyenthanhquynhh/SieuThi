<?php
    require_once('../models/dbhelp.php');
    session_start();
    //require_once('cart.php');

    

    if(isset($_POST['DatHang'])&&$_POST['DatHang']){
        $tong = 0;
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
                $tt=($_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3]);
                $tong += $tt;
            }
        } 

        //lấy thông tin từ form khách hàng để tạo đơn hàng
        $name=$_POST['hoten'];
        $address=$_POST['diachi'];
        $tel=$_POST['dienthoai'];
        $email=$_POST['email'];
        $pttt =$_POST['fav_language'];
        $total= $tong;
        // Kiểm tra nếu có thông tin đầy đủ
        // if ($name && $email && $tel && $address &&$pttt) {
        // Tạo nội dung email
        // $to = 'quynhnguyen03062002@gmail.com'; // Địa chỉ email của bạn
        // $subject = 'Đơn hàng mới từ ' . $name;
        // $message = "Họ tên: $name\nEmail: $email\nSố điện thoại: $tel\nSản phẩm: $pttt\nTổng tiền: $total";
        // }
        //  // Gửi email
        //     if (mail($to, $subject, $message)) {
        //         echo 'Cảm ơn bạn đã đặt hàng!';
        //     } 
            


        //insert đơn hàng
        // $sql = "INSERT INTO btl_bill (nameKH, address, tel, email, total, pttt) VALUES('$name', '$address', '$tel', '$email', '$total', '$pttt')";
        // execute($sql);
        $idbill = taoDonHang($name, $address, $tel, $email, $total, $pttt);

        //lấy thông tin giỏ hàng từ sesstion + id đơn hàng vừa tạo insert vào bảng giỏ hàng
        for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
            $tensp = $_SESSION['giohang'][$i][1];
            $hinhsp = $_SESSION['giohang'][$i][0];
            $dongia = $_SESSION['giohang'][$i][3];
            $soluong = $_SESSION['giohang'][$i][2];
            $thanhtien = $dongia*$soluong;
            taoGioHang($tensp, $hinhsp, $dongia, $soluong, $thanhtien, $idbill);

        }



        //show confirm đơn hàng
        $ttkh=' 
        <table class="thongtinkhachhang" style="width:100%">  
            <tr style="padding: 5px;">  
                <th style="padding: 5px; width: 30%;">Tên khách hàng</th>  
                <th style="padding: 5px;" colspan="2">'.$name.'</th>  
            </tr>  
            <tr style="padding: 5px;">  
                <td style="padding: 5px; width: 30%;">Địa chỉ</td>  
                <td style="padding: 5px;">'.$address.'</td>   
            </tr>  
            <tr style="padding: 5px;">  
                <td style="padding: 5px; width: 30%;">Điện thoại</td>  
                <td style="padding: 5px;">'.$tel.'</td>   
            </tr> 
            <tr style="padding: 5px;">  
                <td style="padding: 5px; width: 30%;">Email</td>  
                <td style="padding: 5px;">'.$email.'</td>   
            </tr> 
            </table>';
        
        function ttgh(){

            if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
                    $tt = ($_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][2]);
                     echo '
                        <tr>
                            <td style=""><img src="../img/'.$_SESSION['giohang'][$i][0].'" alt="" style="max-width: 50px;"></td>
                            <td style="width:20%">'.$_SESSION['giohang'][$i][3].'</td>
                            <td style="width:20%">'.$_SESSION['giohang'][$i][2].'</td>
                            <td style="width:40%">'.$tt.'</td>
                        </tr>';
                                    
                }
            } 
 
        }


        //unset giở hàng session
        
        $success = 'Bạn đặt đơn hàng thành công! Click tiếp tục để đặt hàng';
        
        //tính tổng đơn hàng
        

        
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/billa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Mã đơn hàng:<?php echo $idbill ?></h1>

        <div class="chiTietDonHang borders">
            <h2>Thông tin người nhận</h2>
            <?php echo $ttkh; ?>
            
        </div>

    <div class="Thongtindonhang">
    <table  style="margin-top: 100px;">
                <thead>
                    <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">giá</th>
                    <th scope="col">số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                         <!-- alo -->
                         <?=ttgh();?>
                </tbody>
                <tfoot>
                    <?php
                            echo '<tr>
                            <th style="width:40%;">Tổng tiền giỏ hàng:</th>
                            <th style="">'.$tong.'</th>
                            </tr>';
                        
                        
                    ?>
                
                </tfoot>
        </table>
    </div>
        <a href="product.php" class="btnDatHang" <?php unset($_SESSION['giohang']);?> ><button>Tiếp tục đặt hàng</button></a>
    </div>
    <a href="#" class="btnDatHangg"  ><button><?php echo $success;?></button></a> 
</body>
</html>