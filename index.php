<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico da Lototeria</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <div class="container">
        <div class="modal">

            <table>
                <form method="get" action="resultado.php">

                    Loteria:
                    <select name="loteria" method="get">
                        <option value="mega-sena">Mega-Sena</option>
                        <option value="lotofacil">Lotofacil</option>
                    </select>

                    Concurso:<input type="number" name="concurso" placeholder="Digite o n° do concurso" required />
                    <input type="submit" name="button" value="Consultar" />
                </form>
            </table>
        </div>
    </div>
    <hr><br>

    <div class="container">
        <div class="modal">
            <?php

            include('modal/modal.php'); 
            verify_db('mega-sena');
            

            ?>
        </div>
    </div><br><hr><br>
    <div class="container">
        <div class="modal">
            <?php

            //include('modal/modal.php'); 
            verify_db('lotofacil');

            ?>
        </div>
    </div>

    <!-- <script type="text/javascript" src="js/script.js"></script>    -->

</body>


</html>