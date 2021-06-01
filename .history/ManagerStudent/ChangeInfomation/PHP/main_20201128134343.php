<?php
    $ma = $_POST['mahs'];
    $name = $_POST['hoten'];
    $class1 = $_POST['class'];
    $khoi = $_POST['khoi1'];
    $diachi = $_POST['address'];
    $email1 = $_POST['email'];
    $ngaysinh = $_POST['date1'];
    $ququan = $_POST['que'];

    $conn = mysqli_connect("localhost","root","","thitracnghiemon");
    //xay dung cau len truy van
    $sql = "update hocsinh set mahs = '$ma', lop =  $class1, khoi = $khoi,  diaChi = $diachi,  Emai = $email1. ngaySinh = $ngaysinh, 
     queQuan = $ququan ";

    mysqli_connect($conn, $sql);

    mysqli_close($conn);
?>