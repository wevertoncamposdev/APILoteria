<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $url =  "https://loteriascaixa-api.herokuapp.com/api/lotofacil/$consurso";
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
    $dezenas = implode(',', $resultado);

    ?>

    <table>
        <tr>
            <td><?php echo "Nome:" ?></td>
            <td><?php echo $nome; ?></td>
        </tr>
        <tr>
            <td><?php echo "Concurso:" ?></td>
            <td><?php echo $concurso; ?></td>
        </tr>
        <tr>
            <td><?php echo "Data:" ?></td>
            <td><?php echo $dia; ?></td>
        </tr>
        <tr>
            <td><?php echo "Dezenas:" ?></td>
            <td><?php echo $dezenas; ?></td>
        </tr>
    </table>


</body>

</html>