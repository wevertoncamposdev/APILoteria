<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $consurso = $_GET['concurso'];
        echo ("Concurso: " . $consurso);
        ?>
    </title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <?php

    $loteria = $_GET['loteria'];
    $concurso = $_GET['concurso'];

    include('connectDB.php');

    $query = "SELECT * FROM heroku_ad279c73e8320b2.`$loteria` WHERE concurso = $concurso ";
    $dados = mysqli_query($conn, $query);


    while ($line = mysqli_fetch_assoc($dados)) {

        foreach ($line as $key => $value) {
            //$result[] = explode(',',$value);
            echo (strtoupper($key) . ": " . "$value <br>");
        }
    }

    ?>

</body>

</html>