<?php
    $ma = $_POST['mahs'];
    $name = $_POST['hoten'];
    $class1 = $_POST['class'];
    $khoi = $_POST['khoi1'];
    $diachi = $_POST['address'];
    $email1 = $_POST['email'];
    $ngaysinh = $_POST['date1'];
    $quequan = $_POST['que'];
    $conn = new mysqli('localhost', 'root', '', 'tttracnghiem');
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh update
$sql = "UPDATE hocsinh SET title='$name, $class1, $khoi, $diachi, $email1, $ngaysinh, $quequan ' WHERE mahs=$ma";
 
// Thực hiện update
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
 
// ngắt kết nối
$conn->close();
?>