<?php
    $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($result);
    $title = $rows['title'];
    $main_text = $rows['main_text'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labarov Maksim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <?php
                    echo "<h1> $title</h1>";
                    echo "<p> $main_text</p>";
                ?>
            </div>
        </div>
    </div>
        
</body>
</html>
