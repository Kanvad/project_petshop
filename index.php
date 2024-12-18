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
        <a class="active tag-index" href="index.php">Trang chủ</a>
        <a class="tag-index" href="sanpham.php">Sản phẩm</a>
        <a class="tag-index" href="dathang.php"><i class="fa-solid fa-cart-shopping"></i> Đặt hàng</a>
        <a class="tag-index" href="about.php">About</a>
        <div class="topnav-right">

            <a class="split" href="#">Pet Shop</a>
            <div class="icon"></div>
        </div>
    </div>

    <div class="main">
        <div class="header_content">
            <!-- <div></div>
            <div class="header_title">
                <h1>Chào mừng đến trang web cửa hàng thú cưng</h1>
            </div> -->
        </div>

        <h1 class="title">Các sản phẩm được ưa thích của cửa hàng</h1>
        <fieldset>
            <legend>
                Thức ăn cho Mèo
            </legend>

            <div class="item-thuc-an-meo">
                <div class="card">
                    <img src="img/ThucAnMeo1.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho mèo Snack Jinny 35g</h1>
                    <p class="price">30.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/ThucAnMeo2.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho mèo Cats Rang 5kg </h1>
                    <p class="price">170.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/ThucAnMeo3.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho mèo Minino Yum! 7kg</h1>
                    <p class="price">250.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>
                Thức ăn cho Chó
            </legend>

            <div class="item-thuc-an-meo">
                <div class="card">
                    <img src="img/ThucAnCho1.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho cún Royal Canin 1.5kg </h1>
                    <p class="price">450.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/ThucAnCho2.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho cún Pedigree 8kg</h1>
                    <p class="price">300.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/ThucAnCho5.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Thức ăn cho cún Chunky 1.5kg</h1>
                    <p class="price">200.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>
                Đồ chơi cho thú cưng
            </legend>

            <div class="item-thuc-an-meo">
                <div class="card">
                    <img src="img/DoChoiCho1.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Banh nhựa cho cún</h1>
                    <p class="price">20.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/DoChoiCho3.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Dây thừng cho cún chơi đùa </h1>
                    <p class="price">30.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
                <div class="card">
                    <img src="img/LuocChaiLong1.jpg" alt="Snack Jinny" width="300px" height="270px">
                    <h1>Lược chải lông chó/mèo</h1>
                    <p class="price">20.000 VND </p>
                    <p><button onclick="window.location.href = 'dathang.php';">Mua</button></p>
                </div>
            </div>
        </fieldset>
    </div>

   <?php include("./php/footer.php"); ?>