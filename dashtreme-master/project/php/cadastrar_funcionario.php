<?php

    include_once('conexao.php');

    $nome_funcionario = $_POST['nome'];
    $imagem = $_POST['imagem_funcionario'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $nacionalidade = $_POST['nacionalidade'];
    $acesso = $_POST['acesso'];
    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];
    $data_nascimento = $_POST['data_nascimento'];
    $pcd = $_POST['pcd'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    if($cargo = "gerente"){
        $tipo = "gerente";
    }elseif($cargo = "supervisor"){
        $tipo = "supervisor";
    }else{
        $tipo = "comum";
    }


    $login = mysqli_query($conexao, "INSERT INTO login(usuario, email, senha, tipo) 
    VALUES('$nome_funcionario','$email', '$acesso', $tipo)");


    


    $criar_funionario = mysqli_query($conexao, "INSERT INTO funcionario(nome_funcionario, nacionalidade, data_nascimento, cpf, rg, email, celular, cidade, endereco, pcd, foto_funcionario, id_setor, id_login) 
    VALUES()");



?>