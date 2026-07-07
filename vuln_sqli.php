<?php

$conn = mysqli_connect("localhost", "root", "", "test");

$id = $_GET['id'];

// SQL Injection
$sql = "SELECT * FROM users WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo $row['username'];
}

?>
