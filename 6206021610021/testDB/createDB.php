<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345";

    $conn = new mysqli($servername,$username,$password);

    if(!$conn){
        die("Connection Failed: ". mysqli_connect_error());
    }

    $sql = "CREATE DATABASE myDB";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database: ".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>