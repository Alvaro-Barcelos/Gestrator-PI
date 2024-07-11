<?php

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $data_inicio = $_POST['data_inicio'];
    $data_final = $_POST['data_final'];
    $descricao = $_POST['descricao'];


    $registrar_servico = mysqli_query($conexao,  "INSERT INTO servico (nome_servico, descricao, prazo_entrega, data_criada, id_setor) VALUES ('$nome', '$descricao', '$data_final', '$data_inicio', '$setor')");

?>