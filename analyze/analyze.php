<?php

/* for($i = 1; $i <= 60; $i++){
    if($i < 10){
        $a = strval($i);
        consult_db_analyze("0$a");
    }else{
        $a = strval($i);
        consult_db_analyze("$a");
    }
   
}
 */
function consult_db_analyze($n){
    
    include('./modal/modal.php');
    
    $query = "SELECT count(concurso) FROM heroku_ad279c73e8320b2.`mega-sena` WHERE concurso between 2449 and 2458 and resultado like '%$n%';";

    $dados = mysqli_query(connect_db(), $query);

    while ($line = mysqli_fetch_assoc($dados)) {

        foreach ($line as $key => $value) {
            //mensurar quantidade
            /* if($value == 3){
                
            } */
            echo ("$n:$value x");
           
        }
    }
}
?>