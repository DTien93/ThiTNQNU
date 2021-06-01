<meata charset = UTF8>
<!DOCTYPE html>
<html>
<head><title>Trang thông tin người dùng</title></head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<table align="center" border="1" width="1480">
    <tr align="center">
        <h2 align="center"> Thông Tin Cá Nhân</h2>
        <td>ID</td>
        <td>Mã học sinh</td>
        <td>Họ tên</td>
        <td>Lớp</td>
        <td>Khôi</td>
        <td>Địa chỉ</td>
        <td>Email</td>
        <td>Ngày sinh</td>
        <td>Quê quán</td>
    </tr>
    <?php
        $conn = mysqli_connect("localhost", "root", "" , "thitracnghiemon");
        $sql = "select * from hocsinh";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
    ?>
            <tr align="center">
            <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['mahs']; ?>
                </td>
                <td>
                    <?php echo $row['hoTen']; ?>
                </td>
                <td>
                    <?php echo $row['lop']; ?>
                </td>
                <td>
                    <?php echo $row['khoi']; ?>
                </td>
                <td>
                    <?php echo $row['diaChi']; ?>
                </td>
                <td>
                    <?php echo $row['ngaySinh']; ?>
                </td>
                <td>
                    <?php echo $row['queQuan']; ?>
                </td>       
            </tr>
    <?php } ?>
</table>
</body>
</html>