<?php
//print_r($_POST);

$conn = mysqli_connect("localhost", "root", "root", "myplate");

$sql = "
    INSERT INTO testtable
    (Name)
    VALUES(
        '{$_POST['Name']}'
    )
";

$result = mysqli_query($conn, $sql);

if($result === false) {
    echo "fail to update database";
    error_log(mysqli_error($conn));
}
else {
    echo "Success!";
}

echo "<br><a href='index.php'>go back to select page</a>";
//echo $sql;
?>

