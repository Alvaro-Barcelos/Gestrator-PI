<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['id_login']) || $_SESSION['tipo_conta'] !== 'supervisor'){
        header("Location: restricao.html");
    }

?>