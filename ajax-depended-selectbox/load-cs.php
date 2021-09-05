<?php

    $conn = mysqli_connect("localhost", "root", "", "selectbox") or die("connection failed");

    if($_POST['type'] == ""){
        $sql ="SELECT * FROM country_tb";

        $result = mysqli_query($conn, $sql) or die("Query Failed");
    
        $output = "";
        while ($row = mysqli_fetch_assoc($result)) {
            $output .="
                    <option value='{$row['cid']}'>{$row['cname']}</option>
                ";
        }
    } else if($_POST['type'] == "stateData"){
        $sql ="SELECT * FROM state_tb where scountry = {$_POST['id']}";

        $result = mysqli_query($conn, $sql) or die("Query Failed");
    
        $output = "";
        while ($row = mysqli_fetch_assoc($result)) {
            $output .="
                    <option value='{$row['sid']}'>{$row['sname']}</option>
                ";
        }
    }

    echo $output;

?>