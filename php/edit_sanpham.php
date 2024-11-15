<?php
include("../php/config.php");

$query = "SELECT * FROM san_pham";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon_page.png">
    <title>Cửa hàng thú cưng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mona+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div class="topnav">
        <a class="tag-index" href="../index.html">Trang chủ</a>
        <a class="tag-index" href="../sanpham.php">Sản phẩm</a>
        <a class="active tag-index" href="../dathang.php"><i class="fa-solid fa-cart-shopping"></i> Đặt hàng</a>
        <a class="tag-index" href="../about.html">Giới thiệu</a>
        <div class="topnav-right">
            <a class="split" href="#">Pet Shop</a>
            <div class="icon"></div>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $query = "SELECT * FROM dathang WHERE id = '$id'";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                } else {
                    $row1 = mysqli_fetch_assoc($result);
                    // print_r($result);
                }
            }


            if (isset($_POST["edit_sanpham"])) {
                $ten = $_POST["ten"];
                $soluong = $_POST["soluong"];
                $query = "UPDATE dathang SET ten = '$ten', soluong = '$soluong' WHERE id = '$id'";
                $result = mysqli_query($conn, $query);
                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                } else {
                    header("Location: ../dathang.php");
                }
            }
            ?>
            <form action="edit_sanpham.php?id=<?php echo $id ?>" method="post">
                <div class="form-group">
                    <label for="ten">Tên sản phẩm: </label><br>
                    <select name="ten" id="ten" class="form-control">
                        <option value="<?php echo $row1["ten"] ?>"><?php echo $row1["ten"] ?></option>
                        <?php
                        $query = "SELECT DISTINCT ten FROM sanpham WHERE ten != '$row1[ten]'";
                        $result = mysqli_query($conn, $query);
                        while ($row2 = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $row2["ten"] ?>"><?php echo $row2["ten"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="soluong">Số lượng: </label><br>
                    <input type="number" id="soluong" name="soluong" step="1" min="1" value="<?php echo $row1["soluong"] ?>" class="form-control">
                </div>
                <input type="submit" class="btn btn-success btn-edit" name="edit_sanpham" value="Sửa thông tin">

            </form>
        </div>
    </div>
    <?php include("../php/footer.php"); ?>