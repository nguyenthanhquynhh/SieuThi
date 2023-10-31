<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mains.css">
    <title>Document</title>
</head>

<?php
require_once 'config/db.php';
?>

<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'lietke':
                    require_once 'users/lietke.php';
                    break;

                case 'themuser':
                    require_once 'users/themuser.php';
                    break;

                case 'suauser':
                    require_once 'users/suauser.php';
                    break;

                case 'xoauser':
                    require_once 'users/xoauser.php';
                    break;
                
                default:
                    require_once 'users/lietke.php';
                    break;
            }
        }else{
            require_once 'users/lietke.php';
        }
    ?>
</body>
</html>