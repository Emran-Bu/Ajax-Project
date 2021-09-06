<?php

if ($_FILES['file']['name'] != '') {
    $filename = $_FILES['file']['name'];

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $valid_extension = array("JPG", "jpg", "jpeg", "png", "gif");

    if (in_array($extension, $valid_extension)) {
        $new_name = rand() . "." . $extension;
        $path = "image/" . $new_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
            echo "<img src='".$path."'><br><br><button id='delete-btn' data-path='".$path."'>Delete</button>";
        }
    } else {
        echo "<script>alert('Invalid file format')</script>";
    }
} else {
    echo "<script>alert('please select file')</script>";
}

?>