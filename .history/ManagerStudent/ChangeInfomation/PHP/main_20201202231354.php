<?php
    $ma = $_POST['mahs'];
    $name = $_POST['hoten'];
    $class1 = $_POST['class'];
    $khoi = $_POST['khoi1'];
    $diachi = $_POST['address'];
    $email1 = $_POST['email'];
    $ngaysinh = $_POST['date1'];
    $ququan = $_POST['que'];
    $conn = new mysqli('localhost', 'root', '', 'tttracnghiem');
 
// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
} 
 
// Lệnh update
$sql = "UPDATE News SET title='Tiêu đề updated' WHERE id=1";
 
// Thực hiện update
if ($conn->query($sql) === TRUE) {
    echo "update thành công";
} else {
    echo "Update thất bại: " . $conn->error;
}
 
// ngắt kết nối
$conn->close();
?>