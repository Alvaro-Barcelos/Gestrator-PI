<?php

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $situacao = $_POST['situacao'];
    $prioridade = $_POST['prioridade'];

    // Mapeie o valor conforme o esperado
    if ($prioridade == "media") {
        $prioridade = "Média";
    } elseif ($prioridade == "alta") {
        $prioridade = "Alta";
    } elseif ($prioridade == "baixa") {
        $prioridade = "Baixa";
    }
    

    // Agora você pode usar $prioridade para atualizar o banco de dados
    
    $data_inicio = $_POST['data_inicio'];
    $data_final = $_POST['data_final'];
    $descricao = $_POST['descricao'];


    $registrar_servico = mysqli_query($conexao,  "INSERT INTO servico (nome_servico, descricao,situacao, prioridade , data_criada, data_final, id_setor) VALUES ('$nome', '$descricao','$situacao', '$prioridade','$data_inicio' ,'$data_final', '$setor')");

    $prioridade = $_POST['prioridade'];
echo "Valor recebido: " . $prioridade; // Adicione esta linha para depuração


?>