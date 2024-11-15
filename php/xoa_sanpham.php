<?php include("../php/config.php");


if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "DELETE FROM dathang WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query failed: ". mysqli_error($conn));
    } else {
        header("Location: ../dathang.php?delete_msg=DELETE_SUCCESS");
    }
}
