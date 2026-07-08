<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "restaurant_db";

    $conn=mysqli_connect("$host","$user","$password","$db");

    if(!$conn)
        {
            die("Database Connection Failed!".mysqli_connect_error());
        }
    else{
        echo "Database Created Successfully!";
    }
?>