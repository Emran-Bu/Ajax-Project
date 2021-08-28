<?php

    $studentID = $_POST['id'];

    $conn = mysqli_connect("localhost","root","","test") or die("connection failed" . mysqli_connect_error());

    $sql = "DELETE From students where id = $studentID";

    // $result = mysqli_query($conn, $sql) or die("query unsuccessfully");

    if (mysqli_query($conn, $sql)) {
        echo 1;
    }else {
        echo 0;
    }

?>