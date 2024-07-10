<?php

    include_once('conexao.php');

    $nome_funcionario = $_POST['nome'];


    $imagem = $_POST['imagem_funcionario'];

    $imagem = $_FILES['imagem_funcionario']['tmp_name'];
    $imagem_destino = '../imagensBd/' . $_FILES['imagem_funcionario']['name'];

    move_uploaded_file($imagem, $imagem_destino);

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


    $id_login_query = "SELECT id_login FROM login
    ORDER BY id_login DESC  
    LIMIT 1";

    $resultado_query = mysqli_query($conexao, $id_login_query);

    if (mysqli_num_rows($resultado_query) > 0) {
        while ($row = mysqli_fetch_assoc($resultado_query)) {
            $id_login = $row['id_login'];
        }
    }

    $update_setor = mysqli_query($conexao, "UPDATE setor SET quantidade = quantidade + 1 WHERE id_setor = '$setor'");

 
    $criar_funionario = mysqli_query($conexao, "INSERT INTO funcionario(nome_funcionario, nacionalidade, data_nascimento, cpf, rg, email, celular, cidade, endereco, pcd, foto_funcionario, id_setor, id_login) 
    VALUES('$nome_funcionario', '$nacionalidade', '$data_nascimento', '$cpf', '$rg', '$email', '$celular', '$cidade', '$endereco', '$pcd', '$imagem_destino', '$setor', '$id_login')");

    


?>