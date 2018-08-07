<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Select</h1>
    <h2>Table name: myplate</h2>

    <?php
    //connect to DB
    $conn = mysqli_connect("localhost", "root", "root", "myplate");
    $sql = "SELECT * FROM testtable";
    $result = mysqli_query($conn, $sql);

    //display table contents
    echo '<a href="create.php">Create new</a><br><br>';
    while ($row = mysqli_fetch_array($result))
    {
        echo 'Id: '.$row['Id'].'<br>';
        echo 'Name: '.$row['Name'].'<br>';
        //echo '<a href="process_delete.php?id='.$row['Id'].'">Delete</a><span>&nbsp&nbsp&nbsp&nbsp</span>';
        echo '<form action="process_delete.php" method="post">
            <input type="hidden" name="id" value="'.$row['Id'].'">
            <input type="submit" value="delete">
        </form>';
        echo '<a href="index.php?id='.$row['Id'].'">Edit</a>';

        echo '<br><br>';

        if(isset($_GET['id'])) {}
        
        //print_r($row);
    }
    ?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="js/script.js"></script>
</body>



</html>