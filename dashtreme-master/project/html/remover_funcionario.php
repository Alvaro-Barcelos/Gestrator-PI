<?php

include_once('../php/conexao.php');

$nome = $_GET['nome'];
$serviceId = $_GET['serviceId'];

// Buscar o valor atual do campo 'equipe'
$result = mysqli_query($conexao, "SELECT equipe FROM servico WHERE id_servico = '$serviceId'");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $existingEquipe = $row['equipe'];
    
    // Remover o nome da equipe
    $names = explode(',', $existingEquipe);
    $names = array_map('trim', $names); // Remove espaços em branco
    $updatedNames = array_filter($names, function($value) use ($nome) {
        return $value !== $nome;
    });
    $updatedEquipe = implode(', ', $updatedNames);

    // Atualizar o banco de dados com o novo valor
    $update_funcionario = mysqli_query($conexao, "UPDATE servico SET equipe = '$updatedEquipe' WHERE id_servico = '$serviceId'");

    if ($update_funcionario) {
        echo "success";
    } else {
        echo "Erro ao atualizar o banco de dados";
    }
} else {
    echo "Serviço não encontrado";
}

?>
