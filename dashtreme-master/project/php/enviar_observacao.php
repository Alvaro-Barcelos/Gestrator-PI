<?php
include_once('conexao.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar os dados para prevenir injeção de SQL
    $observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);
    $id_servico = mysqli_real_escape_string($conexao, $_POST['id_servico']);
    
    // Inserir observação no banco de dados
    $enviar_observacao = mysqli_query($conexao, "UPDATE servico SET observaçao  = '$observacao' WHERE id_servico = '$id_servico'");
    
    // Verificar se a inserção foi bem-sucedida
    if ($enviar_observacao) {
        header("Location: ../html/home_adm copy.php");
    } else {
        echo "Erro ao salvar a observação: " . mysqli_error($conexao);
    }
}
?>
