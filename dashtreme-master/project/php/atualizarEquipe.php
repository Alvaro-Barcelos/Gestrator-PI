<?php

include_once('conexao.php');

$nome = $_POST['nome'];
$serviceId = $_POST['serviceId'];

// Buscar o valor atual do campo 'equipe'
$result = mysqli_query($conexao, "SELECT equipe FROM servico WHERE id_servico = '$serviceId'");
$row = mysqli_fetch_assoc($result);

if ($row) {
    $existingEquipe = $row['equipe'];
    
    // Concatenar o novo nome com o valor existente
    if (!empty($existingEquipe)) {
        // Verifica se o nome já está na lista para evitar duplicações
        $names = explode(',', $existingEquipe);
        $names = array_map('trim', $names); // Remove espaços em branco
        if (!in_array(trim($nome), $names)) {
            $updatedEquipe = $existingEquipe . ', ' . $nome;
        } else {
            $updatedEquipe = $existingEquipe; // Nome já está na lista
        }
    } else {
        $updatedEquipe = $nome;
    }
    
    // Atualizar o banco de dados com o novo valor concatenado
    $update_funcionario = mysqli_query($conexao, "UPDATE servico SET equipe = '$updatedEquipe' WHERE id_servico = '$serviceId'");

    if ($update_funcionario) {
        header("Location: ../html/home_adm.php");
        exit();
    } else {
        echo "Erro ao atualizar o banco de dados: " . mysqli_error($conexao);
    }
} else {
    echo "Serviço não encontrado.";
}

?>
