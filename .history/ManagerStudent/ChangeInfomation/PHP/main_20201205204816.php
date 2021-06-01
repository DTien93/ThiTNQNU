<?php
            if (isset($_POST['update'])) {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tttracngiem";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);
                $ma = $_POST['ma'];
                $ten = $_POST['name'];
                $class = $_POST['class'];
                $khoi = $_POST['block'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $date = $_POST['date'];
            }
?>