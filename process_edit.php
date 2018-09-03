<?php

$conn = mysqli_connect("localhost", "root", "root", "myplate");

$sql = "
    UPDATE testtable 
    SET Name = '{$_POST['name']}'
    WHERE Id= {$_POST['id']}
";
// WHERE id = {$_POST['id']}
$result = mysqli_query($conn, $sql);

if($result === false) {
    echo "fail to update database";
    error_log(mysqli_error($conn));
    echo mysqli_error($conn);
}
else {
    echo "Success!";
}

echo "<br><a href='index.php'>go back to select page</a>";
// echo $sql;
// echo $_POST['id'];
?>