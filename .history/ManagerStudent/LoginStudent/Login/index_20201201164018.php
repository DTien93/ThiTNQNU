
<?php
//login.php

include("connect.php");

if(isset($_COOKIE["type"]))
{
    header('location:http://localhost:70/ThiTN/ManagerStudent/index.php');
}

$message = '';

if(isset($_POST["btnLogin"]))
{
 if(empty($_POST["taikhoan"]) || empty($_POST["matkhau"]))
 {
  $message = "<div class='alert alert-danger'>Nhập các trường bắt buộc</div>";
 }
 else
 {
  $query = "
  SELECT * FROM hocsinh
  WHERE taikhoan = :taikhoan
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'taikhoan' => $_POST["taikhoan"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["matkhau"], $row["matkhau"]))
    {
     setcookie("type", time()+3600);
     header('location:http://localhost:70/ThiTN/ManagerStudent/index.php');
    }
    else
    {
     $message = '<div class="alert alert-danger">Sai mật khẩu</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
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
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <form action="./php/main.php" method = "POST">
        <div class="container">
            <div class="card card-container">
                <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
                <img id="profile-img" class="profile-img-card" src="./img/pngtree-vector-users-icon-png-image_4144740.jpg">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name = "taikhoan" id="inputEmail" class="form-control" placeholder="Tài Khoản" required autofocus>
                    <input type="password" name="matkhau" id="inputPassword" class="form-control" placeholder="Mật khẩu" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin"  name ="btnLogin" type="submit">
                        Đăng nhập</button>
                </form><!-- /form -->
                <a href="/ThiTN/ManagerStudent/ChangePassword/Forgot/index.html" class="forgot-password">
                   Đổi mật khẩu ?
                </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
    </form>
</body>
<!-- <script src="./js/main.js"></script> -->
</html>