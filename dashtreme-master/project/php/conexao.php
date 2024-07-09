<?php

// Servidor Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestrator";


// Cria Conexão

$conexao = new mysqli($servername, $username, $password, $dbname);
           //mysqli_set_charset($conexao,"utf-8");

		   
// Verifica Conexão

if ($conexao->connect_error) {
                              die("Falha na Conexão com o BD: " . $conexao->connect_error);
                             } 
?> 