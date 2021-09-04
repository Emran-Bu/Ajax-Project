<?php

$conn = mysqli_connect("localhost", "root", "", "multiple-delete") or die("Connection Failed");

$sql = "SELECT * FROM srecord";

$result = mysqli_query($conn, $sql) or die("Query Failed");

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<table width="100%" cellpadding="10px">
    <thead>
        <tr>
            <th width="40px">Select</th>
            <th width="40px">Id</th>
            <th>Name</th>
            <th width="50px">Age</th>
            <th width="150px">City</th>
        </tr>
    </thead>
    <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>

                        <td align='center'><input type='checkbox' value='{$row['id']}'></td>
                        <td align='center'>{$row['id']}</td>
                        <td align='center'>{$row['name']}</td>
                        <td align='center'>{$row['age']}</td>
                        <td align='center'>{$row['city']}</td>

                    </tr>";
    }
    $output .= "</tbody></table>";
    echo $output;
} else {
    echo "<h1>No Record Found</h1>";
}

?>