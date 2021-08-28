<?php

    $search_value = $_POST['search'];

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

    $sql = "SELECT * FROM students where first_name LIKE '%{$search_value}%' or last_name LIKE '%{$search_value}%'";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    $output = "";

    if (mysqli_num_rows($result) > 0) {
        $output = '
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>';
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            if ($i%2==0) {
                $color = "#9e95cc";
            }else{
                $color = "#B4C3B2";
            }
            $output .= "
            <tr style='background:$color'>
                <td>{$row["id"]}</td>
                <td>{$row["first_name"]} {$row["last_name"]}</td>
                <td><button class='edit-data' data-eid='{$row["id"]}'>Edit</button></td>
                <td><button class='delete-data' data-id='{$row["id"]}'>Delete</button></td>
            </tr>
            ";
        }
        // $output .= "</tbody> </table>";
        mysqli_close($conn);
        echo $output;
    } else {
        echo "<h1 style='border:none !important'>No Record Found</h1>";
    }

?>