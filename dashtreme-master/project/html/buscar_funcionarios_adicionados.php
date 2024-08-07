<?php

include_once('../php/conexao.php');

$serviceId = $_GET['serviceId'];

// Buscar o campo equipe do serviço
$result = mysqli_query($conexao, "SELECT equipe FROM servico WHERE id_servico = '$serviceId'");
$row = mysqli_fetch_assoc($result);

$funcionarios = array();

if ($row && !empty($row['equipe'])) {
    $equipe = explode(',', $row['equipe']);
    $equipe = array_map('trim', $equipe); // Remove espaços em branco

    // Construir a consulta para buscar os dados dos funcionários
    $equipePlaceholders = implode("','", $equipe);
    $result = mysqli_query($conexao, "
        SELECT nome_funcionario, email, cargo
        FROM funcionario
        WHERE nome_funcionario IN ('$equipePlaceholders')
    ");

    while ($row = mysqli_fetch_assoc($result)) {
        $funcionarios[] = $row;
    }
}else{
    echo'Ainda não funcionarios cadastrados a este serviço';
}

echo json_encode($funcionarios);

?>
