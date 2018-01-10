<?php
    $host = "database";
    $username = "default";
    $password = "default";
    $database = "default";
    $conn = mysqli_connect($host, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
    echo "Connected successfully\n\n\n";
    mysqli_close($conn);
    var_dump($_SERVER['HOSTNAME']);