<?php

    $student_id = $_POST['id'];

    $str = implode(",", $student_id);

    // echo $str;

    $conn = mysqli_connect("localhost", "root", "", "multiple-delete") or die("Connection Failed");

    $sql = "DELETE From srecord where id IN ({$str})";

    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 0;
    }
?>