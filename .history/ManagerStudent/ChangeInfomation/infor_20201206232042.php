<?php
      $ma = $_POST["ma"];
      $ten = $_POST["name"];
      $class = $_POST["class"];
      $khoi = $_POST["block"];
      $address = $_POST["address"];
      $email = $_POST["email"];
      $date = $_POST["date"];
      $hometown = $_POST["hometown"];

      $connect = mysqli_connect("localhost", "root", "", "tttracnghiem");

      if (isset($_POST['update'])) {
        $query = "update hosinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$khoihs."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."'  where mahs = '".$ma."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "Cập nhật thông tin thành công";
        } else {
            echo "Cập nhật thông tin thất bại";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/styless.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
         <link rel="stylesheet" href="./css/stylees.css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <form action="#"  method = "POST">
        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="./img/pngtree-vector-users-icon-png-image_4144740.jpg">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name = "ma"  class="form-control" placeholder="Mã sinh viên" required autofocus>
                    <input type="text" name="name"  class="form-control" placeholder="Họ tên" required>
                     <input type="text" name = "class"  class="form-control" placeholder="Lớp" required autofocus>
                    <input type="text" name="block"  class="form-control" placeholder="Khối" required>
                     <input type="text" name="address"  class="form-control" placeholder="Địa chỉ" required>
                     <input type="text" name="email"class="form-control" placeholder="Email" required>
                     <input type="date" name="date"  class="form-control" placeholder="Ngày sinh" required>
                     <input type="text" name="hometown" class="form-control" placeholder="Quê quán" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin"  name ="update" type="submit">
                       Cập nhật</button>
                </form><!-- /form -->
                <a href="/ThiTN/ManagerStudent/ChangePassword/Forgot/index.html" class="forgot-password">
                    Quay lại 
                 </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </form>
</body>
<!-- <script src="./js/main.js"></script> -->
</html>