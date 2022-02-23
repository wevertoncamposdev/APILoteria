<?php
    
        $consurso = $_GET['consurso'];
       
        if($concurso){
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
        
        }
       
    ?>