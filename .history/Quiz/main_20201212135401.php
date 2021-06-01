<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<title>Danh sách kỳ thi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="stylesheet" href="style.css" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>
<link href="bootstrap.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="container-fluid">
<div class="row-fluid">
        <h2 class="btn-warning">Kỳ Thi</h2>
        
</div>
<div class="row-fluid">       
            </div>        
            <div class="span3 tiny ">
                <div class="pricing-table-header-tiny">
                </div>
                <div class="pricing-table-features">
                  <?php
                  ?>
                      <p><strong>Mã kỳ thi:</strong>  <?php echo $row['idkythi']; ?></p>
                    <p><strong>Khối:</strong>  <?php echo $row['khoi']; ?></p>
                    <p><strong>Môn:</strong>  <?php echo $row['monthi']; ?> </p>
                    <p><strong>Ngày thi:</strong>  <?php echo $row['ngaythi']; ?>9</p>
                    <p><strong>Thời lượng thi: </strong> <?php echo $row['thoiluong']; ?>t</p>
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
