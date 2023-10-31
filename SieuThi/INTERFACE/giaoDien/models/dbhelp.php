<?php
require_once ('config.php');

// insert, update, delete --> sử dụng function
function execute($sql){
    //create connection đến database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //query
    mysqli_query($conn, $sql);

    //dóng connection
    mysqli_close($conn);
    
}

//sử dụng lệnh select -> trả về kết quả

function executeResult($sql){
    //create connection đến database
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

    //query
    $resultset = mysqli_query($conn, $sql);
    $list = [];
    while ($row = mysqli_fetch_array($resultset, 1)){
        $list[] = $row;
    }

    //dóng connection
    mysqli_close($conn);
    return $list;
}

function taoDonHang($name, $address, $tel, $email, $total, $pttt){
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
        $sql = "INSERT INTO btl_bill (nameKH, address, tel, email, total, pttt) VALUES('$name', '$address', '$tel', '$email', '$total', '$pttt')";
        mysqli_query($conn, $sql);
        $last_id = $conn->insert_id;;
        mysqli_close($conn);
        return $last_id;
}

function taoGioHang($tensp, $hinhsp, $dongia, $soluong, $thanhtien, $idbill){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    $sql = "INSERT INTO btl_cart (tensp, hinhsp, dongia, soluong, thanhtien, id_bill) VALUES('$tensp', '$hinhsp', '$dongia', '$soluong', '$thanhtien', '$idbill')";
    mysqli_query($conn, $sql);
    $last_id = $conn->insert_id;;
    mysqli_close($conn);
}