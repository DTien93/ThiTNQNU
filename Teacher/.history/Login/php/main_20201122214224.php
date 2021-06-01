<?php
    session_start();
    $ten = $_POST['ten'];
    $pass = $_POST['mk'];
    //Tạo kết nối đến CSDL
   $conn = mysqli_connect("localhost","root","","thitracnghiemon"); 
    //Câu truy vấn
   $kt = "select * from admin where taikhoan = '".$ten."'";
   $result = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");
   $kt1 = "select * from nguoidung where username = '".$ten."'";
   $result1 = mysqli_query($conn,$kt1) or die ("Không thể kết nối được !");
   if($row = mysqli_fetch_array($result))
   {
     if($ten == $row['username'])
     {
       if($pas == $row['password'])
       {
          $_SESSION['ten'] = $_POST['pas'];
         //Hiển thị nội dung thông tin trong sesction
         //Kiểm tra có tồn tại không trước khi nó chuyển trang 
         //Sử dụng header location để điều hướng trang và chuyển trang
         header('location:bait03/trangchugiaodien.php');
       }
       else
       {
         echo "Mật khẩu không hợp lệ !";
       }
?>