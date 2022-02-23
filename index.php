<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
            $consurso = $_GET['consurso'];
            echo ("Concurso: ".$consurso);
        ?>
    </title>
</head>
<body>
    <?php
        $consurso = $_GET['consurso'];
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
        foreach($dataJson->dezenas as $dezenas){
            $resultado[] = $dezenas;
        }
        $dezenas = implode(',',$resultado);

        echo("Nome: ". $nome . "Concurso: " . $concurso . "Data: " . $dia . "Dezenas: " . $dezenas);
        
    ?>
</body>
</html>