<?php
            if (isset($_POST['update'])) {
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "tttracngiem";

                $connect = mysqli_connect($hostname, $username, $password, $databaseName);
            
            }
?>