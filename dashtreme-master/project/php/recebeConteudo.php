<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      include_once('conexao.php');
//    variavel          nome no form
      $nome_conteudo = $_POST['nome_conteudo'];
      $descricao = $_POST['descricao'];
      $id_setor = $_POST['id_setor'];

      $pdf = $_FILES['pdf']['tmp_name'];
      $pdf_destino = '../imagensBd/' . $_FILES['pdf']['name'];

      move_uploaded_file($pdf, $pdf_destino );

      $capa = $_FILES['capa']['tmp_name'];
      $capa_destino = '../imagensBd/' . $_FILES['capa']['name'];

      move_uploaded_file($capa, $capa_destino);

      $insere_conteudo = mysqli_query($conexao, "INSERT INTO conteudo (nome_conteudo, descricao, pdf, capa, id_setor) 
      VALUES ('$nome_conteudo', '$descricao', '$pdf_destino', '$capa_destino', '$id_setor')");

      if ($insere_conteudo) {
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
