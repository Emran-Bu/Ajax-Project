<?php

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

    $limit_per_page = 5;

    $page = "";
    if (isset($_POST['page_no'])) {
        $page = $_POST['page_no'];
    }else {
        $page = 1;
    }

    $offset = ($page - 1) * $limit_per_page;

    $sql = "SELECT * FROM students LIMIT {$offset}, {$limit_per_page}";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    $output = "";

    if (mysqli_num_rows($result) > 0) {
        $output = '<table id="main" border="1" cellpadding="10px" cellspacing="0">
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
        $output .= "</tbody> </table>";

        $sql_total = "SELECT * FROM students";

        $records = mysqli_query($conn, $sql_total) or die("Query Failed");

        $total_records = mysqli_num_rows($records);
        $total_pages = ceil($total_records/$limit_per_page);

        $output .= '<div id="pagination">';
        for ($i=1; $i<=$total_pages; $i++) {
            if($i == $page){
                $active = "active";
            } else {
                $active ="";
            }

            $output .= "
                <a class='$active' href='' id='{$i}'>{$i}</a>";
        }
        $output .= '</div>';
        mysqli_close($conn);
        echo $output;
    } else {
        echo "No Record Found";
    }

?>