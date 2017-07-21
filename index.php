<?php
    //Informações que quero passar
    $data = array("nome" => "Rafael", "age" => 28);
    //armazenando informações
    $string = http_build_query($data);
    //Configurando o cUrl com as informações necessárias
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:8001/treinamento-json/data.php");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Executando o cUrl
    curl_exec($ch);
    //Fechando o cUrl
    curl_close($ch);
?>