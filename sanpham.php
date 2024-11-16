<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon_page.png">
    <title>Cửa hàng thú cưng</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="topnav">
        <a class="tag-index" href="index.html">Trang chủ</a>
        <a class="active tag-index" href="sanpham.php">Sản phẩm</a>
        <a class="tag-index" href="dathang.php"><i class="fa-solid fa-cart-shopping"></i> Đặt hàng</a>
        <a class="tag-index" href="about.html">About</a>
        <div class="topnav-right">
            <a class="split" href="#">Pet Shop</a>
            <div class="icon"></div>
        </div>
    </div>

    <div class="main">
        <h1 class="title-sanpham">Tất cả các sản phẩm của cửa hàng</h1>
        <div class="all-item">
            <?php
            include("php/config.php");
            $sql = "SELECT * FROM sanpham";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card">
                    <img src="img/<?php echo $row["hinh"] ?>" alt="Snack Jinny" width="300px" height="270px">
                    <h1><?php echo $row["ten"] ?></h1>
                    <p class="price"><?php echo $row["gia"] ?> VND </p>
                    <p class="btn-mua"><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
            <?php
            }
            $conn->close();
            ?>
        </div>

    </div>

    <?php include('php/footer.php'); ?>