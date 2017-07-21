<?php
    //Se receber informações com os nomes 'nome' e 'age' executar o seguinte bloco de código
    if(isset($_POST['nome'], $_POST['age']))
    {
        //armazenando informações em variáveis
        $n = $_POST['nome'];
        $a = $_POST['age'];
        //armazenando as variáveis em um array
        $json = array('nome' => $n, 'idade' => $a);
        //Codificando o array para o tipo json
        $e = json_encode($json);
        //Criando um nome e colocando como parte do nome a data atual
        $arquivo = date('d-m-Y')."-dados.json";
        //Caso não exista um arquivo com o nome este bloco de código criará um
        if(file_put_contents($arquivo, $e))
        {
            echo "Arquivo criado com sucesso!";
        }
        else{
            echo "Falha ao criar arquivo .json";
        }
        //Exibir as mensagens caso funcione ou não
    }
?>