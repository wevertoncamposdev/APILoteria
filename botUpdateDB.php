<?php

/** 
 * Lotofacil = https://loteriascaixa-api.herokuapp.com/api/lotofacil/latest
 * Mega-Sena = https://loteriascaixa-api.herokuapp.com/api/mega-sena/latest
 */



function verify_db($loteria)
{      

    include("connectDB.php");
    //Verificando o ultimo concurso
    $urlUpdate = "https://loteriascaixa-api.herokuapp.com/api/$loteria/latest";
    $data = json_decode(file_get_contents($urlUpdate));

    //Concurso
    $concurso = ($data->concurso);

    //Verificando o ultimo concurso no banco de dados!
    $query = "SELECT count(concurso) FROM heroku_ad279c73e8320b2.`$loteria`;";
    $dados = mysqli_query($conn, $query);

    while ($line = mysqli_fetch_assoc($dados)) {
        foreach ($line as $key => $value) {

            if ($concurso == $value) {
                echo "O banco de dados da $loteria está atualizado! " . " O concurso atual é: " . $concurso . ", e o ultimo concurso do banco de dados é: " . $value  . ". <br>";
            } else {
                echo "
                    <form method='post'>
                    <br>
                    O banco de dados da $loteria está desatualizado! " . " O concurso atual é: " . $concurso . ", e o ultimo concurso do banco de dados é: " . $value . ". 

                    <input type='submit' name='atualizar' value='Atualizar'></input>
                    </form>
                    <br>";

                if (isset($_POST['atualizar'])) {

                    $value = $value + 1;
                    for ($value; $value <= $concurso; $value++) {

                        update_db($loteria, $value);
 
                    }
                }
            }
        }
    }
}

function update_db($loteria, $value)
{
    echo ("Atualizando banco de dados...");

    
    //Verificando o ultimo concurso
    $urlUpdate = "https://loteriascaixa-api.herokuapp.com/api/$loteria/$value";
    $data = json_decode(file_get_contents($urlUpdate));

    //Concurso
    $newConcurso = ($data->concurso);
    //Nome
    $nome = ($data->nome);
    //Data
    $dia = ($data->data);
    //Dezenas
    $resultado = [];
    foreach ($data->dezenas as $dezenas) {
        $resultado[] = $dezenas;
    }
    $dezenas = implode(',', $resultado);

    include("connectDB.php");

    $query = "INSERT INTO heroku_ad279c73e8320b2.`$loteria` (`concurso`, `nome`, `data`, `resultado`) VALUES (
        '$newConcurso', '$nome', '$dia', '$dezenas'
        ) ";

    if (mysqli_query($conn, $query)) {
        echo "Concurso n° " . $value . " registrado com sucesso! \n";
    } else {
        echo "Error: " . $query . "\n" . mysqli_error($conn);
    }

    header('Refresh:1');
}