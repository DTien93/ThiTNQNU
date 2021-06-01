<meta charset = "UTF-8">
<?php
      $ma = $_POST["mahs"];
      $ten = $_POST["namehs"];
      $class = $_POST["classhs"];
      $khoi = $_POST["blockhs"];
      $address = $_POST["addresshs"];
      $email = $_POST["emailhs"];
      $date = $_POST["datehs"];
      $hometown = $_POST["hometownhs"];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$khoi."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."' where mahs = '".$ma."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>