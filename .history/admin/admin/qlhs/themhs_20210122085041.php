<?php
 $conn = mysqli_connect('localhost', 'root','', 'thion');
    if(isset($_POST['add'])){
        $mahs = $_POST['mahs'];
        $hoten = $_POST['hoten'];
        $lop = $_POST['lop'];
        $khoi = $_POST['khoi'];
        $diachi = $_POST['diachi'];
        $email = $_POST['email'];
        $ngaysinh = $_POST['ngaysinh'];
        $quequan = $_POST['quequan'];
        $gioitinh = $_POST['gioitinh'];
        
        $sql = "select * from hocsinh where mahs='$mahs'";
        $query = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($query);
        if($num == 0){

            $sql2 = "INSERT INTO hocsinh (mahs, hoTen, lop, khoi, taikhoan, matkhau, diaChi, Email, ngaySinh, queQuan, gioitinh) VALUES ('$mahs', '$hoten', '$lop', '$khoi', '$mahs', '$mahs', '$diachi', '$email', '$ngaysinh', '$quequan', '$gioitinh')";
            $them = mysqli_query($conn, $sql2);
            if($them){
                echo '<p style="color:blue"> Thêm thành công </p>'; 
            } else{
                echo '<p style="color:red"> Thêm thất bại </p>';
            }

        } else{
            echo '<p style="color:red"> Mã đã tồn tại </p>';
        }

    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Thông tin giáo viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Thông tin học sinh</h2>
            </div>
            <div class="panel-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mã học sinh</label>
                                <input type="text" required="true" class="form-control" id="" name="mahs" placeholder="Mã học sinh" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" required="true" class="form-control" id="" name="hoten" placeholder="Họ và tên" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Lớp</label>
                                <input type="text" required="true" class="form-control" id="" name="lop" placeholder="Lớp" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Khối</label>
                                <!-- <input type="text" required="true" class="form-control" id="" name="khoi" placeholder="Khối" value=""/> -->
                                <select name="khoi" placeholder="Khối"  class="form-control">
                                    <option value=""> 10 </option>
                                    <option value=""> 11 </option>
                                    <option value=""> 12 </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tài khoản</label>
                                <input type="text" required="true" readonly="" class="form-control" id="" name="taikhoan" placeholder="Tài khoản" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="text" required="true" readonly="" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" required="true" class="form-control" id="" name="diachi" placeholder="Địa chỉ" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" required="true" class="form-control" id="" name="email" placeholder="Email" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="text" required="true" class="form-control" id="" name="ngaysinh" placeholder="Ngày sinh" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Quê quán</label>
                                <input type="text" required="true" class="form-control" id="" name="quequan" placeholder="Quê quán" value=""/>
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <!-- <input type="text" required="true" class="form-control" id="" name="gioitinh" placeholder="Giới tính" value=""/> -->
                                <select name="gioitinh" placeholder="Giới tính"  class="form-control">
                                    <option value=""> Nam </option>
                                    <option value=""> Nữ </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="back()">Trở lại</button>
                    <script>
                        function back(){
                            history.back();
                        }
                    </script>
                    <button name="add" class="btn btn-success">Thêm</button>                
                </form>
            </div>
        </div>
    </div>
</body>
</html>