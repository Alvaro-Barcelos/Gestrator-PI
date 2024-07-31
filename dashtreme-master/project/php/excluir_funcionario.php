<?php

include_once("conexao.php");

$id_funcionario = mysqli_real_escape_string($conexao, $_POST['id']);

$exclui = mysqli_query($conexao, "DELETE FROM funcionario WHERE id_funcionario = '$id_funcionario'");



if ($exclui) {
  echo '    <div class="mb-32">';
  echo '      <h1 class="text-5xl text-greenF">EXCLUIDO COM SUCESSO!</h1>';
  echo '      <div class="mt-20 text-center">';
  echo '        <a href="../html/RECURSOS_HUMANOS/listar_funcionario.php"<button class="botao">Voltar ao Início</button></a>';    /* o css do botao está no css interno */
  echo '      </div>';
  echo '    </div>';
} else {
  echo "<div class='retornos'>";
  echo "<h2> Ocorreu um erro ao inserir os dados. Por favor, tente novamente. </h2>";
  echo "</div>";
}

mysqli_close($conexao);
?>