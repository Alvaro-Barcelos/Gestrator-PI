<?php

    include_once('conexao.php');

    $observacao = $_POST['observacao'];

    $enviar_observacao = mysqli_query($conexao, "INSERT INTO servico(observacao) 
    VALUES('$observacao')");

?>