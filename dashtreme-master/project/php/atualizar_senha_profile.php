<?php

    include_once('conexao.php');


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
        echo "Senha atualizada com sucesso!";
    } else {
        echo "Erro na atualização da senha: " . mysqli_error($conexao);
    }


?>