<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id_login']) || $_SESSION['tipo_conta'] !== 'gerente'){
        header("Location: ../../html/index.html");
    }

?>