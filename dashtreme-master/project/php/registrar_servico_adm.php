<?php

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $situacao = $_POST['situacao'];
    $prioridade = $_POST['prioridade'];
    $data_inicio = $_POST['data_inicio'];
    $data_final = $_POST['data_final'];
    $descricao = $_POST['descricao'];


    $registrar_servico = mysqli_query($conexao,  "INSERT INTO servico (nome_servico, descricao,situacao, prioridade , data_criada, data_final, id_setor) VALUES ('$nome', '$descricao','$situacao', '$prioridade','$data_inicio' ,'$data_final', '$setor')");

?>