<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico Lotofacil</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <div class="container">
        <div class="modal">
            <table>
                <form method="get" action="resultado.php">
                    Valor:<input type="number" name="concurso" placeholder="Digite o n° do concurso" required />
                    <input type="submit" name="button" value="Consultar" />
                </form>
            </table>
        </div>
        <div>

        <div class="container">
            <div class="modal">

                <?php
                    //Dados do banco de dados
                    $user = "b79a82ddcdb5cc";
                    $password = "61b562df";
                    $db = "heroku_ad279c73e8320b2";
                    $hostname = "us-cdbr-east-05.cleardb.net";

                    //Conectando ao banco de dados
                    $conn = mysqli_connect($hostname, $user, $password, $db);
                    if (mysqli_connect($hostname, $user, $password, $db)) {
                        echo "<br>Banco de dados conectado com sucesso!<br>";
                    } else {
                        echo "<br>database connection error<br>";
                    }

                    $query = "SELECT * FROM heroku_ad279c73e8320b2.lotofacil;";
                    $dados = mysqli_query($conn, $query);
                        
                    while ($line = mysqli_fetch_assoc($dados)){
                        foreach($line as $key => $value){
                            //$result[] = explode(',',$value);
                            echo ("<br>$key: " . "$value");  
                        }
                    }
                ?>

            </div>
        <div>


</body>

</html>