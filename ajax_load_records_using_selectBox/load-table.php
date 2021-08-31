<?php

    $city = $_POST['city'];
    $conn = mysqli_connect("localhost", "root", "", "multiple-delete") or die("connection failed");

    $sql ="SELECT * FROM srecord where city = '{$city}'";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    $output = "";
    if (mysqli_num_rows($result) > 0) {
        $output .= "<thead>
                        <tr>
                            <th width='60px'>Id</th>
                            <th>Name</th>
                            <th width='90px'>Age</th>
                            <th width='90px'>City</th>
                        </tr>
                    </thead> <tbody>";
        while ($row=mysqli_fetch_assoc($result)) {
            $output .= "<tr>
                            <td align='center'>{$row['id']}</td>
                            <td align='center'>{$row['name']}</td>
                            <td align='center'>{$row['age']}</td>
                            <td align='center'>{$row['city']}</td>
                        </tr>";
        }
        $output .= "</tbody>";
        echo $output;
    } else {
        echo "no record found";
    }

?>