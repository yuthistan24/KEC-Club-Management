<?php
        $host= 'wp.kongu.edu';
        $username= '25csef29';  
        $password= '25csef29';
        $db= '25csef29';
        $conn = mysqli_connect($host, $username, $password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        ?>