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
        include('modal/modal.php');
        consult_db($_GET['loteria'], $_GET['concurso']);
        
      

    ?>

</body>

</html>