<?php

if (!isset($_SESSION)) {
    session_start();
}

// Verifica se o usuário não está logado
if (!isset($_SESSION['id_login'])) {
    header("Location: semLogin.html");
    exit(); // Garante que o script seja interrompido após o redirecionamento
}

// Verifica se o tipo de conta não é 'rh'
if ($_SESSION['tipo'] !== 'comum') {
    header("Location: restricao.html");
    exit(); // Garante que o script seja interrompido após o redirecionamento
}



?>