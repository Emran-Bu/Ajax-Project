<?php

    $conn = mysqli_connect("localhost","root","","testing") or die("connection failed" . mysqli_connect_error());

    $name = $_POST['name'];
    $lang = $_POST['lang'];

    $sql = "INSERT INTO language (name, language) values ('{$name}', '{$lang}')";

    if (mysqli_query($conn, $sql)) {
        echo "Successfully Saved.";
    }else {
        echo "Can't Save Form Data.";
    }

?>