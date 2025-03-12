<?php
require('connect.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM samchuk WHERE ID = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "ไม่พบรีวิวที่ต้องการแก้ไข";
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $star = $_POST['star'];
    $review = $_POST['review'];

    $update_sql = "UPDATE samchuk SET Name='$name', Star='$star', Review='$review' WHERE ID = $id";

    if(mysqli_query($conn, $update_sql)) {
        echo "แก้ไขรีวิวสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: samchuk.php"); // กลับไปหน้า samchuk หลังแก้ไข
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>แก้ไขรีวิว</title>
</head>
<body>
    <h2>แก้ไขรีวิว</h2>
    <form method="post">
        ชื่อ: <input type="text" name="name" value="<?php echo $row['Name']; ?>" required><br>
        คะแนน: <input type="number" name="star" value="<?php echo $row['Star']; ?>" min="1" max="9" required><br>
        รีวิว: <textarea name="review" required><?php echo $row['Review']; ?></textarea><br>
        <button type="submit">บันทึกการแก้ไข</button>
    </form>
</body>
</html>
