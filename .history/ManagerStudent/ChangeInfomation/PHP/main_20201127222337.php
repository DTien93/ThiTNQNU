<meta charset = "UTF8">
<?php
    $conn = mysqli_connect("localhost","root","","thitracnghiemon") or die ("Không thể kết nối được");
    $ma = $_POST["mahs"];
    $name = $_POST["hoten"];
    $lophoc = $_POST["class"];
    $khoahoc=$_POST["khoi1"];
    $noiht = $_POST["address"];
    $hometown = $_POST["date1"];
    $sdt = $_POST["que"];
    //Truy vấn tới
    $sql ="select * from formkqdk where masv = '".$ma."'";
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_array($result))
    {
        echo "Người dùng đã tồn tại";
        echo "</br><a href=\"javascript:history.go(-1)\">Quay lại trang đăng ký</a>";
    }
    else
    {
        $sql = "insert into formkqdk(masv, hoten, lop, khoa, noio, quequan, phone, email, ngaydangky)
        values('".$ma."','".$name."','".$lophoc."','".$khoahoc."','".$noiht."','".$hometown."','".$sdt."','".$email."','".$datedk."')";
        mysqli_query($conn, $sql);
        echo "Đăng ký ngoại trú thành công!";
        echo "</br><a href=\"javascript:history.go(-2)\">Quay lại trang chủ</a>";
    }
        
?>