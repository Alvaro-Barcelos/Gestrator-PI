<?php

    include_once('conexao.php');

    if(!isset($_SESSION)){
        session_start();
    }
    

// Supondo que você já tenha uma conexão estabelecida com $conexao
    $id_funcionario = $_POST['id_funcionario']; // Escapar valores para segurança
    $senha = $_POST['senha']; // Escapar valores para segurança

    // Hash a senha antes de armazenar no banco de dados
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Atualiza a senha do login associado ao id_funcionario
    $atualizar_senha = mysqli_query($conexao, "
        UPDATE login
        SET senha = '$senha_hash'
        WHERE id_login = (
            SELECT id_login
            FROM funcionario
            WHERE id_funcionario = '$id_funcionario'
        )
    ");

    if ($atualizar_senha) {
   
        if( $_SESSION['tipo'] == 'gerente'){
            header("Location: ../html/senhaAlteradaGerente.html");
        }
        else if( $_SESSION['tipo'] == 'rh'){
            header("Location: ../html/senhaAlteradaRh.html");
        }
        else if( $_SESSION['tipo'] == 'comum'){
            header("Location: ../html/senhaAlteradaComum.html");
        }
    } else {
        echo "Erro na atualização da senha: " . mysqli_error($conexao);
    }


?>