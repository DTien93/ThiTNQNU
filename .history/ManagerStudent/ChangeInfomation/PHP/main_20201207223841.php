<meta charset = "UTF-8">
<?php
      $ma = $_POST["masv"];
      $ten = $_POST["tensv"];
      $class = $_POST["lopsv"];
      $khoihs = $_POST["khoisv"];
      $address = $_POST["address"];
      $email = $_POST["email"];
      $date = $_POST["date"];
      $hometown = $_POST["hometown"];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$khoihs."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."' where mahs = '".$ma."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>