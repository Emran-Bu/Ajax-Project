<?php

    $conn = mysqli_connect("localhost", "root", "", "multiple-delete") or die("connection failed");

    $sql ="SELECT distinct(city) FROM srecord";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    if (mysqli_num_rows($result) > 0) {
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    } else {
        echo "no record found";
    }

?>