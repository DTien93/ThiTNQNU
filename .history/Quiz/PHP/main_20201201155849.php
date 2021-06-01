<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>Flat Pricing Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="">
</head>

<body>
<div class="container-fluid">
<div class="row-fluid">
                    <?php
							$conn = mysqli_connect("localhost", "root", "" , "tttracnghiem");
							$sql = "select * from kythi";
							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_array($result))
							{
					?>
        <h2 class="btn-warning">Danh sách lớp </h2>
        
</div>
<div class="row-fluid">

            <div class="span3 tiny ">
                <div class="pricing-table-header-tiny">
            
                </div>
                <div class="pricing-table-features">
                    <p><strong>Mã kỳ thi:</strong> <?php echo $row['idkythi']; ?></p>
                    <p><strong>Khối:</strong><?php echo $row['khoi']; ?></p>
                    <p><strong>Môn</strong> Toán</p>
                    <p><strong>Ngày thi</strong> 12/2/2019</p>
                    <p><strong>Thời lượng thi</strong> 120 phút</p>
                </div>
                <div class="pricing-table-signup-tiny">
                  <p><a href="./index.php">Vào thi</a></p>
                </div>
            </div>
            <div class="span3 small">
                <div class="pricing-table-header-small">
                </div><div class="pricing-table-features">
                    <p><strong>Mã kỳ thi:</strong> 425653</p>
                    <p><strong>Khối:</strong>A</p>
                    <p><strong>Môn</strong> Văn</p>
                    <p><strong>Ngày thi</strong> 12/2/2019</p>
                    <p><strong>Thời lượng thi</strong> 120 phút</p>
                </div>
                <div class="pricing-table-signup-small">
                  <p><a href="./index.phpl">Vào thi</a></p>
                </div>
            </div>
            <div class="span3 small">
                <div class="pricing-table-header-small">
                </div><div class="pricing-table-features">
                    <p><strong>Mã kỳ thi:</strong> </p>
                    <p><strong>Khối:</strong>A</p>
                    <p><strong>Môn</strong> Toán</p>
                    <p><strong>Ngày thi</strong> 12/2/2019</p>
                    <p><strong>Thời lượng thi</strong> 120 phút</p>
                </div>
                <div class="pricing-table-signup-small">
                  <p><a href="./index.php">Vào thi</a></p>
                </div>
            </div>
            
            <div class="span3 tiny ">
                <div class="pricing-table-header-tiny">
                </div>
                <div class="pricing-table-features">
                    <p><strong>Mã kỳ thi:</strong> 425657</p>
                    <p><strong>Khối:</strong>A</p>
                    <p><strong>Môn</strong> Toán</p>
                    <p><strong>Ngày thi</strong> 12/2/2019</p>
                    <p><strong>Thời lượng thi</strong> 120 phút</p>
                </div>
                <div class="pricing-table-signup-tiny">
                  <p><a href="./index.php">Vào thi</a></p>
                </div>
            </div>
            </div>
            </div>
         </div>
</div>
<?php } ?>
    </body>
</html>
