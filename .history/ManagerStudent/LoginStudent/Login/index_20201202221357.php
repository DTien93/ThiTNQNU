<?php
//index.php
session_start();
if(isset($_SESSION["taikhoan"]))
{
    header('location:http://localhost:70/ThiTN/ManagerStudent/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styless.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
        <form action="" method = "POST">
        <div class="container">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="./img/pngtree-vector-users-icon-png-image_4144740.jpg">
                <p id="profile-name" class="profile-name-card"></p>
                <form class="form-signin">
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="user" name = "username" id="username" class="form-control" placeholder="Tài Khoản" required autofocus>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required>
                    <button class="btn btn-lg btn-primary btn-block btn-signin"  name ="login" type="submit" value="Login">
                        Đăng nhập</button>
                </form><!-- /form -->
                <a href="/ThiTN/ManagerStudent/ChangePassword/Forgot/index.html" class="forgot-password">
                   Đổi mật khẩu ?
                </a>
                <a href="/ThiTN/ManagerStudent/ChangePassword/Forgot/index.html" class="forgot-password">
                    Quay lại 
                 </a>
            </div><!-- /card-container -->
        </div><!-- /container -->
        </form>
</body>
</html>

<script>
$(document).ready(function(){
 $('#login').click(function(){
  var username = $('#username').val();
  var password = $('#password').val();
  if($.trim(username).length > 0 && $.trim(password).length > 0)
  {
                    $.ajax({
                    url:"login.php",
                    method:"POST",
                    data:{username:username, password:password},
                    cache:false,
                    beforeSend:function(){
                    $('#login').val("connecting...");
    },
    success:function(data)
    {
                    if(data)
                    {
                    $("body").load("home.php").hide().fadeIn(1500);
     }
     else
     {
                var options = {
                distance: '40',
                direction:'left',
                times:'3'
                }
                $("#box").effect("shake", options, 800);
                $('#login').val("Login");
                $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
                }
    }
   });
  }
  else
  {

  }
 });
});
</script>