<?php

     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];

     $conn = mysqli_connect("localhost","root","","test") or die("connection failed" . mysqli_connect_error());

     $sql = "INSERT INTO students (first_name, last_name) values ('{$first_name}', '{$last_name}')";

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }

?>