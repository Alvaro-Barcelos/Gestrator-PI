<?php
include_once("conexao.php");


// Obtém os valores dos campos do formulário
$id_funcionario = mysqli_real_escape_string($conexao, $_POST['id_funcionario']);
$nome_funcionario = mysqli_real_escape_string($conexao, $_POST['nome_funcionario']);
$data_nascimento = mysqli_real_escape_string($conexao, $_POST['data_nascimento']);
$cargo = mysqli_real_escape_string($conexao, $_POST['cargo']);
$salario = mysqli_real_escape_string($conexao, $_POST['salario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$celular = mysqli_real_escape_string($conexao, $_POST['celular']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$foto_funcionario = mysqli_real_escape_string($conexao, $_POST['foto_funcionario']);

// Verifica se todos os valores foram corretamente recebidos

    // Atualiza os dados no banco de dados
    $consulta = mysqli_query($conexao, "UPDATE funcionario SET 
        nome_funcionario = '$nome_funcionario',
        data_nascimento = '$data_nascimento',
        cargo = '$cargo',
        salario = '$salario',
        email = '$email',
        celular = '$celular',
        cidade = '$cidade',
        endereco = '$endereco',
        foto_funcionario = '$foto_funcionario'
    WHERE id_funcionario = '$id_funcionario'");
                
    // Verifica se a consulta foi bem-sucedida
    if ($consulta) {
        header("Location: ../html/editadoSucesso.html");;
    } else {
        echo "<h2> Ocorreu um erro ao atualizar os dados. Por favor, tente novamente. </h2>";
    }


// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
