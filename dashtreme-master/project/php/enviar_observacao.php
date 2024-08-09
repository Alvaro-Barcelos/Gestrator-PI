<?php
include_once('conexao.php');

if(!isset($_SESSION)){
    session_start();
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar os dados para prevenir injeção de SQL
    $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
    $id_servico = mysqli_real_escape_string($conexao, $_POST['id_servico']);
    
    // Inserir observação no banco de dados
    $enviar_observacao = mysqli_query($conexao, "UPDATE servico SET observaçao  = '$observacao' WHERE id_servico = '$id_servico'");
    
    // Verificar se a inserção foi bem-sucedida
    if ($enviar_observacao) {
        if( $_SESSION['tipo'] == 'gerente'){
            header("Location: ../html/home_adm.php");
        }
        else if( $_SESSION['tipo'] == 'rh'){
            header("Location: ../html/home_rh copy.php");
        }
        else if( $_SESSION['tipo'] == 'comum'){
            header("Location: ../html/home_funcionario copy.php");
        }
    } else {
        echo "Erro ao salvar a observação: " . mysqli_error($conexao);
    }
}    
?>
