<?php
// Arquivo recebeConteudo.php

// Inclui o arquivo de conexão
include 'conexao.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $content_name = $_POST['content_name'];
    $content_description = $_POST['content_description'];
    $setor = $_POST['input-2']; // Id do setor selecionado

    // Processa o upload do PDF e da imagem
    $content_pdf = $_FILES['content_pdf']['name'];
    $content_image = $_FILES['content_image']['name'];
    $pdf_temp = $_FILES['content_pdf']['tmp_name'];
    $image_temp = $_FILES['content_image']['tmp_name'];

    // Move os arquivos para o diretório desejado (exemplo)
    move_uploaded_file($pdf_temp, "caminho/para/salvar/pdf/" . $content_pdf);
    move_uploaded_file($image_temp, "caminho/para/salvar/imagem/" . $content_image);

    // Prepara a query de inserção
    $sql = "INSERT INTO conteudo (nome_conteudo, descricao, pdf, capa, id_setor)
            VALUES (?, ?, ?, ?, ?)";

    // Prepara a declaração SQL com prepared statement
    $stmt = $conexao->prepare($sql);

    // Vincula parâmetros
    $stmt->bind_param("ssssi", $content_name, $content_description, $content_pdf, $content_image, $setor);

    // Executa a query
    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
