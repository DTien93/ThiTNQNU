<meata charset = UTF8>
<!DOCTYPE html>
<html>
<head>
    <title>Trang thông tin người dùng</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

<h2>Thông Tin Cá Nhân</h2>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Mã học sinh</th>
            <th>Họ tên</th>
            <th>Lớp</th>
            <th>Khối</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Ngày sinh</th>
            <th>Quê quán</th>
        </tr>
        </thead>
        <tbody>
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
                    <?php echo $row['Email']; ?>
                </td>
                <td>
                    <?php echo $row['ngaySinh']; ?>
                </td>
                <td>
                    <?php echo $row['queQuan']; ?>
                </td>       
            </tr>
    <?php } ?>
        <tbody>
    </table>
</div>
</body>
</html>