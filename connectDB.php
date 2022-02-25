<?php
     //Dados do banco de dados
     $user = "b79a82ddcdb5cc";
     $password = "61b562df";
     $db = "heroku_ad279c73e8320b2";
     $hostname = "us-cdbr-east-05.cleardb.net";

     //Conectando ao banco de dados
     $conn = mysqli_connect($hostname, $user, $password, $db);
     if (mysqli_connect($hostname, $user, $password, $db)) {
        echo file_get_contents('script.js');
     } else {
        echo "database connection error!";
     }
?>