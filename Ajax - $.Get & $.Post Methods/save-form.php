<?php
  
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$name = $_POST['fullname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$sql = "INSERT INTO serialize(name, age, gender, country) values('{$name}', {$age}, '{$gender}','{$country}')";

if(mysqli_query($conn, $sql)){
    echo "Hello {$name} Your Records is Saved.";
}else {
    echo "can't save form data.";
}

?>