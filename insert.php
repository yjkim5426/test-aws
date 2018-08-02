<?php

// mysqli
// $mysqli = new mysqli("example.com", "user", "password", "database");
// $result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);


//localhost: Server IP address which mySQL installed
//MAMP the default username/password for created databases is: root/root
//myplate: DataBase name
// $mysqli = new mysqli("localhost", "root", "root", "myplate");
// $result = $mysqli->query("SELECT * FROM Application");
// $row = $result->fetch_assoc();
// echo htmlentities($row['_message']);
// echo "test";

$conn = mysqli_connect("localhost", "root", "root", "myplate");
$sql = "SELECT * FROM Application";
$result = mysqli_query($conn, $sql);
print_r(mysqli_fetch_array($result));
// var_dump($result);

?>