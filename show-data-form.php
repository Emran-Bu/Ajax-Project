<?php

    $editId = $_POST['eid'];

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

    $sql = "SELECT * FROM students where id = {$editId}";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    $output = "";

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $output .= "
                <tr>
                    <td>First name : </td>
                    <td><input type='text' name='' id='edit-fname' value='{$row["first_name"]}'></td>
                </tr>
                <tr>
                    <td>Last name : </td>
                    <td><input type='text' name='' id='edit-lname' value='{$row["last_name"]}'>
                    <input type='text' hidden name='' id='edit-id' value='{$row["id"]}'>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type='submit' name='' id='edit-submit' value='Save'></td>
                </tr>";
        }
        mysqli_close($conn);
        echo $output;
    } else {
        echo "No Record Found";
    }

?>