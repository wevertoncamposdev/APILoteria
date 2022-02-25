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

    /* $url =  "https://loteriascaixa-api.herokuapp.com/api/lotofacil/$consurso";
    $data = file_get_contents($url);
    $dataJson = json_decode($data);

    //Nome
    $nome = ($dataJson->nome);
    //Data
    $dia = ($dataJson->data);
    //Concurso
    $concurso = ($dataJson->concurso);
    //Dezenas
    $resultado = [];
    foreach ($dataJson->dezenas as $dezenas) {
        $resultado[] = $dezenas;
    }
    $dezenas = implode(',', $resultado); */

    $concurso = $_GET['concurso'];

    include('connectDB.php');

    $query = "SELECT * FROM lotofacil WHERE concurso = $concurso ";
    $dados = mysqli_query($conn, $query);


    while ($line = mysqli_fetch_assoc($dados)) {
      
        foreach ($line as $key => $value) {
            //$result[] = explode(',',$value);
            echo ("<br>". strtoupper($key) . ": " . "$value");
        }
    }
    


    ?>


</body>

</html>