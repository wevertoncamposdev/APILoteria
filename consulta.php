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
        echo $consurso;
    ?>
</body>
</html>