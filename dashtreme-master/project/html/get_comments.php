<?php
include_once("../php/conexao.php");

$service_id = isset($_GET['service_id']) ? intval($_GET['service_id']) : 0;

$query = "SELECT * FROM comentario WHERE id_servico = $service_id";
$result = mysqli_query($conexao, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Aqui você deve buscar as informações do funcionário para mostrar no chat
        $funcionario_query = "SELECT * FROM funcionario WHERE id_funcionario = " . $row['id_funcionario'];
        $funcionario_result = mysqli_query($conexao, $funcionario_query);
        $funcionario = mysqli_fetch_assoc($funcionario_result);

        echo '<div class="card">
            <div class="card-header">
                <img src="' . $funcionario['foto_funcionario'] . '" width="30px" alt="Avatar"> ' . htmlspecialchars($funcionario['nome_funcionario']) . '
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>' . htmlspecialchars($row['comentario']) . '</p>
                </blockquote>
            </div>
        </div>';
    }
} else {
    echo 'Não há comentários para este serviço.';
}

mysqli_close($conexao);
?>
