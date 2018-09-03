<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Edit</h1>

    <form action="process_edit.php" method="POST">
        <!-- <p><input type="text" name="Id" placeholder="Id"></p> -->
        <label>ID: </label>
        <input type="text" name="id" value=<?php echo $_POST['id']; ?>>

        <label>Name: </label>
        <input type="text" name="name" value=<?php echo $_POST['name']; ?>>
    
        <input type="submit" value="Update">
    </form>

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