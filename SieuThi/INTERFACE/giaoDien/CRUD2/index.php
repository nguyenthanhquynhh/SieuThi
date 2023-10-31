<?php
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="mains.css">
    
    <title>CRUD</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'sanpham/danhsach.php';
                    break;

                case 'them':
                    require_once 'sanpham/them.php';
                    break;

                case 'sua':
                    require_once 'sanpham/sua.php';
                    break;

                case 'xoa':
                    require_once 'sanpham/xoa.php';
                    break;
                
                default:
                    require_once 'sanpham/danhsach.php';
                    break;
            }
        }else{
            require_once 'sanpham/danhsach.php';
        }
    ?>
</body>
</html>