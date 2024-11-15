<?php
include("../php/config.php");

if (isset($_POST["them_sanpham"])) {
    // echo "clicked";
    $ten = $_POST["ten"];
    $soluong = $_POST["soluong"];
    $query = "SELECT gia FROM sanpham WHERE ten = '$ten'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $gia = mysqli_fetch_assoc($result);

    if ($gia) {
        $gia = $gia['gia'];
    } else {
        // xử lý trường hợp không tìm thấy giá
        $gia = null; // hoặc giá mặc định
    }

    $query = "INSERT INTO dathang (ten, soluong, gia) VALUES ('$ten', '$soluong', '$gia')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        header("Location: ../dathang.php?them_sanpham=SUCCESS");
        exit;
    }
}
