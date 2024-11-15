<?php include('php/header.php'); ?>
<?php include('php/config.php'); ?>

<div class="main">
    <h1 id="title-dathang">Các sản phẩm bạn đã đặt hàng</h1>
    <div class="container">
        <div class="box1">
            <h4>Danh sách sản phẩm</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Mua sản phẩm mới</button>
        </div>
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM dathang";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($conn));
                } else {
                    // print_r($result);
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <!-- <td><?php echo $row["id"] ?></td> -->
                            <td><?php echo $row["ten"] ?></td>
                            <td><?php echo $row["soluong"] ?></td>
                            <td><?php echo $row["gia"] ?> VND</td>
                            <td><a href="php/edit_sanpham.php?id=<?php echo $row["id"] ?>" class="btn btn-success">Edit</a></td>
                            <td><a href="php/xoa_sanpham.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                <?php
                    }
                }
                ?>

                <tr class="tong_tien">
                    <td colspan="2">Tổng tiền:</td>
                    <td>
                        <?php
                        $sql_tong = "SELECT SUM(soluong * CAST(REPLACE(gia, '.', '') AS UNSIGNED)) AS tong_tien FROM dathang";
                        $result_tong = mysqli_query($conn, $sql_tong);
                        $row_tong = mysqli_fetch_assoc($result_tong);
                        echo number_format($row_tong["tong_tien"], 0, ",", ".") . " VND";
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>

        <?php
        if (isset($_GET["them_sanpham"])) {
            echo "<h6 class='text-success'>" . $_GET["them_sanpham"] . "</h6>";
        }

        if (isset($_GET["delete_msg"])) {
            echo "<h6 class='text-destroy'>" . $_GET["delete_msg"] . "</h6>";
        }
        ?>
        <!-- Modal -->
        <form action="php/them_sanpham.php" method="post">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            $query = "SELECT * FROM san_pham";
                            $result = mysqli_query($conn, $query);
                            ?>
                            <div class="form-group">
                                <label for="ten">Tên sản phẩm: </label><br>
                                <select name="ten" id="ten" class="form-control">
                                    <?php
                                    $query = "SELECT * FROM sanpham";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?php echo $row["ten"] ?>"><?php echo $row["ten"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="soluong">Số lượng: </label><br>
                                <input type="number" id="soluong" name="soluong" step="1" min="1" value="1" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-success" name="them_sanpham" value="Thêm">
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<?php include('php/footer.php'); ?>