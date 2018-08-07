<?php

$conn = mysqli_connect("localhost", "root", "root", "myplate");

$sql = "
    DELETE FROM testtable 
    WHERE id={$_POST['id']}
";

$result = mysqli_query($conn, $sql);

if($result === false) {
    echo "fail to delete database";
    error_log(mysqli_error($conn));
}
else {
    echo "Success!";
}

echo "<br><a href='index.php'>go back to select page</a>";
// echo $sql;
// echo $_POST['id'];
?>