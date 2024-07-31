
<?php
include_once("../php/conexao.php");

$query = $_GET['query'];

$sql = "SELECT nome_funcionario FROM funcionario WHERE nome_funcionario LIKE ?";
$stmt = $conexao->prepare($sql);
$searchQuery = "%$query%";
$stmt->bind_param("s", $searchQuery);
$stmt->execute();
$result = $stmt->get_result();

$funcionarios = [];
while ($row = $result->fetch_assoc()) {
    $funcionarios[] = $row;
}

echo json_encode($funcionarios);

$stmt->close();
$conexao->close();
?>
