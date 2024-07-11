<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      include_once('../conexao.php');
//    variavel          nome no form
      $nome = $_POST['nome'];
      $descricao = $_POST['descricao'];
      $quantidade = $_POST['quantidade'];
      $preco = $_POST['preco'];

      $foto_produto = $_FILES['foto_produto']['tmp_name'];
      $foto_produto_destino = '../imagensDinamicas/' . $_FILES['foto_produto']['name'];

      move_uploaded_file($foto_produto, $foto_produto_destino);

      $insere_produto = mysqli_query($conexao, "INSERT INTO produto (nome_produto, descricao, quantidade, preco,  foto_produto) 
          VALUES ('$produto', '$descricao', $quantidade, $preco,  '$foto_produto_destino')");

      if ($insere_produto) {
        echo '    <div class="mb-32">';
        echo '      <h1 class="text-5xl text-greenF">INSERIDO COM SUCESSO!</h1>';
        echo '      <div class="mt-20 text-center">';
        echo '        <a href="../../html/agenda/pagina.php"<button class="botao">Voltar ao Início</button></a>';    /* o css do botao está no css interno */
        echo '      </div>';
        echo '    </div>';
      } else {
        echo "<div class='retornos'>";
        echo "<h2> Ocorreu um erro ao inserir os dados. Por favor, tente novamente. </h2>";
        echo "</div>";
      }
      ?>
    </div>
  </main>
</body>

</html>
</body>
</html>
