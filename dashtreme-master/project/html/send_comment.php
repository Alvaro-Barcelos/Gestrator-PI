<?php
include_once("../php/conexao.php");

$service_id = isset($_POST['service_id']) ? intval($_POST['service_id']) : 0;
$comment = isset($_POST['comment']) ? mysqli_real_escape_string($conexao, $_POST['comment']) : '';
$id_funcionario = 1; // Alterar conforme necessário para obter o ID do funcionário logado

if ($service_id > 0 && !empty($comment)) {
    $query = "INSERT INTO comentario (comentario, id_funcionario, id_servico) VALUES ('$comment', $id_funcionario, $service_id)";
    $result = mysqli_query($conexao, $query);

    if ($result) {
        echo 'Comentário adicionado com sucesso!';
    } else {
        echo 'Erro ao adicionar comentário.';
    }
} else {
    echo 'Dados inválidos.';
}

mysqli_close($conexao);
?>
