<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "supan";
$Name = $_POST['Name'];
$Star = $_POST['Star'];
$Review = $_POST['Review'];
echo $_POST['ID'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO samchuk (Name, Star, Review)
VALUES ('$Name', '$Star', '$Review')";
mysqli_set_charset($conn, 'utf8');
if (mysqli_query($conn, $sql)) {
  echo "<script>
            alert('เพิ่มข้อมูลได้เรียบร้อยแล้ว');
            window.location.href='samchuk.php'; 
          </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>