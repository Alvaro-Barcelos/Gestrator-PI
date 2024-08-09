<?php
// Limpa qualquer saída anterior


// Seu código PHP para gerar o PDF
require_once('TCPDF/tcpdf.php');
include_once("../paginas/conexao.php"); // Inclua o arquivo de conexão com o banco de dados

$codigo = $_POST['id'];
// Consulta SQL para selecionar os veículos
$sql = "SELECT v.id_veiculo, v.Marca, v.Modelo, v.fabricacao, v.chassi, v.placa, v.tipo_combustivel, v.quilometragem, c.Nome_completo, c.cpf 
        FROM Cadastro_veiculo v 
        LEFT JOIN Condutor c ON v.id_veiculo = c.id_veiculo
        WHERE v.id_veiculo = '$codigo'";


// Executar a consulta
$resultado = mysqli_query($conexao, $sql);

// Iniciar o objeto TCPDF
$pdf = new TCPDF();

// Adicionar uma página ao PDF
$pdf->AddPage();

// Cabeçalho do PDF
$html = '<h1>Lista de Veículos</h1>';

// Loop para exibir os registros
while ($row = mysqli_fetch_assoc($resultado)) {
    $html .= '<hr>'; // Adiciona uma linha horizontal entre os veículos
    $html .= '<h2>ID: ' . $row['id_veiculo'] . '</h2>';
    $html .= '<p>Marca: ' . $row['Marca'] . '</p>';
    $html .= '<p>Modelo: ' . $row['Modelo'] . '</p>';
    $html .= '<p>Fabricação: ' . $row['fabricacao'] . '</p>';
    $html .= '<p>Chassi: ' . $row['chassi'] . '</p>';
    $html .= '<p>Placa: ' . $row['placa'] . '</p>';
    $html .= '<p>Tipo Combustível: ' . $row['tipo_combustivel'] . '</p>';
    $html .= '<p>Quilometragem: ' . $row['quilometragem'] . '</p>';
    $html .= '<p>Nome Completo: ' . $row['Nome_completo'] . '</p>';
    $html .= '<p>CPF: ' . $row['cpf'] . '</p>';
}

// Escrever o conteúdo HTML no PDF
$pdf->writeHTML($html, true, false, true, false, '');

//Limpa os dados anteriores
ob_end_clean();

// Saída do PDF para o navegador
$pdf->Output('lista_veiculos.pdf', 'I');

// Fechar a conexão com o banco de dados
mysqli_close($conexao);

// Termina o script aqui para evitar qualquer saída adicional
exit;
?>
