<meta charset = "UTF-8">
<?php
      $ma = $_POST["mahs"];
      $ten = $_POST["namehs"];
      $class = $_POST["classhs"];
      $khoihs = $_POST["block"];
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