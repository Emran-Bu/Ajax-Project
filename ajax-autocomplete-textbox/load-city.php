<?php

    $conn = mysqli_connect("localhost", "root", "", "multiple-delete") or die("connection failed");

    $search_term = $_POST['city'];

    $sql ="SELECT distinct(city) FROM srecord where city LIKE '%{$search_term}%'";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    $output = "<ul>";

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<li>{$row['city']}</li>";
        }
        
    } else {
        $output .= "<li>City Not Found</li>";
    }

    $output .= "</ul>";
    echo $output;
    
?>