<?php
include_once("../php/conexao.php");

$id_servico = $_POST['id_servico'];
$situacao = $_POST['situacao'];

$sql = "UPDATE servico SET situacao = '$situacao' WHERE id_servico = $id_servico";
if (mysqli_query($conexao, $sql)) {
    echo "Situação atualizada com sucesso!";
} else {
    echo "Erro ao atualizar a situação: " . mysqli_error($conexao);
}
?>
