<meta charset = "UTF-8">
<?php
      $ma = $_POST["masv"];
      $ten = $_POST["tensv"];
      $class = $_POST["lopsv"];
      $block = $_POST["khoisv"];
      $address = $_POST["diachisv"];
      $email = $_POST["email"];
      $date = $_POST["ngaysinhsv"];
      $hometown = $_POST["quequansv"];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hocsinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$block."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."' where mahs = '".$ma."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo 'alert("Mật khẩu không hợp lệ !")';
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>