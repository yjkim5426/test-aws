<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Create new</h1>

    <form action="process_create.php" method="POST">
        <!-- <p><input type="text" name="Id" placeholder="Id"></p> -->
        <p><input type="text" name="Name" placeholder="Name"></p>
        <p><input type="submit"></p>
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