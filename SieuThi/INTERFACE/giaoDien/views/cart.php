<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    if(isset($_GET['delcart'])&&($_GET['delcart'] == 1)) unset($_SESSION['giohang']);
    //xóa sản phẩm trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid'] >= 0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    // lấy dữ liệu từ form
    if(isset($_POST['addGiohang'])&&($_POST['addGiohang'])){
        $hinh=$_POST['hinh'];
        $tensp= $_POST['ten'];
        $soluong= $_POST['soluong'];
        $gia= $_POST['gia'];
        //kiểm tra sp xem có trong giỏ hàng hay không.
        $fl = 0;
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            if($_SESSION['giohang'][$i][1] == $tensp){
                $fl = 1;
                $soluongnew = $soluong + $_SESSION['giohang'][$i][2];
                $_SESSION['giohang'][$i][2] = $soluongnew;
                break;

            }
        }

        if($fl == 0){
            //thêm mới sản phẩm
            $sp=[$hinh, $tensp, $soluong ,$gia];
            $_SESSION['giohang'][] = $sp;
        }
       
    }
    
    
    // function showgiohang(){
    //     if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
    //         for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
    //             $tt=($_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3]);
    //             echo '
    //             <tr>
    //             <th class="col-lg-2">x</th>
    //             <th class="col-lg-2"><img src="../img/'.$_SESSION['giohang'][$i][0].'" alt="" style="max-width: 40%;"></th>
    //             <th class="col-lg-2">'.$_SESSION['giohang'][$i][1].'</th>
    //             <th class="col-lg-2">'.$_SESSION['giohang'][$i][3].'</th>
    //             <th class="col-lg-2">'.$_SESSION['giohang'][$i][2].'</th>
    //             <th class="col-lg-2">'.$tt.'</th>
    //             </tr>';
                
    //         }
    //     } 
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

        <?php
            include 'header.php';
        ?>
<body>
        
    <div class="container-fluidd">
        
        <div class="containerr">
            <div class="roww">
                <h2>CART</h2>
                <table class="carts" style="border: 1px solid #CFCFCF; width:90%; height: 242px; ">
                    <thead style="border: 1px solid #CFCFCF; background-color: white; height: 55px;">
                        <tr>
                            <th class="col-lg-2"></th>
                            <th class="col-lg-2"></th>
                            <th class="col-lg-2">Sản phẩm</th>
                            <th class="col-lg-2">Giá</th>
                            <th class="col-lg-2">Số lượng</th>
                            <th class="col-lg-2">tạm tính</th>
                        </tr>
                    </thead>
                    <tbody style="background: #F8F6F3;">
                        <div class="row">
                        <?php
                            $tong = 0;
                            if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                                for($i = 0; $i < sizeof($_SESSION['giohang']); $i++){
                                    $tt=($_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3]);
                                    $tong += $tt;
                                    echo '
                                    <tr>
                                        <th class="col-lg-2">
                                            <a style="text-decoration: none;" href="cart.php?delid='.$i.'">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="color: #CFCFCF;" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </a>
                                        </th>
                                        <th class="col-lg-2"><img src="../img/'.$_SESSION['giohang'][$i][0].'" alt="" style="max-width: 40%;"></th>
                                        <th class="col-lg-2">'.$_SESSION['giohang'][$i][1].'</th>
                                        <th class="col-lg-2">'.$_SESSION['giohang'][$i][3].'</th>
                                        <th class="col-lg-2">'.$_SESSION['giohang'][$i][2].'</th>
                                        <th class="col-lg-2">'.$tt.'</th>
                                    </tr>';
                                    
                                }
                            } 
                            
                            
                        ?>
                        </div>   
                    </tbody>
                    <tfoot style="border: 1px solid #CFCFCF; height: 75px;">
                        <tr>
                            <th><a href="product.php"><button>Tiếp tục đặt hàng</button></a></th>
                            <th><a href="cart.php?delcart=1"><button>Xóa giỏ hàng</button></a></th>
                        </tr>
                    </tfoot>
                </table>
    
                <div class="rowww">
                <table class="TongTien" style="border: 1px solid #CFCFCF; height: 270px; width: 545px;">
                    <thead style="border: 0.5px solid #CFCFCF; width: 500px" >
                        <tr style="height: 63px; text-align: center;">
                            <th><h2>Cộng giỏ hàng</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <th>Tạm tính</th>
                            <th> <?php echo $tong; ?></th>
                        </tr>
                        <tr> 
                            <th>Tổng tiền</th>
                            <th><?php echo $tong; ?></th>
                        </tr>
                    </tbody>
                    <tfoot style="border: 1px solid #CFCFCF;">
                        <tr style=" text-align: center;">
                            <th><a href="thanhtoan.php"><button>Tiến hành thanh toán</button></a></th>
                        </tr>
                    </tfoot>
                </table>
                </div>
                
            </div>
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>