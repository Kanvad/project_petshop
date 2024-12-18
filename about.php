<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon_page.png">
    <title>Cửa hàng thú cưng</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="topnav">
        <a class="tag-index" href="index.php">Trang chủ</a>
        <a class="tag-index" href="sanpham.php">Sản phẩm</a>
        <a class="tag-index" href="dathang.php"><i class="fa-solid fa-cart-shopping"></i> Đặt hàng</a>
        <a class="active tag-index" href="about.php">About</a>
        <div class="topnav-right">
            <a class="split" href="#">Pet Shop</a>
            <div class="icon"></div>
        </div>
    </div>

    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Chào mừng bạn đến với cửa hàng thú cưng của chúng tôi! Chúng tôi mong muốn cung cấp những sản phẩm tốt nhất
            cho những người bạn thú cưng của bạn.</p>
        <p>Với trang web này bạn có thể thêm, xóa, sửa các đơn đặt hàng của bạn.</p>
    </div>

    <h2 class="title-team">Các thành viên nhóm</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="img/phat.jpg" alt="Hinh" width="300px" height="400px">
                <div class="container">
                    <h2>Huỳnh Tấn Phát</h2>
                    <p class="title">Lập trình viên</p>
                    <p>Tìm kiếm hình ảnh và thiết kế website</p>
                    <p>phat.2374802010376@vanlanguni.vn</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="img/tien.jpg" alt="Hinh" width="300px" height="400px">
                <div class="container">
                    <h2>Lương Nhật Tiến</h2>
                    <p class="title">Lập trình viên</p>
                    <p>Tìm kiếm hình ảnh và thiết kế website</p>
                    <p>tien.2374802013071@vanlanguni.vn</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

    </div>

    <?php include("./php/footer.php"); ?>