<?php
require('connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM samchuk WHERE ID = $id";

    if(mysqli_query($conn, $sql)) {
        echo "ลบรีวิวสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: samchuk.php");
    exit();
} else {
    echo "ไม่พบรีวิวที่ต้องการลบ";
}
?>