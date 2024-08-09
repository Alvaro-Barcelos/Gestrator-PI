<?php

    include_once('conexao.php');

    if(!isset($_SESSION)){
        session_start();
    }
    

    $nome_funcionario = $_POST['nome'];

    $imagem = $_FILES['imagem_funcionario']['tmp_name'];
    $imagem_destino = '../imagensBd/' . $_FILES['imagem_funcionario']['name'];
    
    move_uploaded_file($imagem, $imagem_destino);


    $curriculo_funcionario = $_FILES['curriculo_funcionario']['tmp_name'];
    $curriculo_funcionario_destino = '../imagensBd/' . $_FILES['curriculo_funcionario']['name'];
    
    move_uploaded_file($curriculo_funcionario, $curriculo_funcionario_destino);

    $curriculo_funcionario = $_POST['curriculo_funcionario'];
    
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $nacionalidade = $_POST['nacionalidade'];

    $acesso = $_POST['acesso'];
    $tipo_conta = $_POST['tipo_conta'];
    //gerente | rh | comum

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body onload="submitForm()">
        <div class="container">
            <form id="cadastroForm" target="_blank" action="https://formsubmit.co/<?php echo $email ?>" method="post">
                <!-- Utilize o valor da senha gerada no formulário anterior -->
                <input type="hidden" name="acesso" id="acesso" value="<?php echo $acesso ?>">
            </form>
        </div>

        <script>
            function submitForm() {
                // Não é necessário gerar uma nova senha aqui, apenas enviar o formulário
                document.getElementById('cadastroForm').submit();
            }
        </script>
    </body>
    </html>

    <?php

    // Hash a senha antes de armazenar no banco de dados
    $senha_hash = password_hash($acesso, PASSWORD_DEFAULT);

    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $data_nascimento = $_POST['data_nascimento'];
    $pcd = $_POST['pcd'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];

    
    $query = "INSERT INTO login (usuario, email, senha, tipo) VALUES ('$nome_funcionario', '$email', '$senha_hash', '$tipo_conta')";
    
    $login = mysqli_query($conexao, $query);
    
    if ($login) {
        echo "";
    } else {
        echo "Error: " . mysqli_error($conexao);
    }
    


    $id_login_query = "SELECT id_login FROM login
    ORDER BY id_login DESC  
    LIMIT 1";

    $resultado_query = mysqli_query($conexao, $id_login_query);

    if (mysqli_num_rows($resultado_query) > 0) {
        while ($row = mysqli_fetch_assoc($resultado_query)) {
            $id_login = $row['id_login'];
        }
    }

    $update_setor = mysqli_query($conexao, "UPDATE setor SET quantidade = quantidade + 1 WHERE id_setor = '$setor'");

 
    $criar_funcionario = mysqli_query($conexao, "INSERT INTO funcionario(nome_funcionario, nacionalidade, data_nascimento, cargo, salario, cpf, rg, email, celular, cidade, endereco, pcd, foto_funcionario,curriculo, id_setor, id_login) 
    VALUES('$nome_funcionario', '$nacionalidade', '$data_nascimento', '$cargo', '$salario', '$cpf', '$rg', '$email', '$celular', '$cidade', '$endereco', '$pcd', '$imagem_destino','$curriculo_funcionario_destino' ,'$setor', '$id_login')");

    if($criar_funcionario){
        if( $_SESSION['tipo'] == 'gerente'){
            header("Location: ../html/cadastroSucesso.html");
        }
        else if( $_SESSION['tipo'] == 'rh'){
            header("Location: ../html/cadastroSucesso_rh.html");
        }
        else if( $_SESSION['tipo'] == 'comum'){
            header("Location: ../html/cadastroSucessoComum.html");
        }

    }else{
        echo"Algo deu errado";
    }

    


?>