<?php
include_once("../php/conexao.php");

$id_servico = $_POST['id_servico'];
$prioridade = $_POST['prioridade'];

$sql = "UPDATE servico SET prioridade = '$prioridade' WHERE id_servico = $id_servico";
if (mysqli_query($conexao, $sql)) {
    echo "Prioridade atualizada com sucesso!";
} else {
    echo "Erro ao atualizar a prioridade: " . mysqli_error($conexao);
}
?>
