<?php
// Limpa qualquer saída anterior


// Seu código PHP para gerar o PDF
require_once('TCPDF/tcpdf.php');
include_once("../conexao.php"); // Inclua o arquivo de conexão com o banco de dados

$codigo = $_POST['id'];
// Consulta SQL para selecionar os veículos
$sql = "SELECT * FROM servico WHERE id_servico = '$codigo'";


// Executar a consulta
$resultado = mysqli_query($conexao, $sql);

// Iniciar o objeto TCPDF
$pdf = new TCPDF();

// Adicionar uma página ao PDF
$pdf->AddPage();

// Cabeçalho do PDF
$html = '<h1>Relatório</h1>';

// Loop para exibir os registros
while ($row = mysqli_fetch_assoc($resultado)) {
    $html .= '<hr>'; // Adiciona uma linha horizontal entre os veículos
    $html .= '<h2>ID: ' . $row['id_servico'] . '</h2>';
    $html .= '<p>Nome Serviço: ' . $row['nome_servico'] . '</p>';
    $html .= '<p>Descrição: ' . $row['descricao'] . '</p>';
    $html .= '<p>Data Criada: ' . $row['data_criada'] . '</p>';
    $html .= '<p>Data Final: ' . $row['data_final'] . '</p>';
    $html .= '<p>Situação: ' . $row['situacao'] . '</p>';
    $html .= '<p>Prioridade: ' . $row['prioridade'] . '</p>';
    $html .= '<p>Observação: ' . $row['observacao'] . '</p>';
    $html .= '<p>Equipe: ' . $row['equipe'] . '</p>';
}

// Escrever o conteúdo HTML no PDF
$pdf->writeHTML($html, true, false, true, false, '');

//Limpa os dados anteriores
ob_end_clean();

// Saída do PDF para o navegador
$pdf->Output('Relatório.pdf', 'I');

// Fechar a conexão com o banco de dados
mysqli_close($conexao);

// Termina o script aqui para evitar qualquer saída adicional
exit;
?>
